@extends('layouts.main.master')
@section('title')
{{$title}}
@endsection
@section('description')
Danh sách {{$title}}
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
<link href="{{asset('frontend/css/breadcrumb_style.scss.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('frontend/css/sidebar_style.scss.css')}}" rel="stylesheet" type="text/css" />	
<link href="{{asset('frontend/css/collection_style.scss.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('frontend/css/main.css')}}" rel="stylesheet" type="text/css" />

@endsection
@section('js')

@endsection
@section('content')
<div class="shop-page-title category-page-title page-title ">
   <div class="page-title-inner flex-row  medium-flex-wrap container">
      <div class="flex-col flex-grow medium-text-center">
         <div class="is-large">
            <nav class="woocommerce-breadcrumb breadcrumbs uppercase curso-pointer"><a href="{{route('home')}}">Trang chủ</a> 
               <span class="divider">&#47;</span>{{languageName($cateno->name)}}
            </nav>
         </div>
        
      </div>
      <div class="flex-col medium-text-center">
         <p class="woocommerce-result-count hide-for-medium tran">
            Hiển thị {{count($list)}} kết quả
         </p>
         <form class="woocommerce-ordering" method="get">
            <select name="orderby" class="orderby" aria-label="Đơn hàng của cửa hàng">
               <option value="menu_order"  selected='selected'>Thứ tự mặc định</option>
               <option value="popularity" >Thứ tự theo mức độ phổ biến</option>
               <option value="rating" >Thứ tự theo điểm đánh giá</option>
               <option value="date" >Mới nhất</option>
               <option value="price" >Thứ tự theo giá: thấp đến cao</option>
               <option value="price-desc" >Thứ tự theo giá: cao xuống thấp</option>
            </select>
            <input type="hidden" name="paged" value="1" />
         </form>
      </div>
   </div>
</div>

<div class="row category-page-row">
   <div class="col large-9">
      <div class="shop-container">
         <div class="woocommerce-notices-wrapper"></div>
         <div class="products row row-small large-columns-3 medium-columns-3 small-columns-2 equalize-box">
            @foreach ($list as $product)
           @php
             $img = json_decode($product->images);
           @endphp
    
            <div class="product-small col has-hover product type-product post-7029 status-publish first instock product_cat-cam-bien-thong-minh has-post-thumbnail shipping-taxable purchasable product-type-simple item-border ">
               <div class="col-inner">
                  <div class="badge-container absolute left top z-1"></div>
                  <div class="product-small box ">
                     <div class="box-image box-custom">
                        <div class="image-fade_in_back">
                           <a href="{{route('detailProduct',['cate'=>$product->cate_slug,'slug'=>$product->slug])}}">
                           <img width="300" height="200" src="{{$img[0]}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" loading="lazy" /><img width="300" height="200" src="{{$img[0]}}" class=" absolute fill hide-for-small back-image  border-image" alt="" decoding="async" loading="lazy" />				</a>
                        </div>
                        <div class="image-tools is-small top right show-on-hover">
                        </div>
                        <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                        </div>
                        <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                        </div>
                     </div>
                     <div class="box-text box-text-products text-center grid-style-2">
                        <div class="title-wrapper">
                           <p class="name product-title woocommerce-loop-product__title"><a href="{{route('detailProduct',['cate'=>$product->cate_slug,'slug'=>$product->slug])}}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link limit-text-2">{{languageName($product->name)}}</a></p>
                        </div>
                        <div class="limit-text-2">

                           {!!languageName($product->description)!!}
                        </div>
                        <div class="price-wrapper">
                           @if ($product->price > 0)
                           <span class="price"><span class="woocommerce-Price-amount amount"><bdi>{{number_format($product->price,0,'','.')}}<span class="woocommerce-Price-currencySymbol"> đ</span></bdi></span></span>
                           @else
                           <span class="price"><span class="woocommerce-Price-amount amount cusor-pointer"><bdi>Liên Hệ<span class="woocommerce-Price-currencySymbol"> </span></bdi></span></span>
                           @endif
                           

                        </div>
                     </div>
                  </div>
               </div>
            </div>
            @endforeach
         </div>
         <!-- row -->
         <br>
         <br>
         <div class="paginate container">
            {{ $list->links() }}
            
         </div>
     
      </div>
      <!-- shop container -->
   </div>
   <div class="large-3 col hide-for-medium ">
      <div id="shop-sidebar" class="sidebar-inner">
         <aside id="woocommerce_product_categories-3" class="widget woocommerce widget_product_categories">
            <span class="widget-title shop-sidebar">Danh mục sản phẩm</span>
            <div class="is-divider small"></div>
            <ul class="product-categories">
               @foreach ($categoryProduct as $cate)
                  <li class="cat-item cat-item-111"><a href="{{route('allListProCate',['cate'=>$cate->slug])}}">{{languageName($cate->name)}}</a></li>
               @endforeach
            </ul>
         </aside>

      </div>
   </div>
</div>
@endsection