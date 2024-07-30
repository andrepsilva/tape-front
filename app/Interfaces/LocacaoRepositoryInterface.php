<?php

namespace App\Interfaces;

interface LocacaoRepositoryInterface
{
    public function getAllLocacoes();
    public function getLocacaoById($locacaoId);
    public function deleteLocacao($locacaoId);
    public function createLocacao(array $locacaoDetails);
    public function updateLocacao($locacaoId, array $newDetails);
    public function confirmarLocacao($reservaId, $clienteId);
    public function devolverFilme($locacaoId);
}
