<?php

declare(strict_types=1);

namespace App\SoftwareDevelopmentCompany;

final class BackEndDeveloper extends AbstractDeveloper implements  DeveloperInterface
{
    protected function getIDE()
    {
        return 'PhpStorm';
    }
}
