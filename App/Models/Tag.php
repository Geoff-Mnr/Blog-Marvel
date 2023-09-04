<?php

namespace App\Models;

class Tag extends Model
{
    protected $table = "mb_tags";

    public function getPosts()
    {
        return $this->query(
            "
            SELECT p.* FROM mb_articles p
            INNER JOIN mb_articles_tags pt ON pt.mb_articles_a_id = p.a_id
            WHERE pt.mb_tags_t_id = ?
            ",
            [$this->t_id]
        );
    }
}
