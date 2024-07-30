<?php

namespace App\Http\Controllers;

use App\Interfaces\FilmeRepositoryInterface;
use Illuminate\Http\Request;

class FilmeController extends Controller
{
    private FilmeRepositoryInterface $filmeRepository;

    public function __construct(FilmeRepositoryInterface $filmeRepository)
    {
        $this->filmeRepository = $filmeRepository;
    }

    public function index()
    {
        $filmes = $this->filmeRepository->getAllFilmes();
        return view('filmes.index', compact('filmes'));
    }

    

    public function show($id)
    {
        $filme = $this->filmeRepository->getFilmeById($id);
        return view('filmes.show', compact('filme'));
    }

    public function create()
    {
        return view('filmes.create');
    }

    public function store(Request $request)
    {
        $this->filmeRepository->createFilme($request->all());
        return redirect()->route('filmes.index');
    }

    public function destroy($id)
    {
        $this->filmeRepository->deleteFilme($id);
        return redirect()->route('filmes.index');
    }
}
