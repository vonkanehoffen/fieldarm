<?php /** Template version: 1.0.0 */ ?>

<?php	 
	$class = implode( ' ', $field['classes'] );
	$label = $field['label'];
	$placeholder = $field['placeholder']; 
	$value = empty( $field['value'] ) && $placeholder!==false ? $placeholder : $field['value'];
		
	if ( !empty( $value ) || $placeholder!==false ) :
?>
	<div class="cuar-field well well-sm <?php echo $class; ?>">
		<div class="row">
			<div class="cuar-field-name col-xs-3"><b><?php echo $label; ?></b></div>
			<div class="cuar-field-value col-xs-9"><?php echo $value; ?></div>
		</div>
	</div>
<?php 
	endif;
?>