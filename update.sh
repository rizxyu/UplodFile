cd ..
sleep 1
echo "Deleting old folders..."
rm -rf UplodFile
sleep 0.5
echo "Downloading a new folder..."
git clone https://github.com/Rizxyu/UplodFile
sleep 0.5
cd UplodFile
echo "Done!"
