<?php
namespace Page;

class Login
{
    public static $usernameTextbox = '#user_login';
    public static $passwordTextbox = '#user_pass';
    public static $submitButton = '#wp-submit';

    protected $tester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }

    public function loginToSite( $user_name, $password ){

        $I = $this->tester;

        $I->amOnPage( '/wp-admin' );
        $I->wait( 5 );

        $I->seeElement( self::$usernameTextbox );
        $I->fillField( self::$usernameTextbox, $user_name );

        $I->seeElement( self::$passwordTextbox );
        $I->fillField( self::$passwordTextbox, $password );

        $I->seeElement( self::$submitButton );
        $I->click( self::$submitButton );

        $I->wait( 5 );

    }

}
