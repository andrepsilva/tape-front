<?php
namespace App\Http\Controllers;

use App\Interfaces\ReservaRepositoryInterface;
use App\Interfaces\FilmeRepositoryInterface;
// interface de cliente
use App\Interfaces\ClienteRepositoryInterface;

use Illuminate\Http\Request;

class ReservaController extends Controller
{
    protected $reservaRepository;
    protected $filmeRepository;
    // adicione a propriedade clienteRepository
    protected $clienteRepository;

    public function __construct(
                                    ReservaRepositoryInterface $reservaRepository,
                                     FilmeRepositoryInterface $filmeRepository,
                                     ClienteRepositoryInterface $clienteRepository)
    {
        $this->reservaRepository = $reservaRepository;
        $this->filmeRepository = $filmeRepository;
        $this->clienteRepository = $clienteRepository;
    }

    public function index()
    {
        $reservas = $this->reservaRepository->getAllReservas();
        $filmes = $this->filmeRepository->getAllFilmes();
        $clientes = $this->clienteRepository->getAllClientes();
       // dd($clientes);
        return view('reservas.index', compact('reservas', 'filmes','clientes'));
    }

    public function show($id)
    {
        $reserva = $this->reservaRepository->getReservaById($id);
        $filmes = $this->filmeRepository->getAllFilmes();
        $clientes = $this->clienteRepository->getAllClientes();


        return view('reservas.show', compact('reserva', 'filmes','clientes'));
    }

    public function create()
    {
        return view('reservas.create');
    }

    public function store(Request $request)
    {
        $this->reservaRepository->createReserva($request->all());
 
        return redirect()->route('reservas.index');
    }

    public function edit($id)
    {
        $reserva = $this->reservaRepository->getReservaById($id);
        $filmes = $this->filmeRepository->getAllFilmes();
        $clientes = $this->clienteRepository->getAllClientes();
        $cliente = $this->clienteRepository->getClienteById($reserva["cliente_id"]);
       // dd($reserva);
        return view('reservas.edit', compact('reserva','filmes', 'clientes', 'cliente'));
    }

    public function update(Request $request, $id)
    {
        $this->reservaRepository->updateReserva($id, $request->all());
        
        return redirect()->route('reservas.index');
    }

    public function destroy($id)
    {
        $this->reservaRepository->deleteReserva($id);
        return redirect()->route('reservas.index');
    }

    public function searchClientes(Request $request)
    {
     
    }
}
