<?php

namespace App\Http\Controllers;

use App\Interfaces\LocacaoRepositoryInterface;
use Illuminate\Http\Request;

class LocacaoController extends Controller
{
    private LocacaoRepositoryInterface $locacaoRepository;

    public function __construct(LocacaoRepositoryInterface $locacaoRepository)
    {
        $this->locacaoRepository = $locacaoRepository;
    }

    public function index()
    {
        $locacoes = $this->locacaoRepository->getAllLocacoes();
        return view('locacoes.index', compact('locacoes'));
    }

    public function show($id)
    {
        $locacao = $this->locacaoRepository->getLocacaoById($id);
        return view('locacoes.show', compact('locacao'));
    }

    public function create()
    {
        return view('locacoes.create');
    }

    public function store(Request $request)
    {
        $this->locacaoRepository->createLocacao($request->all());
        return redirect()->route('locacoes.index');
    }

    public function destroy($id)
    {
        $this->locacaoRepository->deleteLocacao($id);
        return redirect()->route('locacoes.index');
    }
}
