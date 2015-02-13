<?php

/**
 * Show links to tables from information_schema tables
 *
 * @link http://www.adminer.org/plugins/#use
 * @author Vlasta Neubauer, http://paranoiq.cz/
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
 */
class AdminerScrollableTables
{

	public function head()
	{
		echo '<script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>';
		echo '<script src="https://code.jquery.com/jquery-migrate-3.0.0.js" integrity="sha256-lsVOB+3Yhm6He5MkTO3Bw/Xw4NXK7wYYTi1Y+M/2PrM=" crossorigin="anonymous"></script>';
		echo '<script src="static/scrollable.js"></script>';
		echo '<script>(function ($) { $(".checktable").makeScrollable(200, 300); })(jQuery);</script>';
	}

}
