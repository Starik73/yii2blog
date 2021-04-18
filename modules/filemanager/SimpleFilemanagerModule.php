<?php

namespace DeLuxis\Yii2SimpleFilemanager;

use yii\base\Module;
use Yii;

/**
 * Class SimpleFilemanagerModule
 * @package DeLuxis\Yii2SimpleFilemanager
 * @property string $fullUploadPath
 */
class SimpleFilemanagerModule extends Module
{
    public $controllerNamespace = 'DeLuxis\Yii2SimpleFilemanager\controllers';
    public $fullUploadPath = '@webroot/uploads';
    public $urlPath = '@webroot/uploads';

    public $icons = [];

    private $uploadPath;

    public $defaultIcons = [
        'dir'                => 'fa-folder-o',
        'file'               => 'fa-file-o',
        'image/gif'          => 'fa-file-image-o',
        'image/tiff'         => 'fa-file-image-o',
        'image/png'          => 'fa-file-image-o',
        'image/jpeg'         => 'fa-file-image-o',
        'application/pdf'    => 'fa-file-pdf-o',
        'application/zip'    => 'fa-file-archive-o',
        'application/x-gzip' => 'fa-file-archive-o',
        'text/plain'         => 'fa-file-text-o',
    ];

    public function init()
    {
        parent::init();

        $this->_checkPath();

        $this->icons = array_merge($this->defaultIcons, $this->icons);

        if ( !isset(Yii::$app->i18n->translations['filemanager'])) {
            Yii::$app->i18n->translations['filemanager'] = [
                'class'          => 'yii\i18n\PhpMessageSource',
                'sourceLanguage' => 'en-US',
                'basePath'       => $this->basePath . '/messages',
                'fileMap'        => ['filemanager' => 'filemanager.php'],
            ];
        }
    }

    public function getFullUploadPath()
    {
        if ( !isset($this->uploadPath)) {
            $this->uploadPath = Yii::getAlias($this->fullUploadPath);
        }

        return $this->uploadPath;
    }

    private function _checkPath()
    {
        if ( !is_dir($this->fullUploadPath)) {
            mkdir($this->fullUploadPath, 0755, true);
        }
    }
}