@extends(theme('layouts.master'))
@section('title'){{Settings('site_title')  ? Settings('site_title')  : 'Better Vocation'}} | {{__('frontend.Subscription')}} @endsection
@section('css')
    <link href="{{asset('public/frontend/bettervocationtheme/css/subscription.css')}}" rel="stylesheet"/>
@endsection


@section('mainContent')

       <x-breadcrumb :banner="$frontendContent->saas_banner??''"
                    :title="$frontendContent->saas_title??''"
                    :subTitle="$frontendContent->saas_sub_title??''"/>

    <x-saas-page-section/>


@endsection
@section('js')
    <script src="{{asset('public/frontend/bettervocationtheme/js/subscription.js')}}"></script>
@endsection
