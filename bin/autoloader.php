<?php

\spl_autoload_register(function ($className) {
    $classNameParts = \explode('\\', $className);
    array_shift($classNameParts);

    $classFilePath = \implode(DIRECTORY_SEPARATOR, $classNameParts);
    $fullClassFilePath = __DIR__ . '/../src/' . $classFilePath . '.php';

    require_once $fullClassFilePath;
});
