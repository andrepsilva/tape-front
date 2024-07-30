@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Reservas</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Filme</th>
                <th>Cliente</th>
                <th>Data de Criação</th>
                <th>Data de Expiração</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($reservas as $reserva)
            <tr>
                <td>{{ $reserva['id'] ?? 'N/A' }}</td>
                <td>{{ $reserva['filme_id'] ?? 'N/A' }}</td>
                <td>{{ $reserva['cliente_id'] ?? 'N/A' }}</td> 
                <td>{{ $reserva['created_at'] ?? 'N/A' }}</td>
                <td>{{ $reserva['expires_at'] ?? 'N/A' }}</td>
                <td>
                    <a href="{{ route('reservas.show', $reserva['id']) }}" class="btn btn-primary">Ver</a>
                    <a href="{{ route('reservas.edit', $reserva['id']) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('reservas.destroy', $reserva['id']) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6">Nenhuma reserva encontrada.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#createReservaModal">
        Adicionar Reserva
    </button>
</div>

<!-- Modal de Criação de Reserva -->
<div class="modal fade" id="createReservaModal" tabindex="-1" role="dialog" aria-labelledby="createReservaModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('reservas.store') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="createReservaModalLabel">Criar Reserva</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="filme_id">Filme</label>
                        <select class="form-control" id="filme_id" name="filme_id">
                            @forelse ($filmes as $filme)
                            <option value="{{ $filme['id'] }}">{{ $filme['nome'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="cliente_id">Cliente</label>
                        <select class="form-control" id="cliente_id" name="cliente_id">
                        @foreach ($clientes as $value)
                            <option value="{{ $value['id'] }}" {{ $value['id'] == $value['id'] ? 'selected' : '' }}>
                                {{ $value['nome'] }}
                            </option>
                        @endforeach
                    </select>
                    
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
