<?php

namespace Database\Seeders;

use App\Models\Astrology\PlanetMeaning;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $planets = [
            // Sole
            [
                'planet_id' => 0,
                'name' => [
                    'en' => 'Sun',
                    'it' => 'Sole',
                    'es' => 'Sol',
                    'fr' => 'Soleil',
                    'de' => 'Sonne',
                    'la' => 'Sol',
                    'he' => 'שמש'
                ],
                'symbol' => '☉',
                'description' => [
                    'en' => 'The Sun represents the core self, vitality, and life force. It governs ego, identity, and personal power.',
                    'it' => 'Il Sole rappresenta il sé centrale, la vitalità e la forza vitale. Governa l\'ego, l\'identità e il potere personale.',
                    'es' => 'El Sol representa el yo central, la vitalidad y la fuerza vital. Gobierna el ego, la identidad y el poder personal.',
                    'fr' => 'Le Soleil représente le moi central, la vitalité et la force vitale. Il gouverne l\'ego, l\'identité et le pouvoir personnel.',
                    'de' => 'Die Sonne repräsentiert das zentrale Selbst, Vitalität und Lebenskraft. Sie regiert Ego, Identität und persönliche Macht.',
                    'la' => 'Sol repraesentat se ipsum, vitalitatem et vim vitalem. Regit ego, identitatem et potestatem personalem.',
                    'he' => 'השמש מייצגת את העצמי המרכזי, חיוניות וכוח חיים. שולטת על האגו, הזהות והכוח האישי.'
                ],
                'characteristics' => ['personale', 'benefico', 'maschile'],
                'keywords' => [
                    'en' => ['ego', 'vitality', 'leadership', 'creativity', 'self-expression'],
                    'it' => ['ego', 'vitalità', 'leadership', 'creatività', 'auto-espressione'],
                    'es' => ['ego', 'vitalidad', 'liderazgo', 'creatividad', 'autoexpresión'],
                    'fr' => ['ego', 'vitalité', 'leadership', 'créativité', 'expression de soi'],
                    'de' => ['Ego', 'Vitalität', 'Führungsqualitäten', 'Kreativität', 'Selbstausdruck'],
                    'la' => ['ego', 'vitalitas', 'ductus', 'creativitas', 'expressio sui'],
                    'he' => ['אגו', 'חיוניות', 'מנהיגות', 'יצירתיות', 'ביטוי עצמי']
                ],
                'colors' => ['Arancione', 'Oro', 'Giallo'],
                'metals' => ['Oro'],
                'day' => [
                    'en' => 'Sunday',
                    'it' => 'Domenica',
                    'es' => 'Domingo',
                    'fr' => 'Dimanche',
                    'de' => 'Sonntag',
                    'la' => 'Dies Solis',
                    'he' => 'יום ראשון'
                ],
                'rulership' => [
                    ['en' => 'Leo', 'it' => 'Leone', 'es' => 'Leo', 'fr' => 'Lion', 'de' => 'Löwe', 'la' => 'Leo', 'he' => 'אריה']
                ],
                'exaltation' => [
                    ['en' => 'Aries', 'it' => 'Ariete', 'es' => 'Aries', 'fr' => 'Bélier', 'de' => 'Widder', 'la' => 'Aries', 'he' => 'טלה']
                ],
                'fall' => [
                    ['en' => 'Libra', 'it' => 'Bilancia', 'es' => 'Libra', 'fr' => 'Balance', 'de' => 'Waage', 'la' => 'Libra', 'he' => 'מאזניים']
                ],
                'detriment' => [
                    ['en' => 'Aquarius', 'it' => 'Acquario', 'es' => 'Acuario', 'fr' => 'Verseau', 'de' => 'Wassermann', 'la' => 'Aquarius', 'he' => 'דלי']
                ],
                'positive_traits' => [
                    'en' => ['Generous', 'Creative', 'Confident', 'Leadership', 'Warm'],
                    'it' => ['Generoso', 'Creativo', 'Fiducioso', 'Leadership', 'Caldo'],
                    'es' => ['Generoso', 'Creativo', 'Seguro', 'Liderazgo', 'Cálido'],
                    'fr' => ['Généreux', 'Créatif', 'Confiant', 'Leadership', 'Chaleureux'],
                    'de' => ['Großzügig', 'Kreativ', 'Selbstbewusst', 'Führungsqualitäten', 'Warmherzig'],
                    'la' => ['Generosus', 'Creativus', 'Confidens', 'Ductus', 'Calidus'],
                    'he' => ['נדיב', 'יצירתי', 'בטוח', 'מנהיגות', 'חם']
                ],
                'negative_traits' => [
                    'en' => ['Arrogant', 'Self-centered', 'Domineering', 'Impatient'],
                    'it' => ['Arrogante', 'Egocentrico', 'Dominante', 'Impaziente'],
                    'es' => ['Arrogante', 'Egocéntrico', 'Dominante', 'Impaciente'],
                    'fr' => ['Arrogant', 'Égocentrique', 'Dominant', 'Impatient'],
                    'de' => ['Arrogant', 'Selbstbezogen', 'Dominierend', 'Ungeduldig'],
                    'la' => ['Arrogans', 'Egocentricus', 'Dominans', 'Impatiens'],
                    'he' => ['יהיר', 'אגוצנטרי', 'דומיננטי', 'חסר סבלנות']
                ],
                'gender' => 'maschile',
                'average_speed' => 1.0,
                'orbital_period' => '365.25 giorni',
            ],
            // Luna (1)
            [
                'planet_id' => 1,
                'name' => [
                    'en' => 'Moon',
                    'it' => 'Luna',
                    'es' => 'Luna',
                    'fr' => 'Lune',
                    'de' => 'Mond',
                    'la' => 'Luna',
                    'he' => 'ירח'
                ],
                'symbol' => '☽',
                'description' => [
                    'en' => 'The Moon represents emotions, intuition, and the subconscious. It governs moods, habits, and maternal instincts.',
                    'it' => 'La Luna rappresenta le emozioni, l\'intuizione e il subconscio. Governa gli stati d\'animo, le abitudini e gli istinti materni.',
                    'es' => 'La Luna representa las emociones, la intuición y el subconsciente. Gobierna los estados de ánimo, los hábitos y los instintos maternales.',
                    'fr' => 'La Lune représente les émotions, l\'intuition et le subconscient. Elle gouverne les humeurs, les habitudes et les instincts maternels.',
                    'de' => 'Der Mond repräsentiert Emotionen, Intuition und das Unterbewusstsein. Er regiert Stimmungen, Gewohnheiten und mütterliche Instinkte.',
                    'la' => 'Luna repraesentat affectiones, intuitum et subconscious. Regit animos, consuetudines et instinctus maternos.',
                    'he' => 'הירח מייצג רגשות, אינטואיציה ותת-מודע. שולט על מצבי רוח, הרגלים ואינסטינקטים אימהיים.'
                ],
                'characteristics' => ['emotivo', 'ricettivo', 'femminile'],
                'keywords' => [
                    'en' => ['emotions', 'intuition', 'nurturing', 'subconscious', 'habits'],
                    'it' => ['emozioni', 'intuizione', 'nutrimento', 'subconscio', 'abitudini'],
                    'es' => ['emociones', 'intuición', 'cuidado', 'subconsciente', 'hábitos'],
                    'fr' => ['émotions', 'intuition', 'nourricier', 'subconscient', 'habitudes'],
                    'de' => ['Emotionen', 'Intuition', 'Fürsorge', 'Unterbewusstsein', 'Gewohnheiten'],
                    'la' => ['affectiones', 'intuitus', 'nutritio', 'subconscious', 'consuetudines'],
                    'he' => ['רגשות', 'אינטואיציה', 'טיפוח', 'תת-מודע', 'הרגלים']
                ],
                'colors' => ['Argento', 'Bianco', 'Perla'],
                'metals' => ['Argento'],
                'day' => [
                    'en' => 'Monday',
                    'it' => 'Lunedì',
                    'es' => 'Lunes',
                    'fr' => 'Lundi',
                    'de' => 'Montag',
                    'la' => 'Dies Lunae',
                    'he' => 'יום שני'
                ],
                'rulership' => [
                    ['en' => 'Cancer', 'it' => 'Cancro', 'es' => 'Cáncer', 'fr' => 'Cancer', 'de' => 'Krebs', 'la' => 'Cancer', 'he' => 'סרטן']
                ],
                'exaltation' => [
                    ['en' => 'Taurus', 'it' => 'Toro', 'es' => 'Tauro', 'fr' => 'Taureau', 'de' => 'Stier', 'la' => 'Taurus', 'he' => 'שור']
                ],
                'fall' => [
                    ['en' => 'Scorpio', 'it' => 'Scorpione', 'es' => 'Escorpio', 'fr' => 'Scorpion', 'de' => 'Skorpion', 'la' => 'Scorpio', 'he' => 'עקרב']
                ],
                'detriment' => [
                    ['en' => 'Capricorn', 'it' => 'Capricorno', 'es' => 'Capricornio', 'fr' => 'Capricorne', 'de' => 'Steinbock', 'la' => 'Capricornus', 'he' => 'גדי']
                ],
                'positive_traits' => [
                    'en' => ['Nurturing', 'Intuitive', 'Adaptable', 'Sensitive', 'Imaginative'],
                    'it' => ['Nutriente', 'Intuitivo', 'Adattabile', 'Sensibile', 'Immaginativo'],
                    'es' => ['Cuidadoso', 'Intuitivo', 'Adaptable', 'Sensible', 'Imaginativo'],
                    'fr' => ['Nourricier', 'Intuitif', 'Adaptable', 'Sensible', 'Imaginatif'],
                    'de' => ['Fürsorglich', 'Intuitiv', 'Anpassungsfähig', 'Einfühlsam', 'Phantasievoll'],
                    'la' => ['Nutritorius', 'Intuitivus', 'Adaptabilis', 'Sensibilis', 'Imaginativus'],
                    'he' => ['מטפח', 'אינטואיטיבי', 'מסתגל', 'רגיש', 'דמיון']
                ],
                'negative_traits' => [
                    'en' => ['Moody', 'Overly sensitive', 'Insecure', 'Clingy'],
                    'it' => ['Lunatico', 'Troppo sensibile', 'Insicuro', 'Appiccicoso'],
                    'es' => ['Lunático', 'Demasiado sensible', 'Inseguro', 'Pegajoso'],
                    'fr' => ['Lunatique', 'Trop sensible', 'Insécurisé', 'Collant'],
                    'de' => ['Launisch', 'Überempfindlich', 'Unsicher', 'Anhänglich'],
                    'la' => ['Mobilis', 'Nimis sensibilis', 'Incertus', 'Haerens'],
                    'he' => ['תנודתי', 'רגיש מדי', 'לא בטוח', 'נצמד']
                ],
                'gender' => 'femminile',
                'average_speed' => 13.0,
                'orbital_period' => '27.3 giorni',
            ],
            // Mercurio (2)
            [
                'planet_id' => 2,
                'name' => [
                    'en' => 'Mercury',
                    'it' => 'Mercurio',
                    'es' => 'Mercurio',
                    'fr' => 'Mercure',
                    'de' => 'Merkur',
                    'la' => 'Mercurius',
                    'he' => 'כוכב חמה'
                ],
                'symbol' => '☿',
                'description' => [
                    'en' => 'Mercury represents communication, intellect, and reasoning. It governs thought processes, learning, and expression.',
                    'it' => 'Mercurio rappresenta la comunicazione, l\'intelletto e il ragionamento. Governa i processi di pensiero, l\'apprendimento e l\'espressione.',
                    'es' => 'Mercurio representa la comunicación, el intelecto y el razonamiento. Gobierna los procesos de pensamiento, el aprendizaje y la expresión.',
                    'fr' => 'Mercure représente la communication, l\'intellect et le raisonnement. Il gouverne les processus de pensée, l\'apprentissage et l\'expression.',
                    'de' => 'Merkur repräsentiert Kommunikation, Intellekt und Vernunft. Er regiert Denkprozesse, Lernen und Ausdruck.',
                    'la' => 'Mercurius repraesentat communicationem, intellectum et rationem. Regit processus cogitationis, doctrinam et expressionem.',
                    'he' => 'כוכב חמה מייצג תקשורת, אינטלקט והיגיון. שולט על תהליכי חשיבה, למידה וביטוי.'
                ],
                'characteristics' => ['comunicativo', 'intellettuale', 'androgino'],
                'keywords' => [
                    'en' => ['communication', 'intellect', 'learning', 'adaptability', 'expression'],
                    'it' => ['comunicazione', 'intelletto', 'apprendimento', 'adattabilità', 'espressione'],
                    'es' => ['comunicación', 'intelecto', 'aprendizaje', 'adaptabilidad', 'expresión'],
                    'fr' => ['communication', 'intellect', 'apprentissage', 'adaptabilité', 'expression'],
                    'de' => ['Kommunikation', 'Intellekt', 'Lernen', 'Anpassungsfähigkeit', 'Ausdruck'],
                    'la' => ['communicatio', 'intellectus', 'doctrina', 'adaptabilitas', 'expressio'],
                    'he' => ['תקשורת', 'אינטלקט', 'למידה', 'הסתגלות', 'ביטוי']
                ],
                'colors' => ['Azzurro', 'Giallo', 'Grigio'],
                'metals' => ['Mercurio'],
                'day' => [
                    'en' => 'Wednesday',
                    'it' => 'Mercoledì',
                    'es' => 'Miércoles',
                    'fr' => 'Mercredi',
                    'de' => 'Mittwoch',
                    'la' => 'Dies Mercurii',
                    'he' => 'יום רביעי'
                ],
                'rulership' => [
                    ['en' => 'Gemini', 'it' => 'Gemelli', 'es' => 'Géminis', 'fr' => 'Gémeaux', 'de' => 'Zwillinge', 'la' => 'Gemini', 'he' => 'תאומים'],
                    ['en' => 'Virgo', 'it' => 'Vergine', 'es' => 'Virgo', 'fr' => 'Vierge', 'de' => 'Jungfrau', 'la' => 'Virgo', 'he' => 'בתולה']
                ],
                'exaltation' => [
                    ['en' => 'Virgo', 'it' => 'Vergine', 'es' => 'Virgo', 'fr' => 'Vierge', 'de' => 'Jungfrau', 'la' => 'Virgo', 'he' => 'בתולה']
                ],
                'fall' => [
                    ['en' => 'Pisces', 'it' => 'Pesci', 'es' => 'Piscis', 'fr' => 'Poissons', 'de' => 'Fische', 'la' => 'Pisces', 'he' => 'דגים']
                ],
                'detriment' => [
                    ['en' => 'Sagittarius', 'it' => 'Sagittario', 'es' => 'Sagitario', 'fr' => 'Sagittaire', 'de' => 'Schütze', 'la' => 'Sagittarius', 'he' => 'קשת']
                ],
                'positive_traits' => [
                    'en' => ['Intelligent', 'Communicative', 'Versatile', 'Witty', 'Quick-thinking'],
                    'it' => ['Intelligente', 'Comunicativo', 'Versatile', 'Arguto', 'Pensiero veloce'],
                    'es' => ['Inteligente', 'Comunicativo', 'Versátil', 'Ingenioso', 'Pensamiento rápido'],
                    'fr' => ['Intelligent', 'Communicatif', 'Polyvalent', 'Spirituel', 'Réflexion rapide'],
                    'de' => ['Intelligent', 'Kommunikativ', 'Vielseitig', 'Geistreich', 'Schnelles Denken'],
                    'la' => ['Intelligens', 'Communicativus', 'Versatilis', 'Argutus', 'Celeris cogitationis'],
                    'he' => ['אינטליגנטי', 'תקשורתי', 'רב-גוני', 'שנון', 'חשיבה מהירה']
                ],
                'negative_traits' => [
                    'en' => ['Superficial', 'Nervous', 'Deceitful', 'Inconsistent'],
                    'it' => ['Superficiale', 'Nervoso', 'Ingannevole', 'Incoerente'],
                    'es' => ['Superficial', 'Nervioso', 'Engañoso', 'Inconsistente'],
                    'fr' => ['Superficiel', 'Nerveux', 'Trompeur', 'Inconstant'],
                    'de' => ['Oberflächlich', 'Nervös', 'Täuschend', 'Inkonsistent'],
                    'la' => ['Superficialis', 'Nervosus', 'Fallax', 'Inconstans'],
                    'he' => ['שטחי', 'עצבני', 'מטעה', 'לא עקבי']
                ],
                'gender' => 'androgino',
                'average_speed' => 1.2,
                'orbital_period' => '87.97 giorni',
            ],
            // Venus (3)
            [
                'planet_id' => 3,
                'name' => [
                    'en' => 'Venus',
                    'it' => 'Venere',
                    'es' => 'Venus',
                    'fr' => 'Vénus',
                    'de' => 'Venus',
                    'la' => 'Venus',
                    'he' => 'נוגה'
                ],
                'symbol' => '♀',
                'description' => [
                    'en' => 'Venus represents love, beauty, and values. It governs relationships, pleasure, and aesthetics.',
                    'it' => 'Venere rappresenta l\'amore, la bellezza e i valori. Governa le relazioni, il piacere e l\'estetica.',
                    'es' => 'Venus representa el amor, la belleza y los valores. Gobierna las relaciones, el placer y la estética.',
                    'fr' => 'Vénus représente l\'amour, la beauté et les valeurs. Elle gouverne les relations, le plaisir et l\'esthétique.',
                    'de' => 'Venus repräsentiert Liebe, Schönheit und Werte. Sie regiert Beziehungen, Vergnügen und Ästhetik.',
                    'la' => 'Venus repraesentat amorem, pulchritudinem et valores. Regit relationes, voluptatem et aestheticam.',
                    'he' => 'נוגה מייצגת אהבה, יופי וערכים. שולטת על מערכות יחסים, הנאה ואסתטיקה.'
                ],
                'characteristics' => ['amoroso', 'estetico', 'femminile'],
                'keywords' => [
                    'en' => ['love', 'beauty', 'harmony', 'pleasure', 'values'],
                    'it' => ['amore', 'bellezza', 'armonia', 'piacere', 'valori'],
                    'es' => ['amor', 'belleza', 'armonía', 'placer', 'valores'],
                    'fr' => ['amour', 'beauté', 'harmonie', 'plaisir', 'valeurs'],
                    'de' => ['Liebe', 'Schönheit', 'Harmonie', 'Vergnügen', 'Werte'],
                    'la' => ['amor', 'pulchritudo', 'harmonia', 'voluptas', 'valores'],
                    'he' => ['אהבה', 'יופי', 'הרמוניה', 'הנאה', 'ערכים']
                ],
                'colors' => ['Rosa', 'Verde', 'Azzurro'],
                'metals' => ['Rame'],
                'day' => [
                    'en' => 'Friday',
                    'it' => 'Venerdì',
                    'es' => 'Viernes',
                    'fr' => 'Vendredi',
                    'de' => 'Freitag',
                    'la' => 'Dies Veneris',
                    'he' => 'יום שישי'
                ],
                'rulership' => [
                    ['en' => 'Taurus', 'it' => 'Toro', 'es' => 'Tauro', 'fr' => 'Taureau', 'de' => 'Stier', 'la' => 'Taurus', 'he' => 'שור'],
                    ['en' => 'Libra', 'it' => 'Bilancia', 'es' => 'Libra', 'fr' => 'Balance', 'de' => 'Waage', 'la' => 'Libra', 'he' => 'מאזניים']
                ],
                'exaltation' => [
                    ['en' => 'Pisces', 'it' => 'Pesci', 'es' => 'Piscis', 'fr' => 'Poissons', 'de' => 'Fische', 'la' => 'Pisces', 'he' => 'דגים']
                ],
                'fall' => [
                    ['en' => 'Virgo', 'it' => 'Vergine', 'es' => 'Virgo', 'fr' => 'Vierge', 'de' => 'Jungfrau', 'la' => 'Virgo', 'he' => 'בתולה']
                ],
                'detriment' => [
                    ['en' => 'Scorpio', 'it' => 'Scorpione', 'es' => 'Escorpio', 'fr' => 'Scorpion', 'de' => 'Skorpion', 'la' => 'Scorpio', 'he' => 'עקרב']
                ],
                'positive_traits' => [
                    'en' => ['Loving', 'Beautiful', 'Harmonious', 'Charming', 'Artistic'],
                    'it' => ['Amoroso', 'Bello', 'Armonioso', 'Affascinante', 'Artistico'],
                    'es' => ['Amoroso', 'Hermoso', 'Armonioso', 'Encantador', 'Artístico'],
                    'fr' => ['Aimant', 'Beau', 'Harmonieux', 'Charmant', 'Artistique'],
                    'de' => ['Liebevoll', 'Schön', 'Harmonisch', 'Charmant', 'Künstlerisch'],
                    'la' => ['Amorosus', 'Pulcher', 'Harmonicus', 'Venustus', 'Artisticus'],
                    'he' => ['אוהב', 'יפה', 'הרמוני', 'מקסים', 'אומנותי']
                ],
                'negative_traits' => [
                    'en' => ['Superficial', 'Indulgent', 'Possessive', 'Materialistic'],
                    'it' => ['Superficiale', 'Indulgente', 'Possessivo', 'Materialista'],
                    'es' => ['Superficial', 'Indulgente', 'Posesivo', 'Materialista'],
                    'fr' => ['Superficiel', 'Indulgent', 'Possessif', 'Matérialiste'],
                    'de' => ['Oberflächlich', 'Nachgiebig', 'Besitzergreifend', 'Materialistisch'],
                    'la' => ['Superficialis', 'Indulgens', 'Possessivus', 'Materialisticus'],
                    'he' => ['שטחי', 'מתפנק', 'רכושני', 'חומרני']
                ],
                'gender' => 'femminile',
                'average_speed' => 1.2,
                'orbital_period' => '224.7 giorni',
            ],
            // Mars (4)
            [
                'planet_id' => 4,
                'name' => [
                    'en' => 'Mars',
                    'it' => 'Marte',
                    'es' => 'Marte',
                    'fr' => 'Mars',
                    'de' => 'Mars',
                    'la' => 'Mars',
                    'he' => 'מאדים'
                ],
                'symbol' => '♂',
                'description' => [
                    'en' => 'Mars represents energy, action, and desire. It governs drive, ambition, and assertiveness.',
                    'it' => 'Marte rappresenta l\'energia, l\'azione e il desiderio. Governa la spinta, l\'ambizione e l\'assertività.',
                    'es' => 'Marte representa la energía, la acción y el deseo. Gobierna el impulso, la ambición y la asertividad.',
                    'fr' => 'Mars représente l\'énergie, l\'action et le désir. Il gouverne la motivation, l\'ambition et l\'affirmation.',
                    'de' => 'Mars repräsentiert Energie, Aktion und Verlangen. Er regiert Antrieb, Ehrgeiz und Durchsetzungsvermögen.',
                    'la' => 'Mars repraesentat energiam, actionem et desiderium. Regit impulsum, ambitionem et assertivitatem.',
                    'he' => 'מאדים מייצג אנרגיה, פעולה ותשוקה. שולט על הדחף, השאיפה והיוזמה.'
                ],
                'characteristics' => ['energico', 'attivo', 'maschile'],
                'keywords' => [
                    'en' => ['energy', 'action', 'desire', 'ambition', 'assertiveness'],
                    'it' => ['energia', 'azione', 'desiderio', 'ambizione', 'assertività'],
                    'es' => ['energía', 'acción', 'deseo', 'ambición', 'asertividad'],
                    'fr' => ['énergie', 'action', 'désir', 'ambition', 'affirmation'],
                    'de' => ['Energie', 'Aktion', 'Verlangen', 'Ehrgeiz', 'Durchsetzungsvermögen'],
                    'la' => ['energia', 'actio', 'desiderium', 'ambitio', 'assertivitas'],
                    'he' => ['אנרגיה', 'פעולה', 'תשוקה', 'שאיפה', 'יוזמה']
                ],
                'colors' => ['Rosso', 'Arancione', 'Scarlatto'],
                'metals' => ['Ferro'],
                'day' => [
                    'en' => 'Tuesday',
                    'it' => 'Martedì',
                    'es' => 'Martes',
                    'fr' => 'Mardi',
                    'de' => 'Dienstag',
                    'la' => 'Dies Martis',
                    'he' => 'יום שלישי'
                ],
                'rulership' => [
                    ['en' => 'Aries', 'it' => 'Ariete', 'es' => 'Aries', 'fr' => 'Bélier', 'de' => 'Widder', 'la' => 'Aries', 'he' => 'טלה'],
                    ['en' => 'Scorpio', 'it' => 'Scorpione', 'es' => 'Escorpio', 'fr' => 'Scorpion', 'de' => 'Skorpion', 'la' => 'Scorpio', 'he' => 'עקרב']
                ],
                'exaltation' => [
                    ['en' => 'Capricorn', 'it' => 'Capricorno', 'es' => 'Capricornio', 'fr' => 'Capricorne', 'de' => 'Steinbock', 'la' => 'Capricornus', 'he' => 'גדי']
                ],
                'fall' => [
                    ['en' => 'Cancer', 'it' => 'Cancro', 'es' => 'Cáncer', 'fr' => 'Cancer', 'de' => 'Krebs', 'la' => 'Cancer', 'he' => 'סרטן']
                ],
                'detriment' => [
                    ['en' => 'Libra', 'it' => 'Bilancia', 'es' => 'Libra', 'fr' => 'Balance', 'de' => 'Waage', 'la' => 'Libra', 'he' => 'מאזניים']
                ],
                'positive_traits' => [
                    'en' => ['Courageous', 'Energetic', 'Decisive', 'Ambitious', 'Protective'],
                    'it' => ['Coraggioso', 'Energetico', 'Deciso', 'Ambizioso', 'Protettivo'],
                    'es' => ['Valiente', 'Energético', 'Decidido', 'Ambicioso', 'Protector'],
                    'fr' => ['Courageux', 'Énergique', 'Décisif', 'Ambitieux', 'Protecteur'],
                    'de' => ['Mutig', 'Energetisch', 'Entschlossen', 'Ehrgeizig', 'Beschützend'],
                    'la' => ['Fortis', 'Energeticus', 'Decisivus', 'Ambitiosus', 'Protectivus'],
                    'he' => ['אמיץ', 'אנרגטי', 'נחוש', 'שאפתן', 'מגן']
                ],
                'negative_traits' => [
                    'en' => ['Aggressive', 'Impatient', 'Reckless', 'Hot-tempered'],
                    'it' => ['Aggressivo', 'Impaziente', 'Sconsiderato', 'Collerico'],
                    'es' => ['Agresivo', 'Impaciente', 'Imprudente', 'Iracundo'],
                    'fr' => ['Aggressif', 'Impatient', 'Imprudent', 'Colérique'],
                    'de' => ['Aggressiv', 'Ungeduldig', 'Rücksichtslos', 'Jähzornig'],
                    'la' => ['Aggressivus', 'Impatiens', 'Temerarius', 'Iracundus'],
                    'he' => ['תוקפני', 'חסר סבלנות', 'פזיז', 'חם מזג']
                ],
                'gender' => 'maschile',
                'average_speed' => 0.5,
                'orbital_period' => '687 giorni',
            ],
            // Jupiter (5)
            [
                'planet_id' => 5,
                'name' => [
                    'en' => 'Jupiter',
                    'it' => 'Giove',
                    'es' => 'Júpiter',
                    'fr' => 'Jupiter',
                    'de' => 'Jupiter',
                    'la' => 'Iuppiter',
                    'he' => 'צדק'
                ],
                'symbol' => '♃',
                'description' => [
                    'en' => 'Jupiter represents expansion, wisdom, and abundance. It governs growth, luck, and higher learning.',
                    'it' => 'Giove rappresenta l\'espansione, la saggezza e l\'abbondanza. Governa la crescita, la fortuna e l\'apprendimento superiore.',
                    'es' => 'Júpiter representa la expansión, la sabiduría y la abundancia. Gobierna el crecimiento, la suerte y el aprendizaje superior.',
                    'fr' => 'Jupiter représente l\'expansion, la sagesse et l\'abondance. Il gouverne la croissance, la chance et l\'apprentissage supérieur.',
                    'de' => 'Jupiter repräsentiert Expansion, Weisheit und Fülle. Er regiert Wachstum, Glück und höhere Bildung.',
                    'la' => 'Iuppiter repraesentat expansionem, sapientiam et abundantiam. Regit incrementum, fortunam et doctrinam superiorem.',
                    'he' => 'צדק מייצג הרחבה, חוכמה ושפע. שולט על צמיחה, מזל ולמידה גבוהה.'
                ],
                'characteristics' => ['espansivo', 'benefico', 'maschile'],
                'keywords' => [
                    'en' => ['expansion', 'wisdom', 'abundance', 'luck', 'growth'],
                    'it' => ['espansione', 'saggezza', 'abbondanza', 'fortuna', 'crescita'],
                    'es' => ['expansión', 'sabiduría', 'abundancia', 'suerte', 'crecimiento'],
                    'fr' => ['expansion', 'sagesse', 'abondance', 'chance', 'croissance'],
                    'de' => ['Expansion', 'Weisheit', 'Fülle', 'Glück', 'Wachstum'],
                    'la' => ['expansio', 'sapientia', 'abundantia', 'fortuna', 'incrementum'],
                    'he' => ['הרחבה', 'חוכמה', 'שפע', 'מזל', 'צמיחה']
                ],
                'colors' => ['Blu', 'Violaceo', 'Rosso'],
                'metals' => ['Stagno'],
                'day' => [
                    'en' => 'Thursday',
                    'it' => 'Giovedì',
                    'es' => 'Jueves',
                    'fr' => 'Jeudi',
                    'de' => 'Donnerstag',
                    'la' => 'Dies Iovis',
                    'he' => 'יום חמישי'
                ],
                'rulership' => [
                    ['en' => 'Sagittarius', 'it' => 'Sagittario', 'es' => 'Sagitario', 'fr' => 'Sagittaire', 'de' => 'Schütze', 'la' => 'Sagittarius', 'he' => 'קשת'],
                    ['en' => 'Pisces', 'it' => 'Pesci', 'es' => 'Piscis', 'fr' => 'Poissons', 'de' => 'Fische', 'la' => 'Pisces', 'he' => 'דגים']
                ],
                'exaltation' => [
                    ['en' => 'Cancer', 'it' => 'Cancro', 'es' => 'Cáncer', 'fr' => 'Cancer', 'de' => 'Krebs', 'la' => 'Cancer', 'he' => 'סרטן']
                ],
                'fall' => [
                    ['en' => 'Capricorn', 'it' => 'Capricorno', 'es' => 'Capricornio', 'fr' => 'Capricorne', 'de' => 'Steinbock', 'la' => 'Capricornus', 'he' => 'גדי']
                ],
                'detriment' => [
                    ['en' => 'Gemini', 'it' => 'Gemelli', 'es' => 'Géminis', 'fr' => 'Gémeaux', 'de' => 'Zwillinge', 'la' => 'Gemini', 'he' => 'תאומים']
                ],
                'positive_traits' => [
                    'en' => ['Optimistic', 'Generous', 'Wise', 'Confident', 'Jovial'],
                    'it' => ['Ottimista', 'Generoso', 'Saggio', 'Fiducioso', 'Gioviale'],
                    'es' => ['Optimista', 'Generoso', 'Sabio', 'Confiado', 'Jovial'],
                    'fr' => ['Optimiste', 'Généreux', 'Sage', 'Confiant', 'Jovial'],
                    'de' => ['Optimistisch', 'Großzügig', 'Weise', 'Selbstbewusst', 'Fröhlich'],
                    'la' => ['Optimisticus', 'Generosus', 'Sapiens', 'Confidens', 'Iucundus'],
                    'he' => ['אופטימי', 'נדיב', 'חכם', 'בטוח', 'עליז']
                ],
                'negative_traits' => [
                    'en' => ['Overconfident', 'Reckless', 'Excessive', 'Pretentious'],
                    'it' => ['Troppo fiducioso', 'Sconsiderato', 'Eccessivo', 'Pretenzioso'],
                    'es' => ['Demasiado confiado', 'Imprudente', 'Excesivo', 'Pretencioso'],
                    'fr' => ['Trop confiant', 'Imprudent', 'Excessif', 'Prétentieux'],
                    'de' => ['Überheblich', 'Rücksichtslos', 'Übertrieben', 'Anspruchsvoll'],
                    'la' => ['Nimis confidens', 'Temerarius', 'Excessivus', 'Praefervidus'],
                    'he' => ['יהיר מדי', 'פזיז', 'מוגזם', 'יהיר']
                ],
                'gender' => 'maschile',
                'average_speed' => 0.2,
                'orbital_period' => '11.86 anni',
            ],
            // Saturn (6)
            [
                'planet_id' => 6,
                'name' => [
                    'en' => 'Saturn',
                    'it' => 'Saturno',
                    'es' => 'Saturno',
                    'fr' => 'Saturne',
                    'de' => 'Saturn',
                    'la' => 'Saturnus',
                    'he' => 'שבתאי'
                ],
                'symbol' => '♄',
                'description' => [
                    'en' => 'Saturn represents discipline, responsibility, and structure. It governs boundaries, time, and life lessons.',
                    'it' => 'Saturno rappresenta la disciplina, la responsabilità e la struttura. Governa i confini, il tempo e le lezioni di vita.',
                    'es' => 'Saturno representa la disciplina, la responsabilidad y la estructura. Gobierna los límites, el tiempo y las lecciones de vida.',
                    'fr' => 'Saturne représente la discipline, la responsabilité et la structure. Il gouverne les limites, le temps et les leçons de vie.',
                    'de' => 'Saturn repräsentiert Disziplin, Verantwortung und Struktur. Er regiert Grenzen, Zeit und Lebenslektionen.',
                    'la' => 'Saturnus repraesentat disciplinam, responsabilitatem et structuram. Regit fines, tempus et lectiones vitae.',
                    'he' => 'שבתאי מייצג משמעת, אחריות ומבנה. שולט על גבולות, זמן ולקחי חיים.'
                ],
                'characteristics' => ['disciplinato', 'strutturante', 'maschile'],
                'keywords' => [
                    'en' => ['discipline', 'responsibility', 'structure', 'boundaries', 'lessons'],
                    'it' => ['disciplina', 'responsabilità', 'struttura', 'confini', 'lezioni'],
                    'es' => ['disciplina', 'responsabilidad', 'estructura', 'límites', 'lecciones'],
                    'fr' => ['discipline', 'responsabilité', 'structure', 'limites', 'leçons'],
                    'de' => ['Disziplin', 'Verantwortung', 'Struktur', 'Grenzen', 'Lektionen'],
                    'la' => ['disciplina', 'responsabilitas', 'structura', 'fines', 'lectiones'],
                    'he' => ['משמעת', 'אחריות', 'מבנה', 'גבולות', 'לקחים']
                ],
                'colors' => ['Nero', 'Marrone', 'Grigio'],
                'metals' => ['Piombo'],
                'day' => [
                    'en' => 'Saturday',
                    'it' => 'Sabato',
                    'es' => 'Sábado',
                    'fr' => 'Samedi',
                    'de' => 'Samstag',
                    'la' => 'Dies Saturni',
                    'he' => 'יום שבת'
                ],
                'rulership' => [
                    ['en' => 'Capricorn', 'it' => 'Capricorno', 'es' => 'Capricornio', 'fr' => 'Capricorne', 'de' => 'Steinbock', 'la' => 'Capricornus', 'he' => 'גדי'],
                    ['en' => 'Aquarius', 'it' => 'Acquario', 'es' => 'Acuario', 'fr' => 'Verseau', 'de' => 'Wassermann', 'la' => 'Aquarius', 'he' => 'דלי']
                ],
                'exaltation' => [
                    ['en' => 'Libra', 'it' => 'Bilancia', 'es' => 'Libra', 'fr' => 'Balance', 'de' => 'Waage', 'la' => 'Libra', 'he' => 'מאזניים']
                ],
                'fall' => [
                    ['en' => 'Aries', 'it' => 'Ariete', 'es' => 'Aries', 'fr' => 'Bélier', 'de' => 'Widder', 'la' => 'Aries', 'he' => 'טלה']
                ],
                'detriment' => [
                    ['en' => 'Cancer', 'it' => 'Cancro', 'es' => 'Cáncer', 'fr' => 'Cancer', 'de' => 'Krebs', 'la' => 'Cancer', 'he' => 'סרטן']
                ],
                'positive_traits' => [
                    'en' => ['Responsible', 'Disciplined', 'Patient', 'Organized', 'Wise'],
                    'it' => ['Responsabile', 'Disciplinato', 'Paziente', 'Organizzato', 'Saggio'],
                    'es' => ['Responsable', 'Disciplinado', 'Paciente', 'Organizado', 'Sabio'],
                    'fr' => ['Responsable', 'Discipliné', 'Patient', 'Organisé', 'Sage'],
                    'de' => ['Verantwortungsbewusst', 'Diszipliniert', 'Geduldig', 'Organisiert', 'Weise'],
                    'la' => ['Responsabilis', 'Disciplinatus', 'Patience', 'Organizatus', 'Sapiens'],
                    'he' => ['אחראי', 'ממושמע', 'סבלני', 'מאורגן', 'חכם']
                ],
                'negative_traits' => [
                    'en' => ['Depressive', 'Rigid', 'Severe', 'Pessimistic'],
                    'it' => ['Depressivo', 'Rigido', 'Severo', 'Pessimista'],
                    'es' => ['Depresivo', 'Rígido', 'Severo', 'Pesimista'],
                    'fr' => ['Dépressif', 'Rigide', 'Sévère', 'Pessimiste'],
                    'de' => ['Depressiv', 'Starr', 'Streng', 'Pessimistisch'],
                    'la' => ['Depressivus', 'Rigidus', 'Severus', 'Pessimisticus'],
                    'he' => ['מדוכא', 'נוקשה', 'קשוח', 'פסימי']
                ],
                'gender' => 'maschile',
                'average_speed' => 0.1,
                'orbital_period' => '29.46 anni',
            ],
            // Uranus (7)
            [
                'planet_id' => 7,
                'name' => [
                    'en' => 'Uranus',
                    'it' => 'Urano',
                    'es' => 'Urano',
                    'fr' => 'Uranus',
                    'de' => 'Uranus',
                    'la' => 'Uranus',
                    'he' => 'אורנוס'
                ],
                'symbol' => '♅',
                'description' => [
                    'en' => 'Uranus represents innovation, rebellion, and change. It governs breakthroughs, individuality, and progress.',
                    'it' => 'Urano rappresenta l\'innovazione, la ribellione e il cambiamento. Governa le scoperte, l\'individualità e il progresso.',
                    'es' => 'Urano representa la innovación, la rebelión y el cambio. Gobierna los descubrimientos, la individualidad y el progreso.',
                    'fr' => 'Uranus représente l\'innovation, la rébellion et le changement. Il gouverne les découvertes, l\'individualité et le progrès.',
                    'de' => 'Uranus repräsentiert Innovation, Rebellion und Wandel. Er regiert Durchbrüche, Individualität und Fortschritt.',
                    'la' => 'Uranus repraesentat innovationem, rebellionem et mutationem. Regit inventa, singularitatem et progressum.',
                    'he' => 'אורנוס מייצג חדשנות, מרד ושינוי. שולט על פריצות דרך, אינדיבידואליות וקידמה.'
                ],
                'characteristics' => ['innovativo', 'ribelle', 'maschile'],
                'keywords' => [
                    'en' => ['innovation', 'rebellion', 'change', 'individuality', 'progress'],
                    'it' => ['innovazione', 'ribellione', 'cambiamento', 'individualità', 'progresso'],
                    'es' => ['innovación', 'rebelión', 'cambio', 'individualidad', 'progreso'],
                    'fr' => ['innovation', 'rébellion', 'changement', 'individualité', 'progrès'],
                    'de' => ['Innovation', 'Rebellion', 'Veränderung', 'Individualität', 'Fortschritt'],
                    'la' => ['innovatic', 'rebellio', 'mutatio', 'singularitas', 'progressus'],
                    'he' => ['חדשנות', 'מרד', 'שינוי', 'אינדיבידואליות', 'קידמה']
                ],
                'colors' => ['Azzurro', 'Turchese', 'Blu Elettrico'],
                'metals' => ['Uranio'],
                'day' => [
                    'en' => 'Saturday',
                    'it' => 'Sabato',
                    'es' => 'Sábado',
                    'fr' => 'Samedi',
                    'de' => 'Samstag',
                    'la' => 'Dies Saturni',
                    'he' => 'יום שבת'
                ],
                'rulership' => [
                    ['en' => 'Aquarius', 'it' => 'Acquario', 'es' => 'Acuario', 'fr' => 'Verseau', 'de' => 'Wassermann', 'la' => 'Aquarius', 'he' => 'דלי']
                ],
                'exaltation' => [
                    ['en' => 'Scorpio', 'it' => 'Scorpione', 'es' => 'Escorpio', 'fr' => 'Scorpion', 'de' => 'Skorpion', 'la' => 'Scorpio', 'he' => 'עקרב']
                ],
                'fall' => [
                    ['en' => 'Taurus', 'it' => 'Toro', 'es' => 'Tauro', 'fr' => 'Taureau', 'de' => 'Stier', 'la' => 'Taurus', 'he' => 'שור']
                ],
                'detriment' => [
                    ['en' => 'Leo', 'it' => 'Leone', 'es' => 'Leo', 'fr' => 'Lion', 'de' => 'Löwe', 'la' => 'Leo', 'he' => 'אריה']
                ],
                'positive_traits' => [
                    'en' => ['Innovative', 'Original', 'Independent', 'Intellectual', 'Progressive'],
                    'it' => ['Innovativo', 'Originale', 'Indipendente', 'Intellettuale', 'Progressista'],
                    'es' => ['Innovador', 'Original', 'Independiente', 'Intelectual', 'Progresista'],
                    'fr' => ['Innovant', 'Original', 'Indépendant', 'Intellectuel', 'Progressiste'],
                    'de' => ['Innovativ', 'Originell', 'Unabhängig', 'Intellektuell', 'Fortschrittlich'],
                    'la' => ['Innovativus', 'Originalis', 'Independens', 'Intellectualis', 'Progressivus'],
                    'he' => ['חדשני', 'מקורי', 'עצמאי', 'אינטלקטואלי', 'פרוגרסיבי']
                ],
                'negative_traits' => [
                    'en' => ['Eccentric', 'Unpredictable', 'Rebellious', 'Detached'],
                    'it' => ['Eccentrico', 'Imprevedibile', 'Ribelle', 'Distaccato'],
                    'es' => ['Excéntrico', 'Impredecible', 'Rebelde', 'Distante'],
                    'fr' => ['Excentrique', 'Imprévisible', 'Rebelle', 'Détaché'],
                    'de' => ['Exzentrisch', 'Unberechenbar', 'Rebellisch', 'Distanziert'],
                    'la' => ['Excentricus', 'Inpraevidibilis', 'Rebellis', 'Distans'],
                    'he' => ['אקסצנטרי', 'בלתי צפוי', 'מרדן', 'מנותק']
                ],
                'gender' => 'maschile',
                'average_speed' => 0.04,
                'orbital_period' => '84.01 anni',
            ],
            // Neptune (8)
            [
                'planet_id' => 8,
                'name' => [
                    'en' => 'Neptune',
                    'it' => 'Nettuno',
                    'es' => 'Neptuno',
                    'fr' => 'Neptune',
                    'de' => 'Neptun',
                    'la' => 'Neptunus',
                    'he' => 'נפטון'
                ],
                'symbol' => '♆',
                'description' => [
                    'en' => 'Neptune represents dreams, illusions, and spirituality. It governs intuition, creativity, and transcendence.',
                    'it' => 'Nettuno rappresenta i sogni, le illusioni e la spiritualità. Governa l\'intuizione, la creatività e la trascendenza.',
                    'es' => 'Neptuno representa los sueños, las ilusiones y la espiritualidad. Gobierna la intuición, la creatividad y la trascendencia.',
                    'fr' => 'Neptune représente les rêves, les illusions et la spiritualité. Il gouverne l\'intuition, la créativité et la transcendance.',
                    'de' => 'Neptun repräsentiert Träume, Illusionen und Spiritualität. Er regiert Intuition, Kreativität und Transzendenz.',
                    'la' => 'Neptunus repraesentat somnia, illusiones et spiritualitatem. Regit intuitum, creativitatem et transcendentiam.',
                    'he' => 'נפטון מייצג חלומות, אשליות ורוחניות. שולט על אינטואיציה, יצירתיות וטרנסצנדנטיות.'
                ],
                'characteristics' => ['spirituale', 'creativo', 'femminile'],
                'keywords' => [
                    'en' => ['dreams', 'illusion', 'spirituality', 'intuition', 'creativity'],
                    'it' => ['sogni', 'illusione', 'spiritualità', 'intuizione', 'creatività'],
                    'es' => ['sueños', 'ilusión', 'espiritualidad', 'intuición', 'creatividad'],
                    'fr' => ['rêves', 'illusion', 'spiritualité', 'intuition', 'créativité'],
                    'de' => ['Träume', 'Illusion', 'Spiritualität', 'Intuition', 'Kreativität'],
                    'la' => ['somnia', 'illusio', 'spiritualitas', 'intuitus', 'creativitas'],
                    'he' => ['חלומות', 'אשליה', 'רוחניות', 'אינטואיציה', 'יצירתיות']
                ],
                'colors' => ['Blu', 'Viola', 'Menta'],
                'metals' => ['Neptunio'],
                'day' => [
                    'en' => 'Friday',
                    'it' => 'Venerdì',
                    'es' => 'Viernes',
                    'fr' => 'Vendredi',
                    'de' => 'Freitag',
                    'la' => 'Dies Veneris',
                    'he' => 'יום שישי'
                ],
                'rulership' => [
                    ['en' => 'Pisces', 'it' => 'Pesci', 'es' => 'Piscis', 'fr' => 'Poissons', 'de' => 'Fische', 'la' => 'Pisces', 'he' => 'דגים']
                ],
                'exaltation' => [
                    ['en' => 'Cancer', 'it' => 'Cancro', 'es' => 'Cáncer', 'fr' => 'Cancer', 'de' => 'Krebs', 'la' => 'Cancer', 'he' => 'סרטן']
                ],
                'fall' => [
                    ['en' => 'Capricorn', 'it' => 'Capricorno', 'es' => 'Capricornio', 'fr' => 'Capricorne', 'de' => 'Steinbock', 'la' => 'Capricornus', 'he' => 'גדי']
                ],
                'detriment' => [
                    ['en' => 'Virgo', 'it' => 'Vergine', 'es' => 'Virgo', 'fr' => 'Vierge', 'de' => 'Jungfrau', 'la' => 'Virgo', 'he' => 'בתולה']
                ],
                'positive_traits' => [
                    'en' => ['Imaginative', 'Intuitive', 'Compassionate', 'Creative', 'Spiritual'],
                    'it' => ['Immaginativo', 'Intuitivo', 'Compassionevole', 'Creativo', 'Spirituale'],
                    'es' => ['Imaginativo', 'Intuitivo', 'Compasivo', 'Creativo', 'Espiritual'],
                    'fr' => ['Imaginatif', 'Intuitif', 'Compatissant', 'Créatif', 'Spirituel'],
                    'de' => ['Phantasievoll', 'Intuitiv', 'Mitfühlend', 'Kreativ', 'Spirituell'],
                    'la' => ['Imaginativus', 'Intuitivus', 'Compassionatus', 'Creativus', 'Spiritualis'],
                    'he' => ['דמיון', 'אינטואיטיבי', 'חמלה', 'יצירתי', 'רוחני']
                ],
                'negative_traits' => [
                    'en' => ['Escapist', 'Delusional', 'Deceptive', 'Disoriented'],
                    'it' => ['Fuggente', 'Deluso', 'Ingannevole', 'Disorientato'],
                    'es' => ['Evasivo', 'Iluso', 'Engañoso', 'Desorientado'],
                    'fr' => ['Fuyant', 'Illusoire', 'Trompeur', 'Désorienté'],
                    'de' => ['Fliehend', 'Illusorisch', 'Täuschend', 'Desorientiert'],
                    'la' => ['Fugiens', 'Illusorius', 'Fallax', 'Orientatus'],
                    'he' => ['בורח', 'אשליתי', 'מטעה', 'מבולבל']
                ],
                'gender' => 'femminile',
                'average_speed' => 0.03,
                'orbital_period' => '164.8 anni',
            ],
            // Pluto (9)
            [
                'planet_id' => 9,
                'name' => [
                    'en' => 'Pluto',
                    'it' => 'Plutone',
                    'es' => 'Plutón',
                    'fr' => 'Pluton',
                    'de' => 'Pluto',
                    'la' => 'Pluto',
                    'he' => 'פלוטו'
                ],
                'symbol' => '♇',
                'description' => [
                    'en' => 'Pluto represents transformation, power, and rebirth. It governs the subconscious, regeneration, and deep change.',
                    'it' => 'Plutone rappresenta la trasformazione, il potere e la rinascita. Governa il subconscio, la rigenerazione e il cambiamento profondo.',
                    'es' => 'Plutón representa la transformación, el poder y el renacimiento. Gobierna el subconsciente, la regeneración y el cambio profundo.',
                    'fr' => 'Pluton représente la transformation, le pouvoir et la renaissance. Il gouverne le subconscient, la régénération et le changement profond.',
                    'de' => 'Pluto repräsentiert Transformation, Macht und Wiedergeburt. Er regiert das Unterbewusstsein, Regeneration und tiefgreifenden Wandel.',
                    'la' => 'Pluto repraesentat transformationem, potentiam et renascentiam. Regit subconscious, regenerationem et mutationem profundam.',
                    'he' => 'פלוטו מייצג טרנספורמציה, כוח ולידה מחדש. שולט על תת-מודע, התחדשות ושינוי עמוק.'
                ],
                'characteristics' => ['trasformativo', 'potente', 'maschile'],
                'keywords' => [
                    'en' => ['transformation', 'power', 'rebirth', 'subconscious', 'regeneration'],
                    'it' => ['trasformazione', 'potere', 'rinascita', 'subconscio', 'rigenerazione'],
                    'es' => ['transformación', 'poder', 'renacimiento', 'subconsciente', 'regeneración'],
                    'fr' => ['transformation', 'pouvoir', 'renaissance', 'subconscient', 'régénération'],
                    'de' => ['Transformation', 'Macht', 'Wiedergeburt', 'Unterbewusstsein', 'Regeneration'],
                    'la' => ['transformatio', 'potentia', 'renascentia', 'subconscious', 'regeneratio'],
                    'he' => ['טרנספורמציה', 'כוח', 'לידה מחדש', 'תת-מודע', 'התחדשות']
                ],
                'colors' => ['Nero', 'Viola Scuro', 'Bordeaux'],
                'metals' => ['Plutonio'],
                'day' => [
                    'en' => 'Tuesday',
                    'it' => 'Martedì',
                    'es' => 'Martes',
                    'fr' => 'Mardi',
                    'de' => 'Dienstag',
                    'la' => 'Dies Martis',
                    'he' => 'יום שלישי'
                ],
                'rulership' => [
                    ['en' => 'Scorpio', 'it' => 'Scorpione', 'es' => 'Escorpio', 'fr' => 'Scorpion', 'de' => 'Skorpion', 'la' => 'Scorpio', 'he' => 'עקרב']
                ],
                'exaltation' => [
                    ['en' => 'Cancer', 'it' => 'Cancro', 'es' => 'Cáncer', 'fr' => 'Cancer', 'de' => 'Krebs', 'la' => 'Cancer', 'he' => 'סרטן']
                ],
                'fall' => [
                    ['en' => 'Capricorn', 'it' => 'Capricorno', 'es' => 'Capricornio', 'fr' => 'Capricorne', 'de' => 'Steinbock', 'la' => 'Capricornus', 'he' => 'גדי']
                ],
                'detriment' => [
                    ['en' => 'Taurus', 'it' => 'Toro', 'es' => 'Tauro', 'fr' => 'Taureau', 'de' => 'Stier', 'la' => 'Taurus', 'he' => 'שור']
                ],
                'positive_traits' => [
                    'en' => ['Powerful', 'Transformative', 'Intense', 'Regenerative', 'Profound'],
                    'it' => ['Potente', 'Trasformativo', 'Intenso', 'Rigenerativo', 'Profondo'],
                    'es' => ['Poderoso', 'Transformador', 'Intenso', 'Regenerativo', 'Profundo'],
                    'fr' => ['Puissant', 'Transformateur', 'Intense', 'Régénérateur', 'Profond'],
                    'de' => ['Mächtig', 'Transformativ', 'Intensiv', 'Regenerativ', 'Tiefgründig'],
                    'la' => ['Potens', 'Transformatious', 'Intensus', 'Regenerativus', 'Profundus'],
                    'he' => ['עוצמתי', 'משנה', 'אינטנסיבי', 'מתחדש', 'עמוק']
                ],
                'negative_traits' => [
                    'en' => ['Obsessive', 'Controlling', 'Destructive', 'Manipulative'],
                    'it' => ['Ossessivo', 'Controllante', 'Distruttivo', 'Manipolativo'],
                    'es' => ['Obsesivo', 'Controlador', 'Destructivo', 'Manipulador'],
                    'fr' => ['Obsessionnel', 'Contrôlant', 'Destructeur', 'Manipulateur'],
                    'de' => ['Zwangshaft', 'Kontrollierend', 'Zerstörerisch', 'Manipulativ'],
                    'la' => ['Obsessivus', 'Dominans', 'Destructivus', 'Manipulativus'],
                    'he' => ['אובססיבי', 'שולט', 'הרסני', 'מניפולטיבי']
                ],
                'gender' => 'maschile',
                'average_speed' => 0.02,
                'orbital_period' => '247.9 anni',
            ],
        ];

        foreach ($planets as $planet) {
            PlanetMeaning::updateOrCreate(
                ['planet_id' => $planet['planet_id']],
                $planet
            );
        }
    }
}
