@extends('back.layout.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'User Register')
@section('content')
    <div class="login-box bg-white box-shadow border-radius-10">
        <div class="login-title">
            <h2 class="text-center text-primary">Register Alumni</h2>
        </div>
        <form action="" method="POST">
            @csrf
            @if (Session::get('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail') }}

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="input-group custom">
                <input type="text" class="form-control form-control-lg" placeholder="Nama lengkap" name="name"
                    value="" />
                <div class="input-group-append custom">
                    <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                </div>
            </div>
            <div class="input-group custom">
                <input type="number" class="form-control form-control-lg" placeholder="NIM" name="username"
                    value="" />
                <div class="input-group-append custom">
                    <span class="input-group-text"><i class="icon-copy dw dw-id-card"></i></span>
                </div>
            </div>
            <div class="input-group custom">
                <input type="text" class="form-control form-control-lg" placeholder="Alamat Email" name="email"
                    value="" />
                <div class="input-group-append custom">
                    <span class="input-group-text"><i class="icon-copy dw dw-mail"></i></span>
                </div>
            </div>
            <div class="input-group custom">
                <input type="number" class="form-control form-control-lg" placeholder="Nomor Telpon" name="phone_number"
                    value="" />
                <div class="input-group-append custom">
                    <span class="input-group-text"><i class="icon-copy dw dw-phone-call"></i></span>
                </div>
            </div>
            <div class="input-group custom">
                <input type="password" class="form-control form-control-lg" placeholder="**********" name="password" />
                <div class="input-group-append custom">
                    <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="input-group mb-0">

                        <input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">

                        {{-- <a class="btn btn-primary btn-lg btn-block" href="index.html">Sign In</a> --}}
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
