backup(){
	d1="$1"
	d2="$2"
	d=`date +%Y%m%d`
	u='_'
	ext='.bac'
	s='/'
#	name=$d1$u$d$ext
#	echo $name
	mkdir $d2

	src=$d1/*

	for file in $src
	do
		name=`echo $file | cut -f2 -d "/"`
		cp $file $d2$s$name$u$d$ext
	done
	
#	mkdir $name
#	chmod 777 $name
#	cp -r $src $name
#	mv $name $d2

}

backup $1 $2
