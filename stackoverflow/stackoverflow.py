#a=[[item,count],....]
a=[['elec',3],['hot',7],['fan',2],['hot',3],['fan',5],['fan',1],['elec',6],['hot',6],['elec',9],['hot',2]]

for i in range(len(a)):
	item=a[0][0]
	temp_count=[]
	temp_count.append(a[0])
	rem_list=[]
	for j in range(1,len(a)):
		if(item==a[j][0]):
			temp_count.append(a[j])
			rem_list.append(j)

	result=sorted(range(len(temp_count)), key=lambda y: temp_count[y][1], reverse=True)[:2]
	for l in range(len(result)):
		print(temp_count[result[l]])	

	for k in range(len(rem_list)):
		x=rem_list[k]-k
		a.remove(a[x])

	a.remove(a[0])
	if (a==[]):
		break
	
