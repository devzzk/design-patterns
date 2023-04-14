<?php

namespace Behavioral\Visitor\Visitors;

use Behavioral\Visitor\Roles\Group;
use Behavioral\Visitor\Interfaces\Role;
use Behavioral\Visitor\Interfaces\RoleVisitor;
use Behavioral\Visitor\Roles\User;

class RecordingVisitor implements RoleVisitor
{
    /**
     * @var Role[]
     */
    private array $visited = [];

    public function visitGroup(Group $role)
    {
        $this->visited[] = $role;
    }

    public function visitUser(User $role)
    {
        $this->visited[] = $role;
    }

    /**
     * @return Role[]
     */
    public function getVisited(): array
    {
        return $this->visited;
    }
}