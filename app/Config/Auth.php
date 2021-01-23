<?php namespace Config;

use Myth\Auth\Config\Auth as AuthConfig;

class Auth extends AuthConfig
{
    //--------------------------------------------------------------------
    // Layout for the views to extend
    //--------------------------------------------------------------------

    public $viewLayout = 'App\Views\auth\layout';

    /**
	 * --------------------------------------------------------------------
	 * Views used by Auth Controllers
	 * --------------------------------------------------------------------
	 *
	 * @var array
	 */
	public $views = [
		'login'		        => 'App\Views\auth\login',
		'register'		    => 'App\Views\auth\register',
		'forgot'		    => 'App\Views\auth\forgot',
		'reset'		        => 'App\Views\auth\reset',
		'emailForgot'	    => 'App\Views\auth\emails\forgot',
		'emailActivation'   => 'App\Views\auth\emails\activation',
	];
    
    //--------------------------------------------------------------------
    // Allow User Registration
    //--------------------------------------------------------------------
    // When enabled (default) any unregistered user may apply for a new
    // account. If you disable registration you may need to ensure your
    // controllers and views know not to offer registration.
    //
    public $allowRegistration = true;

    /**
	 * --------------------------------------------------------------------
	 * Require Confirmation Registration via Email
	 * --------------------------------------------------------------------
	 *
	 * When enabled, every registered user will receive an email message
	 * with an activation link to confirm the account.
	 *
	 * @var string Name of the ActivatorInterface class
	 */
    // public $requireActivation = 'Myth\Auth\Authentication\Activators\EmailActivator';
    public $requireActivation = false;

	/**
	 * --------------------------------------------------------------------
	 * Allow Password Reset via Email
	 * --------------------------------------------------------------------
	 *
	 * When enabled, users will have the option to reset their password
	 * via the specified Resetter. Default setting is email.
	 *
	 * @var string Name of the ResetterInterface class
	 */
    // public $activeResetter = 'Myth\Auth\Authentication\Resetters\EmailResetter';
    public $activeResetter = false;

    //--------------------------------------------------------------------
    // Allow Persistent Login Cookies (Remember me)
    //--------------------------------------------------------------------
    // While every attempt has been made to create a very strong protection
    // with the remember me system, there are some cases (like when you
    // need extreme protection, like dealing with users financials) that
    // you might not want the extra risk associated with this cookie-based
    // solution.
    //
    public $allowRemembering = true;

    //--------------------------------------------------------------------
    // Remember Length
    //--------------------------------------------------------------------
    // The amount of time, in seconds, that you want a login to last for.
    // Defaults to 30 days.
    //
    public $rememberLength = 30 * DAY;

    //--------------------------------------------------------------------
    // Error handling
    //--------------------------------------------------------------------
    // If true, will continue instead of throwing exceptions.
    //
    public $silent = false;
}