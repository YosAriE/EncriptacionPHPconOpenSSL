# Lista de personas con sus edades
personas = [
    {"nombre": "Juan", "edad": 25},
    {"nombre": "María", "edad": 30},
    {"nombre": "Pedro", "edad": 40},
    {"nombre": "Ana", "edad": 35}
]

# Función para obtener la edad de una persona
def obtener_edad(persona):
    return persona["edad"]

# Función para calcular el promedio
def calcular_promedio(lista):
    total = sum(lista)
    return total / len(lista)

# Obtener edades de todas las personas
edades = list(map(obtener_edad, personas))

# Calcular promedio de edades
promedio = calcular_promedio(edades)

print("El promedio de edad del grupo es:", promedio)
