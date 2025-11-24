<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Stones\StonesMeaning;
use App\Models\Stones\StonesTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StonesMeaningsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stones = [

            // ---------- NUMERO 1 ----------
            [
                'stone' => [
                    'number'   => 1,
                    'hardness' => 7,
                ],
                'translations' => [
                    [
                        'language'    => 'it',
                        'name'        => 'Occhio di Tigre',
                        'origin'      => 'Sudafrica, India',
                        'type'        => 'Quarzo',
                        'color'       => 'Marrone dorato',
                        'chakra'      => 'Plesso solare',
                        'zodiac_signs' => 'Ariete, Leone, Capricorno',
                        'description' => 'Pietra di forza e centratura che sostiene il coraggio e l’azione concreta.',
                        'usage'       => 'Indicata per nuove iniziative, successo materiale e protezione.',
                        'powers'      => ['coraggio', 'protezione', 'determinazione'],
                    ],
                    [
                        'language'    => 'en',
                        'name'        => "Tiger's Eye",
                        'origin'      => 'South Africa, India',
                        'type'        => 'Quartz',
                        'color'       => 'Golden brown',
                        'chakra'      => 'Solar plexus',
                        'zodiac_signs' => 'Aries, Leo, Capricorn',
                        'description' => 'Stone of strength and grounding that supports courage and action.',
                        'usage'       => 'Used for new ventures, material success and protection.',
                        'powers'      => ['courage', 'protection', 'determination'],
                    ],
                ],
            ],
            [
                'stone' => [
                    'number'   => 1,
                    'hardness' => 7,
                ],
                'translations' => [
                    [
                        'language'    => 'it',
                        'name'        => 'Diaspro Rosso',
                        'origin'      => 'Brasile, India',
                        'type'        => 'Diaspro',
                        'color'       => 'Rosso',
                        'chakra'      => 'Radice',
                        'zodiac_signs' => 'Ariete, Scorpione',
                        'description' => 'Pietra di energia fisica e radicamento che aiuta a restare presenti.',
                        'usage'       => 'Indicata per superare stanchezza, apatia e indecisione.',
                        'powers'      => ['energia', 'radicamento', 'stabilità'],
                    ],
                    [
                        'language'    => 'en',
                        'name'        => 'Red Jasper',
                        'origin'      => 'Brazil, India',
                        'type'        => 'Jasper',
                        'color'       => 'Red',
                        'chakra'      => 'Root',
                        'zodiac_signs' => 'Aries, Scorpio',
                        'description' => 'Grounding stone that boosts physical energy and presence.',
                        'usage'       => 'Used to overcome fatigue, apathy and indecision.',
                        'powers'      => ['energy', 'grounding', 'stability'],
                    ],
                ],
            ],
            [
                'stone' => [
                    'number'   => 1,
                    'hardness' => 8.5,
                ],
                'translations' => [
                    [
                        'language'    => 'it',
                        'name'        => 'Granato',
                        'origin'      => 'India, Africa',
                        'type'        => 'Silicato',
                        'color'       => 'Rosso scuro',
                        'chakra'      => 'Radice',
                        'zodiac_signs' => 'Capricorno, Leone',
                        'description' => 'Pietra di passione e volontà che riaccende la fiducia in sé.',
                        'usage'       => 'Indicata per momenti di crisi, ripartenza e motivazione.',
                        'powers'      => ['passione', 'forza vitale', 'rigenerazione'],
                    ],
                    [
                        'language'    => 'en',
                        'name'        => 'Garnet',
                        'origin'      => 'India, Africa',
                        'type'        => 'Silicate',
                        'color'       => 'Deep red',
                        'chakra'      => 'Root',
                        'zodiac_signs' => 'Capricorn, Leo',
                        'description' => 'Stone of passion and will that reignites self-trust.',
                        'usage'       => 'Used in times of crisis, restart and motivation.',
                        'powers'      => ['passion', 'vital force', 'regeneration'],
                    ],
                ],
            ],

            // ---------- NUMERO 2 ----------
            [
                'stone' => [
                    'number'   => 2,
                    'hardness' => 6,
                ],
                'translations' => [
                    [
                        'language'    => 'it',
                        'name'        => 'Pietra di Luna',
                        'origin'      => 'Sri Lanka, India',
                        'type'        => 'Feldspato',
                        'color'       => 'Bianco perlaceo',
                        'chakra'      => 'Sacro, Terzo occhio',
                        'zodiac_signs' => 'Cancro, Pesci',
                        'description' => 'Pietra lunare che amplifica intuizione, sensibilità e cicli interiori.',
                        'usage'       => 'Indicata per lavori emotivi, sogni e contatto con il femminile sacro.',
                        'powers'      => ['intuizione', 'sensibilità', 'cicli lunari'],
                    ],
                    [
                        'language'    => 'en',
                        'name'        => 'Moonstone',
                        'origin'      => 'Sri Lanka, India',
                        'type'        => 'Feldspar',
                        'color'       => 'Pearly white',
                        'chakra'      => 'Sacral, Third eye',
                        'zodiac_signs' => 'Cancer, Pisces',
                        'description' => 'Lunar stone that enhances intuition, sensitivity and inner cycles.',
                        'usage'       => 'Used for emotional work, dreams and connection to the sacred feminine.',
                        'powers'      => ['intuition', 'sensitivity', 'lunar cycles'],
                    ],
                ],
            ],
            [
                'stone' => [
                    'number'   => 2,
                    'hardness' => 2,
                ],
                'translations' => [
                    [
                        'language'    => 'it',
                        'name'        => 'Selenite',
                        'origin'      => 'Marocco, Messico',
                        'type'        => 'Solfato',
                        'color'       => 'Bianco latteo',
                        'chakra'      => 'Corona',
                        'zodiac_signs' => 'Cancro, Toro',
                        'description' => 'Pietra eterea che purifica spazi, aura e collega alle frequenze angeliche.',
                        'usage'       => 'Indicata per pulizie energetiche, meditazione e preghiera.',
                        'powers'      => ['purificazione', 'pace', 'connessione angelica'],
                    ],
                    [
                        'language'    => 'en',
                        'name'        => 'Selenite',
                        'origin'      => 'Morocco, Mexico',
                        'type'        => 'Sulfate',
                        'color'       => 'Milky white',
                        'chakra'      => 'Crown',
                        'zodiac_signs' => 'Cancer, Taurus',
                        'description' => 'Ethereal stone that cleanses spaces, aura and connects to angelic realms.',
                        'usage'       => 'Used for energetic cleansing, meditation and prayer.',
                        'powers'      => ['purification', 'peace', 'angelic connection'],
                    ],
                ],
            ],
            [
                'stone' => [
                    'number'   => 2,
                    'hardness' => 7.5,
                ],
                'translations' => [
                    [
                        'language'    => 'it',
                        'name'        => 'Perla',
                        'origin'      => 'Oceani vari',
                        'type'        => 'Organica',
                        'color'       => 'Bianco perlaceo',
                        'chakra'      => 'Cuore, Sacro',
                        'zodiac_signs' => 'Cancro',
                        'description' => 'Simbolo di purezza e sensibilità, armonizza emozioni e relazioni.',
                        'usage'       => 'Indicata per delicatezza emotiva, amore e matrimoni.',
                        'powers'      => ['dolcezza', 'armonia', 'protezione emotiva'],
                    ],
                    [
                        'language'    => 'en',
                        'name'        => 'Pearl',
                        'origin'      => 'Various oceans',
                        'type'        => 'Organic',
                        'color'       => 'Pearly white',
                        'chakra'      => 'Heart, Sacral',
                        'zodiac_signs' => 'Cancer',
                        'description' => 'Symbol of purity and sensitivity, harmonizes emotions and relationships.',
                        'usage'       => 'Used for emotional delicacy, love and marriage.',
                        'powers'      => ['gentleness', 'harmony', 'emotional protection'],
                    ],
                ],
            ],

            // ---------- NUMERO 3 ----------
            [
                'stone' => [
                    'number'   => 3,
                    'hardness' => 7,
                ],
                'translations' => [
                    [
                        'language'    => 'it',
                        'name'        => 'Citrino',
                        'origin'      => 'Brasile, Madagascar',
                        'type'        => 'Quarzo',
                        'color'       => 'Giallo dorato',
                        'chakra'      => 'Plesso solare',
                        'zodiac_signs' => 'Gemelli, Leone',
                        'description' => 'Pietra solare che porta ottimismo, gioia e abbondanza.',
                        'usage'       => 'Indicata per manifestazione, successo creativo e fiducia.',
                        'powers'      => ['creatività', 'abbondanza', 'gioia'],
                    ],
                    [
                        'language'    => 'en',
                        'name'        => 'Citrine',
                        'origin'      => 'Brazil, Madagascar',
                        'type'        => 'Quartz',
                        'color'       => 'Golden yellow',
                        'chakra'      => 'Solar plexus',
                        'zodiac_signs' => 'Gemini, Leo',
                        'description' => 'Solar stone bringing optimism, joy and abundance.',
                        'usage'       => 'Used for manifestation, creative success and confidence.',
                        'powers'      => ['creativity', 'abundance', 'joy'],
                    ],
                ],
            ],
            [
                'stone' => [
                    'number'   => 3,
                    'hardness' => 7,
                ],
                'translations' => [
                    [
                        'language'    => 'it',
                        'name'        => 'Corniola',
                        'origin'      => 'Brasile, India',
                        'type'        => 'Calcedonio',
                        'color'       => 'Arancio',
                        'chakra'      => 'Sacro',
                        'zodiac_signs' => 'Leone, Vergine',
                        'description' => 'Pietra di fuoco dolce che stimola creatività, passione e vitalità.',
                        'usage'       => 'Indicata per progetti artistici, energia sessuale e motivazione.',
                        'powers'      => ['creatività', 'vitalità', 'espressione'],
                    ],
                    [
                        'language'    => 'en',
                        'name'        => 'Carnelian',
                        'origin'      => 'Brazil, India',
                        'type'        => 'Chalcedony',
                        'color'       => 'Orange',
                        'chakra'      => 'Sacral',
                        'zodiac_signs' => 'Leo, Virgo',
                        'description' => 'Warm fiery stone that stimulates creativity, passion and vitality.',
                        'usage'       => 'Used for artistic projects, sexual energy and motivation.',
                        'powers'      => ['creativity', 'vitality', 'expression'],
                    ],
                ],
            ],
            [
                'stone' => [
                    'number'   => 3,
                    'hardness' => 7,
                ],
                'translations' => [
                    [
                        'language'    => 'it',
                        'name'        => 'Ametista',
                        'origin'      => 'Brasile, Uruguay',
                        'type'        => 'Quarzo',
                        'color'       => 'Viola',
                        'chakra'      => 'Terzo occhio, Corona',
                        'zodiac_signs' => 'Pesci, Sagittario, Acquario',
                        'description' => 'Pietra spirituale che calma la mente e apre alla visione interiore.',
                        'usage'       => 'Indicata per meditazione, sogni e protezione psichica.',
                        'powers'      => ['intuizione', 'protezione psichica', 'calma mentale'],
                    ],
                    [
                        'language'    => 'en',
                        'name'        => 'Amethyst',
                        'origin'      => 'Brazil, Uruguay',
                        'type'        => 'Quartz',
                        'color'       => 'Purple',
                        'chakra'      => 'Third eye, Crown',
                        'zodiac_signs' => 'Pisces, Sagittarius, Aquarius',
                        'description' => 'Spiritual stone that calms the mind and opens inner vision.',
                        'usage'       => 'Used for meditation, dreams and psychic protection.',
                        'powers'      => ['intuition', 'psychic protection', 'mental calm'],
                    ],
                ],
            ],

            // ---------- NUMERO 4 ----------
            [
                'stone' => [
                    'number'   => 4,
                    'hardness' => 5,
                ],
                'translations' => [
                    [
                        'language'    => 'it',
                        'name'        => 'Ossidiana Nera',
                        'origin'      => 'Messico, Islanda',
                        'type'        => 'Vetro vulcanico',
                        'color'       => 'Nero',
                        'chakra'      => 'Radice',
                        'zodiac_signs' => 'Capricorno, Scorpione',
                        'description' => 'Pietra di protezione profonda che porta alla luce le ombre interiori.',
                        'usage'       => 'Indicata per tagliare legami tossici, difesa psichica e radicamento.',
                        'powers'      => ['protezione', 'purificazione', 'radicamento'],
                    ],
                    [
                        'language'    => 'en',
                        'name'        => 'Black Obsidian',
                        'origin'      => 'Mexico, Iceland',
                        'type'        => 'Volcanic glass',
                        'color'       => 'Black',
                        'chakra'      => 'Root',
                        'zodiac_signs' => 'Capricorn, Scorpio',
                        'description' => 'Deep protection stone that reveals inner shadows.',
                        'usage'       => 'Used to cut toxic ties, psychic defense and grounding.',
                        'powers'      => ['protection', 'purification', 'grounding'],
                    ],
                ],
            ],
            [
                'stone' => [
                    'number'   => 4,
                    'hardness' => 5.5,
                ],
                'translations' => [
                    [
                        'language'    => 'it',
                        'name'        => 'Ematite',
                        'origin'      => 'Brasile, Italia',
                        'type'        => 'Ossido di ferro',
                        'color'       => 'Grigio metallico',
                        'chakra'      => 'Radice',
                        'zodiac_signs' => 'Ariete, Capricorno',
                        'description' => 'Pietra pesante che ancora al corpo e stabilizza la struttura.',
                        'usage'       => 'Indicata per chi si sente disperso, fragile o “in aria”.',
                        'powers'      => ['stabilità', 'protezione fisica', 'forza'],
                    ],
                    [
                        'language'    => 'en',
                        'name'        => 'Hematite',
                        'origin'      => 'Brazil, Italy',
                        'type'        => 'Iron oxide',
                        'color'       => 'Metallic grey',
                        'chakra'      => 'Root',
                        'zodiac_signs' => 'Aries, Capricorn',
                        'description' => 'Heavy stone that anchors to the body and stabilizes structure.',
                        'usage'       => 'Used for those who feel scattered, fragile or ungrounded.',
                        'powers'      => ['stability', 'physical protection', 'strength'],
                    ],
                ],
            ],

            // ---------- NUMERO 5 ----------
            [
                'stone' => [
                    'number'   => 5,
                    'hardness' => 6.5,
                ],
                'translations' => [
                    [
                        'language'    => 'it',
                        'name'        => 'Labradorite',
                        'origin'      => 'Canada, Madagascar',
                        'type'        => 'Feldspato',
                        'color'       => 'Grigio con riflessi blu-verdi',
                        'chakra'      => 'Terzo occhio',
                        'zodiac_signs' => 'Sagittario, Pesci',
                        'description' => 'Pietra sciamanica che protegge l’aura e apre la visione interiore.',
                        'usage'       => 'Indicata per sogni lucidi, viaggi interiori e trasformazione.',
                        'powers'      => ['protezione aurica', 'intuizione', 'trasformazione'],
                    ],
                    [
                        'language'    => 'en',
                        'name'        => 'Labradorite',
                        'origin'      => 'Canada, Madagascar',
                        'type'        => 'Feldspar',
                        'color'       => 'Grey with blue-green flashes',
                        'chakra'      => 'Third eye',
                        'zodiac_signs' => 'Sagittarius, Pisces',
                        'description' => 'Shamanic stone that protects the aura and opens inner vision.',
                        'usage'       => 'Used for lucid dreaming, inner journeys and transformation.',
                        'powers'      => ['auric protection', 'intuition', 'transformation'],
                    ],
                ],
            ],
            [
                'stone' => [
                    'number'   => 5,
                    'hardness' => 4,
                ],
                'translations' => [
                    [
                        'language'    => 'it',
                        'name'        => 'Fluorite',
                        'origin'      => 'Cina, Messico',
                        'type'        => 'Fluoruro',
                        'color'       => 'Verde, viola o mista',
                        'chakra'      => 'Terzo occhio',
                        'zodiac_signs' => 'Pesci, Acquario',
                        'description' => 'Pietra di ordine mentale che aiuta a chiarire pensieri e scelte.',
                        'usage'       => 'Indicata per studio, concentrazione e decisioni importanti.',
                        'powers'      => ['chiarezza mentale', 'discernimento', 'ordine'],
                    ],
                    [
                        'language'    => 'en',
                        'name'        => 'Fluorite',
                        'origin'      => 'China, Mexico',
                        'type'        => 'Fluoride mineral',
                        'color'       => 'Green, purple or mixed',
                        'chakra'      => 'Third eye',
                        'zodiac_signs' => 'Pisces, Aquarius',
                        'description' => 'Stone of mental order that clarifies thoughts and choices.',
                        'usage'       => 'Used for study, focus and important decisions.',
                        'powers'      => ['mental clarity', 'discernment', 'order'],
                    ],
                ],
            ],

            // ---------- NUMERO 6 ----------
            [
                'stone' => [
                    'number'   => 6,
                    'hardness' => 7,
                ],
                'translations' => [
                    [
                        'language'    => 'it',
                        'name'        => 'Quarzo Rosa',
                        'origin'      => 'Brasile, Madagascar',
                        'type'        => 'Quarzo',
                        'color'       => 'Rosa',
                        'chakra'      => 'Cuore',
                        'zodiac_signs' => 'Toro, Bilancia',
                        'description' => 'Pietra dell’amore incondizionato e della guarigione del cuore.',
                        'usage'       => 'Indicata per relazioni, autostima e perdono.',
                        'powers'      => ['amore', 'guarigione emotiva', 'compassione'],
                    ],
                    [
                        'language'    => 'en',
                        'name'        => 'Rose Quartz',
                        'origin'      => 'Brazil, Madagascar',
                        'type'        => 'Quartz',
                        'color'       => 'Pink',
                        'chakra'      => 'Heart',
                        'zodiac_signs' => 'Taurus, Libra',
                        'description' => 'Stone of unconditional love and heart healing.',
                        'usage'       => 'Used for relationships, self-love and forgiveness.',
                        'powers'      => ['love', 'emotional healing', 'compassion'],
                    ],
                ],
            ],
            [
                'stone' => [
                    'number'   => 6,
                    'hardness' => 5.5,
                ],
                'translations' => [
                    [
                        'language'    => 'it',
                        'name'        => 'Rodonite',
                        'origin'      => 'Russia, Madagascar',
                        'type'        => 'Silicato',
                        'color'       => 'Rosa con venature scure',
                        'chakra'      => 'Cuore',
                        'zodiac_signs' => 'Toro, Bilancia',
                        'description' => 'Pietra che guarisce ferite emotive e conflitti relazionali.',
                        'usage'       => 'Indicata per famiglie, coppie e traumi affettivi.',
                        'powers'      => ['equilibrio emotivo', 'relazioni', 'perdono'],
                    ],
                    [
                        'language'    => 'en',
                        'name'        => 'Rhodonite',
                        'origin'      => 'Russia, Madagascar',
                        'type'        => 'Silicate',
                        'color'       => 'Pink with dark veins',
                        'chakra'      => 'Heart',
                        'zodiac_signs' => 'Taurus, Libra',
                        'description' => 'Stone that heals emotional wounds and relationship conflicts.',
                        'usage'       => 'Used for families, couples and emotional trauma.',
                        'powers'      => ['emotional balance', 'relationships', 'forgiveness'],
                    ],
                ],
            ],

            // ---------- NUMERO 7 ----------
            [
                'stone' => [
                    'number'   => 7,
                    'hardness' => 5.5,
                ],
                'translations' => [
                    [
                        'language'    => 'it',
                        'name'        => 'Lapislazzuli',
                        'origin'      => 'Afghanistan, Cile',
                        'type'        => 'Silicato',
                        'color'       => 'Blu intenso con pirite',
                        'chakra'      => 'Gola, Terzo occhio',
                        'zodiac_signs' => 'Sagittario, Pesci',
                        'description' => 'Pietra regale di saggezza, verità e connessione spirituale.',
                        'usage'       => 'Indicata per meditazione, canalizzazione e comunicazione autentica.',
                        'powers'      => ['saggezza', 'verità', 'visione interiore'],
                    ],
                    [
                        'language'    => 'en',
                        'name'        => 'Lapis Lazuli',
                        'origin'      => 'Afghanistan, Chile',
                        'type'        => 'Silicate',
                        'color'       => 'Deep blue with pyrite',
                        'chakra'      => 'Throat, Third eye',
                        'zodiac_signs' => 'Sagittarius, Pisces',
                        'description' => 'Royal stone of wisdom, truth and spiritual connection.',
                        'usage'       => 'Used for meditation, channelling and authentic communication.',
                        'powers'      => ['wisdom', 'truth', 'inner vision'],
                    ],
                ],
            ],
            [
                'stone' => [
                    'number'   => 7,
                    'hardness' => 3,
                ],
                'translations' => [
                    [
                        'language'    => 'it',
                        'name'        => 'Angelite',
                        'origin'      => 'Perù',
                        'type'        => 'Solfato di calcio',
                        'color'       => 'Azzurro chiaro',
                        'chakra'      => 'Gola',
                        'zodiac_signs' => 'Acquario, Pesci',
                        'description' => 'Pietra della presenza angelica che porta pace e dolcezza.',
                        'usage'       => 'Indicata per preghiera, canalizzazione e consolazione emotiva.',
                        'powers'      => ['connessione angelica', 'pace', 'dolcezza'],
                    ],
                    [
                        'language'    => 'en',
                        'name'        => 'Angelite',
                        'origin'      => 'Peru',
                        'type'        => 'Calcium sulfate',
                        'color'       => 'Light blue',
                        'chakra'      => 'Throat',
                        'zodiac_signs' => 'Aquarius, Pisces',
                        'description' => 'Stone of angelic presence that brings peace and gentleness.',
                        'usage'       => 'Used for prayer, channeling and emotional comfort.',
                        'powers'      => ['angelic connection', 'peace', 'gentleness'],
                    ],
                ],
            ],

            // ---------- NUMERO 8 ----------
            [
                'stone' => [
                    'number'   => 8,
                    'hardness' => 6.5,
                ],
                'translations' => [
                    [
                        'language'    => 'it',
                        'name'        => 'Pirite',
                        'origin'      => 'Spagna, Perù',
                        'type'        => 'Solfuro',
                        'color'       => 'Oro metallico',
                        'chakra'      => 'Plesso solare',
                        'zodiac_signs' => 'Leone, Capricorno',
                        'description' => 'Pietra di abbondanza e protezione, il “falso oro” che insegna il vero valore.',
                        'usage'       => 'Indicata per lavoro, negozi, progetti materiali e protezione.',
                        'powers'      => ['abbondanza', 'protezione', 'forza mentale'],
                    ],
                    [
                        'language'    => 'en',
                        'name'        => 'Pyrite',
                        'origin'      => 'Spain, Peru',
                        'type'        => 'Sulfide',
                        'color'       => 'Metallic gold',
                        'chakra'      => 'Solar plexus',
                        'zodiac_signs' => 'Leo, Capricorn',
                        'description' => 'Stone of abundance and protection, the “fool’s gold” that teaches real value.',
                        'usage'       => 'Used for work, business, material projects and protection.',
                        'powers'      => ['abundance', 'protection', 'mental strength'],
                    ],
                ],
            ],
            [
                'stone' => [
                    'number'   => 8,
                    'hardness' => 2.5,
                ],
                'translations' => [
                    [
                        'language'    => 'it',
                        'name'        => 'Ambra',
                        'origin'      => 'Area Baltica',
                        'type'        => 'Resina fossile',
                        'color'       => 'Giallo, arancio',
                        'chakra'      => 'Plesso solare',
                        'zodiac_signs' => 'Leone, Gemelli',
                        'description' => 'Resina antica che trattiene luce e protegge da energie pesanti.',
                        'usage'       => 'Indicata per bambini, vitalità, sistema digestivo e protezione sottile.',
                        'powers'      => ['vitalità', 'protezione', 'pulizia'],
                    ],
                    [
                        'language'    => 'en',
                        'name'        => 'Amber',
                        'origin'      => 'Baltic area',
                        'type'        => 'Fossil resin',
                        'color'       => 'Yellow, orange',
                        'chakra'      => 'Solar plexus',
                        'zodiac_signs' => 'Leo, Gemini',
                        'description' => 'Ancient resin that holds light and protects from heavy energies.',
                        'usage'       => 'Used for children, vitality, digestion and subtle protection.',
                        'powers'      => ['vitality', 'protection', 'cleansing'],
                    ],
                ],
            ],

            // ---------- NUMERO 9 ----------
            [
                'stone' => [
                    'number'   => 9,
                    'hardness' => 7,
                ],
                'translations' => [
                    [
                        'language'    => 'it',
                        'name'        => 'Quarzo Ialino',
                        'origin'      => 'Brasile, Himalaya',
                        'type'        => 'Quarzo',
                        'color'       => 'Trasparente',
                        'chakra'      => 'Tutti',
                        'zodiac_signs' => 'Tutti i segni',
                        'description' => 'Cristallo maestro che amplifica ogni energia e porta chiarezza.',
                        'usage'       => 'Indicata per guarigione energetica, meditazione e programmazione.',
                        'powers'      => ['amplificazione', 'chiarezza', 'guarigione'],
                    ],
                    [
                        'language'    => 'en',
                        'name'        => 'Clear Quartz',
                        'origin'      => 'Brazil, Himalaya',
                        'type'        => 'Quartz',
                        'color'       => 'Transparent',
                        'chakra'      => 'All',
                        'zodiac_signs' => 'All signs',
                        'description' => 'Master crystal that amplifies energy and brings clarity.',
                        'usage'       => 'Used for energy healing, meditation and programming.',
                        'powers'      => ['amplification', 'clarity', 'healing'],
                    ],
                ],
            ],
            [
                'stone' => [
                    'number'   => 9,
                    'hardness' => 7,
                ],
                'translations' => [
                    [
                        'language'    => 'it',
                        'name'        => 'Avventurina Verde',
                        'origin'      => 'India, Brasile',
                        'type'        => 'Quarzo',
                        'color'       => 'Verde',
                        'chakra'      => 'Cuore',
                        'zodiac_signs' => 'Toro, Vergine',
                        'description' => 'Pietra di guarigione dolce e fortuna collegata al cuore.',
                        'usage'       => 'Indicata per nuovi inizi, benessere e apertura al flusso della vita.',
                        'powers'      => ['guarigione', 'fortuna', 'benessere'],
                    ],
                    [
                        'language'    => 'en',
                        'name'        => 'Green Aventurine',
                        'origin'      => 'India, Brazil',
                        'type'        => 'Quartz',
                        'color'       => 'Green',
                        'chakra'      => 'Heart',
                        'zodiac_signs' => 'Taurus, Virgo',
                        'description' => 'Gentle healing and luck stone connected to the heart.',
                        'usage'       => 'Used for new beginnings, wellbeing and openness to life.',
                        'powers'      => ['healing', 'luck', 'wellbeing'],
                    ],
                ],
            ],

            // ---------- NUMERI MAESTRI ----------
            [
                'stone' => [
                    'number'   => 11,
                    'hardness' => 7,
                ],
                'translations' => [
                    [
                        'language'    => 'it',
                        'name'        => 'Ametrina',
                        'origin'      => 'Bolivia',
                        'type'        => 'Quarzo',
                        'color'       => 'Viola e giallo',
                        'chakra'      => 'Terzo occhio, Plesso solare',
                        'zodiac_signs' => 'Pesci, Sagittario',
                        'description' => 'Unione di ametista e citrino, ponte tra mondo spirituale e materiale.',
                        'usage'       => 'Indicata per anime maestre, canalizzazione e manifestazione consapevole.',
                        'powers'      => ['intuizione', 'manifestazione', 'guarigione spirituale'],
                    ],
                    [
                        'language'    => 'en',
                        'name'        => 'Ametrine',
                        'origin'      => 'Bolivia',
                        'type'        => 'Quartz',
                        'color'       => 'Purple and yellow',
                        'chakra'      => 'Third eye, Solar plexus',
                        'zodiac_signs' => 'Pisces, Sagittarius',
                        'description' => 'Blend of amethyst and citrine that bridges spiritual and material worlds.',
                        'usage'       => 'Used for master souls, channelling and conscious manifestation.',
                        'powers'      => ['intuition', 'manifestation', 'spiritual healing'],
                    ],
                ],
            ],
            [
                'stone' => [
                    'number'   => 22,
                    'hardness' => 5,
                ],
                'translations' => [
                    [
                        'language'    => 'it',
                        'name'        => 'Ossidiana Fiocco di Neve',
                        'origin'      => 'Stati Uniti, Islanda',
                        'type'        => 'Vetro vulcanico',
                        'color'       => 'Nero con macchie bianche',
                        'chakra'      => 'Radice',
                        'zodiac_signs' => 'Capricorno',
                        'description' => 'Pietra che mostra le crepe interiori per ricostruire fondamenta più solide.',
                        'usage'       => 'Indicata per guarigione karmica e cicatrici del passato.',
                        'powers'      => ['protezione', 'guarigione karmica', 'purificazione'],
                    ],
                    [
                        'language'    => 'en',
                        'name'        => 'Snowflake Obsidian',
                        'origin'      => 'USA, Iceland',
                        'type'        => 'Volcanic glass',
                        'color'       => 'Black with white spots',
                        'chakra'      => 'Root',
                        'zodiac_signs' => 'Capricorn',
                        'description' => 'Stone that reveals inner cracks to rebuild stronger foundations.',
                        'usage'       => 'Used for karmic healing and past scars.',
                        'powers'      => ['protection', 'karmic healing', 'purification'],
                    ],
                ],
            ],
            [
                'stone' => [
                    'number'   => 33,
                    'hardness' => 5.5,
                ],
                'translations' => [
                    [
                        'language'    => 'it',
                        'name'        => 'Moldavite',
                        'origin'      => 'Repubblica Ceca',
                        'type'        => 'Tettite (vetro naturale)',
                        'color'       => 'Verde scuro',
                        'chakra'      => 'Cuore, Corona',
                        'zodiac_signs' => 'Tutti, in particolare segni spirituali',
                        'description' => 'Pietra meteoritica ad alta vibrazione che innesca risveglio e grandi cambiamenti.',
                        'usage'       => 'Indicata per anime maestre, salti evolutivi e connessione cosmica.',
                        'powers'      => ['trasformazione radicale', 'risveglio spirituale', 'contatto stellare'],
                    ],
                    [
                        'language'    => 'en',
                        'name'        => 'Moldavite',
                        'origin'      => 'Czech Republic',
                        'type'        => 'Tektite (natural glass)',
                        'color'       => 'Dark green',
                        'chakra'      => 'Heart, Crown',
                        'zodiac_signs' => 'All, especially spiritual signs',
                        'description' => 'High-vibration meteoritic glass that triggers awakening and major life changes.',
                        'usage'       => 'Used for master souls, evolutionary leaps and cosmic connection.',
                        'powers'      => ['radical transformation', 'spiritual awakening', 'stellar contact'],
                    ],
                ],
            ],

        ];

        foreach ($stones as $item) {
            $stone = StonesMeaning::create($item['stone']);

            foreach ($item['translations'] as $t) {
                StonesTranslation::create(array_merge($t, [
                    'stones_meanings_id' => $stone->id,
                ]));
            }
        }
    }
}
