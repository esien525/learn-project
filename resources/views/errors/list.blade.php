<!-- Display Validation Errors -->
@include('common.errors')
<?php
if ($errors->any())
{
	?>
	<ul class='alert alert-danger'>
		<?php
		foreach($errors->all() as $error)
		{
			echo "<li>$error</li>";
		}
		?>
	</ul>
	<?php
}

?>
