@extends('layouts.app')

@section('title', 'Locações')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h1>Locações</h1>
        <a href="{{ url('/locacoes/create') }}" class="btn btn-primary">Adicionar Locação</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Reserva ID</th>
                <th>Cliente ID</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($locacoes as $locacao)
                <tr>
                    <td>{{ $locacao['id'] }}</td>
                    <td>{{ $locacao['reserva_id'] }}</td>
                    <td>{{ $locacao['cliente_id'] }}</td>
                    <td>{{ $locacao['status'] }}</td>
                    <td>
                        <a href="{{ url('/locacoes/' . $locacao['id']) }}" class="btn btn-info btn-sm">Ver</a>
                        <form action="{{ url('/locacoes/' . $locacao['id']) }}" method="POST" class="d-inline">
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
