@extends(theme('layouts.dashboard_master'))
@section('title'){{Settings('site_title')  ? Settings('site_title')  : 'Better Vocation'}} | {{__('student.Account Settings')}} @endsection
@section('css') @endsection
@section('js')
@endsection
@section('mainContent')
    <x-my-account-page-section/>
@endsection
