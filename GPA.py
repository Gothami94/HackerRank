grade=['A','-A','+C','-B','+B','B','A','-B','-A','+A','A','-A','B','B','A','-A','-A','A','A','+B','A','-A','A','A','+B']
#print(len(grade))

credit=[3,3,3,2,2,2,2,2,3,2,2,2,2,2,4,2,3,3,3,2,3,2,2,2,2]
num=len(credit)
#print(num)

tot=sum(credit)
#print(tot)

###sumation z
z=0.00
#count=0
for i in range(num):
    g=grade[i]
    c=int(credit[i])
    #count=count+1

    if g=='+A':
        gpv=4.25*c
        z=z+gpv

    elif g=='A':
        gpv=4.00*c
        z=z+gpv

    elif g=='-A':
        gpv=3.75*c
        z=z+gpv

    elif g=='+B':
        gpv=3.25*c
        z=z+gpv

    elif g=='B':
        gpv=3.00*c
        z=z+gpv

    elif g=='-B':
        gpv=2.75*c
        z=z+gpv

    elif g=='+C':
        gpv=2.25*c
        z=z+gpv

    elif g=='C':
        gpv=2.00*c
        z=z+gpv

    elif g=='-C':
        gpv=1.75*c
        z=z+gpv

    elif g=='+D':
        gpv=1.25*c
        z=z+gpv

    elif g=='D':
        gpv=1.00*c
        z=z+gpv

    elif g=='D-':
        gpv=0.75*c
        z=z+gpv

    elif g=='E':
        gpv=0.00*c
        z=z+gpv

GPA=float(z/tot)

#print(count)
print(GPA)
        
