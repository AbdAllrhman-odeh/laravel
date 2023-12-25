@extends('dynamic')

@section('css')
    *{
        color:orange;   
    }
@endsection

@section('title')
    {{-- master Page --}}
    audio page
@endsection

@section('body')
    <audio type="audio/mp3" autoplay controls>
        <source src="{{asset('asset/voice/audio.mp3')}}" alt="audio">
    </audio>    
@endsection

@section('footer')
    <p>end of audio page</p>
@endsection
