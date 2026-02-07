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
            [
                'name' => ['it' => 'Rosso', 'en' => 'Red'],
                'hex' => '#FF0000',
                'psychology' => [
                    'it' => 'Forza vitale, radicamento e istinto di sopravvivenza.',
                    'en' => 'Vital force, grounding, and survival instinct.'
                ],
                'shadow' => [
                    'it' => 'Rabbia repressa, impulsività distruttiva.',
                    'en' => 'Repressed anger, destructive impulsiveness.'
                ],
                'spiritual' => [
                    'it' => 'Connessione con la Terra e il fuoco della creazione.',
                    'en' => 'Connection with Earth and the fire of creation.'
                ],
                'chakra' => [
                    'it' => '1° Muladhara (Radice)',
                    'en' => '1st Muladhara (Root)'
                ],
                'numerology' => 1,
                'organs' => [
                    'it' => 'Sangue, ossa, ghiandole surrenali',
                    'en' => 'Blood, bones, adrenal glands'
                ],
                'licnomancy' => [
                    'it' => 'Energia fisica, protezione attiva, vigore.',
                    'en' => 'Physical energy, active protection, vigor.'
                ],
            ],
            [
                'name' => ['it' => 'Arancione', 'en' => 'Orange'],
                'hex' => '#FFA500',
                'psychology' => [
                    'it' => 'Creatività, gioia e socialità.',
                    'en' => 'Creativity, joy, and sociability.'
                ],
                'shadow' => [
                    'it' => 'Dipendenza emotiva e superficialità.',
                    'en' => 'Emotional dependency and superficiality.'
                ],
                'spiritual' => [
                    'it' => 'Trasmutazione dell’energia creativa.',
                    'en' => 'Transmutation of creative energy.'
                ],
                'chakra' => [
                    'it' => '2° Svadhisthana (Sacrale)',
                    'en' => '2nd Svadhisthana (Sacral)'
                ],
                'numerology' => 2,
                'organs' => [
                    'it' => 'Sistema riproduttivo, reni',
                    'en' => 'Reproductive system, kidneys'
                ],
                'licnomancy' => [
                    'it' => 'Attrazione, successo, sblocco relazionale.',
                    'en' => 'Attraction, success, relational unlocking.'
                ],
            ],
            [
                'name' => ['it' => 'Giallo', 'en' => 'Yellow'],
                'hex' => '#FFFF00',
                'psychology' => [
                    'it' => 'Intelletto, logica e autostima.',
                    'en' => 'Intellect, logic, and self-esteem.'
                ],
                'shadow' => [
                    'it' => 'Iper-criticismo e controllo mentale.',
                    'en' => 'Hyper-criticism and mental control.'
                ],
                'spiritual' => [
                    'it' => 'Il Sole interiore.',
                    'en' => 'The inner Sun.'
                ],
                'chakra' => [
                    'it' => '3° Manipura (Plesso Solare)',
                    'en' => '3rd Manipura (Solar Plexus)'
                ],
                'numerology' => 3,
                'organs' => [
                    'it' => 'Stomaco, fegato, pancreas',
                    'en' => 'Stomach, liver, pancreas'
                ],
                'licnomancy' => [
                    'it' => 'Volontà e manifestazione.',
                    'en' => 'Willpower and manifestation.'
                ],
            ],
            [
                'name' => ['it' => 'Verde', 'en' => 'Green'],
                'hex' => '#008000',
                'psychology' => [
                    'it' => 'Equilibrio e guarigione.',
                    'en' => 'Balance and healing.'
                ],
                'shadow' => [
                    'it' => 'Invidia e stagnazione.',
                    'en' => 'Envy and stagnation.'
                ],
                'spiritual' => [
                    'it' => 'Amore incondizionato.',
                    'en' => 'Unconditional love.'
                ],
                'chakra' => [
                    'it' => '4° Anahata (Cuore)',
                    'en' => '4th Anahata (Heart)'
                ],
                'numerology' => 4,
                'organs' => [
                    'it' => 'Cuore e polmoni',
                    'en' => 'Heart and lungs'
                ],
                'licnomancy' => [
                    'it' => 'Guarigione e pace.',
                    'en' => 'Healing and peace.'
                ],
            ],
            [
                'name' => ['it' => 'Blu', 'en' => 'Blue'],
                'hex' => '#0000FF',
                'psychology' => [
                    'it' => 'Comunicazione e calma.',
                    'en' => 'Communication and calm.'
                ],
                'shadow' => [
                    'it' => 'Isolamento emotivo.',
                    'en' => 'Emotional isolation.'
                ],
                'spiritual' => [
                    'it' => 'La parola sacra.',
                    'en' => 'The sacred word.'
                ],
                'chakra' => [
                    'it' => '5° Vishuddha (Gola)',
                    'en' => '5th Vishuddha (Throat)'
                ],
                'numerology' => 5,
                'organs' => [
                    'it' => 'Gola e tiroide',
                    'en' => 'Throat and thyroid'
                ],
                'licnomancy' => [
                    'it' => 'Verità e protezione.',
                    'en' => 'Truth and protection.'
                ],
            ],
            [
                'name' => ['it' => 'Indaco', 'en' => 'Indigo'],
                'hex' => '#4B0082',
                'psychology' => [
                    'it' => 'Intuizione profonda.',
                    'en' => 'Deep intuition.'
                ],
                'shadow' => [
                    'it' => 'Confusione mentale.',
                    'en' => 'Mental confusion.'
                ],
                'spiritual' => [
                    'it' => 'Visione interiore.',
                    'en' => 'Inner vision.'
                ],
                'chakra' => [
                    'it' => '6° Ajna (Terzo Occhio)',
                    'en' => '6th Ajna (Third Eye)'
                ],
                'numerology' => 6,
                'organs' => [
                    'it' => 'Ghiandola pineale',
                    'en' => 'Pineal gland'
                ],
                'licnomancy' => [
                    'it' => 'Sogni e visioni.',
                    'en' => 'Dreams and visions.'
                ],
            ],
            [
                'name' => ['it' => 'Viola', 'en' => 'Violet'],
                'hex' => '#800080',
                'psychology' => [
                    'it' => 'Trasformazione spirituale.',
                    'en' => 'Spiritual transformation.'
                ],
                'shadow' => [
                    'it' => 'Scollamento dal corpo.',
                    'en' => 'Detachment from the body.'
                ],
                'spiritual' => [
                    'it' => 'Connessione con il divino.',
                    'en' => 'Connection with the divine.'
                ],
                'chakra' => [
                    'it' => '7° Sahasrara (Corona)',
                    'en' => '7th Sahasrara (Crown)'
                ],
                'numerology' => 7,
                'organs' => [
                    'it' => 'Cervello',
                    'en' => 'Brain'
                ],
                'licnomancy' => [
                    'it' => 'Elevazione spirituale.',
                    'en' => 'Spiritual elevation.'
                ],
            ],
            [
                'name' => ['it' => 'Oro', 'en' => 'Gold'],
                'hex' => '#FFD700',
                'psychology' => [
                    'it' => 'Saggezza e realizzazione.',
                    'en' => 'Wisdom and fulfillment.'
                ],
                'shadow' => [
                    'it' => 'Ego spirituale.',
                    'en' => 'Spiritual ego.'
                ],
                'spiritual' => [
                    'it' => 'Corpo di luce.',
                    'en' => 'Body of light.'
                ],
                'chakra' => [
                    'it' => 'Aura / Plesso superiore',
                    'en' => 'Aura / Higher plexus'
                ],
                'numerology' => 11,
                'organs' => [
                    'it' => 'Campo energetico',
                    'en' => 'Energy field'
                ],
                'licnomancy' => [
                    'it' => 'Protezione divina.',
                    'en' => 'Divine protection.'
                ],
            ],
        ];

        foreach ($colors as $color) {
            ColorMeaning::updateOrCreate(
                ['hex' => $color['hex']],
                $color
            );
        }
    }
}
