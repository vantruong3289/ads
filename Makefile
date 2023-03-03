serve:
	php artisan serve --port=9005
ide:
	php artisan ide-helper:models
seed:
	php artisan db:seed
vite:
	npm run dev
fresh:
	php artisan migrate:fresh
# ---------------------------------------------------------------------

brand-seed:
	php artisan db:seed --class=BrandSeeder
ads-seed:
	php artisan db:seed --class=AdsSeeder

consumer-seed:
	php artisan db:seed --class=ConsumerSeeder
consumer-store:
	./vendor/bin/phpunit --filter testStore ./tests/ConsumerTest.php
consumer-update:
	./vendor/bin/phpunit --filter testUpdate ./tests/ConsumerTest.php
consumer-update-password:
	./vendor/bin/phpunit --filter testPassword ./tests/ConsumerTest.php

advertiser-seed:
	php artisan db:seed --class=AdvertiserSeeder
advertiser-store:
	./vendor/bin/phpunit --filter testStore ./tests/AdvertiserTest.php
advertiser-update:
	./vendor/bin/phpunit --filter testUpdate ./tests/AdvertiserTest.php
advertiser-update-password:
	./vendor/bin/phpunit --filter testPassword ./tests/AdvertiserTest.php
