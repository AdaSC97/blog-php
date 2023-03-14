# **X-Road-Lab V.2**

## :test_tube: Laboratorio de ecosistema básico de X-Road

### :raising_hand_man: ¡Hola!

Este repositorio contiene un laboratorio básico de X-Road 7 el cual está compuesto por tres host de Security Server y Un Central Server con las entidades de certificación.

***Nota: No se debe usar en un ambiente productivo, este entorno es solo con fines educativos.***

Saludos y éxito en tu formación con X-Road.
>By César Manzanero

### Requisitos

Se requiere tener instalado Docker y haberlo configurado previamente. Información al respecto en el sitio oficial de Docker.com (Para entornos Windows se requiere wls2).

Una vez completado los requisitos previos se debe clonar o descargar este repositorio y situarse dentro de la misma por medio de una terminal.

Posteriormente ejecutar el archivo compose mediante el siguiente comando:
 ```sql
docker-compose up -d

CentralServer ipv4_address: 10.10.0.50

SecurityServer_A ipv4_address: 10.10.0.51

SecurityServer_B ipv4_address: 10.10.0.52

SecurityServer_C ipv4_address: 10.10.0.53
 ```
 Para acceder a la terminal de los servidores se debe ejecutar el siguiente comando reemplazando [dockeid] por el id o nombre del servidor al que desea acceder
  ```sql
docker-compose up -d

CentralServer ipv4_address: 10.10.0.50

SecurityServer_A ipv4_address: 10.10.0.51

SecurityServer_B ipv4_address: 10.10.0.52

SecurityServer_C ipv4_address: 10.10.0.53
 ```
 Certificate Profile Info
```sql
ee.ria.xroad.common.certificateprofile.impl.FiVRKCertificateProfileInfoProvider
 ```
Add OCSP Responder 
```sql
http://10.10.0.50:8888
 ```
Add Timestamping Service 
```sql
http://10.10.0.50:8899
 ```
API REST
```sql
http://jsonplaceholder.typicode.com/posts

curl -X GET "https://{securityserver}/r1/{serviceId}/v2/pets/1124" -H "accept: application/json" -H "X-Road-Client: {client}"

curl -X GET "http://localhost:4201/r1/MXQROO/GOV/SS-01/PROVIDER/allowedMethods" -H "accept: application/json" -H "X-Road-Client: MXQROO/GOV/SS-02/CONSUMER"
 ```
 
 
