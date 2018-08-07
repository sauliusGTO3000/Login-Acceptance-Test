<?php

use \Codeception\Step\Argument\PasswordArgument;
use Codeception\Exception\ModuleException;


class SigninCest
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
        $I->loginwithCredentials('sauliusgto3000@gmail.com', 'Saulius2020');
        $I->dontSee('Neteisingai įvesti duomenys');
        $I->SeeInCurrentUrl('account-overview');
    }

}
