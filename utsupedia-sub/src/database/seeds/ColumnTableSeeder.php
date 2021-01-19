<?php

use Illuminate\Database\Seeder;
use App\Column;

class ColumnTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'title' => 'コラム投稿',
            'contents' => '最近あった出来事'
        ];
        $columndata = new Column;
        $columndata->fill($param)->save();
        
        $param = [
            'title' => 'コラム投稿',
            'contents' => 'ああ'
        ];
        $columndata = new Column;
        $columndata->fill($param)->save();
    }
}
