@extends('layouts.app')

@section('content')
    @if ($sourceData)

    @else
        <h1>Something went wrong. No data was received.</h1>
    @endif
@endsection
