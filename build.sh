# This file puts WP and its' components together, and makes updating WordPress
# and its' plugins/themes really easy.



# Start with a standard WP install:
mv /var/www/wordpress /var/www/public > /dev/null

# Remove extra
rm /var/www/public/license.txt > /dev/null
rm /var/www/public/readme.html > /dev/null
rm /var/www/public/wp-config-sample.php > /dev/null
rm -R /var/www/public/wp-content/plugins > /dev/null
rm -R /var/www/public/wp-content/themes > /dev/null

# Output Success
echo 'Built WordPress'



# Now plugins
mv /var/www/plugins /var/www/public/wp-content/plugins > /dev/null

# Output Success
echo 'Added Plugins'



# Now themes
mv /var/www/themes /var/www/public/wp-content/themes > /dev/null

# Output Success
echo 'Added Themes'



# And finally custom scripts
cp -R -f /var/www/custom/. /var/www/public > /dev/null
rm -R /var/www/custom > /dev/null # clean up
rm /var/www/public/readme.txt > /dev/null

# Output Success 
echo 'Applied Custom Scripts'
