<?php

namespace Database\Seeders;

use App\Models\Numbers\NaiMeanings;
use Illuminate\Database\Seeder;

class NaiMeaningsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fields = ['lifePath', 'expression', 'soulUrge', 'personality', 'maturity', 'pinnacles', 'challenges'];

        $metaField = [
            'lifePath' => [
                'en' => [
                    'definition' => 'Core life lessons and trajectory.',
                    'scope' => 'Direction, recurring lessons, overall tone.'
                ],
                'it' => [
                    'definition' => 'Lezione fondamentale e traiettoria di vita.',
                    'scope' => 'Direzione, prove ricorrenti, tono generale.'
                ],
            ],
            'expression' => [
                'en' => [
                    'definition' => 'Innate talents and expressive style.',
                    'scope' => 'How you manifest potential.'
                ],
                'it' => [
                    'definition' => 'Talenti innati e stile espressivo.',
                    'scope' => 'Come manifesti il potenziale.'
                ],
            ],
            'soulUrge' => [
                'en' => [
                    'definition' => "Inner desires and heart's motivation.",
                    'scope' => 'What you profoundly long for.'
                ],
                'it' => [
                    'definition' => "Desideri interiori e motivazione del cuore.",
                    'scope' => 'Ciò che desideri profondamente.'
                ],
            ],
            'personality' => [
                'en' => [
                    'definition' => 'Outer impression perceived by others.',
                    'scope' => 'Image, style, how you appear.'
                ],
                'it' => [
                    'definition' => 'Impressione esterna percepita dagli altri.',
                    'scope' => 'Immagine e stile con cui appari.'
                ],
            ],
            'maturity' => [
                'en' => [
                    'definition' => 'Synthesis that emerges with age.',
                    'scope' => 'Mature direction of potential.'
                ],
                'it' => [
                    'definition' => 'Sintesi che emerge con l’età.',
                    'scope' => 'Direzione matura del potenziale.'
                ],
            ],
            'pinnacles' => [
                'en' => [
                    'definition' => 'Predominant growth themes per phase.',
                    'scope' => 'Focus/opportunities per phase.'
                ],
                'it' => [
                    'definition' => 'Temi evolutivi per fase.',
                    'scope' => 'Focus/opportunità di ogni fase.'
                ],
            ],
            'challenges' => [
                'en' => [
                    'definition' => 'Areas requiring integration.',
                    'scope' => 'What to harmonize to grow.'
                ],
                'it' => [
                    'definition' => 'Aree che richiedono integrazione.',
                    'scope' => 'Cosa armonizzare per crescere.'
                ],
            ],
        ];

        $numbers = [
            0 => [
                'en' => [
                    'description' => 'Reset / pause: a time to step back, clear the slate, and learn to restart with trust in the unknown.',
                    'keywords' => ['reset', 'pause', 'restart'],
                    'element' => 'Void',
                    'planet' => 'None',
                    'color' => 'Clear',
                    'chakra' => 'Crown'
                ],
                'it' => [
                    'description' => 'Reset / pausa: un momento per fermarsi, azzerare e imparare a ripartire con fiducia nell\'ignoto.',
                    'keywords' => ['reset', 'pausa', 'ripartenza'],
                    'element' => 'Vuoto',
                    'planet' => 'Nessuno',
                    'color' => 'Trasparente',
                    'chakra' => 'Corona'
                ],
            ],
            1 => [
                'en' => [
                    'description' => 'Leadership, initiative, individuality: the power to forge your own path, take bold action, and stand confidently in your unique identity.',
                    'keywords' => ['leadership', 'initiative', 'independence'],
                    'element' => 'Fire',
                    'planet' => 'Sun',
                    'color' => 'Red',
                    'chakra' => 'Root'
                ],
                'it' => [
                    'description' => 'Leadership, iniziativa, individualità: il potere di forgiare la propria strada, agire con coraggio e stare con fiducia nella propria identità unica.',
                    'keywords' => ['leadership', 'iniziativa', 'indipendenza'],
                    'element' => 'Fuoco',
                    'planet' => 'Sole',
                    'color' => 'Rosso',
                    'chakra' => 'Radice'
                ],
            ],
            2 => [
                'en' => [
                    'description' => 'Cooperation, sensitivity, diplomacy: the art of building bridges through empathy, understanding others deeply, and finding peaceful solutions together.',
                    'keywords' => ['cooperation', 'sensitivity', 'diplomacy'],
                    'element' => 'Water',
                    'planet' => 'Moon',
                    'color' => 'White',
                    'chakra' => 'Sacral'
                ],
                'it' => [
                    'description' => 'Cooperazione, sensibilità, diplomazia: l\'arte di costruire ponti attraverso l\'empatia, comprendere profondamente gli altri e trovare soluzioni pacifiche insieme.',
                    'keywords' => ['cooperazione', 'sensibilità', 'diplomazia'],
                    'element' => 'Acqua',
                    'planet' => 'Luna',
                    'color' => 'Bianco',
                    'chakra' => 'Sacrale'
                ],
            ],
            3 => [
                'en' => [
                    'description' => 'Creativity, communication, joy: expressing your authentic soul through art, sharing your voice with the world, and finding happiness in self-expression.',
                    'keywords' => ['creativity', 'communication', 'joy'],
                    'element' => 'Air',
                    'planet' => 'Jupiter',
                    'color' => 'Yellow',
                    'chakra' => 'Solar Plexus'
                ],
                'it' => [
                    'description' => 'Creatività, comunicazione, gioia: esprimere la tua anima autentica attraverso l\'arte, condividere la tua voce con il mondo e trovare felicità nell\'espressione di te stesso.',
                    'keywords' => ['creatività', 'comunicazione', 'gioia'],
                    'element' => 'Aria',
                    'planet' => 'Giove',
                    'color' => 'Giallo',
                    'chakra' => 'Plesso Solare'
                ],
            ],
            4 => [
                'en' => [
                    'description' => 'Stability, work, structure: building a solid foundation through discipline, creating lasting value with dedicated effort, and organizing chaos into order.',
                    'keywords' => ['stability', 'work', 'structure'],
                    'element' => 'Earth',
                    'planet' => 'Saturn',
                    'color' => 'Green',
                    'chakra' => 'Root'
                ],
                'it' => [
                    'description' => 'Stabilità, lavoro, struttura: costruire fondamenta solide attraverso la disciplina, creare valore duraturo con impegno dedicato e organizzare il caos in ordine.',
                    'keywords' => ['stabilità', 'lavoro', 'struttura'],
                    'element' => 'Terra',
                    'planet' => 'Saturno',
                    'color' => 'Verde',
                    'chakra' => 'Radice'
                ],
            ],
            5 => [
                'en' => [
                    'description' => 'Change, freedom, versatility: embracing life\'s adventures with open arms, breaking free from limitations, and adapting gracefully to any situation.',
                    'keywords' => ['change', 'freedom', 'versatility'],
                    'element' => 'Air',
                    'planet' => 'Mercury',
                    'color' => 'Turquoise',
                    'chakra' => 'Throat'
                ],
                'it' => [
                    'description' => 'Cambiamento, libertà, versatilità: abbracciare le avventure della vita a braccia aperte, liberarsi dalle limitazioni e adattarsi con grazia a qualsiasi situazione.',
                    'keywords' => ['cambiamento', 'libertà', 'versatilità'],
                    'element' => 'Aria',
                    'planet' => 'Mercurio',
                    'color' => 'Turchese',
                    'chakra' => 'Gola'
                ],
            ],
            6 => [
                'en' => [
                    'description' => 'Care, responsibility, harmony: nurturing others with unconditional love, honoring your commitments with integrity, and creating balance in all relationships.',
                    'keywords' => ['care', 'responsibility', 'harmony'],
                    'element' => 'Earth',
                    'planet' => 'Venus',
                    'color' => 'Pink',
                    'chakra' => 'Heart'
                ],
                'it' => [
                    'description' => 'Cura, responsabilità, armonia: nutrire gli altri con amore incondizionato, onorare i tuoi impegni con integrità e creare equilibrio in tutte le relazioni.',
                    'keywords' => ['cura', 'responsabilità', 'armonia'],
                    'element' => 'Terra',
                    'planet' => 'Venere',
                    'color' => 'Rosa',
                    'chakra' => 'Cuore'
                ],
            ],
            7 => [
                'en' => [
                    'description' => 'Analysis, spirituality, introspection: diving deep into life\'s mysteries, trusting your inner wisdom, and connecting with the sacred within and around you.',
                    'keywords' => ['analysis', 'spirituality', 'introspection'],
                    'element' => 'Water',
                    'planet' => 'Neptune',
                    'color' => 'Indigo',
                    'chakra' => 'Third Eye'
                ],
                'it' => [
                    'description' => 'Analisi, spiritualità, introspezione: immergerti nei misteri della vita, fidarti della tua saggezza interiore e connetterti con il sacro dentro e intorno a te.',
                    'keywords' => ['analisi', 'spiritualità', 'introspezione'],
                    'element' => 'Acqua',
                    'planet' => 'Nettuno',
                    'color' => 'Indaco',
                    'chakra' => 'Terzo Occhio'
                ],
            ],
            8 => [
                'en' => [
                    'description' => 'Power, material mastery, ambition: manifesting abundance through focused intention, mastering the material world with skill, and achieving great success with integrity.',
                    'keywords' => ['power', 'mastery', 'ambition'],
                    'element' => 'Earth',
                    'planet' => 'Saturn',
                    'color' => 'Black',
                    'chakra' => 'Solar Plexus'
                ],
                'it' => [
                    'description' => 'Potere, maestria materiale, ambizione: manifestare l\'abbondanza attraverso l\'intenzione focalizzata, padroneggiare il mondo materiale con abilità e raggiungere grandi successi con integrità.',
                    'keywords' => ['potere', 'maestria', 'ambizione'],
                    'element' => 'Terra',
                    'planet' => 'Saturno',
                    'color' => 'Nero',
                    'chakra' => 'Plesso Solare'
                ],
            ],
            9 => [
                'en' => [
                    'description' => 'Compassion, completion, universality: embracing all of humanity with an open heart, finishing karmic cycles with grace, and seeing the divine in every soul.',
                    'keywords' => ['compassion', 'completion', 'universality'],
                    'element' => 'Fire',
                    'planet' => 'Mars',
                    'color' => 'Violet',
                    'chakra' => 'Heart'
                ],
                'it' => [
                    'description' => 'Compassione, compimento, universalità: abbracciare tutta l\'umanità con cuore aperto, completare i cicli karmici con grazia e vedere il divino in ogni anima.',
                    'keywords' => ['compassione', 'compimento', 'universalità'],
                    'element' => 'Fuoco',
                    'planet' => 'Marte',
                    'color' => 'Viola',
                    'chakra' => 'Cuore'
                ],
            ],
        ];

        foreach (['en', 'it'] as $lang) {
            foreach ($fields as $field) {
                $numbersRange = ($field === 'challenges') ? range(0, 9) : range(1, 9);

                foreach ($numbersRange as $number) {
                    $numData = $numbers[$number][$lang];
                    $fieldMeta = $metaField[$field][$lang];

                    NaiMeanings::updateOrCreate(
                        [
                            'lang' => $lang,
                            'name' => $field,
                            'number' => $number
                        ],
                        [
                            'code' => $field,
                            'description' => $numData['description'],
                            'meta' => array_merge(
                                $fieldMeta,
                                [
                                    'keywords' => $numData['keywords'],
                                    'element' => $numData['element'],
                                    'planet' => $numData['planet'],
                                    'color' => $numData['color'],
                                    'chakra' => $numData['chakra'],
                                ]
                            ),
                        ]
                    );
                }
            }
        }
    }
}
