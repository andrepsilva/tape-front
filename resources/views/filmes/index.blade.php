@extends('layouts.app')

@section('title', 'Filmes')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h1>Filmes</h1>
        <a href="{{ url('/filmes/create') }}" class="btn btn-primary">Adicionar Filme</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sinopse</th>
                <th>Classificação</th>
                <th>Data de Lançamento</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($filmes as $filme)
                <tr>
                    <td>{{ $filme['id'] }}</td>
                    <td>{{ $filme['nome'] }}</td>
                    <td>{{ $filme['sinopse'] }}</td>
                    <td>{{ $filme['classificacao'] }}</td>
                    <td>{{ $filme['data_lancamento'] }}</td>
                    <td>
                        <a href="{{ url('/filmes/' . $filme['id']) }}" class="btn btn-info btn-sm">Ver</a>
                        <form action="{{ url('/filmes/' . $filme['id']) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
