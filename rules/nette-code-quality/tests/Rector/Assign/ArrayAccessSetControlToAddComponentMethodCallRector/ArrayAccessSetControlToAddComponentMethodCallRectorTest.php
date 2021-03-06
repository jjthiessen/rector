<?php

declare(strict_types=1);

namespace Rector\NetteCodeQuality\Tests\Rector\Assign\ArrayAccessSetControlToAddComponentMethodCallRector;

use Iterator;
use Rector\Core\Testing\PHPUnit\AbstractRectorTestCase;
use Rector\NetteCodeQuality\Rector\Assign\ArrayAccessSetControlToAddComponentMethodCallRector;
use Symplify\SmartFileSystem\SmartFileInfo;

final class ArrayAccessSetControlToAddComponentMethodCallRectorTest extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideData()
     */
    public function test(SmartFileInfo $fileInfo): void
    {
        $this->doTestFileInfo($fileInfo);
    }

    public function provideData(): Iterator
    {
        return $this->yieldFilesFromDirectory(__DIR__ . '/Fixture');
    }

    protected function getRectorClass(): string
    {
        return ArrayAccessSetControlToAddComponentMethodCallRector::class;
    }
}
