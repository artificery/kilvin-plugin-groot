<?php

namespace Kilvin\Plugins\Groot;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Kilvin\Support\Plugins\Manager as BaseManager;
use Kilvin\Exceptions\PluginFailureException;

class Manager extends BaseManager
{
    protected $version	= '0.0.1';
    protected $build_date  = '20181203';
    protected $name;
    protected $description;
    protected $developer = 'Paul Burdick';
    protected $developer_url = 'https://arliden.com';
    protected $documentation_url = 'https://arliden.com';
    protected $has_cp = 'y';

    private $migrations_path = '';
    private $migrations_namespace = '';

   /**
    * Boot the Manager?
    */
    public function __construct()
    {
        $this->migrations_namespace = 'Groot\Migrations';
        $this->migrations_path = realpath(__DIR__.'/../migrations');

        $this->loadTranslationsFrom(__DIR__.'/../resources/language', 'groot');

        $this->name = __('groot::plugin.name');
        $this->description = __('groot::plugin.description');
    }

    /**
     * Install Plugin
     *
     * @return bool
     */
    public function install()
    {
        $this->runMigrations($this->migrations_path, $this->migrations_namespace, 'up');

        return true;
    }

    /**
     * Unnstall Plugin
     *
     * @return bool
     */
    public function uninstall()
    {
        $this->runMigrations($this->migrations_path, $this->migrations_namespace, 'down');

        return true;
    }
}
