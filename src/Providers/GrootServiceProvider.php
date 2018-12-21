<?php

namespace Kilvin\Plugins\Groot\Providers;

use App;
use Kilvin\Facades\Plugins;
use Kilvin\Plugins\Groot\ControlPanel;
use Kilvin\Plugins\Groot\Manager;
use Kilvin\Plugins\Groot\Templates;
use Illuminate\Support\ServiceProvider;

class GrootServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        Plugins::register('Groot', Manager::class, ControlPanel::class);

        Plugins::registerTwig('Groot', 'element',  Templates\Elements\Groot::class);
        Plugins::registerTwig('Groot', 'filter',   Templates\Filters\IAmGroot::class);
        Plugins::registerTwig('Groot', 'variable', Templates\Variables\Groot::class);
    }

    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        // We could add/register other things like Events, etc.
    }
}
