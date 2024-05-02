@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Kuesioner')
@section('content')

    <div class="page-header">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title">
                    <h4>Kuesioner</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.home') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Form Kuesioner
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <h4 class="text-blue h4">Kuesioner Tracer Study</h4>
            {{-- <p class="mb-30">jQuery Step wizard</p> --}}
        </div>
        <div class="wizard-content">
            <form id="kuesioner">
                <div class="tab-wizard1 wizard-circle wizard">
                    <!-- Step 1 -->
                    <h5>Informasi Alumni JTIK</h5>
                    @livewire('kuesioner.kuesioner1')
                    <!-- Step 2 -->
                    <h5>Kuesioner Wajib</h5>
                    @livewire('kuesioner.kuesioner2')
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            var APP_URL = {!! json_encode(url('/')) !!}

            $(".tab-wizard1").steps({
                headerTag: "h5",
                bodyTag: "section",
                transitionEffect: "fade",
                titleTemplate: '<span class="step">#index#</span> #title#',
                labels: {
                    finish: "Submit"
                },
                onStepChanged: function(event, currentIndex, priorIndex) {
                    $('.steps .current').prevAll().addClass('disabled');
                },
                onFinished: function(event, currentIndex) {
                    var inputs = $('#kuesioner :input');
                    var values = {
                        "_token": "{{ csrf_token() }}",
                    };

                    inputs.each(function() {
                        values[this.name] = $(this).val();
                    });

                    $.ajax({
                        url: 'kuesioner-form',
                        type: 'post',
                        data: values,
                        beforeSend: function() {},
                        success: function(res) {
                            console.log(res);
                            location.reload()
                        },
                        error: function(error) {
                            var err = JSON.parse(error.responseText)
                            console.error('Errors', err);

                            inputs.each(function() {
                                $('#' + this.name + '_errors').remove()
                                if (err.errors[this.name])
                                    $(this).after('<div id="' + this.name +
                                        '_errors" class="text-danger">' + err
                                        .errors[this.name] + '</div>')
                            });
                        }
                    });
                }
            });
        })
    </script>
@endpush
