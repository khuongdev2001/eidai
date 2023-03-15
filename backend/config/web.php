<?php

use backend\modules\api\Module;
use yii\web\User;

$config = [
    'homeUrl' => Yii::getAlias('@backendUrl'),
    'controllerNamespace' => 'backend\controllers',
    'aliases' => [
        '@app' => __DIR__ . '/../',
        '@basePath' => __DIR__,
        '@bower' => "@vendor/bower-asset",
        "@web_asset" => __DIR__ . '/../web/assets',
    ],
    'defaultRoute' => 'end-user/home/site',
    'components' => [
        'fileStorage' => [
            'class' => 'trntv\filekit\Storage',
        ],
        'request' => [
            'cookieValidationKey' => env('BACKEND_COOKIE_VALIDATION_KEY'),
            'baseUrl' => env('BACKEND_BASE_URL'),
        ],
        'assetManager' => [
            'bundles' => []
        ],
        'user' => [
            'class' => User::class,
            'identityClass' => common\models\UserIdentity::class,
        ]
    ],
    'modules' => [
        'gridview' => [
            'class' => '\kartik\grid\Module'
        ],
        'end-user' => [
            'class' => backend\modules\end_user\Module::className()
        ],
        'api' => [
            'class' => Module::className()
        ],
    ],
];

if (YII_ENV_DEV) {
    $config['modules']['gii'] = [
        'class' => yii\gii\Module::class,
        'generators' => [
            'crud' => [
                'class' => yii\gii\generators\crud\Generator::class,
                'templates' => [
                    'yii2-starter-kit' => Yii::getAlias('@backend/views/_gii/templates'),
                ],
                'template' => 'yii2-starter-kit',
                'messageCategory' => 'backend',
            ],
        ],
    ];
}

return $config;
