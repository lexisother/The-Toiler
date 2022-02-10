@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <a href="{{ route('dump') }}" class="col text-center">
                                Dump
                            </a>
                            <a href="{{ route('edge') }}" class="col text-center">
                                Edge
                            </a>
                            <a href="{{ route('aly') }}" class="col text-center">
                                Aly
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
