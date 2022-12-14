@extends('backend.master')
@php
    $table_name='front_pages'
@endphp
@section('table')
    {{$table_name}}
@stop
@section('mainContent')
    <section class="sms-breadcrumb mb-20 white-box">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <h1>{{__('frontendmanage.Pages')}}</h1>
                <div class="bc-pages">
                    <a href="{{url('dashboard')}}">{{__('dashboard.Dashboard')}}</a>
                    <a href="#">{{__('frontendmanage.Frontend CMS')}}</a>
                    <a href="{{ route('frontend.page.index')}}">{{__('frontendmanage.Pages')}}</a>
                </div>
            </div>
        </div>
    </section>
    <section class="admin-visitor-area up_st_admin_visitor">
        <div class="container-fluid p-0">

            <h4 class="pl-4 mb-3">
                <div class="row justify-content-start  pr-4">
                    @if(permissionCheck('frontend.page.create'))
                        <a href="{{ route('frontend.page.create') }}" class="primary-btn small fix-gr-bg">
                            <span class="ti-plus"></span>
                            {{__('common.Add')}} {{__('frontendmanage.Pages')}}
                        </a>
                    @endif
                </div>
            </h4>
            <div class="col-lg-12">
                <div class="QA_section QA_section_heading_custom check_box_table">
                    <div class="QA_table">
                        <!-- table-responsive -->
                        <div class="">
                            <table id="lms_table" class="table Crm_table_active3">
                                <thead>

                                <tr>
                                    <th width="15%">{{__('frontendmanage.Title')}}</th>
                                    <th width="15%">{{__('frontendmanage.Slug')}}</th>
                                    {{--                                    <th width="15%">{{__('common.Type')}}</th>--}}
                                    <th width="15%">{{__('common.Status')}}</th>
                                    <th width="15%">{{__('common.Action')}}</th>
                                </tr>
                                </thead>


                                <tbody>
                                @foreach($frontPages as $value)

                                    <tr>

                                        <td> {{ Str::limit($value->title,30) }}</td>
                                        <td> {{ Str::limit($value->slug,30) }}</td>
                                        {{--                                        <td> {{$value->is_static==0?'User Created':'System' }}</td>--}}
                                        <td>
                                            @if(permissionCheck('frontend.page.change-status'))
                                                <label class="switch_toggle"
                                                       for="active_checkbox{{@$value->id }}">
                                                    <input type="checkbox"
                                                           class=" status_enable_disable"
                                                           id="active_checkbox{{@$value->id }}"
                                                           @if (@$value->status == 1) checked
                                                           @endif value="{{@$value->id }}">
                                                    <i class="slider round"></i>
                                                </label>
                                            @else
                                                {{$value->status == 1?trans('common.Active'):trans('common.Inactive')}}
                                            @endif
                                        </td>
                                        <td>


                                            <div class="dropdown CRM_dropdown">
                                                <button class="btn btn-secondary dropdown-toggle"
                                                        type="button"
                                                        id="dropdownMenu2" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                    {{ __('common.Select') }}
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right"
                                                     aria-labelledby="dropdownMenu2">
                                                    <a class="dropdown-item" target="_blank"
                                                       href="{{ url('pages/'.$value->slug)}}"> {{__('common.View')}}</a>
                                                    @if(permissionCheck('frontend.page.edit'))
                                                        <a class="dropdown-item"
                                                           href="{{ route('frontend.page.edit',$value->id)}}"> {{__('common.Edit')}}</a>
                                                    @endif
                                                    @if(permissionCheck('frontend.page.delete'))
                                                        @if($value->is_static!=1)
                                                            <a class="dropdown-item" data-toggle="modal"
                                                               data-target="#deleteItem_{{@$value->id}}">{{__('common.Delete')}}</a>
                                                        @endif
                                                    @endif
                                                </div>
                                            </div>


                                        </td>


                                    </tr>

                                    <div class="modal fade admin-query" id="deleteItem_{{@$value->id}}">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">{{__('common.Delete')}} {{__('frontendmanage.Page')}}</h4>
                                                    <button type="button" class="close"
                                                            data-dismiss="modal" style="color: #000">
                                                        &times;
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="text-center">
                                                        <h4>{{__('footer.Are you sure')}}?</h4>
                                                    </div>
                                                    <div class="mt-40 d-flex justify-content-between">
                                                        <button type="button" class="primary-btn tr-bg"
                                                                data-dismiss="modal">{{__('footer.Cancel')}}
                                                        </button>
                                                        <form action="{{ route('frontend.page.destroy',$value->id)}}"
                                                              method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <input type="submit" class="primary-btn fix-gr-bg"
                                                                   value="Delete"/>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                                </tbody>


                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')





@endpush
