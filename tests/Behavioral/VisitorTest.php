<?php

namespace Tests\Behavioral;

use Behavioral\Visitor\Interfaces\Role;
use Behavioral\Visitor\Roles\Group;
use Behavioral\Visitor\Roles\User;
use Behavioral\Visitor\Visitors\RecordingVisitor;
use JetBrains\PhpStorm\Pure;
use PHPUnit\Framework\TestCase;

class VisitorTest extends TestCase
{
    private RecordingVisitor $visitor;

    protected function setUp(): void
    {
        $this->visitor = new RecordingVisitor();
    }

    #[Pure] public function provideRoles(): array
    {
        return [
            [new User('Dominik')],
            [new Group('Administrators')],
        ];
    }

    /**
     * @dataProvider provideRoles
     */
    public function testVisitSomeRole(Role $role)
    {
        $role->accept($this->visitor);
        $this->assertSame($role, $this->visitor->getVisited()[0]);
    }
}