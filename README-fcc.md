FCC SETUP INSTRUCTIONS
--------------------------

This file provides instructions for setting up the local containerized site using Lando for purposes of the FCC project.


INSTALLING LANDO
-------------

1. Downloading the appropriate release of Lando for your OS and Install: https://github.com/lando/lando/releases

2. You can see more details instructions on installing Lando at: https://docs.lando.dev/basics/installation.html



INSTALL & SETUP DRUPAL
----------------------

1. Clone the git repo to your local from Acquia GIT Repo at: "fccweb@svn-21939.prod.hosting.acquia.com:fccweb.git"

2. Run the `lando start` command to launch the container. Not that the first time you run this command, it will take some time to complete, as it is installing the container and all dependencies for the first time (i.e., Apache, PHP, MySQL, etc).

3. Install Drupal by running `lando composer install`

4. Setup the Drupal site by running visiting the URL displayed after running 'lando start'. The database, username and password are 'drupal9', and the host is 'database'.

5. Install FCC/any site using http://fcc.lndo.site:8080/core/install.php

Fcc -

	6. Update Shortcut UUID using command "lando drush config-set "shortcut.set.default" uuid bff6f04c-f555-4869-a2bf-0f99bdb409ad"

	7. Update Site UUID using command "lando drush config-set "system.site" uuid 29d55b59-6741-4427-9fda-ca63e7ed507f"

Domino Sugar -

	6. Update Shortcut UUID using command "lando drush config-set "shortcut.set.default" uuid 6c9b9ff2-f468-4db4-b7b9-f92664d1b64d"

	7. Update Site UUID using command "lando drush config-set "system.site" uuid e5a8c348-d542-46fe-9fec-f49b7d45df75"

8. Execute "lando drush cim" from site specific folder.

9. Execute "lando drush cr" from site specific folder.
