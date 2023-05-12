<?php

namespace Uneca\Dissemination\Commands;

use Illuminate\Console\Command;

class DisseminationCommand extends Command
{
    public $signature = 'dissemination-kit';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
