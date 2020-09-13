<?php
namespace Page\Acceptance;

use AcceptanceTester;

class Login
{
    // include url of current page
    public static $URL = '/index.php?route=account/login';
    public static $emailField=['name' => 'email'];
    public static $passwordField=['name'=>'password'];
    public static $pinField=['name' => 'pin'];
    public static $loginButton='#account-login > div.container > div > div:nth-child(1) > form > div.row > div:nth-child(1) > button.btn.btn-primary.btn-lg.hidden-xs';
    public static $pinButton='#account-security > div.container > div > div.col-md-8 > form > div:nth-child(2) > button';
    public static $accountDetailLabel='Account details';
    public static $showcaseLabel='Showcase';
    public static $changePasswordLabel='Change password';
    public static $partnerUpLabel='Partner up';
    public static $purchasesLabel='Purchases';
    public static $extensionsLabel='Extensions';
    public static $cloudStoresLabel='Cloud Stores';


    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     * @param $param
     * @return string
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }

    /**
     * @var AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

    public function getEmailField()
    {
        return self::$emailField;
    }

    public function getPasswordField()
    {
        return self::$passwordField;
    }

}
