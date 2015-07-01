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


    /**
     * Get the languages dir.
     *
     * @return string Path to languages dir
     */
    public function langsDir($path=null)
    {
        $dir = __DIR__."/../src/resources/lang/artesaos";

        return $path ? $dir.'/'.ltrim($path, '/') : $dir;
    }

    /**
     * Loads an array doted language file.
     *
     * @param  string $file path to the file
     *
     * @return array       An array doted
     */
    public function loadLangFile($file)
    {
        $lang = require($file);

        return array_dot($lang);
    }

    /**
     * Assert the given lang file indexes are same on given array of indexes.
     *
     * @param  string $langFile
     * @param  array  $indexes
     * @param  string|null $message
     *
     * @return void
     */
    public function assertLangHasIndexes($langFile, array &$indexes)
    {
        $lang = $this->loadLangFile($langFile);

        $langRelativePath = $this->removeDirFromPath($langFile);

        foreach ($indexes as $key) {
            $this->assertArrayHasKey($key, $lang, sprintf('Missing translation to %s on %s.', $key, $langRelativePath));
        }

        $this->assertEquals(count($indexes), count($lang), sprintf('Some indexes are missing or exceeded on %s.', $langRelativePath));
    }
}
