@extends('layouts.app')

@section('head')
  @component('components.meta')

    @slot('title') Политика конфиденциальности @endslot
    @slot('description')  @endslot
    @slot('image')  @endslot
    @slot('date') @endslot

  @endcomponent
@endsection

@section('content')

  <h1>Политика конфиденциальности</h1>

@endsection
