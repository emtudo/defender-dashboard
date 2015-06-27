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
        /** @var string Languages directory */
        $langsDir = __DIR__."/../src/resources/lang/artesaos";

        /** @var array indexed locales */
        $files = [
            "en" =>    $langsDir.'/en/dashboard.php',
            "pt_BR" => $langsDir.'/pt_BR/dashboard.php',
        ];

        /** @var array base locale */
        $base_lang = $this->loadLocaleFile($files['pt_BR']);

        /** @var int total of indexes of the base lang  */
        $indexes = array_keys($base_lang);

        foreach ($files as $langFile) {
            $lang = $this->loadLocaleFile($langFile);

            foreach ($indexes as $key) {
                $this->assertArrayHasKey($key, $lang, sprintf('Missing translation to %s.', $key));
            }
        }
    }

    /**
     * Loads an array doted locale file.
     *
     * @param  string $file path to the file
     *
     * @return array       An array doted
     */
    public function loadLocaleFile($file)
    {
        $locale = require($file);

        return array_dot($locale);
    }
}
