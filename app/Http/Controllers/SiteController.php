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
        // $alunos = Aluno::all();
        // $cursos = Curso::all();

        $alunos = $this->alunos->all();


        // $data = $request->all();
        // dd($data);
        // $query = $this->alunos->query();

        // if (isset($request->nome) && ($request->nome != null)) {
        //     $query->where("nome", $request->nome);
        // }

        // $alunos = $query->get();

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
        // Função que filtra os alunos por nome;
        // $filters = $request->all();
        // $alunos = $this->alunos->where('nome', "curso")
        //     // Aluno::where('nome', "%{$request->search}%")

        //     ->latest()
        //     ->paginate();

        // return view('site.index', compact('alunos', 'filters'));
        // dd($search_text);
        $search_text = $request['search'];

        $alunos = $this->alunos->where('nome', 'like', "%$search_text%")->get();

        return view('site.index', compact('alunos'));
    }
}
