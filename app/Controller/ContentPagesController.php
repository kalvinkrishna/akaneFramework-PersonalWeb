<?php

namespace Akane\Controller;

class ContentPagesController extends BaseController{

	public function indexAction(){
		echo $this->layout->render('mainpage',array(
			'header'  => $this->layout->render('mainframe/header'),
			'content' => $this->layout->render('mainframe/main'),
			'footer'  => $this->layout->render('mainframe/footer')
		));
	}
}