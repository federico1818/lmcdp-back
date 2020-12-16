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

3. Run migrations

```sh
php artisan migrate
```

4. Install passport keys

```sh
php artisan passport:install
```


## Development

1. Pull the Docker image google/cloud-sdk 

```sh
docker pull google/cloud-sdk
```

2. Run container

```sh
docker run -it -d --name gcloud -v ${PWD}:/src google/cloud-sdk bash
```

3. Execute container

```sh
docker exec -it gcloud bash
```