@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Profile')
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
                            <a href="{{ route('user.home') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Profile
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
            <div class="pd-20 card-box height-100-p">
                <div class="profile-photo">
                    <img src="/asset_pnj/Logo_pnj_icon.jpg" alt="" class="avatar-photo" id="userProfilePicture">
                </div>
                <h5 class="text-center h5 mb-0" id="userProfileName">{{ $user->name }}</h5>
                <p class="text-center text-muted font-14" id="userProfileEmail">
                    {{ $user->email }}
                </p>
            </div>
        </div>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
            <div class="card-box height-100-p overflow-hidden">
                @livewire('user-profile-tabs')
            </div>
        </div>
    </div>

@endsection
@push('scripts')
    <script type="text/javascript">
        window.addEventListener('updateUserInfo', function(event) {
            $('#userProfileName').html(event.detail[0].userName);
            $('#userProfileEmail').html(event.detail[0].userEmail);
        });
    </script>
@endpush
