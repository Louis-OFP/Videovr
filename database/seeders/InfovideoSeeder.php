<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InfovideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('infosvideos')->insert([
            'user_name' => 'Karism-bgito-25',
            'description' => 'je veux pas en mettre laisez moi trkl',
            'date' => '2023/09/10',
            'new_name' => 'rien-3',
            'name' => '2565622_1225.mp4',
            'weight' => 101,
            'url' => 'www.salutc/est/pasfredo.com',
        ]);
        DB::table('infosvideos')->insert([
            'user_name' => 'Karism-bgito-25',
            'description' => 'je veux pas en mettre laisez moi trkl',
            'date' => '2023/09/10',
            'new_name' => 'rien-2',
            'name' => '2568922_1225.mp4',
            'weight' => 100,
            'url' => 'www.salutc/est/fredo.com',
        ]);
        DB::table('infosvideos')->insert([
            'user_name' => 'Karism-bgito-25',
            'description' => 'je veux pas en mettre laisez moi trkl',
            'date' => '2023/09/10',
            'new_name' => 'rien-1',
            'name' => '2564422_1225.mp4',
            'weight' => 107,
            'url' => 'www.salutc/est/patoche.com',
        ]);
    }
}
// 'files_id')->constrained('infos_videos');
//             $table->string('name');
//             $table->date('date');
//             $table->string('description')