<?php

namespace StoryBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class StoryController extends FOSRestController
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $author = new \stdClass();
        $author->name = 'fifi';
        $author->firstName = 'riri';

        $test = new \stdClass();
        $test->name = 'toto';
        $test->complexity = 5;
        $test->author = $author;
        $test->comments = [];

        return new JsonResponse(['data' => $test]);
    }
}
