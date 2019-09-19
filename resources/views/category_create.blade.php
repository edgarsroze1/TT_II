@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="background-color: #343A40">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}" style="color: white">Administrator's panel</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Adding a new category</li>
                    </ol>
                </nav>
                <div class="card">
                    <div class="card-header">Add a new category</div>
                    <div class="card-body">
                        {!! Form::open(['action' => 'CategoryController@store', 'class' => 'form-horizontal']) !!}

                        <div class="form-group row">
                            {!! Form::label('name', 'Category name', ['class' => 'col-md-4 control-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::text('name', '', ['class' => 'form-control '.($errors->has('name') ? ' is-invalid' : '' )]) !!}
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            {!! Form::label('description', 'Description', ['class' => 'col-md-4 control-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::textArea('description', '', ['class' => 'form-control '.($errors->has('description') ? ' is-invalid' : '' )]) !!}
                                @if ($errors->has('description'))
                                    <span class="invalid-feedback">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection