<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes da Reserva</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Detalhes da Reserva</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ID: {{ $reserva['id'] }}</h5>
                <p class="card-text"><strong>Filme ID:</strong> {{ $reserva['filme_id'] }}</p>
                <p class="card-text"><strong>Data de Criação:</strong> {{ $reserva['createdAt'] }}</p>
                <p class="card-text"><strong>Data de Atualização:</strong> {{ $reserva['updatedAt'] }}</p>
                <p class="card-text"><strong>Expira em:</strong> {{ $reserva['expiresAt'] }}</p>
                <a href="{{ route('reservas.index') }}" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </div>
</body>
</html>
