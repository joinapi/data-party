<?php
namespace Facades;
use Illuminate\Support\Facades\Facade;

class DataParty extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return DataParty::class;
    }
}
