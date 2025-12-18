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

            ['number' => 1, 'name' => 'Vehuiah', 'hebrew_letters' => 'והו', 'choir' => 'Serafini', 'archangel' => 'Metatron', 'element' => 'Fuoco', 'zodiac_sign' => 'Ariete', 'regency_days' => '20-24 Marzo', 'gender' => 'Maschile'],
            ['number' => 2, 'name' => 'Yeliel', 'hebrew_letters' => 'ילי', 'choir' => 'Serafini', 'archangel' => 'Metatron', 'element' => 'Fuoco', 'zodiac_sign' => 'Ariete', 'regency_days' => '25-29 Marzo', 'gender' => 'Maschile'],
            ['number' => 3, 'name' => 'Sitael', 'hebrew_letters' => 'סיט', 'choir' => 'Serafini', 'archangel' => 'Metatron', 'element' => 'Fuoco', 'zodiac_sign' => 'Ariete', 'regency_days' => '30 Marzo - 3 Aprile', 'gender' => 'Femminile'],
            ['number' => 4, 'name' => 'Elemiah', 'hebrew_letters' => 'עלם', 'choir' => 'Serafini', 'archangel' => 'Metatron', 'element' => 'Fuoco', 'zodiac_sign' => 'Ariete', 'regency_days' => '4-8 Aprile', 'gender' => 'Maschile'],
            ['number' => 5, 'name' => 'Mahasiah', 'hebrew_letters' => 'מהש', 'choir' => 'Serafini', 'archangel' => 'Metatron', 'element' => 'Fuoco', 'zodiac_sign' => 'Ariete', 'regency_days' => '9-13 Aprile', 'gender' => 'Femminile'],
            ['number' => 6, 'name' => 'Lelahel', 'hebrew_letters' => 'ללה', 'choir' => 'Serafini', 'archangel' => 'Metatron', 'element' => 'Fuoco', 'zodiac_sign' => 'Ariete', 'regency_days' => '14-18 Aprile', 'gender' => 'Maschile'],
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
