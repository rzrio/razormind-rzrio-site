<?php
/**
 * @var $this \yii\web\View
 * @var $model \common\models\Page
 */
$this->title = $model->title;
?>
    <nav id=menu class="menu hide">
        <ul>
            <li><span><?php echo $model->title ?></span></li>
            <li><span></span></li>
            <li><span></span></li>
            <li><span></span></li>
            <li id=homeAnchor class=active><span><b>RZR</b>.IO</span></li>
        </ul>
        <div id=menuItemActive class=item-active-bottom>
            <div class="menu-handler left"></div>
            <!--div class="menu-handler right"></div--></div>
    </nav><!-- burguer menu and fullscreen nav -->
    <div id=burguerMenu class="burguer-container hide">
        <div id=burguerTitle class=burguer-title>::Home</div>
        <a id=trigger-overlay class=burger href=#><span></span></a></div>
    <div class=burguer-overlay>
    <nav>
        <ul>
            <li><a id=aboutBurguerItem href=#><?php echo $model->title ?></a></li>
        </ul>
    </nav>
    <?php echo $model->title ?>

<div class="content-info description">
<?php echo $model->body ?>
    </div>
