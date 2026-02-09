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
            // RED
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
                    'it' => 'Il rosso porta decisione, forza e protezione, nella licnomanzia spesso viene considerato anche il sangue, può diventare una sorta di scudo oppure rafforzamento della fede o sentimenti, ideale per liberazioni, preghiere personali o atmosfere di protezione',
                    'en' => 'Red brings determination, strength and protection. In lycomancy, it is often associated with blood and can become a sort of shield or reinforcement of faith or feelings, ideal for liberations, personal prayers or protective atmospheres'
                ],
            ],

            // ORANGE
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
                    'it' => "Questo colore si abbina alla felicità e alla decisione d'animo, ispira fiducia e porta colore nei propri pensieri. Aiuta ad attrarre e manifestare le proprie intenzioni personali",
                    'en' => "This colour is associated with happiness and determination, inspires confidence and brings colour to one's thoughts. It helps to attract and manifest one's personal intentions"
                ],
            ],

            // YELLOW
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
                    'it' => "Porta successo economico, rappresenta la luce, illumina le menti, porta gioia ma anche a livello economico porta interiormente la luce dorata che manifesta ricchezza interiore",
                    'en' => "It brings economic success, represents light, illuminates minds, brings joy, but also, on an economic level, it brings inner golden light that manifests inner wealth"
                ],
            ],

            // GREEN
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
                    'it' => "La pace interiore, la guarigione, radicamento con la natura nella sua parte più alta, il verde è da sempre attribuita alla forza, al proprio sè superiore, alla potenza dentro ognuno di noi",
                    'en' => "Inner peace, healing, connection with nature at its highest level, green has always been attributed to strength, to one's higher self, to the power within each of us"
                ],
            ],

            // LIGHT GREEN
            [
                'name' => ['it' => 'Verde Chiaro', 'en' => 'Light Green'],
                'hex' => '#90EE90',
                'psychology' => [
                    'it' => 'Rinnovamento, speranza, apertura.',
                    'en' => 'Renewal, hope, openness.'
                ],
                'shadow' => [
                    'it' => 'Ingenuità, instabilità emotiva.',
                    'en' => 'Naivety, emotional instability.'
                ],
                'spiritual' => [
                    'it' => 'Guarigione dolce e crescita.',
                    'en' => 'Gentle healing and growth.'
                ],
                'chakra' => [
                    'it' => '4° Anahata (Cuore)',
                    'en' => '4th Anahata (Heart)'
                ],
                'numerology' => 4,
                'organs' => [
                    'it' => 'Polmoni, sistema linfatico',
                    'en' => 'Lungs, lymphatic system'
                ],
                'licnomancy' => [
                    'it' => "La versione più chiara del verde apre la mente, aiuta alla connessione più sottile per cercare la pace interiore e la quiete nel ragionamento, il suo colore chiaro tende a calmare e guarire la propria psiche",
                    'en' => "The lighter version of green opens the mind, helping to establish a more subtle connection in order to seek inner peace and calmness in reasoning. Its light colour tends to calm and heal the psyche"
                ],
            ],

            // DARK GREEN
            [
                'name' => ['it' => 'Verde Scuro', 'en' => 'Dark Green'],
                'hex' => '#006400',
                'psychology' => [
                    'it' => 'Stabilità profonda, resilienza, autocontrollo.',
                    'en' => 'Deep stability, resilience, self-control.'
                ],
                'shadow' => [
                    'it' => 'Rigidità emotiva, chiusura.',
                    'en' => 'Emotional rigidity, closure.'
                ],
                'spiritual' => [
                    'it' => 'Radicamento maturo e forza interiore.',
                    'en' => 'Mature grounding and inner strength.'
                ],
                'chakra' => [
                    'it' => '4° Anahata (Cuore profondo)',
                    'en' => '4th Anahata (Deep Heart)'
                ],
                'numerology' => 4,
                'organs' => [
                    'it' => 'Cuore, sistema immunitario',
                    'en' => 'Heart, immune system'
                ],
                'licnomancy' => [
                    'it' => "La versione più scura determina la potenza, la forza e la ricerca del proprio sè superiore nelle nostre parti più in ombra e meno radicate, ideale per chi cerca di guarirsi da molto tempo",
                    'en' => "The darker version determines power, strength and the search for one's higher self in our most shadowed and least rooted parts, ideal for those who have been seeking healing for a long time"
                ],
            ],

            // BLUE
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
                    'it' => "La notte, la passione per le stelle, la ricerca più antica di noi attraverso la guida del cielo, la connessione spirituale profonda per connettersi con l'ignoto, ideale per le preghiere rivolte al lontano (metaforico) da noi",
                    'en' => "The night, the passion for the stars, the oldest quest of mankind through the guidance of the sky, the deep spiritual connection to connect with the unknown, ideal for prayers addressed to the distant (metaphorical) from us"
                ],
            ],

            // INDIGO
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
                    'it' => "Il mix perfetto per la connessione altissima con l'ignoto e la protezione personale, arma di tutte le armi a livello di scudo spirituale, un colore cui fare riferimento per le visioni notturne come sogni o visioni da meditazione personali",
                    'en' => "The perfect mix for a powerful connection with the unknown and personal protection, the ultimate weapon in terms of spiritual shielding, a colour to refer to for night-time visions such as dreams or personal meditative visions"
                ],
            ],

            // FUCHSIA
            [
                'name' => ['it' => 'Fucsia', 'en' => 'Fuchsia'],
                'hex' => '#FF00FF',
                'psychology' => [
                    'it' => 'Espressione emotiva intensa e creatività.',
                    'en' => 'Intense emotional expression and creativity.'
                ],
                'shadow' => [
                    'it' => 'Eccesso emotivo, instabilità.',
                    'en' => 'Emotional excess, instability.'
                ],
                'spiritual' => [
                    'it' => 'Integrazione tra cuore e spirito.',
                    'en' => 'Integration of heart and spirit.'
                ],
                'chakra' => [
                    'it' => '4°-7° Ponte Cuore-Corona',
                    'en' => '4th-7th Heart-Crown bridge'
                ],
                'numerology' => 6,
                'organs' => [
                    'it' => 'Cuore, sistema nervoso',
                    'en' => 'Heart, nervous system'
                ],
                'licnomancy' => [
                    'it' => "Quando l'amor proprio sembra poco passionevole e non dedicato questo colore aiuta a riaccendere in noi la passione per noi stessi per poterci amare ed essere amati",
                    'en' => "When self-love seems lacking in passion and devotion, this colour helps to rekindle our passion for ourselves so that we can love and be loved"
                ],
            ],

            // VIOLET
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
                    'it' => "Questo colore aiuta nella protezione, il combattimento spirituale contro le forze contrastanti, l'elevazione più alta di se nel proprio essere a livello spirituale",
                    'en' => "This colour aids in protection, spiritual combat against opposing forces, and the highest elevation of oneself on a spiritual level"
                ],
            ],

            // GRAY
            [
                'name' => ['it' => 'Grigio', 'en' => 'Gray'],
                'hex' => '#808080',
                'psychology' => [
                    'it' => 'Neutralità, equilibrio mentale.',
                    'en' => 'Neutrality, mental balance.'
                ],
                'shadow' => [
                    'it' => 'Apatia, indecisione.',
                    'en' => 'Apathy, indecision.'
                ],
                'spiritual' => [
                    'it' => 'Zona di transizione e attesa.',
                    'en' => 'Transition and waiting zone.'
                ],
                'chakra' => [
                    'it' => 'Centro mentale',
                    'en' => 'Mental center'
                ],
                'numerology' => 0,
                'organs' => [
                    'it' => 'Cervello',
                    'en' => 'Brain'
                ],
                'licnomancy' => [
                    'it' => "La protezione delle porte in acciaio, il rafforzamento della protezione, la chiusura del proprio posto sacro dagli attacchi esterni, la neutralizzazione, la pausa interna del rituale",
                    'en' => "The protection of steel doors, the reinforcement of security, the closure of one's sacred place from external attacks, neutralisation, the internal pause of the ritual"
                ],
            ],

            // SILVER
            [
                'name' => ['it' => 'Argento', 'en' => 'Silver'],
                'hex' => '#C0C0C0',
                'psychology' => [
                    'it' => 'Intuizione, riflessione, sensibilità.',
                    'en' => 'Intuition, reflection, sensitivity.'
                ],
                'shadow' => [
                    'it' => 'Indecisione, passività.',
                    'en' => 'Indecision, passivity.'
                ],
                'spiritual' => [
                    'it' => 'Energia lunare e percezione sottile.',
                    'en' => 'Lunar energy and subtle perception.'
                ],
                'chakra' => [
                    'it' => '6° Ajna',
                    'en' => '6th Ajna'
                ],
                'numerology' => 2,
                'organs' => [
                    'it' => 'Sistema nervoso',
                    'en' => 'Nervous system'
                ],
                'licnomancy' => [
                    'it' => "La intuizione, protezione lunare, sogni, femminilità sacra, flessibilità emotiva. Spesso associato all’energia della Luna e alla divinazione onirica alla connessione alta celestiale",
                    'en' => "Intuition, lunar protection, dreams, sacred femininity, emotional flexibility. Often associated with the energy of the Moon and dream divination, with a high celestial connection"
                ],
            ],

            // GOLD
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
                    'it' => "La luce dorata e divina, l'espressione della manifestazione nella ricchezza, interiore, il rendersi luce a l'attirare il dorato nella propria vita, manifestazione delle ricchezze",
                    'en' => "The golden and divine light, the expression of manifestation in inner wealth, becoming light to attract gold into one's life, manifestation of riches"
                ],
            ],

            // BLACK
            [
                'name' => ['it' => 'Nero', 'en' => 'Black'],
                'hex' => '#000000',
                'psychology' => [
                    'it' => 'Mistero, introspezione, potere.',
                    'en' => 'Mystery, introspection, power.'
                ],
                'shadow' => [
                    'it' => 'Depressione, isolamento.',
                    'en' => 'Depression, isolation.'
                ],
                'spiritual' => [
                    'it' => 'Il vuoto primordiale e la trasformazione.',
                    'en' => 'The primordial void and transformation.'
                ],
                'chakra' => [
                    'it' => 'Ombra / Radice',
                    'en' => 'Shadow / Root'
                ],
                'numerology' => 0,
                'organs' => [
                    'it' => 'Sistema nervoso',
                    'en' => 'Nervous system'
                ],
                'licnomancy' => [
                    'it' => "L'ombra che nasconde, protegge ed aiuta as uscire dalle energie più forti contrastanti. Aiuta a rafforzare la propria personalità in un percorso abbastanza deciso",
                    'en' => "The shadow that hides, protects and helps us escape from the strongest conflicting energies. It helps strengthen our personality on a fairly decisive path"
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
