<?php

namespace Behavioral\Visitor\Interfaces;

interface Role
{
    public function accept(RoleVisitor $visitor);

}