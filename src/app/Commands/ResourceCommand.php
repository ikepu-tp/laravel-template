<?php

namespace ikepu_tp\LaravelTemplate\app\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class ResourceCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'template:resource';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'install resources';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        if ($this->confirm("Do you want to copy \"App\Http\Resources\Resource.php\"")) {
            if (!file_exists(base_path("app/Http/Resources"))) mkdir(base_path("app/Http/Resources", 0750));
            copy(__DIR__ . "/../Http/Resources/Resource.php", base_path("app/Http/Resources/Resource.php"));
            $this->info(base_path("app/Http/Resources/Resource.phph") . " was copied.");
        }
        if ($this->confirm("Do you want to copy \"App\Http\Resources\ErrorResource.php\"")) {
            if (!file_exists(base_path("app/Http/Resources"))) mkdir(base_path("app/Http/Resources", 0750));
            copy(__DIR__ . "/../Http/Resources/ErrorResource.php", base_path("app/Http/Resources/ErrorResource.php"));
            $this->info(base_path("app/Http/Resources/ErrorResource.php") . " was copied.");
        }
    }
}
