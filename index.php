    <!DOCTYPE html>
    <html>
    <head>
    	<title>Font Awesome Icons</title>
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    	<style type="text/css">
    		/*this is css for show icon*/
    		div{
    			width: 100px;
    			height: 100px;
    		}
    		/*icon check*/
    		.hadir{
    			color:#fff;
    			position:relative;
    			padding:10px 40px
    			width:10px;
    			height: 10px;	
    		}
    
    		.hadir:before{
    
    			content: "\f00c";
    
    			font-family: FontAwesome;
    
    		    color: green;
    
    		    font-size: 48px;
    
    		    position: absolute;
    
    		    top: 5px;
    
    		    left: 10px;
    
    		}
    		/*icon close*/
    		.alfa{
    			color:#fff;
    			position:relative;
    			padding:10px 40px
    			width:10px;
    			height: 10px;
    		}
    
    		.alfa:before{
    
    		    content: "\f00d";
    
    		    font-family: FontAwesome;
    
    		    color: red;
    
    		    font-size: 48px;
    
    		    position: absolute;
    
    		    top: 5px;
    
    		    left: 10px;
    
    		}
    		/*icon info*/
    		.izin{
    			color:#fff;
    			position:relative;
    			padding:10px 40px
    			width:10px;
    			height: 10px;
    		}
    
    		.izin:before{
    
    		    content: "\f129";
    
    		    font-family: FontAwesome;
    
    		    color: red;
    
    		    font-size: 48px;
    
    		    position: absolute;
    
    		    top: 5px;
    
    		    left: 10px;
    
    		}
    		/*icon medikit*/
    		.sakit{
    			color:#fff;
    			position:relative;
    			padding:10px 40px
    			width:10px;
    			height: 10px;
    		}
    
    		.sakit:before{
    
    		    content: "\f0fa";
    
    		    font-family: FontAwesome;
    
    		    color: red;
    
    		    font-size: 48px;
    
    		    position: absolute;
    
    		    top: 5px;
    
    		    left: 10px;
    
    		}
    	</style>
    </head>
    <body>
    
    	<form action="utama.php" method="post">
    
    		<?php 
    			$a=10;
    			while ($x<$a) {
    				$x++;
    			
    			 ?>
    			 <!-- this is object icon to function transform -->
    			<div class="hadir" onclick="absen(this)">
    
    				<br><br><br><br>
    				<!-- this is value change -->
    				<input type="text" id="absen" name="absen[]" value="1">
    
    			</div>
    
    			<br><br><br><br><br>
    
    		<?php } ?>
    
    		<br>	
    		<br>	
    		<br>	
    		<br>
    
    		<input type="submit" value="Absen">
    
    	</form>
    <!-- <center>
    	<i class="fa fa-check" style="font-size:48px;color:green"></i>
    	<br>
    	<i class="fa fa-close" style="font-size:48px;color:red"></i>
    	<br>
    	<i class="fa fa-thermometer-three-quarters" style="font-size:48px;color:red"></i>
    	<br>
    	<i class="fa fa-medkit" style="font-size:48px;color:red"></i>
    	<br>
    	<i class="fa fa-info" style="font-size:48px;color:red"></i>
    	<br>
    
    </center> -->
    
    
    
    
    
    <!-- javascript for transform icon and change value input type text -->
    			<script type="text/javascript">
    				function absen(yo){
    			    if (yo.className == "hadir"){
    			        yo.className = "alfa";
    			      // problem here, only firm value change
    			        document.getElementById('absen').value="0";
    			    }
    			    else if(yo.className=="alfa"){
    			    	yo.className="izin";
    			    // problem here, only firm value change
    			    	document.getElementById('absen').value="2";
    			    }
    			    else if(yo.className=="izin"){
    			    	yo.className="sakit";
    			    // problem here, only firm value change
    			    	document.getElementById('absen').value="3";
    			    }else{
    			    	yo.className="hadir";
    			    // problem here, only firm value change
    			    	document.getElementById('absen').value="1";
    			    }
    			}
    
    			</script>
    
    
    
    
    </body>
    </html> 
