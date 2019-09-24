@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Administrator</h1>
        @if(session()->has('message'))
            <div role="alert">
                {{ session()->get('message') }}
            </div>
        @endif

        <div>
            <h4 class="card-title">Administrator Panel</h4>
            <ul class="list-group">
                <li class="list-group-item"><a href="{{ url('category/create') }}">Add a new category</a></li>
                <li class="list-group-item"><a href="{{ url('admin/ban') }}">Block a user</a></li>
            </ul>
        </div>
    </div>
@endsection