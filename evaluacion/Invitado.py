from Usuario import Usuario

class Invitado(Usuario):
    def __init__(self, nombre, email):
        super().__init__(nombre, email)
