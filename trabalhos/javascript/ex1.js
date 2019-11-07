var a = [1,5,20,20]
var maior = 0
var menor = 0
for (index = 0; index < 4; index++) 
{
    if (a[index] >= 18 ) 
    {
        maior++;
    }
    else
    {
        menor++
    }  
}

if (maior === 1)
{
    console.log("existe " + maior + " pessoa maior de idade") 
}
else
{
    if (maior === 0) 
    {
        console.log("nao existe pessoas maior de idade") 
    }
    else
    {
        console.log("existem " + maior + " pessoas maior de idade") 
    }
}

if (menor === 1)
{
    console.log("existe " + menor + " pessoa menor de idade") 
}
else
{
    if (maior === 0) 
    {
        console.log("nao existe pessoas menor de idade") 
    }
    else
    {
        console.log("existem " + menor + " pessoas menor de idade") 
    }
}

