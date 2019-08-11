<?php

namespace agluhov\testcode;

use yii\base\Widget;

class EditorTest extends Widget{
    public $idEditor = 'textareaID';
    public $theme = 'dark';
    
    public function init() {
        EditorAssets::register( $this->getView() );
        parent::init();
    }

    public function run (){

        $this->registerAssets();

        echo '<textarea id="'.$this->idEditor.'"></textarea>';
    }
    public function registerAssets(){
        $view = $this->getView();
        EditorAssets::register($view);

         $js = <<<JS
        
        new FroalaEditor($this->idEditor,
        {
            theme: '$this->theme',
        });        
JS;

        $view->registerJs($js, \yii\web\View::POS_READY); 

    }
}