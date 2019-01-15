<?php
/**
 * Port of Ruipeng Zhang's Hexo theme Icarus to Typecho.
 * 
 * @package Icarus
 * @author Ruipeng Zhang & KeNorizon
 * @version 1.0
 * @link https://github.com/KeNorizon/typecho-theme-icarus
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;

$this->need('component/header.php');

Icarus_Widget::load('Post');
while ($this->next()) 
{
	Icarus_Widget_Post::output($this);
}

$this->need('component/paginator.php');
$this->need('component/footer.php');
