<?php
require_once 'vendor\autoload.php'; //подключаем файл автозагрузки композера

Twig_Autoloader::register(); //авторизируем и регистрируем шаблонизатор

$loader = new Twig_Loader_Filesistem('templates'); //указываем папку для хранения шаблонов
$twig=new Twig_Environment($loader, array('cache' => 'cache'));
$template=$twig->loadTemplate('index.twig'); //подгружаем файл с шаблоном
$title ="Composer+Twig";

$flower=array(
  array('title'=>'Rose','price'=>'3$'),
  array('title'=>'Hibiskus','price'=>'2$'),
  array('title'=>'Lavender','price'=>'1$'),
  array('title'=>'Tulip','price'=>'5$'),
  array('title'=>'Pion','price'=>'4$'),
);
echo $template->render('nav.twig',array('flower'=>$flower));

?>
