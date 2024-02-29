<?php

namespace Ohansyah\ExceptionHandler\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class PublishCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'exception-handler:publish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish the Exception Handler config and lang files.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // Publish Lang Files
        $sourceLang = __DIR__ . '/../../../resources/lang';
        $destinationLang = resource_path('lang/vendor/EH');

        File::copyDirectory($sourceLang, $destinationLang);
        $this->info('Lang files published successfully.');

        // Publish Config File
        $sourceConfig = __DIR__ . '/../../../config/exception-handler.php';
        $destinationConfig = $this->getConfigPath('exception-handler.php');

        File::copy($sourceConfig, $destinationConfig);
        $this->info('Config file published successfully.');

    }

    private function getConfigPath($path = '')
    {
        return app()->basePath('config').($path ? DIRECTORY_SEPARATOR.$path : $path);
    }

}
