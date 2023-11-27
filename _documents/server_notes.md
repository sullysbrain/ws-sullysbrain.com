# Server Notes


#### Localhost Setup

To run hpptd on your local system to run a web server, on a Mac, we use the apachectl function. However, I prefer to work in a specific web production folder for development, so to change httpd to look towards this new folder, follow these steps:

1. Open Apache Config file in vim: 'sudo vim /etc/apache2/httpd.conf'

2. Modify DocumentRoot:
	- 'DocumentRoot "/Users/YourFolder"'
	- '<Directory "/Users/YourFolder">'

3. Save

4. Restart Apache: 'sudo apachectl restart'

Now that folder will be your webserver 

 - TODO: integrate this into poetry
