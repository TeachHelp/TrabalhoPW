<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class TesteExceptionLoginCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function buscarResultadosNaPaginaTest(AcceptanceTester $I)
    {
		$I->amOnPage('/');
		$I->click('Login');
		$I->see('Email deve ser preenchido!');
		$I->see('Senha deve ser preenchida!');
    }
}
