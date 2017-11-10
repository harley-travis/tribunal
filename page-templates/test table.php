<?php 
/**
 * Template Name: table
*/
get_header(); ?>

<style>
	.table {
		width:500px;
	}
	.table tr th{
		text-align: center;
	}
	.title{
		text-align: center;
	}
</style>


<div class="container-fluid wrap-push">
	<div class="container features">
		<div class="price-box-2 purple-text">
			<h1>Features</h1>
		</div><!--features-header-->
		
		<table class="table table-striped" align="center">
			<thead>
				<tr>
					<th>
						Test 1
					</th>
					<th>
						Test 2
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th class="title">Title</th>
				</tr>
				<tr>
					<th>
						One	
					</th>
					<th>
						Two
					</th>
				</tr>
				<tr>
					<th>Title</th>
				</tr>
				<tr>
					<th>
						Red
					</th>
					<th>
						Blue
					</th>
				</tr>
			</tbody>
		</table>
		
		
		


	</div><!--features-->
</div><!--container-fluid-->