@extends('layouts.app')

@section('title', 'Clientes')

@section('content')
    <div class="container mt-5">
        <h1>Detalhes do Cliente</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ID: {{ $cliente['id'] }}</h5>
                <p class="card-text"><strong>Nome:</strong> {{ $cliente['nome'] }}</p>
                <p class="card-text"><strong>Email:</strong> {{ $cliente['email'] }}</p>
                <p class="card-text"><strong>Telefone:</strong> {{ $cliente['telefone'] }}</p>
                <p class="card-text"><strong>Data de Criação:</strong> {{ $cliente['createdAt'] }}</p>
                <p class="card-text"><strong>Data de Atualização:</strong> {{ $cliente['updatedAt'] }}</p>
                <a href="{{ route('clientes.index') }}" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </div>
</body>
</html>
@endsection