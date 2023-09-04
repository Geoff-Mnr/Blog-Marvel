<?php

namespace App\Models;

use Database\DBconnection;
use \AllowDynamicProperties;
use PDO;

/*Cette classe ne sera jms instanciée*/

#[AllowDynamicProperties]
abstract class Model
{
    protected $table;

    public function __construct(
        protected DBconnection $db,
    ) {
    }

     /**
     * Retourne l'ensemble des éléments.
     *
     * @return array
     */
    public function all(string $prefix, $filter = true): array
    {
        return $filter ? $this->query("SELECT * FROM {$this->table} ORDER BY {$prefix}date_creation DESC") :
            $this->query("SELECT * FROM {$this->table}");
    }



    /*Se retourne elle même ou 404*/
    public function findById(int $id, string $f_prefix): self|false
    {
        return $this->query("SELECT * FROM {$this->table} WHERE {$f_prefix}id = ?", [$id], true);
    }

        /* Permet de mettre à jour un Element dont l'id
    * est passé en paramètre.
    * 
    * @param int $id
    * L'id de l'élément à modifier
    * 
    * @param array $data
    * Le tableau $_POST contenant
    * les données envoyées
    * 
    * @param string $f_prefix
    * Le préfix du champ avant _id 
    * 
    */
   public function update(int $id, array $data, string $f_prefix, ?array $relations =null)
   {
       $sqlRequestPart = "";
       $i = 1;
       foreach ($data as $key => $value) {
           $comma = $i === count($data) ? " " : ", ";
           $sqlRequestPart .= "{$f_prefix}{$key} = :{$key}{$comma}";
           $i++;
       }

       $data['id'] = $id;

       return $this->query("UPDATE {$this->table} SET {$sqlRequestPart} WHERE {$f_prefix}id = :id", $data);
   }

    /*permet de supprimer un élément dont l'id est passé en paramètre*/
    public function destroy(int $id, string $f_prefix): bool
    {
        return $this->query("DELETE FROM {$this->table} WHERE {$f_prefix}id = ?", [$id]);
    }

    /*retourne 100 caractères*/
    public function getExcerpt($limit = 30): string
    {
        return substr($this->a_contenu, 0, $limit) . '...';
    }


    public function query(string $sql, array $param = null, bool $single = null)
    {
        $method = is_null($param) ? 'query' : 'prepare';

        if (
            strpos($sql, 'DELETE') === 0
            || strpos($sql, 'UPDATE') === 0
            || strpos($sql, 'INSERT') === 0
        ) {
            $stmt = $this->db->getPDO()->$method($sql);
            $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->db]);
            return $stmt->execute($param);
        }

        $fetch = is_null($single) ? 'fetchAll' : 'fetch';

        $stmt = $this->db->getPDO()->$method($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->db]);

        if ($method == 'query') {
            return $stmt->$fetch();
        } else {
            $stmt->execute($param);
            return $stmt->$fetch();
        }
    }
}
