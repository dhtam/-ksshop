<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Session\Store as Session;
use Illuminate\Contracts\Auth\Guard as Auth;


class LocaleMiddleware {

	public function __construct(Session $session)
	{
		$this->session = $session;
	}


	//Languages available in your resources/lang
	protected $languages = ['en','vi'];



	public function handle($request, Closure $next)
	{
		$langlist = $_SERVER['HTTP_ACCEPT_LANGUAGE'];

		// We just want the main language
		$lang = substr($langlist,0,2);

		if(isset($this->languages[$lang])){
			app()->setLocale($lang);
		}else{
			//You may log this here
		}

		return $next($request);
	}

}
