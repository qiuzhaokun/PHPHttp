<?php
/**
 *
 * Created by: larry
 * DateTime: 2017/7/4 15:39
 */

namespace Larry\Http;


class Request
{
    public static function get($url)
    {
        echo $url.'_get';
    }
}