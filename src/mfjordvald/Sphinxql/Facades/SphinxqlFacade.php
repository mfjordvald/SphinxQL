<?php
namespace mfjordvald\Sphinxql\Facades;
use Illuminate\Support\Facades\Facade;

class SphinxqlFacade extends Facade {
    protected static function getFacadeAccessor()
    {
        return 'sphinxql';
    }
}