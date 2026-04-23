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
                'psychology' => [
                    'it' => 'Intuizione, riflessione, fluidità emotiva',
                    'en' => 'Intuition, reflection, emotional fluidity'
                ],
                'shadow' => [
                    'it' => 'Indecisione, freddezza, instabilità',
                    'en' => 'Indecision, coldness, instability'
                ],
                'spiritual' => [
                    'it' => 'Energia Femminile Divina, connessione astrale',
                    'en' => 'Divine Feminine Energy, astral connection'
                ],
                'chakra' => [
                    'it' => '6° Ajna (Terzo Occhio)',
                    'en' => '6th Ajna (Third Eye)'
                ],
                'numerology' => 2, // Vibrazione lunare e duale
                'organs' => [
                    'it' => 'Liquidi corporei, sistema linfatico, stomaco',
                    'en' => 'Body fluids, lymphatic system, stomach'
                ],
                'licnomancy' => [
                    'it' => 'Rivela verità nascoste e sogni premonitori; usata per specchiarsi nell’anima',
                    'en' => 'Reveals hidden truths and premonitory dreams; used to mirror the soul'
                ],
            ],

            // ARANCIONE - La Gioia e la Creazione
            [
                'name' => ['it' => 'Arancione', 'en' => 'Orange'],
                'hex' => '#FFA500',
                'psychology' => [
                    'it' => 'Creatività, entusiasmo, ottimismo sociale',
                    'en' => 'Creativity, enthusiasm, social optimism'
                ],
                'shadow' => [
                    'it' => 'Dipendenza, superficialità, ricerca di attenzione',
                    'en' => 'Dependency, superficiality, attention seeking'
                ],
                'spiritual' => [
                    'it' => 'Espansione del Sé, risveglio dei sensi',
                    'en' => 'Expansion of the Self, awakening of the senses'
                ],
                'chakra' => [
                    'it' => '2° Svadhisthana (Sacrale)',
                    'en' => '2nd Svadhisthana (Sacral)'
                ],
                'numerology' => 3, // Creatività e socialità
                'organs' => [
                    'it' => 'Intestino, organi riproduttivi, reni',
                    'en' => 'Intestines, reproductive organs, kidneys'
                ],
                'licnomancy' => [
                    'it' => 'Attira abbondanza e successo materiale; fiamma viva di attrazione',
                    'en' => 'Attracts abundance and material success; vivid flame of attraction'
                ],
            ],

            // AZZURRO - La Comunicazione Angelica
            [
                'name' => ['it' => 'Azzurro', 'en' => 'Light Blue'],
                'hex' => '#87CEEB',
                'psychology' => [
                    'it' => 'Calma, lealtà, espressione creativa verbale',
                    'en' => 'Calm, loyalty, creative verbal expression'
                ],
                'shadow' => [
                    'it' => 'Difficoltà a dire la verità, timidezza',
                    'en' => 'Difficulty speaking the truth, shyness'
                ],
                'spiritual' => [
                    'it' => 'Protezione angelica, pace profonda',
                    'en' => 'Angelic protection, deep peace'
                ],
                'chakra' => [
                    'it' => '5° Vishuddha (Gola)',
                    'en' => '5th Vishuddha (Throat)'
                ],
                'numerology' => 5, // Cambiamento e comunicazione
                'organs' => [
                    'it' => 'Gola, tiroide, collo',
                    'en' => 'Throat, thyroid, neck'
                ],
                'licnomancy' => [
                    'it' => 'Facilita il contatto con le guide celesti e purifica lo spazio sacro',
                    'en' => 'Facilitates contact with celestial guides and purifies the sacred space'
                ],
            ],

            // BIANCO - La Sorgente
            [
                'name' => ['it' => 'Bianco', 'en' => 'White'],
                'hex' => '#FFFFFF',
                'psychology' => [
                    'it' => 'Purezza, potenziale illimitato, onestà.',
                    'en' => 'Purity, unlimited potential, honesty.'
                ],
                'shadow' => [
                    'it' => 'Freddezza, isolamento, vuoto.',
                    'en' => 'Coldness, isolation, emptiness.'
                ],
                'spiritual' => [
                    'it' => 'Sintesi di tutte le frequenze vibrazionali; lo stato di unità prima della frammentazione in colori/forme',
                    'en' => 'Synthesis of all vibrational frequencies; the state of unity before fragmentation into colors/forms'
                ],
                'chakra' => [
                    'it' => '7° Sahasrara (Corona)',
                    'en' => '7th Sahasrara (Crown)'
                ],
                'numerology' => 1, // Il Principio, l'Unità
                'organs' => [
                    'it' => 'Sistema dei meridiani, ghiandola pineale, equilibrio cellulare generale',
                    'en' => 'Meridian system, pineal gland, general cellular balance'
                ],
                'licnomancy' => [
                    'it' => 'Utilizzata come fonte neutra di energia pura; amplifica l\'intento di qualsiasi altra candela vicina',
                    'en' => 'Used as a neutral source of pure energy; amplifies the intent of any other nearby candle'
                ],
            ],

            // BLU - La Verità e il Mistero
            [
                'name' => ['it' => 'Blu', 'en' => 'Blue'],
                'hex' => '#0000FF',
                'psychology' => [
                    'it' => 'Autorità interiore, stabilità, introspezione',
                    'en' => 'Inner authority, stability, introspection'
                ],
                'shadow' => [
                    'it' => 'Depressione, dogmatismo, distacco',
                    'en' => 'Depression, dogmatism, detachment'
                ],
                'spiritual' => [
                    'it' => 'Saggezza antica, custode del silenzio',
                    'en' => 'Ancient wisdom, keeper of silence'
                ],
                'chakra' => [
                    'it' => '5° Vishuddha / 6° Ajna',
                    'en' => '5th Vishuddha / 6th Ajna'
                ],
                'numerology' => 8, // Potere e giustizia spirituale
                'organs' => [
                    'it' => 'Orecchie, occhi, base del cranio',
                    'en' => 'Ears, eyes, base of the skull'
                ],
                'licnomancy' => [
                    'it' => 'Protegge dai conflitti e favorisce la giustizia e la verità',
                    'en' => 'Protects against conflict and favors justice and truth'
                ],
            ],

            // FUCSIA - L'Amore Incondizionato
            [
                'name' => ['it' => 'Fucsia', 'en' => 'Fuchsia'],
                'hex' => '#FF00FF',
                'psychology' => [
                    'it' => 'Altruismo, amore per i dettagli, gentilezza',
                    'en' => 'Altruism, love for details, kindness'
                ],
                'shadow' => [
                    'it' => 'Ipersensibilità, trascuratezza di sé',
                    'en' => 'Hypersensitivity, self-neglect'
                ],
                'spiritual' => [
                    'it' => 'Connessione con l’amore universale e la gratitudine',
                    'en' => 'Connection with universal love and gratitude'
                ],
                'chakra' => [
                    'it' => '4° Anahata (Cuore superiore)',
                    'en' => '4th Anahata (Higher Heart)'
                ],
                'numerology' => 9, // Compimento e amore universale
                'organs' => [
                    'it' => 'Sistema circolatorio, cuore',
                    'en' => 'Circulatory system, heart'
                ],
                'licnomancy' => [
                    'it' => 'Utilizzata per accelerare i risultati e manifestare l’amore puro',
                    'en' => 'Used to accelerate results and manifest pure love'
                ],
            ],

            // GIALLO - Il Sole e l'Intelletto
            [
                'name' => ['it' => 'Giallo', 'en' => 'Yellow'],
                'hex' => '#FFFF00',
                'psychology' => [
                    'it' => 'Chiarezza mentale, potere personale, autostima.',
                    'en' => 'Mental clarity, personal power, self-esteem.'
                ],
                'shadow' => [
                    'it' => 'Egoismo, codardia, confusione mentale.',
                    'en' => 'Egoism, cowardice, mental confusion.'
                ],
                'spiritual' => [
                    'it' => 'Illuminazione del Sé, volontà divina.',
                    'en' => 'Enlightenment of the Self, divine will.'
                ],
                'chakra' => [
                    'it' => '3° Manipura (Plesso Solare)',
                    'en' => '3rd Manipura (Solar Plexus)'
                ],
                'numerology' => 3,
                'organs' => [
                    'it' => 'Fegato, stomaco, milza',
                    'en' => 'Liver, stomach, spleen'
                ],
                'licnomancy' => [
                    'it' => 'Favorisce lo studio, la memoria e la riuscita nei commerci.',
                    'en' => 'Favors study, memory, and success in trade.'
                ],
            ],

            // ORO - La Coscienza Solare
            [
                'name' => ['it' => 'Oro', 'en' => 'Gold'],
                'hex' => '#FFD700',
                'psychology' => [
                    'it' => 'Successo, saggezza interiore, fiducia',
                    'en' => 'Success, inner wisdom, confidence'
                ],
                'shadow' => [
                    'it' => 'Avidità, arroganza, orgoglio',
                    'en' => 'Greed, arrogance, pride'
                ],
                'spiritual' => [
                    'it' => 'Luce del Sole, coscienza divina maschile',
                    'en' => 'Sunlight, divine masculine consciousness'
                ],
                'chakra' => [
                    'it' => '3° Manipura / 7° Sahasrara',
                    'en' => '3rd Manipura / 7th Sahasrara'
                ],
                'numerology' => 11, // Numero Maestro, illuminazione
                'organs' => [
                    'it' => 'Occhio destro, cuore, plesso solare',
                    'en' => 'Right eye, heart, solar plexus'
                ],
                'licnomancy' => [
                    'it' => 'Attira la massima fortuna e la protezione solare; vibrazione regale',
                    'en' => 'Attracts maximum fortune and solar protection; royal vibration'
                ],
            ],

            // ROSSO - La Forza Vitale
            [
                'name' => ['it' => 'Rosso', 'en' => 'Red'],
                'hex' => '#FF0000',
                'psychology' => [
                    'it' => 'Coraggio, passione, azione radicale',
                    'en' => 'Courage, passion, radical action'
                ],
                'shadow' => [
                    'it' => 'Rabbia, violenza, impulsività',
                    'en' => 'Anger, violence, impulsivity'
                ],
                'spiritual' => [
                    'it' => 'Ancoraggio alla terra, spirito guerriero',
                    'en' => 'Grounding to earth, warrior spirit'
                ],
                'chakra' => [
                    'it' => '1° Muladhara (Radice)',
                    'en' => '1st Muladhara (Root)'
                ],
                'numerology' => 1, // Azione e inizio
                'organs' => [
                    'it' => 'Sangue, ghiandole surrenali, muscoli',
                    'en' => 'Blood, adrenal glands, muscles'
                ],
                'licnomancy' => [
                    'it' => 'Energia sessuale, forza fisica e protezione contro i nemici',
                    'en' => 'Sexual energy, physical strength, and protection against enemies'
                ],
            ],

            // VERDE - La Guarigione Natura
            [
                'name' => ['it' => 'Verde', 'en' => 'Green'],
                'hex' => '#008000',
                'psychology' => [
                    'it' => 'Equilibrio, crescita, speranza, rigenerazione',
                    'en' => 'Balance, growth, hope, regeneration'
                ],
                'shadow' => [
                    'it' => 'Invidia, stagnazione, gelosia.',
                    'en' => 'Envy, stagnation, jealousy.'
                ],
                'spiritual' => [
                    'it' => 'Armonia universale, respiro del mondo',
                    'en' => 'Universal harmony, breath of the world'
                ],
                'chakra' => [
                    'it' => '4° Anahata (Cuore)',
                    'en' => '4th Anahata (Heart)'
                ],
                'numerology' => 4, // Stabilità e natura
                'organs' => [
                    'it' => 'Cuore, polmoni, braccia, mani',
                    'en' => 'Heart, lungs, arms, hands'
                ],
                'licnomancy' => [
                    'it' => 'La fiamma della guarigione fisica e della fertilità della terra',
                    'en' => 'The flame of physical healing and earth fertility'
                ],
            ],

            // VIOLA - La Trasmutazione
            [
                'name' => ['it' => 'Viola', 'en' => 'Violet'],
                'hex' => '#800080',
                'psychology' => [
                    'it' => 'Trasmutazione, spiritualità elevata, introspezione',
                    'en' => 'Transmutation, high spirituality, introspection'
                ],
                'shadow' => [
                    'it' => 'Malinconia, distacco dalla realtà',
                    'en' => 'Melancholy, detachment from reality'
                ],
                'spiritual' => [
                    'it' => 'Alchimia interiore, connessione con l’Akasha',
                    'en' => 'Inner alchemy, connection with Akasha'
                ],
                'chakra' => [
                    'it' => '6° Ajna / 7° Sahasrara',
                    'en' => '6th Ajna / 7th Sahasrara'
                ],
                'numerology' => 7, // Ricerca spirituale e mistica
                'organs' => [
                    'it' => 'Ghiandola pineale, sistema nervoso',
                    'en' => 'Pineal gland, nervous system'
                ],
                'licnomancy' => [
                    'it' => 'Pulisce il karma e trasforma le energie negative in luce',
                    'en' => 'Cleanses karma and transforms negative energies into light'
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
