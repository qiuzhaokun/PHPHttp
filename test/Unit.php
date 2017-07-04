<?php
/**
 *
 * Created by: larry
 * DateTime: 2017/7/4 15:42
 */

namespace Larry\Http\Test;

use Larry\Http\Request;

class Unit
{
    public static function get()
    {
        return Request::get('http://www.baidu.com', '');
    }
}