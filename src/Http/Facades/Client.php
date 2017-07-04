<?php

namespace Larry\Http\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Client's facade.
 *
 * @author Larry <DivinerQiu@163.com>
 *
 * @since 1.0.0
 */
class Client extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'larry.httpclient';
    }
}
