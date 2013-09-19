<?php



/**
 * YiiStatics
 * Easiest way to publish and include your JS and CSS code in Yii project.
 * @link https://github.com/happyproff/YiiStatics
 * @author Stanislav Gamayunov <happyproff@gmail.com>
 */
class YiiStatics extends CApplicationComponent {



    public $defaultAssetsAlias = 'application.assets';



    public function init () {

        //

    }



    /**
     * @param $cssFile for examlple 'main.css' or 'notifications/main.css'
     * @param null $pathAlias for example 'application.assets.styles'
     * @param string $media
     * @return Statics
     * @throws CException
     */
    public function css ($cssFile, $pathAlias = null, $media = '') {

        if (!$cssFile) throw new CException('cssFile cannot be empty');
        if ($pathAlias === null) $pathAlias = $this->defaultAssetsAlias;

        $path = Yii::getPathOfAlias($pathAlias);
        if ($path === false) throw new CException('pathAlias "' . $pathAlias . '" is invalid');

        if ($cssFile[0] !== '/') $cssFile = '/' . $cssFile;

        Yii::app()->clientScript->registerCssFile(
            Yii::app()->assetManager->publish($path . $cssFile),
            $media
        );

        return $this;

    }



    /**
     * @param $jsFile for example 'main.js' or 'personal/jesus.js'
     * @param null $pathAlias for example 'application.assets.scripts'
     * @param $position
     * @return $this
     * @throws CException
     */
    public function js ($jsFile, $pathAlias = null, $position = CClientScript::POS_END) {

        if (!$jsFile) throw new CException('jsFile cannot be empty');
        if ($pathAlias === null) $pathAlias = $this->defaultAssetsAlias;

        $path = Yii::getPathOfAlias($pathAlias);
        if ($path === false) throw new CException('pathAlias "' . $pathAlias . '" is invalid');

        if ($jsFile[0] !== '/') $jsFile = '/' . $jsFile;

        Yii::app()->clientScript->registerScriptFile(
            Yii::app()->assetManager->publish($path . $jsFile),
            $position
        );

        return $this;

    }



}
