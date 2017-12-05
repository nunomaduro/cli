<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class GenerateReadmeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:readme';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This will generate a basic template to start a readme';

    protected $url = 'https://gist.githubusercontent.com/PurpleBooth/109311bb0361f32d87a2/raw/824da51d0763e6855c338cc8107b2ff890e7dd43/README-Template.md';

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
        file_put_contents('README.md', fopen($this->url, 'r'));
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
