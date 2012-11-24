grep "commit" /var/www/html/version.txt | cut -c1-17 | sed s/"commit "/\<commit\>/g > /var/www/html/version.txt
