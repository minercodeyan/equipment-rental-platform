<?php

namespace App\Providers;

use App\Events\LeadCreated;
use App\Listeners\SendLeadCreatedToGo;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
    }

    public function boot(): void
    {
    }
}
