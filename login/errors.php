<?php if (count($errors) > 0) : ?>
  <div>
  	<?php foreach ($errors as $error) : ?>
  	  <div class="alert alert-danger"><?php echo $error ?></div><br>
  	<?php endforeach ?>
  </div>
<?php  endif ?>