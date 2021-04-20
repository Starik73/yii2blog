<?php

use yii\helpers\Html;
use yii\helpers\Url;
?>

<aside class="main-sidebar">
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/img/photo/me.jpg" class="img-circle" alt="Astashenkov" />
            </div>
            <div class="pull-left info">
                <p>Astashenkov</p>
            </div>
        </div>
        <div class="btn-group" role="group">
            <a href="<?= Url::toRoute('/gii') ?>" class="btn btn-danger btn-block">Gii</a>
            <a href="<?= Url::toRoute('/debug') ?>" class="btn btn-danger btn-block">Debug</a>
            <a href="<?= Url::toRoute('/backend/banner/index') ?>" class="btn btn-success btn-block">Banners</a>
            <a href="<?= Url::toRoute('/backend/blog/index') ?>" class="btn btn-success btn-block">Blogs</a>
            <a href="<?= Url::toRoute('/backend/filemanager') ?>" class="btn btn-success btn-block">FileManager</a>
        </div>
    </section>
</aside>