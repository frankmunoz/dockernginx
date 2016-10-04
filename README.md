# dockernginx

Primero agregamos el host accediendo al archivo hosts

```sh
$ sudo vim /etc/hosts
```
Agergamos la siguiente linea

```sh
$ 172.17.0.4 frank.com
```
Guardamos cambios. Luego ejecutamos

```sh
$ docker build -t frankheavy/nginx .
$ docker run --name frankweb -itd --restart=always --add-host="frank.com:127.0.0.1" frankheavy/nginx
```
Ingresamos a frank.com y voilà se verá la conexión con postgres el resource id


