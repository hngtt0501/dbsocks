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
        DB::table('category')->insert(
           [ ['category_name' => 'trẻ em' ] ,
            
                ['category_name' => 'nữ' ] , 
                ['category_name' => 'nam' ] , 
           ]
        );
    }
}
