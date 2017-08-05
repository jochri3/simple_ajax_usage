<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="refresh" content="120">
	</head>
	<body>
		<style>
			
		</style>
		 
		 <button onclick="art.send();">Afficher les articles</button>
		<script>
			var art=new XMLHttpRequest();
			art.open("GET","essaie_ajax_json.json");
			var articles;
			art.onreadystatechange=function()
			{
				if(art.readyState === 4 && art.status === 200)
					{
						articles=JSON.parse(art.responseText);
						/*var balise=new Array();*/
						var tb="<table border='1'><tr><th>Identifiant</th><th>Designation</th><th>Prix TTC</th><th>Quantite en stock</th></tr>"
						for(var i=0;i<articles.length;i++)
						{
							tb +="<tr><td>"+articles[i].id_article+"</td><td>"+articles[i].nom_article+"</td><td>"+articles[i].p_uht+" $</td><td>"+articles[i].qte_stk+"</td></tr>"
						}
						tb +="</table>";
						document.write(tb);
					}
			};
		</script>
	</body>
</html>