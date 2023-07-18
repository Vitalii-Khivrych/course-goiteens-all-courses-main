# Ссылка на макет

https://www.figma.com/file/OEt6pvxLAtG5hJ8stZiZ5A/course.goiteens.com?type=design

# Tailwind CSS starter kit for GoWeb 👾

## Запуск сборки

Инсталяция зависимостей проекта

```
yarn
```

Сборка запускается командой

```
yarn start
```

## Структура проекта

### В сборке используется шаблонизатор nunjuks

> https://mozilla.github.io/nunjucks/templating.html.

- Страницы проекта хранятся в папке **pages**

- Секционные фрагменты хранятся в папке **partials**

- Чтобы подключить на страницу фрагмент хранящийся в **_partials_**

```
{% include 'sidebar.html' %}
```

- Можно вызывать переменные используя токены

```
Здесь будет {{ Title }}
```

- Записать значение переменной для текущего шаблона

```
{% set title = "Заголовок" %}
```
