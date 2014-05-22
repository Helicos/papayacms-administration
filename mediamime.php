<?php
/**
* Media database
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
* @version $Id: mediamime.php 39752 2014-04-24 10:55:28Z weinert $
*/

/**
* Authentication
*/
require_once("./inc.auth.php");
if ($PAPAYA_SHOW_ADMIN_PAGE &&
    $PAPAYA_USER->hasPerm(PapayaAdministrationPermissions::SYSTEM_MIMETYPES_MANAGE)) {
  initNavigation('options.php');
  $PAPAYA_LAYOUT->parameters()->set(
    'PAGE_TITLE', _gt('Administration').' - '._gt('Settings').' - '._gt('Mime Types')
  );
  $PAPAYA_LAYOUT->parameters()->set('PAGE_ICON', $PAPAYA_IMAGES['items-option']);

  $mediadb = new papaya_mediadb_mime;
  $mediadb->layout = $PAPAYA_LAYOUT;

  $mediadb->initialize();
  $mediadb->execute();
  $mediadb->getXML();
}
require('inc.footer.php');
