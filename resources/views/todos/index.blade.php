@extends('layouts.app')

@section('content')
<h1>Todos</h1>
@if (count($todos) > 0)
    @foreach ($todos as $todo)
        <div class="card">
            <div class="card-body">
            <h3 class="card-title"><a href="todo/{{$todo->id}}">{{$todo->text}}</a>
                {{-- <p class="card-text">{{$todo->body}}</p> --}}
                <span class="badge badge-danger">{{$todo->due}}</span></h3>
            
                
            </div>
        </div>
    @endforeach
@endif
@endsection