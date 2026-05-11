class Usuario:
    def __init__(self, nombre, email):
        self.nombre = nombre
        # Llamamos al setter directamente desde el constructor 
        # usando el nombre de la propiedad (sin guion bajo)
        self.email = email 

    # --- GETTER ---
    @property
    def email(self):
        """Devuelve el valor de la variable privada _email"""
        return self._email

    # --- SETTER ---
    @email.setter
    def email(self, nuevo_email):
        """Valida que el correo tenga un formato básico antes de guardarlo"""
        if "@" in nuevo_email and "." in nuevo_email:
            # Si es válido, lo guardamos en la variable privada con guion bajo
            self._email = nuevo_email
        else:
            # Si no es válido, podemos lanzar un error o asignar un valor por defecto
            print(f"Error: El correo '{nuevo_email}' no es válido.")
            self._email = "correo_no_valido@ejemplo.com"

    def mostrar_datos(self):
        # Aquí usamos el getter automáticamente al llamar a self.email
        return f"Nombre: {self.nombre}, Email: {self.email}"
    
    def saludar(self):
        # Saludo genérico para todos los usuarios
        return f"Hola, soy {self.nombre} y mi correo es {self.email}."
    
    def acceso_sistema(self):
        #Return para invitado
        return(f"{self.nombre} tiene acceso limitado al sistema como invitado.")