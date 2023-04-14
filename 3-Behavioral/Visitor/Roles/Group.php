<?php

namespace Behavioral\Visitor\Roles;

use Behavioral\Visitor\Interfaces\Role;
use Behavioral\Visitor\Interfaces\RoleVisitor;

class Group implements Role
{
    public function __construct(private string $name)
    {
    }

    public function getName(): string
    {
        return sprintf('Group: %s', $this->name);
    }

    public function accept(RoleVisitor $visitor)
    {
        $visitor->visitGroup($this);
    }
}