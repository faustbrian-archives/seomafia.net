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

namespace Plients\SeoMafia;

use Plients\Http\Http;

class Client
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * Create a new client instance.
     *
     * @param string $apiKey
     */
    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * Create a new API service instance.
     *
     * @param string $name
     *
     * @return \Plients\SeoMafia\API\AbstractAPI
     */
    public function api(string $name): API\AbstractAPI
    {
        $client = Http::withBaseUri("http://seomafia.net/?apiKey={$this->apiKey}");

        $class = "Plients\\SeoMafia\\API\\{$name}";

        return new $class($client);
    }
}
