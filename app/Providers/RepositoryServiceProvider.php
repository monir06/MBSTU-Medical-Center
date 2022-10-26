<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\AppointmentContract;
use App\Repositories\AppointmentRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    protected $repositories = [
        AppointmentContract::class         =>          AppointmentRepository::class,
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        foreach ($this->repositories as $interface => $implementation)
        {
            $this->app->bind($interface, $implementation);
        }
    }
}
