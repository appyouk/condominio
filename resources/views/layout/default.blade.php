<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="" />
    <meta name="author" content="Gabriel Oliveira" />
    <meta name="robots" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('page_description', $page_description ?? '')"/>
    <meta property="og:title" content="Youk.app - Dashboard" />
    <meta property="og:description" content="{{ config('dz.name') }} | @yield('title', $page_title ?? '')" />
    <meta property="og:image" content="https://zenix.dexignzone.com/laravel/social-image.png" />
    <meta name="format-detection" content="telephone=no">
    <title>{{ config('dz.name') }} | @yield('title', $page_title ?? '')</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">
    
    @php
        $action = isset($action) ? 'ZenixadminController_'.$action : 'dashboard_1';
    @endphp
    @if(!empty(config('dz.public.pagelevel.css.'.$action))) 
        @foreach(config('dz.public.pagelevel.css.'.$action) as $style)
            <link href="{{ asset($style) }}" rel="stylesheet" type="text/css"/>
        @endforeach
    @endif  

    {{-- Global Theme Styles (used by all pages) --}}
    @if(!empty(config('dz.public.global.css'))) 
        @foreach(config('dz.public.global.css') as $style)
            <link href="{{ asset($style) }}" rel="stylesheet" type="text/css"/>
        @endforeach
    @endif  
    
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{!! url('/'); !!}" class="brand-logo">
                <svg class="brand-title" version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 94 44" width="94" height="44">
                    <title>Youk.app</title>
                    <defs>
                        <image class="svg-logo-path" width="94" height="44" id="img1" href="data:image/png;base64,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"/>
                    </defs>
                    <use id="Background" href="#img1" x="0" y="0"/>
                </svg>
                
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        
		@include('elements.header')
		
		
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('elements.sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->

		
		
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            @yield('content')
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        
		@include('elements.footer')
		
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
	@include('elements.footer-scripts')
    @yield('scripts')
</body>
</html>