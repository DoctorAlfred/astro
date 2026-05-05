<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Colors\ColorMeaning;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ColorsMeaningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $colors = [
            // ARGENTO - La Luna, l'Inconscio
            [
                'name' => ['it' => 'Argento', 'en' => 'Silver'],
                'hex' => '#C0C0C0',
                'numerology' => 2, // Vibrazione lunare e duale
                'frequency_range' => ['min' => 430, 'max' => 790],
                'psychology' => [
                    'it' => 'Intuizione, riflessione, fluidità emotiva, connessione con l\'inconscio',
                    'en' => 'Intuition, reflection, emotional fluidity, connection with the unconscious'
                ],
                'shadow' => [
                    'it' => 'Indecisione, freddezza emotiva, instabilità, fuga dalla realtà',
                    'en' => 'Indecision, emotional coldness, instability, escape from reality'
                ],
                'spiritual' => [
                    'it' => 'Energia Femminile Divina, connessione astrale, potere lunare intuitivo',
                    'en' => 'Divine Feminine Energy, astral connection, intuitive lunar power'
                ],
                'chakra' => [
                    'it' => '6° Ajna (Terzo Occhio)',
                    'en' => '6th Ajna (Third Eye)'
                ],
                'organs' => [
                    'it' => 'Liquidi corporei, sistema linfatico, stomaco, milza',
                    'en' => 'Body fluids, lymphatic system, stomach, spleen'
                ],
                'licnomancy' => [
                    'it' => 'Rivela verità nascoste e sogni premonitori; usata per specchiarsi nell\'anima e connettersi con il proprio riflesso interiore',
                    'en' => 'Reveals hidden truths and premonitory dreams; used to mirror the soul and connect with one\'s inner reflection'
                ],
            ],

            // ARANCIONE - La Gioia e la Creazione
            [
                'name' => ['it' => 'Arancione', 'en' => 'Orange'],
                'hex' => '#FFA500',
                'numerology' => 6, // Creatività in armonia, servizio alla comunità
                'frequency_range' => ['min' => 470, 'max' => 510],
                'psychology' => [
                    'it' => 'Creatività, entusiasmo, ottimismo sociale, gioia di vivere, estroversione',
                    'en' => 'Creativity, enthusiasm, social optimism, joy of living, extroversion'
                ],
                'shadow' => [
                    'it' => 'Dipendenza affettiva, superficialità, ricerca ossessiva di attenzione, impulsività',
                    'en' => 'Emotional dependency, superficiality, obsessive attention-seeking, impulsivity'
                ],
                'spiritual' => [
                    'it' => 'Espansione del Sé, risveglio dei sensi, sacralità del piacere divino',
                    'en' => 'Expansion of the Self, awakening of the senses, sacredness of divine pleasure'
                ],
                'chakra' => [
                    'it' => '2° Svadhisthana (Sacrale)',
                    'en' => '2nd Svadhisthana (Sacral)'
                ],
                'organs' => [
                    'it' => 'Intestino tenue e crasso, organi riproduttivi (ovaie/testicoli), reni, vescica',
                    'en' => 'Small and large intestines, reproductive organs (ovaries/testicles), kidneys, bladder'
                ],
                'licnomancy' => [
                    'it' => 'Attira abbondanza e successo materiale; fiamma viva di attrazione magnetica; potenzia il carisma personale',
                    'en' => 'Attracts abundance and material success; vivid flame of magnetic attraction; enhances personal charisma'
                ],
            ],

            // AZZURRO - La Comunicazione Angelica
            [
                'name' => ['it' => 'Azzurro', 'en' => 'Light Blue'],
                'hex' => '#87CEEB',
                'numerology' => 5, // Cambiamento, comunicazione, libertà
                'frequency_range' => ['min' => 580, 'max' => 610],
                'psychology' => [
                    'it' => 'Calma, lealtà, espressione creativa verbale, serenità mentale, pazienza',
                    'en' => 'Calm, loyalty, creative verbal expression, mental serenity, patience'
                ],
                'shadow' => [
                    'it' => 'Difficoltà a dire la verità, timidezza patologica, evitamento dei conflitti, passività',
                    'en' => 'Difficulty speaking the truth, pathological shyness, conflict avoidance, passivity'
                ],
                'spiritual' => [
                    'it' => 'Protezione angelica, pace profonda, connessione con i regni celesti inferiori',
                    'en' => 'Angelic protection, deep peace, connection with the lower celestial realms'
                ],
                'chakra' => [
                    'it' => '5° Vishuddha (Gola)',
                    'en' => '5th Vishuddha (Throat)'
                ],
                'organs' => [
                    'it' => 'Gola, tiroide, paratiroidi, collo, corde vocali, bronchi',
                    'en' => 'Throat, thyroid, parathyroids, neck, vocal cords, bronchi'
                ],
                'licnomancy' => [
                    'it' => 'Facilita il contatto con le guide celesti e purifica lo spazio sacro; apre i canali della comunicazione spirituale',
                    'en' => 'Facilitates contact with celestial guides and purifies the sacred space; opens channels of spiritual communication'
                ],
            ],

            // BIANCO - La Sorgente
            [
                'name' => ['it' => 'Bianco', 'en' => 'White'],
                'hex' => '#FFFFFF',
                'numerology' => 1, // Il Principio, l'Unità, la Sorgente
                'frequency_range' => ['min' => 430, 'max' => 790],
                'psychology' => [
                    'it' => 'Purezza, potenziale illimitato, onestà radicale, nuovo inizio, pulizia mentale',
                    'en' => 'Purity, unlimited potential, radical honesty, new beginning, mental cleanliness'
                ],
                'shadow' => [
                    'it' => 'Freddezza emotiva, isolamento sociale, vuoto esistenziale, perfezionismo sterile',
                    'en' => 'Emotional coldness, social isolation, existential emptiness, sterile perfectionism'
                ],
                'spiritual' => [
                    'it' => 'Sintesi di tutte le frequenze vibrazionali; lo stato di unità prima della frammentazione in colori e forme; la Coscienza Pura',
                    'en' => 'Synthesis of all vibrational frequencies; the state of unity before fragmentation into colors and forms; Pure Consciousness'
                ],
                'chakra' => [
                    'it' => '7° Sahasrara (Corona)',
                    'en' => '7th Sahasrara (Crown)'
                ],
                'organs' => [
                    'it' => 'Sistema dei meridiani energetici, ghiandola pineale, equilibrio cellulare generale, sistema endocrino centrale',
                    'en' => 'Meridian system, pineal gland, general cellular balance, central endocrine system'
                ],
                'licnomancy' => [
                    'it' => 'Utilizzata come fonte neutra di energia pura; amplifica l\'intento di qualsiasi altra candela vicina; purifica l\'ambiente da energie stagnanti',
                    'en' => 'Used as a neutral source of pure energy; amplifies the intent of any other nearby candle; purifies the environment from stagnant energies'
                ],
            ],

            // BLU - La Verità e il Mistero
            [
                'name' => ['it' => 'Blu', 'en' => 'Blue'],
                'hex' => '#0000FF',
                'numerology' => 8, // Potere, giustizia spirituale, equilibrio cosmico
                'frequency_range' => ['min' => 610, 'max' => 670],
                'psychology' => [
                    'it' => 'Autorità interiore, stabilità emotiva, introspezione, fiducia, lealtà profonda',
                    'en' => 'Inner authority, emotional stability, introspection, trust, deep loyalty'
                ],
                'shadow' => [
                    'it' => 'Depressione, dogmatismo rigido, distacco emotivo, freddezza autoritaria, rigidità mentale',
                    'en' => 'Depression, rigid dogmatism, emotional detachment, authoritarian coldness, mental rigidity'
                ],
                'spiritual' => [
                    'it' => 'Saggezza antica, custode del silenzio sacro, verità trascendente, mistero divino',
                    'en' => 'Ancient wisdom, keeper of sacred silence, transcendent truth, divine mystery'
                ],
                'chakra' => [
                    'it' => '5° Vishuddha (Gola)',
                    'en' => '5th Vishuddha (Throat)'
                ],
                'organs' => [
                    'it' => 'Orecchie (udito fisico e spirituale), occhi, base del cranio, cervelletto, sistema vestibolare',
                    'en' => 'Ears (physical and spiritual hearing), eyes, base of the skull, cerebellum, vestibular system'
                ],
                'licnomancy' => [
                    'it' => 'Protegge dai conflitti e favorisce la giustizia e la verità; dissolve le menzogne e illumina i segreti oscuri',
                    'en' => 'Protects against conflict and favors justice and truth; dissolves lies and illuminates dark secrets'
                ],
            ],

            // FUCSIA - L'Amore Incondizionato
            [
                'name' => ['it' => 'Fucsia', 'en' => 'Fuchsia'],
                'hex' => '#FF00FF',
                'numerology' => 9, // Compimento, amore universale, sacrificio divino
                'frequency_range' => ['min' => 540, 'max' => 580],
                'psychology' => [
                    'it' => 'Altruismo, amore per i dettagli, gentilezza radicale, compassione attiva, tenerezza',
                    'en' => 'Altruism, love for details, radical kindness, active compassion, tenderness'
                ],
                'shadow' => [
                    'it' => 'Ipersensibilità emotiva, trascuratezza di sé, sacrificio patologico, dipendenza affettiva',
                    'en' => 'Emotional hypersensitivity, self-neglect, pathological sacrifice, emotional dependency'
                ],
                'spiritual' => [
                    'it' => 'Connessione con l\'amore universale e la gratitudine incondizionata; fusione con il divino femminile',
                    'en' => 'Connection with universal love and unconditional gratitude; fusion with the divine feminine'
                ],
                'chakra' => [
                    'it' => '4° Anahata (Cuore superiore)',
                    'en' => '4th Anahata (Higher Heart)'
                ],
                'organs' => [
                    'it' => 'Sistema circolatorio, cuore fisico ed energetico, timo, torace, polmoni profondi',
                    'en' => 'Circulatory system, physical and energetic heart, thymus, chest, deep lungs'
                ],
                'licnomancy' => [
                    'it' => 'Utilizzata per accelerare i risultati e manifestare l\'amore puro; dissolve le resistenze affettive e apre il cuore',
                    'en' => 'Used to accelerate results and manifest pure love; dissolves emotional resistances and opens the heart'
                ],
            ],

            // GIALLO - Il Sole e l'Intelletto
            [
                'name' => ['it' => 'Giallo', 'en' => 'Yellow'],
                'hex' => '#FFFF00',
                'numerology' => 3, // Creatività, comunicazione, gioia espressiva
                'frequency_range' => ['min' => 510, 'max' => 540],
                'psychology' => [
                    'it' => 'Chiarezza mentale, potere personale, autostima, ottimismo attivo, intelletto luminoso',
                    'en' => 'Mental clarity, personal power, self-esteem, active optimism, luminous intellect'
                ],
                'shadow' => [
                    'it' => 'Egoismo ipertrofico, codardia mascherata da prudenza, confusione mentale, arroganza intellettuale',
                    'en' => 'Hypertrophic egoism, cowardice masked as prudence, mental confusion, intellectual arrogance'
                ],
                'spiritual' => [
                    'it' => 'Illuminazione del Sé, volontà divina attiva, sole interiore, potere del pensiero creativo',
                    'en' => 'Enlightenment of the Self, active divine will, inner sun, power of creative thought'
                ],
                'chakra' => [
                    'it' => '3° Manipura (Plesso Solare)',
                    'en' => '3rd Manipura (Solar Plexus)'
                ],
                'organs' => [
                    'it' => 'Fegato, stomaco, milza, pancreas, cistifellea, sistema digerente superiore',
                    'en' => 'Liver, stomach, spleen, pancreas, gallbladder, upper digestive system'
                ],
                'licnomancy' => [
                    'it' => 'Favorisce lo studio, la memoria e la riuscita nei commerci; potenzia la concentrazione e la chiarezza decisionale',
                    'en' => 'Favors study, memory, and success in trade; enhances concentration and decision-making clarity'
                ],
            ],

            // INDACO - La Visione Interiore (NUOVO)
            [
                'name' => ['it' => 'Indaco', 'en' => 'Indigo'],
                'hex' => '#4B0082',
                'numerology' => 6, // Intuizione al servizio dell'anima, armonia spirituale
                'frequency_range' => ['min' => 670, 'max' => 715],
                'psychology' => [
                    'it' => 'Intuizione profonda, percezione extrasensoriale, saggezza interiore, visione olistica, mente intuitiva',
                    'en' => 'Deep intuition, extrasensory perception, inner wisdom, holistic vision, intuitive mind'
                ],
                'shadow' => [
                    'it' => 'Illusione spirituale, distacco emotivo, dogmatismo mistico, fuga dalla materialità, superiorità spirituale',
                    'en' => 'Spiritual illusion, emotional detachment, mystical dogmatism, escape from materiality, spiritual superiority'
                ],
                'spiritual' => [
                    'it' => 'Visione interiore, accesso ai registri akashici, risveglio del terzo occhio, chiaroveggenza, saggezza trascendente',
                    'en' => 'Inner vision, access to akashic records, awakening of the third eye, clairvoyance, transcendent wisdom'
                ],
                'chakra' => [
                    'it' => '6° Ajna (Terzo Occhio)',
                    'en' => '6th Ajna (Third Eye)'
                ],
                'organs' => [
                    'it' => 'Ghiandola pineale (epifisi), occhi, sistema nervoso centrale, ipotalamo, ipofisi',
                    'en' => 'Pineal gland (epiphysis), eyes, central nervous system, hypothalamus, pituitary gland'
                ],
                'licnomancy' => [
                    'it' => 'Apre le porte della veggenza; usato per sogni lucidi e visioni profetiche; dissolve i veli dell\'illusione e rivela la verità oltre l\'apparenza',
                    'en' => 'Opens the gates of clairvoyance; used for lucid dreaming and prophetic visions; dissolves the veils of illusion and reveals truth beyond appearance'
                ],
            ],

            // ORO - La Coscienza Solare
            [
                'name' => ['it' => 'Oro', 'en' => 'Gold'],
                'hex' => '#FFD700',
                'numerology' => 11, // Numero Maestro, illuminazione, canale divino
                'frequency_range' => ['min' => 490, 'max' => 540],
                'psychology' => [
                    'it' => 'Successo autentico, saggezza interiore, fiducia incondizionata, realizzazione, abbondanza consapevole',
                    'en' => 'Authentic success, inner wisdom, unconditional confidence, fulfillment, conscious abundance'
                ],
                'shadow' => [
                    'it' => 'Avidità insaziabile, arroganza regale, orgoglio ferito, materialismo spirituale, corruzione dell\'anima',
                    'en' => 'Insatiable greed, royal arrogance, wounded pride, spiritual materialism, corruption of the soul'
                ],
                'spiritual' => [
                    'it' => 'Luce del Sole divino, coscienza divina maschile, illuminazione attiva, Cristo cosmico, sovranità dell\'anima',
                    'en' => 'Divine sunlight, divine masculine consciousness, active enlightenment, cosmic Christ, sovereignty of the soul'
                ],
                'chakra' => [
                    'it' => '3° Manipura (Plesso Solare) e 7° Sahasrara (Corona)',
                    'en' => '3rd Manipura (Solar Plexus) and 7th Sahasrara (Crown)'
                ],
                'organs' => [
                    'it' => 'Occhio destro, cuore energetico, plesso solare, sistema solare interiore, midollo osseo',
                    'en' => 'Right eye, energetic heart, solar plexus, inner solar system, bone marrow'
                ],
                'licnomancy' => [
                    'it' => 'Attira la massima fortuna e la protezione solare; vibrazione regale di manifestazione istantanea; potenzia il carisma e l\'autorità spirituale',
                    'en' => 'Attracts maximum fortune and solar protection; royal vibration of instant manifestation; enhances charisma and spiritual authority'
                ],
            ],

            // ROSSO - La Forza Vitale
            [
                'name' => ['it' => 'Rosso', 'en' => 'Red'],
                'hex' => '#FF0000',
                'numerology' => 1, // Azione, inizio, impulso primordiale
                'frequency_range' => ['min' => 430, 'max' => 470],
                'psychology' => [
                    'it' => 'Coraggio radicale, passione vitale, azione immediata, sopravvivenza, istinto puro, vitalità',
                    'en' => 'Radical courage, vital passion, immediate action, survival, pure instinct, vitality'
                ],
                'shadow' => [
                    'it' => 'Rabbia distruttiva, violenza repressa o esplosiva, impulsività incontrollata, aggressività, rabbia patologica',
                    'en' => 'Destructive anger, repressed or explosive violence, uncontrolled impulsivity, aggressiveness, pathological anger'
                ],
                'spiritual' => [
                    'it' => 'Ancoraggio alla terra (radicamento), spirito guerriero sacro, forza vitale primordiale, energia kundalini inferiore',
                    'en' => 'Grounding to earth, sacred warrior spirit, primordial life force, lower kundalini energy'
                ],
                'chakra' => [
                    'it' => '1° Muladhara (Radice)',
                    'en' => '1st Muladhara (Root)'
                ],
                'organs' => [
                    'it' => 'Sangue e midollo osseo, ghiandole surrenali, muscoli scheletrici, sistema cardiovascolare inferiore, ano, retto',
                    'en' => 'Blood and bone marrow, adrenal glands, skeletal muscles, lower cardiovascular system, anus, rectum'
                ],
                'licnomancy' => [
                    'it' => 'Energia sessuale trasmutata, forza fisica e protezione contro i nemici; risveglia la kundalini e il potere vitale addormentato',
                    'en' => 'Transmuted sexual energy, physical strength, and protection against enemies; awakens kundalini and dormant life force'
                ],
            ],

            // VERDE - La Guarigione della Natura
            [
                'name' => ['it' => 'Verde', 'en' => 'Green'],
                'hex' => '#00A86B', // Verde giada/verde guarigione (più bilanciato del #008000)
                'numerology' => 4, // Stabilità, natura, fondamento, radicamento spirituale
                'frequency_range' => ['min' => 540, 'max' => 580],
                'psychology' => [
                    'it' => 'Equilibrio interiore, crescita personale, speranza attiva, rigenerazione, armonia, empatia',
                    'en' => 'Inner balance, personal growth, active hope, regeneration, harmony, empathy'
                ],
                'shadow' => [
                    'it' => 'Invidia tossica, stagnazione emotiva, gelosia possessiva, dipendenza affettiva, immobilismo',
                    'en' => 'Toxic envy, emotional stagnation, possessive jealousy, emotional dependency, immobility'
                ],
                'spiritual' => [
                    'it' => 'Armonia universale, respiro del mondo vivente, guarigione della Terra, amore compassionevole, natura sacra',
                    'en' => 'Universal harmony, breath of the living world, healing of the Earth, compassionate love, sacred nature'
                ],
                'chakra' => [
                    'it' => '4° Anahata (Cuore)',
                    'en' => '4th Anahata (Heart)'
                ],
                'organs' => [
                    'it' => 'Cuore, polmoni, braccia, mani, sistema immunitario, fegato, circolazione linfatica',
                    'en' => 'Heart, lungs, arms, hands, immune system, liver, lymphatic circulation'
                ],
                'licnomancy' => [
                    'it' => 'La fiamma della guarigione fisica e della fertilità della terra; rigenera i tessuti e riequilibria le energie naturali',
                    'en' => 'The flame of physical healing and earth fertility; regenerates tissues and rebalances natural energies'
                ],
            ],

            // VIOLA - La Trasmutazione Spirituale
            [
                'name' => ['it' => 'Viola', 'en' => 'Violet'],
                'hex' => '#8B00FF', // Viola più puro e spirituale (vicino al lilla)
                'numerology' => 7, // Ricerca spirituale, mistero, introspezione mistica
                'frequency_range' => ['min' => 715, 'max' => 790],
                'psychology' => [
                    'it' => 'Trasmutazione energetica, spiritualità elevata, introspezione profonda, mistica, devozione',
                    'en' => 'Energetic transmutation, high spirituality, deep introspection, mysticism, devotion'
                ],
                'shadow' => [
                    'it' => 'Malinconia esistenziale, distacco patologico dalla realtà, fuga nel sacro, elitarismo spirituale',
                    'en' => 'Existential melancholy, pathological detachment from reality, escape into the sacred, spiritual elitism'
                ],
                'spiritual' => [
                    'it' => 'Alchimia interiore, connessione con l\'Akasha (etere), trasmutazione del karma, ascensione, fuoco viola della guarigione spirituale',
                    'en' => 'Inner alchemy, connection with Akasha (ether), transmutation of karma, ascension, violet flame of spiritual healing'
                ],
                'chakra' => [
                    'it' => '7° Sahasrara (Corona)',
                    'en' => '7th Sahasrara (Crown)'
                ],
                'organs' => [
                    'it' => 'Ghiandola pineale, sistema nervoso centrale e periferico, corteccia cerebrale, sistema limbico',
                    'en' => 'Pineal gland, central and peripheral nervous system, cerebral cortex, limbic system'
                ],
                'licnomancy' => [
                    'it' => 'Pulisce il karma e trasforma le energie negative in luce; fiamma viola della trasmutazione istantanea; dissolve i blocchi spirituali ancestrali',
                    'en' => 'Cleanses karma and transforms negative energies into light; violet flame of instant transmutation; dissolves ancestral spiritual blocks'
                ],
            ],
        ];

        /** ********** ENDMOD *********** **/

        foreach ($colors as $color) {
            ColorMeaning::updateOrCreate(
                ['hex' => $color['hex']],
                $color
            );
        }
    }
}
