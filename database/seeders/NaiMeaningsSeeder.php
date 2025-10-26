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
        $rows = [
            // ===== FIELDS (EN) =====
            ['lang' => 'en', 'code' => 'lifePath', 'title' => 'Life Path', 'description' => 'Core life lesson and trajectory.', 'meta' => [
                'explanation' => 'Computed by summing all digits of the full birth date (YYYY-MM-DD) and reducing to a single digit.',
                'definition' => 'Summary of core life lessons and overall life trajectory.',
                'scope' => 'General direction, recurring lessons, and tone of the path.'
            ]],
            ['lang' => 'en', 'code' => 'expression', 'title' => 'Expression', 'description' => 'Natural talents and the way you express yourself.', 'meta' => [
                'explanation' => 'Sum of chaldean values of First+Last name (letters), reduced to a single digit.',
                'definition' => 'Innate talents and expressive style.',
                'scope' => 'How you manifest capabilities and potential.'
            ]],
            ['lang' => 'en', 'code' => 'soulUrge', 'title' => 'Soul Urge', 'description' => 'Inner desires and heart’s motivation.', 'meta' => [
                'explanation' => 'Sum of the vowels of First+Last name.',
                'definition' => 'Deep desires and heart motivation.',
                'scope' => 'What you profoundly long for.'
            ]],
            ['lang' => 'en', 'code' => 'personality', 'title' => 'Personality', 'description' => 'Outer vibration perceived by others.', 'meta' => [
                'explanation' => 'Sum of the consonants of First+Last name.',
                'definition' => 'Outer impression perceived by others.',
                'scope' => 'Image, style, how you appear.'
            ]],
            ['lang' => 'en', 'code' => 'maturity', 'title' => 'Maturity', 'description' => 'Synthesis that emerges with age.', 'meta' => [
                'explanation' => 'Reduction of (Life Path + Expression).',
                'definition' => 'Evolving synthesis emerging with age.',
                'scope' => 'Mature direction of your potential.'
            ]],
            ['lang' => 'en', 'code' => 'pinnacles', 'title' => 'Pinnacles', 'description' => 'Four growth phases in life.', 'meta' => [
                'explanation' => 'Four key phases; each Pinnacle represents a growth theme.',
                'definition' => 'Predominant evolutionary themes by period.',
                'scope' => 'Opportunities and focus within each time window.'
            ]],
            ['lang' => 'en', 'code' => 'challenges', 'title' => 'Challenges', 'description' => 'Core hurdles shaping character.', 'meta' => [
                'explanation' => 'Four core challenges; 0 can appear in some systems.',
                'definition' => 'Areas requiring discipline and integration.',
                'scope' => 'What needs harmonizing to grow.'
            ]],

            // ===== CAMPI (IT) =====
            ['lang' => 'it', 'code' => 'lifePath', 'title' => 'Percorso di Vita', 'description' => 'Lezione fondamentale e traiettoria di vita.', 'meta' => [
                'spiegazione' => 'Calcolato sommando tutte le cifre della data di nascita (AAAA-MM-GG) e riducendo a una cifra.',
                'definizione' => 'Sintesi delle lezioni fondamentali e della traiettoria di vita.',
                'scopo' => 'Direzione generale, prove ricorrenti e tono del percorso.'
            ]],
            ['lang' => 'it', 'code' => 'expression', 'title' => 'Espressione', 'description' => 'Talenti naturali e modo di esprimerti.', 'meta' => [
                'spiegazione' => 'Somma dei valori (caldeo) delle lettere di Nome+Cognome, ridotta a una cifra.',
                'definizione' => 'Talenti innati e stile espressivo.',
                'scopo' => 'Come manifesti capacità e potenziale.'
            ]],
            ['lang' => 'it', 'code' => 'soulUrge', 'title' => "Impulso dell'Anima", 'description' => 'Desideri profondi e motivazione del cuore.', 'meta' => [
                'spiegazione' => 'Somma delle vocali di Nome+Cognome.',
                'definizione' => 'Desideri interiori e motivazione del cuore.',
                'scopo' => 'Ciò che desideri in profondità.'
            ]],
            ['lang' => 'it', 'code' => 'personality', 'title' => 'Personalità', 'description' => 'Vibrazione esterna percepita dagli altri.', 'meta' => [
                'spiegazione' => 'Somma delle consonanti di Nome+Cognome.',
                'definizione' => 'Impressione esterna percepita dagli altri.',
                'scopo' => 'Immagine, stile, modo in cui appari.'
            ]],
            ['lang' => 'it', 'code' => 'maturity', 'title' => 'Maturità', 'description' => "Sintesi che emerge con l'età.", 'meta' => [
                'spiegazione' => 'Riduzione di (Percorso di Vita + Espressione).',
                'definizione' => "Sintesi evolutiva che emerge con l'età.",
                'scopo' => 'Direzione matura del potenziale.'
            ]],
            ['lang' => 'it', 'code' => 'pinnacles', 'title' => 'Apici', 'description' => 'Quattro fasi di crescita nella vita.', 'meta' => [
                'spiegazione' => 'Quattro fasi-chiave; ogni Apice rappresenta un tema di crescita.',
                'definizione' => 'Temi evolutivi predominanti per periodo.',
                'scopo' => 'Opportunità e focus in ciascun periodo.'
            ]],
            ['lang' => 'it', 'code' => 'challenges', 'title' => 'Sfide', 'description' => 'Ostacoli di base che plasmano il carattere.', 'meta' => [
                'spiegazione' => 'Quattro sfide di base; in alcuni sistemi può comparire lo 0.',
                'definizione' => 'Ambiti che richiedono disciplina e integrazione.',
                'scopo' => 'Ciò che va armonizzato per crescere.'
            ]],

            // ===== NUMBERS (EN) =====
            ['lang' => 'en', 'code' => 'number_1', 'title' => 'Number 1', 'description' => 'Leadership, initiative, individuality.', 'meta' => [
                'keywords' => ['leadership', 'initiative', 'independence'],
                'element' => 'Fire',
                'planet' => 'Sun',
                'color' => 'Red',
                'chakra' => 'Root',
                'virtues' => ['courage', 'focus'],
                'shadow' => ['ego', 'impatience']
            ]],
            ['lang' => 'en', 'code' => 'number_2', 'title' => 'Number 2', 'description' => 'Cooperation, sensitivity, diplomacy.', 'meta' => [
                'keywords' => ['cooperation', 'sensitivity', 'diplomacy'],
                'element' => 'Water',
                'planet' => 'Moon',
                'color' => 'White',
                'chakra' => 'Sacral',
                'virtues' => ['empathy', 'tact'],
                'shadow' => ['indecision', 'over-sensitivity']
            ]],
            ['lang' => 'en', 'code' => 'number_3', 'title' => 'Number 3', 'description' => 'Creativity, communication, joy.', 'meta' => [
                'keywords' => ['creativity', 'communication', 'joy'],
                'element' => 'Air',
                'planet' => 'Jupiter',
                'color' => 'Yellow',
                'chakra' => 'Solar Plexus',
                'virtues' => ['optimism', 'expression'],
                'shadow' => ['scattering', 'superficiality']
            ]],
            ['lang' => 'en', 'code' => 'number_4', 'title' => 'Number 4', 'description' => 'Stability, work, structure.', 'meta' => [
                'keywords' => ['stability', 'work', 'structure'],
                'element' => 'Earth',
                'planet' => 'Saturn',
                'color' => 'Green',
                'chakra' => 'Root',
                'virtues' => ['discipline', 'reliability'],
                'shadow' => ['rigidity', 'pessimism']
            ]],
            ['lang' => 'en', 'code' => 'number_5', 'title' => 'Number 5', 'description' => 'Change, freedom, versatility.', 'meta' => [
                'keywords' => ['change', 'freedom', 'versatility'],
                'element' => 'Air',
                'planet' => 'Mercury',
                'color' => 'Turquoise',
                'chakra' => 'Throat',
                'virtues' => ['adaptability', 'curiosity'],
                'shadow' => ['restlessness', 'excess']
            ]],
            ['lang' => 'en', 'code' => 'number_6', 'title' => 'Number 6', 'description' => 'Care, responsibility, harmony.', 'meta' => [
                'keywords' => ['care', 'responsibility', 'harmony'],
                'element' => 'Earth',
                'planet' => 'Venus',
                'color' => 'Pink',
                'chakra' => 'Heart',
                'virtues' => ['devotion', 'balance'],
                'shadow' => ['overcare', 'perfectionism']
            ]],
            ['lang' => 'en', 'code' => 'number_7', 'title' => 'Number 7', 'description' => 'Analysis, spirituality, introspection.', 'meta' => [
                'keywords' => ['analysis', 'spirituality', 'introspection'],
                'element' => 'Water',
                'planet' => 'Neptune',
                'color' => 'Indigo',
                'chakra' => 'Third Eye',
                'virtues' => ['wisdom', 'depth'],
                'shadow' => ['isolation', 'skepticism']
            ]],
            ['lang' => 'en', 'code' => 'number_8', 'title' => 'Number 8', 'description' => 'Power, material mastery, ambition.', 'meta' => [
                'keywords' => ['power', 'mastery', 'ambition'],
                'element' => 'Earth',
                'planet' => 'Saturn',
                'color' => 'Black',
                'chakra' => 'Solar Plexus',
                'virtues' => ['leadership', 'execution'],
                'shadow' => ['control', 'materialism']
            ]],
            ['lang' => 'en', 'code' => 'number_9', 'title' => 'Number 9', 'description' => 'Compassion, completion, universality.', 'meta' => [
                'keywords' => ['compassion', 'completion', 'universality'],
                'element' => 'Fire',
                'planet' => 'Mars',
                'color' => 'Violet',
                'chakra' => 'Heart',
                'virtues' => ['altruism', 'forgiveness'],
                'shadow' => ['martyrdom', 'diffusion']
            ]],
            ['lang' => 'en', 'code' => 'number_11', 'title' => 'Number 11', 'description' => 'Master intuition, inspiration, light.', 'meta' => [
                'keywords' => ['intuition', 'inspiration', 'illumination'],
                'element' => 'Air',
                'planet' => 'Uranus',
                'color' => 'Silver',
                'chakra' => 'Crown',
                'virtues' => ['vision', 'channeling'],
                'shadow' => ['nervousness', 'overload']
            ]],
            ['lang' => 'en', 'code' => 'number_22', 'title' => 'Number 22', 'description' => 'Master build, large-scale manifestation.', 'meta' => [
                'keywords' => ['build', 'foundation', 'manifestation'],
                'element' => 'Earth',
                'planet' => 'Saturn',
                'color' => 'Gold',
                'chakra' => 'Root',
                'virtues' => ['architecture', 'realism'],
                'shadow' => ['pressure', 'burden']
            ]],
            ['lang' => 'en', 'code' => 'number_33', 'title' => 'Number 33', 'description' => 'Master compassion, service, healing.', 'meta' => [
                'keywords' => ['compassion', 'service', 'healing'],
                'element' => 'Fire',
                'planet' => 'Jupiter',
                'color' => 'White',
                'chakra' => 'Heart',
                'virtues' => ['devotion', 'mercy'],
                'shadow' => ['self-sacrifice', 'exhaustion']
            ]],

            // ===== NUMERI (IT) =====
            ['lang' => 'it', 'code' => 'number_1', 'title' => 'Numero 1', 'description' => 'Leadership, iniziativa, individualità.', 'meta' => [
                'paroleChiave' => ['leadership', 'iniziativa', 'indipendenza'],
                'elemento' => 'Fuoco',
                'pianeta' => 'Sole',
                'colore' => 'Rosso',
                'chakra' => 'Radice',
                'virtu' => ['coraggio', 'concentrazione'],
                'ombra' => ['ego', 'impazienza']
            ]],
            ['lang' => 'it', 'code' => 'number_2', 'title' => 'Numero 2', 'description' => 'Cooperazione, sensibilità, diplomazia.', 'meta' => [
                'paroleChiave' => ['cooperazione', 'sensibilità', 'diplomazia'],
                'elemento' => 'Acqua',
                'pianeta' => 'Luna',
                'colore' => 'Bianco',
                'chakra' => 'Sacrale',
                'virtu' => ['empatia', 'tatto'],
                'ombra' => ['indecisione', 'ipersensibilità']
            ]],
            ['lang' => 'it', 'code' => 'number_3', 'title' => 'Numero 3', 'description' => 'Creatività, comunicazione, gioia.', 'meta' => [
                'paroleChiave' => ['creatività', 'comunicazione', 'gioia'],
                'elemento' => 'Aria',
                'pianeta' => 'Giove',
                'colore' => 'Giallo',
                'chakra' => 'Plesso Solare',
                'virtu' => ['ottimismo', 'espressione'],
                'ombra' => ['dispersione', 'superficialità']
            ]],
            ['lang' => 'it', 'code' => 'number_4', 'title' => 'Numero 4', 'description' => 'Stabilità, lavoro, struttura.', 'meta' => [
                'paroleChiave' => ['stabilità', 'lavoro', 'struttura'],
                'elemento' => 'Terra',
                'pianeta' => 'Saturno',
                'colore' => 'Verde',
                'chakra' => 'Radice',
                'virtu' => ['disciplina', 'affidabilità'],
                'ombra' => ['rigidità', 'pessimismo']
            ]],
            ['lang' => 'it', 'code' => 'number_5', 'title' => 'Numero 5', 'description' => 'Cambiamento, libertà, versatilità.', 'meta' => [
                'paroleChiave' => ['cambiamento', 'libertà', 'versatilità'],
                'elemento' => 'Aria',
                'pianeta' => 'Mercurio',
                'colore' => 'Turchese',
                'chakra' => 'Gola',
                'virtu' => ['adattabilità', 'curiosità'],
                'ombra' => ['irrequietezza', 'eccesso']
            ]],
            ['lang' => 'it', 'code' => 'number_6', 'title' => 'Numero 6', 'description' => 'Cura, responsabilità, armonia.', 'meta' => [
                'paroleChiave' => ['cura', 'responsabilità', 'armonia'],
                'elemento' => 'Terra',
                'pianeta' => 'Venere',
                'colore' => 'Rosa',
                'chakra' => 'Cuore',
                'virtu' => ['devozione', 'equilibrio'],
                'ombra' => ['ipercontrollo', 'perfezionismo']
            ]],
            ['lang' => 'it', 'code' => 'number_7', 'title' => 'Numero 7', 'description' => 'Analisi, spiritualità, introspezione.', 'meta' => [
                'paroleChiave' => ['analisi', 'spiritualità', 'introspezione'],
                'elemento' => 'Acqua',
                'pianeta' => 'Nettuno',
                'colore' => 'Indaco',
                'chakra' => 'Terzo Occhio',
                'virtu' => ['sapienza', 'profondità'],
                'ombra' => ['isolamento', 'scetticismo']
            ]],
            ['lang' => 'it', 'code' => 'number_8', 'title' => 'Numero 8', 'description' => 'Potere, maestria materiale, ambizione.', 'meta' => [
                'paroleChiave' => ['potere', 'maestria', 'ambizione'],
                'elemento' => 'Terra',
                'pianeta' => 'Saturno',
                'colore' => 'Nero',
                'chakra' => 'Plesso Solare',
                'virtu' => ['leadership', 'esecuzione'],
                'ombra' => ['controllo', 'materialismo']
            ]],
            ['lang' => 'it', 'code' => 'number_9', 'title' => 'Numero 9', 'description' => 'Compassione, compimento, universalità.', 'meta' => [
                'paroleChiave' => ['compassione', 'compimento', 'universalità'],
                'elemento' => 'Fuoco',
                'pianeta' => 'Marte',
                'colore' => 'Viola',
                'chakra' => 'Cuore',
                'virtu' => ['altruismo', 'perdono'],
                'ombra' => ['martirio', 'dispersione']
            ]],
            ['lang' => 'it', 'code' => 'number_11', 'title' => 'Numero 11', 'description' => 'Maestro intuizione, ispirazione, luce.', 'meta' => [
                'paroleChiave' => ['intuizione', 'ispirazione', 'illuminazione'],
                'elemento' => 'Aria',
                'pianeta' => 'Urano',
                'colore' => 'Argento',
                'chakra' => 'Corona',
                'virtu' => ['visione', 'canalizzazione'],
                'ombra' => ['nervosismo', 'sovraccarico']
            ]],
            ['lang' => 'it', 'code' => 'number_22', 'title' => 'Numero 22', 'description' => 'Maestro costruzione, manifestazione su larga scala.', 'meta' => [
                'paroleChiave' => ['costruzione', 'fondazione', 'manifestazione'],
                'elemento' => 'Terra',
                'pianeta' => 'Saturno',
                'colore' => 'Oro',
                'chakra' => 'Radice',
                'virtu' => ['architettura', 'realismo'],
                'ombra' => ['pressione', 'onere']
            ]],
            ['lang' => 'it', 'code' => 'number_33', 'title' => 'Numero 33', 'description' => 'Maestro compassione, servizio, guarigione.', 'meta' => [
                'paroleChiave' => ['compassione', 'servizio', 'guarigione'],
                'elemento' => 'Fuoco',
                'pianeta' => 'Giove',
                'colore' => 'Bianco',
                'chakra' => 'Cuore',
                'virtu' => ['devozione', 'misericordia'],
                'ombra' => ['autosacrificio', 'esaurimento']
            ]],
        ];

        foreach ($rows as $r) {
            NaiMeanings::updateOrCreate(
                ['lang' => $r['lang'], 'code' => $r['code']],
                [
                    'title'       => $r['title'],
                    'description' => $r['description'],
                    'meta'        => $r['meta'] ?? [],
                ]
            );
        }
    }
}
