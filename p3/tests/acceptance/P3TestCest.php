<?php

class P3TestCest
{

    // tests
    public function playGame(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->fillField('[test=higher-radio]', 'higher');
        $I->click('[test=submit-button]');
        $I->seeElement('[test=results-div]');
        
    }
}