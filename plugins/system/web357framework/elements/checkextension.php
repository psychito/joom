<?php
/* ======================================================
# Web357 Framework - Joomla! System Plugin v1.4.5
# -------------------------------------------------------
# For Joomla! 3.0
# Author: Yiannis Christodoulou (yiannis@web357.eu)
# Copyright (©) 2009-2017 Web357. All rights reserved.
# License: GNU/GPLv3, http://www.gnu.org/licenses/gpl-3.0.html
# Website: https://www.web357.eu/
# Support: support@web357.eu
# Last modified: 05 Jul 2017, 15:07:04
========================================================= */

defined('JPATH_BASE') or die;

require_once('elements_helper.php');

jimport('joomla.form.formfield');
jimport( 'joomla.form.form' );

class JFormFieldcheckextension extends JFormField {
	
	protected $type = 'checkextension';

	protected function getLabel()
	{
		$option = (string) $this->element["option"];

		if (!empty($option) && !$this->isActive($option))
		{
            return '<div style="color:red">'.sprintf(JText::_('W357FRM_EXTENSION_IS_NOT_ACTIVE'), $option).'</div>';
		}
		else
		{
            return '<div style="color:darkgreen">'.sprintf(JText::_('W357FRM_EXTENSION_IS_ACTIVE'), $option).'</div>';
		}
	}

	// Check if the component is installed and is enabled
	public function isActive($option) // e.g. $option = com_k2
	{
		if (!empty($option))
		{
			jimport('joomla.component.helper');
			if(!JComponentHelper::isInstalled($option) || !JComponentHelper::isEnabled($option))
			{
				return false;
			}
			else
			{
				return true;
			}
		}
		else
		{
			die('The extension name is not detected.');
		}
		
	}

	protected function getInput() 
	{
		return '';
	}
	
}