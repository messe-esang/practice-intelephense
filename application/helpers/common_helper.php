<?php

function mapping($source, $target)
{
    foreach ($source as $key => $value) {
        $target->$key = $value;
    }
    return $target;
}

function masterCodes(int $masterCodeGroupId): array
{
    # code...
    return [];
}
