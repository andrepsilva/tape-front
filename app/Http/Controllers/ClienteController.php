<?php

namespace App\Http\Controllers;

use App\Interfaces\ClienteRepositoryInterface;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    private ClienteRepositoryInterface $clienteRepository;

    public function __construct(ClienteRepositoryInterface $clienteRepository)
    {
        $this->clienteRepository = $clienteRepository;
    }

    public function index()
    {
        $clientes = $this->clienteRepository->getAllClientes();
        return view('clientes.index', compact('clientes'));
    }

    public function show($id)
    {
        $cliente = $this->clienteRepository->getClienteById($id);
        return view('clientes.show', compact('cliente'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $this->clienteRepository->createCliente($request->all());
        return redirect()->route('clientes.index');
    }

    public function destroy($id)
    {
        $this->clienteRepository->deleteCliente($id);
        return redirect()->route('clientes.index');
    }
}
