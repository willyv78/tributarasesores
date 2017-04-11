<?php 
		echo $this->data['html']['start']; 
?>
		<ul class="list-0 archive-list">
			<?php wp_get_archives(); ?>
		</ul>
<?php 
		echo $this->data['html']['stop']; 
?>