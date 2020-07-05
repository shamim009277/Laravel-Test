@extends('admin.layout.master')
@section('title','Dashboard | Create Post')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Create Post</a></li>
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
             <div class="card card-primary">
                <div class="card-header">
                   <h3 class="card-title">
                      <i class="fas fa-edit"></i>
                      Create Post
                    </h3>
                </div>

               
               {{ Form::open(array('route'=>['blog.store'],'method'=>'POST','files'=>true)) }}
              
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                          @include('common.message')
                            <div class="form-group row">
                              <label for="Content Title" class="col-sm-4 control-label">Content Title</label>
                              <div class="col-sm-6">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter Content Title">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="Content Type" class="col-sm-4 control-label">Content Type</label>
                              <div class="col-sm-6">
                                <select class="form-control" name="type" id="type">
                                      <option value="">----Select----</option>
                                      <option value="1">Video Post</option>
                                      <option value="2">Blog Post</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="Published Area" class="col-sm-4 control-label">Published Area</label>
                              <div class="col-sm-6">
                                <select class="form-control" name="section" id="section">
                                      <option value="">----Select----</option>
                                      <option value="1">Video Section</option>
                                      <option value="2">Blog Section</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="Description" class="col-sm-4 control-label">Description</label>
                              <div class="col-sm-6">
                                 <textarea class="textarea" name="description" placeholder="Place some text here"
                                   style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                 </textarea>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="Content Image" class="col-sm-4 control-label">Content Image</label>
                              <div class="col-sm-6">
                                <input type="file" class="form-control" id="image" name="image" onchange="loadFile(event)">
                                <img id="output" width="20%" style="margin-top:5px;" />
                              </div>
                            </div>
                            <div class="form-group row" id="link">
                              
                            </div>
                            <div class="form-group row">
                              <div class="col-md-10">
                              <button type="submit" class=" btn btn-primary float-right">Create Content
                              </button>
                              <button type="reset" class="btn btn-default float-left"> Cancel
                              </button>
                              </div>
                            </div> 
                        </div>
                    </div>
                
                </div>
                
                </div>
                {!! Form::close() !!}
                
              </div>      
          </div>  
        </div><!-- /.container-fluid -->
        <script>
         var loadFile = function(event) {
         var reader = new FileReader();
         reader.onload = function(){
         var output = document.getElementById('output');
         output.src = reader.result;
                                     };
    reader.readAsDataURL(event.target.files[0]);
       };
      </script>
    </section>
    <!-- /.content -->
  </div>
@endsection
@push('scripts')
   <script type="text/javascript">
       $( document ).ready(function() {
          var label = "<label for='Video Linl' class='col-sm-4 control-label'>Video LinK</label><div class='col-sm-6'><input type='text' class='form-control' id='link' name='link' placeholder='Enter Video link'></div>";
          $("#type").change(function(){
            if ($(this).val() == '1') {
               $('#link').show();
               $('#link').html(label);
            }else{
               $('#link').hide();
            }
          
        });
          
       });
   </script>
@endpush
