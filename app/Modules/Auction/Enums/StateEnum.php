<?php
namespace App\Modules\Auction\Enums;

enum StateEnum: string
{
    case PENDING = 'pending';
    case COMPLETED = 'completed';
    case CANCELLED = 'cancelled';
    case ACTIVE = 'active';


    // Optional: Add helper methods
    public function label(): string
    {
        return match ($this) {
            self::PENDING => 'غير فعالة',
            self::COMPLETED => 'انتهت',
            self::CANCELLED => 'التغت',
            self::ACTIVE => 'فعالة',

        };
    }
}
