<?php
/**
* Sitemap
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
* @version $Id: themes.php 39752 2014-04-24 10:55:28Z weinert $
*/

/**
* Authentication
*/
require_once("./inc.auth.php");

if ($PAPAYA_SHOW_ADMIN_PAGE &&
    $PAPAYA_USER->hasPerm(PapayaAdministrationPermissions::SYSTEM_THEMESET_MANAGE)) {

  initNavigation();
  $PAPAYA_LAYOUT->parameters()->set(
    'PAGE_TITLE', _gt('Administration').' - '._gt('Settings').' - '._gt('Dynamic Themes')
  );
  $PAPAYA_LAYOUT->parameters()->set('PAGE_ICON', $PAPAYA_IMAGES['items-theme']);

  $themes = new PapayaAdministrationThemeEditor($PAPAYA_LAYOUT);
  $themes->execute();
}
require('inc.footer.php');
