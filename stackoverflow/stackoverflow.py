#This is for filter out top 2 valuable items from each category

#a=[[item,count],....]
a=[['electronic kettle',3],['bed',1],['plate',7],['fan',2],['plate',3],['bed',12],['fan',5],['fan',1],['electronic kettle',6],['plate',6],['electronic kettle',9],['plate',2],['bed',3]]

for i in range(len(a)):
	item=a[0][0]
	count_list=[]
	count_list.append(a[0])
	remove_list=[]
	for j in range(1,len(a)):
		if(item==a[j][0]):
			count_list.append(a[j])
			remove_list.append(j)

	result=sorted(range(len(count_list)), key=lambda y: count_list[y][1], reverse=True)[:2]
	for l in range(len(result)):
		print(count_list[result[l]])	

	for k in range(len(remove_list)):
		x=remove_list[k]-k
		a.remove(a[x])

	a.remove(a[0])
	if (a==[]):
		break
	
