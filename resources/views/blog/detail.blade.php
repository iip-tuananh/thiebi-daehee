@extends('layouts.main.master')
@section('title')
{{ languageName($blog_detail->title) }}
@endsection
@section('description')
{{ languageName($blog_detail->description) }}
@endsection
@section('image')
{{ url('' . $blog_detail->image) }}
@endsection
@section('css')
<link href="{{ asset('frontend/css/breadcrumb_style.scss.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('frontend/css/blog_article_style.scss.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('frontend/css/sidebar_style.scss.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('js')
{{-- <link rel="preload" as="script" href="{{asset('frontend/js/main.js')}}" />
<script src="{{asset('frontend/js/main.js')}}" type="text/javascript"></script>
<script src="{{asset('frontend/js/jquery-toc.js')}}" type="text/javascript"></script> --}}
@endsection
@section('content')
<main id="main" class="">
   <div id="content" class="blog-wrapper blog-single page-wrapper">
      <div class="row row-large ">
         <div class="large-9 col">
            <article id="post-7595" class="post-7595 post type-post status-publish format-standard has-post-thumbnail hentry category-tin-tuc">
               <div class="article-inner ">
  
                     <div class="entry-header-text entry-header-text-top text-left">
                        <h6 class="entry-category is-xsmall">
                           <a href="{{route('allListBlog')}}" rel="category tag">Tin tức</a>
                        </h6>
                        <h1 class="entry-title">{{languageName($blog_detail->title)}}</h1>
                        <div class="entry-divider is-divider small"></div>
                        <div class="entry-meta uppercase is-xsmall">
                           <span class="posted-on">Posted on _{{$blog_detail->updated_at->format('d.m.Y')}}</span>
                        </div>
                     </div>
                     <img width="851" height="478" src="{{$blog_detail->image}}" class="attachment-large size-large wp-post-image" alt="he thong giu xe thong minh toi uu hoat dong cua bai giu" decoding="async" srcset="{{$blog_detail->image}} " sizes="(max-width: 851px) 100vw, 851px" title="{{languageName($blog_detail->title)}}">
                     <div class="entry-image relative">
                    
                        <img width="851" height="478" src="{{$blog_detail->image}}" class="attachment-large size-large wp-post-image" alt="he thong giu xe thong minh toi uu hoat dong cua bai giu" decoding="async" srcset="{{$blog_detail->image}} " sizes="(max-width: 851px) 100vw, 851px" title="{{languageName($blog_detail->title)}}">
                     </div>
           
                     <div class="entry-content single-page">
                        {!!languageName($blog_detail->content)!!}
                     </div>
              
              
               </div>
            </article>
          
         </div>
         @include('blog.menublog')
      </div>
   </div>
   </main
@endsection