<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pagamento;

class PagamentoController extends Controller
{

  public function index() {
    $pagamenti = Pagamento::all();
    return view('pagamenti', compact('pagamenti'));
    }

  public function destroy($id) {
    $pagamento = Pagamento::findOrFail($id);
    $pagamento -> delete();
    return redirect() -> route('pagamenti-index');
  }

  public function edit($id) {
    $pagamento = Pagamento::findOrFail($id);
    return view('pagamento-edit', compact('pagamento'));
  }

  public function update(Request $request, $id) {
      $data = $request -> all(); // Estrae i dati dal form
      $pagamento = Pagamento::findOrFail($id); // Prende il pagamento dell'ID in oggetto
      $pagamento -> update($data); // Aggiorno i 'fillable' nel pagamento selezionato
      return redirect() -> route('pagamenti-index'); // Torno all'index con tutti i pagamenti
  }

}
