<?php


namespace App\Helpers;


use TCG\Voyager\Models\Page;

trait Pageable
{
    public function getPageInfo(string $page)
    {
        return Page::query()
            ->where('slug', $page)
            ->where('status', 'ACTIVE')->firstOrFail();
    }
}
