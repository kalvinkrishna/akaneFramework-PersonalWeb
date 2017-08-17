<?php

namespace Akane\Controller;

class HomeController extends BaseController
{
	public function indexAction()
	{	
		$this->http->redirect('homepages');
	}

}