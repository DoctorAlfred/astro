<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Numbers\TantricMeaning;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TantricMeaningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            1 => [
                'body' => 'Soul Body',

                'it' => [
                    'name' => 'Corpo dell’anima',

                    'meaning' => [
                        'cos_e' => 'Il Corpo dell’Anima rappresenta il nucleo più profondo e immortale dell’essere umano. È la sede dell’identità spirituale, della coscienza superiore e dell’intuizione autentica. Attraverso questo corpo l’individuo percepisce il senso della propria esistenza, distingue ciò che è essenziale da ciò che è superfluo e riconosce la propria direzione interiore. È il punto di contatto tra l’essere umano e il principio universale o divino.',
                        'uso' => 'Guida le scelte fondamentali della vita, specialmente quelle legate ai valori, all’etica e allo scopo personale. Si manifesta quando una decisione nasce da una certezza interiore profonda, non da paura, convenienza o desiderio.',
                        'fini' => 'Condurre l’individuo verso autenticità, coerenza interiore e allineamento con il proprio destino spirituale. Favorisce una vita vissuta in accordo con la verità dell’essere.',
                        'benessere' => 'Chiarezza spirituale, senso di scopo, integrità, compassione e stabilità interiore. La persona percepisce continuità tra ciò che è, ciò che fa e ciò che sceglie.',
                        'malessere' => 'Confusione esistenziale, perdita di significato, vuoto interiore e disconnessione spirituale. Le decisioni risultano incoerenti e fortemente influenzate da fattori esterni.',
                    ],

                    'applications' => [
                        'soul' => 'Quando il Corpo dell’Anima opera come Numero dell’Anima, il lavoro evolutivo riguarda il rapporto con la propria interiorità. Possono emergere conflitti legati al senso della vita, all’identità profonda e alla fedeltà a sé stessi. La crescita passa attraverso l’ascolto interiore e il riallineamento ai propri valori essenziali.',
                        'karma' => 'Quando il Corpo dell’Anima opera come Numero del Karma, la sfida riguarda il modo in cui l’individuo esprime la propria verità nel mondo. Il lavoro evolutivo consiste nel mantenere integrità e coerenza anche nelle relazioni e nelle pressioni esterne.',
                        'gift' => 'Quando il Corpo dell’Anima opera come Dono, indica una naturale connessione con il proprio centro spirituale. Questa risorsa può sostenere gli altri e offrire chiarezza, purché venga coltivata con umiltà e presenza.',
                        'destiny' => 'Quando il Corpo dell’Anima opera come Destino, segnala un percorso già consolidato di ricerca interiore. Il compito evolutivo è evitare rigidità spirituale e mantenere viva l’esperienza diretta, non solo la conoscenza.',
                        'path' => 'Quando il Corpo dell’Anima opera come Sentiero, la direzione evolutiva della vita è orientata alla realizzazione spirituale. Ogni esperienza diventa occasione di allineamento, discernimento e servizio consapevole.',
                    ],
                ],

                'en' => [
                    'name' => 'Soul Body',

                    'meaning' => [
                        'what_is' => 'The Soul Body represents the deepest and immortal core of the human being. It is the seat of spiritual identity, higher consciousness, and authentic intuition. Through this body, one perceives the meaning of life, discerns what is essential, and recognizes inner direction. It is the point of connection between the human being and the universal or divine principle.',
                        'usage' => 'It guides the most fundamental life choices, especially those related to values, ethics, and personal purpose. It operates when decisions arise from inner certainty rather than fear, convenience, or desire.',
                        'purpose' => 'To lead the individual toward authenticity, inner coherence, and alignment with spiritual destiny, supporting a life lived in truth.',
                        'wellbeing' => 'Spiritual clarity, sense of purpose, integrity, compassion, and inner stability. The individual experiences coherence between being, action, and choice.',
                        'imbalance' => 'Existential confusion, loss of meaning, inner emptiness, and spiritual disconnection. Decisions become inconsistent and externally driven.',
                    ],

                    'applications' => [
                        'soul' => 'When the Soul Body operates as the Soul Number, the evolutionary work concerns the relationship with one’s inner truth. Conflicts may arise around identity, purpose, and self-alignment. Growth comes through inner listening and realignment with essential values.',
                        'karma' => 'When the Soul Body operates as the Karma Number, the challenge lies in expressing inner truth within the external world. Evolution involves maintaining integrity and coherence in relationships and social contexts.',
                        'gift' => 'When the Soul Body operates as a Gift, it indicates a natural connection to spiritual center. This resource can support others and offer clarity when cultivated with humility and presence.',
                        'destiny' => 'When the Soul Body operates as Destiny, it reflects a consolidated path of inner search. The evolutionary task is to avoid spiritual rigidity and keep direct experience alive.',
                        'path' => 'When the Soul Body operates as the Life Path, the evolutionary direction is oriented toward spiritual realization. Every life experience becomes an opportunity for alignment, discernment, and conscious service.',
                    ],
                ],
            ],

            2 => [
                'body' => 'Negative Mind',

                'it' => [
                    'name' => 'Mente Negativa',

                    'meaning' => [
                        'cos_e' => 'La Mente Negativa è la funzione della coscienza deputata alla protezione e al discernimento dei pericoli. Valuta rischi, limiti e conseguenze, permettendo all’individuo di riconoscere ciò che può nuocere alla propria integrità fisica, emotiva o spirituale. Non è pessimista per natura, ma cauta e realistica.',
                        'uso' => 'Opera ogni volta che è necessario stabilire confini, valutare situazioni potenzialmente dannose e prevenire errori. È essenziale nei processi decisionali che richiedono prudenza e responsabilità.',
                        'fini' => 'Garantire sicurezza, sopravvivenza e discernimento. Insegna a riconoscere i limiti e a rispettarli senza cadere nella paura.',
                        'benessere' => 'Prudenza, senso di protezione, capacità di dire no, stabilità emotiva e lucidità nelle valutazioni.',
                        'malessere' => 'Paura costante, chiusura, diffidenza eccessiva, paranoia o blocco dell’azione per timore del fallimento.',
                    ],

                    'applications' => [
                        'soul' => 'Quando la Mente Negativa opera come Numero dell’Anima, il lavoro evolutivo riguarda il rapporto interno con la paura e l’autoprotezione. La crescita passa dal trasformare la paura in discernimento consapevole.',
                        'karma' => 'Quando opera come Numero del Karma, indica lezioni legate ai confini nelle relazioni. L’evoluzione consiste nel proteggersi senza isolarsi o respingere il mondo.',
                        'gift' => 'Come Dono, la Mente Negativa offre una naturale capacità di valutare rischi e prevenire errori. Questa risorsa va usata con equilibrio per non diventare eccessivamente difensiva.',
                        'destiny' => 'Come Destino, segnala un pattern consolidato di cautela e protezione. Il lavoro evolutivo consiste nel non lasciare che la prudenza diventi limitazione.',
                        'path' => 'Come Sentiero, guida verso una vita basata su discernimento e responsabilità. La direzione evolutiva richiede fiducia crescente nella vita oltre la paura.',
                    ],
                ],

                'en' => [
                    'name' => 'Negative Mind',

                    'meaning' => [
                        'what_is' => 'The Negative Mind is the function of consciousness responsible for protection and risk assessment. It evaluates dangers, limits, and consequences, helping the individual preserve physical, emotional, and spiritual integrity.',
                        'usage' => 'It operates whenever boundaries must be established and potentially harmful situations evaluated. It is essential for responsible decision-making.',
                        'purpose' => 'To ensure safety, survival, and discernment, teaching respect for limits without falling into fear.',
                        'wellbeing' => 'Prudence, protection, healthy boundaries, emotional stability, and clear judgment.',
                        'imbalance' => 'Chronic fear, excessive defensiveness, mistrust, paranoia, or paralysis due to fear of failure.',
                    ],

                    'applications' => [
                        'soul' => 'When the Negative Mind operates as the Soul Number, the evolutionary work concerns the inner relationship with fear and self-protection. Growth comes from transforming fear into conscious discernment.',
                        'karma' => 'As the Karma Number, lessons involve boundaries within relationships. Evolution requires protection without isolation.',
                        'gift' => 'As a Gift, it provides a natural ability to assess risks and avoid mistakes. Balance is needed to prevent over-defensiveness.',
                        'destiny' => 'As Destiny, it reflects a consolidated pattern of caution. The task is to avoid letting prudence become limitation.',
                        'path' => 'As the Life Path, it guides toward a life based on responsibility and discernment, gradually cultivating trust beyond fear.',
                    ],
                ],
            ],

            3 => [
                'body' => 'Positive Mind',

                'it' => [
                    'name' => 'Mente Positiva',

                    'meaning' => [
                        'cos_e' => 'La Mente Positiva è la funzione espansiva della coscienza. È orientata alla visione, alla fiducia e alla capacità di riconoscere opportunità, possibilità e potenziale di crescita. Sostiene l’ottimismo, la creatività e la proiezione verso il futuro.',
                        'uso' => 'Si manifesta quando è necessario motivarsi, ispirare sé stessi e gli altri, e intraprendere nuove esperienze con apertura e fiducia.',
                        'fini' => 'Favorire espansione, crescita e fiducia nella vita. Insegna a vedere oltre i limiti immediati.',
                        'benessere' => 'Ottimismo equilibrato, entusiasmo, creatività, apertura mentale e fiducia nelle possibilità.',
                        'malessere' => 'Ingenuità, superficialità, eccessiva fiducia, tendenza a ignorare rischi o segnali di pericolo.',
                    ],

                    'applications' => [
                        'soul' => 'Quando la Mente Positiva opera come Numero dell’Anima, il lavoro evolutivo riguarda la fiducia interiore. La crescita consiste nel mantenere entusiasmo senza perdere discernimento.',
                        'karma' => 'Come Numero del Karma, indica lezioni legate all’espressione dell’ottimismo nel mondo. L’evoluzione richiede realismo nelle relazioni.',
                        'gift' => 'Come Dono, offre una naturale capacità di ispirare, motivare e creare visioni positive. Questa risorsa va bilanciata con responsabilità.',
                        'destiny' => 'Come Destino, segnala un pattern di entusiasmo e visione. Il compito evolutivo è integrare profondità e concretezza.',
                        'path' => 'Come Sentiero, guida verso una vita orientata alla crescita, all’espansione e alla fiducia, imparando a unire visione e realtà.',
                    ],
                ],

                'en' => [
                    'name' => 'Positive Mind',

                    'meaning' => [
                        'what_is' => 'The Positive Mind is the expansive function of consciousness. It is oriented toward vision, trust, and the ability to recognize opportunities, potential, and growth.',
                        'usage' => 'It manifests when motivation, inspiration, and openness to new experiences are required.',
                        'purpose' => 'To foster expansion, growth, and trust in life, teaching how to see beyond immediate limitations.',
                        'wellbeing' => 'Balanced optimism, enthusiasm, creativity, openness, and confidence in possibilities.',
                        'imbalance' => 'Naivety, superficiality, excessive optimism, and disregard for risks or warning signs.',
                    ],

                    'applications' => [
                        'soul' => 'When the Positive Mind operates as the Soul Number, evolutionary work concerns inner trust. Growth lies in sustaining enthusiasm while preserving discernment.',
                        'karma' => 'As the Karma Number, lessons involve expressing optimism realistically within the world and relationships.',
                        'gift' => 'As a Gift, it provides natural inspiration and visionary capacity, which must be grounded in responsibility.',
                        'destiny' => 'As Destiny, it reflects a consolidated pattern of vision and enthusiasm. The task is to integrate depth and realism.',
                        'path' => 'As the Life Path, it guides toward a growth-oriented life, uniting vision with practical reality.',
                    ],
                ],
            ],

            4 => [
                'body' => 'Neutral Mind',

                'it' => [
                    'name' => 'Mente Neutra',

                    'meaning' => [
                        'cos_e' => 'La Mente Neutra è la funzione di sintesi e saggezza che integra la Mente Negativa e la Mente Positiva. È il centro dell’intuizione meditativa, della visione imparziale e del giudizio equilibrato. Permette di osservare la realtà senza essere dominati da paura o entusiasmo.',
                        'uso' => 'Opera nei momenti in cui è richiesta chiarezza profonda, decisione etica e capacità di vedere oltre le reazioni emotive. È fondamentale nella meditazione e nel servizio consapevole.',
                        'fini' => 'Condurre a decisioni giuste, equilibrate e allineate al bene più alto. Insegna l’arte della presenza e dell’ascolto interiore.',
                        'benessere' => 'Chiarezza mentale, calma interiore, saggezza, capacità di mediazione e visione lucida delle situazioni.',
                        'malessere' => 'Indecisione, distacco emotivo eccessivo, rabbia repressa o incapacità di scegliere.',
                    ],

                    'applications' => [
                        'soul' => 'Quando la Mente Neutra opera come Numero dell’Anima, il lavoro evolutivo riguarda l’ascolto interiore e l’equilibrio tra impulsi opposti. La crescita passa dalla meditazione e dalla presenza consapevole.',
                        'karma' => 'Come Numero del Karma, indica lezioni legate alla giustizia e all’imparzialità nelle relazioni. L’evoluzione richiede comunicazione chiara e non reattiva.',
                        'gift' => 'Come Dono, offre naturale saggezza e capacità di mediazione. Questa risorsa va coltivata evitando il distacco emotivo.',
                        'destiny' => 'Come Destino, segnala un pattern consolidato di equilibrio e discernimento. Il compito evolutivo è mantenere il cuore aperto insieme alla mente lucida.',
                        'path' => 'Come Sentiero, guida verso una vita di servizio, consapevolezza e decisioni allineate alla verità interiore.',
                    ],
                ],

                'en' => [
                    'name' => 'Neutral Mind',

                    'meaning' => [
                        'what_is' => 'The Neutral Mind is the synthesizing and wise function that integrates the Negative and Positive Minds. It is the center of meditative intuition, impartial vision, and balanced judgment.',
                        'usage' => 'It operates when deep clarity, ethical decision-making, and freedom from emotional reactivity are required.',
                        'purpose' => 'To guide toward just, balanced decisions aligned with the higher good, teaching presence and inner listening.',
                        'wellbeing' => 'Mental clarity, inner calm, wisdom, mediation skills, and lucid perception.',
                        'imbalance' => 'Indecision, emotional detachment, suppressed anger, or inability to choose.',
                    ],

                    'applications' => [
                        'soul' => 'When the Neutral Mind operates as the Soul Number, evolutionary work focuses on inner listening and balance between opposing impulses.',
                        'karma' => 'As the Karma Number, lessons involve fairness and non-reactive communication within relationships.',
                        'gift' => 'As a Gift, it provides natural wisdom and mediation skills, requiring emotional engagement to remain alive.',
                        'destiny' => 'As Destiny, it reflects a consolidated pattern of discernment. The task is to unite clarity with compassion.',
                        'path' => 'As the Life Path, it guides toward a life of service, awareness, and truth-aligned decisions.',
                    ],
                ],
            ],

            5 => [
                'body' => 'Physical Body',

                'it' => [
                    'name' => 'Corpo fisico',

                    'meaning' => [
                        'cos_e' => 'Il Corpo Fisico è il veicolo materiale dell’esperienza umana. Rappresenta la capacità di incarnare lo spirito nella materia, sostenendo azione, disciplina e presenza nel mondo. È il fondamento che permette agli altri corpi di esprimersi concretamente.',
                        'uso' => 'Opera attraverso il lavoro, la cura del corpo, la routine e l’azione responsabile. Richiede disciplina e rispetto dei ritmi naturali.',
                        'fini' => 'Stabilizzare l’esperienza spirituale nella realtà concreta. Insegna l’equilibrio tra mondo materiale e dimensione interiore.',
                        'benessere' => 'Forza, resistenza, stabilità, affidabilità e capacità di sostenere impegni nel tempo.',
                        'malessere' => 'Affaticamento cronico, rigidità, trascuratezza del corpo, perdita di grounding e disordine nella vita quotidiana.',
                    ],

                    'applications' => [
                        'soul' => 'Quando il Corpo Fisico opera come Numero dell’Anima, il lavoro evolutivo riguarda l’incarnazione della propria verità. La crescita passa attraverso disciplina, cura del corpo e presenza.',
                        'karma' => 'Come Numero del Karma, indica lezioni legate al lavoro, alla responsabilità e al servizio nel mondo. L’evoluzione richiede equilibrio tra dovere e benessere.',
                        'gift' => 'Come Dono, offre una naturale capacità di sostenere sforzi e responsabilità. Questa risorsa va usata senza cadere nell’eccesso di sacrificio.',
                        'destiny' => 'Come Destino, segnala un pattern consolidato di lavoro e servizio. Il compito evolutivo è integrare cura di sé e spiritualità.',
                        'path' => 'Come Sentiero, guida verso una vita basata su disciplina, affidabilità e incarnazione consapevole dello spirito nella materia.',
                    ],
                ],

                'en' => [
                    'name' => 'Physical Body',

                    'meaning' => [
                        'what_is' => 'The Physical Body is the material vehicle of human experience. It represents the ability to embody spirit in matter, supporting action, discipline, and presence in the world.',
                        'usage' => 'It operates through work, bodily care, routine, and responsible action, requiring discipline and respect for natural rhythms.',
                        'purpose' => 'To stabilize spiritual experience within concrete reality, teaching balance between material life and inner dimension.',
                        'wellbeing' => 'Strength, endurance, stability, reliability, and the ability to sustain commitments over time.',
                        'imbalance' => 'Chronic fatigue, rigidity, neglect of the body, loss of grounding, and disorder in daily life.',
                    ],

                    'applications' => [
                        'soul' => 'When the Physical Body operates as the Soul Number, evolutionary work focuses on embodying inner truth through discipline and presence.',
                        'karma' => 'As the Karma Number, lessons involve work, responsibility, and service in the world, balancing duty with wellbeing.',
                        'gift' => 'As a Gift, it provides natural endurance and reliability, requiring self-care to avoid burnout.',
                        'destiny' => 'As Destiny, it reflects a consolidated pattern of service and labor. The task is to integrate self-care and spirituality.',
                        'path' => 'As the Life Path, it guides toward a disciplined, reliable life that consciously embodies spirit in matter.',
                    ],
                ],
            ],

            6 => [
                'body' => 'Arc Line',

                'it' => [
                    'name' => 'Linea d’Arco',

                    'meaning' => [
                        'cos_e' => 'La Linea d’Arco è un campo energetico che attraversa la testa come un arco e governa concentrazione, proiezione mentale e integrità. È collegata alla capacità di mantenere una direzione chiara, alla parola data e alla forza della volontà.',
                        'uso' => 'Opera quando è necessario mantenere focus, coerenza e chiarezza di intenti. È coinvolta nella comunicazione, nella leadership e nella capacità di mantenere impegni.',
                        'fini' => 'Sostenere integrità, direzione e affidabilità. Insegna a proiettare la propria volontà in modo coerente e responsabile.',
                        'benessere' => 'Chiarezza mentale, concentrazione, coerenza tra pensiero e azione, affidabilità e forza interiore.',
                        'malessere' => 'Confusione mentale, incoerenza, difficoltà a mantenere impegni, manipolazione o dispersione di energia.',
                    ],

                    'applications' => [
                        'soul' => 'Quando la Linea d’Arco opera come Numero dell’Anima, il lavoro evolutivo riguarda la chiarezza interiore e l’integrità personale. La crescita passa dal riallineare pensieri, parole e azioni.',
                        'karma' => 'Come Numero del Karma, indica lezioni legate alla comunicazione e alla responsabilità verso gli altri. L’evoluzione richiede coerenza e trasparenza.',
                        'gift' => 'Come Dono, offre una naturale capacità di concentrazione e proiezione. Questa risorsa va usata con etica e consapevolezza.',
                        'destiny' => 'Come Destino, segnala un pattern consolidato di direzione e leadership. Il compito evolutivo è evitare rigidità e controllo eccessivo.',
                        'path' => 'Come Sentiero, guida verso una vita basata su integrità, parola consapevole e chiarezza di intenti.',
                    ],
                ],

                'en' => [
                    'name' => 'Arc Line',

                    'meaning' => [
                        'what_is' => 'The Arc Line is an energetic field arching across the head, governing concentration, mental projection, and integrity. It is linked to focus, commitment, and strength of will.',
                        'usage' => 'It operates when clarity of intent, focus, and coherence are required, especially in communication and leadership.',
                        'purpose' => 'To support integrity, direction, and reliability, teaching responsible projection of will.',
                        'wellbeing' => 'Mental clarity, focus, coherence between thought and action, and inner strength.',
                        'imbalance' => 'Mental confusion, inconsistency, difficulty honoring commitments, manipulation, or scattered energy.',
                    ],

                    'applications' => [
                        'soul' => 'When the Arc Line operates as the Soul Number, evolutionary work focuses on inner clarity and personal integrity.',
                        'karma' => 'As the Karma Number, lessons involve communication and responsibility toward others, requiring transparency.',
                        'gift' => 'As a Gift, it provides natural focus and projection abilities, which must be guided by ethics.',
                        'destiny' => 'As Destiny, it reflects a consolidated pattern of direction and leadership. The task is to avoid rigidity and control.',
                        'path' => 'As the Life Path, it guides toward a life of integrity, conscious speech, and clear intention.',
                    ],
                ],
            ],

            7 => [
                'body' => 'Aura',

                'it' => [
                    'name' => 'Aura',

                    'meaning' => [
                        'cos_e' => 'L’Aura è il campo energetico che circonda il corpo fisico e gli altri corpi sottili. Funziona come uno scudo protettivo e come mezzo di interazione con l’ambiente. Riflette forza, presenza e stabilità energetica.',
                        'uso' => 'Opera nella protezione personale, nelle relazioni e nella capacità di sostenere pressioni esterne. È coinvolta nella presenza magnetica e nella sicurezza interiore.',
                        'fini' => 'Proteggere l’integrità energetica dell’individuo e permettere un’interazione equilibrata con il mondo.',
                        'benessere' => 'Forza energetica, carisma, stabilità emotiva, protezione e presenza sicura.',
                        'malessere' => 'Debolezza energetica, ipersensibilità, esaurimento, difficoltà a mantenere confini sani.',
                    ],

                    'applications' => [
                        'soul' => 'Quando l’Aura opera come Numero dell’Anima, il lavoro evolutivo riguarda il senso di sicurezza interiore. La crescita passa dal rafforzare la propria presenza senza chiudersi.',
                        'karma' => 'Come Numero del Karma, indica lezioni legate ai confini energetici nelle relazioni. L’evoluzione richiede equilibrio tra apertura e protezione.',
                        'gift' => 'Come Dono, offre una naturale forza magnetica e capacità di sostenere gli altri. Questa risorsa va accompagnata da cura energetica.',
                        'destiny' => 'Come Destino, segnala un pattern consolidato di protezione e resilienza. Il compito evolutivo è evitare l’isolamento.',
                        'path' => 'Come Sentiero, guida verso una vita basata su presenza, sicurezza interiore e protezione consapevole.',
                    ],
                ],

                'en' => [
                    'name' => 'Aura',

                    'meaning' => [
                        'what_is' => 'The Aura is the energetic field surrounding the physical body and subtle bodies. It acts as a protective shield and a medium of interaction with the environment.',
                        'usage' => 'It operates in personal protection, relationships, and the ability to withstand external pressures.',
                        'purpose' => 'To protect energetic integrity and allow balanced interaction with the world.',
                        'wellbeing' => 'Energetic strength, charisma, emotional stability, protection, and confident presence.',
                        'imbalance' => 'Energetic weakness, hypersensitivity, exhaustion, and difficulty maintaining healthy boundaries.',
                    ],

                    'applications' => [
                        'soul' => 'When the Aura operates as the Soul Number, evolutionary work focuses on inner security and presence.',
                        'karma' => 'As the Karma Number, lessons involve energetic boundaries within relationships.',
                        'gift' => 'As a Gift, it provides natural magnetic strength and support for others, requiring energetic care.',
                        'destiny' => 'As Destiny, it reflects a consolidated pattern of protection and resilience. The task is to avoid isolation.',
                        'path' => 'As the Life Path, it guides toward a life of conscious presence, inner security, and balanced protection.',
                    ],
                ],
            ],

            8 => [
                'body' => 'Pranic Body',

                'it' => [
                    'name' => 'Corpo Pranico',

                    'meaning' => [
                        'cos_e' => 'Il Corpo Pranico governa l’energia vitale (prana) che sostiene tutte le funzioni dell’essere umano. È strettamente legato al respiro, alla vitalità e alla capacità di ricaricarsi energeticamente. Quando è in equilibrio, sostiene salute, presenza e resilienza.',
                        'uso' => 'Opera attraverso la respirazione, il movimento consapevole e il rapporto con l’energia vitale. È centrale nelle pratiche yogiche e nella gestione delle risorse interiori.',
                        'fini' => 'Sostenere la vita, la vitalità e la capacità di rigenerazione. Insegna l’uso consapevole dell’energia.',
                        'benessere' => 'Energia costante, vitalità, resistenza, chiarezza e capacità di recupero.',
                        'malessere' => 'Stanchezza cronica, apatia, dipendenza da stimoli esterni, difficoltà respiratorie o energetiche.',
                    ],

                    'applications' => [
                        'soul' => 'Quando il Corpo Pranico opera come Numero dell’Anima, il lavoro evolutivo riguarda il rapporto con la propria energia vitale. La crescita passa dal prendersi cura del respiro e del ritmo di vita.',
                        'karma' => 'Come Numero del Karma, indica lezioni legate allo scambio energetico con l’ambiente e con gli altri. L’evoluzione richiede equilibrio tra dare e ricevere.',
                        'gift' => 'Come Dono, offre una naturale vitalità e capacità di rigenerazione. Questa risorsa va protetta da dispersione eccessiva.',
                        'destiny' => 'Come Destino, segnala un pattern consolidato di lavoro sull’energia e sul respiro. Il compito evolutivo è mantenere costanza e disciplina.',
                        'path' => 'Come Sentiero, guida verso una vita fondata sulla gestione consapevole dell’energia, del respiro e della presenza vitale.',
                    ],
                ],

                'en' => [
                    'name' => 'Pranic Body',

                    'meaning' => [
                        'what_is' => 'The Pranic Body governs life force energy (prana), sustaining all human functions. It is closely linked to breath, vitality, and the ability to recharge energetically.',
                        'usage' => 'It operates through breathing, conscious movement, and energy awareness, playing a central role in yogic practices.',
                        'purpose' => 'To sustain life, vitality, and regenerative capacity, teaching conscious energy management.',
                        'wellbeing' => 'Consistent energy, vitality, resilience, clarity, and recovery capacity.',
                        'imbalance' => 'Chronic fatigue, apathy, dependence on external stimulation, and energetic or respiratory issues.',
                    ],

                    'applications' => [
                        'soul' => 'When the Pranic Body operates as the Soul Number, evolutionary work focuses on the relationship with life energy and breath.',
                        'karma' => 'As the Karma Number, lessons involve energetic exchange with the environment and others.',
                        'gift' => 'As a Gift, it provides natural vitality and regenerative power, requiring protection from over-dispersion.',
                        'destiny' => 'As Destiny, it reflects a consolidated pattern of energy and breath work. The task is consistency and discipline.',
                        'path' => 'As the Life Path, it guides toward conscious management of energy, breath, and vital presence.',
                    ],
                ],
            ],

            9 => [
                'body' => 'Subtle Body',

                'it' => [
                    'name' => 'Corpo Sottile',

                    'meaning' => [
                        'cos_e' => 'Il Corpo Sottile è la funzione della coscienza che permette di percepire il non visibile, cogliere il significato profondo delle esperienze e connettersi al mistero dell’esistenza. Governa intuizione, sensibilità spirituale e percezione raffinata.',
                        'uso' => 'Opera nei momenti di intuizione profonda, comprensione silenziosa e connessione con dimensioni non ordinarie della realtà.',
                        'fini' => 'Favorire comprensione sottile, coraggio spirituale e fiducia nell’intuizione. Insegna a riconoscere il senso oltre l’apparenza.',
                        'benessere' => 'Intuizione chiara, sensibilità equilibrata, profondità spirituale e coraggio interiore.',
                        'malessere' => 'Iper-sensibilità, confusione intuitiva, fuga dalla realtà o disconnessione spirituale.',
                    ],

                    'applications' => [
                        'soul' => 'Quando il Corpo Sottile opera come Numero dell’Anima, il lavoro evolutivo riguarda la fiducia nella propria intuizione. La crescita passa dal radicare la sensibilità nella presenza.',
                        'karma' => 'Come Numero del Karma, indica lezioni legate alla percezione degli altri e del mondo sottile. L’evoluzione richiede discernimento e radicamento.',
                        'gift' => 'Come Dono, offre una naturale capacità intuitiva e percettiva. Questa risorsa va integrata con concretezza.',
                        'destiny' => 'Come Destino, segnala un pattern consolidato di sensibilità spirituale. Il compito evolutivo è evitare la fuga e restare incarnati.',
                        'path' => 'Come Sentiero, guida verso una vita orientata alla comprensione profonda, al coraggio spirituale e alla fedeltà all’intuizione.',
                    ],
                ],

                'en' => [
                    'name' => 'Subtle Body',

                    'meaning' => [
                        'what_is' => 'The Subtle Body is the function of consciousness that perceives the unseen, grasps deeper meaning, and connects to the mystery of existence.',
                        'usage' => 'It operates in moments of deep intuition, silent understanding, and connection with non-ordinary dimensions of reality.',
                        'purpose' => 'To foster subtle understanding, spiritual courage, and trust in intuition.',
                        'wellbeing' => 'Clear intuition, balanced sensitivity, spiritual depth, and inner courage.',
                        'imbalance' => 'Over-sensitivity, intuitive confusion, escapism, or spiritual disconnection.',
                    ],

                    'applications' => [
                        'soul' => 'When the Subtle Body operates as the Soul Number, evolutionary work centers on trusting intuition while remaining grounded.',
                        'karma' => 'As the Karma Number, lessons involve perceiving others and subtle realities with discernment.',
                        'gift' => 'As a Gift, it provides natural intuitive and perceptive abilities, requiring integration with practicality.',
                        'destiny' => 'As Destiny, it reflects a consolidated pattern of spiritual sensitivity. The task is to stay embodied.',
                        'path' => 'As the Life Path, it guides toward a life of deep understanding, spiritual courage, and intuitive fidelity.',
                    ],
                ],
            ],

            10 => [
                'body' => 'Radiant Body',
            
                'it' => [
                    'name' => 'Corpo Radiante',
            
                    'meaning' => [
                        'cos_e' => 'Il Corpo Radiante è la funzione della coscienza che esprime presenza, coraggio e autorità naturale. Rappresenta la capacità di irradiare sicurezza, ispirazione e dignità, influenzando l’ambiente attraverso la sola presenza.',
                        'uso' => 'Opera nella leadership, nel servizio e nelle situazioni che richiedono coraggio e responsabilità. Si manifesta quando una persona guida con l’esempio piuttosto che con il controllo.',
                        'fini' => 'Ispirare gli altri attraverso presenza autentica e integrità. Insegna l’uso consapevole del potere personale.',
                        'benessere' => 'Presenza magnetica, fiducia, coraggio, chiarezza e capacità di guidare senza imposizione.',
                        'malessere' => 'Insicurezza, paura di esporsi, abuso di potere o ego eccessivo mascherato da autorità.',
                    ],
            
                    'applications' => [
                        'soul' => 'Quando il Corpo Radiante opera come Numero dell’Anima, il lavoro evolutivo riguarda il rapporto con il proprio valore e la propria presenza. La crescita passa dal riconoscere la propria luce senza arroganza.',
                        'karma' => 'Come Numero del Karma, indica lezioni legate all’esercizio dell’autorità nel mondo. L’evoluzione richiede leadership etica e servizio.',
                        'gift' => 'Come Dono, offre una naturale capacità di ispirare e guidare. Questa risorsa va usata con umiltà e responsabilità.',
                        'destiny' => 'Come Destino, segnala un pattern consolidato di esposizione e influenza. Il compito evolutivo è mantenere autenticità e cuore aperto.',
                        'path' => 'Come Sentiero, guida verso una vita di coraggio, presenza e leadership consapevole al servizio del bene comune.',
                    ],
                ],
            
                'en' => [
                    'name' => 'Radiant Body',
            
                    'meaning' => [
                        'what_is' => 'The Radiant Body is the function of consciousness that expresses presence, courage, and natural authority. It represents the ability to radiate confidence, inspiration, and dignity.',
                        'usage' => 'It operates in leadership, service, and situations requiring courage and responsibility, guiding by example rather than control.',
                        'purpose' => 'To inspire others through authentic presence and integrity, teaching conscious use of personal power.',
                        'wellbeing' => 'Magnetic presence, confidence, courage, clarity, and the ability to lead without force.',
                        'imbalance' => 'Insecurity, fear of visibility, misuse of power, or ego-driven authority.',
                    ],
            
                    'applications' => [
                        'soul' => 'When the Radiant Body operates as the Soul Number, evolutionary work focuses on self-worth and authentic presence.',
                        'karma' => 'As the Karma Number, lessons involve ethical leadership and responsibility in the world.',
                        'gift' => 'As a Gift, it provides natural inspirational leadership, requiring humility and accountability.',
                        'destiny' => 'As Destiny, it reflects a consolidated pattern of influence. The task is to remain authentic and heart-centered.',
                        'path' => 'As the Life Path, it guides toward a life of courage, presence, and conscious leadership in service of the greater good.',
                    ],
                ],
            ],

            11 => [
                'body' => 'Magnetic Field',
            
                'it' => [
                    'name' => 'Campo Magnetico',
            
                    'meaning' => [
                        'cos_e' => 'Il Campo Magnetico rappresenta l’integrazione e la padronanza dei Dieci Corpi. È la funzione della coscienza che unifica tutte le dimensioni dell’essere, permettendo stabilità, armonia e presenza completa.',
                        'uso' => 'Opera quando l’individuo è chiamato a mantenere equilibrio globale tra mente, corpo e spirito. Si manifesta nella capacità di attrarre ciò che è allineato e di mantenere centratura.',
                        'fini' => 'Favorire l’armonia complessiva e la padronanza di sé. Insegna l’unità e l’integrazione delle parti.',
                        'benessere' => 'Equilibrio globale, stabilità, coerenza interiore, capacità di attrazione consapevole.',
                        'malessere' => 'Disallineamento, dispersione, instabilità emotiva e perdita di centratura.',
                    ],
            
                    'applications' => [
                        'soul' => 'Quando il Campo Magnetico opera come Numero dell’Anima, il lavoro evolutivo riguarda l’integrazione dell’identità. La crescita passa dal riconoscere e armonizzare tutte le parti di sé.',
                        'karma' => 'Come Numero del Karma, indica lezioni legate all’equilibrio nelle relazioni e nelle dinamiche collettive.',
                        'gift' => 'Come Dono, offre una naturale capacità di integrazione e centratura. Questa risorsa va coltivata con consapevolezza.',
                        'destiny' => 'Come Destino, segnala un pattern consolidato di armonizzazione. Il compito evolutivo è mantenere flessibilità e presenza.',
                        'path' => 'Come Sentiero, guida verso una vita di padronanza, integrazione e servizio equilibrato, incarnando l’unità dei Dieci Corpi.',
                    ],
                ],
            
                'en' => [
                    'name' => 'Magnetic Field',
            
                    'meaning' => [
                        'what_is' => 'The Magnetic Field represents the integration and mastery of the Ten Bodies. It is the function of consciousness that unifies all dimensions of being, allowing stability, harmony, and full presence.',
                        'usage' => 'It operates when global balance between mind, body, and spirit is required, supporting centered attraction and coherence.',
                        'purpose' => 'To foster overall harmony and self-mastery, teaching unity and integration.',
                        'wellbeing' => 'Global balance, stability, inner coherence, and conscious attraction.',
                        'imbalance' => 'Disalignment, dispersion, emotional instability, and loss of center.',
                    ],
            
                    'applications' => [
                        'soul' => 'When the Magnetic Field operates as the Soul Number, evolutionary work focuses on integrating identity and harmonizing all inner aspects.',
                        'karma' => 'As the Karma Number, lessons involve balance within relationships and collective dynamics.',
                        'gift' => 'As a Gift, it provides natural integration and centering abilities, requiring conscious cultivation.',
                        'destiny' => 'As Destiny, it reflects a consolidated pattern of harmonization. The task is to maintain flexibility and presence.',
                        'path' => 'As the Life Path, it guides toward a life of mastery, integration, and balanced service, embodying the unity of the Ten Bodies.',
                    ],
                ],
            ],            

        ];

        foreach ($data as $number => $content) {
            foreach (['it', 'en'] as $locale) {
                TantricMeaning::create([
                    'number'       => $number,
                    'locale'       => $locale,
                    'name'         => $content[$locale]['name'],
                    'body'         => $content['body'],
                    'meaning'      => $content[$locale]['meaning'],
                    'applications' => $content[$locale]['applications'],
                ]);
            }
        }
    }
}
