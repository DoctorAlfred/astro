<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Angels\AngelsMeaning;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AngelMeaningsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $angels = [

            // Serafini
            [
                'number' => 1,
                'name' => 'Vehuiah',
                'hebrew_letters' => 'והו',
                'hebrew_name' => 'והויה',
                'letter_details' => [
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => 'connessione, unione, collegamento tra livelli'
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => 'rivelazione, apertura, soffio vitale'
                    ],
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => 'canalizzazione, continuità, manifestazione'
                    ],
                ],

                'choir' => 'Serafini',
                'archangel' => 'Enoch/Metatron',
                'element' => 'Fuoco',
                'zodiac_sign' => 'Ariete',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 21,
                'regency_start_month' => 3,
                'regency_end_day' => 25,
                'regency_end_month' => 3,
                // Gradi
                'degree_start' => 0,
                'degree_end' => 5,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 3,
                'psalm_verse' => 3,
                'vulgata' => 3,
                'vulgata_verse' => 4,
                'psalm_link' => '/salmi/3',
                // Trigramma
                'trigram_sum' => 17,
                'trigram_reduction' => 8,
                // Contenuti
                'quality' => 'Volontà potente, energia creativa primordiale, spirito di iniziativa e capacità di rompere l’inerzia.',
                'help' => 'Dona volontà ferrea, coraggio e prontezza d’azione; aiuta a superare ostacoli, eliminare stanchezza, confusione e blocchi interiori nelle fasi iniziali di ogni impresa.',
                'prevent' => 'Previene apatia, collera incontrollata, impulsività distruttiva e tendenza ad abbandonare i progetti.',
                'keywords' => 'inizio, volontà, fuoco creativo, decisione, leadership, slancio',
                'energy' => 'Maschile',
            ],
            [
                'number' => 2,
                'name' => 'Jeliel',
                'hebrew_letters' => 'ילי',
                'hebrew_name' => 'יליאל',
                'letter_details' => [
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => 'scintilla divina, principio, seme'
                    ],
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => 'insegnamento, equilibrio, apprendimento'
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => 'ritorno al principio, stabilizzazione del seme'
                    ],
                ],

                'choir' => 'Serafini',
                'archangel' => 'Enoch/Metatron',
                'element' => 'Fuoco',
                'zodiac_sign' => 'Ariete',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 26,
                'regency_start_month' => 3,
                'regency_end_day' => 30,
                'regency_end_month' => 3,
                // Gradi
                'degree_start' => 5,
                'degree_end' => 10,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 22,
                'psalm_verse' => 20,
                'vulgata' => 21,
                'vulgata_verse' => 21,
                'psalm_link' => '/salmi/22',
                // Trigramma
                'trigram_sum' => 50,
                'trigram_reduction' => 5,
                // Contenuti
                'quality' => 'Amore universale, altruismo, diplomazia e capacità di conciliare gli opposti.',
                'help' => 'Aiuta a placare le liti, ristabilire la pace coniugale e la fedeltà; favorisce la lucidità intellettuale per risolvere problemi complessi e promuove l’obbedienza e la giustizia.',
                'prevent' => 'Previene il narcisismo, la separazione affettiva, l’infedeltà, l’egoismo estremo e le attitudini tiranniche.',
                'keywords' => 'amore, pace, diplomazia, fedeltà, armonia, solidità affettiva, altruismo',
                'energy' => 'Maschile',
            ],
            [
                'number' => 3,
                'name' => 'Sitael',
                'hebrew_letters' => 'סיט',
                'hebrew_name' => 'סיטאל',
                'letter_details' => [
                    [
                        'letter' => 'ס',
                        'name' => 'Samekh',
                        'value' => 60,
                        'meaning' => 'sostegno, protezione, appoggio'
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => 'principio divino, coscienza'
                    ],
                    [
                        'letter' => 'ט',
                        'name' => 'Tav',
                        'value' => 400,
                        'meaning' => 'verità, sigillo, compimento'
                    ],
                ],

                'choir' => 'Serafini',
                'archangel' => 'Enoch/Metatron',
                'element' => 'Fuoco',
                'zodiac_sign' => 'Ariete',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 31,
                'regency_start_month' => 3,
                'regency_end_day' => 4,
                'regency_end_month' => 4,
                // Gradi
                'degree_start' => 10,
                'degree_end' => 15,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 91,
                'psalm_verse' => 2,
                'vulgata' => 90,
                'vulgata_verse' => 2,
                'psalm_link' => '/salmi/91',
                // Trigramma
                'trigram_sum' => 470,
                'trigram_reduction' => 11,
                // Contenuti
                'quality' => 'Costruzione stabile, verità interiore, protezione dalle avversità e forza morale.',
                'help' => 'Sostiene nei momenti di difficoltà, protegge da inganni, tradimenti e crolli improvvisi, rafforzando la fiducia nel percorso intrapreso.',
                'prevent' => 'Previene instabilità, paura del fallimento, autosabotaggio e false illusioni.',
                'keywords' => 'protezione, stabilità, verità, costruzione, fiducia',
                'energy' => 'Femminile',
            ],
            [
                'number' => 4,
                'name' => 'Elemiah',
                'hebrew_letters' => 'עלם',
                'hebrew_name' => 'אלמיה',
                'letter_details' => [
                    [
                        'letter' => 'ע',
                        'name' => 'Ayin',
                        'value' => 70,
                        'meaning' => 'visione, percezione profonda'
                    ],
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => 'apprendimento, direzione'
                    ],
                    [
                        'letter' => 'ם',
                        'name' => 'Mem finale',
                        'value' => 40,
                        'meaning' => 'compimento, maturazione'
                    ],
                ],

                'choir' => 'Serafini',
                'archangel' => 'Enoch/Metatron',
                'element' => 'Fuoco',
                'zodiac_sign' => 'Ariete',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 5,
                'regency_start_month' => 4,
                'regency_end_day' => 9,
                'regency_end_month' => 4,
                // Gradi
                'degree_start' => 15,
                'degree_end' => 20,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 6,
                'psalm_verse' => 5,
                'vulgata' => 6,
                'vulgata_verse' => 6,
                'psalm_link' => '/salmi/6',
                // Trigramma
                'trigram_sum' => 140,
                'trigram_reduction' => 5,
                // Contenuti
                'quality' => 'Spirito d’iniziativa guidato, capacità di correggere errori e ritrovare la giusta direzione.',
                'help' => 'Aiuta a rimediare a scelte sbagliate, a rialzarsi dopo una caduta e a ritrovare il cammino corretto nelle fasi di confusione o crisi.',
                'prevent' => 'Previene ostinazione cieca, ripetizione degli stessi errori, dispersione di energia e decisioni impulsive.',
                'keywords' => 'rettifica, viaggio, orientamento, decisione, ritorno',
                'energy' => 'Maschile',
            ],
            [
                'number' => 5,
                'name' => 'Mahasiah',
                'hebrew_letters' => 'מהש',
                'hebrew_name' => 'מהשיה',
                'letter_details' => [
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => 'purificazione, flusso'
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => 'rivelazione, apertura'
                    ],
                    [
                        'letter' => 'ש',
                        'name' => 'Shin',
                        'value' => 300,
                        'meaning' => 'trasformazione, fuoco'
                    ],
                ],

                'choir' => 'Serafini',
                'archangel' => 'Enoch/Metatron',
                'element' => 'Fuoco',
                'zodiac_sign' => 'Ariete',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 10,
                'regency_start_month' => 4,
                'regency_end_day' => 14,
                'regency_end_month' => 4,
                // Gradi
                'degree_start' => 20,
                'degree_end' => 25,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 34,
                'psalm_verse' => 7,
                'vulgata' => 33,
                'vulgata_verse' => 8,
                'psalm_link' => '/salmi/34',
                // Trigramma
                'trigram_sum' => 345,
                'trigram_reduction' => 12,
                // Contenuti
                'quality' => 'Armonia interiore, apprendimento ordinato, equilibrio tra spirito e materia.',
                'help' => 'Favorisce la pace dell’anima, l’ordine interiore, lo studio e la comprensione profonda delle leggi divine.',
                'prevent' => 'Previene confusione mentale, disordine interiore, rigidità spirituale e chiusura al cambiamento.',
                'keywords' => 'armonia, studio, pace, equilibrio, comprensione',
                'energy' => 'Femminile',
            ],
            [
                'number' => 6,
                'name' => 'Lelahel',
                'hebrew_letters' => 'ללה',
                'hebrew_name' => 'ללהל',
                'letter_details' => [
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => 'conoscenza, insegnamento'
                    ],
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => 'ripetizione, rafforzamento'
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => 'manifestazione, luce'
                    ],
                ],

                'choir' => 'Serafini',
                'archangel' => 'Enoch/Metatron',
                'element' => 'Fuoco',
                'zodiac_sign' => 'Ariete',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 15,
                'regency_start_month' => 4,
                'regency_end_day' => 19,
                'regency_end_month' => 4,
                // Gradi
                'degree_start' => 25,
                'degree_end' => 30,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 71,
                'psalm_verse' => 8,
                'vulgata' => 70,
                'vulgata_verse' => 8,
                'psalm_link' => '/salmi/71',
                // Trigramma
                'trigram_sum' => 65,
                'trigram_reduction' => 11,
                // Contenuti
                'quality' => 'Luce intellettuale, talento espressivo, capacità di rendere visibile il bene.',
                'help' => 'Aiuta a esprimere verità, bellezza e conoscenza, favorendo il riconoscimento dei talenti e la chiarezza di pensiero.',
                'prevent' => 'Previene oscuramento mentale, vanità, dispersione dei doni e uso improprio delle capacità.',
                'keywords' => 'luce, talento, espressione, chiarezza, conoscenza',
                'energy' => 'Maschile',
            ],
            [
                'number' => 7,
                'name' => 'Achaiah',
                'hebrew_letters' => 'אכא',
                'hebrew_name' => 'אכאיה',
                'letter_details' => [
                    [
                        'letter' => 'א',
                        'name' => 'Aleph',
                        'value' => 1,
                        'meaning' => 'unità, principio'
                    ],
                    [
                        'letter' => 'כ',
                        'name' => 'Kaf',
                        'value' => 20,
                        'meaning' => 'potenzialità, contenimento'
                    ],
                    [
                        'letter' => 'א',
                        'name' => 'Aleph',
                        'value' => 1,
                        'meaning' => 'ritorno all’unità'
                    ],
                ],

                'choir' => 'Serafini',
                'archangel' => 'Enoch/Metatron',
                'element' => 'Terra',
                'zodiac_sign' => 'Toro',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 20,
                'regency_start_month' => 4,
                'regency_end_day' => 24,
                'regency_end_month' => 4,
                // Gradi
                'degree_start' => 0,
                'degree_end' => 5,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 103,
                'psalm_verse' => 22,
                'vulgata' => 102,
                'vulgata_verse' => 22,
                'psalm_link' => '/salmi/103',
                // Trigramma
                'trigram_sum' => 22,
                'trigram_reduction' => 4,
                // Contenuti
                'quality' => 'Pazienza profonda, capacità di osservazione e comprensione dei cicli naturali.',
                'help' => 'Aiuta a sviluppare pazienza, perseveranza e capacità di attendere il momento giusto, favorendo una comprensione profonda degli eventi.',
                'prevent' => 'Previene impulsività, fretta distruttiva, rigidità mentale e incapacità di apprendere dall’esperienza.',
                'keywords' => 'pazienza, comprensione, tempo, osservazione, stabilità',
                'energy' => 'Maschile',
            ],
            [
                'number' => 8,
                'name' => 'Cahetel',
                'hebrew_letters' => 'כהת',
                'hebrew_name' => 'כהתאל',
                'letter_details' => [
                    [
                        'letter' => 'כ',
                        'name' => 'Kaf',
                        'value' => 20,
                        'meaning' => 'forza operativa'
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => 'benedizione, apertura'
                    ],
                    [
                        'letter' => 'ת',
                        'name' => 'Tav',
                        'value' => 400,
                        'meaning' => 'realizzazione, sigillo'
                    ],
                ],

                'choir' => 'Serafini',
                'archangel' => 'Enoch/Metatron',
                'element' => 'Terra',
                'zodiac_sign' => 'Toro',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 25,
                'regency_start_month' => 4,
                'regency_end_day' => 29,
                'regency_end_month' => 4,
                // Gradi
                'degree_start' => 5,
                'degree_end' => 10,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 95,
                'psalm_verse' => 2,
                'vulgata' => 94,
                'vulgata_verse' => 2,
                'psalm_link' => '/salmi/95',
                // Trigramma
                'trigram_sum' => 425,
                'trigram_reduction' => 11,
                // Contenuti
                'quality' => 'Fecondità spirituale, benedizione del lavoro e connessione con la terra.',
                'help' => 'Favorisce la prosperità, la benedizione dei frutti del lavoro e il radicamento spirituale nella vita quotidiana.',
                'prevent' => 'Previene sterilità interiore, ingratitudine, distacco dalla realtà concreta e scoraggiamento.',
                'keywords' => 'benedizione, lavoro, fecondità, terra, gratitudine',
                'energy' => 'Femminile',
            ],
            // Cherubini
            [
                'number' => 9,
                'name' => 'Haziel',
                'hebrew_letters' => 'חזי',
                'hebrew_name' => 'חזיאל',
                'letter_details' => [
                    [
                        'letter' => 'ח',
                        'name' => 'Chet',
                        'value' => 8,
                        'meaning' => 'vita, energia'
                    ],
                    [
                        'letter' => 'ז',
                        'name' => 'Zayin',
                        'value' => 7,
                        'meaning' => 'discernimento, lotta'
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => 'misericordia attiva'
                    ],
                ],

                'choir' => 'Cherubini',
                'archangel' => 'Raziel',
                'element' => 'Terra',
                'zodiac_sign' => 'Toro',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 30,
                'regency_start_month' => 4,
                'regency_end_day' => 4,
                'regency_end_month' => 5,
                // Gradi
                'degree_start' => 10,
                'degree_end' => 15,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 25,
                'psalm_verse' => 6,
                'vulgata' => 24,
                'vulgata_verse' => 6,
                'psalm_link' => '/salmi/25',
                // Trigramma
                'trigram_sum' => 25,
                'trigram_reduction' => 7,
                // Contenuti
                'quality' => 'Misericordia, perdono e capacità di riconciliazione profonda.',
                'help' => 'Aiuta a ottenere misericordia, favorisce il perdono sincero, la riconciliazione e la guarigione delle ferite interiori.',
                'prevent' => 'Previene rancore, durezza di cuore, vendetta e incapacità di lasciar andare il passato.',
                'keywords' => 'misericordia, perdono, riconciliazione, bontà, guarigione',
                'energy' => 'Maschile',
            ],
            [
                'number' => 10,
                'name' => 'Aladiah',
                'hebrew_letters' => 'אלד',
                'hebrew_name' => 'אלדיה',
                'letter_details' => [
                    [
                        'letter' => 'א',
                        'name' => 'Aleph',
                        'value' => 1,
                        'meaning' => 'origine, unità'
                    ],
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => 'ordine, apprendimento'
                    ],
                    [
                        'letter' => 'ד',
                        'name' => 'Dalet',
                        'value' => 4,
                        'meaning' => 'passaggio, rinnovamento'
                    ],
                ],

                'choir' => 'Cherubini',
                'archangel' => 'Raziel',
                'element' => 'Terra',
                'zodiac_sign' => 'Toro',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 5,
                'regency_start_month' => 5,
                'regency_end_day' => 9,
                'regency_end_month' => 5,
                // Gradi
                'degree_start' => 15,
                'degree_end' => 20,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 33,
                'psalm_verse' => 22,
                'vulgata' => 32,
                'vulgata_verse' => 22,
                'psalm_link' => '/salmi/33',
                // Trigramma
                'trigram_sum' => 35,
                'trigram_reduction' => 8,
                // Contenuti
                'quality' => 'Rigenerazione, misericordia riparatrice, capacità di rimettere ordine dopo la caduta.',
                'help' => 'Aiuta a rialzarsi dopo errori o periodi difficili, favorendo guarigione morale, rinnovamento e recupero delle forze interiori.',
                'prevent' => 'Previene scoraggiamento profondo, senso di colpa paralizzante e perdita di fiducia dopo il fallimento.',
                'keywords' => 'rigenerazione, guarigione, misericordia, recupero, rinnovamento',
                'energy' => 'Femminile',
            ],
            [
                'number' => 11,
                'name' => 'Lauviah',
                'hebrew_letters' => 'לאו',
                'hebrew_name' => 'לאויה',
                'letter_details' => [
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => 'apprendimento, elevazione'
                    ],
                    [
                        'letter' => 'א',
                        'name' => 'Aleph',
                        'value' => 1,
                        'meaning' => 'unità, principio'
                    ],
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => 'connessione, unione'
                    ],
                ],

                'choir' => 'Cherubini',
                'archangel' => 'Raziel',
                'element' => 'Terra',
                'zodiac_sign' => 'Toro',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 10,
                'regency_start_month' => 5,
                'regency_end_day' => 14,
                'regency_end_month' => 5,
                // Gradi
                'degree_start' => 20,
                'degree_end' => 25,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 39,
                'psalm_verse' => 14,
                'vulgata' => 38,
                'vulgata_verse' => 14,
                'psalm_link' => '/salmi/39',
                // Trigramma
                'trigram_sum' => 42,
                'trigram_reduction' => 6,
                // Contenuti
                'quality' => 'Rivelazione interiore, comprensione profonda dei sogni e dei messaggi dell’anima.',
                'help' => 'Aiuta a comprendere i messaggi interiori, i sogni e le intuizioni, favorendo chiarezza spirituale e discernimento.',
                'prevent' => 'Previene confusione psichica, illusioni, interpretazioni distorte e smarrimento interiore.',
                'keywords' => 'rivelazione, sogni, intuizione, comprensione, discernimento',
                'energy' => 'Maschile',
            ],
            [
                'number' => 12,
                'name' => 'Hahaiah',
                'hebrew_letters' => 'ההע',
                'hebrew_name' => 'ההאיה',
                'letter_details' => [
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => 'apertura, rivelazione'
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => 'protezione ripetuta'
                    ],
                    [
                        'letter' => 'ע',
                        'name' => 'Ayin',
                        'value' => 70,
                        'meaning' => 'attenzione, vigilanza'
                    ],
                ],

                'choir' => 'Cherubini',
                'archangel' => 'Raziel',
                'element' => 'Terra',
                'zodiac_sign' => 'Toro',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 15,
                'regency_start_month' => 5,
                'regency_end_day' => 19,
                'regency_end_month' => 5,
                // Gradi
                'degree_start' => 25,
                'degree_end' => 30,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 9,
                'psalm_verse' => 10,
                'vulgata' => 9,
                'vulgata_verse' => 11,
                'psalm_link' => '/salmi/9',
                // Trigramma
                'trigram_sum' => 80,
                'trigram_reduction' => 8,
                // Contenuti
                'quality' => 'Protezione discreta, riservatezza, rifugio interiore e sicurezza spirituale.',
                'help' => 'Aiuta a trovare protezione nei momenti di vulnerabilità, favorendo silenzio interiore, prudenza e sicurezza.',
                'prevent' => 'Previene esposizione inutile, ingenuità, mancanza di discernimento e fiducia mal riposta.',
                'keywords' => 'protezione, riservatezza, silenzio, rifugio, sicurezza',
                'energy' => 'Femminile',
            ],
            [
                'number' => 13,
                'name' => 'Iezalel',
                'hebrew_letters' => 'יזל',
                'hebrew_name' => 'יזלאל',
                'letter_details' => [
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => 'seme, principio'
                    ],
                    [
                        'letter' => 'ז',
                        'name' => 'Zayin',
                        'value' => 7,
                        'meaning' => 'discernimento, equilibrio'
                    ],
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => 'legame, apprendimento'
                    ],
                ],

                'choir' => 'Cherubini',
                'archangel' => 'Raziel',
                'element' => 'Aria',
                'zodiac_sign' => 'Gemelli',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 20,
                'regency_start_month' => 5,
                'regency_end_day' => 24,
                'regency_end_month' => 5,
                // Gradi
                'degree_start' => 0,
                'degree_end' => 5,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 98,
                'psalm_verse' => 3,
                'vulgata' => 97,
                'vulgata_verse' => 3,
                'psalm_link' => '/salmi/98',
                // Trigramma
                'trigram_sum' => 47,
                'trigram_reduction' => 11,
                // Contenuti
                'quality' => 'Fedeltà, memoria, capacità di unire e mantenere legami duraturi.',
                'help' => 'Aiuta a ristabilire armonia nei rapporti, favorisce riconciliazioni, unioni sincere e stabilità emotiva.',
                'prevent' => 'Previene infedeltà, instabilità affettiva, dimenticanza dei valori e dispersione relazionale.',
                'keywords' => 'fedeltà, unione, memoria, armonia, legame',
                'energy' => 'Maschile',
            ],
            [
                'number' => 14,
                'name' => 'Mebahel',
                'hebrew_letters' => 'מבה',
                'hebrew_name' => 'מבהאל',
                'letter_details' => [
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => 'flusso, purificazione'
                    ],
                    [
                        'letter' => 'ב',
                        'name' => 'Bet',
                        'value' => 2,
                        'meaning' => 'casa, struttura'
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => 'giustizia rivelata'
                    ],
                ],

                'choir' => 'Cherubini',
                'archangel' => 'Raziel',
                'element' => 'Aria',
                'zodiac_sign' => 'Gemelli',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 25,
                'regency_start_month' => 5,
                'regency_end_day' => 29,
                'regency_end_month' => 5,
                // Gradi
                'degree_start' => 5,
                'degree_end' => 10,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 9,
                'psalm_verse' => 19,
                'vulgata' => 9,
                'vulgata_verse' => 20,
                'psalm_link' => '/salmi/9',
                // Trigramma
                'trigram_sum' => 47,
                'trigram_reduction' => 11,
                // Contenuti
                'quality' => 'Giustizia, verità, difesa dei deboli e chiarezza morale.',
                'help' => 'Aiuta a ristabilire la verità, difende dalle ingiustizie e sostiene chi agisce con rettitudine.',
                'prevent' => 'Previene menzogna, abuso di potere, ingiustizia e perdita di integrità.',
                'keywords' => 'giustizia, verità, rettitudine, difesa, etica',
                'energy' => 'Maschile',
            ],
            [
                'number' => 15,
                'name' => 'Hariel',
                'hebrew_letters' => 'הרי',
                'hebrew_name' => 'הריאל',
                'letter_details' => [
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => 'purificazione'
                    ],
                    [
                        'letter' => 'ר',
                        'name' => 'Resh',
                        'value' => 200,
                        'meaning' => 'trasformazione mentale'
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => 'verità interiore'
                    ],
                ],

                'choir' => 'Cherubini',
                'archangel' => 'Raziel',
                'element' => 'Aria',
                'zodiac_sign' => 'Gemelli',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 30,
                'regency_start_month' => 5,
                'regency_end_day' => 3,
                'regency_end_month' => 6,
                // Gradi
                'degree_start' => 10,
                'degree_end' => 15,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 94,
                'psalm_verse' => 22,
                'vulgata' => 93,
                'vulgata_verse' => 22,
                'psalm_link' => '/salmi/94',
                // Trigramma
                'trigram_sum' => 215,
                'trigram_reduction' => 8,
                // Contenuti
                'quality' => 'Purificazione del pensiero, sincerità e desiderio di verità interiore.',
                'help' => 'Aiuta a liberarsi da falsità interiori, a chiarire le intenzioni e a ristabilire sincerità e semplicità.',
                'prevent' => 'Previene ipocrisia, autoinganno, rigidità mentale e confusione ideologica.',
                'keywords' => 'purificazione, sincerità, verità, chiarezza, semplicità',
                'energy' => 'Femminile',
            ],
            [
                'number' => 16,
                'name' => 'Hakamiah',
                'hebrew_letters' => 'חקמ',
                'hebrew_name' => 'חקמיה',
                'letter_details' => [
                    [
                        'letter' => 'ח',
                        'name' => 'Chet',
                        'value' => 8,
                        'meaning' => 'forza vitale'
                    ],
                    [
                        'letter' => 'ק',
                        'name' => 'Qof',
                        'value' => 100,
                        'meaning' => 'disciplina, ordine'
                    ],
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => 'responsabilità, maturità'
                    ],
                ],

                'choir' => 'Cherubini',
                'archangel' => 'Raziel',
                'element' => 'Aria',
                'zodiac_sign' => 'Gemelli',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 4,
                'regency_start_month' => 6,
                'regency_end_day' => 8,
                'regency_end_month' => 6,
                // Gradi
                'degree_start' => 15,
                'degree_end' => 20,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 88,
                'psalm_verse' => 3,
                'vulgata' => 87,
                'vulgata_verse' => 3,
                'psalm_link' => '/salmi/88',
                // Trigramma
                'trigram_sum' => 148,
                'trigram_reduction' => 13,
                // Contenuti
                'quality' => 'Lealtà, rettitudine morale, fedeltà ai principi e senso dell’onore.',
                'help' => 'Aiuta a mantenere coerenza, lealtà e rettitudine nelle scelte, rafforzando il senso dell’impegno e della responsabilità.',
                'prevent' => 'Previene tradimento dei valori, doppiezza, perdita di onore e incoerenza morale.',
                'keywords' => 'lealtà, onore, coerenza, fedeltà, rettitudine',
                'energy' => 'Maschile',
            ],
            // Troni
            [
                'number' => 17,
                'name' => 'Lauviah',
                'hebrew_letters' => 'לאו',
                'hebrew_name' => 'לאויה',
                'letter_details' => [
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => 'conoscenza interiore'
                    ],
                    [
                        'letter' => 'א',
                        'name' => 'Aleph',
                        'value' => 1,
                        'meaning' => 'silenzio, unità'
                    ],
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => 'canale di rivelazione'
                    ],
                ],

                'choir' => 'Troni',
                'archangel' => 'Tzaphkiel',
                'element' => 'Aria',
                'zodiac_sign' => 'Gemelli',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 9,
                'regency_start_month' => 6,
                'regency_end_day' => 13,
                'regency_end_month' => 6,
                // Gradi
                'degree_start' => 20,
                'degree_end' => 25,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 8,
                'psalm_verse' => 2,
                'vulgata' => 8,
                'vulgata_verse' => 3,
                'psalm_link' => '/salmi/8',
                // Trigramma
                'trigram_sum' => 37,
                'trigram_reduction' => 10,
                // Contenuti
                'quality' => 'Rivelazione attraverso il silenzio, comprensione profonda e lucidità interiore.',
                'help' => 'Aiuta a trovare chiarezza attraverso l’introspezione, favorendo intuizioni profonde e comprensione dei misteri interiori.',
                'prevent' => 'Previene agitazione mentale, rumore interiore, dispersione e confusione del pensiero.',
                'keywords' => 'silenzio, rivelazione, intuizione, lucidità, profondità',
                'energy' => 'Maschile',
            ],
            [
                'number' => 18,
                'name' => 'Caliel',
                'hebrew_letters' => 'כלי',
                'hebrew_name' => 'כליאל',
                'letter_details' => [
                    [
                        'letter' => 'כ',
                        'name' => 'Kaf',
                        'value' => 20,
                        'meaning' => 'capacità di contenere, forza applicata'
                    ],
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => 'discernimento, insegnamento'
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => 'verità, principio giusto'
                    ],
                ],

                'choir' => 'Troni',
                'archangel' => 'Tzaphkiel',
                'element' => 'Acqua',
                'zodiac_sign' => 'Cancro',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 14,
                'regency_start_month' => 6,
                'regency_end_day' => 18,
                'regency_end_month' => 6,
                // Gradi
                'degree_start' => 0,
                'degree_end' => 5,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 38,
                'psalm_verse' => 22,
                'vulgata' => 37,
                'vulgata_verse' => 23,
                'psalm_link' => '/salmi/38',
                // Trigramma
                'trigram_sum' => 60,
                'trigram_reduction' => 6,
                // Contenuti
                'quality' => 'Giustizia, verità nei giudizi e discernimento morale.',
                'help' => 'Aiuta a far emergere la verità, a difendersi dalle accuse ingiuste e a ristabilire equità e rettitudine.',
                'prevent' => 'Previene ingiustizia, falsi giudizi, accuse infondate e confusione etica.',
                'keywords' => 'giustizia, verità, equità, discernimento, difesa',
                'energy' => 'Femminile',
            ],
            [
                'number' => 19,
                'name' => 'Leuviah',
                'hebrew_letters' => 'לוו',
                'hebrew_name' => 'לויאה',
                'letter_details' => [
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => 'comprensione, apprendimento'
                    ],
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => 'connessione, continuità'
                    ],
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => 'memoria, prolungamento'
                    ],
                ],

                'choir' => 'Troni',
                'archangel' => 'Tzaphkiel',
                'element' => 'Acqua',
                'zodiac_sign' => 'Cancro',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 19,
                'regency_start_month' => 6,
                'regency_end_day' => 23,
                'regency_end_month' => 6,
                // Gradi
                'degree_start' => 5,
                'degree_end' => 10,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 40,
                'psalm_verse' => 13,
                'vulgata' => 39,
                'vulgata_verse' => 14,
                'psalm_link' => '/salmi/40',
                // Trigramma
                'trigram_sum' => 42,
                'trigram_reduction' => 6,
                // Contenuti
                'quality' => 'Memoria profonda, intelligenza emotiva e comprensione del passato.',
                'help' => 'Aiuta a comprendere le esperienze passate, a trasformare il ricordo in saggezza e a rafforzare la stabilità interiore.',
                'prevent' => 'Previene rimpianto sterile, malinconia paralizzante e attaccamento doloroso al passato.',
                'keywords' => 'memoria, comprensione, esperienza, saggezza, introspezione',
                'energy' => 'Maschile',
            ],
            [
                'number' => 20,
                'name' => 'Pahaliah',
                'hebrew_letters' => 'פהל',
                'hebrew_name' => 'פהליה',
                'letter_details' => [
                    [
                        'letter' => 'פ',
                        'name' => 'Pe',
                        'value' => 80,
                        'meaning' => 'parola, espressione'
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => 'vocazione, rivelazione'
                    ],
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => 'insegnamento, zelo'
                    ],
                ],

                'choir' => 'Troni',
                'archangel' => 'Tzaphkiel',
                'element' => 'Acqua',
                'zodiac_sign' => 'Cancro',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 24,
                'regency_start_month' => 6,
                'regency_end_day' => 28,
                'regency_end_month' => 6,
                // Gradi
                'degree_start' => 10,
                'degree_end' => 15,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 120,
                'psalm_verse' => 2,
                'vulgata' => 119,
                'vulgata_verse' => 2,
                'psalm_link' => '/salmi/120',
                // Trigramma
                'trigram_sum' => 115,
                'trigram_reduction' => 7,
                // Contenuti
                'quality' => 'Vocazione interiore, zelo spirituale e coerenza tra pensiero e azione.',
                'help' => 'Aiuta a riscoprire il senso della propria vocazione, rafforzando fedeltà ai principi e dedizione al bene.',
                'prevent' => 'Previene smarrimento morale, incoerenza, fanatismo sterile e perdita di direzione.',
                'keywords' => 'vocazione, coerenza, zelo, fedeltà, dedizione',
                'energy' => 'Femminile',
            ],
            [
                'number' => 21,
                'name' => 'Nelchael',
                'hebrew_letters' => 'נלכ',
                'hebrew_name' => 'נלכאל',
                'letter_details' => [
                    [
                        'letter' => 'נ',
                        'name' => 'Nun',
                        'value' => 50,
                        'meaning' => 'perseveranza, continuità'
                    ],
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => 'intelligenza applicata'
                    ],
                    [
                        'letter' => 'כ',
                        'name' => 'Kaf',
                        'value' => 20,
                        'meaning' => 'potere creativo'
                    ],
                ],

                'choir' => 'Troni',
                'archangel' => 'Tzaphkiel',
                'element' => 'Acqua',
                'zodiac_sign' => 'Cancro',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 29,
                'regency_start_month' => 6,
                'regency_end_day' => 3,
                'regency_end_month' => 7,
                // Gradi
                'degree_start' => 15,
                'degree_end' => 20,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 31,
                'psalm_verse' => 15,
                'vulgata' => 30,
                'vulgata_verse' => 15,
                'psalm_link' => '/salmi/31',
                // Trigramma
                'trigram_sum' => 100,
                'trigram_reduction' => 1,
                // Contenuti
                'quality' => 'Intelligenza analitica, capacità di apprendimento e chiarezza mentale.',
                'help' => 'Aiuta nello studio, nella comprensione profonda e nel superamento di blocchi mentali o confusione intellettuale.',
                'prevent' => 'Previene ignoranza ostinata, rigidità mentale e uso distorto della conoscenza.',
                'keywords' => 'conoscenza, studio, intelligenza, chiarezza, apprendimento',
                'energy' => 'Maschile',
            ],
            [
                'number' => 22,
                'name' => 'Ieiaiel',
                'hebrew_letters' => 'ייי',
                'hebrew_name' => 'יעיאל',
                'letter_details' => [
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => 'principio'
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => 'rafforzamento del principio'
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => 'unità assoluta'
                    ],
                ],

                'choir' => 'Troni',
                'archangel' => 'Tzaphkiel',
                'element' => 'Acqua',
                'zodiac_sign' => 'Cancro',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 4,
                'regency_start_month' => 7,
                'regency_end_day' => 8,
                'regency_end_month' => 7,
                // Gradi
                'degree_start' => 20,
                'degree_end' => 25,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 121,
                'psalm_verse' => 5,
                'vulgata' => 120,
                'vulgata_verse' => 5,
                'psalm_link' => '/salmi/121',
                // Trigramma
                'trigram_sum' => 30,
                'trigram_reduction' => 3,
                // Contenuti
                'quality' => 'Onore, discernimento e capacità di affrontare prove morali.',
                'help' => 'Aiuta a mantenere integrità, lucidità e fermezza nelle situazioni difficili o di confronto.',
                'prevent' => 'Previene compromessi dannosi, perdita di dignità e confusione nelle scelte.',
                'keywords' => 'onore, discernimento, integrità, fermezza, prova',
                'energy' => 'Femminile',
            ],
            [
                'number' => 23,
                'name' => 'Melahel',
                'hebrew_letters' => 'מלה',
                'hebrew_name' => 'מלאהל',
                'letter_details' => [
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => 'guarigione, flusso vitale'
                    ],
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => 'conoscenza naturale'
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => 'armonia, benedizione'
                    ],
                ],

                'choir' => 'Troni',
                'archangel' => 'Tzaphkiel',
                'element' => 'Acqua',
                'zodiac_sign' => 'Leone',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 9,
                'regency_start_month' => 7,
                'regency_end_day' => 13,
                'regency_end_month' => 7,
                // Gradi
                'degree_start' => 0,
                'degree_end' => 5,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 121,
                'psalm_verse' => 6,
                'vulgata' => 120,
                'vulgata_verse' => 6,
                'psalm_link' => '/salmi/121',
                // Trigramma
                'trigram_sum' => 75,
                'trigram_reduction' => 12,
                // Contenuti
                'quality' => 'Guarigione, equilibrio naturale e conoscenza delle leggi della vita.',
                'help' => 'Aiuta nella guarigione, nella protezione durante i viaggi e nel ristabilire armonia con la natura.',
                'prevent' => 'Previene squilibri, imprudenza, abuso delle forze vitali e disarmonia.',
                'keywords' => 'guarigione, equilibrio, natura, protezione, armonia',
                'energy' => 'Maschile',
            ],
            [
                'number' => 24,
                'name' => 'Hahuiah',
                'hebrew_letters' => 'חהו',
                'hebrew_name' => 'חאהויה',
                'letter_details' => [
                    [
                        'letter' => 'ח',
                        'name' => 'Chet',
                        'value' => 8,
                        'meaning' => 'protezione vitale'
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => 'rifugio, apertura'
                    ],
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => 'custodia, collegamento'
                    ],
                ],

                'choir' => 'Troni',
                'archangel' => 'Tzaphkiel',
                'element' => 'Acqua',
                'zodiac_sign' => 'Leone',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 14,
                'regency_start_month' => 7,
                'regency_end_day' => 18,
                'regency_end_month' => 7,
                // Gradi
                'degree_start' => 5,
                'degree_end' => 10,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 34,
                'psalm_verse' => 22,
                'vulgata' => 33,
                'vulgata_verse' => 22,
                'psalm_link' => '/salmi/34',
                // Trigramma
                'trigram_sum' => 19,
                'trigram_reduction' => 10,
                // Contenuti
                'quality' => 'Protezione divina, giustizia riparatrice e rifugio nei momenti difficili.',
                'help' => 'Aiuta a ottenere protezione nelle persecuzioni, a ristabilire giustizia e a trovare rifugio spirituale.',
                'prevent' => 'Previene esposizione inutile, ingiustizie subite in silenzio e perdita di fiducia.',
                'keywords' => 'protezione, giustizia, rifugio, sicurezza, difesa',
                'energy' => 'Femminile',
            ],
            // Dominazioni
            [
                'number' => 25,
                'name' => 'Nith-Haiah',
                'hebrew_letters' => 'נתה',
                'hebrew_name' => 'נתהאיה',
                'letter_details' => [
                    [
                        'letter' => 'נ',
                        'name' => 'Nun',
                        'value' => 50,
                        'meaning' => 'fedeltà, continuità'
                    ],
                    [
                        'letter' => 'ת',
                        'name' => 'Tav',
                        'value' => 400,
                        'meaning' => 'verità, compimento'
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => 'rivelazione, intuizione'
                    ],
                ],

                'choir' => 'Dominazioni',
                'archangel' => 'Tzadkiel',
                'element' => 'Fuoco',
                'zodiac_sign' => 'Leone',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 19,
                'regency_start_month' => 7,
                'regency_end_day' => 23,
                'regency_end_month' => 7,
                // Gradi
                'degree_start' => 10,
                'degree_end' => 15,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 9,
                'psalm_verse' => 1,
                'vulgata' => 9,
                'vulgata_verse' => 2,
                'psalm_link' => '/salmi/9',
                // Trigramma
                'trigram_sum' => 455,
                'trigram_reduction' => 14,
                // Contenuti
                'quality' => 'Sapienza profonda, intuizione dei misteri e comprensione delle leggi spirituali.',
                'help' => 'Aiuta a sviluppare intuizione, comprensione profonda e connessione con la conoscenza interiore.',
                'prevent' => 'Previene superficialità, confusione spirituale e uso improprio della conoscenza.',
                'keywords' => 'sapienza, intuizione, mistero, conoscenza, profondità',
                'energy' => 'Maschile',
            ],
            [
                'number' => 26,
                'name' => 'Haaiah',
                'hebrew_letters' => 'האא',
                'hebrew_name' => 'האאיה',
                'letter_details' => [
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => 'ascolto, apertura'
                    ],
                    [
                        'letter' => 'א',
                        'name' => 'Aleph',
                        'value' => 1,
                        'meaning' => 'equilibrio, unità'
                    ],
                    [
                        'letter' => 'א',
                        'name' => 'Aleph',
                        'value' => 1,
                        'meaning' => 'conferma dell’unità'
                    ],
                ],

                'choir' => 'Dominazioni',
                'archangel' => 'Tzadkiel',
                'element' => 'Fuoco',
                'zodiac_sign' => 'Leone',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 24,
                'regency_start_month' => 7,
                'regency_end_day' => 28,
                'regency_end_month' => 7,
                // Gradi
                'degree_start' => 15,
                'degree_end' => 20,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 119,
                'psalm_verse' => 145,
                'vulgata' => 118,
                'vulgata_verse' => 145,
                'psalm_link' => '/salmi/119',
                // Trigramma
                'trigram_sum' => 7,
                'trigram_reduction' => 7,
                // Contenuti
                'quality' => 'Discernimento politico e strategico, capacità di mediazione e diplomazia.',
                'help' => 'Aiuta a comprendere dinamiche complesse, a favorire mediazioni e a prendere decisioni ponderate.',
                'prevent' => 'Previene imprudenza, rigidità, conflitti inutili e mancanza di visione.',
                'keywords' => 'discernimento, strategia, mediazione, diplomazia, prudenza',
                'energy' => 'Femminile',
            ],
            [
                'number' => 27,
                'name' => 'Ierathel',
                'hebrew_letters' => 'ירת',
                'hebrew_name' => 'ירתאל',
                'letter_details' => [
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => 'verità attiva'
                    ],
                    [
                        'letter' => 'ר',
                        'name' => 'Resh',
                        'value' => 200,
                        'meaning' => 'forza morale'
                    ],
                    [
                        'letter' => 'ת',
                        'name' => 'Tav',
                        'value' => 400,
                        'meaning' => 'sigillo della verità'
                    ],
                ],

                'choir' => 'Dominazioni',
                'archangel' => 'Tzadkiel',
                'element' => 'Fuoco',
                'zodiac_sign' => 'Leone',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 29,
                'regency_start_month' => 7,
                'regency_end_day' => 2,
                'regency_end_month' => 8,
                // Gradi
                'degree_start' => 20,
                'degree_end' => 25,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 140,
                'psalm_verse' => 2,
                'vulgata' => 139,
                'vulgata_verse' => 2,
                'psalm_link' => '/salmi/140',
                // Trigramma
                'trigram_sum' => 610,
                'trigram_reduction' => 7,
                // Contenuti
                'quality' => 'Diffusione della verità, forza morale e capacità di contrastare l’errore.',
                'help' => 'Aiuta a difendere la verità, a contrastare menzogne e a rafforzare la chiarezza morale.',
                'prevent' => 'Previene inganno, propaganda falsa, debolezza etica e compromessi dannosi.',
                'keywords' => 'verità, forza morale, chiarezza, difesa, giustizia',
                'energy' => 'Maschile',
            ],
            [
                'number' => 28,
                'name' => 'Seheiah',
                'hebrew_letters' => 'שאה',
                'hebrew_name' => 'שאהיה',
                'letter_details' => [
                    [
                        'letter' => 'ש',
                        'name' => 'Shin',
                        'value' => 300,
                        'meaning' => 'trasformazione, fuoco'
                    ],
                    [
                        'letter' => 'א',
                        'name' => 'Aleph',
                        'value' => 1,
                        'meaning' => 'principio, unità'
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => 'protezione rivelata'
                    ],
                ],

                'choir' => 'Dominazioni',
                'archangel' => 'Tzadkiel',
                'element' => 'Fuoco',
                'zodiac_sign' => 'Leone',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 3,
                'regency_start_month' => 8,
                'regency_end_day' => 7,
                'regency_end_month' => 8,
                // Gradi
                'degree_start' => 25,
                'degree_end' => 30,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 71,
                'psalm_verse' => 20,
                'vulgata' => 70,
                'vulgata_verse' => 20,
                'psalm_link' => '/salmi/71',
                // Trigramma
                'trigram_sum' => 306,
                'trigram_reduction' => 9,
                // Contenuti
                'quality' => 'Protezione nelle avversità improvvise e capacità di prevenzione.',
                'help' => 'Aiuta a evitare incidenti, catastrofi e situazioni pericolose, favorendo prontezza e lucidità.',
                'prevent' => 'Previene imprudenza, esposizione al rischio e reazioni impulsive.',
                'keywords' => 'protezione, prudenza, prevenzione, sicurezza, lucidità',
                'energy' => 'Femminile',
            ],
            [
                'number' => 29,
                'name' => 'Reiyel',
                'hebrew_letters' => 'ריי',
                'hebrew_name' => 'ראיאל',
                'letter_details' => [
                    [
                        'letter' => 'ר',
                        'name' => 'Resh',
                        'value' => 200,
                        'meaning' => 'chiarezza mentale'
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => 'discernimento'
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => 'rafforzamento del discernimento'
                    ],
                ],

                'choir' => 'Dominazioni',
                'archangel' => 'Tzadkiel',
                'element' => 'Fuoco',
                'zodiac_sign' => 'Leone',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 8,
                'regency_start_month' => 8,
                'regency_end_day' => 12,
                'regency_end_month' => 8,
                // Gradi
                'degree_start' => 0,
                'degree_end' => 5,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 54,
                'psalm_verse' => 6,
                'vulgata' => 53,
                'vulgata_verse' => 6,
                'psalm_link' => '/salmi/54',
                // Trigramma
                'trigram_sum' => 220,
                'trigram_reduction' => 4,
                // Contenuti
                'quality' => 'Distacco dalle illusioni e discernimento della verità.',
                'help' => 'Aiuta a liberarsi da false convinzioni, a riconoscere la verità e a rafforzare la chiarezza interiore.',
                'prevent' => 'Previene fanatismo, autoinganno e rigidità ideologica.',
                'keywords' => 'verità, discernimento, distacco, chiarezza, libertà',
                'energy' => 'Maschile',
            ],
            [
                'number' => 30,
                'name' => 'Omahel',
                'hebrew_letters' => 'אום',
                'hebrew_name' => 'אומהאל',
                'letter_details' => [
                    [
                        'letter' => 'א',
                        'name' => 'Aleph',
                        'value' => 1,
                        'meaning' => 'armonia originaria'
                    ],
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => 'organizzazione, collegamento'
                    ],
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => 'espansione, fecondità'
                    ],
                ],

                'choir' => 'Dominazioni',
                'archangel' => 'Tzadkiel',
                'element' => 'Fuoco',
                'zodiac_sign' => 'Leone',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 13,
                'regency_start_month' => 8,
                'regency_end_day' => 17,
                'regency_end_month' => 8,
                // Gradi
                'degree_start' => 5,
                'degree_end' => 10,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 113,
                'psalm_verse' => 3,
                'vulgata' => 112,
                'vulgata_verse' => 3,
                'psalm_link' => '/salmi/113',
                // Trigramma
                'trigram_sum' => 71,
                'trigram_reduction' => 8,
                // Contenuti
                'quality' => 'Espansione armonica, organizzazione e amore per la bellezza.',
                'help' => 'Aiuta a sviluppare armonia, ordine e capacità di realizzazione pratica.',
                'prevent' => 'Previene disordine, dispersione di energie e mancanza di equilibrio.',
                'keywords' => 'armonia, ordine, realizzazione, equilibrio, bellezza',
                'energy' => 'Femminile',
            ],
            [
                'number' => 31,
                'name' => 'Lecabel',
                'hebrew_letters' => 'לכב',
                'hebrew_name' => 'לכבל',
                'letter_details' => [
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => 'conoscenza applicata'
                    ],
                    [
                        'letter' => 'כ',
                        'name' => 'Kaf',
                        'value' => 20,
                        'meaning' => 'potere di realizzare'
                    ],
                    [
                        'letter' => 'ב',
                        'name' => 'Bet',
                        'value' => 2,
                        'meaning' => 'struttura, stabilità'
                    ],
                ],

                'choir' => 'Dominazioni',
                'archangel' => 'Tzadkiel',
                'element' => 'Terra',
                'zodiac_sign' => 'Vergine',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 18,
                'regency_start_month' => 8,
                'regency_end_day' => 22,
                'regency_end_month' => 8,
                // Gradi
                'degree_start' => 10,
                'degree_end' => 15,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 71,
                'psalm_verse' => 19,
                'vulgata' => 70,
                'vulgata_verse' => 19,
                'psalm_link' => '/salmi/71',
                // Trigramma
                'trigram_sum' => 52,
                'trigram_reduction' => 7,
                // Contenuti
                'quality' => 'Precisione, metodo e capacità di calcolo e previsione.',
                'help' => 'Aiuta a organizzare, pianificare e risolvere problemi complessi con metodo e lucidità.',
                'prevent' => 'Previene disordine, approssimazione e uso improprio dell’intelligenza.',
                'keywords' => 'precisione, metodo, calcolo, organizzazione, previsione',
                'energy' => 'Maschile',
            ],
            [
                'number' => 32,
                'name' => 'Vasariah',
                'hebrew_letters' => 'ושר',
                'hebrew_name' => 'וסריה',
                'letter_details' => [
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => 'mediazione, collegamento'
                    ],
                    [
                        'letter' => 'ש',
                        'name' => 'Shin',
                        'value' => 300,
                        'meaning' => 'giustizia attiva'
                    ],
                    [
                        'letter' => 'ר',
                        'name' => 'Resh',
                        'value' => 200,
                        'meaning' => 'equilibrio mentale'
                    ],
                ],

                'choir' => 'Dominazioni',
                'archangel' => 'Tzadkiel',
                'element' => 'Terra',
                'zodiac_sign' => 'Vergine',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 23,
                'regency_start_month' => 8,
                'regency_end_day' => 27,
                'regency_end_month' => 8,
                // Gradi
                'degree_start' => 15,
                'degree_end' => 20,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 33,
                'psalm_verse' => 4,
                'vulgata' => 32,
                'vulgata_verse' => 4,
                'psalm_link' => '/salmi/33',
                // Trigramma
                'trigram_sum' => 216,
                'trigram_reduction' => 9,
                // Contenuti
                'quality' => 'Clemènza, giustizia equilibrata e capacità di mediazione.',
                'help' => 'Aiuta a ottenere indulgenza, a mitigare giudizi severi e a favorire riconciliazioni.',
                'prevent' => 'Previene rigidità morale, severità eccessiva e mancanza di compassione.',
                'keywords' => 'clemenza, giustizia, mediazione, equilibrio, indulgenza',
                'energy' => 'Femminile',
            ],
            // Potestà
            [
                'number' => 33,
                'name' => 'Iehuiah',
                'hebrew_letters' => 'יחו',
                'hebrew_name' => 'יהויה',
                'letter_details' => [
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => 'principio ordinatore'
                    ],
                    [
                        'letter' => 'ח',
                        'name' => 'Chet',
                        'value' => 8,
                        'meaning' => 'energia vitale'
                    ],
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => 'connessione all’ordine'
                    ],
                ],

                'choir' => 'Potestà',
                'archangel' => 'Camael',
                'element' => 'Terra',
                'zodiac_sign' => 'Vergine',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 28,
                'regency_start_month' => 8,
                'regency_end_day' => 1,
                'regency_end_month' => 9,
                // Gradi
                'degree_start' => 20,
                'degree_end' => 25,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 34,
                'psalm_verse' => 7,
                'vulgata' => 33,
                'vulgata_verse' => 8,
                'psalm_link' => '/salmi/34',
                // Trigramma
                'trigram_sum' => 22,
                'trigram_reduction' => 4,
                // Contenuti
                'quality' => 'Disciplina interiore, obbedienza consapevole e senso del dovere.',
                'help' => 'Aiuta a comprendere l’ordine, a rispettare leggi giuste e a esercitare responsabilità con equilibrio.',
                'prevent' => 'Previene ribellione cieca, abuso di potere e mancanza di disciplina.',
                'keywords' => 'disciplina, ordine, responsabilità, dovere, obbedienza',
                'energy' => 'Maschile',
            ],
            [
                'number' => 34,
                'name' => 'Lehahiah',
                'hebrew_letters' => 'להח',
                'hebrew_name' => 'לההאיה',
                'letter_details' => [
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => 'disciplina, apprendimento ordinato'
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => 'apertura alla legge superiore'
                    ],
                    [
                        'letter' => 'ח',
                        'name' => 'Chet',
                        'value' => 8,
                        'meaning' => 'forza morale, autocontrollo'
                    ],
                ],

                'choir' => 'Potestà',
                'archangel' => 'Camael',
                'element' => 'Terra',
                'zodiac_sign' => 'Vergine',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 2,
                'regency_start_month' => 9,
                'regency_end_day' => 6,
                'regency_end_month' => 9,
                // Gradi
                'degree_start' => 25,
                'degree_end' => 30,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 59,
                'psalm_verse' => 2,
                'vulgata' => 58,
                'vulgata_verse' => 2,
                'psalm_link' => '/salmi/59',
                // Trigramma
                'trigram_sum' => 43,
                'trigram_reduction' => 7,
                // Contenuti
                'quality' => 'Obbedienza equilibrata, disciplina interiore e rispetto dell’ordine.',
                'help' => 'Aiuta a vivere l’autorità in modo giusto, favorendo disciplina, autocontrollo e fedeltà ai principi.',
                'prevent' => 'Previene ribellione sterile, rigidità e conflitti con l’autorità.',
                'keywords' => 'disciplina, ordine, autorità, autocontrollo',
                'energy' => 'Femminile',
            ],
            [
                'number' => 35,
                'name' => 'Chavakiah',
                'hebrew_letters' => 'כוq',
                'hebrew_name' => 'כוכיה',
                'letter_details' => [
                    [
                        'letter' => 'כ',
                        'name' => 'Kaf',
                        'value' => 20,
                        'meaning' => 'capacità di contenere, protezione'
                    ],
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => 'unione, legame'
                    ],
                    [
                        'letter' => 'ק',
                        'name' => 'Qof',
                        'value' => 100,
                        'meaning' => 'purificazione del legame'
                    ],
                ],

                'choir' => 'Potestà',
                'archangel' => 'Camael',
                'element' => 'Terra',
                'zodiac_sign' => 'Vergine',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 7,
                'regency_start_month' => 9,
                'regency_end_day' => 11,
                'regency_end_month' => 9,
                // Gradi
                'degree_start' => 0,
                'degree_end' => 5,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 131,
                'psalm_verse' => 1,
                'vulgata' => 130,
                'vulgata_verse' => 1,
                'psalm_link' => '/salmi/131',
                // Trigramma
                'trigram_sum' => 126,
                'trigram_reduction' => 9,
                // Contenuti
                'quality' => 'Riconciliazione, armonia familiare e lealtà nei legami.',
                'help' => 'Aiuta a ristabilire pace nei rapporti familiari, favorendo fedeltà, rispetto e riconciliazione.',
                'prevent' => 'Previene rotture affettive, tradimenti e conflitti persistenti.',
                'keywords' => 'famiglia, riconciliazione, fedeltà, legami',
                'energy' => 'Maschile',
            ],
            [
                'number' => 36,
                'name' => 'Menadel',
                'hebrew_letters' => 'מנד',
                'hebrew_name' => 'מנדאל',
                'letter_details' => [
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => 'liberazione, flusso vitale'
                    ],
                    [
                        'letter' => 'נ',
                        'name' => 'Nun',
                        'value' => 50,
                        'meaning' => 'perseveranza, continuità'
                    ],
                    [
                        'letter' => 'ד',
                        'name' => 'Dalet',
                        'value' => 4,
                        'meaning' => 'passaggio, uscita da una condizione'
                    ],
                ],

                'choir' => 'Potestà',
                'archangel' => 'Camael',
                'element' => 'Terra',
                'zodiac_sign' => 'Vergine',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 12,
                'regency_start_month' => 9,
                'regency_end_day' => 16,
                'regency_end_month' => 9,
                // Gradi
                'degree_start' => 5,
                'degree_end' => 10,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 26,
                'psalm_verse' => 8,
                'vulgata' => 25,
                'vulgata_verse' => 8,
                'psalm_link' => '/salmi/26',
                // Trigramma
                'trigram_sum' => 94,
                'trigram_reduction' => 13,
                // Contenuti
                'quality' => 'Liberazione, recupero della dignità e ritorno all’equilibrio.',
                'help' => 'Aiuta a liberarsi da situazioni oppressive e a ritrovare stabilità e autonomia.',
                'prevent' => 'Previene sottomissione passiva, dipendenza e perdita di dignità.',
                'keywords' => 'liberazione, dignità, recupero, autonomia',
                'energy' => 'Femminile',
            ],
            [
                'number' => 37,
                'name' => 'Aniel',
                'hebrew_letters' => 'אני',
                'hebrew_name' => 'אניאל',
                'letter_details' => [
                    [
                        'letter' => 'א',
                        'name' => 'Aleph',
                        'value' => 1,
                        'meaning' => 'unità, principio superiore'
                    ],
                    [
                        'letter' => 'נ',
                        'name' => 'Nun',
                        'value' => 50,
                        'meaning' => 'continuità, rinnovamento'
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => 'scintilla divina, coscienza'
                    ],
                ],

                'choir' => 'Potestà',
                'archangel' => 'Camael',
                'element' => 'Aria',
                'zodiac_sign' => 'Bilancia',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 17,
                'regency_start_month' => 9,
                'regency_end_day' => 21,
                'regency_end_month' => 9,
                // Gradi
                'degree_start' => 10,
                'degree_end' => 15,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 79,
                'psalm_verse' => 8,
                'vulgata' => 78,
                'vulgata_verse' => 8,
                'psalm_link' => '/salmi/79',
                // Trigramma
                'trigram_sum' => 61,
                'trigram_reduction' => 7,
                // Contenuti
                'quality' => 'Elevazione spirituale, ritorno all’equilibrio e superamento delle prove.',
                'help' => 'Aiuta a rialzarsi dopo le cadute, favorendo rinnovamento interiore e fiducia.',
                'prevent' => 'Previene scoraggiamento, stagnazione e perdita di speranza.',
                'keywords' => 'rinnovamento, elevazione, equilibrio, fiducia',
                'energy' => 'Maschile',
            ],
            [
                'number' => 38,
                'name' => 'Haamiah',
                'hebrew_letters' => 'חעמ',
                'hebrew_name' => 'חעמיה',
                'letter_details' => [
                    [
                        'letter' => 'ח',
                        'name' => 'Chet',
                        'value' => 8,
                        'meaning' => 'forza vitale, protezione'
                    ],
                    [
                        'letter' => 'ע',
                        'name' => 'Ayin',
                        'value' => 70,
                        'meaning' => 'verità interiore, vigilanza'
                    ],
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => 'purificazione, rinnovamento'
                    ],
                ],

                'choir' => 'Potestà',
                'archangel' => 'Camael',
                'element' => 'Aria',
                'zodiac_sign' => 'Bilancia',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 22,
                'regency_start_month' => 9,
                'regency_end_day' => 26,
                'regency_end_month' => 9,
                // Gradi
                'degree_start' => 15,
                'degree_end' => 20,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 91,
                'psalm_verse' => 2,
                'vulgata' => 90,
                'vulgata_verse' => 2,
                'psalm_link' => '/salmi/91',
                // Trigramma
                'trigram_sum' => 118,
                'trigram_reduction' => 10,
                // Contenuti
                'quality' => 'Ritualità sacra, verità spirituale e protezione superiore.',
                'help' => 'Aiuta a mantenere purezza d’intento, protezione spirituale e fedeltà al sacro.',
                'prevent' => 'Previene profanazione, dispersione spirituale e falsità rituale.',
                'keywords' => 'sacro, protezione, purezza, verità',
                'energy' => 'Femminile',
            ],
            [
                'number' => 39,
                'name' => 'Rehael',
                'hebrew_letters' => 'רהע',
                'hebrew_name' => 'ראהאל',
                'letter_details' => [
                    [
                        'letter' => 'ר',
                        'name' => 'Resh',
                        'value' => 200,
                        'meaning' => 'trasformazione mentale'
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => 'guarigione, apertura'
                    ],
                    [
                        'letter' => 'ע',
                        'name' => 'Ayin',
                        'value' => 70,
                        'meaning' => 'comprensione profonda'
                    ],
                ],

                'choir' => 'Potestà',
                'archangel' => 'Camael',
                'element' => 'Aria',
                'zodiac_sign' => 'Bilancia',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 27,
                'regency_start_month' => 9,
                'regency_end_day' => 1,
                'regency_end_month' => 10,
                // Gradi
                'degree_start' => 20,
                'degree_end' => 25,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 30,
                'psalm_verse' => 3,
                'vulgata' => 29,
                'vulgata_verse' => 3,
                'psalm_link' => '/salmi/30',
                // Trigramma
                'trigram_sum' => 275,
                'trigram_reduction' => 14,
                // Contenuti
                'quality' => 'Guarigione dei legami familiari e rispetto dell’ordine naturale.',
                'help' => 'Aiuta a ristabilire armonia tra genitori e figli e a guarire ferite affettive.',
                'prevent' => 'Previene conflitti familiari, rotture affettive e disordine emotivo.',
                'keywords' => 'guarigione, famiglia, armonia, rispetto',
                'energy' => 'Maschile',
            ],
            [
                'number' => 40,
                'name' => 'Ieiazel',
                'hebrew_letters' => 'ייז',
                'hebrew_name' => 'ייזאל',
                'letter_details' => [
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => 'principio creativo'
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => 'rafforzamento del principio'
                    ],
                    [
                        'letter' => 'ז',
                        'name' => 'Zayin',
                        'value' => 7,
                        'meaning' => 'liberazione, discernimento'
                    ],
                ],

                'choir' => 'Potestà',
                'archangel' => 'Camael',
                'element' => 'Aria',
                'zodiac_sign' => 'Bilancia',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 2,
                'regency_start_month' => 10,
                'regency_end_day' => 6,
                'regency_end_month' => 10,
                // Gradi
                'degree_start' => 25,
                'degree_end' => 30,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 90,
                'psalm_verse' => 13,
                'vulgata' => 89,
                'vulgata_verse' => 13,
                'psalm_link' => '/salmi/90',
                // Trigramma
                'trigram_sum' => 27,
                'trigram_reduction' => 9,
                // Contenuti
                'quality' => 'Liberazione interiore, creatività e sollievo dalla sofferenza.',
                'help' => 'Aiuta a liberarsi da pesi interiori, favorendo creatività e rinnovamento.',
                'prevent' => 'Previene oppressione emotiva, blocchi creativi e malinconia.',
                'keywords' => 'liberazione, creatività, rinnovamento, sollievo',
                'energy' => 'Femminile',
            ],
            // Virtù
            [
                'number' => 41,
                'name' => 'Hahahel',
                'hebrew_letters' => 'ההה',
                'hebrew_name' => 'הההא',
                'letter_details' => [
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => 'rivelazione'
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => 'rafforzamento della rivelazione'
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => 'dedizione totale'
                    ],
                ],

                'choir' => 'Virtù',
                'archangel' => 'Raffaele',
                'element' => 'Aria',
                'zodiac_sign' => 'Bilancia',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 7,
                'regency_start_month' => 10,
                'regency_end_day' => 11,
                'regency_end_month' => 10,
                // Gradi
                'degree_start' => 0,
                'degree_end' => 5,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 119,
                'psalm_verse' => 145,
                'vulgata' => 118,
                'vulgata_verse' => 145,
                'psalm_link' => '/salmi/119',
                // Trigramma
                'trigram_sum' => 15,
                'trigram_reduction' => 6,
                // Contenuti
                'quality' => 'Missione spirituale, dedizione e fedeltà assoluta.',
                'help' => 'Aiuta a vivere una vocazione spirituale con fedeltà e coerenza.',
                'prevent' => 'Previene incoerenza, tiepidezza e perdita di direzione spirituale.',
                'keywords' => 'vocazione, dedizione, fedeltà, missione',
                'energy' => 'Maschile',
            ],
            [
                'number' => 42,
                'name' => 'Mikael',
                'hebrew_letters' => 'מיכ',
                'hebrew_name' => 'מיכאל',
                'letter_details' => [
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => 'equilibrio emotivo'
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => 'verità'
                    ],
                    [
                        'letter' => 'כ',
                        'name' => 'Kaf',
                        'value' => 20,
                        'meaning' => 'giustizia applicata'
                    ],
                ],

                'choir' => 'Virtù',
                'archangel' => 'Raffaele',
                'element' => 'Acqua',
                'zodiac_sign' => 'Scorpione',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 12,
                'regency_start_month' => 10,
                'regency_end_day' => 16,
                'regency_end_month' => 10,
                // Gradi
                'degree_start' => 5,
                'degree_end' => 10,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 120,
                'psalm_verse' => 5,
                'vulgata' => 119,
                'vulgata_verse' => 5,
                'psalm_link' => '/salmi/120',
                // Trigramma
                'trigram_sum' => 70,
                'trigram_reduction' => 7,
                // Contenuti
                'quality' => 'Equilibrio affettivo, giustizia e armonia nelle relazioni.',
                'help' => 'Aiuta a mantenere armonia, lealtà e correttezza nei rapporti.',
                'prevent' => 'Previene instabilità emotiva, ingiustizia e conflitti relazionali.',
                'keywords' => 'equilibrio, giustizia, armonia, relazioni',
                'energy' => 'Femminile',
            ],
            [
                'number' => 43,
                'name' => 'Vehuel',
                'hebrew_letters' => 'וול',
                'hebrew_name' => 'והואל',
                'letter_details' => [
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => 'connessione, canale'
                    ],
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => 'rafforzamento della connessione'
                    ],
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => 'elevazione, comprensione'
                    ],
                ],

                'choir' => 'Virtù',
                'archangel' => 'Raffaele',
                'element' => 'Acqua',
                'zodiac_sign' => 'Scorpione',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 17,
                'regency_start_month' => 10,
                'regency_end_day' => 21,
                'regency_end_month' => 10,
                // Gradi
                'degree_start' => 10,
                'degree_end' => 15,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 88,
                'psalm_verse' => 11,
                'vulgata' => 87,
                'vulgata_verse' => 11,
                'psalm_link' => '/salmi/88',
                // Trigramma
                'trigram_sum' => 42,
                'trigram_reduction' => 6,
                // Contenuti
                'quality' => 'Elevazione spirituale e aspirazione al bene.',
                'help' => 'Aiuta a innalzare lo spirito e a mantenere ideali elevati.',
                'prevent' => 'Previene materialismo, scoraggiamento e perdita di ideali.',
                'keywords' => 'elevazione, spiritualità, ideali, aspirazione',
                'energy' => 'Maschile',
            ],
            [
                'number' => 44,
                'name' => 'Ielahiah',
                'hebrew_letters' => 'ילה',
                'hebrew_name' => 'ילהאיה',
                'letter_details' => [
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => 'principio ordinatore'
                    ],
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => 'legge, disciplina'
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => 'rivelazione, protezione'
                    ],
                ],

                'choir' => 'Virtù',
                'archangel' => 'Raffaele',
                'element' => 'Acqua',
                'zodiac_sign' => 'Scorpione',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 22,
                'regency_start_month' => 10,
                'regency_end_day' => 26,
                'regency_end_month' => 10,
                // Gradi
                'degree_start' => 15,
                'degree_end' => 20,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 98,
                'psalm_verse' => 5,
                'vulgata' => 97,
                'vulgata_verse' => 5,
                'psalm_link' => '/salmi/98',
                // Trigramma
                'trigram_sum' => 45,
                'trigram_reduction' => 9,
                // Contenuti
                'quality' => 'Coraggio morale, giustizia e lealtà.',
                'help' => 'Aiuta a combattere per ciò che è giusto con coraggio e rettitudine.',
                'prevent' => 'Previene vigliaccheria, ingiustizia e abuso di potere.',
                'keywords' => 'coraggio, giustizia, lealtà, rettitudine',
                'energy' => 'Femminile',
            ],
            [
                'number' => 45,
                'name' => 'Sehaliah',
                'hebrew_letters' => 'סאל',
                'hebrew_name' => 'סהליה',
                'letter_details' => [
                    [
                        'letter' => 'ס',
                        'name' => 'Samekh',
                        'value' => 60,
                        'meaning' => 'sostegno, protezione'
                    ],
                    [
                        'letter' => 'א',
                        'name' => 'Aleph',
                        'value' => 1,
                        'meaning' => 'unità, equilibrio'
                    ],
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => 'correzione, insegnamento'
                    ],
                ],

                'choir' => 'Virtù',
                'archangel' => 'Raffaele',
                'element' => 'Acqua',
                'zodiac_sign' => 'Scorpione',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 27,
                'regency_start_month' => 10,
                'regency_end_day' => 31,
                'regency_end_month' => 10,
                // Gradi
                'degree_start' => 20,
                'degree_end' => 25,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 60,
                'psalm_verse' => 6,
                'vulgata' => 59,
                'vulgata_verse' => 6,
                'psalm_link' => '/salmi/60',
                // Trigramma
                'trigram_sum' => 91,
                'trigram_reduction' => 10,
                // Contenuti
                'quality' => 'Protezione, recupero dell’equilibrio e forza morale.',
                'help' => 'Aiuta a superare avversità e a ristabilire equilibrio interiore.',
                'prevent' => 'Previene crolli emotivi, instabilità e perdita di forza.',
                'keywords' => 'protezione, equilibrio, forza, recupero',
                'energy' => 'Maschile',
            ],
            [
                'number' => 46,
                'name' => 'Ariel',
                'hebrew_letters' => 'ערי',
                'hebrew_name' => 'אריאל',
                'letter_details' => [
                    [
                        'letter' => 'ע',
                        'name' => 'Ayin',
                        'value' => 70,
                        'meaning' => 'percezione profonda, rivelazione'
                    ],
                    [
                        'letter' => 'ר',
                        'name' => 'Resh',
                        'value' => 200,
                        'meaning' => 'trasformazione, rinnovamento'
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => 'manifestazione del principio'
                    ],
                ],

                'choir' => 'Virtù',
                'archangel' => 'Raffaele',
                'element' => 'Acqua',
                'zodiac_sign' => 'Scorpione',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 1,
                'regency_start_month' => 11,
                'regency_end_day' => 5,
                'regency_end_month' => 11,
                // Gradi
                'degree_start' => 25,
                'degree_end' => 30,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 145,
                'psalm_verse' => 9,
                'vulgata' => 144,
                'vulgata_verse' => 9,
                'psalm_link' => '/salmi/145',
                // Trigramma
                'trigram_sum' => 280,
                'trigram_reduction' => 10,
                // Contenuti
                'quality' => 'Rivelazione interiore, intuizione e scoperta del senso profondo.',
                'help' => 'Aiuta a scoprire verità interiori e a sviluppare intuizione e consapevolezza.',
                'prevent' => 'Previene confusione, superficialità e cecità interiore.',
                'keywords' => 'rivelazione, intuizione, consapevolezza, verità',
                'energy' => 'Femminile',
            ],
            [
                'number' => 47,
                'name' => 'Asaliah',
                'hebrew_letters' => 'עשל',
                'hebrew_name' => 'עסאליה',
                'letter_details' => [
                    [
                        'letter' => 'ע',
                        'name' => 'Ayin',
                        'value' => 70,
                        'meaning' => 'ricerca interiore'
                    ],
                    [
                        'letter' => 'ש',
                        'name' => 'Shin',
                        'value' => 300,
                        'meaning' => 'trasformazione profonda'
                    ],
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => 'comprensione superiore'
                    ],
                ],

                'choir' => 'Virtù',
                'archangel' => 'Raffaele',
                'element' => 'Fuoco',
                'zodiac_sign' => 'Sagittario',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 6,
                'regency_start_month' => 11,
                'regency_end_day' => 10,
                'regency_end_month' => 11,
                // Gradi
                'degree_start' => 0,
                'degree_end' => 5,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 104,
                'psalm_verse' => 24,
                'vulgata' => 103,
                'vulgata_verse' => 24,
                'psalm_link' => '/salmi/104',
                // Trigramma
                'trigram_sum' => 400,
                'trigram_reduction' => 4,
                // Contenuti
                'quality' => 'Comprensione delle leggi spirituali e ricerca della verità.',
                'help' => 'Aiuta a comprendere il senso profondo dell’esistenza e delle leggi divine.',
                'prevent' => 'Previene ignoranza spirituale, fanatismo e confusione dottrinale.',
                'keywords' => 'verità, conoscenza, comprensione, ricerca',
                'energy' => 'Maschile',
            ],
            [
                'number' => 48,
                'name' => 'Mihel',
                'hebrew_letters' => 'מיה',
                'hebrew_name' => 'מיהאל',
                'letter_details' => [
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => 'armonia, flusso emotivo'
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => 'amore puro'
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => 'unione, affinità'
                    ],
                ],

                'choir' => 'Virtù',
                'archangel' => 'Raffaele',
                'element' => 'Fuoco',
                'zodiac_sign' => 'Sagittario',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 11,
                'regency_start_month' => 11,
                'regency_end_day' => 15,
                'regency_end_month' => 11,
                // Gradi
                'degree_start' => 5,
                'degree_end' => 10,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 33,
                'psalm_verse' => 20,
                'vulgata' => 32,
                'vulgata_verse' => 20,
                'psalm_link' => '/salmi/33',
                // Trigramma
                'trigram_sum' => 55,
                'trigram_reduction' => 10,
                // Contenuti
                'quality' => 'Amore sincero, armonia affettiva e pace interiore.',
                'help' => 'Aiuta a vivere relazioni basate su amore autentico e rispetto reciproco.',
                'prevent' => 'Previene conflitti affettivi, freddezza emotiva e solitudine.',
                'keywords' => 'amore, armonia, relazione, pace',
                'energy' => 'Femminile',
            ],
            // Principati
            [
                'number' => 49,
                'name' => 'Vehuel',
                'hebrew_letters' => 'והל',
                'hebrew_name' => 'והואל',
                'letter_details' => [
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => 'canalizzazione, collegamento'
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => 'elevazione, rivelazione'
                    ],
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => 'aspirazione, elevazione'
                    ],
                ],

                'choir' => 'Principati',
                'archangel' => 'Haniel',
                'element' => 'Fuoco',
                'zodiac_sign' => 'Sagittario',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 16,
                'regency_start_month' => 11,
                'regency_end_day' => 20,
                'regency_end_month' => 11,
                // Gradi
                'degree_start' => 10,
                'degree_end' => 15,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 88,
                'psalm_verse' => 13,
                'vulgata' => 87,
                'vulgata_verse' => 13,
                'psalm_link' => '/salmi/88',
                // Trigramma
                'trigram_sum' => 41,
                'trigram_reduction' => 5,
                // Contenuti
                'quality' => 'Nobiltà d’animo, elevazione e aspirazione spirituale.',
                'help' => 'Aiuta a elevare lo spirito e a vivere con ideali alti.',
                'prevent' => 'Previene materialismo, bassezza morale e perdita di ideali.',
                'keywords' => 'elevazione, ideali, nobiltà, aspirazione',
                'energy' => 'Maschile',
            ],
            [
                'number' => 50,
                'name' => 'Daniel',
                'hebrew_letters' => 'דני',
                'hebrew_name' => 'דניאל',
                'letter_details' => [
                    [
                        'letter' => 'ד',
                        'name' => 'Dalet',
                        'value' => 4,
                        'meaning' => 'passaggio, umiltà'
                    ],
                    [
                        'letter' => 'נ',
                        'name' => 'Nun',
                        'value' => 50,
                        'meaning' => 'perseveranza, giustizia'
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => 'giudizio illuminato'
                    ],
                ],

                'choir' => 'Principati',
                'archangel' => 'Haniel',
                'element' => 'Fuoco',
                'zodiac_sign' => 'Sagittario',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 21,
                'regency_start_month' => 11,
                'regency_end_day' => 25,
                'regency_end_month' => 11,
                // Gradi
                'degree_start' => 15,
                'degree_end' => 20,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 103,
                'psalm_verse' => 8,
                'vulgata' => 102,
                'vulgata_verse' => 8,
                'psalm_link' => '/salmi/103',
                // Trigramma
                'trigram_sum' => 64,
                'trigram_reduction' => 10,
                // Contenuti
                'quality' => 'Eloquenza, diplomazia e senso della giustizia.',
                'help' => 'Aiuta a comunicare con saggezza e a risolvere conflitti con equilibrio.',
                'prevent' => 'Previene durezza, arroganza e ingiustizia verbale.',
                'keywords' => 'eloquenza, giustizia, diplomazia, saggezza',
                'energy' => 'Femminile',
            ],
            [
                'number' => 51,
                'name' => 'Hahasiah',
                'hebrew_letters' => 'חחש',
                'hebrew_name' => 'חחשיה',
                'letter_details' => [
                    [
                        'letter' => 'ח',
                        'name' => 'Chet',
                        'value' => 8,
                        'meaning' => 'guarigione vitale'
                    ],
                    [
                        'letter' => 'ח',
                        'name' => 'Chet',
                        'value' => 8,
                        'meaning' => 'rafforzamento della guarigione'
                    ],
                    [
                        'letter' => 'ש',
                        'name' => 'Shin',
                        'value' => 300,
                        'meaning' => 'trasformazione profonda'
                    ],
                ],

                'choir' => 'Principati',
                'archangel' => 'Haniel',
                'element' => 'Fuoco',
                'zodiac_sign' => 'Sagittario',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 26,
                'regency_start_month' => 11,
                'regency_end_day' => 30,
                'regency_end_month' => 11,
                // Gradi
                'degree_start' => 20,
                'degree_end' => 25,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 104,
                'psalm_verse' => 30,
                'vulgata' => 103,
                'vulgata_verse' => 30,
                'psalm_link' => '/salmi/104',
                // Trigramma
                'trigram_sum' => 316,
                'trigram_reduction' => 10,
                // Contenuti
                'quality' => 'Guarigione spirituale e conoscenza delle leggi naturali.',
                'help' => 'Aiuta a comprendere e utilizzare le forze della natura per il bene.',
                'prevent' => 'Previene abuso di conoscenza e disarmonia con le leggi naturali.',
                'keywords' => 'guarigione, conoscenza, natura, armonia',
                'energy' => 'Maschile',
            ],
            [
                'number' => 52,
                'name' => 'Imamiah',
                'hebrew_letters' => 'עממ',
                'hebrew_name' => 'עממיה',
                'letter_details' => [
                    [
                        'letter' => 'ע',
                        'name' => 'Ayin',
                        'value' => 70,
                        'meaning' => 'presa di coscienza, visione profonda'
                    ],
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => 'purificazione, liberazione'
                    ],
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => 'rafforzamento della liberazione'
                    ],
                ],

                'choir' => 'Principati',
                'archangel' => 'Haniel',
                'element' => 'Fuoco',
                'zodiac_sign' => 'Sagittario',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 1,
                'regency_start_month' => 12,
                'regency_end_day' => 5,
                'regency_end_month' => 12,
                // Gradi
                'degree_start' => 25,
                'degree_end' => 30,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 7,
                'psalm_verse' => 9,
                'vulgata' => 7,
                'vulgata_verse' => 10,
                'psalm_link' => '/salmi/7',
                // Trigramma
                'trigram_sum' => 150,
                'trigram_reduction' => 6,
                // Contenuti
                'quality' => 'Liberazione dalle prove, forza nel superare gli ostacoli.',
                'help' => 'Aiuta a liberarsi da situazioni difficili e a superare prove interiori.',
                'prevent' => 'Previene sottomissione, senso di colpa e auto-sabotaggio.',
                'keywords' => 'liberazione, prova, superamento, forza',
                'energy' => 'Femminile',
            ],
            [
                'number' => 53,
                'name' => 'Nanael',
                'hebrew_letters' => 'ננא',
                'hebrew_name' => 'ננאאל',
                'letter_details' => [
                    [
                        'letter' => 'נ',
                        'name' => 'Nun',
                        'value' => 50,
                        'meaning' => 'fedeltà, perseveranza'
                    ],
                    [
                        'letter' => 'נ',
                        'name' => 'Nun',
                        'value' => 50,
                        'meaning' => 'rafforzamento della perseveranza'
                    ],
                    [
                        'letter' => 'א',
                        'name' => 'Aleph',
                        'value' => 1,
                        'meaning' => 'unità spirituale'
                    ],
                ],

                'choir' => 'Principati',
                'archangel' => 'Haniel',
                'element' => 'Terra',
                'zodiac_sign' => 'Capricorno',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 6,
                'regency_start_month' => 12,
                'regency_end_day' => 10,
                'regency_end_month' => 12,
                // Gradi
                'degree_start' => 0,
                'degree_end' => 5,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 119,
                'psalm_verse' => 18,
                'vulgata' => 118,
                'vulgata_verse' => 18,
                'psalm_link' => '/salmi/119',
                // Trigramma
                'trigram_sum' => 101,
                'trigram_reduction' => 2,
                // Contenuti
                'quality' => 'Conoscenza spirituale, contemplazione e profondità interiore.',
                'help' => 'Aiuta a sviluppare saggezza, meditazione e comprensione del sacro.',
                'prevent' => 'Previene superficialità, materialismo e chiusura spirituale.',
                'keywords' => 'saggezza, contemplazione, spiritualità, conoscenza',
                'energy' => 'Maschile',
            ],
            [
                'number' => 54,
                'name' => 'Nithael',
                'hebrew_letters' => 'נית',
                'hebrew_name' => 'ניתאל',
                'letter_details' => [
                    [
                        'letter' => 'נ',
                        'name' => 'Nun',
                        'value' => 50,
                        'meaning' => 'continuità, stabilità'
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => 'autorità legittima'
                    ],
                    [
                        'letter' => 'ת',
                        'name' => 'Tav',
                        'value' => 400,
                        'meaning' => 'coronamento, permanenza'
                    ],
                ],

                'choir' => 'Principati',
                'archangel' => 'Haniel',
                'element' => 'Terra',
                'zodiac_sign' => 'Capricorno',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 11,
                'regency_start_month' => 12,
                'regency_end_day' => 15,
                'regency_end_month' => 12,
                // Gradi
                'degree_start' => 5,
                'degree_end' => 10,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 103,
                'psalm_verse' => 19,
                'vulgata' => 102,
                'vulgata_verse' => 19,
                'psalm_link' => '/salmi/103',
                // Trigramma
                'trigram_sum' => 460,
                'trigram_reduction' => 10,
                // Contenuti
                'quality' => 'Stabilità, legittimazione e consolidamento del potere.',
                'help' => 'Aiuta a mantenere posizioni di responsabilità con equilibrio e giustizia.',
                'prevent' => 'Previene abuso di potere, instabilità e cadute improvvise.',
                'keywords' => 'stabilità, autorità, consolidamento, responsabilità',
                'energy' => 'Femminile',
            ],
            [
                'number' => 55,
                'name' => 'Mebaiah',
                'hebrew_letters' => 'מבה',
                'hebrew_name' => 'מבהאל',
                'letter_details' => [
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => 'comprensione profonda, interiorizzazione'
                    ],
                    [
                        'letter' => 'ב',
                        'name' => 'Bet',
                        'value' => 2,
                        'meaning' => 'struttura, fondamento'
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => 'rivelazione, coscienza'
                    ],
                ],

                'choir' => 'Principati',
                'archangel' => 'Haniel',
                'element' => 'Terra',
                'zodiac_sign' => 'Capricorno',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 16,
                'regency_start_month' => 12,
                'regency_end_day' => 20,
                'regency_end_month' => 12,
                // Gradi
                'degree_start' => 10,
                'degree_end' => 15,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 102,
                'psalm_verse' => 1,
                'vulgata' => 101,
                'vulgata_verse' => 1,
                'psalm_link' => '/salmi/102',
                // Trigramma
                'trigram_sum' => 47,
                'trigram_reduction' => 11,
                // Contenuti
                'quality' => 'Consapevolezza morale, responsabilità e senso del dovere.',
                'help' => 'Aiuta a vivere con rettitudine e responsabilità le proprie scelte.',
                'prevent' => 'Previene leggerezza morale, disordine interiore e incoerenza.',
                'keywords' => 'responsabilità, coscienza, rettitudine, dovere',
                'energy' => 'Maschile',
            ],
            [
                'number' => 56,
                'name' => 'Poiel',
                'hebrew_letters' => 'פוי',
                'hebrew_name' => 'פואל',
                'letter_details' => [
                    [
                        'letter' => 'פ',
                        'name' => 'Pe',
                        'value' => 80,
                        'meaning' => 'parola efficace, richiesta'
                    ],
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => 'canalizzazione, attrazione'
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => 'realizzazione del desiderio'
                    ],
                ],

                'choir' => 'Principati',
                'archangel' => 'Haniel',
                'element' => 'Terra',
                'zodiac_sign' => 'Capricorno',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 21,
                'regency_start_month' => 12,
                'regency_end_day' => 25,
                'regency_end_month' => 12,
                // Gradi
                'degree_start' => 15,
                'degree_end' => 20,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 145,
                'psalm_verse' => 19,
                'vulgata' => 144,
                'vulgata_verse' => 19,
                'psalm_link' => '/salmi/145',
                // Trigramma
                'trigram_sum' => 96,
                'trigram_reduction' => 15,
                // Contenuti
                'quality' => 'Realizzazione, successo legittimo e soddisfazione dei bisogni.',
                'help' => 'Aiuta a ottenere ciò che è giusto e necessario con equilibrio.',
                'prevent' => 'Previene avidità, desideri eccessivi e frustrazione.',
                'keywords' => 'realizzazione, successo, desiderio, equilibrio',
                'energy' => 'Femminile',
            ],
            // Arcangeli
            [
                'number' => 57,
                'name' => 'Nemamiah',
                'hebrew_letters' => 'נממ',
                'hebrew_name' => 'נממיה',
                'letter_details' => [
                    [
                        'letter' => 'נ',
                        'name' => 'Nun',
                        'value' => 50,
                        'meaning' => 'coraggio, perseveranza'
                    ],
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => 'strategia, adattamento'
                    ],
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => 'rafforzamento della strategia'
                    ],
                ],

                'choir' => 'Arcangeli',
                'archangel' => 'Michele',
                'element' => 'Terra',
                'zodiac_sign' => 'Capricorno',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 26,
                'regency_start_month' => 12,
                'regency_end_day' => 30,
                'regency_end_month' => 12,
                // Gradi
                'degree_start' => 20,
                'degree_end' => 25,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 115,
                'psalm_verse' => 11,
                'vulgata' => 113,
                'vulgata_verse' => 11,
                'psalm_link' => '/salmi/115',
                // Trigramma
                'trigram_sum' => 130,
                'trigram_reduction' => 4,
                // Contenuti
                'quality' => 'Strategia, coraggio e difesa del giusto.',
                'help' => 'Aiuta a superare prove difficili con determinazione e intelligenza.',
                'prevent' => 'Previene scoraggiamento, imprudenza e azioni sconsiderate.',
                'keywords' => 'coraggio, strategia, difesa, determinazione',
                'energy' => 'Maschile',
            ],
            [
                'number' => 58,
                'name' => 'Ieialel',
                'hebrew_letters' => 'ייל',
                'hebrew_name' => 'יעיאל',
                'letter_details' => [
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => 'lucidità, principio di verità'
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => 'rafforzamento della lucidità'
                    ],
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => 'discernimento, apprendimento'
                    ],
                ],
            
                'choir' => 'Arcangeli',
                'archangel' => 'Michele',
                'element' => 'Aria',
                'zodiac_sign' => 'Acquario',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 31,
                'regency_start_month' => 12,
                'regency_end_day' => 4,
                'regency_end_month' => 1,
                // Gradi
                'degree_start' => 25,
                'degree_end' => 30,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 99,
                'psalm_verse' => 5,
                'vulgata' => 98,
                'vulgata_verse' => 5,
                'psalm_link' => '/salmi/99',
                // Trigramma
                'trigram_sum' => 50,
                'trigram_reduction' => 5,
                // Contenuti
                'quality' => 'Chiarezza mentale, logica e capacità di giudizio.',
                'help' => 'Aiuta a prendere decisioni lucide e a distinguere il vero dal falso.',
                'prevent' => 'Previene confusione mentale, illusioni e autoinganno.',
                'keywords' => 'lucidità, discernimento, verità, giudizio',
                'energy' => 'Femminile',
            ],
            [
                'number' => 59,
                'name' => 'Harahel',
                'hebrew_letters' => 'הרח',
                'hebrew_name' => 'הראהל',
                'letter_details' => [
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => 'espansione, apertura'
                    ],
                    [
                        'letter' => 'ר',
                        'name' => 'Resh',
                        'value' => 200,
                        'meaning' => 'intelligenza applicata'
                    ],
                    [
                        'letter' => 'ח',
                        'name' => 'Chet',
                        'value' => 8,
                        'meaning' => 'forza vitale'
                    ],
                ],
            
                'choir' => 'Arcangeli',
                'archangel' => 'Michele',
                'element' => 'Aria',
                'zodiac_sign' => 'Acquario',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 5,
                'regency_start_month' => 1,
                'regency_end_day' => 9,
                'regency_end_month' => 1,
                // Gradi
                'degree_start' => 0,
                'degree_end' => 5,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 113,
                'psalm_verse' => 3,
                'vulgata' => 112,
                'vulgata_verse' => 3,
                'psalm_link' => '/salmi/113',
                // Trigramma
                'trigram_sum' => 213,
                'trigram_reduction' => 6,
                // Contenuti
                'quality' => 'Espansione intellettuale, organizzazione e fecondità mentale.',
                'help' => 'Aiuta a sviluppare intelligenza pratica e capacità organizzative.',
                'prevent' => 'Previene disordine mentale, sterilità creativa e dispersione.',
                'keywords' => 'intelligenza, organizzazione, espansione, creatività',
                'energy' => 'Maschile',
            ],
            [
                'number' => 60,
                'name' => 'Mitzrael',
                'hebrew_letters' => 'מצר',
                'hebrew_name' => 'מצראל',
                'letter_details' => [
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => 'correzione, riequilibrio'
                    ],
                    [
                        'letter' => 'צ',
                        'name' => 'Tsadi',
                        'value' => 90,
                        'meaning' => 'giustizia, rettitudine'
                    ],
                    [
                        'letter' => 'ר',
                        'name' => 'Resh',
                        'value' => 200,
                        'meaning' => 'ristrutturazione mentale'
                    ],
                ],
            
                'choir' => 'Arcangeli',
                'archangel' => 'Michele',
                'element' => 'Aria',
                'zodiac_sign' => 'Acquario',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 10,
                'regency_start_month' => 1,
                'regency_end_day' => 14,
                'regency_end_month' => 1,
                // Gradi
                'degree_start' => 5,
                'degree_end' => 10,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 145,
                'psalm_verse' => 10,
                'vulgata' => 144,
                'vulgata_verse' => 10,
                'psalm_link' => '/salmi/145',
                // Trigramma
                'trigram_sum' => 330,
                'trigram_reduction' => 6,
                // Contenuti
                'quality' => 'Riequilibrio mentale, correzione e guarigione interiore.',
                'help' => 'Aiuta a correggere squilibri interiori e a ritrovare chiarezza.',
                'prevent' => 'Previene rigidità mentale, disordine e distorsioni interiori.',
                'keywords' => 'riequilibrio, correzione, chiarezza, guarigione',
                'energy' => 'Femminile',
            ],
            [
                'number' => 61,
                'name' => 'Umabel',
                'hebrew_letters' => 'אומ',
                'hebrew_name' => 'אומאל',
                'letter_details' => [
                    [
                        'letter' => 'א',
                        'name' => 'Aleph',
                        'value' => 1,
                        'meaning' => 'unità, armonia'
                    ],
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => 'legame, connessione'
                    ],
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => 'comprensione, flusso emotivo'
                    ],
                ],
            
                'choir' => 'Arcangeli',
                'archangel' => 'Michele',
                'element' => 'Aria',
                'zodiac_sign' => 'Acquario',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 15,
                'regency_start_month' => 1,
                'regency_end_day' => 19,
                'regency_end_month' => 1,
                // Gradi
                'degree_start' => 10,
                'degree_end' => 15,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 16,
                'psalm_verse' => 11,
                'vulgata' => 15,
                'vulgata_verse' => 11,
                'psalm_link' => '/salmi/16',
                // Trigramma
                'trigram_sum' => 47,
                'trigram_reduction' => 11,
                // Contenuti
                'quality' => 'Amicizia sincera, armonia e comprensione reciproca.',
                'help' => 'Aiuta a costruire relazioni basate su fiducia e rispetto.',
                'prevent' => 'Previene isolamento, incomprensioni e freddezza emotiva.',
                'keywords' => 'amicizia, armonia, comprensione, fiducia',
                'energy' => 'Maschile',
            ],
            [
                'number' => 62,
                'name' => 'Iahhel',
                'hebrew_letters' => 'יהה',
                'hebrew_name' => 'יההאל',
                'letter_details' => [
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => 'scintilla divina'
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => 'rivelazione'
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => 'conferma della rivelazione'
                    ],
                ],
            
                'choir' => 'Arcangeli',
                'archangel' => 'Michele',
                'element' => 'Aria',
                'zodiac_sign' => 'Acquario',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 20,
                'regency_start_month' => 1,
                'regency_end_day' => 24,
                'regency_end_month' => 1,
                // Gradi
                'degree_start' => 15,
                'degree_end' => 20,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 118,
                'psalm_verse' => 24,
                'vulgata' => 117,
                'vulgata_verse' => 24,
                'psalm_link' => '/salmi/118',
                // Trigramma
                'trigram_sum' => 20,
                'trigram_reduction' => 2,
                // Contenuti
                'quality' => 'Saggezza spirituale, contemplazione e pace interiore.',
                'help' => 'Aiuta a sviluppare comprensione spirituale e serenità.',
                'prevent' => 'Previene agitazione mentale e chiusura spirituale.',
                'keywords' => 'saggezza, contemplazione, pace, spiritualità',
                'energy' => 'Femminile',
            ],
            [
                'number' => 63,
                'name' => 'Anauel',
                'hebrew_letters' => 'ענו',
                'hebrew_name' => 'ענואל',
                'letter_details' => [
                    [
                        'letter' => 'ע',
                        'name' => 'Ayin',
                        'value' => 70,
                        'meaning' => 'percezione profonda'
                    ],
                    [
                        'letter' => 'נ',
                        'name' => 'Nun',
                        'value' => 50,
                        'meaning' => 'perseveranza, fedeltà'
                    ],
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => 'scambio, comunicazione'
                    ],
                ],
            
                'choir' => 'Arcangeli',
                'archangel' => 'Michele',
                'element' => 'Acqua',
                'zodiac_sign' => 'Pesci',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 25,
                'regency_start_month' => 1,
                'regency_end_day' => 29,
                'regency_end_month' => 1,
                // Gradi
                'degree_start' => 20,
                'degree_end' => 25,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 2,
                'psalm_verse' => 11,
                'vulgata' => 2,
                'vulgata_verse' => 11,
                'psalm_link' => '/salmi/2',
                // Trigramma
                'trigram_sum' => 126,
                'trigram_reduction' => 9,
                // Contenuti
                'quality' => 'Commercio giusto, comunicazione e scambio equilibrato.',
                'help' => 'Aiuta a gestire scambi materiali e comunicativi con correttezza.',
                'prevent' => 'Previene frodi, squilibri e cattiva comunicazione.',
                'keywords' => 'scambio, comunicazione, equilibrio, correttezza',
                'energy' => 'Maschile',
            ],
            [
                'number' => 64,
                'name' => 'Mehiel',
                'hebrew_letters' => 'מחי',
                'hebrew_name' => 'מחיאל',
                'letter_details' => [
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => 'ispirazione, flusso creativo'
                    ],
                    [
                        'letter' => 'ח',
                        'name' => 'Chet',
                        'value' => 8,
                        'meaning' => 'energia vitale'
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => 'creatività ispirata'
                    ],
                ],
            
                'choir' => 'Arcangeli',
                'archangel' => 'Michele',
                'element' => 'Acqua',
                'zodiac_sign' => 'Pesci',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 30,
                'regency_start_month' => 1,
                'regency_end_day' => 3,
                'regency_end_month' => 2,
                // Gradi
                'degree_start' => 25,
                'degree_end' => 30,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 104,
                'psalm_verse' => 31,
                'vulgata' => 103,
                'vulgata_verse' => 31,
                'psalm_link' => '/salmi/104',
                // Trigramma
                'trigram_sum' => 58,
                'trigram_reduction' => 13,
                // Contenuti
                'quality' => 'Ispirazione creativa, espressione e comunicazione.',
                'help' => 'Aiuta a esprimere idee e creatività con chiarezza.',
                'prevent' => 'Previene blocchi creativi e dispersione mentale.',
                'keywords' => 'creatività, ispirazione, comunicazione, espressione',
                'energy' => 'Femminile',
            ],
            // Angeli
            [
                'number' => 65,
                'name' => 'Damabiah',
                'hebrew_letters' => 'דמב',
                'hebrew_name' => 'דמבאל',
                'letter_details' => [
                    [
                        'letter' => 'ד',
                        'name' => 'Dalet',
                        'value' => 4,
                        'meaning' => 'passaggio, umiltà'
                    ],
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => 'purificazione, guarigione'
                    ],
                    [
                        'letter' => 'ב',
                        'name' => 'Bet',
                        'value' => 2,
                        'meaning' => 'protezione, contenimento'
                    ],
                ],
            
                'choir' => 'Angeli',
                'archangel' => 'Gabriele',
                'element' => 'Acqua',
                'zodiac_sign' => 'Pesci',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 4,
                'regency_start_month' => 2,
                'regency_end_day' => 8,
                'regency_end_month' => 2,
                // Gradi
                'degree_start' => 0,
                'degree_end' => 5,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 90,
                'psalm_verse' => 17,
                'vulgata' => 89,
                'vulgata_verse' => 17,
                'psalm_link' => '/salmi/90',
                // Trigramma
                'trigram_sum' => 46,
                'trigram_reduction' => 10,
                // Contenuti
                'quality' => 'Protezione, purificazione e misericordia.',
                'help' => 'Aiuta a purificare emozioni e a proteggere nei momenti difficili.',
                'prevent' => 'Previene paura, instabilità emotiva e smarrimento.',
                'keywords' => 'protezione, purificazione, misericordia, sicurezza',
                'energy' => 'Maschile',
            ],
            [
                'number' => 66,
                'name' => 'Manakel',
                'hebrew_letters' => 'מנק',
                'hebrew_name' => 'מנקאל',
                'letter_details' => [
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => 'memoria, profondità'
                    ],
                    [
                        'letter' => 'נ',
                        'name' => 'Nun',
                        'value' => 50,
                        'meaning' => 'perseveranza'
                    ],
                    [
                        'letter' => 'ק',
                        'name' => 'Qof',
                        'value' => 100,
                        'meaning' => 'rettifica, purificazione'
                    ],
                ],
            
                'choir' => 'Angeli',
                'archangel' => 'Gabriele',
                'element' => 'Acqua',
                'zodiac_sign' => 'Pesci',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 9,
                'regency_start_month' => 2,
                'regency_end_day' => 13,
                'regency_end_month' => 2,
                // Gradi
                'degree_start' => 5,
                'degree_end' => 10,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 38,
                'psalm_verse' => 22,
                'vulgata' => 37,
                'vulgata_verse' => 22,
                'psalm_link' => '/salmi/38',
                // Trigramma
                'trigram_sum' => 190,
                'trigram_reduction' => 10,
                // Contenuti
                'quality' => 'Riparazione, memoria karmica e riequilibrio.',
                'help' => 'Aiuta a correggere errori del passato e a ristabilire equilibrio.',
                'prevent' => 'Previene ripetizione degli errori e stagnazione.',
                'keywords' => 'riparazione, memoria, riequilibrio, correzione',
                'energy' => 'Femminile',
            ],
            [
                'number' => 67,
                'name' => 'Eiael',
                'hebrew_letters' => 'איע',
                'hebrew_name' => 'איעאל',
                'letter_details' => [
                    [
                        'letter' => 'א',
                        'name' => 'Aleph',
                        'value' => 1,
                        'meaning' => 'unità, origine'
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => 'intelligenza attiva'
                    ],
                    [
                        'letter' => 'ע',
                        'name' => 'Ayin',
                        'value' => 70,
                        'meaning' => 'comprensione profonda'
                    ],
                ],
            
                'choir' => 'Angeli',
                'archangel' => 'Gabriele',
                'element' => 'Acqua',
                'zodiac_sign' => 'Pesci',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 14,
                'regency_start_month' => 2,
                'regency_end_day' => 18,
                'regency_end_month' => 2,
                // Gradi
                'degree_start' => 10,
                'degree_end' => 15,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 36,
                'psalm_verse' => 6,
                'vulgata' => 35,
                'vulgata_verse' => 6,
                'psalm_link' => '/salmi/36',
                // Trigramma
                'trigram_sum' => 81,
                'trigram_reduction' => 9,
                // Contenuti
                'quality' => 'Saggezza interiore, discernimento e profondità mentale.',
                'help' => 'Aiuta a comprendere verità profonde e a sviluppare intelligenza spirituale.',
                'prevent' => 'Previene superficialità, confusione e illusioni.',
                'keywords' => 'saggezza, discernimento, profondità, verità',
                'energy' => 'Maschile',
            ],
            [
                'number' => 68,
                'name' => 'Habuiah',
                'hebrew_letters' => 'חבו',
                'hebrew_name' => 'חבואל',
                'letter_details' => [
                    [
                        'letter' => 'ח',
                        'name' => 'Chet',
                        'value' => 8,
                        'meaning' => 'forza vitale'
                    ],
                    [
                        'letter' => 'ב',
                        'name' => 'Bet',
                        'value' => 2,
                        'meaning' => 'cura, nutrimento'
                    ],
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => 'continuità, sostegno'
                    ],
                ],
            
                'choir' => 'Angeli',
                'archangel' => 'Gabriele',
                'element' => 'Acqua',
                'zodiac_sign' => 'Pesci',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 19,
                'regency_start_month' => 2,
                'regency_end_day' => 23,
                'regency_end_month' => 2,
                // Gradi
                'degree_start' => 15,
                'degree_end' => 20,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 146,
                'psalm_verse' => 5,
                'vulgata' => 145,
                'vulgata_verse' => 5,
                'psalm_link' => '/salmi/146',
                // Trigramma
                'trigram_sum' => 16,
                'trigram_reduction' => 7,
                // Contenuti
                'quality' => 'Guarigione, fertilità e ristoro.',
                'help' => 'Aiuta nella guarigione fisica ed emotiva e nel recupero delle energie.',
                'prevent' => 'Previene esaurimento, debolezza e perdita di vitalità.',
                'keywords' => 'guarigione, vitalità, fertilità, ristoro',
                'energy' => 'Femminile',
            ],
            [
                'number' => 69,
                'name' => 'Rochel',
                'hebrew_letters' => 'רהל',
                'hebrew_name' => 'רהאל',
                'letter_details' => [
                    [
                        'letter' => 'ר',
                        'name' => 'Resh',
                        'value' => 200,
                        'meaning' => 'recupero, ritorno'
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => 'rivelazione'
                    ],
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => 'restituzione, ordine'
                    ],
                ],
            
                'choir' => 'Angeli',
                'archangel' => 'Gabriele',
                'element' => 'Acqua',
                'zodiac_sign' => 'Pesci',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 24,
                'regency_start_month' => 2,
                'regency_end_day' => 28,
                'regency_end_month' => 2,
                // Gradi
                'degree_start' => 20,
                'degree_end' => 25,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 145,
                'psalm_verse' => 14,
                'vulgata' => 144,
                'vulgata_verse' => 14,
                'psalm_link' => '/salmi/145',
                // Trigramma
                'trigram_sum' => 235,
                'trigram_reduction' => 10,
                // Contenuti
                'quality' => 'Restituzione, giustizia riparativa e recupero.',
                'help' => 'Aiuta a ritrovare ciò che è stato perso e a ristabilire la giustizia.',
                'prevent' => 'Previene smarrimento, ingiustizie e perdite definitive.',
                'keywords' => 'restituzione, giustizia, recupero, ordine',
                'energy' => 'Maschile',
            ],
            [
                'number' => 70,
                'name' => 'Jabamiah',
                'hebrew_letters' => 'יבמ',
                'hebrew_name' => 'יבמאל',
                'letter_details' => [
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => 'principio creativo'
                    ],
                    [
                        'letter' => 'ב',
                        'name' => 'Bet',
                        'value' => 2,
                        'meaning' => 'costruzione, rinnovamento'
                    ],
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => 'trasformazione, rigenerazione'
                    ],
                ],
            
                'choir' => 'Angeli',
                'archangel' => 'Gabriele',
                'element' => 'Fuoco',
                'zodiac_sign' => 'Pesci',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 1,
                'regency_start_month' => 3,
                'regency_end_day' => 5,
                'regency_end_month' => 3,
                // Gradi
                'degree_start' => 25,
                'degree_end' => 30,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 130,
                'psalm_verse' => 1,
                'vulgata' => 129,
                'vulgata_verse' => 1,
                'psalm_link' => '/salmi/130',
                // Trigramma
                'trigram_sum' => 52,
                'trigram_reduction' => 7,
                // Contenuti
                'quality' => 'Rigenerazione, rinnovamento e trasformazione profonda.',
                'help' => 'Aiuta a chiudere cicli e rinascere interiormente.',
                'prevent' => 'Previene stagnazione, immobilità e paura del cambiamento.',
                'keywords' => 'rigenerazione, rinascita, trasformazione, rinnovamento',
                'energy' => 'Femminile',
            ],
            [
                'number' => 71,
                'name' => 'Haiaiel',
                'hebrew_letters' => 'היי',
                'hebrew_name' => 'הייאל',
                'letter_details' => [
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => 'protezione, apertura'
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => 'forza attiva'
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => 'rafforzamento della forza'
                    ],
                ],
            
                'choir' => 'Angeli',
                'archangel' => 'Gabriele',
                'element' => 'Fuoco',
                'zodiac_sign' => 'Pesci',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 6,
                'regency_start_month' => 3,
                'regency_end_day' => 10,
                'regency_end_month' => 3,
                // Gradi
                'degree_start' => 0,
                'degree_end' => 5,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 109,
                'psalm_verse' => 30,
                'vulgata' => 108,
                'vulgata_verse' => 30,
                'psalm_link' => '/salmi/109',
                // Trigramma
                'trigram_sum' => 25,
                'trigram_reduction' => 7,
                // Contenuti
                'quality' => 'Difesa, strategia e coraggio nella lotta.',
                'help' => 'Aiuta a difendersi da ingiustizie e a combattere con lucidità.',
                'prevent' => 'Previene impulsività, aggressività cieca e paura.',
                'keywords' => 'difesa, coraggio, strategia, protezione',
                'energy' => 'Maschile',
            ],
            [
                'number' => 72,
                'name' => 'Mumiah',
                'hebrew_letters' => 'מומ',
                'hebrew_name' => 'מומאל',
                'letter_details' => [
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => 'gestazione, preparazione'
                    ],
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => 'connessione, passaggio'
                    ],
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => 'compimento, nascita'
                    ],
                ],
            
                'choir' => 'Angeli',
                'archangel' => 'Gabriele',
                'element' => 'Fuoco',
                'zodiac_sign' => 'Pesci',
                'planet' => null,
                // Reggenza strutturata
                'regency_start_day' => 11,
                'regency_start_month' => 3,
                'regency_end_day' => 15,
                'regency_end_month' => 3,
                // Gradi
                'degree_start' => 5,
                'degree_end' => 10,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 116,
                'psalm_verse' => 7,
                'vulgata' => 114,
                'vulgata_verse' => 7,
                'psalm_link' => '/salmi/116',
                // Trigramma
                'trigram_sum' => 86,
                'trigram_reduction' => 14,
                // Contenuti
                'quality' => 'Chiusura dei cicli, compimento e preparazione al nuovo.',
                'help' => 'Aiuta a portare a termine ciò che è iniziato e a preparare nuovi inizi.',
                'prevent' => 'Previene incompiutezza, dispersione e paura della fine.',
                'keywords' => 'compimento, fine, rinascita, preparazione',
                'energy' => 'Femminile',
            ],
        ];

        foreach ($angels as $angel) {
            AngelsMeaning::updateOrCreate(
                ['number' => $angel['number']],
                $angel
            );
        }
    }
}
