<?php
$config = [
    'components' => [
        'assetManager' => [
            'class' => yii\web\AssetManager::class,
            // 'linkAssets' => env('LINK_ASSETS'),
            // 'appendTimestamp' => YII_ENV_DEV
        ],
    ]];

if (YII_DEBUG) {
    // $config['bootstrap'][] = 'debug';
    // $config['modules']['debug'] = [
    //     'class' => yii\debug\Module::class,
    //     'allowedIPs' => ['*'],
    // ];
}

if (YII_ENV_DEV) {
    // $config['modules']['gii'] = [
    //     'allowedIPs' => ['*'],
    // ];
}

return $config;
