listExample = [17, 'sebelas', 20.09, True]
listExample.insert(0, 'Data Science with Python')
listExample.append('Novi')
print(listExample)

listExample.remove(True)
print(listExample)

listExample.pop()
print(listExample)

del listExample[0]
print(listExample)

listExample.clear()
print(listExample[0:1])

listExample = [11, 17, 20, 9]
print(listExample)

listExample2 = listExample.copy()
listExample2[0] = 25
# listExample2 = [9, 20, 9]
# listExample.extend(listExample2)
print(listExample2)
print(listExample + listExample2)

print(listExample.index(17))

listExample.sort()
listExample.reverse()
print(listExample)

for item in listExample:
    # print(item)
    if item % 2 == 0:
        print(f'{item} adalah bilangan genap')
    else:
        print(f'{item} adalah bilangan ganjil')

if 17 in listExample:
    print('17 ditemukan di dalam list')

length = len(listExample)

tupleExample = (17, 'sebelas', 20.09, True)
print(tupleExample)
# tupleExample[0] = 25

customer = {
    'name' : 'Noviati',
    'age' : 16,
    'is_verified' : True
}

customer['name'] = 'Novi'
customer['status'] = 'Pelajar'
# customer.pop('age')

print(customer)
print(customer['name'])
print(customer['age'])

numbers = {17, 11, 20, 9}
numbers2 = {25, 9, 20, 9}

numbers_union = numbers.union(numbers2)
print(numbers_union)

difference = numbers.difference(numbers2)
print(difference)

sym_difference = numbers.symmetric_difference(numbers2)
print(sym_difference)

intersect = numbers.intersection(numbers2)
print(intersect)

