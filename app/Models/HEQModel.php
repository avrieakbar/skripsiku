<?php

namespace App\Models;

use CodeIgniter\Model;

class HEQModel extends Model
{
    protected $table      = 'heq';
    protected $allowedFields = ['container', 'size', 'type', 'status', 'activity', 'vessel', 'voyage', 'ref', 'ship', 'date', 'time', 'remarks', 'slug', 'nama'];


    public function getHEQ($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function search($keyword)
    {
        $builder = $this->table('heq');
        $builder->like('container', $keyword);

        return $builder;
    }

    public function pattern($pattern)
    {
        $builder = $this->table('heq');
        $builder->like('date', $pattern);

        return $builder;
    }
}
