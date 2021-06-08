find . -type f > mine.txt &
find . -type d > dirs.txt 
git add -A
git commit -m "Incremental Minecraft Update"
git push