x = 17
y = 11
z = 20

# print(x > y)      # True
# print(x < y)      # False
# print(y < x and y > z)      # False
# print(y < x or y > z)      # True

# y < x = 11 < 17 = True (Statement 1)
# y > z = 11 > 20 = False (Statement 2)
# Statement 1 and Statement 2 = True and False = False
# Statement 1 or Statement 2 = True or False = True



if x == y:     # False
    print("x sama dengan y")

if x > y:      # True
    print("x lebih besar dari y")

if (x < y and z < y):      # False and False = False
    print("x lebih kecil dari y")       #Kondisi True
else:    # False
    print("x tidak lebih besar dari z")     #Kondisi False

if (x > y):      # True
    print("x lebih besar dari y")       #Kondisi True
elif (x < y):    # False
    print("x lebih kecil dari y")     #Kondisi False
elif (z > y):    # True
    print("z lebih besar dari y")     #Kondisi True
else:
    print("Kondidisi di atas tidak ada yang benar")