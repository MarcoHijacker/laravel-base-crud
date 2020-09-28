@extends('layouts.main-layout')

@section('content')

  <h2>Lista PAGAMENTI (db-hotel):</h2>
  <ul>

    @foreach ($pagamenti as $pagamento)
      <li>
        ID: <b> {{ $pagamento -> id }} </b> <br>
        Status: <b> {{ $pagamento -> status }} </b> <br>
        Price: <b> {{ $pagamento -> price }} </b> <br>
        <a class="delete" href="{{ route('pagamento-delete', $pagamento -> id) }}">(Del)</a>
        <a class="edit" href="{{ route('pagamento-edit', $pagamento -> id) }}">(Edit)</a>
      </li>
    @endforeach

  </ul>

@endsection
