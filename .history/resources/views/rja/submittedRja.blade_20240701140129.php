@extends('layouts.master')
@section('content')
@if($key == 'submitted')
  @livewire('submitted-rja')
@elseif($key == 'approved')
  @livewire('submitted-rja')
@elseif($key == 'denied')
  @livewire('submitted-rja')
@endif

@endsection