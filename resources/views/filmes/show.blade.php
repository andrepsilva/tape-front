@extends('layouts.app')

@section('title', 'Filmes')

@section('content')
    <div class="container mt-5">
        <h1>Detalhes do Filme</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ID: {{ $filme['id'] }}</h5>
                <p class="card-text"><strong>TMDB ID:</strong> {{ $filme['tmdb_id'] }}</p>
                <p class="card-text"><strong>Nome:</strong> {{ $filme['nome'] }}</p>
                <p class="card-text"><strong>Sinopse:</strong> {{ $filme['sinopse'] }}</p>
                <p class="card-text"><strong>Classificação:</strong> {{ $filme['classificacao'] }}</p>
                <p class="card-text"><strong>Data de Lançamento:</strong> {{ $filme['data_lancamento'] }}</p>
                <p class="card-text"><strong>Poster Path:</strong> {{ $filme['poster_path'] }}</p>
                <p class="card-text"><strong>Backdrop Path:</strong> {{ $filme['backdrop_path'] }}</p>
                <p class="card-text"><strong>Popularidade:</strong> {{ $filme['popularidade'] }}</p>
                <p class="card-text"><strong>Votos:</strong> {{ $filme['votos'] }}</p>
                <p class="card-text"><strong>Média de Votos:</strong> {{ $filme['media_votos'] }}</p>
                <a href="{{ route('filmes.index') }}" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </div>
@endsection
