<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\core\Response;

class SiteController extends Controller
{
	public function home(Request $request, Response $response)
	{
		return $this->render('home');
	}
	public function dashboard(Request $request, Response $response)
	{
		$user_type = Application::$app->getUserType();
		if($user_type === 'school')
		{
			$response->redirect('/school');
		} else if($user_type === 'teacher')
		{
			$response->redirect('/teacher');
		} else if($user_type === 'student') 
		{
			$response->redirect('/student');
		}
	}
	public function profile(Request $request, Response $response)
	{
		$user_type = Application::$app->getUserType();
		if($user_type === 'school')
		{
			$response->redirect('/schoolprofile');
		} else if($user_type === 'teacher')
		{
			$response->redirect('/teacherprofile');
		} else if($user_type === 'student') 
		{
			$response->redirect('/studentprofile');
		}
	}
	public function handleContact(Request $request, Response $response)
	{
		$body = $request->getBody();
		
	}
	public function contact(Request $request)
	{	
		return $this->render('contact');
	}
	public function chat(Request $request)
	{
		return $this->render('chat');
	}
	public function post(Request $request){
		session_start();
		if(isset($_SESSION['name'])){
   		$text = $_POST['text'];
		$name = $_SESSION['name'];
    	$fp = fopen("log.html", 'a');
    	fwrite($fp, "<div class='msgln $name'>(".date("H:i").") <b>".$name."</b>: ".stripslashes(htmlspecialchars($text))."<br></div>");
    	fclose($fp);
}
	}
}

?>