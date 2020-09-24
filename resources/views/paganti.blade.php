@extends('layouts.main-layout')

@section('content')

  <h3> Lista PAGANTI: </h3>
  <ul>

    @foreach ($paganti as $pagante)
      <li>
      {{ $pagante -> name }}
      {{ $pagante -> lastname }}
      </li>
    @endforeach

  </ul>

@endsection
