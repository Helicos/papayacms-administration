<?php
/**
* Edit action boxes
*
* @copyright 2002-2009 by papaya Software GmbH - All rights reserved.
* @link http://www.papaya-cms.com/
* @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License, version 2
*
* You can redistribute and/or modify this script under the terms of the GNU General Public
* License (GPL) version 2, provided that the copyright and license notes, including these
* lines, remain unmodified. papaya is distributed in the hope that it will be useful, but
* WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
* FOR A PARTICULAR PURPOSE.
*
* @package Papaya
* @subpackage Administration
* @version $Id: boxes.php 39752 2014-04-24 10:55:28Z weinert $
*/

/**
* Authentication
*/
require_once("./inc.auth.php");

if ($PAPAYA_SHOW_ADMIN_PAGE &&
    $PAPAYA_USER->hasPerm(PapayaAdministrationPermissions::BOX_MANAGE)) {
  initNavigation();
  $PAPAYA_LAYOUT->parameters()->set('PAGE_TITLE', _gt('Content').' - '._gt('Boxes'));
  $PAPAYA_LAYOUT->parameters()->set('PAGE_ICON', $PAPAYA_IMAGES['items-box']);

  $boxes = new papaya_boxes;
  $boxes->layout = $PAPAYA_LAYOUT;
  $boxes->initialize();
  $boxes->execute();
  $boxes->getXML();
}
require('inc.footer.php');
