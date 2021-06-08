find . -type f > mine1.txt &
find . -type d > dirs1.txt 
sed -i 's \./ \\ g' mine1.txt 
cat mine1.txt | tr '/' '\\' > mine2.txt
cat dirs1.txt | tr “./” '\\' > dirs2.txt
cat dirs2.txt | tr “/” '\\' > dirs.txt
#rm mine1.txt mine2.txt dirs1.txt dirs2.txt
git add -A
git commit -m "Incremental Minecraft Update"
git push
