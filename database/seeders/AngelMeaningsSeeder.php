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

            [
                'number' => 1,
                'name' => 'Vehuiah',
                'hebrew_letters' => 'והו',
                'hebrew_name' => 'והויה',
                'choir' => 'Serafini',
                'archangel' => 'Enoch/Metatron',
                'element' => 'Fuoco',
                'zodiac_sign' => 'Ariete',
                'planet' => '',
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
                'trigram_values' => [6,5,6],
                'trigram_sum' => 17,
                'trigram_reduction' => 8,
                // Contenuti
                'quality' => 'Volontà potente, energia creativa, capacità di innovazione e spirito pionieristico.',
                'help' => 'Dona volontà ferrea, coraggio inarrestabile, chiarezza mentale e prontezza d’azione; aiuta a superare ostacoli, elimina la stanchezza, depressione e confusione interiore, permettendo di intraprendere con successo qualsiasi impresa.',
                'prevent' => "Previene l'apatia, l'irascibilità verso se stessi, la collera cieca e la tendenza a lasciare le cose a metà.",
                'keywords' => 'inizio, volontà, coraggio, fuoco creativo, decisione, leadership, taglio col passato',
                'energy' => 'Maschile',
            ],
            [
                'number' => 2,
                'name' => 'Jeliel',
                'hebrew_letters' => 'ייל',
                'hebrew_name' => 'יילאל',
                'choir' => 'Serafini',
                'archangel' => 'Enoch/Metatron',
                'element' => 'Fuoco',
                'zodiac_sign' => 'Ariete',
                'planet' => 'Saturno',
                // Reggenza strutturata
                'regency_start_day' => 26,
                'regency_start_month' => 3,
                'regency_end_day' => 30,
                'regency_end_month' => 3,
                // Gradi
                'degree_start' => 6,
                'degree_end' => 10,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 22,
                'psalm_verse' => 20,
                'vulgata' => 21,
                'vulgata_verse' => 20,
                'psalm_link' => '/salmi/22',
                // Trigramma
                'trigram_values' => [10, 10, 30],
                'trigram_sum' => 50,
                'trigram_reduction' => 5,
                // Contenuti
                'quality' => 'Amore universale, altruismo, diplomazia e capacità di conciliare gli opposti.',
                'help' => 'Aiuta a placare le liti, ristabilire la pace coniugale e la fedeltà; favorisce la lucidità intellettuale per risolvere problemi complessi e promuove l’obbedienza e la giustizia.',
                'prevent' => 'Previene il narcisismo, la separazione affettiva, l’infedeltà, l’egoismo estremo e le attitudini tiranniche.',
                'keywords' => 'amore, pace, diplomazia, fedeltà, armonia, solidità affettiva, altruismo',
                'gender' => 'Maschile',
            ],
            [
                'number' => 3,
                'name' => 'Sitael',
                'hebrew_letters' => 'סיט',
                'hebrew_name' => 'סיטאל',
                'choir' => 'Serafini',
                'archangel' => 'Enoch/Metatron',
                'element' => 'Fuoco',
                'zodiac_sign' => 'Ariete',
                'planet' => 'Giove',
                // Reggenza strutturata
                'regency_start_day' => 31,
                'regency_start_month' => 3,
                'regency_end_day' => 4,
                'regency_end_month' => 4,
                'degree_start' => 10,
                'degree_end' => 15,
                'orientation' => 'EST',
                // Salmo
                'psalm' => 90,
                'psalm_verse' => 2,
                'vulgata' => 91,
                'vulgata_verse' => 2,
                'psalm_link' => '/salmi/90',
                // Trigramma
                'trigram_values' => '60-10-9',
                'trigram_sum' => 79,
                'trigram_reduction' => 7,
                // Contenuti
                'help' => 'Protegge dalle avversità e dai grandi pericoli. Favorisce la realizzazione di grandi progetti e la verità nelle parole.',
                'keywords' => 'costruzione, protezione, verità, responsabilità, nobiltà, stabilità',
                'gender' => 'Femminile',
            ],
            [
                'number' => 4,
                'name' => 'Elemiah',
                'hebrew_letters' => 'עלם',
                'hebrew_name' => 'עלמיה',
                'choir' => 'Serafini',
                'archangel' => 'Enoch/Metatron',
                'element' => 'Fuoco',
                'zodiac_sign' => 'Ariete',
                'planet' => 'Marte',
                'regency_start_day' => 5,
                'regency_start_month' => 4,
                'regency_end_day' => 9,
                'regency_end_month' => 4,
                'degree_start' => 15,
                'degree_end' => 20,
                'orientation' => 'EST',
                'psalm' => 'Salmo 6',
                'psalm_verse' => '6:5 (Vulgata 6:4)',
                'psalm_link' => '/salmi/6',
                'trigram_values' => '70-30-40',
                'trigram_sum' => 140,
                'trigram_reduction' => 5,
                'help' => 'Aiuta a identificare i traditori e a superare i momenti difficili. Protegge i viaggi e sostiene chi cerca di cambiare vita o lavoro.',
                'keywords' => 'potere divino, progresso, viaggi, scoperta, fine delle tormenti, successo',
                'gender' => 'Femminile',
            ],
            [
                'number' => 5,
                'name' => 'Mahasiah',
                'hebrew_letters' => 'מהש',
                'hebrew_name' => 'מהשיה',
                'choir' => 'Serafini',
                'archangel' => 'Enoch/Metatron',
                'element' => 'Fuoco',
                'zodiac_sign' => 'Ariete',
                'planet' => 'Venere',
                'regency_start_day' => 10,
                'regency_start_month' => 4,
                'regency_end_day' => 14,
                'regency_end_month' => 4,
                'degree_start' => 20,
                'degree_end' => 25,
                'orientation' => 'EST',
                'psalm' => 'Salmo 33',
                'psalm_verse' => '33:4 (Vulgata 34:4)',
                'psalm_link' => '/salmi/33',
                'trigram_values' => '40-5-300',
                'trigram_sum' => 345,
                'trigram_reduction' => 3,
                'help' => 'Favorisce la riconciliazione e la rettificazione degli errori. Aiuta a vivere in pace con tutti e a padroneggiare le scienze e le arti.',
                'keywords' => 'rettificazione, pace, armonia, perdono, studio, equilibrio, arte',
                'gender' => 'Femminile',
            ],
            [
                'number' => 6,
                'name' => 'Lelahel',
                'hebrew_letters' => 'ללה',
                'hebrew_name' => 'ללהאל',
                'choir' => 'Serafini',
                'archangel' => 'Enoch/Metatron',
                'element' => 'Fuoco',
                'zodiac_sign' => 'Ariete',
                'planet' => 'Sole',
                'regency_start_day' => 15,
                'regency_start_month' => 4,
                'regency_end_day' => 20,
                'regency_end_month' => 4,
                'degree_start' => 25,
                'degree_end' => 30,
                'orientation' => 'EST',
                'psalm' => 'Salmo 9',
                'psalm_verse' => '9:12 (Vulgata 9:11)',
                'psalm_link' => '/salmi/9',
                'trigram_values' => '30-30-5',
                'trigram_sum' => 65,
                'trigram_reduction' => 2,
                'help' => 'Dona luce, salute e fortuna. Favorisce il successo nelle arti e nelle scienze, portando fama e bellezza a chi lo invoca correttamente.',
                'keywords' => 'luce, salute, bellezza, gloria, guarigione, successo artistico',
                'gender' => 'Maschile',
            ],

         







           
            ['number' => 7, 'name' => 'Acaiah', 'hebrew_letters' => 'אכא', 'choir' => 'Serafini', 'archangel' => 'Metatron', 'element' => 'Terra', 'zodiac_sign' => 'Toro', 'regency_days' => '19-23 Aprile', 'gender' => 'Maschile'],
            ['number' => 8, 'name' => 'Cahetel', 'hebrew_letters' => 'כהת', 'choir' => 'Serafini', 'archangel' => 'Metatron', 'element' => 'Terra', 'zodiac_sign' => 'Toro', 'regency_days' => '24-28 Aprile', 'gender' => 'Femminile'],

            ['number' => 9, 'name' => 'Haziel', 'hebrew_letters' => 'חזי', 'choir' => 'Cherubini', 'archangel' => 'Raziel', 'element' => 'Terra', 'zodiac_sign' => 'Toro', 'regency_days' => '29 Aprile - 3 Maggio', 'gender' => 'Maschile'],
            ['number' => 10, 'name' => 'Aladiah', 'hebrew_letters' => 'אלד', 'choir' => 'Cherubini', 'archangel' => 'Raziel', 'element' => 'Terra', 'zodiac_sign' => 'Toro', 'regency_days' => '4-8 Maggio', 'gender' => 'Femminile'],
            ['number' => 11, 'name' => 'Lauviah', 'hebrew_letters' => 'לאו', 'choir' => 'Cherubini', 'archangel' => 'Raziel', 'element' => 'Terra', 'zodiac_sign' => 'Toro', 'regency_days' => '9-13 Maggio', 'gender' => 'Maschile'],
            ['number' => 12, 'name' => 'Hahaiah', 'hebrew_letters' => 'ההע', 'choir' => 'Cherubini', 'archangel' => 'Raziel', 'element' => 'Terra', 'zodiac_sign' => 'Toro', 'regency_days' => '14-18 Maggio', 'gender' => 'Femminile'],
            ['number' => 13, 'name' => 'Iezalel', 'hebrew_letters' => 'יזל', 'choir' => 'Cherubini', 'archangel' => 'Raziel', 'element' => 'Aria', 'zodiac_sign' => 'Gemelli', 'regency_days' => '19-23 Maggio', 'gender' => 'Maschile'],
            ['number' => 14, 'name' => 'Mebahel', 'hebrew_letters' => 'מבה', 'choir' => 'Cherubini', 'archangel' => 'Raziel', 'element' => 'Aria', 'zodiac_sign' => 'Gemelli', 'regency_days' => '24-28 Maggio', 'gender' => 'Maschile'],
            ['number' => 15, 'name' => 'Hariel', 'hebrew_letters' => 'הרי', 'choir' => 'Cherubini', 'archangel' => 'Raziel', 'element' => 'Aria', 'zodiac_sign' => 'Gemelli', 'regency_days' => '29 Maggio - 3 Giugno', 'gender' => 'Femminile'],
            ['number' => 16, 'name' => 'Hakamiah', 'hebrew_letters' => 'חקמ', 'choir' => 'Cherubini', 'archangel' => 'Raziel', 'element' => 'Aria', 'zodiac_sign' => 'Gemelli', 'regency_days' => '4-8 Giugno', 'gender' => 'Maschile'],

            ['number' => 17, 'name' => 'Lauviah', 'hebrew_letters' => 'לאו', 'choir' => 'Troni', 'archangel' => 'Tzaphkiel', 'element' => 'Aria', 'zodiac_sign' => 'Gemelli', 'regency_days' => '9-13 Giugno', 'gender' => 'Maschile'],
            ['number' => 18, 'name' => 'Caliel', 'hebrew_letters' => 'כלי', 'choir' => 'Troni', 'archangel' => 'Tzaphkiel', 'element' => 'Acqua', 'zodiac_sign' => 'Cancro', 'regency_days' => '14-18 Giugno', 'gender' => 'Femminile'],
            ['number' => 19, 'name' => 'Leuviah', 'hebrew_letters' => 'לוו', 'choir' => 'Troni', 'archangel' => 'Tzaphkiel', 'element' => 'Acqua', 'zodiac_sign' => 'Cancro', 'regency_days' => '19-23 Giugno', 'gender' => 'Maschile'],
            ['number' => 20, 'name' => 'Pahaliah', 'hebrew_letters' => 'פהל', 'choir' => 'Troni', 'archangel' => 'Tzaphkiel', 'element' => 'Acqua', 'zodiac_sign' => 'Cancro', 'regency_days' => '24-28 Giugno', 'gender' => 'Femminile'],
            ['number' => 21, 'name' => 'Nelkael', 'hebrew_letters' => 'נלכ', 'choir' => 'Troni', 'archangel' => 'Tzaphkiel', 'element' => 'Acqua', 'zodiac_sign' => 'Cancro', 'regency_days' => '29 Giugno - 3 Luglio', 'gender' => 'Maschile'],
            ['number' => 22, 'name' => 'Ieiaiel', 'hebrew_letters' => 'ייי', 'choir' => 'Troni', 'archangel' => 'Tzaphkiel', 'element' => 'Acqua', 'zodiac_sign' => 'Cancro', 'regency_days' => '4-8 Luglio', 'gender' => 'Femminile'],
            ['number' => 23, 'name' => 'Melahel', 'hebrew_letters' => 'מלה', 'choir' => 'Troni', 'archangel' => 'Tzaphkiel', 'element' => 'Acqua', 'zodiac_sign' => 'Cancro', 'regency_days' => '9-13 Luglio', 'gender' => 'Maschile'],
            ['number' => 24, 'name' => 'Hahuiah', 'hebrew_letters' => 'חהו', 'choir' => 'Troni', 'archangel' => 'Tzaphkiel', 'element' => 'Acqua', 'zodiac_sign' => 'Cancro', 'regency_days' => '14-18 Luglio', 'gender' => 'Femminile'],

            ['number' => 25, 'name' => 'Nith-Haiah', 'hebrew_letters' => 'נתה', 'choir' => 'Dominazioni', 'archangel' => 'Tzadkiel', 'element' => 'Fuoco', 'zodiac_sign' => 'Leone', 'regency_days' => '19-23 Luglio', 'gender' => 'Maschile'],
            ['number' => 26, 'name' => 'Haaiah', 'hebrew_letters' => 'האא', 'choir' => 'Dominazioni', 'archangel' => 'Tzadkiel', 'element' => 'Fuoco', 'zodiac_sign' => 'Leone', 'regency_days' => '24-28 Luglio', 'gender' => 'Femminile'],
            ['number' => 27, 'name' => 'Ierathel', 'hebrew_letters' => 'ירת', 'choir' => 'Dominazioni', 'archangel' => 'Tzadkiel', 'element' => 'Fuoco', 'zodiac_sign' => 'Leone', 'regency_days' => '29 Luglio - 2 Agosto', 'gender' => 'Maschile'],
            ['number' => 28, 'name' => 'Seeiah', 'hebrew_letters' => 'שאה', 'choir' => 'Dominazioni', 'archangel' => 'Tzadkiel', 'element' => 'Fuoco', 'zodiac_sign' => 'Leone', 'regency_days' => '3-7 Agosto', 'gender' => 'Femminile'],
            ['number' => 29, 'name' => 'Reiyel', 'hebrew_letters' => 'ריי', 'choir' => 'Dominazioni', 'archangel' => 'Tzadkiel', 'element' => 'Fuoco', 'zodiac_sign' => 'Leone', 'regency_days' => '8-12 Agosto', 'gender' => 'Maschile'],
            ['number' => 30, 'name' => 'Omahel', 'hebrew_letters' => 'אום', 'choir' => 'Dominazioni', 'archangel' => 'Tzadkiel', 'element' => 'Fuoco', 'zodiac_sign' => 'Leone', 'regency_days' => '13-17 Agosto', 'gender' => 'Femminile'],

            ['number' => 31, 'name' => 'Lecabel', 'hebrew_letters' => 'לכב', 'choir' => 'Dominazioni', 'archangel' => 'Tzadkiel', 'element' => 'Terra', 'zodiac_sign' => 'Vergine', 'regency_days' => '18-22 Agosto', 'gender' => 'Maschile'],
            ['number' => 32, 'name' => 'Vasariah', 'hebrew_letters' => 'ושר', 'choir' => 'Dominazioni', 'archangel' => 'Tzadkiel', 'element' => 'Terra', 'zodiac_sign' => 'Vergine', 'regency_days' => '23-27 Agosto', 'gender' => 'Femminile'],
            ['number' => 33, 'name' => 'Iehuiah', 'hebrew_letters' => 'יחו', 'choir' => 'Potestà', 'archangel' => 'Camael', 'element' => 'Terra', 'zodiac_sign' => 'Vergine', 'regency_days' => '28 Agosto - 1 Settembre', 'gender' => 'Maschile'],
            ['number' => 34, 'name' => 'Lehahiah', 'hebrew_letters' => 'להח', 'choir' => 'Potestà', 'archangel' => 'Camael', 'element' => 'Terra', 'zodiac_sign' => 'Vergine', 'regency_days' => '2-6 Settembre', 'gender' => 'Femminile'],
            ['number' => 35, 'name' => 'Chavakiah', 'hebrew_letters' => 'כוq', 'choir' => 'Potestà', 'archangel' => 'Camael', 'element' => 'Terra', 'zodiac_sign' => 'Vergine', 'regency_days' => '7-11 Settembre', 'gender' => 'Maschile'],
            ['number' => 36, 'name' => 'Menadel', 'hebrew_letters' => 'מנד', 'choir' => 'Potestà', 'archangel' => 'Camael', 'element' => 'Terra', 'zodiac_sign' => 'Vergine', 'regency_days' => '12-16 Settembre', 'gender' => 'Femminile'],

            ['number' => 37, 'name' => 'Aniel', 'hebrew_letters' => 'אני', 'choir' => 'Potestà', 'archangel' => 'Camael', 'element' => 'Aria', 'zodiac_sign' => 'Bilancia', 'regency_days' => '17-21 Settembre', 'gender' => 'Maschile'],
            ['number' => 38, 'name' => 'Haamiah', 'hebrew_letters' => 'חעמ', 'choir' => 'Potestà', 'archangel' => 'Camael', 'element' => 'Aria', 'zodiac_sign' => 'Bilancia', 'regency_days' => '22-26 Settembre', 'gender' => 'Femminile'],
            ['number' => 39, 'name' => 'Rehael', 'hebrew_letters' => 'רהע', 'choir' => 'Potestà', 'archangel' => 'Camael', 'element' => 'Aria', 'zodiac_sign' => 'Bilancia', 'regency_days' => '27 Settembre - 1 Ottobre', 'gender' => 'Maschile'],
            ['number' => 40, 'name' => 'Ieiazel', 'hebrew_letters' => 'ייז', 'choir' => 'Potestà', 'archangel' => 'Camael', 'element' => 'Aria', 'zodiac_sign' => 'Bilancia', 'regency_days' => '2-6 Ottobre', 'gender' => 'Femminile'],

            ['number' => 41, 'name' => 'Hahahel', 'hebrew_letters' => 'ההה', 'choir' => 'Virtù', 'archangel' => 'Raffaele', 'element' => 'Aria', 'zodiac_sign' => 'Bilancia', 'regency_days' => '7-11 Ottobre', 'gender' => 'Maschile'],
            ['number' => 42, 'name' => 'Mikael', 'hebrew_letters' => 'מיכ', 'choir' => 'Virtù', 'archangel' => 'Raffaele', 'element' => 'Acqua', 'zodiac_sign' => 'Scorpione', 'regency_days' => '12-16 Ottobre', 'gender' => 'Femminile'],
            ['number' => 43, 'name' => 'Vehuel', 'hebrew_letters' => 'וול', 'choir' => 'Virtù', 'archangel' => 'Raffaele', 'element' => 'Acqua', 'zodiac_sign' => 'Scorpione', 'regency_days' => '17-21 Ottobre', 'gender' => 'Maschile'],
            ['number' => 44, 'name' => 'Ielahiah', 'hebrew_letters' => 'ילה', 'choir' => 'Virtù', 'archangel' => 'Raffaele', 'element' => 'Acqua', 'zodiac_sign' => 'Scorpione', 'regency_days' => '22-26 Ottobre', 'gender' => 'Femminile'],
            ['number' => 45, 'name' => 'Sehaliah', 'hebrew_letters' => 'סאל', 'choir' => 'Virtù', 'archangel' => 'Raffaele', 'element' => 'Acqua', 'zodiac_sign' => 'Scorpione', 'regency_days' => '27-31 Ottobre', 'gender' => 'Maschile'],
            ['number' => 46, 'name' => 'Ariel', 'hebrew_letters' => 'ערי', 'choir' => 'Virtù', 'archangel' => 'Raffaele', 'element' => 'Acqua', 'zodiac_sign' => 'Scorpione', 'regency_days' => '1-5 Novembre', 'gender' => 'Femminile'],

            ['number' => 47, 'name' => 'Asaliah', 'hebrew_letters' => 'עשל', 'choir' => 'Virtù', 'archangel' => 'Raffaele', 'element' => 'Fuoco', 'zodiac_sign' => 'Sagittario', 'regency_days' => '6-10 Novembre', 'gender' => 'Maschile'],
            ['number' => 48, 'name' => 'Mihel', 'hebrew_letters' => 'מיה', 'choir' => 'Virtù', 'archangel' => 'Raffaele', 'element' => 'Fuoco', 'zodiac_sign' => 'Sagittario', 'regency_days' => '11-15 Novembre', 'gender' => 'Femminile'],
            ['number' => 49, 'name' => 'Vehuel', 'hebrew_letters' => 'והל', 'choir' => 'Principati', 'archangel' => 'Haniel', 'element' => 'Fuoco', 'zodiac_sign' => 'Sagittario', 'regency_days' => '16-20 Novembre', 'gender' => 'Maschile'],
            ['number' => 50, 'name' => 'Daniel', 'hebrew_letters' => 'דני', 'choir' => 'Principati', 'archangel' => 'Haniel', 'element' => 'Fuoco', 'zodiac_sign' => 'Sagittario', 'regency_days' => '21-25 Novembre', 'gender' => 'Femminile'],
            ['number' => 51, 'name' => 'Hahasiah', 'hebrew_letters' => 'חחש', 'choir' => 'Principati', 'archangel' => 'Haniel', 'element' => 'Fuoco', 'zodiac_sign' => 'Sagittario', 'regency_days' => '26-30 Novembre', 'gender' => 'Maschile'],
            ['number' => 52, 'name' => 'Imamiah', 'hebrew_letters' => 'עממ', 'choir' => 'Principati', 'archangel' => 'Haniel', 'element' => 'Fuoco', 'zodiac_sign' => 'Sagittario', 'regency_days' => '1-5 Dicembre', 'gender' => 'Femminile'],

            ['number' => 53, 'name' => 'Nanael', 'hebrew_letters' => 'ננא', 'choir' => 'Principati', 'archangel' => 'Haniel', 'element' => 'Terra', 'zodiac_sign' => 'Capricorno', 'regency_days' => '6-10 Dicembre', 'gender' => 'Maschile'],
            ['number' => 54, 'name' => 'Nithael', 'hebrew_letters' => 'נית', 'choir' => 'Principati', 'archangel' => 'Haniel', 'element' => 'Terra', 'zodiac_sign' => 'Capricorno', 'regency_days' => '11-15 Dicembre', 'gender' => 'Femminile'],
            ['number' => 55, 'name' => 'Mebaiah', 'hebrew_letters' => 'מבה', 'choir' => 'Principati', 'archangel' => 'Haniel', 'element' => 'Terra', 'zodiac_sign' => 'Capricorno', 'regency_days' => '16-20 Dicembre', 'gender' => 'Maschile'],
            ['number' => 56, 'name' => 'Poiel', 'hebrew_letters' => 'פוי', 'choir' => 'Principati', 'archangel' => 'Haniel', 'element' => 'Terra', 'zodiac_sign' => 'Capricorno', 'regency_days' => '21-25 Dicembre', 'gender' => 'Femminile'],

            ['number' => 57, 'name' => 'Nemamiah', 'hebrew_letters' => 'נממ', 'choir' => 'Arcangeli', 'archangel' => 'Michele', 'element' => 'Terra', 'zodiac_sign' => 'Capricorno', 'regency_days' => '26-30 Dicembre', 'gender' => 'Maschile'],
            ['number' => 58, 'name' => 'Ieialel', 'hebrew_letters' => 'ייל', 'choir' => 'Arcangeli', 'archangel' => 'Michele', 'element' => 'Aria', 'zodiac_sign' => 'Acquario', 'regency_days' => '31 Dicembre - 4 Gennaio', 'gender' => 'Femminile'],
            ['number' => 59, 'name' => 'Harahel', 'hebrew_letters' => 'הרח', 'choir' => 'Arcangeli', 'archangel' => 'Michele', 'element' => 'Aria', 'zodiac_sign' => 'Acquario', 'regency_days' => '5-9 Gennaio', 'gender' => 'Maschile'],
            ['number' => 60, 'name' => 'Mitzrael', 'hebrew_letters' => 'מצר', 'choir' => 'Arcangeli', 'archangel' => 'Michele', 'element' => 'Aria', 'zodiac_sign' => 'Acquario', 'regency_days' => '10-14 Gennaio', 'gender' => 'Femminile'],
            ['number' => 61, 'name' => 'Umabel', 'hebrew_letters' => 'אומ', 'choir' => 'Arcangeli', 'archangel' => 'Michele', 'element' => 'Aria', 'zodiac_sign' => 'Acquario', 'regency_days' => '15-19 Gennaio', 'gender' => 'Maschile'],
            ['number' => 62, 'name' => 'Iahhel', 'hebrew_letters' => 'יהה', 'choir' => 'Arcangeli', 'archangel' => 'Michele', 'element' => 'Aria', 'zodiac_sign' => 'Acquario', 'regency_days' => '20-24 Gennaio', 'gender' => 'Femminile'],

            ['number' => 63, 'name' => 'Anauel', 'hebrew_letters' => 'ענו', 'choir' => 'Arcangeli', 'archangel' => 'Michele', 'element' => 'Acqua', 'zodiac_sign' => 'Pesci', 'regency_days' => '25-29 Gennaio', 'gender' => 'Maschile'],
            ['number' => 64, 'name' => 'Mehiel', 'hebrew_letters' => 'מחי', 'choir' => 'Arcangeli', 'archangel' => 'Michele', 'element' => 'Acqua', 'zodiac_sign' => 'Pesci', 'regency_days' => '30 Gennaio - 3 Febbraio', 'gender' => 'Femminile'],
            ['number' => 65, 'name' => 'Damabiah', 'hebrew_letters' => 'דמב', 'choir' => 'Angeli', 'archangel' => 'Gabriele', 'element' => 'Acqua', 'zodiac_sign' => 'Pesci', 'regency_days' => '4-8 Febbraio', 'gender' => 'Maschile'],
            ['number' => 66, 'name' => 'Manakel', 'hebrew_letters' => 'מנק', 'choir' => 'Angeli', 'archangel' => 'Gabriele', 'element' => 'Acqua', 'zodiac_sign' => 'Pesci', 'regency_days' => '9-13 Febbraio', 'gender' => 'Femminile'],
            ['number' => 67, 'name' => 'Eiael', 'hebrew_letters' => 'איע', 'choir' => 'Angeli', 'archangel' => 'Gabriele', 'element' => 'Acqua', 'zodiac_sign' => 'Pesci', 'regency_days' => '14-18 Febbraio', 'gender' => 'Maschile'],
            ['number' => 68, 'name' => 'Habuiah', 'hebrew_letters' => 'חבו', 'choir' => 'Angeli', 'archangel' => 'Gabriele', 'element' => 'Acqua', 'zodiac_sign' => 'Pesci', 'regency_days' => '19-23 Febbraio', 'gender' => 'Femminile'],
            ['number' => 69, 'name' => 'Rochel', 'hebrew_letters' => 'רהל', 'choir' => 'Angeli', 'archangel' => 'Gabriele', 'element' => 'Acqua', 'zodiac_sign' => 'Pesci', 'regency_days' => '24-28 Febbraio', 'gender' => 'Maschile'],
            ['number' => 70, 'name' => 'Jabamiah', 'hebrew_letters' => 'יבמ', 'choir' => 'Angeli', 'archangel' => 'Gabriele', 'element' => 'Fuoco', 'zodiac_sign' => 'Pesci', 'regency_days' => '1-5 Marzo', 'gender' => 'Femminile'],
            ['number' => 71, 'name' => 'Haiaiel', 'hebrew_letters' => 'היי', 'choir' => 'Angeli', 'archangel' => 'Gabriele', 'element' => 'Fuoco', 'zodiac_sign' => 'Pesci', 'regency_days' => '6-10 Marzo', 'gender' => 'Maschile'],
            ['number' => 72, 'name' => 'Mumiah', 'hebrew_letters' => 'מומ', 'choir' => 'Angeli', 'archangel' => 'Gabriele', 'element' => 'Fuoco', 'zodiac_sign' => 'Pesci', 'regency_days' => '11-15 Marzo', 'gender' => 'Femminile'],

        ];

        foreach ($angels as $angel) {
            AngelsMeaning::updateOrCreate(
                ['number' => $angel['number']],
                $angel
            );
        }
    }
}
