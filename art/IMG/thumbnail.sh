#!/bin/bash
for file in *; 
do 
if [ $file != $0 ];
then
convert $file -quality 75 -resize 128x192 thumb-$file;
fi 
done
mv thumb-* ../THUMBS 
