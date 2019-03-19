<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="libs/bootstrap.min.css">
	<title>Расчёт стоимости</title>
</head>
<style>
	.wrapper{
		width: 380px;
		padding: 16px;
	}
	.panel{
		padding: 9px;
	}
</style>
<body>

<div class="wrapper">
<div class="panel panel-success">
<div class="panel-heading">
<h4>Сделайте заказ</h4>
</div>
<br>
<form id="ceil_form">
	<label for="material">Mатериал:</label>
	<select name="material" id="" class="form-control">
		<option value="satin">Сатин</option>
		<option value="glance">Глянец</option>
		<option value="silk">Шёлк</option>
		<option value="matt">Матовый</option>
	</select><br><br>
	<div class="form-group">
	<label for="levels">Уровней потолка, кол-во:</label>
	<input class="form-control" type="text" name="levels">
	</div>
	<div class="form-group">
	<label for="length">Длина, м.кв:</label>
	<input class="form-control" type="text" name="length">
	</div>
<div class="form-group">
<label for="width">Ширина, м.кв</label>
	<input class="form-control" type="text" name="width">
</div>
<div class="form-group">
<label for="lamps">Лампы, кол-во:</label>
	<input class="form-control" type="text" name="lamps">
</div>
	<input type="submit" class="btn btn-success" name="ceil" id="calc" value="расчёт">
	</form>
</div>
</div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
		<label for="cust_name">Ваше имя</label>
		<input type="text" class="form-control" id="cust_name" name="cust_name">
		</div>
		<div class="form-group">
		<label for="cust_phone">Ваш телефон</label>
		<input type="text" class="form-control" id="cust_phone" name="cust_phone">
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">закрыть</button>
        <button type="button" id="order" class="btn btn-primary" data-dismiss="modal">заказать</button>
      </div>
    </div>

  </div>
</div>
<script src="libs/jquery-1.11.2.min.js"></script>
<script src="libs/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>