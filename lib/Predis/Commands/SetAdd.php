<?php

/*
 * This file is part of the Predis package.
 *
 * (c) Daniele Alessandri <suppakilla@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Predis\Commands;

use Predis\Helpers;

/**
 * @link http://redis.io/commands/sadd
 * @author Daniele Alessandri <suppakilla@gmail.com>
 */
class SetAdd extends Command
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return 'SADD';
    }

    /**
     * {@inheritdoc}
     */
    protected function filterArguments(Array $arguments)
    {
        return Helpers::filterVariadicValues($arguments);
    }

    /**
     * {@inheritdoc}
     */
    public function parseResponse($data)
    {
        return (bool) $data;
    }
}