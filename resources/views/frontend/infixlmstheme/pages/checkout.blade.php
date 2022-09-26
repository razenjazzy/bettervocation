@extends(theme('layouts.master'))
@section('title'){{Settings('site_title')  ? Settings('site_title')  : 'Better Vocation'}} | {{__('common.Checkout')}} @endsection
@section('css')
    <link href="{{asset('public/frontend/bettervocationtheme/css/select2.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/frontend/bettervocationtheme/css/checkout.css')}}" rel="stylesheet"/>
@endsection
@section('mainContent')

    <x-checkout-page-section :request="$request"/>


@endsection
@section('js')
    <script src="{{asset('public/frontend/bettervocationtheme/js/select2.min.js')}}"></script>
    <script src="{{asset('public/frontend/bettervocationtheme/js/checkout.js')}}"></script>
    <script src="{{asset('public/frontend/bettervocationtheme/js/city.js')}}"></script>
@endsection
