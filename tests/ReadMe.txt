Files require Test.php at the end so that they are included in the unit test/s
e.g RoutesTest.php

To run unit testing, cd to website root folder 
e.g /websitefoldername

Run all unit testing with single command below
phpunit

Run a single unit test with single command below
phpunit --filter NameOfTest

=================================================
Incompatible folder has outdated tests which are not suitable for the project
e.g old user registration without extra required fields such as roles.