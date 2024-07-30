@extends('layouts.app')

@section('title', 'Locações')

@section('content')
    <div class="container mt-5">
        <h2>Criar Nova Locação</h2>
        <form method="POST" action="{{ route('locacoes.store') }}">
            @csrf
            <div class="form-group">
                <label for="reserva_id">ID da Reserva</label>
                <input type="text" class="form-control" id="reserva_id" name="reserva_id" required>
            </div>
            <div class="form-group">
                <label for="cliente_id">ID do Cliente</label>
                <input type="text" class="form-control" id="cliente_id" name="cliente_id" required>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="RESERVED">RESERVED</option>
                    <option value="LEASED">LEASED</option>
                    <option value="RETURNED">RETURNED</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
    @endsection