@extends('backend.master', ['class' => 'left-side-menu-dark'])
@section('title', 'Dashboard')

@push('css')
    <!-- Summernote css -->
    <link href="{{asset('app/assets/css/custom_app.css')}}" rel="stylesheet" type="text/css" />
@endpush

@section('content')
    <div id="app">
        <router-view></router-view>
    </div>
@endsection

@push('scripts')
    <script>
        window.__user__ = @json(auth()->user());
        window.__iframeUpload__ = 'https://chogom-dev.com/laravel-filemanager';
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('vendor/laravel-filemanager/js/lfm.js')}}"></script>
    <script src="{{ asset('ckeditor/ckeditor.js')}}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

@endpush

