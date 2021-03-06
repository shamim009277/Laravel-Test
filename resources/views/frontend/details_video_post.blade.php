@extends('frontend.layout.master')
@section('title','Content Management System')
@section('content')
    <div class="container">
    <div class="row">
    	<div class="col-md-10 center mt-30">
    		<div class="row">
               <div class="col-md-10" style="min-height:720px;">
               	  <div class="blog-with-text">
               	  	  <h2 class="heading"><a href="#">{{$video->title}}</a></h2>
		              <span class="post-date">{{ \Carbon\Carbon::parse($video->created_at)->format('M d yy')}} &bullet; By <b>Admin</b></span>
		              <div class="large">
		                <iframe class="mt-30 mb-30 iframe" width="100%" height="320" src="{{$video->link}}">
                    </iframe>
		              </div>
		              
		              <p>{!! $video->description !!}</p>
		            </div>
                  
               </div>
    		</div>
        <div class="row mb-30">
           <div class="col-md-10">
                
                <h2 class="share">Share ...</h2>

           </div>
        </div>    		
    	</div>
    	
    </div>
</div>

@endsection