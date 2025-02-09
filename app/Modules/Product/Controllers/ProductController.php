<?php
namespace App\Modules\Product\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Product\Models\Product;
use App\Traits\CalculatePercentageChange;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use CalculatePercentageChange;
    public function index()
    {

        $productsCount=Product::count();
        $productPre=$this->calculatePercentageChange(Product::all());
        return view('dashboard.products.index',compact('productsCount','productPre'));
    }


    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted.');
    }



    public function getAllProductData(){
        $products = Product::WithRelations()->orderBy('id', 'asc')->paginate(6);
        return response()->json($products);
    }

    public function searchProduct(Request $request) {
        $searchViewName = $request->input('searchData', null);

        $products = Product::withRelations()
            ->where('name', 'LIKE', "%$searchViewName%")->orWhereHas('createdBy',function($q) use ($searchViewName){
                $q->where('name', 'LIKE', "%$searchViewName%");
            })->orWhereHas('category',function($q) use ($searchViewName){
                $q->where('name', 'LIKE', "%$searchViewName%");
            })
            ->orderBy('id', 'asc')
            ->paginate(6);

        return response()->json($products);
    }


}

