<?php

namespace Database\Seeders;

use App\Models\Shop\Plan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plans = [
            [
                'slug' => 'free',
                'it' => 'Gratuito',
                'en' => 'Free',
                'desc_it' => 'Ideale per chi inizia: esplora le funzioni base di Astro e gestisci i tuoi primi contatti senza costi.',
                'desc_en' => 'Perfect for beginners: explore Astro basics and manage your first contacts at no cost.',
                'max_contacts' => 3,
                'can_write_diary' => false,
                'price' => 0.00,
                'tax' => 0.00,
            ],
            [
                'slug' => 'basic',
                'it' => 'Base',
                'en' => 'Basic',
                'desc_it' => 'Per piccoli professionisti: aumenta il numero di contatti e sblocca la scrittura nel diario olistico.',
                'desc_en' => 'For small professionals: increase your contact limit and unlock the holistic diary writing feature.',
                'max_contacts' => 10,
                'can_write_diary' => true,
                'price' => 1.20,
                'tax' => 22.00, // Esempio IVA 22%
            ],
            [
                'slug' => 'pro',
                'it' => 'Professionale',
                'en' => 'Professional',
                'desc_it' => 'Controllo avanzato: gestisci un numero elevato di clienti con tutti i vantaggi della piattaforma Astro.',
                'desc_en' => 'Advanced control: manage a large number of clients with all the benefits of the Astro platform.',
                'max_contacts' => 50,
                'can_write_diary' => true,
                'price' => 3.40,
                'tax' => 22.00,
            ],
            [
                'slug' => 'premium',
                'it' => 'Premium',
                'en' => 'Premium',
                'desc_it' => 'Senza limiti: la soluzione definitiva per centri olistici e professionisti con grandi volumi di utenza.',
                'desc_en' => 'Limitless: the ultimate solution for holistic centers and professionals with high client volumes.',
                'max_contacts' => 9999, // Gestito come illimitato nel codice
                'can_write_diary' => true,
                'price' => 19.90,
                'tax' => 22.00,
            ],
        ];

        foreach ($plans as $planData) {
            Plan::create($planData);
        }
    }
}
