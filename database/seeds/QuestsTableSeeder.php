<?php

use Illuminate\Database\Seeder;

class QuestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quests')->insert([
            [
                'quest_id' => '1',
                'user_id' => 'questmaker',
                'genre_id' => '1',
                'quest_title' => 'イラストのお仕事',
                'quest_explanation' => '難しくはないと思うのですが。気軽に応募してください。',
                'submit_type' => '応相談',
                'quest_level' => '1',
                'quest_lank' => '1',
                'quest_applied' => '2020-2-25',
                'quest_period' => '2020-3-25',
                'quest_reward' => '5000',
                'quest_people' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ],
            [
                'quest_id' => '2',
                'user_id' => 'questmaker',
                'genre_id' => '5',
                'quest_title' => '歌詞作りのお仕事',
                'quest_explanation' => '難しくはないと思うのですが。気軽に応募してください。',
                'submit_type' => '応相談',
                'quest_level' => '2',
                'quest_lank' => '2',
                'quest_applied' => '2020-2-10',
                'quest_period' => '2020-2-24',
                'quest_reward' => '10000',
                'quest_people' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ],
            [
                'quest_id' => '3',
                'user_id' => 'tester',
                'genre_id' => '2',
                'quest_title' => '背景画のお仕事',
                'quest_explanation' => 'タイトル通りのお仕事の依頼です。内容に関しましては相談時にお話しいたします。',
                'submit_type' => 'zipにしてメールで納品',
                'quest_level' => '1',
                'quest_lank' => '1',
                'quest_applied' => '2020-3-10',
                'quest_period' => '2020-3-24',
                'quest_reward' => '5000',
                'quest_people' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ],
            [
                'quest_id' => '4',
                'user_id' => 'tester',
                'genre_id' => '1',
                'quest_title' => 'イラストのお仕事',
                'quest_explanation' => 'タイトル通りのお仕事の依頼です。内容に関しましては相談時にお話しいたします。',
                'submit_type' => 'zipにしてメールで納品',
                'quest_level' => '2',
                'quest_lank' => '2',
                'quest_applied' => '2020-3-9',
                'quest_period' => '2020-3-23',
                'quest_reward' => '10000',
                'quest_people' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ],
            [
                'quest_id' => '5',
                'user_id' => 'questmaker',
                'genre_id' => '2',
                'quest_title' => '背景画のお仕事',
                'quest_explanation' => '難しくはないと思うのですが。気軽に応募してください。',
                'submit_type' => '応相談',
                'quest_level' => '4',
                'quest_lank' => '4',
                'quest_applied' => '2020-3-19',
                'quest_period' => '2020-4-19',
                'quest_reward' => '100000',
                'quest_people' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ],
            [
                'quest_id' => '6',
                'user_id' => 'hikaru',
                'genre_id' => '4',
                'quest_title' => '動画作成のお仕事',
                'quest_explanation' => '仕事の内容はタイトル通りです。内容は連絡時に話します。',
                'submit_type' => 'お好きにどうぞ',
                'quest_level' => '1',
                'quest_lank' => '1',
                'quest_applied' => '2020-2-7',
                'quest_period' => '2020-2-21',
                'quest_reward' => '5000',
                'quest_people' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ],
            [
                'quest_id' => '7',
                'user_id' => 'questmaker',
                'genre_id' => '4',
                'quest_title' => '動画作成のお仕事',
                'quest_explanation' => '難しくはないと思うのですが。気軽に応募してください。',
                'submit_type' => '応相談',
                'quest_level' => '3',
                'quest_lank' => '3',
                'quest_applied' => '2020-3-1',
                'quest_period' => '2020-3-15',
                'quest_reward' => '30000',
                'quest_people' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ],
            [
                'quest_id' => '8',
                'user_id' => 'tester',
                'genre_id' => '5',
                'quest_title' => '歌詞作りのお仕事',
                'quest_explanation' => 'タイトル通りのお仕事の依頼です。内容に関しましては相談時にお話しいたします。',
                'submit_type' => 'zipにしてメールで納品',
                'quest_level' => '4',
                'quest_lank' => '4',
                'quest_applied' => '2020-2-7',
                'quest_period' => '2020-2-21',
                'quest_reward' => '100000',
                'quest_people' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ],
            [
                'quest_id' => '9',
                'user_id' => 'hikaru',
                'genre_id' => '5',
                'quest_title' => '歌詞作りのお仕事',
                'quest_explanation' => '仕事の内容はタイトル通りです。内容は連絡時に話します。',
                'submit_type' => 'お好きにどうぞ',
                'quest_level' => '2',
                'quest_lank' => '2',
                'quest_applied' => '2020-2-21',
                'quest_period' => '2020-3-21',
                'quest_reward' => '10000',
                'quest_people' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ],
            [
                'quest_id' => '10',
                'user_id' => 'laravel',
                'genre_id' => '7',
                'quest_title' => 'web広告作成のお仕事',
                'quest_explanation' => '強者求む！一人じゃ無理！',
                'submit_type' => '特に規定なし',
                'quest_level' => '1',
                'quest_lank' => '1',
                'quest_applied' => '2020-2-8',
                'quest_period' => '2020-2-22',
                'quest_reward' => '5000',
                'quest_people' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ],
            [
                'quest_id' => '11',
                'user_id' => 'hikaru',
                'genre_id' => '1',
                'quest_title' => 'イラストのお仕事',
                'quest_explanation' => '仕事の内容はタイトル通りです。内容は連絡時に話します。',
                'submit_type' => 'お好きにどうぞ',
                'quest_level' => '2',
                'quest_lank' => '2',
                'quest_applied' => '2020-2-20',
                'quest_period' => '2020-3-20',
                'quest_reward' => '10000',
                'quest_people' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ],
            [
                'quest_id' => '12',
                'user_id' => 'hikaru',
                'genre_id' => '1',
                'quest_title' => 'イラストのお仕事',
                'quest_explanation' => '仕事の内容はタイトル通りです。内容は連絡時に話します。',
                'submit_type' => 'お好きにどうぞ',
                'quest_level' => '1',
                'quest_lank' => '1',
                'quest_applied' => '2020-3-13',
                'quest_period' => '2020-3-27',
                'quest_reward' => '5000',
                'quest_people' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ],
            [
                'quest_id' => '13',
                'user_id' => 'hikaru',
                'genre_id' => '1',
                'quest_title' => 'イラストのお仕事',
                'quest_explanation' => '仕事の内容はタイトル通りです。内容は連絡時に話します。',
                'submit_type' => 'お好きにどうぞ',
                'quest_level' => '2',
                'quest_lank' => '2',
                'quest_applied' => '2020-3-28',
                'quest_period' => '2020-4-28',
                'quest_reward' => '10000',
                'quest_people' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ],
            [
                'quest_id' => '14',
                'user_id' => 'laravel',
                'genre_id' => '5',
                'quest_title' => '歌詞作りのお仕事',
                'quest_explanation' => '強者求む！一人じゃ無理！',
                'submit_type' => '特に規定なし',
                'quest_level' => '1',
                'quest_lank' => '1',
                'quest_applied' => '2020-2-24',
                'quest_period' => '2020-3-24',
                'quest_reward' => '5000',
                'quest_people' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ],
            [
                'quest_id' => '15',
                'user_id' => 'hikaru',
                'genre_id' => '4',
                'quest_title' => '動画作成のお仕事',
                'quest_explanation' => '仕事の内容はタイトル通りです。内容は連絡時に話します。',
                'submit_type' => 'お好きにどうぞ',
                'quest_level' => '1',
                'quest_lank' => '1',
                'quest_applied' => '2020-2-11',
                'quest_period' => '2020-2-25',
                'quest_reward' => '5000',
                'quest_people' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ],
            [
                'quest_id' => '16',
                'user_id' => 'laravel',
                'genre_id' => '8',
                'quest_title' => 'ゲームメイキングのお仕事',
                'quest_explanation' => '強者求む！一人じゃ無理！',
                'submit_type' => '特に規定なし',
                'quest_level' => '1',
                'quest_lank' => '1',
                'quest_applied' => '2020-2-25',
                'quest_period' => '2020-3-25',
                'quest_reward' => '5000',
                'quest_people' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ],
            [
                'quest_id' => '17',
                'user_id' => 'laravel',
                'genre_id' => '5',
                'quest_title' => '歌詞作りのお仕事',
                'quest_explanation' => '強者求む！一人じゃ無理！',
                'submit_type' => '特に規定なし',
                'quest_level' => '3',
                'quest_lank' => '3',
                'quest_applied' => '2020-2-17',
                'quest_period' => '2020-3-17',
                'quest_reward' => '30000',
                'quest_people' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ],
            [
                'quest_id' => '18',
                'user_id' => 'tester',
                'genre_id' => '3',
                'quest_title' => 'BGM作成のお仕事',
                'quest_explanation' => 'タイトル通りのお仕事の依頼です。内容に関しましては相談時にお話しいたします。',
                'submit_type' => 'zipにしてメールで納品',
                'quest_level' => '2',
                'quest_lank' => '2',
                'quest_applied' => '2020-3-5',
                'quest_period' => '2020-3-19',
                'quest_reward' => '10000',
                'quest_people' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ],
            [
                'quest_id' => '19',
                'user_id' => 'laravel',
                'genre_id' => '6',
                'quest_title' => 'webサイト作成のお仕事',
                'quest_explanation' => '強者求む！一人じゃ無理！',
                'submit_type' => '特に規定なし',
                'quest_level' => '1',
                'quest_lank' => '1',
                'quest_applied' => '2020-3-17',
                'quest_period' => '2020-4-17',
                'quest_reward' => '5000',
                'quest_people' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ],
            [
                'quest_id' => '20',
                'user_id' => 'questmaker',
                'genre_id' => '8',
                'quest_title' => 'ゲームメイキングのお仕事',
                'quest_explanation' => '難しくはないと思うのですが。気軽に応募してください。',
                'submit_type' => '応相談',
                'quest_level' => '1',
                'quest_lank' => '1',
                'quest_applied' => '2020-3-13',
                'quest_period' => '2020-3-27',
                'quest_reward' => '5000',
                'quest_people' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ],
            [
                'quest_id' => '21',
                'user_id' => 'questmaker',
                'genre_id' => '4',
                'quest_title' => '動画作成のお仕事',
                'quest_explanation' => '難しくはないと思うのですが。気軽に応募してください。',
                'submit_type' => '応相談',
                'quest_level' => '1',
                'quest_lank' => '1',
                'quest_applied' => '2020-2-21',
                'quest_period' => '2020-3-21',
                'quest_reward' => '5000',
                'quest_people' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ],
            [
                'quest_id' => '22',
                'user_id' => 'hikaru',
                'genre_id' => '7',
                'quest_title' => 'web広告作成のお仕事',
                'quest_explanation' => '仕事の内容はタイトル通りです。内容は連絡時に話します。',
                'submit_type' => 'お好きにどうぞ',
                'quest_level' => '2',
                'quest_lank' => '2',
                'quest_applied' => '2020-2-19',
                'quest_period' => '2020-3-19',
                'quest_reward' => '10000',
                'quest_people' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ],
            [
                'quest_id' => '23',
                'user_id' => 'laravel',
                'genre_id' => '1',
                'quest_title' => 'イラストのお仕事',
                'quest_explanation' => '強者求む！一人じゃ無理！',
                'submit_type' => '特に規定なし',
                'quest_level' => '1',
                'quest_lank' => '1',
                'quest_applied' => '2020-2-19',
                'quest_period' => '2020-3-19',
                'quest_reward' => '5000',
                'quest_people' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ],
            [
                'quest_id' => '24',
                'user_id' => 'laravel',
                'genre_id' => '7',
                'quest_title' => 'web広告作成のお仕事',
                'quest_explanation' => '強者求む！一人じゃ無理！',
                'submit_type' => '特に規定なし',
                'quest_level' => '2',
                'quest_lank' => '2',
                'quest_applied' => '2020-3-14',
                'quest_period' => '2020-3-28',
                'quest_reward' => '10000',
                'quest_people' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ],
            [
                'quest_id' => '25',
                'user_id' => 'laravel',
                'genre_id' => '6',
                'quest_title' => 'webサイト作成のお仕事',
                'quest_explanation' => '強者求む！一人じゃ無理！',
                'submit_type' => '特に規定なし',
                'quest_level' => '3',
                'quest_lank' => '3',
                'quest_applied' => '2020-3-22',
                'quest_period' => '2020-4-22',
                'quest_reward' => '30000',
                'quest_people' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ],
            [
                'quest_id' => '26',
                'user_id' => 'tester',
                'genre_id' => '6',
                'quest_title' => 'webサイト作成のお仕事',
                'quest_explanation' => 'タイトル通りのお仕事の依頼です。内容に関しましては相談時にお話しいたします。',
                'submit_type' => 'zipにしてメールで納品',
                'quest_level' => '4',
                'quest_lank' => '4',
                'quest_applied' => '2020-2-8',
                'quest_period' => '2020-2-22',
                'quest_reward' => '100000',
                'quest_people' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ],
            [
                'quest_id' => '27',
                'user_id' => 'hikaru',
                'genre_id' => '6',
                'quest_title' => 'webサイト作成のお仕事',
                'quest_explanation' => '仕事の内容はタイトル通りです。内容は連絡時に話します。',
                'submit_type' => 'お好きにどうぞ',
                'quest_level' => '1',
                'quest_lank' => '1',
                'quest_applied' => '2020-2-20',
                'quest_period' => '2020-3-20',
                'quest_reward' => '5000',
                'quest_people' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ],
            [
                'quest_id' => '28',
                'user_id' => 'hikaru',
                'genre_id' => '2',
                'quest_title' => '背景画のお仕事',
                'quest_explanation' => '仕事の内容はタイトル通りです。内容は連絡時に話します。',
                'submit_type' => 'お好きにどうぞ',
                'quest_level' => '4',
                'quest_lank' => '4',
                'quest_applied' => '2020-2-14',
                'quest_period' => '2020-2-28',
                'quest_reward' => '100000',
                'quest_people' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ],
            [
                'quest_id' => '29',
                'user_id' => 'tester',
                'genre_id' => '6',
                'quest_title' => 'webサイト作成のお仕事',
                'quest_explanation' => 'タイトル通りのお仕事の依頼です。内容に関しましては相談時にお話しいたします。',
                'submit_type' => 'zipにしてメールで納品',
                'quest_level' => '2',
                'quest_lank' => '2',
                'quest_applied' => '2020-2-6',
                'quest_period' => '2020-2-20',
                'quest_reward' => '10000',
                'quest_people' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ],
            [
                'quest_id' => '30',
                'user_id' => 'tester',
                'genre_id' => '3',
                'quest_title' => 'BGM作成のお仕事',
                'quest_explanation' => 'タイトル通りのお仕事の依頼です。内容に関しましては相談時にお話しいたします。',
                'submit_type' => 'zipにしてメールで納品',
                'quest_level' => '2',
                'quest_lank' => '2',
                'quest_applied' => '2020-2-7',
                'quest_period' => '2020-2-21',
                'quest_reward' => '10000',
                'quest_people' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1',
            ],
        ]);
    }
}