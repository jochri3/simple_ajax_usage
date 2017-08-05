<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="refresh" content="120">
	</head>
	<body>
		<style>
			
		</style>
		 
		 <button onclick="usr.send();">Afficher les membres</button>
		<script>
			var usr=new XMLHttpRequest();
			usr.open("GET","bdd_json_data.php",true);
			var membres;
			usr.onreadystatechange=function()
			{
				if(usr.readyState === 4 && usr.status === 200)
					{
						membres=JSON.parse(usr.responseText);
						/*var balise=new Array();*/
						var tb="<table border='1'><tr><th>Nom</th><th>Prenom</th><th>Postnom</th><th>adresse</th><th>Telephone</th><th>Adresse mail</th></tr>"
						for(var i=0;i<membres.length;i++)
						{
							tb +="<tr><td>"+membres[i].nom+"</td><td>"+membres[i].prenom+"</td><td>"+membres[i].postnom+"</td><td>"+membres[i].adresse+"</td><td>"+membres[i].telephone+"</td><td>"+membres[i].mail+"</td></tr>";
						}
						tb +="</table>";
						document.write(tb);
					}
			};
		</script>
	</body>
</html>