<?php

class UserControllerTest extends TestCase
{
    use Way\Tests\ControllerHelpers;

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
        $this->see('foo');
    }

    /**
     * @test
     * @expectedException \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    public function showNoProfile()
    {
        // 実行
        $this->call('GET', 'user/');
    }
}
