# Project 3
+ By: William Tang
+ URL: <http://e2p3.william-tang.com>

## Graduate requirement
+ [x] I have integrated testing into my application
+ [ ] I am taking this course for undergraduate credit and have opted out of integrating testing into my application

## Outside resources
-none used

## Codeception testing output
```
Codeception PHP Testing Framework v4.1.23
Powered by PHPUnit 9.5.10 by Sebastian Bergmann and contributors.

Acceptance Tests (1) ---------------------------------------------------------------------------------------------------------------------------------------------------------------------
P3TestCest: Play game
Signature: P3TestCest:playGame
Test: tests/acceptance/P3TestCest.php:playGame
Scenario --
 I am on page "/"
 I fill field "[test=higher-radio]","higher"
 I click "[test=submit-button]"
 I see element "[test=results-div]"
 PASSED 

------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


Time: 00:00.285, Memory: 12.00 MB

OK (1 test, 1 assertion)
```