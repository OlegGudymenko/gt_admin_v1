<!doctype html>
<html>
<?php include('head.php')?>
<body>
<?php include('header.php')?>
<main id="main">
	  <div class="content-wrap">
	  <?php include('aside.php')?>
			<div class="order_wrap">
			<h5>Здесь Вы можете настроить характеристики.</h5>
			<div class="order_content">
				
				<div class="order_form">
		
				<div class="order_head">
					<span class="order_list_name char_name">
					Список характеристик 
					</span>
	
				</div>
				
				<form action="post" id="form-order">
					<table class="table ">
						<tr>
							<th class="td_5">
							<div class="chechbox_block char_table">		
								<label >
								    <input class="checkbox" type="checkbox" name="radio-test">
								    <span class="checkbox-custom"></span>
								</label>
							</div>
							</th>
							<th class="td_20">
								<a href="#" class="asc">Название </a>
							</th>
							<th class="td_20">
								<a href="#" class="desc">Группа</a>
							</th>
							<th class="td_20">
								<a href="#">Порядок
							сортировки</a>
							</th>
							<th class="td_20">
								<a href="#">Связанные характеристики</a>
							</th>
							<th class="td_10">
								<a href="#">Действия</a>
							</th>
						</tr>
						<tr>
							<td class="td_5">
							<div class="chechbox_block ">		
								<label >
								    <input class="checkbox" type="checkbox" name="radio-test">
								    <span class="checkbox-custom"></span>
								</label>
							</div>
							</td>
							<td class="td_20">
	
							</td>
							<td class="td_20">

							</td>
							<td class="td_20">
	
							</td>
							<td class="td_20">
	
							</td>

							<td class="td_10">
							
								<a href="#" class="edit_2"></a>	
							</td>
						</tr>
						

						
					</table>
				</form>
				<div class="btn-container_1">
						<a href="#" class="btn btn_add">
							Добавить
						</a>
						<button  class="btn btn_delete">
						</button >
				</div>	
			</div>
		</div>	
	  </div>
</main>


</body>
</html>