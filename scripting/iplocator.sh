ip(){
	p=$(pwd)
	s="/"
	file="$1"
	des=$p$s$file
#	echo $des
	grep -o '[0-9]\{1,3\}\.[0-9]\{1,3\}\.[0-9]\{1,3\}\.[0-9]\{1,3\}' $des > ip.txt

	while read text
	do
		echo -n $text
		echo -n ":"
		echo `geoiplookup $text | cut -f4 -d " " | cut -f1 -d ","`
	done < ip.txt


}
ip $1
