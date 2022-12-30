@extends('layouts.main.master')
@section('title')
Liên hệ với chúng tôi
@endsection
@section('description')
Liên hệ với chúng tôi
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
<link href="{{asset('frontend/css/breadcrumb_style.scss.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('frontend/css/style_page.scss.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('frontend/css/contact_style.scss.css')}}" rel="stylesheet" type="text/css" media="all" />
@endsection
@section('js')
@endsection
@section('content')
<main id="main" class="">
	<div id="content" class="content-area page-wrapper" role="main">
	   <div class="row row-main">
		  <div class="large-12 col">
			 <div class="col-inner">
				<p style="text-align: center;"><span style="font-size: 250%; color: #003366; font-family: 'times new roman', times, serif;"><strong>Thông tin liên hệ</strong></span></p>
				<section class="section lien-he-page  " id="section_1217749558">
				   <div class="bg section-bg fill bg-fill bg-loaded bg-loaded" >
				   </div>
				   <div class="section-content relative">
					  <div class="row"  id="row-339761416">
						 <div id="col-336744686" class="col cot1 medium-6 small-12 large-6"  >
							<div class="col-inner "  >
							   <p class="cusor-pointer">{{$setting->company}}</p>
							   <p class="cusor-pointer"><strong>Địa chỉ: {{$setting->address1}}</strong></p>
							   <p class="cusor-pointer">Hotline: {{$setting->phone1}}  |  {{$setting->phone2}}</p>
							   <p class="cusor-pointer">Email: {{$setting->email}}</p>
							   <p class="cusor-pointer">MST: #####</p>
							</div>
						 </div>
						 <div id="col-1447950141" class="col medium-6 small-12 large-6"  >
							<div class="col-inner"  >
								{!!$setting->iframe_map!!}
							</div>
						 </div>
					  </div>
				   </div>
				   <style>
					  #section_1217749558 {
					  padding-top: 30px;
					  padding-bottom: 30px;
					  }
					  #section_1217749558 .ux-shape-divider--top svg {
					  height: 150px;
					  --divider-top-width: 100%;
					  }
					  #section_1217749558 .ux-shape-divider--bottom svg {
					  height: 150px;
					  --divider-width: 100%;
					  }
				   </style>
				</section>
			 </div>
		  </div>
	   </div>
	</div>
 </main>
	
@endsection
