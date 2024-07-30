<?php

namespace App\Repositories;

use App\Interfaces\ClienteRepositoryInterface;
use Illuminate\Support\Facades\Http;

class ClienteRepository implements ClienteRepositoryInterface
{
    public function getAllClientes()
    {
        $response = Http::get(env('MICROSERVICE_URL') . '/clientes');
        return $response->json();
    }

    public function getClienteById($clienteId)
    {
        $response = Http::get(env('MICROSERVICE_URL') . '/clientes/' . $clienteId);
        return $response->json();
    }

    public function deleteCliente($clienteId)
    {
        $response = Http::delete(env('MICROSERVICE_URL') . '/clientes/' . $clienteId);
        return $response->json();
    }

    public function createCliente(array $clienteDetails)
    {
        $response = Http::post(env('MICROSERVICE_URL') . '/clientes', $clienteDetails);
        return $response->json();
    }

    public function updateCliente($clienteId, array $newDetails)
    {
        $response = Http::put(env('MICROSERVICE_URL') . '/clientes/' . $clienteId, $newDetails);
        return $response->json();
    }

    public function searchClientes($query)
    {
        $response = Http::get(env('MICROSERVICE_URL') . '/clientes?search=' . $query);
        return $response->json();
    }
}
