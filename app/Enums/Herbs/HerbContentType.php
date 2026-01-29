<?php

namespace App\Enums\Herbs;

enum HerbContentType: string
{
    case HISTORY               = 'history';
    case BOTANY                = 'botany';
    case SCIENTIFIC_STUDIES    = 'scientific_studies';
    case BENEFITS              = 'benefits';
    case USAGE_METHODS         = 'usage_methods';
    case CHEMICAL_COMPOSITION  = 'chemical_composition';
    case NUTRITIONAL_INFO      = 'nutritional_info';
    case TRADITIONAL_MEDICINE  = 'traditional_medicine';
    case FOLK_BELIEFS          = 'folk_beliefs';
    case ESOTERIC_USE          = 'esoteric_use';
    case RELIGIOUS_RITUALS     = 'religious_rituals';
    case WARNINGS              = 'warnings';
}
