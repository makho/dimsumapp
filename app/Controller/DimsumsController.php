<?php 
class DimsumsController extends AppController{
public function index(){
$dimsum=$this->Dimsum->find('all');
$this->set('dimsums',$dimsum);
}

public function add(){
if ($this->request->is('post')){
   if ($this->Dimsum->save($this->request->data)){
$this->Session->setFlash('New dimsum is added.');
$this->redirect('/dimsumes');}
}
}
}
?>