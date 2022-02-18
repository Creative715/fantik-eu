# FANTIK
## Системные Требования

- PHP версии 8.0 и выше
- MYSQL версии 5.7 и выше
- NodeJS версии 12 и выше

## Установка

Переименать файл `.env.examle`  в корне проекта в файл `.env`
команда: cp .env.example .env

Установить пакеты с помощью [composer](https://getcomposer.org/)
вызвав команду `composer install` в консоли.

Установить пакеты с помощью [npm](https://www.npmjs.com/)
вызвав команду `npm install` в консоли.

Создайть свою базу данных на своем сервере и обновить в файле .env следующие строки:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=fantik
DB_USERNAME=root
DB_PASSWORD=
```
Сгенерировать ключ безопастности с помощью команды  
`php artisan key:generate`

Запустить миграции и наполнение базы данных с помощью команды  
`php artisan migrate --seed`


После того, как проект установлен, надо запустить команду, чтобы связать общую папку хранилища для
загрузки файлов:  
`php artisan storage:link`

Публикация файлов Livewire:  
`php artisan livewire:publish --assets`

## Разработка

Попередження:
Після того як добавились нові "route":
`php artisan cache:clear`
`php artisan route:cache`

Файлы стилей и скриптов создаются с использованием Laravel Mix, который является оболочкой для многих инструментов и
работает с файлом webpack.mix.js в корне проекта.

их можно построить с помощью команды:  
`npm run <command>`

Доступные команды перечислены в верхней части файла package.json под ключом «scripts».

## Библиотеки и пакеты

- PHP Фреймворк [Laravel 9](https://laravel.com/)
- CSS Фреймворк [Bootstrap 5](https://getbootstrap.com/)
- JS фреймворк [Vue.js](https://vuejs.org/)
- Используются иконки Font Awesome https://fontawesome.com/