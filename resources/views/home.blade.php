@extends('layout.app')

@section('content')
  <h1>Home</h1>
  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas ex in incidunt unde? Hic tenetur non nulla quidem neque ea, eligendi similique dolore deserunt repudiandae, placeat incidunt quod illo inventore.</p>
@endsection

@section('sidebar')
@parent
  <div>this is appended to the sidebar</div>
@endsection