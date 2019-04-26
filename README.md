![ ](https://www.imedia.by/upload/iblock/a3b/git.png)
# Основные команды 
#### Глобальные настройки
* git config --global user.name "Michael"
* git config --global user.email michael@example.com
* git config --list - проверка настроек

#### Ветки
* git branch - все ветки
* git checkout -b Michael - создать и переключиться на ветку
* git checkout Michael - переключиться на ветку
* git branch -D Michael - удалить ветку
* git pull - обновить файлы

#### Основные
* git init - инициализация папки как git репозиторий
* git add . - добавляет все файлы на отправку
* git commit -m " " - комментарий к внесенным изменениям 
* git remote add origin https://github.com/php-8/Git_Tutorial.git - ссылка на репозиторий
* git push -u origin master - загрузка 
* git clone - скачать репозиторий
* git pull - обноаить репозиторий
* git status - статус файлов
* git stash - отмена в изменений файлов
* git stash apply - отказ от отмены
