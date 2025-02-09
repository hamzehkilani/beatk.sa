<?php

namespace App\Http\Controllers\Dashboard;

use App\Events\Test\MyEvent;
use App\Http\Controllers\Controller;
use App\Http\Resources\User\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();

        if (!$user) {
            return $this->apiResponseFaild('Unauthorized', 'User not authenticated', 401);
        }

        switch ($user->role) {
            case 'admin':
              return  $this->getAdminDashboard();
                break;

            case 'user':
                $data = $this->getUserDashboard();
                break;

            default:
                return $this->apiResponseFaild('Unauthorized', 'Invalid role', 403);
        }


    }


    private function getAdminDashboard()
    {
       return redirect()->route('categories.index');
    }


    private function getAgencyDashboard()
    {
        $authUser = Auth::user();

        $users = User::where('created_by_id', $authUser->id)->orderByDesc('id')->orderByDesc('id')->with('userDetail.userSocialLink')->with('pixel')->paginate(10);
        return [
            'title' => 'Agency Dashboard',
            'users' =>  $users
        ];
    }


    private function getUserDashboard()
    {
        return [
            'title' => 'User Dashboard',
            'visitors' => [
                'facebook' => 123,
                'snapchat' => 56,
                'tiktok' => 910,
                'instagram' => 1213,
            ],
        ];
    }
}
