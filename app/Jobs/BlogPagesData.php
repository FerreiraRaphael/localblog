<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Contracts\Bus\SelfHandling;

class BlogPagesData extends Job implements SelfHandling
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($page)
    {
        $this->page = $page;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        switch ($this->page) {
        case "sobre":
            return $this->pageSobreData();
            break;
        case "tags":
            return;
            break;
        case "contato":
            return;
            break;
        }   
    }
    public function pageSobreData()
    {
        return [
            'title' => config('blog.title') . ' - ' . 'Sobre',
            'page_image' => config('blog.page_sobre'),
            'meta_description' => config('blog.description'),
            'layout' => 'blog.layouts.sobre',
        ];
    }
    public function pageTagsData()
    {
        return [
            'title' => config('blog.title') . ' - ' . 'Sobre',
            'page_image' => config('blog.page_sobre'),
            'meta_description' => config('blog.description'),
            'layout' => 'blog.layouts.sobre',
        ];
    }
    public function pageContatoData()
    {
        return [
            'title' => config('blog.title') . ' - ' . 'Sobre',
            'page_image' => config('blog.page_sobre'),
            'meta_description' => config('blog.description'),
            'layout' => 'blog.layouts.sobre',
        ];
    }
}
