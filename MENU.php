<html>
	<head>
		  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		  <meta charset="UTF-8"/>
		</head>
		<body>  
		  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		  
		  <style>
			.container{
				background-color:rgb(95,158,160);
				display: grid;
				grid-auto-columns:100%;
				justify-content: center;
				color: white;
				border-radius:20px;
			}
			h1{
				text-align:center;
			}

		  </style>
				<div class="container mw-100 sticky-top">
				  <form method="post" class="formulario" >
					<label for="id">ID</label>
					<div class="form-row">
						
						
						
						<div class="form-group ">
							<input type="text" class="form-control" name="ID" id="id" ></input>
						</div>
						<div class="form-group ">
							<button type="submit" class="mx-2  btn btn-dark" name="pesq">Pesquisar Menu1</button>
						</div>
						<div class="form-group ">
							<button type="submit" class="mx-2  btn btn-dark" name="pesq2">Pesquisar Menu2</button>
						</div>
						<div class="form-group ">
							<button type="submit" class="mx-2 btn btn-secondary" name="exibemenu1">Exibir MenuToa1</button>				
						</div>
						<div class="form-group ">
							<button type="submit" class="mx-2  btn btn-secondary"  name="exibemenu2">Exibir MenuToa2</button>
						</div>
					</div>
					  <?php
							require('conexao.php');
							
							if(isset($_POST['pesq'])){	

                            $idc = $_POST['ID'];    
							
							$query3="SELECT * FROM menu1toa where id = ".$idc;
							$result3 = mysqli_query($link,$query3);
							while($linha3 = mysqli_fetch_assoc($result3)){

							$id3 =  $linha3['id'];
							$tel3 = $linha3['tela1'];
							$vmov3 = $linha3['vMov'];
							$vtcp3= $linha3['vTcp'];
							$vinv3 = $linha3['vInv'];
							$vadi3= $linha3['vAdi'];
							$vaso3 = $linha3['vAso'];	
							$vhis3 = $linha3['vHis'];	
							$vpag3 = $linha3['vPag'];	
							$flag3 = $linha3['flag'];	
							}
							}	
							
							if(isset($_POST['pesq2'])){	

                            $idc = $_POST['ID'];    
							
							$query3="SELECT * FROM menu2toa where id = ".$idc;
							$result3 = mysqli_query($link,$query3);
							while($linha3 = mysqli_fetch_assoc($result3)){

							$id3 =  $linha3['id'];
							$tel3 = $linha3['tela2'];
							$vmov3 = $linha3['vMov'];
							$vtcp3= $linha3['vTcp'];
							$vinv3 = $linha3['vInv'];
							$vadi3= $linha3['vAdi'];
							$vaso3 = $linha3['vAso'];	
							$vhis3 = $linha3['vHis'];	
							$vpag3 = $linha3['vPag'];	
							$flag3 = $linha3['flag'];	
							}
							}	
							
							
							$query1="SELECT * FROM menu1toa ";
							$result1 = mysqli_query($link,$query1);
							while($linha1 = mysqli_fetch_assoc($result1)){

							$id =  $linha1['id'];
							$tela1 = $linha1['tela1'];
							$vmov = $linha1['vMov'];
							$vtcp = $linha1['vTcp'];
							$vinv = $linha1['vInv'];
							$vadi = $linha1['vAdi'];
							$vaso = $linha1['vAso'];	
							$vhis = $linha1['vHis'];	
							$vpag = $linha1['vPag'];	
							$flag = $linha1['flag'];	
							}
							
							
							$query2="SELECT * FROM menu2toa ";
							$result2 = mysqli_query($link,$query2);
							while($linha2 = mysqli_fetch_assoc($result2)){

							$id02 =  $linha2['id'];
							$tela202 = $linha2['tela2'];
							$vmov02 = $linha2['vMov'];
							$vtcp02 = $linha2['vTcp'];
							$vinv02 = $linha2['vInv'];
							$vadi02 = $linha2['vAdi'];
							$vaso02 = $linha2['vAso'];	
							$vhis02 = $linha2['vHis'];	
							$vpag02 = $linha2['vPag'];	
							$flag02 = $linha2['flag'];	
							}
						?>
						
						<label for="tela 1">Tela</label>
						<div class="form-row">
							<div class="form-group col-md-8 ">
								
								<input type="text" class="form-control" readonly  name="TELA1" id="tela 1" value="<?php echo $tel3;?>">
							</div>
							
						
							
						</div>	
						
					  <div class="form-row">
					  
						
						
						<div class="form-group col-md-1 ">
						  <label for="vmov">vMov</label>
					
						  <input type="text" class="form-control" value="<?php echo $vmov3;?>" name="VMOV" id="vmov">
						</div>
						<div class="form-group col-md-1">
						  <label for="vtcp">vTcp</label>
						  <input type="text" class="form-control" value="<?php echo $vtcp3;?>" name="VTCP" id="vtcp">
						</div>
						<div class="form-group col-md-1">
						  <label for="vinv">vInv</label>
						  <input class="form-control" id="vinv" value="<?php echo $vinv3;?>" name="VINV"></input>						
						</div>
						<div class="form-group col-md-1">
						  <label for="vadi">vAdi</label>
						  <input class="form-control" id="vadi" value="<?php echo $vadi3;?>" name="VADI"></input>						
						</div>
						<div class="form-group col-md-1">
						  <label for="vaso">vAso</label>
						  <input class="form-control" id="vaso" value="<?php echo $vaso3;?>" name="VASO"></input>						
						</div>
						<div class="form-group col-md-1">
						  <label for="vhis">vHis</label>
						  <input class="form-control" id="vhis" value="<?php echo $vhis3;?>" name="VHIS"></input>						
						</div>
						<div class="form-group col-md-1">
						  <label for="vpag">vPag</label>
						  <input class="form-control" id="vpag" value="<?php echo $vpag3;?>" name="VPAG"></input>						
						</div>
						<div class="form-group col-md-1">
						  <label for="flag">flag</label>
						  <input class="form-control align-self-center" id="flag" value="<?php echo $flag3;?>" name="FLAG"></input>						
						</div>
							<button type="submit" class="mx-2 h-30 btn btn-dark align-self-center" name="atualizamenu1">Atualizar MenuToa1</button>
							<button type="submit" class="mx-2 h-30 btn btn-dark align-self-center" name="atualizamenu2">Atuzalizar MenuToa2</button>
						</div>
						
							
					
							
							
						<?php
						
						/*if(isset($_POST['busca'])){	
						
						/*$query1="SELECT * FROM menu1toa order by id desc ";
							$result1 = mysqli_query($link,$query1);
							while($linha1 = mysqli_fetch_assoc($result1)){

							$id =  $linha1['id'];
							$tela1 = $linha1['tela1'];
							$vmov = $linha1['vMov'];
							$vtcp = $linha1['vTcp'];
							$vinv = $linha1['vInv'];
							$vadi = $linha1['vAdi'];
							$vaso = $linha1['vAso'];	
							$vhis = $linha1['vHis'];	
							$vpag = $linha1['vPag'];	
							$flag = $linha1['flag'];	
							}*/
							/*
							$id3=$_POST['ID'];
							$tel3=$_POST['TELA1'];
							$vmov3=$_POST['VMOV'];
							$vtcp3=$_POST['VTCP'];
							$vinv3=$_POST['VINV'];
							$vadi3=$_POST['VADI'];
							$vaso3=$_POST['VASO'];
							$vhis3=$_POST['VHIS'];
							$vpag3=$_POST['VPAG'];
							$flag3=$_POST['FLAG'];
							
							$res="SELECT * FROM menu2toa WHERE id=".$id3;
							mysqli_query($link, $res);
							
						}*/
						if(isset($_POST['atualizamenu1'])){
							$id1=$_POST['ID'];
							$tel1=$_POST['TELA1'];
							$vmov1=$_POST['VMOV'];
							$vtcp1=$_POST['VTCP'];
							$vinv1=$_POST['VINV'];
							$vadi1=$_POST['VADI'];
							$vaso1=$_POST['VASO'];
							$vhis1=$_POST['VHIS'];
							$vpag1=$_POST['VPAG'];
							$flag1=$_POST['FLAG'];
							
							//echo '<br>'.$empr.'<br>';
							
							
							$sql = "UPDATE menu1toa SET vMov = '".$vmov1."', vTcp = '".$vtcp1."',vInv='".$vinv1."',vAdi='".$vadi1."',vAso='".$vaso1."',vHis='".$vhis1."',vPag='".$vpag1."',flag='".$flag1."' WHERE id = ".$id1;
							
							echo '<br>'.$sql.'<br>';
							
							mysqli_query($link, $sql);
						}
						
						if(isset($_POST['atualizamenu2'])){
							$id2=$_POST['ID'];
							$tel2=$_POST['TELA1'];
							$vmov2=$_POST['VMOV'];
							$vtcp2=$_POST['VTCP'];
							$vinv2=$_POST['VINV'];
							$vadi2=$_POST['VADI'];
							$vaso2=$_POST['VASO'];
							$vhis2=$_POST['VHIS'];
							$vpag2=$_POST['VPAG'];
							$flag2=$_POST['FLAG'];
							
							//echo '<br>'.$empr.'<br>';
							
							
							$sql = "UPDATE menu2toa SET vMov = '".$vmov2."', vTcp = '".$vtcp2."',vInv='".$vinv2."',vAdi='".$vadi2."',vAso='".$vaso2."',vHis='".$vhis2."',vPag='".$vpag2."',flag='".$flag2."' WHERE id = ".$id2;
							
							echo '<br>'.$sql.'<br>';
							
							mysqli_query($link, $sql);
						}
						
						?>		
				</form>
				</div>
		
				<?php
						if(isset($_POST['exibemenu1'])){
							echo '<h1>MenuToa1</h1>';
							$query1="SELECT * FROM menu1toa order by id desc";
							$result1 = mysqli_query($link,$query1);
							while($linha1 = mysqli_fetch_assoc($result1)){
							$id =  $linha1['id'];
							$tela1 = $linha1['tela1'];
							$vmov = $linha1['vMov'];
							$vtcp = $linha1['vTcp'];
							$vinv = $linha1['vInv'];
							$vadi = $linha1['vAdi'];
							$vaso = $linha1['vAso'];	
							$vhis = $linha1['vHis'];	
							$vpag = $linha1['vPag'];	
							$flag = $linha1['flag'];
							
							
							echo '
							<div class="table-responsive">
								
								<table class="table table-striped " >
								  <thead>
									<tr>
									  <th>ID</th>
									  <th>Tela1</th>
									  <th>vMov</th>
									  <th>vTcp</th>
									  <th>vInv</th>
									  <th>vAdi</th>
									  <th>vAso</th>
									  <th>Status</th>
									  <th>vHis</th>
									  <th>vPag</th>
									  <th>flag</th>
									</tr>
								  </thead>
								   <tbody>
								   
								   <tr>
									  <th scope="row">'.$id.'</th>
									  <td>'.$tela1.'</td>
									  <td>'.$vmov.'</td>
									  <td>'.$vtcp.'</td>
									  <td>'.$vinv.'</td>
									  <td>'.$vadi.'</td>
									  <td>'.$vaso.'</td>
									  <td>'.$vhis.'</td>
									  <td>'.$vpag.'</td>
									  <td>'.$flag.'</td>
									</tr>
								  </tbody>
								</table>
							</div>
							';
							}
						}
						
						if(isset($_POST['exibemenu2'])){
							echo '<h1>MenuToa2</h1>';
							$query2="SELECT * FROM menu2toa order by id desc";
							$result2 = mysqli_query($link,$query2);
							while($linha2 = mysqli_fetch_assoc($result2)){
							$id02 =  $linha2['id'];
							$tela202 = $linha2['tela2'];
							$vmov02 = $linha2['vMov'];
							$vtcp02 = $linha2['vTcp'];
							$vinv02 = $linha2['vInv'];
							$vadi02 = $linha2['vAdi'];
							$vaso02 = $linha2['vAso'];	
							$vhis02 = $linha2['vHis'];	
							$vpag02 = $linha2['vPag'];	
							$flag02 = $linha2['flag'];
							
							
							echo '
							<div class="table-responsive>
								
								<table class="table table-striped " >
								  <thead>
									<tr>
									  <th scope="col">ID</th>
									  <th scope="col">Tela1</th>
									  <th scope="col">vMov</th>
									  <th scope="col">vTcp</th>
									  <th scope="col">vInv</th>
									  <th scope="col">vAdi</th>
									  <th scope="col">vAso</th>
									  <th scope="col">vHis</th>
									  <th scope="col">vPag</th>
									  <th scope="col">flag</th>
									</tr>
								  </thead>
								   <tbody>
								   
								   <tr>
									  <th scope="row">'.$id02.'</th>
									  <td  >'.$tela202.'</td>
									  <td>'.$vmov02.'</td>
									  <td>'.$vtcp02.'</td>
									  <td>'.$vinv02.'</td>
									  <td>'.$vadi02.'</td>
									  <td>'.$vaso02.'</td>
									  <td>'.$vhis02.'</td>
									  <td>'.$vpag02.'</td>
									  <td>'.$flag02.'</td>
									</tr>
								  </tbody>
								</table>
							</div>
							';
							}
						}
						?>
			
		  
		</body>
</html>