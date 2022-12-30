@extends('layouts.main.master')
@section('title')
{{($detail_service->name)}}
@endsection
@section('description')
{{($detail_service->description)}}
@endsection
@section('image')
{{url(''.$detail_service->image)}}
@endsection
@section('css')
<link href="{{ asset('frontend/css/breadcrumb_style.scss.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('frontend/css/blog_article_style.scss.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('frontend/css/sidebar_style.scss.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('js')
@endsection
@section('content')
ttttttttttttttttttt
@endsection