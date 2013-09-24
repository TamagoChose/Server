<?php

/*
 * MISE EN PLACE DU WEBSERVICE DE GESTION DES UTILISATEURS 
 * 
 * Description : 
 * Ce webservice a pour but de pouvoir gerer en parfaite autonomie toutes les
 * action liée au utilisateur de(ou des) application mis en relation avec notre
 * base de donnée. Ce service aura pour objectif de s'occuper aussi bien de 
 * l'inscription que de l'autentification ou même la suppression des comptes.
 * 
 * Methode : 
 * - getProfile => Affiche les informations d'un compte utilisateur 
 * - addUser => Crée un nouvelle utilisateur
 * - userLogin => Connexion utilisateur
 * - passwordForget => Mots de passe oublier
 * - updateUser => Mise a jourdes information utilisateur 
 * - deleteUser => Suppression d'un compte utilisateur
 */

namespace User\Controller;

use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;

class UserController extends AbstractRestfulController {

    /**
     * function getProfile : 
     * 
     * @param int $id -> Id unique de l'utilisateur present en base
     * @param string(32) $key -> Clée de validation qui déterminie l'autorisation de consulter le profile de cette utilisateur
     * @return json $user -> Retourne l'ensemble des informations collecter sur l'utilisateur
     */
    public function getProfile($id,$key) {
        
    }

    public function addUser($id) { 
        
    }

    public function deleteUser($id) {
        
    }

    public function userLogin($id) {
        
    }

    public function passwordForget($id) {
        
    }

    public function updateUser($id) {
        
    }

}