<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Exceptions\IntegrityException;

class CategoryController extends Controller
{
    /**
     * Display a listing of the categories.
     */
    public function index()
    {
        return CategoryResource::collection(Category::all());
    }

    /**
     * Store a newly created category in storage.
     */
    public function store(CategoryRequest $request)
    {
        $request->validated();

        $category = Category::create($request->only(['name']));

        return new CategoryResource($category);
    }

    /**
     * Display the specified category.
     */
    public function show(string $id)
    {
        $category = Category::findOrFail($id);

        return new CategoryResource($category);
    }

    /**
     * Update the specified category in storage.
     */
    public function update(CategoryRequest $request, string $id)
    {
        $this->check($id);
        
        $request->validated();

        $category = Category::findOrFail($id);
        $category->update($request->only(['name']));

        return new CategoryResource($category);
    }

    /**
     * Check the integrity of the categories table with the books table.
     */
    private function check(string $id)
    {
        if (Book::firstWhere('category_id', $id)) 
            throw new IntegrityException("Não pode alterar uma categoria que está cadastrada num livro.");
    }
}
