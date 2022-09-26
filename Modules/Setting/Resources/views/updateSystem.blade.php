@extends('backend.master')
@section('mainContent')

    <section class="sms-breadcrumb mb-20 white-box">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <h1>{{ __('setting.About') }} {{__('common.&')}} {{ __('setting.Update') }}</h1>
                <div class="bc-pages">
                    <a href="{{route('dashboard')}}">{{__('common.Dashboard')}}</a>
                    <a href="#">{{__('setting.System Settings')}}</a>
                    <a href="#">{{ __('setting.About') }} {{__('common.&')}} {{ __('setting.Update') }}</a>
                </div>
            </div>
        </div>
    </section>

    <section class="admin-visitor-area up_admin_visitor empty_table_tab">
        <div class="container-fluid p-0">


            <div class="row">
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12">
                            @if (!appMode())
                                @if (permissionCheck('setting.updateSystem.submit'))
                                    {{ Form::open(['class' => 'form-horizontal', 'files' => true, 'route' => 'setting.updateSystem.submit', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
                                @endif
                            @endif
                            <div class="white-box mb-20">
                                <div class="main-title">
                                    <h3 class="mb-30">@lang('setting.Upload From Local Directory')</h3>
                                </div>
                                <div class="add-visitor">

                                    <div class="row no-gutters input-right-icon mb-20">
                                        <div class="col">
                                            <div class="input-effect">
                                                <input
                                                    class="primary-input form-control {{ $errors->has('content_file') ? ' is-invalid' : '' }}"
                                                    readonly="true" type="text"
                                                    placeholder="{{isset($editData->file) && @$editData->file != ""? getFilePath3(@$editData->file):trans('common.Browse')}} "
                                                    id="placeholderUploadContent" name="content_file">
                                                <span class="focus-border"></span>
                                                @if ($errors->has('content_file'))
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('content_file') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <button class="primary-btn-small-input" type="button">
                                                <label class="primary-btn small fix-gr-bg"
                                                       for="upload_content_file">@lang('common.Browse')</label>
                                                <input type="file" class="d-none form-control" name="updateFile"
                                                       required
                                                       id="upload_content_file">
                                            </button>

                                        </div>
                                    </div>
                                    @php
                                        $tooltip = "";

                                if (permissionCheck('setting.updateSystem.submit')){
                                                $tooltip = "";
                                            }else{
                                                $tooltip = "You have no permission to add";
                                            }
                                if (appMode()){
                                    $tooltip =trans('common.For the demo version, you cannot change this');
                                }
                                    @endphp
                                    <div class="row mt-40">
                                        <div class="col-lg-12 text-center">
                                            <button class="primary-btn fix-gr-bg" data-toggle="tooltip"
                                                    title="{{@$tooltip}}">
                                                <span class="ti-check"></span>
                                                @if(isset($session))
                                                    @lang('common.Update')
                                                @else
                                                    @lang('common.Save')
                                                @endif

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="white-box">
                                <div class="main-title">
                                    <h3 class="mb-30">{{__('setting.About System')}}</h3>
                                </div>
                                <div class="add-visitor">
                                    <table style="width:100%; box-shadow: none;"
                                           class="display school-table school-table-style">

                                        <tr>
                                            <td>{{__('setting.Software Version')}}</td>
                                            <td>
                                                {{Storage::has('.version')?Storage::get('.version'):Settings('system_version')}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>{{__('setting.Check update')}}</td>
                                            <td><a href="#"
                                                   target="_blank"> <i
                                                        class="ti-new-window"> </i> {{__('setting.Update')}} </a></td>
                                        </tr>
                                        <tr>
                                            <td> {{__('setting.PHP Version')}}</td>
                                            <td>{{phpversion() }}</td>
                                        </tr>
                                        <tr>
                                            <td>{{__('setting.Curl Enable')}}</td>
                                            <td>@php
                                                    if  (in_array  ('curl', get_loaded_extensions())) {
                                                        echo 'enable';
                                                    }
                                                    else {
                                                        echo 'disable';
                                                    }
                                                @endphp</td>
                                        </tr>


                                        <tr>
                                            <td>{{__('setting.Purchase code')}}</td>
                                            <td>
                                                {{__('Verified')}}
                                                @if(\Illuminate\Support\Facades\Auth::user()->role_id==1)
                                                    @if(!demoCheck())
                                                        @includeIf('service::license.revoke')
                                                    @endif
                                                @endif
                                            </td>
                                        </tr>


                                        <tr>
                                            <td>{{__('setting.Install Domain')}}</td>
                                            <td>{{Settings('system_domain')}}</td>
                                        </tr>

                                        <tr>
                                            <td>{{__('setting.System Activated Date')}}</td>
                                            <td>{{Settings('system_activated_date')}}</td>
                                        </tr>

                                        <tr>
                                            <td>{{__('setting.Last Update at')}}</td>
                                            <td>
                                                @if($last_update)
                                                    {{$last_update->created_at}}

                                                @else
                                                    {{Settings('system_activated_date')}}
                                                @endif
                                            </td>
                                        </tr>

                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
