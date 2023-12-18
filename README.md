# ApiFrameworks

Esta API permite gestionar datos de frameworks de programación. Puedes consultar, agregar, modificar y eliminar frameworks en la base de datos.

## Endpoints

- **GET /api/frameworks**: Devuelve una lista de todos los frameworks en la base de datos.
- **GET /api/frameworks/:id**: Devuelve el framework con el ID especificado.
- **POST /api/frameworks**: Añade un nuevo framework a la base de datos.
- **PUT /api/frameworks/:id**: Modifica el framework con el ID especificado.
- **DELETE /api/frameworks/:id**: Elimina el framework con el ID especificado.

## Estructura de una respuesta JSON

Un objeto JSON que representa a un framework tiene la siguiente estructura:

```json
{
    "id": 1,
    "nombre": "Framework X",
    "lanzamiento": "2021-01-01",
    "desarrollador": "Desarrollador Y"
}
