# URL-Shortner

## Demo Video
https://user-images.githubusercontent.com/76685103/147847157-a2aff4d5-21ea-4642-b8bd-c3fa1f21df2a.mp4

A deployed version can be checked here: http://ec2-3-142-232-79.us-east-2.compute.amazonaws.com/

## Designs
![1](https://user-images.githubusercontent.com/76685103/147847309-b81fa921-c5b9-4907-865a-baed2df58f4e.png)
![2](https://user-images.githubusercontent.com/76685103/147847315-e4063d88-7055-476b-abc1-8209aadc31bd.png)
![3](https://user-images.githubusercontent.com/76685103/147847316-832134a1-b1c2-4084-bbb5-91ee50534519.png)
![4](https://user-images.githubusercontent.com/76685103/147847318-14606934-5386-4f1b-95a2-9fd2a8cda718.png)
![5](https://user-images.githubusercontent.com/76685103/147847321-671c93fe-59fa-4e5c-a04e-b6c42ffb3101.png)
![6](https://user-images.githubusercontent.com/76685103/147847326-2ffbb03c-9ce2-42a3-a1b9-4f66ab7e3968.png)

## User Story
### Requirement 1
There is the need to shorten long urs
as now a day's urls unavailability.

### User Story 1: 
As a Businessman I would like to have a Url Shortner Service
so that I can Shorten the URL as my own.

`link:` [User Story.txt](https://github.com/NirmallyaMitra/URL-Shortner/files/7797499/User.Story.txt)

## Developer
1. Nirmallya Mitra [https://github.com/NirmallyaMitra]

* `Frontend + JavaScript Functionality + Backend + Database` : ***Nirmallya Mitra***

## Tech Stack Used
1. `Frontend` : HTML5, CSS3, Javascript, Bootstrap, AJAX
2. `Backend` : PHP
3. `Database` : MySQL

## We worked for the following specifications
1. Loging With Authentication✔️

2. Registration Page✔️
   
   `If a user does not have a account then he/she must have an account.`
  
3. Link input box detects the genuine of false link✔️

4. User can change their shorten link as their wish before save the link (Last 5 characters).✔️

5. At the time of saving the shorten url it checks that the link is ok or not.✔️ 

6. After loging out user can not go back to the logged in phase. User have to login again.✔️

## Sudo Code:
INSTALL LAMP STACK ON AWS - UBUNTU 18

### Step 1 — Installing Apache and Updating the Firewall

	sudo apt update
	sudo apt upgrade
	sudo apt install apache2

	sudo ufw app list

	sudo ufw app info "Apache Full"

	sudo ufw allow in "Apache Full"

   APACHE INSTALLED SUCCESFULLY TILL HERE, YOU CAN CHECK BY ENTERING YOUR PUBLIC IP OR PUBLICK DNS ADDRESS - http://your_server_ip

==================================================

### Step 2 — Installing MySQL

	sudo apt install mysql-server
	sudo mysql_secure_installation
	sudo mysql
	
	SELECT user,authentication_string,plugin,host FROM mysql.user;
	
	ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'password';    // please note here replace the "password" with yours.
	
	FLUSH PRIVILEGES;
	
	SELECT user,authentication_string,plugin,host FROM mysql.user;
	exit
	
   At this point, your database system is now set up and you can move on to installing PHP, the final component of the LAMP stack.

==================================================

### Step 3 — Installing PHP

	sudo apt install php libapache2-mod-php php-mysql
	
   In most cases, you will want to modify the way that Apache serves files when a directory is requested. Currently, if a user requests a directory from the server, Apache will    first look for a file called index.html. We want to tell the web server to prefer PHP files over others, so make Apache look for an index.php file first.

	sudo nano /etc/apache2/mods-enabled/dir.conf
	
   Move the PHP index file (highlighted above) to the first position after the DirectoryIndex specification, like this:

	<IfModule mod_dir.c>
	    DirectoryIndex index.php index.html index.cgi index.pl index.xhtml index.htm
	</IfModule>	

------------------------------------------------

	sudo systemctl restart apache2
	sudo systemctl status apache2

	Press Q to exit this status output.
	
	Check PHP Version by entering 
	php -v

	Install the commonly required php modules by using the below commands - do remeber replace the php version number with your by checking the php -v command 
	For Example if the php -v command shows 7.4 version installed then you have to replace the 7.2 with 7.4 in the below command
	
	sudo apt install php7.2-common php7.2-mysql php7.2-xml php7.2-xmlrpc php7.2-curl php7.2-gd php7.2-imagick php7.2-cli php7.2-dev php7.2-imap php7.2-mbstring php7.2-opcache        php7.2-soap php7.2-zip php7.2-intl -y
	
	sudo systemctl restart apache2
	
==================================================
	
### Step 4 — Testing PHP Processing on your Web Server

	sudo nano /var/www/html/info.php
	
   This will open a blank file. Add the following text, which is valid PHP code, inside the file:
	
   <?php
	   phpinfo();
	?>

   The address you will want to visit is:

	http://your_ip/info.php
	
   You will get the php info page

==================================================

### PHPMYADMIN INSTALL STEPS BELOW

   Step 1 — Installing phpMyAdmin

   sudo apt update
   sudo apt install phpmyadmin php-mbstring php-gettext

   Warning: When the prompt appears, “apache2” is highlighted, but not selected. If you do not hit SPACE to select Apache, the installer will not move the necessary files during    installation. Hit SPACE, TAB, and then ENTER to select Apache.

   sudo phpenmod mbstring
   sudo systemctl restart apache2
   `For Checking:` http://your_domain_or_IP/phpmyadmin

==================================================

### Enabling mod_rewrite on apache2
   
      sudo apt-get update
      sudo a2enmod rewrite
      sudo service apache2 restart

      sudo nano /etc/apache2/sites-enabled/000-default.conf
   
   Inside that file, you will find the <VirtualHost *:80> block on line 1. Inside of that block, add the following block:
  
         <Directory /var/www/html>
             Options Indexes FollowSymLinks MultiViews
             AllowOverride All
             Order allow,deny
             allow from all
         </Directory>
  
         sudo service apache2 restart
   
   
   
   Create a file on var/www/html location with the name .htaccess and run the below command
   
        sudo vi var/www/html/.htaccess
   
   and paste the below code.
   
   
   
         RewriteEngine On

         RewriteCond $1 !^(PHP/url\.php)
         RewriteCond %{REQUEST_FILENAME} !-f
         RewriteCond %{REQUEST_FILENAME} !-d
         RewriteRule ^(.*)$ PHP/url.php?/$1 [L]

   --End Of SUDO CODE--

## Deployment
For Deployment, I have used `Amazon Web Services` as a platform connected with `phpmyadmin` as database.

CI/CD setup
1. Create a GitHub repository
2. Install git via terminal (On Ubuntu you can do `sudo apt-get install git`)
3. Then do a git clone of your repository, or simply download the zip file of your repository from GitHub and extract it.
4. Copy your project in the new folder created after cloning (its name will be same to that of the repository you cloned).
5. Add all the changes you want.
6. Then execute these commands:
   
   ````
   git add . 
   git commit -m "[mandatory commit message]" 
   
   git push [url to your repository] master/main 
7. Now your commit will be successfully pushed to the main branch of your GitHub repository.
