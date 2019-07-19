<?php

use App\User;

return [
    'model' => User::class,
    'table' => 'oauth_identities',
    'providers' => [
        // 'facebook' => [
        //     'client_id' => '1464982336895933',
        //     'client_secret' => '3edc1318a1bfccec728a77b8bf1dde88',
        //     'redirect_uri' => 'http://localhost:8000/facebook/redirect',
        //     'scope' => [],
        // ],
        'google' => [
            'client_id' => '411617878152-eo6kubthojlk0bmbfpi5sjqpngprgap0.apps.googleusercontent.com',
            'client_secret' => 'nogm7IgNzdpcB020SlUqB_C8',
            'redirect_uri' => 'http://127.0.0.1:8000/google/redirect',
            'scope' => [],
        ],
        'github' => [
            'client_id' => 'a34160d378d81dbea84f',
            'client_secret' => '72a2aa78350c553d3d1c19483ad54f516662a926',
            'redirect_uri' => 'http://127.0.0.1:8000/github/redirect',
            'scope' => [],
        ],
        'linkedin' => [
            'client_id' => '12345678',
            'client_secret' => 'y0ur53cr374ppk3y',
            'redirect_uri' => 'https://example.com/your/linkedin/redirect',
            'scope' => [],
        ],
        'instagram' => [
            'client_id' => '12345678',
            'client_secret' => 'y0ur53cr374ppk3y',
            'redirect_uri' => 'https://example.com/your/instagram/redirect',
            'scope' => [],
        ],
        'soundcloud' => [
            'client_id' => '12345678',
            'client_secret' => 'y0ur53cr374ppk3y',
            'redirect_uri' => 'https://example.com/your/soundcloud/redirect',
            'scope' => [],
        ],
    ],
];
