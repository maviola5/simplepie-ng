<?php
/**
 * Copyright (c) 2017 Ryan Parman <http://ryanparman.com>.
 * Copyright (c) 2017 Contributors.
 *
 * http://opensource.org/licenses/Apache2.0
 */

declare(strict_types=1);

namespace SimplePie\Test\Unit\Mixin;

use SimplePie\Mixin\DomDocumentTrait;
use SimplePie\Test\Unit\AbstractTestCase;

/**
 * @coversNothing
 */
class DomDocumentTraitTest extends AbstractTestCase
{
    use DomDocumentTrait;

    public function testFailMe(): void
    {
    }
}
