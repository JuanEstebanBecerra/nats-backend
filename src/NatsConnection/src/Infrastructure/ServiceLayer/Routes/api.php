<?php

namespace NatsConnection\src\Infrastructure\ServiceLayer\Routes;

use Illuminate\Support\Facades\Route;
use NatsConnection\Infrastructure\ServiceLayer\Controllers\NatsController;

Route::get('/nats', [NatsController::class, 'getNats']);
