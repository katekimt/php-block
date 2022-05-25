<?php

echo milliseconds(1, 4, 0);

function milliseconds($h, $m, $s)
{
    return 3600000 * $h + 60000 * $m + 1000 * $s;
}

;

