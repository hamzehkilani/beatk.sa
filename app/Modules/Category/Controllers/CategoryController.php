<?php
namespace App\Modules\Category\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Category\Events\CreateCategoryEvent;
use App\Modules\Category\Events\DeleteCategoryEvent;

use App\Modules\Category\Events\EditCategoryEvent;

use App\Modules\Category\Models\Category;
use App\Modules\Category\Request\AddNewCategoryRequest;
use App\Traits\ApiResponseTrait;
use App\Traits\ImagesTrait;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    use ImagesTrait,ApiResponseTrait;
    public function index()
    {
        $categories = Category::orderBy('sort', 'asc')->paginate(10);
        return view('dashboard.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(AddNewCategoryRequest $request)
    {


        try{
            $imagePath = $request->file('image') ? $this->handlerImage('assets/attachment/category/', $request->image) : null;

          $category=  Category::create([
                'name' => $request->name,
                'image' => $imagePath,
                'sort' => $request->sort ?? 0,
            ]);

            event(new CreateCategoryEvent(base64_encode(json_encode($category))));

            return $this->webResponse();
        }catch(\Exception $e){
            return $this->errorWebResponse($e->getMessage());

        }

    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(AddNewCategoryRequest $request, Category $category)
    {
        $imagePath =  $request->file('image') ? $this->handlerImage('assets/attachment/category/',  $request->image,$category->image ) :  $category->image;
        $category->update(['name'=>$request->name, 'sort'=>$request->sort,'image'=>$imagePath]);

        $category=Category::where('id',$category->id)->first();
        event(new EditCategoryEvent(base64_encode(json_encode($category))));

        return $this->webResponse();
    }

    public function destroy(Category $category)
    {
        $category->delete();
        event(new DeleteCategoryEvent($category->id));
        return $this->webResponse();
    }
}
