<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class GenerateContributingCommand extends Command
{
    protected $signature = 'generate:contributing';

    protected $description = 'This will generate a basic template to start a contributing file guideline';

    protected $url = 'https://gist.githubusercontent.com/PurpleBooth/b24679402957c63ec426/raw/5c4f62c1e50c1e6654e76e873aba3df2b0cdeea2/Good-CONTRIBUTING.md-template.md';

    public function handle(): void
    {
        file_put_contents('CONTRIBUTING.md', fopen($this->url, 'r'));
    }
}
