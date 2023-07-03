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

        Bubblechat::create([
            "notebook_id" => 21,
            'kanji' => 'すみません、駅はどこですか？',
            'japan' => 'Sumimasen, eki wa doko desu ka?',
            'english' => 'Excuse me, where is the station?',
            'position' => 'a'
        ]);
        Bubblechat::create([
            "notebook_id" => 21,
            'kanji' => '駅はそこです。すぐそこにつきますよ。',
            'japan' => 'Eki wa soko desu. Sugu soko ni tsukimasu yo.',
            'english' => 'The station is over there. You\'ll reach it right away.',
            'position' => 'b'
        ]);
        Bubblechat::create([
            "notebook_id" => 21,
            'kanji' => 'ありがとうございます。',
            'japan' => 'Arigatō gozaimasu.',
            'english' => 'Thank you very much.',
            'position' => 'a'
        ]);

        Bubblechat::create([
            "notebook_id" => 22,
            'kanji' => '公園で花見をしませんか？',
            'japan' => 'Kōen de hanami o shimasen ka?',
            'english' => 'Shall we have a cherry blossom viewing at the park?',
            'position' => 'a'
        ]);
        Bubblechat::create([
            "notebook_id" => 22,
            'kanji' => 'いいえ、今日は雨が降ります。公園はまだ無理です。',
            'japan' => 'Iie, kyō wa ame ga furimasu. Kōen wa mada muri desu.',
            'english' => 'No, it\'s raining today. It\'s still not possible to go to the park.',
            'position' => 'b'
        ]);
        Bubblechat::create([
            "notebook_id" => 22,
            'kanji' => 'そうですか。じゃあ、バス停に行きましょう。',
            'japan' => 'Sō desu ka. Jaa, basu tei ni ikimashō.',
            'english' => 'I see. Well then, let\'s go to the bus stop.',
            'position' => 'a'
        ]);


        Bubblechat::create([
            "notebook_id" => 23,
            'kanji' => '地下鉄はどうやって行きますか？',
            'japan' => 'Chikatetsu wa dōyatte ikimasu ka?',
            'english' => 'How do I get to the subway?',
            'position' => 'a'
        ]);
        Bubblechat::create([
            "notebook_id" => 23,
            'kanji' => 'それは簡単ですよ。この道をまっすぐ行くと、地下鉄へ行けます。',
            'japan' => 'Sore wa kantan desu yo. Kono michi o massugu iku to, chikatetsu e ikemasu.',
            'english' => 'It\'s simple. If you go straight on this street, you can reach the subway.',
            'position' => 'b'
        ]);
        Bubblechat::create([
            "notebook_id" => 23,
            'kanji' => 'わかりました。ありがとうございます。',
            'japan' => 'Wakarimashita. Arigatō.',
            'english' => 'I understand. Thank you.',
            'position' => 'a'
        ]);


        Bubblechat::create([
            "notebook_id" => 24,
            'kanji' => 'すみません、トイレはどこですか？',
            'japan' => 'Sumimasen, toire wa doko desu ka?',
            'english' => 'Excuse me, where is the toilet?',
            'position' => 'a'
        ]);
        Bubblechat::create([
            "notebook_id" => 24,
            'kanji' => 'すぐそこにあります。そこに行くと、トイレがありますよ。',
            'japan' => 'Sugu soko ni arimasu. Soko ni iku to, toire ga arimasu yo.',
            'english' => 'It\'s right there. If you go there, you\'ll find the toilet.',
            'position' => 'b'
        ]);
        Bubblechat::create([
            "notebook_id" => 24,
            'kanji' => 'わかりました。ありがとうございます。',
            'japan' => 'Wakarimashita. Arigatō gozaimasu.',
            'english' => 'I understand. Thank you very much.',
            'position' => 'a'
        ]);

        Bubblechat::create([
            "notebook_id" => 25,
            'kanji' => '電車は何時に着くですか？',
            'japan' => 'Ressha wa nanji ni tsuku desu ka?',
            'english' => 'What time does the train arrive?',
            'position' => 'a'
        ]);
        Bubblechat::create([
            "notebook_id" => 25,
            'kanji' => '電車は8時30分に着くようです。気をつけてください。',
            'japan' => 'Ressha wa 8-ji 30-fun ni tsuku yōdesu. Ki o tsukete kudasai.',
            'english' => 'The train arrives at 8:30. Please be careful.',
            'position' => 'b'
        ]);
        Bubblechat::create([
            "notebook_id" => 25,
            'kanji' => 'わかりました。ありがとうございます。',
            'japan' => 'Wakarimashita. Arigatō.',
            'english' => 'I understand. Thank you.',
            'position' => 'a'
        ]);


        Bubblechat::create([
            "notebook_id" => 26,
            'kanji' => 'コンビニでコーヒーを買いますか？',
            'japan' => 'Konbini de kōhī o kaimasu ka?',
            'english' => 'Can I buy coffee at the convenience store?',
            'position' => 'a'
        ]);
        Bubblechat::create([
            "notebook_id" => 26,
            'kanji' => 'はい、コンビニでコーヒーが買えます。',
            'japan' => 'Hai, konbini de kōhī ga kaimemasu.',
            'english' => 'Yes, you can buy coffee at the convenience store.',
            'position' => 'b'
        ]);


        Bubblechat::create([
            "notebook_id" => 27,
            'kanji' => 'メニューをください。',
            'japan' => 'Menyū o kudasai.',
            'english' => 'May I have the menu, please?',
            'position' => 'a'
        ]);
        Bubblechat::create([
            "notebook_id" => 27,
            'kanji' => 'はい、こちらがメニューです。お名前は何ですか？',
            'japan' => 'Hai, kochira ga menyū desu. O-namae wa nan desu ka?',
            'english' => 'Yes, here is the menu. What would you like to order?',
            'position' => 'b'
        ]);
        Bubblechat::create([
            "notebook_id" => 27,
            'kanji' => '私は寿司を食べます。',
            'japan' => 'Watashi wa sushi o tabemasu.',
            'english' => 'I\'ll have sushi.',
            'position' => 'a'
        ]);
        Bubblechat::create([
            "notebook_id" => 27,
            'kanji' => 'わかりました。それを注文します。',
            'japan' => 'Wakarimashita. Sore o chūmon shimasu.',
            'english' => 'I understand. I\'ll take your order.',
            'position' => 'b'
        ]);


        Bubblechat::create([
            "notebook_id" => 28,
            'kanji' => '美味しいカフェを知りませんか？',
            'japan' => 'Oishii kafe o shirimasen ka?',
            'english' => 'Do you know any delicious cafes?',
            'position' => 'a'
        ]);
        Bubblechat::create([
            "notebook_id" => 28,
            'kanji' => 'いいえ、わかりません。でも、あのレストランはおいしいですよ。',
            'japan' => 'Iie, wakarimasen. Demo, ano Resutoran wa oishii desu yo.',
            'english' => 'No, I don\'t know. But that restaurant over there is delicious.',
            'position' => 'b'
        ]);
        Bubblechat::create([
            "notebook_id" => 28,
            'kanji' => 'なるほど。それをいただきます。',
            'japan' => 'Naruhodo. Sore wa itadakimasu.',
            'english' => 'I see. Let\'s give it a try.',
            'position' => 'a'
        ]);


        Bubblechat::create([
            "notebook_id" => 29,
            'kanji' => '食べ物は何ですか？',
            'japan' => 'Tabemono wa nan desu ka?',
            'english' => 'What kind of food is this?',
            'position' => 'a'
        ]);
        Bubblechat::create([
            "notebook_id" => 29,
            'kanji' => 'これは洋食のメニューです。どれを注文しますか？',
            'japan' => 'Kore wa yōshoku no menyū desu. Dore o chūmon shimasu ka?',
            'english' => 'This is a Western-style menu. which one will you order?',
            'position' => 'b'
        ]);
        Bubblechat::create([
            "notebook_id" => 29,
            'kanji' => 'ステーキと牛丼を注文します。',
            'japan' => 'Suteiki to gyūdon o chūmon shimasu.',
            'english' => 'I\'ll have steak and beef bowl.',
            'position' => 'a'
        ]);
        Bubblechat::create([
            "notebook_id" => 29,
            'kanji' => 'わかりました。お注文いたします。',
            'japan' => 'Wakarimashita. O-chūmon itadakimasu.',
            'english' => 'I understand. Your order will be served.',
            'position' => 'b'
        ]);

        Bubblechat::create([
            "notebook_id" => 30,
            'kanji' => '何を飲みますか？',
            'japan' => 'Nani o nomimasu ka?',
            'english' => 'What would you like to drink?',
            'position' => 'a'
        ]);
        Bubblechat::create([
            "notebook_id" => 30,
            'kanji' => 'ビールを飲みます。',
            'japan' => 'Biiru o nomimasu.',
            'english' => 'I\'ll have beer.',
            'position' => 'b'
        ]);
        Bubblechat::create([
            "notebook_id" => 30,
            'kanji' => 'わかりました。お飲みを手伝ってください。',
            'japan' => 'Wakarimashita. O-nomi o tetsudatte kudasai.',
            'english' => 'I understand. Please wait for your drinks.',
            'position' => 'a'
        ]);

        // Bubblechat::create([
        //     "notebook_id" => 30,
        //     'kanji' => '',
        //     'japan' => '',
        //     'english' => '',
        //     'position' => 'a'
        // ]);


    }
}
