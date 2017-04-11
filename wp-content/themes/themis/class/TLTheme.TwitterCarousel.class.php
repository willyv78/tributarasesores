<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeTwitterCarousel
{
	/**************************************************************************/
	
	function TLThemeTwitterCarousel()
	{
			
	}
	
	/**************************************************************************/
	
	function getLatestTweet($attribute)
	{
		$Validation=new TLThemeValidation();

		TLThemeHelper::removeUIndex($attribute,'name','consumer_key','consumer_key_secret','access_token','access_token_secret','count');
		
		if($Validation->isEmpty($attribute['name'])) return(null);
		if($Validation->isEmpty($attribute['consumer_key'])) return(null);
		if($Validation->isEmpty($attribute['consumer_key_secret'])) return(null);
		if($Validation->isEmpty($attribute['access_token'])) return(null);
		if($Validation->isEmpty($attribute['access_token_secret'])) return(null);
		if(!$Validation->isNumber($attribute['count'],1,1000)) return(null);

		$connection=new TwitterOAuth($attribute['consumer_key'],$attribute['consumer_key_secret'],$attribute['access_token'],$attribute['access_token_secret']);
		$tweet=$connection->get('https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name='.$attribute['name'].'&count='.$attribute['count']);

		return($tweet);
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/

?>