<?php

namespace App\Models;

use CodeIgniter\Model;

class CDRModel extends Model
{
    protected $table      = 'form';
    protected $allowedFields = ['container', 'size', 'type', 'status', 'activity', 'vessel', 'voyage', 'ref', 'ship', 'date', 'time', 'code', 'dcode', 'remarks', 'slug', 'nama'];


    public function getCDR($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function search($keyword)
    {
        $builder = $this->table('form');
        $builder->like('container', $keyword);

        return $builder;
    }
}
