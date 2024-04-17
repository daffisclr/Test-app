@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Kuesioner')
@section('content')

    <div class="page-header">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title">
                    <h4>Profile</h4>
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
            <form class="tab-wizard wizard-circle wizard">
                <h5>Informasi Alumni JTIK</h5>
                <section>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>First Name :</label>
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Last Name :</label>
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email Address :</label>
                                <input type="email" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phone Number :</label>
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Select City :</label>
                                <select class="custom-select form-control">
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
                                <input type="text" class="form-control date-picker" placeholder="Select Date" />
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
                                <select class="form-control">
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
                                <select class="form-control">
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

    {{-- <form action="{{ route('admin.kuesioner-form') }}" method="post">
        @csrf

        <div class="col-sm-12">
            <div class="row form-group">
                <label for="q1" class="col-sm-4 form-label required">Question 1</label>
                <input type="text" class="col-sm-8 form-control" name="q1" id="q1">
            </div>

            <div class="row form-group">
                <label for="q2" class="col-sm-4 form-label required">Question 2</label>
                <input type="text" class="col-sm-8 form-control" name="q2" id="q2">
            </div>

            <div class="row form-group">
                <label for="q3" class="col-sm-4 form-label required">Question 3</label>
                <input type="text" class="col-sm-8 form-control" name="q3" id="q3">
            </div>
        </div>
    </form> --}}
@endsection
