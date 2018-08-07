@extends('layout.app')

@section('content')
<h1>Contact</h1>
{!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
      {{Form::label('name', 'Full Name')}}
      {{Form::text('name', '', ['placeholder' => 'e.g (John Doe)', 'class' => 'form-control'])}}
    </div>
    <div class="form-group">
      {{Form::label('email', 'E-Mail Address')}}
      {{Form::text('email', '', ['placeholder' =>'e.g (john_doe@gmail.com)', 'class' => 'form-control'])}}
    </div>
    <div class="form-group">
      {{Form::label('message', 'Message')}}
      {{Form::textarea('message', '', ['placeholder' =>'Enter Message', 'class' => 'form-control'])}}
    </div>
    <div class="form-group">
      {{form::submit('submit', ['class' => 'btn btn-dark'])}}
    </div>
{!! Form::close() !!}
@endsection