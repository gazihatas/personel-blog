<?php

namespace Database\Seeders;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories=['Genel','Laravel','Teknoloji','Ubuntu','Ruby On Rails','Php'];
        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name'=>$category,
                'slug'=>STR::slug($category),
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }
    }
}
