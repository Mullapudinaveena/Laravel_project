@extends('layouts.app')

@section('content')
    <div style="margin-left: 5%; margin-right: 30%; margin-bottom:3%;">
        <h3>Add Videos Page</h3>
    {!! Form::open(['action' => 'VideosController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('video', 'Video URL')}}
            {{Form::text('video', '', ['class' => 'form-control', 'placeholder' => 'Video URL'])}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
        <div class="form-group">
            {{Form::label('url', 'URL')}}
            {{Form::text('url', '', ['class' => 'form-control', 'placeholder' => 'URL'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>
@endsection
