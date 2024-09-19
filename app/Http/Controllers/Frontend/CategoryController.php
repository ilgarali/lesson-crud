<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function store(CategoryRequest $createCategoryRequest)
    {
//        $category = new Category();
//        $category->name = $createCategoryRequest->validated('name');
//        $category->slug = Str::slug($createCategoryRequest->validated('name'));
//        $category->save();

        Category::query()->create([
            'name' => $createCategoryRequest->validated('name'),
            'slug' => Str::slug($createCategoryRequest->validated('name'))
        ]);

        return 'succes';
    }

    public function edit(int $id)
    {
        $category = Category::query()->findOrFail($id);
        return view('edit', compact('category'));
    }

    public function update(int $id, CategoryRequest $categoryRequest)
    {
//        $category = Category::query()->findOrFail($id);
//        $category->name = $categoryRequest->validated('name');
//        $category->slug = Str::slug($categoryRequest->validated('name'));
//        $category->save();

        Category::query()->findOrFail($id)->update([
            'name' => $categoryRequest->validated('name'),
            'slug' => Str::slug($categoryRequest->validated('name'))
        ]);
        return 'ok';
    }
}
