<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \frontend\modules\user\models\LoginForm */

$this->title = Yii::t('frontend', 'Login');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?php echo Html::encode($this->title) ?></h1>
<style>
    input,
    textarea,
    select {
        border: 1px solid #111;
        padding: 0.5em;
        font-size: 15px;
        line-height: 1.2em;
        width: 80%;
        background: #444;
        color: #fff;
        font-family: helvetica, sans-serif;
        background: -webkit-gradient(linear, left top, left bottom, from(#222), to(#444));
        -webkit-appearance: none;
        /*box-shadow*/
        -webkit-box-shadow: 1px 1px 1px #333;
        -moz-box-shadow: 1px 1px 1px #333;
        box-shadow: 1px 1px 1px #333;
    }
    input:focus,
    textarea:focus,
    select:focus { outline-color: #c00 }
    textarea {
        height: 55px;
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #222), color-stop(0.05, #333));
        background: -moz-gradient(linear, left top, left bottom, color-stop(0, #222), color-stop(0.05, #333));
        background: -o-gradient(linear, left top, left bottom, color-stop(0, #222), color-stop(0.05, #333));
        background: -ms-gradient(linear, left top, left bottom, color-stop(0, #222), color-stop(0.05, #333));
        background: gradient(linear, left top, left bottom, color-stop(0, #222), color-stop(0.05, #333));
    }
    fieldset{
        border:0;
    }
    select {
        padding: 0.5em 1em 0.5em 0.75em;
        background: #111;
        /*background-size*/}
    input[type=text] {
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #111), color-stop(0.12, #333));
        background: -moz-gradient(linear, left top, left bottom, color-stop(0, #111), color-stop(0.12, #333));
        background: -o-gradient(linear, left top, left bottom, color-stop(0, #111), color-stop(0.12, #333));
        background: -ms-gradient(linear, left top, left bottom, color-stop(0, #111), color-stop(0.12, #333));
        background:  gradient(linear, left top, left bottom, color-stop(0, #111), color-stop(0.12, #333));
    }
    input[type=submit] {
        width: auto;
        padding: 0.25em 1em;
        line-height: 1.5em;
        background: -webkit-gradient(linear, left top, left bottom, from(#a00), to(#600));
        background: -moz-gradient(linear, left top, left bottom, from(#a00), to(#600));
        background: -o-gradient(linear, left top, left bottom, from(#a00), to(#600));
        background: -ms-gradient(linear, left top, left bottom, from(#a00), to(#600));
        background: gradient(linear, left top, left bottom, from(#a00), to(#600));
        border: 2px solid #c00;
        text-shadow: 0 0 2px #300;
        font-weight: bold;
        /*box-shadow*/
        -webkit-box-shadow: 1px 1px 3px #000;
        -moz-box-shadow: 1px 1px 3px #000;
        box-shadow: 1px 1px 3px #000;
        margin-right: 0.5em;
    }
    input[type=reset] {
        width: auto;
        padding: 0.25em 1em;
        line-height: 1.5em;
        background: -webkit-gradient(linear, left top, left bottom, from(#333), to(#222));
        background: -moz-gradient(linear, left top, left bottom, from(#333), to(#222));
        background: -o-gradient(linear, left top, left bottom, from(#333), to(#222));
        background: -ms-gradient(linear, left top, left bottom, from(#333), to(#222));
        background: gradient(linear, left top, left bottom, from(#333), to(#222));
        border: 2px solid #444;
        text-shadow: 0 0 2px #300;
        font-weight: bold;
        color: #999;
        /*box-shadow*/
        -webkit-box-shadow: 1px 1px 3px #000;
        -moz-box-shadow: 1px 1px 3px #000;
        box-shadow: 1px 1px 3px #000;
    }
    input[type=checkbox],
    input[type=radio] {
        display: inline-block;
        font-size: 15px;
        line-height: 1em;
        margin: 0 0.25em 0 0;
        padding: 0;
        width: 1.25em;
        height: 1.25em;
        /*border-radius*/
        -webkit-border-radius: 0.25em;
        -moz-border-radius: 0.25em;
        border-radius: 0.25em;
        vertical-align: text-top;
    }
    input[type=radio] {
        /*border-radius*/
        -webkit-border-radius: 2em;
        -moz-border-radius: 2em;
        border-radius: 2em;
    }
    input[type=checkbox]:checked {
        background: #111;
        /*background-size*/
    }
    input[type=radio]:checked {
        /*background-size*/
        -webkit-background-size: 28px 28px;
        -moz-background-size: 28px 28px;
        -o-background-size: 28px 28px;
        background-size: 28px 28px;
    }

</style>
    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                <?php echo $form->field($model, 'identity') ?>
                <?php echo $form->field($model, 'password')->passwordInput() ?>
                <?php echo $form->field($model, 'rememberMe')->checkbox() ?>
                <div style="color:#999;margin:1em 0">
                    <?php echo Yii::t('frontend', 'If you forgot your password you can reset it <a href="{link}">here</a>', [
                        'link'=>yii\helpers\Url::to(['sign-in/request-password-reset'])
                    ]) ?>
                </div>
                <div class="form-group">
                    <?php echo Html::submitButton(Yii::t('frontend', 'Login'), ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
                <div class="form-group">
                    <?php echo Html::a(Yii::t('frontend', 'Need an account? Sign up.'), ['signup']) ?>
                </div>
                <h2><?php echo Yii::t('frontend', 'Log in with')  ?>:</h2>
                <div class="form-group">
                    <?php echo yii\authclient\widgets\AuthChoice::widget([
                        'baseAuthUrl' => ['/user/sign-in/oauth']
                    ]) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
