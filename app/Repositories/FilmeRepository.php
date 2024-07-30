<?php

namespace App\Repositories;

use App\Interfaces\FilmeRepositoryInterface;
use Illuminate\Support\Facades\Http;

class FilmeRepository implements FilmeRepositoryInterface
{
    public function getAllFilmes()
    {
        $response = Http::get(env('MICROSERVICE_URL') . '/filmes');
        return $response->json();
    }
    
    public function getFilmeById($filmeId)
    {
        $response = Http::get(env('MICROSERVICE_URL') . '/filmes/' . $filmeId);
        return $response->json();
    }
    
    public function deleteFilme($filmeId)
    {
        $response = Http::delete(env('MICROSERVICE_URL') . '/filmes/' . $filmeId);
        return $response->json();
    }

    public function createFilme(array $filmeDetails)
    {
        $response = Http::post(env('MICROSERVICE_URL') . '/filmes', $filmeDetails);
        return $response->json();
    }

    public function updateFilme($filmeId, array $newDetails)
    {
        $response = Http::put(env('MICROSERVICE_URL') . '/filmes/' . $filmeId, $newDetails);
        return $response->json();
    }
}
