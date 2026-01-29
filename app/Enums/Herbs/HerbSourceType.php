<?php

namespace App\Enums\Herbs;

enum HerbSourceType: string
{
    case SCIENTIFIC   = 'scientific';
    case TRADITIONAL  = 'traditional';
    case RELIGIOUS    = 'religious';
    case ESOTERIC     = 'esoteric';
    case FOLK         = 'folk';
    case MIXED        = 'mixed';
}
