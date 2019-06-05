<?php
namespace Entity;

class User
{
  private $_id;
  private $_pseudo;
  private $_mail;
  private $_mdp;
  private $_nom;
  private $_prenom;
  private $_img;

  function __construct($id, $pseudo, $mail, $mdp, $nom, $prenom, $img)
  {

    $this->_id = $id;
    $this->_pseudo = $pseudo;
    $this->_mail = $mail;
    $this->_mdp = $mdp;
    $this->_nom = $nom;
    $this->_prenom = $prenom;
    $this->_img = $img;
  }

  // Liste des getters

  public function id()
  {
    return $this->_id;
  }

  public function pseudo()
  {
    return $this->_pseudo;
  }

  public function mail()
  {
    return $this->_mail;
  }

  public function mdp()
  {
    return $this->_mdp;
  }

  public function nom()
  {
    return $this->_nom;
  }

  public function prenom()
  {
    return $this->_prenom;
  }

  public function img()
  {
    return $this->_img;
  }

  // Liste des setters

  public function setId(int $id)
  {
    $this->_id = $id;
  }

  public function setPseudo(String $pseudo)
  {
    $this->_pseudo = $pseudo;
  }

  public function setMail(String $mail)
  {
    $this->_mail = $mail;
  }

  public function setMdp(String $mdp)
  {
    $this->_mdp = $mdp;
  }

  public function setNom(String $nom)
  {
    $this->_nom = $nom;
  }

  public function setPrenom(String $prenom)
  {
    $this->_prenom = $prenom;
  }

  public function setImg(String $img)
  {
    $this->_img = $img;
  }
}
