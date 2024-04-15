@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Home')
@section('content')

    <div class="row mb-2">
        <div class="col-12 col-sm-4">
            @livewire('broadcast-email')
        </div>
    </div>

    <div class="row">
        Content Here...
    </div>
@endsection
