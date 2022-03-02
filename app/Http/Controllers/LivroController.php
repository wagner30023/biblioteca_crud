<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livros = Livro::all();
        return view('livros.index',compact('livros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('livros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $regras = [
            'titulo' => 'required|min:8|max:40',
            'autor' => 'required|min:8|max:40',
            'paginas' => 'required|min:3|max:1000'
        ];

        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido',
            'titulo.min' => 'O campo titulo de ter no mínimo 8 caracteres',
            'titulo.max' => 'O campo titulo de ter no máximo 40 caracteres',
            'autor.min' => 'O campo autor de ter no mínimo 8 caracteres',
            'autor.max' => 'O campo autor de ter no máximo 40 caracteres',
            'paginas.min' => 'O campo paginas de ter no mínimo 3 caracteres',
            'paginas.max' => 'O campo paginas de ter no máximo 1000 caracteres'
        ];

        $request->validate($regras, $feedback);

        Livro::create($request->all());
        return redirect()->route('livros.create')
            ->with('mensagem', 'Livro salvo com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function show(Livro $livro)
    {
        return view('livros.show',compact('livro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function edit(Livro $livro)
    {
        return view('livros.edit',compact('livro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Livro $livro)
    {
        $regras = [
            'titulo' => 'required|min:8|max:40',
            'autor' => 'required|min:8|max:40',
            'paginas' => 'required|min:3|max:1000'
        ];

        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido',
            'titulo.min' => 'O campo titulo de ter no mínimo 8 caracteres',
            'titulo.max' => 'O campo titulo de ter no máximo 40 caracteres',
            'autor.min' => 'O campo autor de ter no mínimo 8 caracteres',
            'autor.max' => 'O campo autor de ter no máximo 40 caracteres',
            'paginas.min' => 'O campo paginas de ter no mínimo 3 caracteres',
            'paginas.max' => 'O campo paginas de ter no máximo 1000 caracteres'
        ];

        $request->validate($regras,$feedback);

        $livro->update($request->all());
        return redirect()->route('livros.create')
            ->with('mensagem', 'Livro atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Livro $livro)
    {
        $livro->delete();
        return redirect()->route('livros.index')
            ->with('messagem','Livro excluído com sucesso');
    }
}
