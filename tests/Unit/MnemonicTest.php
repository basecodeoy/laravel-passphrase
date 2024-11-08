<?php

declare(strict_types=1);

namespace Tests\Unit;

use BaseCodeOy\Passphrase\Mnemonic;

it('should generate a random passphrase', function ($method): void {
    expect(\explode(' ', Mnemonic::{$method}()->generate(12)))->toHaveCount(12);
    expect(\explode(' ', Mnemonic::{$method}()->generate(24)))->toHaveCount(24);
})->with([
    'useChineseSimplified',
    'useChineseTraditional',
    'useCzech',
    'useEnglish',
    'useFrench',
    'useItalian',
    'useJapanese',
    'useKorean',
    'useSpanish',
]);
