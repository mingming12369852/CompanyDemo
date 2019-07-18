<?php


$return = $_POST;
$return["json"] = $_POST;

echo json_encode($return);
 ?>


<!DOCTYPE html>
<html>

<head>
	<!--00.Default setting for RWD webpage-->
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/jquery.fullPage.css">
	<script src="js/jquery-1.8.3.min.js"></script>
	<script src="js/jquery.fullPage.min.js"></script>
	<script src="js/vendors/easings.min.js"></script>
	<link rel="stylesheet" href="https://rottie.000webhostapp.com/00蟬吃茶2.1/02Template/Template/00MainPage/00DefaultSetting/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://rottie.000webhostapp.com/00蟬吃茶2.1/02Template/Template/00MainPage/D2TimePicker/00DefaultSetting(CSS)/bootstrap.min.css">

	</script>
	<style>
		.section {
			text-align: center;
			font: 50px "Microsoft Yahei";
			color: #fff;
		}

		.align-items-end {
			-ms-flex-align: end !important;
			align-items: flex-end !important;
		}
	</style>


</head>

<body>




	<div id="DIV_02" >
    <!--建立點餐頁面的大容器-->
  	<div id="topbar" class="d-flex justify-content-center h-5z fixed-top shadow p-3 mb-5 bg-white rounded">
  		<img src="img/logo.jpg" alt="">
  	</div>
  	<!-- 主視窗拉靠杯 -->
  	<div id="dowebok">
  		<div class="section">
  			<p>訂單</p>
  			<hr>
  			<h5>
  				<table class="table">
  					<thead>
  						<tr>

  							<th scope="col">品項 </th>
  							<th scope="col">規格</th>
  							<th scope="col">杯數</th>
  							<th scope="col">價格</th>
  						</tr>
  					</thead>
  					<tbody>

  						<tr>
  							<td>蟬吃綠茶</td>
  							<td class="tme">無糖|少冰|無|大杯</td>
  							<td id="cap">1杯</td>
  							<td>23元</td>
  						</tr>
  					</tbody>
  					<tbody>

  						<tr class="tme">

  							<td>沒有這個茶</td>
  							<td>超甜|冰沙|無|巨大</td>
  							<td>99杯</td>
  							<td>239元</td>

  						</tr>
  						<tr class="tme">

  							<td>沒有這個茶</td>
  							<td>超甜|冰沙|無|巨大</td>
  							<td>0杯</td>
  							<td>40元</td>

  						</tr class="tme">
  						<tr>
  							<td></td>

  							<th scope="row">總計杯數</th>
  							<td></td>

  							<td>100杯</td>
  						</tr>
  						<tr>
  							<td></td>
  							<th scope="row">總計金額</th>
  							<td> </td>
  							<td>24萬元</td>
  						</tr>
  					</tbody>
  				</table>
  			</h5>


  		</div>
  		<div class="section">
  			<p>
  				</h5>資料</p>
  			<hr>
  			<form>
  				<div class="form-group">

  					<h2>姓名</h2>
  					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="輸入姓名">
  					<h2>電話</h2>
  					<input type="text" class="form-control" id="exampleInputPassword1" placeholder="輸入電話">
  					<h2>地址</h2>
  					<input type="text" class="form-control" id="exampleInputPassword1" placeholder="外送地址">
  				</div>


  			</form>
  		</div>
  		<div class="section">
  			<p>非常感謝您的</p>
  			<p>訂單!</p>

  		</div>
  	</div>
  	<!-- 下方按鈕區塊 -->
  	<div id="down-bar" class="d-flex bd-highlight row fixed-bottom  d-flex justify-content-around align-items-end">
  		<div class="p-2 bd-highlight w-25 p-3 text-center">
  			<a id="addition" href="" class="row justify-content-between	" style="color:#fff" size="3">

  				<h3>

  					新增
  				</h3>
  			</a>
  		</div>
  		<div class="p-2 bd-highlight w-25 p-3	text-center">
  			<a id="modify" href="" class="row justify-content-between	" style="color:#fff" size="3">

  				<h3>

  					修改
  				</h3>
  			</a>
  		</div>
  		<div class="p-2 bd-highlight flex-grow-1 d-flex justify-content-center" id="button_determine" style="background-color: #ef5f96 ">
  			<a id="test-bar" href="#" class="" style="color:#fff" size="3">
  				<h3>
  					下一步
  				</h3>
  			</a>
  		</div>
  	</div>

		<!-- Script class -->
		<script>
			var PageNumber ;
			$('#modify').on("click", function() {
		console.log("hi");
		});
			$(function(){


				// "下一步"
				$('#test-bar').on("click", function() {
				$('#dowebok').fullpage.moveSectionDown();
				});
			$('#dowebok').fullpage({
				sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE', '#f90'],
				scrollingSpeed:450,
				dragAndMove: false,
				afterLoad:function(index,anchorLink){
					PageNumber = anchorLink;
					switch (anchorLink) {
						case 2:
						$('#test-bar').attr("href", "./setData.php#")
						$('#test-bar h3').text("立即送出");

							break;
						case 3:
						$('#down-bar').remove();
							break;
						default:
					}
			},afterRender:function(){
					$.fn.fullpage.setAllowScrolling(false);
					}
			});
		});
		</script>
  </div>

</body>



</html>
