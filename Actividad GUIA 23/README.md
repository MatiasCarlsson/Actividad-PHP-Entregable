# 🎃 Halloween Votes - Sistema de Votación de Disfraces

Este proyecto es un sistema completo de votación de disfraces de Halloween con panel de administración.

## 📋 Características

- ✅ Sistema de registro y login de usuarios
- ✅ Votación de disfraces (un voto por usuario por disfraz)
- ✅ Panel de administración (usuario "admin")
- ✅ Gestión completa de disfraces (CRUD)
- ✅ Protección CSRF
- ✅ Contraseñas encriptadas con `password_hash()`
- ✅ Diseño responsivo con tema Halloween
- ✅ Modal interactivo para ver detalles

## 🚀 Instalación

### 1. Configurar la base de datos

Ajusta la configuración en `data/conexionDataBase.php`:

```php
$DB_HOST = '127.0.0.1';
$DB_PORT = 3308; // Cambia a 3306 si tu MySQL está en ese puerto
$DB_USER = 'root';
$DB_PASS = ''; // Tu contraseña de MySQL
$DB_NAME = 'halloween';
```

### 2. Crear la base de datos

Ejecuta el archivo `init_db.sql` en phpMyAdmin o desde la línea de comandos:

```bash
mysql -u root -p < init_db.sql
```

O desde phpMyAdmin:

1. Abre phpMyAdmin
2. Ve a la pestaña "SQL"
3. Copia y pega el contenido de `init_db.sql`
4. Haz clic en "Continuar"

### 3. Estructura de carpetas

```
Actividad GUIA 23/
├── index.php              # Página principal
├── init_db.sql           # Script de base de datos
├── css/
│   └── halloween.css     # Estilos del tema
├── data/
│   ├── conexionDataBase.php  # Configuración de BD
│   └── auth.php              # Funciones de autenticación
├── img/                  # Carpeta para imágenes de disfraces
├── pages/
│   ├── login.php         # Página de login
│   ├── registro.php      # Página de registro
│   ├── logout.php        # Cerrar sesión
│   └── panelAdmin.php    # Panel de administración
└── processing/
    └── procesarVoto.php  # Procesar votos
```

## 👤 Uso

### Usuario Normal

1. **Registro**: Visita `pages/registro.php` para crear una cuenta
2. **Login**: Inicia sesión en `pages/login.php`
3. **Votar**: Haz clic en cualquier disfraz para ver detalles y votar
4. **Ver resultados**: Los porcentajes se actualizan en tiempo real

### Administrador

1. **Crear cuenta admin**: Registra un usuario con el nombre exacto **"admin"**
2. **Acceder al panel**: Verás el enlace "Admin" en el menú
3. **Gestionar disfraces**:
   - Crear nuevos disfraces con imagen
   - Editar disfraces existentes
   - Marcar como eliminado (no se borran de la BD)
   - Ver estadísticas de votos

## 🔒 Seguridad

- ✅ Protección CSRF en todos los formularios
- ✅ Contraseñas hasheadas con `PASSWORD_DEFAULT`
- ✅ Validación de sesiones
- ✅ Sanitización de salidas con `htmlspecialchars()`
- ✅ Prepared statements con `mysqli_real_escape_string()`

## 🎨 Personalización

### Cambiar colores

Edita las variables CSS en `css/halloween.css`:

```css
:root {
  --bg: #0a0a0a;
  --accent: #ff6b35;
  --purple: #8b5cf6;
  /* ... más variables ... */
}
```

### Agregar campos personalizados

1. Modifica la tabla `disfraces` en `init_db.sql`
2. Actualiza los formularios en `pages/panelAdmin.php`
3. Ajusta las consultas SQL según sea necesario

## 📦 Requisitos

- PHP 7.4 o superior
- MySQL 5.7 o superior
- Apache/XAMPP/WAMP
- Extensión `mysqli` habilitada
- `file_uploads` habilitado en `php.ini`

## 🐛 Solución de problemas

### Error de conexión a la base de datos

- Verifica que XAMPP/MySQL esté corriendo
- Confirma el puerto en `data/conexionDataBase.php` (3306 o 3308)
- Verifica usuario y contraseña

### No se pueden subir imágenes

- Verifica que la carpeta `img/` tenga permisos de escritura
- Aumenta `upload_max_filesize` en `php.ini` si es necesario

### Página en blanco

- Activa los errores de PHP:
  ```php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  ```

## 📄 Licencia

Este proyecto es de código abierto y libre para usar con fines educativos.

## 🙏 Tecnologías utilizadas

- **PHP** - Lenguaje de programación del lado del servidor
- **MySQL** - Sistema de gestión de bases de datos
- **JavaScript** - Interactividad del frontend
- **CSS3** - Estilos y animaciones
