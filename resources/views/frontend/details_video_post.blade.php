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
		              <span class="post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
		              <div class="large">
		                <iframe class="mt-30 mb-30 iframe" width="100%" height="320" src="https://www.youtube.com/embed/98ChVWjI6KI
">
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