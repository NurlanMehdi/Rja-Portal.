@extends('layouts.master')
@section('content')
@if($key == 'submitted')
  @livewire('submitted-rja')
@elseif($key == 'approved')
  @livewire('approved-rja')
@elseif($key == 'denied')
  @livewire('denied-rja')
@endif

@endsection