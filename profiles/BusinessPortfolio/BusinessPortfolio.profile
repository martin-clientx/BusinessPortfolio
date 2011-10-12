<?php
/*
 *      sql.profile
 *
 *      Copyright 2008 David Konsumer <konsumer@jetboystudio.com>
 *
 *      This program is free software; you can redistribute it and/or modify
 *      it under the terms of the GNU General Public License as published by
 *      the Free Software Foundation; either version 2 of the License, or
 *      (at your option) any later version.
 *
 *      This program is distributed in the hope that it will be useful,
 *      but WITHOUT ANY WARRANTY; without even the implied warranty of
 *      MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *      GNU General Public License for more details.
 *
 *      You should have received a copy of the GNU General Public License
 *      along with this program; if not, write to the Free Software
 *      Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 *      MA 02110-1301, USA.
 */

/**
 * Return an array of the modules to be enabled when this profile is installed.
 *
 * @return array
 *  An array of modules to be enabled.
 */
function BusinessPortfolio_profile_modules() {
  // all the modules are in the SQL!
  return array ();
}


/**
 * Return a description of the profile for the initial installation screen.
 *
 * @return array
 *   An array with keys 'name' and 'description' describing this profile.
 */

function BusinessPortfolio_profile_details() {
  return array(
    'name' => 'Business Portfolio 6.x Easy Installer',
    'description' => 'Business Portfolio',
  );
}

/**
 * this will import a very large sql dump
 *
 * @param $filename string the file to import
 * @return intenger teh number of queries executed.
 */

/**
 * Perform any final installation tasks for this profile.
 *
 * @return
 *   An optional HTML string to display to the user on the final installation
 *   screen.
 */

function BusinessPortfolio_profile_import_sql($filename){
  $buffer='';
  $count=0;
  $handle = @fopen($filename, "r");
  if ($handle) {
      while (!feof($handle)) {
          $line = fgets($handle);
          $buffer.=$line;
          if(preg_match('|;$|', $line)){
            $count++;
            _db_query($buffer);
            $buffer='';
          }
      }
      fclose($handle);
  }
  return $count;
}

function BusinessPortfolio_profile_tasks(&$task, $url) {
  
  $sql_file=dirname(__FILE__).'/site.sql';
  $count=BusinessPortfolio_profile_import_sql($sql_file);
  drupal_set_message("Business Portfolio Easy Installation was a Success! Imported $count queries.");
  drupal_set_message("For security purposes, it's recommended that you delete $sql_file, or move the Business Portfolio profile folder out of your webroot.");

}


