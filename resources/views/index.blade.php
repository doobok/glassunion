@extends('layouts.app')

@section('head')
  @component('components.meta')

    @slot('title') Головна @endslot
    @slot('description') Опис  @endslot
    @slot('image') img  @endslot
    @slot('date') 16.06.2020 @endslot

  @endcomponent
@endsection

@section('content')

  <h1>Header1</h1>

@endsection
