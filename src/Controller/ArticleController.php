<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{
	
	function __construct()
	{
		# code...
	}

	/**
	 * @Route("/", name="app_homepage")
	 */
	public function homepage()
	{
		return $this->render('article/homepage.html.twig');
	}

	/**
	 * @Route("/news/{slug}", name="article_show")
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