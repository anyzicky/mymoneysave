<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');

$I->amOnPage('/');

$I->seeInTitle('Dashboard');
$I->see('Save my money');
