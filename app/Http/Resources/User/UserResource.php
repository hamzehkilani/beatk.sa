<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource
{
    protected $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function toArray()
    {
        return [
            'id' => $this->user->id,
            'name' => $this->user->name,
            'email' => $this->user->email,
            'role' => $this->user->role,
            'isConfirmed' => $this->user->isConfirmed,
            'createdAt' => $this->user->createdAt,
            'updatedAt' => $this->user->updatedAt,
            'avatar' => $this->user->image,
            'userDetail' => $this->user->userDetail ? (new UserDetailResource($this->user->userDetail))->toArray() : null,
            'agency' => $this->user->agency ? (new UserAgencyResource($this->user->agency))->toArray() : null,
        ];
    }
}

class UserDetailResource
{
    protected $userDetail;

    public function __construct($userDetail)
    {
        $this->userDetail = $userDetail;
    }

    public function toArray()
    {
        return [
            'id' => $this->userDetail->id,
            'address' => $this->userDetail->address,
            'phone' => $this->userDetail->phone,
            'createdAt' => $this->userDetail->createdAt,
            'updatedAt' => $this->userDetail->updatedAt,
            'userSocialLinks' => $this->userDetail->userSocialLinks->map(function($link) {
                return (new UserSocialLinkResource($link))->toArray();
            }),
        ];
    }
}

class UserAgencyResource
{
    protected $agency;

    public function __construct($agency)
    {
        $this->agency = $agency;
    }

    public function toArray()
    {
        return [
            'id' => $this->agency->id,
            'name' => $this->agency->name,
            'createdAt' => $this->agency->createdAt,
            'updatedAt' => $this->agency->updatedAt,
            'userSocialLinks' => $this->agency->userSocialLinks->map(function($link) {
                return (new UserSocialLinkResource($link))->toArray();
            }),
        ];
    }
}

class UserSocialLinkResource
{
    protected $socialLink;

    public function __construct($socialLink)
    {
        $this->socialLink = $socialLink;
    }

    public function toArray()
    {
        return [
            'id' => $this->socialLink->id,
            'platform' => $this->socialLink->platform,
            'label' => $this->socialLink->label,
            'url' => $this->socialLink->url,
            'username' => $this->socialLink->username,
            'createdAt' => $this->socialLink->createdAt,
            'updatedAt' => $this->socialLink->updatedAt,
        ];
    }
}
