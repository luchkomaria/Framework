<?php
Class Controller_Pages extends Controller_Abstract{

	public function def($page, $view, $render=""){
		$View = $this->loadView($page) ;
		$View->view('Pages/'.$view);
		$View->render("");
	}
	
	public function error($param){
		$View = $this->loadView('index') ;
		$View->view('Pages/error');
		$View->set('text', $param);
		$View->render("Страница не существует");
	}

	public function functions($param){
		$View = $this->loadView('scripts') ;
		$View->view('Pages/functions');
		$View->set('command', $param);
		$View->render("");
	}

	public function start(){
		$View = $this->loadView('index') ;
		$data = Model_DB::queryRow("SELECT * FROM `material` WHERE title='О нас'");
		$View->set('description', "Мы рады приветсовать Вас, на новом сайте проекта!");
		$View->view('Pages/start');
		$View->render("Главная страница Автоматизированной Системы Колледжа", $data['metaDesc'], $data['metaKey']);
	}
}
?>