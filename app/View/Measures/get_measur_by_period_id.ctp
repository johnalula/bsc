<option value='empty'><?php echo 'select a measure'; ?></option>
<?php foreach ($measures as $key => $value): ?>
<option value="<?php echo $key; ?>"><?php echo $value; ?></option>
<?php endforeach; ?>
<?php echo "this is measuer"?>
