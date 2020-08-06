<?php

declare(strict_types=1);

require_once __DIR__ . '/DeveloperInterface.php';

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
