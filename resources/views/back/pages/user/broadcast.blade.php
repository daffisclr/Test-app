@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Broadcast Email')
@section('content')
    <div class="page-header">
        <form action="{{ route('user.broadcast-action') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label>Emails :</label>
                        <input type="text" id="email" name="email" class="w-100" data-role="tagsinput" />
                    </div>
                </div>

                {{-- <div class="col-sm-6 col-12">
                    <div class="form-group">
                        <label>Email Groups :</label>
                        <div class="custom-control custom-checkbox mb-5">
                            <input id="email_group" type="checkbox" class="custom-control-input" id="customCheck2" />
                            <label class="custom-control-label" for="customCheck2">Alumni</label>
                        </div>
                    </div>
                </div> --}}

                <div class="col-12 d-flex justify-content-center mt-2">
                    <button class="btn btn-primary" type="submit">
                        Broadcast Email
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
