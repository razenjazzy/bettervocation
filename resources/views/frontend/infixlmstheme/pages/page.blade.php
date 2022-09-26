@extends(theme('layouts.master'))
@section('title'){{Settings('site_title')  ? Settings('site_title')  : 'Better Vocation'}} | {{$page->title}} @endsection
@section('css') @endsection
@section('js') @endsection

@section('mainContent')



    <x-breadcrumb :banner="$page->banner" :title="$page->abc"
                  :subTitle="$page->title"/>

    <x-front-page-section :page="$page"/>

@endsection
