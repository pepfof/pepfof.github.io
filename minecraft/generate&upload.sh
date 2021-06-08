find . -type f > minet.txt &
find . -type d > dirst.txt 
sed 's+./+\\+g' minet.txt > minet1.txt
sed 's+/+\\+g' minet1.txt > mine.txt
sed 's+./+\\+g' dirst.txt > dirst1.txt
sed 's+/+\\+g' dirst1.txt > dirs.txt
#rm minet.txt minet1.txt dirst.txt dirst1.txt
git add -A
git commit -m "Incremental Minecraft Update"
git push
