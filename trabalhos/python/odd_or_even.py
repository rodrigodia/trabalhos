num = 12
print('escreva 0 para sair')
while num != 0:
    num = int(input("Enter a number: "))
    if (num % 2) == 0:
      print("{0} é par".format(num))
    else:
      print("{0} é impar".format(num))