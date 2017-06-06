<?php

/*
 * This file is part of SeoMafia.net PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\SeoMafiaNet\Api;

use BrianFaust\Unified\AbstractApi;

class Links extends AbstractApi
{
    public function create(
        $url, $custom = null, $private = false, $password = null,
        $uses = null, $expire = null, $via = null)
    {
        $response = $this->post('write/post', compact('url', 'custom', 'private', 'password', 'uses', 'expire', 'via'));

        return $this->getMapper()->raw($response['data']);
    }

    public function details($id, $password = null)
    {
        $response = $this->post('read/post', compact('id', 'password'));

        return $this->getMapper()->raw($response['data']);
    }
}
