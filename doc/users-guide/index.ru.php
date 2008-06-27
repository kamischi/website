<?
$title = "Руководство пользователя";
$cvs_author = 'Author: dmrrsn';
$cvs_date = 'Date: 2008/06/27 00:55:00';
$metatags = '<link rel="contents" href="index.php?phpLang=ru" title="Руководство пользователя Contents"><link rel="next" href="intro.php?phpLang=ru" title="Введение">';


include_once "header.ru.inc";
?>
<h1>Руководство пользователя Fink</h1>
        <p> Данный документ содержит обзор всех возможностей Fink. (Более широкий обзор могут дать ранее выпущенные документы <a href="http://www.finkproject.org/doc/bundled/install.php">Инсталляция</a>, <a href="http://www.finkproject.org/doc/bundled/usage.php">Использование</a>
            и файл ReadMe.rtf, включенный в загрузочный модуль бинарного дистрибутива.)
            Также см. на веб-сайте раздел <a href="http://www.finkproject.org/doc/">Документация
            </a>, который рекомендует другие полезные документы
            в дополнение к указанным.</p>
        <p> Добро пожаловать в Руководство пользователя Fink. Руководство описывает процедуры первоначальной
            инсталляции и обновления дистрибутива исходного кода и бинарного дистрибутива,
            а также отражает вопросы инсталляции и
            обслуживания пакетов.</p>
    <h2><? echo FINK_CONTENTS ; ?></h2><ul>
	<li><a href="intro.php?phpLang=ru"><b>1 Введение</b></a><ul><li><a href="intro.php?phpLang=ru#what">1.1 Что такое Fink?</a></li><li><a href="intro.php?phpLang=ru#req">1.2 Требования</a></li><li><a href="intro.php?phpLang=ru#supported-os">1.3 Поддерживаемые системы</a></li><li><a href="intro.php?phpLang=ru#src-vs-bin">1.4 Дистрибутив исходного кода и бинарный дистрибутив</a></li></ul></li><li><a href="install.php?phpLang=ru"><b>2 Первоначальная инсталляция</b></a><ul><li><a href="install.php?phpLang=ru#bin">2.1 Инсталляция бинарного дистрибутива</a></li><li><a href="install.php?phpLang=ru#src">2.2 Инсталляция дистрибутива исходного кода</a></li><li><a href="install.php?phpLang=ru#setup">2.3 Настройка среды</a></li></ul></li><li><a href="packages.php?phpLang=ru"><b>3 Инсталляция пакетов</b></a><ul><li><a href="packages.php?phpLang=ru#bin-dselect">3.1 Инсталляция бинарных пакетов при помощи dselect</a></li><li><a href="packages.php?phpLang=ru#bin-apt">3.2 Инсталляция бинарных пакетов при помощи apt-get</a></li><li><a href="packages.php?phpLang=ru#bin-exceptions">3.3 Инсталляция зависимых пакетов, недоступных при использовании бинарного
                дистрибутива</a></li><li><a href="packages.php?phpLang=ru#src">3.4 Инсталляция бинарных пакетов и пакетов исходного кода при помощи инструмента fink</a></li><li><a href="packages.php?phpLang=ru#fink-commander">3.5 Fink Commander</a></li><li><a href="packages.php?phpLang=ru#available-versions">3.6 Имеющиеся версии</a></li><li><a href="packages.php?phpLang=ru#x11">3.7 Выбор вида реализации X11</a></li></ul></li><li><a href="upgrade.php?phpLang=ru"><b>4 Обновление Fink</b></a><ul><li><a href="upgrade.php?phpLang=ru#bin">4.1 Обновление на основе бинарных пакетов</a></li><li><a href="upgrade.php?phpLang=ru#src">4.2 Обновление дистрибутива исходного кода</a></li><li><a href="upgrade.php?phpLang=ru#mix">4.3 Комбинирование бинарных пакетов и пакетов исходного кода</a></li></ul></li><li><a href="conf.php?phpLang=ru"><b>5 Конфигурационный файл Fink</b></a><ul><li><a href="conf.php?phpLang=ru#about">5.1 Информация о fink.conf</a></li><li><a href="conf.php?phpLang=ru#syntax">5.2 Синтаксис fink.conf</a></li><li><a href="conf.php?phpLang=ru#required">5.3 Необходимые настройки</a></li><li><a href="conf.php?phpLang=ru#optional">5.4 Опциональные настройки пользователя</a></li><li><a href="conf.php?phpLang=ru#downloading">5.5 Настройки скачивания</a></li><li><a href="conf.php?phpLang=ru#mirrors">5.6 Настройки зеркал</a></li><li><a href="conf.php?phpLang=ru#developer">5.7 Настройки разработчика</a></li><li><a href="conf.php?phpLang=ru#advanced">5.8 Настройки для использования продвинутыми пользователями</a></li><li><a href="conf.php?phpLang=ru#sourceslist">5.9 Управление файлом sources.list в apt</a></li></ul></li><li><a href="usage.php?phpLang=ru"><b>6 Использование инструмента fink в командной строке</b></a><ul><li><a href="usage.php?phpLang=ru#using">6.1 Использование инструмента fink</a></li><li><a href="usage.php?phpLang=ru#options">6.2 Глобальные опции</a></li><li><a href="usage.php?phpLang=ru#install">6.3 install</a></li><li><a href="usage.php?phpLang=ru#remove">6.4 remove</a></li><li><a href="usage.php?phpLang=ru#purge">6.5 purge</a></li><li><a href="usage.php?phpLang=ru#update-all">6.6 update-all</a></li><li><a href="usage.php?phpLang=ru#list">6.7 list</a></li><li><a href="usage.php?phpLang=ru#apropos">6.8 apropos</a></li><li><a href="usage.php?phpLang=ru#describe">6.9 describe</a></li><li><a href="usage.php?phpLang=ru#plugins">6.10 plugins</a></li><li><a href="usage.php?phpLang=ru#fetch">6.11 fetch</a></li><li><a href="usage.php?phpLang=ru#fetch-all">6.12 fetch-all</a></li><li><a href="usage.php?phpLang=ru#fetch-missing">6.13 fetch-missing</a></li><li><a href="usage.php?phpLang=ru#build">6.14 build</a></li><li><a href="usage.php?phpLang=ru#rebuild">6.15 rebuild</a></li><li><a href="usage.php?phpLang=ru#reinstall">6.16 reinstall</a></li><li><a href="usage.php?phpLang=ru#configure">6.17 configure</a></li><li><a href="usage.php?phpLang=ru#selfupdate">6.18 selfupdate</a></li><li><a href="usage.php?phpLang=ru#selfupdate-rsync">6.19 selfupdate-rsync</a></li><li><a href="usage.php?phpLang=ru#selfupdate-cvs">6.20 selfupdate-cvs</a></li><li><a href="usage.php?phpLang=ru#index">6.21 index</a></li><li><a href="usage.php?phpLang=ru#validate">6.22 validate</a></li><li><a href="usage.php?phpLang=ru#scanpackages">6.23 scanpackages</a></li><li><a href="usage.php?phpLang=ru#cleanup">6.24 cleanup</a></li><li><a href="usage.php?phpLang=ru#dumpinfo">6.25 dumpinfo</a></li><li><a href="usage.php?phpLang=ru#show-deps">6.26 show-deps</a></li></ul></li></ul>
<!--Generated from $Fink: uguide.ru.xml,v 1.6 2008/06/27 00:55:00 dmrrsn Exp $-->
<? include_once "../../footer.inc"; ?>


