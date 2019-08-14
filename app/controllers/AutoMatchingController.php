<?php
// error_reporting(E_ERROR | E_PARSE);


/**



*/
class AutoMatchingController extends controller
{




	public function __construct(){

		$this->settings = SiteSettings::site_settings();

		if ($this->settings['put_on_automatic_matching'] == 1) {

			$this->match_ghs_and_phs();
		}



		if ($this->settings['match_email_notification'] == 1) {
			$this->match_email_notification();
		}

		if ($this->settings['match_sms_notification'] == 1) {
			$this->match_sms_notification();
		}





		$this->fetch_news();
		$this->resolve_all_expired_match();

	}


	public function match_sms_notification()
	{

	}

	public function match_email_notification()
	{
		Notifications::send_email_notifications();
	}

	public function match_ghs_and_phs()
	{

		$valid_phs  =  PH::fetch_all_valid_unfufilled_phs()->pluck('id')->toArray();
		$valid_ghs  =  GH::fetch_all_valid_unfufilled_ghs()->pluck('id')->toArray();

			
		Match::match_ghs_and_phs($valid_ghs, $valid_phs);

	}
	









	public function fetch_news()
	{
		$today = date("Y-m-d");
		$pulled_broadcast_ids = Notifications::where('user_id', $this->auth()->id)->get()->pluck('broadcast_id')->toArray();
		$recent_news = 	BroadCast::where('status', 1)->latest()
								//  ->whereNotIn('id', $pulled_broadcast_ids)
								//  ->whereDate("updated_at", '>=' , $today)
								 ->get();

								 
		foreach ($recent_news as $key => $news) {
                    
                    if(in_array($news->id, $pulled_broadcast_ids)){
                        continue;   
                    }

			$url = "user/notifications";
			$short_message = substr($news->broadcast_message, 0, 30);
				Notifications::create_notification(
										$this->auth()->id,
										$url, 
										"Notification", 
										$news->broadcast_message, 
										$short_message,
										null,
										$news->id
										);


		}
	}







	public function resolve_all_expired_match()
	{
	 //delete match and block ph user

		$expired_matches = Match::expired_matches()->get();

		foreach ($expired_matches as $match) {

			if ( ($match->payment_proof == '')) {
				$match->delete_match();
				 $match->ph->user->block_user();
			}
		}
	}










}
















?>