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
                {{-- Changes made to the questions, must be reflected to the question table --}}
                <div class="tab-wizard1 wizard-circle wizard">
                    <!-- Step 1 -->
                    <h5>Informasi Alumni JTIK</h5>
                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>First Name :</label>
                                    <input type="text" id="first_name" name="first_name" class="form-control"
                                        placeholder="Input First Name" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Last Name :</label>
                                    <input type="text" id="last_name" name="last_name" class="form-control"
                                        placeholder="Input Last Name" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email Address :</label>
                                    <input type="email" id="email" name="email" class="form-control"
                                        placeholder="Input Email Address" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone Number :</label>
                                    <input type="text" id="phone" name="phone" class="form-control"
                                        placeholder="Input Phone Number" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select City :</label>
                                    <select id="city" name="city" class="custom-select form-control">
                                        <option value="">Select City</option>
                                        <option value="Amsterdam">India</option>
                                        <option value="Berlin">UK</option>
                                        <option value="Frankfurt">US</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Date of Birth :</label>
                                    <input type="text" id="birth" name="birth" class="form-control date-picker"
                                        placeholder="Select Date" />
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Step 2 -->
                    <h5>Job Status</h5>
                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Job Title :</label>
                                    <input type="text" id="job_title" name="job_title" class="form-control"
                                        placeholder="Input Job Title" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Company Name :</label>
                                    <input type="text" id="company" name="company" class="form-control"
                                        placeholder="Input Company Name" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Job Description :</label>
                                    <textarea id="job_description" name="job_description" class="form-control" placeholder="Input Job Description"></textarea>
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
                                    <input type="text" id="interview" name="interview" class="form-control"
                                        placeholder="Input Interview For" />
                                </div>
                                <div class="form-group">
                                    <label>Interview Type :</label>
                                    <select id="interview_type" name="interview_type" class="form-control select2">
                                        <option>Normal</option>
                                        <option>Difficult</option>
                                        <option>Hard</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Interview Date :</label>
                                    <input type="text" id="interview_date" name="interview_date"
                                        class="form-control date-picker" placeholder="Select Date" />
                                </div>
                                <div class="form-group">
                                    <label>Interview Time :</label>
                                    <input id="interview_time" name="interview_time" class="form-control time-picker"
                                        placeholder="Select time" type="text" />
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
                                    <input type="text" id="behaviour" name="behaviour" class="form-control"
                                        placeholder="Input Behaviour" />
                                </div>
                                <div class="form-group">
                                    <label>Confidance :</label>
                                    <input type="text" id="confidance" name="confidance" class="form-control"
                                        placeholder="Input Confidance" />
                                </div>
                                <div class="form-group">
                                    <label>Result :</label>
                                    <select id="result" name="result" class="form-control select2">
                                        <option value="">Select Result</option>
                                        <option value="Selected">Selected</option>
                                        <option value="Rejected">Rejected</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Comments :</label>
                                    <textarea id="comments" name="comments" class="form-control" placeholder="Input Comments"></textarea>
                                </div>
                            </div>
                        </div>
                    </section>
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
