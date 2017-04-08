<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use backend\assets\AppAsset;

$path = AppAsset::register($this);

$this->title = 'Login';

?>
<div class="container">
  <div class="info">
    <img src="<?=$path->baseUrl?>/images/logo-mail-cz-new.png"/>
  </div>
</div>
<div class="container">
	<div class="container">
		<div class="row">



		<?php $form = ActiveForm::begin(['class' => 'login-form']); ?>
		
			<?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
			<?= $form->field($model, 'password')->passwordInput() ?>
			<div class="form-group">
				<?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
			</div>
			<div class="remember-checkbox">
				<?= $form->field($model, 'rememberMe')->checkbox() ?>
			</div>
		
		<?php ActiveForm::end(); ?>
		</div>
	</div>
</div>
<video id="video" autoplay="autoplay" loop="loop" poster="">
	<source src="<?=$path->baseUrl?>/video/cloud2.mp4" type="video/mp4"/>
</video>
