<?php

namespace App\Interfaces;

interface ReservaRepositoryInterface
{
    public function getAllReservas();
    public function getReservaById($reservaId);
    public function deleteReserva($reservaId);
    public function createReserva(array $reservaDetails);
    public function updateReserva($reservaId, array $newDetails);
}
