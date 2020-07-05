@extends('frontend.layout.master')
@section('title','Content Management System')
@section('content')
    <div class="container">
    <div class="row">
    	<div class="col-md-8 vedio-section">
    		<div class="row mt-30">
    			<div class="col-md-6">
                   <div class="row">
                      <div class="col-md-12">
                      	<div class="vedio-with-text">
                          <div class="img-border" style="position: relative;">  
			                <a href="{{URL::to('/video_post_details',$single_video->id)}}" target="_blank">   
			                  <img src="{{asset('images/' . $single_video->image)}}" alt="Image" class="image" >
			                </a>  
			                  <i class="fa fa-play-circle-o big_player"></i>
			               </div>
                           <h2 class="heading"><a href="{{URL::to('/video_post_details',$single_video->id)}}" target="_blank">{{$single_video->title}}</a></h2>
		                   <span class="post-date">{{ \Carbon\Carbon::parse($single_video->created_at)->format('M d yy')}} &bullet; By <b>Admin</b></span>
		                    <p class="mt-10"><?php echo substr($single_video->description,0,200); ?>...</p>
		                    <a href="{{URL::to('/video_post_details',$single_video->id)}}" class="btn btn-md btn-success" target="_blank"> Watch Video</a>
			              </div>
                      </div>
                   </div>
    			</div>
    			<div class="col-md-6">
    				<div class="row">
    				@foreach($video_posts as $vedio)
    					<div class="col-md-6">
                          <div class="blog-small">
				              <div class="small" style="position: relative;">
				                <a href="{{URL::to('/video_post_details',$vedio->id)}}" target="_blank">
				                  <img src="{{asset('images/' . $vedio->image)}}" alt="" class="img-side">
				                </a>  
				                  <i class="fa fa-play-circle-o smal_player"></i>
				                
				              </div>
			                  <h2 class="sideheading"><a href="{{URL::to('/video_post_details',$vedio->id)}}" target="_blank">{{$vedio->title}}</a></h2>
			              </div>
    					</div>
    				@endforeach	
    				</div>
    			</div>
    		</div>
    	</div>
    	<div class="col-md-4">
    		<div class="row mt-30">
               <div class="col-md-12">

                   <div class="blog-with-text">
		              <div class="large">
		                <a href="{{URL::to('/post_details',$single_post->id)}}" target="_blank">
		                  <img src="{{asset('images/' . $single_post->image)}}" alt="image" class="image">
		                </a>
		              </div>
		              <h2 class="heading"><a href="{{URL::to('/post_details',$single_post->id)}}" target="_blank">{{$single_post->title}}</a></h2>
		              <span class="post-date">{{ \Carbon\Carbon::parse($single_post->created_at)->format('M d yy')}} &bullet; By <b>Admin</b></span>
		              <p class="mt-30"><?php echo substr($single_post->description,0,200); ?> ....</p>
		              <a href="{{URL::to('/post_details',$single_post->id)}}" class="btn btn-info btn-md" target="_blank">Read More</a>
		            </div>

               </div>	
    		</div>
    		<div class="row">
    		   <div class="col-md-12 small-post">
    		   	<h4 class="similar-heading">Similar Blog Post</h4>
    		   	  <div class="row">
    		   	  	@foreach($blog_posts as $post)
                     <div class="col-md-6">
                         <div class="blog-small">
			              <div class="small">
			                <a href="{{URL::to('/post_details',$post->id)}}" target="_blank">
			                  <img src="{{asset('images/' . $post->image)}}" alt="" class="img-side">
			                </a>
			              </div>
			              <h2 class="sideheading"><a href="{{URL::to('/post_details',$post->id)}}" target="_blank">{{$post->title}}</a></h2>
			            </div>
                     </div>
                    @endforeach
                  
    		   	  </div>
    		   </div>
    		</div>
    	</div>
    </div>
</div>

@endsection