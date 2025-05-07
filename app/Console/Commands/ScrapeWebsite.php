<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;


class ScrapeWebsite extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // protected $signature = 'app:scrape-website';
    protected $signature = 'scrape:website {url}';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Download and save the HTML of a website homepage';
    /**
     * Execute the console command.
     */
    public function handle()
    {
        $url = $this->argument('url');
        $this->info("Fetching HTML from: $url");

        $response = Http::get($url);

        if ($response->successful()) {
            $html = $response->body();
            Storage::disk('local')->put('scraped_site.html', $html);
            $this->info("Saved as storage/app/scraped_site.html");
        } else {
            $this->error("Failed to fetch the website.");
        }
    }
}
