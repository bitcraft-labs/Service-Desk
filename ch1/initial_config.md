# Initial Configuration Setup
This section will cover retrieving the source from Github and installing to your server

##Retrieving source from Github Repository
There are two ways to install Bitcraft Service Desk.

####Download:
Download from [Github](https://github.com/bitcraft-labs/Service-Desk/archive/pre-alpha.zip) and upload to your web directory.

####Using the Command Line:

**Github**

- Fork the repository
- Clone to your machine/server
```
git clone https://github.com/YOUR_USERNAME/Service-Desk.git
bower install
```
Additional Thoughts
------
The actual installer is still in the works as this application isn't entirely production ready, I mean, it is still extremely Alpha. That said, without having a custom file (which is generated in the installer), nor the appropriate SQL database and configuration, the application will just return false and be unusable.
