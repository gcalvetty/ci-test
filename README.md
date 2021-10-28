<p align="center"><a href="https://gecndev.com" target="_blank"><img src="https://gecndev.com/img/ico-txt.svg" width="400"></a></p>


# LARAVEL - TEST "FullStack DEVELOPER"

La empresa ***“GECNDEV”*** desea realizar una aplicación web que permita administrar la información de sus usuarios, cada usuario podrá realizar el envío de emails, por seguridad de la información el usuario tendrá que autenticarse en la aplicación con sus credenciales, para esto el personal a cargodel proyecto ha identificado los siguientes requerimientos:

>- Escribir código legible. 
>- No olvidar realizar comentarios en el código.
>- Realizar migraciones y seeders.
>- Todas las relaciones del diseño de la base de datos deben verse reflejadas en los modelos de Laravel.

## Requerimientos Técnicos

La empresa desea que su software sea desarrollado con el lenguaje de programación PHP haciendo uso de su framework Laravel.

- Por mantenimiento y personalización del software, no se permite el uso de:
    > Laravel Jetstream, Livewire o Inertia.js.
- Se desea conocer el avance del proyecto desde su inicio hasta la entrega, por ello solicita que el código sea versionado mediante una plataforma git pública.

## Requerimiento Funcionales

- Autenticación
- Administración      
  - Formulario de registro
  - Editar Usuario
  - Eliminar Usuario(s)
- Usuarios
  - Enviar Email(s)


## Modulo Usuario:
Para el formulario de registro de usuarios se necesitan los siguientes campos con sus respectivas
validaciones y mensajes de error:
| CAMPO | DESCRIPCION |
| ------------- | ------------- |
| **Identificador** | Dato obligatorio, numérico.|
| **Email** | Dato obligatorio, __debe ser único__, se debe verificar que el email ingresado sea válido.|
| **Contraseña** | Dato obligatorio, mínimo de 8 caracteres, debe Contener al menos un número, una letra mayúscula, un carácter especial.|
| **Verificación de contraseña** | El usuario debe verificar su contraseña. |
| **Nombre** | Dato obligatorio, longitud de __100 caracteres__. |
| **Número Celular** | Dato opcional de __10 dígitos__ |
| **Cédula** | Dato de tipo texto, obligatorio con longitud máxima de __11 caracteres.__ |
| **Fecha de nacimiento** | Dato obligatorio, el usuario no puede ser __menor de 18 años.__|
| **Código de Ciudad** | Dato obligatorio de tipo numérico. |

El formulario debe considerar tres campos de tipo select o autocompletado (anidados), destinados a la selección de:
>  país, estado y ciudad,

Estos campos deben cargarse en ese orden mediante una petición ***ajax***, la ciudad seleccionada será relacionada al usuario.

Cuando el formulario sea llenado de forma exitosa, el sistema debe guardar la contraseña del usuario de forma encriptada

## Modulo Email
Solo los usuarios autenticados podrán acceder al formulario de creación de email, este formulario debe solicitar datos como asunto, destinatario y cuerpo del mensaje mensaje.
- Una vez ingresado los datos y procesado el formulario, el email creado estará relacionado con el usuario autenticado y será enviado en secuencia mediante una cola de emails.
- El email tendrá dos estados, mientras se mantenga en la cola de envío se considera __“no enviado”__, cuando ha sido procesado, es decir; se ha enviado el email tendrá el estado __“enviado”__.
- El procesamiento de la cola de emails se realizará mediante la ejecución de un comando artisan.
- Los usuarios podrán ver sus email con su estado, se recomienda la creación de una interfaz con una tabla de datos __“data table”__;
- El usuario administrador podrá visualizar todos los emails.

## Opcional

Por motivos de seguridad de la información, la empresa deja abierta la posibilidad de implementar un sistema de logs para revisar los cambios históricos de los registro de usuarios y envío de emails.

## Consideraciones Finales

>¡¡¡ Exito !!!


