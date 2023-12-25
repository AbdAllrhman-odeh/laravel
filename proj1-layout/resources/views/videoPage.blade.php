@extends('dynamic')

@section('css')
    *{
        color:blue;
    }
@endsection

@section('title')
    {{-- master Page --}}
    video page
@endsection

@section('body')
    <video controls>
        <source src="{{ asset('assets/video/video.mp4') }}" type="video/mp4" \>
        Your browser does not support the video tag.
    </video>
@endsection

@section('footer')
    <p>end of video page</p>
@endsection
