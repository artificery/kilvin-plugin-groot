<?php

namespace Kilvin\Plugins\Groot\Templates\Elements;

use Kilvin\Libraries\Twig\Templates\ModelElement;
use Kilvin\Plugins\Groot\Models\Groot as BaseModel;

class Groot extends BaseModel implements \IteratorAggregate
{
    use ModelElement;
}
