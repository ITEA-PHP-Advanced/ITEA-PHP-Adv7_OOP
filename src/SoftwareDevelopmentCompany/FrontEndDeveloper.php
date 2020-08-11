<?php

declare(strict_types=1);

namespace App\SoftwareDevelopmentCompany;

final class FrontEndDeveloper extends AbstractDeveloper implements  DeveloperInterface
{
    protected function getIDE()
    {
        return 'WebStorm';
    }
}
