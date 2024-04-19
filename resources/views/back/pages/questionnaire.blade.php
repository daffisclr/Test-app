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
            <form class="tab-wizard1 wizard-circle wizard" method="POST">
                <!-- Step 1 -->
                <h5>Informasi Alumni JTIK</h5>
                <section>
                    @livewire('questionnaire', ['questions' => $questions, 'step' => 1])
                </section>
                <!-- Step 2 -->
                <h5>Job Status</h5>
                <section>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Job Title :</label>
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Company Name :</label>
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Job Description :</label>
                                <textarea class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Step 3 -->
                <h5>Interview</h5>
                <section>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Interview For :</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Interview Type :</label>
                                <select class="form-control select2">
                                    <option>Normal</option>
                                    <option>Difficult</option>
                                    <option>Hard</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Interview Date :</label>
                                <input type="text" class="form-control date-picker" placeholder="Select Date" />
                            </div>
                            <div class="form-group">
                                <label>Interview Time :</label>
                                <input class="form-control time-picker" placeholder="Select time" type="text" />
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Step 4 -->
                <h5>Remark</h5>
                <section>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Behaviour :</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Confidance</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Result</label>
                                <select class="form-control select2">
                                    <option>Select Result</option>
                                    <option>Selected</option>
                                    <option>Rejected</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Comments</label>
                                <textarea class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </section>
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
                    $.ajax({
                        url: 'kuesioner-form',
                        type: 'post',
                        data: {
                            "_token": "{{ csrf_token() }}",
                        },
                        beforeSend: function() {},
                        success: function(html) {
                            console.log(html);
                        }
                    });
                }
            });
        })
    </script>
@endpush
