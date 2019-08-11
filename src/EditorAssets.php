<?

namespace agluhov\testcode;

use yii\web\AssetBundle;

class EditorAssets extends AssetBundle {

    public $basePath = '@webroot';
    public $sourcePath = '/basic/vendor/froala/wysiwyg-editor/';
    

    public $baseUrl = '@web';
    public $css = ['css/froala_editor.pkgd.min.css'];
    public $js = ['js/froala_editor.pkgd.min.js'];
    public $depends = [
    ];

    public function init()
    {
        
        parent::init();
    }
}