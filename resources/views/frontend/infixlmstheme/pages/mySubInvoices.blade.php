@extends(theme('layouts.dashboard_master'))
@section('title'){{Settings('site_title')  ? Settings('site_title')  : 'Better Vocation'}} | Invoice @endsection
@section('css')
    <link href="{{asset('public/frontend/bettervocationtheme/css/my_invoice.css')}}" rel="stylesheet"/>
@endsection
@section('mainContent')

    <x-subscription-invoice-page-section :enroll="$enroll"/>

@endsection
@section('js')
    <script src="{{ asset('public/frontend/bettervocationtheme') }}/js/html2pdf.bundle.js"></script>
    <script src="{{ asset('public/frontend/bettervocationtheme/js/my_invoice.js') }}"></script>
@endsection
