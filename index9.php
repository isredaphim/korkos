<html lang="en"><head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles10.css">
	<title>ESTANDER HTML5</title>
</head>
<body>
	<canvas id="canvasOne" width="200" height="200" style="margin:5px;"></canvas>
	<canvas id="canvasTwo" width="200" height="200" style="margin:5px;"></canvas>
	<canvas id="canvasThree" width="200" height="200" style="margin:5px;"></canvas>
	<canvas id="canvasFour" width="200" height="200" style="margin:5px;"></canvas>
	<canvas id="canvasFive" width="200" height="200" style="margin:5px;"></canvas>
	<canvas id="canvasSix" width="200" height="200" style="margin:5px;"></canvas>
	<canvas id="canvasSeven" width="200" height="200" style="margin:5px;"></canvas>
	<canvas id="canvasEight" width="200" height="200" style="margin:5px;"></canvas>


<script type="text/javascript">
	var canvas = document.getElementById('canvasOne');
	var a= canvas.getContext("2d");
	var b= canvas.getContext("2d");
	var c= canvas.getContext("2d");
	var d= canvas.getContext("2d");
	var e= canvas.getContext("2d");

	a.beginPath();
	a.fillStyle ="black";
	a.strokeStyle="white";
	a.lineWidth=4;
	a.arc(100,100,50,0,Math.PI*2,true);
	a.fill();
	a.stroke();

	

	c.beginPath();
	c.fillStyle ="yellow";
	c.strokeStyle="white";
	c.lineWidth=4;
	b.arc(80,70,40,0,Math.PI*2,true);
	c.fill();
	c.stroke();

	
	var canv = document.getElementById('canvasTwo');
	var context = canv.getContext("2d");
	var con = canv.getContext("2d");


	con.beginPath();
	con.fillStyle ="green";
	con.strokeStyle="black";
	con.lineWidth=4;
	con.arc(100,30,20,0,Math.PI*2,true);
	con.fill();
	con.stroke();
	
	con.beginPath();
	con.fillStyle ="orange";
	con.strokeStyle="black";
	con.lineWidth=4;
	con.arc(100,85,20,0,Math.PI*2,true);
	con.fill();
	con.stroke();
	
	con.beginPath();
	con.fillStyle ="red";
	con.strokeStyle="black";
	con.lineWidth=4;
	con.arc(100,140,20,0,Math.PI*2,true);
	con.fill();
	con.stroke();


	var can = document.getElementById('canvasThree');
	var ca = can.getContext("2d");


	ca.beginPath();
	ca.fillStyle='blue';
	ca.rect(5,5,150,160);
	ca.strokeStyle='black';
	ca.lineWidth=10;
	ca.stroke();
	ca.fill();
	ca.closePath();
	
	ca.beginPath();
	ca.fillStyle='white';
	ca.rect(30,15,100,30);
	ca.strokeStyle='black';
	ca.lineWidth=10;
	ca.stroke();
	ca.fill();
	ca.closePath();
	
	ca.beginPath()
	ca.arc(45,30,10,0,Math.PI*2,false);
	ca.fillStyle = 'black';
	ca.fill();
	ca.lineWidth = 1;
	ca.strokeStyle = 'black';
	ca.stroke();	
	ca.closePath();
	
	ca.beginPath();
	ca.fillStyle='white';
	ca.rect(30,105,100,50);
	ca.strokeStyle='black';
	ca.lineWidth=10;
	ca.stroke();
	ca.fill();
	ca.closePath();
	
	ca.beginPath();
	ca.fillStyle='black';
	ca.rect(30,115,100,5);
	ca.strokeStyle='black';
	ca.lineWidth=5;
	ca.stroke();
	ca.fill();
	ca.closePath();
	
	ca.beginPath();
	ca.fillStyle='black';
	ca.rect(30,135,100,5);
	ca.strokeStyle='black';
	ca.lineWidth=5;
	ca.stroke();
	ca.fill();
	ca.closePath();
	
	
	
	

	var kenz = document.getElementById('canvasFour');
	var ka = kenz.getContext("2d");
	
	
	
	ka.beginPath();
	ka.fillStyle='black';
	ka.rect(30,95,100,70);
	ka.strokeStyle='black';
	ka.lineWidth=10;
	ka.stroke();
	ka.fill();
	ka.closePath();
	
	ka.beginPath();
	ka.fillStyle='white';
	ka.rect(30,115,100,25);
	ka.strokeStyle='black';
	ka.lineWidth=10;
	ka.stroke();
	ka.fill();
	ka.closePath();
	
	ka.beginPath();
	ka.fillStyle='black';
	ka.rect(135,100,20,60);
	ka.strokeStyle='white';
	ka.lineWidth=10;
	ka.stroke();
	ka.fill();
	ka.closePath();
	
	
	ka.beginPath()
	ka.arc(40,55,25,0,Math.PI*2,false);
	ka.fillStyle = 'black';
	ka.fill();
	ka.lineWidth = 1;
	ka.strokeStyle = 'black';
	ka.stroke();	
	ka.closePath();
	
	ka.beginPath()
	ka.arc(120,55,25,0,Math.PI*2,false);
	ka.fillStyle = 'black';
	ka.fill();
	ka.lineWidth = 1;
	ka.strokeStyle = 'black';
	ka.stroke();	
	ka.closePath();
	

  	var nge = document.getElementById("canvasFive");
  	var ngek = nge.getContext("2d");

  	ngek.beginPath();
  	ngek.arc(100,100,75,0,Math.PI*2,false);
	ngek.fillStyle='yellow';
	ngek.fill();
	ngek.strokeStyle='white';
	ngek.lineWidth=5;
	ngek.stroke();
  	ngek.closePath();

  	ngek.beginPath();
	ngek.arc(100,100,50,0,Math.PI,false);
	ngek.fillStyle="black";
	ngek.strokeStyle="black";
	ngek.lineWidth=2;
	ngek.fill();
	ngek.stroke();
	ngek.closePath();

	ngek.beginPath();
	ngek.arc(75,80,15,0,Math.PI,true);
	ngek.fillStyle="black";
	ngek.lineWidth=2;
	ngek.strokeStyle="black";
	ngek.fill();
	ngek.stroke();
	ngek.closePath();

	ngek.beginPath();
	ngek.arc(125,80,15,0,Math.PI,true);
	ngek.fillStyle="black";
	ngek.lineWidth=2;
	ngek.strokeStyle="black";
	ngek.fill();
	ngek.stroke();
	ngek.closePath();

	

	ngek.beginPath();
	ngek.arc(94,112,5,0,Math.PI*2,false	);
	ngek.fillStyle="black";
	ngek.strokeStyle="black";
	ngek.fill();
	ngek.stroke();
	ngek.closePath();

	var has = document.getElementById('canvasSix');
	var haw = has.getContext("2d");
	
	haw.beginPath();
	haw.fillStyle='blue';
	haw.rect(5,50,150,120);
	haw.strokeStyle='black';
	haw.lineWidth=10;
	haw.stroke();
	haw.fill();
	haw.closePath();

	haw.beginPath();
	haw.fillStyle='red';
	haw.rect(30,75,100,70);
	haw.strokeStyle='black';
	haw.lineWidth=10;
	haw.stroke();
	haw.fill();
	haw.closePath();
	
	haw.beginPath();
	haw.fillStyle='yellow';
	haw.rect(55,100,50,20);
	haw.strokeStyle='black';
	haw.lineWidth=10;
	haw.stroke();
	haw.fill();
	haw.closePath();
	

	var goldy = document.getElementById('canvasSeven');
	var gold = goldy.getContext('2d');
	
	
	gold.beginPath();
	gold.fillStyle='white';
	gold.rect(20,10,140,185);
	gold.strokeStyle='black';
	gold.lineWidth=10;
	gold.stroke();
	gold.fill();
	gold.closePath();
	
	gold.beginPath()
	gold.arc(50,55,25,0,Math.PI*2,false);
	gold.fillStyle = 'black';
	gold.fill();
	gold.lineWidth = 1;
	gold.strokeStyle = 'black';
	gold.stroke();	
	gold.closePath();
	
	gold.beginPath()
	gold.arc(125,55,25,0,Math.PI*2,false);
	gold.fillStyle = 'black';
	gold.fill();
	gold.lineWidth = 1;
	gold.strokeStyle = 'black';
	gold.stroke();	
	gold.closePath();
	
	gold.beginPath()
	gold.arc(125,145,25,0,Math.PI*2,false);
	gold.fillStyle = 'black';
	gold.fill();
	gold.lineWidth = 1;
	gold.strokeStyle = 'black';
	gold.stroke();	
	gold.closePath();


	gold.beginPath()
	gold.arc(50,145,25,0,Math.PI*2,false);
	gold.fillStyle = 'black';
	gold.fill();
	gold.lineWidth = 1;
	gold.strokeStyle = 'black';
	gold.stroke();	
	gold.closePath();



	var xx = document.getElementById("canvasEight");
	var xxx = xx.getContext("2d");

	xxx.beginPath();
	xxx.fillStyle='white';
	xxx.rect(113,10,15,200);
	xxx.strokeStyle='black';
	xxx.lineWidth=2;
	xxx.stroke();
	xxx.fill();
	xxx.closePath();	


		xxx.beginPath()
		xxx.arc(120,55,50,0,Math.PI*2,false);
		xxx.fillStyle = 'yellow';
		xxx.fill();
		xxx.lineWidth = 1;
		xxx.strokeStyle = 'white';
		xxx.stroke();	
		xxx.closePath();
	
	xxx.beginPath()
	xxx.arc(120.5,135,8,0,Math.PI*2,false);
	xxx.fillStyle = 'black';
	xxx.fill();
	xxx.lineWidth = 1;
	xxx.strokeStyle = 'black';
	xxx.stroke();	
	xxx.closePath();

	xxx.beginPath();
	xxx.fillStyle="black";
	xxx.fillRect(113,195,17,17,);
	xxx.closePath();
	
	xxx.beginPath();
	xxx.fillStyle="black";
	xxx.fillRect(112,100,17,17,);
	xxx.closePath();
	
	 

</script>	


</body></html>