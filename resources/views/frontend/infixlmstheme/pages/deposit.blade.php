@extends(theme('layouts.dashboard_master'))
@section('title'){{Settings('site_title')  ? Settings('site_title')  : 'Better Vocationcation'}} | {{__('payment.Fund Deposit')}} @endsection
@section('css') @endsection
@section('js')
    <script src="{{asset('public/frontend/bettervocationtheme/js/deposit.js')}}"></script>


@endsection

@section('mainContent')
    <x-deposit-page-section :request="$request"/>
@endsection
