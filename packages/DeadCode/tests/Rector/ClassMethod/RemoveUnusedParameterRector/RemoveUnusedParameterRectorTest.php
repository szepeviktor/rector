<?php declare(strict_types=1);

namespace Rector\DeadCode\Tests\Rector\ClassMethod\RemoveUnusedParameterRector;

use Rector\DeadCode\Rector\ClassMethod\RemoveUnusedParameterRector;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;

final class RemoveUnusedParameterRectorTest extends AbstractRectorTestCase
{
    public function test(): void
    {
        $this->doTestFiles([
            __DIR__ . '/Fixture/change_when_not_used_in_children.php.inc',
            __DIR__ . '/Fixture/dont_change_parent.php.inc',
            __DIR__ . '/Fixture/fixture.php.inc',
            __DIR__ . '/Fixture/order.php.inc',
            __DIR__ . '/Fixture/parent_required.php.inc',
            __DIR__ . '/Fixture/in_between_parameter.php.inc',
            __DIR__ . '/Fixture/compact.php.inc',
            __DIR__ . '/Fixture/keep_magic_methods_param.php.inc',
            __DIR__ . '/Fixture/anonymous_classes.php.inc',
        ]);
    }

    protected function getRectorClass(): string
    {
        return RemoveUnusedParameterRector::class;
    }
}
