#!/bin/bash

# bash convert-images.sh ~/bioartemis/public/img/pains [-iname *.PNG]

directory=$1

args=${@:2:$#}

echo "arguments: $args"

count=0
for e in `find $directory $args`
do
    if !(test -d $e)
    then
        echo "[$count] Processing file $e"
        #e.g., rm $e
		convert $e -resize 150 "$e.tmp"
		mv "$e.tmp" $e
		
    count=`expr $count + 1`
    fi
done
