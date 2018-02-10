# RUN APPLICATION

Build/run containers:

    $ docker-compose build
    $ docker-compose up -d 
    $ docker-compose exec app composer install
    $ chmod 777 var/cache 

Run application:

    http://localhost:8000/ip2geo?ip=8.8.8.8
    
or

    curl --request GET \
      --url 'http://localhost:8000/ip2geo?ip=8.8.8.8'
      