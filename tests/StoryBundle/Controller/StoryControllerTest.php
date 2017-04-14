<?php

namespace Tests\StoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class StoryControllerTest extends WebTestCase
{
    public function testGet()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/story/story-1');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        $data = $client->getResponse()->getContent();

        $data = json_decode($data);
        $this->assertNotNull($data);
        $this->assertEquals('story-1', $data->id);
    }

    public function testList()
    {
    	$client = static::createClient();
        $crawler = $client->request('GET', '/story');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $data = $client->getResponse()->getContent();

        $data = json_decode($data);
        $this->assertNotNull($data);
        $this->assertInternalType('array', $data);
        $this->assertNotEquals(0, count($data));
    }

    public function testPost()
    {
    	$data = [
    		'title' => 'New story test post'
		];

    	$client = static::createClient();
        $crawler = $client->request('POST', '/story', $data);
    }
}
