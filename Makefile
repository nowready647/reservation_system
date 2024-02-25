build:
	docker build -t reservation_system_be .
up:
	make build
	docker-compose --project-name reservation_system_be up -d
	docker-compose --project-name reservation_system_be exec php composer install
down:
	docker-compose --project-name reservation_system_be down
