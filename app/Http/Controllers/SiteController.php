<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlunoUpdateRequest;
use App\Http\Requests\SiteRequest;
use App\Http\Requests\StoreAlunoRequest;
use App\Models\Aluno;
use App\Models\Curso;
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

        $alunos = $this->alunos->paginate(12);

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

    public function search(SiteRequest $request)
    {
        // Função que filtra os alunos por nome e por curso;

        $search_text = $request['search'];

        $alunos = $this->alunos
            ->where('nome', 'like', "%$search_text%")
            ->orWhereHas('curso', function ($query) use ($search_text) {
                $query->where('curso', 'like', "%$search_text%");
            })
            ->paginate(12);

        return view('site.index', compact('alunos'));
    }
}
