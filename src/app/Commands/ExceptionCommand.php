<?php

namespace ikepu_tp\LaravelTemplate\app\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class ExceptionCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'template:exception';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'install exceptions';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        if (!file_exists(base_path("app/Exceptions/ErrorException.php"))) copy(__DIR__ . "/../Exceptions/ErrorException.php", base_path("app/Exceptions/ErrorExceptions.php"));
        $this->info(base_path("app/Exceptions/ErrorException.php") . " was copied.");
        (new Filesystem)->copyDirectory(__DIR__ . "/../Exceptions/Error", base_path("app/Exceptions/Error"));
        $this->info(base_path("app/Exceptions/") . " was copied.");
        if ($this->confirm("Do you want to copy \"App\Exceptions\Handler.php\"")) {
            copy(__DIR__ . "/../Exceptions/Handler.php", base_path("app/Exceptions/Handler.php"));
            $this->info(base_path("app/Exceptions/Handler.php") . " was copied.");
        }
    }
}
