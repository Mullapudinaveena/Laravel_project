@extends('layouts.app')

@section('content')
<div style="text-align: center;">
    <img src="/storage/assets/logo.png" alt="logo" width="100px" height="100px"/>
    <h3 class="bold">SOMOS UN EQUIPO INTERDISCIPLINARIO</h3><br/><br/><br/>
</div>
<div class="box box1">
    @if(count($member)>=1)
        @foreach($member as $row)
    <div class="box2">
        <img src="/storage/assets/{{$row['assets']}}" alt="image" /><br>        
        <h4 class="bold">{{$row['name']}}</h4><br>
        <div class="membersStyle">
            <span>{{$row['description']}}</span><br/>
            <span>Teléf.: {{$row['telephone']}}</span><br>
            <span>E-mail: {{$row['email']}}</span>
        </div>
        @if(!Auth::guest())
            @if(Auth::user()->adminFlag == 1)
                <a href="/members/{{$row['tableid']}}/edit" class="btn btn-default">Edit</a>
                {!! Form::open(['action'=>['MembersController@destroy', $row['tableid']], 'method'=>'POST', 'class'=>'pull-right']) !!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
                {!! Form::close() !!}
            @endif
        @endif
    </div>
    
    @endforeach
    @else 
        <p>No Members</p>
    @endif
    
</div>
<br/><br/>

@endsection