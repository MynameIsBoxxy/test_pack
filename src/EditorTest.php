<?php

namespace agluhov\testcode;

use yii\base\Widget;

class EditorTest extends Widget{

    public function init() {
        EditorAssets::register( $this->getView() );
        parent::init();
    }

    public function run (){

        $this->registerAssets();

        return 'Hello';
    }
    public function registerAssets(){
        $view = $this->getView();
        EditorAssets::register($view);
    }
}