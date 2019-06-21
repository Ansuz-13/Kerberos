<?php
namespace Core;


Class Bdd {

    /** @var \PDO $this->_pdo  */
    private $_pdo = null;

    // Variables de connexion
    private $_host = null;
    private $_base = null;
    private $_user = null;
    private $_pass = null;

    // Variable de controle
    private $_connected = false;


    /**
     * Connexion
     */
    public function connexion() {
        try {

            // Connexion à la bdd
            $this->_pdo = new \PDO('mysql:dbname=' .$this->_base. ';host=' .$this->_host, $this->_user, $this->_pass);
            $this->_pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            // Force UTF-8
            $this->_pdo->exec("SET CHARACTER SET utf8");
            $this->_pdo->exec("SET NAMES utf8");

            $this->_connected = true;

            return true;
        }
        catch (\PDOException $err) {
            return false;
        }
    }


    public function exec($callback) {

        // Si pas connecté
        if (!$this->_connected && !$this->connexion())
            return false;

        try {
           return $callback();
        }
        catch (\PDOException $err) {
            return false;
        }
    }


}