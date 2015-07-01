<?php

namespace Artesaos\Defender\Tests;

class LangTest extends TestCase
{
    /**
     * Tests every index on each array of locales.
     *
     * @return void
     */
    public function test_locales_should_have_same_indexes()
    {
        /** @var array indexed locales */
        $files = [
            "en" => $this->langsDir('en/dashboard.php'),
            "pt_BR" => $this->langsDir('pt_BR/dashboard.php'),
        ];

        /** @var array base locale */
        $base_lang = $this->loadLangFile($files['pt_BR']);

        /** @var int total of indexes of the base lang  */
        $indexes = array_keys($base_lang);

        foreach ($files as $langFile) {
            $this->assertLangHasIndexes($langFile, $indexes);
        }
    }
}
