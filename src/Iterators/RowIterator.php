<?php

namespace Ouarea\ExcelM\Iterators;

use Ouarea\ExcelM\Row;

class RowIterator extends CallbackIterator
{
    /**
     * @return Row
     */
    public function first()
    {
        return parent::first();
    }
}
