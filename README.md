This is a base Wordpress starter theme configured how we start most projects

````
git cd <your project dir>
git clone https://github.com/magnumcreative/wp-starter.git .
git submodule init
git submodule update
````
### Add your theme
Adding your theme. The below will grab the roots theme and install in to the themes dir. Make sure to change the name of your theme to match the project or company. The below is a our common starter theme - <a href="https://github.com/roots/roots">Roots</a> - but you can apply any theme you want.

````
git clone git://github.com/roots/roots.git wrk/themes/<name theme>
````
### Working with raw HTML folder

This needs to be added still but once there you will get a set of files allowing you to build out raw html files that are connected to the theme itself. Any changes in JS or LESS will automatically be reflected in the raw folder. Pending your workflow you can decide if you want to build raw html or work directly in the theme templates and skip having raw html files which you will still have to integrate to the theme.

Having raw html files is nice. It allows you to think out large or small design changes without effecting any of the WP templates creating a bunch of test templates which would garbage up the templates folder. Your call.

### Updating Wordpress

````
# switch to the master branch
git checkout master

# pull the current version
git pull

# check status
git-status
````
### httpd-vhosts.conf

Steps to configure your local machine to load the development site under domain of your chooseing.

Vista and Windows 7 use User Account Control (UAC) so Notepad must be run as Administrator.

* Click Start -> All Programs -> Accessories
* Right click Notepad and select Run as administrator
* Click Continue on the "Windows needs your permission" UAC window
* When Notepad opens Click File -> Open
* In the filename field type C:\Windows\System32\Drivers\etc\hosts
* Click Open

````
<VirtualHost *:80>
  ServerName benword.dev
  CustomLog "/Users/ben/Sites/logs/benword-access_log" combined
  ErrorLog "/Users/ben/Sites/logs/benword-error_log"
  DocumentRoot "/Users/ben/Sites/benword"
</VirtualHost>
````
