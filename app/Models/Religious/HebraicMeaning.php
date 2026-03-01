<?php

namespace App\Models\Religious;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class HebraicMeaning extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasApiTokens, HasFactory, HasUuids, Notifiable, SoftDeletes;
    /** @var int $incrementing */
    public $incrementing = false;
    /** @var string $keyType */
    protected $keyType = 'string';
    /** @var string $table */
    protected $table = 'hebraic_meanings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'number',
        'letter',
        'is_primary',
        'is_final',
        'parent_letter',
        'gematria_standard',
        'gematria_extended',
        'pronunciation',
        'proto_origin',
        'historical_development',
        'classification_sefer_yetzirah', // mother | double | simple
        'traditional_symbolism',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string> The Eloquent casts applied to attributes
     */
    protected $casts = [
        'is_primary' => 'boolean',
        'is_final' => 'boolean',

        'pronunciation' => 'array',
        'proto_origin' => 'array',
        'historical_development' => 'array',
        'classification_sefer_yetzirah' => 'array',
        'traditional_symbolism' => 'array',

        'created_at' => "datetime:d-m-Y H:i",
        'updated_at' => "datetime:d-m-Y H:i",
        'deleted_at' => "datetime:d-m-Y H:i",
    ];

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /** @var string NAME_MAP */
    protected const NAME_MAP = [
        'א' => ['it' => 'Aleph', 'en' => 'Aleph', 'la' => 'Aleph', 'he' => 'אָלֶף'],
        'ב' => ['it' => 'Bet', 'en' => 'Bet', 'la' => 'Beth', 'he' => 'בֵּית'],
        'ג' => ['it' => 'Gimel', 'en' => 'Gimel', 'la' => 'Gimel', 'he' => 'גִּימֶל'],
        'ד' => ['it' => 'Dalet', 'en' => 'Dalet', 'la' => 'Daleth', 'he' => 'דָּלֶת'],
        'ה' => ['it' => 'He', 'en' => 'He', 'la' => 'He', 'he' => 'הֵא'],
        'ו' => ['it' => 'Vav', 'en' => 'Vav', 'la' => 'Vau', 'he' => 'וָו'],
        'ז' => ['it' => 'Zayin', 'en' => 'Zayin', 'la' => 'Zain', 'he' => 'זַיִן'],
        'ח' => ['it' => 'Het', 'en' => 'Het', 'la' => 'Heth', 'he' => 'חֵית'],
        'ט' => ['it' => 'Tet', 'en' => 'Tet', 'la' => 'Teth', 'he' => 'טֵית'],
        'י' => ['it' => 'Yod', 'en' => 'Yod', 'la' => 'Iod', 'he' => 'יוֹד'],
        'כ' => ['it' => 'Kaf', 'en' => 'Kaf', 'la' => 'Caph', 'he' => 'כַּף'],
        'ל' => ['it' => 'Lamed', 'en' => 'Lamed', 'la' => 'Lamed', 'he' => 'לָמֶד'],
        'מ' => ['it' => 'Mem', 'en' => 'Mem', 'la' => 'Mem', 'he' => 'מֵם'],
        'נ' => ['it' => 'Nun', 'en' => 'Nun', 'la' => 'Nun', 'he' => 'נוּן'],
        'ס' => ['it' => 'Samekh', 'en' => 'Samekh', 'la' => 'Samech', 'he' => 'סָמֶךְ'],
        'ע' => ['it' => 'Ayin', 'en' => 'Ayin', 'la' => 'Ain', 'he' => 'עַיִן'],
        'פ' => ['it' => 'Pe', 'en' => 'Pe', 'la' => 'Pe', 'he' => 'פֵּא'],
        'צ' => ['it' => 'Tzadi', 'en' => 'Tzadi', 'la' => 'Tsade', 'he' => 'צָדִי'],
        'ק' => ['it' => 'Qof', 'en' => 'Qof', 'la' => 'Qoph', 'he' => 'קוֹף'],
        'ר' => ['it' => 'Resh', 'en' => 'Resh', 'la' => 'Res', 'he' => 'רֵישׁ'],
        'ש' => ['it' => 'Shin', 'en' => 'Shin', 'la' => 'Sin', 'he' => 'שִׁין'],
        'ת' => ['it' => 'Tav', 'en' => 'Tav', 'la' => 'Tav', 'he' => 'תָּו'],
        'ך' => ['it' => 'Kaf Sofit', 'en' => 'Final Kaf', 'la' => 'Caph finalis', 'he' => 'ך'],
        'ם' => ['it' => 'Mem Sofit', 'en' => 'Final Mem', 'la' => 'Mem finalis', 'he' => 'ם'],
        'ן' => ['it' => 'Nun Sofit', 'en' => 'Final Nun', 'la' => 'Nun finalis', 'he' => 'ן'],
        'ף' => ['it' => 'Pe Sofit', 'en' => 'Final Pe', 'la' => 'Pe finalis', 'he' => 'ף'],
        'ץ' => ['it' => 'Tsadi Sofit', 'en' => 'Final Tsadi', 'la' => 'Tsade finalis', 'he' => 'ץ'],
    ];

    /** @var string ELEMENT_MAP */
    protected const ELEMENT_MAP = [
        'א' => [
            'cosmic' => ['it' => 'Aria', 'en' => 'Air', 'la' => 'Aer', 'he' => 'אוויר'],
            'objects' => ['it' => 'Toro', 'en' => 'Ox', 'la' => 'Bos', 'he' => 'שור'],
        ],
        'ב' => [
            'cosmic' => ['it' => 'Terra', 'en' => 'Earth', 'la' => 'Terra', 'he' => 'אדמה'],
            'objects' => ['it' => 'Casa', 'en' => 'House', 'la' => 'Domus', 'he' => 'בית'],
        ],
        'ג' => [
            'cosmic' => ['it' => 'Movimento', 'en' => 'Movement', 'la' => 'Motus', 'he' => 'תנועה'],
            'objects' => ['it' => 'Cammello', 'en' => 'Camel', 'la' => 'Camelus', 'he' => 'גמל'],
        ],
        'ד' => [
            'cosmic' => ['it' => 'Passaggio', 'en' => 'Transition', 'la' => 'Transitus', 'he' => 'מעבר'],
            'objects' => ['it' => 'Porta', 'en' => 'Door', 'la' => 'Porta', 'he' => 'דלת'],
        ],
        'ה' => [
            'cosmic' => ['it' => 'Respiro', 'en' => 'Breath', 'la' => 'Spiritus', 'he' => 'נשימה'],
            'objects' => ['it' => 'Finestra', 'en' => 'Window', 'la' => 'Fenestra', 'he' => 'חלון'],
        ],
        'ו' => [
            'cosmic' => ['it' => 'Connessione', 'en' => 'Connection', 'la' => 'Coniunctio', 'he' => 'חיבור'],
            'objects' => ['it' => 'Chiodo', 'en' => 'Hook', 'la' => 'Hamulus', 'he' => 'וו'],
        ],
        'ז' => [
            'cosmic' => ['it' => 'Energia', 'en' => 'Energy', 'la' => 'Vis', 'he' => 'כוח'],
            'objects' => ['it' => 'Arma', 'en' => 'Weapon', 'la' => 'Gladius', 'he' => 'חרב'],
        ],
        'ח' => [
            'cosmic' => ['it' => 'Vita', 'en' => 'Life', 'la' => 'Vita', 'he' => 'חיים'],
            'objects' => ['it' => 'Recinto', 'en' => 'Enclosure', 'la' => 'Clausura', 'he' => 'חצר'],
        ],
        'ט' => [
            'cosmic' => ['it' => 'Forza interiore', 'en' => 'Inner force', 'la' => 'Vis interior', 'he' => 'כוח פנימי'],
            'objects' => ['it' => 'Serpente', 'en' => 'Serpent', 'la' => 'Serpens', 'he' => 'נחש'],
        ],
        'י' => [
            'cosmic' => ['it' => 'Origine', 'en' => 'Origin', 'la' => 'Origo', 'he' => 'מקור'],
            'objects' => ['it' => 'Mano', 'en' => 'Hand', 'la' => 'Manus', 'he' => 'יד'],
        ],
        'כ' => [
            'cosmic' => ['it' => 'Potere', 'en' => 'Power', 'la' => 'Potentia', 'he' => 'כוח'],
            'objects' => ['it' => 'Palmo', 'en' => 'Palm', 'la' => 'Palma', 'he' => 'כף'],
        ],
        'ל' => [
            'cosmic' => ['it' => 'Apprendimento', 'en' => 'Learning', 'la' => 'Doctrina', 'he' => 'למידה'],
            'objects' => ['it' => 'Bastone', 'en' => 'Staff', 'la' => 'Baculum', 'he' => 'מקל'],
        ],
        'מ' => [
            'cosmic' => ['it' => 'Acqua', 'en' => 'Water', 'la' => 'Aqua', 'he' => 'מים'],
            'objects' => ['it' => 'Acqua', 'en' => 'Water', 'la' => 'Aqua', 'he' => 'מים'],
        ],
        'נ' => [
            'cosmic' => ['it' => 'Continuità', 'en' => 'Continuity', 'la' => 'Continuatio', 'he' => 'המשכיות'],
            'objects' => ['it' => 'Pesce', 'en' => 'Fish', 'la' => 'Piscis', 'he' => 'דג'],
        ],
        'ס' => [
            'cosmic' => ['it' => 'Protezione', 'en' => 'Protection', 'la' => 'Protectio', 'he' => 'הגנה'],
            'objects' => ['it' => 'Supporto', 'en' => 'Support', 'la' => 'Fulcrum', 'he' => 'סמך'],
        ],
        'ע' => [
            'cosmic' => ['it' => 'Visione', 'en' => 'Vision', 'la' => 'Visio', 'he' => 'ראייה'],
            'objects' => ['it' => 'Occhio', 'en' => 'Eye', 'la' => 'Oculus', 'he' => 'עין'],
        ],
        'פ' => [
            'cosmic' => ['it' => 'Espressione', 'en' => 'Expression', 'la' => 'Expressio', 'he' => 'ביטוי'],
            'objects' => ['it' => 'Bocca', 'en' => 'Mouth', 'la' => 'Os', 'he' => 'פה'],
        ],
        'צ' => [
            'cosmic' => ['it' => 'Giustizia', 'en' => 'Justice', 'la' => 'Iustitia', 'he' => 'צדק'],
            'objects' => ['it' => 'Amo', 'en' => 'Hook', 'la' => 'Hamulus', 'he' => 'קרס'],
        ],
        'ק' => [
            'cosmic' => ['it' => 'Ciclo', 'en' => 'Cycle', 'la' => 'Circulus', 'he' => 'מחזור'],
            'objects' => ['it' => 'Ago', 'en' => 'Needle', 'la' => 'Acus', 'he' => 'מחט'],
        ],
        'ר' => [
            'cosmic' => ['it' => 'Leadership', 'en' => 'Leadership', 'la' => 'Dux', 'he' => 'מנהיגות'],
            'objects' => ['it' => 'Testa', 'en' => 'Head', 'la' => 'Caput', 'he' => 'ראש'],
        ],
        'ש' => [
            'cosmic' => ['it' => 'Trasformazione', 'en' => 'Transformation', 'la' => 'Transformatio', 'he' => 'שינוי'],
            'objects' => ['it' => 'Denti', 'en' => 'Teeth', 'la' => 'Dentes', 'he' => 'שן'],
        ],
        'ת' => [
            'cosmic' => ['it' => 'Compimento', 'en' => 'Completion', 'la' => 'Perfectio', 'he' => 'השלמה'],
            'objects' => ['it' => 'Segno', 'en' => 'Mark', 'la' => 'Signum', 'he' => 'תו'],
        ],
        // Final
        'ך' => ['cosmic' => ['it' => 'Potenzialità espansa', 'en' => 'Expanded potential', 'la' => 'Potentia extensa', 'he' => 'פוטנציאל מורחב'], 'objects' => ['it' => 'Forma finale di Kaf', 'en' => 'Final form of Kaf', 'la' => 'Forma finalis Caph', 'he' => 'צורה סופית של כף']],
        'ם' => ['cosmic' => ['it' => 'Acqua profonda', 'en' => 'Deep water', 'la' => 'Aqua profunda', 'he' => 'מים עמוקים'], 'objects' => ['it' => 'Forma finale di Mem', 'en' => 'Final form of Mem', 'la' => 'Forma finalis Mem', 'he' => 'צורה סופית של מם']],
        'ן' => ['cosmic' => ['it' => 'Continuità espansa', 'en' => 'Expanded continuity', 'la' => 'Continuatio extensa', 'he' => 'המשכיות מורחבת'], 'objects' => ['it' => 'Forma finale di Nun', 'en' => 'Final form of Nun', 'la' => 'Forma finalis Nun', 'he' => 'צורה סופית של נון']],
        'ף' => ['cosmic' => ['it' => 'Espressione conclusiva', 'en' => 'Final expression', 'la' => 'Expressio finalis', 'he' => 'ביטוי סופי'], 'objects' => ['it' => 'Forma finale di Pe', 'en' => 'Final form of Pe', 'la' => 'Forma finalis Pe', 'he' => 'צורה סופית של פה']],
        'ץ' => ['cosmic' => ['it' => 'Giustizia definitiva', 'en' => 'Definitive justice', 'la' => 'Iustitia definitiva', 'he' => 'צדק סופי'], 'objects' => ['it' => 'Forma finale di Tsadi', 'en' => 'Final form of Tsadi', 'la' => 'Forma finalis Tsade', 'he' => 'צורה סופית של צדי']],
    ];

    /**
     * Get Name Attribute function
     *
     * @return array|null
     */
    public function getNameAttribute(): ?array
    {
        return self::NAME_MAP[$this->letter] ?? null;
    }

    /**
     * Get Element Attribute function
     *
     * @return array|null
     */
    public function getElementAttribute(): ?array
    {
        return self::ELEMENT_MAP[$this->letter] ?? null;
    }

    /*
    |--------------------------------------------------------------------------
    | API SERIALIZATION
    |--------------------------------------------------------------------------
    */

    /**
     * to Api Array By Language function
     *
     * @param string $language
     * @return array
     */
    public function toApiArrayByLanguage(string $language = 'it'): array
    {
        $language = strtolower($language);
        $data = $this->toArray();

        $data['name'] = $this->name[$language] ?? $this->name['it'] ?? null;

        foreach (['pronunciation', 'proto_origin', 'historical_development', 'traditional_symbolism', 'classification_sefer_yetzirah'] as $field) {
            if (isset($data[$field]) && is_array($data[$field])) {
                $data[$field] = $data[$field][$language] ?? $data[$field]['it'] ?? null;
            }
        }

        if ($this->element) {
            $data['element'] = [
                'cosmic' => $this->element['cosmic'][$language] ?? null,
                'objects' => $this->element['objects'][$language] ?? null,
            ];
        }

        return $data;
    }

    /*
    |--------------------------------------------------------------------------
    | NUMEROLOGICAL ENGINE
    |--------------------------------------------------------------------------
    */

    /**
     * Get Numerological Structure function
     *
     * @return array
     */
    public function getNumerologicalStructure(bool $useExtended = false): array
    {
        $value = $useExtended && $this->gematria_extended
            ? $this->gematria_extended
            : $this->gematria_standard;

        $reduced = $this->digitalRoot($value);

        return [
            'base_value' => $value,
            'reduced_value' => $reduced,
            'magnitude_level' => $this->getMagnitudeLevel($value),
            'parity' => $value % 2 === 0 ? 'even' : 'odd',
            'polarity' => $value % 2 === 0 ? 'receptive' : 'active',
            'triadic_group' => $this->getTriadicGroup($reduced),
            'cosmology' => $this->getCosmologicalStructure()
        ];
    }

    /**
     * Digital Root function
     *
     * @param integer $number
     * @return integer
     */
    private function digitalRoot(int $number): int
    {
        while ($number > 9) {
            $number = array_sum(str_split((string) $number));
        }
        return $number;
    }

    /**
     * Get Magnitude Level function
     *
     * @param integer $value
     * @return string
     */
    private function getMagnitudeLevel(int $value): string
    {
        return match (true) {
            $value <= 9 => 'unit',
            $value <= 90 => 'tens',
            $value <= 400 => 'hundreds',
            default => 'extended'
        };
    }

    /**
     * Get Triadic Group function
     *
     * @param integer $number
     * @return string
     */
    private function getTriadicGroup(int $number): string
    {
        return match ($number) {
            1, 4, 7 => 'creative',
            2, 5, 8 => 'dynamic',
            3, 6, 9 => 'manifesting',
            default => 'unknown',
        };
    }

    /**
     * Get Cosmological Structure function
     *
     * @return array
     */
    private function getCosmologicalStructure(): array
    {
        if (!is_array($this->classification_sefer_yetzirah)) {
            return ['type' => null];
        }

        $classification = $this->classification_sefer_yetzirah['en']
            ?? $this->classification_sefer_yetzirah['it']
            ?? null;

        return match ($classification) {
            'mother' => ['type' => 'elemental'],
            'double' => ['type' => 'planetary'],
            'simple' => ['type' => 'zodiacal'],
            default => ['type' => null],
        };
    }
}
