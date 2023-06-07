<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class ListaDeInstrutoresCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function buscarResultadosNaPaginaTest(AcceptanceTester $I)
    {
$I->click('boxMatematica');
$I->seeCurrentURLEquals('/pgProf.html');
$I->click('Fidelis Zanetti de Castro 
				Professor doutor em MatemÃ¡tica Aplicada formado pela Unicamp');
$I->seeCurrentURLEquals('/perfilProf.html');

    }
}
