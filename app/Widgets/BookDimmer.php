<?php

namespace App\Widgets;

use App\Book;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;

class BookDimmer extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Book::query()->count();
        $string = trans_choice('voyager::dimmer.page', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-file-text',
            'title'  => "{$count} Livres",
            'text'   => "Vous avez {$count} livres enregistrés. Cliquez sur le bouton ci-dessous pour afficher tous les livres.",
            'button' => [
                'text' => 'Voir tous les livres',
                'link' => route('voyager.books.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/03.jpg'),
        ]));    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', Voyager::model('User'));
    }
}
