@extends('layouts.main.master')
@section('title')
Giới thiệu về {{$setting->company}}
@endsection
@section('description')
@endsection
@section('css')

@endsection
@section('js')
<script>
   $('.tuan').click(function(e){
      console.log('tuan clicked');
   })
</script>
@endsection
@section('content')
<main id="main" class="">
   <div id="content" class="content-area page-wrapper" role="main">
      <div class="row row-main">
         <div class="large-12 col">
            <div class="col-inner">
               <p style="text-align: center;"><span style="font-size: 140%;"><strong>Giới thiệu {{$setting->company}}</strong></span></p>
               <p><strong> {!!$pageContent->content!!}</strong></p>
               <p>Địa chỉ: <i class="fa fa-map-marker-alt"></i> {{$setting->address1}}</p>
               <p>MST: ######</p>
               <p><i class="fa fa-phone rotate"></i> <a href="tel:{{$setting->phone1}}">{{$setting->phone1}}</a></p>
               <p><i class="fa fa-phone rotate"></i> <a href="tel:{{$setting->phone2}}">{{$setting->phone2}}</a></p>
               <p>Email: <a href="mailto:{{$setting->email}}">{{$setting->email}}</a></p>
               <p>	{!!$setting->iframe_map!!}</p>
                 
            </div>
         </div>
      </div>
   </div>
</main>
@endsection