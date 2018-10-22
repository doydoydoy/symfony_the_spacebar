<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ArticleController
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
		return new Response(sprintf('Future page for article: %s', $slug));
	}
}