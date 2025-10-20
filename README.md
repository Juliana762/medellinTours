# Medellín Tours

¡Bienvenido/a! Este repositorio contiene el prototipo del sitio web "Medellín Tours": páginas HTML, estilos CSS y un pequeño script PHP para procesar formularios de contacto. El proyecto está pensado como prototipo o demo para pruebas locales y presentación.

## Contenido principal

- `procesar_contacto.php` — Script PHP que recoge datos del formulario de contacto (POST) y envía un correo a `medellintours2025@gmail.com` usando la función `mail()` de PHP.
- `proyecto_final/` — Carpeta con la versión principal del sitio:
	- Páginas HTML: `login.html`, `registro.html`, `pagina_oficial.html`, `mapausuario.html`, `perfil.html`, `albumes.html`, `descubremedellin.html`, `proyecto.html`, `registroexitoso.html`, `interfazusuario.html`, etc.
	- `css/` — Archivos de estilos (`login.css`, `registro.css`, `proyecto.css`, `perfil.css`).
	- `img/` — Recursos gráficos (jpg, webp, avif, etc.).
	- `Modulos_Medellín-tours2/` — Módulos y assets adicionales (dashboard, imágenes, etc.).
- `medellÍn tours.pptx` — Presentación relacionada con el proyecto.

## Características

- Interfaz responsive para login y registro con modo claro/oscuro.
- Formularios con validaciones y efectos (toggle de contraseña, animaciones en inputs).
- Envío de formulario de contacto mediante `procesar_contacto.php` (requiere servidor PHP con mail configurado o SMTP mediante PHPMailer).
- Uso de Font Awesome y Google Fonts para iconografía y tipografías.

## Requisitos

- Navegador moderno (Chrome, Edge, Firefox).
- Para la funcionalidad de correo: servidor con PHP y soporte para `mail()` o la posibilidad de instalar/configurar PHPMailer con SMTP.
- Git (opcional) si deseas clonar el repositorio y colaborar.

## Instalación y ejecución local

1. Clonar el repositorio.

	 - Con SSH:
		 git clone git@github.com:Juliana762/medellinTours.git

	 - Con HTTPS:
		 git clone https://github.com/Juliana762/medellinTours.git

2. Abrir el proyecto en tu editor (VS Code, Sublime, etc.).

3. Opciones para servirlo localmente:

	 - Solo HTML/CSS: abre `proyecto_final/pagina_oficial.html` directamente en el navegador (doble clic sobre el archivo).

	 - Con PHP (recomendado para probar formularios):

		 - Con XAMPP/WAMP/Laragon: copia la carpeta en `C:\\xampp\\htdocs\\medellinTours` y abre `http://localhost/medellinTours/proyecto_final/login.html`.

		 - Con el servidor PHP integrado (desde la carpeta `proyecto_final`):

			 php -S localhost:8000

			 Luego abre `http://localhost:8000/login.html`.

4. Probar el formulario de contacto:

	 - El formulario POST apunta a `procesar_contacto.php`. Si `mail()` no está disponible, configura PHPMailer con credenciales SMTP (no subir credenciales al repositorio).

## Configurar envío de correo (recomendado: PHPMailer)

- Instala Composer (si no lo tienes) y añade PHPMailer:

	composer require phpmailer/phpmailer

- Reemplaza el uso de `mail()` en `procesar_contacto.php` por PHPMailer y configura:

	- Host (smtp.gmail.com u otro proveedor)
	- SMTPAuth = true
	- Username (tu cuenta SMTP)
	- Password (app password o credenciales seguras)
	- SMTPSecure = tls/ssl
	- Port = 587 (TLS) o 465 (SSL)

Guarda las credenciales en un archivo de entorno (`.env`) y agrega `.env` a `.gitignore`.

## Seguridad y buenas prácticas

- No subir credenciales, claves API ni contraseñas al repositorio.
- Sanitizar y validar todas las entradas del usuario en el servidor (ej. `filter_var()`, validación de longitud y caracteres).
- Usar HTTPS en producción y sesiones seguras (`session_regenerate_id()`, cookies seguras).
- Evitar dependencias desactualizadas; actualizar librerías y revisar vulnerabilidades.
- Para archivos multimedia grandes, usar Git LFS o un almacenamiento externo (S3, CDN).

## Problemas conocidos y recomendaciones

- `procesar_contacto.php` usa `mail()` por defecto: puede no funcionar en entornos locales sin servidor SMTP.
- Algunas rutas en los HTML usan rutas locales absolutas (por ejemplo `file:///E:/...`) — revisa y usa rutas relativas antes de desplegar.
- Optimiza imágenes (WebP/AVIF) para producción.

## Cómo contribuir

1. Haz fork del repositorio.
2. Crea una rama con tu feature (`feature/nombre-descriptivo`).
3. Haz commits pequeños y claros.
4. Abre un Pull Request describiendo los cambios y pruebas realizadas.

Notas para colaboradores:

- Mantener consistencia en estilos CSS (variables definidas en `login.css`).
- No subir archivos binarios grandes sin avisar (usar LFS si es necesario).

## Licencia

- Añade un archivo `LICENSE` si deseas publicar el proyecto con una licencia (por ejemplo MIT).

## Contacto

- Correo de contacto que aparece en el proyecto: `medellintours2025@gmail.com`.

---

Si quieres, puedo:
- Añadir este README al repositorio (guardar archivo, hacer commit y push en una rama nueva). 
- Crear `CONTRIBUTING.md` y `LICENSE` automáticos.
