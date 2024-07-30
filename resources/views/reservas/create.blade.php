<!DOCTYPE html>
<html>
<head>
    <title>Criar Reserva</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Criar Nova Reserva</h2>
        <form method="POST" action="{{ route('reservas.store') }}">
            @csrf
            <div class="form-group">
                <label for="filme_id">ID do Filme</label>
                <input type="text" class="form-control" id="filme_id" name="filme_id" required>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</body>
</html>
