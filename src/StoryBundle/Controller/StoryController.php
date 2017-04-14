<?php

namespace StoryBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use StoryBundle\Entity\Story;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class StoryController extends FOSRestController
{
    /**
     * @Rest\View(serializerGroups={"story-get", "timestampable", "author"})
     *
     * @ParamConverter("story", options={"mapping": {"story_id": "slug"}})
     */
    public function getAction(Story $story)
    {
        return $story;
    }

    /**
     * @Rest\View(serializerGroups={"story-get", "timestampable", "author"})
     */
    public function listAction(Request $request)
    {
        $data = $this->getDoctrine()->getRepository('StoryBundle:Story')->findAll();

        return $data;
    }
}
