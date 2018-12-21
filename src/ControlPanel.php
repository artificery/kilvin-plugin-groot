<?php

namespace Kilvin\Plugins\Groot;

use Kilvin\Facades\Cp;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Kilvin\Support\Plugins\ControlPanel as PluginControlPanel;

class ControlPanel extends PluginControlPanel
{
   /**
    * Constructor
    *
    * @return string
    */
    public function __construct()
    {
        $this->loadViewsFrom(realpath(__DIR__.'/../resources/views'), 'groot');
    }

   /**
    * Build the Homepage CP Page
    *
    * @return string
    */
    public function homepage()
   	{
        Cp::$title = __('kilvin::cp.homepage');
        Cp::$crumb = __('kilvin::cp.homepage');

        $vars['list_url'] = $this->urlBase().'/list';
        $vars['header']   = Cp::header(__('kilvin::cp.homepage'), []);

        return view('groot::homepage', $vars);
   	}
}
