<?php

namespace Database\Seeders;

use App\Models\CategoryMeaning;
use Illuminate\Database\Seeder;
use App\Models\SubCategoryMeaning;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoryMeaningsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $disciplines = [
            1 => [
                'slug' => 'PhysicalManipulative',
                'it' => 'Discipline Corporee e Manipolative',
                'en' => 'Physical and Manipulative',
                'desc_it' => 'Pratiche basate sul contatto fisico e la manipolazione corporea per sciogliere tensioni muscolari, migliorare la postura e favorire il benessere globale.',
                'desc_en' => 'Practices based on physical contact and body manipulation to release muscle tension, improve posture, and promote overall well-being.',
                'subs' => [
                    [
                        'slug' => 'Shiatsu',
                        'it' => 'Shiatsu',
                        'en' => 'Shiatsu',
                        'desc_it' => 'Tecnica giapponese basata sulla pressione delle dita lungo i meridiani energetici per stimolare l autoguarigione e il rilassamento profondo.',
                        'desc_en' => 'Japanese technique based on finger pressure along energy meridians to stimulate self-healing and achieve deep relaxation and balance.'
                    ],
                ]
            ],
            2 => [
                'slug' => 'EnergyVibrational',
                'it' => 'Discipline Energetiche e Vibrazionali',
                'en' => 'Energy and Vibrational',
                'desc_it' => 'Metodi che lavorano sul campo bio-energetico umano e sulle frequenze sonore o luminose per ripristinare l armonia sottile del corpo e della mente.',
                'desc_en' => 'Methods working on the human bio-energy field and sound or light frequencies to restore the subtle harmony of body, mind, and spirit.',
                'subs' => [
                    [
                        'slug' => 'ChakraRebalancing',
                        'it' => 'Riequilibrio Chakra',
                        'en' => 'Chakra Rebalancing',
                        'desc_it' => 'Tecnica di armonizzazione dei sette centri energetici principali per favorire il libero fluire dell energia vitale in tutto il sistema corpo-mente.',
                        'desc_en' => 'Harmonization technique of the seven main energy centers to promote the free flow of vital energy throughout the entire body-mind system.'
                    ],
                ]
            ],
            3 => [
                'slug' => 'SpiritualEvolutionary',
                'it' => 'Discipline Evolutive e Spirituali',
                'en' => 'Evolutionary and Spiritual',
                'desc_it' => 'Percorsi rivolti alla crescita interiore e alla connessione con la dimensione profonda dell anima per comprendere il proprio scopo vitale.',
                'desc_en' => 'Paths aimed at inner growth and connection with the deep dimension of the soul to better understand ones life purpose and spiritual journey.',
                'subs' => [
                    [
                        'slug' => 'AkashicRecords',
                        'it' => 'Registri Akashici (Akasha)',
                        'en' => 'Akashic Records',
                        'desc_it' => 'Accesso alla biblioteca eterica dell anima per ricevere guida, guarigione e comprensione profonda delle proprie esperienze di vita e karmiche.',
                        'desc_en' => 'Access to the etheric library of the soul to receive guidance, healing, and deep understanding of life experiences and karmic patterns.'
                    ],
                    [
                        'slug' => 'ThetaHealing',
                        'it' => 'Theta Healing',
                        'en' => 'Theta Healing',
                        'desc_it' => 'Tecnica meditativa che utilizza le onde cerebrali Theta per identificare e cambiare istantaneamente convinzioni limitanti nel subconscio.',
                        'desc_en' => 'Meditative technique using Theta brain waves to identify and instantly change limiting beliefs held within the subconscious mind.'
                    ],
                ]
            ],
        ];

        foreach ($disciplines as $number => $data) {
            CategoryMeaning::create([
                'number' => $number,
                'slug' => $data['slug'],
                'it' => $data['it'],
                'en' => $data['en'],
                'desc_it' => $data['desc_it'],
                'desc_en' => $data['desc_en'],
            ]);

            foreach ($data['subs'] as $sub) {
                SubCategoryMeaning::create([
                    'cat_number' => $number,
                    'slug' => $sub['slug'],
                    'it' => $sub['it'],
                    'en' => $sub['en'],
                    'desc_it' => $sub['desc_it'],
                    'desc_en' => $sub['desc_en'],
                ]);
            }
        }
    }
}
