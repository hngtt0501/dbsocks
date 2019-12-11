<?php

use Illuminate\Database\Seeder;

class TheLoai extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('theloai')->insert(
           [ ['ten' => 'trẻ em' ] ,
            
                ['ten' => 'nữ' ] , 
                ['ten' => 'nam' ] , 
           ]
        );
    }
}
