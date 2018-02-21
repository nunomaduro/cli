<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class GenerateReadmeCommand extends Command
{
    protected $signature = 'generate:readme';

    protected $description = 'This will generate a basic template to start a readme';

    protected $url = 'https://gist.githubusercontent.com/PurpleBooth/109311bb0361f32d87a2/raw/824da51d0763e6855c338cc8107b2ff890e7dd43/README-Template.md';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle(): void
    {
        file_put_contents('README.md', fopen($this->url, 'r'));
    }
}
