<?php

namespace Artesaos\Defender\Tests;

class LangTest extends TestCase
{
    /**
     * Languages dir.
     *
     * @var string
     */
    protected $langDir = __DIR__."/../src/resources/lang/artesaos";


    /**
     * Tests every index on each array of locales.
     *
     * @return void
     */
    public function test_locales_should_have_same_indexes()
    {

        /** @var array indexed locales */
        $files = [
            "en" =>    $this->langDir.'/en/dashboard.php',
            "pt_BR" => $this->langDir.'/pt_BR/dashboard.php',
        ];

        /** @var array base locale */
        $base_lang = $this->loadLangFile($files['pt_BR']);

        /** @var int total of indexes of the base lang  */
        $indexes = array_keys($base_lang);

        foreach ($files as $langFile) {
            $this->assertLangHasIndexes($langFile, $indexes);
        }
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
}
