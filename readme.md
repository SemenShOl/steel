# Default Wordpress Theme

Стандартная заготовка для разработки темы под Wordpress

#### Включает в себя следущее:

- Стили: SCSS + PostCSS
- CSS фреймворк: Bootstrap 5
- Методология CSS: SMACSS
- Таск-менеджер: Webpack
- Менеджер пакетов: Yarn

#### Установка

Склонируйте репозиторий:

```bash
git clone https://bitbucket.org/krivenko/default-wordress-theme.git
```

Перейдите в папку с темой и установи все плагины:

```bash
cd default-wordress-theme
yarn install
```

#### Команды для запуска компиляции стилей с скриптов:

`yarn watch` - Запускает компиляцию с отслеживанием изменений

`yarn build:dev` - Запускает компиляцию

`yarn build:prod` Запускает компиляцию в production