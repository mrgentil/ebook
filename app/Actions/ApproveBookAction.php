<?php


namespace App\Actions;


use TCG\Voyager\Actions\AbstractAction;

class ApproveBookAction extends AbstractAction
{

    public function getTitle()
    {
        return $this->data->{'active'} == 'active' ? 'Désapprouver' : 'Approuver';
    }

    public function getIcon()
    {
        return $this->data->{'active'} == 'active' ? 'voyager-x' : 'voyager-check-circle';
    }

    public function getDefaultRoute()
    {
        $book = $this->data;
        return route('book.approve', $book);
    }

    public function getAttributes()
    {
        $class = $this->data->{'active'} == 'active' ? ' btn-danger' : ' btn-success';

        return [
            'class' => "btn btn-sm {$class} pull-right approve",
        ];
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug === 'books';
    }
}
