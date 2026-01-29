<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Religious\SalmMeaning;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SalmMeaningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $salms = [
            [
                'salm_name' => 'Psalm 1',
                'salm_period' => 'Biblical',
                'salm_number' => 1,
                'salm_orig' => [
                    '1' => 'אַ֥שְֽׁרֵי־הָאִ֗ישׁ אֲשֶׁ֤ר ׀ לֹ֥א הָלַךְ֮ בַּעֲצַ֢ת רְשָׁ֫עִ֥ים',
                    '2' => 'כִּ֤י אִ֥ם בְּתוֹרַת יְהוָה חֶפְצ֥וֹ וּבְתוֹרָת֥וֹ יֶהְגֶּ֗ה יוֹמָ֥ם וָלָֽיְלָה',
                    '3' => 'וְֽהָיָה כְּעֵץ שָׁתוּל עַל־פַּלְגֵי־מָיִם אֲשֶׁר פִּרְי֥וֹ יִתֵּ֗ן בְּעִתּ֫וֹ',
                    '4' => 'לֹא־כֵן הָרְשָׁעִים כִּ֥י אִם־כַּמֹּ֗ץ אֲשֶׁר־תִּדְּפֶ֥נּוּ רֽוּחַ',
                    '5' => 'עַל־כֵּן לֹא־יָקֻ֣מוּ רְשָׁעִ֣ים בַּמִּשְׁפָּ֑ט',
                    '6' => 'כִּי־יוֹדֵ֣עַ יְהוָ֣ה דֶּֽרֶךְ־צַדִּיקִ֑ים וְדֶ֖רֶךְ רְשָׁעִ֣ים תֹּאבֵֽד',
                ],
                'lang' => [
                    'en' => [
                        '1' => 'Happy is the one who has not followed the counsel of the wicked',
                        '2' => 'But his delight is in the law of the LORD, and in His law he meditates day and night',
                        '3' => 'Such a one is like a tree planted beside streams of water',
                        '4' => 'Not so the wicked; rather, they are like chaff driven by the wind',
                        '5' => 'Therefore the wicked shall not stand in the judgment',
                        '6' => 'For the LORD knows the way of the righteous, but the way of the wicked shall perish',
                    ],
                    'it' => [
                        '1' => 'Beato l’uomo che non cammina nel consiglio dei malvagi',
                        '2' => 'Ma nella legge del Signore che è il suo desiderio, e nella sua legge mormora giorno e notte',
                        '3' => 'Ed egli è come un albero piantato su canali di acque, che il suo frutto dà nel suo tempo',
                        '4' => 'Non così i malvagi, ma come pula che il vento disperde',
                        '5' => 'Per questo non si alzeranno i malvagi nel giudizio',
                        '6' => 'Poiché conosce il Signore la via dei giusti, ma la via dei malvagi perisce',
                    ],
                ],
            ],
            [
                'salm_name' => 'Psalm 2',
                'salm_period' => 'Biblical',
                'salm_number' => 2,
                'salm_orig' => [
                    '1' => 'לָ֭מָּה רָגְשׁ֣וּ גוֹיִ֑ם וּ֝לְאֻמִּ֗ים יֶהְגּוּ־רִֽיק׃',
                    '2' => 'יִתְיַצְּב֨וּ ׀ מַלְכֵי־אֶ֗רֶץ וְרוֹזְנִ֥ים נֽוֹסְדוּ־יָ֑חַד עַל־יְ֝הוָ֗ה וְעַל־מְשִׁיחֽוֹ׃',
                    '3' => 'נְֽ֭נַתְּקָה אֶת־מֽוֹסְרוֹתֵ֑ינוּ וְנַשְׁלִיכָה מִמֶּ֣נּוּ עֲבֹתֵֽינוּ׃',
                    '4' => 'יוֹשֵׁ֣ב בַּשָּׁמַ֣יִם יִשְׂחָ֑ק אֲדֹנָ֗י יִלְעַג־לָֽמוֹ׃',
                    '5' => 'אָ֤ז יְדַבֵּר אֵלֵימוֹ בְאַפּ֑וֹ וּבַחֲרוֹנ֥וֹ יְבַהֲלֵֽמוֹ׃',
                    '6' => 'וַ֭אֲנִי נָסַ֣כְתִּי מַלְכִּ֑י עַל־צִ֝יּ֗וֹן הַר־קָדְשִֽׁי׃',
                    '7' => 'אֲסַפְּרָ֗ה אֶל־חֹ֫ק יְהוָ֥ה אָמַ֣ר לִ֑י בְּנִ֥י אַתָּ֗ה אֲנִ֥י הַיּֽוֹם יְלִדְתִּֽיךָ׃',
                    '8' => 'שְׁאַ֤ל מִמֶּ֗נִּי וְאֶתְּנָה ג֭וֹיִם נַחֲלָתֶ֑ךָ וַאֲחֻזָּתְךָ֗ אַפְסֵי־אָֽרֶץ׃',
                    '9' => 'תְּ֭רֹעֵם בְּשֵׁבֶט בַּרְזֶל כִּכְלִי יוֹצֵ֣ר תְּנַפְּצֵֽם׃',
                    '10' => 'וְ֭עַתָּה מְלָכִ֣ים הַשְׂכִּ֑ילוּ הִ֝וָ֗סְר֗וּ שֹׁ֣פְטֵי־אֶֽרֶץ׃',
                    '11' => 'עִבְדוּ אֶת־יְהוָה בְּיִרְאָה וְגִילוּ בִּרְעָדָה׃',
                    '12' => 'נַשְּׁקוּ־בַ֡ר פֶּן־יֶאֱנַ֤ף וְתֹאבְדוּ דֶרֶךְ כִּֽי־יִבְעַ֣ר כִּמְעַט אַפּ֑וֹ אַשְׁרֵ֗י כָּל־ח֥וֹסֵי־בוֹ׃',
                ],
                'lang' => [
                    'en' => [
                        '1' => 'Why do the nations assemble, and peoples plot vain things',
                        '2' => 'The kings of the earth stand up and the rulers take counsel together against the LORD and His anointed',
                        '3' => 'Let us break their bands asunder and cast away their cords from us',
                        '4' => 'He who sits in the heavens laughs; the LORD mocks them',
                        '5' => 'Then He will speak to them in His wrath and terrify them in His deep displeasure',
                        '6' => 'Yet I have set My King upon Zion, My holy mountain',
                        '7' => 'I will declare the decree: The LORD said to me, “You are My son; today I have begotten you”',
                        '8' => 'Ask of Me, and I will give You the nations for Your inheritance and the ends of the earth for Your possession',
                        '9' => 'You shall break them with a rod of iron; You shall dash them in pieces like a potter’s vessel',
                        '10' => 'Now therefore, O kings, be wise; be instructed, you judges of the earth',
                        '11' => 'Serve the LORD with fear and rejoice with trembling',
                        '12' => 'Kiss the son, lest He be angry and you perish in the way; for His wrath flares up suddenly; happy are all who take refuge in Him',
                    ],
                    'it' => [
                        '1' => 'Perché le nazioni si radunano e i popoli tramano cose vane',
                        '2' => 'I re della terra si levano e i governanti congiurano insieme contro il Signore e il suo unto',
                        '3' => 'Spezzano le loro legature e gettano via da noi le loro corde',
                        '4' => 'Colui che siede nei cieli ride; il Signore li deride',
                        '5' => 'Allora egli parlerà loro nella sua ira e li spaventerà nella sua profonda collera',
                        '6' => 'Eppure io ho stabilito il mio re sul Sion, sulla mia santa montagna',
                        '7' => 'Annunzierò il decreto: il Signore mi ha detto: “Tu sei mio figlio; oggi ti ho generato”',
                        '8' => 'Chiedi a me e io ti darò le nazioni per eredità e le estremità della terra per possedimento',
                        '9' => 'Le spezzerai con uno scettro di ferro; le frantumerai come un vaso di vasaio',
                        '10' => 'Ora dunque, o re, sii saggio; siate ammaestrati, o giudici della terra',
                        '11' => 'Servite il Signore con timore e gioite con tremore',
                        '12' => 'Bacia il figlio, affinché non si adiri e tu perisca nella via; perché la sua ira divampa improvvisa; beati tutti coloro che si rifugiano in lui',
                    ],
                ],
            ],
        ];

        foreach ($salms as $salm) {
            SalmMeaning::updateOrCreate(['salm_number' => $salm['salm_number']], $salm);
        }
    }
}
