SBD.COM SETUP INSTRUCTIONS
--------------------------

This file provides instructions for setting up the local containerized site using Lando for purposes of the FCC project.


INSTALL LANDO
-------------

1. Downloading the appropriate release of Lando for your OS and Install: https://github.com/lando/lando/releases

2. You can see more details instructions on installing Lando at: https://docs.lando.dev/basics/installation.html



INSTALL & SETUP DRUPAL
----------------------

1. Clone the git repo to your local from Acquia GIT Repo at: fccweb@svn-21939.prod.hosting.acquia.com:fccweb.git

2. Run the `lando start` command to launch the container. Not that the first time you run this command, it will take some time to complete, as it is installing the container and all dependencies for the first time (i.e., Apache, PHP, MySQL, etc).

3. Install Drupal by running `lando composer install`

4. Setup the Drupal site by running visiting the URL displayed after running 'lando start'. The database, username and password are 'drupal9', and the host is 'database'.

5. Install SBD site using http://fcc.lndo.site:8080/core/install.php

6. Update Shortcut UUID using command "lando drush config-set "shortcut.set.default" uuid cf35a180-c72a-426a-9a36-3e8dda2779b6"

7. Update Site UUID using command "lando drush config-set "system.site" uuid f9364e4c-675d-4f00-b262-386aba647867"
