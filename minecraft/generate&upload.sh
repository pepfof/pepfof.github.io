find . -type f > mine.txt &
find . -type d > dirs.txt 
cat mine.txt | tr “/” '\\' > mine1.txt
sed -i "s / \ g" mine.txt
sed -i "s ./ \ g" dirs.txt
sed -i "s / \ g" dirs.txt
git add -A
git commit -m "Incremental Minecraft Update"
git push
