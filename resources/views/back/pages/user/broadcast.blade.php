@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Broadcast Email')
@section('content')
    <div class="page-header">
        <form action="{{ route('user.broadcast-action') }}" method="POST">
            @csrf
            <div class="row">
                <div class="row form-group">
                    <label class="col-12 col-sm-3 required-field">Email Pengguna Alumni</label>
                    <div class="col-12 col-sm-9">
                        <input type="text" id="p_email" name="email" class="form-control" required />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-12 col-sm-3 required-field">Nama Pengguna Alumni</label>
                    <div class="col-12 col-sm-9">
                        <input type="text" id="p_nama" name="nama" class="form-control" required />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-12 col-sm-3 required-field">Nama Perusahaan Pengguna Alumni</label>
                    <div class="col-12 col-sm-9">
                        <input type="text" id="p_perusahaan" name="perusahaan"
                            class="form-control" required /></div>
                </div>

                <div class="form-group row">
                    <label class="col-12 col-sm-3 required-field">Jabatan Pengguna Alumni</label>
                    <div class="col-12 col-sm-9">
                        <input type="text" id="p_jabatan" name="jabatan" class="form-control" required />
                    </div>
                </div>

                <div class="col-12 d-flex justify-content-center mt-2">
                    <button class="btn btn-primary" type="submit">
                        Invite Pengguna Alumni
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
