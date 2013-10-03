<option value='empty'><?php echo 'select staf'; ?></option>
<?php foreach ($users as $key => $value): ?>
<option value="<?php echo $key; ?>"><?php echo $value; ?></option>
<?php endforeach; ?>
