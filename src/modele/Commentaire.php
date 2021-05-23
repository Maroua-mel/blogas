<?php

namespace blogapp\modele;

class Commentaire extends \Illuminate\Database\Eloquent\Model {
    protected $table = 'commentaire';
    protected $primaryKey = 'ID';
    public $timestamps = false;

   public static function createNewCo(){
   	
   }
}

?>
