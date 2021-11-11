@extends('admin.layouts.app')

@section('content')
<div class="main_content_iner ">
        <div class="col-md-12 ">
            <div class="white_box mb_30">
                <div class="box_header ">
                    <div class="main-title">
                        <h3 class="mb-0" >Change Cms Detail</h3>
                    </div>
                </div>
                  <form action="{{route('admin.cms.update')}}" id="cmsForm" method="post">
                      @csrf
                      <input type="hidden" name="id" value="<?= base64_encode($data->id)?>">
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="title_en">Title</label>
                                  <input type="text" class="form-control errorvalidator" id="title" placeholder="Title" value="{{$data->title}}" name="title" required>
                                  @error('title')
                                      <span class="error form-errors mb-0">{{ $message }}</span>
                                  @enderror
                                 
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="content_en">Content</label>
                                  <textarea class="form-control errorvalidator textareaEditor" id="content" placeholder="Content" name="content" required>{{$data->content}}</textarea>
                                 @error('content')
                                      <span class="error form-errors mb-0">{{ $message }}</span>
                                  @enderror
                                 
                              </div>
                          </div>
                      </div>
                      
                      <button class="btn btn-primary subbtn" type="submit">Submit</button>
                  </form>
               
        </div>
        </div>
    </div>


@endsection