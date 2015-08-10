<?php
    Class SnoopTranslator
    {
        function translate($normal_phrase)
        {
            $normal_array = str_split($normal_phrase);
            $snoop_array = array();
            $array_length = strlen($normal_phrase);
            $iterator = 0;

            while ($iterator < $array_length) {

                if ($iterator == 0) {
                    array_push($snoop_array, $normal_array[$iterator]);
                }
                elseif ($normal_array[($iterator - 1)] == " ") {
                    array_push($snoop_array, $normal_array[$iterator]);
                }
                elseif ($normal_array[$iterator] == "s") {
                    array_push($snoop_array, "z");
                }
                elseif ($normal_array[$iterator] == "S") {
                    array_push($snoop_array, "Z");
                }
                else {
                    array_push($snoop_array, $normal_array[$iterator]);
                }
                $iterator += 1;

            }

            return implode("", $snoop_array);
        }
    }
?>
