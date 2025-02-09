<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\Agency;
use App\Models\AgencyAdmin;
use App\Models\Plan;
use App\Models\User;
use App\Models\UserDetail;
use App\Models\UserPlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{//{userValue}/{sitesCount}/{costPerValue}
    // public function index($planId, $isYearly, $userValue, $sitesCount, $costPerValue)
    // {
    //     $planId = base64_decode($planId);
    //     $isYearly = base64_decode($isYearly);
    //     $userValue = base64_decode($userValue);
    //     $sitesCount = base64_decode($sitesCount);
    //     $costPerValue = base64_decode($costPerValue);

    //     $plan = Plan::findOrFail($planId);
    //     $minimumBasePrice = Plan::min('base_price');
    //     $type = $plan->base_price === $minimumBasePrice ? 'user' : 'agency';
    //     return view('Auth.Register', compact('planId', 'isYearly', 'userValue', 'sitesCount', 'type'));
    // }

    // public function register(RegisterRequest $request)
    // {

    //     try {

    //         DB::beginTransaction();

    //         $plan = Plan::findOrFail($request->plan_id);
    //         $minimumBasePrice = Plan::min('base_price');
    //         $type = $plan->base_price === $minimumBasePrice ? 'user' : 'agency';
    //         $user = User::create([
    //             'name' => $request->name,
    //             'email' => $request->email,
    //             'password' => Hash::make($request->password),
    //             'role' => $type,
    //         ]);
    //         $totalPrice=0;

    //         if($request->isYearly=="false"){
    //             $totalPrice = $plan->total_price+ (int)$plan->user_cost * ($request->number_of_users-1);

    //         }else{
    //             $totalPrice = $plan->total_price*10 + $plan->user_cost * (($request->number_of_users-1)*10);

    //         }

    //         Auth::login($user);


    //         UserPlan::create([
    //             'user_id' => $user->id,
    //             'plan_id' => $request->plan_id,
    //             'number_of_sites' => $request->number_of_sites,
    //             'number_of_users' => $request->number_of_users,
    //             'total_price' => $totalPrice,
    //             'is_yearly'=>$request->isYearly,
    //         ]);

    //         if ($type === 'user') {
    //             UserDetail::create(['user_id' => $user->id]);
    //             $extraDetails = UserDetail::where('user_id', $user->id)->first();
    //         } else {
    //             Agency::create([
    //                 'user_id' => $user->id,
    //                 'name' => $request->agency_name
    //             ]);
    //             $extraDetails = Agency::where('user_id', $user->id)->first();
    //         }

    //         DB::commit();

    //         return response()->json([
    //             'message' => 'Registered successfully',
    //             'user' => $user,
    //             'extra_details' => $extraDetails,
    //             'redirect_url'=>route('dashboard')
    //         ], 201);
    //     } catch (\Illuminate\Validation\ValidationException $e) {
    //         DB::rollBack();
    //         return response()->json([
    //             'message' => 'Validation failed',
    //             'errors' => $e->errors(),
    //         ], 422);
    //     }
    // }




}
