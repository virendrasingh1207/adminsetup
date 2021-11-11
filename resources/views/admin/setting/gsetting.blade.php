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
                                    <h4>Global Setting</h4>
                                    <div class="box_right d-flex lms_block">
                                    </div>
                                </div>
        
                                <div class="QA_table mb_30">
                                    <!-- table-responsive -->
                                    <table class="table cmsTemplateDatatable ">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Phone NO.</th>
                                                <th scope="col">Logo</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @if(!empty($setting))
                                            <tr>
                                                <th scope="row"> <a href="#" class="question_content">{{  $setting['name'] }}</a></th>
                                                <td><?= $setting['email'] ?></td>
                                                <td><?= $setting['phone_no'] ?></td>
                                                <td><img src="{{asset('Backend/setting/'.$setting['logo'])}}" width="50"></td>
                                                <td>
                                                <a href="{{route('admin.global_setting.edit')}}"  class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18">Edit</i></a>
                                                </td>
                                            </tr>
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