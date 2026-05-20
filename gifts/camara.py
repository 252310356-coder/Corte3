import cv2

# Cargar el clasificador
upper_body = cv2.CascadeClassifier(
    cv2.data.haarcascades + "haarcascade_upperbody.xml"
)

# Prueba con 0 o 1 si usas la cámara del celular
cap = cv2.VideoCapture(0) 

while True:
    ret, img = cap.read()
    if not ret:
        print("No se pudo acceder a la cámara")
        break

    gray = cv2.cvtColor(img, cv2.COLOR_BGR2GRAY)
    bodies = upper_body.detectMultiScale(gray, scaleFactor=1.1, minNeighbors=5)

    for (x, y, w, h) in bodies:
        cv2.rectangle(img, (x, y), (x + w, y + h), (0, 255, 0), 2)

    cv2.imshow("Deteccion de Cuerpo Superior", img)
    
    # Cerrar con la tecla 'q'
    if cv2.waitKey(1) & 0xFF == ord("e"):
        break

cap.release()
cv2.destroyAllWindows()