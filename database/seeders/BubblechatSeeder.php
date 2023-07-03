<?php

namespace Database\Seeders;

use App\Models\Bubblechat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BubblechatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Bubblechat::create([
            "notebook_id" => 1,
            'kanji' => 'こんにちは。はじめまして、私はリナです。',
            'japan' => 'Konnichiwa. Hajimemashite, watashi wa Rina desu.',
            'english' => 'Hello. Nice to meet you, I\'m Rina.',
            'position' => 'a'
        ]);
        Bubblechat::create([
            "notebook_id" => 1,
            'kanji' => 'はじめまして、リナさん。私はタカシです。よろしくお願いします。',
            'japan' => 'Hajimemashite, Rina-san. Watashi wa Takashi desu. Yoroshiku onegaishimasu.',
            'english' => 'Nice to meet you, Rina-san. I\'m Takashi. Please take care of me.',
            'position' => 'b'
        ]);

        Bubblechat::create([
            "notebook_id" => 2,
            'kanji' => 'おはようございます。元気ですか？',
            'japan' => 'Ohayō gozaimasu. Genki desu ka?',
            'english' => 'Good morning. How are you?',
            'position' => 'a'
        ]);
        Bubblechat::create([
            "notebook_id" => 2,
            'kanji' => 'おはようございます。元気です。あなたは？',
            'japan' => 'Ohayō gozaimasu. Genki desu. Anata wa?',
            'english' => 'Good morning. I\'m fine. And you?',
            'position' => 'b'
        ]);
        Bubblechat::create([
            "notebook_id" => 2,
            'kanji' => 'はい、元気です。ありがとうございます。',
            'japan' => 'Hai, genki desu. Arigatougozaimasu',
            'english' => 'Yes, I\'m fine. Thank you',
            'position' => 'a'
        ]);

        Bubblechat::create([
            "notebook_id" => 3,
            'kanji' => 'こんばんは。おやすみなさい。',
            'japan' => ' Konbanwa. Oyasumi nasai.',
            'english' => 'Good evening. Good night.',
            'position' => 'a'
        ]);
        Bubblechat::create([
            "notebook_id" => 3,
            'kanji' => 'おやすみなさい。良い夢を見てくださいね。',
            'japan' => 'Oyasumi nasai. Yoi yume o mite kudasai ne.',
            'english' => 'Good night. Have a good dream.',
            'position' => 'b'
        ]);

        Bubblechat::create([
            "notebook_id" => 4,
            'kanji' => 'ごめんなさい、遅れました。',
            'japan' => 'Gomen nasai, okuremashita.',
            'english' => 'I\'m sorry, I\'m late.',
            'position' => 'a'
        ]);
        Bubblechat::create([
            "notebook_id" => 4,
            'kanji' => '大丈夫です。どういたしまして。',
            'japan' => 'Daijōbu desu. Dō itashimashite.',
            'english' => 'It\'s okay. You\'re welcome.',
            'position' => 'b'
        ]);

        Bubblechat::create([
            "notebook_id" => 5,
            'kanji' => 'お願いします、これを持ってください。',
            'japan' => 'Onegaishimasu, kore o motte kudasai.',
            'english' => 'Please, take this.',
            'position' => 'a'
        ]);
        Bubblechat::create([
            "notebook_id" => 5,
            'kanji' => 'ありがとうございます。',
            'japan' => 'Arigatō gozaimasu.',
            'english' => 'Thank you.',
            'position' => 'b'
        ]);

        Bubblechat::create([
            "notebook_id" => 6,
            'kanji' => 'いってきます！',
            'japan' => 'Ittekimasu!',
            'english' => 'I\'m leaving!',
            'position' => 'a'
        ]);
        Bubblechat::create([
            "notebook_id" => 6,
            'kanji' => 'いってらっしゃい。気をつけてね！',
            'japan' => 'Itterasshai. Ki o tsukete ne!',
            'english' => 'Take care and come back safely!',
            'position' => 'b'
        ]);

        Bubblechat::create([
            "notebook_id" => 7,
            'kanji' => 'ただいま戻りました。',
            'japan' => 'Tadaima modorimashita.',
            'english' => 'I\'m back.',
            'position' => 'a'
        ]);
        Bubblechat::create([
            "notebook_id" => 7,
            'kanji' => 'おかえりなさい。お疲れ様でした。',
            'japan' => 'Okaerinasai. Otsukaresama deshita.',
            'english' => 'Welcome back. You must be tired. ',
            'position' => 'b'
        ]);

        Bubblechat::create([
            "notebook_id" => 8,
            'kanji' => 'おめでとうございます！合格しましたね。',
            'japan' => 'Omedetō gozaimasu! Gōkaku shimashita ne.',
            'english' => 'Congratulations! You passed.',
            'position' => 'a'
        ]);
        Bubblechat::create([
            "notebook_id" => 8,
            'kanji' => ' ありがとうございます。とても嬉しいです。',
            'japan' => 'Arigatō gozaimasu. Totemo ureshii desu.',
            'english' => 'Thank you. I\'m really happy.',
            'position' => 'b'
        ]);

        Bubblechat::create([
            "notebook_id" => 9,
            'kanji' => 'お誕生日おめでとうございます！何歳になりましたか？',
            'japan' => 'Otanjōbi omedetō gozaimasu! Nansai ni narimashita ka?',
            'english' => 'Happy birthday! How old did you turn?',
            'position' => 'a'
        ]);
        Bubblechat::create([
            "notebook_id" => 9,
            'kanji' => 'ありがとうございます。30歳になりました。',
            'japan' => 'Arigatō gozaimasu. Sanjusai ni narimashita.',
            'english' => ' Thank you. I turned 30.',
            'position' => 'b'
        ]);

        Bubblechat::create([
            "notebook_id" => 10,
            'kanji' => 'よろしくお願いします。一緒に頑張りましょう。',
            'japan' => 'Yoroshiku onegaishimasu. Issho ni ganbarimashō.',
            'english' => 'Nice to meet you. Let\'s do our best together.',
            'position' => 'a'
        ]);
        Bubblechat::create([
            "notebook_id" => 10,
            'kanji' => 'はい、お互いに頑張りましょう。',
            'japan' => 'Hai, otagai ni ganbarimashō. ',
            'english' => 'Yes, let\'s do our best.',
            'position' => 'b'
        ]);

        Bubblechat::create([
            "notebook_id" => 11,
            'kanji' => 'ごめんください。ここに座ってもいいですか？',
            'japan' => 'Gomen kudasai. Koko ni suwatte mo ii desu ka?',
            'english' => 'Excuse me. Can I sit here?',
            'position' => 'a'
        ]);
        Bubblechat::create([
            "notebook_id" => 11,
            'kanji' => 'はい、どうぞ。',
            'japan' => 'Hai, dōzo.',
            'english' => 'Yes, please.',
            'position' => 'b'
        ]);

        Bubblechat::create([
            "notebook_id" => 12,
            'kanji' => 'いい天気ですね。散歩に行きませんか？',
            'japan' => 'Ii tenki desu ne. Sanpo ni ikimasen ka?',
            'english' => 'It\'s nice weather, isn\'t it? Shall we go for a walk?',
            'position' => 'a'
        ]);
        Bubblechat::create([
            "notebook_id" => 12,
            'kanji' => 'いいですね。行きましょう！',
            'japan' => 'Ii desu ne. Ikimashō!',
            'english' => 'That sounds good. Let\'s go!',
            'position' => 'b'
        ]);

        Bubblechat::create([
            "notebook_id" => 13,
            'kanji' => '元気ですか？',
            'japan' => 'Genki desu ka?',
            'english' => 'How are you?',
            'position' => 'a'
        ]);
        Bubblechat::create([
            "notebook_id" => 13,
            'kanji' => 'はい、元気です。あなたも元気ですか？',
            'japan' => 'Hai, genki desu. Anata mo genki desu ka?',
            'english' => 'I\'m fine. How about you?',
            'position' => 'b'
        ]);

        Bubblechat::create([
            "notebook_id" => 14,
            'kanji' => 'お幸せに！結婚おめでとうございます。',
            'japan' => 'O-shiawase ni! Kekkon omedetō gozaimasu.',
            'english' => 'Best wishes! Congratulations on your marriage.',
            'position' => 'a'
        ]);
        Bubblechat::create([
            "notebook_id" => 14,
            'kanji' => 'ありがとうございます。嬉しいです。',
            'japan' => 'Arigatō gozaimasu. Ureshii desu.',
            'english' => 'Thank you. I\'m happy.',
            'position' => 'b'
        ]);

        Bubblechat::create([
            "notebook_id" => 15,
            'kanji' => 'お大事に。早くよくなりますように。',
            'japan' => 'O-daiji ni. Hayaku yoku narimasu yō ni.',
            'english' => 'Take care. I hope you get well soon.',
            'position' => 'a'
        ]);
        Bubblechat::create([
            "notebook_id" => 15,
            'kanji' => 'ありがとうございます。お心遣いに感謝します。',
            'japan' => 'Arigatō gozaimasu. O-kokorozukai ni kansha shimasu.',
            'english' => 'Thank you. I appreciate your concern.',
            'position' => 'b'
        ]);


        Bubblechat::create([
            "notebook_id" => 16,
            'kanji' => 'どうぞよろしくお願いします。新しいプロジェクトで一緒に働きましょう。',
            'japan' => 'Dōzo yoroshiku onegaishimasu. Atarashii purojekuto de issho ni hatarakimashō.',
            'english' => 'Nice to meet you. Let\'s work together on the new project.',
            'position' => 'a'
        ]);

Bubblechat::create([
            "notebook_id" => 16,
            'kanji' => 'はい、お互いに頑張りましょう。',
            'japan' => 'Osaki ni shitsurei shimasu. Mata ashita o ai shimashō.',
            'english' => 'Excuse me for leaving before you. Let\'s meet again tomorrow.',
            'position' => 'b'
        ]);

Bubblechat::create([
            "notebook_id" => 17,
            'kanji' => 'お先に失礼します。また明日お会いしましょう。',
            'japan' => 'Hai, otagai ni ganbarimashō.',
            'english' => 'Yes, let\'s do our best together.',
            'position' => 'a'
        ]);

Bubblechat::create([
            "notebook_id" => 17,
            'kanji' => 'お先にどうぞ。お気をつけて帰ってください。',
            'japan' => 'Osaki ni dōzo. O-kiwotsukete ni kaette kudasai.',
            'english' => 'Please go ahead. Please be careful on your way back.',
            'position' => 'b'
        ]);

Bubblechat::create([
            "notebook_id" => 18,
            'kanji' => 'お手紙ありがとうございました。嬉しかったです。',
            'japan' => 'O-tegami arigatō gozaimashita. Ureshikatta desu.',
            'english' => 'Thank you for the letter. I was happy.',
            'position' => 'a'
        ]);

Bubblechat::create([
            "notebook_id" => 18,
            'kanji' => 'どういたしまして。また書きますね。',
            'japan' => 'Dō itashimashite. Mata kakimasu ne.',
            'english' => 'You\'re welcome. I\'ll write again.',
            'position' => 'b'
        ]);

Bubblechat::create([
            "notebook_id" => 19,
            'kanji' => 'おやすみなさいますか？',
            'japan' => 'Oyasumi nasaimasuka?',
            'english' => 'Are you going to sleep?',
            'position' => 'a'
        ]);

Bubblechat::create([
            "notebook_id" => 19,
            'kanji' => 'はい、もう寝る予定です。おやすみなさい。',
            'japan' => 'Hai, mō neru yotei desu. Oyasumi nasai.',
            'english' => 'Yes, I\'m planning to sleep now. Good night.',
            'position' => 'b'
        ]);

Bubblechat::create([
            "notebook_id" => 20,
            'kanji' => 'おめでとうございます！新年明けましておめでとうございます。',
            'japan' => 'Omedetō gozaimasu! Shinnen akemashite omedetō gozaimasu.',
            'english' => 'Congratulations! Happy New Year.',
            'position' => 'a'
        ]);

Bubblechat::create([
            "notebook_id" => 20,
            'kanji' => 'ありがとうございます。今年もよろしくお願いします。',
            'japan' => 'Arigatō gozaimasu. Kotoshi mo yoroshiku onegaishimasu.',
            'english' => 'Thank you. Please take care of me this year too.',
            'position' => 'b'
        ]);


    }
}
