<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Http\Request;

class StoreComment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:comment {id} {comment}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {
        $request = Request::create(route('store_comment_via_command'), 'POST', [ 'user_id' => $this->argument('id'), 'body' => $this->argument('comment') ]);
        $response = app()->handle($request);
        $responseDecoded = json_decode($response->getContent(), true);
        $this->info($responseDecoded);
    }
}
