#! /bin/zsh
rm ./assets/renders/thumb/*
for i in ./assets/renders/*; do convert -thumbnail 512 $i ./assets/renders/thumb/thumb-"$(basename -- $i)"; done;
for i in ./assets/renders/thumb/*; do ./aspectcrop -a 1:1 -g c $i $i; done;

convert -thumbnail 512 ./assets/renders/2021_01_14_brutal.png ./assets/renders/thumb/thumb-2021_01_14_brutal.png;
./aspectcrop -a 1:1 -g e ./assets/renders/thumb/thumb-2021_01_14_brutal.png ./assets/renders/thumb/thumb-2021_01_14_brutal.png;