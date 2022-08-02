<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Service\NasaApiService;


class NasaCuriosityFetchPhotos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'nasa:curiosity';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Nasa\'s rover photos API';

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
      $photos = NasaApiService::getRoverPhotos();

      var_dump($photos[0]);

      //$this->info();
        return 0;
    }
}
