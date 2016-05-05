# Server Prerequisites
Obviously the first thing you are going to need is some sort of internet-enabled server that is allowed to access outside of your LAN and if applicable configured appropriately on your WAF.

**Step 1:** Install an OS (preferable Linux) on your server box

**Step 2:** Install the web server and appropriate components as listed
- LAMP
- Node.js
- Bower (in global scope)

``` bash
sudo apt-get update
sudo apt-get install lamp-server^
curl -sL https://deb.nodesource.com/setup_6.x | sudo -E bash -

sudo add-apt-repository ppa:ondrej/php5-5.6
sudo apt-get update
sudo apt-get upgrade
sudo apt-get install php5

sudo apt-get install -y nodejs
sudo apt-get install -y build-essential
npm install -g bower
```

**Step 3:** In your web directory verify that you have everything working appropriately by making a new file or using the following command:

```bash
touch index.php
echo "<?php phpinfo(); ?>" > index.php
```
And then preview it in your browser via the server's IP, Hostname, or FQDN, depending on how you set it up. If you see the ``phpinfo()`` then PHP is working. Verify that your version is 5.6.x or it will not function.
