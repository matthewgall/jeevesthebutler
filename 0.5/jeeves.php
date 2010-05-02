<?php
/**********************************************************************************
* SMFShop: Jeeves The Butler                                                      *
* =============================================================================== *
* This program is free software; you may redistribute it and/or modify it under   *
* the terms of the provided license as published by Simple Machines LLC.          *
*                                                                                 *
* This program is distributed in the hope that it is and will be useful, but      *
* WITHOUT ANY WARRANTIES; without even any implied warranty of MERCHANTABILITY    *
* or FITNESS FOR A PARTICULAR PURPOSE.                                            *
*                                                                                 *
* See the "license.txt" file for details of the Simple Machines license.          *
* The latest version of the license can always be found at                        *
* http://www.simplemachines.org.                                                  *
**********************************************************************************/

// This is just to make sure that the item is used through SMF, and people aren't accessing it directly
// Additionally, this is used elsewhere in SMF (in almost all the files)
if (!defined('SMF'))
	die('Hacking attempt...');

// So first of all we declare the class
class item_jeeves extends itemTemplate
{
	// When this function is called, you should set all the item's
	// variables (see inside this example)
	function getItemDetails() {

		// Author information.  Please don't change this unless you edit Jeeves.
		$this->authorName = 'Matthew Gall';
		$this->authorEmail = 'matthewgall2005@gmail.com';
		// Originally created by Stephen Ashton
		// Contact him at: saishton@bigfoot.com
		
		// Information about Jeeves. This is the default values in the item builder. 
		$this->name = 'Jeeves the Butler v2';
		$this->desc = 'Your own personal butler...His name is Jeeves - Is that weird or is it me?!';
		$this->price = 5000;
		
		// If you change these Jeeves will not work!
		$this->require_input = true;
		$this->can_use_item = true;
	}

	/*
	 * This function is called when the user tries to use the item.
	 * If your item needs any further user input then you can get that 
	 * input here (eg. if it's a "Change username" item then you have
	 * to ask the user what they'd like to change their username to).
	 * Any text you return will get shown to the user (DON'T ECHO STUFF).
	 */
	function getUseInput()
	{
		return 'Item required: <input type="text" name="name" /> (e.g. Oranges)
		<br> Number of: <input type="number" name="count" /> (e.g. 3)
		<br> Speed: <input type="text" name="speed" /> (e.g. quickly)';
	}

	// This is where all the fun begins. This function is called when 
	// the user actually uses the item. Return stuff, DON'T ECHO!
	function onUse()
	{
		return 'Jeeves ' . $_POST['speed'] . ' brings you ' . $_POST['count'] . '  ' . $_POST['name'] . '!
		<br> You laugh at him and tell him it was just a joke!
		<br> Jeeves attempts to smile and says "Very Good" and throws the ' . $_POST['name'] . ' at his programmers!';
	}
}

?>
