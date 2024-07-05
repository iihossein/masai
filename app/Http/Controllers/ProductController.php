<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\TemporaryFile;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.products.products_list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands = Brand::all();
        $categories = Category::all();
        return view('admin.products.add_product', ['brands' => $brands, 'categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = Product::create([
            'en_name' => $request->en_name,
            'fa_name' => $request->fa_name,
            'description' => $request->description,
            'brand_id' => $request->brand_id,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'stock' => $request->stock,
            'guarantee' => $request->guarantee,
            'marketable' => $request->marketable,
        ]);
        $temporaryFile = TemporaryFile::where('folder', $request->file)->first();
        // dd($temporaryFile);
        if ($temporaryFile) {
            $product->addMedia(storage_path('app/public/uploads/tmp/' . $temporaryFile->filename))
                ->toMediaCollection('products');
            rmdir(storage_path('app/public/uploads/tmp/' . $request->file));
            $temporaryFile->delete();
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
