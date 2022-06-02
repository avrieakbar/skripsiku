<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Heq extends Migration
{
    public function up()
    {
        //heq//
        $this->forge->addField([
            'id'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'container'        => ['type' => 'varchar', 'constraint' => 255],
            'size'             => ['type' => 'varchar', 'constraint' => 30],
            'type'             => ['type' => 'varchar', 'constraint' => 30],
            'status'           => ['type' => 'varchar', 'constraint' => 30],
            'activity'         => ['type' => 'varchar', 'constraint' => 255],
            'vessel'           => ['type' => 'varchar', 'constraint' => 255],
            'voyage'           => ['type' => 'varchar', 'constraint' => 255],
            'ref'              => ['type' => 'varchar', 'constraint' => 255],
            'ship'             => ['type' => 'varchar', 'constraint' => 30],
            'date'             => ['type' => 'date'],
            'time'             => ['type' => 'time'],
            'foto'             => ['type' => 'varchar', 'constraint' => 1000],
            'remarks'          => ['type' => 'varchar', 'constraint' => 1000],
            'slug'             => ['type' => 'varchar', 'constraint' => 225],
            'nama'             => ['type' => 'varchar', 'constraint' => 225],
            'signed'           => ['type' => 'varchar', 'constraint' => 1000],
            'namaKapal'        => ['type' => 'varchar', 'constraint' => 225],
            'signedKapal'      => ['type' => 'varchar', 'constraint' => 1000],
        ]);

        $this->forge->addKey('id', true);

        $this->forge->createTable('heq', true);


        //restow//
        $this->forge->addField([
            'id'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'container'        => ['type' => 'varchar', 'constraint' => 255],
            'size'             => ['type' => 'varchar', 'constraint' => 30],
            'type'             => ['type' => 'varchar', 'constraint' => 30],
            'status'           => ['type' => 'varchar', 'constraint' => 30],
            'activity'         => ['type' => 'varchar', 'constraint' => 255],
            'vessel'           => ['type' => 'varchar', 'constraint' => 255],
            'voyage'           => ['type' => 'varchar', 'constraint' => 255],
            'ref'              => ['type' => 'varchar', 'constraint' => 255],
            'ship'             => ['type' => 'varchar', 'constraint' => 30],
            'date'             => ['type' => 'date'],
            'time'             => ['type' => 'time'],
            'foto'             => ['type' => 'varchar', 'constraint' => 1000],
            'lbsb'             => ['type' => 'varchar', 'constraint' => 30],
            'lbsr'             => ['type' => 'varchar', 'constraint' => 30],
            'lbst'             => ['type' => 'varchar', 'constraint' => 30],
            'lasb'             => ['type' => 'varchar', 'constraint' => 30],
            'lasr'             => ['type' => 'varchar', 'constraint' => 30],
            'last'             => ['type' => 'varchar', 'constraint' => 30],
            'remarks'          => ['type' => 'varchar', 'constraint' => 1000],
            'slug'             => ['type' => 'varchar', 'constraint' => 225],
            'nama'             => ['type' => 'varchar', 'constraint' => 225],
            'signed'           => ['type' => 'varchar', 'constraint' => 1000],
            'namaKapal'        => ['type' => 'varchar', 'constraint' => 225],
            'signedKapal'      => ['type' => 'varchar', 'constraint' => 1000],
        ]);

        $this->forge->addKey('id', true);

        $this->forge->createTable('restow', true);
    }

    public function down()
    {
        //
        $this->forge->dropTable('heq');
        $this->forge->dropTable('restow');
    }
}
