<?php
/* ======================================================
# Display Date and Time - Joomla! Module v2.2.7 (FREE version)
# -------------------------------------------------------
# For Joomla! 3.0
# Author: Yiannis Christodoulou (yiannis@web357.eu)
# Copyright (©) 2009-2017 Web357. All rights reserved.
# License: GNU/GPLv3, http://www.gnu.org/licenses/gpl-3.0.html
# Website: https://www.web357.eu/
# Demo: http://demo.web357.eu/?item=datetime
# Support: support@web357.eu
# Last modified: 05 Jul 2017, 15:07:04
========================================================= */

defined( '_JEXEC' ) or die( 'Restricted access' ); 

// CSS Style
$document->addStyleSheet($host.'modules/mod_datetime/tmpl/default.css');
?>
<div class="mod_datetime"><?php echo $front_text; ?><time datetime="<?php echo $full_datetime; ?>"><?php echo $date.''.$between_text.''.$time; ?></time><?php echo $end_text; ?></div>
