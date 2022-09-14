@extends('base')

@section('content')

<div class="container">
    @if (session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
    @endif

    @if (session('error'))
    <div class="alert alert-danger">
    {{session('error')}}
    </div>
    @endif 

    <div class="row">
        <div class="card mt-3">
            <div class="card-header">
                <div class="card-title">
                    <h1>DASHBOARD</h1>
                </div>
                <div class="card-body">Welcoming</div>
            </div>
        </div>
    </div>
</div>

@endsection