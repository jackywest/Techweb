#!/bin/bash

echo "synchronising data to web folder"
clean
echo "..."
sleep 1
cp -r site/* /media/www-dev/public/techweb/
chmod -R 755 /media/www-dev/public/techweb/
chmod -R 777 /media/www-dev/public/techweb/templates_c

if [ -z "$?" ]
then
	echo "done sucessfully"
fi