@extends('layouts.app')

@section('title', 'Locações')

@section('content')
    <div class="container mt-5">
        <h1>Detalhes da Locação</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ID: {{ $locacao['id'] }}</h5>
                <p class="card-text"><strong>Reserva ID:</strong> {{ $locacao['reserva_id'] }}</p>
                <p class="card-text"><strong>Cliente ID:</strong> {{ $locacao['cliente_id'] }}</p>
                <p class="card-text"><strong>Status:</strong> {{ $locacao['status'] }}</p>
                <p class="card-text"><strong>Data de Criação:</strong> {{ $locacao['createdAt'] }}</p>
                <p class="card-text"><strong>Data de Atualização:</strong> {{ $locacao['updatedAt'] }}</p>
                <a href="{{ route('locacoes.index') }}" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </div>
@endsection