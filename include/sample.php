<html>
<head>
<title>Select DIV to show</title>
<script type="text/javascript">
function show(obj) {
no = obj.options[obj.selectedIndex].value;
count = obj.options.length;
for(i=1;i<count;i++)
document.getElementById('myDiv'+i).style.display = 'none';
if(no>0)
document.getElementById('myDiv'+no).style.display = 'block';
}
</script>
</head>
<body>
<form name="myForm">
<select onChange="show(this)">
<option value="0">Select</option>
<option value="1">One</option>
<option value="2">Two</option>
<option value="3">Three</option>
</select>
</form>
<div id="myDiv1" style="display:none"> <form>
<select>
<option value="0">Select</option>
<option value="1">One</option>
<option value="2">Two</option>
<option value="3">Three</option>
</select>
</form></div>
<div id="myDiv2" style="display:none"><form><input type="text" ><br>
<input type="text"/><br>
<input type="submit"/></form></div>
<div id="myDiv3" style="display:none"><form><input type="text" ><br>
<input type="text"/><br>
<input type="submit"/></form></div>
</body>
</html>

<option>Select</option>
									<option value="Support to 4P's Mayors Office - MOOE 4P's">4P's</option>
									<option value="General Fund - Other Services">Admin</option>
									<option value="Support to BUB Program">BUB</option>
									<option value="Supplemental Budget #3 CY 2014">CORE</option>
									<option value="Support to Day Care Workers">Day Care Center</option>
									<option value="1% RA 9344 - Support to Local Council for the Protection of Children Prevention Program Support to LCPC - 969">Drop-In Center</option>
									<option value="1% RA 9344 - Support to Local Council for the Protection of Children Prevention Program Support to LCPC - 969">Home for Girls</option>
									<option value="1% RA 9344 - Support to Local Council for the Protection of Children Prevention Program Support to LCPC - 969">LCPC</option>
									<option value="General Fund - Other Services">Resource Center</option>
									<option value="SEA-K-Wages">SEA-K</option>
									<option value="10 Womens Welfare Program - Other Services">Womens</option>