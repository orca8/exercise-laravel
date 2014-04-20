<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthorizeUserTest extends TestCase
{

    public function setUp()
    {
        parent::setUp();
        $this->seed('AccountTableSeeder');
    }

    /**
     * @test
     */
    public function customizedColumnAttemptTheSuccess()
    {
        // 事前準備
        $credentials = array(
            'account_id' => 'admin',
            'password' => 'admin'
        );

        // 検証
        $this->assertTrue(Auth::attempt($credentials));
    }

    /**
     * @test
     */
    public function customizedColumnAttemptTheFail()
    {
        // 事前準備
        $credentials = array(
            'account_id' => 'admin',
            'password' => '12345'
        );

        // 検証
        $this->assertFalse(Auth::attempt($credentials));
    }

    /**
     * ErrorException: Undefined index: password
     * @test
     * @expectedException ErrorException
     */
    public function customizedColumnAttemptTheErrorExceptionUndefinedIndex_password()
    {
        // 事前準備
        $credentials = array(
            'account_id' => 'admin',
            'account_password' => 'admin'
        );

        // 実行
        Auth::attempt($credentials);
    }
}
