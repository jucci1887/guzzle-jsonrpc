<?php

/*
 * This file is part of Guzzle HTTP JSON-RPC
 *
 * Copyright (c) 2014 Nature Delivered Ltd. <http://graze.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see  http://github.com/graze/guzzle-jsonrpc/blob/master/LICENSE
 * @link http://github.com/graze/guzzle-jsonrpc
 */

namespace Jucci1887\GuzzleHttp\JsonRpc\Middleware;

use Jucci1887\GuzzleHttp\JsonRpc\Message\MessageFactoryInterface;
use Psr\Http\Message\RequestInterface as HttpRequestInterface;

class RequestFactoryMiddleware extends AbstractMiddleware
{
    /**
     * @var MessageFactoryInterface
     */
    protected $factory;

    /**
     * @param MessageFactoryInterface $factory
     */
    public function __construct(MessageFactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    /**
     * @param  HttpRequestInterface $request
     * @param  array                $options
     *
     * @return HttpRequestInterface
     */
    public function applyRequest(HttpRequestInterface $request, array $options)
    {
        return $this->factory->fromRequest($request);
    }
}
