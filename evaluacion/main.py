from Admin import Admin
from Cliente import Cliente
from Invitado import Invitado

Juan = Admin("Juan", "juan@example.com")
Maria = Cliente("Maria", "maria@example.com", 1500)
Marcos = Invitado("Marcos", "marcos@example.com")

usuarios = [Juan, Maria, Marcos]

while True:
        print("\n--- SISTEMA DE GESTIÓN DE USUARIOS ---")
        print("1. Crear cuenta de Cliente")
        print("2. Mostrar Usuarios")
        print("3. Nivel de acceso")
        print("4. Salir")
        
        opcion = input("Selecciona una opción: ")
        
        if opcion == "1":
            nombre = input("Nombre: ")
            email = input("Email: ")
            puntos = 0
            nuevo_usuario = Cliente(nombre, email, puntos)
            usuarios.append(nuevo_usuario)
            print(nuevo_usuario.saludar())

        elif opcion == "2":
            print ("Listado de Usuarios")
            for usuario in usuarios:
             num = usuarios.index(usuario) + 1
             print(f"Usuario numero: {num}")
             print(usuario.mostrar_datos())

        elif opcion == "3":
            print("Nivel de acceso")
            for usuario in usuarios:
                print(usuario.acceso_sistema())

        elif opcion == "4":
            print("Saliendo del sistema. ¡Hasta luego!")
            break