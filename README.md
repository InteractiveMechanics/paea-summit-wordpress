# PAEA 2016 Stakeholder Summit
## WordPress Theme & Files

#### Installation
To set up a local staging version of this site, follow these steps:
*  Download WordPress v4.2.3 and unzip to where you want the site to live.
*  Delete the wp-config-sample.php file, as we're going to pull our own in later.
*  In that directory, run `git init .` to create a repo in the current directory.
*  Run `git remote add origin <https or ssh url>` to track this repo as origin.
*  Run `git pull origin master` to get the latest changes.
*  Copy wp-config-sample.php to wp-config.php. This file should have everything you need already.
*  Run a simple web server in the directory using `php -S localhost:80`. If it give you a permission issue, you might need to run it as sudo.
