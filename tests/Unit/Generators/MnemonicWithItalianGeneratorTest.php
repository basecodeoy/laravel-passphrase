<?php

declare(strict_types=1);

namespace Tests\Unit\Generators;

use PreemStudio\Passphrase\Generators\MnemonicWithItalianGenerator;

it('should generate a string', function (): void {
    expect(resolve(MnemonicWithItalianGenerator::class)->generate())->toBeString();
});