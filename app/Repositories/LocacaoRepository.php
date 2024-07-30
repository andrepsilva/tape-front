<?php

namespace App\Repositories;

use App\Interfaces\LocacaoRepositoryInterface;
use Illuminate\Support\Facades\Http;

class LocacaoRepository implements LocacaoRepositoryInterface
{
    public function getAllLocacoes()
    {
        $response = Http::get(env('MICROSERVICE_URL') . '/locacoes');
        return $response->json();
    }

    public function getLocacaoById($locacaoId)
    {
        $response = Http::get(env('MICROSERVICE_URL') . '/locacoes/' . $locacaoId);
        return $response->json();
    }

    public function deleteLocacao($locacaoId)
    {
        $response = Http::delete(env('MICROSERVICE_URL') . '/locacoes/' . $locacaoId);
        return $response->json();
    }

    public function createLocacao(array $locacaoDetails)
    {
        $response = Http::post(env('MICROSERVICE_URL') . '/locacoes', $locacaoDetails);
        return $response->json();
    }

    public function updateLocacao($locacaoId, array $newDetails)
    {
        $response = Http::put(env('MICROSERVICE_URL') . '/locacoes/' . $locacaoId, $newDetails);
        return $response->json();
    }

    public function confirmarLocacao($reservaId, $clienteId)
    {
        $response = Http::patch(env('MICROSERVICE_URL') . '/locacoes/confirmar/' . $reservaId . '/' . $clienteId);
        return $response->json();
    }

    public function devolverFilme($locacaoId)
    {
        $response = Http::patch(env('MICROSERVICE_URL') . '/locacoes/devolver/' . $locacaoId);
        return $response->json();
    }
}
