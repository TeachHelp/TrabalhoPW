<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class TesteLoginCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function buscarResultadosNaPaginaTest(AcceptanceTester $I)
    {
		$I->amOnPage('/');
		$I->fillField('TxtEmail', 'harian@gmail.com');
		$I->fillField('TxtName', 'harian123');
		$I->click('Login');
		$I->seeCurrentURLEquals('/menu.html');

    }
}
