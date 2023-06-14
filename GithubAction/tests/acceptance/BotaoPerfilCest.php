<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class BotaoPerfilCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function buscarResultadosNaPaginaTest(AcceptanceTester $I)
    {
$I->amOnPage('/menu.html');
$I->click('');
$I->click('Perfil');
$I->seeCurrentURLEquals('/perfilAluno.html');
    }
}
