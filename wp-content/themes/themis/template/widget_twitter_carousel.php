<?php 
		if(!is_null($this->data['tweet']))
		{

			echo $this->data['html']['start']; 
?>
		<div class="latest-tweets" id="<?php echo $this->data['id']; ?>">
			
			<ul>
<?php
			foreach($this->data['tweet'] as $value)
			{
				$date=mb_split(' ',$value->created_at);
?>
				<li>
					<div><span class="day"><?php echo $date[2]; ?></span><span class="month"><?php echo $date[1]; ?></span></div>
					<p><?php echo $value->text; ?></p>
				</li>
<?php			
			}
?>
			</ul>
				
		</div>

		<div class="hidden">
			<script type="text/javascript">
			jQuery(document).ready(function() 
			{
				var theme=new TLTheme();
				theme.createTwitterCarousel('#<?php echo $this->data['id']; ?>','<?php echo $this->data['instance']['name']; ?>',<?php echo (int)$this->data['instance']['count']; ?>);
			});
			</script>
		</div>
<?php 
			echo $this->data['html']['stop']; 
		}
?>