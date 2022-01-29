<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticias1;
use Carbon\Carbon;
use App\Http\Requests\NoticiaRequest;

class Noticias1Controller extends Controller
{
    public function index(){
        $noticias = Noticias1::all();

        return view('noticias.index',[ 
            'noticias' => Noticias1::where('status', Noticias1::STATUS_ATIVO)->paginate(2)
        ]);
    }


    public function create(){
        return view('noticias/create');
    }

    public function store(NoticiaRequest $request){
        $dados = $request -> all();
        $dados['imagem'] = '/storage/'. $request->imagem->getClientOriginalName();

        Noticias1::create($dados);
        return redirect()->back()->with('mensagem', 'Registro criado com sucesso!');
    }

    public function edit(Noticias1 $noticia)
    {
        return view('noticias.edit', [
            'noticia' => $noticia
        ]);
    }



    public function update(Noticias1 $noticia, NoticiaRequest $request)
    {
        
        $dados = $request->all();
        
        if ($request->imagem) {
            $request->imagem->storeAs('public', $request->imagem->getClientOriginalName());
            $dados['imagem'] = '/storage/' . $request->imagem->getClientOriginalName();
        }
        $noticia->update($dados);
        
        return redirect()->back()->with('mensagem', 'Registro atualizado com sucesso!');
    }

    public function destroy(Noticias1 $noticia)
    {
        
        $noticia->delete();

        return redirect('/noticias')->with('mensagem', 'Registro excluído com sucesso!');
    }



}

