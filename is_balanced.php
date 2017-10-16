<?php

/**
 * @param string $string
 * @return int
 */
function isBalanced(string $string) : int
{
    $open = [];

    $arr = str_split($string);

    foreach ($arr as $pos => $char) {
        if ($char === '{') {
            $open[] = $pos;
            continue;
        }

        if ($char !== '}') {
            continue;
        }

        // this is a closing brace, pop the last
        if (count($open) === 0) {
            return 0;
        }

        array_pop($open);
    }

    return (count($open) > 0) ? $open[0] : -1;
}