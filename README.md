# LMCDP

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