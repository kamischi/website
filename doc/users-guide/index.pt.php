<?php
$title = "Guia do usuário";
$cvs_author = 'Author: gecko2';
$cvs_date = 'Date: 2012/11/11 15:20:17';
$metatags = '<link rel="contents" href="index.php?phpLang=pt" title="Guia do usuário Contents"><link rel="next" href="intro.php?phpLang=pt" title="Introdução">';


include_once "header.pt.inc";
?>
<h1>Guia do usuário do Fink</h1>
    <p>Este documento provê uma visão geral de todas as características do
    Fink. Os documentos a seguir podem oferecer uma visão mais ampla: <a href="/doc/install/index.php">Instalação</a>,
    <a href="/doc/usage/index.php">Formas de
    uso</a> e o arquivo LeiaMe.rtf (incluído na imagem de disco da
    distribuição de binários).  Verifique também a <a href="/doc/">seção de documentação</a> do site;
    ela contém alguns outros documentos úteis.</p>

    <p>Bem-vindo ao Guia do usuário do Fink.  Este guia cobre procedimentos
    para a instalação inicial e atualizações subsequentes de tanto a
    distribuição de binários quanto a distribuição de códigos fontes.
    Instalação e manutenção de pacotes também são discutidas.</p>
  <h2><?php echo FINK_CONTENTS ; ?></h2><ul>
	<li><a href="intro.php?phpLang=pt"><b>1 Introdução</b></a><ul><li><a href="intro.php?phpLang=pt#what">1.1 O que é o Fink?</a></li><li><a href="intro.php?phpLang=pt#req">1.2 Requisitos</a></li><li><a href="intro.php?phpLang=pt#supported-os">1.3 Sistemas suportados</a></li><li><a href="intro.php?phpLang=pt#src-vs-bin">1.4 Código fonte vs. binário</a></li></ul></li><li><a href="install.php?phpLang=pt"><b>2 Instalação inicial</b></a><ul><li><a href="install.php?phpLang=pt#bin">2.1 Instalando a distribuição de binários</a></li><li><a href="install.php?phpLang=pt#src">2.2 Instalando a distribuição de códigos fontes</a></li><li><a href="install.php?phpLang=pt#setup">2.3 Configurando seu ambiente</a></li></ul></li><li><a href="packages.php?phpLang=pt"><b>3 Instalando pacotes</b></a><ul><li><a href="packages.php?phpLang=pt#bin-dselect">3.1 Instalando pacotes binários com o dselect</a></li><li><a href="packages.php?phpLang=pt#bin-apt">3.2 Instalando pacotes binários com o apt-get</a></li><li><a href="packages.php?phpLang=pt#bin-exceptions">3.3 Instalando pacotes dependentes que não estão disponíveis na
      distribuição de binários</a></li><li><a href="packages.php?phpLang=pt#src">3.4 Instalando pacotes binários e com código fonte através do
      fink</a></li><li><a href="packages.php?phpLang=pt#fink-commander">3.5 Fink Commander</a></li><li><a href="packages.php?phpLang=pt#available-versions">3.6 Versões disponíveis</a></li><li><a href="packages.php?phpLang=pt#x11">3.7 Lidando com o X11</a></li></ul></li><li><a href="upgrade.php?phpLang=pt"><b>4 Atualizando o Fink</b></a><ul><li><a href="upgrade.php?phpLang=pt#bin">4.1 Atualizando através de pacotes binários</a></li><li><a href="upgrade.php?phpLang=pt#src">4.2 Atualizando a distribuição de códigos fontes</a></li><li><a href="upgrade.php?phpLang=pt#mix">4.3 Misturando binários e códigos fontes</a></li></ul></li><li><a href="conf.php?phpLang=pt"><b>5 O arquivo de configuração do Fink</b></a><ul><li><a href="conf.php?phpLang=pt#about">5.1 Sobre o fink.conf</a></li><li><a href="conf.php?phpLang=pt#syntax">5.2 A sintaxe do fink.conf</a></li><li><a href="conf.php?phpLang=pt#required">5.3 Configurações obrigatórias</a></li><li><a href="conf.php?phpLang=pt#optional">5.4 Configurações de usuário opcionais</a></li><li><a href="conf.php?phpLang=pt#downloading">5.5 Configurações de download</a></li><li><a href="conf.php?phpLang=pt#mirrors">5.6 Configurações de espelhos</a></li><li><a href="conf.php?phpLang=pt#developer">5.7 Configurações para desenvolvedores</a></li><li><a href="conf.php?phpLang=pt#advanced">5.8 Configurações avançadas</a></li><li><a href="conf.php?phpLang=pt#sourceslist">5.9 Gerenciando o arquivo sources.list do apt</a></li></ul></li><li><a href="usage.php?phpLang=pt"><b>6 Usando a ferramenta fink a partir da linha de comando</b></a><ul><li><a href="usage.php?phpLang=pt#using">6.1 Usando a ferramenta fink</a></li><li><a href="usage.php?phpLang=pt#options">6.2 Opções globais</a></li><li><a href="usage.php?phpLang=pt#install">6.3 install</a></li><li><a href="usage.php?phpLang=pt#remove">6.4 remove</a></li><li><a href="usage.php?phpLang=pt#purge">6.5 purge</a></li><li><a href="usage.php?phpLang=pt#update-all">6.6 update-all</a></li><li><a href="usage.php?phpLang=pt#list">6.7 list</a></li><li><a href="usage.php?phpLang=pt#apropos">6.8 apropos</a></li><li><a href="usage.php?phpLang=pt#describe">6.9 describe</a></li><li><a href="usage.php?phpLang=pt#plugins">6.10 plugins</a></li><li><a href="usage.php?phpLang=pt#fetch">6.11 fetch</a></li><li><a href="usage.php?phpLang=pt#fetch-all">6.12 fetch-all</a></li><li><a href="usage.php?phpLang=pt#fetch-missing">6.13 fetch-missing</a></li><li><a href="usage.php?phpLang=pt#build">6.14 build</a></li><li><a href="usage.php?phpLang=pt#rebuild">6.15 rebuild</a></li><li><a href="usage.php?phpLang=pt#reinstall">6.16 reinstall</a></li><li><a href="usage.php?phpLang=pt#configure">6.17 configure</a></li><li><a href="usage.php?phpLang=pt#selfupdate">6.18 selfupdate</a></li><li><a href="usage.php?phpLang=pt#selfupdate-rsync">6.19 selfupdate-rsync</a></li><li><a href="usage.php?phpLang=pt#selfupdate-cvs">6.20 selfupdate-cvs</a></li><li><a href="usage.php?phpLang=pt#index">6.21 index</a></li><li><a href="usage.php?phpLang=pt#validate">6.22 validate</a></li><li><a href="usage.php?phpLang=pt#scanpackages">6.23 scanpackages</a></li><li><a href="usage.php?phpLang=pt#cleanup">6.24 cleanup</a></li><li><a href="usage.php?phpLang=pt#dumpinfo">6.25 dumpinfo</a></li><li><a href="usage.php?phpLang=pt#show-deps">6.26 show-deps</a></li></ul></li></ul>
<!--Generated from $Fink: uguide.pt.xml,v 1.3 2012/11/11 15:20:17 gecko2 Exp $-->
<?php include_once "../../footer.inc"; ?>


