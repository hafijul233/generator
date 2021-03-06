<?php

namespace Hafijul233\Generator\Commands;

use Illuminate\Console\Command;

/**
 * Class GeneratorCommand
 */
class GeneratorCommand extends Command
{
    public $signature = 'generator';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
