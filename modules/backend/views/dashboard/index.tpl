{use class="yii\helpers\Url"}
{use class="Yii"}
<div class="backend-default-index">
    <div class="site-login">
        <div class="panel panel-info">
            <div class="panel-body bg-warning">
                <h1 class="text-center">Admin</h1>
                <p class="text-info">Оставь надежду всяк сюда входящий</p>
                {if Yii::$app->user->identity->user_role > 4}
                    <hr>
                    <a class="btn btn-success" href="{Url::toRoute('/backend/blog/index')}">Blogs</a>
                    <hr>
                    <a class="btn btn-success" href="{Url::toRoute('/backend/banner/index')}">Banners</a>
                {/if}
            </div>
        </div>
    </div>
</div>
