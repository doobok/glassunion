@extends('layouts.app')

@section('head')
  @component('components.meta')

    @slot('title') Окна купить в Буче | Доставка, установка окон бесплатно. Интернет-магазин Glassunion @endslot
    @slot('description') Купить окна в Буче недорого ◈ В наличии широкий ассортимент наименований. Доставка по Буче и региону ✓ Интернет-магазин Glassunion ☎ +38(066)522-90-66 (пн-пт с 10:00 до 19:00)
    @endslot
    @slot('image') /bg-windows.jpg  @endslot
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
