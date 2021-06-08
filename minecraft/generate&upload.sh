find . -type f > mine.txt &
find . -type d > dirs.txt 
sed 's+./+\+g' mine.txt
sed 's+/+\+g' mine.txt 
sed 's+./+\+g' dirs.txt
sed 's+/+\+g' dirs.txt
git add -A
git commit -m "Incremental Minecraft Update"
git push