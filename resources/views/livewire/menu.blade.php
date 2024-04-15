<div>
    @foreach ($main_modules as $module)
        <li>
            <a href="{{ route($module->url) }}" class="dropdown-toggle no-arrow">
                <span class="micon fa {{ $module->icon }}"></span><span class="mtext">{{ $module->name }}
                </span>
            </a>
        </li>
    @endforeach

    @foreach ($sub_menus as $menu)
        @if ($menu['valid_status'] == 1 && $menu['valid'] == 1)
            <li>
                <div class="dropdown-divider"></div>
            </li>
            <li>
                <div class="sidebar-small-cap">{{ $menu['name'] }}</div>
            </li>
            @foreach ($menu['submenu'] as $submenu)
                @if ($submenu['valid_status'] == 1 && $submenu['valid'] == 1)
                    <li>
                        <a href="{{ route($submenu['url']) }}" class="dropdown-toggle no-arrow">
                            <span class="micon fa {{ $submenu['icon'] }}"></span>
                            <span class="mtext">{{ $submenu['name'] }} </span>
                        </a>
                    </li>
                @endif
            @endforeach
        @endif
    @endforeach
</div>
