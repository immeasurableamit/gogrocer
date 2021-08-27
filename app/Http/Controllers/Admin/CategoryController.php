<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Str;
use App\Utility\CategoryUtility;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->categories_directory = 'admin.product.categories';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = 'Add Category';
        $sub_title = 'Categories';
        $sort_search = null;
        //        $categories = Category::orderBy('name', 'asc');
        $categories = Category::orderBy('order_level', 'desc');
        if ($request->has('search')) {
            $sort_search = $request->search;
            $categories = $categories->where('name', 'like', '%' . $sort_search . '%');
        }
        $categories = $categories->paginate(15);
        return view('admin.product.categories.index', compact('title', 'sub_title', 'categories', 'sort_search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Add Category';
        $sub_title = 'Categories';
        $categories = Category::where('parent_id', 0)
            ->with('childrenCategories')
            ->get();

        return view($this->categories_directory . '.create', compact('title', 'sub_title', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category;
        $category->name = $request->name;
        $category->order_level = 0;
        if ($request->order_level != null) {
            $category->order_level = $request->order_level;
        }
        $category->digital = $request->digital;
        $category->banner = $request->banner;
        $category->icon = $request->icon;
        $category->meta_title = $request->meta_title;
        $category->meta_description = $request->meta_description;

        if ($request->parent_id != "0") {
            $category->parent_id = $request->parent_id;

            $parent = Category::find($request->parent_id);
            $category->level = $parent->level + 1;
        }

        if ($request->slug != null) {
            $category->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->slug));
        } else {
            $category->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->name)) . '-' . Str::random(5);
        }

        if ($request->commision_rate != null) {
            $category->commision_rate = $request->commision_rate;
        }

        if (isset($request->banner)) {
            $category->addMediaFromRequest('banner')->toMediaCollection('banner');
        }

        if (isset($request->icon)) {
            $category->addMediaFromRequest('icon')->toMediaCollection('icon');
        }

        $category->save();


        flash('Category has been inserted successfully')->success();
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Update Category';
        $sub_title = 'Categories';

        $category = Category::findOrFail($id);
        $categories = Category::where('parent_id', 0)
            ->with('childrenCategories')
            // ->whereNotIn('id', CategoryUtility::children_ids($category->id, true))->where('id', '!=', $category->id)
            ->orderBy('name', 'asc')
            ->get();
        // dd( $categories);


        return view('admin.product.categories.edit', compact('category', 'categories', 'title', 'sub_title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function updateFeatured(Request $request)
    {
        $category = Category::findOrFail($request->id);
        $category->featured = $request->status;
        if ($category->save()) {
            return 1;
        }
        return 0;
    }
}
