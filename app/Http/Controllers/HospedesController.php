<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Hospedes;

class HospedesController extends Controller
{
    public function index(){
        return view('index');
    }
    public function showFormHosp(){
        return view('formHospedes');
    }
    public function storeHospedes(Request $request){
        $hospedes = $request->validate([
            'nomeHosp' =>'string|required',
            'foneHosp' =>'string|required',
            'emailHosp'=>'string|required',
            'quartosHosp'=>'string|required',
            'qtdHosp'=>'string|required'
        ]);
        Hospedes::Create($hospedes);
        return Redirect::route('index');
    }
    public function showGerenciador(Request $request){
        $dados = Hospedes::query();
        $dados->when($request->nomeHosp, function($query,$nome){
            $query->where('nomeHosp','like','%'.$nome.'%');
        });
        $dados = $dados->get();

        return view('buscarTodos',['hospedes' => $dados]);
    }

    public function destroy(Hospedes $id){
        $id->delete();
        return redirect::route('todos-Hospedes');
    }

    public function update(Hospedes $id, Request $request){
        $hospedes = $request->validate([
            'nomeHosp' =>'string|required',
            'foneHosp' =>'string|required',
            'emailHosp'=>'string|required' 
        ]);

        $id->fill($hospedes);
        $id->save();
        return Redirect::route('todos-Hospedes');
    }
    public function show(Hospedes $id){
        return view('alterar',['Hospedess'=>$id]);
    }
}
