# LMCDP

## Install

1. Install composer dependencies

```sh
composer install
```

2. Copy and edit the .env file

```sh
cp .env.example .env
```

3. Generate application encryption key

```sh
php artisan key:generate
```

4. Run migrations

```sh
php artisan migrate
```

5. Install passport keys

```sh
php artisan passport:install
```


## Deploy

1. Pull the Docker image google/cloud-sdk 

```sh
docker pull google/cloud-sdk
```

2. Run container

```sh
docker run -it -d --name gcloud -v ${PWD}:/src -p 3306:3306 google/cloud-sdk bash
```

3. Execute container

```sh
docker exec -it gcloud bash
```

4. Replace YOUR_APP_KEY in app.yaml with an application key you generate with the following command

```sh
php artisan key:generate --show
```

5. Login

```sh
gcloud auth login
```

6. Set the project

```sh
gcloud config set project lmcdp-296100
```

7. Deploy your app

```sh
gcloud app deploy
```

```sh
gcloud beta app deploy --no-cache
```

## Conectar con base de datos

1. Descargar proxy

```sh
wget https://dl.google.com/cloudsql/cloud_sql_proxy.linux.amd64 -O cloud_sql_proxy
```

2. Dar permisos de ejecución

```sh
chmod +x cloud_sql_proxy
```

3. Login

```sh
gcloud auth login
```

4. Set the project

```sh
gcloud config set project lmcdp-296100
```

5. Ejecutar proxy

```sh
./cloud_sql_proxy -instances=lmcdp-296100:southamerica-east1:lmcdp=tcp:3306
```