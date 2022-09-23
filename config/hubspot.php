<?php
// config/hubspot.php

return [
    'api_key' => env('HUBSPOT_API_KEY'),
    'access_token' => env('HUBSPOT_ACCESS_TOKEN'),
    'hubspot_owner_id' => env('HUBSPOT_OWNER_ID',null)
];
