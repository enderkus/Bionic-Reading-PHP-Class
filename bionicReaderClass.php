<?php
/*
Class Bionic Reader
Author : Ender KUŞ
Git: https://github.com/enderkus
*/

class BionicReader {
    function splitPhar($var) {
        return $pharagraphs = explode("\r",$var);
    }

    function splitWords($var) {
        return $var = explode(" ",$var);
    }

    function bionicWrite($var) {
        $words = array();
        foreach($var as $v) {
            if (strlen($v) == 1) {
                $words[] = "<b>".$v."</b>";
            } elseif (strlen($v) == 2) {
                $words[] = "<b>".$v."</b>";
            } elseif (strlen($v) == 3) {
                $split_word = str_split($v,2);
                $bolded_chars = "<b>".$split_word[0]."</b>";
                $normal_chars = $split_word[1];
                $words[] = $bolded_chars.$normal_chars;
            } elseif (strlen($v) == 4) {
                $split_word = str_split($v,2);
                $bolded_chars = "<b>".$split_word[0]."</b>";
                $normal_chars = $split_word[1];
                $words[] = $bolded_chars.$normal_chars;
            } elseif (strlen($v) == 5) {
                $split_word = str_split($v,3);
                $bolded_chars = "<b>".$split_word[0]."</b>";
                $normal_chars = $split_word[1];
                $words[] = $bolded_chars.$normal_chars;
            } elseif (strlen($v) == 6) {
                $split_word = str_split($v,3);
                $bolded_chars = "<b>".$split_word[0]."</b>";
                $normal_chars = $split_word[1];
                $words[] = $bolded_chars.$normal_chars;
            } elseif (strlen($v) == 7) {
                $split_word = str_split($v,3);
                $bolded_chars = "<b>".$split_word[0]."</b>";
                $normal_chars = $split_word[1];
                $last_chars = $split_word[2];
                $words[] = $bolded_chars.$normal_chars.$last_chars;
            } elseif (strlen($v) == 8) {
                $split_word = str_split($v,3);
                $bolded_chars = "<b>".$split_word[0]."</b>";
                $normal_chars = $split_word[1];
                $last_chars = $split_word[2];
                $words[] = $bolded_chars.$normal_chars.$last_chars;
            } elseif (strlen($v) == 9) {
                $split_word = mb_str_split($v,4);
                $bolded_chars = "<b>".$split_word[0]."</b>";
                $normal_chars = $split_word[1];
                $last_chars = $split_word[2];
                $words[] = $bolded_chars.$normal_chars.$last_chars;
            } elseif (strlen($v) == 10) {
                $split_word = mb_str_split($v,4);
                $bolded_chars = "<b>".$split_word[0]."</b>";
                $normal_chars = $split_word[1];
                $last_chars = $split_word[2];
                $words[] = $bolded_chars . $normal_chars . $last_chars;
            } elseif (strlen($v) == 11) {
                $split_word = mb_str_split($v,4);
                $bolded_chars = "<b>".$split_word[0]."</b>";
                $normal_chars = $split_word[1];
                $last_chars = $split_word[2];
                $words[] = $bolded_chars.$normal_chars.$last_chars;
            } elseif (strlen($v) == 12) {
                $split_word = mb_str_split($v,5);
                $bolded_chars = "<b>".$split_word[0]."</b>";
                $normal_chars = $split_word[1];
                $last_chars = $split_word[2];
                $words[] = $bolded_chars.$normal_chars.$last_chars;
            } elseif (strlen($v) == 13) {
                $split_word = mb_str_split($v,6);
                $bolded_chars = "<b>".$split_word[0]."</b>";
                $normal_chars = $split_word[1];
                $last_chars = $split_word[2];
                $words[] = $bolded_chars.$normal_chars.$last_chars;
            } elseif (strlen($v) == 14) {
                $split_word = mb_str_split($v,6);
                $bolded_chars = "<b>".$split_word[0]."</b>";
                $normal_chars = $split_word[1];
                $last_chars = $split_word[2];
                $words[] = $bolded_chars.$normal_chars.$last_chars;
            } elseif (strlen($v) == 15) {
                $split_word = mb_str_split($v,7);
                $bolded_chars = "<b>".$split_word[0]."</b>";
                $normal_chars = $split_word[1];
                $last_chars = $split_word[2];
                $words[] = $bolded_chars.$normal_chars.$last_chars;
            } elseif (strlen($v) == 16) {
                $split_word = mb_str_split($v,7);
                $bolded_chars = "<b>".$split_word[0]."</b>";
                $normal_chars = $split_word[1];
                $last_chars = $split_word[2];
                $words[] = $bolded_chars.$normal_chars.$last_chars;
            } elseif (strlen($v) == 17) {
                $split_word = mb_str_split($v,8);
                $bolded_chars = "<b>".$split_word[0]."</b>";
                $normal_chars = $split_word[1];
                $last_chars = $split_word[2];
                $words[] = $bolded_chars.$normal_chars.$last_chars;
            } elseif (strlen($v) == 18) {
                $split_word = mb_str_split($v,8);
                $bolded_chars = "<b>".$split_word[0]."</b>";
                $normal_chars = $split_word[1];
                $last_chars = $split_word[2];
                $words[] = $bolded_chars.$normal_chars.$last_chars;
            } elseif (strlen($v) == 19) {
                $split_word = mb_str_split($v,9);
                $bolded_chars = "<b>".$split_word[0]."</b>";
                $normal_chars = $split_word[1];
                $last_chars = $split_word[2];
                $words[] = $bolded_chars.$normal_chars.$last_chars;
            } elseif (strlen($v) == 20) {
                $split_word = mb_str_split($v,9);
                $bolded_chars = "<b>".$split_word[0]."</b>";
                $normal_chars = $split_word[1];
                $last_chars = $split_word[2];
                $words[] = $bolded_chars.$normal_chars.$last_chars;
            } elseif (strlen($v) == 21) {
                $split_word = mb_str_split($v,10);
                $bolded_chars = "<b>".$split_word[0]."</b>";
                $normal_chars = $split_word[1];
                $last_chars = $split_word[2];
                $words[] = $bolded_chars.$normal_chars.$last_chars;
            } elseif (strlen($v) == 22) {
                $split_word = mb_str_split($v,10);
                $bolded_chars = "<b>".$split_word[0]."</b>";
                $normal_chars = $split_word[1];
                $last_chars = $split_word[2];
                $words[] = $bolded_chars.$normal_chars.$last_chars;
            } else {
                $split_word = mb_str_split($v,10);
                $bolded_chars = "<b>".$split_word[0]."</b>";
                $normal_chars = $split_word[1];
                $last_chars = $split_word[2];
                $words[] = $bolded_chars.$normal_chars.$last_chars;
            }
        }
        return $words;
    }

    function initWords($var) {
        $split_pharagraphs = explode("\r",$var);
        $new_doc = array();
        foreach ($split_pharagraphs as $sp) { 
                $split_words_in_pharagraph = $this->splitWords($sp);
                $write_as_bionic = $this->bionicWrite($split_words_in_pharagraph);
                $new_doc[] = implode(" ",$write_as_bionic)."<br>";
        }
        return implode($new_doc);
    }

}

?>