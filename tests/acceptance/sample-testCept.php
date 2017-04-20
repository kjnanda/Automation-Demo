<?php
/**
* Scenario : To check if login works properly
*/

use Page\Login as LoginPage;
use Page\Constants as ConstantsPage;


    $I = new AcceptanceTester( $scenario );
    $I->wantTo( 'Check login works fine' );

    $login = new LoginPage( $I );
    $login->loginToSite( ConstantsPage::$username, ConstantsPage::$password );

    echo "logged in successfully!";
?>
