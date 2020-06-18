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

  @include('layouts.mainpage.main-block')

  {{-- что мы предлагаем --}}
  @include('layouts.mainpage.production-block')

  {{-- 7 частых ошибок --}}
  @include('layouts.mainpage.errors-block')
  {{-- Почему нам доверяют --}}
  @include('layouts.mainpage.numbers-block')
  {{-- 5 признаков качественной установки --}}
  @include('layouts.mainpage.check-list-block')
  {{-- репутационный блок --}}
  @include('layouts.mainpage.trust-block')

  {{-- мастер за час --}}
  @include('layouts.mainpage.get-master-block')

  @include('layouts.mainpage.end-block')
  {{-- modal form --}}
  @include('layouts.mainpage.modal')

@endsection
