@extends('layouts.app')

@section('title', 'Clientes')

@section('content')
    <div class="container mt-5">
        <h2>Criar Novo Cliente</h2>
        <form method="POST" action="{{ route('clientes.store') }}">
            @csrf
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</body>
</html>
@endsection