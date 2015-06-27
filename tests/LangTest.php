<?php

namespace Artesaos\Defender\Tests;

class LangTest extends TestCase
{
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
        $base_lang = array_dot(require($files['pt_BR']));

        /** @var int total of indexes of the base lang  */
        $indexes = array_keys($base_lang);

        $message = 'Missing translation to %s.';

        foreach ($files as $langFile) {
            $lang = array_dot(require($langFile));

            foreach ($indexes as $key) {
                $this->assertArrayHasKey($key, $lang, sprintf($message, $key));
            }
        }
    }
}
