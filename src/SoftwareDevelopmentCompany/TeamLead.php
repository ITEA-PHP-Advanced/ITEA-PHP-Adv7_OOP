<?php

declare(strict_types=1);

namespace App\SoftwareDevelopmentCompany;

final class TeamLead implements DeveloperInterface
{
    /** @var DeveloperInterface[] */
    private $team = [];

    public function addTeamMember(DeveloperInterface $developer)
    {
        $this->team[] = $developer;
    }

    public function startWork()
    {
        foreach ($this->team as $teamMember) {
            $teamMember->startWork();
        }
    }
}
