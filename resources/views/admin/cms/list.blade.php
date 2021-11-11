@extends('admin.layouts.app')

@section('content')

 <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_body">
                            <div class="QA_section">
                                <div class="white_box_tittle list_header">
                                    <h4>CMS List</h4>
                                    <div class="box_right d-flex lms_block">
                                    </div>
                                </div>
        
                                <div class="QA_table mb_30">
                                    <!-- table-responsive -->
                                    <table class="table cmsTemplateDatatable ">
                                        <thead>
                                            <tr>
                                                <th scope="col">Title</th>
                                                <th scope="col">Slug</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @if(!empty($cmslist))
                                        @foreach($cmslist as $lvalue)
                                            <tr>
                                                <th scope="row"> <a href="#" class="question_content">{{ $lvalue['title'] }}</a></th>
                                                <td>{{ $lvalue['slug'] }}</td>
                                                <td>
                                                    <a href="{{route('admin.cms.edit',base64_encode($lvalue['id']))}}"  class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i>Edit</a>
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