@extends('admin.layout.master')
@section('title','Dashboard | Blog List')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Post</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row mt-20">
          <div class="col-md-12">
            @include('common.message')
             <div class="card card-primary card-outline">
                <div class="card-header">
                   <h3 class="card-title">
                      <i class="fa fa-list" aria-hidden="true"></i>
                      Blog List
                    </h3>
                    <div class="card-tools pull-right">
                      <a href="{{route('blog.create')}}" class="btn btn-info pull-right"><i class="fa fa-plus"></i> Add Post</a>
                    </div>
                </div>
                <div class="card-body">
                   <div class="row">
                       <div class="col-md-12">
                            <table id="example1" class="table table-striped table-responsive dataTable">
                              <thead>
                              <tr>
                                <th>Sl</th>
                                <th>Content Title</th>
                                <th>Type</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>status</th>
                                <th>action</th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php $i=0; ?>
                            @foreach($posts as $post)
                                <tr>
                                  <td><?php echo ++$i; ?></td>
                                  <td>{{$post->title}}</td>
                            @if($post->type==1)
                                  <td>Video Post</td>
                            @else
                                  <td>Blog Post</td>
                            @endif      
                                  <td><?php echo substr($post->description,0,100); ?> ....</td>
                                  <td>
                                       <img src="{{ asset('images/' . $post->image) }}" style="width:100px">
                                  </td>
                                  <td>
                            @if($post->status==1)
                                  <span class="btn btn-success btn-sm">Active</span>
                            @else
                                  <span class="btn btn-warning btn-sm">Unactive</span>
                            @endif
                                  </td>
                                  <td>
                            @if($post->status==1)
                                  <a class="btn btn-warning btn-sm" href="{{URL::to('/unactive',$post->id)}}" title="Change Status"><i class="fa fa-thumbs-down" aria-hidden="true"></i></a>
                            @else
                                  <a class="btn btn-info btn-sm" href="{{URL::to('/active',$post->id)}}"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                            @endif
                                  <a class="btn btn-success btn-sm" href="#"><i class="fas fa-edit" aria-hidden="true"></i></a>
                                  <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash" aria-hidden="true"></i></a>
                                  </td>
                                  
                                </tr>
                             @endforeach
                              </tbody>
                             
                            </table>
                       </div> 
                   </div>
                </div>
                
              </div>      
          </div>  
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection


