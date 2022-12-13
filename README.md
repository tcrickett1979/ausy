## Launching The App Stack ##

If you've never used this repo before, run the following command to build your containers:

```bash
docker-compose up --build -d 
```

The entire stack can be launched using the following command:

```bash
docker-compose up -d 
```

If you wish to view direct to terminal output from each container, this can be done so without the detach flag:

```bash
docker-compose up
```

Note: this is a blocking command.

___

## Terminating The App Stack ##

To stop all the containers in the stack the following command can be used:

```bash
docker-compose down
```

___

## Running Composer Commands ##

Composer installed within the app-runtime container. The docker-compose exec command can be used to run composer like
so:

```bash
docker-compose exec ausy-app composer install
```

---

## Make .env file ##

.env.example needs to be copied to .env

```bash
cp .env.example .env
```

___

## Running Artisan Commands ##

Artisan commands can be run within the ausy-app container in exactly the same way as composer commands:

```bash
docker-compose exec ausy-app php artisan key:generate
```

```bash
docker-compose exec ausy-app php artisan migrate:fresh
```

```bash
docker-compose exec ausy-app php artisan db:seed
```

___
