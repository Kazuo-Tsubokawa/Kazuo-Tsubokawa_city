<?php

namespace Database\Seeders;

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
        if (!DB::table('categories')->first()) {
            DB::table('categories')->insert([
                ['name' => 'カジノ・賭博'],
                ['name' => 'ボートツアー・ウォータースポーツ'],
                ['name' => '体験教室・ワークショップ'],
                ['name' => 'イベント'],
                ['name' => '飲食'],
                ['name' => '屋外アクティビティ'],
                ['name' => 'ショッピング'],
                ['name' => 'お好み焼き・粉物'],
                ['name' => '有名スポット'],
                ['name' => 'スパ'],
                ['name' => '健康ランド'],
                ['name' => 'ぶらり旅'],
                ['name' => '家族旅行'],
                ['name' => '温泉旅行'],
                ['name' => '男旅'],
                ['name' => '女子旅'],
                ['name' => '動物園'],
                ['name' => '水族館'],
                ['name' => 'カフェ・スイーツ'],
                ['name' => 'カラオケ・エンターテイメント'],
                ['name' => '自然・公園'],
                ['name' => '夜の店'],
                ['name' => '風俗']
            ]);
        }
    }
}
