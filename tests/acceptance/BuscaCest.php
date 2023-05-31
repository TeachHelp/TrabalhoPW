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
		$I->amOnPage('/');
		$I->fillField('txtEmailName', 'harian@gmail.com');
		$I->fillField('txtSenhaName', 'harian123');
		$I->click('Login');
		$I->seeCurrentURLEquals('/menu.html');

    }
}
