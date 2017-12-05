<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class GenerateContributingCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:contributing';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This will generate a basic template to start a contributing file guideline';

    protected $url = 'https://gist.githubusercontent.com/PurpleBooth/b24679402957c63ec426/raw/5c4f62c1e50c1e6654e76e873aba3df2b0cdeea2/Good-CONTRIBUTING.md-template.md';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(): void
    {
        file_put_contents('CONTRIBUTING.md', fopen($this->url, 'r'));
    }

    /**
	 * Define the command's schedule.
	 *
	 * @param  \Illuminate\Console\Scheduling\Schedule $schedule
	 *
	 * @return void
	 */
	public function schedule(Schedule $schedule): void
	{
		// $schedule->command(static::class)->everyMinute();
	}
}
