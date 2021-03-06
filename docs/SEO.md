SEO
===================================

настройка SEO страниц-списков
-----------------------------

В разделе Page SEO создать записи для необходимых страниц (изначально создана запись для страницы Home).
В common\models\PageSeo создать соответствующие константы, значение которых равно id записей.
В контроллере на фронте вызывать метод ```PageSeo::registerSeo(PageSeo::ID_HOME);```

компонент редиректов
--------------------

Для управления редиректов средствами php необходимо перейти в адимнке "Configurations -> Redirects"
From - абсолютный url с которого происходит редирект
To - абсолютный url на который происходит редирект
Is active - статус редиректа(активный/не активный)

Редиректы кешируются в файловом кэше.
Кнопка "Clear cache" - очистка кэша.

robots.txt
----------

robots.txt редактируєтся в админке "Configurations -> Robots.txt"
Каждая опция должа быть добавлена с новой строки
```/site/robots``` - экшн для вывода robots.txt
Файла robots.txt в ```/frontend/web``` быть не должно.

sitemap.xml
-----------

Для генерации sitemap.xml используется:
[https://github.com/himiklab/yii2-sitemap-module](https://github.com/himiklab/yii2-sitemap-module)

ajax и внешние ссылки
---------------------

Для создания ajax ссылки в ```/frontend/helpers/ExtendedHtml``` сущестувует метод ```ajaxLink($text, $url = null, $options = [])```.
Он создает ссылку добавляя к ней клас ajax-link и rel ```noindex/nofollow```. Для клика на .ajax-link в ```frontend/web/js/frontend.js``` есть обработчик.

Для создания ссылки на внешний ресурс ```/frontend/helpers/ExtendedHtml``` сущестувует метод ```externalLink($text, $url = null, $options = [])```.
Он создает ссылку добавляя к ней rel ```noindex/nofollow```.

meta tags для шеров:
---------------------

```php
<?= \frontend\widgets\openGraphMetaTags\Widget::widget([
            'title' => 'Test title',
            'url' => Url::to(Url::current(['_pjax' => null]), true),
            'description' => 'Some test description',
            'image' => 'http://pbs.twimg.com/media/CaNtqoYUMAAENl3.jpg',
        ]); ?>
```
