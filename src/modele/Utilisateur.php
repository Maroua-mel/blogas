<?php

namespace blogapp\modele;

class Utilisateur extends \Illuminate\Database\Eloquent\Model {
    protected $table = 'utilisateur';
    protected $primaryKey = 'ID';
    public $timestamps = false;

    public static function creerNouveauUtilisateur($newUser){
    	$user = new Utilisateur();
    	$user->pseudo = $newUser['pseudo'];
    	$user->nom = $newUser['nom'];
    	$user->prenom = $newUser['prenom'];
    	$user->mail = $newUser['mail'];
    	$user->mot_de_passe = $newUser['mot_de_passe'];
    	$user->save();
    }

    public static searchUser($pseudo){
    	return Utilisateur::where('pseudo', '=', $pseudo)->first();
    
    }
}

?>
