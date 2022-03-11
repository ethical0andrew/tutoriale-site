def verificare_prim(a):
    if a < 2:
       return 0
    if a == 2:
        return 1
    if (a % 2) == 0:
        return 0
    for d in range (3, a):
        if (a % d) == 0:
            return 0
        d = d + 2
    return 1
n = int(input())
print(verificare_prim(n))
