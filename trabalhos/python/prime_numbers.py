num = int(input('escreva um numero: '))
ve = 0
for x in range(num + 1):
    if (num % (x+1)) == 0:
        ve += 1

if ve == 2:
    print('numero primo')

if ve != 2:
    print('numero nao primo')

