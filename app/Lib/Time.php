<?php

namespace App\Lib;

class TimeConstants
{
  /**
   * Giorni della settimana
   * 
   * @var array DAYS
   */
  public const DAYS = [
    'monday' => [
      'en' => 'Monday',
      'it' => 'Lunedì',
      'es' => 'Lunes',
      'fr' => 'Lundi',
      'de' => 'Montag',
      'la' => 'Dies Lunae',
      'he' => 'יום שני',
      'arc' => 'ܬܪܝܢܒܫܒܐ', // Aramaico: Teryonb'shaba
      'ru' => 'Понедельник',
      'ja' => '月曜日',
      'zh' => '星期一'
    ],
    'tuesday' => [
      'en' => 'Tuesday',
      'it' => 'Martedì',
      'es' => 'Martes',
      'fr' => 'Mardi',
      'de' => 'Dienstag',
      'la' => 'Dies Martis',
      'he' => 'יום שלישי',
      'arc' => 'ܬܠܬܒܫܒܐ', // Aramaico: Tlatb'shaba
      'ru' => 'Вторник',
      'ja' => '火曜日',
      'zh' => '星期二'
    ],
    'wednesday' => [
      'en' => 'Wednesday',
      'it' => 'Mercoledì',
      'es' => 'Miércoles',
      'fr' => 'Mercredi',
      'de' => 'Mittwoch',
      'la' => 'Dies Mercurii',
      'he' => 'יום רביעי',
      'arc' => 'ܐܪܒܥܒܫܒܐ', // Aramaico: Arba'b'shaba
      'ru' => 'Среда',
      'ja' => '水曜日',
      'zh' => '星期三'
    ],
    'thursday' => [
      'en' => 'Thursday',
      'it' => 'Giovedì',
      'es' => 'Jueves',
      'fr' => 'Jeudi',
      'de' => 'Donnerstag',
      'la' => 'Dies Iovis',
      'he' => 'יום חמישי',
      'arc' => 'ܚܡܫܒܫܒܐ', // Aramaico: Khamshab'shaba
      'ru' => 'Четверг',
      'ja' => '木曜日',
      'zh' => '星期四'
    ],
    'friday' => [
      'en' => 'Friday',
      'it' => 'Venerdì',
      'es' => 'Viernes',
      'fr' => 'Vendredi',
      'de' => 'Freitag',
      'la' => 'Dies Veneris',
      'he' => 'יום שישי',
      'arc' => 'ܥܪܘܒܬܐ', // Aramaico: 'Arubta
      'ru' => 'Пятница',
      'ja' => '金曜日',
      'zh' => '星期五'
    ],
    'saturday' => [
      'en' => 'Saturday',
      'it' => 'Sabato',
      'es' => 'Sábado',
      'fr' => 'Samedi',
      'de' => 'Samstag',
      'la' => 'Dies Saturni',
      'he' => 'יום שבת',
      'arc' => 'ܫܒܬܐ', // Aramaico: Shabta
      'ru' => 'Суббота',
      'ja' => '土曜日',
      'zh' => '星期六'
    ],
    'sunday' => [
      'en' => 'Sunday',
      'it' => 'Domenica',
      'es' => 'Domingo',
      'fr' => 'Dimanche',
      'de' => 'Sonntag',
      'la' => 'Dies Solis',
      'he' => 'יום ראשון',
      'arc' => 'ܚܕܒܫܒܐ', // Aramaico: Khadb'shaba
      'ru' => 'Воскресенье',
      'ja' => '日曜日',
      'zh' => '星期日'
    ]
  ];

  /**
   * Mesi dell'anno
   * 
   * @var array MONTHS
   */
  public const MONTHS = [
    'january' => [
      'en' => 'January',
      'it' => 'Gennaio',
      'es' => 'Enero',
      'fr' => 'Janvier',
      'de' => 'Januar',
      'la' => 'Ianuarius',
      'he' => 'ינואר',
      'arc' => 'ܟܢܘܢ ܒ', // Aramaico: Kanon B (secondo Canone)
      'ru' => 'Январь',
      'ja' => '1月',
      'zh' => '一月'
    ],
    'february' => [
      'en' => 'February',
      'it' => 'Febbraio',
      'es' => 'Febrero',
      'fr' => 'Février',
      'de' => 'Februar',
      'la' => 'Februarius',
      'he' => 'פברואר',
      'arc' => 'ܫܒܛ', // Aramaico: Shvat
      'ru' => 'Февраль',
      'ja' => '2月',
      'zh' => '二月'
    ],
    'march' => [
      'en' => 'March',
      'it' => 'Marzo',
      'es' => 'Marzo',
      'fr' => 'Mars',
      'de' => 'März',
      'la' => 'Martius',
      'he' => 'מרץ',
      'arc' => 'ܐܕܪ', // Aramaico: Adar
      'ru' => 'Март',
      'ja' => '3月',
      'zh' => '三月'
    ],
    'april' => [
      'en' => 'April',
      'it' => 'Aprile',
      'es' => 'Abril',
      'fr' => 'Avril',
      'de' => 'April',
      'la' => 'Aprilis',
      'he' => 'אפריל',
      'arc' => 'ܢܝܣܢ', // Aramaico: Nisan
      'ru' => 'Апрель',
      'ja' => '4月',
      'zh' => '四月'
    ],
    'may' => [
      'en' => 'May',
      'it' => 'Maggio',
      'es' => 'Mayo',
      'fr' => 'Mai',
      'de' => 'Mai',
      'la' => 'Maius',
      'he' => 'מאי',
      'arc' => 'ܐܝܪ', // Aramaico: Iyar
      'ru' => 'Май',
      'ja' => '5月',
      'zh' => '五月'
    ],
    'june' => [
      'en' => 'June',
      'it' => 'Giugno',
      'es' => 'Junio',
      'fr' => 'Juin',
      'de' => 'Juni',
      'la' => 'Iunius',
      'he' => 'יוני',
      'arc' => 'ܚܙܝܪܢ', // Aramaico: Khziran
      'ru' => 'Июнь',
      'ja' => '6月',
      'zh' => '六月'
    ],
    'july' => [
      'en' => 'July',
      'it' => 'Luglio',
      'es' => 'Julio',
      'fr' => 'Juillet',
      'de' => 'Juli',
      'la' => 'Iulius',
      'he' => 'יולי',
      'arc' => 'ܬܡܘܙ', // Aramaico: Tammuz
      'ru' => 'Июль',
      'ja' => '7月',
      'zh' => '七月'
    ],
    'august' => [
      'en' => 'August',
      'it' => 'Agosto',
      'es' => 'Agosto',
      'fr' => 'Août',
      'de' => 'August',
      'la' => 'Augustus',
      'he' => 'אוגוסט',
      'arc' => 'ܐܒ', // Aramaico: Av
      'ru' => 'Август',
      'ja' => '8月',
      'zh' => '八月'
    ],
    'september' => [
      'en' => 'September',
      'it' => 'Settembre',
      'es' => 'Septiembre',
      'fr' => 'Septembre',
      'de' => 'September',
      'la' => 'September',
      'he' => 'ספטמבר',
      'arc' => 'ܐܝܠܘܠ', // Aramaico: Elul
      'ru' => 'Сентябрь',
      'ja' => '9月',
      'zh' => '九月'
    ],
    'october' => [
      'en' => 'October',
      'it' => 'Ottobre',
      'es' => 'Octubre',
      'fr' => 'Octobre',
      'de' => 'Oktober',
      'la' => 'October',
      'he' => 'אוקטובר',
      'arc' => 'ܬܫܪܝܢ ܐ', // Aramaico: Tishrin A (primo Tishri)
      'ru' => 'Октябрь',
      'ja' => '10月',
      'zh' => '十月'
    ],
    'november' => [
      'en' => 'November',
      'it' => 'Novembre',
      'es' => 'Noviembre',
      'fr' => 'Novembre',
      'de' => 'November',
      'la' => 'November',
      'he' => 'נובמבר',
      'arc' => 'ܬܫܪܝܢ ܒ', // Aramaico: Tishrin B (secondo Tishri)
      'ru' => 'Ноябрь',
      'ja' => '11月',
      'zh' => '十一月'
    ],
    'december' => [
      'en' => 'December',
      'it' => 'Dicembre',
      'es' => 'Diciembre',
      'fr' => 'Décembre',
      'de' => 'Dezember',
      'la' => 'December',
      'he' => 'דצמבר',
      'arc' => 'ܟܢܘܢ ܐ', // Aramaico: Kanon A (primo Canone)
      'ru' => 'Декабрь',
      'ja' => '12月',
      'zh' => '十二月'
    ]
  ];

  /**
   * Stagioni
   * 
   * @var array SEASONS
   */
  public const SEASONS = [
    'spring' => [
      'en' => 'Spring',
      'it' => 'Primavera',
      'es' => 'Primavera',
      'fr' => 'Printemps',
      'de' => 'Frühling',
      'la' => 'Ver',
      'he' => 'אביב',
      'arc' => 'ܐܒܝܒ', // Aramaico: Aviv
      'ru' => 'Весна',
      'ja' => '春',
      'zh' => '春天'
    ],
    'summer' => [
      'en' => 'Summer',
      'it' => 'Estate',
      'es' => 'Verano',
      'fr' => 'Été',
      'de' => 'Sommer',
      'la' => 'Aestas',
      'he' => 'קיץ',
      'arc' => 'ܩܝܛܐ', // Aramaico: Qayta
      'ru' => 'Лето',
      'ja' => '夏',
      'zh' => '夏天'
    ],
    'autumn' => [
      'en' => 'Autumn',
      'it' => 'Autunno',
      'es' => 'Otoño',
      'fr' => 'Automne',
      'de' => 'Herbst',
      'la' => 'Autumnus',
      'he' => 'סתיו',
      'arc' => 'ܚܪܦܐ', // Aramaico: Kharfa
      'ru' => 'Осень',
      'ja' => '秋',
      'zh' => '秋天'
    ],
    'winter' => [
      'en' => 'Winter',
      'it' => 'Inverno',
      'es' => 'Invierno',
      'fr' => 'Hiver',
      'de' => 'Winter',
      'la' => 'Hiems',
      'he' => 'חורף',
      'arc' => 'ܣܬܘܐ', // Aramaico: Satwa
      'ru' => 'Зима',
      'ja' => '冬',
      'zh' => '冬天'
    ]
  ];
}
