<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('see that i edit waste');

$I->amOnPage('/stat/1');

$I->seeInTitle('Statistic');
$I->see('Edit Rocket league PS');
