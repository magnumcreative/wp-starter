# MAGNUM WP-Starter
This is a base Wordpress starter configuration. The following moves wordpress in to it's own directory, creates a working directory for your theme develope and has base wp-config settings commonly used in our workflow.

## Setup
The following steps will get your local environment setup with the repo
### Create project directory
Create your local project diretory to start things off. You may already have a folder or directoy created. If that is the case you decide if you need to create a few files or just commit what is there already. Note: when committing to GitHub it will look for a repo with the same name as your local directory and push there.

````
mkdir mysite && cd mysite
git init
touch README.md
git add README.md
git commit -m "Initial commit."
````
You now have a blank project to start with.
### Clone wp-starter
Clone the wp-starter repo to your local working project directory that you created above

````
git cd <your project dir>
git clone https://github.com/magnumcreative/wp-starter.git .
git submodule update --init
````
### Add your theme
Adding your theme. The below will grab the roots theme and install in to the themes dir. Make sure to change the name of your theme to match the project or company. The below is a our common starter theme - <a href="https://github.com/roots/roots">Roots</a> - but you can apply any theme you want.

````
git clone git://github.com/roots/roots.git wrk/themes/<name theme>
````
### Updating Wordpress

````
# switch to the master branch
git checkout 3.9.1

# pull the current version
git pull

# check status
git-status
````
------------
## Raw HTML folder

**We still need to add some files here** but once there you will get a set of files allowing you to build out raw html files that are connected to the theme itself. Any changes in JS or LESS will automatically be reflected in the raw folder. Pending your workflow you can decide if you want to build raw html or work directly in the theme templates and skip having raw html files which you will still have to integrate to the theme.

Having raw html files is nice. It allows you to think out large or small design changes without effecting any of the WP templates creating a bunch of test templates which would garbage up the templates folder. Your call.

------------
## Working Locally

### httpd-vhosts.conf and host file
Steps to configure your local machine to load the development site under domain of your chooseing.

Vista and Windows 7 use User Account Control (UAC) so Notepad must be run as Administrator.

* Click Start -> All Programs -> Accessories
* Right click Notepad and select Run as administrator
* Click Continue on the "Windows needs your permission" UAC window
* When Notepad opens Click File -> Open
* In the filename field type C:\Windows\System32\Drivers\etc\hosts
* Click Open

````
#add the desired domain mapping to your host file
#if the site is to use WWW then ensure you map it in the domain as well

127.0.0.1       mysite.mag
127.0.0.1       www.mysite.mag (don't add both)
````
Then apply the domain to WAMP and restart the server
* Know where you installed WAMP
* Open path to httpd-vhosts
* D:\Utilities\wamp\bin\apache\apache2.2.22\conf\extra
* Add host (see below)
````
<VirtualHost *:80>
  ServerName mysite.mag
  DocumentRoot "/path/to/website/mysite"
</VirtualHost>
````
