<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="zh"> <!--<![endif]-->
	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>
        @section('title')
        @show{{-- 页面标题 --}}
        </title>
        <meta name="description" content="@yield('description')">
        <meta name="keywords" content="@yield('keywords')" />
        <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        @section('beforeScript')
        @show{{-- 页面内联JS之前 --}}
        <script>
            (function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)
            @section('script')
            @show{{-- 页面内联JS累加 --}}
        </script>
        @section('beforeStyle')
        @show{{-- 页面内联样式表之前 --}}
        <style>
            @section('style')
            @show{{-- 页面内联样式表累加 --}}
        </style>
        @section('afterStyle')
        @show{{-- 页面内联样式表之后 --}}
	</head>
    <body>
        @yield('body')
        @section('AfterScript')
        @show{{-- 页面内联JS之前 --}}
    </body>
</html>
        