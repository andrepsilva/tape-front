<?php

namespace App\Interfaces;

interface ClienteRepositoryInterface
{
    public function getAllClientes();
    public function getClienteById($clienteId);
    public function deleteCliente($clienteId);
    public function createCliente(array $clienteDetails);
    public function updateCliente($clienteId, array $newDetails);
}
