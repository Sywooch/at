<?php
require_once dirname(__FILE__) . '/../global.php';

Yii::setAlias('common', dirname(__DIR__));
Yii::setAlias('frontend', dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('console', dirname(dirname(__DIR__)) . '/console');

\Yii::$container->set(
    '\common\components\UrlManager',
    function ($container, $params, $config) {
        $config['languages'] = \common\helpers\LanguageHelper::getApplicationLanguages();

        return new \common\components\UrlManager($config);
    }
);

\Yii::$container->set(
    'notgosu\yii2\modules\metaTag\components\MetaTagBehavior',
    function ($container, $params, $config) {
        $config['languages'] = \common\helpers\LanguageHelper::getApplicationLanguages();

        return new notgosu\yii2\modules\metaTag\components\MetaTagBehavior($config);
    }
);
