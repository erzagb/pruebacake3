<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bootstrap.min') ?>
    <?= $this->Html->script(['jquery-3.1.1.min', 'bootstrap.min']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    
    <nav class="navbar navbar-inverse">
       <div class="container-fluid">
         <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".js-navbar-collapse" aria-expanded="false" aria-controls="navbar">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
           <a class="navbar-brand" href="#">Colegio de Abogados</a>
         </div>
         
         <!--Menu de perfiles-->
         <div id="navbar" class="collapse navbar-collapse js-navbar-collapse">
           <ul class="nav navbar-nav">
          <!------------------------------------------------------------>
           <li class="active">
          <a href="#" data-toggle="collapse" data-target="#toggleDemo0" data-parent="#sidenav01" class="collapsed"> Perfiles <span class="caret"></span></a>
          
          <div class="collapse" id="toggleDemo0" style="height: 0px;">
            <ul class="nav nav-list">
                
             <!--Submenu de Colegiado-->
            <li><a href="#" data-toggle="collapse" data-target="#toggleDemo" data-parent="#sidenav01" class="collapsed">
              Colegiados <span class="caret"></span></a>
              <div class="collapse" id="toggleDemo" style="height: 0px;">
                <ul class="nav nav-list">
                  <li><?php 
                    echo $this->Html->link('Agregar', 
                    ['controller'=>'colegiado', 'action'=>'agregar']);  
                  ?></li>
                  <li><?php 
                    echo $this->Html->link('Editar', 
                    ['controller'=>'colegiado', 'action'=>'editar']);  
                  ?></li>
                  <li><?php 
                    echo $this->Html->link('Eliminar', 
                    ['controller'=>'colegiado', 'action'=>'eliminar']);  
                  ?></li>
                  <li><?php 
                    echo $this->Html->link('Ver', 
                    ['controller'=>'colegiado', 'action'=>'ver']);  
                  ?></li>
                </ul>
              </div>
            </li>
              
            <!--Submenu de Colegiado-->
            <li class="active"><a href="#" data-toggle="collapse" data-target="#toggleDemo2" data-parent="#sidenav01" class="collapsed">
             Profesores <span class="caret"></span></a>
            <div class="collapse" id="toggleDemo2" style="height: 0px;">
                <ul class="nav nav-list">
                  <li><?php 
                    echo $this->Html->link('Agregar', 
                    ['controller'=>'profesor', 'action'=>'agregar']);  
                  ?></li>
                  <li><?php 
                    echo $this->Html->link('Editar', 
                    ['controller'=>'profesor', 'action'=>'editar']);  
                  ?></li>
                  <li><?php 
                    echo $this->Html->link('Eliminar', 
                    ['controller'=>'profesor', 'action'=>'eliminar']);  
                  ?></li>
                  <li><?php 
                    echo $this->Html->link('Ver', 
                    ['controller'=>'profesor', 'action'=>'ver']);  
                  ?></li>
                </ul>
            </div>
            </li>
            
            </ul>
          </div>
        </li>
        
        <!--/------------------------------------------------------------ -->
         <li>
          <a href="#" data-toggle="collapse" data-target="#toggleDemo3" data-parent="#sidenav01" class="collapsed">Cursos <span class="caret"></span></a>
          <div class="collapse" id="toggleDemo3" style="height: 0px;">
            <ul class="nav nav-list">
                <li><?php 
                    echo $this->Html->link('Agregar', 
                    ['controller'=>'cursos', 'action'=>'agregar']);  
                ?></li>
                <li><?php 
                    echo $this->Html->link('Editar', 
                    ['controller'=>'cursos', 'action'=>'editar']);  
                ?></li>
                <li><?php 
                    echo $this->Html->link('Ver', 
                    ['controller'=>'cursos', 'action'=>'ver']);  
                ?></li>
            </ul>
          </div>
        </li>
        
         <li>
          <a href="#" data-toggle="collapse" data-target="#toggleDemo4" data-parent="#sidenav01" class="collapsed">Sedes <span class="caret"></span>
          </a>
          <div class="collapse" id="toggleDemo4" style="height: 0px;">
            <ul class="nav nav-list">
                <li><?php 
                    echo $this->Html->link('Agregar', 
                    ['controller'=>'sedes', 'action'=>'agregar']);  
                ?></li>
                <li><?php 
                    echo $this->Html->link('Editar', 
                    ['controller'=>'sedes', 'action'=>'editar']);  
                ?></li>
                <li><?php 
                    echo $this->Html->link('Ver', 
                    ['controller'=>'sedes', 'action'=>'ver']);  
                ?></li>
            </ul>
          </div>
        </li>
        
        <li>
          <a href="#" data-toggle="collapse" data-target="#toggleDemo5" data-parent="#sidenav01" class="collapsed">Quejas <span class="caret"></span>
          </a>
          <div class="collapse" id="toggleDemo5" style="height: 0px;">
            <ul class="nav nav-list">
              <li><?php 
                    echo $this->Html->link('Agregar', 
                    ['controller'=>'quejas', 'action'=>'agregar']);  
                ?></li>
                <li><?php 
                    echo $this->Html->link('Editar', 
                    ['controller'=>'quejas', 'action'=>'editar']);  
                ?></li>
                <li><?php 
                    echo $this->Html->link('Ver', 
                    ['controller'=>'quejas', 'action'=>'ver']);  
                ?></li>
            </ul>
          </div>
        </li>
        
         <li>
          <a href="#" data-toggle="collapse" data-target="#toggleDemo6" data-parent="#sidenav01" class="collapsed">Sugerencias <span class="caret"></span>
          </a>
          <div class="collapse" id="toggleDemo6" style="height: 0px;">
            <ul class="nav nav-list">
              <li><?php 
                    echo $this->Html->link('Agregar', 
                    ['controller'=>'sugerencias', 'action'=>'agregar']);  
                ?></li>
                <li><?php 
                    echo $this->Html->link('Editar', 
                    ['controller'=>'sugerencias', 'action'=>'editar']);  
                ?></li>
                <li><?php 
                    echo $this->Html->link('Ver', 
                    ['controller'=>'sugerencias', 'action'=>'ver']);  
                ?></li>
            </ul>
          </div>
        </li>
        
        <li>
          <a href="#" data-toggle="collapse" data-target="#toggleDemo7" data-parent="#sidenav01" class="collapsed">Registro de llamadas <span class="caret"></span>
          </a>
          <div class="collapse" id="toggleDemo7" style="height: 0px;">
            <ul class="nav nav-list">
              <li><?php 
                    echo $this->Html->link('Agregar', 
                    ['controller'=>'registrodeLlamadas', 'action'=>'agregar']);  
                ?></li>
                <li><?php 
                    echo $this->Html->link('Editar', 
                    ['controller'=>'registrodeLlamadas', 'action'=>'editar']);  
                ?></li>
                <li><?php 
                    echo $this->Html->link('Ver', 
                    ['controller'=>'registrodeLlamadas', 'action'=>'ver']);  
                ?></li>
            </ul>
          </div>
        </li>
           </ul>
           
           <div id="navbar" class="collapse navbar-collapse js-navbar-collapse">
           <ul class="nav navbar-nav navbar-right">
           <li>
          <a href="#" data-toggle="collapse" data-target="#toggleDemo8" data-parent="#sidenav01" class="collapsed">Rol <span class="caret"></span>
          </a>
          <div class="collapse" id="toggleDemo8" style="height: 0px;">
            <ul class="nav nav-list">
             <li><?php 
              echo $this->Html->link('Salir', 
              ['controller'=> 'Users', 'action' => 'login']);  
              ?></li>

            </ul>
          </div>
        </li>
           </ul>
           </div>
           
         </div><!--/.nav-collapse -->
       </div>
     </nav>
    
    <?= $this->Flash->render() ?>
    <div class="container">
        <?= $this->fetch('content') ?>
    </div>
    <footer>        
    </footer>
</body>
</html>
