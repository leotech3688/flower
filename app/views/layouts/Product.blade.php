@extends('layouts.Base')

@section('description') 雷奥科技是一家集网站制作，微信开发，APP开发为一体的互联网微型公司。  @stop
@section('keywords') 雷奥科技,网站制作,微信开发,APP开发,互联网  @stop
@section('beforeScript')
	{{ script('jquery-1.10.2') }}
	{{ script('bootstrap-3.0.3') }}
	{{ script('superslide.2.1') }}
	{{ script('public') }}
	<!--[if IE 7]>
	    {{ style('font-awesome-ie7') }}
	<![endif]-->
	<!--[if lt IE 9]>
	    {{ script('html5shiv') }}
	   	{{ script('respond') }}
	<![endif]-->
@parent @stop
@section('script')
	
@stop
@section('beforeStyle')
    {{ style('bootstrap-3.0.3') }}
    {{ style('font-awesome') }}
    {{ style('main') }}
@parent @stop

@section('style')

@parent @stop

@section('body')
    @include('common.TopBar')
    @include('common.Header')
    @yield('container')
    @include('common.Guideline')
	@include('common.FootBar')
@stop