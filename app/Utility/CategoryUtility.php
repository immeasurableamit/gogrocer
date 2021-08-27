<?php

namespace App\Utility;


class CategoryUtility
{
    /*when with trashed is true id will get even the deleted items*/
    public static function children_ids($id, $with_trashed = false)
    {
        $children = CategoryUtility::flat_children($id, $with_trashed = false);

        return !empty($children) ? array_column($children, 'id') : array();
    }
}
