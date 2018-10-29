@extends('layouts.app')

@section('content')
{{-- <a href="/" class="btn btn-primary">Back</a> --}}
    <h3 class="card-title">{{$todo->text}}</h3>
    <div class="badge badge-danger">{{$todo->due}}</div>
    <h5><p class="card-text">{{$todo->body}}</p></h5>
    <a href="/todo/{{$todo->id}}/edit" class="btn btn-primary">Edit</a>
    {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'POST', 'class'=>'float-right']) !!}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
    {!! Form::close() !!}
    <hr>
@endsection