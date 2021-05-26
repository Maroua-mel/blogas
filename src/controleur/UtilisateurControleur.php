<?php

namespace blogapp\controleur;

use blogapp\vue\UtilisateurVue;
use blogapp\modele\Utilisateur;

class UtilisateurControleur {
    private $cont;
    
    public function __construct($conteneur) {
        $this->cont = $conteneur;
    }

    public function creerNouveauUtilisateur($rq, $rs, $args) {
        $bl = new UtilisateurVue($this->cont, null, UtilisateurVue::NOUVEAU_VUE);
        $rs->getBody()->write($bl->render());
        return $rs;
    }

    public function connexionUtilisateur($rq, $rs, $args) {
       $bl = new UtilisateurVue($this->cont, null, UtilisateurVue::NOUVEAU_VUE);
       $rs->getBody()->write($bl->render());
       return $rs;
    }

    public function connexion($rq, $rs, $args){
        $pseudo = filter_var($rq->getParsedBodyParam('pseudo'), FILTER_SANITIZE_STRING);
        $mot_de_passe = filter_var($rq->getParsedBodyParam('mot de passe'), FILTER_SANITIZE_STRING);

        if (Utilisateur::) {
            # Verifie le mot de passe
        }
        Utilisateur::create($utilisateur);

    $this->cont->flash->addMessage('message :', 'Nouveau utilisateur ajouté!');
    return $rs->withRedirect($this->cont->cont->router->pathFor('index'));
    }
    

}
