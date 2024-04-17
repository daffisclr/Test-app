@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Kuesioner')
@section('content')
    <form action="{{ route('admin.kuesioner-form') }}" method="post">
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
    </form>
@endsection
