<?php

namespace Database\Seeders;

use App\Models\Religious\HebraicMeaning;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HebraicMeaningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $letters = [

            /*
            |--------------------------------------------------------------------------
            | 22 LETTERE PRIMARIE
            |--------------------------------------------------------------------------
            */

            [
                'number' => 1,
                'letter' => 'א',
                'is_primary' => true,
                'is_final' => false,
                'parent_letter' => null,

                'gematria_standard' => 1,
                'gematria_extended' => null,

                'pronunciation' => [
                    'it' => 'Colpo di glottide (occlusiva glottidale sorda), spesso muta nel moderno ebraico',
                    'en' => 'Glottal stop, often silent in modern Hebrew',
                    'la' => 'Occlusiva glottalis',
                    'he' => 'עיצור סדקי'
                ],

                'proto_origin' => [
                    'it' => 'Pittogramma proto-sinaitico raffigurante una testa di bue stilizzata (ʾalp)',
                    'en' => 'Proto-Sinaitic pictogram representing a stylized ox head (ʾalp)',
                    'la' => 'Caput bovis stylizatum',
                    'he' => 'ראש שור קדום'
                ],

                'historical_development' => [
                    'it' => 'Deriva dal segno proto-sinaitico ʾalp (ca. XVIII–XVI sec. a.C.), evoluto nel fenicio 𐤀, poi nel paleo-ebraico, fino alla forma aramaica quadrata adottata nell’ebraico imperiale persiano (V sec. a.C.)',
                    'en' => 'From Proto-Sinaitic ʾalp (18th–16th c. BCE), through Phoenician 𐤀, Paleo-Hebrew, to Imperial Aramaic square script (5th c. BCE)',
                    'la' => 'Ex scriptura proto-sinaitica ad formam quadratam aramaicam',
                    'he' => 'מהכתב הפרוטו-סינאי לכתב המרובע הארמי'
                ],

                'classification_sefer_yetzirah' => [
                    'it' => 'Lettera Madre (Sefer Yetzirah 1:2)',
                    'en' => 'Mother Letter (Sefer Yetzirah 1:2)',
                    'la' => 'Littera Mater',
                    'he' => 'אות אם'
                ],

                'traditional_symbolism' => [
                    'it' => 'Nel livello peshat rappresenta il principio iniziale. Nella gematria vale 1: unità, origine, indivisibilità. Nella struttura energetica cabalistica è associata all’elemento Aria e al respiro primordiale.',
                    'en' => 'At the peshat level it represents beginning. Gematria value 1: unity and indivisibility. In Kabbalistic structure associated with Air and primordial breath.',
                    'la' => 'Unitas et principium; valor 1.',
                    'he' => 'אחדות והתחלה; ערך 1'
                ],
            ],

            [
                'number' => 2,
                'letter' => 'ב',
                'is_primary' => true,
                'is_final' => false,
                'parent_letter' => null,

                'gematria_standard' => 2,
                'gematria_extended' => null,

                'pronunciation' => [
                    'it' => 'Consonante occlusiva bilabiale sonora /b/; fricativa /v/ in assenza di dagesh',
                    'en' => 'Voiced bilabial stop /b/; fricative /v/ without dagesh',
                    'la' => 'Occlusiva bilabialis sonora',
                    'he' => 'עיצור דו-שפתי קולי'
                ],

                'proto_origin' => [
                    'it' => 'Pittogramma proto-sinaitico raffigurante una pianta di casa o struttura abitativa (bayt)',
                    'en' => 'Proto-Sinaitic pictogram representing a house plan (bayt)',
                    'la' => 'Domus schematica',
                    'he' => 'בית קדום'
                ],

                'historical_development' => [
                    'it' => 'Dal segno proto-sinaitico bayt (XVIII–XVI sec. a.C.) al fenicio 𐤁, quindi paleo-ebraico, fino alla forma quadrata aramaica stabilizzata nel periodo persiano',
                    'en' => 'From Proto-Sinaitic bayt to Phoenician 𐤁, Paleo-Hebrew, and later Imperial Aramaic square script',
                    'la' => 'Ex scriptura proto-sinaitica ad aramaicam quadratam',
                    'he' => 'מהכתב הפרוטו-סינאי לכתב המרובע'
                ],

                'classification_sefer_yetzirah' => [
                    'it' => 'Lettera Doppia (Sefer Yetzirah 1:4)',
                    'en' => 'Double Letter (Sefer Yetzirah 1:4)',
                    'la' => 'Littera Duplex',
                    'he' => 'אות כפולה'
                ],

                'traditional_symbolism' => [
                    'it' => 'Nel livello peshat indica la casa o lo spazio interno. Gematria 2: dualità, polarità, relazione. Nella tradizione cabalistica è associata al principio della creazione come spazio contenitore (Bereshit inizia con Bet).',
                    'en' => 'At peshat level it denotes house or interior space. Gematria 2: duality and polarity. In Kabbalah associated with creation as containing space (Torah begins with Bet).',
                    'la' => 'Domus et dualitas; valor 2.',
                    'he' => 'בית ודואליות; ערך 2'
                ],
            ],

            [
                'number' => 3,
                'letter' => 'ג',
                'is_primary' => true,
                'is_final' => false,
                'parent_letter' => null,

                'gematria_standard' => 3,
                'gematria_extended' => null,

                'pronunciation' => [
                    'it' => 'Occlusiva velare sonora /g/; fricativa sonora /ɣ/ nel sistema tiberiense senza dagesh',
                    'en' => 'Voiced velar stop /g/; voiced fricative /ɣ/ without dagesh in Tiberian tradition',
                    'la' => 'Occlusiva velaris sonora',
                    'he' => 'עיצור וילוני קולי'
                ],

                'proto_origin' => [
                    'it' => 'Probabile pittogramma proto-sinaitico raffigurante un bastone da lancio o strumento ricurvo; associazione successiva acrofonica al termine “gamal” (cammello)',
                    'en' => 'Likely Proto-Sinaitic pictogram of a throwing stick; later acrophonic association with “gamal” (camel)',
                    'la' => 'Instrumentum curvum; postea camelus',
                    'he' => 'כלי מעוקל; קישור מאוחר לגמל'
                ],

                'historical_development' => [
                    'it' => 'Dal segno proto-sinaitico (XVIII–XVI sec. a.C.) al fenicio 𐤂, poi paleo-ebraico; la forma quadrata aramaica si stabilizza nel periodo persiano achemenide',
                    'en' => 'From Proto-Sinaitic sign to Phoenician 𐤂, Paleo-Hebrew, then standardized in Imperial Aramaic square script',
                    'la' => 'Transitus ad scripturam aramaicam quadratam',
                    'he' => 'מעבר לכתב המרובע הארמי'
                ],

                'classification_sefer_yetzirah' => [
                    'it' => 'Lettera Doppia (Sefer Yetzirah 1:4)',
                    'en' => 'Double Letter (Sefer Yetzirah 1:4)',
                    'la' => 'Littera Duplex',
                    'he' => 'אות כפולה'
                ],

                'traditional_symbolism' => [
                    'it' => 'Nel livello peshat richiama il movimento e il cammino. Gematria 3: dinamica triadica, equilibrio tra opposti. Nella tradizione rabbinica Gimel è associata all’idea di “ghemilut chasadim” (atto di generosità).',
                    'en' => 'At peshat level linked to movement and progression. Gematria 3: triadic dynamism and balance. Rabbinic tradition connects Gimel with “ghemilut chasadim” (acts of kindness).',
                    'la' => 'Motus et triadas; valor 3.',
                    'he' => 'תנועה ושלישייה; ערך 3'
                ],
            ],

            [
                'number' => 4,
                'letter' => 'ד',
                'is_primary' => true,
                'is_final' => false,
                'parent_letter' => null,

                'gematria_standard' => 4,
                'gematria_extended' => null,

                'pronunciation' => [
                    'it' => 'Occlusiva dentale sonora /d/; fricativa /ð/ nella tradizione tiberiense senza dagesh',
                    'en' => 'Voiced dental stop /d/; fricative /ð/ without dagesh in Tiberian tradition',
                    'la' => 'Occlusiva dentalis sonora',
                    'he' => 'עיצור דנטלי קולי'
                ],

                'proto_origin' => [
                    'it' => 'Pittogramma proto-sinaitico rappresentante una porta o ingresso (dal termine “delet”)',
                    'en' => 'Proto-Sinaitic pictogram representing a door (from “delet”)',
                    'la' => 'Porta schematica',
                    'he' => 'דלת קדומה'
                ],

                'historical_development' => [
                    'it' => 'Dal proto-sinaitico al fenicio 𐤃, poi paleo-ebraico; forma quadrata aramaica stabilizzata tra V–IV sec. a.C.',
                    'en' => 'From Proto-Sinaitic to Phoenician 𐤃, then Paleo-Hebrew, and later Imperial Aramaic square script',
                    'la' => 'Evolutio ad formam aramaicam quadratam',
                    'he' => 'התפתחות לכתב המרובע הארמי'
                ],

                'classification_sefer_yetzirah' => [
                    'it' => 'Lettera Doppia (Sefer Yetzirah 1:4)',
                    'en' => 'Double Letter (Sefer Yetzirah 1:4)',
                    'la' => 'Littera Duplex',
                    'he' => 'אות כפולה'
                ],

                'traditional_symbolism' => [
                    'it' => 'Nel livello peshat indica una soglia o apertura. Gematria 4: stabilità strutturale, dimensione spaziale (quattro direzioni). Nella tradizione esegetica rappresenta l’idea di passaggio tra interno ed esterno.',
                    'en' => 'At peshat level denotes a threshold or doorway. Gematria 4: structural stability and spatial dimension (four directions). In exegetical tradition symbolizes transition between inner and outer realms.',
                    'la' => 'Limen et stabilitas; valor 4.',
                    'he' => 'סף ומעבר; ערך 4'
                ],
            ],

            [
                'number' => 5,
                'letter' => 'ה',
                'is_primary' => true,
                'is_final' => false,
                'parent_letter' => null,

                'gematria_standard' => 5,
                'gematria_extended' => null,

                'pronunciation' => [
                    'it' => 'Fricativa glottidale sorda /h/; spesso debole o muta in ebraico moderno',
                    'en' => 'Voiceless glottal fricative /h/; often weak or silent in Modern Hebrew',
                    'la' => 'Fricativa glottalis',
                    'he' => 'עיצור סדקי חוכך'
                ],

                'proto_origin' => [
                    'it' => 'Pittogramma proto-sinaitico raffigurante una figura umana con le braccia alzate (esclamazione o invocazione)',
                    'en' => 'Proto-Sinaitic pictogram of a human figure with raised arms (exclamation or invocation)',
                    'la' => 'Figura humana manibus elevatis',
                    'he' => 'דמות אדם עם ידיים מורמות'
                ],

                'historical_development' => [
                    'it' => 'Dal segno proto-sinaitico al fenicio 𐤄, poi paleo-ebraico; la forma quadrata aramaica si consolida nel periodo persiano (V sec. a.C.)',
                    'en' => 'From Proto-Sinaitic to Phoenician 𐤄, then Paleo-Hebrew, later stabilized in Imperial Aramaic square script',
                    'la' => 'Transitus ad scripturam aramaicam quadratam',
                    'he' => 'מעבר לכתב המרובע הארמי'
                ],

                'classification_sefer_yetzirah' => [
                    'it' => 'Lettera Semplice (Sefer Yetzirah 1:5)',
                    'en' => 'Simple Letter (Sefer Yetzirah 1:5)',
                    'la' => 'Littera Simplex',
                    'he' => 'אות פשוטה'
                ],

                'traditional_symbolism' => [
                    'it' => 'Nel livello peshat richiama il soffio o l’esclamazione. Gematria 5: dinamica espansiva, manifestazione. In ambito cabalistico è associata al respiro vitale e alla rivelazione.',
                    'en' => 'At peshat level linked to breath or exclamation. Gematria 5: expansion and manifestation. In Kabbalah associated with vital breath and revelation.',
                    'la' => 'Spiritus et manifestatio; valor 5.',
                    'he' => 'נשימה והתגלות; ערך 5'
                ],
            ],

            [
                'number' => 6,
                'letter' => 'ו',
                'is_primary' => true,
                'is_final' => false,
                'parent_letter' => null,

                'gematria_standard' => 6,
                'gematria_extended' => null,

                'pronunciation' => [
                    'it' => 'Approssimante labio-velare /v/ in ebraico moderno; originariamente semivocale /w/',
                    'en' => 'Labio-velar approximant /v/ in Modern Hebrew; originally semivowel /w/',
                    'la' => 'Semivocalis labio-velaris',
                    'he' => 'עיצור חצי-תנועתי'
                ],

                'proto_origin' => [
                    'it' => 'Pittogramma proto-sinaitico rappresentante un gancio o picchetto (waw)',
                    'en' => 'Proto-Sinaitic pictogram representing a hook or peg (waw)',
                    'la' => 'Hamulus vel clavus',
                    'he' => 'וו או יתד קדומה'
                ],

                'historical_development' => [
                    'it' => 'Dal segno proto-sinaitico al fenicio 𐤅, poi paleo-ebraico; la forma lineare verticale si stabilizza nella scrittura aramaica quadrata',
                    'en' => 'From Proto-Sinaitic to Phoenician 𐤅, then Paleo-Hebrew; vertical linear form stabilized in Aramaic square script',
                    'la' => 'Evolutio ad formam aramaicam quadratam',
                    'he' => 'התפתחות לכתב המרובע הארמי'
                ],

                'classification_sefer_yetzirah' => [
                    'it' => 'Lettera Semplice (Sefer Yetzirah 1:5)',
                    'en' => 'Simple Letter (Sefer Yetzirah 1:5)',
                    'la' => 'Littera Simplex',
                    'he' => 'אות פשוטה'
                ],

                'traditional_symbolism' => [
                    'it' => 'Nel livello peshat indica un gancio o elemento di connessione. Gematria 6: armonia e integrazione (sei direzioni spaziali). In cabala rappresenta il collegamento tra dimensione superiore e inferiore.',
                    'en' => 'At peshat level denotes a hook or connector. Gematria 6: harmony and integration (six spatial directions). In Kabbalah symbolizes linkage between higher and lower realms.',
                    'la' => 'Coniunctio et harmonia; valor 6.',
                    'he' => 'חיבור והרמוניה; ערך 6'
                ],
            ],

            [
                'number' => 7,
                'letter' => 'ז',
                'is_primary' => true,
                'is_final' => false,
                'parent_letter' => null,

                'gematria_standard' => 7,
                'gematria_extended' => null,

                'pronunciation' => [
                    'it' => 'Fricativa alveolare sonora /z/',
                    'en' => 'Voiced alveolar fricative /z/',
                    'la' => 'Fricativa alveolaris sonora',
                    'he' => 'עיצור חוכך מכתשי קולי'
                ],

                'proto_origin' => [
                    'it' => 'Probabile pittogramma proto-sinaitico raffigurante un’arma o strumento agricolo (forse una zappa o spada corta)',
                    'en' => 'Likely Proto-Sinaitic pictogram of a weapon or agricultural tool (possibly a hoe or short sword)',
                    'la' => 'Instrumentum vel arma brevis',
                    'he' => 'כלי עבודה או נשק קדום'
                ],

                'historical_development' => [
                    'it' => 'Dal segno proto-sinaitico al fenicio 𐤆, poi paleo-ebraico; la forma lineare angolata si stabilizza nel sistema aramaico quadrato',
                    'en' => 'From Proto-Sinaitic to Phoenician 𐤆, then Paleo-Hebrew; angular linear form stabilized in Aramaic square script',
                    'la' => 'Transitus ad scripturam quadratam aramaicam',
                    'he' => 'מעבר לכתב המרובע הארמי'
                ],

                'classification_sefer_yetzirah' => [
                    'it' => 'Lettera Semplice (Sefer Yetzirah 1:5)',
                    'en' => 'Simple Letter (Sefer Yetzirah 1:5)',
                    'la' => 'Littera Simplex',
                    'he' => 'אות פשוטה'
                ],

                'traditional_symbolism' => [
                    'it' => 'Nel livello peshat indica uno strumento o arma. Gematria 7: ciclo completo naturale (sette giorni, sette direzioni simboliche). Nella tradizione mistica rappresenta energia attiva e dinamica.',
                    'en' => 'At peshat level denotes a tool or weapon. Gematria 7: natural cycle (seven days, symbolic completeness). In mystical tradition symbolizes active dynamic force.',
                    'la' => 'Vis et perfectio cycli; valor 7.',
                    'he' => 'כוח והשלמת מחזור; ערך 7'
                ],
            ],

            [
                'number' => 8,
                'letter' => 'ח',
                'is_primary' => true,
                'is_final' => false,
                'parent_letter' => null,

                'gematria_standard' => 8,
                'gematria_extended' => null,

                'pronunciation' => [
                    'it' => 'Fricativa faringale sorda /ħ/ nella tradizione antica; in ebraico moderno spesso realizzata come fricativa velare /χ/',
                    'en' => 'Voiceless pharyngeal fricative /ħ/ in ancient pronunciation; often /χ/ in Modern Hebrew',
                    'la' => 'Fricativa pharyngealis surda',
                    'he' => 'עיצור חוכך לועי אטום'
                ],

                'proto_origin' => [
                    'it' => 'Pittogramma proto-sinaitico probabilmente raffigurante un recinto o spazio chiuso (ḥet)',
                    'en' => 'Proto-Sinaitic pictogram likely representing an enclosure or fenced area (ḥet)',
                    'la' => 'Clausura vel saeptum',
                    'he' => 'חצר או גדר קדומה'
                ],

                'historical_development' => [
                    'it' => 'Dal segno proto-sinaitico al fenicio 𐤇, poi paleo-ebraico; la forma chiusa si stabilizza nel sistema aramaico quadrato nel periodo persiano',
                    'en' => 'From Proto-Sinaitic to Phoenician 𐤇, then Paleo-Hebrew; closed form stabilized in Imperial Aramaic square script',
                    'la' => 'Evolutio ad scripturam quadratam aramaicam',
                    'he' => 'התפתחות לכתב המרובע הארמי'
                ],

                'classification_sefer_yetzirah' => [
                    'it' => 'Lettera Semplice (Sefer Yetzirah 1:5)',
                    'en' => 'Simple Letter (Sefer Yetzirah 1:5)',
                    'la' => 'Littera Simplex',
                    'he' => 'אות פשוטה'
                ],

                'traditional_symbolism' => [
                    'it' => 'Nel livello peshat indica uno spazio delimitato. Gematria 8: superamento dell’ordine naturale del 7, dimensione oltre il ciclo ordinario. Nella tradizione mistica è associata alla vita (radice ḥay).',
                    'en' => 'At peshat level denotes a bounded space. Gematria 8: transcendence beyond the natural cycle of seven. In mystical tradition associated with life (root ḥay).',
                    'la' => 'Transcendentia et vita; valor 8.',
                    'he' => 'חיים והתעלות; ערך 8'
                ],
            ],

            [
                'number' => 9,
                'letter' => 'ט',
                'is_primary' => true,
                'is_final' => false,
                'parent_letter' => null,

                'gematria_standard' => 9,
                'gematria_extended' => null,

                'pronunciation' => [
                    'it' => 'Occlusiva alveolare enfatica; in ebraico moderno realizzata come /t/',
                    'en' => 'Emphatic alveolar stop; realized as /t/ in Modern Hebrew',
                    'la' => 'Occlusiva dentalis emphatica',
                    'he' => 'עיצור מכתשי מודגש'
                ],

                'proto_origin' => [
                    'it' => 'Origine proto-sinaitica incerta; possibile raffigurazione serpentiforme o segno circolare chiuso',
                    'en' => 'Proto-Sinaitic origin uncertain; possibly serpent-like or enclosed circular sign',
                    'la' => 'Origo incerta; forma serpentina vel clausa',
                    'he' => 'מקור לא ודאי; צורה סגורה או נחשית'
                ],

                'historical_development' => [
                    'it' => 'Dal segno proto-sinaitico al fenicio 𐤈, poi paleo-ebraico; la forma chiusa arrotondata si consolida nella scrittura aramaica quadrata',
                    'en' => 'From Proto-Sinaitic to Phoenician 𐤈, then Paleo-Hebrew; rounded closed form stabilized in Aramaic square script',
                    'la' => 'Transitus ad formam quadratam aramaicam',
                    'he' => 'מעבר לכתב המרובע הארמי'
                ],

                'classification_sefer_yetzirah' => [
                    'it' => 'Lettera Semplice (Sefer Yetzirah 1:5)',
                    'en' => 'Simple Letter (Sefer Yetzirah 1:5)',
                    'la' => 'Littera Simplex',
                    'he' => 'אות פשוטה'
                ],

                'traditional_symbolism' => [
                    'it' => 'Nel livello peshat è collegata alla radice “tov” (bene). Gematria 9: compimento prima del ritorno all’unità (10→1). In ambito mistico rappresenta energia concentrata e potenziale interno.',
                    'en' => 'At peshat level linked to the root “tov” (good). Gematria 9: completion before return to unity (10→1). In mystical context symbolizes concentrated inner potential.',
                    'la' => 'Bonum et consummatio; valor 9.',
                    'he' => 'טוב והשלמה; ערך 9'
                ],
            ],

            [
                'number' => 10,
                'letter' => 'י',
                'is_primary' => true,
                'is_final' => false,
                'parent_letter' => null,

                'gematria_standard' => 10,
                'gematria_extended' => null,

                'pronunciation' => [
                    'it' => 'Semivocale palatale /j/; può fungere da mater lectionis per il suono /i/',
                    'en' => 'Palatal approximant /j/; also used as mater lectionis for vowel /i/',
                    'la' => 'Semivocalis palatalis',
                    'he' => 'עיצור חצי-תנועתי חכי'
                ],

                'proto_origin' => [
                    'it' => 'Pittogramma proto-sinaitico raffigurante una mano o braccio (yad)',
                    'en' => 'Proto-Sinaitic pictogram representing a hand or arm (yad)',
                    'la' => 'Manus stylizata',
                    'he' => 'יד קדומה'
                ],

                'historical_development' => [
                    'it' => 'Dal segno proto-sinaitico al fenicio 𐤉, poi paleo-ebraico; nella scrittura aramaica quadrata si riduce a un piccolo tratto superiore',
                    'en' => 'From Proto-Sinaitic to Phoenician 𐤉, then Paleo-Hebrew; reduced to a minimal upper stroke in Aramaic square script',
                    'la' => 'Reductio ad signum minimum in scriptura aramaica',
                    'he' => 'צמצום לסימן קטן בכתב המרובע'
                ],

                'classification_sefer_yetzirah' => [
                    'it' => 'Lettera Semplice (Sefer Yetzirah 1:5)',
                    'en' => 'Simple Letter (Sefer Yetzirah 1:5)',
                    'la' => 'Littera Simplex',
                    'he' => 'אות פשוטה'
                ],

                'traditional_symbolism' => [
                    'it' => 'Nel livello peshat indica la mano o l’atto. Gematria 10: completezza strutturale (base decimale), ritorno all’unità tramite riduzione (1+0=1). In cabala è considerata il punto originario della manifestazione.',
                    'en' => 'At peshat level denotes the hand or action. Gematria 10: structural completeness (decimal base), return to unity by reduction (1+0=1). In Kabbalah seen as primordial point of manifestation.',
                    'la' => 'Manus et perfectio decem; radix 1.',
                    'he' => 'יד ושלמות עשר; שורש 1'
                ],
            ],

            [
                'number' => 11,
                'letter' => 'כ',
                'is_primary' => true,
                'is_final' => false,
                'parent_letter' => null,

                'gematria_standard' => 20,
                'gematria_extended' => null,

                'pronunciation' => [
                    'it' => 'Occlusiva velare sorda /k/ con dagesh; fricativa velare /χ/ senza dagesh (tradizione tiberiense)',
                    'en' => 'Voiceless velar stop /k/ with dagesh; voiceless velar fricative /χ/ without dagesh (Tiberian tradition)',
                    'la' => 'Occlusiva velaris surda; fricativa velaris',
                    'he' => 'עיצור וילוני אטום'
                ],

                'proto_origin' => [
                    'it' => 'Pittogramma proto-sinaitico raffigurante il palmo della mano (kaf = palmo)',
                    'en' => 'Proto-Sinaitic pictogram representing the palm of the hand (kaf)',
                    'la' => 'Palma manus',
                    'he' => 'כף יד קדומה'
                ],

                'historical_development' => [
                    'it' => 'Dal proto-sinaitico al fenicio 𐤊, quindi paleo-ebraico; nella scrittura aramaica quadrata assume forma curva aperta, con variante finale allungata (ך)',
                    'en' => 'From Proto-Sinaitic to Phoenician 𐤊, then Paleo-Hebrew; in Aramaic square script it becomes a curved open form, with elongated final variant (ך)',
                    'la' => 'Evolutio ad formam aramaicam cum variante finali',
                    'he' => 'התפתחות לכתב המרובע עם צורה סופית'
                ],

                'classification_sefer_yetzirah' => [
                    'it' => 'Lettera Doppia (Sefer Yetzirah 1:4)',
                    'en' => 'Double Letter (Sefer Yetzirah 1:4)',
                    'la' => 'Littera Duplex',
                    'he' => 'אות כפולה'
                ],

                'traditional_symbolism' => [
                    'it' => 'Nel livello peshat indica il palmo o la capacità di contenere. Gematria 20: struttura delle decine, riduzione 2 (2+0). In tradizione mistica rappresenta potenzialità e capacità ricettiva.',
                    'en' => 'At peshat level denotes the palm or capacity to contain. Gematria 20: structure of tens, reduced to 2 (2+0). In mystical tradition symbolizes potential and receptivity.',
                    'la' => 'Potentia et receptio; valor 20 (radix 2).',
                    'he' => 'יכולת וקבלה; ערך 20 (שורש 2)'
                ],
            ],

            [
                'number' => 12,
                'letter' => 'ל',
                'is_primary' => true,
                'is_final' => false,
                'parent_letter' => null,

                'gematria_standard' => 30,
                'gematria_extended' => null,

                'pronunciation' => [
                    'it' => 'Laterale alveolare sonora /l/',
                    'en' => 'Voiced alveolar lateral /l/',
                    'la' => 'Lateralis alveolaris sonora',
                    'he' => 'עיצור צדי מכתשי קולי'
                ],

                'proto_origin' => [
                    'it' => 'Pittogramma proto-sinaitico probabilmente raffigurante un bastone da pastore o pungolo (lamed)',
                    'en' => 'Proto-Sinaitic pictogram likely representing a shepherd’s staff or goad (lamed)',
                    'la' => 'Baculus pastoralis',
                    'he' => 'מקל רועים קדום'
                ],

                'historical_development' => [
                    'it' => 'Dal proto-sinaitico al fenicio 𐤋, poi paleo-ebraico; nella scrittura aramaica quadrata sviluppa l’elevazione superiore caratteristica che la distingue graficamente',
                    'en' => 'From Proto-Sinaitic to Phoenician 𐤋, then Paleo-Hebrew; in Aramaic square script develops the distinctive upper ascender',
                    'la' => 'Evolutio cum ascensu superiore in scriptura aramaica',
                    'he' => 'התפתחות עם עלייה עליונה בכתב המרובע'
                ],

                'classification_sefer_yetzirah' => [
                    'it' => 'Lettera Semplice (Sefer Yetzirah 1:5)',
                    'en' => 'Simple Letter (Sefer Yetzirah 1:5)',
                    'la' => 'Littera Simplex',
                    'he' => 'אות פשוטה'
                ],

                'traditional_symbolism' => [
                    'it' => 'Nel livello peshat indica il bastone o l’atto di guidare. Gematria 30: ordine delle decine, riduzione 3 (3+0). In ambito cabalistico è associata all’apprendimento e all’elevazione verso l’alto.',
                    'en' => 'At peshat level denotes the staff or guiding action. Gematria 30: tens structure, reduced to 3 (3+0). In Kabbalistic thought associated with learning and upward elevation.',
                    'la' => 'Doctrina et elevatio; valor 30 (radix 3).',
                    'he' => 'למידה ועלייה; ערך 30 (שורש 3)'
                ],
            ],

            [
                'number' => 13,
                'letter' => 'מ',
                'is_primary' => true,
                'is_final' => false,
                'parent_letter' => null,

                'gematria_standard' => 40,
                'gematria_extended' => null,

                'pronunciation' => [
                    'it' => 'Nasale bilabiale sonora /m/',
                    'en' => 'Voiced bilabial nasal /m/',
                    'la' => 'Nasalis bilabialis sonora',
                    'he' => 'עיצור אפי דו-שפתי קולי'
                ],

                'proto_origin' => [
                    'it' => 'Pittogramma proto-sinaitico raffigurante onde d’acqua (dal termine “mayim” = acqua)',
                    'en' => 'Proto-Sinaitic pictogram representing water waves (from “mayim” = water)',
                    'la' => 'Undae aquae',
                    'he' => 'גלי מים קדומים'
                ],

                'historical_development' => [
                    'it' => 'Dal proto-sinaitico al fenicio 𐤌, poi paleo-ebraico; nella scrittura aramaica quadrata assume forma chiusa (מ) con variante completamente chiusa finale (ם)',
                    'en' => 'From Proto-Sinaitic to Phoenician 𐤌, then Paleo-Hebrew; in Aramaic square script becomes open (מ) with fully closed final form (ם)',
                    'la' => 'Evolutio ad formam apertam et finalem clausam',
                    'he' => 'התפתחות לצורה פתוחה וסופית סגורה'
                ],

                'classification_sefer_yetzirah' => [
                    'it' => 'Lettera Madre (Sefer Yetzirah 1:2)',
                    'en' => 'Mother Letter (Sefer Yetzirah 1:2)',
                    'la' => 'Littera Mater',
                    'he' => 'אות אם'
                ],

                'traditional_symbolism' => [
                    'it' => 'Nel livello peshat indica l’acqua. Gematria 40: numero di trasformazione e passaggio (es. quaranta giorni). Riduzione 4 (4+0). In cabala rappresenta l’elemento Acqua e la dimensione della gestazione.',
                    'en' => 'At peshat level denotes water. Gematria 40: number of transformation and transition (e.g., forty days). Reduced to 4 (4+0). In Kabbalah represents the element Water and gestation.',
                    'la' => 'Aqua et transformatio; valor 40 (radix 4).',
                    'he' => 'מים ושינוי; ערך 40 (שורש 4)'
                ],
            ],

            [
                'number' => 14,
                'letter' => 'נ',
                'is_primary' => true,
                'is_final' => false,
                'parent_letter' => null,

                'gematria_standard' => 50,
                'gematria_extended' => null,

                'pronunciation' => [
                    'it' => 'Nasale alveolare sonora /n/',
                    'en' => 'Voiced alveolar nasal /n/',
                    'la' => 'Nasalis alveolaris sonora',
                    'he' => 'עיצור אפי מכתשי קולי'
                ],

                'proto_origin' => [
                    'it' => 'Pittogramma proto-sinaitico probabilmente raffigurante un pesce (dal termine “nun”)',
                    'en' => 'Proto-Sinaitic pictogram likely representing a fish (nun)',
                    'la' => 'Piscis stylizatus',
                    'he' => 'דג קדום'
                ],

                'historical_development' => [
                    'it' => 'Dal proto-sinaitico al fenicio 𐤍, poi paleo-ebraico; nella scrittura aramaica quadrata assume forma aperta (נ) con variante finale discendente allungata (ן)',
                    'en' => 'From Proto-Sinaitic to Phoenician 𐤍, then Paleo-Hebrew; in Aramaic square script appears as open form (נ) with elongated descending final form (ן)',
                    'la' => 'Forma aperta cum variante finali descendente',
                    'he' => 'צורה פתוחה עם סיומת יורדת'
                ],

                'classification_sefer_yetzirah' => [
                    'it' => 'Lettera Semplice (Sefer Yetzirah 1:5)',
                    'en' => 'Simple Letter (Sefer Yetzirah 1:5)',
                    'la' => 'Littera Simplex',
                    'he' => 'אות פשוטה'
                ],

                'traditional_symbolism' => [
                    'it' => 'Nel livello peshat indica il pesce o la discendenza. Gematria 50: ciclo compiuto e apertura a nuova fase (riduzione 5). In ambito mistico rappresenta continuità e trasmissione.',
                    'en' => 'At peshat level denotes fish or lineage. Gematria 50: completion of a cycle and transition to new phase (reduced to 5). In mystical thought symbolizes continuity and transmission.',
                    'la' => 'Continuatio et transitus; valor 50 (radix 5).',
                    'he' => 'המשכיות ומעבר; ערך 50 (שורש 5)'
                ],
            ],

            [
                'number' => 15,
                'letter' => 'ס',
                'is_primary' => true,
                'is_final' => false,
                'parent_letter' => null,

                'gematria_standard' => 60,
                'gematria_extended' => null,

                'pronunciation' => [
                    'it' => 'Fricativa alveolare sorda /s/',
                    'en' => 'Voiceless alveolar fricative /s/',
                    'la' => 'Fricativa alveolaris surda',
                    'he' => 'עיצור חוכך מכתשי אטום'
                ],

                'proto_origin' => [
                    'it' => 'Origine proto-sinaitica incerta; probabilmente collegata a un pilastro o sostegno strutturale (samekh = supportare)',
                    'en' => 'Proto-Sinaitic origin uncertain; likely connected to a pillar or structural support (samekh = to support)',
                    'la' => 'Columna vel sustentaculum',
                    'he' => 'עמוד או סמך קדום'
                ],

                'historical_development' => [
                    'it' => 'Dal proto-sinaitico al fenicio 𐤎, poi paleo-ebraico; nella scrittura aramaica quadrata assume forma chiusa quasi circolare',
                    'en' => 'From Proto-Sinaitic to Phoenician 𐤎, then Paleo-Hebrew; in Aramaic square script becomes a closed rounded form',
                    'la' => 'Forma clausa rotunda in scriptura aramaica',
                    'he' => 'צורה סגורה ועגולה בכתב המרובע'
                ],

                'classification_sefer_yetzirah' => [
                    'it' => 'Lettera Semplice (Sefer Yetzirah 1:5)',
                    'en' => 'Simple Letter (Sefer Yetzirah 1:5)',
                    'la' => 'Littera Simplex',
                    'he' => 'אות פשוטה'
                ],

                'traditional_symbolism' => [
                    'it' => 'Nel livello peshat indica sostegno o supporto. Gematria 60: struttura delle decine elevate, riduzione 6 (6+0). In ambito mistico rappresenta protezione e stabilizzazione.',
                    'en' => 'At peshat level denotes support or reinforcement. Gematria 60: higher tens structure, reduced to 6 (6+0). In mystical interpretation symbolizes protection and stabilization.',
                    'la' => 'Sustentatio et stabilitas; valor 60 (radix 6).',
                    'he' => 'תמיכה ויציבות; ערך 60 (שורש 6)'
                ],
            ],

            [
                'number' => 16,
                'letter' => 'ע',
                'is_primary' => true,
                'is_final' => false,
                'parent_letter' => null,

                'gematria_standard' => 70,
                'gematria_extended' => null,

                'pronunciation' => [
                    'it' => 'Fricativa faringale sonora /ʕ/ nell’ebraico antico; spesso muta o indebolita in ebraico moderno',
                    'en' => 'Voiced pharyngeal fricative /ʕ/ in ancient Hebrew; often silent or weakened in Modern Hebrew',
                    'la' => 'Fricativa pharyngealis sonora',
                    'he' => 'עיצור לועי קולי'
                ],

                'proto_origin' => [
                    'it' => 'Pittogramma proto-sinaitico raffigurante un occhio (ʿayin)',
                    'en' => 'Proto-Sinaitic pictogram representing an eye (ʿayin)',
                    'la' => 'Oculus stylizatus',
                    'he' => 'עין קדומה'
                ],

                'historical_development' => [
                    'it' => 'Dal proto-sinaitico al fenicio 𐤏, poi paleo-ebraico; nella scrittura aramaica quadrata assume forma angolare aperta',
                    'en' => 'From Proto-Sinaitic to Phoenician 𐤏, then Paleo-Hebrew; in Aramaic square script takes an open angular form',
                    'la' => 'Forma angularis aperta in scriptura aramaica',
                    'he' => 'צורה זוויתית פתוחה בכתב המרובע'
                ],

                'classification_sefer_yetzirah' => [
                    'it' => 'Lettera Semplice (Sefer Yetzirah 1:5)',
                    'en' => 'Simple Letter (Sefer Yetzirah 1:5)',
                    'la' => 'Littera Simplex',
                    'he' => 'אות פשוטה'
                ],

                'traditional_symbolism' => [
                    'it' => 'Nel livello peshat indica l’occhio o la visione. Gematria 70: completezza ampliata (es. settanta nazioni), riduzione 7 (7+0). In tradizione mistica rappresenta percezione e coscienza.',
                    'en' => 'At peshat level denotes the eye or vision. Gematria 70: expanded completeness (e.g., seventy nations), reduced to 7 (7+0). In mystical thought symbolizes perception and awareness.',
                    'la' => 'Visio et conscientia; valor 70 (radix 7).',
                    'he' => 'ראייה ותודעה; ערך 70 (שורש 7)'
                ],
            ],

            [
                'number' => 17,
                'letter' => 'פ',
                'is_primary' => true,
                'is_final' => false,
                'parent_letter' => null,

                'gematria_standard' => 80,
                'gematria_extended' => null,

                'pronunciation' => [
                    'it' => 'Occlusiva bilabiale sorda /p/ con dagesh; fricativa labiodentale /f/ senza dagesh',
                    'en' => 'Voiceless bilabial stop /p/ with dagesh; labiodental fricative /f/ without dagesh',
                    'la' => 'Occlusiva bilabialis surda; fricativa labiodentalis',
                    'he' => 'עיצור דו-שפתי אטום'
                ],

                'proto_origin' => [
                    'it' => 'Pittogramma proto-sinaitico raffigurante una bocca (pe)',
                    'en' => 'Proto-Sinaitic pictogram representing a mouth (pe)',
                    'la' => 'Os stylizatum',
                    'he' => 'פה קדום'
                ],

                'historical_development' => [
                    'it' => 'Dal proto-sinaitico al fenicio 𐤐, poi paleo-ebraico; nella scrittura aramaica quadrata assume forma chiusa con variante finale discendente (ף)',
                    'en' => 'From Proto-Sinaitic to Phoenician 𐤐, then Paleo-Hebrew; in Aramaic square script appears as closed form with descending final variant (ף)',
                    'la' => 'Forma clausa cum variante finali descendente',
                    'he' => 'צורה סגורה עם סיומת יורדת'
                ],

                'classification_sefer_yetzirah' => [
                    'it' => 'Lettera Doppia (Sefer Yetzirah 1:4)',
                    'en' => 'Double Letter (Sefer Yetzirah 1:4)',
                    'la' => 'Littera Duplex',
                    'he' => 'אות כפולה'
                ],

                'traditional_symbolism' => [
                    'it' => 'Nel livello peshat indica la bocca o il parlare. Gematria 80: struttura delle decine elevate, riduzione 8 (8+0). In tradizione mistica rappresenta potere della parola e manifestazione verbale.',
                    'en' => 'At peshat level denotes the mouth or speech. Gematria 80: higher tens structure, reduced to 8 (8+0). In mystical tradition symbolizes power of speech and verbal manifestation.',
                    'la' => 'Oratio et manifestatio; valor 80 (radix 8).',
                    'he' => 'דיבור וכוח הביטוי; ערך 80 (שורש 8)'
                ],
            ],

            [
                'number' => 18,
                'letter' => 'צ',
                'is_primary' => true,
                'is_final' => false,
                'parent_letter' => null,

                'gematria_standard' => 90,
                'gematria_extended' => null,

                'pronunciation' => [
                    'it' => 'Affricata alveolare enfatica /tsˤ/ nell’antico; realizzata come /ts/ in ebraico moderno',
                    'en' => 'Emphatic alveolar affricate /tsˤ/ in ancient Hebrew; realized as /ts/ in Modern Hebrew',
                    'la' => 'Affricata alveolaris emphatica',
                    'he' => 'עיצור מכתשי מודגש'
                ],

                'proto_origin' => [
                    'it' => 'Origine proto-sinaitica incerta; possibile raffigurazione di amo o strumento ricurvo',
                    'en' => 'Proto-Sinaitic origin uncertain; possibly a hook or curved implement',
                    'la' => 'Hamulus vel instrumentum curvum',
                    'he' => 'קרס או כלי מעוקל קדום'
                ],

                'historical_development' => [
                    'it' => 'Dal proto-sinaitico al fenicio 𐤑, poi paleo-ebraico; nella scrittura aramaica quadrata assume forma complessa con variante finale allungata (ץ)',
                    'en' => 'From Proto-Sinaitic to Phoenician 𐤑, then Paleo-Hebrew; in Aramaic square script takes a complex form with elongated final variant (ץ)',
                    'la' => 'Forma composita cum variante finali elongata',
                    'he' => 'צורה מורכבת עם סיומת מוארכת'
                ],

                'classification_sefer_yetzirah' => [
                    'it' => 'Lettera Semplice (Sefer Yetzirah 1:5)',
                    'en' => 'Simple Letter (Sefer Yetzirah 1:5)',
                    'la' => 'Littera Simplex',
                    'he' => 'אות פשוטה'
                ],

                'traditional_symbolism' => [
                    'it' => 'Nel livello peshat collegata alla radice “tzedek” (giustizia). Gematria 90: compimento nel ciclo delle decine, riduzione 9 (9+0). In ambito mistico rappresenta rettitudine e equilibrio etico.',
                    'en' => 'At peshat level linked to the root “tzedek” (justice). Gematria 90: completion within the tens cycle, reduced to 9 (9+0). In mystical context symbolizes righteousness and ethical balance.',
                    'la' => 'Iustitia et aequilibrium; valor 90 (radix 9).',
                    'he' => 'צדק ואיזון; ערך 90 (שורש 9)'
                ],
            ],

            [
                'number' => 19,
                'letter' => 'ק',
                'is_primary' => true,
                'is_final' => false,
                'parent_letter' => null,

                'gematria_standard' => 100,
                'gematria_extended' => null,

                'pronunciation' => [
                    'it' => 'Occlusiva uvulare sorda /q/ nell’ebraico antico; spesso realizzata come /k/ in ebraico moderno',
                    'en' => 'Voiceless uvular stop /q/ in ancient Hebrew; often realized as /k/ in Modern Hebrew',
                    'la' => 'Occlusiva uvularis surda',
                    'he' => 'עיצור ענבלי אטום'
                ],

                'proto_origin' => [
                    'it' => 'Pittogramma proto-sinaitico probabilmente raffigurante la nuca o il retro della testa; alcune ipotesi minoritarie parlano di ago o foro',
                    'en' => 'Proto-Sinaitic pictogram likely representing the back of the head; minor hypotheses suggest a needle or hole',
                    'la' => 'Nucha vel foramen (hypothesis alternativa)',
                    'he' => 'עורף קדום'
                ],

                'historical_development' => [
                    'it' => 'Dal proto-sinaitico al fenicio 𐤒, poi paleo-ebraico; nella scrittura aramaica quadrata sviluppa il tratto discendente caratteristico',
                    'en' => 'From Proto-Sinaitic to Phoenician 𐤒, then Paleo-Hebrew; in Aramaic square script develops its characteristic descending stroke',
                    'la' => 'Forma cum linea descendente in scriptura aramaica',
                    'he' => 'צורה עם קו יורד בכתב המרובע'
                ],

                'classification_sefer_yetzirah' => [
                    'it' => 'Lettera Semplice (Sefer Yetzirah 1:5)',
                    'en' => 'Simple Letter (Sefer Yetzirah 1:5)',
                    'la' => 'Littera Simplex',
                    'he' => 'אות פשוטה'
                ],

                'traditional_symbolism' => [
                    'it' => 'Nel livello peshat può richiamare l’idea di parte posteriore o profondità. Gematria 100: inizio dell’ordine delle centinaia, riduzione 1 (1+0+0). In ambito mistico rappresenta trascendenza e profondità nascosta.',
                    'en' => 'At peshat level may suggest the back or depth. Gematria 100: beginning of the hundreds order, reduced to 1 (1+0+0). In mystical interpretation symbolizes transcendence and hidden depth.',
                    'la' => 'Profunditas et transcendens; valor 100 (radix 1).',
                    'he' => 'עומק והתעלות; ערך 100 (שורש 1)'
                ],
            ],

            [
                'number' => 20,
                'letter' => 'ר',
                'is_primary' => true,
                'is_final' => false,
                'parent_letter' => null,

                'gematria_standard' => 200,
                'gematria_extended' => null,

                'pronunciation' => [
                    'it' => 'Consonante vibrante alveolare /r/ nell’ebraico antico; in ebraico moderno spesso uvulare',
                    'en' => 'Alveolar trill /r/ in ancient Hebrew; often uvular in Modern Hebrew',
                    'la' => 'Vibrans alveolaris',
                    'he' => 'עיצור רוטט'
                ],

                'proto_origin' => [
                    'it' => 'Pittogramma proto-sinaitico raffigurante una testa umana (rosh = testa)',
                    'en' => 'Proto-Sinaitic pictogram representing a human head (rosh)',
                    'la' => 'Caput humanum',
                    'he' => 'ראש קדום'
                ],

                'historical_development' => [
                    'it' => 'Dal proto-sinaitico al fenicio 𐤓, poi paleo-ebraico; nella scrittura aramaica quadrata assume forma curva semplice senza tratto discendente',
                    'en' => 'From Proto-Sinaitic to Phoenician 𐤓, then Paleo-Hebrew; in Aramaic square script takes a simple curved form without a descending stroke',
                    'la' => 'Forma curva simplex in scriptura aramaica',
                    'he' => 'צורה פשוטה ומעוגלת בכתב המרובע'
                ],

                'classification_sefer_yetzirah' => [
                    'it' => 'Lettera Doppia (Sefer Yetzirah 1:4)',
                    'en' => 'Double Letter (Sefer Yetzirah 1:4)',
                    'la' => 'Littera Duplex',
                    'he' => 'אות כפולה'
                ],

                'traditional_symbolism' => [
                    'it' => 'Nel livello peshat indica la testa o il principio direttivo. Gematria 200: ordine delle centinaia, riduzione 2 (2+0+0). In tradizione mistica rappresenta leadership e direzione cosciente.',
                    'en' => 'At peshat level denotes the head or directing principle. Gematria 200: hundreds order, reduced to 2 (2+0+0). In mystical thought symbolizes leadership and conscious direction.',
                    'la' => 'Dux et principium; valor 200 (radix 2).',
                    'he' => 'הנהגה ועיקרון; ערך 200 (שורש 2)'
                ],
            ],

            [
                'number' => 21,
                'letter' => 'ש',
                'is_primary' => true,
                'is_final' => false,
                'parent_letter' => null,

                'gematria_standard' => 300,
                'gematria_extended' => null,

                'pronunciation' => [
                    'it' => 'Fricativa postalveolare sorda /ʃ/ (shin); variante sin con punto a sinistra /s/',
                    'en' => 'Voiceless postalveolar fricative /ʃ/ (shin); sin variant with left dot /s/',
                    'la' => 'Fricativa postalveolaris surda',
                    'he' => 'שׁ / שׂ'
                ],

                'proto_origin' => [
                    'it' => 'Pittogramma proto-sinaitico raffigurante denti (shen = dente)',
                    'en' => 'Proto-Sinaitic pictogram representing teeth (shen = tooth)',
                    'la' => 'Dentes',
                    'he' => 'שיניים קדומות'
                ],

                'historical_development' => [
                    'it' => 'Dal proto-sinaitico al fenicio 𐤔 con forma tridentata; nel paleo-ebraico mantiene la triplice struttura; nella scrittura aramaica quadrata si stabilizza nella forma attuale',
                    'en' => 'From Proto-Sinaitic to Phoenician 𐤔 with trident shape; retains triple structure in Paleo-Hebrew; stabilizes in square Aramaic script',
                    'la' => 'Forma tridentata stabilita in scriptura quadrata',
                    'he' => 'צורה תלת-שינית בכתב המרובע'
                ],

                'classification_sefer_yetzirah' => [
                    'it' => 'Lettera Madre (Sefer Yetzirah 1:2)',
                    'en' => 'Mother Letter (Sefer Yetzirah 1:2)',
                    'la' => 'Littera Mater',
                    'he' => 'אות אם'
                ],

                'traditional_symbolism' => [
                    'it' => 'Nel livello peshat indica dente o consumo. Gematria 300: ordine delle centinaia, riduzione 3 (3+0+0). In ambito mistico è associata al fuoco trasformativo e al principio di mutamento.',
                    'en' => 'At peshat level denotes tooth or consumption. Gematria 300: hundreds order, reduced to 3 (3+0+0). In mystical thought associated with transformative fire and the principle of change.',
                    'la' => 'Ignis transformativus; valor 300 (radix 3).',
                    'he' => 'אש ושינוי; ערך 300 (שורש 3)'
                ],
            ],

            [
                'number' => 22,
                'letter' => 'ת',
                'is_primary' => true,
                'is_final' => false,
                'parent_letter' => null,

                'gematria_standard' => 400,
                'gematria_extended' => null,

                'pronunciation' => [
                    'it' => 'Occlusiva dentale sorda /t/; in ebraico antico poteva avere variante fricativa senza dagesh',
                    'en' => 'Voiceless dental stop /t/; in ancient Hebrew possibly had a fricative variant without dagesh',
                    'la' => 'Occlusiva dentalis surda',
                    'he' => 'עיצור שיני אטום'
                ],

                'proto_origin' => [
                    'it' => 'Pittogramma proto-sinaitico raffigurante un segno o marchio a croce (taw = segno)',
                    'en' => 'Proto-Sinaitic pictogram representing a cross-shaped mark (taw = mark)',
                    'la' => 'Signum cruciforme',
                    'he' => 'תו קדום בצורת צלב'
                ],

                'historical_development' => [
                    'it' => 'Dal proto-sinaitico al fenicio 𐤕 con forma cruciforme; nel paleo-ebraico mantiene struttura angolare; nella scrittura aramaica quadrata evolve nella forma chiusa attuale',
                    'en' => 'From Proto-Sinaitic to Phoenician 𐤕 with cross-like form; retains angular structure in Paleo-Hebrew; evolves into current closed form in square Aramaic script',
                    'la' => 'Evolutio ad formam clausam in scriptura quadrata',
                    'he' => 'התפתחות לצורה הסגורה בכתב המרובע'
                ],

                'classification_sefer_yetzirah' => [
                    'it' => 'Lettera Doppia (Sefer Yetzirah 1:4)',
                    'en' => 'Double Letter (Sefer Yetzirah 1:4)',
                    'la' => 'Littera Duplex',
                    'he' => 'אות כפולה'
                ],

                'traditional_symbolism' => [
                    'it' => 'Nel livello peshat indica segno o marchio. Gematria 400: massimo valore standard, riduzione 4 (4+0+0). In tradizione mistica rappresenta compimento e sigillo finale del ciclo alfabetico.',
                    'en' => 'At peshat level denotes a sign or mark. Gematria 400: highest standard value, reduced to 4 (4+0+0). In mystical tradition symbolizes completion and final seal of the alphabetic cycle.',
                    'la' => 'Perfectio et sigillum; valor 400 (radix 4).',
                    'he' => 'השלמה וחתימה; ערך 400 (שורש 4)'
                ],
            ],

            /*
            |--------------------------------------------------------------------------
            | 5 LETTERE FINALI (SECONDARIE)
            |--------------------------------------------------------------------------
            */

            [
                'number' => 23,
                'letter' => 'ך',
                'is_primary' => false,
                'is_final' => true,
                'parent_letter' => 'כ',

                'gematria_standard' => 20,
                'gematria_extended' => 500,

                'pronunciation' => [
                    'it' => 'Identica a כ: /k/ o fricativa velare /χ/ secondo il dagesh',
                    'en' => 'Same as כ: /k/ or velar fricative /χ/ depending on dagesh',
                    'la' => 'Ut כ',
                    'he' => 'כּ / כ'
                ],

                'proto_origin' => [
                    'it' => 'Variante grafica finale sviluppata in epoca aramaica; non presente come segno distinto nel proto-sinaitico',
                    'en' => 'Final graphic variant developed in Aramaic period; not distinct in Proto-Sinaitic',
                    'la' => 'Forma finalis posterior',
                    'he' => 'צורה סופית מאוחרת'
                ],

                'historical_development' => [
                    'it' => 'Deriva dalla כ quadrata con estensione discendente per indicare posizione finale di parola',
                    'en' => 'Derived from square כ with descending extension to mark final position',
                    'la' => 'Extensio descendens finalis',
                    'he' => 'סיומת יורדת לציון סוף מילה'
                ],

                'classification_sefer_yetzirah' => [],

                'traditional_symbolism' => [
                    'it' => 'Gematria estesa 500: apertura dell’ordine superiore (oltre 400). Riduzione 5 (5+0+0). Interpretata come potenzialità espansa oltre il limite ordinario.',
                    'en' => 'Extended gematria 500: opening of the higher order (beyond 400). Reduced to 5 (5+0+0). Interpreted as expanded potential beyond ordinary limit.',
                    'la' => 'Valor 500 (radix 5); potentia extensa.',
                    'he' => 'ערך 500 (שורש 5); פוטנציאל מורחב'
                ],
            ],

            [
                'number' => 24,
                'letter' => 'ם',
                'is_primary' => false,
                'is_final' => true,
                'parent_letter' => 'מ',

                'gematria_standard' => 40,
                'gematria_extended' => 600,

                'pronunciation' => [
                    'it' => 'Identica a מ: consonante nasale bilabiale /m/',
                    'en' => 'Same as מ: bilabial nasal consonant /m/',
                    'la' => 'Nasalis bilabialis',
                    'he' => 'עיצור אפי דו-שפתי'
                ],

                'proto_origin' => [
                    'it' => 'Variante finale della forma quadrata di מ; non distinta nel sistema proto-sinaitico',
                    'en' => 'Final variant of square מ; not distinct in Proto-Sinaitic system',
                    'la' => 'Forma finalis posterior',
                    'he' => 'צורה סופית מאוחרת'
                ],

                'historical_development' => [
                    'it' => 'Forma completamente chiusa nella scrittura quadrata per marcare fine parola',
                    'en' => 'Fully closed form in square script marking end of word',
                    'la' => 'Forma clausa finalis',
                    'he' => 'צורה סגורה לסיום מילה'
                ],

                'classification_sefer_yetzirah' => [],

                'traditional_symbolism' => [
                    'it' => 'Gematria estesa 600: ordine superiore delle centinaia. Riduzione 6 (6+0+0). Simbolicamente acqua contenuta o sapienza nascosta.',
                    'en' => 'Extended gematria 600: higher hundreds order. Reduced to 6 (6+0+0). Symbolically contained water or hidden wisdom.',
                    'la' => 'Valor 600 (radix 6); aqua occulta.',
                    'he' => 'ערך 600 (שורש 6); מים נסתרים'
                ],
            ],

            [
                'number' => 25,
                'letter' => 'ן',
                'is_primary' => false,
                'is_final' => true,
                'parent_letter' => 'נ',

                'gematria_standard' => 50,
                'gematria_extended' => 700,

                'pronunciation' => [
                    'it' => 'Identica a נ: consonante nasale alveolare /n/',
                    'en' => 'Same as נ: alveolar nasal consonant /n/',
                    'la' => 'Nasalis alveolaris',
                    'he' => 'עיצור אפי מכתשי'
                ],

                'proto_origin' => [
                    'it' => 'Variante finale sviluppata nella scrittura aramaica quadrata; non distinta nel proto-sinaitico',
                    'en' => 'Final variant developed in square Aramaic script; not distinct in Proto-Sinaitic',
                    'la' => 'Forma finalis posterior',
                    'he' => 'צורה סופית מאוחרת'
                ],

                'historical_development' => [
                    'it' => 'Estensione verticale discendente della forma נ per indicare fine parola',
                    'en' => 'Descending vertical extension of נ to mark word-final position',
                    'la' => 'Extensio verticalis finalis',
                    'he' => 'סיומת אנכית לסוף מילה'
                ],

                'classification_sefer_yetzirah' => [],

                'traditional_symbolism' => [
                    'it' => 'Gematria estesa 700: livello superiore oltre le centinaia standard. Riduzione 7 (7+0+0). Associata a continuità oltre il ciclo ordinario.',
                    'en' => 'Extended gematria 700: higher level beyond standard hundreds. Reduced to 7 (7+0+0). Associated with continuity beyond ordinary cycle.',
                    'la' => 'Valor 700 (radix 7); continuatio ultra ordinem.',
                    'he' => 'ערך 700 (שורש 7); המשכיות מעבר לסדר'
                ],
            ],

            [
                'number' => 26,
                'letter' => 'ף',
                'is_primary' => false,
                'is_final' => true,
                'parent_letter' => 'פ',

                'gematria_standard' => 80,
                'gematria_extended' => 800,

                'pronunciation' => [
                    'it' => 'Identica a פ: /p/ con dagesh, /f/ senza dagesh',
                    'en' => 'Same as פ: /p/ with dagesh, /f/ without dagesh',
                    'la' => 'Ut פ',
                    'he' => 'פּ / פ'
                ],

                'proto_origin' => [
                    'it' => 'Variante finale sviluppata nel periodo aramaico; non presente come segno distinto nel proto-sinaitico',
                    'en' => 'Final variant developed in Aramaic period; not distinct in Proto-Sinaitic',
                    'la' => 'Forma finalis posterior',
                    'he' => 'צורה סופית מאוחרת'
                ],

                'historical_development' => [
                    'it' => 'Forma con estensione inferiore nella scrittura quadrata per indicare posizione finale',
                    'en' => 'Form with lower extension in square script to indicate final position',
                    'la' => 'Extensio inferior finalis',
                    'he' => 'סיומת תחתונה לסוף מילה'
                ],

                'classification_sefer_yetzirah' => [],

                'traditional_symbolism' => [
                    'it' => 'Gematria estesa 800: livello superiore avanzato. Riduzione 8 (8+0+0). Interpretata come parola compiuta o espressione portata a termine.',
                    'en' => 'Extended gematria 800: advanced higher level. Reduced to 8 (8+0+0). Interpreted as completed speech or fulfilled expression.',
                    'la' => 'Valor 800 (radix 8); oratio perfecta.',
                    'he' => 'ערך 800 (שורש 8); דיבור מושלם'
                ],
            ],

            [
                'number' => 27,
                'letter' => 'ץ',
                'is_primary' => false,
                'is_final' => true,
                'parent_letter' => 'צ',

                'gematria_standard' => 90,
                'gematria_extended' => 900,

                'pronunciation' => [
                    'it' => 'Identica a צ: affricata alveolare sorda /ts/',
                    'en' => 'Same as צ: voiceless alveolar affricate /ts/',
                    'la' => 'Affricata alveolaris surda',
                    'he' => 'עיצור מחוכך משולב /צ/'
                ],

                'proto_origin' => [
                    'it' => 'Variante finale della forma quadrata di צ; non distinta nel sistema proto-sinaitico',
                    'en' => 'Final variant of square צ; not distinct in Proto-Sinaitic system',
                    'la' => 'Forma finalis posterior',
                    'he' => 'צורה סופית מאוחרת'
                ],

                'historical_development' => [
                    'it' => 'Estensione discendente marcata nella scrittura quadrata per indicare fine parola',
                    'en' => 'Marked descending extension in square script to indicate word-final position',
                    'la' => 'Extensio descendens finalis',
                    'he' => 'סיומת יורדת מודגשת'
                ],

                'classification_sefer_yetzirah' => [],

                'traditional_symbolism' => [
                    'it' => 'Gematria estesa 900: massimo valore del sistema esteso. Riduzione 9 (9+0+0). Simbolicamente giustizia definitiva o compimento finale.',
                    'en' => 'Extended gematria 900: highest value in extended system. Reduced to 9 (9+0+0). Symbolically final justice or ultimate completion.',
                    'la' => 'Valor 900 (radix 9); iustitia finalis.',
                    'he' => 'ערך 900 (שורש 9); צדק סופי'
                ],
            ],
        ];

        foreach ($letters as $data) {
            HebraicMeaning::firstOrCreate(
                ['number' => $data['number']],
                $data
            );
        }
    }
}
