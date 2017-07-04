<?php

namespace Larry\Http\Contracts;

/**
 * The request interface
 *
 * @author Larry <DivinerQiu@163.com>
 *
 * @since 1.0.0
 */
interface RequestInterface
{
    const METHOD_OPTIONS = 'OPTIONS';
    const METHOD_GET = 'GET';
    const METHOD_HEAD = 'HEAD';
    const METHOD_POST = 'POST';
    const METHOD_PUT = 'PUT';
    const METHOD_DELETE = 'DELETE';
    const METHOD_PATCH = 'PATCH';
}
