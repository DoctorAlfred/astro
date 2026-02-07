<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Numbers\TantricYearlyCycle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TantricYearlyCycleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cycles = [

            /** ********** START MOD *********** **/
            // 1 — Soul Body
            [
                'number' => 1,
                'locale' => 'it',
                'energy' => 'Un anno dedicato all’identità profonda e al senso della vita. L’energia del Corpo dell’Anima spinge a rivedere valori, direzione e autenticità.',
                'advice' => 'Ascolta la tua voce interiore prima di agire. Le scelte fatte in coerenza con la tua verità avranno effetti duraturi.',
            ],
            [
                'number' => 1,
                'locale' => 'en',
                'energy' => 'A year focused on inner identity and life purpose. The Soul Body energy calls for authenticity and realignment.',
                'advice' => 'Listen to your inner voice before acting. Choices aligned with your truth will have lasting effects.',
            ],

            // 2 — Negative Mind
            [
                'number' => 2,
                'locale' => 'it',
                'energy' => 'Un anno di protezione e discernimento. La Mente Negativa invita a valutare con attenzione rischi, limiti e confini.',
                'advice' => 'Usa la prudenza come strumento, non come prigione. Trasforma la paura in chiarezza.',
            ],
            [
                'number' => 2,
                'locale' => 'en',
                'energy' => 'A year of protection and discernment. The Negative Mind highlights risks, limits, and boundaries.',
                'advice' => 'Use caution as a tool, not a cage. Transform fear into clarity.',
            ],

            // 3 — Positive Mind
            [
                'number' => 3,
                'locale' => 'it',
                'energy' => 'Un anno di espansione, fiducia e nuove possibilità. La Mente Positiva favorisce crescita e visione.',
                'advice' => 'Coltiva entusiasmo senza perdere realismo. Integra ottimismo e responsabilità.',
            ],
            [
                'number' => 3,
                'locale' => 'en',
                'energy' => 'A year of expansion, trust, and new opportunities. The Positive Mind supports growth and vision.',
                'advice' => 'Cultivate enthusiasm without losing realism. Balance optimism with responsibility.',
            ],

            // 4 — Neutral Mind
            [
                'number' => 4,
                'locale' => 'it',
                'energy' => 'Un anno di equilibrio e saggezza. La Mente Neutra invita a decisioni ponderate e visione imparziale.',
                'advice' => 'Fermati prima di reagire. La chiarezza nasce dall’ascolto profondo.',
            ],
            [
                'number' => 4,
                'locale' => 'en',
                'energy' => 'A year of balance and wisdom. The Neutral Mind encourages thoughtful and impartial decisions.',
                'advice' => 'Pause before reacting. Clarity arises from deep listening.',
            ],

            // 5 — Physical Body
            [
                'number' => 5,
                'locale' => 'it',
                'energy' => 'Un anno di lavoro concreto, disciplina e incarnazione. Il Corpo Fisico chiede stabilità e presenza.',
                'advice' => 'Prenditi cura del corpo e delle routine. La costanza è la chiave.',
            ],
            [
                'number' => 5,
                'locale' => 'en',
                'energy' => 'A year of practical work, discipline, and embodiment. The Physical Body calls for stability.',
                'advice' => 'Care for your body and routines. Consistency is the key.',
            ],

            // 6 — Arc Line
            [
                'number' => 6,
                'locale' => 'it',
                'energy' => 'Un anno di grande proiezione e protezione. La Linea d’Arco richiede integrità, chiarezza e coerenza.',
                'advice' => 'Mantieni coerenza tra pensieri, parole e azioni. La tua parola ha potere.',
            ],
            [
                'number' => 6,
                'locale' => 'en',
                'energy' => 'A year of strong projection and protection. The Arc Line calls for integrity and clarity.',
                'advice' => 'Maintain coherence between thoughts, words, and actions. Your word carries power.',
            ],

            // 7 — Aura
            [
                'number' => 7,
                'locale' => 'it',
                'energy' => 'Un anno di rafforzamento energetico e presenza. L’Aura chiede protezione e centratura.',
                'advice' => 'Proteggi la tua energia e scegli con attenzione dove investirla.',
            ],
            [
                'number' => 7,
                'locale' => 'en',
                'energy' => 'A year of energetic strengthening and presence. The Aura calls for protection and centering.',
                'advice' => 'Protect your energy and choose carefully where to invest it.',
            ],

            // 8 — Pranic Body
            [
                'number' => 8,
                'locale' => 'it',
                'energy' => 'Un anno di vitalità e gestione dell’energia. Il Corpo Pranico enfatizza respiro e rigenerazione.',
                'advice' => 'Ascolta il tuo ritmo. Cura il respiro e l’energia quotidiana.',
            ],
            [
                'number' => 8,
                'locale' => 'en',
                'energy' => 'A year of vitality and energy management. The Pranic Body emphasizes breath and regeneration.',
                'advice' => 'Honor your rhythm. Care for breath and daily energy.',
            ],

            // 9 — Subtle Body
            [
                'number' => 9,
                'locale' => 'it',
                'energy' => 'Un anno di intuizione e comprensione profonda. Il Corpo Sottile apre alla percezione del significato.',
                'advice' => 'Fidati dell’intuizione restando ben radicato nella realtà.',
            ],
            [
                'number' => 9,
                'locale' => 'en',
                'energy' => 'A year of intuition and deep understanding. The Subtle Body enhances perception of meaning.',
                'advice' => 'Trust intuition while staying grounded in reality.',
            ],

            // 10 — Radiant Body
            [
                'number' => 10,
                'locale' => 'it',
                'energy' => 'Un anno di coraggio e leadership. Il Corpo Radiante amplifica presenza e influenza.',
                'advice' => 'Guida con l’esempio, non con il controllo. La tua presenza ispira.',
            ],
            [
                'number' => 10,
                'locale' => 'en',
                'energy' => 'A year of courage and leadership. The Radiant Body amplifies presence and influence.',
                'advice' => 'Lead by example, not control. Your presence inspires.',
            ],

            // 11 — Magnetic Field
            [
                'number' => 11,
                'locale' => 'it',
                'energy' => 'Un anno di integrazione e padronanza. Il Campo Magnetico richiede armonia globale.',
                'advice' => 'Integra tutte le parti di te. L’equilibrio è la vera forza.',
            ],
            [
                'number' => 11,
                'locale' => 'en',
                'energy' => 'A year of integration and mastery. The Magnetic Field calls for global harmony.',
                'advice' => 'Integrate all aspects of yourself. Balance is true strength.',
            ],
            /** ********** ENDMOD *********** **/
        ];

        foreach ($cycles as $cycle) {
            TantricYearlyCycle::create($cycle);
        }
    }
}
