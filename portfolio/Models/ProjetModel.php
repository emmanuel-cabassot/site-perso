<?php
class ProjetModel
{

    public $id;
    public $nom;
    public $description;
    public $techno;
    public $image;
    public $date;
    public $star;
    public $lien_site;
    public $lien_git;
    public $db;

    public function __construct()
    {
        return $this->db = new PDO('mysql:host=localhost;charset=utf8;dbname=portfolio', 'root', '');
    }

    public function categorie($projet_id)
    {
        $query = $this->db->query("SELECT categorie.nom FROM projet_categorie 
        INNER JOIN categorie
        ON projet_categorie.id_categorie = categorie.id
        WHERE id_projet = $projet_id")->fetchAll(PDO::FETCH_OBJ);
        return $query;
    }

    public function all()
    {
        $query = $this->db->query("SELECT * FROM projet")->fetchAll(PDO::FETCH_OBJ);
        return $query;
    }

    public function css()
    {
        $query = $this->db->query("SELECT * FROM projet_categorie
        INNER JOIN projet
        ON projet_categorie.id_projet = projet.id
        WHERE projet_categorie.id_categorie = 1")->fetchAll(PDO::FETCH_OBJ);
        return $query;
    }

    public function php()
    {
        $query = $this->db->query("SELECT * FROM projet_categorie
        INNER JOIN projet
        ON projet_categorie.id_projet = projet.id
        WHERE projet_categorie.id_categorie = 2")->fetchAll(PDO::FETCH_OBJ);
        return $query;
    }

    public function java()
    {
        $query = $this->db->query("SELECT * FROM projet_categorie
        INNER JOIN projet
        ON projet_categorie.id_projet = projet.id
        WHERE projet_categorie.id_categorie = 3")->fetchAll(PDO::FETCH_OBJ);
        return $query;
    }
}