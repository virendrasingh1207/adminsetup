@extends('layouts.app')

@section('content')
       <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_body">
                            <div class="QA_section">
                                <div class="white_box_tittle list_header">
                                    <h4>Email Template</h4>
                                    <div class="box_right d-flex lms_block">
                                        <!-- <div class="serach_field_2">
                                            <div class="search_inner">
                                                <form Active="#">
                                                    <div class="search_field">
                                                        <input type="text" placeholder="Search content here...">
                                                    </div>
                                                    <button type="submit"> <i class="ti-search"></i> </button>
                                                </form>
                                            </div>
                                        </div> -->
                                        <div class="add_button ml-10">
                                            <a href="{{route('admin.slider.create')}}" data-toggle="modal" data-target="#addcategory" class="btn_1">Add New</a>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="QA_table mb_30">
                                    <!-- table-responsive -->
                                    <table class="table emailTemplateDatatable ">
                                        <thead>
                                            <tr>
                                                <th scope="col">Title</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Created At</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @if(!empty($sliders))
                                        @foreach($sliders as $svalue)
                                            <tr>
                                                <th scope="row"> <a href="#" class="question_content">{{ $svalue['title'] }}</a></th>
                                                <td>{{ $svalue['description'] }}</td>
                                                <td>{{ $svalue['date_created'] }}</td>
                                                <td><a href="#" class="status_btn">Active</a></td>
                                                <td>
                                                    <a href="{{route('admin.slider.edit',base64_encode($svalue['id']))}}"  class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i>Edit</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
@endsection
