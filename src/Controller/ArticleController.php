<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{
	
	function __construct()
	{
		# code...
	}

	/**
	 * @Route("/")
	 */
	public function homepage()
	{
		return new Response('Omg, first page!');
	}

	/**
	 * @Route("/news/{slug}")
	 */
	public function show($slug)
	{
		$comments = array(
			'I like rainbows',
			'Asteroids are something that I admire',
			'Good first article'
		);

		return $this->render('article/show.html.twig', array(
			'title' => ucwords(str_replace('-', ' ', $slug)),
			'comments' => $comments
		));
	}
}