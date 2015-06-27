<?php

namespace Artesaos\Defender\Tests;

abstract class TestCase extends \PHPUnit_Framework_TestCase
{
    /**
     * Remove root dir from a given path.
     *
     * @param  string $path
     *
     * @return string
     */
    public function removeDirFromPath($path)
    {
        return str_replace([__DIR__.'/../', __DIR__], '', $path);
    }
}
