<?

namespace agluhov\testcode;

use yii\web\AssetBundle;

class EditorAssets extends AssetBundle {

    public $sourcePath = '@app/vendor/froala/wysiwyg-editor/';
    public $css = ['css/froala_editor.pkgd.min.css','css/themes/gray.min.css','css/themes/dark.min.css'];
    public $js = ['js/froala_editor.pkgd.min.js'];
    public $depends = [
    ];

    public function init()
    {
        
        parent::init();
    }
}