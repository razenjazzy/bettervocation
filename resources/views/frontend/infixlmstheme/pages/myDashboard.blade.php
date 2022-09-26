@extends(theme('layouts.dashboard_master'))
@section('title'){{Settings('site_title')  ? Settings('site_title')  : 'Better Vocation'}} | {{__('common.Dashboard')}} @endsection
@section('css')
    <link href="{{asset('public/frontend/bettervocationtheme/css/class_details.css')}}" rel="stylesheet"/>

@endsection

@section('mainContent')
    <x-my-dashboard-page-section/>
@endsection
@section('js')
    <script src="{{asset('public/frontend/bettervocationtheme/js/class_details.js')}}"></script>
@endsection
