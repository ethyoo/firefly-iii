<?php

namespace Tests\unit\Support\Search\QueryParser;

use FireflyIII\Support\Search\QueryParser\GdbotsQueryParser;
use FireflyIII\Support\Search\QueryParser\QueryParserInterface;

/**
 * @group unit-test
 * @group support
 * @group search
 *
 * @internal
 *
 * @coversNothing
 */
final class GdbotsQueryParserParseQueryTest extends AbstractQueryParserInterfaceParseQueryTest
{
    protected function createParser(): QueryParserInterface
    {
        return new GdbotsQueryParser();
    }
}
