<?php

namespace App\Utility;

use App\Models\Category;

class CategoryUtility
{
    /*when with trashed is true id will get even the deleted items*/
    public static function get_immediate_children($id, $with_trashed = false, $as_array = false)
    {
        $children = $with_trashed ? Category::where('parent_id', $id)->orderBy('order_level', 'desc')->get() : Category::where('parent_id', $id)->orderBy('order_level', 'desc')->get();
        $children = $as_array && !is_null($children) ? $children->toArray() : array();

        return $children;
    }

    public static function children_ids($id, $with_trashed = false)
    {
        $children = CategoryUtility::flat_children($id, $with_trashed = false);

        return !empty($children) ? array_column($children, 'id') : array();
    }

    public static function get_immediate_children_ids($id, $with_trashed = false)
    {

        $children = CategoryUtility::get_immediate_children($id, $with_trashed, true);

        return !empty($children) ? array_column($children, 'id') : array();
    }

    public static function move_level_up($id)
    {
        if (CategoryUtility::get_immediate_children_ids($id, true) > 0) {
            foreach (CategoryUtility::get_immediate_children_ids($id, true) as $value) {
                $category = Category::find($value);
                $category->level -= 1;
                $category->save();
                return CategoryUtility::move_level_up($value);
            }
        }
    }

    public static function move_level_down($id)
    {
        if (CategoryUtility::get_immediate_children_ids($id, true) > 0) {
            foreach (CategoryUtility::get_immediate_children_ids($id, true) as $value) {
                $category = Category::find($value);
                $category->level += 1;
                $category->save();
                return CategoryUtility::move_level_down($value);
            }
        }
    }
}
