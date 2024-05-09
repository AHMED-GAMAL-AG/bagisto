<?php

namespace Webkul\Administration\Tests;

use Tests\TestCase;
use Webkul\Administration\Tests\Concerns\AdminTestBench;
use Webkul\Core\Tests\Concerns\CoreAssertions;

class AdminTestCase extends TestCase
{
    use AdminTestBench, CoreAssertions;
}
