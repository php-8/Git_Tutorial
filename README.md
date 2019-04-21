# Git основные команды

#### Глобальные настройки
* git config --global user.name "Michael"
* git config --global user.email michael@example.com
* git config --list - проверка настроек

#### Ветки
* git branch - все ветки
* git checkout -b Michael - создать и переключиться на ветку
* git checkout Michael - переключиться на ветку
* git btanch -D Michael - удалить ветку
* git pull - обновить файлы

#### Основные
* git init - инициализация папки как git репозиторий
* git add . - добавляет все файлы на отправку
* git commit -m " " - комментарий к внесенным изменениям 
* git remote add origin https://github.com/Go/to.git - ссылка на репозиторий
* git push --force origin master - загрузка 

* git clone - скачать репозиторий
* git pull - обноаить репозиторий
