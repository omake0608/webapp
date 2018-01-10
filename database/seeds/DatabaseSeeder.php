<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::insert("insert into menues (name,price,calorie,text,image,category) value (?,?,?,?,?,?)", [
            "寿司", 1200,10,"おいしい","susi.jpg","和食"
        ]);

        DB::insert("insert into menues (name,price,calorie,text,image,category) value (?,?,?,?,?,?)", [
            "天丼", 1000,20,"うまい","tendon.jpg","和食"
        ]);
        DB::insert("insert into menues (name,price,calorie,text,image,category) value (?,?,?,?,?,?)", [
            "パエリア", 1500,30,"美味","paeri.jpg","洋食"
        ]);

        DB::insert("insert into menues (name,price,calorie,text,image,category) value (?,?,?,?,?,?)", [
            "オムライス", 1300,40,"おいしくない","omu.jpg","洋食"
        ]);

        DB::insert("insert into menues (name,price,calorie,text,image,category) value (?,?,?,?,?,?)", [
            "麻婆豆腐", 1100,50,"まずい","mabo.jpg","中華"
        ]);

        DB::insert("insert into menues (name,price,calorie,text,image,category) value (?,?,?,?,?,?)", [
            "ステーキ", 1800,60,"あああ","suteki.jpg","洋食"
        ]);

    }
}