<?php

use Page\Acceptance\Login;


class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    	date_default_timezone_set('GMT');

    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }

    public function frontPageWorks(AcceptanceTester $I)
    {

    	$I->amOnPage('/');
    	$I->see('Login');
    }

    public function loginWorks(AcceptanceTester $I)
    {
        $loginPage = new Login($I);

    	$I->amOnPage($loginPage::$URL);
    	$I->fillField($loginPage::$emailField, 'tt1@tt1.com');
    	$I->fillField($loginPage::$passwordField, 'tt1tt1tt1');
    	$I->click($loginPage::$loginButton);
    	$I->fillField($loginPage::$pinField,'6699');
    	$I->click($loginPage::$pinButton);
    	$I->see($loginPage::$accountDetailLabel);
    	$I->see($loginPage::$showcaseLabel);
    	$I->see($loginPage::$changePasswordLabel);
    	$I->see($loginPage::$partnerUpLabel);
    	$I->see($loginPage::$purchasesLabel);
    	$I->see($loginPage::$extensionsLabel);
    	$I->see($loginPage::$cloudStoresLabel);
    }
}
