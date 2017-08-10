#!/bin/bash

i=0
while test $i -lt 10
do	
	m=$(( $i % 2))
	if test $m -eq 0
	then
		echo $i
	else
		echo no
	fi
	i=`expr $i + 1`
done
