<?php

namespace App\Traits;

trait CalculatePercentageChange{

    public function calculatePercentageChange($data)
    {
        $currentMonth = date('m');
        $lastMonth = date('m', strtotime('-1 month'));

        $countCurrentMonth = $data->filter(function ($item) use ($currentMonth) {
            return date('m', strtotime($item->created_at)) == $currentMonth;
        })->count();

        $countLastMonth = $data->filter(function ($item) use ($lastMonth) {
            return date('m', strtotime($item->created_at)) == $lastMonth;
        })->count();

        if ($countLastMonth > 0) {
            $percentageChange = (($countCurrentMonth - $countLastMonth) / $countLastMonth) * 100;
        } else {
            $percentageChange = $countCurrentMonth > 0 ? 100 : 0;
        }

        $isNegative = $percentageChange < 0;

        return [
            'percentageChange' => $percentageChange,
            'isNegative' => $isNegative
        ];
    }

}
