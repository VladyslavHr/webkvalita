<?php

function locale_route($name, $parameters = []) {
    if (!is_array($parameters)) {
        $parameters = [$parameters];
    }
    return route($name, array_merge(['locale' => app()->getLocale()], $parameters));
}
