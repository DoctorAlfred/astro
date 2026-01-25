<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Herbs\HerbsMeaning;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HerbsMeaningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $herbs = [

            /* ========================= ALLORO ========================= */
            [
                'name' => 'Alloro',
                'latin_name' => 'Laurus nobilis',
                'family' => 'Lauraceae',

                'used_parts' => [
                    'foglie',
                    'bacche'
                ],

                'nutritional_values' => [
                    'principi_attivi' => [
                        'olio essenziale (cineolo, eugenolo)',
                        'flavonoidi',
                        'lattoni sesquiterpenici',
                    ],
                ],

                'scientific_properties' => [
                    'azioni' => [
                        'digestiva',
                        'carminativa',
                        'antisettica lieve',
                    ],
                ],

                'curative_uses' => [
                    'tradizionali' => [
                        'infusi digestivi',
                        'oli per dolori articolari',
                    ],
                ],

                'esoteric_properties' => [
                    'simbolismo' => [
                        'vittoria',
                        'sapienza',
                        'protezione',
                    ],
                ],

                'occult_correspondences' => [
                    'pianeta' => 'Sole',
                    'elemento' => 'Fuoco',
                ],

                'warnings' => 'Evitare l’uso eccessivo dell’olio essenziale. Uso alimentare generalmente sicuro.',
            ],

            /* ========================= EDERA ========================= */
            [
                'name' => 'Edera',
                'latin_name' => 'Hedera helix',
                'family' => 'Araliaceae',

                'used_parts' => [
                    'foglie (solo estratti controllati)',
                ],

                'nutritional_values' => [
                    'principi_attivi' => [
                        'saponine triterpeniche (ederacoside C)',
                        'flavonoidi',
                    ],
                ],

                'scientific_properties' => [
                    'azioni' => [
                        'espettorante',
                        'mucolitica',
                        'antispasmodica bronchiale',
                    ],
                ],

                'curative_uses' => [
                    'fitoterapia' => [
                        'tosse produttiva (preparati industriali)',
                    ],
                ],

                'esoteric_properties' => [
                    'simbolismo' => [
                        'legami',
                        'fedeltà',
                        'resilienza',
                    ],
                ],

                'occult_correspondences' => [
                    'pianeta' => 'Luna',
                    'elemento' => 'Acqua',
                ],

                'warnings' => 'Pianta tossica. Uso interno solo tramite prodotti fitoterapici standardizzati.',
            ],

            /* ========================= ORTICA ========================= */
            [
                'name' => 'Ortica',
                'latin_name' => 'Urtica dioica',
                'family' => 'Urticaceae',

                'used_parts' => [
                    'foglie',
                    'radici',
                ],

                'nutritional_values' => [
                    'principi_attivi' => [
                        'clorofilla',
                        'ferro',
                        'flavonoidi',
                        'sali minerali',
                    ],
                ],

                'scientific_properties' => [
                    'azioni' => [
                        'rimineralizzante',
                        'diuretica',
                        'antinfiammatoria',
                    ],
                ],

                'curative_uses' => [
                    'tradizionali' => [
                        'anemia lieve',
                        'ritenzione idrica',
                        'supporto articolare',
                    ],
                ],

                'esoteric_properties' => [
                    'simbolismo' => [
                        'protezione',
                        'forza vitale',
                        'confini',
                    ],
                ],

                'occult_correspondences' => [
                    'pianeta' => 'Marte',
                    'elemento' => 'Fuoco',
                ],

                'warnings' => 'I peli urticanti causano irritazione cutanea. Usare correttamente preparata.',
            ],

            /* ========================= ROSMARINO ========================= */
            [
                'name' => 'Rosmarino',
                'latin_name' => 'Rosmarinus officinalis',
                'family' => 'Lamiaceae',

                'used_parts' => [
                    'foglie',
                ],

                'nutritional_values' => [
                    'principi_attivi' => [
                        'olio essenziale (cineolo, canfora)',
                        'acido rosmarinico',
                    ],
                ],

                'scientific_properties' => [
                    'azioni' => [
                        'stimolante',
                        'digestiva',
                        'antiossidante',
                    ],
                ],

                'curative_uses' => [
                    'tradizionali' => [
                        'affaticamento mentale',
                        'digestione lenta',
                    ],
                ],

                'esoteric_properties' => [
                    'simbolismo' => [
                        'memoria',
                        'chiarezza mentale',
                        'purificazione',
                    ],
                ],

                'occult_correspondences' => [
                    'pianeta' => 'Sole',
                    'elemento' => 'Fuoco',
                ],

                'warnings' => 'Olio essenziale controindicato in gravidanza e ipertensione.',
            ],

            /* ========================= SALVIA ========================= */
            [
                'name' => 'Salvia',
                'latin_name' => 'Salvia officinalis',
                'family' => 'Lamiaceae',

                'used_parts' => [
                    'foglie',
                ],

                'nutritional_values' => [
                    'principi_attivi' => [
                        'tujone',
                        'flavonoidi',
                        'olio essenziale',
                    ],
                ],

                'scientific_properties' => [
                    'azioni' => [
                        'antisettica',
                        'antinfiammatoria',
                        'regolatrice della sudorazione',
                    ],
                ],

                'curative_uses' => [
                    'tradizionali' => [
                        'mal di gola',
                        'eccessiva sudorazione',
                    ],
                ],

                'esoteric_properties' => [
                    'simbolismo' => [
                        'saggezza',
                        'longevità',
                    ],
                ],

                'occult_correspondences' => [
                    'pianeta' => 'Giove',
                    'elemento' => 'Aria',
                ],

                'warnings' => 'Uso prolungato sconsigliato per contenuto di tujone.',
            ],

            /* ========================= SALVIA BIANCA ========================= */
            [
                'name' => 'Salvia Bianca',
                'latin_name' => 'Salvia apiana',
                'family' => 'Lamiaceae',

                'used_parts' => [
                    'foglie essiccate',
                ],

                'nutritional_values' => null,

                'scientific_properties' => [
                    'nota' => 'Non esistono usi clinici standardizzati riconosciuti.',
                ],

                'curative_uses' => [
                    'tradizionali' => [
                        'uso rituale di purificazione (smudging)',
                    ],
                ],

                'esoteric_properties' => [
                    'simbolismo' => [
                        'purificazione',
                        'protezione',
                        'pulizia energetica',
                    ],
                ],

                'occult_correspondences' => [
                    'elemento' => 'Aria',
                ],

                'warnings' => 'Uso prevalentemente rituale. Non sostituisce terapie mediche.',
            ],

            /* ========================= SALVIA NERA ========================= */
            [
                'name' => 'Salvia Nera',
                'latin_name' => 'Salvia mellifera',
                'family' => 'Lamiaceae',

                'used_parts' => [
                    'foglie',
                ],

                'nutritional_values' => null,

                'scientific_properties' => [
                    'nota' => 'Uso fitoterapico limitato e poco documentato.',
                ],

                'curative_uses' => [
                    'tradizionali' => [
                        'uso cerimoniale e meditativo',
                    ],
                ],

                'esoteric_properties' => [
                    'simbolismo' => [
                        'introspezione',
                        'radicamento',
                        'protezione profonda',
                    ],
                ],

                'occult_correspondences' => [
                    'elemento' => 'Terra',
                ],

                'warnings' => 'Uso prevalentemente simbolico/rituale.',
            ],
        ];

        foreach ($herbs as $herb) {
            HerbsMeaning::create($herb);
        }
    }
}
