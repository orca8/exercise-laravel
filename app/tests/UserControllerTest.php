<?php

class UserControllerTest extends TestCase
{

    public function setUp()
    {
        parent::setUp();
    }

    /**
     * @test
     */
    public function showProfile()
    {
        // 実行
        $this->call('GET', 'user/foo');

        // 検証
        $this->assertResponseOk();
    }
}
