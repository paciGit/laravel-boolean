@extends('layouts.main-layout')

@section('content')

  <h1>LE LUNGHE</h1>
  <div class="images_pasta">
    @foreach ($data as $value)
      @if ($value['tipo'] == 'lunga')
        <img src="{{ $value['src'] }}" alt="">
      @endif
    @endforeach

  </div>

  <h1>LE CORTE</h1>
  <div class="images_pasta">
    @foreach ($data as $value)
      @if ($value['tipo'] == 'corta')
        <img src="{{ $value['src'] }}" alt="">
      @endif
    @endforeach
  </div>

  <h1>LE CORTISSIME</h1>
  <div class="images_pasta">
    @foreach ($data as $value)
      @if ($value['tipo'] == 'cortissima')
        <img src="{{ $value['src'] }}" alt="">
      @endif
    @endforeach
  </div>


@endsection
