@extends(theme('layouts.dashboard_master'))
@section('title'){{Settings('site_title')  ? Settings('site_title')  : 'Better Vocation'}} | {{__('assignment.Assignment List')}} @endsection
@section('css') @endsection
@section('js') @endsection

@section('mainContent')
    <x-my-assignment-page-section/>
@endsection
