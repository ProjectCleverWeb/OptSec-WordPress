echo "Starting PHP development server"
screen -dmS php_web php -S localhost:8000 -t /var/www/public/
echo "Getting resonse..."
response=$(curl --write-out %{http_code} --silent --output /dev/null localhost:8000)
echo "Killing PHP development server"
screen -S mc -X quit

echo "Output: $response"