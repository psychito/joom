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

defined('JPATH_BASE') or die;

jimport('joomla.form.formfield');
jimport( 'joomla.form.form' );

class JFormFieldw357frmrk extends JFormField {
	
	protected $type = 'w357frmrk';

	protected function getLabel()
	{
		return '';	
	}

	protected function getInput() 
	{
		// BEGIN: Check if Web357 Framework plugin exists
		jimport('joomla.plugin.helper');
		if(!JPluginHelper::isEnabled('system', 'web357framework')):
			$web357framework_required_msg = JText::_('<p>The <strong>"Web357 Framework"</strong> is required for this extension and must be active. Please, download and install it from <a href="http://downloads.web357.eu/?item=web357framework&type=free">here</a>. It\'s FREE!</p>');
			JFactory::getApplication()->enqueueMessage($web357framework_required_msg, 'warning');
			return false;
		else:
			return '';	
		endif;
		// END: Check if Web357 Framework plugin exists
	}
	
}