<?php

namespace App\Console\Commands;

use App\Jobs\UserJob;
use Illuminate\Console\Command;

class NewUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'new-user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $limit = 4;
        
        for($i=1;$i<=$limit;$i++){
            UserJob::dispatch([
                'action' => 'CRIAR',
                'name'   => fake()->name
            ]);
        }
    }
}
