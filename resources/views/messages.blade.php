@extends('layouts.app')


@section('content')
    <h1> Messages</h1>


   @if(count($messages)>0)
    @foreach($messages as $message)

        <ul class="list-group">


           <li class="list-group-item"> Name : {{$message->name}}</li>
            <li class="list-group-item"> Email : {{$message->email}}</li>
            <li class="list-group-item"> Message : {{$message->message}}</li>



           <form action="{{'/contact/'.$message->id}}" method="post">
               {{ csrf_field() }}

            {{Form::hidden('_method', 'DELETE')}}

            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}

           </form>


        </ul>

        <br>
        <br>



    @endforeach
    @endif
@endsection


@section('sidebar')
    @parent



@endsection

