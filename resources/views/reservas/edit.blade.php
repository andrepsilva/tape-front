@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Reserva</h1>
    <form action="{{ route('reservas.update', $reserva['id']) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="filme_id">Filme</label>
            <select class="form-control" id="filme_id" name="filme_id">
                @foreach ($filmes as $filme)
                <option value="{{ $filme['id'] }}" {{ $filme['id'] == $reserva['filme_id'] ? 'selected' : '' }}>
                    {{ $filme['nome'] }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="cliente_id">Cliente</label>
            <select class="form-control" id="cliente_id" name="cliente_id">
                @foreach ($clientes as $value)
                @if($cliente['id'] === $value['id'])
                    <option value="{{ $value['id'] }}" selected>
                        {{ $value['nome'] }}
                    </option>
                @else
                    <option value="{{ $value['id'] }}" {{ $value['id'] == $value['id'] ? 'selected' : '' }}>
                        {{ $cliente['nome'] }}
                    </option>
                @endif
                @endforeach
            </select>

            
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>


@endsection
