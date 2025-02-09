<?php

namespace App\Modules\Product\Controllers;

use App\Modules\Product\Models\Product;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Traits\ApiResponseTrait;
use App\Http\Controllers\Controller;

class ProductApiController extends Controller
{
    use ApiResponseTrait;

    public function index()
    {
        $products = Product::with('category', 'createdBy', 'images')->paginate(10);
        return $this->successResponse($products, 'Products retrieved successfully');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'video' => 'nullable|file|mimetypes:video/mp4,video/quicktime,video/x-msvideo,video/x-ms-wmv|max:102400',
            'description' => 'nullable|string',
            'created_by_id' => 'required|exists:users,id',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $product = Product::create($request->only('name', 'category_id', 'description', 'created_by_id'));

        if ($request->hasFile('video')) {
            $videoPath = $request->file('video')->store('public/videos/products');
            $product->update(['video' => $videoPath]);
        }

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('public/images/products');
                $product->images()->create(['image_path' => $path]);
            }
        }

        return $this->successResponse($product->load('images'), 'Product created successfully', 201);
    }

    public function show(Product $product)
    {
        return $this->successResponse($product->load('category', 'createdBy', 'images'), 'Product retrieved successfully');
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'sometimes|string|max:255',
            'category_id' => 'sometimes|exists:categories,id',
            'video' => 'nullable|file|mimetypes:video/mp4,video/quicktime,video/x-msvideo,video/x-ms-wmv|max:102400',
            'description' => 'nullable|string',
            'created_by_id' => 'sometimes|exists:users,id',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $product->update($request->only('name', 'category_id', 'description', 'created_by_id'));

        if ($request->hasFile('video')) {
            if ($product->video) {
                Storage::delete($product->video);
            }

            $videoPath = $request->file('video')->store('public/videos/products');
            $product->update(['video' => $videoPath]);
        }

        // Handle image uploads
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('public/images/products');
                $product->images()->create(['image_path' => $path]);
            }
        }

        return $this->successResponse($product->load('images'), 'Product updated successfully');
    }

    public function destroy(Product $product)
    {
        foreach ($product->images as $image) {
            Storage::delete($image->image_path);
            $image->delete();
        }
        $product->delete();

        return $this->successResponse(null, 'Product deleted successfully');
    }
}
