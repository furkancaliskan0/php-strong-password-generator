<?php

function pwsGenrate(
    $lng,
    $minLettersOn,
    $maxLettersOn,
    $numbersOn,
    $symobolsOn,
    $dupplicate
)
{

    $minLetters = 'abcdefghijklmnopqrstuvwxyz';
    $maxLetters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $symobols = '!@#$%^&*()_-+';

    $pwsChars = '';

    if ($minLettersOn) {

        $pwsChars .= $minLetters;
    }
    if ($maxLettersOn) {

        $pwsChars .= $maxLetters;
    }
    if ($numbersOn) {

        $pwsChars .= $numbers;
    }
    if ($symobolsOn) {

        $pwsChars .= $symobols;
    }

    if (strlen($pwsChars) < 1) {

        return "ERROR!";
    }

    $pws = '';
    while (strlen($pws) < $lng) {

        $newChar = substr($pwsChars, rand(0, strlen($pwsChars)), 1);

        if ($dupplicate || !str_contains($pws, $newChar)) {

            $pws .= $newChar;
        }
    }

    return $pws;
}