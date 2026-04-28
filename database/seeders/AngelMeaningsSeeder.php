<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Angels\AngelsMeaning;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
                'number' => 1, // Numero angelo
                'name' => "Vehuyah (Ve-h-u yah)", // Nome derivato dal trigramma per come ciene scritta la lettera e letta secondo la cadenza che comprende alla fine EL o YAH in base al nome dell'angelo
                'kabal_name' => "Vehuyah", // Nome associato attualmente all'angelo
                // Vav = connessione / chiodo / unione (connette l'Alto col Basso)
                // He  = rivelazione / soffio divino / manifestazione (espande l'essenza)
                // Vav = stabilizzazione nel mondo manifesto (Trasmissione dell'energia verso la materia)
                'trigram' => "Vav He Vav", // Trigramma 
                'trigram_significate' => "connessione rivelazione connessione", // Significato originale del trigramma
                // Definizione del nome di Dio in base al trigramma
                'definition' => [
                    'it' => 'WHW - Dio che unisce, rivela e riunisce',
                    'en' => 'WHW - God who unites, reveals and reunites',
                    'la' => 'WHW - Deus qui unit, revelat et reunit',
                    'he' => 'WHW - אלוהים המאחד, המגלה ומאחד מחדש',
                ],
                // Definizione della funzione di Dio in base alla Cabala
                'new_definition' => [
                    'it' => 'Dio è volontà creatrice',
                    'en' => 'God is creative will',
                    'la' => 'Deus est voluntas creatrix',
                    'he' => 'האל הוא הרצון הבורא',
                ],

                'hebrew_letters' => 'והו', // Lettere Ebraiche Gemataria - Trigramma
                'hebrew_name' => 'והויה',  // Lettere Ebraiche Gemataria - Trigramma completo

                // Spiegazione della Prima posizione => connessione che apre il canale
                // Spiegazione della Seconda posizione => rivelazione / manifestazione
                // Spiegazione della Terza posizione => stabilizzazione del collegamento
                'letter_details' => [
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => [
                            'it' => 'Connessione verticale che apre il canale tra il divino e il creato.',
                            'en' => 'Vertical connection opening the channel between the divine and creation.',
                            'la' => 'Connexio verticalis quae canalem inter divinum et creatum aperit.',
                            'he' => 'חיבור אנכי הפותח את הערוץ בין האלוהי לבריאה'
                        ]
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => [
                            'it' => 'Rivelazione e manifestazione del soffio divino nella realtà.',
                            'en' => 'Revelation and manifestation of the divine breath into reality.',
                            'la' => 'Revelatio et manifestatio spiritus divini in realitate.',
                            'he' => 'התגלות ונשימת הרוח האלוהית במציאות'
                        ]
                    ],
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => [
                            'it' => 'Connessione che stabilizza e trasmette l’energia divina nel mondo manifesto.',
                            'en' => 'Connection that stabilizes and transmits divine energy into the manifested world.',
                            'la' => 'Connexio quae energiam divinam in mundo manifesto stabilit et transmittit.',
                            'he' => 'חיבור המייצב ומעביר את האנרגיה האלוהית בעולם הגלוי'
                        ]
                    ],
                ],
                // Coro di appartenenza
                'choir' => 'seraphim',
                // Arcangelo di appartenenza
                'archangel' => 'metatron',
                // Elemento di Appartenenza
                'element' => 'fire',
                // Giorno e mese di reggenza e segno zodiacale appropriato
                'zodiac_days' => [
                    ['day' => 21, 'month' => 3, 'sign' => 'aries'],
                    ['day' => 22, 'month' => 3, 'sign' => 'aries'],
                    ['day' => 23, 'month' => 3, 'sign' => 'aries'],
                    ['day' => 24, 'month' => 3, 'sign' => 'aries'],
                    ['day' => 25, 'month' => 3, 'sign' => 'aries'],
                ],

                // Orientamento
                'orientation' => 'EST',

                // Salmo -> da indicare quello giusto associato in origine in base a Agrippa GD Master
                'psalm' => 3,   // Numero Salmo Esempio: "Tu Domine clipeus es mihi" lega a protezione/volontà divina.
                'psalm_verse' => 4, // Numerazione Ebraica Masoretica
                'vulgata' => 3,
                'vulgata_verse' => 3, // Numerazione Vulgata latina
                'psalm_link' => '/salmi/3',

                // Contenuti ed esortazioni verso DIO, perché invocare Dio con questa funzione?
                // Qualità elargiti per l'invocazione
                'quality' => [
                    'it' => 'Volontà potente, energia creativa primordiale, spirito di iniziativa.',
                    'en' => 'Powerful will, primordial creative energy, initiative.',
                    'la' => 'Voluntas potens, energia creatrix primordialis.',
                    'he' => 'רצון חזק ואנרגיה יצירתית ראשונית'
                ],
                // Aiuto che tende a dare questa funzione celebrativa
                'help' => [
                    'it' => 'Dona volontà ferrea e coraggio.',
                    'en' => 'Grants strong will and courage.',
                    'la' => 'Voluntatem firmam et fortitudinem donat.',
                    'he' => 'מעניק רצון חזק ואומץ'
                ],
                // A cosa aiuta a prevenire
                'prevent' => [
                    'it' => 'Previene apatia e impulsività distruttiva.',
                    'en' => 'Prevents apathy and destructive impulsiveness.',
                    'la' => 'Apatheiam et impulsivitatem destruentem impedit.',
                    'he' => 'מונע אדישות ואימפולסיביות הרסנית'
                ],
            ],

            [
                'number' => 2,
                'name' => "Yelyel (Ye-l-y el)",
                'kabal_name' => "Jeliel", // Giacobbe Jacob più antico Yakob in forma latina tradizionale (Golden Dawn / Ambelain)
                // Yod = scintilla divina originaria (punto primordiale)
                // Lamed = elevazione, apprendimento, direzione verso l’Alto (movimento ascensionale)
                // Yod = scintilla divina originaria (ritorno al principio)
                'trigram' => "Yod Lamed Yod",
                'trigram_significate' => "origine elevazione origine",

                'definition' => [
                    'it' => 'YLY - Dio che eleva e riconduce al principio',
                    'en' => 'YLY - God who elevates and returns to the origin',
                    'la' => 'YLY - Deus qui elevat et ad principium reducit',
                    'he' => 'YLY - האל המרומם ומשיב אל הראשית',
                ],

                'new_definition' => [
                    'it' => 'Dio è armonia ordinatrice',
                    'en' => 'God is ordering harmony',
                    'la' => 'Deus est harmonia ordinans',
                    'he' => 'האל הוא הרמוניה מסדרת',
                ],

                'hebrew_letters' => 'ילי',
                'hebrew_name' => 'יליאל',

                'letter_details' => [
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Scintilla divina originaria che dà inizio al movimento dell’esistenza.',
                            'en' => 'Primordial divine spark that initiates the movement of existence.',
                            'la' => 'Scintilla divina primordialis quae motum existentiae init.',
                            'he' => 'ניצוץ אלוהי ראשוני הפותח את תנועת הקיום'
                        ]
                    ],
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => [
                            'it' => 'Elevazione e guida spirituale che orienta verso l’Alto e ordina il cammino.',
                            'en' => 'Spiritual elevation and guidance directing upward and ordering the path.',
                            'la' => 'Elevatio et directio spiritualis quae sursum ducit et iter ordinat.',
                            'he' => 'התעלות והכוונה רוחנית המובילה כלפי מעלה ומסדרת את הדרך'
                        ]
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Ritorno al principio divino, compimento del ciclo e reintegrazione nell’unità originaria.',
                            'en' => 'Return to the divine origin, completion of the cycle and reintegration into primordial unity.',
                            'la' => 'Redditus ad principium divinum, completio circuli et reintegratio in unitatem primordialem.',
                            'he' => 'חזרה למקור האלוהי, השלמת המעגל ושיבה לאחדות הראשונית'
                        ]
                    ],
                ],

                'choir' => 'seraphim',
                'archangel' => 'metatron',
                'element' => 'fire',

                'zodiac_days' => [
                    ['day' => 26, 'month' => 3, 'sign' => 'aries'],
                    ['day' => 27, 'month' => 3, 'sign' => 'aries'],
                    ['day' => 28, 'month' => 3, 'sign' => 'aries'],
                    ['day' => 29, 'month' => 3, 'sign' => 'aries'],
                    ['day' => 30, 'month' => 3, 'sign' => 'aries'],
                ],

                // Orientamento
                'orientation' => 'EST',

                // Salmo
                'psalm' => 22,
                'psalm_verse' => 20, // Numerazione Ebraica Masoretica
                'vulgata' => 21,
                'vulgata_verse' => 19, // Numerazione Vulgata latina "Tu autem Domine ne longe facias"
                'psalm_link' => '/salmi/22',

                // Contenuti ed esortazioni verso DIO, perché invocare Dio con questa funzione?
                'quality' => [
                    'it' => 'Amore universale, armonia e capacità di conciliare gli opposti.',
                    'en' => 'Universal love, harmony and the ability to reconcile opposites.',
                    'la' => 'Amor universalis, harmonia et conciliatio contrariorum.',
                    'he' => 'אהבה אוניברסלית, הרמוניה ויכולת לאחד ניגודים'
                ],
                // Aiuto che tende a dare questa funzione celebrativa
                'help' => [
                    'it' => 'Favorisce pace nelle relazioni, fedeltà e giustizia nelle decisioni.',
                    'en' => 'Promotes peace in relationships, fidelity and justice in decisions.',
                    'la' => 'Pacem in relationibus, fidelitatem et iustitiam in decisionibus fovet.',
                    'he' => 'מעודד שלום ביחסים ונאמנות'
                ],
                // A cosa aiuta a prevenire
                'prevent' => [
                    'it' => 'Previene conflitti affettivi e squilibrio nelle relazioni.',
                    'en' => 'Prevents emotional conflicts and relational imbalance.',
                    'la' => 'Conflictus affectivos et inaequalitatem impedit.',
                    'he' => 'מונע קונפליקטים רגשיים וחוסר איזון ביחסים'
                ],
            ],

            [
                'number' => 3,
                'name' => "Sytael (S-y-ta el)",
                'kabal_name' => "Sitael",
                // Samekh = sostegno, struttura che circonda
                // Yod = scintilla divina originaria
                // Teth = bene custodito, potenziale nascosto
                'trigram' => "Samekh Yod Teth",
                'trigram_significate' => "sostegno origine bene custodito",

                'definition' => [
                    'it' => 'SYT - Dio che sostiene e protegge nel bene',
                    'en' => 'SYT - God who sustains and protects through goodness',
                    'la' => 'SYT - Deus qui sustinet et protegit per bonum',
                    'he' => 'SYT - האל התומך והמגן דרך הטוב',
                ],

                'new_definition' => [
                    'it' => 'Dio è protezione stabile',
                    'en' => 'God is steadfast protection',
                    'la' => 'Deus est tutela stabilis',
                    'he' => 'האל הוא הגנה יציבה',
                ],

                'hebrew_letters' => 'סיט',
                'hebrew_name' => 'סיטאל',

                'letter_details' => [
                    [
                        'letter' => 'ס',
                        'name' => 'Samekh',
                        'value' => 60,
                        'meaning' => [
                            'it' => 'Sostegno strutturale che avvolge e protegge, fondamento della stabilità.',
                            'en' => 'Structural support that surrounds and protects, foundation of stability.',
                            'la' => 'Sustentatio structurae circumdans et protegens, fundamentum stabilitatis.',
                            'he' => 'תמיכה מבנית המקיפה ומגינה, יסוד היציבות'
                        ]
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Scintilla originaria che attiva l’intenzione e orienta l’azione.',
                            'en' => 'Primordial spark activating intention and directing action.',
                            'la' => 'Scintilla primordialis intentionem excitans et actionem dirigens.',
                            'he' => 'ניצוץ ראשוני המפעיל כוונה ומכוון פעולה'
                        ]
                    ],
                    [
                        'letter' => 'ט',
                        'name' => 'Teth',
                        'value' => 9,
                        'meaning' => [
                            'it' => 'Bene custodito che matura interiormente e si manifesta come protezione compiuta.',
                            'en' => 'Guarded goodness maturing inwardly and manifesting as fulfilled protection.',
                            'la' => 'Bonum custoditum interius maturans et in protectione perfecta manifestatum.',
                            'he' => 'טוב שמור המתפתח בפנים ומתבטא כהגנה מושלמת'
                        ]
                    ],
                ],

                'choir' => 'seraphim',
                'archangel' => 'metatron',
                'element' => 'fire',

                'zodiac_days' => [
                    ['day' => 31, 'month' => 3, 'sign' => 'aries'],
                    ['day' => 1, 'month' => 4, 'sign' => 'aries'],
                    ['day' => 2, 'month' => 4, 'sign' => 'aries'],
                    ['day' => 3, 'month' => 4, 'sign' => 'aries'],
                    ['day' => 4, 'month' => 4, 'sign' => 'aries'],
                ],

                // Gradi
                // 'degree_start' => 10,
                // 'degree_end' => 15,
                'orientation' => 'EST',

                // Salmo
                'psalm' => 22,
                'psalm_verse' => 21,
                'vulgata' => 21,
                'vulgata_verse' => 20,
                'psalm_link' => '/salmi/22',

                // Contenuti
                'quality' => [
                    'it' => 'Protezione stabile, forza nelle prove e maturazione del bene interiore.',
                    'en' => 'Steadfast protection, strength in trials and maturation of inner goodness.',
                    'la' => 'Tutela stabilis, fortitudo in probationibus et maturatio boni interioris.',
                    'he' => 'הגנה יציבה, כוח בניסיונות והבשלה פנימית של הטוב'
                ],
                'help' => [
                    'it' => 'Sostiene nelle difficoltà, protegge dalle minacce e rafforza la fiducia.',
                    'en' => 'Supports in difficulties, protects from threats and strengthens trust.',
                    'la' => 'In difficultatibus sustinet, a periculis protegit et fiduciam roborat.',
                    'he' => 'תומך בקשיים, מגן מאיומים ומחזק אמון'
                ],
                'prevent' => [
                    'it' => 'Previene crolli strutturali, instabilità e perdita di direzione.',
                    'en' => 'Prevents structural collapse, instability and loss of direction.',
                    'la' => 'Ruinam structuralem, instabilitatem et directionis amissionem impedit.',
                    'he' => 'מונע קריסה מבנית, חוסר יציבות ואובדן כיוון'
                ],
            ],

            [
                'number' => 4,
                'name' => "Alamyah (A-la-m yah)",
                'kabal_name' => "Elemyah",

                // Ayin = visione profonda, percezione interiore
                // Lamed = elevazione, apprendimento, direzione verso l’Alto
                // Mem = acqua, flusso, maturazione
                'trigram' => "Ayin Lamed Mem",
                'trigram_significate' => "visione elevazione flusso",

                'definition' => [
                    'it' => 'ALM - Dio che vede, eleva e fa fluire',
                    'en' => 'ALM - God who sees, elevates and causes to flow',
                    'la' => 'ALM - Deus qui videt, elevat et fluere facit',
                    'he' => 'ALM - האל הרואה, המרומם והמזרים',
                ],

                'new_definition' => [
                    'it' => 'Dio è rettificazione consapevole',
                    'en' => 'God is conscious rectification',
                    'la' => 'Deus est rectificatio conscia',
                    'he' => 'האל הוא תיקון מודע',
                ],

                'hebrew_letters' => 'עלם',
                'hebrew_name' => 'עלמיה',

                'letter_details' => [
                    [
                        'letter' => 'ע',
                        'name' => 'Ayin',
                        'value' => 70,
                        'meaning' => [
                            'it' => 'Visione profonda che apre la consapevolezza e permette discernimento.',
                            'en' => 'Deep vision opening awareness and enabling discernment.',
                            'la' => 'Visio profunda conscientiam aperiens et discretionem permittens.',
                            'he' => 'ראייה עמוקה הפותחת מודעות ומאפשרת הבחנה'
                        ]
                    ],
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => [
                            'it' => 'Elevazione attraverso apprendimento e orientamento verso l’ordine superiore.',
                            'en' => 'Elevation through learning and orientation toward higher order.',
                            'la' => 'Elevatio per doctrinam et directio ad ordinem superiorem.',
                            'he' => 'התעלות דרך לימוד והכוונה לסדר עליון'
                        ]
                    ],
                    [
                        'letter' => 'ם',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => [
                            'it' => 'Flusso compiuto e maturazione interiore che conduce alla trasformazione.',
                            'en' => 'Fulfilled flow and inner maturation leading to transformation.',
                            'la' => 'Fluxus perfectus et maturatio interior ad transformationem ducens.',
                            'he' => 'זרימה מושלמת והבשלה פנימית המובילה לשינוי'
                        ]
                    ],
                ],

                'choir' => 'seraphim',
                'archangel' => 'metatron',
                'element' => 'fire',

                'zodiac_days' => [
                    ['day' => 5, 'month' => 4, 'sign' => 'aries'],
                    ['day' => 6, 'month' => 4, 'sign' => 'aries'],
                    ['day' => 7, 'month' => 4, 'sign' => 'aries'],
                    ['day' => 8, 'month' => 4, 'sign' => 'aries'],
                    ['day' => 9, 'month' => 4, 'sign' => 'aries'],
                ],

                // Gradi
                // 'degree_start' => 15,
                // 'degree_end' => 20,
                'orientation' => 'EST',

                // Salmo
                'psalm' => 6,
                'psalm_verse' => 5,
                'vulgata' => 6,
                'vulgata_verse' => 4,
                'psalm_link' => '/salmi/6',

                // Contenuti
                'quality' => [
                    'it' => 'Consapevolezza, rettifica del cammino e trasformazione interiore.',
                    'en' => 'Awareness, correction of one’s path and inner transformation.',
                    'la' => 'Conscientia, correctio itineris et transformato interior.',
                    'he' => 'מודעות, תיקון הדרך ושינוי פנימי'
                ],
                'help' => [
                    'it' => 'Aiuta a comprendere gli errori e ristabilire equilibrio dopo la caduta.',
                    'en' => 'Helps understand mistakes and restore balance after a fall.',
                    'la' => 'Errores intellegere et aequilibrium restituere adiuvat.',
                    'he' => 'מסייע להבין טעויות ולהשיב איזון'
                ],
                'prevent' => [
                    'it' => 'Previene cecità spirituale e dispersione di energia.',
                    'en' => 'Prevents spiritual blindness and dissipation of energy.',
                    'la' => 'Caecitatem spiritualem et energiae dispersionem impedit.',
                    'he' => 'מונע עיוורון רוחני ופיזור אנרגיה'
                ],
            ],

            [
                'number' => 5,
                'name' => "Mahashyah (Ma-ha-sh yah)",
                'kabal_name' => "Mahasiah",

                // Mem = acqua, flusso, matrice trasformativa
                // He = rivelazione, apertura, manifestazione
                // Shin = fuoco, trasformazione, elevazione spirituale
                'trigram' => "Mem He Shin",
                'trigram_significate' => "flusso rivelazione trasformazione",

                'definition' => [
                    'it' => 'MHS - Dio che rivela e trasforma',
                    'en' => 'MHS - God who reveals and transforms',
                    'la' => 'MHS - Deus qui revelat et transformat',
                    'he' => 'MHS - אלוהים המגלה והמשנה',
                ],

                'new_definition' => [
                    'it' => 'Dio è trasformazione purificante',
                    'en' => 'God is purifying transformation',
                    'la' => 'Deus est transformatio purificans',
                    'he' => 'האל הוא שינוי מטהר',
                ],

                'hebrew_letters' => 'מהש',
                'hebrew_name' => 'מהשיה',

                'letter_details' => [
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => [
                            'it' => 'Flusso originario e matrice interiore da cui nasce la purificazione.',
                            'en' => 'Primordial flow and inner matrix from which purification arises.',
                            'la' => 'Fluxus primordialis et matrix interior unde purificatio oritur.',
                            'he' => 'זרימה ראשונית ומטריצה פנימית שממנה נולד הטיהור'
                        ]
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => [
                            'it' => 'Rivelazione che apre ciò che era nascosto e rende visibile la verità.',
                            'en' => 'Revelation opening what was hidden and making truth visible.',
                            'la' => 'Revelatio occultum aperiens et veritatem manifestans.',
                            'he' => 'התגלות הפותחת את הנסתר ומגלה את האמת'
                        ]
                    ],
                    [
                        'letter' => 'ש',
                        'name' => 'Shin',
                        'value' => 300,
                        'meaning' => [
                            'it' => 'Fuoco compiuto che trasforma e purifica attraverso intensità spirituale.',
                            'en' => 'Fulfilled fire that transforms and purifies through spiritual intensity.',
                            'la' => 'Ignis perfectus qui per intensitatem spiritualem transformat et purificat.',
                            'he' => 'אש מושלמת המשנה ומטהרת בעוצמה רוחנית'
                        ]
                    ],
                ],

                'choir' => 'seraphim',
                'archangel' => 'metatron',
                'element' => 'fire',

                'zodiac_days' => [
                    ['day' => 10, 'month' => 4, 'sign' => 'aries'],
                    ['day' => 11, 'month' => 4, 'sign' => 'aries'],
                    ['day' => 12, 'month' => 4, 'sign' => 'aries'],
                    ['day' => 13, 'month' => 4, 'sign' => 'aries'],
                    ['day' => 14, 'month' => 4, 'sign' => 'aries'],
                ],

                // Gradi
                // 'degree_start' => 20,
                // 'degree_end' => 25,
                'orientation' => 'EST',

                // Salmo
                'psalm' => 34,
                'psalm_verse' => 8,
                'vulgata' => 33,
                'vulgata_verse' => 8,
                'psalm_link' => '/salmi/34',

                // Contenuti
                'quality' => [
                    'it' => 'Purificazione interiore, rivelazione e trasformazione spirituale attiva.',
                    'en' => 'Inner purification, revelation and active spiritual transformation.',
                    'la' => 'Purificatio interior, revelatio et transformato spiritualis activa.',
                    'he' => 'טיהור פנימי, התגלות ושינוי רוחני פעיל'
                ],
                'help' => [
                    'it' => 'Favorisce chiarezza mentale, studio profondo e rinnovamento.',
                    'en' => 'Promotes mental clarity, deep study and renewal.',
                    'la' => 'Claritatem mentis et renovationem fovet.',
                    'he' => 'מעודד בהירות מחשבתית והתחדשות'
                ],
                'prevent' => [
                    'it' => 'Previene stagnazione spirituale e rigidità interiore.',
                    'en' => 'Prevents spiritual stagnation and inner rigidity.',
                    'la' => 'Stagnationem spiritualem impedit.',
                    'he' => 'מונע קיפאון רוחני ונוקשות פנימית'
                ],
            ],

            [
                'number' => 6,
                'name' => "Lalahel (La-la-h el)",
                'kabal_name' => "Lelahel",

                // Lamed = elevazione / apprendimento / direzione verso l’Alto
                // Lamed = elevazione / apprendimento / direzione verso l’Alto
                // He = rivelazione / soffio divino / manifestazione
                'trigram' => "Lamed Lamed He",
                'trigram_significate' => "elevazione elevazione rivelazione",

                'definition' => [
                    'it' => 'LLH - Dio che eleva e rivela',
                    'en' => 'LLH - God who elevates and reveals',
                    'la' => 'LLH - Deus qui elevat et revelat',
                    'he' => 'LLH - האל המרומם והמגלה',
                ],

                'new_definition' => [
                    'it' => 'Dio è luce che illumina',
                    'en' => 'God is illuminating light',
                    'la' => 'Deus est lux illuminans',
                    'he' => 'האל הוא אור מאיר',
                ],

                'hebrew_letters' => 'ללה',
                'hebrew_name' => 'ללהל',

                'letter_details' => [
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => [
                            'it' => 'Elevazione attraverso la conoscenza e tensione verso l’apprendimento.',
                            'en' => 'Elevation through knowledge and aspiration toward learning.',
                            'la' => 'Elevatio per scientiam et intentio ad doctrinam.',
                            'he' => 'התעלות דרך ידע ושאיפה ללימוד'
                        ]
                    ],
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => [
                            'it' => 'Rafforzamento dell’elevazione e consolidamento della coscienza.',
                            'en' => 'Strengthening of elevation and consolidation of awareness.',
                            'la' => 'Confirmatio elevationis et consolidatio conscientiae.',
                            'he' => 'חיזוק ההתעלות והעמקת המודעות'
                        ]
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => [
                            'it' => 'Apertura luminosa che rende visibile ciò che è stato compreso interiormente.',
                            'en' => 'Luminous opening that makes visible what has been understood inwardly.',
                            'la' => 'Apertio luminosa quae intellectum interiorem manifestat.',
                            'he' => 'פתיחה מאירה המגלה את ההבנה הפנימית'
                        ]
                    ],
                ],

                'choir' => 'seraphim',
                'archangel' => 'metatron',
                'element' => 'fire',

                'zodiac_days' => [
                    ['day' => 15, 'month' => 4, 'sign' => 'aries'],
                    ['day' => 16, 'month' => 4, 'sign' => 'aries'],
                    ['day' => 17, 'month' => 4, 'sign' => 'aries'],
                    ['day' => 18, 'month' => 4, 'sign' => 'aries'],
                    ['day' => 19, 'month' => 4, 'sign' => 'aries'],
                ],

                // Gradi
                // 'degree_start' => 25,
                // 'degree_end' => 30,
                'orientation' => 'EST',

                // Salmo
                'psalm' => 71,
                'psalm_verse' => 5,
                'vulgata' => 70,
                'vulgata_verse' => 5,
                'psalm_link' => '/salmi/71',

                // Contenuti
                'quality' => [
                    'it' => 'Elevazione della coscienza e manifestazione della luce interiore.',
                    'en' => 'Elevation of consciousness and manifestation of inner light.',
                    'la' => 'Elevatio conscientiae et manifestatio lucis interioris.',
                    'he' => 'התעלות המודעות והופעת האור הפנימי'
                ],
                'help' => [
                    'it' => 'Favorisce chiarezza mentale, espressione autentica e valorizzazione dei talenti.',
                    'en' => 'Promotes mental clarity, authentic expression and recognition of talents.',
                    'la' => 'Claritatem mentis et expressionem authenticam fovet.',
                    'he' => 'מעודד בהירות מחשבתית וביטוי אותנטי'
                ],
                'prevent' => [
                    'it' => 'Previene oscuramento mentale e uso distorto delle capacità.',
                    'en' => 'Prevents mental obscurity and misuse of abilities.',
                    'la' => 'Obscurationem mentis et abusum facultatum impedit.',
                    'he' => 'מונע ערפול מחשבתי ושימוש שגוי ביכולות'
                ],
            ],

            [
                'number' => 7,
                'name' => "Akayah (A-k-a yah)",
                'kabal_name' => "Achayah",

                // Aleph = principio unitario / origine indivisa
                // Kaf = contenitore / forma che accoglie
                // Aleph = principio unitario / ritorno all’unità
                'trigram' => "Aleph Kaf Aleph",
                'trigram_significate' => "principio contenitore principio",

                'definition' => [
                    'it' => 'AKA - Dio che stabilisce il principio e lo custodisce',
                    'en' => 'AKA - God who establishes and guards the principle',
                    'la' => 'AKA - Deus qui principium statuit et custodit',
                    'he' => 'AKA - האל המייסד ושומר את העיקרון',
                ],

                'new_definition' => [
                    'it' => 'Dio è principio stabile',
                    'en' => 'God is stable principle',
                    'la' => 'Deus est principium stabile',
                    'he' => 'האל הוא עיקרון יציב',
                ],

                'hebrew_letters' => 'אכא',
                'hebrew_name' => 'אכאיה',

                'letter_details' => [
                    [
                        'letter' => 'א',
                        'name' => 'Aleph',
                        'value' => 1,
                        'meaning' => [
                            'it' => 'Principio unitario, origine indivisa e radice dell’essere.',
                            'en' => 'Unitary principle, undivided origin and root of being.',
                            'la' => 'Principium unitarium et radix existentiae.',
                            'he' => 'עיקרון אחדותי ושורש הקיום'
                        ]
                    ],
                    [
                        'letter' => 'כ',
                        'name' => 'Kaf',
                        'value' => 20,
                        'meaning' => [
                            'it' => 'Contenitore della potenzialità, forma che accoglie e struttura l’esperienza.',
                            'en' => 'Container of potential, form that receives and structures experience.',
                            'la' => 'Vas potentiae quod experientiam format.',
                            'he' => 'כלי הפוטנציאל המעצב את החוויה'
                        ]
                    ],
                    [
                        'letter' => 'א',
                        'name' => 'Aleph',
                        'value' => 1,
                        'meaning' => [
                            'it' => 'Ritorno consapevole all’unità dopo il processo di maturazione.',
                            'en' => 'Conscious return to unity after maturation.',
                            'la' => 'Redditus conscius ad unitatem post maturationem.',
                            'he' => 'חזרה מודעת לאחדות לאחר תהליך ההבשלה'
                        ]
                    ],
                ],

                'choir' => 'seraphim',
                'archangel' => 'metatron',
                'element' => 'earth',

                'zodiac_days' => [
                    ['day' => 20, 'month' => 4, 'sign' => 'aries'],
                    ['day' => 21, 'month' => 4, 'sign' => 'taurus'],
                    ['day' => 22, 'month' => 4, 'sign' => 'taurus'],
                    ['day' => 23, 'month' => 4, 'sign' => 'taurus'],
                    ['day' => 24, 'month' => 4, 'sign' => 'taurus'],
                ],

                // Gradi
                // 'degree_start' => 0,
                // 'degree_end' => 5,
                'orientation' => 'EST',

                // Salmo
                'psalm' => 119,
                'psalm_verse' => 15,
                'vulgata' => 118,
                'vulgata_verse' => 15,
                'psalm_link' => '/salmi/119',

                // Contenuti
                'quality' => [
                    'it' => 'Stabilità interiore e integrazione armonica tra principio ed esperienza.',
                    'en' => 'Inner stability and harmonious integration of principle and experience.',
                    'la' => 'Stabilitas interior et integratio principii cum experientia.',
                    'he' => 'יציבות פנימית ושילוב הרמוני בין עיקרון לחוויה'
                ],
                'help' => [
                    'it' => 'Favorisce perseveranza, osservazione profonda e comprensione dei cicli naturali.',
                    'en' => 'Promotes perseverance, deep observation and understanding of natural cycles.',
                    'la' => 'Perseverantiam et intelligentiam temporum fovet.',
                    'he' => 'מעודד התמדה והבנת מחזורי החיים'
                ],
                'prevent' => [
                    'it' => 'Previene impulsività e incapacità di apprendere dall’esperienza.',
                    'en' => 'Prevents impulsiveness and failure to learn from experience.',
                    'la' => 'Impulsivitatem et imperitiam discendi impedit.',
                    'he' => 'מונע פזיזות וחוסר למידה מהניסיון'
                ],
            ],

            [
                'number' => 8,
                'name' => "Kahetel (Ka-He-t el)",
                'kabal_name' => "Cahetel",

                // Kaf = contenitore / potenzialità operativa
                // He = rivelazione / apertura / manifestazione
                // Tav = sigillo / compimento / realizzazione finale
                'trigram' => "Kaf He Tav",
                'trigram_significate' => "contenitore rivelazione compimento",

                'definition' => [
                    'it' => 'KHT - Dio che contiene, rivela e compie',
                    'en' => 'KHT - God who contains, reveals and fulfills',
                    'la' => 'KHT - Deus qui continet, revelat et complet',
                    'he' => 'KHT - אלוהים המכיל, המגלה ומשלים',
                ],

                'new_definition' => [
                    'it' => 'Dio è benedizione feconda',
                    'en' => 'God is fruitful blessing',
                    'la' => 'Deus est benedictio fecunda',
                    'he' => 'האל הוא ברכה פוריה',
                ],

                'hebrew_letters' => 'כהת',
                'hebrew_name' => 'כהתאל',

                'letter_details' => [
                    [
                        'letter' => 'כ',
                        'name' => 'Kaf',
                        'value' => 20,
                        'meaning' => [
                            'it' => 'Potenzialità operativa che accoglie e trasforma in azione concreta.',
                            'en' => 'Operative potential that receives and transforms into concrete action.',
                            'la' => 'Potentia operativa quae in actum convertitur.',
                            'he' => 'פוטנציאל פעיל ההופך למעשה ממשי'
                        ]
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => [
                            'it' => 'Apertura rivelatrice che permette alla forza di manifestarsi.',
                            'en' => 'Revealing openness that allows force to manifest.',
                            'la' => 'Apertio revelans quae vim manifestari sinit.',
                            'he' => 'פתיחה מגלה המאפשרת לכוח להתגלות'
                        ]
                    ],
                    [
                        'letter' => 'ת',
                        'name' => 'Tav',
                        'value' => 400,
                        'meaning' => [
                            'it' => 'Sigillo finale e compimento concreto di ciò che è stato iniziato.',
                            'en' => 'Final seal and concrete completion of what was initiated.',
                            'la' => 'Sigillum finale et consummatio concreta.',
                            'he' => 'חותם סופי והשלמה מעשית'
                        ]
                    ],
                ],

                'choir' => 'seraphim',
                'archangel' => 'metatron',
                'element' => 'earth',

                'zodiac_days' => [
                    ['day' => 25, 'month' => 4, 'sign' => 'taurus'],
                    ['day' => 26, 'month' => 4, 'sign' => 'taurus'],
                    ['day' => 27, 'month' => 4, 'sign' => 'taurus'],
                    ['day' => 28, 'month' => 4, 'sign' => 'taurus'],
                    ['day' => 29, 'month' => 4, 'sign' => 'taurus'],
                ],

                // Gradi
                // 'degree_start' => 5,
                // 'degree_end' => 10,
                'orientation' => 'EST',

                // Salmo
                'psalm' => 95,
                'psalm_verse' => 2,
                'vulgata' => 94,
                'vulgata_verse' => 2,
                'psalm_link' => '/salmi/95',

                // Contenuti
                'quality' => [
                    'it' => 'Benedizione operativa che trasforma il lavoro in realizzazione concreta e feconda.',
                    'en' => 'Operative blessing that transforms work into fruitful concrete realization.',
                    'la' => 'Benedictio operativa quae laborem in fructum convertit.',
                    'he' => 'ברכה פעילה ההופכת עבודה להגשמה פוריה'
                ],
                'help' => [
                    'it' => 'Favorisce prosperità, gratitudine e radicamento spirituale nella vita quotidiana.',
                    'en' => 'Promotes prosperity, gratitude and spiritual grounding in daily life.',
                    'la' => 'Prosperitatem et radicementum spirituale fovet.',
                    'he' => 'מעודד שפע והשתרשות רוחנית בחיי היומיום'
                ],
                'prevent' => [
                    'it' => 'Previene sterilità interiore, ingratitudine e distacco dalla realtà concreta.',
                    'en' => 'Prevents inner sterility, ingratitude and detachment from concrete reality.',
                    'la' => 'Sterilitatem interiorem et ingratitudinem impedit.',
                    'he' => 'מונע עקרות פנימית וניתוק מהמציאות'
                ],
            ],

            // Cherubini
            [
                'number' => 9,
                'name' => "Chazyel (Ch-z-y el)",
                'kabal_name' => "Haziel",

                // Chet = recinto / protezione / vita custodita
                // Zayin = taglio / separazione / discernimento attivo
                // Yod = scintilla originaria / principio operativo
                'trigram' => "Chet Zayin Yod",
                'trigram_significate' => "vita discernimento origine",

                'definition' => [
                    'it' => 'HZY - Dio che delimita, separa e ricondduce all’essenza',
                    'en' => 'HZY - God who delimits, separates and restores to essence',
                    'la' => 'HZY - Deus qui circumscribit, separat et ad essentiam reducit',
                    'he' => 'HZY - האל המגביל, המפריד ומשיב אל המהות',
                ],

                'new_definition' => [
                    'it' => 'Dio è misericordia attiva',
                    'en' => 'God is active mercy',
                    'la' => 'Deus est misericordia activa',
                    'he' => 'האל הוא רחמים פעילים',
                ],

                'hebrew_letters' => 'חזי',
                'hebrew_name' => 'חזיאל',

                'letter_details' => [
                    [
                        'letter' => 'ח',
                        'name' => 'Chet',
                        'value' => 8,
                        'meaning' => [
                            'it' => 'Vita ed energia che sostengono e proteggono all’interno di un recinto sacro.',
                            'en' => 'Life and sustaining energy within a sacred enclosure.',
                            'la' => 'Vita et energia intra clausuram sacram custodita.',
                            'he' => 'חיים ואנרגיה השומרים בתוך מסגרת קדושה'
                        ]
                    ],
                    [
                        'letter' => 'ז',
                        'name' => 'Zayin',
                        'value' => 7,
                        'meaning' => [
                            'it' => 'Discernimento attraverso la prova e maturazione nella lotta.',
                            'en' => 'Discernment through trial and maturation in struggle.',
                            'la' => 'Discretio per probationem et certamen.',
                            'he' => 'הבחנה דרך ניסיון והבשלה במאבק'
                        ]
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Scintilla divina che orienta l’azione verso misericordia e coscienza.',
                            'en' => 'Divine spark directing action toward mercy and awareness.',
                            'la' => 'Scintilla divina actionem ad misericordiam dirigit.',
                            'he' => 'ניצוץ אלוהי המכוון לפעולה מתוך רחמים ותודעה'
                        ]
                    ],
                ],

                'choir' => 'cherubim',
                'archangel' => 'raziel',
                'element' => 'earth',

                'zodiac_days' => [
                    ['day' => 30, 'month' => 4, 'sign' => 'taurus'],
                    ['day' => 1, 'month' => 5, 'sign' => 'taurus'],
                    ['day' => 2, 'month' => 5, 'sign' => 'taurus'],
                    ['day' => 3, 'month' => 5, 'sign' => 'taurus'],
                    ['day' => 4, 'month' => 5, 'sign' => 'taurus'],
                ],

                // Gradi
                // 'degree_start' => 10,
                // 'degree_end' => 15,
                'orientation' => 'EST',

                // Salmo
                'psalm' => 25,
                'psalm_verse' => 6,
                'vulgata' => 24,
                'vulgata_verse' => 6,
                'psalm_link' => '/salmi/25',

                // Contenuti
                'quality' => [
                    'it' => 'Misericordia operante, perdono e capacità di riconciliazione profonda.',
                    'en' => 'Active mercy, forgiveness and deep reconciliation.',
                    'la' => 'Misericordia operans et reconciliatio profunda.',
                    'he' => 'רחמים פעילים ויכולת פיוס עמוקה'
                ],
                'help' => [
                    'it' => 'Favorisce il perdono sincero, la guarigione delle ferite interiori e il ristabilimento dell’armonia.',
                    'en' => 'Promotes sincere forgiveness, healing of inner wounds and restoration of harmony.',
                    'la' => 'Remissionem sinceram et sanationem interiorum vulnerum fovet.',
                    'he' => 'מעודד סליחה כנה וריפוי פנימי'
                ],
                'prevent' => [
                    'it' => 'Previene rancore, durezza di cuore e desiderio di vendetta.',
                    'en' => 'Prevents resentment, hardness of heart and desire for revenge.',
                    'la' => 'Odium et duritiam cordis impedit.',
                    'he' => 'מונע טינה וקושי לב'
                ],
            ],

            [
                'number' => 10,
                'name' => "Aladyah (A-la-d yah)",
                'kabal_name' => "Aladyah",

                // Aleph = principio originario / unità assoluta
                // Lamed = elevazione / tensione verso l’Alto
                // Dalet = porta / soglia / passaggio
                'trigram' => "Aleph Lamed Dalet",
                'trigram_significate' => "principio elevazione porta",

                'definition' => [
                    'it' => 'ALD - Dio che dal principio eleva e apre la soglia',
                    'en' => 'ALD - God who from the origin elevates and opens the threshold',
                    'la' => 'ALD - Deus qui ex principio elevat et ianuam aperit',
                    'he' => 'ALD - האל שמן הראשית מרים ופותח שער',
                ],

                'new_definition' => [
                    'it' => 'Dio è riallineamento e passaggio',
                    'en' => 'God is realignment and transition',
                    'la' => 'Deus est realignatio et transitus',
                    'he' => 'האל הוא יישור מחודש ומעבר',
                ],

                'hebrew_letters' => 'אלד',
                'hebrew_name' => 'אלדיה',

                'letter_details' => [
                    [
                        'letter' => 'א',
                        'name' => 'Aleph',
                        'value' => 1,
                        'meaning' => [
                            'it' => 'Unità originaria e principio primo da cui tutto procede.',
                            'en' => 'Primordial unity and first principle from which all proceeds.',
                            'la' => 'Unitas primordialis et principium primum.',
                            'he' => 'אחדות ראשונית ועיקרון ראשון'
                        ]
                    ],
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => [
                            'it' => 'Elevazione e orientamento verso l’Alto che ristabilisce ordine e direzione.',
                            'en' => 'Elevation and upward orientation restoring order and direction.',
                            'la' => 'Elevatio et directio sursum ordinem restituens.',
                            'he' => 'התעלות והכוונה כלפי מעלה המשיבה סדר וכיוון'
                        ]
                    ],
                    [
                        'letter' => 'ד',
                        'name' => 'Dalet',
                        'value' => 4,
                        'meaning' => [
                            'it' => 'Porta e passaggio verso una nuova condizione, apertura alla trasformazione.',
                            'en' => 'Door and passage toward a new condition, opening to transformation.',
                            'la' => 'Ianua et transitus ad novam condicionem.',
                            'he' => 'דלת ומעבר למצב חדש'
                        ]
                    ],
                ],

                'choir' => 'cherubim',
                'archangel' => 'raziel',
                'element' => 'earth',

                'zodiac_days' => [
                    ['day' => 5, 'month' => 5, 'sign' => 'taurus'],
                    ['day' => 6, 'month' => 5, 'sign' => 'taurus'],
                    ['day' => 7, 'month' => 5, 'sign' => 'taurus'],
                    ['day' => 8, 'month' => 5, 'sign' => 'taurus'],
                    ['day' => 9, 'month' => 5, 'sign' => 'taurus'],
                ],

                // Gradi
                // 'degree_start' => 15,
                // 'degree_end' => 20,
                'orientation' => 'EST-SUD',

                // Salmo
                'psalm' => 51,
                'psalm_verse' => 12,
                'vulgata' => 50,
                'vulgata_verse' => 12,
                'psalm_link' => '/salmi/33',

                // Contenuti
                'quality' => [
                    'it' => 'Rigenerazione ordinata e apertura a una nuova fase dopo il riallineamento interiore.',
                    'en' => 'Ordered regeneration and opening to a new phase after inner realignment.',
                    'la' => 'Regeneratio ordinata et apertio ad novam phase post realignationem.',
                    'he' => 'התחדשות מסודרת ופתיחה לשלב חדש לאחר יישור פנימי'
                ],
                'help' => [
                    'it' => 'Sostiene il rialzarsi dopo la caduta e favorisce il passaggio consapevole verso una condizione più elevata.',
                    'en' => 'Supports rising after a fall and fosters conscious transition toward a higher state.',
                    'la' => 'Post lapsum erigit et transitum conscium ad statum altiorem fovet.',
                    'he' => 'מסייע לקום לאחר נפילה ולעבור למצב גבוה יותר במודעות'
                ],
                'prevent' => [
                    'it' => 'Previene stagnazione, colpa paralizzante e chiusura alle nuove possibilità.',
                    'en' => 'Prevents stagnation, paralyzing guilt and closure to new possibilities.',
                    'la' => 'Stagnationem et culpam impedit.',
                    'he' => 'מונע קיפאון ואשמה משתקת'
                ],
            ],

            [
                'number' => 11,
                'name' => "Lauvyah (La-u-v yah)",
                'kabal_name' => "Lauvyah",

                // Lamed = elevazione / tensione verso l’Alto
                // Aleph = principio unitario / origine divina
                // Vav = connessione / trasmissione verso il manifestato
                'trigram' => "Lamed Aleph Vav",
                'trigram_significate' => "elevazione principio connessione",

                'definition' => [
                    'it' => 'LAV - Dio che eleva e unisce al principio',
                    'en' => 'LAV - God who elevates and unites to the principle',
                    'la' => 'LAV - Deus qui elevat et ad principium coniungit',
                    'he' => 'LAV - אלוהים המרים ומחבר אל העיקרון',
                ],

                'new_definition' => [
                    'it' => 'Dio è ispirazione che si fa comunicazione',
                    'en' => 'God is inspiration becoming transmission',
                    'la' => 'Deus est inspiratio in transmissionem conversa',
                    'he' => 'האל הוא השראה ההופכת להעברה',
                ],

                'hebrew_letters' => 'לאו',
                'hebrew_name' => 'לאויה',

                'letter_details' => [
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => [
                            'it' => 'Elevazione e movimento verso l’alto attraverso apprendimento e rettitudine.',
                            'en' => 'Elevation and upward movement through learning and righteousness.',
                            'la' => 'Elevatio et ascensus per doctrinam et rectitudinem.',
                            'he' => 'התעלות ועלייה דרך לימוד וצדק'
                        ]
                    ],
                    [
                        'letter' => 'א',
                        'name' => 'Aleph',
                        'value' => 1,
                        'meaning' => [
                            'it' => 'Unità originaria e principio divino che fonda ogni realtà.',
                            'en' => 'Primordial unity and divine principle grounding all reality.',
                            'la' => 'Unitas primordialis et principium divinum.',
                            'he' => 'אחדות ראשונית ועיקרון אלוהי'
                        ]
                    ],
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => [
                            'it' => 'Connessione tra il cielo e la terra, tra l’intuizione e la realtà concreta.',
                            'en' => 'Connection between heaven and earth, intuition and concrete reality.',
                            'la' => 'Coniunctio inter caelum et terram.',
                            'he' => 'חיבור בין שמים לארץ'
                        ]
                    ],
                ],

                'choir' => 'cherubim',
                'archangel' => 'raziel',
                'element' => 'earth',

                'zodiac_days' => [
                    ['day' => 10, 'month' => 5, 'sign' => 'taurus'],
                    ['day' => 11, 'month' => 5, 'sign' => 'taurus'],
                    ['day' => 12, 'month' => 5, 'sign' => 'taurus'],
                    ['day' => 13, 'month' => 5, 'sign' => 'taurus'],
                    ['day' => 14, 'month' => 5, 'sign' => 'taurus'],
                ],

                // Gradi
                // 'degree_start' => 20,
                // 'degree_end' => 25,
                'orientation' => 'EST-SUD',

                // Salmo
                'psalm' => 40,
                'psalm_verse' => 14,
                'vulgata' => 39,
                'vulgata_verse' => 14,
                'psalm_link' => '/salmi/39',

                // Contenuti
                'quality' => [
                    'it' => 'Elevazione dell’intelletto e capacità di tradurre ispirazione in parola chiara.',
                    'en' => 'Elevation of intellect and ability to translate inspiration into clear expression.',
                    'la' => 'Elevatio intellectus et inspiratio in verbum clara conversa.',
                    'he' => 'רוממות השכל והפיכת השראה לביטוי ברור'
                ],
                'help' => [
                    'it' => 'Favorisce comprensione profonda, lucidità mentale e coerenza tra intuizione e azione.',
                    'en' => 'Fosters deep understanding, mental clarity and coherence between intuition and action.',
                    'la' => 'Intelligentiam profundam et concordiam inter intuitionem et actionem fovet.',
                    'he' => 'מעודד הבנה עמוקה ובהירות מחשבתית'
                ],
                'prevent' => [
                    'it' => 'Previene confusione mentale, illusioni e distacco tra pensiero e realtà.',
                    'en' => 'Prevents mental confusion, illusion and separation between thought and reality.',
                    'la' => 'Confusionem mentis et illusionem impedit.',
                    'he' => 'מונע בלבול ואשליה'
                ],
            ],

            [
                'number' => 12,
                'name' => "Heheayah (Ha-h-a yah)",
                'kabal_name' => "Hahayah",

                // He = apertura / rivelazione / soffio manifestante
                // He = raddoppio dell’apertura / espansione della rivelazione
                // Ayin = visione profonda / percezione interiore
                'trigram' => "He He Ayin",
                'trigram_significate' => "apertura rivelazione visione",

                'definition' => [
                    'it' => 'HHA - Dio che apre e rende visibile',
                    'en' => 'HHA - God who opens and makes visible',
                    'la' => 'HHA - Deus qui aperit et visibile facit',
                    'he' => 'HHA - האל הפותח ומגלה',
                ],

                'new_definition' => [
                    'it' => 'Dio è rivelazione che illumina la percezione',
                    'en' => 'God is revelation illuminating perception',
                    'la' => 'Deus est revelatio perceptionem illuminans',
                    'he' => 'האל הוא התגלות המאירה את הראייה',
                ],

                'hebrew_letters' => 'ההע',
                'hebrew_name' => 'ההאיה',

                'letter_details' => [
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => [
                            'it' => 'Apertura e manifestazione della presenza divina.',
                            'en' => 'Opening and manifestation of divine presence.',
                            'la' => 'Apertio et manifestatio praesentiae divinae.',
                            'he' => 'פתיחה והתגלות הנוכחות האלוהית'
                        ]
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => [
                            'it' => 'Espansione dell’apertura che amplia lo spazio della rivelazione.',
                            'en' => 'Expansion of openness enlarging the space of revelation.',
                            'la' => 'Dilatatio aperturae quae spatium revelationis auget.',
                            'he' => 'הרחבת הפתיחה המגדילה את מרחב ההתגלות'
                        ]
                    ],
                    [
                        'letter' => 'ע',
                        'name' => 'Ayin',
                        'value' => 70,
                        'meaning' => [
                            'it' => 'Visione interiore e percezione profonda oltre le apparenze.',
                            'en' => 'Inner vision and deep perception beyond appearances.',
                            'la' => 'Visio interior et perceptio profunda.',
                            'he' => 'ראייה פנימית ותפיסה עמוקה'
                        ]
                    ],
                ],

                'choir' => 'cherubim',
                'archangel' => 'raziel',
                'element' => 'earth',

                'zodiac_days' => [
                    ['day' => 15, 'month' => 5, 'sign' => 'taurus'],
                    ['day' => 16, 'month' => 5, 'sign' => 'taurus'],
                    ['day' => 17, 'month' => 5, 'sign' => 'taurus'],
                    ['day' => 18, 'month' => 5, 'sign' => 'taurus'],
                    ['day' => 19, 'month' => 5, 'sign' => 'taurus'],
                ],

                // Gradi
                // 'degree_start' => 25,
                // 'degree_end' => 30,
                'orientation' => 'EST-SUD',

                // Salmo
                'psalm' => 13,
                'psalm_verse' => 4,
                'vulgata' => 12,
                'vulgata_verse' => 4,
                'psalm_link' => '/salmi/13',

                // Contenuti
                'quality' => [
                    'it' => 'Chiarezza interiore e capacità di percepire oltre le apparenze.',
                    'en' => 'Inner clarity and the ability to perceive beyond appearances.',
                    'la' => 'Claritas interior et perceptio ultra apparentias.',
                    'he' => 'בהירות פנימית ויכולת לראות מעבר למראה החיצוני'
                ],
                'help' => [
                    'it' => 'Favorisce discernimento, intuizione e comprensione dei processi nascosti.',
                    'en' => 'Fosters discernment, intuition and understanding of hidden processes.',
                    'la' => 'Discretionem et intelligentiam occultorum fovet.',
                    'he' => 'מעודד הבחנה והבנת תהליכים נסתרים'
                ],
                'prevent' => [
                    'it' => 'Previene inganno, confusione e percezione distorta della realtà.',
                    'en' => 'Prevents deception, confusion and distorted perception of reality.',
                    'la' => 'Deceptionem et confusionem impedit.',
                    'he' => 'מונע הטעיה ובלבול'
                ],
            ],

            [
                'number' => 13,
                'name' => "Yezalael (Ye-za-la el)",
                'kabal_name' => "Yezalel",

                // Yod = scintilla divina originaria (impulso cosciente)
                // Zayin = discernimento / separazione attiva
                // Lamed = elevazione / direzione verso l’Alto
                'trigram' => "Yod Zayin Lamed",
                'trigram_significate' => "origine discernimento elevazione",

                'definition' => [
                    'it' => 'YZL - Dio che è origine di discernimento ed elevazione',
                    'en' => 'YZL - God who is origin of discernment and elevation',
                    'la' => 'YZL - Deus qui est origo discretionis et elevationis',
                    'he' => 'YZL - האל שהוא מקור ההבחנה וההתעלות',
                ],

                'new_definition' => [
                    'it' => 'Dio è origine che eleva attraverso discernimento',
                    'en' => 'God is origin that elevates through discernment',
                    'la' => 'Deus est origo quae per discretionem elevat',
                    'he' => 'האל הוא ראשית המעלה דרך הבחנה',
                ],

                'hebrew_letters' => 'יזל',
                'hebrew_name' => 'יזלאל',

                'letter_details' => [
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Scintilla divina originaria che avvia il movimento dell’intenzione.',
                            'en' => 'Primordial divine spark initiating intentional movement.',
                            'la' => 'Scintilla divina primordialis motum intentionis incipiens.',
                            'he' => 'ניצוץ אלוהי ראשוני הפותח את תנועת הכוונה'
                        ]
                    ],
                    [
                        'letter' => 'ז',
                        'name' => 'Zayin',
                        'value' => 7,
                        'meaning' => [
                            'it' => 'Discernimento attivo che separa, purifica e ordina l’azione.',
                            'en' => 'Active discernment that separates, purifies and orders action.',
                            'la' => 'Discretio activa quae actionem separat et ordinat.',
                            'he' => 'הבחנה פעילה המבדילה ומסדרת את הפעולה'
                        ]
                    ],
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => [
                            'it' => 'Elevazione e apprendimento che conducono verso un ordine superiore.',
                            'en' => 'Elevation and learning leading toward higher order.',
                            'la' => 'Elevatio et doctrina ad ordinem superiorem ducens.',
                            'he' => 'התעלות ולימוד המובילים לסדר עליון'
                        ]
                    ],
                ],

                'choir' => 'cherubim',
                'archangel' => 'raziel',
                'element' => 'air',

                'zodiac_days' => [
                    ['day' => 20, 'month' => 5, 'sign' => 'taurus'],
                    ['day' => 21, 'month' => 5, 'sign' => 'gemini'],
                    ['day' => 22, 'month' => 5, 'sign' => 'gemini'],
                    ['day' => 23, 'month' => 5, 'sign' => 'gemini'],
                    ['day' => 24, 'month' => 5, 'sign' => 'gemini'],
                ],

                // Gradi
                // 'degree_start' => 0,
                // 'degree_end' => 5,
                'orientation' => 'EST-SUD',

                // Salmo
                'psalm' => 98,
                'psalm_verse' => 3,
                'vulgata' => 97,
                'vulgata_verse' => 3,
                'psalm_link' => '/salmi/98',

                // Contenuti
                'quality' => [
                    'it' => 'Armonia nelle relazioni fondata su discernimento e crescita reciproca.',
                    'en' => 'Relational harmony grounded in discernment and mutual growth.',
                    'la' => 'Harmonia relationum in discretione fundata.',
                    'he' => 'הרמוניה בקשרים המבוססת על הבחנה וצמיחה הדדית'
                ],
                'help' => [
                    'it' => 'Favorisce stabilità, chiarezza nei legami e maturazione condivisa.',
                    'en' => 'Promotes stability, clarity in bonds and shared maturation.',
                    'la' => 'Stabilitatem et maturationem communem fovet.',
                    'he' => 'מעודד יציבות ובהירות בקשרים'
                ],
                'prevent' => [
                    'it' => 'Previene confusione affettiva, dispersione dell’intenzione e rottura dei legami.',
                    'en' => 'Prevents emotional confusion, dispersion of intention and rupture of bonds.',
                    'la' => 'Confusionem affectivam et dissolutionem vinculi impedit.',
                    'he' => 'מונע בלבול רגשי ופירוק קשרים'
                ],
            ],

            [
                'number' => 14,
                'name' => "Mebahel (Me-ba-h el)",
                'kabal_name' => "Mebahel",

                // Mem = flusso / origine dinamica / rinnovamento
                // Bet = casa / struttura / ordine stabilito
                // He = rivelazione / manifestazione
                'trigram' => "Mem Bet He",
                'trigram_significate' => "flusso struttura rivelazione",

                'definition' => [
                    'it' => 'MBH - Dio che è flusso, struttura e rivelazione',
                    'en' => 'MBH - God who is flow, structure and revelation',
                    'la' => 'MBH - Deus qui est fluxus, structura et revelatio',
                    'he' => 'MBH - האל שהוא זרימה, מבנה והתגלות',
                ],

                'new_definition' => [
                    'it' => 'Dio è flusso che ordina e si manifesta',
                    'en' => 'God is flow that orders and manifests',
                    'la' => 'Deus est fluxus qui ordinat et manifestatur',
                    'he' => 'האל הוא זרימה המסדרת ומתגלית',
                ],

                'hebrew_letters' => 'מבה',
                'hebrew_name' => 'מבהאל',

                'letter_details' => [
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => [
                            'it' => 'Flusso originario che genera movimento e trasforma ciò che tocca.',
                            'en' => 'Primordial flow generating movement and transforming what it touches.',
                            'la' => 'Fluxus primordialis motum generans et transformans.',
                            'he' => 'זרימה ראשונית היוצרת תנועה ומשנה את הנוגע בה'
                        ]
                    ],
                    [
                        'letter' => 'ב',
                        'name' => 'Bet',
                        'value' => 2,
                        'meaning' => [
                            'it' => 'Struttura che accoglie, delimita e stabilisce ordine stabile.',
                            'en' => 'Structure that receives, delimits and establishes stable order.',
                            'la' => 'Structura quae recipit et ordinem stabilem statuit.',
                            'he' => 'מבנה המקבל ומייסד סדר יציב'
                        ]
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => [
                            'it' => 'Rivelazione che rende visibile la verità e manifesta la giustizia.',
                            'en' => 'Revelation making truth visible and manifesting justice.',
                            'la' => 'Revelatio veritatem et iustitiam manifestans.',
                            'he' => 'התגלות המגלה אמת ומביאה צדק'
                        ]
                    ],
                ],

                'choir' => 'cherubim',
                'archangel' => 'raziel',
                'element' => 'air',

                'zodiac_days' => [
                    ['day' => 25, 'month' => 5, 'sign' => 'gemini'],
                    ['day' => 26, 'month' => 5, 'sign' => 'gemini'],
                    ['day' => 27, 'month' => 5, 'sign' => 'gemini'],
                    ['day' => 28, 'month' => 5, 'sign' => 'gemini'],
                    ['day' => 29, 'month' => 5, 'sign' => 'gemini'],
                ],

                // Gradi
                // 'degree_start' => 5,
                // 'degree_end' => 10,
                'orientation' => 'EST-SUD',

                // Salmo
                'psalm' => 91,
                'psalm_verse' => 10,
                'vulgata' => 90,
                'vulgata_verse' => 10,
                'psalm_link' => '/salmi/9',

                // Contenuti
                'quality' => [
                    'it' => 'Giustizia attiva che ristabilisce ordine attraverso manifestazione della verità.',
                    'en' => 'Active justice restoring order through manifestation of truth.',
                    'la' => 'Iustitia activa veritatem manifestans et ordinem restituens.',
                    'he' => 'צדק פעיל המגלה אמת ומשיב סדר'
                ],
                'help' => [
                    'it' => 'Sostiene chi difende verità e rettitudine, rafforzando integrità e chiarezza morale.',
                    'en' => 'Supports those who defend truth and righteousness, strengthening integrity and moral clarity.',
                    'la' => 'Veritatem et rectitudinem tuetur, integritatem confirmans.',
                    'he' => 'תומך במגיני אמת ומחזק יושר ובהירות מוסרית'
                ],
                'prevent' => [
                    'it' => 'Previene inganno, abuso della struttura e corruzione dell’ordine stabilito.',
                    'en' => 'Prevents deceit, abuse of structure and corruption of established order.',
                    'la' => 'Fraudem et corruptionem ordinis impedit.',
                    'he' => 'מונע שקר, ניצול המבנה והשחתת הסדר'
                ],
            ],

            [
                'number' => 15,
                'name' => "Haryel (Ha-r-y el)",
                'kabal_name' => "Hariel",

                // He = rivelazione / apertura
                // Resh = principio mentale / capo / orientamento
                // Yod = scintilla originaria / impulso primordiale
                'trigram' => "He Resh Yod",
                'trigram_significate' => "rivelazione principio origine",

                'definition' => [
                    'it' => 'HRY - Dio è rivelazione, principio e origine',
                    'en' => 'HRY - God is revelation, principle and origin',
                    'la' => 'HRY - Deus est revelatio, principium et origo',
                    'he' => 'HRY - האל הוא התגלות, עיקרון וראשית',
                ],

                'new_definition' => [
                    'it' => 'Dio è rivelazione del principio originario',
                    'en' => 'God is revelation of the primordial principle',
                    'la' => 'Deus est revelatio principii primordialis',
                    'he' => 'האל הוא התגלות העיקרון הראשוני',
                ],

                'hebrew_letters' => 'הרי',
                'hebrew_name' => 'הריאל',

                'letter_details' => [
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => [
                            'it' => 'Rivelazione e apertura attraverso cui ciò che è nascosto diventa manifesto.',
                            'en' => 'Revelation and opening through which what is hidden becomes manifest.',
                            'la' => 'Revelatio et apertio per quam occultum manifestatur.',
                            'he' => 'התגלות ופתיחה שדרכן הנסתר נעשה גלוי'
                        ]
                    ],
                    [
                        'letter' => 'ר',
                        'name' => 'Resh',
                        'value' => 200,
                        'meaning' => [
                            'it' => 'Principio mentale e capo, punto di riorientamento e nuovo inizio.',
                            'en' => 'Mental principle and head, point of reorientation and new beginning.',
                            'la' => 'Principium mentis et caput, initium novae directionis.',
                            'he' => 'ראש ועיקרון מחשבתי, התחלה חדשה'
                        ]
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Scintilla originaria dell’atto creativo, punto da cui nasce ogni forma.',
                            'en' => 'Primordial spark of the creative act, point from which every form emerges.',
                            'la' => 'Scintilla primordialis actus creativi.',
                            'he' => 'ניצוץ ראשוני של מעשה הבריאה'
                        ]
                    ],
                ],

                'choir' => 'cherubim',
                'archangel' => 'raziel',
                'element' => 'air',

                'zodiac_days' => [
                    ['day' => 30, 'month' => 5, 'sign' => 'gemini'],
                    ['day' => 31, 'month' => 5, 'sign' => 'gemini'],
                    ['day' => 1, 'month' => 6, 'sign' => 'gemini'],
                    ['day' => 2, 'month' => 6, 'sign' => 'gemini'],
                    ['day' => 3, 'month' => 6, 'sign' => 'gemini'],
                ],

                // Gradi
                // 'degree_start' => 10,
                // 'degree_end' => 15,
                'orientation' => 'EST-SUD',

                // Salmo
                'psalm' => 94,
                'psalm_verse' => 22,
                'vulgata' => 93,
                'vulgata_verse' => 22,
                'psalm_link' => '/salmi/94',

                // Contenuti
                'quality' => [
                    'it' => 'Capacità di rigenerazione mentale e spirituale, rinnovamento creativo e ritorno alla purezza dell’intenzione.',
                    'en' => 'Capacity for mental and spiritual regeneration, creative renewal and return to purity of intention.',
                    'la' => 'Regeneratio mentis et spiritus, renovatio creativa.',
                    'he' => 'התחדשות רוחנית ושכלית וחזרה לטוהר הכוונה'
                ],
                'help' => [
                    'it' => 'Favorisce purificazione mentale, chiarezza d’intenzione e nuovo orientamento.',
                    'en' => 'Promotes mental purification, clarity of intention and renewed direction.',
                    'la' => 'Purificationem mentis et directionem novam fovet.',
                    'he' => 'מעודד טיהור מחשבה ובהירות כוונה'
                ],
                'prevent' => [
                    'it' => 'Previene confusione, deviazione dal principio e smarrimento interiore.',
                    'en' => 'Prevents confusion, deviation from principle and inner disorientation.',
                    'la' => 'Confusionem et deviationem a principio impedit.',
                    'he' => 'מונע בלבול וסטייה מן העיקרון'
                ],
            ],

            [
                'number' => 16,
                'name' => "Hekamyah (Ha-ka-m yah)",
                'kabal_name' => "Hakemyah",

                // Chet = vita / forza vitale che oltrepassa limite
                // Qof = discernimento radicale / separazione tra vero e apparente
                // Mem = maturazione / stabilizzazione sapienziale
                'trigram' => "Chet Qof Mem",
                'trigram_significate' => "vita discernimento maturazione",

                'definition' => [
                    'it' => 'HQM - Dio che è vita discernente che conduce a maturità',
                    'en' => 'HQM - God who is discerning life leading to maturity',
                    'la' => 'HQM - Deus qui est vita discernens ad maturationem ducens',
                    'he' => 'HQM - האל שהוא חיים מבדילים המביאים לבשלות',
                ],

                'new_definition' => [
                    'it' => 'Dio è vita che distingue e rende stabile',
                    'en' => 'God is life that distinguishes and stabilizes',
                    'la' => 'Deus est vita distinguens et stabilis',
                    'he' => 'האל הוא חיים המבחינים ומייצבים',
                ],

                'hebrew_letters' => 'חקמ',
                'hebrew_name' => 'חקמיה',

                'letter_details' => [
                    [
                        'letter' => 'ח',
                        'name' => 'Chet',
                        'value' => 8,
                        'meaning' => [
                            'it' => 'Forza vitale che supera il limite naturale e apre alla dimensione interiore.',
                            'en' => 'Vital force that surpasses natural limitation and opens the inner dimension.',
                            'la' => 'Vis vitalis limites naturales superans.',
                            'he' => 'כוח חיים החוצה גבול טבעי'
                        ]
                    ],
                    [
                        'letter' => 'ק',
                        'name' => 'Qof',
                        'value' => 100,
                        'meaning' => [
                            'it' => 'Discernimento che separa verità da apparenza e richiama alla rettitudine.',
                            'en' => 'Discernment separating truth from appearance and calling to integrity.',
                            'la' => 'Discretio inter veritatem et speciem.',
                            'he' => 'הבחנה בין אמת למראה'
                        ]
                    ],
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => [
                            'it' => 'Maturazione interiore e stabilizzazione della sapienza nel tempo.',
                            'en' => 'Inner maturation and stabilization of wisdom over time.',
                            'la' => 'Maturatio interior et stabilitas sapientiae.',
                            'he' => 'הבשלה פנימית ויציבות חכמה'
                        ]
                    ],
                ],

                'choir' => 'cherubim',
                'archangel' => 'raziel',
                'element' => 'air',
                'zodiac_days' => [
                    ['day' => 4, 'month' => 6, 'sign' => 'gemini'],
                    ['day' => 5, 'month' => 6, 'sign' => 'gemini'],
                    ['day' => 6, 'month' => 6, 'sign' => 'gemini'],
                    ['day' => 7, 'month' => 6, 'sign' => 'gemini'],
                    ['day' => 8, 'month' => 6, 'sign' => 'gemini'],
                ],

                // Gradi
                // 'degree_start' => 15,
                // 'degree_end' => 20,
                'orientation' => 'EST-SUD',

                // Salmo
                'psalm' => 88,
                'psalm_verse' => 1,
                'vulgata' => 87,
                'vulgata_verse' => 2,
                'psalm_link' => '/salmi/88',

                // Contenuti
                'quality' => [
                    'it' => 'Sapienza ferma, fedeltà ai principi e stabilità morale radicata nella coscienza.',
                    'en' => 'Firm wisdom, fidelity to principles and moral stability rooted in conscience.',
                    'la' => 'Sapientia firma et fidelitas principiis.',
                    'he' => 'חכמה יציבה ונאמנות לעקרונות'
                ],
                'help' => [
                    'it' => 'Rafforza coerenza interiore, disciplina e capacità di scelta retta.',
                    'en' => 'Strengthens inner coherence, discipline and righteous decision.',
                    'la' => 'Cohaerentiam interiorem et disciplinam confirmat.',
                    'he' => 'מחזק עקביות פנימית ומשמעת'
                ],
                'prevent' => [
                    'it' => 'Previene confusione morale, instabilità e tradimento dei valori.',
                    'en' => 'Prevents moral confusion, instability and betrayal of values.',
                    'la' => 'Confusionem moralem et inconstantiam impedit.',
                    'he' => 'מונע בלבול מוסרי וחוסר יציבות'
                ],
            ],

            // Troni
            [
                'number' => 17,
                'name' => "Lauvyah (La-u-v yah)",
                'kabal_name' => "Lauvyah",

                // Lamed = elevazione / tensione verso l’Alto
                // Aleph = principio originario / unità
                // Vav = connessione / canale tra alto e basso
                'trigram' => "Lamed Aleph Vav",
                'trigram_significate' => "elevazione principio connessione",

                'definition' => [
                    'it' => 'LAV - Dio che è elevazione, principio e connessione',
                    'en' => 'LAV - God who is elevation, principle and connection',
                    'la' => 'LAV - Deus qui est elevatio, principium et connexio',
                    'he' => 'LAV - האל שהוא התעלות, עיקרון וחיבור',
                ],

                'new_definition' => [
                    'it' => 'Dio è elevazione che unisce al principio',
                    'en' => 'God is elevation that unites to the principle',
                    'la' => 'Deus est elevatio ad principium coniungens',
                    'he' => 'האל הוא התעלות המאחדת עם העיקרון',
                ],

                'hebrew_letters' => 'לאו',
                'hebrew_name' => 'לאויה',

                'letter_details' => [
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => [
                            'it' => 'Movimento ascensionale della coscienza verso comprensione superiore.',
                            'en' => 'Ascending movement of consciousness toward higher understanding.',
                            'la' => 'Ascensus conscientiae ad cognitionem superiorem.',
                            'he' => 'עלייה תודעתית להבנה עליונה'
                        ]
                    ],
                    [
                        'letter' => 'א',
                        'name' => 'Aleph',
                        'value' => 1,
                        'meaning' => [
                            'it' => 'Unità originaria e fondamento silenzioso dell’essere.',
                            'en' => 'Primordial unity and silent foundation of being.',
                            'la' => 'Unitas primordialis et fundamentum entis.',
                            'he' => 'אחדות ראשונית ויסוד ההוויה'
                        ]
                    ],
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => [
                            'it' => 'Connessione operativa che unisce cielo e terra in continuità.',
                            'en' => 'Operative connection linking heaven and earth in continuity.',
                            'la' => 'Connexio operativa inter caelum et terram.',
                            'he' => 'חיבור פעיל בין שמים לארץ'
                        ]
                    ],
                ],

                'choir' => 'thrones',
                'archangel' => 'tzaphkiel',
                'element' => 'air',
                'zodiac_days' => [
                    ['day' => 9, 'month' => 6, 'sign' => 'gemini'],
                    ['day' => 10, 'month' => 6, 'sign' => 'gemini'],
                    ['day' => 11, 'month' => 6, 'sign' => 'gemini'],
                    ['day' => 12, 'month' => 6, 'sign' => 'gemini'],
                    ['day' => 13, 'month' => 6, 'sign' => 'gemini'],
                ],

                // Gradi
                // 'degree_start' => 20,
                // 'degree_end' => 25,
                'orientation' => 'EST-SUD',

                // Salmo
                'psalm' => 8,
                'psalm_verse' => 2,
                'vulgata' => 8,
                'vulgata_verse' => 3,
                'psalm_link' => '/salmi/8',

                // Contenuti
                'quality' => [
                    'it' => 'Elevazione interiore attraverso il silenzio, rivelazione del principio e connessione consapevole con il Sé superiore.',
                    'en' => 'Inner elevation through silence, revelation of the principle and conscious connection with the higher Self.',
                    'la' => 'Elevatio interior per silentium, revelatio principii et connexio conscia cum superiori se.',
                    'he' => 'התעלות פנימית דרך שתיקה, גילוי העיקרון וחיבור מודע אל העצמי העליון'
                ],
                'help' => [
                    'it' => 'Sostiene concentrazione, intuizione elevata e coerenza tra pensiero e comportamento.',
                    'en' => 'Supports focus, elevated intuition and coherence between thought and action.',
                    'la' => 'Concentrationem et cohaerentiam confirmat.',
                    'he' => 'מחזק ריכוז ואינטואיציה גבוהה'
                ],
                'prevent' => [
                    'it' => 'Previene confusione mentale, dispersione del pensiero e perdita di orientamento spirituale.',
                    'en' => 'Prevents mental confusion and spiritual disorientation.',
                    'la' => 'Confusionem mentis et aberrationem impedit.',
                    'he' => 'מונע בלבול מחשבתי ואובדן כיוון רוחני'
                ],
            ],

            [
                'number' => 18,
                'name' => "Kalayel (Ka-la-y el)",
                'kabal_name' => "Caliel",

                // Kaf = contenimento / capacità strutturante
                // Lamed = elevazione / direzione verso rettitudine
                // Yod = principio attivo / impulso cosciente
                'trigram' => "Kaf Lamed Yod",
                'trigram_significate' => "contenimento elevazione origine",

                'definition' => [
                    'it' => 'KLY - Dio che contiene ed eleva all’origine',
                    'en' => 'KLY - God who contains and elevates to the origin',
                    'la' => 'KLY - Deus qui continet et ad originem elevat',
                    'he' => 'KLY - האל המכיל ומעלה אל הראשית',
                ],

                'new_definition' => [
                    'it' => 'Dio è contenimento che conduce all’origine',
                    'en' => 'God is containment leading to the origin',
                    'la' => 'Deus est continentia ad originem ducens',
                    'he' => 'האל הוא הכלה המובילה אל הראשית',
                ],

                'hebrew_letters' => 'כלי',
                'hebrew_name' => 'כליאל',

                'letter_details' => [
                    [
                        'letter' => 'כ',
                        'name' => 'Kaf',
                        'value' => 20,
                        'meaning' => [
                            'it' => 'Capacità di contenere e dirigere la forza in modo ordinato e responsabile.',
                            'en' => 'Capacity to contain and direct force in an ordered and responsible way.',
                            'la' => 'Potestas continendi et ordinandi vim.',
                            'he' => 'יכולת להכיל ולכוון כוח באופן מסודר ואחראי'
                        ]
                    ],
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => [
                            'it' => 'Discernimento elevato e insegnamento che guida verso rettitudine.',
                            'en' => 'Elevated discernment and teaching that guides toward righteousness.',
                            'la' => 'Discretio elevata et disciplina ad rectitudinem ducens.',
                            'he' => 'הבחנה גבוהה והדרכה לצדק'
                        ]
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Scintilla originaria che conduce all’azione secondo verità e coscienza.',
                            'en' => 'Primordial spark leading action according to truth and conscience.',
                            'la' => 'Scintilla primordialis ad actionem secundum veritatem et conscientiam ducens.',
                            'he' => 'ניצוץ ראשוני המוביל לפעולה לפי אמת ומודעות'
                        ]
                    ],
                ],

                'choir' => 'thrones',
                'archangel' => 'tzaphkiel',
                'element' => 'water',
                'zodiac_days' => [
                    ['day' => 14, 'month' => 6, 'sign' => 'gemini'],
                    ['day' => 15, 'month' => 6, 'sign' => 'gemini'],
                    ['day' => 16, 'month' => 6, 'sign' => 'gemini'],
                    ['day' => 17, 'month' => 6, 'sign' => 'gemini'],
                    ['day' => 18, 'month' => 6, 'sign' => 'gemini'],
                ],

                // Gradi
                // 'degree_start' => 25,
                // 'degree_end' => 30,
                'orientation' => 'EST-SUD',

                // Salmo
                'psalm' => 16,
                'psalm_verse' => 6,
                'vulgata' => 15,
                'vulgata_verse' => 6,
                'psalm_link' => '/salmi/16',

                // Contenuti
                'quality' => [
                    'it' => 'Equilibrio tra forza e rettitudine, azione consapevole guidata da principio.',
                    'en' => 'Balance between force and righteousness, conscious action guided by principle.',
                    'la' => 'Aequilibrium inter vim et rectitudinem, actio conscia principio directa.',
                    'he' => 'איזון בין כוח לצדק ופעולה מודעת המכוונת על פי עיקרון'
                ],
                'help' => [
                    'it' => 'Sostiene decisioni giuste, chiarezza nei conflitti e stabilità nelle responsabilità.',
                    'en' => 'Supports just decisions, clarity in conflicts and stability in responsibilities.',
                    'la' => 'Decisiones iustas et stabilitatem confirmat.',
                    'he' => 'מחזק החלטות צודקות ויציבות באחריות'
                ],
                'prevent' => [
                    'it' => 'Previene abuso di potere, squilibrio e azione impulsiva priva di coscienza.',
                    'en' => 'Prevents abuse of power, imbalance and impulsive unconscious action.',
                    'la' => 'Abusum potestatis et actionem inconsultam impedit.',
                    'he' => 'מונע ניצול כוח וחוסר איזון'
                ],
            ],

            [
                'number' => 19,
                'name' => "Lauvyah (La-u-v yah)",
                'kabal_name' => "Leuvyah",

                // Lamed = elevazione / tensione verso l’Alto
                // Vav = connessione / continuità
                // Vav = consolidamento della connessione
                'trigram' => "Lamed Vav Vav",
                'trigram_significate' => "elevazione connessione stabilità",

                'definition' => [
                    'it' => 'LVV - Dio che eleva e connette alla stabilità',
                    'en' => 'LVV - God who elevates and connects to stability',
                    'la' => 'LVV - Deus qui elevat et ad stabilitatem coniungit',
                    'he' => 'LVV - האל המעלה ומחבר אל היציבות',
                ],

                'new_definition' => [
                    'it' => 'Dio è elevazione che rende stabile il legame',
                    'en' => 'God is elevation that makes the bond stable',
                    'la' => 'Deus est elevatio quae vinculum stabilit',
                    'he' => 'האל הוא התעלות המייצבת את הקשר',
                ],

                'hebrew_letters' => 'לוו',
                'hebrew_name' => 'לויאה',

                'letter_details' => [
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => [
                            'it' => 'Elevazione attraverso l’apprendimento e comprensione che guida alla maturità interiore.',
                            'en' => 'Elevation through learning and understanding leading to inner maturity.',
                            'la' => 'Elevatio per doctrinam et intellectum ad maturitatem interiorem.',
                            'he' => 'התעלות דרך לימוד והבנה המביאים לבשלות פנימית'
                        ]
                    ],
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => [
                            'it' => 'Connessione tra passato e presente, continuità dell’esperienza e integrazione emotiva.',
                            'en' => 'Connection between past and present, continuity of experience and emotional integration.',
                            'la' => 'Connexio inter praeteritum et praesens.',
                            'he' => 'חיבור בין עבר להווה והמשכיות החוויה'
                        ]
                    ],
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => [
                            'it' => 'Rafforzamento del legame e stabilizzazione della continuità.',
                            'en' => 'Strengthening of the bond and stabilization of continuity.',
                            'la' => 'Confirmatio vinculi et stabilitas continuitatis.',
                            'he' => 'חיזוק הקשר וייצוב ההמשכיות'
                        ]
                    ],
                ],

                'choir' => 'thrones',
                'archangel' => 'tzaphkiel',
                'element' => 'water',
                'zodiac_days' => [
                    ['day' => 19, 'month' => 6, 'sign' => 'gemini'],
                    ['day' => 20, 'month' => 6, 'sign' => 'gemini'],
                    ['day' => 21, 'month' => 6, 'sign' => 'gemini'],
                    ['day' => 22, 'month' => 6, 'sign' => 'cancer'],
                    ['day' => 23, 'month' => 6, 'sign' => 'cancer'],
                ],

                // Gradi
                // 'degree_start' => 0,
                // 'degree_end' => 5,
                'orientation' => 'SUD',

                // Salmo
                'psalm' => 28,
                'psalm_verse' => 8,
                'vulgata' => 27,
                'vulgata_verse' => 8,
                'psalm_link' => '/salmi/28',

                // Contenuti
                'quality' => [
                    'it' => 'Memoria spirituale, comprensione profonda del passato e trasformazione dell’esperienza in saggezza.',
                    'en' => 'Spiritual memory and transformation of experience into wisdom.',
                    'la' => 'Memoria spiritualis et experientiae in sapientiam conversio.',
                    'he' => 'זיכרון רוחני והפיכת ניסיון לחוכמה'
                ],
                'help' => [
                    'it' => 'Sostiene integrazione delle esperienze e rafforzamento della coerenza interiore.',
                    'en' => 'Supports integration of experience and strengthening of inner coherence.',
                    'la' => 'Integrationem experientiae et cohaerentiam confirmat.',
                    'he' => 'מחזק שילוב חוויות ועקביות פנימית'
                ],
                'prevent' => [
                    'it' => 'Previene frammentazione interiore, instabilità emotiva e rottura dei legami.',
                    'en' => 'Prevents inner fragmentation, emotional instability and broken bonds.',
                    'la' => 'Fragmentationem interiorem et instabilitatem impedit.',
                    'he' => 'מונע פירוק פנימי וחוסר יציבות רגשית'
                ],
            ],

            [
                'number' => 20,
                'name' => "Pahalayah (Pa-ha-la yah)",
                'kabal_name' => "Pahalyah",

                // Pe = parola / espressione manifestante
                // He = rivelazione / apertura
                // Lamed = elevazione / direzione verso l’Alto
                'trigram' => "Pe He Lamed",
                'trigram_significate' => "parola rivelazione elevazione",

                'definition' => [
                    'it' => 'PHL - Dio che parla, rivela ed eleva',
                    'en' => 'PHL - God who speaks, reveals and elevates',
                    'la' => 'PHL - Deus qui loquitur, revelat et elevat',
                    'he' => 'PHL - האל המדבר, המגלה ומעלה',
                ],

                'new_definition' => [
                    'it' => 'Dio è parola che rivela e conduce all’elevazione',
                    'en' => 'God is word that reveals and leads to elevation',
                    'la' => 'Deus est verbum revelans ad elevationem ducens',
                    'he' => 'האל הוא דיבור המגלה ומוביל להתעלות',
                ],

                'hebrew_letters' => 'פהל',
                'hebrew_name' => 'פהליה',

                'letter_details' => [
                    [
                        'letter' => 'פ',
                        'name' => 'Pe',
                        'value' => 80,
                        'meaning' => [
                            'it' => 'Parola che manifesta l’intenzione interiore e rende visibile ciò che era nascosto.',
                            'en' => 'Word that manifests inner intention and makes the hidden visible.',
                            'la' => 'Verbum intentionem interiorem manifestans.',
                            'he' => 'דיבור המגלה את הכוונה הפנימית'
                        ]
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => [
                            'it' => 'Rivelazione e apertura alla volontà superiore.',
                            'en' => 'Revelation and openness to higher will.',
                            'la' => 'Revelatio et apertio ad voluntatem superiorem.',
                            'he' => 'התגלות ופתיחות לרצון העליון'
                        ]
                    ],
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => [
                            'it' => 'Elevazione della coscienza verso rettitudine e comprensione superiore.',
                            'en' => 'Elevation of consciousness toward righteousness and higher understanding.',
                            'la' => 'Elevatio conscientiae ad rectitudinem.',
                            'he' => 'התעלות התודעה אל יושר והבנה עליונה'
                        ]
                    ],
                ],

                'choir' => 'thrones',
                'archangel' => 'tzaphkiel',
                'element' => 'water',
                'zodiac_days' => [
                    ['day' => 24, 'month' => 6, 'sign' => 'cancer'],
                    ['day' => 25, 'month' => 6, 'sign' => 'cancer'],
                    ['day' => 26, 'month' => 6, 'sign' => 'cancer'],
                    ['day' => 27, 'month' => 6, 'sign' => 'cancer'],
                    ['day' => 28, 'month' => 6, 'sign' => 'cancer'],
                ],

                // Gradi
                // 'degree_start' => 5,
                // 'degree_end' => 10,
                'orientation' => 'SUD',

                // Salmo
                'psalm' => 120,
                'psalm_verse' => 2,
                'vulgata' => 119,
                'vulgata_verse' => 2,
                'psalm_link' => '/salmi/120',

                // Contenuti
                'quality' => [
                    'it' => 'Chiarezza morale, rettitudine nella parola e orientamento verso elevazione spirituale.',
                    'en' => 'Moral clarity, righteousness in speech and orientation toward spiritual elevation.',
                    'la' => 'Claritas moralis et rectitudo in verbo.',
                    'he' => 'בהירות מוסרית וישרות בדיבור'
                ],
                'help' => [
                    'it' => 'Sostiene coerenza tra parola e coscienza e rafforza la ricerca del vero.',
                    'en' => 'Supports coherence between speech and conscience and strengthens pursuit of truth.',
                    'la' => 'Concordiam inter verbum et conscientiam confirmat.',
                    'he' => 'מחזק התאמה בין דיבור למצפון'
                ],
                'prevent' => [
                    'it' => 'Previene falsità, deviazione morale e uso distorto della parola.',
                    'en' => 'Prevents falsehood, moral deviation and misuse of speech.',
                    'la' => 'Mendacium et abusum verbi impedit.',
                    'he' => 'מונע שקר ושימוש מעוות בדיבור'
                ],
            ],

            [
                'number' => 21,
                'name' => "Nelakael (Ne-la-k el)",
                'kabal_name' => "Nelchael",

                // Nun = continuità / perseveranza nel tempo
                // Lamed = elevazione / tensione verso comprensione superiore
                // Kaf = contenimento / applicazione strutturata
                'trigram' => "Nun Lamed Kaf",
                'trigram_significate' => "continuità elevazione contenimento",

                'definition' => [
                    'it' => 'NLK - Dio che sostiene, eleva e protegge',
                    'en' => 'NLK - God who sustains, elevates and protects',
                    'la' => 'NLK - Deus qui sustentat, elevat et protegit',
                    'he' => 'NLK - האל התומך, מעלה ומגן',
                ],

                'new_definition' => [
                    'it' => 'Dio è sostegno che eleva e protegge',
                    'en' => 'God is sustaining force that elevates and protects',
                    'la' => 'Deus est sustentatio elevans et protegens',
                    'he' => 'האל הוא תמיכה המעלה ומגינה',
                ],

                'hebrew_letters' => 'נלכ',
                'hebrew_name' => 'נלכאל',

                'letter_details' => [
                    [
                        'letter' => 'נ',
                        'name' => 'Nun',
                        'value' => 50,
                        'meaning' => [
                            'it' => 'Perseveranza e continuità nel tempo, energia che cresce attraverso prova ed esperienza.',
                            'en' => 'Perseverance and continuity through time, energy that grows through trial and experience.',
                            'la' => 'Perseverantia et continuatio per probationem.',
                            'he' => 'התמדה והמשכיות הצומחת דרך ניסיון'
                        ]
                    ],
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => [
                            'it' => 'Elevazione dell’intelligenza verso comprensione superiore e discernimento.',
                            'en' => 'Elevation of intelligence toward higher understanding and discernment.',
                            'la' => 'Elevatio intellectus ad comprehensionem superiorem.',
                            'he' => 'התעלות השכל להבנה גבוהה'
                        ]
                    ],
                    [
                        'letter' => 'כ',
                        'name' => 'Kaf',
                        'value' => 20,
                        'meaning' => [
                            'it' => 'Capacità di contenere e applicare in modo ordinato ciò che è stato compreso.',
                            'en' => 'Capacity to contain and apply in ordered form what has been understood.',
                            'la' => 'Potestas continendi et ordinandi intellectum.',
                            'he' => 'יכולת להכיל וליישם בצורה מסודרת'
                        ]
                    ],
                ],

                'choir' => 'thrones',
                'archangel' => 'tzaphkiel',
                'element' => 'water',
                'zodiac_days' => [
                    ['day' => 29, 'month' => 6, 'sign' => 'cancer'],
                    ['day' => 30, 'month' => 6, 'sign' => 'cancer'],
                    ['day' => 1, 'month' => 7, 'sign' => 'cancer'],
                    ['day' => 2, 'month' => 7, 'sign' => 'cancer'],
                    ['day' => 3, 'month' => 7, 'sign' => 'cancer'],
                ],

                // Gradi
                // 'degree_start' => 10,
                // 'degree_end' => 15,
                'orientation' => 'SUD',

                // Salmo
                'psalm' => 31,
                'psalm_verse' => 15,
                'vulgata' => 30,
                'vulgata_verse' => 15,
                'psalm_link' => '/salmi/31',

                // Contenuti
                'quality' => [
                    'it' => 'Stabilità mentale, perseveranza nello studio e integrazione ordinata della conoscenza.',
                    'en' => 'Mental stability, perseverance in study and ordered integration of knowledge.',
                    'la' => 'Stabilitas mentis et perseverantia in doctrina.',
                    'he' => 'יציבות שכלית והתמדה בלימוד'
                ],
                'help' => [
                    'it' => 'Favorisce studio, concentrazione e capacità di distinguere il vero dal falso.',
                    'en' => 'Encourages study, concentration and the ability to distinguish truth from falsehood.',
                    'la' => 'Studium et discretionem veritatis fovet.',
                    'he' => 'מעודד לימוד והבחנה בין אמת לשקר'
                ],
                'prevent' => [
                    'it' => 'Previene dispersione mentale, superficialità e disordine nell’apprendimento.',
                    'en' => 'Prevents mental dispersion and disorder in learning.',
                    'la' => 'Dispersionem mentis et inordinationem impedit.',
                    'he' => 'מונע פיזור דעת וחוסר סדר בלימוד'
                ],
            ],

            [
                'number' => 22,
                'name' => "Yeyayel (Ye-ya-y el)",
                'kabal_name' => "Yeyalel",

                // Yod = origine / principio attivo
                // Yod = rafforzamento del principio
                // Yod = concentrazione e continuità del principio
                'trigram' => "Yod Yod Yod",
                'trigram_significate' => "origine rafforzamento continuità",

                'definition' => [
                    'it' => 'YYY - Dio che crea, rafforza e mantiene',
                    'en' => 'YYY - God who creates, strengthens and sustains',
                    'la' => 'YYY - Deus qui creat, confirmat et sustinet',
                    'he' => 'YYY - האל הבורא, המחזק ומשמר',
                ],

                'new_definition' => [
                    'it' => 'Dio è creazione che si rafforza e permane',
                    'en' => 'God is creation that strengthens and endures',
                    'la' => 'Deus est creatio confirmata et permanens',
                    'he' => 'האל הוא בריאה המתחזקת ונשארת',
                ],

                'hebrew_letters' => 'ייי',
                'hebrew_name' => 'יעיאל',

                'letter_details' => [
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Creazione concentrata, punto da cui ogni azione prende forma.',
                            'en' => 'Concentrated creation, point from which every action takes form.',
                            'la' => 'Creatio concentrata unde omnis actio formatur.',
                            'he' => 'בריאה מרוכזת שממנה נוצרת כל פעולה'
                        ]
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Rafforzamento della creazione e continuità dell’opera nel tempo.',
                            'en' => 'Strengthening of creation and continuity of the work through time.',
                            'la' => 'Confirmatio creationis et continuatio operis per tempus.',
                            'he' => 'חיזוק הבריאה והמשכיות המעשה בזמן'
                        ]
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Persistenza coerente che mantiene integrità e direzione.',
                            'en' => 'Coherent persistence that maintains integrity and direction.',
                            'la' => 'Perseverantia coherens integritatem servans.',
                            'he' => 'התמדה שומרת על שלמות וכיוון'
                        ]
                    ],
                ],

                'choir' => 'thrones',
                'archangel' => 'tzaphkiel',
                'element' => 'water',
                'zodiac_days' => [
                    ['day' => 4, 'month' => 7, 'sign' => 'cancer'],
                    ['day' => 5, 'month' => 7, 'sign' => 'cancer'],
                    ['day' => 6, 'month' => 7, 'sign' => 'cancer'],
                    ['day' => 7, 'month' => 7, 'sign' => 'cancer'],
                    ['day' => 8, 'month' => 7, 'sign' => 'cancer'],
                ],

                // Gradi
                // 'degree_start' => 15,
                // 'degree_end' => 20,
                'orientation' => 'SUD',

                // Salmo
                'psalm' => 91,
                'psalm_verse' => 7,
                'vulgata' => 90,
                'vulgata_verse' => 7,
                'psalm_link' => '/salmi/91',

                // Contenuti
                'quality' => [
                    'it' => 'Costanza, integrità e stabilità nella responsabilità.',
                    'en' => 'Constancy, integrity and stability in responsibility.',
                    'la' => 'Constantia et integritas stabilis.',
                    'he' => 'עקביות ויושרה יציבה'
                ],
                'help' => [
                    'it' => 'Sostiene disciplina, perseveranza e consolidamento dei risultati.',
                    'en' => 'Supports discipline, perseverance and consolidation of results.',
                    'la' => 'Disciplinam et perseverantiam confirmat.',
                    'he' => 'מחזק משמעת והתמדה'
                ],
                'prevent' => [
                    'it' => 'Previene instabilità, dispersione e perdita di direzione.',
                    'en' => 'Prevents instability, dispersion and loss of direction.',
                    'la' => 'Instabilitatem et dispersionem impedit.',
                    'he' => 'מונע חוסר יציבות ואובדן כיוון'
                ],
            ],

            [
                'number' => 23,
                'name' => "Melahel (Me-l-h el)",
                'kabal_name' => "Melahel",

                // Mem = flusso vitale / acqua generatrice
                // Lamed = elevazione / apprendimento superiore
                // He = rivelazione / manifestazione armonica
                'trigram' => "Mem Lamed He",
                'trigram_significate' => "flusso elevazione rivelazione",

                'definition' => [
                    'it' => 'MLH - Dio che genera, eleva e rivela',
                    'en' => 'MLH - God who generates, elevates and reveals',
                    'la' => 'MLH - Deus qui generat, elevat et revelat',
                    'he' => 'MLH - האל היוצר, מעלה ומגלה',
                ],

                'new_definition' => [
                    'it' => 'Dio è flusso che si eleva e si manifesta',
                    'en' => 'God is flow that rises and manifests',
                    'la' => 'Deus est fluxus elevans et manifestans',
                    'he' => 'האל הוא זרימה המתעלה ומתגלית',
                ],

                'hebrew_letters' => 'מלה',
                'hebrew_name' => 'מלאהל',

                'letter_details' => [
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => [
                            'it' => 'Flusso generativo che purifica e rinnova.',
                            'en' => 'Generative flow that purifies and renews.',
                            'la' => 'Fluxus generativus purificans et renovans.',
                            'he' => 'זרימה יוצרת המטהרת ומחדשת'
                        ]
                    ],
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => [
                            'it' => 'Apprendimento elevato e comprensione delle leggi naturali e spirituali.',
                            'en' => 'Elevated learning and understanding of natural and spiritual laws.',
                            'la' => 'Doctrina elevata et intellectus legum naturalium et spiritualium.',
                            'he' => 'למידה גבוהה והבנת חוקי הטבע והרוח'
                        ]
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => [
                            'it' => 'Rivelazione armonica che porta equilibrio e benedizione.',
                            'en' => 'Harmonious revelation bringing balance and blessing.',
                            'la' => 'Revelatio harmonica aequilibrium et benedictionem afferens.',
                            'he' => 'התגלות הרמונית המביאה איזון וברכה'
                        ]
                    ],
                ],

                'choir' => 'thrones',
                'archangel' => 'tzaphkiel',
                'element' => 'water',
                'zodiac_days' => [
                    ['day' => 9, 'month' => 7, 'sign' => 'cancer'],
                    ['day' => 10, 'month' => 7, 'sign' => 'cancer'],
                    ['day' => 11, 'month' => 7, 'sign' => 'cancer'],
                    ['day' => 12, 'month' => 7, 'sign' => 'cancer'],
                    ['day' => 13, 'month' => 7, 'sign' => 'cancer'],
                ],

                // Gradi
                // 'degree_start' => 20,
                // 'degree_end' => 25,
                'orientation' => 'SUD',

                // Salmo
                'psalm' => 51,
                'psalm_verse' => 14,
                'vulgata' => 50,
                'vulgata_verse' => 14,
                'psalm_link' => '/salmi/51',

                // Contenuti
                'quality' => [
                    'it' => 'Rigenerazione, equilibrio e armonia con le leggi naturali.',
                    'en' => 'Regeneration, balance and harmony with natural laws.',
                    'la' => 'Regeneratio et aequilibrium naturale.',
                    'he' => 'התחדשות ואיזון טבעי'
                ],
                'help' => [
                    'it' => 'Sostiene guarigione, protezione e integrazione delle energie vitali.',
                    'en' => 'Supports healing, protection and integration of vital energies.',
                    'la' => 'Sanationem et protectionem sustinet.',
                    'he' => 'תומך בריפוי ובהגנה'
                ],
                'prevent' => [
                    'it' => 'Previene squilibrio, disarmonia e dispersione delle forze vitali.',
                    'en' => 'Prevents imbalance and dispersion of vital forces.',
                    'la' => 'Inaequalitatem et dispersionem virium impedit.',
                    'he' => 'מונע חוסר איזון ופיזור אנרגיה'
                ],
            ],

            [
                'number' => 24,
                'name' => "Hahuvyah (Ha-hu-v yah)",
                'kabal_name' => "Hahuyah",

                // Chet = vita / forza vitale
                // He = rivelazione / apertura
                // Vav = connessione / unione stabile
                'trigram' => "Chet He Vav",
                'trigram_significate' => "vita rivelazione connessione",

                'definition' => [
                    'it' => 'Dio è vita che si rivela e unisce',
                    'en' => 'God is life that reveals and unites',
                    'la' => 'Deus est vita revelans et uniens',
                    'he' => 'האל הוא חיים המתגלים ומאחדים',
                ],

                'new_definition' => [
                    'it' => 'Dio è vita che si rivela e unisce',
                    'en' => 'God is life that reveals and unites',
                    'la' => 'Deus est vita revelans et uniens',
                    'he' => 'האל הוא חיים המתגלים ומאחדים',
                ],

                'hebrew_letters' => 'חהו',
                'hebrew_name' => 'חאהויה',

                'letter_details' => [
                    [
                        'letter' => 'ח',
                        'name' => 'Chet',
                        'value' => 8,
                        'meaning' => [
                            'it' => 'Forza vitale che protegge e preserva l’integrità dell’essere.',
                            'en' => 'Vital force that protects and preserves the integrity of being.',
                            'la' => 'Vis vitalis quae integritatem tuetur.',
                            'he' => 'כוח חיים השומר על שלמות ההוויה'
                        ]
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => [
                            'it' => 'Rivelazione e apertura che manifesta la presenza protettiva.',
                            'en' => 'Revelation and openness manifesting protective presence.',
                            'la' => 'Revelatio et apertio praesentiam manifestans.',
                            'he' => 'התגלות ופתיחה המגלות נוכחות מגינה'
                        ]
                    ],
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => [
                            'it' => 'Connessione stabile che unisce protezione superiore e realtà concreta.',
                            'en' => 'Stable connection uniting higher protection and concrete reality.',
                            'la' => 'Connexio stabilis inter protectionem superiorem et realitatem.',
                            'he' => 'חיבור יציב בין ההגנה העליונה למציאות'
                        ]
                    ],
                ],

                'choir' => 'thrones',
                'archangel' => 'tzaphkiel',
                'element' => 'water',
                'zodiac_days' => [
                    ['day' => 14, 'month' => 7, 'sign' => 'cancer'],
                    ['day' => 15, 'month' => 7, 'sign' => 'cancer'],
                    ['day' => 16, 'month' => 7, 'sign' => 'cancer'],
                    ['day' => 17, 'month' => 7, 'sign' => 'cancer'],
                    ['day' => 18, 'month' => 7, 'sign' => 'cancer'],
                ],

                // Gradi
                // 'degree_start' => 25,
                // 'degree_end' => 30,
                'orientation' => 'SUD',

                // Salmo
                'psalm' => 91,
                'psalm_verse' => 3,
                'vulgata' => 90,
                'vulgata_verse' => 3,
                'psalm_link' => '/salmi/91',

                // Contenuti
                'quality' => [
                    'it' => 'Protezione divina stabile, rifugio interiore e giustizia che ristabilisce equilibrio.',
                    'en' => 'Stable divine protection, inner refuge and justice restoring balance.',
                    'la' => 'Protectio divina stabilis et iustitia aequilibrans.',
                    'he' => 'הגנה אלוהית יציבה וצדק המשיב איזון'
                ],
                'help' => [
                    'it' => 'Sostiene nei pericoli, rafforza fiducia e mantiene connessione con la protezione divina.',
                    'en' => 'Supports in danger, strengthens trust and maintains connection with divine protection.',
                    'la' => 'In periculis sustinet et fiduciam confirmat.',
                    'he' => 'תומך בעת סכנה ומחזק אמון בהגנה אלוהית'
                ],
                'prevent' => [
                    'it' => 'Previene vulnerabilità, isolamento e perdita di fiducia nella guida superiore.',
                    'en' => 'Prevents vulnerability, isolation and loss of trust in higher guidance.',
                    'la' => 'Vulnerabilitatem et diffidentiam impedit.',
                    'he' => 'מונע פגיעות ואובדן אמון בהדרכה העליונה'
                ],
            ],

            // Dominazioni
            [
                'number' => 25,
                'name' => "Nethayah (Ne-t-h yah)",
                'kabal_name' => "Nith-Hayah",

                // Nun = continuità / perseveranza
                // Tav = compimento / sigillo finale
                // He = rivelazione / apertura
                'trigram' => "Nun Tav He",
                'trigram_significate' => "continuità compimento rivelazione",

                'definition' => [
                    'it' => 'NTH - Dio che sostiene, compie e rivela',
                    'en' => 'NTH - God who sustains, completes and reveals',
                    'la' => 'NTH - Deus qui sustentat, complet et revelat',
                    'he' => 'NTH - האל התומך, משלים ומגלה',
                ],

                'new_definition' => [
                    'it' => 'Dio è continuità che conduce al compimento e si rivela',
                    'en' => 'God is continuity leading to completion and revelation',
                    'la' => 'Deus est continuitas ad completionem ducens et revelans',
                    'he' => 'האל הוא המשכיות המביאה לשלמות ומתגלית',
                ],

                'hebrew_letters' => 'נתה',
                'hebrew_name' => 'נתהאיה',

                'letter_details' => [
                    [
                        'letter' => 'נ',
                        'name' => 'Nun',
                        'value' => 50,
                        'meaning' => [
                            'it' => 'Continuità e perseveranza che attraversano il tempo e le prove.',
                            'en' => 'Continuity and perseverance through time and trial.',
                            'la' => 'Continuitas et perseverantia per tempus et probationem.',
                            'he' => 'המשכיות והתמדה לאורך זמן ובניסיון'
                        ]
                    ],
                    [
                        'letter' => 'ת',
                        'name' => 'Tav',
                        'value' => 400,
                        'meaning' => [
                            'it' => 'Compimento e sigillo della verità che porta a realizzazione piena.',
                            'en' => 'Completion and seal of truth leading to full realization.',
                            'la' => 'Completio et sigillum veritatis.',
                            'he' => 'שלמות וחותם האמת'
                        ]
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => [
                            'it' => 'Rivelazione interiore e apertura alla comprensione profonda.',
                            'en' => 'Inner revelation and opening to deep understanding.',
                            'la' => 'Revelatio interior et apertio ad intellectum profundum.',
                            'he' => 'התגלות פנימית ופתיחות להבנה עמוקה'
                        ]
                    ],
                ],

                'choir' => 'dominions',
                'archangel' => 'tzadkiel',
                'element' => 'fire',
                'zodiac_days' => [
                    ['day' => 19, 'month' => 7, 'sign' => 'cancer'],
                    ['day' => 20, 'month' => 7, 'sign' => 'cancer'],
                    ['day' => 21, 'month' => 7, 'sign' => 'cancer'],
                    ['day' => 22, 'month' => 7, 'sign' => 'cancer'],
                    ['day' => 23, 'month' => 7, 'sign' => 'leo'],
                ],

                // Gradi
                // 'degree_start' => 0,
                // 'degree_end' => 5,
                'orientation' => 'SUD',

                // Salmo
                'psalm' => 9,
                'psalm_verse' => 1,
                'vulgata' => 9,
                'vulgata_verse' => 2,
                'psalm_link' => '/salmi/9',

                // Contenuti
                'quality' => [
                    'it' => 'Sapienza profonda, comprensione dei misteri e stabilità nella verità.',
                    'en' => 'Profound wisdom, understanding of mysteries and stability in truth.',
                    'la' => 'Sapientia profunda et stabilitas in veritate.',
                    'he' => 'חכמה עמוקה ויציבות באמת'
                ],
                'help' => [
                    'it' => 'Sostiene discernimento, studio e maturazione spirituale.',
                    'en' => 'Supports discernment, study and spiritual maturation.',
                    'la' => 'Discretionem et maturationem spiritualem sustinet.',
                    'he' => 'מחזק הבחנה והתבגרות רוחנית'
                ],
                'prevent' => [
                    'it' => 'Previene superficialità, errore dottrinale e deviazione dalla verità.',
                    'en' => 'Prevents superficiality, doctrinal error and deviation from truth.',
                    'la' => 'Superficialitatem et errorem impedit.',
                    'he' => 'מונע שטחיות וסטייה מן האמת'
                ],
            ],

            [
                'number' => 26,
                'name' => "Haayayah (Ha-a-a yah)",
                'kabal_name' => "Haayah",

                // He = apertura / rivelazione
                // Aleph = unità originaria
                // Aleph = conferma e stabilità dell’unità
                'trigram' => "He Aleph Aleph",
                'trigram_significate' => "apertura unità stabilità",

                'definition' => [
                    'it' => 'HAA - Dio che apre, unifica e stabilizza',
                    'en' => 'HAA - God who opens, unifies and stabilizes',
                    'la' => 'HAA - Deus qui aperit, unit et stabilit',
                    'he' => 'HAA - האל הפותח, המאחד והמייצב',
                ],

                'new_definition' => [
                    'it' => 'Dio è apertura che conduce all’unità stabile',
                    'en' => 'God is openness leading to stable unity',
                    'la' => 'Deus est apertio ad unitatem stabilem ducens',
                    'he' => 'האל הוא פתיחות המובילה לאחדות יציבה',
                ],

                'hebrew_letters' => 'האא',
                'hebrew_name' => 'האאיה',

                'letter_details' => [
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => [
                            'it' => 'Apertura e rivelazione che permettono comprensione e ascolto profondo.',
                            'en' => 'Openness and revelation allowing deep understanding and attentive listening.',
                            'la' => 'Apertio et revelatio ad intellectum profundum.',
                            'he' => 'פתיחה והתגלות המאפשרות הבנה עמוקה'
                        ]
                    ],
                    [
                        'letter' => 'א',
                        'name' => 'Aleph',
                        'value' => 1,
                        'meaning' => [
                            'it' => 'Unità originaria che armonizza e riporta equilibrio.',
                            'en' => 'Primordial unity restoring harmony and balance.',
                            'la' => 'Unitas primordialis aequilibrium restituens.',
                            'he' => 'אחדות ראשונית המשיבה איזון'
                        ]
                    ],
                    [
                        'letter' => 'א',
                        'name' => 'Aleph',
                        'value' => 1,
                        'meaning' => [
                            'it' => 'Conferma e stabilità dell’unità nelle decisioni e nelle relazioni.',
                            'en' => 'Confirmation and stability of unity in decisions and relationships.',
                            'la' => 'Confirmatio et stabilitas unitatis.',
                            'he' => 'חיזוק ויציבות האחדות'
                        ]
                    ],
                ],

                'choir' => 'dominions',
                'archangel' => 'tzadkiel',
                'element' => 'fire',
                'zodiac_days' => [
                    ['day' => 24, 'month' => 7, 'sign' => 'leo'],
                    ['day' => 25, 'month' => 7, 'sign' => 'leo'],
                    ['day' => 26, 'month' => 7, 'sign' => 'leo'],
                    ['day' => 27, 'month' => 7, 'sign' => 'leo'],
                    ['day' => 28, 'month' => 7, 'sign' => 'leo'],
                ],

                // Gradi
                // 'degree_start' => 5,
                // 'degree_end' => 10,
                'orientation' => 'SUD',

                // Salmo
                'psalm' => 119,
                'psalm_verse' => 145,
                'vulgata' => 118,
                'vulgata_verse' => 145,
                'psalm_link' => '/salmi/119',

                // Contenuti
                'quality' => [
                    'it' => 'Discernimento strategico, capacità di mediazione e visione equilibrata nelle decisioni complesse.',
                    'en' => 'Strategic discernment, mediation ability and balanced vision in complex decisions.',
                    'la' => 'Discretio strategica et visio aequilibrata.',
                    'he' => 'הבחנה אסטרטגית ויכולת תיווך מאוזנת'
                ],
                'help' => [
                    'it' => 'Aiuta a comprendere dinamiche complesse, favorisce diplomazia e scelte ponderate.',
                    'en' => 'Helps understand complex dynamics, fostering diplomacy and thoughtful decisions.',
                    'la' => 'Intellegentiam rerum complexarum et prudentiam fovet.',
                    'he' => 'מסייע להבין מצבים מורכבים ולקבל החלטות שקולות'
                ],
                'prevent' => [
                    'it' => 'Previene imprudenza, rigidità e conflitti generati da mancanza di ascolto.',
                    'en' => 'Prevents imprudence, rigidity and conflicts caused by lack of listening.',
                    'la' => 'Imprudentiam et conflictus ex inattentione impedit.',
                    'he' => 'מונע פזיזות וסכסוכים הנובעים מחוסר הקשבה'
                ],
            ],

            [
                'number' => 27,
                'name' => "Yerathel (Ye-r-th el)",
                'kabal_name' => "Yerathel",

                // Yod = origine attiva
                // Resh = rinnovamento / forza morale
                // Tav = compimento / verità stabilita
                'trigram' => "Yod Resh Tav",
                'trigram_significate' => "origine rinnovamento compimento",

                'definition' => [
                    'it' => 'YRT - Dio che crea, rinnova e compie',
                    'en' => 'YRT - God who creates, renews and fulfills',
                    'la' => 'YRT - Deus qui creat, renovat et complet',
                    'he' => 'YRT - האל הבורא, המחדש והמשלים',
                ],

                'new_definition' => [
                    'it' => 'Dio è creazione che rinnova e conduce al compimento',
                    'en' => 'God is creation that renews and leads to fulfillment',
                    'la' => 'Deus est creatio quae renovat et ad complementum ducit',
                    'he' => 'האל הוא בריאה המתחדשת ומובילה להשלמה',
                ],

                'hebrew_letters' => 'ירת',
                'hebrew_name' => 'ירתאל',

                'letter_details' => [
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Creazione, punto iniziale da cui prende forma ogni realtà.',
                            'en' => 'Creation, starting point from which every reality takes form.',
                            'la' => 'Creatio, punctum initiale unde omnis realitas formatur.',
                            'he' => 'בריאה, נקודת התחלה שממנה נוצרת כל מציאות'
                        ]
                    ],
                    [
                        'letter' => 'ר',
                        'name' => 'Resh',
                        'value' => 200,
                        'meaning' => [
                            'it' => 'Rinnovamento che riporta alla giusta direzione.',
                            'en' => 'Renewal that restores the right direction.',
                            'la' => 'Renovatio quae ad rectam directionem reducit.',
                            'he' => 'התחדשות המחזירה לכיוון הנכון'
                        ]
                    ],
                    [
                        'letter' => 'ת',
                        'name' => 'Tav',
                        'value' => 400,
                        'meaning' => [
                            'it' => 'Compimento e sigillo che portano a pienezza e realizzazione concreta.',
                            'en' => 'Fulfillment and seal leading to fullness and concrete realization.',
                            'la' => 'Complementum et sigillum ad plenitudinem et effectum.',
                            'he' => 'השלמה וחותם המביאים למימוש מלא'
                        ]
                    ],
                ],

                'choir' => 'dominions',
                'archangel' => 'tzadkiel',
                'element' => 'fire',
                'zodiac_days' => [
                    ['day' => 29, 'month' => 7, 'sign' => 'leo'],
                    ['day' => 30, 'month' => 7, 'sign' => 'leo'],
                    ['day' => 31, 'month' => 7, 'sign' => 'leo'],
                    ['day' => 1, 'month' => 8, 'sign' => 'leo'],
                    ['day' => 2, 'month' => 8, 'sign' => 'leo'],
                ],

                // Gradi
                // 'degree_start' => 10,
                // 'degree_end' => 15,
                'orientation' => 'SUD',

                // Salmo
                'psalm' => 140,
                'psalm_verse' => 2,
                'vulgata' => 139,
                'vulgata_verse' => 2,
                'psalm_link' => '/salmi/140',

                // Contenuti
                'quality' => [
                    'it' => 'Forza di creare, rinnovare ciò che è stato iniziato e condurre l’opera al suo compimento.',
                    'en' => 'Power to create, renew what has begun and bring the work to completion.',
                    'la' => 'Vis creandi, renovandi quod inceptum est et ad complementum perducendi.',
                    'he' => 'כוח לברוא, לחדש את שהחל ולהביאו להשלמה'
                ],
                'help' => [
                    'it' => 'Aiuta ad avviare con chiarezza, rinnovare il cammino quando si perde direzione e portare a termine ciò che è stato intrapreso.',
                    'en' => 'Helps to begin with clarity, renew direction when it is lost and complete what has been undertaken.',
                    'la' => 'Adiuvat clare incipere, directionem renovare et quod inceptum est ad finem perducere.',
                    'he' => 'מסייע להתחיל בבהירות, לחדש כיוון כשאובד ולהשלים את מה שהחל'
                ],
                'prevent' => [
                    'it' => 'Previene dispersione, interruzione del processo e abbandono prima del compimento.',
                    'en' => 'Prevents dispersion, interruption of the process and abandonment before completion.',
                    'la' => 'Dispersionem, interruptionem processus et desertionem ante complementum impedit.',
                    'he' => 'מונע פיזור, הפסקת התהליך ונטישה לפני השלמה'
                ],
            ],

            [
                'number' => 28,
                'name' => "Shahyah (Sh-a-h yah)",
                'kabal_name' => "Seheyah",

                // Shin = trasformazione / fuoco purificatore
                // Aleph = unità originaria
                // He = rivelazione
                'trigram' => "Shin Aleph He",
                'trigram_significate' => "trasformazione unità rivelazione",

                'definition' => [
                    'it' => 'SAH - Dio che trasforma, unifica e rivela',
                    'en' => 'SAH - God who transforms, unifies and reveals',
                    'la' => 'SAH - Deus qui transformat, unit et revelat',
                    'he' => 'SAH - האל המשנה, המאחד והמגלה',
                ],

                'new_definition' => [
                    'it' => 'Dio è trasformazione che ristabilisce unità e si rivela',
                    'en' => 'God is transformation that restores unity and reveals itself',
                    'la' => 'Deus est transformatio quae unitatem restituit et revelatur',
                    'he' => 'האל הוא שינוי המשיב אחדות ומתגלֶה',
                ],

                'hebrew_letters' => 'שאה',
                'hebrew_name' => 'שאהיה',

                'letter_details' => [
                    [
                        'letter' => 'ש',
                        'name' => 'Shin',
                        'value' => 300,
                        'meaning' => [
                            'it' => 'Forza trasformante che purifica e modifica ciò che è disordinato.',
                            'en' => 'Transforming force that purifies and reshapes what is disordered.',
                            'la' => 'Vis transformans quae purificat et ordinat.',
                            'he' => 'כוח משנה המטהר ומסדר את הבלתי מאוזן'
                        ]
                    ],
                    [
                        'letter' => 'א',
                        'name' => 'Aleph',
                        'value' => 1,
                        'meaning' => [
                            'it' => 'Unità originaria che riporta equilibrio e armonia.',
                            'en' => 'Primordial unity restoring balance and harmony.',
                            'la' => 'Unitas primordialis aequilibrium restituens.',
                            'he' => 'אחדות ראשונית המשיבה איזון והרמוניה'
                        ]
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => [
                            'it' => 'Rivelazione che rende visibile la via di protezione e salvezza.',
                            'en' => 'Revelation that makes the path of protection and salvation visible.',
                            'la' => 'Revelatio viam tutelae et salutis manifestans.',
                            'he' => 'התגלות המגלה את דרך ההגנה והישועה'
                        ]
                    ],
                ],

                'choir' => 'dominions',
                'archangel' => 'tzadkiel',
                'element' => 'fire',
                'zodiac_days' => [
                    ['day' => 3, 'month' => 8, 'sign' => 'leo'],
                    ['day' => 4, 'month' => 8, 'sign' => 'leo'],
                    ['day' => 5, 'month' => 8, 'sign' => 'leo'],
                    ['day' => 6, 'month' => 8, 'sign' => 'leo'],
                    ['day' => 7, 'month' => 8, 'sign' => 'leo'],
                ],

                // Gradi
                // 'degree_start' => 15,
                // 'degree_end' => 20,
                'orientation' => 'SUD-OVEST',

                // Salmo
                'psalm' => 71,
                'psalm_verse' => 12,
                'vulgata' => 70,
                'vulgata_verse' => 12,
                'psalm_link' => '/salmi/71',

                // Contenuti
                'quality' => [
                    'it' => 'Trasformazione che ristabilisce equilibrio, chiarezza e protezione.',
                    'en' => 'Transformation restoring balance, clarity and protection.',
                    'la' => 'Transformatio aequilibrium et protectionem restituens.',
                    'he' => 'שינוי המחזיר איזון ובהירות'
                ],
                'help' => [
                    'it' => 'Aiuta a riconoscere i pericoli, correggere deviazioni e ritrovare la via sicura.',
                    'en' => 'Helps recognize dangers, correct deviations and return to a safe path.',
                    'la' => 'Pericula agnoscere et ad viam tutam redire iuvat.',
                    'he' => 'מסייע לזהות סכנות ולשוב לדרך בטוחה'
                ],
                'prevent' => [
                    'it' => 'Previene imprudenza, esposizione al rischio e reazioni impulsive.',
                    'en' => 'Prevents recklessness, risk exposure and impulsive reactions.',
                    'la' => 'Imprudentiam et temeritatem impedit.',
                    'he' => 'מונע פזיזות וחשיפה לסיכון'
                ],
            ],

            [
                'number' => 29,
                'name' => "Reyyel (Re-y-y el)",
                'kabal_name' => "Reiyel",

                // Resh = rinnovamento / rialzarsi / nuovo inizio della coscienza
                // Yod  = origine / scintilla divina / punto di nascita dell’azione
                // Yod  = rafforzamento della scintilla e stabilizzazione della coscienza
                'trigram' => "Resh Yod Yod", // Trigramma 
                'trigram_significate' => "rinnovamento origine rafforzamento", // Significato originale del trigramma

                'definition' => [
                    'it' => 'RYY - Dio che rinnova, origina e rafforza',
                    'en' => 'RYY - God who renews, originates and strengthens',
                    'la' => 'RYY - Deus qui renovat, originat et confirmat',
                    'he' => 'RYY - האל המחדש, המקור ומחזק',
                ],
                // Definizione della funzione di Dio in base alla Cabala
                'new_definition' => [
                    'it' => 'Dio è rinnovamento della coscienza',
                    'en' => 'God is renewal of consciousness',
                    'la' => 'Deus est renovatio conscientiae',
                    'he' => 'האל הוא התחדשות התודעה',
                ],

                'hebrew_letters' => 'ריי',
                'hebrew_name' => 'ראיאל',

                'letter_details' => [
                    [
                        'letter' => 'ר',
                        'name' => 'Resh',
                        'value' => 200,
                        'meaning' => [
                            'it' => 'Rinnovamento della mente e capacità di rialzarsi dall’errore.',
                            'en' => 'Renewal of the mind and ability to rise again from error.',
                            'la' => 'Renovatio mentis et facultas ab errore surgendi.',
                            'he' => 'התחדשות השכל והיכולת לקום מן הטעות'
                        ]
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Scintilla originaria della coscienza che genera comprensione.',
                            'en' => 'Primordial spark of consciousness generating understanding.',
                            'la' => 'Scintilla originaria conscientiae intellectum generans.',
                            'he' => 'ניצוץ ראשוני של תודעה היוצר הבנה'
                        ]
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Rafforzamento della coscienza e stabilità nel discernimento.',
                            'en' => 'Strengthening of awareness and stability in discernment.',
                            'la' => 'Confirmatio conscientiae et stabilitas discretionis.',
                            'he' => 'חיזוק התודעה ויציבות בהבחנה'
                        ]
                    ],
                ],

                'choir' => 'dominions',
                'archangel' => 'tzadkiel',
                'element' => 'fire',
                'zodiac_days' => [
                    ['day' => 8, 'month' => 8, 'sign' => 'leo'],
                    ['day' => 9, 'month' => 8, 'sign' => 'leo'],
                    ['day' => 10, 'month' => 8, 'sign' => 'leo'],
                    ['day' => 11, 'month' => 8, 'sign' => 'leo'],
                    ['day' => 12, 'month' => 8, 'sign' => 'leo'],
                ],

                // Gradi
                // 'degree_start' => 20,
                // 'degree_end' => 25,
                'orientation' => 'SUD-OVEST',

                // Salmo
                'psalm' => 52,
                'psalm_verse' => 7,
                'vulgata' => 51,
                'vulgata_verse' => 9,
                'psalm_link' => '/salmi/52',

                // Contenuti
                'quality' => [
                    'it' => 'Discernimento lucido, distacco dalle illusioni e chiarezza mentale.',
                    'en' => 'Clear discernment, detachment from illusion and mental clarity.',
                    'la' => 'Discretio clara et separatio ab illusionibus.',
                    'he' => 'הבחנה צלולה והתרחקות מאשליה'
                ],
                'help' => [
                    'it' => 'Aiuta a riconoscere l’errore, correggere la direzione e ristabilire coerenza interiore.',
                    'en' => 'Helps recognize error, correct direction and restore inner coherence.',
                    'la' => 'Errorem agnoscere et directionem corrigere iuvat.',
                    'he' => 'מסייע לזהות טעות ולתקן כיוון'
                ],
                'prevent' => [
                    'it' => 'Previene autoinganno, fanatismo e rigidità mentale.',
                    'en' => 'Prevents self-deception, fanaticism and mental rigidity.',
                    'la' => 'Deceptionem et rigiditatem mentis impedit.',
                    'he' => 'מונע הטעיה עצמית וקיפאון מחשבתי'
                ],
            ],

            [
                'number' => 30,
                'name' => "Avmael (A-v-m el)",
                'kabal_name' => "Omael",

                // Aleph = principio originario / unità primordiale
                // Vav   = connessione / trasmissione tra alto e basso
                // Mem   = flusso vitale / espansione generativa
                'trigram' => "Aleph Vav Mem", // Trigramma
                'trigram_significate' => "origine connessione flusso", // Significato originale del trigramma

                'definition' => [
                    'it' => 'AVM - Dio che genera connettendo nel flusso della vita',
                    'en' => 'AVM - God who generates by connecting within the flow of life',
                    'la' => 'AVM - Deus qui generat conectendo in fluxu vitae',
                    'he' => 'AVM - האל היוצר על ידי חיבור בזרימת החיים',
                ],
                // Definizione della funzione di Dio in base alla Cabala
                'new_definition' => [
                    'it' => 'Dio è origine che trasmette il flusso della vita',
                    'en' => 'God is the origin that transmits the flow of life',
                    'la' => 'Deus est origo quae fluxum vitae transmittit',
                    'he' => 'האל הוא המקור המעביר את זרימת החיים',
                ],

                'hebrew_letters' => 'אום',
                'hebrew_name' => 'אומהאל',

                'letter_details' => [
                    [
                        'letter' => 'א',
                        'name' => 'Aleph',
                        'value' => 1,
                        'meaning' => [
                            'it' => 'Principio originario e unità da cui ogni cosa prende inizio.',
                            'en' => 'Primordial principle and unity from which everything begins.',
                            'la' => 'Principium primordiale et unitas unde omnia incipiunt.',
                            'he' => 'עיקרון ראשוני ואחדות שממנה הכול מתחיל'
                        ]
                    ],
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => [
                            'it' => 'Connessione che trasmette e collega le forze tra il divino e il creato.',
                            'en' => 'Connection transmitting and linking forces between the divine and creation.',
                            'la' => 'Connexio quae vires inter divinum et creatum transmittit.',
                            'he' => 'חיבור המעביר ומקשר בין האלוהי לבריאה'
                        ]
                    ],
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => [
                            'it' => 'Flusso vitale che sostiene crescita, fertilità ed espansione della vita.',
                            'en' => 'Vital flow sustaining growth, fertility and expansion of life.',
                            'la' => 'Fluxus vitalis incrementum et expansionem vitae sustinens.',
                            'he' => 'זרימת חיים התומכת בצמיחה ובהתרחבות החיים'
                        ]
                    ],
                ],

                'choir' => 'dominions',
                'archangel' => 'tzadkiel',
                'element' => 'fire',
                'zodiac_days' => [
                    ['day' => 13, 'month' => 8, 'sign' => 'leo'],
                    ['day' => 14, 'month' => 8, 'sign' => 'leo'],
                    ['day' => 15, 'month' => 8, 'sign' => 'leo'],
                    ['day' => 16, 'month' => 8, 'sign' => 'leo'],
                    ['day' => 17, 'month' => 8, 'sign' => 'leo'],
                ],

                // Gradi
                // 'degree_start' => 25,
                // 'degree_end' => 30,
                'orientation' => 'SUD-OVEST',

                // Salmo
                'psalm' => 71,
                'psalm_verse' => 12,
                'vulgata' => 70,
                'vulgata_verse' => 12,
                'psalm_link' => '/salmi/71',

                // Contenuti
                'quality' => [
                    'it' => 'Fecondità, espansione della vita e crescita armonica.',
                    'en' => 'Fertility, expansion of life and harmonious growth.',
                    'la' => 'Fecunditas et vitae expansio harmonica.',
                    'he' => 'פוריות והתרחבות הרמונית של החיים'
                ],
                'help' => [
                    'it' => 'Aiuta a sviluppare prosperità, crescita familiare e realizzazione dei progetti.',
                    'en' => 'Helps develop prosperity, family growth and realization of projects.',
                    'la' => 'Prosperitatem et incrementum vitae fovet.',
                    'he' => 'מסייע לפתח שגשוג וצמיחה'
                ],
                'prevent' => [
                    'it' => 'Previene sterilità, stagnazione e dispersione delle energie vitali.',
                    'en' => 'Prevents sterility, stagnation and dispersion of vital energies.',
                    'la' => 'Sterilitatem et stagnationem impedit.',
                    'he' => 'מונע עקרות וקיפאון'
                ],
            ],

            [
                'number' => 31,
                'name' => "Lakabel (La-ka-b el)",
                'kabal_name' => "Lecabel",

                // Lamed = elevazione / apprendimento / direzione
                // Kaf   = forza contenuta / capacità di realizzare
                // Bet   = casa / struttura / costruzione
                'trigram' => "Lamed Kaf Bet", // Trigramma
                'trigram_significate' => "elevazione forza costruzione", // Significato originale del trigramma

                'definition' => [
                    'it' => 'LKB - Dio che eleva, rafforza e costruisce',
                    'en' => 'LKB - God who elevates, strengthens and builds',
                    'la' => 'LKB - Deus qui elevat, roborat et aedificat',
                    'he' => 'LKB - האל המרומם, מחזק ובונה',
                ],

                // Definizione della funzione di Dio in base alla Cabala
                'new_definition' => [
                    'it' => 'Dio è sapienza che ordina e costruisce',
                    'en' => 'God is wisdom that orders and builds',
                    'la' => 'Deus est sapientia quae ordinat et aedificat',
                    'he' => 'האל הוא חכמה המסדרת ובונה',
                ],

                'hebrew_letters' => 'לכב',
                'hebrew_name' => 'לכבאיה',

                'letter_details' => [
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => [
                            'it' => 'Elevazione dell’intelligenza e apprendimento che orienta alla comprensione.',
                            'en' => 'Elevation of intelligence and learning that leads to understanding.',
                            'la' => 'Elevatio intellectus et doctrina ad comprehensionem.',
                            'he' => 'התעלות השכל ולימוד המביאים להבנה'
                        ]
                    ],
                    [
                        'letter' => 'כ',
                        'name' => 'Kaf',
                        'value' => 20,
                        'meaning' => [
                            'it' => 'Forza contenuta e capacità di applicare con disciplina ciò che è compreso.',
                            'en' => 'Contained strength and ability to apply with discipline what is understood.',
                            'la' => 'Potentia continens ad disciplinatam applicationem.',
                            'he' => 'כוח מוכל המאפשר יישום ממושמע'
                        ]
                    ],
                    [
                        'letter' => 'ב',
                        'name' => 'Bet',
                        'value' => 2,
                        'meaning' => [
                            'it' => 'Struttura e costruzione che danno forma stabile alla conoscenza.',
                            'en' => 'Structure and construction giving stable form to knowledge.',
                            'la' => 'Structura stabilis scientiae formam tribuens.',
                            'he' => 'מבנה יציב הנותן צורה לידע'
                        ]
                    ],
                ],

                'choir' => 'dominions',
                'archangel' => 'tzadkiel',
                'element' => 'earth',
                'zodiac_days' => [
                    ['day' => 18, 'month' => 8, 'sign' => 'leo'],
                    ['day' => 19, 'month' => 8, 'sign' => 'leo'],
                    ['day' => 20, 'month' => 8, 'sign' => 'leo'],
                    ['day' => 21, 'month' => 8, 'sign' => 'leo'],
                    ['day' => 22, 'month' => 8, 'sign' => 'leo'],
                ],

                // Gradi
                // 'degree_start' => 0,
                // 'degree_end' => 5,
                'orientation' => 'SUD-OVEST',

                // Salmo
                'psalm' => 26,
                'psalm_verse' => 2,
                'vulgata' => 25,
                'vulgata_verse' => 2,
                'psalm_link' => '/salmi/26',

                // Contenuti
                'quality' => [
                    'it' => 'Precisione mentale, metodo rigoroso e capacità di trasformare conoscenza in risultato concreto.',
                    'en' => 'Mental precision, rigorous method and ability to turn knowledge into concrete results.',
                    'la' => 'Accuratio mentis et methodus rigorosa.',
                    'he' => 'דיוק מחשבתי ושיטה קפדנית'
                ],
                'help' => [
                    'it' => 'Aiuta a pianificare con ordine, risolvere problemi complessi e strutturare progetti solidi.',
                    'en' => 'Helps plan with order, solve complex problems and structure solid projects.',
                    'la' => 'Ordinem et solutionem problematum fovet.',
                    'he' => 'מסייע לארגון ופתרון בעיות מורכבות'
                ],
                'prevent' => [
                    'it' => 'Previene disordine mentale, superficialità e dispersione delle capacità.',
                    'en' => 'Prevents mental disorder, superficiality and dispersion of abilities.',
                    'la' => 'Confusionem mentis et dispersionem impedit.',
                    'he' => 'מונע בלבול מחשבתי ופיזור יכולות'
                ],
            ],

            [
                'number' => 32,
                'name' => "Vasharyah (Va-sha-r yah)",
                'kabal_name' => "Vasaryah",

                // Vav  = connessione / unione tra alto e basso
                // Shin = fuoco purificatore / trasformazione
                // Resh = rinnovamento / guida della mente
                'trigram' => "Vav Shin Resh", // Trigramma
                'trigram_significate' => "connessione purificazione rinnovamento", // Significato del trigramma

                'definition' => [
                    'it' => 'VSR - Dio che connette, purifica e rinnova',
                    'en' => 'VSR - God who connects, purifies and renews',
                    'la' => 'VSR - Deus qui connectit, purificat et renovat',
                    'he' => 'VSR - האל המחבר, המטהר ומחדש',
                ],

                'new_definition' => [
                    'it' => 'Dio è giustizia che purifica e ristabilisce equilibrio',
                    'en' => 'God is justice that purifies and restores balance',
                    'la' => 'Deus est iustitia quae purificat et aequilibrium restituit',
                    'he' => 'האל הוא צדק המטהר ומשיב איזון',
                ],

                'hebrew_letters' => 'ושר',
                'hebrew_name' => 'וסריה',

                'letter_details' => [
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => [
                            'it' => 'Connessione che unisce e stabilisce equilibrio tra le forze.',
                            'en' => 'Connection that unites and establishes balance between forces.',
                            'la' => 'Connexio quae vires in aequilibrio coniungit.',
                            'he' => 'חיבור המאחד ומאזן בין הכוחות'
                        ]
                    ],
                    [
                        'letter' => 'ש',
                        'name' => 'Shin',
                        'value' => 300,
                        'meaning' => [
                            'it' => 'Fuoco purificatore che corregge e ristabilisce giustizia.',
                            'en' => 'Purifying fire that corrects and restores justice.',
                            'la' => 'Ignis purificans qui iustitiam restituit.',
                            'he' => 'אש מטהרת המשיבה צדק'
                        ]
                    ],
                    [
                        'letter' => 'ר',
                        'name' => 'Resh',
                        'value' => 200,
                        'meaning' => [
                            'it' => 'Rinnovamento della mente e chiarezza che guidano decisioni rette.',
                            'en' => 'Renewal of the mind and clarity guiding righteous decisions.',
                            'la' => 'Renovatio mentis ad decisiones rectas.',
                            'he' => 'התחדשות השכל ובהירות בהחלטות'
                        ]
                    ],
                ],

                'choir' => 'dominions',
                'archangel' => 'tzadkiel',
                'element' => 'earth',
                'zodiac_days' => [
                    ['day' => 23, 'month' => 8, 'sign' => 'leo'],
                    ['day' => 24, 'month' => 8, 'sign' => 'virgo'],
                    ['day' => 25, 'month' => 8, 'sign' => 'virgo'],
                    ['day' => 26, 'month' => 8, 'sign' => 'virgo'],
                    ['day' => 27, 'month' => 8, 'sign' => 'virgo'],
                ],

                // Gradi
                // 'degree_start' => 5,
                // 'degree_end' => 10,
                'orientation' => 'SUD-OVEST',

                // Salmo
                'psalm' => 16,
                'psalm_verse' => 5,
                'vulgata' => 15,
                'vulgata_verse' => 5,
                'psalm_link' => '/salmi/16',

                // Contenuti
                'quality' => [
                    'it' => 'Giustizia equilibrata, misericordia e capacità di giudizio equo.',
                    'en' => 'Balanced justice, mercy and capacity for fair judgment.',
                    'la' => 'Iustitia aequilibrata et misericordia.',
                    'he' => 'צדק מאוזן ורחמים'
                ],
                'help' => [
                    'it' => 'Favorisce riconciliazione, equità nelle decisioni e attenuazione dei conflitti.',
                    'en' => 'Encourages reconciliation, fairness in decisions and easing of conflicts.',
                    'la' => 'Reconciliationem et aequitatem fovet.',
                    'he' => 'מעודד פיוס וצדק בהחלטות'
                ],
                'prevent' => [
                    'it' => 'Previene rigidità eccessiva, severità priva di compassione e squilibrio nei giudizi.',
                    'en' => 'Prevents excessive rigidity, compassionless severity and imbalance in judgments.',
                    'la' => 'Rigiditatem et severitatem immoderatam impedit.',
                    'he' => 'מונע קשיחות וחוסר איזון בשיפוט'
                ],
            ],

            // Potestà
            [
                'number' => 33,
                'name' => "Yehovyah (Ye-ho-v yah)",
                'kabal_name' => "Yehuyah",

                // Yod = principio attivo / scintilla originaria
                // He  = rivelazione / manifestazione
                // Vav = connessione / trasmissione
                'trigram' => "Yod He Vav", // Trigramma
                'trigram_significate' => "origine rivelazione connessione",

                'definition' => [
                    'it' => 'YHV - Dio che crea, rivela e connette',
                    'en' => 'YHV - God who creates, reveals and connects',
                    'la' => 'YHV - Deus qui creat, revelat et connectit',
                    'he' => 'YHV - האל היוצר, המגלה ומחבר',
                ],

                'new_definition' => [
                    'it' => 'Dio è principio che rivela e ristabilisce ordine',
                    'en' => 'God is the principle that reveals and restores order',
                    'la' => 'Deus est principium quod revelat et ordinem restituit',
                    'he' => 'האל הוא העיקרון המגלה ומשיב סדר',
                ],

                'hebrew_letters' => 'יהו',
                'hebrew_name' => 'יהויה',

                'letter_details' => [
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Principio attivo che osserva, conosce e orienta ogni azione verso responsabilità.',
                            'en' => 'Active principle that observes, knows and directs every action toward responsibility.',
                            'la' => 'Principium activum quod cognoscit et dirigit ad responsabilitatem.',
                            'he' => 'עיקרון פעיל היודע ומכוון לאחריות'
                        ]
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => [
                            'it' => 'Rivelazione e consapevolezza che rende manifesta la verità.',
                            'en' => 'Revelation and awareness that make truth manifest.',
                            'la' => 'Revelatio et conscientia veritatem manifestans.',
                            'he' => 'התגלות ותודעה המגלות את האמת'
                        ]
                    ],
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => [
                            'it' => 'Connessione che ristabilisce equilibrio tra autorità e giustizia.',
                            'en' => 'Connection restoring balance between authority and justice.',
                            'la' => 'Connexio aequilibrium inter auctoritatem et iustitiam restituens.',
                            'he' => 'חיבור המשיב איזון בין סמכות לצדק'
                        ]
                    ],
                ],

                'choir' => 'powers',
                'archangel' => 'camael',
                'element' => 'earth',
                'zodiac_days' => [
                    ['day' => 28, 'month' => 8, 'sign' => 'virgo'],
                    ['day' => 29, 'month' => 8, 'sign' => 'virgo'],
                    ['day' => 30, 'month' => 8, 'sign' => 'virgo'],
                    ['day' => 31, 'month' => 8, 'sign' => 'virgo'],
                    ['day' => 1, 'month' => 9, 'sign' => 'virgo'],
                ],

                // Gradi
                // 'degree_start' => 10,
                // 'degree_end' => 15,
                'orientation' => 'SUD-OVEST',

                // Salmo
                'psalm' => 18,
                'psalm_verse' => 41,
                'vulgata' => 17,
                'vulgata_verse' => 41,
                'psalm_link' => '/salmi/18',

                // Contenuti
                'quality' => [
                    'it' => 'Disciplina interiore, lealtà e rispetto dell’ordine giusto.',
                    'en' => 'Inner discipline, loyalty and respect for rightful order.',
                    'la' => 'Disciplina interior et fidelitas.',
                    'he' => 'משמעת פנימית ונאמנות'
                ],
                'help' => [
                    'it' => 'Aiuta a ristabilire ordine, correggere deviazioni e agire con responsabilità.',
                    'en' => 'Helps restore order, correct deviations and act with responsibility.',
                    'la' => 'Ordinem restituit et deviationes corrigit.',
                    'he' => 'מסייע להשיב סדר ולתקן סטיות'
                ],
                'prevent' => [
                    'it' => 'Previene abuso di potere, disobbedienza cieca e perdita del senso del dovere.',
                    'en' => 'Prevents abuse of power, blind disobedience and loss of duty.',
                    'la' => 'Abusum potestatis et inobedientiam impedit.',
                    'he' => 'מונע שימוש לרעה בסמכות ואובדן תחושת חובה'
                ],
            ],

            [
                'number' => 34,
                'name' => "Lahehyah (La-he-h yah)",
                'kabal_name' => "Lehahyah", // Nome tradizionale cabalistico

                // Lamed = elevazione / apprendimento / orientamento verso il superiore
                // He = rivelazione / apertura / manifestazione della volontà divina
                // He = conferma della rivelazione e stabilità nella fedeltà
                'trigram' => "Lamed He He",
                'trigram_significate' => "elevazione rivelazione rivelazione",

                'definition' => [
                    'it' => 'LHH - Dio che eleva ed è rivelazione profonda',
                    'en' => 'LHH - God who elevates and is profound revelation',
                    'la' => 'LHH - Deus qui elevat et revelatio profunda est',
                    'he' => 'LHH - האל המרומם והוא התגלות עמוקה',
                ],

                'new_definition' => [
                    'it' => 'Dio è rivelazione che guida l’elevazione',
                    'en' => 'God is revelation guiding elevation',
                    'la' => 'Deus est revelatio elevationem dirigens',
                    'he' => 'האל הוא ההתגלות המנחה את ההתעלות',
                ],

                'hebrew_letters' => 'להח',
                'hebrew_name' => 'לההיה',

                'letter_details' => [
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => [
                            'it' => 'Elevazione della mente che orienta l’uomo verso apprendimento e ordine superiore.',
                            'en' => 'Elevation of the mind directing man toward learning and higher order.',
                            'la' => 'Elevatio mentis ad doctrinam et ordinem superiorem directa.',
                            'he' => 'התעלות המחשבה המכוונת ללמידה ולסדר עליון'
                        ]
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => [
                            'it' => 'Apertura consapevole alla legge divina e alla guida superiore.',
                            'en' => 'Conscious openness to divine law and higher guidance.',
                            'la' => 'Apertio conscia ad legem divinam.',
                            'he' => 'פתיחות מודעת לחוק האלוהי'
                        ]
                    ],
                    [
                        'letter' => 'ח',
                        'name' => 'Chet',
                        'value' => 8,
                        'meaning' => [
                            'it' => 'Manifestazione stabile della fedeltà che mantiene equilibrio tra autorità e obbedienza.',
                            'en' => 'Stable manifestation of fidelity maintaining balance between authority and obedience.',
                            'la' => 'Manifestatio stabilis fidelitatis aequilibrium servans.',
                            'he' => 'ביטוי יציב של נאמנות השומר על איזון'
                        ]
                    ],
                ],

                'choir' => 'powers',
                'archangel' => 'camael',
                'element' => 'earth',
                'zodiac_days' => [
                    ['day' => 2, 'month' => 9, 'sign' => 'virgo'],
                    ['day' => 3, 'month' => 9, 'sign' => 'virgo'],
                    ['day' => 4, 'month' => 9, 'sign' => 'virgo'],
                    ['day' => 5, 'month' => 9, 'sign' => 'virgo'],
                    ['day' => 6, 'month' => 9, 'sign' => 'virgo'],
                ],

                // Gradi
                // 'degree_start' => 15,
                // 'degree_end' => 20,
                'orientation' => 'SUD-OVEST',

                // Salmo
                'psalm' => 98,
                'psalm_verse' => 4,
                'vulgata' => 97,
                'vulgata_verse' => 4,
                'psalm_link' => '/salmi/98',

                // Contenuti
                'quality' => [
                    'it' => 'Fedeltà, disciplina interiore e rispetto dell’ordine giusto.',
                    'en' => 'Fidelity, inner discipline and respect for rightful order.',
                    'la' => 'Fidelitas et disciplina interior.',
                    'he' => 'נאמנות ומשמעת פנימית'
                ],
                'help' => [
                    'it' => 'Aiuta a vivere l’autorità con equilibrio, sviluppando autocontrollo e lealtà.',
                    'en' => 'Helps live authority with balance, developing self-control and loyalty.',
                    'la' => 'Auctoritatem aequilibrate vivere et moderationem fovere iuvat.',
                    'he' => 'מסייע לחיות סמכות באיזון ולפתח שליטה עצמית'
                ],
                'prevent' => [
                    'it' => 'Previene ribellione sterile, abuso di potere e conflitti con l’autorità.',
                    'en' => 'Prevents sterile rebellion, abuse of power and conflicts with authority.',
                    'la' => 'Rebellionem sterilem et abusum potestatis impedit.',
                    'he' => 'מונע מרד עקר ושימוש לרעה בסמכות'
                ],
            ],

            [
                'number' => 35,
                'name' => "Kavakyah (Ka-va-k yah)",
                'kabal_name' => "Javakyah",

                // Kaf = forza contenuta / capacità di sostenere e proteggere
                // Vav = connessione / unione che ristabilisce il legame
                // Kaf = contenimento che preserva e mantiene l’unità ritrovata
                'trigram' => "Kaf Vav Kaf",
                'trigram_significate' => "contenimento connessione contenimento",

                'definition' => [
                    'it' => 'KVK - Dio che contiene, unisce e riconcilia',
                    'en' => 'KVK - God who contains, unites and reconciles',
                    'la' => 'KVK - Deus qui continet, unit et reconciliat',
                    'he' => 'KVK - האל המכיל, המאחד ומפייס',
                ],

                'new_definition' => [
                    'it' => 'Dio è riconciliazione che ristabilisce l’unità',
                    'en' => 'God is reconciliation restoring unity',
                    'la' => 'Deus est reconciliatio unitatem restituens',
                    'he' => 'האל הוא פיוס המשיב את האחדות',
                ],

                'hebrew_letters' => 'כוק',
                'hebrew_name' => 'כוקיה',

                'letter_details' => [
                    [
                        'letter' => 'כ',
                        'name' => 'Kaf',
                        'value' => 20,
                        'meaning' => [
                            'it' => 'Forza che contiene e protegge, capacità di sostenere il legame senza spezzarlo.',
                            'en' => 'Strength that contains and protects, ability to sustain a bond without breaking it.',
                            'la' => 'Vis continens et protegens vinculum.',
                            'he' => 'כוח המכיל ושומר על הקשר'
                        ]
                    ],
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => [
                            'it' => 'Connessione che ristabilisce l’unione tra ciò che era separato.',
                            'en' => 'Connection restoring union between what was separated.',
                            'la' => 'Connexio quae unitatem restituit inter separata.',
                            'he' => 'חיבור המשיב את האחדות בין הנפרדים'
                        ]
                    ],
                    [
                        'letter' => 'כ',
                        'name' => 'Kaf',
                        'value' => 20,
                        'meaning' => [
                            'it' => 'Contenimento che preserva e mantiene stabile la riconciliazione.',
                            'en' => 'Containment preserving and stabilizing reconciliation.',
                            'la' => 'Continentia reconciliationem stabiliens.',
                            'he' => 'הכלה השומרת על הפיוס'
                        ]
                    ],
                ],

                'choir' => 'powers',
                'archangel' => 'camael',
                'element' => 'earth',
                'zodiac_days' => [
                    ['day' => 7, 'month' => 9, 'sign' => 'virgo'],
                    ['day' => 8, 'month' => 9, 'sign' => 'virgo'],
                    ['day' => 9, 'month' => 9, 'sign' => 'virgo'],
                    ['day' => 10, 'month' => 9, 'sign' => 'virgo'],
                    ['day' => 11, 'month' => 9, 'sign' => 'virgo'],
                ],

                // Gradi
                // 'degree_start' => 20,
                // 'degree_end' => 25,
                'orientation' => 'SUD-OVEST',

                // Salmo
                'psalm' => 88,
                'psalm_verse' => 2,
                'vulgata' => 87,
                'vulgata_verse' => 2,
                'psalm_link' => '/salmi/88',

                // Contenuti
                'quality' => [
                    'it' => 'Riconciliazione profonda, lealtà e ristabilimento della pace nei legami.',
                    'en' => 'Deep reconciliation, loyalty and restoration of peace in relationships.',
                    'la' => 'Reconciliatio profunda et pax in vinculis restituta.',
                    'he' => 'פיוס עמוק והשבת שלום בקשרים'
                ],
                'help' => [
                    'it' => 'Aiuta a ricucire relazioni spezzate, favorendo pace, fedeltà e rispetto reciproco.',
                    'en' => 'Helps mend broken relationships, fostering peace, loyalty and mutual respect.',
                    'la' => 'Relationes fractas restaurare et pacem fovere iuvat.',
                    'he' => 'מסייע לתקן קשרים שבורים ולעודד שלום ונאמנות'
                ],
                'prevent' => [
                    'it' => 'Previene divisioni persistenti, tradimenti e conflitti familiari.',
                    'en' => 'Prevents lasting divisions, betrayals and family conflicts.',
                    'la' => 'Divisiones et proditiones impedit.',
                    'he' => 'מונע קרעים ובגידות במשפחה'
                ],
            ],

            [
                'number' => 36,
                'name' => "Menudel (Me-nu-d el)",
                'kabal_name' => "Menadel",

                // Mem = flusso / origine vitale / rigenerazione
                // Nun = continuità / perseveranza / vita che attraversa le prove
                // Dalet = porta / passaggio verso nuova condizione
                'trigram' => "Mem Nun Dalet",
                'trigram_significate' => "flusso perseveranza passaggio",

                'definition' => [
                    'it' => 'MND - Dio che sostiene, mantiene e apre il passaggio',
                    'en' => 'MND - God who sustains, maintains and opens the passage',
                    'la' => 'MND - Deus qui sustinet, conservat et transitum aperit',
                    'he' => 'MND - האל המקיים, שומר ופותח מעבר',
                ],

                'new_definition' => [
                    'it' => 'Dio è passaggio che conduce alla liberazione',
                    'en' => 'God is passage leading to liberation',
                    'la' => 'Deus est transitus ad liberationem ducens',
                    'he' => 'האל הוא מעבר המוביל לשחרור',
                ],

                'hebrew_letters' => 'מנד',
                'hebrew_name' => 'מנדאל',

                'letter_details' => [
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => [
                            'it' => 'Flusso che purifica e scioglie ciò che trattiene, principio di rigenerazione.',
                            'en' => 'Flow that purifies and releases what binds, principle of regeneration.',
                            'la' => 'Fluxus purificans et regenerans.',
                            'he' => 'זרימה מטהרת ומשחררת'
                        ]
                    ],
                    [
                        'letter' => 'נ',
                        'name' => 'Nun',
                        'value' => 50,
                        'meaning' => [
                            'it' => 'Perseveranza dell’anima che attraversa prove senza spezzarsi.',
                            'en' => 'Perseverance of the soul passing through trials without breaking.',
                            'la' => 'Perseverantia animae per probationes.',
                            'he' => 'התמדה העוברת דרך ניסיון'
                        ]
                    ],
                    [
                        'letter' => 'ד',
                        'name' => 'Dalet',
                        'value' => 4,
                        'meaning' => [
                            'it' => 'Porta di uscita da una condizione limitante verso nuova stabilità.',
                            'en' => 'Door leading out of limitation toward new stability.',
                            'la' => 'Ianua e limitatione ad stabilitatem novam.',
                            'he' => 'דלת יציאה ממצב מגביל'
                        ]
                    ],
                ],

                'choir' => 'powers',
                'archangel' => 'camael',
                'element' => 'earth',
                'zodiac_days' => [
                    ['day' => 12, 'month' => 9, 'sign' => 'virgo'],
                    ['day' => 13, 'month' => 9, 'sign' => 'virgo'],
                    ['day' => 14, 'month' => 9, 'sign' => 'virgo'],
                    ['day' => 15, 'month' => 9, 'sign' => 'virgo'],
                    ['day' => 16, 'month' => 9, 'sign' => 'virgo'],
                ],

                // Gradi
                // 'degree_start' => 25,
                // 'degree_end' => 30,
                'orientation' => 'SUD-OVEST',

                // Salmo
                'psalm' => 40,
                'psalm_verse' => 2,
                'vulgata' => 39,
                'vulgata_verse' => 2,
                'psalm_link' => '/salmi/40',

                // Contenuti
                'quality' => [
                    'it' => 'Liberazione da condizioni oppressive e recupero della dignità personale.',
                    'en' => 'Liberation from oppressive conditions and recovery of personal dignity.',
                    'la' => 'Liberatio et dignitatis restitutio.',
                    'he' => 'שחרור והשבת כבוד'
                ],
                'help' => [
                    'it' => 'Aiuta a sciogliere vincoli ingiusti e a ritrovare autonomia e stabilità.',
                    'en' => 'Helps dissolve unjust bonds and restore autonomy and stability.',
                    'la' => 'Vincula iniusta dissolvere et stabilitatem restituere iuvat.',
                    'he' => 'מסייע לשחרר קשרים לא צודקים ולהשיב יציבות'
                ],
                'prevent' => [
                    'it' => 'Previene dipendenza, sottomissione passiva e perdita di integrità.',
                    'en' => 'Prevents dependency, passive submission and loss of integrity.',
                    'la' => 'Dependentiam et integritatis iacturam impedit.',
                    'he' => 'מונע תלות ואובדן יושרה'
                ],
            ],

            [
                'number' => 37,
                'name' => "Anyel (A-n-y el)",
                'kabal_name' => "Aniel",

                // Aleph = unità / principio / origine non manifesta
                // Nun = continuità / permanenza / ciclo che si rinnova
                // Yod = scintilla / attivazione / direzione cosciente
                'trigram' => "Aleph Nun Yod",
                'trigram_significate' => "unità continuità attivazione",

                'definition' => [
                    'it' => 'ANY - Dio che attiva e rinnova l’unità attraverso continuità',
                    'en' => 'ANY - God who activates and renews unity through continuity',
                    'la' => 'ANY - Deus qui unitatem per continuationem renovat',
                    'he' => 'ANY - האל המפעיל ומחדש אחדות דרך המשכיות',
                ],

                'new_definition' => [
                    'it' => 'Dio è unità che si rinnova nella coscienza',
                    'en' => 'God is unity renewing itself in consciousness',
                    'la' => 'Deus est unitas in conscientia se renovans',
                    'he' => 'האל הוא אחדות המתחדשת בתודעה',
                ],

                'hebrew_letters' => 'אני',
                'hebrew_name' => 'אניאל',

                'letter_details' => [
                    [
                        'letter' => 'א',
                        'name' => 'Aleph',
                        'value' => 1,
                        'meaning' => [
                            'it' => 'Principio originario e unità superiore che ordina e armonizza.',
                            'en' => 'Primordial principle and higher unity that orders and harmonizes.',
                            'la' => 'Principium primordiale et unitas superior.',
                            'he' => 'עיקרון ראשוני ואחדות עליונה'
                        ]
                    ],
                    [
                        'letter' => 'נ',
                        'name' => 'Nun',
                        'value' => 50,
                        'meaning' => [
                            'it' => 'Continuità che permette trasformazione senza perdita dell’essenza.',
                            'en' => 'Continuity allowing transformation without loss of essence.',
                            'la' => 'Continuatio transformationem sine essentiae amissione permittens.',
                            'he' => 'המשכיות המאפשרת שינוי ללא אובדן המהות'
                        ]
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Scintilla attiva che risveglia coscienza e orienta l’azione.',
                            'en' => 'Active spark awakening consciousness and directing action.',
                            'la' => 'Scintilla activa conscientiam excitans et actionem dirigens.',
                            'he' => 'ניצוץ פעיל המעורר תודעה ומכוון פעולה'
                        ]
                    ],
                ],

                'choir' => 'powers',
                'archangel' => 'camael',
                'element' => 'air',
                'zodiac_days' => [
                    ['day' => 17, 'month' => 9, 'sign' => 'virgo'],
                    ['day' => 18, 'month' => 9, 'sign' => 'virgo'],
                    ['day' => 19, 'month' => 9, 'sign' => 'virgo'],
                    ['day' => 20, 'month' => 9, 'sign' => 'virgo'],
                    ['day' => 21, 'month' => 9, 'sign' => 'virgo'],
                ],

                // Gradi
                // 'degree_start' => 0,
                // 'degree_end' => 5,
                'orientation' => 'OVEST',

                // Salmo
                'psalm' => 80,
                'psalm_verse' => 20,
                'vulgata' => 79,
                'vulgata_verse' => 20,
                'psalm_link' => '/salmi/80',

                // Contenuti
                // Qualità
                'quality' => [
                    'it' => 'Rinnovamento della coscienza, elevazione interiore e ritorno all’unità.',
                    'en' => 'Renewal of consciousness, inner elevation and return to unity.',
                    'la' => 'Renovatio conscientiae et elevatio interior.',
                    'he' => 'התחדשות התודעה והתעלות פנימית'
                ],

                // Aiuto
                'help' => [
                    'it' => 'Aiuta a rialzarsi dopo le cadute, ristabilendo equilibrio e chiarezza interiore.',
                    'en' => 'Helps rise after falls, restoring balance and inner clarity.',
                    'la' => 'Ad resurgendum et aequilibrium restituendum iuvat.',
                    'he' => 'מסייע לקום לאחר נפילה ולהשיב איזון ובהירות'
                ],

                // Prevenzione
                'prevent' => [
                    'it' => 'Previene dispersione interiore, perdita di direzione e disconnessione dalla coscienza.',
                    'en' => 'Prevents inner dispersion, loss of direction and disconnection from consciousness.',
                    'la' => 'Dispersionem et directionis amissionem impedit.',
                    'he' => 'מונע פיזור ואובדן כיוון פנימי'
                ],
            ],

            [
                'number' => 38,
                'name' => "Heamyah (He-a-m yah)",
                'kabal_name' => "Haamyah",

                // Chet = forza vitale / protezione / contenimento
                // Ayin = visione / percezione / discernimento profondo
                // Mem = purificazione / rigenerazione / ritorno all’essenza
                'trigram' => "Chet Ayin Mem",
                'trigram_significate' => "protezione visione purificazione",

                'definition' => [
                    'it' => 'HOM - Dio che protegge, rivela e purifica',
                    'en' => 'HOM - God who protects, reveals and purifies',
                    'la' => 'HOM - Deus qui protegit, revelat et purificat',
                    'he' => 'HOM - האל המגן, מגלה ומטהר',
                ],

                'new_definition' => [
                    'it' => 'Dio è rivelazione che purifica ciò che è consacrato',
                    'en' => 'God is revelation that purifies what is consecrated',
                    'la' => 'Deus est revelatio quae purificat quod sacrum est',
                    'he' => 'האל הוא התגלות המטהרת את המקודש',
                ],

                'hebrew_letters' => 'חעמ',
                'hebrew_name' => 'חעמיה',

                'letter_details' => [
                    [
                        'letter' => 'ח',
                        'name' => 'Chet',
                        'value' => 8,
                        'meaning' => [
                            'it' => 'Forza che protegge e custodisce ciò che deve rimanere integro.',
                            'en' => 'Force that protects and preserves what must remain whole.',
                            'la' => 'Vis quae protegit et integritatem custodit.',
                            'he' => 'כוח המגן ושומר על שלמות'
                        ]
                    ],
                    [
                        'letter' => 'ע',
                        'name' => 'Ayin',
                        'value' => 70,
                        'meaning' => [
                            'it' => 'Visione che permette discernimento e comprensione profonda.',
                            'en' => 'Vision enabling discernment and deep understanding.',
                            'la' => 'Visio discretionem et intellectum profundum tribuens.',
                            'he' => 'ראייה המאפשרת הבחנה והבנה עמוקה'
                        ]
                    ],
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => [
                            'it' => 'Purificazione e rinnovamento attraverso consapevolezza.',
                            'en' => 'Purification and renewal through awareness.',
                            'la' => 'Purificatio et renovatio per conscientiam.',
                            'he' => 'טיהור והתחדשות דרך מודעות'
                        ]
                    ],
                ],

                'choir' => 'powers',
                'archangel' => 'camael',
                'element' => 'air',
                'zodiac_days' => [
                    ['day' => 22, 'month' => 9, 'sign' => 'virgo'],
                    ['day' => 23, 'month' => 9, 'sign' => 'libra'],
                    ['day' => 24, 'month' => 9, 'sign' => 'libra'],
                    ['day' => 25, 'month' => 9, 'sign' => 'libra'],
                    ['day' => 26, 'month' => 9, 'sign' => 'libra'],
                ],

                // Gradi
                // 'degree_start' => 5,
                // 'degree_end' => 10,
                'orientation' => 'OVEST',

                // Salmo
                'psalm' => 91,
                'psalm_verse' => 10,
                'vulgata' => 90,
                'vulgata_verse' => 10,
                'psalm_link' => '/salmi/91',

                // Contenuti
                // Qualità
                'quality' => [
                    'it' => 'Protezione del sacro, purezza e capacità di discernimento profondo.',
                    'en' => 'Protection of the sacred, purity and deep discernment.',
                    'la' => 'Protectio sacri et discretio profunda.',
                    'he' => 'הגנה על הקדושה והבחנה עמוקה'
                ],
                // Aiuto
                'help' => [
                    'it' => 'Aiuta a mantenere integrità e purezza, orientando verso ciò che è essenziale.',
                    'en' => 'Helps maintain integrity and purity, directing toward what is essential.',
                    'la' => 'Integritatem servare et ad essentiam dirigere iuvat.',
                    'he' => 'מסייע לשמור על טוהר ולכוון למהות'
                ],
                // Prevenzione
                'prevent' => [
                    'it' => 'Previene contaminazione interiore, confusione e perdita del senso del sacro.',
                    'en' => 'Prevents inner contamination, confusion and loss of the sense of the sacred.',
                    'la' => 'Contaminationem et confusionem impedit.',
                    'he' => 'מונע זיהום פנימי ואובדן תחושת הקדושה'
                ],
            ],

            [
                'number' => 39,
                'name' => "Rehael (Re-h-a el)",
                'kabal_name' => "Rehael",

                // Resh = rinnovamento / ritorno al principio / riallineamento
                // He = rivelazione / manifestazione / apertura
                // Aleph = unità / origine / armonia fondamentale
                'trigram' => "Resh He Aleph",
                'trigram_significate' => "rinnovamento rivelazione unità",

                'definition' => [
                    'it' => 'RHA - Dio che rinnova, rivela e ristabilisce l’unità',
                    'en' => 'RHA - God who renews, reveals and restores unity',
                    'la' => 'RHA - Deus qui renovat, revelat et unitatem restituit',
                    'he' => 'RHA - האל המחדש, מגלה ומשיב אחדות',
                ],

                'new_definition' => [
                    'it' => 'Dio è rivelazione che ristabilisce l’armonia',
                    'en' => 'God is revelation restoring harmony',
                    'la' => 'Deus est revelatio quae harmoniam restituit',
                    'he' => 'האל הוא התגלות המשיבה הרמוניה',
                ],

                'hebrew_letters' => 'רהא',
                'hebrew_name' => 'ראהאל',

                'letter_details' => [
                    [
                        'letter' => 'ר',
                        'name' => 'Resh',
                        'value' => 200,
                        'meaning' => [
                            'it' => 'Rinnovamento che riporta al principio e corregge la direzione.',
                            'en' => 'Renewal that returns to the principle and corrects direction.',
                            'la' => 'Renovatio ad principium rediens et directionem corrigens.',
                            'he' => 'התחדשות המחזירה לעיקרון ומתקנת כיוון'
                        ]
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => [
                            'it' => 'Rivelazione che manifesta ciò che ristabilisce ordine e guarigione.',
                            'en' => 'Revelation manifesting what restores order and healing.',
                            'la' => 'Revelatio ordinem et sanationem manifestans.',
                            'he' => 'התגלות המגלה סדר וריפוי'
                        ]
                    ],
                    [
                        'letter' => 'א',
                        'name' => 'Aleph',
                        'value' => 1,
                        'meaning' => [
                            'it' => 'Unità originaria che ristabilisce armonia nei legami fondamentali.',
                            'en' => 'Primordial unity restoring harmony in foundational bonds.',
                            'la' => 'Unitas primordialis harmoniam restaurans.',
                            'he' => 'אחדות ראשונית המשיבה הרמוניה בקשרים היסודיים'
                        ]
                    ],
                ],

                'choir' => 'powers',
                'archangel' => 'camael',
                'element' => 'air',
                'zodiac_days' => [
                    ['day' => 27, 'month' => 9, 'sign' => 'libra'],
                    ['day' => 28, 'month' => 9, 'sign' => 'libra'],
                    ['day' => 29, 'month' => 9, 'sign' => 'libra'],
                    ['day' => 30, 'month' => 9, 'sign' => 'libra'],
                    ['day' => 1, 'month' => 10, 'sign' => 'libra'],
                ],

                // Gradi
                // 'degree_start' => 10,
                // 'degree_end' => 15,
                'orientation' => 'OVEST',

                // Salmo
                'psalm' => 55,
                'psalm_verse' => 23,
                'vulgata' => 54,
                'vulgata_verse' => 23,
                'psalm_link' => '/salmi/55',

                // Contenuti
                // Qualità
                'quality' => [
                    'it' => 'Guarigione dei legami, ristabilimento dell’ordine familiare e ritorno all’unità.',
                    'en' => 'Healing of bonds, restoration of family order and return to unity.',
                    'la' => 'Sanatio vinculorum et restitutio ordinis familiaris.',
                    'he' => 'ריפוי קשרים והשבת הסדר המשפחתי'
                ],
                // Aiuto
                'help' => [
                    'it' => 'Aiuta a ricomporre fratture affettive, ristabilire rispetto tra genitori e figli e guarire conflitti generazionali.',
                    'en' => 'Helps mend emotional fractures, restore respect between parents and children and heal generational conflicts.',
                    'la' => 'Fracturas reconciliat et ordinem inter parentes et filios restituit.',
                    'he' => 'מסייע לרפא קרעים ולהשיב כבוד בין הורים לילדים'
                ],
                // Prevenzione
                'prevent' => [
                    'it' => 'Previene rotture, disarmonia e perdita dell’unità nei legami essenziali.',
                    'en' => 'Prevents rupture, disharmony and loss of unity in essential bonds.',
                    'la' => 'Rupturas et disharmoniam impedit.',
                    'he' => 'מונע קרעים ואובדן אחדות בקשרים'
                ],
            ],

            [
                'number' => 40,
                'name' => "Yoyozael (Yo-yo-za el)",
                'kabal_name' => "Yeyzael",

                // Yod = attivazione / scintilla / inizio cosciente
                // Yod = rafforzamento / continuità dell’azione / volontà
                // Zayin = separazione / taglio / liberazione
                'trigram' => "Yod Yod Zayin",
                'trigram_significate' => "attivazione rafforzamento separazione",

                'definition' => [
                    'it' => 'YYZ - Dio che attiva, rafforza e libera attraverso separazione',
                    'en' => 'YYZ - God who activates, strengthens and liberates through separation',
                    'la' => 'YYZ - Deus qui activat, confirmat et per separationem liberat',
                    'he' => 'YYZ - האל המפעיל, מחזק ומשחרר דרך הפרדה',
                ],

                'new_definition' => [
                    'it' => 'Dio è separazione che libera dall’oppressione',
                    'en' => 'God is separation that liberates from oppression',
                    'la' => 'Deus est separatio quae ab oppressione liberat',
                    'he' => 'האל הוא הפרדה המשחררת מדיכוי',
                ],

                'hebrew_letters' => 'ייז',
                'hebrew_name' => 'ייזאל',

                'letter_details' => [
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Scintilla divina che avvia il rinnovamento interiore.',
                            'en' => 'Divine spark initiating inner renewal.',
                            'la' => 'Scintilla divina renovationem interioris incipiens.',
                            'he' => 'ניצוץ אלוהי הפותח התחדשות פנימית'
                        ]
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Rafforzamento dell’intenzione e della volontà di risollevarsi.',
                            'en' => 'Strengthening of intention and will to rise again.',
                            'la' => 'Confirmatio voluntatis ad relevationem.',
                            'he' => 'חיזוק הרצון לקום מחדש'
                        ]
                    ],
                    [
                        'letter' => 'ז',
                        'name' => 'Zayin',
                        'value' => 7,
                        'meaning' => [
                            'it' => 'Separazione dal dolore e liberazione da ciò che opprime.',
                            'en' => 'Separation from sorrow and liberation from oppression.',
                            'la' => 'Separatio a dolore et oppressione.',
                            'he' => 'הפרדה מן הכאב והשחרור מן הדיכוי'
                        ]
                    ],
                ],

                'choir' => 'powers',
                'archangel' => 'camael',
                'element' => 'air',
                'zodiac_days' => [
                    ['day' => 2, 'month' => 10, 'sign' => 'libra'],
                    ['day' => 3, 'month' => 10, 'sign' => 'libra'],
                    ['day' => 4, 'month' => 10, 'sign' => 'libra'],
                    ['day' => 5, 'month' => 10, 'sign' => 'libra'],
                    ['day' => 6, 'month' => 10, 'sign' => 'libra'],
                ],

                // Gradi
                // 'degree_start' => 15,
                // 'degree_end' => 20,
                'orientation' => 'OVEST',

                // Salmo
                'psalm' => 28,
                'psalm_verse' => 8,
                'vulgata' => 27,
                'vulgata_verse' => 8,
                'psalm_link' => '/salmi/28',

                // Contenuti
                'quality' => [
                    'it' => 'Consolazione, liberazione interiore e riattivazione della creatività.',
                    'en' => 'Consolation, inner liberation and reactivation of creativity.',
                    'la' => 'Consolatio et liberatio interior.',
                    'he' => 'נחמה ושחרור פנימי'
                ],
                // Aiuto
                'help' => [
                    'it' => 'Aiuta a superare malinconia e oppressione, favorendo sollievo e rinnovamento.',
                    'en' => 'Helps overcome melancholy and oppression, fostering relief and renewal.',
                    'la' => 'Melancholiam superare et renovationem afferre iuvat.',
                    'he' => 'מסייע להתגבר על עצב ולהתחדש'
                ],
                // Prevenzione
                'prevent' => [
                    'it' => 'Previene attaccamento al dolore, dipendenze emotive e blocchi interiori.',
                    'en' => 'Prevents attachment to pain, emotional dependencies and inner blockages.',
                    'la' => 'Adhaesionem dolori et dependentias impedit.',
                    'he' => 'מונע היצמדות לכאב ותלות רגשית'
                ],
            ],

            // Virtù
            [
                'number' => 41,
                'name' => "Hehehel (He-he-h el)",
                'kabal_name' => "Hahahel",

                // He = rivelazione / apertura / manifestazione
                // He = rivelazione raddoppiata / testimonianza / espansione
                // He = pienezza della rivelazione / espressione totale del divino
                'trigram' => "He He He",
                'trigram_significate' => "rivelazione rivelazione rivelazione",

                'definition' => [
                    'it' => 'HHH - Dio che si manifesta nella sua pienezza',
                    'en' => 'HHH - God who manifests in His fullness',
                    'la' => 'HHH - Deus qui in sua plenitudine manifestatur',
                    'he' => 'HHH - האל המתגלה בשלמותו',
                ],

                'new_definition' => [
                    'it' => 'Dio è rivelazione che si manifesta nella pienezza',
                    'en' => 'God is revelation manifesting in fullness',
                    'la' => 'Deus est revelatio in plenitudine manifestata',
                    'he' => 'האל הוא התגלות המתגלה בשלמות',
                ],

                'hebrew_letters' => 'ההה',
                'hebrew_name' => 'הההאל',

                'letter_details' => [
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => [
                            'it' => 'Rivelazione iniziale che apre alla presenza divina.',
                            'en' => 'Initial revelation opening to divine presence.',
                            'la' => 'Revelatio initialis ad praesentiam divinam aperiens.',
                            'he' => 'התגלות ראשונית הפותחת לנוכחות האל'
                        ]
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => [
                            'it' => 'Espansione della rivelazione che diventa testimonianza attiva.',
                            'en' => 'Expansion of revelation becoming active testimony.',
                            'la' => 'Expansio revelationis in testimonium activum.',
                            'he' => 'התרחבות ההתגלות לעדות פעילה'
                        ]
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => [
                            'it' => 'Pienezza della manifestazione che conduce alla consacrazione totale.',
                            'en' => 'Full manifestation leading to total consecration.',
                            'la' => 'Plenitudo manifestationis ad consecrationem totalem ducens.',
                            'he' => 'שלמות ההתגלות המביאה להקדשה מלאה'
                        ]
                    ],
                ],

                'choir' => 'virtues',
                'archangel' => 'raphael',
                'element' => 'air',
                'zodiac_days' => [
                    ['day' => 7, 'month' => 10, 'sign' => 'libra'],
                    ['day' => 8, 'month' => 10, 'sign' => 'libra'],
                    ['day' => 9, 'month' => 10, 'sign' => 'libra'],
                    ['day' => 10, 'month' => 10, 'sign' => 'libra'],
                    ['day' => 11, 'month' => 10, 'sign' => 'libra'],
                ],

                // Gradi
                // 'degree_start' => 20,
                // 'degree_end' => 25,
                'orientation' => 'OVEST',

                // Salmo
                'psalm' => 120,
                'psalm_verse' => 2,
                'vulgata' => 119,
                'vulgata_verse' => 119,
                'psalm_link' => '/salmi/120',

                // Contenuti
                'quality' => [
                    'it' => 'Intensità spirituale, vocazione alla testimonianza e dedizione totale al divino.',
                    'en' => 'Spiritual intensity, vocation to testimony and total dedication to the divine.',
                    'la' => 'Intensitas spiritualis et dedicatio totalis.',
                    'he' => 'עוצמה רוחנית והקדשה מלאה'
                ],
                // Aiuto
                'help' => [
                    'it' => 'Aiuta a vivere la fede con coerenza e a diffondere verità con coraggio.',
                    'en' => 'Helps live faith consistently and spread truth with courage.',
                    'la' => 'Fidem constanter vivere et veritatem diffundere iuvat.',
                    'he' => 'מסייע לחיות אמונה בעקביות ולהפיץ אמת באומץ'
                ],
                // Prevenzione
                'prevent' => [
                    'it' => 'Previene incoerenza, dispersione spirituale e perdita del senso del sacro.',
                    'en' => 'Prevents inconsistency, spiritual dispersion and loss of the sacred sense.',
                    'la' => 'Inconstantiam et dispersionem spiritualem impedit.',
                    'he' => 'מונע חוסר עקביות ואובדן קדושה'
                ],
            ],

            [
                'number' => 42,
                'name' => "Meyokael (Me-yo-ka el)",
                'kabal_name' => "Mikael",

                // Mem = flusso / interiorità / maturazione
                // Yod = attivazione / direzione / coscienza
                // Kaf = applicazione / realizzazione / forza contenuta
                'trigram' => "Mem Yod Kaf",
                'trigram_significate' => "flusso attivazione applicazione",

                'definition' => [
                    'it' => 'MYK - Dio che attiva e applica il flusso',
                    'en' => 'MYK - God who activates and applies the flow',
                    'la' => 'MYK - Deus qui fluxum activat et applicat',
                    'he' => 'MYK - האל המפעיל ומיישם את הזרימה',
                ],

                'new_definition' => [
                    'it' => 'Dio è flusso che si realizza nell’azione',
                    'en' => 'God is flow realized in action',
                    'la' => 'Deus est fluxus in actione realisatus',
                    'he' => 'האל הוא זרימה המתממשת בפעולה',
                ],

                'hebrew_letters' => 'מיכ',
                'hebrew_name' => 'מיכאל',

                'letter_details' => [
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => [
                            'it' => 'Flusso interiore che genera maturazione e trasformazione.',
                            'en' => 'Inner flow generating maturation and transformation.',
                            'la' => 'Fluxus interior maturationem generans.',
                            'he' => 'זרימה פנימית היוצרת הבשלה'
                        ]
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Scintilla divina che orienta verso verità e rettitudine.',
                            'en' => 'Divine spark directing toward truth and uprightness.',
                            'la' => 'Scintilla divina ad veritatem dirigens.',
                            'he' => 'ניצוץ אלוהי המכוון אל האמת'
                        ]
                    ],
                    [
                        'letter' => 'כ',
                        'name' => 'Kaf',
                        'value' => 20,
                        'meaning' => [
                            'it' => 'Forza che applica giustizia con equilibrio e misura.',
                            'en' => 'Strength applying justice with balance and measure.',
                            'la' => 'Vis iustitiam cum aequilibrio applicans.',
                            'he' => 'כוח המיישם צדק באיזון'
                        ]
                    ],
                ],

                'choir' => 'virtues',
                'archangel' => 'raphael',
                'element' => 'air',
                'zodiac_days' => [
                    ['day' => 12, 'month' => 10, 'sign' => 'libra'],
                    ['day' => 13, 'month' => 10, 'sign' => 'libra'],
                    ['day' => 14, 'month' => 10, 'sign' => 'libra'],
                    ['day' => 15, 'month' => 10, 'sign' => 'libra'],
                    ['day' => 16, 'month' => 10, 'sign' => 'libra'],
                ],

                // Gradi
                // 'degree_start' => 25,
                // 'degree_end' => 30,
                'orientation' => 'OVEST',

                // Salmo
                'psalm' => 9,
                'psalm_verse' => 5,
                'vulgata' => 8,
                'vulgata_verse' => 5,
                'psalm_link' => '/salmi/9',

                // Contenuti
                // Qualità
                'quality' => [
                    'it' => 'Equilibrio nelle relazioni, chiarezza nelle decisioni e stabilità interiore.',
                    'en' => 'Balance in relationships, clarity in decisions and inner stability.',
                    'la' => 'Aequilibrium et claritas interior.',
                    'he' => 'איזון פנימי ובהירות בהחלטות'
                ],
                // Aiuto
                'help' => [
                    'it' => 'Aiuta a trasformare le emozioni in azioni equilibrate e costruttive.',
                    'en' => 'Helps transform emotions into balanced and constructive actions.',
                    'la' => 'Motus interiores in actiones aequilibratas convertit.',
                    'he' => 'מסייע להפוך רגשות לפעולה מאוזנת'
                ],
                // Prevenzione
                'prevent' => [
                    'it' => 'Previene instabilità emotiva, conflitti e squilibri affettivi.',
                    'en' => 'Prevents emotional instability, conflicts and relational imbalance.',
                    'la' => 'Instabilitatem et discordias impedit.',
                    'he' => 'מונע חוסר יציבות רגשית וסכסוכים'
                ],
            ],

            [
                'number' => 43,
                'name' => "Vavalyah (Va-va-l yah)",
                'kabal_name' => "Vevalyah",

                // Vav = connessione / legame / unione
                // Vav = rafforzamento / continuità del legame
                // Lamed = elevazione / direzione verso il superiore
                'trigram' => "Vav Vav Lamed",
                'trigram_significate' => "connessione connessione elevazione",

                'definition' => [
                    'it' => 'VVL - Dio che connette, rafforza e eleva',
                    'en' => 'VVL - God who connects, strengthens and elevates',
                    'la' => 'VVL - Deus qui connectit, confirmat et elevat',
                    'he' => 'VVL - האל המחבר, מחזק ומרומם',
                ],

                'new_definition' => [
                    'it' => 'Dio è connessione che conduce all’elevazione',
                    'en' => 'God is connection leading to elevation',
                    'la' => 'Deus est connexio ad elevationem ducens',
                    'he' => 'האל הוא חיבור המוביל להתעלות',
                ],

                'hebrew_letters' => 'וול',
                'hebrew_name' => 'ווליה',

                'letter_details' => [
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => [
                            'it' => 'Connessione che unisce e stabilisce un legame attivo.',
                            'en' => 'Connection that unites and establishes an active bond.',
                            'la' => 'Connexio quae vinculum activum constituit.',
                            'he' => 'חיבור היוצר קשר פעיל'
                        ]
                    ],
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => [
                            'it' => 'Rafforzamento del legame e continuità dell’unione.',
                            'en' => 'Strengthening of the bond and continuity of union.',
                            'la' => 'Confirmatio vinculi et continuatio unionis.',
                            'he' => 'חיזוק הקשר והמשכיות האיחוד'
                        ]
                    ],
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => [
                            'it' => 'Elevazione che orienta verso un livello superiore.',
                            'en' => 'Elevation directing toward a higher level.',
                            'la' => 'Elevatio ad gradum superiorem dirigens.',
                            'he' => 'התעלות המכוונת לרמה גבוהה יותר'
                        ]
                    ],
                ],

                'choir' => 'virtues',
                'archangel' => 'raphael',
                'element' => 'water',
                'zodiac_days' => [
                    ['day' => 17, 'month' => 10, 'sign' => 'libra'],
                    ['day' => 18, 'month' => 10, 'sign' => 'libra'],
                    ['day' => 19, 'month' => 10, 'sign' => 'libra'],
                    ['day' => 20, 'month' => 10, 'sign' => 'libra'],
                    ['day' => 21, 'month' => 10, 'sign' => 'libra'],
                ],

                // Gradi
                // 'degree_start' => 0,
                // 'degree_end' => 5,
                'orientation' => 'OVEST',

                // Salmo
                'psalm' => 88,
                'psalm_verse' => 13,
                'vulgata' => 87,
                'vulgata_verse' => 13,
                'psalm_link' => '/salmi/88',

                // Contenuti
                'quality' => [
                    'it' => 'Forza nei legami, stabilità interiore e crescita attraverso connessione autentica.',
                    'en' => 'Strength in bonds, inner stability and growth through authentic connection.',
                    'la' => 'Vis in vinculis et stabilitas interior.',
                    'he' => 'כוח בקשרים ויציבות פנימית'
                ],

                'help' => [
                    'it' => 'Aiuta a costruire legami solidi e a trasformare le relazioni in crescita.',
                    'en' => 'Helps build strong bonds and transform relationships into growth.',
                    'la' => 'Vincula firmare et relationes in progressionem convertere iuvat.',
                    'he' => 'מסייע לבנות קשרים חזקים ולפתח צמיחה'
                ],

                'prevent' => [
                    'it' => 'Previene isolamento, legami deboli e perdita di direzione.',
                    'en' => 'Prevents isolation, weak bonds and loss of direction.',
                    'la' => 'Isolationem et debilitatem vinculorum impedit.',
                    'he' => 'מונע בידוד וחולשת קשרים'
                ],
            ],

            [
                'number' => 44,
                'name' => "Yolahyah (Yo-la-h yah)",
                'kabal_name' => "Yelahyah",

                // Yod = attivazione / direzione / azione cosciente
                // Lamed = elevazione / orientamento / apprendimento
                // He = rivelazione / manifestazione / apertura
                'trigram' => "Yod Lamed He",
                'trigram_significate' => "attivazione elevazione rivelazione",

                'definition' => [
                    'it' => 'YLH - Dio che attiva, eleva e rivela',
                    'en' => 'YLH - God who activates, elevates and reveals',
                    'la' => 'YLH - Deus qui activat, elevat et revelat',
                    'he' => 'YLH - האל המפעיל, מרומם ומגלה',
                ],

                'new_definition' => [
                    'it' => 'Dio è azione che conduce alla rivelazione',
                    'en' => 'God is action leading to revelation',
                    'la' => 'Deus est actio ad revelationem ducens',
                    'he' => 'האל הוא פעולה המובילה להתגלות',
                ],

                'hebrew_letters' => 'ילה',
                'hebrew_name' => 'ילהיה',

                'letter_details' => [
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Principio attivo che orienta l’azione verso giustizia e responsabilità.',
                            'en' => 'Active principle directing action toward justice and responsibility.',
                            'la' => 'Principium activum ad iustitiam dirigens.',
                            'he' => 'עיקרון פעיל המכוון לצדק'
                        ]
                    ],
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => [
                            'it' => 'Elevazione che orienta e disciplina l’azione verso un fine superiore.',
                            'en' => 'Elevation directing and disciplining action toward a higher purpose.',
                            'la' => 'Elevatio actionem ad finem superiorem dirigens.',
                            'he' => 'התעלות המכוונת פעולה למטרה גבוהה'
                        ]
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => [
                            'it' => 'Rivelazione che protegge e illumina l’azione giusta.',
                            'en' => 'Revelation that protects and enlightens righteous action.',
                            'la' => 'Revelatio actionem iustam illuminans.',
                            'he' => 'התגלות המאירה פעולה צודקת'
                        ]
                    ],
                ],

                'choir' => 'virtues',
                'archangel' => 'raphael',
                'element' => 'water',
                'zodiac_days' => [
                    ['day' => 22, 'month' => 10, 'sign' => 'libra'],
                    ['day' => 23, 'month' => 10, 'sign' => 'scorpio'],
                    ['day' => 24, 'month' => 10, 'sign' => 'scorpio'],
                    ['day' => 25, 'month' => 10, 'sign' => 'scorpio'],
                    ['day' => 26, 'month' => 10, 'sign' => 'scorpio'],
                ],

                // Gradi
                // 'degree_start' => 5,
                // 'degree_end' => 10,
                'orientation' => 'OVEST',

                // Salmo
                'psalm' => 129,
                'psalm_verse' => 1,
                'vulgata' => 128,
                'vulgata_verse' => 1,
                'psalm_link' => '/salmi/129',

                // Contenuti
                'quality' => [
                    'it' => 'Coraggio morale, disciplina e forza nel difendere ciò che è giusto.',
                    'en' => 'Moral courage, discipline and strength in defending what is right.',
                    'la' => 'Fortitudo moralis et disciplina.',
                    'he' => 'אומץ מוסרי ומשמעת'
                ],

                'help' => [
                    'it' => 'Aiuta a combattere per la giustizia con rettitudine e fermezza interiore.',
                    'en' => 'Helps fight for justice with integrity and inner firmness.',
                    'la' => 'Pro iustitia cum integritate pugnare iuvat.',
                    'he' => 'מסייע להילחם למען צדק ביושרה'
                ],

                'prevent' => [
                    'it' => 'Previene vigliaccheria, abuso di potere e deviazioni morali.',
                    'en' => 'Prevents cowardice, abuse of power and moral deviation.',
                    'la' => 'Ignaviam et abusum potestatis impedit.',
                    'he' => 'מונע פחדנות ושימוש לרעה בכוח'
                ],
            ],

            [
                'number' => 45,
                'name' => "Samalyah (Sam-a-l yah)",
                'kabal_name' => "Sealyah",

                // Samekh = sostegno / stabilità / protezione circolare
                // Aleph = unità / origine / principio armonizzante
                // Lamed = elevazione / orientamento / crescita
                'trigram' => "Samekh Aleph Lamed",
                'trigram_significate' => "sostegno unità elevazione",

                'definition' => [
                    'it' => 'SAL - Dio che sostiene, unifica ed eleva',
                    'en' => 'SAL - God who sustains, unifies and elevates',
                    'la' => 'SAL - Deus qui sustinet, unit et elevat',
                    'he' => 'SAL - האל התומך, מאחד ומרומם',
                ],

                'new_definition' => [
                    'it' => 'Dio è sostegno che conduce all’elevazione',
                    'en' => 'God is support leading to elevation',
                    'la' => 'Deus est sustentatio ad elevationem ducens',
                    'he' => 'האל הוא תמיכה המובילה להתעלות',
                ],

                'hebrew_letters' => 'סאל',
                'hebrew_name' => 'סאליה',

                'letter_details' => [
                    [
                        'letter' => 'ס',
                        'name' => 'Samekh',
                        'value' => 60,
                        'meaning' => [
                            'it' => 'Sostegno stabile che protegge e mantiene equilibrio nelle prove.',
                            'en' => 'Stable support that protects and maintains balance in trials.',
                            'la' => 'Sustentatio stabilis aequilibrium in probationibus servans.',
                            'he' => 'תמיכה יציבה השומרת על איזון בעת ניסיון'
                        ]
                    ],
                    [
                        'letter' => 'א',
                        'name' => 'Aleph',
                        'value' => 1,
                        'meaning' => [
                            'it' => 'Principio originario e unità che armonizza e ordina.',
                            'en' => 'Primordial principle and unity that harmonizes and orders.',
                            'la' => 'Principium primordiale et unitas ordinans.',
                            'he' => 'עיקרון ראשוני ואחדות מסדרת'
                        ]
                    ],
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => [
                            'it' => 'Elevazione e orientamento verso comprensione superiore.',
                            'en' => 'Elevation and orientation toward higher understanding.',
                            'la' => 'Elevatio ad intellectum superiorem.',
                            'he' => 'התעלות להבנה גבוהה'
                        ]
                    ],
                ],

                'choir' => 'virtues',
                'archangel' => 'raphael',
                'element' => 'water',
                'zodiac_days' => [
                    ['day' => 27, 'month' => 10, 'sign' => 'scorpio'],
                    ['day' => 28, 'month' => 10, 'sign' => 'scorpio'],
                    ['day' => 29, 'month' => 10, 'sign' => 'scorpio'],
                    ['day' => 30, 'month' => 10, 'sign' => 'scorpio'],
                    ['day' => 31, 'month' => 10, 'sign' => 'scorpio'],
                ],

                // Gradi
                // 'degree_start' => 10,
                // 'degree_end' => 15,
                'orientation' => 'OVEST',

                // Salmo
                'psalm' => 68,
                'psalm_verse' => 6,
                'vulgata' => 67,
                'vulgata_verse' => 6,
                'psalm_link' => '/salmi/68',

                // Contenuti
                'quality' => [
                    'it' => 'Stabilità interiore, sostegno nelle difficoltà e capacità di rialzarsi.',
                    'en' => 'Inner stability, support in difficulties and ability to rise again.',
                    'la' => 'Stabilitas interior et facultas resurgendi.',
                    'he' => 'יציבות פנימית ויכולת לקום מחדש'
                ],

                'help' => [
                    'it' => 'Aiuta a rialzarsi dopo cadute e a ritrovare equilibrio e determinazione.',
                    'en' => 'Helps rise after falls and regain balance and determination.',
                    'la' => 'Post lapsum surgere et aequilibrium recuperare iuvat.',
                    'he' => 'מסייע לקום לאחר נפילה ולהשיב איזון'
                ],
                'prevent' => [
                    'it' => 'Previene cedimento, perdita di orientamento e instabilità.',
                    'en' => 'Prevents collapse, loss of direction and instability.',
                    'la' => 'Defectionem et instabilitatem impedit.',
                    'he' => 'מונע קריסה ואובדן כיוון'
                ],
            ],

            [
                'number' => 46,
                'name' => "Areyel (A-re-y el)",
                'kabal_name' => "Ariel",

                // Ayin = visione / percezione / profondità
                // Resh = rinnovamento / trasformazione / riallineamento
                // Yod = attivazione / manifestazione / concretizzazione
                'trigram' => "Ayin Resh Yod",
                'trigram_significate' => "visione rinnovamento attivazione",

                'definition' => [
                    'it' => 'ARY - Dio che vede, rinnova e attiva',
                    'en' => 'ARY - God who sees, renews and activates',
                    'la' => 'ARY - Deus qui videt, renovat et activat',
                    'he' => 'ARY - האל הרואה, מחדש ומפעיל',
                ],

                'new_definition' => [
                    'it' => 'Dio è visione che rinnova e conduce all’azione',
                    'en' => 'God is vision that renews and leads to action',
                    'la' => 'Deus est visio quae renovat et ad actionem ducit',
                    'he' => 'האל הוא ראייה המחדשת ומובילה לפעולה',
                ],

                'hebrew_letters' => 'ערי',
                'hebrew_name' => 'אריאל',

                'letter_details' => [
                    [
                        'letter' => 'ע',
                        'name' => 'Ayin',
                        'value' => 70,
                        'meaning' => [
                            'it' => 'Visione profonda e percezione interiore che permette di cogliere ciò che è nascosto.',
                            'en' => 'Deep vision and inner perception that allows one to grasp what is hidden.',
                            'la' => 'Visio profunda quae occulta percipit.',
                            'he' => 'ראייה עמוקה ותפיסה פנימית של הנסתר'
                        ]
                    ],
                    [
                        'letter' => 'ר',
                        'name' => 'Resh',
                        'value' => 200,
                        'meaning' => [
                            'it' => 'Rinnovamento che trasforma la coscienza e riallinea la direzione.',
                            'en' => 'Renewal transforming consciousness and realigning direction.',
                            'la' => 'Renovatio conscientiam mutans et directionem corrigens.',
                            'he' => 'התחדשות המשנה תודעה ומתקנת כיוון'
                        ]
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Attivazione iniziale che orienta la visione verso una direzione cosciente.',
                            'en' => 'Initial activation directing vision toward conscious direction.',
                            'la' => 'Actio initialis visionem ad directionem conscientem dirigens.',
                            'he' => 'הפעלה ראשונית המכוונת את הראייה לכיוון מודע'
                        ]
                    ],
                ],

                'choir' => 'virtues',
                'archangel' => 'raphael',
                'element' => 'water',
                'zodiac_days' => [
                    ['day' => 1, 'month' => 11, 'sign' => 'scorpio'],
                    ['day' => 2, 'month' => 11, 'sign' => 'scorpio'],
                    ['day' => 3, 'month' => 11, 'sign' => 'scorpio'],
                    ['day' => 4, 'month' => 11, 'sign' => 'scorpio'],
                    ['day' => 5, 'month' => 11, 'sign' => 'scorpio'],
                ],

                // Gradi
                // 'degree_start' => 25,
                // 'degree_end' => 30,
                'orientation' => 'OVEST-NORD',

                // Salmo
                'psalm' => 67,
                'psalm_verse' => 2,
                'vulgata' => 66,
                'vulgata_verse' => 2,
                'psalm_link' => '/salmi/67',

                // Contenuti
                'quality' => [
                    'it' => 'Rivelazione interiore, intuizione lucida e scoperta del significato profondo degli eventi.',
                    'en' => 'Inner revelation, lucid intuition and discovery of the deeper meaning of events.',
                    'la' => 'Revelatio interior et intuitio clara.',
                    'he' => 'גילוי פנימי ואינטואיציה צלולה'
                ],

                'help' => [
                    'it' => 'Aiuta a vedere oltre l’apparenza e trasformare la comprensione in azione concreta.',
                    'en' => 'Helps see beyond appearances and transform understanding into concrete action.',
                    'la' => 'Ultra apparentias videre et in actionem convertere iuvat.',
                    'he' => 'מסייע לראות מעבר למראה ולהפוך הבנה לפעולה'
                ],

                'prevent' => [
                    'it' => 'Previene cecità interiore, superficialità di giudizio e perdita di orientamento spirituale.',
                    'en' => 'Prevents inner blindness, superficial judgment and loss of spiritual direction.',
                    'la' => 'Caecitatem interioris et superficialitatem impedit.',
                    'he' => 'מונע עיוורון פנימי ושיפוט שטחי'
                ],
            ],

            [
                'number' => 47,
                'name' => "Ayshlayah (Ay-sha-la yah)",
                'kabal_name' => "Asalyah",

                // Ayin = visione / ricerca / profondità
                // Shin = trasformazione / purificazione / fuoco interiore
                // Lamed = elevazione / apprendimento / comprensione superiore
                'trigram' => "Ayin Shin Lamed",
                'trigram_significate' => "visione trasformazione elevazione",

                'definition' => [
                    'it' => 'ASL - Dio che vede, trasforma ed eleva',
                    'en' => 'ASL - God who sees, transforms and elevates',
                    'la' => 'ASL - Deus qui videt, transformat et elevat',
                    'he' => 'ASL - האל הרואה, משנה ומרומם',
                ],

                'new_definition' => [
                    'it' => 'Dio è visione che purifica e conduce alla comprensione',
                    'en' => 'God is vision that purifies and leads to understanding',
                    'la' => 'Deus est visio quae purificat et ad intellectum ducit',
                    'he' => 'האל הוא ראייה המטהרת ומובילה להבנה',
                ],

                'hebrew_letters' => 'עשל',
                'hebrew_name' => 'עסאליה',

                'letter_details' => [
                    [
                        'letter' => 'ע',
                        'name' => 'Ayin',
                        'value' => 70,
                        'meaning' => [
                            'it' => 'Ricerca interiore e visione profonda che permette di investigare il senso nascosto.',
                            'en' => 'Inner search and deep vision that allows investigation of hidden meaning.',
                            'la' => 'Investigatio interior et visio profunda.',
                            'he' => 'חיפוש פנימי וראייה עמוקה'
                        ]
                    ],
                    [
                        'letter' => 'ש',
                        'name' => 'Shin',
                        'value' => 300,
                        'meaning' => [
                            'it' => 'Trasformazione radicale che purifica l’errore e raffina la comprensione.',
                            'en' => 'Radical transformation that purifies error and refines understanding.',
                            'la' => 'Transformatio radicalis et purificatio.',
                            'he' => 'שינוי עמוק המטהר את הטעות'
                        ]
                    ],
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => [
                            'it' => 'Elevazione che conduce a comprensione superiore e integrazione.',
                            'en' => 'Elevation leading to higher understanding and integration.',
                            'la' => 'Elevatio ad intellectum superiorem ducens.',
                            'he' => 'התעלות המובילה להבנה גבוהה ולאינטגרציה'
                        ]
                    ],
                ],

                'choir' => 'virtues',
                'archangel' => 'raphael',
                'element' => 'fire',
                'zodiac_days' => [
                    ['day' => 6, 'month' => 11, 'sign' => 'scorpio'],
                    ['day' => 7, 'month' => 11, 'sign' => 'scorpio'],
                    ['day' => 8, 'month' => 11, 'sign' => 'scorpio'],
                    ['day' => 9, 'month' => 11, 'sign' => 'scorpio'],
                    ['day' => 10, 'month' => 11, 'sign' => 'scorpio'],
                ],

                // Gradi
                // 'degree_start' => 0,
                // 'degree_end' => 5,
                'orientation' => 'OVEST-NORD',

                // Salmo
                'psalm' => 104,
                'psalm_verse' => 24,
                'vulgata' => 103,
                'vulgata_verse' => 24,
                'psalm_link' => '/salmi/104',

                // Contenuti
                'quality' => [
                    'it' => 'Comprensione delle leggi spirituali, lucidità mentale e ricerca sincera della verità.',
                    'en' => 'Understanding of spiritual laws, mental clarity and sincere search for truth.',
                    'la' => 'Comprehensio legum spiritualium et claritas mentis.',
                    'he' => 'הבנת החוקים הרוחניים ובהירות מחשבתית'
                ],
                'help' => [
                    'it' => 'Aiuta a discernere l’errore, approfondire lo studio e sviluppare pensiero critico e spirituale.',
                    'en' => 'Helps discern error, deepen study and develop critical and spiritual thinking.',
                    'la' => 'Errorem discernere et studium profundum fovere iuvat.',
                    'he' => 'מסייע להבחין בטעות ולהעמיק בלימוד'
                ],
                'prevent' => [
                    'it' => 'Previene confusione, rigidità mentale e interpretazioni errate.',
                    'en' => 'Prevents confusion, mental rigidity and misinterpretation.',
                    'la' => 'Confusionem et rigiditatem mentis impedit.',
                    'he' => 'מונע בלבול וקיבעון מחשבתי'
                ],
            ],

            [
                'number' => 48,
                'name' => "Myhael (M-y-h el)",
                'kabal_name' => "Mihael",

                // Mem = flusso / interiorità / connessione
                // Yod = attivazione / intenzione / impulso
                // He = apertura / manifestazione / relazione
                'trigram' => "Mem Yod He",
                'trigram_significate' => "flusso attivazione apertura",

                'definition' => [
                    'it' => 'MYH - Dio che apre e attiva durante il flusso',
                    'en' => 'MYH - God who opens and activates during the flow',
                    'la' => 'MYH - Deus qui aperit et activat in fluxu',
                    'he' => 'MYH - האל הפותח ומפעיל בתוך הזרימה',
                ],

                'new_definition' => [
                    'it' => 'Dio è flusso che attiva e conduce all’unione',
                    'en' => 'God is flow that activates and leads to union',
                    'la' => 'Deus est fluxus qui activat et ad unionem ducit',
                    'he' => 'האל הוא זרימה המפעילה ומובילה לאיחוד',
                ],

                'hebrew_letters' => 'מיה',
                'hebrew_name' => 'מיהאל',

                'letter_details' => [
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => [
                            'it' => 'Flusso emotivo che genera armonia e integrazione profonda.',
                            'en' => 'Emotional flow generating harmony and deep integration.',
                            'la' => 'Fluxus affectivus harmoniam generans.',
                            'he' => 'זרימה רגשית היוצרת הרמוניה'
                        ]
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Attivazione che orienta l’intenzione verso l’incontro e la relazione.',
                            'en' => 'Activation directing intention toward encounter and relationship.',
                            'la' => 'Actio intentionem ad relationem dirigens.',
                            'he' => 'הפעלה המכוונת את הכוונה לקשר ולמפגש'
                        ]
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => [
                            'it' => 'Apertura che consente unione, affinità e comunione autentica.',
                            'en' => 'Opening allowing union, affinity and authentic communion.',
                            'la' => 'Apertio ad unionem et communionem.',
                            'he' => 'פתיחות לאיחוד ולחיבור אמיתי'
                        ]
                    ],
                ],

                'choir' => 'virtues',
                'archangel' => 'raphael',
                'element' => 'fire',
                'zodiac_days' => [
                    ['day' => 11, 'month' => 11, 'sign' => 'scorpio'],
                    ['day' => 12, 'month' => 11, 'sign' => 'scorpio'],
                    ['day' => 13, 'month' => 11, 'sign' => 'scorpio'],
                    ['day' => 14, 'month' => 11, 'sign' => 'scorpio'],
                    ['day' => 15, 'month' => 11, 'sign' => 'scorpio'],
                ],

                // Gradi
                // 'degree_start' => 5,
                // 'degree_end' => 10,
                'orientation' => 'OVEST-NORD',

                // Salmo
                'psalm' => 33,
                'psalm_verse' => 20,
                'vulgata' => 32,
                'vulgata_verse' => 20,
                'psalm_link' => '/salmi/33',

                // Contenuti
                'quality' => [
                    'it' => 'Armonia nelle relazioni, apertura emotiva e capacità di creare unione.',
                    'en' => 'Harmony in relationships, emotional openness and capacity to create union.',
                    'la' => 'Harmonia relationum et apertio affectiva.',
                    'he' => 'הרמוניה בקשרים ופתיחות רגשית'
                ],

                'help' => [
                    'it' => 'Aiuta a vivere relazioni basate su rispetto reciproco, equilibrio e autenticità.',
                    'en' => 'Helps build relationships based on mutual respect, balance and authenticity.',
                    'la' => 'Relationes aequilibrio et reverentia fundatas fovere iuvat.',
                    'he' => 'מסייע לבנות קשרים המבוססים על כבוד ואיזון'
                ],
                'prevent' => [
                    'it' => 'Previene conflitti affettivi, freddezza emotiva e disarmonia nelle relazioni.',
                    'en' => 'Prevents emotional conflicts, coldness and relational disharmony.',
                    'la' => 'Discordiam affectivam et frigiditatem impedit.',
                    'he' => 'מונע סכסוכים רגשיים וחוסר הרמוניה'
                ],
            ],

            // Principati
            [
                'number' => 49,
                'name' => 'Vahelamel (V-H-Lam el)',
                'kabal_name' => "Vehuel",

                // Vav = connessione / canale / unione
                // He = rivelazione / apertura / manifestazione
                // Lamed = elevazione / aspirazione / slancio verso l’alto
                'trigram' => "Vav He Lamed",
                'trigram_significate' => "connessione rivelazione elevazione",

                'definition' => [
                    'it' => 'VHL - Dio che connette, rivela ed eleva',
                    'en' => 'VHL - God who connects, reveals and elevates',
                    'la' => 'VHL - Deus qui connectit, revelat et elevat',
                    'he' => 'VHL - האל המחבר, מגלה ומרומם',
                ],

                'new_definition' => [
                    'it' => 'Dio è connessione che si rivela e conduce all’elevazione',
                    'en' => 'God is connection that reveals and leads to elevation',
                    'la' => 'Deus est connexio quae revelat et ad elevationem ducit',
                    'he' => 'האל הוא חיבור המתגלה ומוביל להתעלות',
                ],

                'hebrew_letters' => 'והל',
                'hebrew_name' => 'והואל',

                'letter_details' => [
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => [
                            'it' => 'Connessione che unisce e mette in relazione ciò che è separato.',
                            'en' => 'Connection that unites and links what is separated.',
                            'la' => 'Connexio quae separata coniungit.',
                            'he' => 'חיבור המאחד בין הנפרדים'
                        ]
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => [
                            'it' => 'Rivelazione che eleva la coscienza verso comprensione spirituale.',
                            'en' => 'Revelation elevating consciousness toward spiritual understanding.',
                            'la' => 'Revelatio conscientiam elevans.',
                            'he' => 'התגלות המעלה את התודעה'
                        ]
                    ],
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => [
                            'it' => 'Elevazione che orienta verso ideali superiori e crescita interiore.',
                            'en' => 'Elevation directing toward higher ideals and inner growth.',
                            'la' => 'Elevatio ad idealia superiora dirigens.',
                            'he' => 'התעלות המכוונת לערכים גבוהים'
                        ]
                    ],
                ],

                'choir' => 'principalities',
                'archangel' => 'haniel',
                'element' => 'fire',

                'zodiac_days' => [
                    ['day' => 16, 'month' => 11, 'sign' => 'scorpio'],
                    ['day' => 17, 'month' => 11, 'sign' => 'scorpio'],
                    ['day' => 18, 'month' => 11, 'sign' => 'scorpio'],
                    ['day' => 19, 'month' => 11, 'sign' => 'scorpio'],
                    ['day' => 20, 'month' => 11, 'sign' => 'scorpio'],
                ],

                // Gradi
                // 'degree_start' => 10,
                // 'degree_end' => 15,
                'orientation' => 'OVEST-NORD',

                // Salmo
                'psalm' => 113,
                'psalm_verse' => 3,
                'vulgata' => 112,
                'vulgata_verse' => 3,
                'psalm_link' => '/salmi/113',

                // Contenuti
                'quality' => [
                    'it' => 'Elevazione interiore, apertura alla comprensione e orientamento verso ciò che è alto.',
                    'en' => 'Inner elevation, openness to understanding and orientation toward higher states.',
                    'la' => 'Elevatio interior et apertio ad intellectum.',
                    'he' => 'התעלות פנימית ופתיחות להבנה'
                ],

                'help' => [
                    'it' => 'Aiuta a collegare esperienza e comprensione, favorendo crescita e consapevolezza.',
                    'en' => 'Helps connect experience and understanding, fostering growth and awareness.',
                    'la' => 'Experientiam et intellectum coniungere iuvat.',
                    'he' => 'מסייע לחבר בין ניסיון להבנה'
                ],

                'prevent' => [
                    'it' => 'Previene chiusura, disconnessione e perdita di orientamento interiore.',
                    'en' => 'Prevents closure, disconnection and loss of inner direction.',
                    'la' => 'Clausuram et disiunctionem impedit.',
                    'he' => 'מונע סגירות ואובדן כיוון'
                ],
            ],

            [
                'number' => 50,
                'name' => 'Daniel (Da-N-Y el)',
                'kabal_name' => 'Daniel',

                // Dalet = passaggio / accesso / umiltà
                // Nun = continuità / maturazione / profondità
                // Yod = attivazione / direzione / coscienza
                'trigram' => "Dalet Nun Yod",
                'trigram_significate' => "passaggio maturazione attivazione",

                'definition' => [
                    'it' => 'DNY - Dio che apre, fa maturare e guida',
                    'en' => 'DNY - God who opens, matures and guides',
                    'la' => 'DNY - Deus qui aperit, maturat et dirigit',
                    'he' => 'DNY - האל הפותח, מבשיל ומכוון',
                ],

                'new_definition' => [
                    'it' => 'Dio è passaggio che conduce alla maturazione e alla direzione',
                    'en' => 'God is passage leading to maturation and direction',
                    'la' => 'Deus est transitus ad maturationem et directionem ducens',
                    'he' => 'האל הוא מעבר המוביל להבשלה ולהכוונה',
                ],

                'hebrew_letters' => 'דני',
                'hebrew_name' => 'דניאל',

                'letter_details' => [
                    [
                        'letter' => 'ד',
                        'name' => 'Dalet',
                        'value' => 4,
                        'meaning' => [
                            'it' => 'Passaggio e umiltà che permettono accesso a nuova comprensione.',
                            'en' => 'Passage and humility allowing access to new understanding.',
                            'la' => 'Transitus et humilitas ad novam cognitionem.',
                            'he' => 'מעבר וענווה המובילים להבנה חדשה'
                        ]
                    ],
                    [
                        'letter' => 'נ',
                        'name' => 'Nun',
                        'value' => 50,
                        'meaning' => [
                            'it' => 'Sviluppo continuo che matura attraverso il tempo e l’esperienza.',
                            'en' => 'Continuous development maturing through time and experience.',
                            'la' => 'Progressio continua per tempus et experientiam.',
                            'he' => 'התפתחות מתמשכת דרך זמן וניסיון'
                        ]
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Attivazione che dirige e orienta verso un’azione consapevole.',
                            'en' => 'Activation directing toward conscious action.',
                            'la' => 'Actio ad actionem consciam dirigens.',
                            'he' => 'פעולה המכוונת לפעולה מודעת'
                        ]
                    ],
                ],

                'choir' => 'principalities',
                'archangel' => 'haniel',
                'element' => 'fire',
                'zodiac_days' => [
                    ['day' => 21, 'month' => 11, 'sign' => 'scorpio'],
                    ['day' => 22, 'month' => 11, 'sign' => 'scorpio'],
                    ['day' => 23, 'month' => 11, 'sign' => 'sagittarius'],
                    ['day' => 24, 'month' => 11, 'sign' => 'sagittarius'],
                    ['day' => 25, 'month' => 11, 'sign' => 'sagittarius'],
                ],

                // Gradi
                // 'degree_start' => 15,
                // 'degree_end' => 20,
                'orientation' => 'EST',

                // Salmo
                'psalm' => 30,
                'psalm_verse' => 6,
                'vulgata' => 29,
                'vulgata_verse' => 6,
                'psalm_link' => '/salmi/30',

                // Contenuti
                'quality' => [
                    'it' => 'Chiarezza nel giudizio, equilibrio nelle decisioni e capacità di mediazione.',
                    'en' => 'Clarity in judgment, balance in decisions and mediation ability.',
                    'la' => 'Claritas iudicii et aequilibrium.',
                    'he' => 'בהירות בשיפוט ואיזון בהחלטות'
                ],

                'help' => [
                    'it' => 'Aiuta a valutare con lucidità, scegliere con equilibrio e comunicare con precisione.',
                    'en' => 'Helps evaluate clearly, choose with balance and communicate precisely.',
                    'la' => 'Lucide aestimare et aequilibrate eligere iuvat.',
                    'he' => 'מסייע להעריך בבהירות ולבחור באיזון'
                ],

                'prevent' => [
                    'it' => 'Previene giudizi affrettati, confusione decisionale e perdita di direzione.',
                    'en' => 'Prevents hasty judgment, decision confusion and loss of direction.',
                    'la' => 'Iudicium praecipitatum et confusionem impedit.',
                    'he' => 'מונע שיפוט פזיז ובלבול בהחלטות'
                ],
            ],

            [
                'number' => 51,
                'name' => 'Hahasyah (He-He-Sh yah)',
                'kabal_name' => 'Hahasyah',

                // Chet = vita / energia ordinata / legge vitale
                // Chet = rafforzamento della struttura vitale
                // Shin = trasformazione attiva / fuoco ordinatore
                'trigram' => "Chet Chet Shin",
                'trigram_significate' => "vita forza trasformazione",

                'definition' => [
                    'it' => 'HHS - Dio che ordina e guarisce la vita',
                    'en' => 'HHS - God who orders and heals life',
                    'la' => 'HHS - Deus qui vitam ordinat et sanat',
                    'he' => 'HHS - האל המסדר ומרפא את החיים',
                ],

                'new_definition' => [
                    'it' => 'Dio è guarigione che si manifesta attraverso l’ordine e la trasformazione',
                    'en' => 'God is healing manifested through order and transformation',
                    'la' => 'Deus est sanatio quae per ordinem et transformationem manifestatur',
                    'he' => 'האל הוא ריפוי המתבטא דרך סדר ושינוי',
                ],

                'hebrew_letters' => 'חחש',
                'hebrew_name' => 'חחשיה',

                'letter_details' => [
                    [
                        'letter' => 'ח',
                        'name' => 'Chet',
                        'value' => 8,
                        'meaning' => [
                            'it' => 'Forza vitale ordinata che sostiene la vita e la guarigione.',
                            'en' => 'Ordered vital force sustaining life and healing.',
                            'la' => 'Vis vitalis ordinata vitam et sanationem sustinens.',
                            'he' => 'כוח חיים מסודר התומך בחיים ובריפוי'
                        ]
                    ],
                    [
                        'letter' => 'ח',
                        'name' => 'Chet',
                        'value' => 8,
                        'meaning' => [
                            'it' => 'Rafforzamento della struttura vitale e della stabilità interiore.',
                            'en' => 'Strengthening vital structure and inner stability.',
                            'la' => 'Confirmatio structurae vitalis et stabilitatis interioris.',
                            'he' => 'חיזוק המבנה החיוני והיציבות הפנימית'
                        ]
                    ],
                    [
                        'letter' => 'ש',
                        'name' => 'Shin',
                        'value' => 300,
                        'meaning' => [
                            'it' => 'Fuoco che trasforma e ordina, portando rigenerazione profonda.',
                            'en' => 'Fire that transforms and orders, bringing deep regeneration.',
                            'la' => 'Ignis transformans et ordinans renovationem profundam afferens.',
                            'he' => 'אש שמשנה ומסדרת ומביאה התחדשות עמוקה'
                        ]
                    ],
                ],

                'choir' => 'principalities',
                'archangel' => 'haniel',
                'element' => 'fire',

                'zodiac_days' => [
                    ['day' => 26, 'month' => 11, 'sign' => 'sagittarius'],
                    ['day' => 27, 'month' => 11, 'sign' => 'sagittarius'],
                    ['day' => 28, 'month' => 11, 'sign' => 'sagittarius'],
                    ['day' => 29, 'month' => 11, 'sign' => 'sagittarius'],
                    ['day' => 30, 'month' => 11, 'sign' => 'sagittarius'],
                ],

                // Gradi
                // 'degree_start' => 20,
                // 'degree_end' => 25,
                'orientation' => 'OVEST-NORD',

                // Salmo
                'psalm' => 104,
                'psalm_verse' => 30,
                'vulgata' => 103,
                'vulgata_verse' => 30,
                'psalm_link' => '/salmi/104',

                // Contenuti
                'quality' => [
                    'it' => 'Guarigione attraverso la conoscenza delle leggi naturali e divine.',
                    'en' => 'Healing through knowledge of natural and divine laws.',
                    'la' => 'Sanatio per cognitionem legum naturalium et divinarum.',
                    'he' => 'ריפוי דרך הבנת חוקי הטבע והאלוהות'
                ],

                'help' => [
                    'it' => 'Guida nella comprensione delle cause profonde, favorendo guarigione e trasformazione consapevole.',
                    'en' => 'Guides understanding of root causes, enabling conscious healing and transformation.',
                    'la' => 'Ad causas profundas intelligendas ducit, sanationem et transformationem promovens.',
                    'he' => 'מנחה להבנת הסיבות העמוקות ומאפשר ריפוי ושינוי מודע'
                ],

                'prevent' => [
                    'it' => 'Previene ignoranza delle leggi naturali, errori e squilibri derivanti da disordine.',
                    'en' => 'Prevents ignorance of natural laws, errors and disorder-based imbalance.',
                    'la' => 'Ignorantiam legum naturalium et errores impedit.',
                    'he' => 'מונע בורות בחוקי הטבע ושגיאות הנובעות מחוסר סדר'
                ],
            ],

            [
                'number' => 52,
                'name' => 'Aymamyah (Ay-m-m yah)',
                'kabal_name' => 'Aymamyah',

                // Ayin = visione / percezione / occhio interiore
                // Mem = profondità / acque / occultamento
                // Mem = intensificazione dell’occultamento / immersione
                'trigram' => "Ayin Mem Mem",
                'trigram_significate' => "visione profondità profondità",

                'definition' => [
                    'it' => 'AMM - Dio che rivela ciò che è nascosto nell’oscurità',
                    'en' => 'AMM - God who reveals what is hidden in darkness',
                    'la' => 'AMM - Deus qui revelat quod in tenebris latet',
                    'he' => 'AMM - האל המגלה את הנסתר בחושך',
                ],

                'new_definition' => [
                    'it' => 'Dio è visione che penetra l’occulto e ne rivela la verità',
                    'en' => 'God is vision that penetrates the hidden and reveals its truth',
                    'la' => 'Deus est visio quae occultum penetrat et veritatem revelat',
                    'he' => 'האל הוא ראייה החודרת לנסתר ומגלה אמת',
                ],

                'hebrew_letters' => 'עממ',
                'hebrew_name' => 'עממיה',

                'letter_details' => [
                    [
                        'letter' => 'ע',
                        'name' => 'Ayin',
                        'value' => 70,
                        'meaning' => [
                            'it' => 'Visione profonda e presa di coscienza.',
                            'en' => 'Deep vision and awareness.',
                            'la' => 'Visio profunda et conscientia.',
                            'he' => 'ראייה עמוקה ותודעה'
                        ]
                    ],
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => [
                            'it' => 'Purificazione e flusso rigenerante.',
                            'en' => 'Purification and regenerative flow.',
                            'la' => 'Purificatio et fluxus regenerans.',
                            'he' => 'טיהור וזרימה מחודשת'
                        ]
                    ],
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => [
                            'it' => 'Rafforzamento della liberazione attraverso trasformazione interiore.',
                            'en' => 'Strengthening liberation through inner transformation.',
                            'la' => 'Liberationis confirmatio per transformationem interiorem.',
                            'he' => 'חיזוק השחרור דרך שינוי פנימי'
                        ]
                    ],
                ],

                'choir' => 'principalities',
                'archangel' => 'haniel',
                'element' => 'fire',

                'zodiac_days' => [
                    ['day' => 1, 'month' => 12, 'sign' => 'sagittarius'],
                    ['day' => 2, 'month' => 12, 'sign' => 'sagittarius'],
                    ['day' => 3, 'month' => 12, 'sign' => 'sagittarius'],
                    ['day' => 4, 'month' => 12, 'sign' => 'sagittarius'],
                    ['day' => 5, 'month' => 12, 'sign' => 'sagittarius'],
                ],

                // Gradi
                // 'degree_start' => 25,
                // 'degree_end' => 30,
                'orientation' => 'OVEST-NORD',

                // Salmo
                'psalm' => 116,
                'psalm_verse' => 6,
                'vulgata' => 115,
                'vulgata_verse' => 8,
                'psalm_link' => '/salmi/116',

                // Contenuti
                'quality' => [
                    'it' => 'Liberazione dalle prove e superamento dell’oscuramento interiore.',
                    'en' => 'Liberation from trials and overcoming inner obscurity.',
                    'la' => 'Liberatio a probationibus et superatio obscuritatis interioris.',
                    'he' => 'שחרור מניסיונות והתגברות על חושך פנימי'
                ],
                'help' => [
                    'it' => 'Aiuta a superare difficoltà e a ritrovare chiarezza e forza interiore.',
                    'en' => 'Helps overcome difficulties and regain clarity and inner strength.',
                    'la' => 'Difficultates superare et claritatem recuperare iuvat.',
                    'he' => 'מסייע להתגבר על קשיים ולהשיב בהירות פנימית'
                ],
                'prevent' => [
                    'it' => 'Previene sottomissione, senso di colpa e blocchi interiori.',
                    'en' => 'Prevents submission, guilt and inner blockages.',
                    'la' => 'Subiectionem et impedimenta interiora impedit.',
                    'he' => 'מונע תחושת אשמה וחסימות פנימיות'
                ],
            ],

            [
                'number' => 53,
                'name' => 'Nanael (N-N-A el)',
                'kabal_name' => 'Nenael',

                // Nun = seme / continuità / discendenza
                // Nun = rafforzamento della continuità
                // Aleph = principio divino / unità
                'trigram' => "Nun Nun Aleph",
                'trigram_significate' => "continuità continuità principio",

                'definition' => [
                    'it' => 'NNA - Dio che conduce la continuità al principio',
                    'en' => 'NNA - God who leads continuity to the origin',
                    'la' => 'NNA - Deus qui continuationem ad principium ducit',
                    'he' => 'NNA - האל המוביל את ההמשכיות אל הראשית',
                ],

                'new_definition' => [
                    'it' => 'Dio è continuità che conduce al principio',
                    'en' => 'God is continuity that leads to the origin',
                    'la' => 'Deus est continuatio ad principium ducens',
                    'he' => 'האל הוא המשכיות המובילה אל הראשית',
                ],

                'hebrew_letters' => 'ננא',
                'hebrew_name' => 'ננאאל',

                'letter_details' => [
                    [
                        'letter' => 'נ',
                        'name' => 'Nun',
                        'value' => 50,
                        'meaning' => [
                            'it' => 'Seme e continuità, trasmissione della vita e della conoscenza.',
                            'en' => 'Seed and continuity, transmission of life and knowledge.',
                            'la' => 'Semen et continuatio, transmissio vitae et scientiae.',
                            'he' => 'זרע והמשכיות, העברת חיים ודעת'
                        ]
                    ],
                    [
                        'letter' => 'נ',
                        'name' => 'Nun',
                        'value' => 50,
                        'meaning' => [
                            'it' => 'Rafforzamento della stabilità e della trasmissione ordinata.',
                            'en' => 'Strengthening stability and ordered transmission.',
                            'la' => 'Confirmatio stabilitatis et transmissionis ordinatae.',
                            'he' => 'חיזוק היציבות וההעברה המסודרת'
                        ]
                    ],
                    [
                        'letter' => 'א',
                        'name' => 'Aleph',
                        'value' => 1,
                        'meaning' => [
                            'it' => 'Principio originario, unità da cui tutto procede.',
                            'en' => 'Primordial principle, unity from which all proceeds.',
                            'la' => 'Principium originarium, unitas ex qua omnia procedunt.',
                            'he' => 'עיקרון ראשוני, אחדות שממנה הכל נובע'
                        ]
                    ],
                ],

                'choir' => 'principalities',
                'archangel' => 'haniel',
                'element' => 'earth',

                'zodiac_days' => [
                    ['day' => 6, 'month' => 12, 'sign' => 'sagittarius'],
                    ['day' => 7, 'month' => 12, 'sign' => 'sagittarius'],
                    ['day' => 8, 'month' => 12, 'sign' => 'sagittarius'],
                    ['day' => 9, 'month' => 12, 'sign' => 'sagittarius'],
                    ['day' => 10, 'month' => 12, 'sign' => 'sagittarius'],
                ],

                // Gradi
                // 'degree_start' => 0,
                // 'degree_end' => 5,
                'orientation' => 'OVEST-NORD',

                // Salmo
                'psalm' => 72,
                'psalm_verse' => 19,
                'vulgata' => 71,
                'vulgata_verse' => 19,
                'psalm_link' => '/salmi/72',

                // Contenuti
                'quality' => [
                    'it' => 'Conoscenza ordinata e stabilità nella comprensione delle leggi divine.',
                    'en' => 'Ordered knowledge and stability in understanding divine laws.',
                    'la' => 'Scientia ordinata et stabilitas in intellectu legum divinarum.',
                    'he' => 'דעת מסודרת ויציבות בהבנת החוקים האלוהיים'
                ],
                'help' => [
                    'it' => 'Guida nello studio disciplinato e nella comprensione stabile della verità.',
                    'en' => 'Guides disciplined study and stable understanding of truth.',
                    'la' => 'Ad studium disciplinatum et veritatem stabiliter intelligendam ducit.',
                    'he' => 'מנחה ללימוד ממושמע ולהבנה יציבה של האמת'
                ],
                'prevent' => [
                    'it' => 'Previene dispersione, disordine mentale e conoscenza senza fondamento.',
                    'en' => 'Prevents dispersion, mental disorder and unfounded knowledge.',
                    'la' => 'Dispersionem et cognitionem sine fundamento impedit.',
                    'he' => 'מונע פיזור, בלבול וידע ללא יסוד'
                ],
            ],

            [
                'number' => 54,
                'name' => 'Nitael (N-Y-Ta El)',
                'kabal_name' => 'Nithael',

                // Nun = continuità / trasmissione
                // Yod = atto / autorità / potere attivo
                // Tav = compimento / sigillo / stabilità
                'trigram' => "Nun Yod Tav",
                'trigram_significate' => "continuità autorità compimento",

                'definition' => [
                    'it' => 'NYT - Dio che stabilisce e mantiene l’autorità',
                    'en' => 'NYT - God who establishes and maintains authority',
                    'la' => 'NYT - Deus qui auctoritatem stabilit et servat',
                    'he' => 'NYT - האל המעמיד ושומר על הסמכות',
                ],

                'new_definition' => [
                    'it' => 'Dio è continuità che si compie nell’autorità',
                    'en' => 'God is continuity fulfilled in authority',
                    'la' => 'Deus est continuatio in auctoritate completa',
                    'he' => 'האל הוא המשכיות המושלמת בסמכות',
                ],

                'hebrew_letters' => 'נית',
                'hebrew_name' => 'ניתאל',

                'letter_details' => [
                    [
                        'letter' => 'נ',
                        'name' => 'Nun',
                        'value' => 50,
                        'meaning' => [
                            'it' => 'Continuità e trasmissione nel tempo.',
                            'en' => 'Continuity and transmission through time.',
                            'la' => 'Continuatio et transmissio per tempus.',
                            'he' => 'המשכיות והעברה בזמן'
                        ]
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Principio attivo e autorità legittima.',
                            'en' => 'Active principle and legitimate authority.',
                            'la' => 'Principium activum et auctoritas legitima.',
                            'he' => 'עיקרון פעיל וסמכות לגיטימית'
                        ]
                    ],
                    [
                        'letter' => 'ת',
                        'name' => 'Tav',
                        'value' => 400,
                        'meaning' => [
                            'it' => 'Compimento e stabilizzazione definitiva.',
                            'en' => 'Completion and definitive stabilization.',
                            'la' => 'Perfectio et stabilitas definitiva.',
                            'he' => 'שלמות ויציבות סופית'
                        ]
                    ],
                ],

                'choir' => 'principalities',
                'archangel' => 'haniel',
                'element' => 'earth',
                'zodiac_days' => [
                    ['day' => 11, 'month' => 12, 'sign' => 'sagittarius'],
                    ['day' => 12, 'month' => 12, 'sign' => 'sagittarius'],
                    ['day' => 13, 'month' => 12, 'sign' => 'sagittarius'],
                    ['day' => 14, 'month' => 12, 'sign' => 'sagittarius'],
                    ['day' => 15, 'month' => 12, 'sign' => 'sagittarius'],
                ],

                // Gradi
                // 'degree_start' => 5,
                // 'degree_end' => 10,
                'orientation' => 'OVEST-NORD',

                // Salmo
                'psalm' => 103,
                'psalm_verse' => 19,
                'vulgata' => 102,
                'vulgata_verse' => 19,
                'psalm_link' => '/salmi/103',

                // Contenuti
                'quality' => [
                    'it' => 'Stabilità, continuità e consolidamento nel tempo.',
                    'en' => 'Stability, continuity and consolidation over time.',
                    'la' => 'Stabilitas et consolidatio per tempus.',
                    'he' => 'יציבות והמשכיות לאורך זמן'
                ],
                'help' => [
                    'it' => 'Aiuta a mantenere responsabilità e posizione con equilibrio.',
                    'en' => 'Helps maintain responsibility and position with balance.',
                    'la' => 'Responsabilitatem aequabiliter sustinet.',
                    'he' => 'מסייע לשמור על אחריות באיזון'
                ],
                'prevent' => [
                    'it' => 'Previene instabilità, abuso di potere e cadute improvvise.',
                    'en' => 'Prevents instability, abuse of power and sudden downfall.',
                    'la' => 'Instabilitatem et abusum potestatis impedit.',
                    'he' => 'מונע חוסר יציבות ונפילה פתאומית'
                ],
            ],

            [
                'number' => 55,
                'name' => 'Mebahyah (Me-B-H yah)',
                'kabal_name' => 'Mebahyah',

                // Mem = interiorità / acque profonde / contenimento
                // Bet = struttura / casa / fondamento
                // He = rivelazione / apertura
                'trigram' => "Mem Bet He",
                'trigram_significate' => "interiorità struttura rivelazione",

                'definition' => [
                    'it' => 'MBH - Dio che forma la rettitudine interiore',
                    'en' => 'MBH - God who forms inner righteousness',
                    'la' => 'MBH - Deus qui iustitiam interiorem format',
                    'he' => 'MBH - האל המעצב צדק פנימי',
                ],

                'new_definition' => [
                    'it' => 'Dio è ordine che genera coscienza retta',
                    'en' => 'God is order that generates righteous awareness',
                    'la' => 'Deus est ordo qui conscientiam rectam gignit',
                    'he' => 'האל הוא סדר המוליד תודעה ישרה',
                ],

                'hebrew_letters' => 'מבה',
                'hebrew_name' => 'מבהאל',

                'letter_details' => [
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => [
                            'it' => 'Interiorizzazione e comprensione profonda.',
                            'en' => 'Internalization and deep understanding.',
                            'la' => 'Interiorizatio et intellectus profundus.',
                            'he' => 'הפנמה והבנה עמוקה'
                        ]
                    ],
                    [
                        'letter' => 'ב',
                        'name' => 'Bet',
                        'value' => 2,
                        'meaning' => [
                            'it' => 'Struttura e fondamento stabile.',
                            'en' => 'Stable structure and foundation.',
                            'la' => 'Structura et fundamentum stabile.',
                            'he' => 'מבנה ויסוד יציב'
                        ]
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => [
                            'it' => 'Rivelazione e apertura della coscienza.',
                            'en' => 'Revelation and opening of consciousness.',
                            'la' => 'Revelatio et apertio conscientiae.',
                            'he' => 'התגלות ופתיחת התודעה'
                        ]
                    ],
                ],

                'choir' => 'principalities',
                'archangel' => 'haniel',
                'element' => 'earth',

                'zodiac_days' => [
                    ['day' => 16, 'month' => 12, 'sign' => 'sagittarius'],
                    ['day' => 17, 'month' => 12, 'sign' => 'sagittarius'],
                    ['day' => 18, 'month' => 12, 'sign' => 'sagittarius'],
                    ['day' => 19, 'month' => 12, 'sign' => 'sagittarius'],
                    ['day' => 20, 'month' => 12, 'sign' => 'sagittarius'],
                ],

                // Gradi
                // 'degree_start' => 10,
                // 'degree_end' => 15,
                'orientation' => 'NORD',

                // Salmo
                'psalm' => 91,
                'psalm_verse' => 15,
                'vulgata' => 90,
                'vulgata_verse' => 15,
                'psalm_link' => '/salmi/91',

                // Contenuti
                'quality' => [
                    'it' => 'Consapevolezza morale e maturità interiore.',
                    'en' => 'Moral awareness and inner maturity.',
                    'la' => 'Conscientia moralis et maturitas interior.',
                    'he' => 'מודעות מוסרית ובשלות פנימית'
                ],
                'help' => [
                    'it' => 'Aiuta a vivere con rettitudine e responsabilità.',
                    'en' => 'Helps live with integrity and responsibility.',
                    'la' => 'Cum integritate vivere iuvat.',
                    'he' => 'מסייע לחיות ביושרה ואחריות'
                ],
                'prevent' => [
                    'it' => 'Previene disordine morale e incoerenza interiore.',
                    'en' => 'Prevents moral disorder and inner inconsistency.',
                    'la' => 'Inordinem moralem et inconstantiam impedit.',
                    'he' => 'מונע חוסר סדר מוסרי וחוסר עקביות פנימית'
                ],
            ],

            [
                'number' => 56,
                'name' => 'Povyel (P-V-Y El)',
                'kabal_name' => 'Poiel',

                // Pe = parola / emissione / richiesta
                // Vav = connessione / canale / legge di unione
                // Yod = atto / concretizzazione
                'trigram' => "Pe Vav Yod",
                'trigram_significate' => "parola connessione realizzazione",

                'definition' => [
                    'it' => 'PVY - Dio che realizza la parola nella connessione',
                    'en' => 'PVY - God who fulfills the word through connection',
                    'la' => 'PVY - Deus qui verbum per connexionem adimplet',
                    'he' => 'PVY - האל המגשים את המילה דרך החיבור',
                ],

                'new_definition' => [
                    'it' => 'Dio è parola che si realizza nell’ordine giusto',
                    'en' => 'God is word fulfilled in rightful order',
                    'la' => 'Deus est verbum in ordine iusto impletum',
                    'he' => 'האל הוא מילה המתגשמת בסדר נכון',
                ],

                'hebrew_letters' => 'פוי',
                'hebrew_name' => 'פואל',

                'letter_details' => [
                    [
                        'letter' => 'פ',
                        'name' => 'Pe',
                        'value' => 80,
                        'meaning' => [
                            'it' => 'Parola efficace e richiesta consapevole.',
                            'en' => 'Effective speech and conscious request.',
                            'la' => 'Verbum efficax et petitio conscia.',
                            'he' => 'מילה יעילה ובקשה מודעת'
                        ]
                    ],
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => [
                            'it' => 'Connessione tra intenzione e realtà.',
                            'en' => 'Connection between intention and reality.',
                            'la' => 'Connexio inter intentionem et realitatem.',
                            'he' => 'חיבור בין כוונה למציאות'
                        ]
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Atto concreto e realizzazione precisa.',
                            'en' => 'Concrete act and precise realization.',
                            'la' => 'Actus concretus et realisatio certa.',
                            'he' => 'פעולה ממשית ומימוש מדויק'
                        ]
                    ],
                ],

                'choir' => 'principalities',
                'archangel' => 'haniel',
                'element' => 'earth',

                'zodiac_days' => [
                    ['day' => 21, 'month' => 12, 'sign' => 'sagittarius'],
                    ['day' => 22, 'month' => 12, 'sign' => 'capricorn'],
                    ['day' => 23, 'month' => 12, 'sign' => 'capricorn'],
                    ['day' => 24, 'month' => 12, 'sign' => 'capricorn'],
                    ['day' => 25, 'month' => 12, 'sign' => 'capricorn'],
                ],

                // Gradi
                // 'degree_start' => 15,
                // 'degree_end' => 20,
                'orientation' => 'NORD',

                // Salmo
                'psalm' => 17,
                'psalm_verse' => 4,
                'vulgata' => 16,
                'vulgata_verse' => 4,
                'psalm_link' => '/salmi/17',

                // Contenuti
                'quality' => [
                    'it' => 'Realizzazione equilibrata secondo ordine e misura.',
                    'en' => 'Balanced fulfillment according to order and measure.',
                    'la' => 'Adimpletio aequilibrata secundum ordinem et mensuram.',
                    'he' => 'הגשמה מאוזנת לפי סדר ומידה'
                ],
                'help' => [
                    'it' => 'Aiuta a ottenere risultati giusti e proporzionati alle intenzioni.',
                    'en' => 'Helps achieve fair results proportional to intentions.',
                    'la' => 'Ad eventus iustos et proportionales ducit.',
                    'he' => 'מסייע להשיג תוצאות צודקות ומדויקות'
                ],
                'prevent' => [
                    'it' => 'Previene avidità e desideri eccessivi.',
                    'en' => 'Prevents greed and excessive desires.',
                    'la' => 'Avaritiam et desideria nimia impedit.',
                    'he' => 'מונע תאווה מופרזת'
                ],
            ],

            // Arcangeli
            [
                'number' => 57,
                'name' => 'Nememyah (N-Me-M yah)',
                'kabal_name' => 'Nemamyah',

                // Nun = continuità / forza interiore
                // Mem = intelligenza fluida / adattamento
                // Mem = consolidamento della percezione strategica
                'trigram' => "Nun Mem Mem",
                'trigram_significate' => "forza discernimento strategia",

                'definition' => [
                    'it' => 'NMM - Dio che dona forza, discernimento e strategia',
                    'en' => 'NMM - God who grants strength, discernment and strategy',
                    'la' => 'NMM - Deus qui fortitudinem, prudentiam et strategiam dat',
                    'he' => 'NMM - האל המעניק כוח, תבונה ואסטרטגיה',
                ],

                'new_definition' => [
                    'it' => 'Dio è continuità che genera discernimento stabile',
                    'en' => 'God is continuity that generates stable discernment',
                    'la' => 'Deus est continuatio quae prudentiam stabilem gignit',
                    'he' => 'האל הוא המשכיות המולידה תבונה יציבה',
                ],

                'hebrew_letters' => 'נממ',
                'hebrew_name' => 'נממיה',

                'letter_details' => [
                    [
                        'letter' => 'נ',
                        'name' => 'Nun',
                        'value' => 50,
                        'meaning' => [
                            'it' => 'Perseveranza e forza interiore.',
                            'en' => 'Perseverance and inner strength.',
                            'la' => 'Perseverantia et fortitudo interior.',
                            'he' => 'התמדה וכוח פנימי'
                        ]
                    ],
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => [
                            'it' => 'Intelligenza adattiva e strategica.',
                            'en' => 'Adaptive and strategic intelligence.',
                            'la' => 'Intelligentia adaptiva et strategica.',
                            'he' => 'תבונה אסטרטגית וגמישות'
                        ]
                    ],
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => [
                            'it' => 'Rafforzamento della capacità di pianificazione.',
                            'en' => 'Strengthening of planning ability.',
                            'la' => 'Confirmatio facultatis consiliandi.',
                            'he' => 'חיזוק יכולת התכנון'
                        ]
                    ],
                ],

                'choir' => 'archangels',
                'archangel' => 'michael',
                'element' => 'earth',

                'zodiac_days' => [
                    ['day' => 26, 'month' => 12, 'sign' => 'capricorn'],
                    ['day' => 27, 'month' => 12, 'sign' => 'capricorn'],
                    ['day' => 28, 'month' => 12, 'sign' => 'capricorn'],
                    ['day' => 29, 'month' => 12, 'sign' => 'capricorn'],
                    ['day' => 30, 'month' => 12, 'sign' => 'capricorn'],
                ],

                // Gradi
                // 'degree_start' => 20,
                // 'degree_end' => 25,
                'orientation' => 'NORD',
                // Salmo
                'psalm' => 31,
                'psalm_verse' => 24,
                'vulgata' => 30,
                'vulgata_verse' => 24,
                'psalm_link' => '/salmi/31',

                // Contenuti
                'quality' => [
                    'it' => 'Discernimento, strategia e difesa del giusto.',
                    'en' => 'Discernment, strategy and defense of justice.',
                    'la' => 'Prudentia et defensio iusti.',
                    'he' => 'תבונה והגנה על הצדק'
                ],
                'help' => [
                    'it' => 'Aiuta a superare prove difficili con determinazione e intelligenza.',
                    'en' => 'Helps overcome difficult trials with determination and intelligence.',
                    'la' => 'Difficultates cum prudentia superare iuvat.',
                    'he' => 'מסייע להתגבר על ניסיונות בתבונה'
                ],
                'prevent' => [
                    'it' => 'Previene scoraggiamento e azioni impulsive.',
                    'en' => 'Prevents discouragement and impulsive actions.',
                    'la' => 'Desperationem et actiones impulsivas impedit.',
                    'he' => 'מונע ייאוש ופזיזות'
                ],
            ],

            [
                'number' => 58,
                'name' => 'Yoyolael (Yo-Yo-La el)',
                'kabal_name' => 'Yeyalel',

                // Yod = verità / punto di coscienza
                // Yod = rafforzamento della verità
                // Lamed = elevazione / discernimento superiore
                'trigram' => "Yod Yod Lamed",
                'trigram_significate' => "verità rafforzamento elevazione",

                'definition' => [
                    'it' => 'YYL - Dio che rafforza la verità e la eleva',
                    'en' => 'YYL - God who strengthens truth and elevates it',
                    'la' => 'YYL - Deus qui veritatem confirmat et elevat',
                    'he' => 'YYL - האל המחזק את האמת ומעלה אותה',
                ],

                'new_definition' => [
                    'it' => 'Dio è verità che si rafforza e diventa discernimento',
                    'en' => 'God is truth that strengthens and becomes discernment',
                    'la' => 'Deus est veritas quae confirmatur et fit discretio',
                    'he' => 'האל הוא אמת שמתחזקת והופכת להבחנה',
                ],

                'hebrew_letters' => 'ייל',
                'hebrew_name' => 'יעיאל',

                'letter_details' => [
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Principio di lucidità e verità.',
                            'en' => 'Principle of clarity and truth.',
                            'la' => 'Principium claritatis et veritatis.',
                            'he' => 'עקרון הבהירות והאמת'
                        ]
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Rafforzamento della verità interiore.',
                            'en' => 'Strengthening of inner truth.',
                            'la' => 'Confirmatio veritatis interioris.',
                            'he' => 'חיזוק האמת הפנימית'
                        ]
                    ],
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => [
                            'it' => 'Elevazione verso il discernimento superiore.',
                            'en' => 'Elevation toward higher discernment.',
                            'la' => 'Elevatio ad superiorem discretionem.',
                            'he' => 'עלייה להבחנה עליונה'
                        ]
                    ],
                ],

                'choir' => 'archangels',
                'archangel' => 'michael',
                'element' => 'air',

                'zodiac_days' => [
                    ['day' => 31, 'month' => 12, 'sign' => 'capricorn'],
                    ['day' => 1, 'month' => 1, 'sign' => 'capricorn'],
                    ['day' => 2, 'month' => 1, 'sign' => 'capricorn'],
                    ['day' => 3, 'month' => 1, 'sign' => 'capricorn'],
                    ['day' => 4, 'month' => 1, 'sign' => 'capricorn'],
                ],

                // Gradi
                // 'degree_start' => 25,
                // 'degree_end' => 30,
                'orientation' => 'NORD',

                // Salmo
                'psalm' => 121,
                'psalm_verse' => 8,
                'vulgata' => 120,
                'vulgata_verse' => 8,
                'psalm_link' => '/salmi/121',

                // Trigramma
                // 'trigram_sum' => 50,
                // 'trigram_reduction' => 5,
                // Contenuti
                'quality' => [
                    'it' => 'Chiarezza mentale e capacità di giudizio.',
                    'en' => 'Mental clarity and sound judgment.',
                    'la' => 'Claritas mentis et iudicium rectum.',
                    'he' => 'בהירות מחשבתית ושיפוט נכון'
                ],
                'help' => [
                    'it' => 'Aiuta a distinguere il vero dal falso e a decidere con lucidità.',
                    'en' => 'Helps distinguish truth from falsehood and decide clearly.',
                    'la' => 'Verum a falso discernere iuvat.',
                    'he' => 'מסייע להבחין בין אמת לשקר'
                ],
                'prevent' => [
                    'it' => 'Previene confusione mentale e autoinganno.',
                    'en' => 'Prevents mental confusion and self-deception.',
                    'la' => 'Confusionem mentis impedit.',
                    'he' => 'מונע בלבול והטעיה עצמית'
                ],
            ],

            [
                'number' => 59,
                'name' => 'Herechel (He-Re-Che el)',
                'kabal_name' => 'Harahel',

                // He = apertura / espansione
                // Resh = intelletto / organizzazione mentale
                // Chet = struttura vitale / contenimento attivo
                'trigram' => "He Resh Chet",
                'trigram_significate' => "espansione organizzazione struttura",

                'definition' => [
                    'it' => 'HRH - Dio che espande e organizza l’intelligenza',
                    'en' => 'HRH - God who expands and organizes intelligence',
                    'la' => 'HRH - Deus qui intelligentiam expandit et ordinat',
                    'he' => 'HRH - האל המרחיב ומארגן את השכל',
                ],

                'new_definition' => [
                    'it' => 'Dio è espansione che diventa ordine della mente',
                    'en' => 'God is expansion that becomes order of mind',
                    'la' => 'Deus est expansio quae fit ordo mentis',
                    'he' => 'האל הוא התרחבות ההופכת לסדר של השכל',
                ],

                'hebrew_letters' => 'הרח',
                'hebrew_name' => 'הראהל',

                'letter_details' => [
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => [
                            'it' => 'Apertura ed espansione della coscienza.',
                            'en' => 'Opening and expansion of awareness.',
                            'la' => 'Apertio et expansio conscientiae.',
                            'he' => 'פתיחה והרחבת התודעה'
                        ]
                    ],
                    [
                        'letter' => 'ר',
                        'name' => 'Resh',
                        'value' => 200,
                        'meaning' => [
                            'it' => 'Intelligenza attiva e mente organizzatrice.',
                            'en' => 'Active intelligence and organizing mind.',
                            'la' => 'Intelligentia activa et mens ordinans.',
                            'he' => 'שכל פעיל ומארגן'
                        ]
                    ],
                    [
                        'letter' => 'ח',
                        'name' => 'Chet',
                        'value' => 8,
                        'meaning' => [
                            'it' => 'Forza vitale che struttura e protegge.',
                            'en' => 'Vital force that structures and protects.',
                            'la' => 'Vis vitalis quae tuetur et format.',
                            'he' => 'כוח חיים המגן ומעצב'
                        ]
                    ],
                ],

                'choir' => 'archangels',
                'archangel' => 'michael',
                'element' => 'air',

                'zodiac_days' => [
                    ['day' => 5, 'month' => 1, 'sign' => 'capricorn'],
                    ['day' => 6, 'month' => 1, 'sign' => 'capricorn'],
                    ['day' => 7, 'month' => 1, 'sign' => 'capricorn'],
                    ['day' => 8, 'month' => 1, 'sign' => 'capricorn'],
                    ['day' => 9, 'month' => 1, 'sign' => 'capricorn'],
                ],

                // Gradi
                // 'degree_start' => 0,
                // 'degree_end' => 5,
                'orientation' => 'NORD',

                // Salmo
                'psalm' => 113,
                'psalm_verse' => 3,
                'vulgata' => 112,
                'vulgata_verse' => 3,
                'psalm_link' => '/salmi/113',

                // Contenuti
                'quality' => [
                    'it' => 'Espansione mentale e organizzazione del pensiero.',
                    'en' => 'Mental expansion and structured thinking.',
                    'la' => 'Expansio mentis et ordo cogitationis.',
                    'he' => 'הרחבת החשיבה וסדר מנטלי'
                ],
                'help' => [
                    'it' => 'Aiuta a costruire pensiero chiaro, organizzato ed efficace.',
                    'en' => 'Helps build clear, organized and effective thinking.',
                    'la' => 'Cogitationem clarum et ordinatum construere iuvat.',
                    'he' => 'מסייע לבנות חשיבה ברורה ומסודרת'
                ],
                'prevent' => [
                    'it' => 'Previene confusione mentale e dispersione delle idee.',
                    'en' => 'Prevents mental confusion and idea dispersion.',
                    'la' => 'Confusionem mentis et idearum dispersionem impedit.',
                    'he' => 'מונע בלבול ופיזור מחשבתי'
                ],
            ],

            [
                'number' => 60,
                'name' => 'Metsrael (Me-Ts-Re el)',
                'kabal_name' => 'Mitzrael',

                // Mem = purificazione / riequilibrio fluido
                // Tsadi = giustizia / rettitudine
                // Resh = ristrutturazione mentale
                'trigram' => "Mem Tsadi Resh",
                'trigram_significate' => "purificazione giustizia ristrutturazione",

                'definition' => [
                    'it' => 'MTR - Dio che purifica, rettifica e ristruttura',
                    'en' => 'MTR - God who purifies, rectifies and restructures',
                    'la' => 'MTR - Deus qui purificat, rectificat et reformat',
                    'he' => 'MTR - האל המטהר, המיישר והבונה מחדש',
                ],

                'new_definition' => [
                    'it' => 'Dio è purificazione che conduce alla rettitudine e al riordino',
                    'en' => 'God is purification leading to rectitude and reordering',
                    'la' => 'Deus est purificatio quae ad rectitudinem et ordinem ducit',
                    'he' => 'האל הוא טיהור המוביל לצדק ולסדר מחדש',
                ],

                'hebrew_letters' => 'מצר',
                'hebrew_name' => 'מצראל',

                'letter_details' => [
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => [
                            'it' => 'Processo di purificazione e riequilibrio interno.',
                            'en' => 'Process of purification and inner rebalancing.',
                            'la' => 'Processus purificationis et aequilibrii interioris.',
                            'he' => 'תהליך של טיהור ואיזון פנימי'
                        ]
                    ],
                    [
                        'letter' => 'צ',
                        'name' => 'Tsadi',
                        'value' => 90,
                        'meaning' => [
                            'it' => 'Giustizia e rettitudine morale.',
                            'en' => 'Justice and moral rectitude.',
                            'la' => 'Iustitia et rectitudo moralis.',
                            'he' => 'צדק ויושר מוסרי'
                        ]
                    ],
                    [
                        'letter' => 'ר',
                        'name' => 'Resh',
                        'value' => 200,
                        'meaning' => [
                            'it' => 'Ristrutturazione mentale e riordino consapevole.',
                            'en' => 'Mental restructuring and conscious reordering.',
                            'la' => 'Reformatio mentis et ordinatio conscia.',
                            'he' => 'ארגון תודעתי מחדש'
                        ]
                    ],
                ],

                'choir' => 'archangels',
                'archangel' => 'michael',
                'element' => 'air',

                'zodiac_days' => [
                    ['day' => 10, 'month' => 1, 'sign' => 'capricorn'],
                    ['day' => 11, 'month' => 1, 'sign' => 'capricorn'],
                    ['day' => 12, 'month' => 1, 'sign' => 'capricorn'],
                    ['day' => 13, 'month' => 1, 'sign' => 'capricorn'],
                    ['day' => 14, 'month' => 1, 'sign' => 'capricorn'],
                ],

                // Gradi
                // 'degree_start' => 5,
                // 'degree_end' => 10,
                'orientation' => 'NORD',

                // Salmo
                'psalm' => 145,
                'psalm_verse' => 10,
                'vulgata' => 144,
                'vulgata_verse' => 10,
                'psalm_link' => '/salmi/145',

                // Contenuti
                'quality' => [
                    'it' => 'Processo di correzione e riequilibrio strutturale.',
                    'en' => 'Process of correction and structural rebalancing.',
                    'la' => 'Processus correctionis et aequilibrii structurae.',
                    'he' => 'תהליך תיקון ואיזון מבני'
                ],
                'help' => [
                    'it' => 'Aiuta a correggere errori e a ristabilire armonia mentale.',
                    'en' => 'Helps correct errors and restore mental harmony.',
                    'la' => 'Errores corrigere et harmoniam restituere iuvat.',
                    'he' => 'מסייע לתקן טעויות ולהשיב הרמוניה'
                ],
                'prevent' => [
                    'it' => 'Previene rigidità, squilibri e deviazioni morali.',
                    'en' => 'Prevents rigidity, imbalance and moral deviation.',
                    'la' => 'Rigiditatem et deviationem impedit.',
                    'he' => 'מונע קיבעון וסטייה'
                ],
            ],

            [
                'number' => 61,
                'name' => 'Alvamel (Al-Va-M el)',
                'kabal_name' => 'Umabel',

                // Aleph = unità originaria
                // Vav = connessione e legame
                // Mem = maturazione e comprensione
                'trigram' => "Aleph Vav Mem",
                'trigram_significate' => "unità connessione maturazione",

                'definition' => [
                    'it' => 'AVM - Dio che unisce nella crescita della comprensione',
                    'en' => 'AVM - God who unites through the growth of understanding',
                    'la' => 'AVM - Deus qui unit per incrementum intellectus',
                    'he' => 'AVM - האל המאחד דרך התפתחות ההבנה',
                ],

                'new_definition' => [
                    'it' => 'Dio è unità che si connette e matura nella comprensione',
                    'en' => 'God is unity that connects and matures in understanding',
                    'la' => 'Deus est unitas quae connectit et in intellectu maturat',
                    'he' => 'האל הוא אחדות המתחברת ומתפתחת בהבנה',
                ],

                'hebrew_letters' => 'אומ',
                'hebrew_name' => 'אומאל',

                'letter_details' => [
                    [
                        'letter' => 'א',
                        'name' => 'Aleph',
                        'value' => 1,
                        'meaning' => [
                            'it' => 'Principio di unità e origine armonica.',
                            'en' => 'Principle of unity and harmonic origin.',
                            'la' => 'Principium unitatis et origo harmonica.',
                            'he' => 'עיקרון האחדות והמקור ההרמוני'
                        ]
                    ],
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => [
                            'it' => 'Connessione e legame tra le parti.',
                            'en' => 'Connection and bond between parts.',
                            'la' => 'Connexio et vinculum.',
                            'he' => 'חיבור וקישור'
                        ]
                    ],
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => [
                            'it' => 'Maturazione della comprensione attraverso esperienza.',
                            'en' => 'Maturation of understanding through experience.',
                            'la' => 'Maturatio intellectus per experientiam.',
                            'he' => 'הבשלה של הבנה דרך ניסיון'
                        ]
                    ],
                ],

                'choir' => 'archangels',
                'archangel' => 'michael',
                'element' => 'air',

                'zodiac_days' => [
                    ['day' => 15, 'month' => 1, 'sign' => 'capricorn'],
                    ['day' => 16, 'month' => 1, 'sign' => 'capricorn'],
                    ['day' => 17, 'month' => 1, 'sign' => 'capricorn'],
                    ['day' => 18, 'month' => 1, 'sign' => 'capricorn'],
                    ['day' => 19, 'month' => 1, 'sign' => 'capricorn'],
                ],

                // Gradi
                // 'degree_start' => 10,
                // 'degree_end' => 15,
                'orientation' => 'NORD',

                // Salmo
                'psalm' => 16,
                'psalm_verse' => 11,
                'vulgata' => 15,
                'vulgata_verse' => 11,
                'psalm_link' => '/salmi/16',

                // Contenuti
                'quality' => [
                    'it' => 'Integrazione e coerenza tra unità e relazione.',
                    'en' => 'Integration and coherence between unity and relationship.',
                    'la' => 'Integratio et cohaerentia inter unitatem et relationem.',
                    'he' => 'שילוב ועקביות בין אחדות וקשר'
                ],
                'help' => [
                    'it' => 'Favorisce stabilità e continuità nelle relazioni.',
                    'en' => 'Fosters stability and continuity in relationships.',
                    'la' => 'Stabilitatem et continuationem fovet.',
                    'he' => 'מחזק יציבות והמשכיות'
                ],
                'prevent' => [
                    'it' => 'Previene isolamento, frammentazione e incomprensione.',
                    'en' => 'Prevents isolation, fragmentation and misunderstanding.',
                    'la' => 'Isolationem et fragmentationem impedit.',
                    'he' => 'מונע בידוד ופירוד'
                ],
            ],

            [
                'number' => 62,
                'name' => 'Yohhel (Yo-He-H el)',
                'kabal_name' => 'Yahhel',

                // Yod = principio attivo / scintilla
                // He = manifestazione
                // He = espansione della manifestazione
                'trigram' => "Yod He He",
                'trigram_significate' => "principio manifestazione espansione",

                'definition' => [
                    'it' => 'YHH - Dio che manifesta ed espande il principio',
                    'en' => 'YHH - God who manifests and expands the principle',
                    'la' => 'YHH - Deus qui principium manifestat et expandit',
                    'he' => 'YHH - האל המגלה ומרחיב את העיקרון',
                ],

                'new_definition' => [
                    'it' => 'Dio è principio che si manifesta e si espande',
                    'en' => 'God is principle that manifests and expands',
                    'la' => 'Deus est principium quod manifestatur et expanditur',
                    'he' => 'האל הוא עיקרון המתגלה ומתפשט',
                ],

                'hebrew_letters' => 'יהה',
                'hebrew_name' => 'יההאל',

                'letter_details' => [
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Scintilla originaria e principio attivo.',
                            'en' => 'Originating spark and active principle.',
                            'la' => 'Scintilla primordialis et principium activum.',
                            'he' => 'ניצוץ ראשוני ועיקרון פעיל'
                        ]
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => [
                            'it' => 'Rivelazione e manifestazione del principio.',
                            'en' => 'Revelation and manifestation of the principle.',
                            'la' => 'Revelatio et manifestatio principii.',
                            'he' => 'התגלות העיקרון'
                        ]
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => [
                            'it' => 'Espansione e diffusione della manifestazione.',
                            'en' => 'Expansion and diffusion of manifestation.',
                            'la' => 'Expansio et diffusio manifestationis.',
                            'he' => 'הרחבת ההתגלות'
                        ]
                    ],
                ],

                'choir' => 'archangels',
                'archangel' => 'michael',
                'element' => 'air',

                'zodiac_days' => [
                    ['day' => 20, 'month' => 1, 'sign' => 'capricorn'],
                    ['day' => 21, 'month' => 1, 'sign' => 'aquarius'],
                    ['day' => 22, 'month' => 1, 'sign' => 'aquarius'],
                    ['day' => 23, 'month' => 1, 'sign' => 'aquarius'],
                    ['day' => 24, 'month' => 1, 'sign' => 'aquarius'],
                ],

                // Gradi
                // 'degree_start' => 15,
                // 'degree_end' => 20,
                'orientation' => 'EST',

                // Salmo
                'psalm' => 118,
                'psalm_verse' => 24,
                'vulgata' => 117,
                'vulgata_verse' => 24,
                'psalm_link' => '/salmi/118',

                // Contenuti
                'quality' => [
                    'it' => 'Manifestazione chiara e diffusione del principio.',
                    'en' => 'Clear manifestation and expansion of principle.',
                    'la' => 'Manifestatio clara et expansio principii.',
                    'he' => 'התגלות והתרחבות של העיקרון'
                ],
                'help' => [
                    'it' => 'Favorisce comprensione spirituale e stabilità interiore.',
                    'en' => 'Fosters spiritual understanding and inner stability.',
                    'la' => 'Intellectum spiritualem et stabilitatem interiorem promovet.',
                    'he' => 'מסייע להבנה רוחנית וליציבות פנימית'
                ],
                'prevent' => [
                    'it' => 'Previene dispersione e perdita della direzione originaria.',
                    'en' => 'Prevents dispersion and loss of original direction.',
                    'la' => 'Dispersionem et deviationem impedit.',
                    'he' => 'מונע פיזור ואובדן כיוון'
                ],
            ],

            [
                'number' => 63,
                'name' => 'Aynavel (Ay-Nu-V el)',
                'kabal_name' => 'Anauel',

                // Ayin = visione / percezione
                // Nun = continuità / flusso
                // Vav = connessione / scambio
                'trigram' => "Ayin Nun Vav",
                'trigram_significate' => "visione continuità connessione",

                'definition' => [
                    'it' => 'ANV - Dio che vede, sostiene e connette',
                    'en' => 'ANV - God who sees, sustains and connects',
                    'la' => 'ANV - Deus qui videt, sustentat et connectit',
                    'he' => 'ANV - האל הרואה, מקיים ומחבר',
                ],

                'new_definition' => [
                    'it' => 'ANV - Dio che connette e regola lo scambio',
                    'en' => 'ANV - God who connects and regulates exchange',
                    'la' => 'ANV - Deus qui connectit et commercium ordinat',
                    'he' => 'ANV - האל המחבר ומסדיר חילוף',
                ],

                'hebrew_letters' => 'ענו',
                'hebrew_name' => 'ענואל',

                'letter_details' => [
                    [
                        'letter' => 'ע',
                        'name' => 'Ayin',
                        'value' => 70,
                        'meaning' => [
                            'it' => 'Visione interiore e percezione profonda.',
                            'en' => 'Inner vision and deep perception.',
                            'la' => 'Visio interior et perceptio profunda.',
                            'he' => 'ראייה פנימית ותפיסה עמוקה'
                        ]
                    ],
                    [
                        'letter' => 'נ',
                        'name' => 'Nun',
                        'value' => 50,
                        'meaning' => [
                            'it' => 'Continuità con fedeltà e perseveranza.',
                            'en' => 'Continuity with fidelity and perseverance.',
                            'la' => 'Continuatio cum fidelitate et perseverantia.',
                            'he' => 'המשכיות בנאמנות ובהתמדה'
                        ]
                    ],
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => [
                            'it' => 'Connessione e scambio tra le parti.',
                            'en' => 'Connection and exchange between parts.',
                            'la' => 'Connexio et commercium.',
                            'he' => 'חיבור וחילוף'
                        ]
                    ],
                ],

                'choir' => 'archangels',
                'archangel' => 'michael',
                'element' => 'water',
                'zodiac_days' => [
                    ['day' => 25, 'month' => 1, 'sign' => 'aquarius'],
                    ['day' => 26, 'month' => 1, 'sign' => 'aquarius'],
                    ['day' => 27, 'month' => 1, 'sign' => 'aquarius'],
                    ['day' => 28, 'month' => 1, 'sign' => 'aquarius'],
                    ['day' => 29, 'month' => 1, 'sign' => 'aquarius'],
                ],

                // Gradi
                // 'degree_start' => 20,
                // 'degree_end' => 25,
                'orientation' => 'NORD',

                // Salmo
                'psalm' => 27,
                'psalm_verse' => 8,
                'vulgata' => 26,
                'vulgata_verse' => 8,
                'psalm_link' => '/salmi/27',

                // Contenuti
                'quality' => [
                    'it' => 'Equilibrio nello scambio e connessione ordinata.',
                    'en' => 'Balance in exchange and ordered connection.',
                    'la' => 'Aequilibrium in commercio et connexio ordinata.',
                    'he' => 'איזון בחילוף וחיבור מסודר'
                ],
                'help' => [
                    'it' => 'Aiuta a stabilire scambi chiari e relazioni corrette.',
                    'en' => 'Helps establish clear exchanges and proper relationships.',
                    'la' => 'Commercia clara et relationes rectas stabilire iuvat.',
                    'he' => 'מסייע ליצור חילופים ברורים וקשרים נכונים'
                ],
                'prevent' => [
                    'it' => 'Previene squilibri, incomprensioni e rotture nelle relazioni.',
                    'en' => 'Prevents imbalance, misunderstanding and relational breakdown.',
                    'la' => 'Inaequalitatem et rupturas impedit.',
                    'he' => 'מונע חוסר איזון ושבירת קשרים'
                ],
            ],

            [
                'number' => 64,
                'name' => 'Mechyel (Me-Ch-Y el)',
                'kabal_name' => 'Mehiel',

                // Mem = flusso / generazione
                // Chet = vita / forza vitale
                // Yod = attivazione / scintilla
                'trigram' => "Mem Chet Yod",
                'trigram_significate' => "flusso vita attivazione",

                'definition' => [
                    'it' => 'MHI - Dio che genera vita e attiva',
                    'en' => 'MHI - God who generates life and activates',
                    'la' => 'MHI - Deus qui vitam generat et activat',
                    'he' => 'MHI - האל היוצר חיים ומפעיל',
                ],

                'new_definition' => [
                    'it' => 'Dio è flusso che genera vita e attiva',
                    'en' => 'God is flow that generates life and activates',
                    'la' => 'Deus est fluxus qui vitam generat et activat',
                    'he' => 'האל הוא זרימה היוצרת חיים ומפעילה',
                ],

                'hebrew_letters' => 'מחי',
                'hebrew_name' => 'מחיאל',

                'letter_details' => [
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => [
                            'it' => 'Flusso generativo e processo creativo.',
                            'en' => 'Generative flow and creative process.',
                            'la' => 'Fluxus generativus et processus creativus.',
                            'he' => 'זרימה יוצרת ותהליך יצירה'
                        ]
                    ],
                    [
                        'letter' => 'ח',
                        'name' => 'Chet',
                        'value' => 8,
                        'meaning' => [
                            'it' => 'Forza vitale custodita e protetta.',
                            'en' => 'Protected and guarded vital force.',
                            'la' => 'Vis vitalis custodita.',
                            'he' => 'כוח חיים שמור'
                        ]
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Scintilla attiva e impulso creativo.',
                            'en' => 'Active spark and creative impulse.',
                            'la' => 'Scintilla activa et impulsus creator.',
                            'he' => 'ניצוץ פעיל ודחף יצירתי'
                        ]
                    ],
                ],

                'choir' => 'archangels',
                'archangel' => 'michael',
                'element' => 'water',

                'zodiac_days' => [
                    ['day' => 30, 'month' => 1, 'sign' => 'aquarius'],
                    ['day' => 31, 'month' => 1, 'sign' => 'aquarius'],
                    ['day' => 1, 'month' => 2, 'sign' => 'aquarius'],
                    ['day' => 2, 'month' => 2, 'sign' => 'aquarius'],
                    ['day' => 3, 'month' => 2, 'sign' => 'aquarius'],
                ],

                // Gradi
                // 'degree_start' => 25,
                // 'degree_end' => 30,
                'orientation' => 'NORD-EST',

                // Salmo
                'psalm' => 104,
                'psalm_verse' => 31,
                'vulgata' => 103,
                'vulgata_verse' => 31,
                'psalm_link' => '/salmi/104',

                // Contenuti
                'quality' => [
                    'it' => 'Ispirazione viva e forza espressiva.',
                    'en' => 'Living inspiration and expressive strength.',
                    'la' => 'Inspiratio viva et vis expressiva.',
                    'he' => 'השראה חיה וכוח ביטוי'
                ],
                'help' => [
                    'it' => 'Favorisce espressione chiara e creatività ordinata.',
                    'en' => 'Encourages clear expression and ordered creativity.',
                    'la' => 'Expressionem claritatem et creationem ordinatam promovet.',
                    'he' => 'מסייע לביטוי ברור ויצירה מסודרת'
                ],
                'prevent' => [
                    'it' => 'Previene dispersione e blocco creativo.',
                    'en' => 'Prevents dispersion and creative blockage.',
                    'la' => 'Dispersionem et impedimentum creationis impedit.',
                    'he' => 'מונע פיזור וחסימה יצירתית'
                ],
            ],

            // Angeli
            [
                'number' => 65,
                'name' => 'Damabyah (Da-Me-B yah)',
                'kabal_name' => 'Damabiah',

                // Dalet = passaggio / apertura
                // Mem = purificazione / flusso
                // Bet = contenimento / protezione
                'trigram' => "Dalet Mem Bet",
                'trigram_significate' => "apertura purificazione protezione",

                'definition' => [
                    'it' => 'DMB - Dio che apre, purifica e protegge',
                    'en' => 'DMB - God who opens, purifies and protects',
                    'la' => 'DMB - Deus qui aperit, purificat et protegit',
                    'he' => 'DMB - האל הפותח, המטהר והמגן',
                ],

                'new_definition' => [
                    'it' => 'Dio è apertura che purifica e protegge',
                    'en' => 'God is opening that purifies and protects',
                    'la' => 'Deus est apertio quae purificat et protegit',
                    'he' => 'האל הוא פתיחה המטהרת ומגנה',
                ],

                'hebrew_letters' => 'דמב',
                'hebrew_name' => 'דמבאל',

                'letter_details' => [
                    [
                        'letter' => 'ד',
                        'name' => 'Dalet',
                        'value' => 4,
                        'meaning' => [
                            'it' => 'Passaggio e apertura attraverso l’umiltà.',
                            'en' => 'Passage and opening through humility.',
                            'la' => 'Transitus et apertio per humilitatem.',
                            'he' => 'מעבר ופתיחה דרך ענווה'
                        ]
                    ],
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => [
                            'it' => 'Purificazione e processo di rinnovamento.',
                            'en' => 'Purification and process of renewal.',
                            'la' => 'Purificatio et renovatio.',
                            'he' => 'טיהור ותהליך התחדשות'
                        ]
                    ],
                    [
                        'letter' => 'ב',
                        'name' => 'Bet',
                        'value' => 2,
                        'meaning' => [
                            'it' => 'Protezione e contenimento.',
                            'en' => 'Protection and containment.',
                            'la' => 'Protectio et continentia.',
                            'he' => 'הגנה והכלה'
                        ]
                    ],
                ],

                'choir' => 'angels',
                'archangel' => 'gabriel',
                'element' => 'water',

                'zodiac_days' => [
                    ['day' => 4, 'month' => 2, 'sign' => 'aquarius'],
                    ['day' => 5, 'month' => 2, 'sign' => 'aquarius'],
                    ['day' => 6, 'month' => 2, 'sign' => 'aquarius'],
                    ['day' => 7, 'month' => 2, 'sign' => 'aquarius'],
                    ['day' => 8, 'month' => 2, 'sign' => 'aquarius'],
                ],

                // Gradi
                // 'degree_start' => 0,
                // 'degree_end' => 5,
                'orientation' => 'NORD-EST',

                // Salmo
                'psalm' => 90,
                'psalm_verse' => 17,
                'vulgata' => 89,
                'vulgata_verse' => 17,
                'psalm_link' => '/salmi/90',

                // Contenuti
                'quality' => [
                    'it' => 'Protezione e purificazione interiore.',
                    'en' => 'Protection and inner purification.',
                    'la' => 'Protectio et purificatio interior.',
                    'he' => 'הגנה וטיהור פנימי'
                ],
                'help' => [
                    'it' => 'Aiuta ad aprire, purificare e stabilizzare nei momenti difficili.',
                    'en' => 'Helps to open, purify and stabilize in difficult moments.',
                    'la' => 'Aperire, purificare et stabilire in difficultatibus iuvat.',
                    'he' => 'מסייע לפתוח, לטהר ולייצב במצבים קשים'
                ],
                'prevent' => [
                    'it' => 'Previene chiusura, impurità e perdita di protezione.',
                    'en' => 'Prevents closure, impurity and loss of protection.',
                    'la' => 'Clausuram, impuritatem et defectum protectionis impedit.',
                    'he' => 'מונע סגירות, טומאה ואובדן הגנה'
                ],
            ],

            [
                'number' => 66,
                'name' => 'Menuqoel (Me-Nu-Q el)',
                'kabal_name' => 'Manakel',

                // Mem = processo / profondità
                // Nun = continuità
                // Qof = rettificazione / riallineamento
                'trigram' => "Mem Nun Qof",
                'trigram_significate' => "processo continuità rettificazione",

                'definition' => [
                    'it' => 'MNQ - Dio che conduce, sostiene e rettifica',
                    'en' => 'MNQ - God who leads, sustains and rectifies',
                    'la' => 'MNQ - Deus qui ducit, sustinet et rectificat',
                    'he' => 'MNQ - האל המוביל, מקיים ומתקן',
                ],

                'new_definition' => [
                    'it' => 'Dio è processo che sostiene e rettifica',
                    'en' => 'God is process that sustains and rectifies',
                    'la' => 'Deus est processus qui sustinet et rectificat',
                    'he' => 'האל הוא תהליך המקיים ומתקן',
                ],

                'hebrew_letters' => 'מנק',
                'hebrew_name' => 'מנקאל',

                'letter_details' => [
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => [
                            'it' => 'Profondità e processo interiore di maturazione.',
                            'en' => 'Depth and inner process of maturation.',
                            'la' => 'Profunditas et processus interior.',
                            'he' => 'עומק ותהליך פנימי'
                        ]
                    ],
                    [
                        'letter' => 'נ',
                        'name' => 'Nun',
                        'value' => 50,
                        'meaning' => [
                            'it' => 'Continuità e perseveranza stabile.',
                            'en' => 'Continuity and steady perseverance.',
                            'la' => 'Continuatio et perseverantia stabilis.',
                            'he' => 'המשכיות והתמדה'
                        ]
                    ],
                    [
                        'letter' => 'ק',
                        'name' => 'Qof',
                        'value' => 100,
                        'meaning' => [
                            'it' => 'Rettificazione e riallineamento.',
                            'en' => 'Rectification and realignment.',
                            'la' => 'Rectificatio et realignatio.',
                            'he' => 'תיקון ויישור'
                        ]
                    ],
                ],

                'choir' => 'angels',
                'archangel' => 'gabriel',
                'element' => 'water',

                'zodiac_days' => [
                    ['day' => 9, 'month' => 2, 'sign' => 'aquarius'],
                    ['day' => 10, 'month' => 2, 'sign' => 'aquarius'],
                    ['day' => 11, 'month' => 2, 'sign' => 'aquarius'],
                    ['day' => 12, 'month' => 2, 'sign' => 'aquarius'],
                    ['day' => 13, 'month' => 2, 'sign' => 'aquarius'],
                ],

                // Gradi
                // 'degree_start' => 25,
                // 'degree_end' => 30,
                'orientation' => 'EST',

                // Salmo
                'psalm' => 51,
                'psalm_verse' => 12,
                'vulgata' => 50,
                'vulgata_verse' => 12,
                'psalm_link' => '/salmi/51',

                // Trigramma
                // 'trigram_sum' => 190,
                // 'trigram_reduction' => 10,
                // Contenuti
                'quality' => [
                    'it' => 'Ristabilimento dell’equilibrio e memoria ordinatrice.',
                    'en' => 'Restoration of balance and ordering memory.',
                    'la' => 'Restitutio aequilibrii et memoria ordinans.',
                    'he' => 'השבת איזון וסדר'
                ],
                'help' => [
                    'it' => 'Aiuta a correggere deviazioni e a recuperare stabilità.',
                    'en' => 'Helps correct deviations and regain stability.',
                    'la' => 'Deviationes corrigit et stabilitatem reddit.',
                    'he' => 'מסייע בתיקון ובהשבת יציבות'
                ],
                'prevent' => [
                    'it' => 'Previene disordine e ripetizione degli errori.',
                    'en' => 'Prevents disorder and repetition of errors.',
                    'la' => 'Inordinationem et repetitionem errorum impedit.',
                    'he' => 'מונע חוסר סדר וחזרה על טעויות'
                ],
            ],

            [
                'number' => 67,
                'name' => 'Ayayel (A-Y-Ay el)',
                'kabal_name' => 'Eyael',

                // Aleph = principio / unità
                // Yod = attivazione / impulso
                // Ayin = visione / percezione
                'trigram' => "Aleph Yod Ayin",
                'trigram_significate' => "principio attivazione visione",

                'definition' => [
                    'it' => 'AYA - Dio principio di attivazione e visione',
                    'en' => 'AYA - God principle of activation and vision',
                    'la' => 'AYA - Deus principium activationis et visionis',
                    'he' => 'AYA - האל עיקרון של הפעלה וראייה',
                ],

                'new_definition' => [
                    'it' => 'Dio è principio che attiva e conduce alla visione',
                    'en' => 'God is principle that activates and leads to vision',
                    'la' => 'Deus est principium quod activat et ad visionem ducit',
                    'he' => 'האל הוא עיקרון שמפעיל ומוביל לראייה',
                ],

                'hebrew_letters' => 'איע',
                'hebrew_name' => 'איעאל',

                'letter_details' => [
                    [
                        'letter' => 'א',
                        'name' => 'Aleph',
                        'value' => 1,
                        'meaning' => [
                            'it' => 'Principio originario e unità primordiale.',
                            'en' => 'Primordial principle and originating unity.',
                            'la' => 'Principium primordiale et unitas originaria.',
                            'he' => 'עיקרון ראשוני ואחדות מקורית'
                        ]
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Impulso attivo e intelligenza operativa.',
                            'en' => 'Active impulse and operative intelligence.',
                            'la' => 'Impulsus activus et intelligentia operativa.',
                            'he' => 'דחף פעיל ותבונה פועלת'
                        ]
                    ],
                    [
                        'letter' => 'ע',
                        'name' => 'Ayin',
                        'value' => 70,
                        'meaning' => [
                            'it' => 'Visione interiore e profondità percettiva.',
                            'en' => 'Inner vision and perceptive depth.',
                            'la' => 'Visio interior et profunditas perceptionis.',
                            'he' => 'ראייה פנימית ועומק תפיסה'
                        ]
                    ],
                ],

                'choir' => 'angels',
                'archangel' => 'gabriel',
                'element' => 'water',

                'zodiac_days' => [
                    ['day' => 14, 'month' => 2, 'sign' => 'aquarius'],
                    ['day' => 15, 'month' => 2, 'sign' => 'aquarius'],
                    ['day' => 16, 'month' => 2, 'sign' => 'aquarius'],
                    ['day' => 17, 'month' => 2, 'sign' => 'aquarius'],
                    ['day' => 18, 'month' => 2, 'sign' => 'aquarius'],
                ],

                // Gradi
                // 'degree_start' => 0,
                // 'degree_end' => 5,
                'orientation' => 'EST',

                // Salmo
                'psalm' => 36,
                'psalm_verse' => 6,
                'vulgata' => 35,
                'vulgata_verse' => 6,
                'psalm_link' => '/salmi/36',

                // Trigramma
                // 'trigram_sum' => 81,
                // 'trigram_reduction' => 9,
                // Contenuti
                'quality' => [
                    'it' => 'Attivazione della visione e comprensione profonda.',
                    'en' => 'Activation of vision and deep understanding.',
                    'la' => 'Activatio visionis et intellectus profundus.',
                    'he' => 'הפעלת ראייה והבנה עמוקה'
                ],
                'help' => [
                    'it' => 'Aiuta ad attivare la visione interiore e la comprensione.',
                    'en' => 'Helps activate inner vision and understanding.',
                    'la' => 'Visionem interiorem et intellectum activare iuvat.',
                    'he' => 'מסייע להפעיל ראייה פנימית והבנה'
                ],
                'prevent' => [
                    'it' => 'Previene confusione e superficialità.',
                    'en' => 'Prevents confusion and superficiality.',
                    'la' => 'Confusionem et superficialitatem impedit.',
                    'he' => 'מונע בלבול ושטחיות'
                ],
            ],

            [
                'number' => 68,
                'name' => 'Chabevyah (Cha-B-V yah)', // Dio che dona con liberalità
                'kabal_name' => 'Habuwyah',

                // Chet = vita / forza vitale
                // Bet = contenimento / nutrimento
                // Vav = continuità / sostegno
                'trigram' => "Chet Bet Vav",
                'trigram_significate' => "vita contenimento continuità",

                'definition' => [
                    'it' => 'HBV - Dio vita, contenimento e continuità',
                    'en' => 'HBV - God life, containment and continuity',
                    'la' => 'HBV - Deus vita, continentia et continuatio',
                    'he' => 'HBV - האל חיים, הכלה והמשכיות',
                ],

                'new_definition' => [
                    'it' => 'Dio sostiene la vita con continuità',
                    'en' => 'God sustains life with continuity',
                    'la' => 'Deus vitam cum continuatione sustinet',
                    'he' => 'האל מקיים את החיים בהתמדה',
                ],

                'hebrew_letters' => 'חבו',
                'hebrew_name' => 'חבואל',

                'letter_details' => [
                    [
                        'letter' => 'ח',
                        'name' => 'Chet',
                        'value' => 8,
                        'meaning' => [
                            'it' => 'Forza vitale custodita e protezione della vita.',
                            'en' => 'Guarded vital force and protection of life.',
                            'la' => 'Vis vitalis custodita.',
                            'he' => 'כוח חיים מוגן'
                        ]
                    ],
                    [
                        'letter' => 'ב',
                        'name' => 'Bet',
                        'value' => 2,
                        'meaning' => [
                            'it' => 'Contenimento e nutrimento.',
                            'en' => 'Containment and nourishment.',
                            'la' => 'Continentia et nutritio.',
                            'he' => 'כלי והזנה'
                        ]
                    ],
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => [
                            'it' => 'Continuità e sostegno costante.',
                            'en' => 'Continuity and steady support.',
                            'la' => 'Continuatio et sustentatio.',
                            'he' => 'המשכיות ותמיכה'
                        ]
                    ],
                ],

                'choir' => 'angels',
                'archangel' => 'gabriel',
                'element' => 'water',

                'zodiac_days' => [
                    ['day' => 19, 'month' => 2, 'sign' => 'aquarius'],
                    ['day' => 20, 'month' => 2, 'sign' => 'pisces'],
                    ['day' => 21, 'month' => 2, 'sign' => 'pisces'],
                    ['day' => 22, 'month' => 2, 'sign' => 'pisces'],
                    ['day' => 23, 'month' => 2, 'sign' => 'pisces'],
                ],

                // Gradi
                // 'degree_start' => 5,
                // 'degree_end' => 10,
                'orientation' => 'EST',

                // Salmo
                'psalm' => 146,
                'psalm_verse' => 5,
                'vulgata' => 145,
                'vulgata_verse' => 5,
                'psalm_link' => '/salmi/146',

                // Trigramma
                // 'trigram_sum' => 16,
                // 'trigram_reduction' => 7,
                // Contenuti
                'quality' => [
                    'it' => 'Continuità vitale e nutrimento stabile.',
                    'en' => 'Vital continuity and stable nourishment.',
                    'la' => 'Continuatio vitalis et nutritio stabilis.',
                    'he' => 'המשכיות חיים והזנה יציבה'
                ],
                'help' => [
                    'it' => 'Favorisce rigenerazione e mantenimento delle energie.',
                    'en' => 'Fosters regeneration and maintenance of energy.',
                    'la' => 'Regenerationem et conservationem virium promovet.',
                    'he' => 'מסייע בהתחדשות ושימור הכוחות'
                ],
                'prevent' => [
                    'it' => 'Previene esaurimento e indebolimento.',
                    'en' => 'Prevents exhaustion and weakening.',
                    'la' => 'Exhaustionem impedit.',
                    'he' => 'מונע תשישות וחולשה'
                ],
            ],

            [
                'number' => 69,
                'name' => 'Reshelel (Re-H-L el)',
                'kabal_name' => 'Rochel',

                // Resh = ritorno / riallineamento
                // He = manifestazione
                // Lamed = direzione / ordine
                'trigram' => "Resh He Lamed",
                'trigram_significate' => "ritorno manifestazione direzione",

                'definition' => [
                    'it' => 'RHL - Dio di ritorno, manifestazione e direzione',
                    'en' => 'RHL - God of return, manifestation and direction',
                    'la' => 'RHL - Deus reditus, manifestationis et directionis',
                    'he' => 'RHL - האל של חזרה, התגלות וכיוון',
                ],

                'new_definition' => [
                    'it' => 'Dio che ristabilisce la direzione attraverso la manifestazione',
                    'en' => 'God who restores direction through manifestation',
                    'la' => 'Deus qui directionem per manifestationem restituit',
                    'he' => 'האל המשיב כיוון דרך התגלות',
                ],

                'hebrew_letters' => 'רהל',
                'hebrew_name' => 'רהאל',

                'letter_details' => [
                    [
                        'letter' => 'ר',
                        'name' => 'Resh',
                        'value' => 200,
                        'meaning' => [
                            'it' => 'Ritorno al principio e recupero della direzione originaria.',
                            'en' => 'Return to the origin and recovery of the original direction.',
                            'la' => 'Reditus ad originem et recuperatio directionis.',
                            'he' => 'חזרה למקור והשבת הכיוון'
                        ]
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => [
                            'it' => 'Manifestazione e rivelazione di ciò che era nascosto.',
                            'en' => 'Manifestation and revelation of what was hidden.',
                            'la' => 'Manifestatio et revelatio absconditi.',
                            'he' => 'התגלות וגילוי הנסתר'
                        ]
                    ],
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => [
                            'it' => 'Direzione, guida e ristabilimento dell’ordine.',
                            'en' => 'Direction, guidance and restoration of order.',
                            'la' => 'Directio, ductus et restitutio ordinis.',
                            'he' => 'כיוון, הדרכה והשבת סדר'
                        ]
                    ],
                ],

                'choir' => 'angels',
                'archangel' => 'gabriel',
                'element' => 'water',

                'zodiac_days' => [
                    ['day' => 24, 'month' => 2, 'sign' => 'pisces'],
                    ['day' => 25, 'month' => 2, 'sign' => 'pisces'],
                    ['day' => 26, 'month' => 2, 'sign' => 'pisces'],
                    ['day' => 27, 'month' => 2, 'sign' => 'pisces'],
                    ['day' => 28, 'month' => 2, 'sign' => 'pisces'],
                ],

                // Gradi
                // 'degree_start' => 20,
                // 'degree_end' => 25,
                'orientation' => 'EST',

                // Salmo
                'psalm' => 145,
                'psalm_verse' => 14,
                'vulgata' => 144,
                'vulgata_verse' => 14,
                'psalm_link' => '/salmi/145',

                // Trigramma
                // 'trigram_sum' => 235,
                // 'trigram_reduction' => 10,
                // Contenuti
                'quality' => [
                    'it' => 'Ritorno all’ordine e riallineamento interiore.',
                    'en' => 'Return to order and inner realignment.',
                    'la' => 'Reditus ad ordinem et realignatio interior.',
                    'he' => 'חזרה לסדר ואיזון פנימי'
                ],
                'help' => [
                    'it' => 'Aiuta a ritrovare direzione e stabilità dopo smarrimento.',
                    'en' => 'Helps regain direction and stability after loss.',
                    'la' => 'Directionem et stabilitatem recuperare iuvat.',
                    'he' => 'מסייע למצוא כיוון ויציבות'
                ],
                'prevent' => [
                    'it' => 'Previene dispersione, perdita di senso e disordine.',
                    'en' => 'Prevents dispersion, loss of meaning and disorder.',
                    'la' => 'Dispersionem et inordinationem impedit.',
                    'he' => 'מונע פיזור ואובדן כיוון'
                ],
            ],

            [
                'number' => 70,
                'name' => 'Yobemyah (Yo-Be-M el)',
                'kabal_name' => 'Jabamiah',

                // Yod = principio attivo / scintilla creativa
                // Bet = struttura / contenimento / forma
                // Mem = trasformazione / rigenerazione
                'trigram' => "Yod Bet Mem",
                'trigram_significate' => "principio struttura trasformazione",


                'definition' => [
                    'it' => 'JBM - Dio di creazione, struttura e rigenerazione',
                    'en' => 'JBM - God of creation, structure and regeneration',
                    'la' => 'JBM - Deus creationis, structurae et regenerationis',
                    'he' => 'JBM - האל של יצירה, מבנה והתחדשות',
                ],

                'new_definition' => [
                    'it' => 'Dio che crea, struttura e rigenera la vita',
                    'en' => 'God who creates, structures and regenerates life',
                    'la' => 'Deus qui creat, format et regenerat vitam',
                    'he' => 'האל היוצר, המבנה ומחדש את החיים',
                ],

                'hebrew_letters' => 'יבמ',
                'hebrew_name' => 'יבמאל',

                'letter_details' => [
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Scintilla originaria e impulso creativo divino.',
                            'en' => 'Originating spark and divine creative impulse.',
                            'la' => 'Scintilla originaria et impulsus divinus.',
                            'he' => 'ניצוץ ראשוני ודחף אלוהי'
                        ]
                    ],
                    [
                        'letter' => 'ב',
                        'name' => 'Bet',
                        'value' => 2,
                        'meaning' => [
                            'it' => 'Struttura, casa e forma che contiene la vita.',
                            'en' => 'Structure, house and form that contains life.',
                            'la' => 'Structura et forma quae vitam continet.',
                            'he' => 'מבנה וצורה המכילים חיים'
                        ]
                    ],
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => [
                            'it' => 'Processo di trasformazione e rigenerazione profonda.',
                            'en' => 'Process of transformation and deep regeneration.',
                            'la' => 'Processus transformationis et regenerationis profundae.',
                            'he' => 'תהליך שינוי והתחדשות עמוקה'
                        ]
                    ],
                ],

                'choir' => 'angels',
                'archangel' => 'gabriel',
                'element' => 'fire',

                'zodiac_days' => [
                    ['day' => 1, 'month' => 3, 'sign' => 'pisces'],
                    ['day' => 2, 'month' => 3, 'sign' => 'pisces'],
                    ['day' => 3, 'month' => 3, 'sign' => 'pisces'],
                    ['day' => 4, 'month' => 3, 'sign' => 'pisces'],
                    ['day' => 5, 'month' => 3, 'sign' => 'pisces'],
                ],

                // Gradi
                // 'degree_start' => 25,
                // 'degree_end' => 30,
                'orientation' => 'EST',

                // Salmo
                'psalm' => 51,
                'psalm_verse' => 12,
                'vulgata' => 50,
                'vulgata_verse' => 12,
                'psalm_link' => '/salmi/51',

                // Trigramma
                // 'trigram_sum' => 52,
                // 'trigram_reduction' => 7,

                // Contenuti
                'quality' => [
                    'it' => 'Rigenerazione e rinnovamento della vita interiore.',
                    'en' => 'Regeneration and renewal of inner life.',
                    'la' => 'Regeneratio et renovatio vitae interioris.',
                    'he' => 'התחדשות ושיקום פנימי'
                ],
                'help' => [
                    'it' => 'Aiuta a ricostruire e rinnovare ciò che ha perso la sua forma originaria.',
                    'en' => 'Helps rebuild and renew what has lost its original form.',
                    'la' => 'Ad aedificandum et renovandum quod formam suam originalem perdidit iuvat.',
                    'he' => 'מסייע בבנייה מחודשת והתחדשות של מה שאיבד את צורתו המקורית'
                ],
                'prevent' => [
                    'it' => 'Previene disordine, blocco e degenerazione.',
                    'en' => 'Prevents disorder, blockage and degeneration.',
                    'la' => 'Inordinationem, obstructionem et degenerationem impedit.',
                    'he' => 'מונע חוסר סדר, חסימה והתדרדרות'
                ],
            ],

            [
                'number' => 71,
                'name' => 'Heyoyel (He-Yo-Y el)',
                'kabal_name' => 'Hayayel',

                // He = manifestazione / apertura
                // Yod = forza attiva / concentrazione
                // Yod = consolidamento / intensificazione
                'trigram' => "He Yod Yod",
                'trigram_significate' => "manifestazione forza consolidamento",

                'definition' => [
                    'it' => 'HYY - Dio che manifesta forza e consolidamento',
                    'en' => 'HYY - God who manifests strength and consolidation',
                    'la' => 'HYY - Deus qui vim manifestat et consolidat',
                    'he' => 'HYY - האל המגלה כוח ומחזק',
                ],

                'new_definition' => [
                    'it' => 'Dio che manifesta la forza e la rende stabile',
                    'en' => 'God who manifests strength and makes it stable',
                    'la' => 'Deus qui vim manifestat et stabilit',
                    'he' => 'האל המגלה כוח ומייצב אותו',
                ],

                'hebrew_letters' => 'היי',
                'hebrew_name' => 'הייאל',

                'letter_details' => [
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => [
                            'it' => 'Manifestazione della realtà nella luce della coscienza.',
                            'en' => 'Manifestation of reality in the light of consciousness.',
                            'la' => 'Manifestatio realitatis in lumine conscientiae.',
                            'he' => 'התגלות המציאות באור התודעה'
                        ]
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Forza concentrata e impulso originario.',
                            'en' => 'Concentrated force and originating impulse.',
                            'la' => 'Vis concentrata et impulsus originarius.',
                            'he' => 'כוח מרוכז ודחף ראשוני'
                        ]
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Stabilizzazione e mantenimento della forza attiva.',
                            'en' => 'Stabilization and maintenance of active force.',
                            'la' => 'Stabilizatio et sustentatio vis activae.',
                            'he' => 'ייצוב ושימור כוח פעיל'
                        ]
                    ],
                ],

                'choir' => 'angels',
                'archangel' => 'gabriel',
                'element' => 'fire',

                'zodiac_days' => [
                    ['day' => 6, 'month' => 3, 'sign' => 'pisces'],
                    ['day' => 7, 'month' => 3, 'sign' => 'pisces'],
                    ['day' => 8, 'month' => 3, 'sign' => 'pisces'],
                    ['day' => 9, 'month' => 3, 'sign' => 'pisces'],
                    ['day' => 10, 'month' => 3, 'sign' => 'pisces'],
                ],

                // Gradi
                // 'degree_start' => 0,
                // 'degree_end' => 5,
                'orientation' => 'EST',

                // Salmo
                'psalm' => 28,
                'psalm_verse' => 7,
                'vulgata' => 27,
                'vulgata_verse' => 7,
                'psalm_link' => '/salmi/28',

                // Trigramma
                // 'trigram_sum' => 25,
                // 'trigram_reduction' => 7,
                // Contenuti
                'quality' => [
                    'it' => 'Forza protettiva e resistenza nelle prove.',
                    'en' => 'Protective strength and endurance in trials.',
                    'la' => 'Vis protectrix et constantia in probationibus.',
                    'he' => 'כוח מגן ועמידה בניסיון'
                ],
                'help' => [
                    'it' => 'Sostiene il consolidamento della forza interiore.',
                    'en' => 'Supports consolidation of inner strength.',
                    'la' => 'Consolidationem virium interiorum sustinet.',
                    'he' => 'תומך בחיזוק כוח פנימי'
                ],
                'prevent' => [
                    'it' => 'Previene dispersione della forza e instabilità interiore.',
                    'en' => 'Prevents dispersion of strength and inner instability.',
                    'la' => 'Dispersionem virium et instabilitatem impedit.',
                    'he' => 'מונע פיזור כוח וחוסר יציבות פנימית'
                ],
            ],

            [
                'number' => 72,
                'name' => 'Mevamyah (Me-Va-M yah)',
                'kabal_name' => 'Mumiah',

                // Mem = processo / maturazione
                // Vav = connessione / passaggio
                // Mem = compimento / nuovo ciclo
                'trigram' => "Mem Vav Mem",
                'trigram_significate' => "maturazione passaggio compimento",

                'definition' => [
                    'it' => 'MVM - Dio che conduce maturazione, passaggio e compimento',
                    'en' => 'MVM - God who leads maturation, transition and completion',
                    'la' => 'MVM - Deus qui maturationem, transitum et consummationem ducit',
                    'he' => 'MVM - האל המוביל להבשלה, מעבר והשלמה',
                ],

                'new_definition' => [
                    'it' => 'MVM - Dio che conduce al compimento e al rinnovamento',
                    'en' => 'MVM - God who leads to completion and renewal',
                    'la' => 'MVM - Deus qui ad consummationem et renovationem ducit',
                    'he' => 'MVM - האל המוביל לשלמות ולהתחדשות',
                ],

                'hebrew_letters' => 'מומ',
                'hebrew_name' => 'מומאל',

                'letter_details' => [
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => [
                            'it' => 'Processo di maturazione e sviluppo interiore.',
                            'en' => 'Process of maturation and inner development.',
                            'la' => 'Processus maturationis et evolutionis interioris.',
                            'he' => 'תהליך הבשלה והתפתחות פנימית'
                        ]
                    ],
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => [
                            'it' => 'Connessione e passaggio tra stati.',
                            'en' => 'Connection and transition between states.',
                            'la' => 'Connexio et transitus inter status.',
                            'he' => 'חיבור ומעבר בין מצבים'
                        ]
                    ],
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => [
                            'it' => 'Compimento del ciclo e preparazione al nuovo inizio.',
                            'en' => 'Completion of the cycle and preparation for a new beginning.',
                            'la' => 'Consummatio cycli et praeparatio ad novum initium.',
                            'he' => 'השלמת מחזור והכנה להתחלה חדשה'
                        ]
                    ],
                ],

                'choir' => 'angels',
                'archangel' => 'gabriel',
                'element' => 'fire',

                'zodiac_days' => [
                    ['day' => 11, 'month' => 3, 'sign' => 'pisces'],
                    ['day' => 12, 'month' => 3, 'sign' => 'pisces'],
                    ['day' => 13, 'month' => 3, 'sign' => 'pisces'],
                    ['day' => 14, 'month' => 3, 'sign' => 'pisces'],
                    ['day' => 15, 'month' => 3, 'sign' => 'pisces'],
                ],

                // Gradi
                // 'degree_start' => 5,
                // 'degree_end' => 10,
                'orientation' => 'EST',

                // Salmo
                'psalm' => 116,
                'psalm_verse' => 7,
                'vulgata' => 114,
                'vulgata_verse' => 7,
                'psalm_link' => '/salmi/116',

                // Trigramma
                // 'trigram_sum' => 86,
                // 'trigram_reduction' => 14,
                // Contenuti
                'quality' => [
                    'it' => 'Compimento dei cicli e transizione verso una nuova fase.',
                    'en' => 'Completion of cycles and transition toward a new phase.',
                    'la' => 'Consummatio cyclorum et transitus ad novam condicionem.',
                    'he' => 'השלמת מחזורים ומעבר לשלב חדש'
                ],
                'help' => [
                    'it' => 'Aiuta a portare a termine e a iniziare nuovamente con ordine.',
                    'en' => 'Helps to complete and begin again with order.',
                    'la' => 'Adiuvat ad consummandum et iterum ordinatim incipere.',
                    'he' => 'מסייע לסיים ולהתחיל מחדש בסדר'
                ],
                'prevent' => [
                    'it' => 'Previene incompiutezza e blocco nei passaggi.',
                    'en' => 'Prevents incompleteness and blockage in transitions.',
                    'la' => 'Incompletionem et obstructionem in transitu impedit.',
                    'he' => 'מונע חוסר השלמה וחסימה במעברים'
                ],
            ],

            /** I GIORNI DEL BUIO */
            [
                'number' => 73,
                'name' => 'Sandalphon (Sa-N-D-Al-Phon)',
                'kabal_name' => 'Sandalphon',

                // Samekh = contenitore / ciclo completo
                // Nun = continuità / fedeltà eterna
                // Dalet = apertura / passaggio al nuovo
                'trigram' => "Samekh Nun Dalet",
                'trigram_significate' => "contenimento continuità transizione",

                'definition' => [
                    'it' => 'SND - Dio che custodisce il passaggio finale del ciclo',
                    'en' => 'SND - God who guards the final passage of the cycle',
                    'la' => 'SND - Deus qui transitum finalem cycli custodit',
                    'he' => 'SND - האל ששומר על המעבר הסופי של המחזור',
                ],

                'new_definition' => [
                    'it' => 'Dio completa il ciclo e apre il nuovo inizio',
                    'en' => 'God completes the cycle and opens the new beginning',
                    'la' => 'Deus cyclum completat et novum initium aperit',
                    'he' => 'האל משלים את המחזור ופותח התחלה חדשה',
                ],

                'hebrew_letters' => 'סנד',
                'hebrew_name' => 'סנדלפון',

                'letter_details' => [
                    [
                        'letter' => 'ס',
                        'name' => 'Samekh',
                        'value' => 60,
                        'meaning' => [
                            'it' => 'Contenitore ciclico e protezione del completamento.',
                            'en' => 'Cyclic container and protection of completion.',
                            'la' => 'Continens cyclicus et protectio consummationis.',
                            'he' => 'כלי מחזורי והגנה על השלמה'
                        ]
                    ],
                    [
                        'letter' => 'נ',
                        'name' => 'Nun',
                        'value' => 50,
                        'meaning' => [
                            'it' => 'Continuità eterna oltre il ciclo.',
                            'en' => 'Eternal continuity beyond the cycle.',
                            'la' => 'Continuitas aeterna ultra cyclum.',
                            'he' => 'המשכיות נצחית מעבר למחזור'
                        ]
                    ],
                    [
                        'letter' => 'ד',
                        'name' => 'Dalet',
                        'value' => 4,
                        'meaning' => [
                            'it' => 'Apertura verso il nuovo ciclo attraverso umiltà.',
                            'en' => 'Opening to new cycle through humility.',
                            'la' => 'Apertura ad novum cyclum per humilitatem.',
                            'he' => 'פתיחה למחזור חדש דרך ענווה'
                        ]
                    ],
                ],

                'choir' => 'cherubim',
                'archangel' => 'metatron',
                'element' => 'ether',

                'zodiac_days' => [
                    ['day' => 16, 'month' => 3, 'sign' => 'pisci'],
                ],

                'orientation' => 'EST',

                // Salmo transizione cicli
                'psalm' => 91,
                'psalm_verse' => 11,
                'vulgata' => 90,
                'vulgata_verse' => 11,
                'psalm_link' => '/salmi/91',

                'quality' => [
                    'it' => 'Custodia del completamento e transizione ordinata.',
                    'en' => 'Guardianship of completion and ordered transition.',
                    'la' => 'Custodia consummationis et transitus ordinati.',
                    'he' => 'שמירה על השלמה ומעבר מסודר'
                ],
                'help' => [
                    'it' => 'Aiuta a chiudere cicli e aprire nuovi inizi con protezione.',
                    'en' => 'Helps close cycles and open new beginnings with protection.',
                    'la' => 'Cyclos claudere et nova initia protectione aperire iuvat.',
                    'he' => 'מסייע לסגור מחזורים ולפתוח התחלות חדשות בהגנה'
                ],
                'prevent' => [
                    'it' => 'Previene traumi di passaggio e incompiutezze.',
                    'en' => 'Prevents transition traumas and incompletenesses.',
                    'la' => 'Traumata transitionis et incomplete impedita.',
                    'he' => 'מונע טראומות מעבר וחוסר השלמות'
                ],
            ],

            [
                'number' => 74,
                'name' => 'Azrael (A-Z-Ra-El)',
                'kabal_name' => 'Azrael',

                // Aleph = unità primordiale / ritorno all'Essere
                // Zayin = liberazione / separazione dal ciclo
                // Resh = ritorno alla Sorgente
                'trigram' => "Aleph Zayin Resh",
                'trigram_significate' => "unità liberazione ritorno",

                'definition' => [
                    'it' => 'AZR - Dio che libera e riporta all\'unità originaria',
                    'en' => 'AZR - God who frees and returns to original unity',
                    'la' => 'AZR - Deus qui liberat et ad unitatem originariam reducit',
                    'he' => 'AZR - האל המשחרר והמחזיר לאחדות המקורית',
                ],

                'new_definition' => [
                    'it' => 'Dio dissolve le forme per il ritorno all\'Essere',
                    'en' => 'God dissolves forms for return to Being',
                    'la' => 'Deus formas dissolvit pro reditu ad Esse',
                    'he' => 'האל מפרק צורות לחזרה אל ההוויה',
                ],

                'hebrew_letters' => 'אזר',
                'hebrew_name' => 'עזראאל',

                'letter_details' => [
                    [
                        'letter' => 'א',
                        'name' => 'Aleph',
                        'value' => 1,
                        'meaning' => [
                            'it' => 'Unità primordiale oltre ogni forma.',
                            'en' => 'Primordial unity beyond all form.',
                            'la' => 'Unitas primordialis ultra omnem formam.',
                            'he' => 'אחדות ראשונית מעבר לכל צורה'
                        ]
                    ],
                    [
                        'letter' => 'ז',
                        'name' => 'Zayin',
                        'value' => 7,
                        'meaning' => [
                            'it' => 'Separazione e liberazione dalle limitazioni.',
                            'en' => 'Separation and liberation from limitations.',
                            'la' => 'Separatio et liberatio a limitationibus.',
                            'he' => 'הפרדה ושחרור מגבלות'
                        ]
                    ],
                    [
                        'letter' => 'ר',
                        'name' => 'Resh',
                        'value' => 200,
                        'meaning' => [
                            'it' => 'Ritorno alla Sorgente e ricongiungimento.',
                            'en' => 'Return to Source and reunification.',
                            'la' => 'Reditus ad Fontem et reunificatio.',
                            'he' => 'חזרה למקור והתאחדות'
                        ]
                    ],
                ],

                'choir' => 'thrones',
                'archangel' => 'tzaphkiel',
                'element' => 'ether',

                'zodiac_days' => [
                    ['day' => 17, 'month' => 3, 'sign' => 'pisces'],
                ],

                'orientation' => 'EST',

                // Salmo liberazione e ritorno
                'psalm' => 23,
                'psalm_verse' => 4,
                'vulgata' => 22,
                'vulgata_verse' => 4,
                'psalm_link' => '/salmi/23',

                'quality' => [
                    'it' => 'Liberazione dalle forme e ritorno all\'Essere.',
                    'en' => 'Liberation from forms and return to Being.',
                    'la' => 'Liberatio a formis et reditus ad Esse.',
                    'he' => 'שחרור מצורות וחזרה להוויה'
                ],
                'help' => [
                    'it' => 'Aiuta il passaggio attraverso la valle dell\'ombra.',
                    'en' => 'Helps passage through the valley of shadow.',
                    'la' => 'Transitum per vallem umbrae adiuvat.',
                    'he' => 'מסייע במעבר בעמק הצל'
                ],
                'prevent' => [
                    'it' => 'Previene attaccamento alle forme transitorie.',
                    'en' => 'Prevents attachment to transient forms.',
                    'la' => 'Affixionem ad formas transitorias impedit.',
                    'he' => 'מונע התקשרות לצורות חולפות'
                ],
            ],

            [
                'number' => 75,
                'name' => 'Raguel (Ra-Gu-El)',
                'kabal_name' => 'Raguel',

                // Resh = giustizia / ordine finale
                // Gimel = ricompensa / movimento verso equilibrio
                // Vav = connessione / armonia restaurata
                'trigram' => "Resh Gimel Vav",
                'trigram_significate' => "giustizia ricompensa armonia",

                'definition' => [
                    'it' => 'RGV - Dio che ristabilisce giustizia e armonia',
                    'en' => 'RGV - God who restores justice and harmony',
                    'la' => 'RGV - Deus qui iustitiam et harmoniam restaurat',
                    'he' => 'RGV - האל המשיב צדק והרמוניה',
                ],

                'new_definition' => [
                    'it' => 'Dio bilancia il ciclo con giustizia misericordiosa',
                    'en' => 'God balances the cycle with merciful justice',
                    'la' => 'Deus cyclum misericordiosa iustitia aequat',
                    'he' => 'האל מאזן את המחזור בצדק רחום',
                ],

                'hebrew_letters' => 'רגו',
                'hebrew_name' => 'רגואל',

                'letter_details' => [
                    [
                        'letter' => 'ר',
                        'name' => 'Resh',
                        'value' => 200,
                        'meaning' => [
                            'it' => 'Giustizia divina e ordine cosmico restaurato.',
                            'en' => 'Divine justice and restored cosmic order.',
                            'la' => 'Iustitia divina et ordo cosmicus restauratus.',
                            'he' => 'צדק אלוהי וסדר קוסמי משוחזר'
                        ]
                    ],
                    [
                        'letter' => 'ג',
                        'name' => 'Gimel',
                        'value' => 3,
                        'meaning' => [
                            'it' => 'Ricompensa e movimento verso l\'equilibrio.',
                            'en' => 'Reward and movement toward equilibrium.',
                            'la' => 'Praemium et motus ad aequilibrium.',
                            'he' => 'שכר ותנועה לאיזון'
                        ]
                    ],
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => [
                            'it' => 'Armonia restaurata e connessione divina.',
                            'en' => 'Restored harmony and divine connection.',
                            'la' => 'Harmonia restaurata et connexio divina.',
                            'he' => 'הרמוניה משוחזרת וחיבור אלוהי'
                        ]
                    ],
                ],

                'choir' => 'thrones',
                'archangel' => 'tzaphkiel',
                'element' => 'ether',

                'zodiac_days' => [
                    ['day' => 18, 'month' => 3, 'sign' => 'pisces'],
                ],

                'orientation' => 'EST',

                // Salmo del Giudice giusto
                'psalm' => 98,
                'psalm_verse' => 9,
                'vulgata' => 97,
                'vulgata_verse' => 9,
                'psalm_link' => '/salmi/98',

                'quality' => [
                    'it' => 'Giustizia misericordiosa e armonia restaurata.',
                    'en' => 'Merciful justice and restored harmony.',
                    'la' => 'Iustitia misericors et harmonia restaurata.',
                    'he' => 'צדק רחום והרמוניה משוחזרת'
                ],
                'help' => [
                    'it' => 'Ristabilisce equilibrio e giustizia al termine del ciclo.',
                    'en' => 'Restores balance and justice at cycle\'s end.',
                    'la' => 'Aequilibrium et iustitiam in fine cycli restaurat.',
                    'he' => 'משיב איזון וצדק בסוף המחזור'
                ],
                'prevent' => [
                    'it' => 'Previene ingiustizie irrisolte e squilibri.',
                    'en' => 'Prevents unresolved injustices and imbalances.',
                    'la' => 'Iniustitias non solutas et inaequalitates impedit.',
                    'he' => 'מונע עוולות לא פתורות וחוסר איזון'
                ],
            ],

            [
                'number' => 76,
                'name' => 'Remiel (Re-Mi-El)',
                'kabal_name' => 'Remiel',

                // Resh = risveglio / rinascita
                // Mem = speranza / profondità misericordiosa
                // Aleph = unità / ritorno alla Sorgente
                'trigram' => "Resh Mem Aleph",
                'trigram_significate' => "risveglio speranza unità",

                'definition' => [
                    'it' => 'RMA - Dio che risveglia la speranza nell\'unità',
                    'en' => 'RMA - God who awakens hope in unity',
                    'la' => 'RMA - Deus qui spem in unitate suscitat',
                    'he' => 'RMA - האל המעורר תקווה באחדות',
                ],

                'new_definition' => [
                    'it' => 'Dio accende la speranza per il nuovo inizio',
                    'en' => 'God ignites hope for the new beginning',
                    'la' => 'Deus spem pro novo initio accendit',
                    'he' => 'האל מצית תקווה להתחלה חדשה',
                ],

                'hebrew_letters' => 'רמא',
                'hebrew_name' => 'רמיאל',

                'letter_details' => [
                    [
                        'letter' => 'ר',
                        'name' => 'Resh',
                        'value' => 200,
                        'meaning' => [
                            'it' => 'Risveglio spirituale e rinascita del ciclo.',
                            'en' => 'Spiritual awakening and cycle rebirth.',
                            'la' => 'Evigilatio spiritualis et renascentia cycli.',
                            'he' => 'התעוררות רוחנית ולידת מחזור'
                        ]
                    ],
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => [
                            'it' => 'Speranza profonda e misericordia rigeneratrice.',
                            'en' => 'Deep hope and regenerative mercy.',
                            'la' => 'Spes profunda et misericordia regeneratrix.',
                            'he' => 'תקווה עמוקה ורחמים מחדשים'
                        ]
                    ],
                    [
                        'letter' => 'א',
                        'name' => 'Aleph',
                        'value' => 1,
                        'meaning' => [
                            'it' => 'Unità originaria e ritorno alla Sorgente.',
                            'en' => 'Original unity and return to Source.',
                            'la' => 'Unitas originalis et reditus ad Fontem.',
                            'he' => 'אחדות מקורית וחזרה למקור'
                        ]
                    ],
                ],

                'choir' => 'thrones',
                'archangel' => 'tzaphkiel',
                'element' => 'ether',

                'zodiac_days' => [
                    ['day' => 19, 'month' => 3, 'sign' => 'pisces'],
                ],

                'orientation' => 'EST',

                // Salmo della speranza nel passaggio
                'psalm' => 130,
                'psalm_verse' => 5,
                'vulgata' => 129,
                'vulgata_verse' => 5,
                'psalm_link' => '/salmi/130',

                'quality' => [
                    'it' => 'Speranza risvegliata e unità restaurata.',
                    'en' => 'Awakened hope and restored unity.',
                    'la' => 'Spes suscitata et unitas restaurata.',
                    'he' => 'תקווה מעוררת ואחדות משוחזרת'
                ],
                'help' => [
                    'it' => 'Infiamma la speranza per la rinascita del ciclo.',
                    'en' => 'Ignites hope for cycle rebirth.',
                    'la' => 'Spem pro renascentia cycli inflammat.',
                    'he' => 'מצית תקווה ללידת המחזור'
                ],
                'prevent' => [
                    'it' => 'Previene disperazione e separazione dalla Sorgente.',
                    'en' => 'Prevents despair and separation from Source.',
                    'la' => 'Desperationem et separationem a Fonte impedit.',
                    'he' => 'מונע ייאוש והתרחקות מהמקור'
                ],
            ],

            [
                'number' => 77,
                'name' => 'Zadkael (Za-D-Ka-el)',
                'kabal_name' => 'Zadkiel',
            
                // Zayin = liberazione / misericordia trasformatrice
                // Dalet = struttura / porta del perdono
                // Kaph = potenza / mano divina misericordiosa
                'trigram' => "Zayin Dalet Kaph",
                'trigram_significate' => "liberazione perdono potenza",
            
                'definition' => [
                    'it' => 'ZDK - Dio che libera con misericordia potente',
                    'en' => 'ZDK - God who frees with powerful mercy',
                    'la' => 'ZDK - Deus qui misericordia potenti liberat',
                    'he' => 'ZDK - האל המשחרר ברחמים עוצמתיים',
                ],
            
                'new_definition' => [
                    'it' => 'Dio trasmuta il karma con misericordia divina',
                    'en' => 'God transmutes karma with divine mercy',
                    'la' => 'Deus karman misericordia divina transmutat',
                    'he' => 'האל מטמיע קארמה ברחמים אלוהיים',
                ],
            
                'hebrew_letters' => 'זדק',
                'hebrew_name' => 'צדקיאל',
            
                'letter_details' => [
                    [
                        'letter' => 'ז',
                        'name' => 'Zayin',
                        'value' => 7,
                        'meaning' => [
                            'it' => 'Liberazione attraverso la misericordia trasformatrice.',
                            'en' => 'Liberation through transformative mercy.',
                            'la' => 'Liberatio per misericordiam transformatricem.',
                            'he' => 'שחרור דרך רחמים מטמיעים'
                        ]
                    ],
                    [
                        'letter' => 'ד',
                        'name' => 'Dalet',
                        'value' => 4,
                        'meaning' => [
                            'it' => 'Porta del perdono e passaggio alla grazia.',
                            'en' => 'Gate of forgiveness and passage to grace.',
                            'la' => 'Ianua remissionis et transitus ad gratiam.',
                            'he' => 'שער הסליחה ומעבר לחסד'
                        ]
                    ],
                    [
                        'letter' => 'ק',
                        'name' => 'Kaph',
                        'value' => 20,
                        'meaning' => [
                            'it' => 'Potenza divina della mano misericordiosa.',
                            'en' => 'Divine power of the merciful hand.',
                            'la' => 'Potentia divina manus misericordis.',
                            'he' => 'עוצמה אלוהית של יד רחומה'
                        ]
                    ],
                ],
            
                'choir' => 'dominions',
                'archangel' => 'zadkiel',
                'element' => 'ether',
            
                'zodiac_days' => [
                    ['day' => 20, 'month' => 3, 'sign' => 'pisces'],
                ],
            
                'orientation' => 'EST',
            
                // Salmo misericordia infinita
                'psalm' => 103,
                'psalm_verse' => 8,
                'vulgata' => 102,
                'vulgata_verse' => 8,
                'psalm_link' => '/salmi/103',
            
                'quality' => [
                    'it' => 'Trasmutazione misericordiosa e liberazione potente.',
                    'en' => 'Merciful transmutation and powerful liberation.',
                    'la' => 'Transmutatio misericors et liberatio potens.',
                    'he' => 'הטמעה רחומה ושחרור עוצמתי'
                ],
                'help' => [
                    'it' => 'Purifica karma e apre alla grazia del nuovo ciclo.',
                    'en' => 'Purifies karma and opens to new cycle grace.',
                    'la' => 'Karma purificat et ad novi cycli gratiam aperit.',
                    'he' => 'מטהר קארמה ופותח לחסד המחזור החדש'
                ],
                'prevent' => [
                    'it' => 'Previene catene karmiche e blocchi energetici.',
                    'en' => 'Prevents karmic chains and energy blocks.',
                    'la' => 'Catenas karmicas et obstructiones energeticas impedit.',
                    'he' => 'מונע שרשראות קארמה וחסימות אנרגטיות'
                ],
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
