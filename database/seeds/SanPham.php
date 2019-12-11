<?php

use Illuminate\Database\Seeder;

class SanPham extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        $json = File::get("database/detai_socks.json");
        $data = json_decode($json);
        $arr=[];
        foreach ($data as $obj) {
          array_push($arr, array(
            'ten' => $obj->name,
            'gia' => $obj->price,
           
            'hinhanh' => $obj->src,
            'mota' => $obj->desctiption,
            'idtl' => $obj->category_id
          ));
          DB::table("SanPham")->insert($arr);
        }
    }
}
?>
 <!-- oreach ($data as $obj) {
          DB::table('SanPham')::create(array(
            'id' => $obj->id,
            'name' => $obj->name,
            'price' => $obj->price,
            'category_name' => $obj->category,
            'image' => $obj->image,
            'desctiption' => $obj->desctiption,
            'category_id' => $obj->category_id
          ));
        } -->