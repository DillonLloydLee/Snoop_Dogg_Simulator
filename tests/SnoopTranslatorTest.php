<?php
    require_once "src/SnoopTranslator.php";

    class SnoopTranslatorTest extends PHPUnit_Framework_TestCase
    {
        function test_translate_sToZ()
        {
            //arrange
            $test_SnoopTranslator = new SnoopTranslator;
            $input = "has";

            //act
            $result = $test_SnoopTranslator->translate($input);

            //assert
            $this->assertEquals("haz", $result);

        }
    }

?>
