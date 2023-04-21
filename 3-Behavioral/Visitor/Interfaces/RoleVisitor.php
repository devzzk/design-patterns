<?php

namespace Behavioral\Visitor\Interfaces;

use Behavioral\Visitor\Roles\Group;
use Behavioral\Visitor\Roles\User;

interface RoleVisitor
{
    public function visitUser(User $role);

    public function visitGroup(Group $role);
}