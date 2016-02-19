<?php
    class RepeatCounter
    {
        function remove_punctutation($input_string)
        {
            $stripped_string = preg_replace('/[^a-z]+/i', ' ', $input_string);
            $stripped_string = strtolower($stripped_string);
            return $stripped_string;
        }

        function explode_string($stripped_string)
        {
            $exploded_array = explode(" ", $stripped_string);
            return $exploded_array;
        }

        function check_for_matches($input_word, $exploded_array)
        {
            $counter = 0;
            foreach ($exploded_array as $word) {
                if ($word == $input_word) {
                    $counter += 1;
                }
            }
            return $counter;
        }

        function repeatCounter($input_word, $input_string)
        {
            $input_string = $this->remove_punctutation($input_string);
            $exploded_string = $this->explode_string($input_string);
            $results = $this->check_for_matches($input_word, $exploded_string);
            return $results;
        }
    }
 ?>
