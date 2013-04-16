<?php
class livre extends Model{

    var $table = 'livres';

    function getLast($num=3){
        return $this->find(array(
            'limit' => $num,
            'order' => 'id DESC'
        ));
    }

}
?>