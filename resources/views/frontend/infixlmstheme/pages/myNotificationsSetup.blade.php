@extends(theme('layouts.dashboard_master'))
@section('title'){{Settings('site_title')  ? Settings('site_title')  : 'Better Vocation'}} | {{__('payment.Purchase history')}} @endsection
@section('css') @endsection
@section('js') @endsection

@section('mainContent')
    <x-notification-setup />
@endsection
