<?php

namespace App\Modules\Category\Controllers;

use  App\Modules\Category\Models\Category;
use Illuminate\Http\Request;
use App\Traits\ApiResponseTrait;
use App\Http\Controllers\Controller;

class CategoryApiController extends Controller
{
    use ApiResponseTrait;

    /**
     * Get all categories with pagination.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $categories = Category::paginate($perPage);
        return $this->successResponse($categories, 'Categories retrieved successfully');
    }
}
