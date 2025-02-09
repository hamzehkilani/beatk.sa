<?php

namespace App\Services;

use Abraham\TwitterOAuth\TwitterOAuth;

class TwitterAdsAPI
{
    protected $connection;

    public function __construct($accessToken, $accessTokenSecret)
    {
        // Initialize TwitterOAuth library with your app's credentials
        $this->connection = new TwitterOAuth(
            'rI4VBdh8kfE4r9di2bxmnbpUd',
            'z8aR415aQPVArYGeRtw4AoaHGrvV7w86fOp5xlpXVtfCucj8KV',
            $accessToken,
            $accessTokenSecret
        );
    }

    /**
     * Fetch campaigns for a given Twitter Ads account
     */
    public function getCampaigns($accountId)
    {
        try {
            // Replace this endpoint with the correct one for Twitter Ads API campaigns
            $response = $this->connection->get("https://ads-api.x.com/12/accounts/{$accountId}/campaigns");

            if ($this->connection->getLastHttpCode() !== 200) {
                echo 'ssssss';exit();
                throw new \Exception('Failed to fetch campaigns.');
            }

            return $response->data ?? [];
        } catch (\Exception $e) {
            // Handle or log errors
            \Log::error('Error fetching Twitter campaigns: ' . $e->getMessage());
            return [];
        }
    }
}
