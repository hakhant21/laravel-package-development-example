<?php

namespace Hak\DataFetcher\Tests;

use Hak\DataFetcher\FetchServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;


class TestCase extends OrchestraTestCase
{
    public function getPackageProviders($app)
    {
        return [
            FetchServiceProvider::class
        ];
    }
}
