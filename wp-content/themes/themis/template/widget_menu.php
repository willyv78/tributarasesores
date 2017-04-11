<?php
		echo $this->data['html']['start']; 

		$Menu=new TLThemeMenu();
		$Menu->createWidgetMenu($this->data['instance']['menu_id']);
		
		echo $this->data['html']['stop'];
?>