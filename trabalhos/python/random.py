
import random
random2 = random.randint(0,100)
num = 12
while random2 != num:
    num = int(input('escolhe um numero: '))

    if random2 < num:
        print('tente um numero menor')
        print('')
    if random2 > num:
        print('tente um numero maior')
        print('')
    
print("parabens")