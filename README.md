# laravel-mysql

Descripción breve del proyecto.

## Requisitos Previos

-   **PHP**: Asegúrate de tener PHP instalado en tu sistema.
-   **Composer**: Instala Composer, el gestor de dependencias de PHP.
-   **Servidor Web (Apache, Nginx)**: Configura un servidor web para ejecutar Laravel.
-   **MySQL**: Instala y configura MySQL como tu sistema de gestión de bases de datos.

## Instalación

1.  **Clona el repositorio**:

    ```bash
    git clone https://github.com/MrJuanLcm/laravel-mysql.git
    cd laravel-mysql
    ```

2.  **Instala las dependencias**:

    ```bash
    composer install
    ```

3.  **Configura el archivo .env**:

    -   Copia el archivo `.env.example` y renómbralo a `.env`.
    -   Configura las variables de entorno relacionadas con la base de datos (DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD).

4.  **Creamos la base de datos**:

    ```bash
    CREATE DATABASE db_local;
    CREATE TABLE IF NOT EXISTS db_local.users (
        id INT AUTO_INCREMENT PRIMARY KEY ,
        primer_apellido TEXT,
        segundo_apellido TEXT,
        primer_nombre TEXT,
        otros_nombres TEXT,
        pais_empleo TEXT,
        tipo_identificacion TEXT,
        numero_identificacion TEXT,
        correo_electronico TEXT,
        fecha_ingreso TEXT,
        area TEXT,
        estado TEXT DEFAULT 'Activo',
        fecha_hora_registro DATETIME DEFAULT CURRENT_TIMESTAMP,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )
    ```

    **Nota:** Configura el `.env` Colocando el mismo nombre de la base de dato. Ejemplo: `DB_DATABASE=db_local`.

## Ejecución

1. **Inicia el servidor de desarrollo**:

    ```bash
    php artisan serve
    ```

    - Navega a `http://localhost:8000/` para ver tu aplicación.

## Estructura del Proyecto

-   **app**: Contiene la lógica de la aplicación.
-   **bootstrap**: Archivos de inicio y configuración.
-   **config**: Configuraciones de la aplicación.
-   **database**: Migraciones y seeders.
-   **public**: Archivos públicos accesibles desde el navegador.
-   **resources**: Vistas, assets y traducciones.
-   **routes**: Rutas de la aplicación.
-   **storage**: Archivos generados por la aplicación.
-   **tests**: Pruebas unitarias e integración.
-   **vendor**: Dependencias de Composer.
-   **.env**: Archivo de configuración de entorno.

## Ayuda Adicional

Para obtener más información sobre Laravel, consulta la documentación oficial.
