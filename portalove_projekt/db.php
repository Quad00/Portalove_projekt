<?php

namespace portalove;

class DB
{
    private $host;
    private $dbname;
    private $username;
    private $password;

    private $connection;

    public function __construct($host, $dbname, $username, $password)
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $password;

        try {
            $this->connection = new \PDO('mysql:host='.$this->host.';dbname='.$this->dbname, $this->username, $this->password);
        } catch (\PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }



  public function getMenu(){
        $menuItems = [];
        $sql = "SELECT * FROM menu";
        

        $query = $this->connection->query($sql);
        while ($row = $query->fetch()) {
            $menuItems[] = [
                'id' => $row['id'],
                'page' => $row['page'],
                'nazov' => $row['nazov'],
                'subor' => $row['subor']
            ];
        }
        return $menuItems;
        
    }

      public function getKategorie(){
        $kat = [];
        $sql = "SELECT * FROM kategorie";
        

        $query = $this->connection->query($sql);
        while ($row = $query->fetch()) {
            $kat[] = [
                'id' => $row['id'],
                'nazov' => $row['nazov'],
                'kat_obrazok' => $row['kat_obrazok']
            ];
        }
        return $kat;
    }

        public function getObrazky(){
        $obr = [];
        $sql = "SELECT * FROM obrazky";
        
        $query = $this->connection->query($sql);
        while ($row = $query->fetch()) {
            $obr[] = [
                'id' => $row['id'],
                'popis' => $row['popis'],
                'url' => $row['url']
            ];
        }
        return $obr;
        
    }

       public function getKatSpecific($id){
        $katItem = [];
        $sql = "SELECT * FROM kategorie WHERE id = $id";
        

        $query = $this->connection->query($sql);
        while ($row = $query->fetch()) {
            $katItem[] = [
                'id' => $row['id'],
                'nazov' => $row['nazov'],
                'kat_obrazok' => $row['kat_obrazok']
            ];
        }
        return $katItem;
        
    }

     public function getMenuSpecific($id){
        $menuItem = [];
        $sql = "SELECT * FROM menu WHERE id = $id";
        

        $query = $this->connection->query($sql);
        while ($row = $query->fetch()) {
            $menuItem[] = [
                'id' => $row['id'],
                'nazov' => $row['nazov'],
                'page' => $row['page'],
                'subor' => $row['subor']
            ];
        }
        return $menuItem;
    }

    public function getObrazokSpecific($id){
        $obrItem = [];
        $sql = "SELECT * FROM obrazky WHERE id = $id";
        

        $query = $this->connection->query($sql);
        while ($row = $query->fetch()) {
            $obrItem[] = [
                'id' => $row['id'],
                'popis' => $row['popis'],
                'url' => $row['url']
            ];
        }
        return $obrItem;
    }

    public function deleteMenu($id){
        $sql = "DELETE FROM menu WHERE id=$id;";

        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

      public function deleteKategoria($id){
        $sql = "DELETE FROM kategorie WHERE id=$id;";

        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

        public function updateKategorie($id, $nazov, $kat_obrazok)
    {
        $sql = "UPDATE kategorie 
                SET nazov = '".$nazov."', kat_obrazok = '".$kat_obrazok."'
                WHERE id = ".$id;

        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

     public function updateObrazok($id, $popis, $url)
    {
        $sql = "UPDATE obrazky 
                SET popis = '".$popis."', url = '".$url."'
                WHERE id = ".$id;

        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }



     public function updateMenu($id, $nazov, $subor)
    {
        $sql = "UPDATE menu 
                SET nazov = '".$nazov."', subor = '".$subor."'
                WHERE id = ".$id;

        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

       public function addObrazok($popis, $url, $kategorie_id)
    {
        $sql = "INSERT INTO obrazky(popis, url)
                VALUE ('".$popis."', 
                '".$url."')";
        try {
            $this->connection->exec($sql);
            $obrid = $this->connection->lastInsertId();
            $sql2 = "INSERT INTO kategorie_obrazky(kategorie_id, obrazky_id)
                VALUE ('".$kategorie_id."', 
                '".$obrid."')";
                $this->connection->exec($sql2);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
}
    public function addMenu($nazov, $subor)
    {
        $sql = "INSERT INTO menu(nazov, subor)
                VALUE ('".$nazov."', 
                '".$subor."')";

        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

        public function addKategorie($nazov, $kat_obrazok)
    {
        $sql = "INSERT INTO kategorie(nazov, kat_obrazok)
                VALUE ('".$nazov."', 
                '".$kat_obrazok."')";

        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function getcatName($id){
        $sql = "SELECT nazov FROM kategorie WHERE id = $id";
        $query = $this->connection->query($sql);
        $row = $query->fetch();

        return $row[0];
    }

     public function getCategories(){
        $catItems = [];
        $sql = "SELECT * FROM kategorie";
        

        $query = $this->connection->query($sql);
        while ($row = $query->fetch()) {
            $catItems[] = [
                'id' => $row['id'],
                'nazov' => $row['nazov'],
                'kat_obrazok' => $row['kat_obrazok']
            ];
        }
        return $catItems;
    }

    public function getImage($img_id){
            $obrazky = [];
        $sql = "SELECT * FROM obrazky WHERE id = $img_id";
        

        $query = $this->connection->query($sql);
        while ($row = $query->fetch()) {
            $obrazky[] = [
                'popis' => $row['popis'],
                'url' => $row['url'],
                'created_at' => $row['created_at'],
                'updated_at' => $row["updated_at"]
            ];
        }
        return $obrazky;
    }

    public function getImages($id){
            $obrazky = [];
        $sql = "SELECT obrazky.id as idobrazok, kategorie_obrazky.kategorie_id, obrazky.popis as popis, obrazky.url, obrazky.created_at, obrazky.updated_at FROM `obrazky` INNER JOIN kategorie_obrazky ON obrazky.id = kategorie_obrazky.obrazky_id WHERE kategorie_id = $id";
        $query = $this->connection->query($sql);
        while ($row = $query->fetch()) {
            $obrazky[] = [
                'kat_id' => $row['kategorie_id'],
                'popis' => $row['popis'],
                'url' => $row['url'],
                'obrazok_id' => $row["idobrazok"]
            ];
        }
        return $obrazky;
    }

    public function login($meno, $heslo){
        $heslomd5 = md5($heslo);
        $sql = "SELECT COUNT(id) as is_admin, meno ,heslo FROM admin WHERE meno = '".$meno."' AND heslo = '".$heslomd5."'";

        try {
            $query = $this->connection->query($sql);
            $result = $query->fetch(\PDO::FETCH_ASSOC);
            if(intval($result['is_admin']) === 1) {
                return true;
            } else {
                return false;
            }
        } catch (\PDOException $e) {
            return false;
        }
    }




   public function deleteObrazok($id)
    {
        $sql = "DELETE FROM obrazky WHERE id = ".$id;

        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }
}
