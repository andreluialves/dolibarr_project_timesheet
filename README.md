
[uri_license]: http://www.gnu.org/licenses/agpl.html
[uri_license_image]: https://img.shields.io/badge/License-AGPL%20v3-blue.svg

[![License: AGPL v3][uri_license_image]][uri_license]

# dolibarr_project_timesheet
Module to increase time registration efficiency for Dolibarr, well suited for counsulting firm but not only.

## Useful links
* Manual (English): https://cloud.pmpd.eu/index.php/s/MArFKsQxCcTGxKM
* DoliStore: https://www.dolistore.com/fr/gestion-produits-ou-services/419-Feuille-de-temps.html
* Free version: https://sourceforge.net/projects/dolibarr-timesheet
* Github: https://github.com/delcroip/dolibarr_project_timesheet
* FR development thread: https://www.dolibarr.fr/forum/11-suggestionsnouvelles-fonctionnalites/49379-timesheet-vue-pour-les-projets

# Installation
* Download and unzip the module
* Move the `timesheet` folder in Dolibarr's web root
* Enable the module in the **Configuration > Modules/Applications**

# Prerequisites
* **Active projects and tasks**
* Users assigned to the project(s) and task(s)

# Functionnalities
 - Timespend entry by week or Month for all the eligible tasks of a user in the timesheet page (splitted week possible, possible to add time spent for subordinates)
 - total per day and per timesheet
 - Holiday are showed in the timesheet page
 - Layout customisation (show/hide the '00:00', show/hide the draft project task,show ref or not, show the related project or not ... )
 - Timesheet approval by N+1 (home box & email reminder possible)
 - Tasks can be masked/showed via favoris
 - User report by month
 - Project report between dates
 - create invoice from the project report

 
## Functionnalities eligible for removal

## Functionnalities not maintained
 - Timesheet navigation & submit done with Ajax (no reload of the entire page needed)

# Known bug/limitation
- Background color not working with the metro theme (work arround: replace `background:#fafafa!important` by `background:` in `htdocs\theme\metro\style.css.php:2253`).

# Next dev under analysis
- Ressource planning  (planning for TL and PM + weekly summary by email to user)
    - non-project related TS 
    - simple attendance logging

# Next developement for other release
- integrate weekly hour in the ts messages along with a week total (possible issue with splitted week) 
- finetune the modules rights management (admin ...) 
- handle the right for cust /  supplier / other approval  
- show the Quantity in the step 2 of invoicing (js)
- my timesheet page to see the status of the TS
    - add automatic reminder for the approval
    - reminder when TS is not filled in ( email and home page)
- better ajax error when adding fav
- add total to the otherAP
- maintain the ajax behavior
