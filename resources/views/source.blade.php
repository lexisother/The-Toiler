@extends('layouts.app')

@section('content')
    @if ($sourceData)
        @foreach ($sourceData as $plugin)
            <p>
                {{ $plugin["name"] }}
            </p>
        @endforeach
    @else
        <h1>Something went wrong. No data was received.</h1>
    @endif
@endsection
