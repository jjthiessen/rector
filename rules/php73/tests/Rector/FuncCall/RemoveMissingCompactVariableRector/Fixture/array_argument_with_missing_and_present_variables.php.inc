<?php

namespace Rector\Php73\Tests\Rector\FuncCall\RemoveMissingCompactVariableRector\Fixture;

class MissingAndPresentVariable
{
    public function run()
    {
        $foo = 'foo';
        $bar = 'bar';

        compact(['foo', 'bar', 'baz']);
    }
}

?>
-----
<?php

namespace Rector\Php73\Tests\Rector\FuncCall\RemoveMissingCompactVariableRector\Fixture;

class MissingAndPresentVariable
{
    public function run()
    {
        $foo = 'foo';
        $bar = 'bar';

        compact(['foo', 'bar']);
    }
}

?>
