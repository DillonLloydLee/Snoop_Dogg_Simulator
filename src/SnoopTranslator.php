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
                if ($normal_array[$iterator] == "s") {
                    array_push($snoop_array, "z");
                    $iterator += 1;
                }
                else {
                    array_push($snoop_array, $normal_array[$iterator]);
                    $iterator += 1;
                }
            }

            return implode("", $snoop_array);
        }
    }
?>





            // foreach($normal_array as $letter) {
            //
            //     if ($letter == " ");
            //
            //         if ($letter == "s") {
            //             $letter = "z";
            //             array_push($snoop_array, $letter);
            //         }
            //         elseif ($letter == "S") {
            //             $letter = "Z";
            //             array_push($snoop_array, $letter);
            //         }
            //     else {
            //         array_push($snoop_array, $letter);
            //     }
            // }
            //
            // return implode("", $snoop_array);
