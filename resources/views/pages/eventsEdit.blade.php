@extends('layouts.app')

@section('content')
    <div style="margin-left: 5%; margin-right: 30%; margin-bottom:3%;">
        <h3>Edit Events Page</h3>
    {!! Form::open(['action' => ['EventsController@update', $event['tableid']], 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name', 'Event Name')}}
            {{Form::text('name', $event['name'], ['class' => 'form-control', 'placeholder' => 'Event Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description', $event['description'], ['class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
        <div class="form-group">
            {{Form::label('contactname', 'Contact Name')}}
            {{Form::text('contactname', $event['contactname'], ['class' => 'form-control', 'placeholder' => 'Contact Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('telephone', 'Contact Telephone')}}
            {{Form::number('telephone', $event['telephone'], ['class' => 'form-control', 'placeholder' => 'Contact Telephone'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'Contact email')}}
            {{Form::email('email', $event['email'], ['class' => 'form-control', 'placeholder' => 'Contact email'])}}
        </div>
        <div class="form-group">
            {{Form::label('location', 'Location')}}
            {{Form::text('location', $event['location'], ['class' => 'form-control', 'placeholder' => 'Location'])}}
        </div>
        <div class="form-group">
            {{Form::label('date', 'Date')}}
            {{Form::date('date', $event['date'], ['class' => 'form-control', 'placeholder' => 'Date'])}}
        </div>
        <div class="form-group">
            {{Form::label('upload', 'Upload File')}}
            {{Form::file('assets')}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>
@endsection