<?php

declare(strict_types=1);

require_once __DIR__ . '/AbstractDeveloper.php';
require_once __DIR__ . '/DeveloperInterface.php';

final class FrontEndDeveloper extends AbstractDeveloper implements  DeveloperInterface
{
    protected function getIDE()
    {
        return 'WebStorm';
    }
}
