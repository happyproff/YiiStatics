# YiiStatics

Easiest way to publish and include your JS and CSS code in Yii project.

## Installing and configuring


    'components' => [
    
        ...
    
        'statics' => [
            'class' => 'ext.yii-statics.YiiStatics',
            'defaultAssetsAlias' => 'application.assets',
        ],
        
        ...
        
    ],
    
`defaultAssetsAlias` is optional, default value is `application.assets`.

## Usage

    <?php
        Yii::app()->statics
            ->js('main.js')
            ->js('callme.js')
            ->css('main.css')
        ;
    ?>
    
For more options see source.