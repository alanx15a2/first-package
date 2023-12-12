<?php

namespace Alanx15a2\FirstPackage\Commands;

use Illuminate\Console\Command;

class FirstPackageCommand extends Command
{
    public $signature = 'first-package';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
