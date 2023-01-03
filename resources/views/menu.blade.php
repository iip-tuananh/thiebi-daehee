@extends('layouts.main.master')
@section('title')
Đặt bàn tại Lynh
@endsection
@section('description')
Đặt bàn tại Lynh
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('js')
<script src="{{asset('frontend/js/getprobycate.js')}}"></script>
@endsection
@section('content')

@endsection