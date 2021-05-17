<?php 
get_header();
?>
<div>
	<?php 
	if(have_posts())
	{
		while(have_posts())
		{
			the_post();
			?>
			<h1>Hello World!</h1>
			<?php
		}
	}
	?>
	
</div>
<?php 
get_footer();
?>