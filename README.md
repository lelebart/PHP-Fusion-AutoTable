PHP-Fusion-AutoTable
====================

The BBoode for PHP-Fusion for creating tables


    Type: ...... BBcode
    Name: ...... AutoTable
    Version: ... 1.00
    Author: .... Valerio Vendrame (lelebart)
    Released: .. Jan, 27th 2010


This program is released as free software under the Affero GPL license. You can redistribute it and/or modify it under the terms of this license which you can read by viewing the included agpl.txt or online at www.gnu.org/licenses/agpl.html. Removal of this copyright header is strictly prohibited without written permission from the original author(s).
	
	Table of Contents
		- Description
		- Installation
		- Usage
		- Notes


Description
-----------

With this BBcode you can create easly tables just using it.


Installation
------------

1. Upload all files and folders to your ftp root;
2. Go to Admin -> System Administration -> BBCodes and 
3. just enable "autotable" BBCode, that's it!


Usage
-----

In order to obtain a table like this:

	+-------+-------+-------+
	| ceil1 | ceil2 | ceil3 |
	+-------+---------------+
	| ceil4 |     ceil5     |
	+-------+---------------+

you've to type something like:

    [autotable]ceil1::ceil2::ceil3
    ceil4::{2}ceil5[/autotable]


Notes
-----

Every new line will output a row. :)