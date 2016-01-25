### Backend CRUD

На беке есть готовый круд, который генерируется в специально созданых gii темплейтах
![gii templates](/docs/img/welcometogii.png)

1.Для начала нужно создать миграцию

```bash
./yii migrate/create
or
./yii migrate/create table_name # prefer
or
./yii migrate/create table_name --lang # for language models
```

лучше создавать миграции сразу указывая имя таблицы

миграции создаются с преустановленым кодом, который нужно немного модифицировать

все миграции собираются в `console/migrations`

внести все необходимые поля в миграции и выполнить ее

```bash
./yii migrate
```

Если в таблице одновременно присутствуют поля label и alias, то в генерируемой моделе в бэке будет работать автозаполнение
поля alias транслитом по значению из label.

2.Генерация модели

![model generation](/docs/img/advancedmodelgenerator.png)
Выбираем имя таблицы, выбираем имя модели. модели создадутся в common/models и common/models/base
(не забываем про мультиязыковую таблицу, если она есть - ее нужно отдельно создать)
модель в common/models/base можно менять как угодно, и она дальше не будет перегенериваться в gii
модель в common/models будет перегенериваться - там хранится общая информация, которая не зависит от бизнес логики, ее трогать не нужно

код для мультиязыка будет добавлен автоматически (на основании названий таблиц, поэтому название таблицы переводов не нужно менять)

так же будут автоматически добавлены мультиязычные поля

Если нужно подключить SeoBehavior, то достаточно поставить галочку в чекбоксе Is Seo.

3.Генерация модуля

![module generation](/docs/img/advancedmodulegenerator.png)
Тут ничего необычного, просто структура генерируемых файлов немного изменена

добавляем модуль в конфигурацию бекенда

4.CRUD

![crud](/docs/img/advancedcrudgenerator.png)
Вписываем путь к моделе, которая лежит в common/models
вписываем название модели, которая должна создаться на бекенде (модель для поиска создастся автоматически)
списываем название контроллера в бекенде

Если нужно подключить виджет для загрузки картинок (ImageUpload), то достаточно поставить галочку на чекбоксе Is Image.


Теперь круд для таблицы готов
![crud](/docs/img/contenttable.png)
можно создать запись и посмотреть ее
![crud](/docs/img/createcontenttable.png)
![crud](/docs/img/test.png)

конфигурация отображения index, view и формы хранится в моделе в бекенде, в соответствующих методах
