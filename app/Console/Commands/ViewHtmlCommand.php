<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ViewHtmlCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:viewhtml';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create view html files';

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
    }
}
