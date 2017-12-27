<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //delete users table records
        DB::table('fetus')->delete();
        //insert some dummy records
        DB::table('fetus')->insert(array(
            array('fname' => 'Яблоки', 'quality' => 'хорошее', 'coast' => '10'),
            array('fname' => 'Персики', 'quality' => 'хорошее', 'coast' => '20'),
            array('fname' => 'Сливы', 'quality' => 'хорошее', 'coast' => '15'),
            array('fname' => 'Хурма', 'quality' => 'плохое', 'coast' => '5'),
            array('fname' => 'Черешни', 'quality' => 'хорошее', 'coast' => '15')
        ));
    }

}
