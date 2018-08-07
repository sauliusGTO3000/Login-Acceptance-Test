<?php

use \Codeception\Step\Argument\PasswordArgument;
use Codeception\Exception\ModuleException;


class LoginCest
{

    public function _before(AcceptanceTester $I)
    {

    }

    public function _after(AcceptanceTester $I)
    {

    }


    public function loginWithIncorrectCredentials(AcceptanceTester $I){

        $I->loadPage('lt/login');
        $I->loginwithCredentials('incorrectUsername', 'incorrectPassword');
        $I->see('Neteisingai įvesti duomenys');
        $I->dontSeeInCurrentUrl('account-overview');

    }


    public function loginWithCorrectCredentials(AcceptanceTester $I){
        $I->loadPage('lt/login');
        $I->loginwithCredentials('correctUsername', 'correctPassword');
        $I->dontSee('Neteisingai įvesti duomenys');
        $I->SeeInCurrentUrl('account-overview');
    }

}
