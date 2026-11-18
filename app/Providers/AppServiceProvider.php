<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public const CHIPPOWER_REGISTRATION_URL = 'https://www.chippower.com.br/evento.php?slug=one-move-run-brasil';

    /**
     * Determine if registrations are currently open (from midnight of Nov 18 to Nov 19, 2026 BRT onwards).
     */
    public static function isRegistrationOpen(): bool
    {
        return Carbon::now('America/Sao_Paulo')->gte(
            Carbon::create(2026, 11, 19, 0, 0, 0, 'America/Sao_Paulo')
        );
    }

    /**
     * Get the dynamic registration URL depending on whether registrations are open.
     */
    public static function getRegistrationUrl(): string
    {
        return self::isRegistrationOpen()
            ? self::CHIPPOWER_REGISTRATION_URL
            : route('pages.inscricoes-breve');
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $isOpen = self::isRegistrationOpen();
            $view->with('isRegistrationOpen', $isOpen);
            $view->with('registrationUrl', self::getRegistrationUrl());
        });
    }
}
