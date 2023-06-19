<?php
namespace App\Repository;

class BaseRepository
{

    protected const TRUE = true;
    protected const FALSE = false;

    public function success()
    {
        return self::TRUE;
    }

    public function fail()
    {
        return self::FALSE;
    }

}
