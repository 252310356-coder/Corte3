from Usuario import Usuario

class Admin(Usuario):
    def __init__(self, nombre, email):
        super().__init__(nombre, email)
        self.permisos = "Administrador"

    def acceso_sistema(self):
        return(f"{self.nombre} tiene acceso completo al sistema con permisos de grado: {self.permisos}.")