from cmath import sqrt
import random

n= 10;

A= [];
for i in range(n):
    A.append(int(random.randint(1,10)));
print("Arreglo A: ", A);

B= [];
for i in range(n):
    B.append(A[i]**4);
print("Arreglo B= A^4: ", B);

C= [];
for i in range(n):
    C.append(A[i]+B[i]);
print("Arreglo C= A+B: ", C);

D= [];
for i in range(n):
    D.append(A[i]-B[i]);
print("Arreglo D= A-B: ", D);


p=1;
for i in range(n):
    p *= A[i];
print("Producto de los elementos del arreglo A: ", p);

promA= sum(A)/len(A);
print("Promedio de los elementos del arreglo A: ", promA);

E= [];
for i in range(n):
    E.append(abs(A[i]-promA));
print("Diferencia absoluta con el promedio: ", E);

F= [];

for i in range(n):
    F.append(sqrt(A[i]));
print("Raíces cuadradas de los elementos del arreglo A: ", F);

G= [];
for i in range(n):
    G.append(A[i] % 3);
print("Módulo 3 de los elementos del arreglo A: ", G);

