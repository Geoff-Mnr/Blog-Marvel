<?php

namespace App\Models;

use DateTime;

class Post extends Model
{
    protected $table = 'mb_articles';


    /*retourne la date*/
    public function getCreatedAt(): string
    {
        return (new DateTime($this->a_date_creation))->format('d-m-y à H:i');
    }

    /*retourne les derniers posts de news en fonction de la limite définie dans la requête*/
    public function getLatestPosts()
    {
        return $this->query(
            "
        SELECT a. * FROM mb_articles a
        ORDER BY a_date_creation
        DESC LIMIT 3"
        );
    }



    /*permet de récupérer les tags associés à un article*/

    public function getTags()
    {
        return $this->query("
        SELECT t.* FROM mb_tags t
        INNER JOIN mb_articles_tags pt ON pt.mb_tags_t_id = t.t_id
        WHERE pt.mb_articles_a_id =?
        ", [$this->a_id]);
    }

   

 /**
     * Permet de mettre à jour les tags associés à un article.
     * 
     * @param int $id
     * L'id de l'article sujet à la modification
     * 
     * @param array $data
     * Le tableau envoyé depuis le formulaire
     * 
     * @param string $f_prefix
     * Le préfix du champ avant _id 
     * 
     * @param array $relations
     * Le tableau contenant les ids des tags associés
     */
    public function update(int $id, array $data, string $f_prefix, ?array $relations = null)
    {
        parent::update($id, $data, $f_prefix);

        $stmt = $this->db->getPDO()->prepare("DELETE FROM mb_articles_tags WHERE mb_articles_a_id = ?");
        $result = $stmt->execute([$id]);

        foreach ($relations as $tagId) {
            $stmt = $this->db->getPDO()->prepare("INSERT mb_articles_tags (mb_articles_a_id, mb_tags_t_id) VALUES (?, ?)");
            $stmt->execute([$id, $tagId]);
        }

        if ($result) {
            return true;
        }
    }
}
