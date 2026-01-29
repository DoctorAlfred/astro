<?php

namespace App\Enums\Herbs;

enum HerbEvidenceLevel: string
{
    case HIGH   = 'high';
    case MEDIUM = 'medium';
    case LOW    = 'low';
    case NONE   = 'none';
}