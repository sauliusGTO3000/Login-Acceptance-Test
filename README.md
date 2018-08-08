		1. download and run selenium-server-standalone-3.13.0 
		
		2. Download and run Chrome Driver 

		3. Change:
			  File 'Login-Acceptance-Test\vendor\bin\tests\acceptance\LoginCest.php', line 33:
				'correctUsername' change to  correct username 
				'correctPassword' change to  correct password

			  File 'Login-Acceptance-Test\vendor\bin\tests\acceptance.suite.yml', line 11:
				change Url to main page of the system
		
		4. Run the test using 'Login-Acceptance-Test\vendor\bin>codecept run'
