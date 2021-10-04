<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            [
                'title' => '北海道の最高な町',
                'prefecture' => '北海道',
                'category' => '自然',
                'body' => 'あああああああああああああああああああああああああああああああ',
            ],
            [
                'title' => '秋田のいいところ10選',
                'prefecture' => '秋田県',
                'category' => 'ナイトライフ',
                'body' => 'あああああああああああああああああああああああああああああああ',
            ],
            [
                'title' => '広島',
                'prefecture' => '広島',
                'category' => '有名スポット',
                'body' => 'あああああああああああああああああああああああああああああああ',
            ]
        ];
        DB::table('articles')->insert($param);
    }
}
