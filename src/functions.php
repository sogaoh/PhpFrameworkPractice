<?php

/**
 * @param string $string
 * @param int $flags
 * @param string $encoding
 * @param bool $double_encode
 * @return string
 */
function h(
    string $string,
    int $flags = ENT_QUOTES,
    string $encoding = 'UTF-8',
    bool $double_encode = TRUE
): string
{
    return htmlspecialchars(
        $string,
        $flags,
        $encoding,
        $double_encode
    );
}