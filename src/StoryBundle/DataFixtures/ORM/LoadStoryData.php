<?php

namespace StoryBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use StoryBundle\Entity\Story;

class LoadStoryData implements FixtureInterface
{
	public function load(ObjectManager $manager)
	{
		$data = [
			[
				'title' => 'First story',
				'complexity' => 2,
				'description' => 'This is a short description of the first story',
				'slug' => '1'
			],
			[
				'title' => 'Second story',
				'complexity' => 5,
				'description' => 'This is a short description of the second story',
				'slug' => '2'
			]
		];

		foreach ($data as $storyData) {
			$storyEntity = new Story();
			foreach ($storyData as $key => $value) {
				$storyEntity->{"set" . ucfirst($key)}($value);
			}

			$manager->persist($storyEntity);
			$manager->flush();
		}
	}
}
