<?php

declare(strict_types=1);

/*
 * This file is part of SeoMafia.net PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\SeoMafiaNet\API;

use Plients\Http\HttpResponse;

class Links extends AbstractAPI
{
    /**
     * @param string $url
     * @param array  $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function create(string $url, array $parameters = []): HttpResponse
    {
        return $this->client->post('write/post', compact('url') + $parameters);
    }

    /**
     * @param int         $id
     * @param string|null $password
     *
     * @return \Plients\Http\HttpResponse
     */
    public function details(int $id, ?string $password = null): HttpResponse
    {
        return $this->client->post('read/post', compact('id', 'password'));
    }
}
