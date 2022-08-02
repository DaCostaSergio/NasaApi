<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Service\NasaApiApodService ;


class NasaFetchApod extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'nasa:apod';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Nasa\'s Apod API';

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
      $apod = NasaApiApodService::getApodPhoto();

      var_dump($apod);

      return 0;
    }
}
