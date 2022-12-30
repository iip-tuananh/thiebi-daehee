@extends('layouts.main.master')
@section('title')
    {{ languageName($product->name) }}
@endsection
@section('description')
    @php
        $discountPrice = $product->price - $product->price * ($product->discount / 100);
    @endphp
@endsection
@section('image')
    @php
        $imgs = json_decode($product->images);
        
    @endphp
    {{ url('' . $imgs[0]) }}
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('frontend/css/flatsome.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/flatsome-shop.css') }}">
    {{-- <link rel="preload" as='style'  type="text/css" href="{{asset('frontend/css/product_style.scss.css')}}">
<link href="{{asset('frontend/css/product_style.scss.css')}}" rel="stylesheet" type="text/css"/>

<link href="{{asset('frontend/css/breadcrumb_style.scss.css')}}" rel="stylesheet" type="text/css" />
<link rel="preload" as='style'  type="text/css" href="{{asset('frontend/css/picbox.scss.css')}}">
<link href="{{asset('frontend/css/picbox.scss.css')}}" rel="stylesheet" type="text/css"/> --}}
@endsection
@section('js')
    {{-- add-to-cart --}}
@endsection
@section('content')
    <main id="main" class="">
       
        <div class="shop-container">
            <div class="container">
                <div class="woocommerce-notices-wrapper"></div>
            </div>
            <div id="product-6994"
                class="product type-product post-6994 status-publish first instock product_cat-cong-tac-thong-minh has-post-thumbnail shipping-taxable purchasable product-type-simple">
                <div class="row content-row row-divided row-large row-reverse">
                    <div id="product-sidebar" class="col large-3 hide-for-medium shop-sidebar sidebar-ct">
                        <aside id="woocommerce_product_categories-4" class="widget woocommerce widget_product_categories">
                            <span class="widget-title shop-sidebar">Danh mục sản phẩm</span>
                            <div class="is-divider small"></div>
                            <ul class="product-categories">
                                @foreach ($categoryProduct as $cate)
                                    <li class="cat-item cat-item-111"><a
                                            href="{{ route('allListProCate', ['cate' => $cate->slug]) }}">{{ languageName($cate->name) }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </aside>
                        @if (count($productlq) > 1)
                            <aside id="woocommerce_products-2" class="widget woocommerce widget_products">
                                <span class="widget-title shop-sidebar">Sản phẩm liên quan</span>
                                <div class="is-divider small"></div>
                                <ul class="product_list_widget">
                                    @foreach ($productlq as $pro)
                                        @php
                                            $img = json_decode($pro->images);
                                        @endphp
                                        @if ($pro->id != $product->id)
                                            <li>
                                                <a
                                                    href="{{ route('detailProduct', ['cate' => $pro->cate_slug, 'slug' => $pro->slug]) }}">
                                                    <img src="{{ $img[0] }}"
                                                        class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail"
                                                        alt="" decoding="async" loading="lazy"
                                                        srcset="{{ $img[0] }}"
                                                        sizes="(max-width: 100px) 100vw, 100px" /> <span
                                                        class="product-title limit-text-2">{{ languageName($pro->name) }}</span>
                                                </a>
                                                @if ($pro->price > 0)
                                                    <span class="woocommerce-Price-amount amount " id="gia-ban"> <span
                                                            class="price-custom">{{ number_format($pro->price, 0, '', '.') }}&nbsp;đ</span></span>
                                                @else
                                                    <span class="woocommerce-Price-amount amount" id="gia-ban"> <span
                                                            class="price-custom">Liên Hệ</span></span>
                                                @endif
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </aside>
                        @endif
                        <aside id="flatsome_recent_posts-3" class="widget flatsome_recent_posts">
                            <span class="widget-title shop-sidebar">Bài viết mới</span>
                            <div class="is-divider small"></div>
                            <ul>
                                @foreach ($hotBlogs as $blog)
                                    <li class="recent-blog-posts-li">
                                        <div class="flex-row recent-blog-posts align-top pt-half pb-half">
                                            <div class="flex-col mr-half">
                                                <div class="badge post-date  badge-outline">
                                                    <div class="badge-inner bg-fill"
                                                        style="background: url({{ $blog->image }}); border:0;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-col flex-grow limit-text-2">
                                                <a href="{{ route('detailBlog', ['slug' => $blog->slug]) }}"
                                                    title="{{ languageName($blog->title) }}">{{ languageName($blog->title) }}</a>
                                                <span class="post_comments op-7 block is-xsmall"><a
                                                        href="{{ route('detailBlog', ['slug' => $blog->slug]) }}"></a></span>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </aside>
                    </div>
                    <div class="col large-9 detail-custom">
                        <div class="product-main">
                            <div class="row">
                                <div class="large-6 col">
                                    <div class="product-images relative mb-half has-hover woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images"
                                        data-columns="4">
                                        <div class="badge-container is-larger absolute left top z-1"></div>
                                        <div class="image-tools absolute top show-on-hover right z-3">
                                        </div>
                                        <figure
                                            class="woocommerce-product-gallery__wrapper product-gallery-slider slider slider-nav-small mb-half "
                                            data-flickity-options='{
                              "cellAlign": "center",
                              "wrapAround": true,
                              "autoPlay": false,
                              "prevNextButtons":true,
                              "adaptiveHeight": true,
                              "imagesLoaded": true,
                              "lazyLoad": 1,
                              "dragThreshold" : 15,
                              "pageDots": false,
                              "rightToLeft": false}'>
                                            @foreach ($imgs as $img)
                                                <div data-thumb="{{ $img }}" data-thumb-alt=""
                                                    class="woocommerce-product-gallery__image slide first test"><a
                                                        href="{{ $img }}"><img width="600" height="600"
                                                            src="{{ $img }}" class="wp-post-image skip-lazy"
                                                            alt="9076cong tac rem thong minh" decoding="async"
                                                            loading="lazy" title="9076cong-tac-rem-thong-minh"
                                                            data-caption="" data-src="{{ $img }}"
                                                            data-large_image="{{ $img }}"
                                                            data-large_image_width="600" data-large_image_height="600"
                                                            srcset="{{ $img }}"
                                                            sizes="(max-width: 600px) 100vw, 600px" data-
                                                            data-large_image_></a></div>
                                            @endforeach

                                        </figure>

                                    </div>
                                    <div class="product-thumbnails thumbnails slider-no-arrows slider row row-small row-slider slider-nav-small small-columns-4"
                                        data-flickity-options='{
                           "cellAlign": "left",
                           "wrapAround": false,
                           "autoPlay": false,
                           "prevNextButtons": true,
                           "asNavFor": ".product-gallery-slider",
                           "percentPosition": true,
                           "imagesLoaded": true,
                           "pageDots": false,
                           "rightToLeft": false,
                           "contain": true
                           }'>
                                        @foreach ($imgs as $img)
                                            <div class="col is-nav-selected first">
                                                <a>

                                                    <img src="{{ $img }}" alt="" width="300"
                                                        height="200" class="attachment-woocommerce_thumbnail" />
                                                </a>
                                            </div>
                                        @endforeach


                                    </div>
                                </div>
                                <div class="product-info summary entry-summary col col-fit product-summary">
                                    <nav class="woocommerce-breadcrumb breadcrumbs uppercase"><a
                                            href="{{ route('home') }}">Trang chủ</a> <span
                                            class="divider curso-pointer">&#47;</span>{{ languageName($product->name) }}</a>
                                        <h1 class="product-title product_title entry-title">
                                            {{ languageName($product->name) }}
                                        </h1>
                                        <div class="is-divider small"></div>
                                        <div class="price-wrapper">
                                            <p class="price product-page-price ">
                                                @if ($product->price > 0)
                                                    <span class="woocommerce-Price-amount amount"><bdi>{{ number_format($product->price, 0, '', '.') }}&nbsp;<span
                                                                class="woocommerce-Price-currencySymbol">đ</span></bdi></span>
                                                @else
                                                    <span class="woocommerce-Price-amount amount cusor-pointer"><bdi>Liên
                                                            Hệ&nbsp;<span
                                                                class="woocommerce-Price-currencySymbol"></span></bdi></span>
                                                @endif

                                            </p>
                                        </div>
                                        <div class="product-short-description">

                                            {!! languageName($product->description) !!}
                                        </div>
                                        @if ($product->price)
                                            <form class="cart">
                                                <div class="quantity buttons_added">
                                                    <input type="button" value="-" class="minus button is-form">
                                                    <label class="screen-reader-text"
                                                        for="quantity_63ac68bd0b63a"></label>
                                                    <input type="number" id="quantity_pro" class="input-text qty text" step="1" min="1" max="" name="quantity_pro" value="1" title="SL" size="4" placeholder="" inputmode="numeric" />
                                                    <input type="button" value="+" class="plus button is-form">
                                                </div>
                                                <button class="add_cart button alt wp-element-button button-custom-new"
                                                    data-url="{{ route('addToCart') }}"
                                                    data-id="{{ $product->id }}">Đặt hàng</button>
                                            </form>
                                        @endif
                                </div>
                            </div>
                        </div>
                        <div class="product-footer">
                            <div class="woocommerce-tabs wc-tabs-wrapper container tabbed-content">
                                <ul class="tabs wc-tabs product-tabs small-nav-collapse nav nav-uppercase nav-line nav-left"
                                    role="tablist">
                                    <li class="additional_information_tab active" id="tab-title-additional_information"
                                        role="tab" aria-controls="tab-additional_information">
                                        <a href="#tab-additional_information">
                                            Thông tin bổ sung</a>
                                    </li>
                                </ul>
                                <div class="tab-panels">
                                    <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--additional_information panel entry-content active"
                                        id="tab-additional_information" role="tabpanel"
                                        aria-labelledby="tab-title-additional_information">
                                        <table class="woocommerce-product-attributes shop_attributes">
                                            <tr
                                                class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_chi-ti%e1%ba%bft-s%e1%ba%a3n-ph%e1%ba%a9m">
                                                <th class="woocommerce-product-attributes-item__label">Chi tiết sản phẩm
                                                </th>
                                                <td class="woocommerce-product-attributes-item__value">
                                                    {!! languageName($product->content) !!}
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            @if (count($productlq) > 1)
                                <div class="related related-products-wrapper product-section">
                                    <h3
                                        class="product-section-title container-width product-section-title-related pt-half pb-half uppercase">
                                        Sản phẩm tương tự
                                    </h3>
                                    <div class="row equalize-box large-columns-4 medium-columns-3 small-columns-2 row-small slider row-slider slider-nav-reveal slider-nav-push"
                                        data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
                                        @foreach ($productlq as $pro)
                                            @php
                                                $image = json_decode($pro->images);
                                            @endphp
                                            @if ($pro->id != $product->id)
                                                <div
                                                    class="product-small col has-hover product type-product post-6992 status-publish instock product_cat-cong-tac-thong-minh has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                                    <div class="col-inner">
                                                        <div class="badge-container absolute left top z-1"></div>
                                                        <div class="product-small box ">
                                                            <div class="box-image box-image-custom">
                                                                <div class="image-fade_in_back image-fade_in_back-custom">
                                                                    <a href="{{ route('detailProduct', ['cate' => $pro->cate_slug, 'slug' => $pro->slug]) }}"
                                                                        aria-label="{{ languageName($pro->name) }}">
                                                                        <img width="300" height="200"
                                                                            src="{{ $image[0] }}"
                                                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                            alt="" decoding="async"
                                                                            loading="lazy" /><img width="300"
                                                                            height="200" src="{{ $image[0] }}"
                                                                            class="show-on-hover absolute fill hide-for-small back-image"
                                                                            alt="" decoding="async"
                                                                            loading="lazy" /> </a>
                                                                </div>
                                                                <div class="image-tools is-small top right show-on-hover">
                                                                </div>
                                                                <div
                                                                    class="image-tools is-small hide-for-small bottom left show-on-hover">
                                                                </div>
                                                                <div
                                                                    class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="box-text box-text-products text-center grid-style-2">
                                                                <div class="title-wrapper">
                                                                    <p
                                                                        class="name product-title woocommerce-loop-product__title">
                                                                        <a href="{{ route('detailProduct', ['cate' => $pro->cate_slug, 'slug' => $pro->slug]) }}"
                                                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link limit-text-2">{{ languageName($pro->name) }}</a>
                                                                    </p>
                                                                </div>
                                                                <div class="price-wrapper limit-text-3">
                                                                    {!! languageName($pro->description) !!}&hellip;
                                                                    <span class="price"><span
                                                                            class="woocommerce-Price-amount amount"><bdi>&nbsp;<span
                                                                                    class="woocommerce-Price-currencySymbol">đ</span></bdi></span></span>
                                                                </div>
                                                                <div style="color: red">
                                                                    {{ number_format($pro->price, 0, '', '.') }}&nbsp;đ
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- shop container -->
    </main>

@endsection
