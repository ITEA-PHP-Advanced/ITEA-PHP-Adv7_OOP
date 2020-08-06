<?php

declare(strict_types=1);

require_once __DIR__ . '/AbstractDeveloper.php';
require_once __DIR__ . '/DeveloperInterface.php';

final class BackEndDeveloper extends AbstractDeveloper implements  DeveloperInterface
{
    protected function getIDE()
    {
        return 'PhpStorm';
    }
}
