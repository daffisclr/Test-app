@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Hasil Kuesioner Tracer Study')
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
                            Tracer Study Overview
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    {{-- Status Alumni --}}
    <div class="bg-white pd-20 card-box mb-30">
        <div id="chart5" data-highcharts-chart="3">
            <div id="highcharts-httii7y-11" dir="ltr" class="highcharts-container "
                style="position: relative; overflow: hidden; width: 1008px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                <svg version="1.1" class="highcharts-root"
                    style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                    xmlns="http://www.w3.org/2000/svg" width="1008" height="400" viewBox="0 0 1008 400">
                    <desc>Created with Highcharts 6.0.7</desc>
                    <defs>
                        <clipPath id="highcharts-httii7y-12">
                            <rect x="0" y="0" width="988" height="301" fill="none"></rect>
                        </clipPath>
                    </defs>
                    <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1008" height="400"
                        rx="0" ry="0"></rect>
                    <rect fill="none" class="highcharts-plot-background" x="10" y="46" width="988" height="301">
                    </rect>
                    <g class="highcharts-pane-group"></g>
                    <rect fill="none" class="highcharts-plot-border" x="10" y="46" width="988" height="301"></rect>
                    <g class="highcharts-series-group">
                        <g class="highcharts-series highcharts-series-0 highcharts-pie-series  highcharts-tracker"
                            transform="translate(10,46) scale(1 1)">
                            <path fill="#90ed7d" visibility="hidden"
                                d="M 551.2112025907363 67.23772676550085 A 114.5 114.5 0 0 1 592.0672062986445 135.55067862391692 L 591.0840865929795 135.7336421293849 A 113.5 113.5 0 0 0 550.5849038781535 68.01730993785456 Z"
                                class="highcharts-halo highcharts-color-2" fill-opacity="0.25"></path>
                            <path fill="#7cb5ec"
                                d="M 493.9766794181769 42.00000237488884 A 114.5 114.5 0 0 1 516.6125485837903 44.25507741307081 L 494 156.5 A 0 0 0 0 0 494 156.5 Z"
                                transform="translate(0,0)" stroke="#ffffff" stroke-width="1" stroke-linejoin="round"
                                class="highcharts-point highcharts-color-0"></path>
                            <path fill="#434348"
                                d="M 516.7247821813963 44.27774608034245 A 114.5 114.5 0 0 1 565.6219044767805 67.16606020599488 L 494 156.5 A 0 0 0 0 0 494 156.5 Z"
                                transform="translate(0,0)" stroke="#ffffff" stroke-width="1" stroke-linejoin="round"
                                class="highcharts-point highcharts-color-1 "></path>
                            <path fill="#90ed7d"
                                d="M 565.7112025907363 67.23772676550085 A 114.5 114.5 0 0 1 606.5672062986445 135.55067862391692 L 494 156.5 A 0 0 0 0 0 494 156.5 Z"
                                transform="translate(0,0)" stroke="#ffffff" stroke-width="1" stroke-linejoin="round"
                                class="highcharts-point highcharts-color-2 "></path>
                            <path fill="#f7a35c"
                                d="M 606.5880993329306 135.66325628611418 A 114.5 114.5 0 0 1 583.1758917393926 228.3185932226756 L 494 156.5 A 0 0 0 0 0 494 156.5 Z"
                                transform="translate(0,0)" stroke="#ffffff" stroke-width="1" stroke-linejoin="round"
                                class="highcharts-point highcharts-color-3"></path>
                            <path fill="#8085e9"
                                d="M 583.1040285701974 228.40773319025874 A 114.5 114.5 0 0 1 486.08250262910985 270.72593066104537 L 494 156.5 A 0 0 0 0 0 494 156.5 Z"
                                transform="translate(0,0)" stroke="#ffffff" stroke-width="1" stroke-linejoin="round"
                                class="highcharts-point highcharts-color-4 "></path>
                            <path fill="#f15c80"
                                d="M 485.9682806762349 270.7179560520335 A 114.5 114.5 0 0 1 385.55235819459233 193.2336220218753 L 494 156.5 A 0 0 0 0 0 494 156.5 Z"
                                transform="translate(0,0)" stroke="#ffffff" stroke-width="1" stroke-linejoin="round"
                                class="highcharts-point highcharts-color-5"></path>
                            <path fill="#e4d354"
                                d="M 385.5156788025091 193.12515603133505 A 114.5 114.5 0 0 1 398.12521108849074 93.90387511056662 L 494 156.5 A 0 0 0 0 0 494 156.5 Z"
                                transform="translate(-10,-1)" stroke="#ffffff" stroke-width="1" stroke-linejoin="round"
                                class="highcharts-point highcharts-point-select highcharts-color-6"></path>
                            <path fill="#2b908f"
                                d="M 398.18785514033794 93.80803163569409 A 114.5 114.5 0 0 1 493.8409617970908 42.000110450489885 L 494 156.5 A 0 0 0 0 0 494 156.5 Z"
                                transform="translate(0,0)" stroke="#ffffff" stroke-width="1" stroke-linejoin="round"
                                class="highcharts-point highcharts-color-7"></path>
                        </g>
                        <g class="highcharts-markers highcharts-series-0 highcharts-pie-series "
                            transform="translate(10,46) scale(1 1)"></g>
                    </g><text x="504" text-anchor="middle" class="highcharts-title"
                        style="color:#333333;font-size:18px;fill:#333333;" y="24">
                        <tspan>Status Alumni</tspan>
                    </text><text x="504" text-anchor="middle" class="highcharts-subtitle"
                        style="color:#666666;fill:#666666;" y="45"></text>
                    <g class="highcharts-data-labels highcharts-series-0 highcharts-pie-series  highcharts-tracker"
                        transform="translate(10,46) scale(1 1)" opacity="1" visibility="visible">
                        <path fill="none" class="highcharts-data-label-connector highcharts-color-0" stroke="#7cb5ec"
                            stroke-width="1"
                            d="M 513.398981759681 12 C 508.39898175968096 12 506.60533697300775 30.62960840691356 506.00745537745007 36.59974555757379 L 505.4095737818924 42.56988270823402">
                        </path>
                        <path fill="none" class="highcharts-data-label-connector highcharts-color-1" stroke="#434348"
                            stroke-width="1"
                            d="M 578.7496081495076 36 C 573.7496081495076 36 547.6875479235964 41.95788024507516 545.1411029627934 47.390708059538 L 542.5946580019904 52.82353587400084">
                        </path>
                        <path fill="none" class="highcharts-data-label-connector highcharts-color-2" stroke="#90ed7d"
                            stroke-width="1"
                            d="M 623.0412557139705 82.37836428611823 C 618.0412557139705 82.37836428611823 602.5897498118841 91.61150921933533 597.439247844522 94.68922419707437 L 592.28874587716 97.7669391748134">
                        </path>
                        <path fill="none" class="highcharts-data-label-connector highcharts-color-3" stroke="#f7a35c"
                            stroke-width="1"
                            d="M 639.0839458220945 191.95050243526154 C 634.0839458220945 191.95050243526154 616.6340425362972 187.53452289315283 610.8174081076982 186.06252971244993 L 605.0007736790991 184.59053653174703">
                        </path>
                        <path fill="none" class="highcharts-data-label-connector highcharts-color-4" stroke="#8085e9"
                            stroke-width="1"
                            d="M 556.7228097378314 288.97009940348846 C 551.7228097378314 288.97009940348846 544.5324251338109 272.4686337338498 542.135630265804 266.96814517730354 L 539.7388353977972 261.4676566207573">
                        </path>
                        <path fill="none" class="highcharts-data-label-connector highcharts-color-5" stroke="#f15c80"
                            stroke-width="1"
                            d="M 400.7138137348428 270.89317861985467 C 405.7138137348428 270.89317861985467 416.7114009512638 256.643509310807 420.37726335673744 251.89361954112448 L 424.0431257622111 247.14372977144194">
                        </path>
                        <path fill="none" class="highcharts-data-label-connector highcharts-color-6" stroke="#e4d354"
                            stroke-width="1"
                            d="M 345.6580003616017 138.242915356897 C 350.6580003616017 138.242915356897 368.5137511816098 140.51715427437696 374.4656681216125 141.27523391353694 L 380.4175850616152 142.0333135526969">
                        </path>
                        <path fill="none" class="highcharts-data-label-connector highcharts-color-7" stroke="#2b908f"
                            stroke-width="1"
                            d="M 420.2657956746407 29.394299279065535 C 425.2657956746407 29.394299279065535 433.82784188818033 45.22753535502969 436.6818572926935 50.50528071368441 L 439.5358726972067 55.783026072339126">
                        </path>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 "
                            transform="translate(518,2)"><text x="5"
                                style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16">
                                <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                    stroke-width="2px" stroke-linejoin="round" style="">Apples</tspan>
                                <tspan x="5" y="16">Apples</tspan>
                            </text></g>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-1 "
                            transform="translate(584,26)"><text x="5"
                                style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16">
                                <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                    stroke-width="2px" stroke-linejoin="round" style="">Pears</tspan>
                                <tspan x="5" y="16">Pears</tspan>
                            </text></g>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-2 "
                            transform="translate(628,72)"><text x="5"
                                style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16">
                                <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                    stroke-width="2px" stroke-linejoin="round" style="">Oranges</tspan>
                                <tspan x="5" y="16">Oranges</tspan>
                            </text></g>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-3 "
                            transform="translate(644,182)"><text x="5"
                                style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16">
                                <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                    stroke-width="2px" stroke-linejoin="round" style="">Plums</tspan>
                                <tspan x="5" y="16">Plums</tspan>
                            </text></g>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-4 "
                            transform="translate(562,279)"><text x="5"
                                style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16">
                                <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                    stroke-width="2px" stroke-linejoin="round" style="">Bananas</tspan>
                                <tspan x="5" y="16">Bananas</tspan>
                            </text></g>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-5 "
                            transform="translate(339,261)"><text x="5"
                                style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16">
                                <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                    stroke-width="2px" stroke-linejoin="round" style="">Peaches</tspan>
                                <tspan x="5" y="16">Peaches</tspan>
                            </text></g>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-6 "
                            transform="translate(292,128)"><text x="5"
                                style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16">
                                <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                    stroke-width="2px" stroke-linejoin="round" style="">Prunes</tspan>
                                <tspan x="5" y="16">Prunes</tspan>
                            </text></g>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-7 "
                            transform="translate(351,19)"><text x="5"
                                style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16">
                                <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                    stroke-width="2px" stroke-linejoin="round" style="">Avocados</tspan>
                                <tspan x="5" y="16">Avocados</tspan>
                            </text></g>
                    </g>
                    <g class="highcharts-legend" transform="translate(160,359)">
                        <rect fill="none" class="highcharts-legend-box" rx="0" ry="0" x="0" y="0"
                            width="687" height="26" visibility="visible"></rect>
                        <g>
                            <g>
                                <g class="highcharts-legend-item highcharts-pie-series highcharts-color-0"
                                    transform="translate(8,3)"><text x="21"
                                        style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                        text-anchor="start" y="15">
                                        <tspan>Apples</tspan>
                                    </text>
                                    <rect x="2" y="4" width="12" height="12" fill="#7cb5ec" rx="6"
                                        ry="6" class="highcharts-point"></rect>
                                </g>
                                <g class="highcharts-legend-item highcharts-pie-series highcharts-color-1"
                                    transform="translate(90.58944702148438,3)"><text x="21" y="15"
                                        style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                        text-anchor="start">
                                        <tspan>Pears</tspan>
                                    </text>
                                    <rect x="2" y="4" width="12" height="12" fill="#434348" rx="6"
                                        ry="6" class="highcharts-point"></rect>
                                </g>
                                <g class="highcharts-legend-item highcharts-pie-series highcharts-color-2"
                                    transform="translate(165.29283142089844,3)"><text x="21" y="15"
                                        style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                        text-anchor="start">
                                        <tspan>Oranges</tspan>
                                    </text>
                                    <rect x="2" y="4" width="12" height="12" fill="#90ed7d" rx="6"
                                        ry="6" class="highcharts-point"></rect>
                                </g>
                                <g class="highcharts-legend-item highcharts-pie-series highcharts-color-3"
                                    transform="translate(256.59165954589844,3)"><text x="21" y="15"
                                        style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                        text-anchor="start">
                                        <tspan>Plums</tspan>
                                    </text>
                                    <rect x="2" y="4" width="12" height="12" fill="#f7a35c" rx="6"
                                        ry="6" class="highcharts-point"></rect>
                                </g>
                                <g class="highcharts-legend-item highcharts-pie-series highcharts-color-4"
                                    transform="translate(334.03338623046875,3)"><text x="21" y="15"
                                        style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                        text-anchor="start">
                                        <tspan>Bananas</tspan>
                                    </text>
                                    <rect x="2" y="4" width="12" height="12" fill="#8085e9" rx="6"
                                        ry="6" class="highcharts-point"></rect>
                                </g>
                                <g class="highcharts-legend-item highcharts-pie-series highcharts-color-5"
                                    transform="translate(425.77622985839844,3)"><text x="21" y="15"
                                        style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                        text-anchor="start">
                                        <tspan>Peaches</tspan>
                                    </text>
                                    <rect x="2" y="4" width="12" height="12" fill="#f15c80" rx="6"
                                        ry="6" class="highcharts-point"></rect>
                                </g>
                                <g class="highcharts-legend-item highcharts-pie-series highcharts-color-6"
                                    transform="translate(517.2864379882812,3)"><text x="21" y="15"
                                        style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                        text-anchor="start">
                                        <tspan>Prunes</tspan>
                                    </text>
                                    <rect x="2" y="4" width="12" height="12" fill="#e4d354" rx="6"
                                        ry="6" class="highcharts-point"></rect>
                                </g>
                                <g class="highcharts-legend-item highcharts-pie-series highcharts-color-7"
                                    transform="translate(600.0591278076172,3)"><text x="21" y="15"
                                        style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                        text-anchor="start">
                                        <tspan>Avocados</tspan>
                                    </text>
                                    <rect x="2" y="4" width="12" height="12" fill="#2b908f" rx="6"
                                        ry="6" class="highcharts-point"></rect>
                                </g>
                            </g>
                        </g>
                    </g><text x="998" class="highcharts-credits" text-anchor="end"
                        style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;" y="395">Highcharts.com</text>
                    <g class="highcharts-label highcharts-tooltip highcharts-color-2"
                        style="cursor:default;pointer-events:none;white-space:nowrap;" transform="translate(619,-9999)"
                        opacity="0" visibility="visible">
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 108.5 0.5 C 111.5 0.5 111.5 0.5 111.5 3.5 L 111.5 41.5 C 111.5 44.5 111.5 44.5 108.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 108.5 0.5 C 111.5 0.5 111.5 0.5 111.5 3.5 L 111.5 41.5 C 111.5 44.5 111.5 44.5 108.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 108.5 0.5 C 111.5 0.5 111.5 0.5 111.5 3.5 L 111.5 41.5 C 111.5 44.5 111.5 44.5 108.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.15" stroke-width="1"
                            transform="translate(1, 1)"></path>
                        <path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 108.5 0.5 C 111.5 0.5 111.5 0.5 111.5 3.5 L 111.5 41.5 C 111.5 44.5 111.5 44.5 108.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            stroke="#90ed7d" stroke-width="1"></path><text x="8"
                            style="font-size:12px;color:#333333;fill:#333333;" y="20">
                            <tspan style="font-size: 10px">Oranges</tspan>
                            <tspan style="fill:#90ed7d" x="8" dy="15">●</tspan>
                            <tspan dx="0"> Series 1: </tspan>
                            <tspan style="font-weight:bold" dx="0">106.4</tspan>
                        </text>
                    </g>
                </svg>
            </div>
        </div>
    </div>

    {{-- Posisi/Jabatan Alumni --}}
    <div class="bg-white pd-20 card-box mb-30">
        <div id="chart5" data-highcharts-chart="3">
            <div id="highcharts-httii7y-11" dir="ltr" class="highcharts-container "
                style="position: relative; overflow: hidden; width: 1008px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                <svg version="1.1" class="highcharts-root"
                    style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                    xmlns="http://www.w3.org/2000/svg" width="1008" height="400" viewBox="0 0 1008 400">
                    <desc>Created with Highcharts 6.0.7</desc>
                    <defs>
                        <clipPath id="highcharts-httii7y-12">
                            <rect x="0" y="0" width="988" height="301" fill="none"></rect>
                        </clipPath>
                    </defs>
                    <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1008" height="400"
                        rx="0" ry="0"></rect>
                    <rect fill="none" class="highcharts-plot-background" x="10" y="46" width="988" height="301">
                    </rect>
                    <g class="highcharts-pane-group"></g>
                    <rect fill="none" class="highcharts-plot-border" x="10" y="46" width="988" height="301">
                    </rect>
                    <g class="highcharts-series-group">
                        <g class="highcharts-series highcharts-series-0 highcharts-pie-series  highcharts-tracker"
                            transform="translate(10,46) scale(1 1)">
                            <path fill="#90ed7d" visibility="hidden"
                                d="M 551.2112025907363 67.23772676550085 A 114.5 114.5 0 0 1 592.0672062986445 135.55067862391692 L 591.0840865929795 135.7336421293849 A 113.5 113.5 0 0 0 550.5849038781535 68.01730993785456 Z"
                                class="highcharts-halo highcharts-color-2" fill-opacity="0.25"></path>
                            <path fill="#7cb5ec"
                                d="M 493.9766794181769 42.00000237488884 A 114.5 114.5 0 0 1 516.6125485837903 44.25507741307081 L 494 156.5 A 0 0 0 0 0 494 156.5 Z"
                                transform="translate(0,0)" stroke="#ffffff" stroke-width="1" stroke-linejoin="round"
                                class="highcharts-point highcharts-color-0"></path>
                            <path fill="#434348"
                                d="M 516.7247821813963 44.27774608034245 A 114.5 114.5 0 0 1 565.6219044767805 67.16606020599488 L 494 156.5 A 0 0 0 0 0 494 156.5 Z"
                                transform="translate(0,0)" stroke="#ffffff" stroke-width="1" stroke-linejoin="round"
                                class="highcharts-point highcharts-color-1 "></path>
                            <path fill="#90ed7d"
                                d="M 565.7112025907363 67.23772676550085 A 114.5 114.5 0 0 1 606.5672062986445 135.55067862391692 L 494 156.5 A 0 0 0 0 0 494 156.5 Z"
                                transform="translate(0,0)" stroke="#ffffff" stroke-width="1" stroke-linejoin="round"
                                class="highcharts-point highcharts-color-2 "></path>
                            <path fill="#f7a35c"
                                d="M 606.5880993329306 135.66325628611418 A 114.5 114.5 0 0 1 583.1758917393926 228.3185932226756 L 494 156.5 A 0 0 0 0 0 494 156.5 Z"
                                transform="translate(0,0)" stroke="#ffffff" stroke-width="1" stroke-linejoin="round"
                                class="highcharts-point highcharts-color-3"></path>
                            <path fill="#8085e9"
                                d="M 583.1040285701974 228.40773319025874 A 114.5 114.5 0 0 1 486.08250262910985 270.72593066104537 L 494 156.5 A 0 0 0 0 0 494 156.5 Z"
                                transform="translate(0,0)" stroke="#ffffff" stroke-width="1" stroke-linejoin="round"
                                class="highcharts-point highcharts-color-4 "></path>
                            <path fill="#f15c80"
                                d="M 485.9682806762349 270.7179560520335 A 114.5 114.5 0 0 1 385.55235819459233 193.2336220218753 L 494 156.5 A 0 0 0 0 0 494 156.5 Z"
                                transform="translate(0,0)" stroke="#ffffff" stroke-width="1" stroke-linejoin="round"
                                class="highcharts-point highcharts-color-5"></path>
                            <path fill="#e4d354"
                                d="M 385.5156788025091 193.12515603133505 A 114.5 114.5 0 0 1 398.12521108849074 93.90387511056662 L 494 156.5 A 0 0 0 0 0 494 156.5 Z"
                                transform="translate(-10,-1)" stroke="#ffffff" stroke-width="1" stroke-linejoin="round"
                                class="highcharts-point highcharts-point-select highcharts-color-6"></path>
                            <path fill="#2b908f"
                                d="M 398.18785514033794 93.80803163569409 A 114.5 114.5 0 0 1 493.8409617970908 42.000110450489885 L 494 156.5 A 0 0 0 0 0 494 156.5 Z"
                                transform="translate(0,0)" stroke="#ffffff" stroke-width="1" stroke-linejoin="round"
                                class="highcharts-point highcharts-color-7"></path>
                        </g>
                        <g class="highcharts-markers highcharts-series-0 highcharts-pie-series "
                            transform="translate(10,46) scale(1 1)"></g>
                    </g><text x="504" text-anchor="middle" class="highcharts-title"
                        style="color:#333333;font-size:18px;fill:#333333;" y="24">
                        <tspan>Posisi/Jabatan Alumni</tspan>
                    </text><text x="504" text-anchor="middle" class="highcharts-subtitle"
                        style="color:#666666;fill:#666666;" y="45"></text>
                    <g class="highcharts-data-labels highcharts-series-0 highcharts-pie-series  highcharts-tracker"
                        transform="translate(10,46) scale(1 1)" opacity="1" visibility="visible">
                        <path fill="none" class="highcharts-data-label-connector highcharts-color-0" stroke="#7cb5ec"
                            stroke-width="1"
                            d="M 513.398981759681 12 C 508.39898175968096 12 506.60533697300775 30.62960840691356 506.00745537745007 36.59974555757379 L 505.4095737818924 42.56988270823402">
                        </path>
                        <path fill="none" class="highcharts-data-label-connector highcharts-color-1" stroke="#434348"
                            stroke-width="1"
                            d="M 578.7496081495076 36 C 573.7496081495076 36 547.6875479235964 41.95788024507516 545.1411029627934 47.390708059538 L 542.5946580019904 52.82353587400084">
                        </path>
                        <path fill="none" class="highcharts-data-label-connector highcharts-color-2" stroke="#90ed7d"
                            stroke-width="1"
                            d="M 623.0412557139705 82.37836428611823 C 618.0412557139705 82.37836428611823 602.5897498118841 91.61150921933533 597.439247844522 94.68922419707437 L 592.28874587716 97.7669391748134">
                        </path>
                        <path fill="none" class="highcharts-data-label-connector highcharts-color-3" stroke="#f7a35c"
                            stroke-width="1"
                            d="M 639.0839458220945 191.95050243526154 C 634.0839458220945 191.95050243526154 616.6340425362972 187.53452289315283 610.8174081076982 186.06252971244993 L 605.0007736790991 184.59053653174703">
                        </path>
                        <path fill="none" class="highcharts-data-label-connector highcharts-color-4" stroke="#8085e9"
                            stroke-width="1"
                            d="M 556.7228097378314 288.97009940348846 C 551.7228097378314 288.97009940348846 544.5324251338109 272.4686337338498 542.135630265804 266.96814517730354 L 539.7388353977972 261.4676566207573">
                        </path>
                        <path fill="none" class="highcharts-data-label-connector highcharts-color-5" stroke="#f15c80"
                            stroke-width="1"
                            d="M 400.7138137348428 270.89317861985467 C 405.7138137348428 270.89317861985467 416.7114009512638 256.643509310807 420.37726335673744 251.89361954112448 L 424.0431257622111 247.14372977144194">
                        </path>
                        <path fill="none" class="highcharts-data-label-connector highcharts-color-6" stroke="#e4d354"
                            stroke-width="1"
                            d="M 345.6580003616017 138.242915356897 C 350.6580003616017 138.242915356897 368.5137511816098 140.51715427437696 374.4656681216125 141.27523391353694 L 380.4175850616152 142.0333135526969">
                        </path>
                        <path fill="none" class="highcharts-data-label-connector highcharts-color-7" stroke="#2b908f"
                            stroke-width="1"
                            d="M 420.2657956746407 29.394299279065535 C 425.2657956746407 29.394299279065535 433.82784188818033 45.22753535502969 436.6818572926935 50.50528071368441 L 439.5358726972067 55.783026072339126">
                        </path>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 "
                            transform="translate(518,2)"><text x="5"
                                style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16">
                                <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                    stroke-width="2px" stroke-linejoin="round" style="">Apples</tspan>
                                <tspan x="5" y="16">Apples</tspan>
                            </text></g>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-1 "
                            transform="translate(584,26)"><text x="5"
                                style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16">
                                <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                    stroke-width="2px" stroke-linejoin="round" style="">Pears</tspan>
                                <tspan x="5" y="16">Pears</tspan>
                            </text></g>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-2 "
                            transform="translate(628,72)"><text x="5"
                                style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16">
                                <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                    stroke-width="2px" stroke-linejoin="round" style="">Oranges</tspan>
                                <tspan x="5" y="16">Oranges</tspan>
                            </text></g>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-3 "
                            transform="translate(644,182)"><text x="5"
                                style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16">
                                <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                    stroke-width="2px" stroke-linejoin="round" style="">Plums</tspan>
                                <tspan x="5" y="16">Plums</tspan>
                            </text></g>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-4 "
                            transform="translate(562,279)"><text x="5"
                                style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16">
                                <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                    stroke-width="2px" stroke-linejoin="round" style="">Bananas</tspan>
                                <tspan x="5" y="16">Bananas</tspan>
                            </text></g>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-5 "
                            transform="translate(339,261)"><text x="5"
                                style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16">
                                <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                    stroke-width="2px" stroke-linejoin="round" style="">Peaches</tspan>
                                <tspan x="5" y="16">Peaches</tspan>
                            </text></g>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-6 "
                            transform="translate(292,128)"><text x="5"
                                style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16">
                                <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                    stroke-width="2px" stroke-linejoin="round" style="">Prunes</tspan>
                                <tspan x="5" y="16">Prunes</tspan>
                            </text></g>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-7 "
                            transform="translate(351,19)"><text x="5"
                                style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16">
                                <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                    stroke-width="2px" stroke-linejoin="round" style="">Avocados</tspan>
                                <tspan x="5" y="16">Avocados</tspan>
                            </text></g>
                    </g>
                    <g class="highcharts-legend" transform="translate(160,359)">
                        <rect fill="none" class="highcharts-legend-box" rx="0" ry="0" x="0" y="0"
                            width="687" height="26" visibility="visible"></rect>
                        <g>
                            <g>
                                <g class="highcharts-legend-item highcharts-pie-series highcharts-color-0"
                                    transform="translate(8,3)"><text x="21"
                                        style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                        text-anchor="start" y="15">
                                        <tspan>Apples</tspan>
                                    </text>
                                    <rect x="2" y="4" width="12" height="12" fill="#7cb5ec" rx="6"
                                        ry="6" class="highcharts-point"></rect>
                                </g>
                                <g class="highcharts-legend-item highcharts-pie-series highcharts-color-1"
                                    transform="translate(90.58944702148438,3)"><text x="21" y="15"
                                        style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                        text-anchor="start">
                                        <tspan>Pears</tspan>
                                    </text>
                                    <rect x="2" y="4" width="12" height="12" fill="#434348" rx="6"
                                        ry="6" class="highcharts-point"></rect>
                                </g>
                                <g class="highcharts-legend-item highcharts-pie-series highcharts-color-2"
                                    transform="translate(165.29283142089844,3)"><text x="21" y="15"
                                        style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                        text-anchor="start">
                                        <tspan>Oranges</tspan>
                                    </text>
                                    <rect x="2" y="4" width="12" height="12" fill="#90ed7d" rx="6"
                                        ry="6" class="highcharts-point"></rect>
                                </g>
                                <g class="highcharts-legend-item highcharts-pie-series highcharts-color-3"
                                    transform="translate(256.59165954589844,3)"><text x="21" y="15"
                                        style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                        text-anchor="start">
                                        <tspan>Plums</tspan>
                                    </text>
                                    <rect x="2" y="4" width="12" height="12" fill="#f7a35c" rx="6"
                                        ry="6" class="highcharts-point"></rect>
                                </g>
                                <g class="highcharts-legend-item highcharts-pie-series highcharts-color-4"
                                    transform="translate(334.03338623046875,3)"><text x="21" y="15"
                                        style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                        text-anchor="start">
                                        <tspan>Bananas</tspan>
                                    </text>
                                    <rect x="2" y="4" width="12" height="12" fill="#8085e9" rx="6"
                                        ry="6" class="highcharts-point"></rect>
                                </g>
                                <g class="highcharts-legend-item highcharts-pie-series highcharts-color-5"
                                    transform="translate(425.77622985839844,3)"><text x="21" y="15"
                                        style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                        text-anchor="start">
                                        <tspan>Peaches</tspan>
                                    </text>
                                    <rect x="2" y="4" width="12" height="12" fill="#f15c80" rx="6"
                                        ry="6" class="highcharts-point"></rect>
                                </g>
                                <g class="highcharts-legend-item highcharts-pie-series highcharts-color-6"
                                    transform="translate(517.2864379882812,3)"><text x="21" y="15"
                                        style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                        text-anchor="start">
                                        <tspan>Prunes</tspan>
                                    </text>
                                    <rect x="2" y="4" width="12" height="12" fill="#e4d354" rx="6"
                                        ry="6" class="highcharts-point"></rect>
                                </g>
                                <g class="highcharts-legend-item highcharts-pie-series highcharts-color-7"
                                    transform="translate(600.0591278076172,3)"><text x="21" y="15"
                                        style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                        text-anchor="start">
                                        <tspan>Avocados</tspan>
                                    </text>
                                    <rect x="2" y="4" width="12" height="12" fill="#2b908f" rx="6"
                                        ry="6" class="highcharts-point"></rect>
                                </g>
                            </g>
                        </g>
                    </g><text x="998" class="highcharts-credits" text-anchor="end"
                        style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;" y="395">Highcharts.com</text>
                    <g class="highcharts-label highcharts-tooltip highcharts-color-2"
                        style="cursor:default;pointer-events:none;white-space:nowrap;" transform="translate(619,-9999)"
                        opacity="0" visibility="visible">
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 108.5 0.5 C 111.5 0.5 111.5 0.5 111.5 3.5 L 111.5 41.5 C 111.5 44.5 111.5 44.5 108.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 108.5 0.5 C 111.5 0.5 111.5 0.5 111.5 3.5 L 111.5 41.5 C 111.5 44.5 111.5 44.5 108.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 108.5 0.5 C 111.5 0.5 111.5 0.5 111.5 3.5 L 111.5 41.5 C 111.5 44.5 111.5 44.5 108.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.15" stroke-width="1"
                            transform="translate(1, 1)"></path>
                        <path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 108.5 0.5 C 111.5 0.5 111.5 0.5 111.5 3.5 L 111.5 41.5 C 111.5 44.5 111.5 44.5 108.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            stroke="#90ed7d" stroke-width="1"></path><text x="8"
                            style="font-size:12px;color:#333333;fill:#333333;" y="20">
                            <tspan style="font-size: 10px">Oranges</tspan>
                            <tspan style="fill:#90ed7d" x="8" dy="15">●</tspan>
                            <tspan dx="0"> Series 1: </tspan>
                            <tspan style="font-weight:bold" dx="0">106.4</tspan>
                        </text>
                    </g>
                </svg>
            </div>
        </div>
    </div>

    {{-- Apakah Alumni Mendapat Pekerjaan <= 6 bulan sebelum lulus --}}
    <div class="bg-white pd-20 card-box mb-30">
        <div id="chart6" data-highcharts-chart="4">
            <div id="highcharts-flm2yo6-13" dir="ltr" class="highcharts-container "
                style="position: relative; overflow: hidden; width: 1008px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                <svg version="1.1" class="highcharts-root"
                    style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                    xmlns="http://www.w3.org/2000/svg" width="1008" height="400" viewBox="0 0 1008 400">
                    <desc>Created with Highcharts 6.0.7</desc>
                    <defs>
                        <clipPath id="highcharts-flm2yo6-14">
                            <rect x="0" y="0" width="988" height="324" fill="none"></rect>
                        </clipPath>
                    </defs>
                    <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1008" height="400"
                        rx="0" ry="0"></rect>
                    <rect fill="none" class="highcharts-plot-background" x="10" y="61" width="988" height="324">
                    </rect>
                    <g class="highcharts-pane-group"></g>
                    <rect fill="none" class="highcharts-plot-border" x="10" y="61" width="988" height="324">
                    </rect>
                    <g class="highcharts-series-group">
                        <g class="highcharts-series highcharts-series-0 highcharts-pie-series  highcharts-tracker"
                            transform="translate(10,61) scale(1 1)">
                            <path fill="#7cb5ec"
                                d="M 493.97331881031596 42.00000271712173 A 131 131 0 0 1 622.9763039347399 150.0628462242243 L 543.2275969216565 164.2453611542841 A 50 50 0 0 0 493.98981633981526 123.00000103706935 Z"
                                transform="translate(0,0)" stroke="#ffffff" stroke-width="1" stroke-linejoin="round"
                                class="highcharts-point highcharts-color-0"></path>
                            <path fill="#434348"
                                d="M 622.9991765965462 150.19183397523892 A 131 131 0 0 1 617.1474184330984 217.67340745077956 L 541.0028314630147 190.05091887434335 A 50 50 0 0 0 543.2363269452467 164.2945931203202 Z"
                                transform="translate(0,0)" stroke="#ffffff" stroke-width="1" stroke-linejoin="round"
                                class="highcharts-point highcharts-color-1"></path>
                            <path fill="#90ed7d"
                                d="M 617.1026834593891 217.79653251198624 A 131 131 0 0 1 607.4885273574876 238.43205757294209 L 537.316231815835 197.9740677759321 A 50 50 0 0 0 540.9857570455683 190.09791317251384 Z"
                                transform="translate(0,0)" stroke="#ffffff" stroke-width="1" stroke-linejoin="round"
                                class="highcharts-point highcharts-color-2"></path>
                            <path fill="#f7a35c"
                                d="M 607.423038566561 238.54551336535874 A 131 131 0 0 1 494.10431879910607 303.99995846407035 L 494.03981633553667 222.99998414659171 A 50 50 0 0 0 537.2912360941073 198.0173715134957 Z"
                                transform="translate(0,0)" stroke="#ffffff" stroke-width="1" stroke-linejoin="round"
                                class="highcharts-point highcharts-color-3"></path>
                            <path fill="#8085e9"
                                d="M 493.97331881031596 303.99999728287827 A 131 131 0 0 1 365.0143633988572 195.88461383982553 L 444.76884099193023 181.7345854350479 A 50 50 0 0 0 493.98981633981526 222.99999896293065 Z"
                                transform="translate(0,0)" stroke="#ffffff" stroke-width="1" stroke-linejoin="round"
                                class="highcharts-point highcharts-color-4"></path>
                            <path fill="#f15c80"
                                d="M 364.99154328164445 195.75561678241604 A 131 131 0 0 1 380.47271403173124 107.63521329738059 L 450.6689748212715 148.05160812877122 A 50 50 0 0 0 444.7601310235284 181.6853499169527 Z"
                                transform="translate(0,0)" stroke="#ffffff" stroke-width="1" stroke-linejoin="round"
                                class="highcharts-point highcharts-color-5"></path>
                            <path fill="#e4d354"
                                d="M 380.538135571178 107.52171871272418 A 131 131 0 0 1 449.032523542584 49.95965677448825 L 476.83684104678775 126.03803693682758 A 50 50 0 0 0 450.6939448744954 148.00828958500924 Z"
                                transform="translate(0,0)" stroke="#ffffff" stroke-width="1" stroke-linejoin="round"
                                class="highcharts-point highcharts-color-6"></path>
                            <path fill="#2b908f"
                                d="M 449.15558634903914 49.91475082569188 A 131 131 0 0 1 471.14165755267027 44.00970509158216 L 485.2754418139963 123.76706301205425 A 50 50 0 0 0 476.8838115836027 126.02089726171445 Z"
                                transform="translate(0,0)" stroke="#ffffff" stroke-width="1" stroke-linejoin="round"
                                class="highcharts-point highcharts-color-7"></path>
                            <path fill="#f45b5b"
                                d="M 471.2706592552506 43.986911248086614 A 131 131 0 0 1 493.8180436281126 42.00012636693603 L 493.9305510030964 123.00004823165497 A 50 50 0 0 0 485.3246791050575 123.75836307178878 Z"
                                transform="translate(0,0)" stroke="#ffffff" stroke-width="1" stroke-linejoin="round"
                                class="highcharts-point highcharts-color-8"></path>
                        </g>
                        <g class="highcharts-markers highcharts-series-0 highcharts-pie-series "
                            transform="translate(10,61) scale(1 1)"></g>
                    </g><text x="504" text-anchor="middle" class="highcharts-title"
                        style="color:#333333;font-size:18px;fill:#333333;" y="24">
                        <tspan>Durasi Alumni mendapatkan pekerjaan</tspan>
                    </text><text x="504" text-anchor="middle" class="highcharts-subtitle"
                        style="color:#666666;fill:#666666;" y="45">
                        <tspan>Apakah Alumni telah mendapatkan pekerjaan/berwiraswasta <= 6 bulan sebelum lulus?</tspan>
                    </text>
                    <g class="highcharts-data-labels highcharts-series-0 highcharts-pie-series  highcharts-tracker"
                        transform="translate(10,61) scale(1 1)" opacity="1" visibility="visible">
                        <path fill="none" class="highcharts-data-label-connector highcharts-color-0" stroke="#7cb5ec"
                            stroke-width="1"
                            d="M 602.4888051595328 49.66684465784455 C 597.4888051595328 49.66684465784455 585.9186281851751 63.45564463398614 582.0619025270558 68.05191129270001 L 578.2051768689366 72.64817795141389">
                        </path>
                        <path fill="none" class="highcharts-data-label-connector highcharts-color-1" stroke="#434348"
                            stroke-width="1"
                            d="M 659.3873463927711 187.03207458237296 C 654.3873463927711 187.03207458237296 636.4558418271195 185.46327121291512 630.478673638569 184.94033675642916 L 624.5015054500186 184.4174022999432">
                        </path>
                        <path fill="none" class="highcharts-data-label-connector highcharts-color-2" stroke="#90ed7d"
                            stroke-width="1"
                            d="M 644.9155537129006 241.04154014025258 C 639.9155537129006 241.04154014025258 623.6020135462409 233.43441142892 618.164166824021 230.8987018584758 L 612.7263201018011 228.3629922880316">
                        </path>
                        <path fill="none" class="highcharts-data-label-connector highcharts-color-3" stroke="#f7a35c"
                            stroke-width="1"
                            d="M 579.5 312.4300900092946 C 574.5 312.4300900092946 565.5 296.8416327411747 562.5 291.64548031846806 L 559.5 286.4493278957614">
                        </path>
                        <path fill="none" class="highcharts-data-label-connector highcharts-color-4" stroke="#8085e9"
                            stroke-width="1"
                            d="M 385.51119484046734 296.3331553421556 C 390.51119484046734 296.3331553421556 402.081371814825 282.544355366014 405.9380974729442 277.9480887073001 L 409.7948231310634 273.3518220485862">
                        </path>
                        <path fill="none" class="highcharts-data-label-connector highcharts-color-5" stroke="#f15c80"
                            stroke-width="1"
                            d="M 330.44595176503447 145.04264339562434 C 335.44595176503447 145.04264339562434 353.1724913192543 148.1683105936291 359.0813378373275 149.21019965963066 L 364.99018435540074 150.25208872563223">
                        </path>
                        <path fill="none" class="highcharts-data-label-connector highcharts-color-6" stroke="#e4d354"
                            stroke-width="1"
                            d="M 374.3178305053484 60 C 379.3178305053484 60 402.0813718148248 63.45564463398625 405.93809747294404 68.05191129270011 L 409.79482313106325 72.64817795141397">
                        </path>
                        <path fill="none" class="highcharts-data-label-connector highcharts-color-7" stroke="#2b908f"
                            stroke-width="1"
                            d="M 404.43050195253613 36 C 409.43050195253613 36 456.9888765503395 34.87260684066324 458.54179082095465 40.66816179839765 L 460.0947050915698 46.46371675613206">
                        </path>
                        <path fill="none" class="highcharts-data-label-connector highcharts-color-8" stroke="#f45b5b"
                            stroke-width="1"
                            d="M 474.96792541762704 12 C 479.96792541762704 12 481.53672878708494 30.544158172880387 482.05966324357087 36.52132636143086 L 482.5825977000568 42.49849454998133">
                        </path>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 "
                            transform="translate(607,40)"><text x="5"
                                style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16">
                                <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                    stroke-width="2px" stroke-linejoin="round" style="">Bananas</tspan>
                                <tspan x="5" y="16">Bananas</tspan>
                            </text></g>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-1 "
                            transform="translate(664,177)"><text x="5"
                                style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16">
                                <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                    stroke-width="2px" stroke-linejoin="round" style="">Kiwi</tspan>
                                <tspan x="5" y="16">Kiwi</tspan>
                            </text></g>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-2 "
                            transform="translate(650,231)"><text x="5"
                                style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16">
                                <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                    stroke-width="2px" stroke-linejoin="round" style="">Mixed nuts</tspan>
                                <tspan x="5" y="16">Mixed nuts</tspan>
                            </text></g>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-3 "
                            transform="translate(585,302)"><text x="5"
                                style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16">
                                <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                    stroke-width="2px" stroke-linejoin="round" style="">Oranges</tspan>
                                <tspan x="5" y="16">Oranges</tspan>
                            </text></g>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-4 "
                            transform="translate(332,286)"><text x="5"
                                style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16">
                                <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                    stroke-width="2px" stroke-linejoin="round" style="">Apples</tspan>
                                <tspan x="5" y="16">Apples</tspan>
                            </text></g>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-5 "
                            transform="translate(284,135)"><text x="5"
                                style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16">
                                <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                    stroke-width="2px" stroke-linejoin="round" style="">Pears</tspan>
                                <tspan x="5" y="16">Pears</tspan>
                            </text></g>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-6 "
                            transform="translate(290,50)"><text x="5"
                                style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16">
                                <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                    stroke-width="2px" stroke-linejoin="round" style="">Clementines</tspan>
                                <tspan x="5" y="16">Clementines</tspan>
                            </text></g>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-7 "
                            transform="translate(314,26)"><text x="5"
                                style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16">
                                <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                    stroke-width="2px" stroke-linejoin="round" style="">Reddish (bag)</tspan>
                                <tspan x="5" y="16">Reddish (bag)</tspan>
                            </text></g>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-8 "
                            transform="translate(376,2)"><text x="5"
                                style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16">
                                <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                    stroke-width="2px" stroke-linejoin="round" style="">Grapes (bunch)</tspan>
                                <tspan x="5" y="16">Grapes (bunch)</tspan>
                            </text></g>
                    </g>
                    <g class="highcharts-legend">
                        <rect fill="none" class="highcharts-legend-box" rx="0" ry="0" x="0" y="0"
                            width="8" height="8" visibility="hidden"></rect>
                        <g>
                            <g></g>
                        </g>
                    </g><text x="998" class="highcharts-credits" text-anchor="end"
                        style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;" y="395">Highcharts.com</text>
                </svg>
            </div>
        </div>
    </div>

    {{-- Berapa bulan waktu yang Alumni butuhkan untuk mendapatkan pekerjaan pertama/berwiraswasta --}}
    <div class="bg-white pd-20 card-box mb-30">
        <div id="chart5" data-highcharts-chart="3">
            <div id="highcharts-flm2yo6-11" dir="ltr" class="highcharts-container "
                style="position: relative; overflow: hidden; width: 1008px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                <svg version="1.1" class="highcharts-root "
                    style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                    xmlns="http://www.w3.org/2000/svg" width="1008" height="400" viewBox="0 0 1008 400">
                    <desc>Created with Highcharts 6.0.7</desc>
                    <defs>
                        <clipPath id="highcharts-flm2yo6-12">
                            <rect x="0" y="0" width="988" height="301" fill="none"></rect>
                        </clipPath>
                    </defs>
                    <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1008" height="400"
                        rx="0" ry="0"></rect>
                    <g class="highcharts-pane-group"></g><text x="504" text-anchor="middle" class="highcharts-title"
                        style="color:#333333;font-size:18px;fill:#333333;" y="24">
                        <tspan>Berapa bulan waktu yang Alumni butuhkan untuk mendapatkan pekerjaan pertama/berwiraswasta</tspan>
                    </text><text x="504" text-anchor="middle" class="highcharts-subtitle"
                        style="color:#666666;fill:#666666;" y="45"></text><text x="998" class="highcharts-credits"
                        text-anchor="end" style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;"
                        y="395">Highcharts.com</text>
                    <g class="highcharts-label highcharts-tooltip highcharts-color-1"
                        style="cursor:default;pointer-events:none;white-space:nowrap;" transform="translate(503,-9999)"
                        opacity="0" visibility="visible">
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.15" stroke-width="1"
                            transform="translate(1, 1)"></path>
                        <path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            stroke="#434348" stroke-width="1"></path><text x="8"
                            style="font-size:12px;color:#333333;fill:#333333;" y="20">
                            <tspan style="font-size: 10px">Pears</tspan>
                            <tspan style="fill:#434348" x="8" dy="15">●</tspan>
                            <tspan dx="0"> Series 1: </tspan>
                            <tspan style="font-weight:bold" dx="0">71.5</tspan>
                        </text>
                    </g>
                </svg></div>
        </div>
    </div>

    {{-- Nama perusahaan/kantor tempat Alumni bekerja/berwiraswasta saat ini --}}
    <div class="bg-white pd-20 card-box mb-30">
        <div id="chart5" data-highcharts-chart="3">
            <div id="highcharts-flm2yo6-11" dir="ltr" class="highcharts-container "
                style="position: relative; overflow: hidden; width: 1008px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                <svg version="1.1" class="highcharts-root "
                    style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                    xmlns="http://www.w3.org/2000/svg" width="1008" height="400" viewBox="0 0 1008 400">
                    <desc>Created with Highcharts 6.0.7</desc>
                    <defs>
                        <clipPath id="highcharts-flm2yo6-12">
                            <rect x="0" y="0" width="988" height="301" fill="none"></rect>
                        </clipPath>
                    </defs>
                    <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1008" height="400"
                        rx="0" ry="0"></rect>
                    <g class="highcharts-pane-group"></g><text x="504" text-anchor="middle" class="highcharts-title"
                        style="color:#333333;font-size:18px;fill:#333333;" y="24">
                        <tspan>Berapa bulan waktu yang Alumni butuhkan untuk mendapatkan pekerjaan pertama/berwiraswasta</tspan>
                    </text><text x="504" text-anchor="middle" class="highcharts-subtitle"
                        style="color:#666666;fill:#666666;" y="45"></text><text x="998" class="highcharts-credits"
                        text-anchor="end" style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;"
                        y="395">Highcharts.com</text>
                    <g class="highcharts-label highcharts-tooltip highcharts-color-1"
                        style="cursor:default;pointer-events:none;white-space:nowrap;" transform="translate(503,-9999)"
                        opacity="0" visibility="visible">
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.15" stroke-width="1"
                            transform="translate(1, 1)"></path>
                        <path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            stroke="#434348" stroke-width="1"></path><text x="8"
                            style="font-size:12px;color:#333333;fill:#333333;" y="20">
                            <tspan style="font-size: 10px">Pears</tspan>
                            <tspan style="fill:#434348" x="8" dy="15">●</tspan>
                            <tspan dx="0"> Series 1: </tspan>
                            <tspan style="font-weight:bold" dx="0">71.5</tspan>
                        </text>
                    </g>
                </svg></div>
        </div>
    </div>

    {{-- Nama perusahaan/kantor tempat Alumni bekerja/berwiraswasta saat ini --}}
    <div class="bg-white pd-20 card-box mb-30">
        <div id="chart5" data-highcharts-chart="3">
            <div id="highcharts-flm2yo6-11" dir="ltr" class="highcharts-container "
                style="position: relative; overflow: hidden; width: 1008px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                <svg version="1.1" class="highcharts-root "
                    style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                    xmlns="http://www.w3.org/2000/svg" width="1008" height="400" viewBox="0 0 1008 400">
                    <desc>Created with Highcharts 6.0.7</desc>
                    <defs>
                        <clipPath id="highcharts-flm2yo6-12">
                            <rect x="0" y="0" width="988" height="301" fill="none"></rect>
                        </clipPath>
                    </defs>
                    <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1008" height="400"
                        rx="0" ry="0"></rect>
                    <g class="highcharts-pane-group"></g><text x="504" text-anchor="middle" class="highcharts-title"
                        style="color:#333333;font-size:18px;fill:#333333;" y="24">
                        <tspan>Nama perusahaan/kantor tempat Alumni bekerja/berwiraswasta saat ini</tspan>
                    </text><text x="504" text-anchor="middle" class="highcharts-subtitle"
                        style="color:#666666;fill:#666666;" y="45"></text><text x="998" class="highcharts-credits"
                        text-anchor="end" style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;"
                        y="395">Highcharts.com</text>
                    <g class="highcharts-label highcharts-tooltip highcharts-color-1"
                        style="cursor:default;pointer-events:none;white-space:nowrap;" transform="translate(503,-9999)"
                        opacity="0" visibility="visible">
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.15" stroke-width="1"
                            transform="translate(1, 1)"></path>
                        <path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            stroke="#434348" stroke-width="1"></path><text x="8"
                            style="font-size:12px;color:#333333;fill:#333333;" y="20">
                            <tspan style="font-size: 10px">Pears</tspan>
                            <tspan style="fill:#434348" x="8" dy="15">●</tspan>
                            <tspan dx="0"> Series 1: </tspan>
                            <tspan style="font-weight:bold" dx="0">71.5</tspan>
                        </text>
                    </g>
                </svg></div>
        </div>
    </div>

    {{-- Rata-rata pendapatan Alumni per bulan --}}
    <div class="bg-white pd-20 card-box mb-30">
        <div id="chart5" data-highcharts-chart="3">
            <div id="highcharts-flm2yo6-11" dir="ltr" class="highcharts-container "
                style="position: relative; overflow: hidden; width: 1008px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                <svg version="1.1" class="highcharts-root "
                    style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                    xmlns="http://www.w3.org/2000/svg" width="1008" height="400" viewBox="0 0 1008 400">
                    <desc>Created with Highcharts 6.0.7</desc>
                    <defs>
                        <clipPath id="highcharts-flm2yo6-12">
                            <rect x="0" y="0" width="988" height="301" fill="none"></rect>
                        </clipPath>
                    </defs>
                    <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1008" height="400"
                        rx="0" ry="0"></rect>
                    <g class="highcharts-pane-group"></g><text x="504" text-anchor="middle" class="highcharts-title"
                        style="color:#333333;font-size:18px;fill:#333333;" y="24">
                        <tspan>Rata-rata pendapatan Alumni per bulan</tspan>
                    </text><text x="504" text-anchor="middle" class="highcharts-subtitle"
                        style="color:#666666;fill:#666666;" y="45"></text><text x="998" class="highcharts-credits"
                        text-anchor="end" style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;"
                        y="395">Highcharts.com</text>
                    <g class="highcharts-label highcharts-tooltip highcharts-color-1"
                        style="cursor:default;pointer-events:none;white-space:nowrap;" transform="translate(503,-9999)"
                        opacity="0" visibility="visible">
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.15" stroke-width="1"
                            transform="translate(1, 1)"></path>
                        <path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            stroke="#434348" stroke-width="1"></path><text x="8"
                            style="font-size:12px;color:#333333;fill:#333333;" y="20">
                            <tspan style="font-size: 10px">Pears</tspan>
                            <tspan style="fill:#434348" x="8" dy="15">●</tspan>
                            <tspan dx="0"> Series 1: </tspan>
                            <tspan style="font-weight:bold" dx="0">71.5</tspan>
                        </text>
                    </g>
                </svg></div>
        </div>
    </div>

    {{-- Lokasi tempat Alumni bekerja/berwiraswasta --}}
    <div class="bg-white pd-20 card-box mb-30">
        <div id="chart5" data-highcharts-chart="3">
            <div id="highcharts-flm2yo6-11" dir="ltr" class="highcharts-container "
                style="position: relative; overflow: hidden; width: 1008px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                <svg version="1.1" class="highcharts-root "
                    style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                    xmlns="http://www.w3.org/2000/svg" width="1008" height="400" viewBox="0 0 1008 400">
                    <desc>Created with Highcharts 6.0.7</desc>
                    <defs>
                        <clipPath id="highcharts-flm2yo6-12">
                            <rect x="0" y="0" width="988" height="301" fill="none"></rect>
                        </clipPath>
                    </defs>
                    <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1008" height="400"
                        rx="0" ry="0"></rect>
                    <g class="highcharts-pane-group"></g><text x="504" text-anchor="middle" class="highcharts-title"
                        style="color:#333333;font-size:18px;fill:#333333;" y="24">
                        <tspan>Lokasi tempat Alumni bekerja/berwiraswasta</tspan>
                    </text><text x="504" text-anchor="middle" class="highcharts-subtitle"
                        style="color:#666666;fill:#666666;" y="45"></text><text x="998" class="highcharts-credits"
                        text-anchor="end" style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;"
                        y="395">Highcharts.com</text>
                    <g class="highcharts-label highcharts-tooltip highcharts-color-1"
                        style="cursor:default;pointer-events:none;white-space:nowrap;" transform="translate(503,-9999)"
                        opacity="0" visibility="visible">
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.15" stroke-width="1"
                            transform="translate(1, 1)"></path>
                        <path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            stroke="#434348" stroke-width="1"></path><text x="8"
                            style="font-size:12px;color:#333333;fill:#333333;" y="20">
                            <tspan style="font-size: 10px">Pears</tspan>
                            <tspan style="fill:#434348" x="8" dy="15">●</tspan>
                            <tspan dx="0"> Series 1: </tspan>
                            <tspan style="font-weight:bold" dx="0">71.5</tspan>
                        </text>
                    </g>
                </svg></div>
        </div>
    </div>

    {{-- Jenis perusahaan/instansi/institusi tempat alumni bekerja sekarang --}}
    <div class="bg-white pd-20 card-box mb-30">
        <div id="chart6" data-highcharts-chart="4">
            <div id="highcharts-flm2yo6-13" dir="ltr" class="highcharts-container "
                style="position: relative; overflow: hidden; width: 1008px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                <svg version="1.1" class="highcharts-root"
                    style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                    xmlns="http://www.w3.org/2000/svg" width="1008" height="400" viewBox="0 0 1008 400">
                    <desc>Created with Highcharts 6.0.7</desc>
                    <defs>
                        <clipPath id="highcharts-flm2yo6-14">
                            <rect x="0" y="0" width="988" height="324" fill="none"></rect>
                        </clipPath>
                    </defs>
                    <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1008" height="400"
                        rx="0" ry="0"></rect>
                    <rect fill="none" class="highcharts-plot-background" x="10" y="61" width="988"
                        height="324">
                    </rect>
                    <g class="highcharts-pane-group"></g>
                    <rect fill="none" class="highcharts-plot-border" x="10" y="61" width="988" height="324">
                    </rect>
                    <g class="highcharts-series-group">
                        <g class="highcharts-series highcharts-series-0 highcharts-pie-series  highcharts-tracker"
                            transform="translate(10,61) scale(1 1)">
                            <path fill="#7cb5ec"
                                d="M 493.97331881031596 42.00000271712173 A 131 131 0 0 1 622.9763039347399 150.0628462242243 L 543.2275969216565 164.2453611542841 A 50 50 0 0 0 493.98981633981526 123.00000103706935 Z"
                                transform="translate(0,0)" stroke="#ffffff" stroke-width="1" stroke-linejoin="round"
                                class="highcharts-point highcharts-color-0"></path>
                            <path fill="#434348"
                                d="M 622.9991765965462 150.19183397523892 A 131 131 0 0 1 617.1474184330984 217.67340745077956 L 541.0028314630147 190.05091887434335 A 50 50 0 0 0 543.2363269452467 164.2945931203202 Z"
                                transform="translate(0,0)" stroke="#ffffff" stroke-width="1" stroke-linejoin="round"
                                class="highcharts-point highcharts-color-1"></path>
                            <path fill="#90ed7d"
                                d="M 617.1026834593891 217.79653251198624 A 131 131 0 0 1 607.4885273574876 238.43205757294209 L 537.316231815835 197.9740677759321 A 50 50 0 0 0 540.9857570455683 190.09791317251384 Z"
                                transform="translate(0,0)" stroke="#ffffff" stroke-width="1" stroke-linejoin="round"
                                class="highcharts-point highcharts-color-2"></path>
                            <path fill="#f7a35c"
                                d="M 607.423038566561 238.54551336535874 A 131 131 0 0 1 494.10431879910607 303.99995846407035 L 494.03981633553667 222.99998414659171 A 50 50 0 0 0 537.2912360941073 198.0173715134957 Z"
                                transform="translate(0,0)" stroke="#ffffff" stroke-width="1" stroke-linejoin="round"
                                class="highcharts-point highcharts-color-3"></path>
                            <path fill="#8085e9"
                                d="M 493.97331881031596 303.99999728287827 A 131 131 0 0 1 365.0143633988572 195.88461383982553 L 444.76884099193023 181.7345854350479 A 50 50 0 0 0 493.98981633981526 222.99999896293065 Z"
                                transform="translate(0,0)" stroke="#ffffff" stroke-width="1" stroke-linejoin="round"
                                class="highcharts-point highcharts-color-4"></path>
                            <path fill="#f15c80"
                                d="M 364.99154328164445 195.75561678241604 A 131 131 0 0 1 380.47271403173124 107.63521329738059 L 450.6689748212715 148.05160812877122 A 50 50 0 0 0 444.7601310235284 181.6853499169527 Z"
                                transform="translate(0,0)" stroke="#ffffff" stroke-width="1" stroke-linejoin="round"
                                class="highcharts-point highcharts-color-5"></path>
                            <path fill="#e4d354"
                                d="M 380.538135571178 107.52171871272418 A 131 131 0 0 1 449.032523542584 49.95965677448825 L 476.83684104678775 126.03803693682758 A 50 50 0 0 0 450.6939448744954 148.00828958500924 Z"
                                transform="translate(0,0)" stroke="#ffffff" stroke-width="1" stroke-linejoin="round"
                                class="highcharts-point highcharts-color-6"></path>
                            <path fill="#2b908f"
                                d="M 449.15558634903914 49.91475082569188 A 131 131 0 0 1 471.14165755267027 44.00970509158216 L 485.2754418139963 123.76706301205425 A 50 50 0 0 0 476.8838115836027 126.02089726171445 Z"
                                transform="translate(0,0)" stroke="#ffffff" stroke-width="1" stroke-linejoin="round"
                                class="highcharts-point highcharts-color-7"></path>
                            <path fill="#f45b5b"
                                d="M 471.2706592552506 43.986911248086614 A 131 131 0 0 1 493.8180436281126 42.00012636693603 L 493.9305510030964 123.00004823165497 A 50 50 0 0 0 485.3246791050575 123.75836307178878 Z"
                                transform="translate(0,0)" stroke="#ffffff" stroke-width="1" stroke-linejoin="round"
                                class="highcharts-point highcharts-color-8"></path>
                        </g>
                        <g class="highcharts-markers highcharts-series-0 highcharts-pie-series "
                            transform="translate(10,61) scale(1 1)"></g>
                    </g><text x="504" text-anchor="middle" class="highcharts-title"
                        style="color:#333333;font-size:18px;fill:#333333;" y="24">
                        <tspan> Jenis perusahaan/instansi/institusi tempat alumni bekerja sekarang</tspan>
                    </text>
                    <g class="highcharts-data-labels highcharts-series-0 highcharts-pie-series  highcharts-tracker"
                        transform="translate(10,61) scale(1 1)" opacity="1" visibility="visible">
                        <path fill="none" class="highcharts-data-label-connector highcharts-color-0"
                            stroke="#7cb5ec" stroke-width="1"
                            d="M 602.4888051595328 49.66684465784455 C 597.4888051595328 49.66684465784455 585.9186281851751 63.45564463398614 582.0619025270558 68.05191129270001 L 578.2051768689366 72.64817795141389">
                        </path>
                        <path fill="none" class="highcharts-data-label-connector highcharts-color-1"
                            stroke="#434348" stroke-width="1"
                            d="M 659.3873463927711 187.03207458237296 C 654.3873463927711 187.03207458237296 636.4558418271195 185.46327121291512 630.478673638569 184.94033675642916 L 624.5015054500186 184.4174022999432">
                        </path>
                        <path fill="none" class="highcharts-data-label-connector highcharts-color-2"
                            stroke="#90ed7d" stroke-width="1"
                            d="M 644.9155537129006 241.04154014025258 C 639.9155537129006 241.04154014025258 623.6020135462409 233.43441142892 618.164166824021 230.8987018584758 L 612.7263201018011 228.3629922880316">
                        </path>
                        <path fill="none" class="highcharts-data-label-connector highcharts-color-3"
                            stroke="#f7a35c" stroke-width="1"
                            d="M 579.5 312.4300900092946 C 574.5 312.4300900092946 565.5 296.8416327411747 562.5 291.64548031846806 L 559.5 286.4493278957614">
                        </path>
                        <path fill="none" class="highcharts-data-label-connector highcharts-color-4"
                            stroke="#8085e9" stroke-width="1"
                            d="M 385.51119484046734 296.3331553421556 C 390.51119484046734 296.3331553421556 402.081371814825 282.544355366014 405.9380974729442 277.9480887073001 L 409.7948231310634 273.3518220485862">
                        </path>
                        <path fill="none" class="highcharts-data-label-connector highcharts-color-5"
                            stroke="#f15c80" stroke-width="1"
                            d="M 330.44595176503447 145.04264339562434 C 335.44595176503447 145.04264339562434 353.1724913192543 148.1683105936291 359.0813378373275 149.21019965963066 L 364.99018435540074 150.25208872563223">
                        </path>
                        <path fill="none" class="highcharts-data-label-connector highcharts-color-6"
                            stroke="#e4d354" stroke-width="1"
                            d="M 374.3178305053484 60 C 379.3178305053484 60 402.0813718148248 63.45564463398625 405.93809747294404 68.05191129270011 L 409.79482313106325 72.64817795141397">
                        </path>
                        <path fill="none" class="highcharts-data-label-connector highcharts-color-7"
                            stroke="#2b908f" stroke-width="1"
                            d="M 404.43050195253613 36 C 409.43050195253613 36 456.9888765503395 34.87260684066324 458.54179082095465 40.66816179839765 L 460.0947050915698 46.46371675613206">
                        </path>
                        <path fill="none" class="highcharts-data-label-connector highcharts-color-8"
                            stroke="#f45b5b" stroke-width="1"
                            d="M 474.96792541762704 12 C 479.96792541762704 12 481.53672878708494 30.544158172880387 482.05966324357087 36.52132636143086 L 482.5825977000568 42.49849454998133">
                        </path>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 "
                            transform="translate(607,40)"><text x="5"
                                style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16">
                                <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                    stroke-width="2px" stroke-linejoin="round" style="">Bananas</tspan>
                                <tspan x="5" y="16">Bananas</tspan>
                            </text></g>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-1 "
                            transform="translate(664,177)"><text x="5"
                                style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16">
                                <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                    stroke-width="2px" stroke-linejoin="round" style="">Kiwi</tspan>
                                <tspan x="5" y="16">Kiwi</tspan>
                            </text></g>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-2 "
                            transform="translate(650,231)"><text x="5"
                                style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16">
                                <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                    stroke-width="2px" stroke-linejoin="round" style="">Mixed nuts</tspan>
                                <tspan x="5" y="16">Mixed nuts</tspan>
                            </text></g>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-3 "
                            transform="translate(585,302)"><text x="5"
                                style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16">
                                <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                    stroke-width="2px" stroke-linejoin="round" style="">Oranges</tspan>
                                <tspan x="5" y="16">Oranges</tspan>
                            </text></g>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-4 "
                            transform="translate(332,286)"><text x="5"
                                style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16">
                                <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                    stroke-width="2px" stroke-linejoin="round" style="">Apples</tspan>
                                <tspan x="5" y="16">Apples</tspan>
                            </text></g>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-5 "
                            transform="translate(284,135)"><text x="5"
                                style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16">
                                <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                    stroke-width="2px" stroke-linejoin="round" style="">Pears</tspan>
                                <tspan x="5" y="16">Pears</tspan>
                            </text></g>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-6 "
                            transform="translate(290,50)"><text x="5"
                                style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16">
                                <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                    stroke-width="2px" stroke-linejoin="round" style="">Clementines</tspan>
                                <tspan x="5" y="16">Clementines</tspan>
                            </text></g>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-7 "
                            transform="translate(314,26)"><text x="5"
                                style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16">
                                <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                    stroke-width="2px" stroke-linejoin="round" style="">Reddish (bag)</tspan>
                                <tspan x="5" y="16">Reddish (bag)</tspan>
                            </text></g>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-8 "
                            transform="translate(376,2)"><text x="5"
                                style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16">
                                <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                    stroke-width="2px" stroke-linejoin="round" style="">Grapes (bunch)</tspan>
                                <tspan x="5" y="16">Grapes (bunch)</tspan>
                            </text></g>
                    </g>
                    <g class="highcharts-legend">
                        <rect fill="none" class="highcharts-legend-box" rx="0" ry="0" x="0" y="0"
                            width="8" height="8" visibility="hidden"></rect>
                        <g>
                            <g></g>
                        </g>
                    </g><text x="998" class="highcharts-credits" text-anchor="end"
                        style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;" y="395">Highcharts.com</text>
                </svg>
            </div>
        </div>
    </div>

    {{-- Tingkatan tempat kerja Alumni --}}
    <div class="bg-white pd-20 card-box mb-30">
        <div id="chart5" data-highcharts-chart="3">
            <div id="highcharts-flm2yo6-11" dir="ltr" class="highcharts-container "
                style="position: relative; overflow: hidden; width: 1008px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                <svg version="1.1" class="highcharts-root "
                    style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                    xmlns="http://www.w3.org/2000/svg" width="1008" height="400" viewBox="0 0 1008 400">
                    <desc>Created with Highcharts 6.0.7</desc>
                    <defs>
                        <clipPath id="highcharts-flm2yo6-12">
                            <rect x="0" y="0" width="988" height="301" fill="none"></rect>
                        </clipPath>
                    </defs>
                    <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1008" height="400"
                        rx="0" ry="0"></rect>
                    <g class="highcharts-pane-group"></g><text x="504" text-anchor="middle" class="highcharts-title"
                        style="color:#333333;font-size:18px;fill:#333333;" y="24">
                        <tspan>Tingkatan tempat kerja Alumni</tspan>
                    </text><text x="504" text-anchor="middle" class="highcharts-subtitle"
                        style="color:#666666;fill:#666666;" y="45"></text><text x="998" class="highcharts-credits"
                        text-anchor="end" style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;"
                        y="395">Highcharts.com</text>
                    <g class="highcharts-label highcharts-tooltip highcharts-color-1"
                        style="cursor:default;pointer-events:none;white-space:nowrap;" transform="translate(503,-9999)"
                        opacity="0" visibility="visible">
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.15" stroke-width="1"
                            transform="translate(1, 1)"></path>
                        <path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            stroke="#434348" stroke-width="1"></path><text x="8"
                            style="font-size:12px;color:#333333;fill:#333333;" y="20">
                            <tspan style="font-size: 10px">Pears</tspan>
                            <tspan style="fill:#434348" x="8" dy="15">●</tspan>
                            <tspan dx="0"> Series 1: </tspan>
                            <tspan style="font-weight:bold" dx="0">71.5</tspan>
                        </text>
                    </g>
                </svg></div>
        </div>
    </div>

    {{-- Lokasi Anda melanjutkan studi --}}
    <div class="bg-white pd-20 card-box mb-30">
        <div id="chart5" data-highcharts-chart="3">
            <div id="highcharts-flm2yo6-11" dir="ltr" class="highcharts-container "
                style="position: relative; overflow: hidden; width: 1008px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                <svg version="1.1" class="highcharts-root "
                    style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                    xmlns="http://www.w3.org/2000/svg" width="1008" height="400" viewBox="0 0 1008 400">
                    <desc>Created with Highcharts 6.0.7</desc>
                    <defs>
                        <clipPath id="highcharts-flm2yo6-12">
                            <rect x="0" y="0" width="988" height="301" fill="none"></rect>
                        </clipPath>
                    </defs>
                    <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1008" height="400"
                        rx="0" ry="0"></rect>
                    <g class="highcharts-pane-group"></g><text x="504" text-anchor="middle" class="highcharts-title"
                        style="color:#333333;font-size:18px;fill:#333333;" y="24">
                        <tspan>Lokasi Anda melanjutkan studi</tspan>
                    </text><text x="504" text-anchor="middle" class="highcharts-subtitle"
                        style="color:#666666;fill:#666666;" y="45"></text><text x="998" class="highcharts-credits"
                        text-anchor="end" style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;"
                        y="395">Highcharts.com</text>
                    <g class="highcharts-label highcharts-tooltip highcharts-color-1"
                        style="cursor:default;pointer-events:none;white-space:nowrap;" transform="translate(503,-9999)"
                        opacity="0" visibility="visible">
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.15" stroke-width="1"
                            transform="translate(1, 1)"></path>
                        <path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            stroke="#434348" stroke-width="1"></path><text x="8"
                            style="font-size:12px;color:#333333;fill:#333333;" y="20">
                            <tspan style="font-size: 10px">Pears</tspan>
                            <tspan style="fill:#434348" x="8" dy="15">●</tspan>
                            <tspan dx="0"> Series 1: </tspan>
                            <tspan style="font-weight:bold" dx="0">71.5</tspan>
                        </text>
                    </g>
                </svg></div>
        </div>
    </div>

    {{-- Sumber biaya studi lanjut Alumni --}}
    <div class="bg-white pd-20 card-box mb-30">
        <div id="chart5" data-highcharts-chart="3">
            <div id="highcharts-flm2yo6-11" dir="ltr" class="highcharts-container "
                style="position: relative; overflow: hidden; width: 1008px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                <svg version="1.1" class="highcharts-root "
                    style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                    xmlns="http://www.w3.org/2000/svg" width="1008" height="400" viewBox="0 0 1008 400">
                    <desc>Created with Highcharts 6.0.7</desc>
                    <defs>
                        <clipPath id="highcharts-flm2yo6-12">
                            <rect x="0" y="0" width="988" height="301" fill="none"></rect>
                        </clipPath>
                    </defs>
                    <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1008" height="400"
                        rx="0" ry="0"></rect>
                    <g class="highcharts-pane-group"></g><text x="504" text-anchor="middle" class="highcharts-title"
                        style="color:#333333;font-size:18px;fill:#333333;" y="24">
                        <tspan>Sumber biaya studi lanjut Alumni</tspan>
                    </text><text x="504" text-anchor="middle" class="highcharts-subtitle"
                        style="color:#666666;fill:#666666;" y="45"></text><text x="998" class="highcharts-credits"
                        text-anchor="end" style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;"
                        y="395">Highcharts.com</text>
                    <g class="highcharts-label highcharts-tooltip highcharts-color-1"
                        style="cursor:default;pointer-events:none;white-space:nowrap;" transform="translate(503,-9999)"
                        opacity="0" visibility="visible">
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.15" stroke-width="1"
                            transform="translate(1, 1)"></path>
                        <path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            stroke="#434348" stroke-width="1"></path><text x="8"
                            style="font-size:12px;color:#333333;fill:#333333;" y="20">
                            <tspan style="font-size: 10px">Pears</tspan>
                            <tspan style="fill:#434348" x="8" dy="15">●</tspan>
                            <tspan dx="0"> Series 1: </tspan>
                            <tspan style="font-weight:bold" dx="0">71.5</tspan>
                        </text>
                    </g>
                </svg></div>
        </div>
    </div>

    {{-- Kapan Alumni memulai studi lanjut --}}
    <div class="bg-white pd-20 card-box mb-30">
        <div id="chart5" data-highcharts-chart="3">
            <div id="highcharts-flm2yo6-11" dir="ltr" class="highcharts-container "
                style="position: relative; overflow: hidden; width: 1008px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                <svg version="1.1" class="highcharts-root "
                    style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                    xmlns="http://www.w3.org/2000/svg" width="1008" height="400" viewBox="0 0 1008 400">
                    <desc>Created with Highcharts 6.0.7</desc>
                    <defs>
                        <clipPath id="highcharts-flm2yo6-12">
                            <rect x="0" y="0" width="988" height="301" fill="none"></rect>
                        </clipPath>
                    </defs>
                    <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1008" height="400"
                        rx="0" ry="0"></rect>
                    <g class="highcharts-pane-group"></g><text x="504" text-anchor="middle" class="highcharts-title"
                        style="color:#333333;font-size:18px;fill:#333333;" y="24">
                        <tspan>Kapan Alumni memulai studi lanjut</tspan>
                    </text><text x="504" text-anchor="middle" class="highcharts-subtitle"
                        style="color:#666666;fill:#666666;" y="45"></text><text x="998" class="highcharts-credits"
                        text-anchor="end" style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;"
                        y="395">Highcharts.com</text>
                    <g class="highcharts-label highcharts-tooltip highcharts-color-1"
                        style="cursor:default;pointer-events:none;white-space:nowrap;" transform="translate(503,-9999)"
                        opacity="0" visibility="visible">
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.15" stroke-width="1"
                            transform="translate(1, 1)"></path>
                        <path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            stroke="#434348" stroke-width="1"></path><text x="8"
                            style="font-size:12px;color:#333333;fill:#333333;" y="20">
                            <tspan style="font-size: 10px">Pears</tspan>
                            <tspan style="fill:#434348" x="8" dy="15">●</tspan>
                            <tspan dx="0"> Series 1: </tspan>
                            <tspan style="font-weight:bold" dx="0">71.5</tspan>
                        </text>
                    </g>
                </svg></div>
        </div>
    </div>

    {{-- Nama Perguruan Tinggi tempat Alumni melanjutkan studi --}}
    <div class="bg-white pd-20 card-box mb-30">
        <div id="chart5" data-highcharts-chart="3">
            <div id="highcharts-flm2yo6-11" dir="ltr" class="highcharts-container "
                style="position: relative; overflow: hidden; width: 1008px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                <svg version="1.1" class="highcharts-root "
                    style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                    xmlns="http://www.w3.org/2000/svg" width="1008" height="400" viewBox="0 0 1008 400">
                    <desc>Created with Highcharts 6.0.7</desc>
                    <defs>
                        <clipPath id="highcharts-flm2yo6-12">
                            <rect x="0" y="0" width="988" height="301" fill="none"></rect>
                        </clipPath>
                    </defs>
                    <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1008" height="400"
                        rx="0" ry="0"></rect>
                    <g class="highcharts-pane-group"></g><text x="504" text-anchor="middle" class="highcharts-title"
                        style="color:#333333;font-size:18px;fill:#333333;" y="24">
                        <tspan>Nama Perguruan Tinggi tempat Alumni melanjutkan studi</tspan>
                    </text><text x="504" text-anchor="middle" class="highcharts-subtitle"
                        style="color:#666666;fill:#666666;" y="45"></text><text x="998" class="highcharts-credits"
                        text-anchor="end" style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;"
                        y="395">Highcharts.com</text>
                    <g class="highcharts-label highcharts-tooltip highcharts-color-1"
                        style="cursor:default;pointer-events:none;white-space:nowrap;" transform="translate(503,-9999)"
                        opacity="0" visibility="visible">
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.15" stroke-width="1"
                            transform="translate(1, 1)"></path>
                        <path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            stroke="#434348" stroke-width="1"></path><text x="8"
                            style="font-size:12px;color:#333333;fill:#333333;" y="20">
                            <tspan style="font-size: 10px">Pears</tspan>
                            <tspan style="fill:#434348" x="8" dy="15">●</tspan>
                            <tspan dx="0"> Series 1: </tspan>
                            <tspan style="font-weight:bold" dx="0">71.5</tspan>
                        </text>
                    </g>
                </svg></div>
        </div>
    </div>

    {{-- Program studi yang Alumni ambil dalam melanjutkan studi --}}
    <div class="bg-white pd-20 card-box mb-30">
        <div id="chart5" data-highcharts-chart="3">
            <div id="highcharts-flm2yo6-11" dir="ltr" class="highcharts-container "
                style="position: relative; overflow: hidden; width: 1008px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                <svg version="1.1" class="highcharts-root "
                    style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                    xmlns="http://www.w3.org/2000/svg" width="1008" height="400" viewBox="0 0 1008 400">
                    <desc>Created with Highcharts 6.0.7</desc>
                    <defs>
                        <clipPath id="highcharts-flm2yo6-12">
                            <rect x="0" y="0" width="988" height="301" fill="none"></rect>
                        </clipPath>
                    </defs>
                    <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1008" height="400"
                        rx="0" ry="0"></rect>
                    <g class="highcharts-pane-group"></g><text x="504" text-anchor="middle" class="highcharts-title"
                        style="color:#333333;font-size:18px;fill:#333333;" y="24">
                        <tspan>Program studi yang Alumni ambil dalam melanjutkan studi</tspan>
                    </text><text x="504" text-anchor="middle" class="highcharts-subtitle"
                        style="color:#666666;fill:#666666;" y="45"></text><text x="998" class="highcharts-credits"
                        text-anchor="end" style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;"
                        y="395">Highcharts.com</text>
                    <g class="highcharts-label highcharts-tooltip highcharts-color-1"
                        style="cursor:default;pointer-events:none;white-space:nowrap;" transform="translate(503,-9999)"
                        opacity="0" visibility="visible">
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.15" stroke-width="1"
                            transform="translate(1, 1)"></path>
                        <path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            stroke="#434348" stroke-width="1"></path><text x="8"
                            style="font-size:12px;color:#333333;fill:#333333;" y="20">
                            <tspan style="font-size: 10px">Pears</tspan>
                            <tspan style="fill:#434348" x="8" dy="15">●</tspan>
                            <tspan dx="0"> Series 1: </tspan>
                            <tspan style="font-weight:bold" dx="0">71.5</tspan>
                        </text>
                    </g>
                </svg></div>
        </div>
    </div>

    {{-- Alasan Alumni melanjutkan studi --}}
    <div class="bg-white pd-20 card-box mb-30">
        <div id="chart5" data-highcharts-chart="3">
            <div id="highcharts-flm2yo6-11" dir="ltr" class="highcharts-container "
                style="position: relative; overflow: hidden; width: 1008px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                <svg version="1.1" class="highcharts-root "
                    style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                    xmlns="http://www.w3.org/2000/svg" width="1008" height="400" viewBox="0 0 1008 400">
                    <desc>Created with Highcharts 6.0.7</desc>
                    <defs>
                        <clipPath id="highcharts-flm2yo6-12">
                            <rect x="0" y="0" width="988" height="301" fill="none"></rect>
                        </clipPath>
                    </defs>
                    <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1008" height="400"
                        rx="0" ry="0"></rect>
                    <g class="highcharts-pane-group"></g><text x="504" text-anchor="middle" class="highcharts-title"
                        style="color:#333333;font-size:18px;fill:#333333;" y="24">
                        <tspan>Alasan Alumni melanjutkan studi</tspan>
                    </text><text x="504" text-anchor="middle" class="highcharts-subtitle"
                        style="color:#666666;fill:#666666;" y="45"></text><text x="998" class="highcharts-credits"
                        text-anchor="end" style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;"
                        y="395">Highcharts.com</text>
                    <g class="highcharts-label highcharts-tooltip highcharts-color-1"
                        style="cursor:default;pointer-events:none;white-space:nowrap;" transform="translate(503,-9999)"
                        opacity="0" visibility="visible">
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.15" stroke-width="1"
                            transform="translate(1, 1)"></path>
                        <path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            stroke="#434348" stroke-width="1"></path><text x="8"
                            style="font-size:12px;color:#333333;fill:#333333;" y="20">
                            <tspan style="font-size: 10px">Pears</tspan>
                            <tspan style="fill:#434348" x="8" dy="15">●</tspan>
                            <tspan dx="0"> Series 1: </tspan>
                            <tspan style="font-weight:bold" dx="0">71.5</tspan>
                        </text>
                    </g>
                </svg></div>
        </div>
    </div>

    {{-- Sumberdana dalam pembiayaan kuliah alumni --}}
    <div class="bg-white pd-20 card-box mb-30">
        <div id="chart5" data-highcharts-chart="3">
            <div id="highcharts-flm2yo6-11" dir="ltr" class="highcharts-container "
                style="position: relative; overflow: hidden; width: 1008px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                <svg version="1.1" class="highcharts-root "
                    style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                    xmlns="http://www.w3.org/2000/svg" width="1008" height="400" viewBox="0 0 1008 400">
                    <desc>Created with Highcharts 6.0.7</desc>
                    <defs>
                        <clipPath id="highcharts-flm2yo6-12">
                            <rect x="0" y="0" width="988" height="301" fill="none"></rect>
                        </clipPath>
                    </defs>
                    <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1008" height="400"
                        rx="0" ry="0"></rect>
                    <g class="highcharts-pane-group"></g><text x="504" text-anchor="middle" class="highcharts-title"
                        style="color:#333333;font-size:18px;fill:#333333;" y="24">
                        <tspan>Sumberdana dalam pembiayaan kuliah alumni</tspan>
                    </text><text x="504" text-anchor="middle" class="highcharts-subtitle"
                        style="color:#666666;fill:#666666;" y="45"></text><text x="998" class="highcharts-credits"
                        text-anchor="end" style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;"
                        y="395">Highcharts.com</text>
                    <g class="highcharts-label highcharts-tooltip highcharts-color-1"
                        style="cursor:default;pointer-events:none;white-space:nowrap;" transform="translate(503,-9999)"
                        opacity="0" visibility="visible">
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.15" stroke-width="1"
                            transform="translate(1, 1)"></path>
                        <path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            stroke="#434348" stroke-width="1"></path><text x="8"
                            style="font-size:12px;color:#333333;fill:#333333;" y="20">
                            <tspan style="font-size: 10px">Pears</tspan>
                            <tspan style="fill:#434348" x="8" dy="15">●</tspan>
                            <tspan dx="0"> Series 1: </tspan>
                            <tspan style="font-weight:bold" dx="0">71.5</tspan>
                        </text>
                    </g>
                </svg></div>
        </div>
    </div>

    {{-- Seberapa erat hubungan antara bidang studi dengan pekerjaan alumni --}}
    <div class="bg-white pd-20 card-box mb-30">
        <div id="chart5" data-highcharts-chart="3">
            <div id="highcharts-flm2yo6-11" dir="ltr" class="highcharts-container "
                style="position: relative; overflow: hidden; width: 1008px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                <svg version="1.1" class="highcharts-root "
                    style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                    xmlns="http://www.w3.org/2000/svg" width="1008" height="400" viewBox="0 0 1008 400">
                    <desc>Created with Highcharts 6.0.7</desc>
                    <defs>
                        <clipPath id="highcharts-flm2yo6-12">
                            <rect x="0" y="0" width="988" height="301" fill="none"></rect>
                        </clipPath>
                    </defs>
                    <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1008" height="400"
                        rx="0" ry="0"></rect>
                    <g class="highcharts-pane-group"></g><text x="504" text-anchor="middle" class="highcharts-title"
                        style="color:#333333;font-size:18px;fill:#333333;" y="24">
                        <tspan>Seberapa erat hubungan antara bidang studi dengan pekerjaan alumni</tspan>
                    </text><text x="504" text-anchor="middle" class="highcharts-subtitle"
                        style="color:#666666;fill:#666666;" y="45"></text><text x="998" class="highcharts-credits"
                        text-anchor="end" style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;"
                        y="395">Highcharts.com</text>
                    <g class="highcharts-label highcharts-tooltip highcharts-color-1"
                        style="cursor:default;pointer-events:none;white-space:nowrap;" transform="translate(503,-9999)"
                        opacity="0" visibility="visible">
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.15" stroke-width="1"
                            transform="translate(1, 1)"></path>
                        <path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            stroke="#434348" stroke-width="1"></path><text x="8"
                            style="font-size:12px;color:#333333;fill:#333333;" y="20">
                            <tspan style="font-size: 10px">Pears</tspan>
                            <tspan style="fill:#434348" x="8" dy="15">●</tspan>
                            <tspan dx="0"> Series 1: </tspan>
                            <tspan style="font-weight:bold" dx="0">71.5</tspan>
                        </text>
                    </g>
                </svg></div>
        </div>
    </div>

    {{-- Tingkat pendidikan tepat/sesuai untuk pekerjaan alumni saat ini --}}
    <div class="bg-white pd-20 card-box mb-30">
        <div id="chart5" data-highcharts-chart="3">
            <div id="highcharts-flm2yo6-11" dir="ltr" class="highcharts-container "
                style="position: relative; overflow: hidden; width: 1008px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                <svg version="1.1" class="highcharts-root "
                    style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                    xmlns="http://www.w3.org/2000/svg" width="1008" height="400" viewBox="0 0 1008 400">
                    <desc>Created with Highcharts 6.0.7</desc>
                    <defs>
                        <clipPath id="highcharts-flm2yo6-12">
                            <rect x="0" y="0" width="988" height="301" fill="none"></rect>
                        </clipPath>
                    </defs>
                    <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1008" height="400"
                        rx="0" ry="0"></rect>
                    <g class="highcharts-pane-group"></g><text x="504" text-anchor="middle" class="highcharts-title"
                        style="color:#333333;font-size:18px;fill:#333333;" y="24">
                        <tspan>Tingkat pendidikan tepat/sesuai untuk pekerjaan alumni saat ini</tspan>
                    </text><text x="504" text-anchor="middle" class="highcharts-subtitle"
                        style="color:#666666;fill:#666666;" y="45"></text><text x="998" class="highcharts-credits"
                        text-anchor="end" style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;"
                        y="395">Highcharts.com</text>
                    <g class="highcharts-label highcharts-tooltip highcharts-color-1"
                        style="cursor:default;pointer-events:none;white-space:nowrap;" transform="translate(503,-9999)"
                        opacity="0" visibility="visible">
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.15" stroke-width="1"
                            transform="translate(1, 1)"></path>
                        <path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            stroke="#434348" stroke-width="1"></path><text x="8"
                            style="font-size:12px;color:#333333;fill:#333333;" y="20">
                            <tspan style="font-size: 10px">Pears</tspan>
                            <tspan style="fill:#434348" x="8" dy="15">●</tspan>
                            <tspan dx="0"> Series 1: </tspan>
                            <tspan style="font-weight:bold" dx="0">71.5</tspan>
                        </text>
                    </g>
                </svg></div>
        </div>
    </div>

    {{-- (A) Tingkat kompetensi yang alumni kuasai pada saat lulus --}}
    <div class="bg-white pd-20 card-box mb-30">
        <div id="chart5" data-highcharts-chart="3">
            <div id="highcharts-flm2yo6-11" dir="ltr" class="highcharts-container "
                style="position: relative; overflow: hidden; width: 1008px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                <svg version="1.1" class="highcharts-root "
                    style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                    xmlns="http://www.w3.org/2000/svg" width="1008" height="400" viewBox="0 0 1008 400">
                    <desc>Created with Highcharts 6.0.7</desc>
                    <defs>
                        <clipPath id="highcharts-flm2yo6-12">
                            <rect x="0" y="0" width="988" height="301" fill="none"></rect>
                        </clipPath>
                    </defs>
                    <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1008" height="400"
                        rx="0" ry="0"></rect>
                    <g class="highcharts-pane-group"></g><text x="504" text-anchor="middle" class="highcharts-title"
                        style="color:#333333;font-size:18px;fill:#333333;" y="24">
                        <tspan>(A) Tingkat kompetensi yang alumni kuasai pada saat lulus</tspan>
                    </text><text x="504" text-anchor="middle" class="highcharts-subtitle"
                        style="color:#666666;fill:#666666;" y="45"></text><text x="998" class="highcharts-credits"
                        text-anchor="end" style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;"
                        y="395">Highcharts.com</text>
                    <g class="highcharts-label highcharts-tooltip highcharts-color-1"
                        style="cursor:default;pointer-events:none;white-space:nowrap;" transform="translate(503,-9999)"
                        opacity="0" visibility="visible">
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.15" stroke-width="1"
                            transform="translate(1, 1)"></path>
                        <path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            stroke="#434348" stroke-width="1"></path><text x="8"
                            style="font-size:12px;color:#333333;fill:#333333;" y="20">
                            <tspan style="font-size: 10px">Pears</tspan>
                            <tspan style="fill:#434348" x="8" dy="15">●</tspan>
                            <tspan dx="0"> Series 1: </tspan>
                            <tspan style="font-weight:bold" dx="0">71.5</tspan>
                        </text>
                    </g>
                </svg></div>
        </div>
    </div>

    {{-- (B) Tingkat kompetensi yang alumni kuasai pada saat ini --}}
    <div class="bg-white pd-20 card-box mb-30">
        <div id="chart5" data-highcharts-chart="3">
            <div id="highcharts-flm2yo6-11" dir="ltr" class="highcharts-container "
                style="position: relative; overflow: hidden; width: 1008px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                <svg version="1.1" class="highcharts-root "
                    style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                    xmlns="http://www.w3.org/2000/svg" width="1008" height="400" viewBox="0 0 1008 400">
                    <desc>Created with Highcharts 6.0.7</desc>
                    <defs>
                        <clipPath id="highcharts-flm2yo6-12">
                            <rect x="0" y="0" width="988" height="301" fill="none"></rect>
                        </clipPath>
                    </defs>
                    <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1008" height="400"
                        rx="0" ry="0"></rect>
                    <g class="highcharts-pane-group"></g><text x="504" text-anchor="middle" class="highcharts-title"
                        style="color:#333333;font-size:18px;fill:#333333;" y="24">
                        <tspan>(A) Tingkat kompetensi yang alumni kuasai pada saat lulus</tspan>
                    </text><text x="504" text-anchor="middle" class="highcharts-subtitle"
                        style="color:#666666;fill:#666666;" y="45"></text><text x="998" class="highcharts-credits"
                        text-anchor="end" style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;"
                        y="395">Highcharts.com</text>
                    <g class="highcharts-label highcharts-tooltip highcharts-color-1"
                        style="cursor:default;pointer-events:none;white-space:nowrap;" transform="translate(503,-9999)"
                        opacity="0" visibility="visible">
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.15" stroke-width="1"
                            transform="translate(1, 1)"></path>
                        <path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            stroke="#434348" stroke-width="1"></path><text x="8"
                            style="font-size:12px;color:#333333;fill:#333333;" y="20">
                            <tspan style="font-size: 10px">Pears</tspan>
                            <tspan style="fill:#434348" x="8" dy="15">●</tspan>
                            <tspan dx="0"> Series 1: </tspan>
                            <tspan style="font-weight:bold" dx="0">71.5</tspan>
                        </text>
                    </g>
                </svg></div>
        </div>
    </div>

    {{-- Seberapa besar penekanan pada metode pembelajaran yang dilaksanakan di JTIK PNJ --}}
    <div class="bg-white pd-20 card-box mb-30">
        <div id="chart5" data-highcharts-chart="3">
            <div id="highcharts-flm2yo6-11" dir="ltr" class="highcharts-container "
                style="position: relative; overflow: hidden; width: 1008px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                <svg version="1.1" class="highcharts-root "
                    style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                    xmlns="http://www.w3.org/2000/svg" width="1008" height="400" viewBox="0 0 1008 400">
                    <desc>Created with Highcharts 6.0.7</desc>
                    <defs>
                        <clipPath id="highcharts-flm2yo6-12">
                            <rect x="0" y="0" width="988" height="301" fill="none"></rect>
                        </clipPath>
                    </defs>
                    <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1008" height="400"
                        rx="0" ry="0"></rect>
                    <g class="highcharts-pane-group"></g><text x="504" text-anchor="middle" class="highcharts-title"
                        style="color:#333333;font-size:18px;fill:#333333;" y="24">
                        <tspan>Seberapa besar penekanan pada metode pembelajaran yang dilaksanakan di JTIK PNJ</tspan>
                    </text><text x="504" text-anchor="middle" class="highcharts-subtitle"
                        style="color:#666666;fill:#666666;" y="45"></text><text x="998" class="highcharts-credits"
                        text-anchor="end" style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;"
                        y="395">Highcharts.com</text>
                    <g class="highcharts-label highcharts-tooltip highcharts-color-1"
                        style="cursor:default;pointer-events:none;white-space:nowrap;" transform="translate(503,-9999)"
                        opacity="0" visibility="visible">
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.15" stroke-width="1"
                            transform="translate(1, 1)"></path>
                        <path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            stroke="#434348" stroke-width="1"></path><text x="8"
                            style="font-size:12px;color:#333333;fill:#333333;" y="20">
                            <tspan style="font-size: 10px">Pears</tspan>
                            <tspan style="fill:#434348" x="8" dy="15">●</tspan>
                            <tspan dx="0"> Series 1: </tspan>
                            <tspan style="font-weight:bold" dx="0">71.5</tspan>
                        </text>
                    </g>
                </svg></div>
        </div>
    </div>

    {{-- Kapan alumni mulai mencari pekerjaan --}}
    <div class="bg-white pd-20 card-box mb-30">
        <div id="chart5" data-highcharts-chart="3">
            <div id="highcharts-flm2yo6-11" dir="ltr" class="highcharts-container "
                style="position: relative; overflow: hidden; width: 1008px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                <svg version="1.1" class="highcharts-root "
                    style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                    xmlns="http://www.w3.org/2000/svg" width="1008" height="400" viewBox="0 0 1008 400">
                    <desc>Created with Highcharts 6.0.7</desc>
                    <defs>
                        <clipPath id="highcharts-flm2yo6-12">
                            <rect x="0" y="0" width="988" height="301" fill="none"></rect>
                        </clipPath>
                    </defs>
                    <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1008" height="400"
                        rx="0" ry="0"></rect>
                    <g class="highcharts-pane-group"></g><text x="504" text-anchor="middle" class="highcharts-title"
                        style="color:#333333;font-size:18px;fill:#333333;" y="24">
                        <tspan>Kapan alumni mulai mencari pekerjaan</tspan>
                    </text><text x="504" text-anchor="middle" class="highcharts-subtitle"
                        style="color:#666666;fill:#666666;" y="45"></text><text x="998" class="highcharts-credits"
                        text-anchor="end" style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;"
                        y="395">Highcharts.com</text>
                    <g class="highcharts-label highcharts-tooltip highcharts-color-1"
                        style="cursor:default;pointer-events:none;white-space:nowrap;" transform="translate(503,-9999)"
                        opacity="0" visibility="visible">
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.15" stroke-width="1"
                            transform="translate(1, 1)"></path>
                        <path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            stroke="#434348" stroke-width="1"></path><text x="8"
                            style="font-size:12px;color:#333333;fill:#333333;" y="20">
                            <tspan style="font-size: 10px">Pears</tspan>
                            <tspan style="fill:#434348" x="8" dy="15">●</tspan>
                            <tspan dx="0"> Series 1: </tspan>
                            <tspan style="font-weight:bold" dx="0">71.5</tspan>
                        </text>
                    </g>
                </svg></div>
        </div>
    </div>

    {{-- Bagaimanakah alumni mencari pekerjaan tersebut --}}
    <div class="bg-white pd-20 card-box mb-30">
        <div id="chart5" data-highcharts-chart="3">
            <div id="highcharts-flm2yo6-11" dir="ltr" class="highcharts-container "
                style="position: relative; overflow: hidden; width: 1008px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                <svg version="1.1" class="highcharts-root "
                    style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                    xmlns="http://www.w3.org/2000/svg" width="1008" height="400" viewBox="0 0 1008 400">
                    <desc>Created with Highcharts 6.0.7</desc>
                    <defs>
                        <clipPath id="highcharts-flm2yo6-12">
                            <rect x="0" y="0" width="988" height="301" fill="none"></rect>
                        </clipPath>
                    </defs>
                    <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1008" height="400"
                        rx="0" ry="0"></rect>
                    <g class="highcharts-pane-group"></g><text x="504" text-anchor="middle" class="highcharts-title"
                        style="color:#333333;font-size:18px;fill:#333333;" y="24">
                        <tspan>Bagaimanakah alumni mencari pekerjaan tersebut</tspan>
                    </text><text x="504" text-anchor="middle" class="highcharts-subtitle"
                        style="color:#666666;fill:#666666;" y="45"></text><text x="998" class="highcharts-credits"
                        text-anchor="end" style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;"
                        y="395">Highcharts.com</text>
                    <g class="highcharts-label highcharts-tooltip highcharts-color-1"
                        style="cursor:default;pointer-events:none;white-space:nowrap;" transform="translate(503,-9999)"
                        opacity="0" visibility="visible">
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.15" stroke-width="1"
                            transform="translate(1, 1)"></path>
                        <path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            stroke="#434348" stroke-width="1"></path><text x="8"
                            style="font-size:12px;color:#333333;fill:#333333;" y="20">
                            <tspan style="font-size: 10px">Pears</tspan>
                            <tspan style="fill:#434348" x="8" dy="15">●</tspan>
                            <tspan dx="0"> Series 1: </tspan>
                            <tspan style="font-weight:bold" dx="0">71.5</tspan>
                        </text>
                    </g>
                </svg></div>
        </div>
    </div>

    {{-- Bagaimanakah alumni mencari pekerjaan tersebut --}}
    <div class="bg-white pd-20 card-box mb-30">
        <div id="chart5" data-highcharts-chart="3">
            <div id="highcharts-flm2yo6-11" dir="ltr" class="highcharts-container "
                style="position: relative; overflow: hidden; width: 1008px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                <svg version="1.1" class="highcharts-root "
                    style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                    xmlns="http://www.w3.org/2000/svg" width="1008" height="400" viewBox="0 0 1008 400">
                    <desc>Created with Highcharts 6.0.7</desc>
                    <defs>
                        <clipPath id="highcharts-flm2yo6-12">
                            <rect x="0" y="0" width="988" height="301" fill="none"></rect>
                        </clipPath>
                    </defs>
                    <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1008" height="400"
                        rx="0" ry="0"></rect>
                    <g class="highcharts-pane-group"></g><text x="504" text-anchor="middle" class="highcharts-title"
                        style="color:#333333;font-size:18px;fill:#333333;" y="24">
                        <tspan>Bagaimanakah alumni mencari pekerjaan tersebut</tspan>
                    </text><text x="504" text-anchor="middle" class="highcharts-subtitle"
                        style="color:#666666;fill:#666666;" y="45"></text><text x="998" class="highcharts-credits"
                        text-anchor="end" style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;"
                        y="395">Highcharts.com</text>
                    <g class="highcharts-label highcharts-tooltip highcharts-color-1"
                        style="cursor:default;pointer-events:none;white-space:nowrap;" transform="translate(503,-9999)"
                        opacity="0" visibility="visible">
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.15" stroke-width="1"
                            transform="translate(1, 1)"></path>
                        <path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            stroke="#434348" stroke-width="1"></path><text x="8"
                            style="font-size:12px;color:#333333;fill:#333333;" y="20">
                            <tspan style="font-size: 10px">Pears</tspan>
                            <tspan style="fill:#434348" x="8" dy="15">●</tspan>
                            <tspan dx="0"> Series 1: </tspan>
                            <tspan style="font-weight:bold" dx="0">71.5</tspan>
                        </text>
                    </g>
                </svg></div>
        </div>
    </div>

    {{-- Berapa perusahaan/instansi/institusi yang sudah alumni lamar (lewat surat atau email) sebelum alumni memperoleh pekerjaan --}}
    <div class="bg-white pd-20 card-box mb-30">
        <div id="chart5" data-highcharts-chart="3">
            <div id="highcharts-flm2yo6-11" dir="ltr" class="highcharts-container "
                style="position: relative; overflow: hidden; width: 1008px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                <svg version="1.1" class="highcharts-root "
                    style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                    xmlns="http://www.w3.org/2000/svg" width="1008" height="400" viewBox="0 0 1008 400">
                    <desc>Created with Highcharts 6.0.7</desc>
                    <defs>
                        <clipPath id="highcharts-flm2yo6-12">
                            <rect x="0" y="0" width="988" height="301" fill="none"></rect>
                        </clipPath>
                    </defs>
                    <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1008" height="400"
                        rx="0" ry="0"></rect>
                    <g class="highcharts-pane-group"></g><text x="504" text-anchor="middle" class="highcharts-title"
                        style="color:#333333;font-size:18px;fill:#333333;" y="24">
                        <tspan>Berapa perusahaan/instansi/institusi yang sudah alumni lamar (lewat surat atau email) sebelum alumni memperoleh pekerjaan</tspan>
                    </text><text x="504" text-anchor="middle" class="highcharts-subtitle"
                        style="color:#666666;fill:#666666;" y="45"></text><text x="998" class="highcharts-credits"
                        text-anchor="end" style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;"
                        y="395">Highcharts.com</text>
                    <g class="highcharts-label highcharts-tooltip highcharts-color-1"
                        style="cursor:default;pointer-events:none;white-space:nowrap;" transform="translate(503,-9999)"
                        opacity="0" visibility="visible">
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.15" stroke-width="1"
                            transform="translate(1, 1)"></path>
                        <path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            stroke="#434348" stroke-width="1"></path><text x="8"
                            style="font-size:12px;color:#333333;fill:#333333;" y="20">
                            <tspan style="font-size: 10px">Pears</tspan>
                            <tspan style="fill:#434348" x="8" dy="15">●</tspan>
                            <tspan dx="0"> Series 1: </tspan>
                            <tspan style="font-weight:bold" dx="0">71.5</tspan>
                        </text>
                    </g>
                </svg></div>
        </div>
    </div>

    {{-- Jumlah perusahaan/instansi/institusi yang merespon lamaran alumni --}}
    <div class="bg-white pd-20 card-box mb-30">
        <div id="chart5" data-highcharts-chart="3">
            <div id="highcharts-flm2yo6-11" dir="ltr" class="highcharts-container "
                style="position: relative; overflow: hidden; width: 1008px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                <svg version="1.1" class="highcharts-root "
                    style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                    xmlns="http://www.w3.org/2000/svg" width="1008" height="400" viewBox="0 0 1008 400">
                    <desc>Created with Highcharts 6.0.7</desc>
                    <defs>
                        <clipPath id="highcharts-flm2yo6-12">
                            <rect x="0" y="0" width="988" height="301" fill="none"></rect>
                        </clipPath>
                    </defs>
                    <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1008" height="400"
                        rx="0" ry="0"></rect>
                    <g class="highcharts-pane-group"></g><text x="504" text-anchor="middle" class="highcharts-title"
                        style="color:#333333;font-size:18px;fill:#333333;" y="24">
                        <tspan>Jumlah perusahaan/instansi/institusi yang merespon lamaran alumni</tspan>
                    </text><text x="504" text-anchor="middle" class="highcharts-subtitle"
                        style="color:#666666;fill:#666666;" y="45"></text><text x="998" class="highcharts-credits"
                        text-anchor="end" style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;"
                        y="395">Highcharts.com</text>
                    <g class="highcharts-label highcharts-tooltip highcharts-color-1"
                        style="cursor:default;pointer-events:none;white-space:nowrap;" transform="translate(503,-9999)"
                        opacity="0" visibility="visible">
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.15" stroke-width="1"
                            transform="translate(1, 1)"></path>
                        <path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            stroke="#434348" stroke-width="1"></path><text x="8"
                            style="font-size:12px;color:#333333;fill:#333333;" y="20">
                            <tspan style="font-size: 10px">Pears</tspan>
                            <tspan style="fill:#434348" x="8" dy="15">●</tspan>
                            <tspan dx="0"> Series 1: </tspan>
                            <tspan style="font-weight:bold" dx="0">71.5</tspan>
                        </text>
                    </g>
                </svg></div>
        </div>
    </div>

    {{-- Jumlah perusahaan/instansi/institusi yang mengundang alumni untuk wawancara --}}
    <div class="bg-white pd-20 card-box mb-30">
        <div id="chart5" data-highcharts-chart="3">
            <div id="highcharts-flm2yo6-11" dir="ltr" class="highcharts-container "
                style="position: relative; overflow: hidden; width: 1008px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                <svg version="1.1" class="highcharts-root "
                    style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                    xmlns="http://www.w3.org/2000/svg" width="1008" height="400" viewBox="0 0 1008 400">
                    <desc>Created with Highcharts 6.0.7</desc>
                    <defs>
                        <clipPath id="highcharts-flm2yo6-12">
                            <rect x="0" y="0" width="988" height="301" fill="none"></rect>
                        </clipPath>
                    </defs>
                    <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1008" height="400"
                        rx="0" ry="0"></rect>
                    <g class="highcharts-pane-group"></g><text x="504" text-anchor="middle" class="highcharts-title"
                        style="color:#333333;font-size:18px;fill:#333333;" y="24">
                        <tspan>Jumlah perusahaan/instansi/institusi yang mengundang alumni untuk wawancara</tspan>
                    </text><text x="504" text-anchor="middle" class="highcharts-subtitle"
                        style="color:#666666;fill:#666666;" y="45"></text><text x="998" class="highcharts-credits"
                        text-anchor="end" style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;"
                        y="395">Highcharts.com</text>
                    <g class="highcharts-label highcharts-tooltip highcharts-color-1"
                        style="cursor:default;pointer-events:none;white-space:nowrap;" transform="translate(503,-9999)"
                        opacity="0" visibility="visible">
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.15" stroke-width="1"
                            transform="translate(1, 1)"></path>
                        <path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            stroke="#434348" stroke-width="1"></path><text x="8"
                            style="font-size:12px;color:#333333;fill:#333333;" y="20">
                            <tspan style="font-size: 10px">Pears</tspan>
                            <tspan style="fill:#434348" x="8" dy="15">●</tspan>
                            <tspan dx="0"> Series 1: </tspan>
                            <tspan style="font-weight:bold" dx="0">71.5</tspan>
                        </text>
                    </g>
                </svg></div>
        </div>
    </div>

    {{-- Keaktifan alumni mencari pekerjaan dalam 4 minggu terakhir --}}
    <div class="bg-white pd-20 card-box mb-30">
        <div id="chart5" data-highcharts-chart="3">
            <div id="highcharts-flm2yo6-11" dir="ltr" class="highcharts-container "
                style="position: relative; overflow: hidden; width: 1008px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                <svg version="1.1" class="highcharts-root "
                    style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                    xmlns="http://www.w3.org/2000/svg" width="1008" height="400" viewBox="0 0 1008 400">
                    <desc>Created with Highcharts 6.0.7</desc>
                    <defs>
                        <clipPath id="highcharts-flm2yo6-12">
                            <rect x="0" y="0" width="988" height="301" fill="none"></rect>
                        </clipPath>
                    </defs>
                    <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1008" height="400"
                        rx="0" ry="0"></rect>
                    <g class="highcharts-pane-group"></g><text x="504" text-anchor="middle" class="highcharts-title"
                        style="color:#333333;font-size:18px;fill:#333333;" y="24">
                        <tspan>Keaktifan alumni mencari pekerjaan dalam 4 minggu terakhir</tspan>
                    </text><text x="504" text-anchor="middle" class="highcharts-subtitle"
                        style="color:#666666;fill:#666666;" y="45"></text><text x="998" class="highcharts-credits"
                        text-anchor="end" style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;"
                        y="395">Highcharts.com</text>
                    <g class="highcharts-label highcharts-tooltip highcharts-color-1"
                        style="cursor:default;pointer-events:none;white-space:nowrap;" transform="translate(503,-9999)"
                        opacity="0" visibility="visible">
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.15" stroke-width="1"
                            transform="translate(1, 1)"></path>
                        <path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            stroke="#434348" stroke-width="1"></path><text x="8"
                            style="font-size:12px;color:#333333;fill:#333333;" y="20">
                            <tspan style="font-size: 10px">Pears</tspan>
                            <tspan style="fill:#434348" x="8" dy="15">●</tspan>
                            <tspan dx="0"> Series 1: </tspan>
                            <tspan style="font-weight:bold" dx="0">71.5</tspan>
                        </text>
                    </g>
                </svg></div>
        </div>
    </div>

    {{-- Alasan alumni bekerja yang tidak sesuai pendidikannya --}}
    <div class="bg-white pd-20 card-box mb-30">
        <div id="chart5" data-highcharts-chart="3">
            <div id="highcharts-flm2yo6-11" dir="ltr" class="highcharts-container "
                style="position: relative; overflow: hidden; width: 1008px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                <svg version="1.1" class="highcharts-root "
                    style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                    xmlns="http://www.w3.org/2000/svg" width="1008" height="400" viewBox="0 0 1008 400">
                    <desc>Created with Highcharts 6.0.7</desc>
                    <defs>
                        <clipPath id="highcharts-flm2yo6-12">
                            <rect x="0" y="0" width="988" height="301" fill="none"></rect>
                        </clipPath>
                    </defs>
                    <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1008" height="400"
                        rx="0" ry="0"></rect>
                    <g class="highcharts-pane-group"></g><text x="504" text-anchor="middle" class="highcharts-title"
                        style="color:#333333;font-size:18px;fill:#333333;" y="24">
                        <tspan>Alasan alumni bekerja yang tidak sesuai pendidikannya</tspan>
                    </text><text x="504" text-anchor="middle" class="highcharts-subtitle"
                        style="color:#666666;fill:#666666;" y="45"></text><text x="998" class="highcharts-credits"
                        text-anchor="end" style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;"
                        y="395">Highcharts.com</text>
                    <g class="highcharts-label highcharts-tooltip highcharts-color-1"
                        style="cursor:default;pointer-events:none;white-space:nowrap;" transform="translate(503,-9999)"
                        opacity="0" visibility="visible">
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3"
                            transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            isShadow="true" stroke="#000000" stroke-opacity="0.15" stroke-width="1"
                            transform="translate(1, 1)"></path>
                        <path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box"
                            d="M 3.5 0.5 L 99.5 0.5 C 102.5 0.5 102.5 0.5 102.5 3.5 L 102.5 41.5 C 102.5 44.5 102.5 44.5 99.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                            stroke="#434348" stroke-width="1"></path><text x="8"
                            style="font-size:12px;color:#333333;fill:#333333;" y="20">
                            <tspan style="font-size: 10px">Pears</tspan>
                            <tspan style="fill:#434348" x="8" dy="15">●</tspan>
                            <tspan dx="0"> Series 1: </tspan>
                            <tspan style="font-weight:bold" dx="0">71.5</tspan>
                        </text>
                    </g>
                </svg></div>
        </div>
    </div>


@endsection
