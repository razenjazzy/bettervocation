@extends(theme('layouts.dashboard_master'))
@section('title'){{Settings('site_title')  ? Settings('site_title')  : 'Better Vocation'}} | {{__('coupons.My Cart')}} @endsection
@section('css') @endsection


@section('mainContent')
    <x-my-cart-with-login-page-section/>
@endsection
