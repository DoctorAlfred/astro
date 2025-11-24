<?php

namespace Database\Seeders;

use App\Models\Numbers\NaiMeanings;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NaiMeaningsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fields = [
            'lifePath'    => ['en' => 'Life Path',     'it' => 'Percorso di Vita'],
            'expression'  => ['en' => 'Expression',    'it' => 'Espressione'],
            'soulUrge'    => ['en' => 'Soul Urge',     'it' => "Impulso dell'Anima"],
            'personality' => ['en' => 'Personality',   'it' => 'Personalità'],
            'maturity'    => ['en' => 'Maturity',      'it' => 'Maturità'],
            'pinnacles'   => ['en' => 'Pinnacle',      'it' => 'Apice'],
            'challenges'  => ['en' => 'Challenge',     'it' => 'Sfida'],
        ];

        // Field meta (EN/IT)
        $metaFieldEn = [
            'lifePath'    => ['explanation' => 'Sum and reduce YYYY-MM-DD digits to a single digit.', 'definition' => 'Core life lessons and trajectory.', 'scope' => 'Direction, recurring lessons, overall tone.'],
            'expression'  => ['explanation' => 'Sum chaldean values of First+Last letters; reduce.', 'definition' => 'Innate talents and expressive style.', 'scope' => 'How you manifest potential.'],
            'soulUrge'    => ['explanation' => 'Sum vowels of First+Last; reduce.', 'definition' => "Inner desires and heart's motivation.", 'scope' => 'What you profoundly long for.'],
            'personality' => ['explanation' => 'Sum consonants of First+Last; reduce.', 'definition' => 'Outer impression perceived by others.', 'scope' => 'Image, style, how you appear.'],
            'maturity'    => ['explanation' => 'Reduce (Life Path + Expression).', 'definition' => 'Synthesis that emerges with age.', 'scope' => 'Mature direction of potential.'],
            'pinnacles'   => ['explanation' => 'Four growth phases (current formula).', 'definition' => 'Predominant growth themes per phase.', 'scope' => 'Focus/opportunities per phase.'],
            'challenges'  => ['explanation' => 'Four core challenges (0–9 allowed).', 'definition' => 'Areas requiring integration.', 'scope' => 'What to harmonize to grow.'],
        ];
        $metaFieldIt = [
            'lifePath'    => ['spiegazione' => 'Somma e riduzione delle cifre di AAAA-MM-GG.', 'definizione' => 'Lezione fondamentale e traiettoria di vita.', 'scopo' => 'Direzione, prove ricorrenti, tono generale.'],
            'expression'  => ['spiegazione' => 'Somma valori caldei delle lettere di Nome+Cognome; riduzione.', 'definizione' => 'Talenti innati e stile espressivo.', 'scopo' => 'Come manifesti il potenziale.'],
            'soulUrge'    => ['spiegazione' => 'Somma delle vocali di Nome+Cognome; riduzione.', 'definizione' => "Desideri interiori e motivazione del cuore.", 'scopo' => 'Ciò che desideri profondamente.'],
            'personality' => ['spiegazione' => 'Somma delle consonanti di Nome+Cognome; riduzione.', 'definizione' => 'Impressione esterna percepita dagli altri.', 'scopo' => 'Immagine e stile con cui appari.'],
            'maturity'    => ['spiegazione' => 'Riduzione di (Percorso di Vita + Espressione).', 'definizione' => 'Sintesi che emerge con l’età.', 'scopo' => 'Direzione matura del potenziale.'],
            'pinnacles'   => ['spiegazione' => 'Quattro fasi di crescita (formula attuale).', 'definizione' => 'Temi evolutivi per fase.', 'scopo' => 'Focus/opportunità di ogni fase.'],
            'challenges'  => ['spiegazione' => 'Quattro sfide (0–9 ammesso).', 'definizione' => 'Aree che richiedono integrazione.', 'scopo' => 'Cosa armonizzare per crescere.'],
        ];

        // Base number meanings (EN / IT)
        $numEn = [
            0 => ['title' => 'Number 0', 'description' => 'Reset / pause; learn to restart with trust.', 'meta' => ['theme' => 'reset']],
            1 => ['title' => 'Number 1', 'description' => 'Leadership, initiative, individuality.', 'meta' => ['keywords' => ['leadership', 'initiative', 'independence'], 'element' => 'Fire', 'planet' => 'Sun', 'color' => 'Red', 'chakra' => 'Root']],
            2 => ['title' => 'Number 2', 'description' => 'Cooperation, sensitivity, diplomacy.', 'meta' => ['keywords' => ['cooperation', 'sensitivity', 'diplomacy'], 'element' => 'Water', 'planet' => 'Moon', 'color' => 'White', 'chakra' => 'Sacral']],
            3 => ['title' => 'Number 3', 'description' => 'Creativity, communication, joy.', 'meta' => ['keywords' => ['creativity', 'communication', 'joy'], 'element' => 'Air', 'planet' => 'Jupiter', 'color' => 'Yellow', 'chakra' => 'Solar Plexus']],
            4 => ['title' => 'Number 4', 'description' => 'Stability, work, structure.', 'meta' => ['keywords' => ['stability', 'work', 'structure'], 'element' => 'Earth', 'planet' => 'Saturn', 'color' => 'Green', 'chakra' => 'Root']],
            5 => ['title' => 'Number 5', 'description' => 'Change, freedom, versatility.', 'meta' => ['keywords' => ['change', 'freedom', 'versatility'], 'element' => 'Air', 'planet' => 'Mercury', 'color' => 'Turquoise', 'chakra' => 'Throat']],
            6 => ['title' => 'Number 6', 'description' => 'Care, responsibility, harmony.', 'meta' => ['keywords' => ['care', 'responsibility', 'harmony'], 'element' => 'Earth', 'planet' => 'Venus', 'color' => 'Pink', 'chakra' => 'Heart']],
            7 => ['title' => 'Number 7', 'description' => 'Analysis, spirituality, introspection.', 'meta' => ['keywords' => ['analysis', 'spirituality', 'introspection'], 'element' => 'Water', 'planet' => 'Neptune', 'color' => 'Indigo', 'chakra' => 'Third Eye']],
            8 => ['title' => 'Number 8', 'description' => 'Power, material mastery, ambition.', 'meta' => ['keywords' => ['power', 'mastery', 'ambition'], 'element' => 'Earth', 'planet' => 'Saturn', 'color' => 'Black', 'chakra' => 'Solar Plexus']],
            9 => ['title' => 'Number 9', 'description' => 'Compassion, completion, universality.', 'meta' => ['keywords' => ['compassion', 'completion', 'universality'], 'element' => 'Fire', 'planet' => 'Mars', 'color' => 'Violet', 'chakra' => 'Heart']],
        ];
        $numIt = [
            0 => ['title' => 'Numero 0', 'description' => 'Reset / sospensione; ripartire con fiducia.', 'meta' => ['tema' => 'reset']],
            1 => ['title' => 'Numero 1', 'description' => 'Leadership, iniziativa, individualità.', 'meta' => ['paroleChiave' => ['leadership', 'iniziativa', 'indipendenza'], 'elemento' => 'Fuoco', 'pianeta' => 'Sole', 'colore' => 'Rosso', 'chakra' => 'Radice']],
            2 => ['title' => 'Numero 2', 'description' => 'Cooperazione, sensibilità, diplomazia.', 'meta' => ['paroleChiave' => ['cooperazione', 'sensibilità', 'diplomazia'], 'elemento' => 'Acqua', 'pianeta' => 'Luna', 'colore' => 'Bianco', 'chakra' => 'Sacrale']],
            3 => ['title' => 'Numero 3', 'description' => 'Creatività, comunicazione, gioia.', 'meta' => ['paroleChiave' => ['creatività', 'comunicazione', 'gioia'], 'elemento' => 'Aria', 'pianeta' => 'Giove', 'colore' => 'Giallo', 'chakra' => 'Plesso Solare']],
            4 => ['title' => 'Numero 4', 'description' => 'Stabilità, lavoro, struttura.', 'meta' => ['paroleChiave' => ['stabilità', 'lavoro', 'struttura'], 'elemento' => 'Terra', 'pianeta' => 'Saturno', 'colore' => 'Verde', 'chakra' => 'Radice']],
            5 => ['title' => 'Numero 5', 'description' => 'Cambiamento, libertà, versatilità.', 'meta' => ['paroleChiave' => ['cambiamento', 'libertà', 'versatilità'], 'elemento' => 'Aria', 'pianeta' => 'Mercurio', 'colore' => 'Turchese', 'chakra' => 'Gola']],
            6 => ['title' => 'Numero 6', 'description' => 'Cura, responsabilità, armonia.', 'meta' => ['paroleChiave' => ['cura', 'responsabilità', 'armonia'], 'elemento' => 'Terra', 'pianeta' => 'Venere', 'colore' => 'Rosa', 'chakra' => 'Cuore']],
            7 => ['title' => 'Numero 7', 'description' => 'Analisi, spiritualità, introspezione.', 'meta' => ['paroleChiave' => ['analisi', 'spiritualità', 'introspezione'], 'elemento' => 'Acqua', 'pianeta' => 'Nettuno', 'colore' => 'Indaco', 'chakra' => 'Terzo Occhio']],
            8 => ['title' => 'Numero 8', 'description' => 'Potere, maestria materiale, ambizione.', 'meta' => ['paroleChiave' => ['potere', 'maestria', 'ambizione'], 'elemento' => 'Terra', 'pianeta' => 'Saturno', 'colore' => 'Nero', 'chakra' => 'Plesso Solare']],
            9 => ['title' => 'Numero 9', 'description' => 'Compassione, compimento, universalità.', 'meta' => ['paroleChiave' => ['compassione', 'compimento', 'universalità'], 'elemento' => 'Fuoco', 'pianeta' => 'Marte', 'colore' => 'Viola', 'chakra' => 'Cuore']],
        ];

        $fieldsList     = ['lifePath', 'expression', 'soulUrge', 'personality', 'maturity', 'pinnacles'];
        $oneToNine      = [1, 2, 3, 4, 5, 6, 7, 8, 9];
        $challengesSet  = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

        $upsert = function (string $lang, string $name, int $number, string $title, ?string $description, array $meta = []) {
            NaiMeanings::updateOrCreate(
                ['lang' => $lang, 'name' => $name, 'number' => $number],
                [
                    'code'        => $name,   // keep code = name (schema requires non-null)
                    'title'       => $title,
                    'description' => $description,
                    'meta'        => $meta,
                ]
            );
        };

        // EN: fields 1..9
        foreach ($fieldsList as $name) {
            foreach ($oneToNine as $n) {
                $base = $numEn[$n];
                $meta = array_merge($base['meta'] ?? [], $metaFieldEn[$name] ?? []);
                $upsert('en', $name, $n, $fields[$name]['en'] . ' ' . $n, $base['description'] ?? null, $meta);
            }
        }
        // EN: challenges 0..9
        foreach ($challengesSet as $n) {
            $base = $numEn[$n];
            $meta = array_merge($base['meta'] ?? [], $metaFieldEn['challenges'] ?? []);
            $upsert('en', 'challenges', $n, $fields['challenges']['en'] . ' ' . $n, $base['description'] ?? null, $meta);
        }

        // IT: fields 1..9
        foreach ($fieldsList as $name) {
            foreach ($oneToNine as $n) {
                $base = $numIt[$n];
                $meta = array_merge($base['meta'] ?? [], $metaFieldIt[$name] ?? []);
                $upsert('it', $name, $n, $fields[$name]['it'] . ' ' . $n, $base['description'] ?? null, $meta);
            }
        }
        // IT: challenges 0..9
        foreach ($challengesSet as $n) {
            $base = $numIt[$n];
            $meta = array_merge($base['meta'] ?? [], $metaFieldIt['challenges'] ?? []);
            $upsert('it', 'challenges', $n, $fields['challenges']['it'] . ' ' . $n, $base['description'] ?? null, $meta);
        }
    }
}
