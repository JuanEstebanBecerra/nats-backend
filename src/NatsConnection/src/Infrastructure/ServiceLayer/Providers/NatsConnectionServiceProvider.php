<?php

namespace NatsConnection\Infrastructure\ServiceLayer\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class NatsConnectionServiceProvider extends ServiceProvider
{

    /**
     * @return void
     */
    public function register(): void
    {
//        $this->app->bind(SaleServiceInterface::class, SaleService::class);
//        $this->app->bind(SaleRepositoryInterface::class, SaleRepository::class);
//        $this->app->bind(SaleProductServiceInterface::class, SaleProductService::class);
//        $this->app->bind(SaleProductRepositoryInterface::class, SaleProductRepository::class);
//        $this->app->bind(StockVerificationEventHandlerInterface::class, StockVerificationEventHandler::class);
    }

    /**
     * @return void
     */
    public function boot(): void
    {
        $this->loadRoutes();
    }

    /**
     * @return void
     */
    public function loadRoutes(): void
    {
        Route::prefix('api')
            ->group(function () {
                $this->loadRoutesFrom(__DIR__ . '/../Routes/api.php');
            });
    }
}
