<?php

namespace LucasDavies\Silex;

use Pimple\Container;
use Silex\ServiceProviderInterface;

class TextlocalServiceProvider implements ServiceProviderInterface
{
    /**
     * Registers the Textlocal service on the given container.
     *
     * @param Container $pimple A container instance
     */
    public function register(Container $app)
    {
        $app['textlocal'] = $app->share(function () use ($app) {
            return new Textlocal(
                $app['textlocal.username'],
                $app['textlocal.hash'],
                $app['textlocal.apiKey']
            );
        });
    }
}
