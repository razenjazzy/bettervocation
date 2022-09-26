@extends(theme('layouts.dashboard_master'))
@section('title'){{Settings('site_title')  ? Settings('site_title')  : 'Better Vocation'}} |
@if( routeIs('myClasses'))
    {{__('courses.Live Class')}}
@elseif( routeIs('myQuizzes'))
    {{__('courses.My Quizzes')}}
@else
    {{__('courses.My Courses')}}
@endif @endsection
@section('css') @endsection
@section('js')
    <script src="{{asset('public/frontend/bettervocationtheme/js/my_course.js')}}"></script>
@endsection

@section('mainContent')
    <x-my-courses-page-section :request="$request"/>

@endsection
