# YiiStatics

Easiest way to publish and include your JS and CSS code in Yii project.

## Installing and configuring

Run `git clone https://github.com/happyproff/YiiStatics protected/extensions/yii-statics` in your project dir.

Then register YiiStatics as application component by editing configuration (by default `/protected/config/main.php`).

    'components' => [
        ...
        'statics' => [
            'class' => 'ext.yii-statics.YiiStatics',
            'defaultAssetsAlias' => 'application.assets',
        ],
        ...
    ],
    
`defaultAssetsAlias` is optional, its default value is `application.assets`.

## Usage

    <?php
        Yii::app()->statics
            ->js('main.js')
            ->js('callme.js')
            ->css('main.css')
        ;
    ?>
    
For more options see source.