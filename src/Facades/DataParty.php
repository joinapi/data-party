<?php

use Illuminate\Support\Facades\Facade;

class DataParty extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Joinbiz\Data\Models\Party\DataParty::class;
    }
}
