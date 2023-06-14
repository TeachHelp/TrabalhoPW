<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class RealizarLogoutCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function buscarResultadosNaPaginaTest(AcceptanceTester $I)
    {
              $I->amOnPage('/menu.html');
              $I->click('BtnLogin');
              $I->click('Logout');
              $I->amOnPage('/index.html');
    }
}
