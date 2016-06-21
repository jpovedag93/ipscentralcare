<?php

	function head()
	{
		echo "
			<!DOCTYPE html>
			<html lang='es'>
			<head>
				<meta charset='UTF-8'>
				<meta http-equiv='X-UA-Compatible' content='IE=edge'>
    			<meta name='viewport' content='width=device-width, initial-scale=1'>
				<meta name='description' content=''>
				<link rel='icon' href='./img/logoclinica.png'>
				<link rel='icon' href='../img/logoclinica.png'>
				<link rel='stylesheet' href='css/bootstrap.min.css'>
				<link rel='stylesheet' href='css/bootstrap-theme.css'>
			    <script src='scripts/jquery.js'></script>
			    <script src='scripts/bootstrap.min.js'></script>
			    <link href='../css/bootstrap.min.css' rel='stylesheet'>
			    <link href='../css/simple-sidebar.css' rel='stylesheet'>
			    <link href='font-awesome-4.3.0/css/font-awesome.min.css' rel='stylesheet'>
				<title>SGM</title>
				
			</head>
		";
	}

	function sliderBar()
	{
		echo "
			<nav class='navbar navbar-default no-margin'>
   
                <div class='navbar-header fixed-brand'>
                    <button type='button' class='navbar-toggle collapsed' data-toggle='collapse'  id='menu-toggle'>
                      <span class='glyphicon glyphicon-th-large' aria-hidden='true'></span>
                    </button>
                    <a class='navbar-brand' href='#'><i class='fa fa-rocket fa-4'><img src='../img/logoclinica.png' width='130%' height='200%' style='margin-left:22px; margin-top:-8;'></i></a>
                </div>
                <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
                            <ul class='nav navbar-nav'>
                                <li class='active' ><button class='navbar-toggle collapse in' data-toggle='collapse' id='menu-toggle-2'> <span class='glyphicon glyphicon-th-large' aria-hidden='true'></span></button></li>
                            </ul>
                </div>
    		</nav>
		    <div id='wrapper'>
		        
		        <div id='sidebar-wrapper'>
		            <ul class='sidebar-nav nav-pills nav-stacked' id='menu'>
		 
		                <li class='active'>
		                    <a href='#'><img src='../img/lapiz.png' width='9%' height='9%' alt=''><span class='fa-stack fa-lg pull-left'><i class='fa fa-dashboard fa-stack-1x '></i></span> &nbsp;&nbsp;Asig. citas</a>
		                       <ul class='nav-pills nav-stacked' style='list-style-type:none;'>
		                        <li><a href='#'>link1</a></li>
		                        <li><a href='#'>link2</a></li>
		                    </ul>
		                </li>
		                <li>
		                    <a href='#'><img src='../img/reportar.png' width='9%' height='9%' alt=''><span class='fa-stack fa-lg pull-left'><i class='fa fa-flag fa-stack-1x '></i></span>&nbsp;&nbsp; Facturación</a>                   
		                </li>
		                <li>
		                    <a href='#'><span class='fa-stack fa-lg pull-left'><img src='../img/tabletas.png' width='9%' height='9%' alt=''><span class='fa-stack fa-lg pull-left'><i class='fa fa-cloud-download fa-stack-1x '></i></span>&nbsp;&nbsp;&nbsp;Dips. Medicamentos</a>
		                </li>
		                <li>
		                    <a href='#'><img src='../img/historial-medico.png' width='9%' height='9%' alt=''><span class='fa-stack fa-lg pull-left'><i class='fa fa-cart-plus fa-stack-1x '></i></span>&nbsp;&nbsp; Historias clinicas</a>
		                </li>
		                <li>
		                    <a href='#'><img src='../img/yeso.png' width='9%' height='9%' alt=''><span class='fa-stack fa-lg pull-left'><i class='fa fa-youtube-play fa-stack-1x '></i></span>&nbsp;&nbsp;&nbsp;Soporte</a>
		                
		            </ul>
		        </div>
		        <div id='page-content-wrapper'>
		            <div class='container-fluid xyz'>
		                <div class='row'>
		                    <div class='col-lg-12'>
		                        <h1>Sistema de información para gestión medica <a href='http://http://centralcare.com.co' >Central care</a></h1>
		                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum reiciendis cum illo et omnis voluptatem consequatur earum eos doloribus deserunt facilis harum, minus sunt commodi blanditiis ab rerum modi dolores.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam eius deserunt ad rerum impedit dignissimos ipsa blanditiis harum excepturi, omnis ducimus ipsum architecto quae consequuntur iure inventore facere, tenetur voluptates.</p>
		                    </div>
		                </div>
		            </div>
		        </div>
		   		<script src='../js/jquery.js'></script>
					    <script src='../js/bootstrap.min.js'></script>
					    <script src='../js/sidebar_menu.js'></script>
		    </div>
		";
	}

	function footer()
	{
		echo "
			<div class='navbar nabvar-inverse navbar-fixed-bottom text-center' role='navigation'>
				<div class='container'>
					<a href='http://www.centralcare.com.co'><p> &copy 2016 Clinica Central Care</p></a>
				</div>
			</div>
       		";		
	}
?>