<?php
/* @var $this \yii\web\View */
use yii\helpers\ArrayHelper;
use yii\widgets\Breadcrumbs;

/* @var $content string */

$this->beginContent('@frontend/views/layouts/base.php')
?>

        <?php if(Yii::$app->session->hasFlash('alert')):?>
            <?php echo \yii\bootstrap\Alert::widget([
                'body'=>ArrayHelper::getValue(Yii::$app->session->getFlash('alert'), 'body'),
                'options'=>ArrayHelper::getValue(Yii::$app->session->getFlash('alert'), 'options'),
            ])?>
        <?php endif; ?>
<div style="color: white;">
        <?php echo $content ?>
</div>
<?php $this->endContent() ?>
