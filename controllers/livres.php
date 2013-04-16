<?php
class livres extends Controller{

    var $models = array('Livre');

    function index(){
        $d['live'] = $this->Livre->getLast();
        $this->set($d);
        $this->render('index');
    }

    function view($id){
        $d['liv'] = $this->Livre->find(array(
            'conditions' => 'id='.$id
        ));
        $d['liv'] = $d['liv'][0];
        $this->set($d);
        $this->render('view'); 
    }

}
?>
