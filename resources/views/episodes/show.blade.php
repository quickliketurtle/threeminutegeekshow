@extends('layouts.app')

@section('content')
    <div style="font-size: 1.5em;">
        <div style="text-align: center;"><a href="/">&lt;- All episodes</a></div>
            
        <div>
            <h1>{{ $episode->title }}</h1>
            <p>{{ $episode->description }}</p>
            ({{ Carbon\Carbon::parse($episode->pubDate)->format('F j, Y H:i') }})
            <br><br>
            <audio controls preload="metadata" src="{{ $episode->guid }}">
                <source src="{{ $episode->guid }}" type="audio/mpeg">
            </audio>
        </div>
    </div>
@endsection