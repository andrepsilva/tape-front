<?php

namespace App\Services;

use App\Interfaces\ClienteRepositoryInterface;

class ClienteService
{
    protected $clienteRepository;

    public function __construct(ClienteRepositoryInterface $clienteRepository)
    {
        $this->clienteRepository = $clienteRepository;
    }

    public function getAllClientes()
    {
        return $this->clienteRepository->getAllClientes();
    }

    public function getClienteById($clienteId)
    {
        return $this->clienteRepository->getClienteById($clienteId);
    }

    public function deleteCliente($clienteId)
    {
        return $this->clienteRepository->deleteCliente($clienteId);
    }

    public function createCliente(array $clienteDetails)
    {
        return $this->clienteRepository->createCliente($clienteDetails);
    }

    public function updateCliente($clienteId, array $newDetails)
    {
        return $this->clienteRepository->updateCliente($clienteId, $newDetails);
    }
}
