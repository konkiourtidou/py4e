numlist = list()
while (True):
    είσοδος = input('Enter a number: ')
    if είσοδος == 'done': break
    τιμή = float(είσοδος)
    numlist.append(τιμή)

μέσοςΌρος = sum(numlist) / len(numlist)
print('Average:', μέσοςΌρος)
