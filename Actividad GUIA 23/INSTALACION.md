# 🎃 INSTALACIÓN RÁPIDA - Halloween Votes

## ⚡ Pasos rápidos (5 minutos)

### 1️⃣ Configurar Base de Datos

Abre `data/conexionDataBase.php` y ajusta:

```php
$DB_PORT = 3308; // Cambia a 3306 si es necesario
$DB_PASS = '';   // Pon tu contraseña si tienes
```

### 2️⃣ Crear Base de Datos

**Opción A - phpMyAdmin:**

1. Abre http://localhost/phpmyadmin
2. Pestaña "SQL"
3. Copia y pega todo el contenido de `init_db.sql`
4. Click en "Continuar"

**Opción B - Línea de comandos:**

```bash
cd "c:\xampp\htdocs\Actividad-PHP-Entregable\Actividad GUIA 23"
mysql -u root -p < init_db.sql
```

### 3️⃣ Verificar permisos

Asegúrate que la carpeta `img/` tenga permisos de escritura.

### 4️⃣ Abrir en navegador

```
http://localhost/Actividad-PHP-Entregable/Actividad%20GUIA%2023/
```

## 🎯 Primera vez

1. **Crear cuenta admin:**

   - Click en "Registrarme"
   - Usuario: `admin` (exacto)
   - Contraseña: la que quieras
   - ¡Ahora verás el botón "Admin"!

2. **Agregar disfraces:**

   - Click en "Admin"
   - Completa el formulario
   - Sube una imagen
   - Click en "Guardar"

3. **Votar:**
   - Cierra sesión o crea otro usuario
   - Click en cualquier disfraz
   - Click en "Votar"

## ✅ Todo listo!

Ya puedes usar el sistema de votación completo.

## 🔧 Problemas comunes

**No conecta a la BD:**

- Verifica que XAMPP esté corriendo
- Revisa el puerto en `data/conexionDataBase.php`

**Error al subir imagen:**

- Verifica permisos en carpeta `img/`
- Aumenta `upload_max_filesize` en php.ini

**Página en blanco:**

- Verifica que PHP esté habilitado
- Revisa errores en `C:\xampp\apache\logs\error.log`
