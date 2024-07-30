<?php

namespace App\Interfaces;

interface FilmeRepositoryInterface
{
    public function getAllFilmes();
    public function getFilmeById($filmeId);
    public function deleteFilme($filmeId);
    public function createFilme(array $filmeDetails);
    public function updateFilme($filmeId, array $newDetails);
}
