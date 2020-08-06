<?php

require_once __DIR__ . '/DeveloperInterface.php';

abstract class AbstractDeveloper implements DeveloperInterface
{
    final public function startWork()
    {
        echo \sprintf(
            "[%s] Opens '%s' IDE...\n",
            \spl_object_id($this),
            $this->getIDE()
        );
    }

    abstract protected function getIDE();
}
