<?php
namespace App\Modules\Auction\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Category\Models\Category;
use Illuminate\Http\Request;

class AuctionApiController extends Controller
{
    public function index()
    {
        return response()->json(Category::orderBy('sort', 'asc')->get());
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'sort' => 'integer',
        ]);

        $imagePath = $request->file('image') ? $request->file('image')->store('categories', 'public') : null;

        $category = Category::create([
            'name' => $request->name,
            'image' => $imagePath,
            'sort' => $request->sort ?? 0,
        ]);

        return response()->json($category, 201);
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return response()->json(['message' => 'Category deleted successfully.']);
    }
}
