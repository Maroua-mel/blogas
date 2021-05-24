<?php

namespace blogapp\modele;

class Commentaire extends \Illuminate\Database\Eloquent\Model {
    protected $table = 'commentaire';
    protected $primaryKey = 'ID';
    public $timestamps = false;

   public static function createNewCo($newCom){
   	$commentaire = new Commentaire();
   	$commentaire->titre = $newCom['titre'];
   	$commentaire->texte = $newCom['texte'];
   	$commentaire->id_utilisateur = $newCom['id_utilisateur'];
   	$commentaire->save();
}

?>
