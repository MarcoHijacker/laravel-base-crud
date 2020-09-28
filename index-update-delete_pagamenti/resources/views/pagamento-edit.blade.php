@extends('layouts.main-layout')

@section('content')

  <h2>Edit Pagamento ID {{ $pagamento -> id }} :</h2>

  <form action="{{ route('pagamento-update', $pagamento -> id) }}" method="post">

    @csrf
    @method('POST')

    <label for="status">STATUS: </label> <br>
    <input type="text" name="status" value="{{ $pagamento -> status }}"> <br>
    <label for="price">PRICE: </label> <br>
    <input type="number" name="price" value="{{ $pagamento -> price }}"> <br><br>

    <button type="submit">UPDATE</button>

  </form>
  
@endsection
