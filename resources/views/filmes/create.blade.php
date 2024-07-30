@extends('layouts.app')

@section('title', 'Filmes')

@section('content')
    <div class="container mt-5">
        <h2>Criar Novo Filme</h2>
        <form method="POST" action="{{ route('filmes.store') }}">
            @csrf
            <div class="form-group">
                <label for="tmdb_id">TMDB ID</label>
                <input type="number" class="form-control" id="tmdb_id" name="tmdb_id" required>
            </div>
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="sinopse">Sinopse</label>
                <textarea class="form-control" id="sinopse" name="sinopse" required></textarea>
            </div>
            <div class="form-group">
                <label for="classificacao">Classificação</label>
                <input type="text" class="form-control" id="classificacao" name="classificacao" required>
            </div>
            <div class="form-group">
                <label for="data_lancamento">Data de Lançamento</label>
                <input type="date" class="form-control" id="data_lancamento" name="data_lancamento" required>
            </div>
            <div class="form-group">
                <label for="poster_path">Caminho do Poster</label>
                <input type="text" class="form-control" id="poster_path" name="poster_path">
            </div>
            <div class="form-group">
                <label for="backdrop_path">Caminho do Backdrop</label>
                <input type="text" class="form-control" id="backdrop_path" name="backdrop_path">
            </div>
            <div class="form-group">
                <label for="popularidade">Popularidade</label>
                <input type="number" step="0.1" class="form-control" id="popularidade" name="popularidade" required>
            </div>
            <div class="form-group">
                <label for="votos">Votos</label>
                <input type="number" class="form-control" id="votos" name="votos" required>
            </div>
            <div class="form-group">
                <label for="media_votos">Média dos Votos</label>
                <input type="number" step="0.1" class="form-control" id="media_votos" name="media_votos" required>
            </div>
            <div class="form-group">
                <label for="generos">Gêneros</label>
                <input type="text" class="form-control" id="generos" name="generos" placeholder="IDs dos gêneros separados por vírgula" required>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
@endsection