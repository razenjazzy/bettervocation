@extends(theme('layouts.master'))
@section('title'){{Settings('site_title')  ? Settings('site_title')  : 'Better Vocation'}} | {{$blog->title??''}} @endsection
@section('css') @endsection
@section('js')
    <script src="{{asset('public/frontend/bettervocationtheme/js/blogs.js')}}"></script>
@endsection
@section('og_image'){{asset($blog->image)}}@endsection
@section('mainContent')


    <x-blog-details-page-section :blog="$blog"/>

@endsection
