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
                'number' => 1,
                'name' => 'Vehuiah',

                'definition' => [
                    'it' => 'WHW - Dio che Esalta',
                    'en' => 'WHW - God who Exalts',
                    'la' => 'WHW - Deus Exaltans',
                    'he' => 'WHW - אלוהים מרומם',
                ],

                'hebrew_letters' => 'והו',
                'hebrew_name' => 'והויה',

                'letter_details' => [
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => [
                            'it' => 'Verticalità, connessione, unione, collegamento tra livelli. È il raggio che scende dal divino',
                            'en' => 'Verticality, connection, union, linkage between levels. It is the ray descending from the divine',
                            'la' => 'Verticalitas, connexio, unio inter gradus. Radius a divino descendens',
                            'he' => 'אנכיות, חיבור ואיחוד בין מדרגות. הקרן היורדת מן האלוהי'
                        ]
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'Hei',
                        'value' => 5,
                        'meaning' => [
                            'it' => 'Contenitore, rivelazione, apertura, soffio vitale. La capacità di ricevere quel raggio',
                            'en' => 'Container, revelation, openness, vital breath. The capacity to receive that ray',
                            'la' => 'Vas, revelatio, apertio, spiritus vitalis. Facultas recipiendi radium',
                            'he' => 'כלי, התגלות ופתיחה. היכולת לקבל את הקרן'
                        ]
                    ],
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => [
                            'it' => 'Ancoraggio, canalizzazione, continuità, manifestazione. Portare il raggio a terra',
                            'en' => 'Anchoring, channeling, continuity, manifestation. Bringing the ray to earth',
                            'la' => 'Firmatio, canalizatio, continuatio, manifestatio. Radium ad terram deferre',
                            'he' => 'עיגון ותיעול. הבאת הקרן אל הארץ'
                        ]
                    ],
                ],

                'choir' => 'seraphim',
                'archangel' => 'metatron',
                'element' => 'fire',

                'zodiac_days' => [
                    ['day' => 21, 'month' => 3, 'sign' => 'aries'],
                    ['day' => 22, 'month' => 3, 'sign' => 'aries'],
                    ['day' => 23, 'month' => 3, 'sign' => 'aries'],
                    ['day' => 24, 'month' => 3, 'sign' => 'aries'],
                    ['day' => 25, 'month' => 3, 'sign' => 'aries'],
                ],

                // Orientamento
                'orientation' => 'EST',

                // Salmo
                'psalm' => 3,
                'psalm_verse' => 3,
                'vulgata' => 3,
                'vulgata_verse' => 4,
                'psalm_link' => '/salmi/3',

                // Contenuti
                'quality' => [
                    'it' => 'Volontà potente, energia creativa primordiale, spirito di iniziativa.',
                    'en' => 'Powerful will, primordial creative energy, initiative.',
                    'la' => 'Voluntas potens, energia creatrix primordialis.',
                    'he' => 'רצון חזק ואנרגיה יצירתית ראשונית'
                ],
                'help' => [
                    'it' => 'Dona volontà ferrea e coraggio.',
                    'en' => 'Grants strong will and courage.',
                    'la' => 'Voluntatem firmam et fortitudinem donat.',
                    'he' => 'מעניק רצון חזק ואומץ'
                ],
                'prevent' => [
                    'it' => 'Previene apatia e impulsività distruttiva.',
                    'en' => 'Prevents apathy and destructive impulsiveness.',
                    'la' => 'Apatheiam et impulsivitatem destruentem impedit.',
                    'he' => 'מונע אדישות ואימפולסיביות הרסנית'
                ],
            ],

            [
                'number' => 2,
                'name' => "Yeli'el",

                'definition' => [
                    'it' => 'YLY - Dio che Aiuta',
                    'en' => 'YLY - Helping God',
                    'la' => 'YLY - Deus Auxiliator',
                    'he' => 'YLY - אלוהים מסייע',
                ],

                'hebrew_letters' => 'ילי',
                'hebrew_name' => 'יליאל',

                'letter_details' => [
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Scintilla divina originaria, seme dell’azione e dell’esistenza che da un punto minimo racchiude la direzione dell’intero sviluppo.',
                            'en' => 'Primordial divine spark, seed of action and existence that from a minimal point contains the direction of the whole unfolding.',
                            'la' => 'Scintilla divina primordialis, semen actionis et existentiae quod ex minimo puncto totius evolutionis directionem continet.',
                            'he' => 'ניצוץ אלוהי ראשוני, זרע הפעולה והקיום שמנקודה זעירה מכיל את כיוון ההתפתחות כולה'
                        ]
                    ],
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => [
                            'it' => 'Elevazione verso l’alto, tensione dell’anima all’apprendimento e alla rettitudine. Movimento di crescita e insegnamento.',
                            'en' => 'Upward elevation, tension of the soul toward learning and righteousness. Movement of growth and teaching.',
                            'la' => 'Elevatio sursum, intentio animae ad doctrinam et rectitudinem. Motus incrementi et disciplinae.',
                            'he' => 'התעלות כלפי מעלה, שאיפת הנפש ללימוד ולצדק'
                        ]
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Ritorno al principio, rinnovamento del seme originario e consolidamento dell’intenzione attraverso amore e consapevolezza.',
                            'en' => 'Return to the origin, renewal of the primordial seed and consolidation of intention through love and awareness.',
                            'la' => 'Redditus ad principium, renovatio seminis primordialis et confirmatio intentionis per amorem.',
                            'he' => 'חזרה למקור, חידוש הזרע הראשוני וחיזוק הכוונה דרך אהבה ותודעה'
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

                'orientation' => 'EST',

                // Salmo
                'psalm' => 22,
                'psalm_verse' => 20,
                'vulgata' => 21,
                'vulgata_verse' => 21,
                'psalm_link' => '/salmi/22',

                // Contenuti
                'quality' => [
                    'it' => 'Amore universale, armonia, capacità di conciliare gli opposti e costruire unità.',
                    'en' => 'Universal love, harmony and the ability to reconcile opposites and build unity.',
                    'la' => 'Amor universalis, harmonia et conciliatio contrariorum.',
                    'he' => 'אהבה אוניברסלית, הרמוניה ויכולת לאחד ניגודים'
                ],
                'help' => [
                    'it' => 'Favorisce pace nelle relazioni, fedeltà, lucidità mentale e giustizia nelle decisioni.',
                    'en' => 'Promotes peace in relationships, fidelity, mental clarity and justice in decisions.',
                    'la' => 'Pacem in relationibus, fidelitatem et iustitiam in decisionibus fovet.',
                    'he' => 'מעודד שלום ביחסים, נאמנות ובהירות מחשבתית'
                ],
                'prevent' => [
                    'it' => 'Previene conflitti affettivi, egoismo e squilibrio nelle relazioni.',
                    'en' => 'Prevents emotional conflicts, selfishness and relational imbalance.',
                    'la' => 'Conflictus affectivos et inaequalitatem impedit.',
                    'he' => 'מונע קונפליקטים רגשיים וחוסר איזון ביחסים'
                ],
            ],

            [
                'number' => 3,
                'name' => 'Sitael',

                'definition' => [
                    'it' => 'SIT - Dio speranza di tutte le creature',
                    'en' => 'SIT - God, hope of all creatures',
                    'la' => 'SIT - Deus spes omnium creaturarum',
                    'he' => 'SIT - אלוהים תקוות כל הברואים',
                ],

                'hebrew_letters' => 'סיט',
                'hebrew_name' => 'סיטאל',

                'letter_details' => [
                    [
                        'letter' => 'ס',
                        'name' => 'Samekh',
                        'value' => 60,
                        'meaning' => [
                            'it' => 'Sostegno circolare, protezione che avvolge e mantiene in equilibrio. Energia che sorregge e preserva.',
                            'en' => 'Circular support, enclosing protection that maintains balance. Energy that upholds and preserves.',
                            'la' => 'Sustentatio circularis, tutela circumdans et aequilibrium servans.',
                            'he' => 'תמיכה מעגלית והגנה מקיפה השומרת על איזון'
                        ]
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Scintilla originaria dell’intenzione, punto essenziale da cui nasce l’azione consapevole.',
                            'en' => 'Primordial spark of intention, essential point from which conscious action emerges.',
                            'la' => 'Scintilla primordialis intentionis, punctum essentiale unde actio conscia oritur.',
                            'he' => 'ניצוץ ראשוני של כוונה, נקודה שממנה נולדת פעולה מודעת'
                        ]
                    ],
                    [
                        'letter' => 'ט',
                        'name' => 'Teth',
                        'value' => 9,
                        'meaning' => [
                            'it' => 'Bene custodito, potenziale nascosto che matura interiormente prima di manifestarsi.',
                            'en' => 'Guarded goodness, hidden potential that matures inwardly before manifestation.',
                            'la' => 'Bonum custoditum, potentia occulta quae interius maturatur ante manifestationem.',
                            'he' => 'טוב שמור, פוטנציאל נסתר המתפתח בפנים לפני הופעתו'
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
                'psalm' => 91,
                'psalm_verse' => 2,
                'vulgata' => 90,
                'vulgata_verse' => 2,
                'psalm_link' => '/salmi/91',

                // Contenuti
                'quality' => [
                    'it' => 'Stabilità strutturale fondata su protezione, intenzione consapevole e maturazione interiore del bene.',
                    'en' => 'Structural stability founded on protection, conscious intention and inner maturation of goodness.',
                    'la' => 'Stabilitas structurae fundata in tutela, intentione conscia et maturatione interiori boni.',
                    'he' => 'יציבות מבנית הנשענת על הגנה, כוונה מודעת והבשלה פנימית של הטוב'
                ],
                'help' => [
                    'it' => 'Rafforza nelle prove, protegge da crolli improvvisi e consolida la fiducia nel proprio percorso.',
                    'en' => 'Strengthens during trials, protects from sudden collapse and consolidates trust in one’s path.',
                    'la' => 'In probationibus confirmat, a ruinis repentinis tuetur et fiduciam stabilit.',
                    'he' => 'מחזק בעת ניסיונות, מגן מקריסה פתאומית ומבסס אמון בדרך'
                ],
                'prevent' => [
                    'it' => 'Previene instabilità, autosabotaggio e illusioni che indeboliscono la volontà.',
                    'en' => 'Prevents instability, self-sabotage and illusions that weaken the will.',
                    'la' => 'Instabilitatem et deceptiones voluntatem debilitantes impedit.',
                    'he' => 'מונע חוסר יציבות ואשליות המחלישות את הרצון'
                ],
            ],

            [
                'number' => 4,
                'name' => 'Elemiah',

                'definition' => [
                    'it' => 'ALM - Dio Misterioso e Celato',
                    'en' => 'ALM - The Mysterious and Hidden God',
                    'la' => 'ALM - Deus Absconditus',
                    'he' => 'ALM - אל נסתר ומסתורי',
                ],

                'hebrew_letters' => 'עלם',
                'hebrew_name' => 'עילמיה',

                'letter_details' => [
                    [
                        'letter' => 'ע',
                        'name' => 'Ayin',
                        'value' => 70,
                        'meaning' => [
                            'it' => 'Visione profonda e percezione interiore che porta alla consapevolezza.',
                            'en' => 'Deep vision and inner perception leading to awareness.',
                            'la' => 'Visio profunda et perceptio interior ad conscientiam ducens.',
                            'he' => 'ראייה עמוקה ותפיסה פנימית המביאה למודעות'
                        ]
                    ],
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => [
                            'it' => 'Elevazione attraverso l’apprendimento e orientamento verso la rettitudine.',
                            'en' => 'Elevation through learning and orientation toward righteousness.',
                            'la' => 'Elevatio per doctrinam et directio ad rectitudinem.',
                            'he' => 'התעלות דרך לימוד והכוונה לצדק'
                        ]
                    ],
                    [
                        'letter' => 'ם',
                        'name' => 'Mem finale',
                        'value' => 40,
                        'meaning' => [
                            'it' => 'Maturazione e compimento di un processo interiore giunto alla trasformazione.',
                            'en' => 'Maturation and completion of an inner process reaching transformation.',
                            'la' => 'Maturatio et consummatio processus interioris ad transformationem pervenientis.',
                            'he' => 'הבשלה והשלמה של תהליך פנימי המביא לשינוי'
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
                'vulgata_verse' => 6,
                'psalm_link' => '/salmi/6',

                // Contenuti
                'quality' => [
                    'it' => 'Capacità di rettifica attraverso consapevolezza, apprendimento e trasformazione interiore.',
                    'en' => 'Capacity for correction through awareness, learning and inner transformation.',
                    'la' => 'Facultas correctionis per conscientiam, doctrinam et transformationem interiorem.',
                    'he' => 'יכולת תיקון דרך מודעות, לימוד ושינוי פנימי'
                ],
                'help' => [
                    'it' => 'Aiuta a riconoscere errori, correggere il cammino e riaprire possibilità dopo una caduta.',
                    'en' => 'Helps recognize mistakes, correct one’s path and reopen possibilities after a fall.',
                    'la' => 'Errores agnoscere et iter corrigere adiuvat.',
                    'he' => 'מסייע לזהות טעויות ולתקן את הדרך'
                ],
                'prevent' => [
                    'it' => 'Previene ostinazione cieca, ripetizione degli errori e dispersione di energia.',
                    'en' => 'Prevents blind stubbornness, repetition of mistakes and dissipation of energy.',
                    'la' => 'Obstinationem caecam et iterationem errorum impedit.',
                    'he' => 'מונע עקשנות עיוורת וחזרה על טעויות'
                ],
            ],

            [
                'number' => 5,
                'name' => 'Mahasiah',

                'definition' => [
                    'it' => 'MHS - Dio che salva e guarisce',
                    'en' => 'MHS - God who saves and heals',
                    'la' => 'MHS - Deus qui salvat et sanat',
                    'he' => 'MHS - אל המושיע והמרפא',
                ],

                'hebrew_letters' => 'מהש',
                'hebrew_name' => 'מהשיה',

                'letter_details' => [
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => [
                            'it' => 'Flusso purificatore e matrice interiore da cui nasce la trasformazione.',
                            'en' => 'Purifying flow and inner matrix from which transformation arises.',
                            'la' => 'Fluxus purificans et matrix interior unde transformati oritur.',
                            'he' => 'זרימה מטהרת ומטריצה פנימית שממנה נולדת השתנות'
                        ]
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => [
                            'it' => 'Apertura e rivelazione che rende visibile ciò che era nascosto.',
                            'en' => 'Opening and revelation that makes visible what was hidden.',
                            'la' => 'Apertio et revelatio quae occultum manifestat.',
                            'he' => 'פתיחה והתגלות המגלות את הנסתר'
                        ]
                    ],
                    [
                        'letter' => 'ש',
                        'name' => 'Shin',
                        'value' => 300,
                        'meaning' => [
                            'it' => 'Fuoco trasformante, energia spirituale che eleva e purifica attraverso l’intensità.',
                            'en' => 'Transforming fire, spiritual energy that elevates and purifies through intensity.',
                            'la' => 'Ignis transformans, energia spiritualis quae elevat et purificat.',
                            'he' => 'אש משנה, אנרגיה רוחנית המעלה ומטהרת'
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
                'psalm_verse' => 7,
                'vulgata' => 33,
                'vulgata_verse' => 8,
                'psalm_link' => '/salmi/34',

                // Contenuti
                'quality' => [
                    'it' => 'Armonizzazione attraverso purificazione, apertura e trasformazione attiva dello spirito.',
                    'en' => 'Harmonization through purification, openness and active spiritual transformation.',
                    'la' => 'Harmonia per purificationem, aperturam et transformationem activam.',
                    'he' => 'הרמוניה דרך טיהור, פתיחות ושינוי רוחני פעיל'
                ],
                'help' => [
                    'it' => 'Favorisce chiarezza interiore, studio profondo e rinnovamento spirituale.',
                    'en' => 'Promotes inner clarity, deep study and spiritual renewal.',
                    'la' => 'Claritatem interiorem et renovationem spiritualem fovet.',
                    'he' => 'מעודד בהירות פנימית והתחדשות רוחנית'
                ],
                'prevent' => [
                    'it' => 'Previene disordine interiore, rigidità mentale e stagnazione spirituale.',
                    'en' => 'Prevents inner disorder, mental rigidity and spiritual stagnation.',
                    'la' => 'Inordinationem interiorem et stagnationem impedit.',
                    'he' => 'מונע בלבול פנימי וקיפאון רוחני'
                ],
            ],

            [
                'number' => 6,
                'name' => 'Lelahel',

                'definition' => [
                    'it' => 'LLH - Dio pieno di lode',
                    'en' => 'LLH - God full of praise',
                    'la' => 'LLH - Deus plenus laudis',
                    'he' => 'LLH - אל מלא תהילה',
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
                            'it' => 'Rafforzamento dell’elevazione, intensificazione della coscienza e della disciplina interiore.',
                            'en' => 'Strengthening of elevation, intensification of awareness and inner discipline.',
                            'la' => 'Confirmatio elevationis et conscientiae interioris.',
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
                'psalm_verse' => 8,
                'vulgata' => 70,
                'vulgata_verse' => 8,
                'psalm_link' => '/salmi/71',

                // Contenuti
                'quality' => [
                    'it' => 'Luce conoscitiva che armonizza intelletto e manifestazione, rendendo visibile il bene.',
                    'en' => 'Illuminating knowledge that harmonizes intellect and manifestation, making goodness visible.',
                    'la' => 'Lux scientiae quae intellectum et manifestationem componit.',
                    'he' => 'אור של ידע המאחד הבנה והתגלות'
                ],

                'help' => [
                    'it' => 'Favorisce chiarezza mentale, espressione autentica e valorizzazione dei talenti.',
                    'en' => 'Promotes mental clarity, authentic expression and recognition of talents.',
                    'la' => 'Claritatem mentis et expressionem authenticam fovet.',
                    'he' => 'מעודד בהירות מחשבתית וביטוי אותנטי'
                ],

                'prevent' => [
                    'it' => 'Previene oscuramento mentale, vanità e uso distorto delle capacità personali.',
                    'en' => 'Prevents mental obscurity, vanity and misuse of personal abilities.',
                    'la' => 'Obscurationem mentis et abusum facultatum impedit.',
                    'he' => 'מונע ערפול מחשבתי ושימוש שגוי בכישרונות'
                ],
            ],

            [
                'number' => 7,
                'name' => 'Achaiah',

                'definition' => [
                    'it' => 'AKA - Dio paziente e benevolo',
                    'en' => 'AKA - Patient and benevolent God',
                    'la' => 'AKA - Deus patiens et benignus',
                    'he' => 'AKA - אל סבלני וטוב',
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
                'psalm' => 103,
                'psalm_verse' => 22,
                'vulgata' => 102,
                'vulgata_verse' => 22,
                'psalm_link' => '/salmi/103',

                // Contenuti
                'quality' => [
                    'it' => 'Stabilità interiore, pazienza costruttiva e capacità di integrare esperienza e principio.',
                    'en' => 'Inner stability, constructive patience and the ability to integrate experience and principle.',
                    'la' => 'Stabilitas interior et patientia constructiva.',
                    'he' => 'יציבות פנימית וסבלנות בונה'
                ],
                'help' => [
                    'it' => 'Favorisce perseveranza, osservazione profonda e comprensione dei cicli naturali.',
                    'en' => 'Promotes perseverance, deep observation and understanding of natural cycles.',
                    'la' => 'Perseverantiam et intelligentiam temporum fovet.',
                    'he' => 'מעודד התמדה והבנת מחזורי החיים'
                ],
                'prevent' => [
                    'it' => 'Previene impulsività, fretta distruttiva e incapacità di apprendere dall’esperienza.',
                    'en' => 'Prevents impulsiveness, destructive haste and failure to learn from experience.',
                    'la' => 'Impulsivitatem et festinationem impedit.',
                    'he' => 'מונע פזיזות וחוסר יכולת ללמוד מהניסיון'
                ],
            ],

            [
                'number' => 8,
                'name' => 'Cahetel',

                'definition' => [
                    'it' => 'KHT - Dio adorato',
                    'en' => 'KHT - Adored God',
                    'la' => 'KHT - Deus adoratus',
                    'he' => 'KHT - אל נערץ',
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
                            'it' => 'Apertura benedicente che permette alla forza di manifestarsi.',
                            'en' => 'Blessing openness that allows force to manifest.',
                            'la' => 'Apertio benedicens quae manifestationem permittit.',
                            'he' => 'פתיחה מברכת המאפשרת התגלות'
                        ]
                    ],
                    [
                        'letter' => 'ת',
                        'name' => 'Tav',
                        'value' => 400,
                        'meaning' => [
                            'it' => 'Sigillo e compimento finale, realizzazione concreta di ciò che è stato avviato.',
                            'en' => 'Seal and final completion, concrete realization of what has begun.',
                            'la' => 'Sigillum et consummatio finalis.',
                            'he' => 'חותם והשלמה סופית של התהליך'
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
                'name' => 'Haziel',

                'definition' => [
                    'it' => 'HZY - Dio di Misericordia',
                    'en' => 'HZY - God of Mercy',
                    'la' => 'HZY - Deus Misericordiae',
                    'he' => 'HZY - אל הרחמים',
                ],

                'hebrew_letters' => 'חזי',
                'hebrew_name' => 'חזיאל',

                'letter_details' => [
                    [
                        'letter' => 'ח',
                        'name' => 'Chet',
                        'value' => 8,
                        'meaning' => [
                            'it' => 'Vita ed energia che sostengono e rinnovano.',
                            'en' => 'Life and sustaining energy.',
                            'la' => 'Vita et energia sustentans.',
                            'he' => 'חיים ואנרגיה מחזקת'
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
                            'it' => 'Misericordia attiva, azione guidata dalla coscienza.',
                            'en' => 'Active mercy, action guided by conscience.',
                            'la' => 'Misericordia activa, actio conscientia directa.',
                            'he' => 'רחמים פעילים, פעולה מתוך מודעות'
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
                'name' => 'Aladiah',

                'definition' => [
                    'it' => 'ALD - Dio propizio e misericordioso',
                    'en' => 'ALD - Propitious and merciful God',
                    'la' => 'ALD - Deus propitius et misericors',
                    'he' => 'ALD - אל רחום וחנון',
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
                            'it' => 'Elevazione attraverso apprendimento e rettitudine.',
                            'en' => 'Elevation through learning and righteousness.',
                            'la' => 'Elevatio per doctrinam et rectitudinem.',
                            'he' => 'התעלות דרך לימוד וצדק'
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
                'psalm' => 33,
                'psalm_verse' => 22,
                'vulgata' => 32,
                'vulgata_verse' => 22,
                'psalm_link' => '/salmi/33',

                // Contenuti
                'quality' => [
                    'it' => 'Rigenerazione e misericordia riparatrice che ristabiliscono ordine e dignità.',
                    'en' => 'Regeneration and restorative mercy that re-establish order and dignity.',
                    'la' => 'Regeneratio et misericordia reparans ordinem restituens.',
                    'he' => 'התחדשות ורחמים משקמים המחזירים סדר וכבוד'
                ],
                'help' => [
                    'it' => 'Sostiene il rialzarsi dopo la caduta, favorendo guarigione morale e rinnovamento interiore.',
                    'en' => 'Supports rising after a fall, fostering moral healing and inner renewal.',
                    'la' => 'Post lapsum erigere et renovationem interiorem fovere.',
                    'he' => 'מסייע לקום לאחר נפילה ולעבור חידוש פנימי'
                ],
                'prevent' => [
                    'it' => 'Previene scoraggiamento profondo, colpa paralizzante e perdita di fiducia.',
                    'en' => 'Prevents deep discouragement, paralyzing guilt and loss of confidence.',
                    'la' => 'Desperationem et culpam impedit.',
                    'he' => 'מונע ייאוש ואשמה משתקת'
                ],
            ],

            [
                'number' => 11,
                'name' => 'Lauviah',

                'definition' => [
                    'it' => 'LAV - Dio da esaltare e lodare',
                    'en' => 'LAV - God to be exalted and praised',
                    'la' => 'LAV - Deus exaltandus et laudandus',
                    'he' => 'LAV - אל שיש לרוממו ולהללו',
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
                            'it' => 'Unità originaria e principio spirituale da cui tutto procede.',
                            'en' => 'Primordial unity and spiritual principle from which all proceeds.',
                            'la' => 'Unitas primordialis et principium spirituale.',
                            'he' => 'אחדות ראשונית ועיקרון רוחני'
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
                'psalm' => 39,
                'psalm_verse' => 14,
                'vulgata' => 38,
                'vulgata_verse' => 14,
                'psalm_link' => '/salmi/39',

                // Contenuti
                'quality' => [
                    'it' => 'Capacità di elevare il pensiero e orientarlo verso il principio superiore.',
                    'en' => 'Ability to elevate thought and direct it toward the higher principle.',
                    'la' => 'Facultas mentem ad principium superius elevandi.',
                    'he' => 'יכולת לרומם את המחשבה אל העיקרון העליון'
                ],
                'help' => [
                    'it' => 'Favorisce chiarezza interiore, comprensione dei messaggi dell’anima e connessione tra intuizione e azione.',
                    'en' => 'Fosters inner clarity, understanding of the soul’s messages and alignment between intuition and action.',
                    'la' => 'Claritatem interiorem et concordiam inter intuitionem et actionem fovet.',
                    'he' => 'מעודד בהירות פנימית וחיבור בין אינטואיציה לפעולה'
                ],
                'prevent' => [
                    'it' => 'Previene dispersione mentale, interpretazioni distorte e perdita di orientamento spirituale.',
                    'en' => 'Prevents mental dispersion, distorted interpretations and spiritual disorientation.',
                    'la' => 'Dispersionem mentis et errorem impedit.',
                    'he' => 'מונע פיזור דעת ואיבוד כיוון רוחני'
                ],
            ],

            [
                'number' => 12,
                'name' => 'Hahaiah',

                'definition' => [
                    'it' => 'HHA - Dio di rifugio e protezione',
                    'en' => 'HHA - God of refuge and protection',
                    'la' => 'HHA - Deus refugii et protectionis',
                    'he' => 'HHA - אל מחסה והגנה',
                ],

                'hebrew_letters' => 'ההע',
                'hebrew_name' => 'ההאיה',

                'letter_details' => [
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => [
                            'it' => 'Apertura e rivelazione della presenza divina, spazio che accoglie il soffio vitale.',
                            'en' => 'Opening and revelation of divine presence, space that receives the vital breath.',
                            'la' => 'Apertio et revelatio praesentiae divinae, spatium spiritum recipiens.',
                            'he' => 'פתיחה והתגלות הנוכחות האלוהית, מרחב המקבל את הרוח'
                        ]
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => [
                            'it' => 'Raddoppio dell’apertura: protezione e custodia attraverso la rivelazione.',
                            'en' => 'Doubling of openness: protection and guardianship through revelation.',
                            'la' => 'Duplicatio aperturae: protectio per revelationem.',
                            'he' => 'כפל הפתיחה: הגנה דרך ההתגלות'
                        ]
                    ],
                    [
                        'letter' => 'ע',
                        'name' => 'Ayin',
                        'value' => 70,
                        'meaning' => [
                            'it' => 'Visione profonda, occhio interiore che vede oltre le apparenze.',
                            'en' => 'Deep vision, inner eye that sees beyond appearances.',
                            'la' => 'Visio profunda et oculus interior.',
                            'he' => 'ראייה עמוקה ועין פנימית'
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
                'psalm' => 9,
                'psalm_verse' => 10,
                'vulgata' => 9,
                'vulgata_verse' => 11,
                'psalm_link' => '/salmi/9',

                // Contenuti
                'quality' => [
                    'it' => 'Rifugio interiore e saggezza che permette di interpretare i sogni e i misteri.',
                    'en' => 'Inner refuge and wisdom that allows for the interpretation of dreams and mysteries.',
                    'la' => 'Refugium interius et sapientia somniorum.',
                    'he' => 'מחסה פנימי וחוכמת פענוח סודות'
                ],
                'help' => [
                    'it' => 'Favorisce la protezione contro le avversità e lo sviluppo delle facoltà spirituali intuitive.',
                    'en' => 'Promotes protection against adversity and the development of intuitive spiritual faculties.',
                    'la' => 'Protectionem contra adversitates et intuitionem fovet.',
                    'he' => 'מעודד הגנה מפני קשיים ופיתוח אינטואיציה'
                ],
                'prevent' => [
                    'it' => 'Previene l’ansia, l’inquietudine e la rivelazione indiscreta di segreti.',
                    'en' => 'Prevents anxiety, restlessness and the indiscreet revelation of secrets.',
                    'la' => 'Anxietatem et proditionem secretorum impedit.',
                    'he' => 'מונע חרדה וחשיפת סודות'
                ],
            ],

            [
                'number' => 13,
                'name' => 'Yezalel',

                'definition' => [
                    'it' => 'YZL - Dio glorificato in ogni cosa',
                    'en' => 'YZL - God glorified in all things',
                    'la' => 'YZL - Deus glorificatus in omnibus',
                    'he' => 'YZL - אל המפואר בכל דבר',
                ],

                'hebrew_letters' => 'יזל',
                'hebrew_name' => 'יזלאל',

                'letter_details' => [
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Scintilla originaria e principio attivo che avvia il legame.',
                            'en' => 'Primordial spark and active principle that initiates connection.',
                            'la' => 'Scintilla primordialis et principium activum.',
                            'he' => 'ניצוץ ראשוני ועיקרון פעיל'
                        ]
                    ],
                    [
                        'letter' => 'ז',
                        'name' => 'Zayin',
                        'value' => 7,
                        'meaning' => [
                            'it' => 'Discernimento che equilibra e armonizza attraverso la prova.',
                            'en' => 'Discernment that balances and harmonizes through trial.',
                            'la' => 'Discretio quae per probationem aequat.',
                            'he' => 'הבחנה המאזנת דרך ניסיון'
                        ]
                    ],
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => [
                            'it' => 'Elevazione e apprendimento che consolidano il legame nel tempo.',
                            'en' => 'Elevation and learning that consolidate bonds over time.',
                            'la' => 'Elevatio et doctrina vinculum firmans.',
                            'he' => 'התעלות ולימוד המחזקים קשר'
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

                // Trigramma
                // 'trigram_sum' => 47,
                // 'trigram_reduction' => 11,
                // Contenuti
                'quality' => [
                    'it' => 'Fedeltà, armonia e capacità di mantenere unioni durature.',
                    'en' => 'Fidelity, harmony and the ability to maintain lasting unions.',
                    'la' => 'Fidelitas et harmonia in vinculis duraturis.',
                    'he' => 'נאמנות והרמוניה בקשרים מתמשכים'
                ],
                'help' => [
                    'it' => 'Favorisce riconciliazione, stabilità affettiva e memoria dei valori condivisi.',
                    'en' => 'Promotes reconciliation, emotional stability and remembrance of shared values.',
                    'la' => 'Reconciliationem et stabilitatem affectivam fovet.',
                    'he' => 'מעודד פיוס ויציבות רגשית'
                ],
                'prevent' => [
                    'it' => 'Previene infedeltà, instabilità relazionale e dispersione dei legami.',
                    'en' => 'Prevents infidelity, relational instability and dispersion of bonds.',
                    'la' => 'Infidelitatem et instabilitatem impedit.',
                    'he' => 'מונע חוסר נאמנות ופיזור קשרים'
                ],
            ],

            [
                'number' => 14,
                'name' => 'Mebahel',

                'definition' => [
                    'it' => 'MBH - Dio protettore e salvatore',
                    'en' => 'MBH - God protector and savior',
                    'la' => 'MBH - Deus protector et salvator',
                    'he' => 'MBH - אל מגן ומושיע',
                ],

                'hebrew_letters' => 'מבה',
                'hebrew_name' => 'מבהאל',

                'letter_details' => [
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => [
                            'it' => 'Flusso purificatore e principio di rinnovamento che lava e rigenera.',
                            'en' => 'Purifying flow and principle of renewal that cleanses and regenerates.',
                            'la' => 'Fluxus purificans et principium renovationis.',
                            'he' => 'זרם מטהר ועיקרון של התחדשות'
                        ]
                    ],
                    [
                        'letter' => 'ב',
                        'name' => 'Bet',
                        'value' => 2,
                        'meaning' => [
                            'it' => 'Casa e struttura, ordine che dà forma e stabilità.',
                            'en' => 'House and structure, order that gives form and stability.',
                            'la' => 'Domus et structura, ordo stabilitatis.',
                            'he' => 'בית ומבנה, סדר ויציבות'
                        ]
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => [
                            'it' => 'Rivelazione della giustizia e manifestazione della verità.',
                            'en' => 'Revelation of justice and manifestation of truth.',
                            'la' => 'Revelatio iustitiae et veritatis.',
                            'he' => 'התגלות הצדק והאמת'
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
                'psalm' => 9,
                'psalm_verse' => 19,
                'vulgata' => 9,
                'vulgata_verse' => 20,
                'psalm_link' => '/salmi/9',

                // Contenuti
                'quality' => [
                    'it' => 'Giustizia attiva, difesa della verità e capacità di ristabilire ordine dopo l’errore.',
                    'en' => 'Active justice, defense of truth and ability to restore order after error.',
                    'la' => 'Iustitia activa et restitutio ordinis.',
                    'he' => 'צדק פעיל והשבת הסדר לאחר טעות'
                ],
                'help' => [
                    'it' => 'Sostiene chi cerca verità e rettitudine, proteggendo dalle ingiustizie e favorendo il risanamento morale.',
                    'en' => 'Supports those who seek truth and righteousness, protecting from injustice and fostering moral restoration.',
                    'la' => 'Veritatem quaerentes protegit et restaurat.',
                    'he' => 'תומך במבקשי אמת ומגן מפני עוול'
                ],
                'prevent' => [
                    'it' => 'Previene menzogna, abuso di potere, corruzione e perdita di integrità.',
                    'en' => 'Prevents falsehood, abuse of power, corruption and loss of integrity.',
                    'la' => 'Mendacium et corruptionem impedit.',
                    'he' => 'מונע שקר, ניצול ושחיתות'
                ],
            ],

            [
                'number' => 15,
                'name' => 'Hariel',

                'definition' => [
                    'it' => 'HRY - Dio Creatore',
                    'en' => 'HRY - Creative God',
                    'la' => 'HRY - Deus Creator',
                    'he' => 'HRY - אל בורא',
                ],

                'hebrew_letters' => 'הרי',
                'hebrew_name' => 'הריאל',

                'letter_details' => [
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => [
                            'it' => 'Apertura e rivelazione dell’essere, spazio attraverso cui la creazione si manifesta.',
                            'en' => 'Opening and revelation of being, space through which creation manifests.',
                            'la' => 'Apertio et revelatio entis per quam creatio manifestatur.',
                            'he' => 'פתיחה והתגלות ההוויה שדרכה הבריאה מתבטאת'
                        ]
                    ],
                    [
                        'letter' => 'ר',
                        'name' => 'Resh',
                        'value' => 200,
                        'meaning' => [
                            'it' => 'Testa e principio del pensiero, capacità di riorientare la mente e iniziare un nuovo ciclo.',
                            'en' => 'Head and principle of thought, capacity to redirect the mind and begin a new cycle.',
                            'la' => 'Caput et principium cogitationis, initium novae directionis.',
                            'he' => 'ראש ועיקר המחשבה, היכולת להתחיל כיוון חדש'
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
                    'it' => 'Favorisce purificazione del pensiero, ispirazione creativa e superamento di errori attraverso consapevolezza.',
                    'en' => 'Fosters purification of thought, creative inspiration and overcoming mistakes through awareness.',
                    'la' => 'Purificationem mentis et inspirationem creativam fovet.',
                    'he' => 'מעודד טיהור מחשבה והשראה יצירתית'
                ],
                'prevent' => [
                    'it' => 'Previene autoinganno, rigidità mentale e ripetizione inconsapevole degli stessi errori.',
                    'en' => 'Prevents self-deception, mental rigidity and unconscious repetition of mistakes.',
                    'la' => 'Auto-deceptionem et rigiditatem mentis impedit.',
                    'he' => 'מונע אשליה עצמית וקיפאון מחשבתי'
                ],
            ],

            [
                'number' => 16,
                'name' => 'Hakamiah',

                'definition' => [
                    'it' => 'HKM - Dio che stabilisce la Sapienza',
                    'en' => 'HKM - God who establishes Wisdom',
                    'la' => 'HKM - Deus sapientiam constituens',
                    'he' => 'HKM - אל המקים חכמה',
                ],

                'hebrew_letters' => 'חקמ',
                'hebrew_name' => 'חקמיה',

                'letter_details' => [
                    [
                        'letter' => 'ח',
                        'name' => 'Chet',
                        'value' => 8,
                        'meaning' => [
                            'it' => 'Vita che supera il limite naturale e introduce alla dimensione interiore profonda.',
                            'en' => 'Life that transcends natural limitation and opens the inner dimension.',
                            'la' => 'Vita limites naturales transcendens et ad dimensionem interiorem ducens.',
                            'he' => 'חיים החורגים מן הגבול הטבעי ופותחים ממד פנימי'
                        ]
                    ],
                    [
                        'letter' => 'ק',
                        'name' => 'Qof',
                        'value' => 100,
                        'meaning' => [
                            'it' => 'Discernimento che distingue tra apparenza e verità, richiamo alla santità e alla rettitudine.',
                            'en' => 'Discernment distinguishing appearance from truth, call to holiness and integrity.',
                            'la' => 'Discretio inter speciem et veritatem, vocatio ad sanctitatem.',
                            'he' => 'הבחנה בין מראה לאמת וקריאה לקדושה'
                        ]
                    ],
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => [
                            'it' => 'Maturazione interiore, flusso di sapienza che si consolida e diventa stabilità.',
                            'en' => 'Inner maturation, flow of wisdom becoming stable structure.',
                            'la' => 'Maturatio interior et fluxus sapientiae stabilitus.',
                            'he' => 'הבשלה פנימית וזרימת חכמה המתייצבת'
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
                'psalm_verse' => 3,
                'vulgata' => 87,
                'vulgata_verse' => 3,
                'psalm_link' => '/salmi/88',

                // Contenuti
                'quality' => [
                    'it' => 'Sapienza stabile, fedeltà ai principi e coerenza morale radicata nella coscienza.',
                    'en' => 'Stable wisdom, fidelity to principles and moral coherence rooted in conscience.',
                    'la' => 'Sapientia stabilis et fidelitas principiis.',
                    'he' => 'חכמה יציבה ונאמנות לעקרונות'
                ],
                'help' => [
                    'it' => 'Sostiene nelle decisioni complesse, rafforzando disciplina interiore e senso dell’onore.',
                    'en' => 'Supports complex decisions by strengthening inner discipline and honor.',
                    'la' => 'In decisionibus difficilibus disciplinam interiorem confirmat.',
                    'he' => 'מחזק משמעת פנימית וכבוד בהחלטות קשות'
                ],
                'prevent' => [
                    'it' => 'Previene incoerenza, tradimento dei valori e smarrimento etico.',
                    'en' => 'Prevents inconsistency, betrayal of values and ethical confusion.',
                    'la' => 'Inconstantiam et confusionem moralem impedit.',
                    'he' => 'מונע חוסר עקביות ובלבול מוסרי'
                ],
            ],

            // Troni
            [
                'number' => 17,
                'name' => 'Lauviah',

                'definition' => [
                    'it' => 'LAV - Dio di grande ammirazione',
                    'en' => 'LAV - God of great admiration',
                    'la' => 'LAV - Deus Admirabilis',
                    'he' => 'LAV - אל נפלא',
                ],

                'hebrew_letters' => 'לאו',
                'hebrew_name' => 'לאויה',

                'letter_details' => [
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => [
                            'it' => 'Tensione dell’anima verso l’alto, apprendimento e slancio verso la conoscenza superiore.',
                            'en' => 'Upward movement of the soul toward higher knowledge.',
                            'la' => 'Elevatio animae ad cognitionem superiorem.',
                            'he' => 'התעלות הנפש לעבר דעת עליונה'
                        ]
                    ],
                    [
                        'letter' => 'א',
                        'name' => 'Aleph',
                        'value' => 1,
                        'meaning' => [
                            'it' => 'Unità originaria, principio silenzioso che precede ogni manifestazione.',
                            'en' => 'Primordial unity, silent principle preceding manifestation.',
                            'la' => 'Unitas primordialis et principium silentii.',
                            'he' => 'אחדות ראשונית ועיקרון שקט'
                        ]
                    ],
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => [
                            'it' => 'Canale di collegamento tra alto e basso, veicolo della rivelazione.',
                            'en' => 'Channel connecting above and below, vehicle of revelation.',
                            'la' => 'Canalis inter superius et inferius.',
                            'he' => 'ערוץ המחבר בין עליון לתחתון'
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
                    'it' => 'Rivelazione attraverso il silenzio e comprensione profonda dei misteri interiori.',
                    'en' => 'Revelation through silence and deep understanding of inner mysteries.',
                    'la' => 'Revelatio per silentium et intellectus interior.',
                    'he' => 'התגלות דרך שתיקה והבנה פנימית עמוקה'
                ],
                'help' => [
                    'it' => 'Favorisce lucidità interiore, intuizione e accesso a una conoscenza superiore.',
                    'en' => 'Promotes inner clarity, intuition and access to higher knowledge.',
                    'la' => 'Claritatem interiorem et intuitionem fovet.',
                    'he' => 'מעודד בהירות פנימית ואינטואיציה'
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
                'name' => 'Caliel',

                'definition' => [
                    'it' => 'KLY - Dio che ascolta e salva',
                    'en' => 'KLY - God who hears and saves',
                    'la' => 'KLY - Deus Exauditor et Salvator',
                    'he' => 'KLY - אל שומע ומושיע',
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
                            'it' => 'Principio attivo che orienta l’azione secondo verità e coscienza.',
                            'en' => 'Active principle guiding action according to truth and conscience.',
                            'la' => 'Principium activum ad veritatem dirigens.',
                            'he' => 'עיקרון פעיל המכוון לפעולה מתוך אמת'
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
                'psalm' => 38,
                'psalm_verse' => 22,
                'vulgata' => 37,
                'vulgata_verse' => 23,
                'psalm_link' => '/salmi/38',

                // Contenuti
                'quality' => [
                    'it' => 'Giustizia equilibrata, ascolto imparziale e rettitudine morale.',
                    'en' => 'Balanced justice, impartial listening and moral uprightness.',
                    'la' => 'Iustitia aequilibrata et rectitudo moralis.',
                    'he' => 'צדק מאוזן וישרות מוסרית'
                ],
                'help' => [
                    'it' => 'Aiuta a far emergere la verità nei conflitti e a ristabilire equità nelle decisioni.',
                    'en' => 'Helps bring truth to light in conflicts and restore fairness in decisions.',
                    'la' => 'Veritatem in controversiis manifestat et aequitatem restituit.',
                    'he' => 'מסייע לחשוף אמת ולשקם צדק'
                ],
                'prevent' => [
                    'it' => 'Previene ingiustizie, giudizi affrettati e accuse infondate.',
                    'en' => 'Prevents injustice, hasty judgments and unfounded accusations.',
                    'la' => 'Iniustitiam et iudicia praecipitia impedit.',
                    'he' => 'מונע עוול ושיפוט פזיז'
                ],
            ],

            [
                'number' => 19,
                'name' => 'Leuviah',

                'definition' => [
                    'it' => 'LVV - Dio che ascolta e concede misericordia',
                    'en' => 'LVV - God who listens and grants mercy',
                    'la' => 'LVV - Deus qui audit et misericordiam concedit',
                    'he' => 'LVV - אל השומע ומעניק רחמים',
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
                            'it' => 'Rafforzamento della memoria e stabilizzazione delle esperienze in saggezza consapevole.',
                            'en' => 'Strengthening of memory and stabilization of experience into conscious wisdom.',
                            'la' => 'Confirmatio memoriae in sapientiam consciam.',
                            'he' => 'חיזוק הזיכרון והפיכתו לחוכמה מודעת'
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
                'psalm' => 40,
                'psalm_verse' => 13,
                'vulgata' => 39,
                'vulgata_verse' => 14,
                'psalm_link' => '/salmi/40',

                // Contenuti
                'quality' => [
                    'it' => 'Memoria spirituale, comprensione profonda del passato e trasformazione dell’esperienza in saggezza.',
                    'en' => 'Spiritual memory and transformation of experience into wisdom.',
                    'la' => 'Memoria spiritualis et experientiae in sapientiam conversio.',
                    'he' => 'זיכרון רוחני והפיכת ניסיון לחוכמה'
                ],
                'help' => [
                    'it' => 'Favorisce il superamento dei rimpianti, la riconciliazione interiore e l’integrazione delle esperienze vissute.',
                    'en' => 'Helps overcome regret and integrate lived experience.',
                    'la' => 'Adiuvat ad superandos paenitentias et ad reconciliationem interiorem.',
                    'he' => 'מסייע להתגבר על חרטה ולשלב חוויות העבר'
                ],
                'prevent' => [
                    'it' => 'Previene malinconia paralizzante, attaccamento sterile al passato e rigidità emotiva.',
                    'en' => 'Prevents paralyzing melancholy and sterile attachment to the past.',
                    'la' => 'Melancholiam et adhaesionem sterilis impedit.',
                    'he' => 'מונע מלנכוליה והיאחזות לא בריאה בעבר'
                ],
            ],

            [
                'number' => 20,
                'name' => 'Pahaliah',

                'definition' => [
                    'it' => 'PHL - Dio redentore',
                    'en' => 'PHL - Redeeming God',
                    'la' => 'PHL - Deus redemptor',
                    'he' => 'PHL - אל הגואל',
                ],

                'hebrew_letters' => 'פהל',
                'hebrew_name' => 'פהליה',

                'letter_details' => [
                    [
                        'letter' => 'פ',
                        'name' => 'Pe',
                        'value' => 80,
                        'meaning' => [
                            'it' => 'Parola che manifesta e rende visibile l’intenzione interiore.',
                            'en' => 'Word that manifests and makes inner intention visible.',
                            'la' => 'Verbum quod intentionem interiorem manifestat.',
                            'he' => 'מילה המגלה את הכוונה הפנימית'
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
                            'it' => 'Elevazione attraverso l’apprendimento e impegno verso la rettitudine.',
                            'en' => 'Elevation through learning and commitment to righteousness.',
                            'la' => 'Elevatio per doctrinam et rectitudinem.',
                            'he' => 'התעלות דרך לימוד ודבקות ביושר'
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
                    'it' => 'Redenzione morale, ritorno alla coerenza interiore e zelo per la verità.',
                    'en' => 'Moral redemption and return to inner coherence.',
                    'la' => 'Redemptio moralis et reditus ad rectitudinem.',
                    'he' => 'גאולה מוסרית וחזרה ליושר פנימי'
                ],
                'help' => [
                    'it' => 'Aiuta a ritrovare la propria vocazione autentica, liberandosi da errori e deviazioni.',
                    'en' => 'Helps rediscover authentic vocation and free oneself from error.',
                    'la' => 'Adiuvat ad vocationem authenticam redire.',
                    'he' => 'מסייע לשוב לייעוד האמיתי ולהשתחרר מטעויות'
                ],
                'prevent' => [
                    'it' => 'Previene fanatismo, incoerenza morale e perdita del senso del bene.',
                    'en' => 'Prevents fanaticism and moral incoherence.',
                    'la' => 'Fanatismum et inconstantiam impedit.',
                    'he' => 'מונע קנאות עיוורת ואי־יציבות מוסרית'
                ],
            ],

            [
                'number' => 21,
                'name' => 'Nelchael',

                'definition' => [
                    'it' => 'NLK - Dio unico e solo',
                    'en' => 'NLK - The Only God',
                    'la' => 'NLK - Deus Unicus',
                    'he' => 'NLK - אל יחיד ומיוחד',
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
                            'it' => 'Forza contenuta e potere creativo disciplinato, capacità di applicare la conoscenza.',
                            'en' => 'Contained strength and disciplined creative power, ability to apply knowledge.',
                            'la' => 'Potentia continens et disciplina creativa.',
                            'he' => 'כוח מוכל ויצירתי המיושם בחכמה'
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
                    'it' => 'Intelligenza analitica, comprensione profonda delle leggi spirituali e stabilità mentale.',
                    'en' => 'Analytical intelligence, deep understanding of spiritual laws and mental stability.',
                    'la' => 'Intelligentia analytica et stabilitas mentis.',
                    'he' => 'אינטליגנציה אנליטית והבנה עמוקה של חוקי הרוח'
                ],
                'help' => [
                    'it' => 'Favorisce studio, concentrazione e capacità di distinguere il vero dal falso.',
                    'en' => 'Encourages study, concentration and the ability to distinguish truth from falsehood.',
                    'la' => 'Studium et discretionem veritatis fovet.',
                    'he' => 'מעודד לימוד והבחנה בין אמת לשקר'
                ],
                'prevent' => [
                    'it' => 'Previene confusione mentale, errore dottrinale e uso distorto della conoscenza.',
                    'en' => 'Prevents mental confusion, doctrinal error and misuse of knowledge.',
                    'la' => 'Errorem et confusionem mentis impedit.',
                    'he' => 'מונע בלבול מחשבתי ושימוש שגוי בידע'
                ],
            ],

            [
                'number' => 22,
                'name' => 'Yeyiel',

                'definition' => [
                    'it' => 'YYY - Dio che dona prosperità e successo',
                    'en' => 'YYY - God who grants prosperity and success',
                    'la' => 'YYY - Deus qui prosperitatem et successum concedit',
                    'he' => 'YYY - האל המעניק הצלחה ושפע',
                ],

                'hebrew_letters' => 'ייי',
                'hebrew_name' => 'יעיאל',

                'letter_details' => [
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Principio attivo, punto originario da cui si sviluppa ogni azione.',
                            'en' => 'Active principle, originating point from which every action unfolds.',
                            'la' => 'Principium activum unde omnis actio evolvitur.',
                            'he' => 'עיקרון פעיל שממנו מתפתחת כל פעולה'
                        ]
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Rafforzamento del principio, continuità dell’azione nel tempo.',
                            'en' => 'Strengthening of the principle, continuity of action through time.',
                            'la' => 'Confirmatio principii et continuatio actionis.',
                            'he' => 'חיזוק העיקרון והמשכיות הפעולה'
                        ]
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Unità concentrata, energia coerente che orienta verso successo ordinato.',
                            'en' => 'Concentrated unity, coherent energy oriented toward ordered success.',
                            'la' => 'Unitas concentrata ad successum ordinatum directa.',
                            'he' => 'אחדות מרוכזת המכוונת להצלחה מסודרת'
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
                'psalm' => 121,
                'psalm_verse' => 5,
                'vulgata' => 120,
                'vulgata_verse' => 5,
                'psalm_link' => '/salmi/121',

                // Contenuti
                'quality' => [
                    'it' => 'Onore stabile, coerenza morale e capacità di mantenere integrità nelle prove.',
                    'en' => 'Stable honor, moral coherence and ability to maintain integrity in trials.',
                    'la' => 'Honor stabilis et constantia moralis.',
                    'he' => 'כבוד יציב ועקביות מוסרית'
                ],
                'help' => [
                    'it' => 'Aiuta a consolidare successo e prosperità attraverso rettitudine e disciplina.',
                    'en' => 'Helps consolidate success and prosperity through righteousness and discipline.',
                    'la' => 'Successum per rectitudinem confirmat.',
                    'he' => 'מסייע לבסס הצלחה דרך יושר ומשמעת'
                ],
                'prevent' => [
                    'it' => 'Previene compromessi morali, dispersione delle risorse e perdita di dignità.',
                    'en' => 'Prevents moral compromise, resource dispersion and loss of dignity.',
                    'la' => 'Compromissionem moralem et dispersionem impedit.',
                    'he' => 'מונע פשרה מוסרית ופיזור משאבים'
                ],
            ],

            [
                'number' => 23,
                'name' => 'Melahel',

                'definition' => [
                    'it' => 'MLH - Dio che guarisce e ristabilisce',
                    'en' => 'MLH - God who heals and restores',
                    'la' => 'MLH - Deus qui sanat et restaurat',
                    'he' => 'MLH - האל המרפא ומשיב לשלמות',
                ],

                'hebrew_letters' => 'מלה',
                'hebrew_name' => 'מלאהל',

                'letter_details' => [
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => [
                            'it' => 'Acqua generatrice, flusso vitale che purifica e rigenera.',
                            'en' => 'Generative water, vital flow that purifies and regenerates.',
                            'la' => 'Aqua generans, fluxus vitalis purificans et regenerans.',
                            'he' => 'מים יוצרים, זרימה מחיה ומטהרת'
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
                'psalm' => 121,
                'psalm_verse' => 6,
                'vulgata' => 120,
                'vulgata_verse' => 6,
                'psalm_link' => '/salmi/121',

                // Contenuti
                'quality' => [
                    'it' => 'Guarigione integrale, equilibrio naturale e comprensione delle forze vitali.',
                    'en' => 'Integral healing, natural balance and understanding of vital forces.',
                    'la' => 'Sanatio integra et aequilibrium naturale.',
                    'he' => 'ריפוי שלם ואיזון טבעי'
                ],
                'help' => [
                    'it' => 'Favorisce guarigione fisica e interiore, protezione nei viaggi e armonia con le leggi della natura.',
                    'en' => 'Promotes physical and inner healing, protection during journeys and harmony with natural laws.',
                    'la' => 'Sanationem et protectionem in itineribus fovet.',
                    'he' => 'מעודד ריפוי והגנה בדרכים'
                ],
                'prevent' => [
                    'it' => 'Previene squilibri, abuso delle energie vitali e disarmonia con l’ordine naturale.',
                    'en' => 'Prevents imbalance, misuse of vital energies and disharmony with natural order.',
                    'la' => 'Inaequalitatem et abusum virium vitalium impedit.',
                    'he' => 'מונע חוסר איזון וניצול יתר של אנרגיה'
                ],
            ],

            [
                'number' => 24,
                'name' => 'Hahuiah',

                'definition' => [
                    'it' => 'HHV - Dio che offre rifugio',
                    'en' => 'HHV - God who offers refuge',
                    'la' => 'HHV - Deus refugium praebens',
                    'he' => 'HHV - אל המעניק מחסה',
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
                            'it' => 'Apertura alla protezione divina e rivelazione del rifugio interiore.',
                            'en' => 'Opening to divine protection and revelation of inner refuge.',
                            'la' => 'Apertio ad protectionem divinam et revelatio refugii interioris.',
                            'he' => 'פתיחה להגנה אלוהית וגילוי המחסה הפנימי'
                        ]
                    ],
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => [
                            'it' => 'Connessione stabile che mantiene l’unione tra protezione celeste e realtà concreta.',
                            'en' => 'Stable connection maintaining union between heavenly protection and earthly reality.',
                            'la' => 'Connexio stabilis inter caelestem tutelam et realitatem.',
                            'he' => 'חיבור יציב בין ההגנה העליונה למציאות הארצית'
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
                'psalm' => 34,
                'psalm_verse' => 22,
                'vulgata' => 33,
                'vulgata_verse' => 22,
                'psalm_link' => '/salmi/34',

                // Contenuti
                'quality' => [
                    'it' => 'Protezione divina stabile, rifugio interiore e giustizia che ristabilisce equilibrio.',
                    'en' => 'Stable divine protection, inner refuge and justice restoring balance.',
                    'la' => 'Protectio divina stabilis et iustitia aequilibrans.',
                    'he' => 'הגנה אלוהית יציבה וצדק המשיב איזון'
                ],
                'help' => [
                    'it' => 'Aiuta a trovare rifugio nei momenti difficili, a ricevere protezione nelle prove e a ristabilire equilibrio dopo ingiustizie.',
                    'en' => 'Helps find refuge in difficult times, receive protection in trials and restore balance after injustice.',
                    'la' => 'Refugium in difficultatibus praestat et aequilibrium restituit.',
                    'he' => 'מסייע למצוא מחסה בעת קושי ולהשיב איזון לאחר עוול'
                ],
                'prevent' => [
                    'it' => 'Previene esposizione imprudente, vulnerabilità e perdita di fiducia nella protezione superiore.',
                    'en' => 'Prevents reckless exposure, vulnerability and loss of trust in higher protection.',
                    'la' => 'Expositionem imprudentem et diffidentiam impedit.',
                    'he' => 'מונע חשיפה פזיזה ואובדן אמון בהגנה העליונה'
                ],
            ],

            // Dominazioni
            [
                'number' => 25,
                'name' => 'Nith-Haiah',

                'definition' => [
                    'it' => 'NTH - Dio che dona Sapienza',
                    'en' => 'NTH - God who grants Wisdom',
                    'la' => 'NTH - Deus sapientiam largiens',
                    'he' => 'NTH - אל הנותן חכמה',
                ],

                'hebrew_letters' => 'נתה',
                'hebrew_name' => 'נתהאיה',

                'letter_details' => [
                    [
                        'letter' => 'נ',
                        'name' => 'Nun',
                        'value' => 50,
                        'meaning' => [
                            'it' => 'Continuità e profondità dell’anima che attraversa le prove senza spezzarsi.',
                            'en' => 'Continuity and depth of the soul that passes through trials without breaking.',
                            'la' => 'Continuatio et profunditas animae per probationes perseverantis.',
                            'he' => 'התמדה ועומק נפשי העוברים דרך ניסיון מבלי להישבר'
                        ]
                    ],
                    [
                        'letter' => 'ת',
                        'name' => 'Tav',
                        'value' => 400,
                        'meaning' => [
                            'it' => 'Sigillo di compimento e verità finale che porta a realizzazione piena.',
                            'en' => 'Seal of completion and final truth leading to full realization.',
                            'la' => 'Signum completionis et veritatis ultimae.',
                            'he' => 'חותם השלמות והאמת הסופית'
                        ]
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => [
                            'it' => 'Rivelazione interiore e apertura alla comprensione dei misteri.',
                            'en' => 'Inner revelation and openness to the understanding of mysteries.',
                            'la' => 'Revelatio interior et apertio ad mysteria intelligenda.',
                            'he' => 'התגלות פנימית ופתיחות להבנת סודות'
                        ]
                    ],
                ],

                'choir' => 'dominions',
                'archangel' => 'zadkiel',
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
                    'it' => 'Sapienza profonda, conoscenza dei misteri e comprensione delle leggi spirituali.',
                    'en' => 'Profound wisdom, knowledge of mysteries and understanding of spiritual laws.',
                    'la' => 'Sapientia profunda et cognitio mysteriorum.',
                    'he' => 'חכמה עמוקה והבנת סודות רוחניים'
                ],

                'help' => [
                    'it' => 'Aiuta a sviluppare intuizione autentica, discernimento e comprensione elevata.',
                    'en' => 'Helps develop authentic intuition, discernment and elevated understanding.',
                    'la' => 'Intuitionem et discretio altam fovet.',
                    'he' => 'מסייע לפתח אינטואיציה והבחנה עמוקה'
                ],

                'prevent' => [
                    'it' => 'Previene superficialità spirituale, uso improprio della conoscenza e deviazioni dalla verità.',
                    'en' => 'Prevents spiritual superficiality, misuse of knowledge and deviation from truth.',
                    'la' => 'Superficialitatem et abusum scientiae impedit.',
                    'he' => 'מונע שטחיות ושימוש שגוי בידע'
                ],
            ],

            [
                'number' => 26,
                'name' => 'Haaiah',

                'definition' => [
                    'it' => 'HAA - Dio che risponde nel segreto',
                    'en' => 'HAA - God who answers in secret',
                    'la' => 'HAA - Deus Auditor in abscondito',
                    'he' => 'HAA - אל שומע בסתר',
                ],

                'hebrew_letters' => 'האא',
                'hebrew_name' => 'האאיה',

                'letter_details' => [
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => [
                            'it' => 'Apertura ricettiva e ascolto attento che permette comprensione e mediazione.',
                            'en' => 'Receptive openness and attentive listening allowing understanding and mediation.',
                            'la' => 'Apertio receptiva et auditio diligens ad mediationem.',
                            'he' => 'פתיחות והקשבה עמוקה המאפשרות הבנה ותיווך'
                        ]
                    ],
                    [
                        'letter' => 'א',
                        'name' => 'Aleph',
                        'value' => 1,
                        'meaning' => [
                            'it' => 'Principio di unità e equilibrio che armonizza le forze opposte.',
                            'en' => 'Principle of unity and balance harmonizing opposing forces.',
                            'la' => 'Principium unitatis et aequilibrii.',
                            'he' => 'עיקרון האחדות והאיזון'
                        ]
                    ],
                    [
                        'letter' => 'א',
                        'name' => 'Aleph',
                        'value' => 1,
                        'meaning' => [
                            'it' => 'Conferma e rafforzamento dell’unità, stabilità nelle decisioni.',
                            'en' => 'Confirmation and strengthening of unity, stability in decisions.',
                            'la' => 'Confirmatio unitatis et stabilitas decisionum.',
                            'he' => 'חיזוק האחדות ויציבות בהחלטה'
                        ]
                    ],
                ],

                'choir' => 'dominions',
                'archangel' => 'zadkiel',
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
                'name' => 'Yerathel',

                'definition' => [
                    'it' => 'YRT - Dio che difende la Verità',
                    'en' => 'YRT - God who defends Truth',
                    'la' => 'YRT - Deus veritatem defendens',
                    'he' => 'YRT - האל המגן על האמת',
                ],

                'hebrew_letters' => 'ירת',
                'hebrew_name' => 'ירתאל',

                'letter_details' => [
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Scintilla attiva che orienta l’azione verso verità e rettitudine.',
                            'en' => 'Active spark directing action toward truth and uprightness.',
                            'la' => 'Scintilla activa ad veritatem dirigens.',
                            'he' => 'ניצוץ פעיל המכוון אל האמת'
                        ]
                    ],
                    [
                        'letter' => 'ר',
                        'name' => 'Resh',
                        'value' => 200,
                        'meaning' => [
                            'it' => 'Forza morale e rinnovamento interiore che sostiene il coraggio etico.',
                            'en' => 'Moral strength and inner renewal sustaining ethical courage.',
                            'la' => 'Fortitudo moralis et renovatio interior.',
                            'he' => 'כוח מוסרי והתחדשות פנימית'
                        ]
                    ],
                    [
                        'letter' => 'ת',
                        'name' => 'Tav',
                        'value' => 400,
                        'meaning' => [
                            'it' => 'Sigillo finale che conferma la verità e la stabilisce nella realtà.',
                            'en' => 'Final seal confirming truth and establishing it in reality.',
                            'la' => 'Sigillum finale veritatem confirmans.',
                            'he' => 'חותם סופי המאשר את האמת'
                        ]
                    ],
                ],

                'choir' => 'dominions',
                'archangel' => 'zadkiel',
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
                    'it' => 'Forza morale, diffusione della verità e capacità di smascherare l’errore.',
                    'en' => 'Moral strength, diffusion of truth and ability to unmask error.',
                    'la' => 'Fortitudo moralis et veritatis defensio.',
                    'he' => 'כוח מוסרי והפצת אמת'
                ],
                'help' => [
                    'it' => 'Aiuta a difendere la verità, contrastare menzogne e rafforzare chiarezza etica.',
                    'en' => 'Helps defend truth, counter lies and strengthen ethical clarity.',
                    'la' => 'Veritatem defendere et mendacia reprimere iuvat.',
                    'he' => 'מסייע להגן על האמת ולדחות שקר'
                ],
                'prevent' => [
                    'it' => 'Previene inganno, debolezza morale e compromessi contrari alla coscienza.',
                    'en' => 'Prevents deception, moral weakness and compromises against conscience.',
                    'la' => 'Fraudem et infirmitatem moralem impedit.',
                    'he' => 'מונע הטעיה וחולשה מוסרית'
                ],
            ],

            [
                'number' => 28,
                'name' => 'Seheiah',

                'definition' => [
                    'it' => 'SAH - Dio che salva dalla distruzione',
                    'en' => 'SAH - God who saves from destruction',
                    'la' => 'SAH - Deus liberator a ruina',
                    'he' => 'SAH - אל מושיע משואה',
                ],

                'hebrew_letters' => 'שאה',
                'hebrew_name' => 'שאהיה',

                'letter_details' => [
                    [
                        'letter' => 'ש',
                        'name' => 'Shin',
                        'value' => 300,
                        'meaning' => [
                            'it' => 'Fuoco trasformante che purifica e brucia ciò che minaccia l’equilibrio.',
                            'en' => 'Transforming fire that purifies and burns what threatens balance.',
                            'la' => 'Ignis transformans qui purificat et minantia consumit.',
                            'he' => 'אש משנה המטהרת ושורפת את המאיים על האיזון'
                        ]
                    ],
                    [
                        'letter' => 'א',
                        'name' => 'Aleph',
                        'value' => 1,
                        'meaning' => [
                            'it' => 'Principio originario e unità che ristabilisce ordine nel caos.',
                            'en' => 'Primordial principle and unity restoring order in chaos.',
                            'la' => 'Principium primordiale unitatem restituens.',
                            'he' => 'עיקרון ראשוני המשיב סדר מתוך כאוס'
                        ]
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => [
                            'it' => 'Rivelazione protettiva che manifesta salvezza e preservazione.',
                            'en' => 'Protective revelation manifesting salvation and preservation.',
                            'la' => 'Revelatio tutelae salutem manifestans.',
                            'he' => 'התגלות מגינה המביאה ישועה ושמירה'
                        ]
                    ],
                ],

                'choir' => 'dominions',
                'archangel' => 'zadkiel',
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
                    'it' => 'Protezione nelle avversità improvvise e capacità di prevenzione consapevole.',
                    'en' => 'Protection in sudden adversity and conscious prevention.',
                    'la' => 'Protectio in adversitatibus subitis et prudentia.',
                    'he' => 'הגנה בעת צרה פתאומית ויכולת מניעה מודעת'
                ],
                'help' => [
                    'it' => 'Aiuta a evitare incidenti e situazioni pericolose, rafforzando lucidità e prontezza.',
                    'en' => 'Helps avoid accidents and dangerous situations, strengthening clarity and readiness.',
                    'la' => 'Pericula vitare et mentis claritatem roborare iuvat.',
                    'he' => 'מסייע להימנע מסכנות ומחזק צלילות ותושייה'
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
                'name' => 'Reiyel',

                'definition' => [
                    'it' => 'RYY - Dio che libera e soccorre',
                    'en' => 'RYY - God who delivers and succors',
                    'la' => 'RYY - Deus Auxiliator et Liberator',
                    'he' => 'RYY - אל עוזר ומושיע',
                ],

                'hebrew_letters' => 'ריי',
                'hebrew_name' => 'ראיאל',

                'letter_details' => [
                    [
                        'letter' => 'ר',
                        'name' => 'Resh',
                        'value' => 200,
                        'meaning' => [
                            'it' => 'Rinnovamento della mente e capacità di elevarsi oltre l’errore.',
                            'en' => 'Renewal of the mind and ability to rise above error.',
                            'la' => 'Renovatio mentis et elevatio supra errorem.',
                            'he' => 'התחדשות השכל והתרוממות מעל הטעות'
                        ]
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Scintilla di discernimento che orienta verso verità autentica.',
                            'en' => 'Spark of discernment directing toward authentic truth.',
                            'la' => 'Scintilla discretionis ad veritatem dirigens.',
                            'he' => 'ניצוץ הבחנה המכוון אל אמת אמיתית'
                        ]
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Rafforzamento del discernimento e consolidamento della coscienza.',
                            'en' => 'Strengthening of discernment and consolidation of awareness.',
                            'la' => 'Confirmatio discretionis et conscientiae.',
                            'he' => 'חיזוק ההבחנה וביסוס התודעה'
                        ]
                    ],
                ],

                'choir' => 'dominions',
                'archangel' => 'zadkiel',
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
                'psalm' => 54,
                'psalm_verse' => 6,
                'vulgata' => 53,
                'vulgata_verse' => 6,
                'psalm_link' => '/salmi/54',

                // Contenuti
                'quality' => [
                    'it' => 'Distacco dalle illusioni, lucidità mentale e ricerca sincera della verità.',
                    'en' => 'Detachment from illusions, mental clarity and sincere search for truth.',
                    'la' => 'Ab illusionibus separatio et claritas mentis.',
                    'he' => 'התנתקות מאשליה ובהירות שכלית'
                ],
                'help' => [
                    'it' => 'Aiuta a riconoscere l’errore, liberarsi da convinzioni false e rafforzare la coerenza interiore.',
                    'en' => 'Helps recognize error, free oneself from false beliefs and strengthen inner coherence.',
                    'la' => 'Errorem agnoscere et ab opinionibus falsis liberari iuvat.',
                    'he' => 'מסייע לזהות טעות ולהשתחרר מאמונות שגויות'
                ],
                'prevent' => [
                    'it' => 'Previene fanatismo, autoinganno e rigidità ideologica.',
                    'en' => 'Prevents fanaticism, self-deception and ideological rigidity.',
                    'la' => 'Fanatismum et deceptionem impedit.',
                    'he' => 'מונע קנאות והטעיה עצמית'
                ],
            ],

            [
                'number' => 30,
                'name' => 'Omahel',

                'definition' => [
                    'it' => 'AUM - Dio che edifica e dà vita',
                    'en' => 'AUM - God who builds and gives life',
                    'la' => 'AUM - Deus Edificator et Vivificator',
                    'he' => 'AUM - האל הבונה ומחיה',
                ],

                'hebrew_letters' => 'אום',
                'hebrew_name' => 'אומהאל',

                'letter_details' => [
                    [
                        'letter' => 'א',
                        'name' => 'Aleph',
                        'value' => 1,
                        'meaning' => [
                            'it' => 'Principio originario e armonia primordiale da cui tutto prende forma.',
                            'en' => 'Primordial principle and original harmony from which all takes form.',
                            'la' => 'Principium primordiale et harmonia originalis.',
                            'he' => 'עיקרון ראשוני והרמוניה קדומה'
                        ]
                    ],
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => [
                            'it' => 'Collegamento e organizzazione che uniscono spirito e materia.',
                            'en' => 'Connection and organization uniting spirit and matter.',
                            'la' => 'Connexio et ordinatio spiritum et materiam iungens.',
                            'he' => 'חיבור וסדר המאחדים רוח וחומר'
                        ]
                    ],
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => [
                            'it' => 'Flusso fecondo ed espansione vitale che genera crescita.',
                            'en' => 'Fertile flow and vital expansion generating growth.',
                            'la' => 'Fluxus fecundus et expansio vitalis.',
                            'he' => 'זרימה פוריה והתפשטות מחיה'
                        ]
                    ],
                ],

                'choir' => 'dominions',
                'archangel' => 'zadkiel',
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
                'psalm' => 113,
                'psalm_verse' => 3,
                'vulgata' => 112,
                'vulgata_verse' => 3,
                'psalm_link' => '/salmi/113',

                // Contenuti
                'quality' => [
                    'it' => 'Espansione armonica, fecondità e capacità di organizzare la crescita.',
                    'en' => 'Harmonic expansion, fertility and ability to organize growth.',
                    'la' => 'Expansio harmonica et fecunditas ordinata.',
                    'he' => 'התפשטות הרמונית ופוריות מאורגנת'
                ],
                'help' => [
                    'it' => 'Aiuta a sviluppare armonia, prosperità e realizzazione concreta nei progetti.',
                    'en' => 'Helps develop harmony, prosperity and concrete realization in projects.',
                    'la' => 'Harmoniam et prosperitatem in operibus fovet.',
                    'he' => 'מסייע לפתח הרמוניה ושפע במעשים'
                ],
                'prevent' => [
                    'it' => 'Previene disordine, sterilità creativa e dispersione di energie.',
                    'en' => 'Prevents disorder, creative sterility and dispersion of energies.',
                    'la' => 'Inordinationem et sterilitatem creativam impedit.',
                    'he' => 'מונע אי־סדר ועקרות יצירתית'
                ],
            ],

            [
                'number' => 31,
                'name' => 'Lecabel',

                'definition' => [
                    'it' => 'LKB - Dio che ispira intelligenza operativa',
                    'en' => 'LKB - God who inspires practical intelligence',
                    'la' => 'LKB - Deus intelligentiam operativam inspirans',
                    'he' => 'LKB - האל המעניק בינה מעשית',
                ],

                'hebrew_letters' => 'לכב',
                'hebrew_name' => 'לכבאיה',

                'letter_details' => [
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => [
                            'it' => 'Elevazione dell’intelligenza verso comprensione applicata e apprendimento concreto.',
                            'en' => 'Elevation of intelligence toward applied understanding and concrete learning.',
                            'la' => 'Elevatio intellectus ad comprehensionem practicam.',
                            'he' => 'התעלות השכל להבנה מעשית'
                        ]
                    ],
                    [
                        'letter' => 'כ',
                        'name' => 'Kaf',
                        'value' => 20,
                        'meaning' => [
                            'it' => 'Forza contenuta e capacità di realizzare con disciplina ciò che è compreso.',
                            'en' => 'Contained strength and ability to realize with discipline what is understood.',
                            'la' => 'Potentia continens ad effectum disciplinatum.',
                            'he' => 'כוח מוכל המאפשר מימוש ממושמע'
                        ]
                    ],
                    [
                        'letter' => 'ב',
                        'name' => 'Bet',
                        'value' => 2,
                        'meaning' => [
                            'it' => 'Struttura stabile e costruzione ordinata che dà forma concreta al sapere.',
                            'en' => 'Stable structure and ordered construction giving concrete form to knowledge.',
                            'la' => 'Structura stabilis scientiae formam tribuens.',
                            'he' => 'מבנה יציב המעניק צורה ממשית לידע'
                        ]
                    ],
                ],

                'choir' => 'dominions',
                'archangel' => 'zadkiel',
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
                'psalm' => 71,
                'psalm_verse' => 16,
                'vulgata' => 70,
                'vulgata_verse' => 16,
                'psalm_link' => '/salmi/71',

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
                    'it' => 'Previene disorganizzazione, superficialità e dispersione delle capacità intellettive.',
                    'en' => 'Prevents disorganization, superficiality and dispersion of intellectual abilities.',
                    'la' => 'Disordinationem et superficialitatem impedit.',
                    'he' => 'מונע חוסר סדר ופיזור מחשבתי'
                ],
            ],

            [
                'number' => 32,
                'name' => 'Vasariah',

                'definition' => [
                    'it' => 'VSR - Dio giusto e misericordioso',
                    'en' => 'VSR - God just and merciful',
                    'la' => 'VSR - Deus iustus et misericors',
                    'he' => 'VSR - האל הצודק והרחום',
                ],

                'hebrew_letters' => 'ושר',
                'hebrew_name' => 'וסריה',

                'letter_details' => [
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => [
                            'it' => 'Collegamento che unisce giustizia e misericordia in un’unica azione equilibrata.',
                            'en' => 'Connection uniting justice and mercy into a single balanced action.',
                            'la' => 'Connexio iustitiam et misericordiam coniungens.',
                            'he' => 'חיבור המאחד צדק ורחמים'
                        ]
                    ],
                    [
                        'letter' => 'ש',
                        'name' => 'Shin',
                        'value' => 300,
                        'meaning' => [
                            'it' => 'Fuoco purificatore della giustizia che corregge senza distruggere.',
                            'en' => 'Purifying fire of justice that corrects without destroying.',
                            'la' => 'Ignis purificans iustitiae.',
                            'he' => 'אש מטהרת של צדק'
                        ]
                    ],
                    [
                        'letter' => 'ר',
                        'name' => 'Resh',
                        'value' => 200,
                        'meaning' => [
                            'it' => 'Rinnovamento interiore e lucidità mentale che permettono decisioni rette.',
                            'en' => 'Inner renewal and mental clarity enabling righteous decisions.',
                            'la' => 'Renovatio interior et claritas mentis.',
                            'he' => 'התחדשות פנימית ובהירות מחשבתית'
                        ]
                    ],
                ],

                'choir' => 'dominions',
                'archangel' => 'zadkiel',
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
                'psalm' => 33,
                'psalm_verse' => 4,
                'vulgata' => 32,
                'vulgata_verse' => 4,
                'psalm_link' => '/salmi/33',

                // Contenuti
                'quality' => [
                    'it' => 'Giustizia equilibrata, clemenza e capacità di mediazione nelle decisioni complesse.',
                    'en' => 'Balanced justice, clemency and capacity for mediation in complex decisions.',
                    'la' => 'Iustitia aequilibrata et clementia.',
                    'he' => 'צדק מאוזן ורחמים'
                ],
                'help' => [
                    'it' => 'Favorisce riconciliazione, attenuazione di giudizi severi e ristabilimento dell’equità.',
                    'en' => 'Encourages reconciliation, mitigation of harsh judgments and restoration of fairness.',
                    'la' => 'Reconciliationem et aequitatem restituit.',
                    'he' => 'מעודד פיוס והשבת צדק'
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
                'name' => 'Yehuiah',

                'definition' => [
                    'it' => 'YHV - Dio che conosce tutte le cose',
                    'en' => 'YHV - God who knows all things',
                    'la' => 'YHV - Deus Omniscius',
                    'he' => 'YHV - אל יודע הכל',
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
                'psalm' => 34,
                'psalm_verse' => 11,
                'vulgata' => 33,
                'vulgata_verse' => 11,
                'psalm_link' => '/salmi/34',

                // Contenuti
                'quality' => [
                    'it' => 'Disciplina interiore, fedeltà consapevole e rispetto dell’ordine giusto.',
                    'en' => 'Inner discipline, conscious loyalty and respect for rightful order.',
                    'la' => 'Disciplina interior et fidelitas conscia.',
                    'he' => 'משמעת פנימית ונאמנות מודעת'
                ],
                'help' => [
                    'it' => 'Aiuta a ristabilire ordine, correggere deviazioni e agire con responsabilità equilibrata.',
                    'en' => 'Helps restore order, correct deviations and act with balanced responsibility.',
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
                'name' => 'Lehahiah',

                'definition' => [
                    'it' => 'LHH - Dio che sostiene l’obbedienza giusta',
                    'en' => 'LHH - God who sustains righteous obedience',
                    'la' => 'LHH - Deus obedientiam iustam sustinens',
                    'he' => 'LHH - האל המחזק ציות צודק',
                ],

                'hebrew_letters' => 'להח',
                'hebrew_name' => 'לההיה',

                'letter_details' => [
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => [
                            'it' => 'Apprendimento disciplinato e orientamento verso ordine superiore.',
                            'en' => 'Disciplined learning oriented toward higher order.',
                            'la' => 'Doctrina disciplinata ad ordinem superiorem directa.',
                            'he' => 'למידה ממושמעת המכוונת לסדר עליון'
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
                            'it' => 'Forza morale e autocontrollo che stabilizzano l’azione.',
                            'en' => 'Moral strength and self-control stabilizing action.',
                            'la' => 'Fortitudo moralis et moderatio.',
                            'he' => 'כוח מוסרי ושליטה עצמית'
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
                'psalm' => 131,
                'psalm_verse' => 3,
                'vulgata' => 130,
                'vulgata_verse' => 3,
                'psalm_link' => '/salmi/131',

                // Contenuti
                'quality' => [
                    'it' => 'Obbedienza equilibrata, disciplina interiore e rispetto dell’ordine giusto.',
                    'en' => 'Balanced obedience, inner discipline and respect for rightful order.',
                    'la' => 'Obedientia aequilibrata et disciplina interior.',
                    'he' => 'ציות מאוזן ומשמעת פנימית'
                ],
                'help' => [
                    'it' => 'Aiuta a vivere l’autorità in modo giusto, favorendo autocontrollo e fedeltà ai principi.',
                    'en' => 'Helps live authority rightly, fostering self-control and fidelity to principles.',
                    'la' => 'Auctoritatem recte vivere et fidelitatem servare iuvat.',
                    'he' => 'מסייע לחיות סמכות בצדק ולשמור נאמנות לעקרונות'
                ],
                'prevent' => [
                    'it' => 'Previene ribellione sterile, rigidità e conflitti inutili con l’autorità.',
                    'en' => 'Prevents sterile rebellion, rigidity and unnecessary conflicts with authority.',
                    'la' => 'Rebellionem sterilem et rigorem impedit.',
                    'he' => 'מונע מרד עקר וקושי מיותר'
                ],
            ],

            [
                'number' => 35,
                'name' => 'Chavakiah',

                'definition' => [
                    'it' => 'KVK - Dio che riconcilia e riporta la pace',
                    'en' => 'KVK - God who reconciles and restores peace',
                    'la' => 'KVK - Deus qui reconciliat et pacem restituit',
                    'he' => 'KVK - האל המפייס ומשיב שלום',
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
                            'it' => 'Unione stabile che collega ciò che era separato.',
                            'en' => 'Stable union reconnecting what was separated.',
                            'la' => 'Unio stabilis separata reconnectens.',
                            'he' => 'חיבור יציב המאחד את הנפרד'
                        ]
                    ],
                    [
                        'letter' => 'ק',
                        'name' => 'Qof',
                        'value' => 100,
                        'meaning' => [
                            'it' => 'Purificazione profonda che eleva il legame a livello più autentico.',
                            'en' => 'Deep purification elevating the bond to a more authentic level.',
                            'la' => 'Purificatio profunda vinculum elevans.',
                            'he' => 'טיהור עמוק המעלה את הקשר לדרגה אמיתית יותר'
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
                'psalm' => 116,
                'psalm_verse' => 1,
                'vulgata' => 114,
                'vulgata_verse' => 1,
                'psalm_link' => '/salmi/116',

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
                'name' => 'Menadel',

                'definition' => [
                    'it' => 'MND - Dio che libera e ristabilisce',
                    'en' => 'MND - God who liberates and restores',
                    'la' => 'MND - Deus liberans et restituens',
                    'he' => 'MND - האל המשחרר ומשיב',
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
                'psalm' => 26,
                'psalm_verse' => 8,
                'vulgata' => 25,
                'vulgata_verse' => 8,
                'psalm_link' => '/salmi/26',

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
                'name' => 'Aniel',

                'definition' => [
                    'it' => 'ANI - Dio che eleva e rinnova',
                    'en' => 'ANI - God who elevates and renews',
                    'la' => 'ANI - Deus qui elevat et renovat',
                    'he' => 'ANI - האל המרים ומחדש',
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
                            'it' => 'Continuità e capacità di rinnovarsi attraverso le prove.',
                            'en' => 'Continuity and ability to renew through trials.',
                            'la' => 'Continuatio et renovatio per probationes.',
                            'he' => 'המשכיות והתחדשות דרך ניסיון'
                        ]
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Scintilla divina che risveglia coscienza e orienta verso crescita.',
                            'en' => 'Divine spark awakening consciousness and guiding growth.',
                            'la' => 'Scintilla divina conscientiam excitans.',
                            'he' => 'ניצוץ אלוהי המעורר תודעה'
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
                'psalm' => 79,
                'psalm_verse' => 8,
                'vulgata' => 78,
                'vulgata_verse' => 8,
                'psalm_link' => '/salmi/79',

                // Contenuti
                'quality' => [
                    'it' => 'Elevazione spirituale, rinnovamento interiore e ritorno all’equilibrio.',
                    'en' => 'Spiritual elevation, inner renewal and return to balance.',
                    'la' => 'Elevatio spiritualis et renovatio interior.',
                    'he' => 'התעלות רוחנית והתחדשות פנימית'
                ],
                'help' => [
                    'it' => 'Aiuta a rialzarsi dopo le cadute, favorendo fiducia e armonia interiore.',
                    'en' => 'Helps rise after falls, fostering trust and inner harmony.',
                    'la' => 'Ad resurgendum post lapsus iuvat.',
                    'he' => 'מסייע לקום לאחר נפילה ולחזק אמון'
                ],
                'prevent' => [
                    'it' => 'Previene scoraggiamento, stagnazione e perdita di equilibrio.',
                    'en' => 'Prevents discouragement, stagnation and loss of balance.',
                    'la' => 'Desperationem et stagnationem impedit.',
                    'he' => 'מונע ייאוש וקיפאון'
                ],
            ],

            [
                'number' => 38,
                'name' => 'Haamiah',

                'definition' => [
                    'it' => 'HOM - Dio che rivela il sacro',
                    'en' => 'HOM - God who reveals the sacred',
                    'la' => 'HOM - Deus sacrum revelans',
                    'he' => 'HOM - האל המגלה את הקדושה',
                ],

                'hebrew_letters' => 'חעמ',
                'hebrew_name' => 'חעמיה',

                'letter_details' => [
                    [
                        'letter' => 'ח',
                        'name' => 'Chet',
                        'value' => 8,
                        'meaning' => [
                            'it' => 'Forza vitale protettiva che custodisce ciò che è consacrato.',
                            'en' => 'Protective vital force guarding what is consecrated.',
                            'la' => 'Vis vitalis sacrum custodiens.',
                            'he' => 'כוח חיים המגן על הקדוש'
                        ]
                    ],
                    [
                        'letter' => 'ע',
                        'name' => 'Ayin',
                        'value' => 70,
                        'meaning' => [
                            'it' => 'Visione interiore e discernimento spirituale.',
                            'en' => 'Inner vision and spiritual discernment.',
                            'la' => 'Visio interior et discretio spiritualis.',
                            'he' => 'ראייה פנימית והבחנה רוחנית'
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
                'psalm_verse' => 2,
                'vulgata' => 90,
                'vulgata_verse' => 2,
                'psalm_link' => '/salmi/91',

                // Contenuti
                'quality' => [
                    'it' => 'Rivelazione del sacro, purezza rituale e protezione spirituale.',
                    'en' => 'Revelation of the sacred, ritual purity and spiritual protection.',
                    'la' => 'Revelatio sacri et puritas spiritualis.',
                    'he' => 'גילוי הקדושה וטוהר רוחני'
                ],
                'help' => [
                    'it' => 'Aiuta a mantenere integrità spirituale e fedeltà ai principi elevati.',
                    'en' => 'Helps maintain spiritual integrity and fidelity to higher principles.',
                    'la' => 'Integritatem spiritualem servare iuvat.',
                    'he' => 'מסייע לשמור על יושרה רוחנית'
                ],
                'prevent' => [
                    'it' => 'Previene profanazione, dispersione e uso improprio del sacro.',
                    'en' => 'Prevents profanation, dispersion and misuse of the sacred.',
                    'la' => 'Profanationem et abusum sacri impedit.',
                    'he' => 'מונע חילול ושימוש שגוי בקדושה'
                ],
            ],

            [
                'number' => 39,
                'name' => 'Rehael',

                'definition' => [
                    'it' => 'RHA - Dio che ristabilisce l’unità e guarisce',
                    'en' => 'RHA - God who restores unity and heals',
                    'la' => 'RHA - Deus unitatem restituit et sanat',
                    'he' => 'RHA - האל המשיב אחדות ומרפא',
                ],

                'hebrew_letters' => 'רהא',
                'hebrew_name' => 'ראהאל',

                'letter_details' => [
                    [
                        'letter' => 'ר',
                        'name' => 'Resh',
                        'value' => 200,
                        'meaning' => [
                            'it' => 'Rinnovamento della mente e ritorno al principio direttivo.',
                            'en' => 'Renewal of the mind and return to the guiding principle.',
                            'la' => 'Renovatio mentis et reditus ad principium.',
                            'he' => 'התחדשות המחשבה וחזרה לעיקרון המנחה'
                        ]
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => [
                            'it' => 'Rivelazione che rende manifesta la guarigione e l’ordine nascosto.',
                            'en' => 'Revelation that manifests healing and hidden order.',
                            'la' => 'Revelatio sanationem et ordinem occultum manifestans.',
                            'he' => 'התגלות המגלה ריפוי וסדר נסתר'
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
                'psalm' => 30,
                'psalm_verse' => 3,
                'vulgata' => 29,
                'vulgata_verse' => 3,
                'psalm_link' => '/salmi/30',

                // Contenuti
                'quality' => [
                    'it' => 'Guarigione dei legami, ristabilimento dell’ordine familiare e ritorno all’unità.',
                    'en' => 'Healing of bonds, restoration of family order and return to unity.',
                    'la' => 'Sanatio vinculorum et restitutio ordinis familiaris.',
                    'he' => 'ריפוי קשרים והשבת הסדר המשפחתי'
                ],
                'help' => [
                    'it' => 'Aiuta a ricomporre fratture affettive, ristabilire rispetto tra genitori e figli e guarire conflitti generazionali.',
                    'en' => 'Helps mend emotional fractures, restore respect between parents and children and heal generational conflicts.',
                    'la' => 'Fracturas reconciliat et ordinem inter parentes et filios restituit.',
                    'he' => 'מסייע לרפא קרעים ולהשיב כבוד בין הורים לילדים'
                ],
                'prevent' => [
                    'it' => 'Previene rotture familiari, ribellione distruttiva e perdita del senso dell’ordine naturale.',
                    'en' => 'Prevents family breakdown, destructive rebellion and loss of natural order.',
                    'la' => 'Rupturas familiares et rebellionem impedit.',
                    'he' => 'מונע קרעים משפחתיים ומרד הרסני'
                ],
            ],

            [
                'number' => 40,
                'name' => 'Yeiazel',

                'definition' => [
                    'it' => 'YYZ - Dio che consola e libera dalla sofferenza',
                    'en' => 'YYZ - God who consoles and frees from suffering',
                    'la' => 'YYZ - Deus qui consolatur et a dolore liberat',
                    'he' => 'YYZ - האל המנחם ומשחרר מן הסבל',
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
                'psalm' => 90,
                'psalm_verse' => 13,
                'vulgata' => 89,
                'vulgata_verse' => 13,
                'psalm_link' => '/salmi/90',

                // Contenuti
                'quality' => [
                    'it' => 'Consolazione, liberazione interiore e riattivazione della creatività.',
                    'en' => 'Consolation, inner liberation and reactivation of creativity.',
                    'la' => 'Consolatio et liberatio interior.',
                    'he' => 'נחמה ושחרור פנימי'
                ],
                'help' => [
                    'it' => 'Aiuta a superare malinconia e oppressione, favorendo sollievo e rinnovamento.',
                    'en' => 'Helps overcome melancholy and oppression, fostering relief and renewal.',
                    'la' => 'Melancholiam superare et renovationem afferre iuvat.',
                    'he' => 'מסייע להתגבר על עצב ולהתחדש'
                ],
                'prevent' => [
                    'it' => 'Previene chiusura emotiva, blocchi creativi e scoraggiamento profondo.',
                    'en' => 'Prevents emotional closure, creative blocks and deep discouragement.',
                    'la' => 'Clausuram interioris et desperationem impedit.',
                    'he' => 'מונע קיפאון רגשי וייאוש'
                ],
            ],

            // Virtù
            [
                'number' => 41,
                'name' => 'Hahahel',

                'definition' => [
                    'it' => 'HHH - Dio tre volte santo e glorioso',
                    'en' => 'HHH - God thrice holy and glorious',
                    'la' => 'HHH - Deus ter sanctus et gloriosus',
                    'he' => 'HHH - האל קדוש ונשגב שלוש פעמים',
                ],

                'hebrew_letters' => 'ההה',
                'hebrew_name' => 'הההאל',

                'letter_details' => [
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => [
                            'it' => 'Rivelazione del divino che si manifesta come soffio vivente.',
                            'en' => 'Divine revelation manifesting as living breath.',
                            'la' => 'Revelatio divina ut spiritus vivens.',
                            'he' => 'התגלות אלוהית כרוח חיים'
                        ]
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => [
                            'it' => 'Raddoppio della rivelazione, consacrazione e testimonianza.',
                            'en' => 'Doubling of revelation, consecration and testimony.',
                            'la' => 'Duplicatio revelationis et consecratio.',
                            'he' => 'כפילות ההתגלות והקדשה'
                        ]
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => [
                            'it' => 'Pienezza della lode e dedizione totale alla santità.',
                            'en' => 'Fullness of praise and total dedication to holiness.',
                            'la' => 'Plenitudo laudis et sanctitatis.',
                            'he' => 'שלמות השבח והקדושה'
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
                'psalm' => 119,
                'psalm_verse' => 145,
                'vulgata' => 118,
                'vulgata_verse' => 145,
                'psalm_link' => '/salmi/119',

                // Contenuti
                'quality' => [
                    'it' => 'Vocazione missionaria, zelo spirituale e testimonianza ardente.',
                    'en' => 'Missionary vocation, spiritual zeal and fervent testimony.',
                    'la' => 'Vocatio missionaria et zelus spiritualis.',
                    'he' => 'שליחות רוחנית וקנאות קדושה'
                ],
                'help' => [
                    'it' => 'Aiuta a vivere la fede con coerenza e a diffondere verità con coraggio.',
                    'en' => 'Helps live faith consistently and spread truth with courage.',
                    'la' => 'Fidem constanter vivere et veritatem diffundere iuvat.',
                    'he' => 'מסייע לחיות אמונה בעקביות ולהפיץ אמת באומץ'
                ],
                'prevent' => [
                    'it' => 'Previene tiepidezza spirituale, paura della testimonianza e incoerenza.',
                    'en' => 'Prevents spiritual lukewarmness, fear of testimony and inconsistency.',
                    'la' => 'Teporem spiritualem et timorem testificationis impedit.',
                    'he' => 'מונע פשרנות רוחנית ופחד מעדות'
                ],
            ],

            [
                'number' => 42,
                'name' => 'Mikael',

                'definition' => [
                    'it' => 'MYK - Nessuno è come Dio',
                    'en' => 'MYK - None is like God',
                    'la' => 'MYK - Nullus ut Deus',
                    'he' => 'MYK - אין כאל',
                ],

                'hebrew_letters' => 'מיכ',
                'hebrew_name' => 'מיכאל',

                'letter_details' => [
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => [
                            'it' => 'Acqua profonda che rappresenta sensibilità e maturazione emotiva.',
                            'en' => 'Deep water representing sensitivity and emotional maturity.',
                            'la' => 'Aqua profunda sensum et maturitatem significans.',
                            'he' => 'מים עמוקים המסמלים רגישות ובשלות רגשית'
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
                'psalm' => 121,
                'psalm_verse' => 5,
                'vulgata' => 120,
                'vulgata_verse' => 5,
                'psalm_link' => '/salmi/121',

                // Contenuti
                'quality' => [
                    'it' => 'Armonia relazionale, diplomazia e stabilità affettiva.',
                    'en' => 'Relational harmony, diplomacy and emotional stability.',
                    'la' => 'Harmonia relationum et stabilitas affectiva.',
                    'he' => 'הרמוניה ביחסים ויציבות רגשית'
                ],
                'help' => [
                    'it' => 'Favorisce equilibrio nei rapporti, lealtà e correttezza nelle decisioni.',
                    'en' => 'Fosters balance in relationships, loyalty and fairness in decisions.',
                    'la' => 'Aequilibrium et fidelitatem in relationibus fovet.',
                    'he' => 'מעודד איזון ונאמנות ביחסים'
                ],
                'prevent' => [
                    'it' => 'Previene instabilità emotiva, conflitti e squilibri affettivi.',
                    'en' => 'Prevents emotional instability, conflicts and relational imbalance.',
                    'la' => 'Instabilitatem et discordias impedit.',
                    'he' => 'מונע חוסר יציבות רגשית וסכסוכים'
                ],
            ],

            [
                'number' => 43,
                'name' => 'Veuliah',

                'definition' => [
                    'it' => 'VVL - Dio dominatore e liberatore',
                    'en' => 'VVL - God the ruler and liberator',
                    'la' => 'VVL - Deus dominator et liberator',
                    'he' => 'VVL - האל המושל והמשחרר',
                ],

                'hebrew_letters' => 'וול',
                'hebrew_name' => 'ווליה',

                'letter_details' => [
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => [
                            'it' => 'Connessione attiva che stabilisce autorità e direzione.',
                            'en' => 'Active connection establishing authority and direction.',
                            'la' => 'Connexio activa auctoritatem stabilens.',
                            'he' => 'חיבור פעיל המבסס סמכות וכיוון'
                        ]
                    ],
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => [
                            'it' => 'Rafforzamento della forza direttiva e della volontà.',
                            'en' => 'Reinforcement of directive strength and will.',
                            'la' => 'Confirmatio voluntatis directivae.',
                            'he' => 'חיזוק כוח ההכוונה והרצון'
                        ]
                    ],
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => [
                            'it' => 'Elevazione che porta dominio su sé stessi e sulle passioni.',
                            'en' => 'Elevation leading to mastery over self and passions.',
                            'la' => 'Elevatio ad dominationem interioris.',
                            'he' => 'התעלות לשליטה עצמית'
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
                'psalm' => 116,
                'psalm_verse' => 04,
                'vulgata' => 114,
                'vulgata_verse' => 4,
                'psalm_link' => '/salmi/116',

                // Contenuti
                'quality' => [
                    'it' => 'Dominio interiore, liberazione dalle influenze negative e forza morale.',
                    'en' => 'Inner mastery, liberation from negative influences and moral strength.',
                    'la' => 'Dominatio interior et liberatio.',
                    'he' => 'שליטה פנימית ושחרור מהשפעות שליליות'
                ],

                'help' => [
                    'it' => 'Aiuta a vincere nemici interiori ed esteriori, rafforzando volontà e stabilità.',
                    'en' => 'Helps overcome inner and outer enemies, strengthening will and stability.',
                    'la' => 'Hostes interiores et exteriores vincere iuvat.',
                    'he' => 'מסייע לנצח אויבים פנימיים וחיצוניים'
                ],

                'prevent' => [
                    'it' => 'Previene debolezza morale, dipendenza e perdita di controllo.',
                    'en' => 'Prevents moral weakness, dependency and loss of control.',
                    'la' => 'Infirmitatem moralem impedit.',
                    'he' => 'מונע חולשה מוסרית ואובדן שליטה'
                ],
            ],

            [
                'number' => 44,
                'name' => 'Yelahiah',

                'definition' => [
                    'it' => 'YLH - Dio che sostiene il giusto combattimento',
                    'en' => 'YLH - God who sustains righteous struggle',
                    'la' => 'YLH - Deus certamen iustum sustinens',
                    'he' => 'YLH - האל המחזק מאבק צודק',
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
                            'it' => 'Disciplina elevata e apprendimento che forma il carattere morale.',
                            'en' => 'Elevated discipline and learning shaping moral character.',
                            'la' => 'Disciplina elevata mores formans.',
                            'he' => 'משמעת גבוהה המעצבת אופי מוסרי'
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
                'psalm' => 98,
                'psalm_verse' => 5,
                'vulgata' => 97,
                'vulgata_verse' => 5,
                'psalm_link' => '/salmi/98',

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
                'name' => 'Sehaliah',

                'definition' => [
                    'it' => 'SHL - Dio che sostiene e rialza',
                    'en' => 'SHL - God who supports and restores',
                    'la' => 'SHL - Deus qui sustinet et restaurat',
                    'he' => 'SHL - האל התומך ומקים',
                ],

                'hebrew_letters' => 'סאל',
                'hebrew_name' => 'סאליה',

                'letter_details' => [
                    [
                        'letter' => 'ס',
                        'name' => 'Samekh',
                        'value' => 60,
                        'meaning' => [
                            'it' => 'Sostegno circolare che protegge e mantiene stabilità.',
                            'en' => 'Circular support that protects and maintains stability.',
                            'la' => 'Sustentatio stabilitatem conservans.',
                            'he' => 'תמיכה השומרת על יציבות'
                        ]
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => [
                            'it' => 'Rivelazione che apre alla guarigione e al recupero.',
                            'en' => 'Revelation opening the way to healing and recovery.',
                            'la' => 'Revelatio ad sanationem aperiens.',
                            'he' => 'התגלות הפותחת לריפוי'
                        ]
                    ],
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => [
                            'it' => 'Insegnamento elevato che corregge e ristabilisce ordine.',
                            'en' => 'Elevated teaching that corrects and restores order.',
                            'la' => 'Doctrina elevata ordinem restituens.',
                            'he' => 'לימוד המתקן ומשיב סדר'
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
                'psalm' => 60,
                'psalm_verse' => 6,
                'vulgata' => 59,
                'vulgata_verse' => 6,
                'psalm_link' => '/salmi/60',

                // Contenuti
                'quality' => [
                    'it' => 'Sostegno nelle prove, recupero della forza e stabilità interiore.',
                    'en' => 'Support in trials, recovery of strength and inner stability.',
                    'la' => 'Sustentatio in probationibus et stabilitas interior.',
                    'he' => 'תמיכה בעת ניסיון ויציבות פנימית'
                ],
                'help' => [
                    'it' => 'Aiuta a rialzarsi dopo cadute e a ritrovare equilibrio e determinazione.',
                    'en' => 'Helps rise after falls and regain balance and determination.',
                    'la' => 'Post lapsum surgere et aequilibrium recuperare iuvat.',
                    'he' => 'מסייע לקום לאחר נפילה ולהשיב איזון'
                ],
                'prevent' => [
                    'it' => 'Previene scoraggiamento, cedimento morale e perdita di forza.',
                    'en' => 'Prevents discouragement, moral collapse and loss of strength.',
                    'la' => 'Desperationem et infirmitatem impedit.',
                    'he' => 'מונע ייאוש וחולשה'
                ],
            ],

            [
                'number' => 46,
                'name' => 'Ariel',

                'definition' => [
                    'it' => 'ARI - Dio che rivela e manifesta',
                    'en' => 'ARI - God who reveals and manifests',
                    'la' => 'ARI - Deus revelans et manifestans',
                    'he' => 'ARI - האל המגלה ומגשים',
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
                            'it' => 'Rinnovamento della coscienza e trasformazione della prospettiva.',
                            'en' => 'Renewal of consciousness and transformation of perspective.',
                            'la' => 'Renovatio conscientiae et mutatio perspectivae.',
                            'he' => 'התחדשות התודעה ושינוי נקודת המבט'
                        ]
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Scintilla divina che concretizza e manifesta il principio spirituale.',
                            'en' => 'Divine spark that concretizes and manifests the spiritual principle.',
                            'la' => 'Scintilla divina principium spirituale manifestans.',
                            'he' => 'ניצוץ אלוהי המגשים את העיקרון הרוחני'
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
                'psalm' => 145,
                'psalm_verse' => 9,
                'vulgata' => 144,
                'vulgata_verse' => 9,
                'psalm_link' => '/salmi/145',

                // Contenuti
                'quality' => [
                    'it' => 'Rivelazione interiore, intuizione lucida e scoperta del significato profondo degli eventi.',
                    'en' => 'Inner revelation, lucid intuition and discovery of the deeper meaning of events.',
                    'la' => 'Revelatio interior et intuitio clara.',
                    'he' => 'גילוי פנימי ואינטואיציה צלולה'
                ],

                'help' => [
                    'it' => 'Aiuta a sviluppare intuizione, percezione simbolica e comprensione spirituale delle situazioni.',
                    'en' => 'Helps develop intuition, symbolic perception and spiritual understanding of situations.',
                    'la' => 'Intuitionem et intellectum spiritualem fovet.',
                    'he' => 'מסייע לפתח אינטואיציה והבנה רוחנית'
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
                'name' => 'Asaliah',

                'definition' => [
                    'it' => 'ASL - Dio che illumina la ricerca della verità',
                    'en' => 'ASL - God who enlightens the search for truth',
                    'la' => 'ASL - Deus veritatem illustrans',
                    'he' => 'ASL - האל המאיר את חיפוש האמת',
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
                            'it' => 'Elevazione dell’intelligenza verso comprensione superiore e sintesi.',
                            'en' => 'Elevation of intelligence toward higher understanding and synthesis.',
                            'la' => 'Elevatio intellectus ad comprehensionem superiorem.',
                            'he' => 'התעלות השכל להבנה גבוהה'
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
                    'it' => 'Previene fanatismo, dogmatismo e confusione dottrinale.',
                    'en' => 'Prevents fanaticism, dogmatism and doctrinal confusion.',
                    'la' => 'Fanatismum et confusionem doctrinalem impedit.',
                    'he' => 'מונע קנאות ובלבול רעיוני'
                ],
            ],

            [
                'number' => 48,
                'name' => 'Mihel',

                'definition' => [
                    'it' => 'MIH - Dio che unisce e armonizza',
                    'en' => 'MIH - God who unites and harmonizes',
                    'la' => 'MIH - Deus qui unit et harmonizat',
                    'he' => 'MIH - האל המאחד ומאזן',
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
                            'it' => 'Scintilla divina che attiva amore puro e intenzione elevata.',
                            'en' => 'Divine spark activating pure love and elevated intention.',
                            'la' => 'Scintilla divina amorem purum excitans.',
                            'he' => 'ניצוץ אלוהי המפעיל אהבה טהורה'
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
                    'it' => 'Amore sincero, armonia affettiva e capacità di integrazione emotiva.',
                    'en' => 'Sincere love, emotional harmony and capacity for affective integration.',
                    'la' => 'Amor sincerus et harmonia affectiva.',
                    'he' => 'אהבה כנה והרמוניה רגשית'
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
                'name' => 'Vehuel',

                'definition' => [
                    'it' => 'VHL - Dio grande ed elevato',
                    'en' => 'VHL - God great and exalted',
                    'la' => 'VHL - Deus magnus et exaltatus',
                    'he' => 'VHL - האל הגדול והנשגב',
                ],

                'hebrew_letters' => 'והל',
                'hebrew_name' => 'והואל',

                'letter_details' => [
                    [
                        'letter' => 'ו',
                        'name' => 'Vav',
                        'value' => 6,
                        'meaning' => [
                            'it' => 'Canalizzazione e collegamento tra dimensione superiore e manifestazione.',
                            'en' => 'Channeling and connection between higher dimension and manifestation.',
                            'la' => 'Canalizatio inter superius et manifestationem.',
                            'he' => 'חיבור ותיעול בין העליון והגלוי'
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
                            'it' => 'Aspirazione e slancio verso ideali alti e nobiltà interiore.',
                            'en' => 'Aspiration and momentum toward high ideals and inner nobility.',
                            'la' => 'Aspiratio ad alta idealia.',
                            'he' => 'שאיפה לאידיאלים גבוהים'
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
                'psalm' => 88,
                'psalm_verse' => 13,
                'vulgata' => 87,
                'vulgata_verse' => 13,
                'psalm_link' => '/salmi/88',

                // Contenuti
                'quality' => [
                    'it' => 'Nobiltà d’animo, elevazione spirituale e aspirazione verso ideali superiori.',
                    'en' => 'Nobility of spirit, spiritual elevation and aspiration toward higher ideals.',
                    'la' => 'Nobilitas animi et elevatio spiritualis.',
                    'he' => 'אצילות רוח והתעלות רוחנית'
                ],
                'help' => [
                    'it' => 'Aiuta a superare mediocrità e materialismo, orientando verso valori elevati.',
                    'en' => 'Helps overcome mediocrity and materialism, orienting toward higher values.',
                    'la' => 'Mediocritatem superare et ad valores altos dirigere iuvat.',
                    'he' => 'מסייע להתגבר על חומרנות ולשאוף לערכים גבוהים'
                ],
                'prevent' => [
                    'it' => 'Previene bassezza morale, perdita di ideali e chiusura spirituale.',
                    'en' => 'Prevents moral baseness, loss of ideals and spiritual closure.',
                    'la' => 'Vilitatem moralem et clausuram spiritualem impedit.',
                    'he' => 'מונע ירידה מוסרית ואובדן אידיאלים'
                ],
            ],

            [
                'number' => 50,
                'name' => 'Daniel',

                'definition' => [
                    'it' => 'DNY - Dio che giudica con equità',
                    'en' => 'DNY - God who judges with fairness',
                    'la' => 'DNY - Deus aequitate iudicans',
                    'he' => 'DNY - האל השופט בצדק',
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
                            'it' => 'Perseveranza e senso di giustizia che maturano attraverso le prove.',
                            'en' => 'Perseverance and sense of justice matured through trials.',
                            'la' => 'Perseverantia et sensus iustitiae per probationes.',
                            'he' => 'התמדה ותחושת צדק המתפתחות דרך ניסיון'
                        ]
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Scintilla divina che illumina il giudizio e guida la parola.',
                            'en' => 'Divine spark illuminating judgment and guiding speech.',
                            'la' => 'Scintilla divina iudicium illuminans.',
                            'he' => 'ניצוץ אלוהי המאיר את השיפוט'
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
                'psalm' => 103,
                'psalm_verse' => 8,
                'vulgata' => 102,
                'vulgata_verse' => 8,
                'psalm_link' => '/salmi/103',

                // Contenuti
                'quality' => [
                    'it' => 'Eloquenza, diplomazia e senso equilibrato della giustizia.',
                    'en' => 'Eloquence, diplomacy and balanced sense of justice.',
                    'la' => 'Eloquentia et iustitia aequilibrata.',
                    'he' => 'רהיטות וצדק מאוזן'
                ],
                'help' => [
                    'it' => 'Aiuta a comunicare con saggezza e a risolvere conflitti con equilibrio e rettitudine.',
                    'en' => 'Helps communicate wisely and resolve conflicts with balance and integrity.',
                    'la' => 'Sapienter communicare et discordias componere iuvat.',
                    'he' => 'מסייע לתקשר בחכמה ולפתור סכסוכים בצדק'
                ],
                'prevent' => [
                    'it' => 'Previene arroganza verbale, rigidità morale e giudizio distorto.',
                    'en' => 'Prevents verbal arrogance, moral rigidity and distorted judgment.',
                    'la' => 'Superbiam verbalem et iudicium pravum impedit.',
                    'he' => 'מונע יהירות מילולית ושיפוט מעוות'
                ],
            ],

            [
                'number' => 51,
                'name' => 'Hahasiah',

                'definition' => [
                    'it' => 'HHS - Dio della guarigione e della conoscenza sacra',
                    'en' => 'HHS - God of healing and sacred knowledge',
                    'la' => 'HHS - Deus sanationis et scientiae sacrae',
                    'he' => 'HHS - אל הריפוי והידע הקדוש',
                ],

                'hebrew_letters' => 'חחש',
                'hebrew_name' => 'חחשיה',

                'letter_details' => [
                    [
                        'letter' => 'ח',
                        'name' => 'Chet',
                        'value' => 8,
                        'meaning' => [
                            'it' => 'Forza vitale che attiva guarigione profonda.',
                            'en' => 'Vital force activating deep healing.',
                            'la' => 'Vis vitalis sanationem profundam excitans.',
                            'he' => 'כוח חיים המפעיל ריפוי עמוק'
                        ]
                    ],
                    [
                        'letter' => 'ח',
                        'name' => 'Chet',
                        'value' => 8,
                        'meaning' => [
                            'it' => 'Rafforzamento della capacità rigenerativa.',
                            'en' => 'Reinforcement of regenerative capacity.',
                            'la' => 'Confirmatio virtutis regenerativae.',
                            'he' => 'חיזוק יכולת ההתחדשות'
                        ]
                    ],
                    [
                        'letter' => 'ש',
                        'name' => 'Shin',
                        'value' => 300,
                        'meaning' => [
                            'it' => 'Trasformazione profonda attraverso il fuoco della purificazione.',
                            'en' => 'Deep transformation through the fire of purification.',
                            'la' => 'Transformatio per ignem purificationis.',
                            'he' => 'שינוי עמוק דרך אש הטיהור'
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
                    'it' => 'Guarigione spirituale, comprensione delle leggi naturali e rigenerazione interiore.',
                    'en' => 'Spiritual healing, understanding of natural laws and inner regeneration.',
                    'la' => 'Sanatio spiritualis et cognitio legum naturalium.',
                    'he' => 'ריפוי רוחני והבנת חוקי הטבע'
                ],
                'help' => [
                    'it' => 'Aiuta a comprendere e utilizzare le forze della natura con equilibrio e responsabilità.',
                    'en' => 'Helps understand and use natural forces with balance and responsibility.',
                    'la' => 'Vires naturae cum aequilibrio uti iuvat.',
                    'he' => 'מסייע להבין ולהשתמש בכוחות הטבע באחריות'
                ],
                'prevent' => [
                    'it' => 'Previene abuso di conoscenza, squilibrio energetico e disarmonia con la natura.',
                    'en' => 'Prevents misuse of knowledge, energetic imbalance and disharmony with nature.',
                    'la' => 'Abusum scientiae et inharmoniam impedit.',
                    'he' => 'מונע שימוש לרעה בידע וחוסר הרמוניה'
                ],
            ],

            [
                'number' => 52,
                'name' => 'Ymamiah',

                'definition' => [
                    'it' => 'OMM - Dio che libera dall’oscurità',
                    'en' => 'OMM - God who liberates from obscurity',
                    'la' => 'OMM - Deus qui ab obscuritate liberat',
                    'he' => 'OMM - האל המשחרר מן החושך',
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
                'psalm' => 7,
                'psalm_verse' => 9,
                'vulgata' => 7,
                'vulgata_verse' => 10,
                'psalm_link' => '/salmi/7',

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
                'name' => 'Nanael',

                'definition' => [
                    'it' => 'NNA - Dio che illumina attraverso la conoscenza',
                    'en' => 'NNA - God who enlightens through knowledge',
                    'la' => 'NNA - Deus per scientiam illuminans',
                    'he' => 'NNA - האל המאיר דרך הדעת',
                ],

                'hebrew_letters' => 'ננא',
                'hebrew_name' => 'ננאאל',

                'letter_details' => [
                    [
                        'letter' => 'נ',
                        'name' => 'Nun',
                        'value' => 50,
                        'meaning' => [
                            'it' => 'Perseveranza e continuità vitale.',
                            'en' => 'Perseverance and vital continuity.',
                            'la' => 'Perseverantia et continuatio vitalis.',
                            'he' => 'התמדה והמשכיות חיים'
                        ]
                    ],
                    [
                        'letter' => 'נ',
                        'name' => 'Nun',
                        'value' => 50,
                        'meaning' => [
                            'it' => 'Rafforzamento della crescita interiore.',
                            'en' => 'Strengthening of inner growth.',
                            'la' => 'Confirmatio incrementi interioris.',
                            'he' => 'חיזוק הצמיחה הפנימית'
                        ]
                    ],
                    [
                        'letter' => 'א',
                        'name' => 'Aleph',
                        'value' => 1,
                        'meaning' => [
                            'it' => 'Unità spirituale e principio originario.',
                            'en' => 'Spiritual unity and originating principle.',
                            'la' => 'Unitas spiritualis et principium originis.',
                            'he' => 'אחדות רוחנית ועיקרון ראשוני'
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
                'psalm' => 119,
                'psalm_verse' => 18,
                'vulgata' => 118,
                'vulgata_verse' => 18,
                'psalm_link' => '/salmi/119',

                // Contenuti
                'quality' => [
                    'it' => 'Conoscenza spirituale e profondità contemplativa.',
                    'en' => 'Spiritual knowledge and contemplative depth.',
                    'la' => 'Scientia spiritualis et contemplatio profunda.',
                    'he' => 'ידע רוחני ועומק התבוננות'
                ],
                'help' => [
                    'it' => 'Favorisce studio, meditazione e comprensione delle leggi superiori.',
                    'en' => 'Encourages study, meditation and understanding of higher laws.',
                    'la' => 'Studium et meditationem fovet.',
                    'he' => 'מעודד לימוד והעמקה רוחנית'
                ],
                'prevent' => [
                    'it' => 'Previene superficialità e chiusura spirituale.',
                    'en' => 'Prevents superficiality and spiritual closure.',
                    'la' => 'Superficialitatem et clausuram spiritualem impedit.',
                    'he' => 'מונע שטחיות וסגירות רוחנית'
                ],
            ],

            [
                'number' => 54,
                'name' => 'Nithael',

                'definition' => [
                    'it' => 'NYT - Dio che mantiene stabilità e continuità',
                    'en' => 'NYT - God who maintains stability and continuity',
                    'la' => 'NYT - Deus stabilitatem et continuationem servans',
                    'he' => 'NYT - האל השומר על יציבות והמשכיות',
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
                'name' => 'Mebahiah',

                'definition' => [
                    'it' => 'MBH - Dio che illumina la coscienza',
                    'en' => 'MBH - God who enlightens conscience',
                    'la' => 'MBH - Deus conscientiam illuminans',
                    'he' => 'MBH - האל המאיר את המצפון',
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
                'psalm' => 102,
                'psalm_verse' => 1,
                'vulgata' => 101,
                'vulgata_verse' => 1,
                'psalm_link' => '/salmi/102',

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
                    'it' => 'Previene disordine morale e incoerenza.',
                    'en' => 'Prevents moral disorder and inconsistency.',
                    'la' => 'Inconstantiam et confusionem moralem impedit.',
                    'he' => 'מונע חוסר סדר מוסרי'
                ],
            ],

            [
                'number' => 56,
                'name' => 'Poiel',

                'definition' => [
                    'it' => 'POY - Dio che realizza con giustizia',
                    'en' => 'POY - God who fulfills with justice',
                    'la' => 'POY - Deus qui iuste adimplet',
                    'he' => 'POY - האל המגשים בצדק',
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
                            'it' => 'Canalizzazione e collegamento tra desiderio e realtà.',
                            'en' => 'Channeling and connection between desire and reality.',
                            'la' => 'Connexio inter desiderium et realitatem.',
                            'he' => 'חיבור בין הרצון למציאות'
                        ]
                    ],
                    [
                        'letter' => 'י',
                        'name' => 'Yod',
                        'value' => 10,
                        'meaning' => [
                            'it' => 'Realizzazione concreta e atto creativo.',
                            'en' => 'Concrete realization and creative act.',
                            'la' => 'Actus creativus et realisatio concreta.',
                            'he' => 'מימוש ופעולה יוצרת'
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
                'psalm' => 145,
                'psalm_verse' => 19,
                'vulgata' => 144,
                'vulgata_verse' => 19,
                'psalm_link' => '/salmi/145',

                // Contenuti
                'quality' => [
                    'it' => 'Realizzazione legittima e soddisfazione equilibrata dei bisogni.',
                    'en' => 'Legitimate fulfillment and balanced satisfaction of needs.',
                    'la' => 'Adimpletio legitima et aequilibrata.',
                    'he' => 'הגשמה מאוזנת וצודקת'
                ],
                'help' => [
                    'it' => 'Aiuta a ottenere ciò che è giusto e necessario con misura.',
                    'en' => 'Helps obtain what is just and necessary with balance.',
                    'la' => 'Iustum et necessarium obtinere iuvat.',
                    'he' => 'מסייע להשיג את הדרוש בצדק'
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
                'name' => 'Nemamiah',

                'definition' => [
                    'it' => 'NMM - Dio che concede discernimento e strategia',
                    'en' => 'NMM - God who grants discernment and strategy',
                    'la' => 'NMM - Deus prudentiam et strategiam largiens',
                    'he' => 'NMM - האל המעניק תבונה ואסטרטגיה',
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
                'psalm' => 115,
                'psalm_verse' => 11,
                'vulgata' => 113,
                'vulgata_verse' => 11,
                'psalm_link' => '/salmi/115',

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
                'name' => 'Yeialel',

                'definition' => [
                    'it' => 'YYL - Dio che illumina la mente',
                    'en' => 'YYL - God who enlightens the mind',
                    'la' => 'YYL - Deus mentem illuminans',
                    'he' => 'YYL - האל המאיר את הדעת',
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
                            'it' => 'Rafforzamento della coscienza mentale.',
                            'en' => 'Strengthening of mental awareness.',
                            'la' => 'Confirmatio conscientiae mentis.',
                            'he' => 'חיזוק התודעה המנטלית'
                        ]
                    ],
                    [
                        'letter' => 'ל',
                        'name' => 'Lamed',
                        'value' => 30,
                        'meaning' => [
                            'it' => 'Apprendimento e discernimento elevato.',
                            'en' => 'Elevated learning and discernment.',
                            'la' => 'Doctrina et discretio elevata.',
                            'he' => 'למידה והבחנה עליונה'
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
                'psalm' => 99,
                'psalm_verse' => 5,
                'vulgata' => 98,
                'vulgata_verse' => 5,
                'psalm_link' => '/salmi/99',

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
                'name' => 'Harahel',

                'definition' => [
                    'it' => 'HRH - Dio che amplia l’intelligenza',
                    'en' => 'HRH - God who expands intelligence',
                    'la' => 'HRH - Deus intelligentiam amplificans',
                    'he' => 'HRH - האל המרחיב את השכל',
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
                    'it' => 'Aiuta a sviluppare intelligenza pratica e capacità di strutturare idee.',
                    'en' => 'Helps develop practical intelligence and structured ideas.',
                    'la' => 'Intelligentiam practicam evolvere iuvat.',
                    'he' => 'מסייע לפתח חשיבה מעשית ומסודרת'
                ],
                'prevent' => [
                    'it' => 'Previene dispersione mentale e disorganizzazione.',
                    'en' => 'Prevents mental dispersion and disorganization.',
                    'la' => 'Confusionem mentis impedit.',
                    'he' => 'מונע פיזור וחוסר סדר מחשבתי'
                ],
            ],

            [
                'number' => 60,
                'name' => 'Mitzrael',

                'definition' => [
                    'it' => 'MZR - Dio che rettifica e ristabilisce equilibrio',
                    'en' => 'MZR - God who rectifies and restores balance',
                    'la' => 'MZR - Deus qui aequilibrium restituit',
                    'he' => 'MZR - האל המאזן והמתקן',
                ],

                'hebrew_letters' => 'מצר',
                'hebrew_name' => 'מצראל',

                'letter_details' => [
                    [
                        'letter' => 'מ',
                        'name' => 'Mem',
                        'value' => 40,
                        'meaning' => [
                            'it' => 'Processo di purificazione e riequilibrio.',
                            'en' => 'Process of purification and rebalancing.',
                            'la' => 'Purificatio et restitutio aequilibrii.',
                            'he' => 'טיהור ואיזון מחודש'
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
                            'it' => 'Ristrutturazione mentale e cambiamento consapevole.',
                            'en' => 'Mental restructuring and conscious change.',
                            'la' => 'Reformatio mentis et mutatio conscia.',
                            'he' => 'שינוי תודעתי ומבני'
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
                    'it' => 'Riequilibrio interiore e rettificazione delle distorsioni.',
                    'en' => 'Inner rebalancing and correction of distortions.',
                    'la' => 'Restitutio interior et correctio errorum.',
                    'he' => 'איזון ותיקון פנימי'
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
                'name' => 'Umabel',

                'definition' => [
                    'it' => 'AVM - Dio che unisce e armonizza',
                    'en' => 'AVM - God who unites and harmonizes',
                    'la' => 'AVM - Deus qui unit et harmonizat',
                    'he' => 'AVM - האל המאחד ומאזן',
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
                            'it' => 'Processo di maturazione e comprensione.',
                            'en' => 'Process of maturation and understanding.',
                            'la' => 'Processus maturationis et intellectus.',
                            'he' => 'תהליך הבשלה והבנה'
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
                    'it' => 'Fondamento e coerenza interiore.',
                    'en' => 'Foundation and inner coherence.',
                    'la' => 'Fundamentum et constantia interior.',
                    'he' => 'יסוד ועקביות פנימית'
                ],
                'help' => [
                    'it' => 'Favorisce stabilità e continuità nelle relazioni.',
                    'en' => 'Fosters stability and continuity in relationships.',
                    'la' => 'Stabilitatem et continuationem fovet.',
                    'he' => 'מחזק יציבות והמשכיות'
                ],
                'prevent' => [
                    'it' => 'Previene frammentazione e disconnessione.',
                    'en' => 'Prevents fragmentation and disconnection.',
                    'la' => 'Fragmentationem impedit.',
                    'he' => 'מונע פירוק וחוסר חיבור'
                ],
            ],

            [
                'number' => 62,
                'name' => 'Yahhel',

                'definition' => [
                    'it' => 'YHH - Manifestazione del Principio Divino',
                    'en' => 'YHH - Manifestation of the Divine Principle',
                    'la' => 'YHH - Manifestatio Principii Divini',
                    'he' => 'YHH - התגלות העיקרון האלוהי',
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
                            'it' => 'Apertura e manifestazione.',
                            'en' => 'Opening and manifestation.',
                            'la' => 'Apertio et manifestatio.',
                            'he' => 'פתיחה והתגלות'
                        ]
                    ],
                    [
                        'letter' => 'ה',
                        'name' => 'He',
                        'value' => 5,
                        'meaning' => [
                            'it' => 'Espansione della manifestazione.',
                            'en' => 'Expansion of manifestation.',
                            'la' => 'Expansio manifestationis.',
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
                    'it' => 'Chiarezza contemplativa e apertura alla dimensione divina.',
                    'en' => 'Contemplative clarity and openness to the divine dimension.',
                    'la' => 'Claritas contemplativa et apertio ad dimensionem divinam.',
                    'he' => 'בהירות והתבוננות רוחנית'
                ],
                'help' => [
                    'it' => 'Favorisce comprensione spirituale e stabilità interiore.',
                    'en' => 'Fosters spiritual understanding and inner stability.',
                    'la' => 'Intellectum spiritualem et stabilitatem interiorem promovet.',
                    'he' => 'מסייע להבנה רוחנית וליציבות פנימית'
                ],
                'prevent' => [
                    'it' => 'Previene dispersione mentale e chiusura alla trascendenza.',
                    'en' => 'Prevents mental dispersion and closure to transcendence.',
                    'la' => 'Dispersionem mentis et clausuram transcendentalem impedit.',
                    'he' => 'מונע פיזור דעת וסגירות רוחנית'
                ],
            ],

            [
                'number' => 63,
                'name' => 'Anauel',

                'definition' => [
                    'it' => 'ANV - Dio che risponde e regola lo scambio',
                    'en' => 'ANV - God who responds and regulates exchange',
                    'la' => 'ANV - Deus qui respondet et commercium ordinat',
                    'he' => 'ANV - האל המשיב ומסדיר חילוף',
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
                'psalm' => 2,
                'psalm_verse' => 11,
                'vulgata' => 2,
                'vulgata_verse' => 11,
                'psalm_link' => '/salmi/2',

                // Contenuti
                'quality' => [
                    'it' => 'Commercio giusto e correttezza nello scambio.',
                    'en' => 'Just commerce and fairness in exchange.',
                    'la' => 'Commercium iustum et aequitas.',
                    'he' => 'מסחר צודק ויושר בחילוף'
                ],
                'help' => [
                    'it' => 'Aiuta a gestire scambi materiali e comunicativi con rettitudine.',
                    'en' => 'Helps manage material and communicative exchanges with integrity.',
                    'la' => 'Commercium et communicationem cum rectitudine moderatur.',
                    'he' => 'מסייע בניהול חילופים ביושר'
                ],
                'prevent' => [
                    'it' => 'Previene frodi, squilibri e cattiva comunicazione.',
                    'en' => 'Prevents fraud, imbalance and miscommunication.',
                    'la' => 'Fraudem et inaequalitatem impedit.',
                    'he' => 'מונע תרמית וחוסר איזון'
                ],
            ],

            [
                'number' => 64,
                'name' => 'Mehiel',

                'definition' => [
                    'it' => 'MHI - Dio che vivifica e ispira',
                    'en' => 'MHI - God who gives life and inspiration',
                    'la' => 'MHI - Deus qui vivificat et inspirat',
                    'he' => 'MHI - האל המחיה והמעורר',
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
                'name' => 'Damabiah',

                'definition' => [
                    'it' => 'DMB - Dio che purifica e protegge',
                    'en' => 'DMB - God who purifies and protects',
                    'la' => 'DMB - Deus qui purificat et protegit',
                    'he' => 'DMB - האל המטהר והמגן',
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
                    'it' => 'Aiuta a rinnovare e stabilizzare nei momenti difficili.',
                    'en' => 'Helps renew and stabilize in difficult moments.',
                    'la' => 'In difficultatibus renovat et stabilit.',
                    'he' => 'מסייע בהתחדשות וביציבות'
                ],
                'prevent' => [
                    'it' => 'Previene instabilità e smarrimento.',
                    'en' => 'Prevents instability and disorientation.',
                    'la' => 'Instabilitatem impedit.',
                    'he' => 'מונע חוסר יציבות ובלבול'
                ],
            ],

            [
                'number' => 66,
                'name' => 'Manakel',

                'definition' => [
                    'it' => 'MNQ - Dio che sostiene e ristabilisce ordine',
                    'en' => 'MNQ - God who sustains and restores order',
                    'la' => 'MNQ - Deus qui sustinet et ordinem restituit',
                    'he' => 'MNQ - האל התומך ומשיב סדר',
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
                // 'degree_start' => 5,
                // 'degree_end' => 10,
                'orientation' => 'EST',

                // Salmo
                'psalm' => 38,
                'psalm_verse' => 22,
                'vulgata' => 37,
                'vulgata_verse' => 22,
                'psalm_link' => '/salmi/38',

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
                'name' => 'Eyael',

                'definition' => [
                    'it' => 'AYV - Dio che manifesta comprensione',
                    'en' => 'AYV - God who manifests understanding',
                    'la' => 'AYV - Deus qui intellectum manifestat',
                    'he' => 'AYV - האל המגלה הבנה',
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
                // 'degree_start' => 10,
                // 'degree_end' => 15,
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
                    'it' => 'Profondità di comprensione e discernimento interiore.',
                    'en' => 'Depth of understanding and inner discernment.',
                    'la' => 'Profunditas intellectus et discretio interior.',
                    'he' => 'עומק הבנה והבחנה פנימית'
                ],
                'help' => [
                    'it' => 'Favorisce chiarezza mentale e visione lucida.',
                    'en' => 'Fosters mental clarity and lucid vision.',
                    'la' => 'Claritatem mentis et visionem lucidam promovet.',
                    'he' => 'מסייע לבהירות מחשבתית וראייה צלולה'
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
                'name' => 'Habuwyah', // Dio che dona con liberalità

                'definition' => [
                    'it' => 'HBV - Dio che custodisce la vita e la sostiene',
                    'en' => 'HBV - God who guards life and sustains it',
                    'la' => 'HBV - Deus qui vitam custodit et sustentat',
                    'he' => 'HBV - האל השומר על החיים ותומך בהם',
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
                // 'degree_start' => 15,
                // 'degree_end' => 20,
                'orientation' => 'EST',

                // Salmo
                'psalm' => 146, // 106:1? per Yeyayel
                'psalm_verse' => 5,
                'vulgata' => 145,
                'vulgata_verse' => 5,
                'psalm_link' => '/salmi/146',

                // Trigramma
                // 'trigram_sum' => 16,
                // 'trigram_reduction' => 7,
                // Contenuti
                'quality' => [
                    'it' => 'Sostegno vitale e ristoro delle energie.',
                    'en' => 'Vital support and restoration of strength.',
                    'la' => 'Restitutio virium et sustentatio vitalis.',
                    'he' => 'השבת כוחות ותמיכה חיונית'
                ],
                'help' => [
                    'it' => 'Favorisce guarigione e recupero delle forze.',
                    'en' => 'Fosters healing and recovery of strength.',
                    'la' => 'Sanationem et recuperationem promovet.',
                    'he' => 'מסייע לריפוי ולהתחזקות'
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
                'name' => 'Rochel',

                'definition' => [
                    'it' => 'RHL - Dio che rinnova e ristabilisce l’ordine',
                    'en' => 'RHL - God who renews and restores order',
                    'la' => 'RHL - Deus qui renovat et ordinem restituit',
                    'he' => 'RHL - האל מחדש ומשיב סדר',
                ],

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
                    'it' => 'Rinnovamento e ripristino dell’ordine interiore.',
                    'en' => 'Renewal and restoration of inner order.',
                    'la' => 'Renovatio et restitutio ordinis interioris.',
                    'he' => 'חידוש והשבת סדר פנימי'
                ],
                'help' => [
                    'it' => 'Favorisce recupero e riallineamento.',
                    'en' => 'Fosters recovery and realignment.',
                    'la' => 'Recuperationem et realignment promovet.',
                    'he' => 'מסייע בהתחדשות ובאיזון'
                ],
                'prevent' => [
                    'it' => 'Previene disordine e dispersione.',
                    'en' => 'Prevents disorder and dispersion.',
                    'la' => 'Inordinationem impedit.',
                    'he' => 'מונע חוסר סדר ופיזור'
                ],
            ],
            /*
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
                'name' => 'Haiayel',
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
            */
        ];

        foreach ($angels as $angel) {
            AngelsMeaning::updateOrCreate(
                ['number' => $angel['number']],
                $angel
            );
        }
    }
}
