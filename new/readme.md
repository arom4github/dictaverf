## Table of Contents
1. [General Info](#general-info)
2. [Progress](#progress)
3. [Architecture](#architecture)
4. [Installation](#installation)
5. [Technologies](#technologies)
### General Info
***
A PHP site that aims to show stimuli and reactions with different dictionaries. There are 6 dictionaries.
### Progress
***
Currently the html and css part is finished, the direct and invert search of the FAS dictionary is finished too.\
We have to add the data filtering for all the dictionaries and do the direct and invert search and the questionnaires for the other dictionaries.\
Once it is finished, complete the help page.
### Architecture
***
/api/ -> Configurations/functions for the database, files to use as an API for get data from database.\
/doc/ -> Project documentation (index.html).\
/images/ -> Centralisation of images and icon used for the website.\
/layout/ -> CSS and Javascript files.\
/pages/includes/ -> Language configuration and part of code used in several pages.\
/pages/lang/ -> Russian and French words/sentences used in the website.\
/pages/search/ -> Pages for searching words in database.\
/pages/*.php -> Pages of the website.\
## Installation
***
A little intro about the installation. 
```
$ git clone https://github.com/MasterFiyeur/internship2021.git
$ cd internship2021
```
Launch a PHP server.\
Modify pages/includes/config.php (change the variable $BASE_PATH).\
Copy api/db_config.php.example, remove the 'example' extension and edit the file with your own settings.\
Enjoy.
## Technologies
***
A list of technologies used within the project:
* [jQuery](https://jquery.com/): Version 3.3.1 (jquery.min.js)
* [Font Awesome Free](https://fontawesome.com): Version 5.0.12 (fontawesome-all.min.css)