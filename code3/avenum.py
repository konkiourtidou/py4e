σύνολο = 0
πλήθος = 0
while (True):
    είσοδος = input('Εισαγάγετε έναν αριθμό: ')
    if είσοδος == 'τέλος': break
    τιμή = float(είσοδος)
    σύνολο = σύνολο + τιμή
    πλήθος = πλήθος + 1

μέσοςΌρος = σύνολο / πλήθος
print('Μέσος Όρος:', μέσοςΌρος)
