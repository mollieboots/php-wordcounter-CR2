<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_remove_punctuation()
        {
            $test_repeatCounter = new RepeatCounter;
            $input = "Hello world, this is cool!";

            $result = $test_repeatCounter->remove_punctutation($input);

            $this->assertEquals("hello world this is cool ", $result);
        }

        function test_explode_string()
        {
            $test_repeatCounter = new RepeatCounter;
            $input = "hello world this is cool";

            $result = $test_repeatCounter->explode_string($input);

            $this->assertEquals(["hello","world","this","is","cool"], $result);
        }

        function test_check_for_matches()
        {
            $test_repeatCounter = new RepeatCounter;
            $input_word = "can";
            $input_string = ["can","you","not","or","can","you"];

            $result = $test_repeatCounter->check_for_matches($input_word, $input_string);

            $this->assertEquals(2, $result);
        }
    }
 ?>
