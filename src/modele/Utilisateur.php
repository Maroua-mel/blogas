<?php

namespace blogapp\modele;

class Utilisateur extends \Illuminate\Database\Eloquent\Model {
    protected $table = 'utilisateur';
    protected $primaryKey = 'ID';
    public $timestamps = false;

    
}

?>
