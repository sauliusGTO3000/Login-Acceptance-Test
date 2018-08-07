<?php


/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = NULL)
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

   /**
    * Define custom actions here
    */
    function loadPage($path) {
        $I = $this;
        $I->wantTo('Test if page was loaded correctly');
        $I->amOnPage($path);
        $I->dontSeeElement('.error404');
        $I->see("Prisijunkite");


    }

    function loginwithCredentials($username, $password){
        $I = $this;
        $I->wantTo('Test login with false credentials');
        $I->submitForm(['name'=>'authenticationForm'], array(
            'username' => $username,
            'password' => $password,
        ));
        $I->wait(3);
    }



}
