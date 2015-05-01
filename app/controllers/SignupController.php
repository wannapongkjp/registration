<?php

use Phalcon\Mvc\Controller;

class SignupController extends Controller
{
	//@TODO: controller insert
	public function indexAction()
	{

	}
	
	public function registerAction()
	{
		$user = new Users();
	
		$success = $user->save(
				$this->request->getPost(),
				array('name', 'email','firstname','lastname')
		);
	
		if ($success) {
			$this->response->redirect('/signup/signup_completed/'.$id);
		} else {
			echo "ไม่สามารถลงทะเบียนได้: <br/>";
			foreach ($user->getMessages() as $message) {
				echo $message->getMessage(), "<br/>";
			}
		}
		$this->view->disable();
	}
	
	public function signup_completedAction($id)
	{
		$this->view->message = "ลงทะเบียนใหม่เรียบร้อย";
	}
	
	//@TODO: controller update
	public function editformAction($id){
		$user = Users::findFirst($id);
		$this->view->user = $user;
	}
	public function updateAction()
	{
		$id = $this->request->getPost('id');
		$user = Users::findFirst($id);
		$success = $user->save(
			$this->request->getPost(),
			array('name', 'email','firstname','lastname')
		);
	
		if ($success) {
			$this->response->redirect('/signup/update_completed');
		} else {
			$this->response->redirect('/signup/update_error');
			foreach ($user->getMessages() as $message) {
				echo $message->getMessage(), "<br/>";
			}
		}
		$this->view->disable();
	}
	
	public function update_completedAction()
	{
		$this->view->message = "อัพเดตข้อมูลเรียบร้อย";
	}
	
	//@TODO: controller delete
	public function deleteAction($id){
		$user = Users::findFirst($id);
		if ($user != false) {
			if($user->delete()){
				$this->response->redirect('/signup/delete_completed');
			}else{
				echo "ลบข้อมูลไม่สำเร็จ กรุณาลองใหม่อีกครั้ง...";
			}
		}
		$this->view->disable();
	}
	
	public function delete_completedAction()
	{
		$this->view->message = "ลบข้อมูลเรียบร้อย";
	}

}
