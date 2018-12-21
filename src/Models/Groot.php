<?php

namespace Kilvin\Plugins\Groot\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Groot extends Model
{
	 /**
     * The primary key for this model
     * @var string
     */
	public $primaryKey = 'id';

	 /**
     * The table associated with the model.
     * @var string
     */
    protected $table = 'groot';
}

