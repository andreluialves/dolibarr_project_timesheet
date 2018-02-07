<?php
/*
 * Copyright (C) 2015	   Patrick DELCROIX     <pmpdelcroix@gmail.com>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */
//global $db;     
// FIXME Ver. 3 
// Define status
//const STATUS= [
Define( "NULL",0);
Define( "DRAFT",1);
Define( "SUBMITTED",2);
Define( "APPROVED",3);
Define( "CANCELLED",4);
Define( "REJECTED",5);
Define( "CHALLENGED",6);
Define( "INVOICED",7);
Define( "UNDERAPPROVAL",8);
Define( "PLANNED",9);
Define( "STATUSMAX",10);

//APPFLOW
//const LINKED_ITEM = [
Define( "USER",0);
Define( "TEAM",1);
Define( "PROJECT",2);
Define( "CUSTOMER",3);
Define( "SUPPLIER",4);
Define( "OTHER",5);
Define( "ROLEMAX",6);

//const REDUNDANCY=[
/*Define( "NULL",0);
Define( "NONE",1);
Define( "WEEK",2);
Define( "MONTH",3);
Define( "QUARTER",4);
Define( "YEAR",5);

//const LINKED_ITEM = [
Define( "NULL",0);
Define( "NONE",1);
Define( "TASK",2);
Define( "PROJECT",3);
Define( "TIMESPENT",4);

*/

// back ground colors
define('TIMESHEET_BC_FREEZED','909090');
define('TIMESHEET_BC_VALUE','f0fff0');

// number of second in a day, used to make the code readable
define('SECINDAY',86400);



$res=0;
$path=dirname(__FILE__);
if (! $res && file_exists($path."/dev.inc.php")) {
    $res=@include $path.'/dev.inc.php';
}
if (! $res && ! empty($_SERVER["CONTEXT_DOCUMENT_ROOT"])) $res=@include($_SERVER["CONTEXT_DOCUMENT_ROOT"]."/main.inc.php");
if (! $res && file_exists($path."/../../../main.inc.php")){
    $res=@include $path.'/../../../main.inc.php'; // in HTdocs
    $_SERVER["CONTEXT_DOCUMENT_ROOT"]=realpath($path."/../../../");
}
if (! $res && file_exists($path."/../../../../main.inc.php")) {
    $res=@include $path.'/../../../../main.inc.php'; //in custom
    $_SERVER["CONTEXT_DOCUMENT_ROOT"]=realpath($path."/../../../../");
}


if (! $res) die("Include of main fails") ;

// for display trads
$roles=array(0=> 'user',1=> 'team', 2=> 'project',3=>'customer',4=>'supplier',5=>'other');
$statusA=array(0=> $langs->trans('null'),1 =>$langs->trans('draft'),2=>$langs->trans('submitted'),3=>$langs->trans('approved'),4=>$langs->trans('cancelled'),5=>$langs->trans('rejected'),6=>$langs->trans('challenged'),7=>$langs->trans('invoiced'),8=>$langs->trans('underapproval'),9=>$langs->trans('planned'));
$apflows=str_split($conf->global->TIMESHEET_APPROVAL_FLOWS);
