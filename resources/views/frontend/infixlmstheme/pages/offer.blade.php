@extends(theme('layouts.master'))
@section('title'){{Settings('site_title')  ? Settings('site_title')  : 'Better Vocation'}} | {{__('frontend.Offer Courses')}} @endsection
@section('css') @endsection

@section('js')
    <script src="{{asset('public/frontend/bettervocationtheme/js/classes.js')}}"></script>
@endsection
@section('mainContent')

    <x-breadcrumb :banner="$frontendContent->offer_page_banner" :title="$frontendContent->offer_page_title"
                  :subTitle="$frontendContent->offer_page_sub_title"/>

    <x-offer-page-section :request="$request"/>
@endsection
