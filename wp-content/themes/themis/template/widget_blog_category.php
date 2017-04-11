<?php 
		echo $this->data['html']['start']; 
?>
		<ul class="list-0 category-list">
			<?php wp_list_categories(array('title_li'=>'','hierarchical'=>'false','current_category'=>get_query_var('cat'))); ?>
		</ul>
<?php 
		echo $this->data['html']['stop']; 
?>