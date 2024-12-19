<?php
namespace Commands;
use Illuminate\Console\Command;

class DataPartyCommand extends Command
{
    public $signature = 'data-party';

    public $description = 'DataPartyCommand command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
