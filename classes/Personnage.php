<?php

// Ma classe s'apelle personnage
class Personnage {

    // La propriété id est privée, je ne peux pas la modifier ou la lire directement en dehors de cette classe
    private Int $id;
    private String $nom;
    public Int $x;
    public Int $y;

    // Constructeur de ma classe permettant de définir des valeurs par défaut lorsqu'elle est instanciée
    public function __construct() {
        $this->nom = "Nom par défaut";
        $this->x = 0;
        $this->y = 0;
    }

    // Méthode permettant de déplacer le personnage vers la droite
    public function walkRight() {
        $this->x += 1;

    }

    public function walkLeft() {
        $this->x += -1;

    }

    public function walktop() {
        $this->y += 1;

    }

    public function walkbottom() {
        $this->y += -1;

    }

    // Setter permettant de définir l'attribut privé id
    public function setId($id) {
        $this->id = $id;
    }

    // Getter permettant de retourner l'attribut privé id
    public function getId() {
        return $this->id;
    }

    /**
     * Return the name of the personnage
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Set the name of the personnage
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }


} 