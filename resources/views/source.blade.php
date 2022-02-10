@extends('layouts.app')

@section('content')
<div class="dataentry-content">
  <div class="dataentry-main">
    @if ($sourceData)
        @foreach ($sourceData as $plugin)
            @pluginentry([ 'plugin' => $plugin ])
            @endpluginentry
        @endforeach
    @else
        <h1>Something went wrong. No data was received.</h1>
    @endif
  </div>
</div>
@endsection
