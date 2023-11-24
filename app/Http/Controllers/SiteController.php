<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAlunoRequest;
use App\Models\Aluno;
use Illuminate\Http\Request;


class SiteController extends Controller
{
    private $alunos;

    public function __construct(Aluno $aluno)
    {
        $this->alunos = $aluno;
    }
    public function index()
    {
        $alunos = $this->alunos->all();
        return view('site.index', compact('alunos'));
    }

    public function create()
    {
    }


    public function store(Request $request)
    {
    }


    public function show($id)
    {
    }


    public function edit($id)
    {
    }


    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }

    public function search(StoreAlunoRequest $request)
    {
        // Função que filtra os alunos por nome;
        $filters = $request->except('_token');
        $alunos = $this->alunos->where('nome', "%{$request->search}%")
            // Aluno::where('nome', "%{$request->search}%")

            ->latest()
            ->paginate();

        return view('site.index', compact('alunos', 'filters'));
    }
}
