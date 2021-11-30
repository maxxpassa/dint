On your virtual host file should look like this

<VirtualHost *:80>
ServerName dev.dint.stage
DocumentRoot "/Applications/xampp/xamppfiles/htdocs/dint/public"
<Directory "/Applications/xampp/xamppfiles/htdocs/dint/public">
Options Indexes FollowSymLinks MultiViews
AllowOverride All
allow from all
Require all granted
</Directory>
ErrorLog "logs/dint.local-error_log"
</VirtualHost>

<VirtualHost *:80>
ServerName accounts.dint.stage
DocumentRoot "/Applications/xampp/xamppfiles/htdocs/dint/public"
<Directory "/Applications/xampp/xamppfiles/htdocs/dint/public">
Options Indexes FollowSymLinks MultiViews
AllowOverride All
allow from all
Require all granted
</Directory>
ErrorLog "logs/dint.local-error_log"
</VirtualHost>

Finally to run project add these two variable in .env file
GUEST_DOMAIN=http://dint.stage
PARTNER_DOMAIN=http://accounts.dint.stage



We are using webpack so please make sure you use webpack following commands:
npm run dev
npm run watch
npm run prod

Run this commands 
php artisan populate:slug
php artisan db:seed --class=AddBoatAmenities
php artisan db:seed --class=PropertyCategorySeeder
