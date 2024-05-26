<div>

    @if (Auth::guard('user')->check())
        <div class="user-info-dropdown">
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                    <span class="user-icon">
                        <img src="{{ $user->picture }}" alt="" />
                    </span>
                    <span class="user-name">{{ $user->name }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                    <a class="dropdown-item" href="{{ route('user.profile') }}"><i class="dw dw-user1"></i> Profile</a>
                    <a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
                    <a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a>

                    <a class="dropdown-item" href="{{ route('user.logout_handler') }}"
                        onclick="event.preventDefault();document.getElementById('userLogoutForm').
                        submit();"><i
                            class="dw dw-logout"></i> Log Out </a>

                    <form action="{{ route('user.logout_handler') }}" id="userLogoutForm" method="POST">@csrf</form>
                </div>
            </div>
        </div>
    @elseif (Auth::guard('alumni')->check())
        <div class="user-info-dropdown">
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                    <span class="user-icon">
                        <img src="/back/vendors/images/photo1.jpg" alt="" />
                    </span>
                    <span class="user-name">{{ $user->name }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                    <a class="dropdown-item" href=""><i class="dw dw-user1"></i> Profile</a>
                    <a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
                    <a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a>
                    <a class="dropdown-item" href="login.html"><i class="dw dw-logout"></i> Log Out</a>
                </div>
            </div>
        </div>
    @endif

</div>
