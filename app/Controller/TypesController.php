<?php 
class TypesController extends AppController{
public function index(){
$type=$this->Type->find('all');
$this->set('types',$type);
}

public function add(){
if ($this->request->is('post')){
   if ($this->Type->save($this->request->data)){
$this->Session-setFlash('New type isadded.');
$this->redirect('/types/');}
}
}
}
?>