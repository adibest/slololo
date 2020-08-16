@extends('layouts.myapp')

@section('content')
  @include('layouts.spotlight')
  <hr/>
  @include('layouts.latest')
  <hr/>
  @include('layouts.topwriter')
  <hr/>
  @include('layouts.topic')
@endsection
