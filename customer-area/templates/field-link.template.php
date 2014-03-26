<?php /** Template version: 1.0.0 */ ?>

<?php	 
	$class = implode( ' ', $field['classes'] );
	$label = $field['label'];
	$placeholder = $field['placeholder']; 
	$value = empty( $field['value'] ) && $placeholder!==false ? $placeholder : $field['value'];

	if ( empty( $value ) ) {
		$value_shown = $placeholder;
	} else {
		if ( 0!=strpos( $value, 'http' ) ) $value = 'http://' . $value;
		
		$value_shown = str_replace( 'http://', '', $value );
		$value_shown = str_replace( 'https://', '', $value_shown );
	}
		
	if ( !empty( $value ) || $placeholder!==false ) :
?>
	<div class="cuar-field well well-sm <?php echo $class; ?>">
		<div class="row">
			<div class="cuar-field-name col-xs-3"><b><?php echo $label; ?></b></div>
			<div class="cuar-field-value col-xs-9"><a href="<?php echo $value; ?>"><?php echo $value_shown; ?></a></div>
		</div>
	</div>
<?php 
	endif;
?>