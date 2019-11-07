var altura = [173,167,187,157,198]
var sexo = ["h","h",'h','m','h']
var homens = 0
var mulheres = 0
var maior = 0 
var sexoM = 'a'
maior = Math.max.apply(null,altura);
for ( index = 0; index < altura.length; index++) {
    if ('h' == sexo[index]) 
    {
        homens++
    }
    else
    {
        mulheres++
    }
}
for ( index = 0; index < altura.length; index++) {
    if (maior == altura[index])
    {
        sexoM = sexo[index]
    }
}
console.log("existem "+ homens + " homens")
console.log("existem "+ mulheres + " mulheres")
if (sexoM == 'm')
{
    sexoM = 'mulher'
}
else
{
    sexoM = 'homem'
}
console.log("maior altura = " + maior + " e é " + sexoM)