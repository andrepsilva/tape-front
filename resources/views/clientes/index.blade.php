@extends('layouts.app')

@section('title', 'Clientes')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h1>Clientes</h1>
        <a href="{{ url('/clientes/create') }}" class="btn btn-primary">Adicionar Cliente</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <td>{{ $cliente['id'] }}</td>
                    <td>{{ $cliente['nome'] }}</td>
                    <td>{{ $cliente['email'] }}</td>
                    <td>{{ $cliente['telefone'] }}</td>
                    <td>
                        <a href="{{ url('/clientes/' . $cliente['id']) }}" class="btn btn-info btn-sm">Ver</a>
                        <form action="{{ url('/clientes/' . $cliente['id']) }}" method="POST" class="d-inline">
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
