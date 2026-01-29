<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\Herbs\HerbContent;
use App\Models\Herbs\HerbsMeaning;
use App\Enums\Herbs\HerbContentType;
use App\Enums\Herbs\HerbSourceType;
use App\Enums\Herbs\HerbEvidenceLevel;
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
                'identity' => [
                    'name'       => 'Alloro',
                    'latin_name' => 'Laurus nobilis',
                    'family'     => 'Lauraceae',
                    'genus'      => 'Laurus',
                    'species'    => 'nobilis',
                    'edible'     => true,
                    'toxic'      => false,
                    'slug'       => Str::slug('Alloro'),
                ],
                'contents' => [
                    // IT
                    [
                        'type' => HerbContentType::HISTORY->value,
                        'language' => 'it',
                        'title' => 'Storia dell’Alloro',
                        'content' => 'Pianta sacra ad Apollo, simbolo di vittoria, poesia e sapienza nel mondo greco-romano.',
                        'source_type' => HerbSourceType::TRADITIONAL->value,
                        'evidence_level' => HerbEvidenceLevel::MEDIUM->value,
                        'source_reference' => 'Fonti classiche greco-romane',
                    ],
                    [
                        'type' => HerbContentType::SCIENTIFIC_STUDIES->value,
                        'language' => 'it',
                        'title' => 'Proprietà scientifiche',
                        'content' => 'Olio essenziale con attività digestiva e carminativa. Studi EMA su Laurus nobilis folium.',
                        'source_type' => HerbSourceType::SCIENTIFIC->value,
                        'evidence_level' => HerbEvidenceLevel::MEDIUM->value,
                        'source_reference' => 'EMA – Laurus nobilis',
                    ],
                    [
                        'type' => HerbContentType::ESOTERIC_USE->value,
                        'language' => 'it',
                        'title' => 'Licnomanzia e rituali solari',
                        'content' => 'Usato nella licnomanzia: le foglie bruciate producono segni divinatori. Associato a prosperità, abbondanza, successo e protezione.',
                        'source_type' => HerbSourceType::ESOTERIC->value,
                        'evidence_level' => HerbEvidenceLevel::NONE->value,
                        'source_reference' => 'Magia naturale europea',
                    ],
                    // EN
                    [
                        'type' => HerbContentType::HISTORY->value,
                        'language' => 'en',
                        'title' => 'History of Bay Laurel',
                        'content' => 'Sacred to Apollo, symbol of victory, poetry and wisdom in Greco-Roman culture.',
                        'source_type' => HerbSourceType::TRADITIONAL->value,
                        'evidence_level' => HerbEvidenceLevel::MEDIUM->value,
                        'source_reference' => 'Classical sources',
                    ],
                    [
                        'type' => HerbContentType::ESOTERIC_USE->value,
                        'language' => 'en',
                        'title' => 'Bay Laurel in Divination',
                        'content' => 'Used in pyromancy and lamp divination. Leaves burned for omens, prosperity and solar rites.',
                        'source_type' => HerbSourceType::ESOTERIC->value,
                        'evidence_level' => HerbEvidenceLevel::NONE->value,
                        'source_reference' => 'European natural magic',
                    ],
                ],
            ],

            /* ========================= EDERA ========================= */
            [
                'identity' => [
                    'name' => 'Edera',
                    'latin_name' => 'Hedera helix',
                    'family' => 'Araliaceae',
                    'genus' => 'Hedera',
                    'species' => 'helix',
                    'edible' => false,
                    'toxic' => true,
                    'slug' => Str::slug('Edera'),
                ],
                'contents' => [
                    [
                        'type' => HerbContentType::SCIENTIFIC_STUDIES->value,
                        'language' => 'it',
                        'title' => 'Uso clinico',
                        'content' => 'Saponine con azione espettorante. Uso solo tramite estratti standardizzati.',
                        'source_type' => HerbSourceType::SCIENTIFIC->value,
                        'evidence_level' => HerbEvidenceLevel::HIGH->value,
                        'source_reference' => 'EMA – Hedera helix',
                    ],
                    [
                        'type' => HerbContentType::ESOTERIC_USE->value,
                        'language' => 'it',
                        'title' => 'Uso simbolico',
                        'content' => 'Simbolo di legame, fedeltà e protezione dei confini.',
                        'source_type' => HerbSourceType::FOLK->value,
                        'evidence_level' => HerbEvidenceLevel::NONE->value,
                        'source_reference' => 'Tradizione europea',
                    ],
                    [
                        'type' => HerbContentType::ESOTERIC_USE->value,
                        'language' => 'en',
                        'title' => 'Symbolic use',
                        'content' => 'Symbol of attachment, resilience and protective bonds.',
                        'source_type' => HerbSourceType::FOLK->value,
                        'evidence_level' => HerbEvidenceLevel::NONE->value,
                        'source_reference' => 'European folklore',
                    ],
                ],
            ],

            /* ========================= ORIGANO ========================= */
            [
                'identity' => [
                    'name' => 'Origano',
                    'latin_name' => 'Origanum vulgare',
                    'family' => 'Lamiaceae',
                    'genus' => 'Origanum',
                    'species' => 'vulgare',
                    'edible' => true,
                    'toxic' => false,
                    'slug' => Str::slug('Origano'),
                ],
                'contents' => [
                    [
                        'type' => HerbContentType::SCIENTIFIC_STUDIES->value,
                        'language' => 'it',
                        'title' => 'Proprietà',
                        'content' => 'Carvacrolo e timolo con attività antimicrobica.',
                        'source_type' => HerbSourceType::SCIENTIFIC->value,
                        'evidence_level' => HerbEvidenceLevel::MEDIUM->value,
                        'source_reference' => 'WHO – Origanum vulgare',
                    ],
                    [
                        'type' => HerbContentType::ESOTERIC_USE->value,
                        'language' => 'it',
                        'title' => 'Protezione e gioia',
                        'content' => 'Usato in rituali di protezione domestica e armonia.',
                        'source_type' => HerbSourceType::ESOTERIC->value,
                        'evidence_level' => HerbEvidenceLevel::NONE->value,
                        'source_reference' => 'Magia mediterranea',
                    ],
                ],
            ],

            /* ========================= ORTICA ========================= */
            [
                'identity' => [
                    'name' => 'Ortica',
                    'latin_name' => 'Urtica dioica',
                    'family' => 'Urticaceae',
                    'genus' => 'Urtica',
                    'species' => 'dioica',
                    'edible' => true,
                    'toxic' => false,
                    'slug' => Str::slug('Ortica'),
                ],
                'contents' => [
                    [
                        'type' => HerbContentType::SCIENTIFIC_STUDIES->value,
                        'language' => 'it',
                        'title' => 'Uso fitoterapico',
                        'content' => 'Azione diuretica e remineralizzante.',
                        'source_type' => HerbSourceType::SCIENTIFIC->value,
                        'evidence_level' => HerbEvidenceLevel::MEDIUM->value,
                        'source_reference' => 'EMA – Urtica dioica',
                    ],
                    [
                        'type' => HerbContentType::ESOTERIC_USE->value,
                        'language' => 'it',
                        'title' => 'Forza e protezione',
                        'content' => 'Usata per scacciare negatività e rafforzare l’energia vitale.',
                        'source_type' => HerbSourceType::ESOTERIC->value,
                        'evidence_level' => HerbEvidenceLevel::NONE->value,
                        'source_reference' => 'Tradizione popolare',
                    ],
                ],
            ],

            /* ========================= ROSMARINO ========================= */
            [
                'identity' => [
                    'name' => 'Rosmarino',
                    'latin_name' => 'Rosmarinus officinalis',
                    'family' => 'Lamiaceae',
                    'genus' => 'Rosmarinus',
                    'species' => 'officinalis',
                    'edible' => true,
                    'toxic' => false,
                    'slug' => Str::slug('Rosmarino'),
                ],
                'contents' => [
                    [
                        'type' => HerbContentType::SCIENTIFIC_STUDIES->value,
                        'language' => 'it',
                        'title' => 'Proprietà',
                        'content' => 'Azione antiossidante e stimolante.',
                        'source_type' => HerbSourceType::SCIENTIFIC->value,
                        'evidence_level' => HerbEvidenceLevel::MEDIUM->value,
                        'source_reference' => 'EMA – Rosmarinus officinalis',
                    ],
                    [
                        'type' => HerbContentType::ESOTERIC_USE->value,
                        'language' => 'it',
                        'title' => 'Memoria e purificazione',
                        'content' => 'Usato per chiarezza mentale, ricordo e purificazione.',
                        'source_type' => HerbSourceType::ESOTERIC->value,
                        'evidence_level' => HerbEvidenceLevel::NONE->value,
                        'source_reference' => 'Magia europea',
                    ],
                ],
            ],

            /* ========================= SALVIA ========================= */
            [
                'identity' => [
                    'name' => 'Salvia',
                    'latin_name' => 'Salvia officinalis',
                    'family' => 'Lamiaceae',
                    'genus' => 'Salvia',
                    'species' => 'officinalis',
                    'edible' => true,
                    'toxic' => false,
                    'slug' => Str::slug('Salvia'),
                ],
                'contents' => [
                    [
                        'type' => HerbContentType::SCIENTIFIC_STUDIES->value,
                        'language' => 'it',
                        'title' => 'Proprietà',
                        'content' => 'Attività antisettica e antinfiammatoria. Attenzione al tujone.',
                        'source_type' => HerbSourceType::SCIENTIFIC->value,
                        'evidence_level' => HerbEvidenceLevel::MEDIUM->value,
                        'source_reference' => 'EMA – Salvia officinalis',
                    ],
                    [
                        'type' => HerbContentType::ESOTERIC_USE->value,
                        'language' => 'it',
                        'title' => 'Saggezza e protezione',
                        'content' => 'Usata per saggezza, protezione spirituale e purificazione.',
                        'source_type' => HerbSourceType::ESOTERIC->value,
                        'evidence_level' => HerbEvidenceLevel::NONE->value,
                        'source_reference' => 'Magia europea',
                    ],
                    [
                        'type' => HerbContentType::ESOTERIC_USE->value,
                        'language' => 'en',
                        'title' => 'Wisdom and protection',
                        'content' => 'Used for wisdom, spiritual protection and cleansing.',
                        'source_type' => HerbSourceType::ESOTERIC->value,
                        'evidence_level' => HerbEvidenceLevel::NONE->value,
                        'source_reference' => 'European magic',
                    ],
                ],
            ],

            /* ========================= SALVIA BIANCA ========================= */
            [
                'identity' => [
                    'name' => 'Salvia Bianca',
                    'latin_name' => 'Salvia apiana',
                    'family' => 'Lamiaceae',
                    'genus' => 'Salvia',
                    'species' => 'apiana',
                    'edible' => false,
                    'toxic' => false,
                    'slug' => Str::slug('Salvia Bianca'),
                ],
                'contents' => [
                    [
                        'type' => HerbContentType::RELIGIOUS_RITUALS->value,
                        'language' => 'it',
                        'title' => 'Smudging',
                        'content' => 'Usata nei rituali di purificazione delle tradizioni native americane.',
                        'source_type' => HerbSourceType::RELIGIOUS->value,
                        'evidence_level' => HerbEvidenceLevel::NONE->value,
                        'source_reference' => 'Tradizioni native nordamericane',
                    ],
                    [
                        'type' => HerbContentType::RELIGIOUS_RITUALS->value,
                        'language' => 'en',
                        'title' => 'Smudging rituals',
                        'content' => 'Used in purification rituals of Native American traditions.',
                        'source_type' => HerbSourceType::RELIGIOUS->value,
                        'evidence_level' => HerbEvidenceLevel::NONE->value,
                        'source_reference' => 'Native American traditions',
                    ],
                ],
            ],

            /* ========================= SALVIA NERA ========================= */
            [
                'identity' => [
                    'name' => 'Salvia Nera',
                    'latin_name' => 'Salvia mellifera',
                    'family' => 'Lamiaceae',
                    'genus' => 'Salvia',
                    'species' => 'mellifera',
                    'edible' => false,
                    'toxic' => false,
                    'slug' => Str::slug('Salvia Nera'),
                ],
                'contents' => [
                    [
                        'type' => HerbContentType::ESOTERIC_USE->value,
                        'language' => 'it',
                        'title' => 'Introspezione',
                        'content' => 'Usata per introspezione profonda, radicamento e lavoro sull’ombra.',
                        'source_type' => HerbSourceType::ESOTERIC->value,
                        'evidence_level' => HerbEvidenceLevel::NONE->value,
                        'source_reference' => 'Tradizioni rituali contemporanee',
                    ],
                    [
                        'type' => HerbContentType::ESOTERIC_USE->value,
                        'language' => 'en',
                        'title' => 'Inner work',
                        'content' => 'Used for deep introspection, grounding and shadow work.',
                        'source_type' => HerbSourceType::ESOTERIC->value,
                        'evidence_level' => HerbEvidenceLevel::NONE->value,
                        'source_reference' => 'Modern ritual traditions',
                    ],
                ],
            ],
        ];

        foreach ($herbs as $data) {
            $herb = HerbsMeaning::firstOrCreate(
                ['slug' => $data['identity']['slug']],
                $data['identity']
            );

            foreach ($data['contents'] as $content) {
                HerbContent::firstOrCreate(
                    [
                        'herbs_meaning_id' => $herb->id,
                        'type' => $content['type'],
                        'language' => $content['language'],
                        'title' => $content['title'],
                    ],
                    array_merge($content, ['herbs_meaning_id' => $herb->id])
                );
            }
        }
    }
}
