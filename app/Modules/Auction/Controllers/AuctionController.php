<?php
namespace App\Modules\Auction\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Auction\Models\Auction;
use Illuminate\Http\Request;
use Illuminate\Notifications\Action;

class AuctionController extends Controller
{
    public function index()
    {
        $auctions = Auction::orderBy('sort', 'asc')->paginate(3);
        return view('dashboard.auctions.index', compact('auctions'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'sort' => 'integer',
        ]);

        $imagePath = $request->file('image') ? $request->file('image')->store('categories', 'public') : null;

        Auction::create([
            'name' => $request->name,
            'image' => $imagePath,
            'sort' => $request->sort ?? 0,
        ]);

        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    public function edit(Auction $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Auction $category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'sort' => 'integer',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('categories', 'public');
            $category->update(['image' => $imagePath]);
        }

        $category->update($request->only(['name', 'sort']));

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy(Auction $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted.');
    }

    public function getAllActions(){
        $auctions = Auction::WithRelations()->orderBy('id', 'asc')->paginate(6);
        return response()->json($auctions);
    }
}
