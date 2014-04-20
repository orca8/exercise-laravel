<?php
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

abstract class TestCase extends Illuminate\Foundation\Testing\TestCase
{

    /**
     * (non-PHPdoc)
     *
     * @see \Illuminate\Foundation\Testing\TestCase::setUp()
     */
    public function setUp()
    {
        parent::setUp();
        $this->prepareForTests();
    }

    /**
     * (non-PHPdoc)
     *
     * @see PHPUnit_Framework_TestCase::tearDown()
     */
    public function tearDown()
    {
        parent::tearDown();
        Artisan::call('migrate:reset');
        DB::disconnect();
    }

    /**
     * Creates the application.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernelInterface
     */
    public function createApplication()
    {
        $unitTesting = true;

        $testEnvironment = 'testing';

        return require __DIR__ . '/../../bootstrap/start.php';
    }

    public function prepareForTests()
    {
        Artisan::call('migrate');
        $this->seed();
        Mail::pretend(true);
        // テスト実行時にルートフィルターを有効にする
        Route::enableFilters();
    }
}
