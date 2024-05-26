<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

<p align="center">
Протестировать сайт - <a href="https://gamespotlight.site">gamespotlight.site</a>
</p>

## О текущем проекте

Данный проект был создан в целях обучения Laravel. На данный момент использованы и реализованны следующие вещи:
- Шаблонизатор Blade (все страницы).
- Созданы <b>Модели</b>:
  1. <b>CommentModel.php</b> - для оставления комментариев на главной странице сайта;
  2. <b>GameModel.php</b> - с последующей миграцией;
  
  и <b>Контроллеры</b>:
  1. <b>ContentController.php</b> - для загрузки всех страниц;
  2. <b>Api/V1/GameController.php</b> - для управления моделью GameModel через API; 
- Routes - основные ссылки (/, /games, /user/auth , /faq ...) и API (/api/v1/game).
- API - routes настроен так, чтобы можно было обновлять версии API (/api/v1, /api/v2) без удаления предыдущих. API реализован по канонам REST.
    <div align="center">
    <img src="https://github.com/TheKompreso/laravel-site/blob/Kompreso/.githubcontent/routes_api.png" alt="API Routes"  wight="750" height="130">
    </div>
    Пример API-запроса через postman: <a href="https://www.postman.com/cryosat-candidate-11818601/workspace/gamespotlight-site/request/15684640-e56df688-958f-4c0a-af7f-603f23275536">gamespotlight.site/api/v1/game/1</a>

## Используемые языки и технологии
  <a href="https://laravel.com" target="_blank" rel="noreferrer"><img src="https://cdn.simpleicons.org/laravel" width="48" height="48" alt="laravel" /></a>
  <a href="https://www.php.net/" target="_blank" rel="noreferrer"><img src="https://github.com/tandpfun/skill-icons/blob/main/icons/PHP-Dark.svg" width="48" height="48" alt="PHP" /></a>
  <a href="https://www.jetbrains.com/phpstorm/" target="_blank" rel="noreferrer"><img src="https://github.com/tandpfun/skill-icons/blob/main/icons/PhpStorm-Dark.svg" width="48" height="48" alt="PHPStorm" /></a>
  <a href="https://www.mysql.com/" target="_blank" rel="noreferrer"><img src="https://raw.githubusercontent.com/danielcranney/readme-generator/main/public/icons/skills/mysql-colored.svg" width="48" height="48" alt="MySQL" /></a>
  <a href="https://postman.com" target="_blank" rel="noreferrer"> <img src="https://www.vectorlogo.zone/logos/getpostman/getpostman-icon.svg" alt="postman" width="48" height="48" /></a>
  <a href="https://developer.mozilla.org/en-US/docs/Glossary/HTML5" target="_blank" rel="noreferrer"><img src="https://raw.githubusercontent.com/danielcranney/readme-generator/main/public/icons/skills/html5-colored.svg" width="48" height="48" alt="HTML5" /></a>
  <a href="https://git-scm.com/" target="_blank" rel="noreferrer"><img src="https://raw.githubusercontent.com/danielcranney/readme-generator/main/public/icons/skills/git-colored.svg" width="48" height="48" alt="Git" /></a>
  <a href="https://tortoisegit.org" target="_blank" rel="noreferrer"> <img src="https://github.com/TheKompreso/TheKompreso/blob/master/source/brands/tortoisegit.svg" alt="tortoisegit" width="48" height="48" /></a>


## License

Платформа Laravel framework - это программное обеспечение с открытым исходным кодом, лицензируемое в соответствии с [MIT license](https://opensource.org/licenses/MIT).
