<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;

class JogosController extends Controller
{
    public function index()
    {
        //dd('olá mundo');
        $jogos =Jogo::all();
        //dd($jogos);
        return view('jogos', compact('jogos'));
    }

    public function create(Request $request){
        //dd($request);

       $jogos=new Jogo();
       $jogos->nome=$request->nome;
       $jogos->categoria=$request->categoria;
       $jogos->ano_criacao=$request->ano_criacao;
       $jogos->valor=$request->valor;

        $jogos->save();
        
        return redirect()->route('jogos')->with('success', 'Jogo cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $jogos=Jogo::where('id',$id)->first();
        //dd($jogos);

        return view('edit', ['jogos'=>$jogos]);
    }

    public function update(Request $request, $id){
        
        $data =[
            'nome'=>$request->nome,
            'categoria'=>$request->categoria,
            'ano_criacao'=>$request->ano_criacao,
            'valor'=>$request->valor
        ];
        Jogo::where('id', $id)->update($data);
        return redirect()->route('jogos');
    }
    public function destroy ($id)
    {
        Jogo::where('id', $id)-> delete();
        return redirect()->route('jogos');
    }
    
}

