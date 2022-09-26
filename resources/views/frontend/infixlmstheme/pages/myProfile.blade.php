@extends(theme('layouts.dashboard_master'))
@section('title'){{Settings('site_title')  ? Settings('site_title')  : 'Better Vocation'}} | {{__('frontendmanage.My Profile')}} @endsection
@section('css')
    <link href="{{asset('public/frontend/bettervocationtheme/css/select2.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/frontend/bettervocationtheme/css/checkout.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/frontend/bettervocationtheme/css/myProfile.css')}}" rel="stylesheet"/>
@endsection
@section('js')
    <script src="{{asset('public/frontend/bettervocationtheme/js/select2.min.js')}}"></script>
    <script src="{{ asset('public/frontend/bettervocationtheme/js/my_profile.js') }}"></script>

    <script src="{{asset('public/frontend/bettervocationtheme/js/city.js')}}"></script>


    <script src="{{asset('public/backend/js/summernote-bs4.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('.primary_textarea4 ').summernote({
                codeviewFilter: true,
                codeviewIframeFilter: true,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen']],
                ],
                placeholder: 'Write here',
                tabsize: 2,
                height: 188,
                tooltip: true
            });
        });
    </script>
@endsection

@section('mainContent')

    <x-my-profile-page-section/>

@endsection
