<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class order extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'order:make';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '命令描述';

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
    public function handle()
    {
        //
        Log::info('test');
    }
}
