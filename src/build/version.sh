cat /var/www/html/version.txt | grep "commit" | cut -c1-17 | sed s/"commit "/\<commit\>/g > /var/www/html/version.txt
