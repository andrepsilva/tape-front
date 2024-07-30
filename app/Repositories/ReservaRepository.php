<?php

namespace App\Repositories;

use App\Interfaces\ReservaRepositoryInterface;
use Illuminate\Support\Facades\Http;

class ReservaRepository implements ReservaRepositoryInterface
{
    private $baseUri;

    public function getReservaById($reservaId)
    {
        $response = Http::get(env('MICROSERVICE_URL') . '/reservas/' . $reservaId);
        return $response->json();
    }

    public function getAllReservas()
    {
        $response = Http::get(env('MICROSERVICE_URL') . '/reservas');
        return $response->json();
    }

    public function createReserva(array $reservaDetails)
    {
        $response = Http::post(env('MICROSERVICE_URL') . '/reservas', $reservaDetails);
        return $response->json();
    }

    public function updateReserva($reservaId, array $newDetails)
    {
        $response = Http::put(env('MICROSERVICE_URL') . '/reservas/' . $reservaId, $newDetails);
        return $response->json();
    }

    public function deleteReserva($reservaId)
    {
        $response = Http::delete(env('MICROSERVICE_URL') . '/reservas/' . $reservaId);
        return $response->json();
    }
}
