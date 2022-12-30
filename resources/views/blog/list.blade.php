@extends('layouts.main.master')
@section('title')
{{$title_page}} 
@endsection
@section('description')
{{$title_page}}
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
@endsection
@section('css')
<link href="{{asset('frontend/css/blog_article_style.scss.css')}}" rel="stylesheet" type="text/css"  />
<link href="{{asset('frontend/css/breadcrumb_style.scss.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('frontend/css/sidebar_style.scss.css')}}" rel="stylesheet" type="text/css"  />	
@endsection
@section('js')
@endsection
@section('content')
<main id="main" class="">
   <div id="content" class="blog-wrapper blog-archive page-wrapper">
  
         <div class="row">
            <div class="large-12 text-center col">
               <h1 class="page-title is-large uppercase">
                  Category Archives: <span>Tin tức</span>	
               </h1>
            </div>
         </div>

      <div class="row row-large ">
         <div class="large-9 col">
            <div id="row-876949267" class="row large-columns-2 medium-columns- small-columns-1 row-masonry" data-packery-options='{"itemSelector": ".col", "gutter": 0, "presentageWidth" : true}'>
               @foreach ($list_blog as $blog)
               <div class="col post-item" >
                  <div class="col-inner">
                     <a href="{{route('detailBlog',['slug'=>$blog->slug])}}" class="plain">
                        <div class="box box-text-bottom box-blog-post has-hover">
                           <div class="box-image" >
                              <div class="image-cover" style="padding-top:56%;">
                                 <img width="851" height="478" src="{{$blog->image}}" class="attachment-medium size-medium wp-post-image" alt="{{languageName($blog->title)}}" decoding="async" loading="lazy"  title="{{languageName($blog->title)}}">  							  							  						
                              </div>
                           </div>
                           <div class="box-text text-left" >
                              <div class="box-text-inner blog-post-inner">
                                 <h5 class="post-title is-large limit-text-2 ">{{languageName($blog->title)}}</h5>
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
      
            {{$list_blog->links()}}
         </div>
        @include('blog.menublog')
      </div>
   </div>
</main>
 
   
@endsection