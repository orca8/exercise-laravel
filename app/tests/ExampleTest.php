<?php

class ExampleTest extends TestCase
{

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $crawler = $this->client->request('GET', '/');

        $this->assertTrue($this->client->getResponse()->isOk());
    }

    public function testOverwriteRouting()
    {
        $crawler = $this->client->request('GET', '/');

        $this->assertEquals('Overwrite routing!!', $this->client->getResponse()->getContent());
    }
}
