<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class BuscaCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function buscarResultadosNaPaginaTest(AcceptanceTester $I)
    {
		
          $I = new AcceptanceTester($scenario);
          $I->amOnPage('/');
          $I->click('Login');
          $I->seeCurrentURLEquals('/menu.html');

    }
}
