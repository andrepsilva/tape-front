<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\ClienteRepositoryInterface;
use App\Repositories\ClienteRepository;
use App\Interfaces\FilmeRepositoryInterface;
use App\Repositories\FilmeRepository;
use App\Interfaces\LocacaoRepositoryInterface;
use App\Repositories\LocacaoRepository;
use App\Interfaces\ReservaRepositoryInterface;
use App\Repositories\ReservaRepository;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(ClienteRepositoryInterface::class, ClienteRepository::class);
        $this->app->bind(FilmeRepositoryInterface::class, FilmeRepository::class);
        $this->app->bind(LocacaoRepositoryInterface::class, LocacaoRepository::class);
        $this->app->bind(ReservaRepositoryInterface::class, ReservaRepository::class);
    }

    public function boot()
    {
        //
    }
}
