@extends('layouts.myapp')

@section('content')
  @include('layouts.spotlight')
  <hr/>
  @include('layouts.latest')
  <hr/>
  @include('layouts.topwriter')
  <hr/>
  <topic-index></topic-index>
@endsection
