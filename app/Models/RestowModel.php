<?php

namespace App\Models;

use CodeIgniter\Model;

class RestowModel extends Model
{
    protected $table      = 'restow';
    protected $allowedFields = ['container', 'size', 'type', 'status', 'activity', 'vessel', 'voyage', 'ref', 'ship', 'date', 'time', 'lbsb', 'lbsr', 'lbst', 'lasb', 'lasr', 'last', 'remarks', 'slug', 'nama'];


    public function getRestow($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function search($keyword)
    {
        $builder = $this->table('restow');
        $builder->like('container', $keyword);

        return $builder;
    }
}
