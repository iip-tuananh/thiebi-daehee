@extends('layouts.main.master')
@section('title')
    {{ $setting->company }}
@endsection
@section('description')
    {{ $setting->webname }}
@endsection
@section('image')
    {{ url('' . $banners[0]->image) }}
@endsection
@section('css')
    <link rel='stylesheet' href='{{ asset('frontend/css/owl.carousel.min.css') }}' type='text/css' />
    <link rel='stylesheet' href='{{ asset('frontend/css/owl.theme.default.min.css') }}' type='text/css' />
@endsection
@section('js')
    
@endsection
@section('content')
<main id="main" class="">
   <div id="content" role="main" class="content-area">
      @include('banner');
      {{-- banner3 --}}
      <div class="pb-3">
         <section class="section section0 pb-3" id="section_979736544">
            <div class="bg section-bg fill bg-fill bg-loaded bg-loaded">
            </div>
            <div class="section-content relative">
               <div class="row row-small row1" id="row-2146003693">
                  @foreach ($bannerPhu as $banner)
                  <div id="" class="col medium-4 small-12 large-4">
                     <div class="col-inner">
                        <div class="icon-box featured-box icon-box-left text-left">
                           <div class="icon-box-img" style="width: 60px">
                              <div class="icon">
                                 <div class="icon-inner">
                                    <img width="200" height="200" src="{{$banner->image}}" alt="quality icon" decoding="async" loading="lazy" sizes="(max-width: 200px) 100vw, 200px" title="Nhà thông minh Hải Phòng 37">					
                                 </div>
                              </div>
                           </div>
                           <div class="icon-box-text last-reset">
                              <h3>{{$banner->title}}</h3>
                              <p class="limit-text-3">{{$banner->description}}</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  @endforeach
               </div>
            </div>
         </section>
      </div>
      {{-- end-banner3 --}}

      {{-- section-nha-thong-minh --}}
         <section class="section section1 bg-custom" id="section_1581285828">
            <div class="bg section-bg fill bg-fill bg-loaded bg-loaded">
            </div>
            <div class="section-content relative">
               <div class="row row-small align-center row2" id="row-2031977444">
                  <div id="col-529159968" class="col cot1 medium-6 small-12 large-6">
                     <div class="col-inner text-center">
                        <div class="header-pro">
                           <div class="box-header">
                              <h2 class="box-title">Nhà Thông Minh Daehee</h2>
                           </div>
                        </div>
                        <p>Cung cấp toàn bộ giải pháp smart home như phần mềm, thiết bị, cảm biến, camera.</p>
                     </div>
                  </div>
               </div>
               <div class="row row-small row3" id="row-608003346">
                  <div id="col-1778355034" class="col small-12 large-12">
                     <div class="col-inner text-center">
                        <div class="row large-columns-4 medium-columns-3 small-columns-2 row-small">
                        </div>
                        <div class="row large-columns-4 medium-columns-1 small-columns-1 slider row-slider slider-nav-simple slider-nav-push" data-flickity-options="{&quot;imagesLoaded&quot;: true, &quot;groupCells&quot;: &quot;100%&quot;, &quot;dragThreshold&quot; : 5, &quot;cellAlign&quot;: &quot;left&quot;,&quot;wrapAround&quot;: true,&quot;prevNextButtons&quot;: true,&quot;percentPosition&quot;: true,&quot;pageDots&quot;: false, &quot;rightToLeft&quot;: false, &quot;autoPlay&quot; : false}">
                        @foreach ($hotBlogs as $blog)
                              <div class="col post-item ">
                                 <div class="col-inner pd-20">
                                    <a href="#" class="plain">
                                       <div class="box box-normal box-text-bottom box-blog-post has-hover item-border">
                                          <div class="box-image">
                                             <div class="image-cover" style="padding-top:90.25%;">
                                                <img  src="{{$blog->image}}" class="attachment-medium size-medium wp-post-image border-img" alt="he thong giu xe thong minh toi uu hoat dong cua bai giu" decoding="async"   title="{{languageName($blog->title)}}">  							  							  						
                                             </div>
                                          </div>
                                          <div class="box-text text-center">
                                             <div class="box-text-inner blog-post-inner">
                                                <h5 class="post-title limit-text-2 ">{{languageName($blog->title)}}</h5>
                                                <div class="is-divider"></div>
                                                <p class="from_the_blog_excerpt limit-text-3">{{languageName($blog->description)}}</p>
                                             </div>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                        @endforeach
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <style>
            
            </style>
         </section>
      {{-- end-section-nha-thong-minh --}}
      {{-- section dự án đã thi công --}}
         <section class="section section2" id="section_654513599">
            <div class="bg section-bg fill bg-fill bg-loaded bg-loaded">
            </div>
            <div class="section-content relative">
               <div class="row row-small align-center row1" id="row-1273519743">
                  <div id="col-1823573092" class="col cot1 medium-7 small-12 large-7">
                     <div class="col-inner text-center">
                        <h2>Dự án đã thi công</h2>
                        <p>Danh sách các dự án về smarthome và thiết bị mà nhà thông minh Daehee đang làm.</p>
                     </div>
                  </div>
                  <div id="col-1778355034" class="col small-12 large-12">
                     <div class="col-inner text-center">
                        <div class="row large-columns-4 medium-columns-3 small-columns-2 row-small">
                        </div>
                        <div class="row large-columns-4 medium-columns-1 small-columns-1 slider row-slider slider-nav-simple slider-nav-push" data-flickity-options="{&quot;imagesLoaded&quot;: true, &quot;groupCells&quot;: &quot;100%&quot;, &quot;dragThreshold&quot; : 5, &quot;cellAlign&quot;: &quot;left&quot;,&quot;wrapAround&quot;: true,&quot;prevNextButtons&quot;: true,&quot;percentPosition&quot;: true,&quot;pageDots&quot;: false, &quot;rightToLeft&quot;: false, &quot;autoPlay&quot; : false}">
               
                           @foreach ($projects as $key=>$project)
                           @php
                           // dd($project);
                           $img = json_decode($project->images);
                           // dd($project['name']);
                           @endphp
                           <div class="col post-item ">
                              <div class="col-inner pd-20">
                                 <a href="#" class="plain">
                                    <div class="box box-normal box-text-bottom box-blog-post has-hover item-border">
                                       <div class="box-image">
                                          <div class="image-cover" style="padding-top:90.25%;">
                                             <img  src="{{$img[0]}}" class="attachment-medium size-medium wp-post-image border-img" alt="{{$project['name']}}" decoding="async">  	  							  						
                                          </div>
                                       </div>
                                       <div class="box-text text-center">
                                          <div class="box-text-inner blog-post-inner">
                           
                                             <h5 class="post-title limit-text-2 ">{{$project['name']}}</h5>
                                             <div class="is-divider"></div>
                                       
                                             <p class="from_the_blog_excerpt limit-text-3">{{languageName($project['description'])}}</p>
                                          </div>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                           @endforeach
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         
         </section>
      {{-- hết section dự án đã thi công --}}
      {{-- section sản phẩm --}}
      @foreach ($categoryProduct as $key => $cate)
         @if (count($cate->product) > 0)
         <section class="section section " id="section_1402672276">
            <div class="bg section-bg fill bg-fill bg-loaded bg-loaded bg-custom">
            </div>
            <div class="section-content relative">
               <div class="row row-small row1" id="row-65385174">
                  <div id="col-706097569" class="col small-12 large-12">
                     <div class="col-inner text-center">
                        <div class="header-pro">
                           <div class="box-header">
                              <h2 class="box-title">{{languageName($cate->name)}}</h2>
                           </div>
                        </div>
                        <div class="tabbed-content">
                           <div class="tab-panels">
                              <div class="panel active entry-content" id="tab_công-tắc-thông-minh">
                                 <div class="row large-columns-4 medium-columns-3 small-columns-2 row-small">
                                    @foreach ($cate->product as $product)
                                    @php
                                          $img = json_decode($product->images);
                                          $discountPrice = $product->price - ($product->price * ($product->discount / 100));
                                          @endphp
                                        
                                       <div class="col">
                                          <div class="col-inner">
                                          <div class="badge-container absolute left top z-1"></div>
                                             <div class="product-small box has-hover box-normal box-text-bottom item-border cusor-pointer">
                                                   <div class="box-image">
                                                      <div class="image-cover" style="padding-top:90%;">
                                                         <a href="{{route('detailProduct',['cate'=>$product->cate_slug,'slug'=>$product->slug])}}" aria-label="{{languageName($product->name)}}">
                                                         <img width="600" height="600" src="{{$img[0]}}" class="attachment-original size-original border-img" alt="{{languageName($product->name)}}" decoding="async" loading="lazy" sizes="(max-width: 600px) 100vw, 600px" title="{{languageName($product->name)}}">									</a>
                                                      </div>
                                                         <div class="image-tools top right show-on-hover">
                                                         </div>
                                                         <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                                         </div>
                                                   </div>
                                                <div class="box-text text-center">
                                                   <div class="title-wrapper">
                                                      <p class="name product-title woocommerce-loop-product__title"><a href="{{route('detailProduct',['cate'=>$product->cate_slug,'slug'=>$product->slug])}}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link limit-text-2">{{languageName($product->name)}}</a></p>
                                                   </div>
                                                   <div class="price-wrapper limit-text-3">
                                                      {!!languageName($product->description)!!}
                                                   </div>
                                                   <div>
                                                      @if($product->price > 0)
                                                      <span class="price"><span class="woocommerce-Price-amount amount">  {{number_format($product->price,0,'','.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">đ</span></bdi></span></span>
                                                      @else
                                                      <span class="price"><span class="woocommerce-Price-amount amount">Liên Hệ&nbsp;<span class="woocommerce-Price-currencySymbol"></span></bdi></span></span>
                                                      @endif
                                                   </div>
                                                </div>
                                             </div>
                                        
                                          </div>
                                       </div>
                               
                                    @endforeach
                                 </div>
                              </div>
                           
                           
                           </div>
                        </div>
                     </div>
                  
                  </div>
               </div>
            </div>
      
         </section>
         <div></div>
         @endif
      @endforeach
      {{-- end-section-sanpham --}}
      {{-- section tin tuc --}}
         <section class="section section4" id="section_525991292">
            <div class="bg section-bg fill bg-fill bg-loaded bg-loaded">
            </div>
            <div class="section-content relative">
               <div class="row row-small row1" id="row-1566795997">
                  <div class="container section-title-container col medium-12">
                     <h3 class="section-title section-title-normal">
                        <span class="section-title-main">Tin Tức</span>
                        <a href="{{route('allListBlog')}}" target="">Xem tất cả<i class="icon-angle-right"></i></a>
                     </h3>
                  </div>
                  <div id="col-350622902" class="col cot1 medium-8 small-12 large-8">
                     <div class="col-inner">
                        <div class="row large-columns-3 medium-columns-1 small-columns-1 row-small">
                           @foreach ($hotBlogs as $blog)
                           <div class="col post-item">
                              <div class="col-inner">
                                 <a href="{{route('detailBlog',['slug'=>$blog->slug ])}}" class="plain">
                                    <div class="box box-normal box-text-bottom box-blog-post has-hover item-border curso-poiter">
                                       <div class="box-image">
                                          <div class="image-cover" style="padding-top:75%;">
                                             <img width="851" height="478" src="{{$blog->image}}" class="attachment-original size-original wp-post-image" alt="he thong giu xe thong minh toi uu hoat dong cua bai giu" decoding="async" loading="lazy" srcset="{{$blog->image}}" title="{{languageName($blog->title)}}">  							  							  						
                                          </div>
                                       </div>
                                       <div class="box-text text-left" style="background-color:rgb(255, 255, 255);">
                                          <div class="box-text-inner blog-post-inner">
                                             <h5 class="post-title is-large limit-text-2">{{languageName($blog->title)}}</h5>
                                             <div class="is-divider"></div>
                                             <br>
                                             <p class="from_the_blog_excerpt limit-text-3">{{languageName($blog->description)}}</p>
                                          </div>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                           @endforeach
                        </div>
                     </div>
                  </div>
                  <div id="col-1156440128" class="col cot2 medium-4 small-12 large-4">
                     <div class="col-inner">
                        
                        <div class="row large-columns-1 medium-columns-1 small-columns-1 row-small">
                           @foreach ($blogs as $blog)
                                 <div class="col post-item">
                                    <div class="col-inner">
                                       <a href="{{route('detailBlog',['slug'=>$blog->slug])}}" class="plain">
                                          <div class="box box-vertical box-text-bottom box-blog-post has-hover item-border curso poiter">
                                             <div class="box-image" style="width:25%;">
                                                <div class="image-cover" style="padding-top:75%;">
                                                   <img width="851" height="478" src="{{$blog->image}}" class="attachment-original size-original wp-post-image " alt="he thong giu xe thong minh toi uu hoat dong cua bai giu" decoding="async" loading="lazy"  title="">  							  							  						
                                                </div>
                                             </div>
                                             <div class="box-text text-left" style="background-color:rgb(255, 255, 255);">
                                                <div class="box-text-inner blog-post-inner">
                                                   <h5 class="post-title is-large ">{{languageName($blog->title)}}</h5>
                                                   <div class="is-divider"></div>
                                                   <p class="from_the_blog_excerpt ">{{languageName($blog->description)}}</p>
                                                </div>
                                             </div>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                           @endforeach
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      {{-- end section tin tuc --}}
   </div>
 @endsection
