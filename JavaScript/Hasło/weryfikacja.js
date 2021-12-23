function jest_cyfra(x) {
	var d = x.length;
	for (i = 0; i < d; i++) { 
	if (x.charCodeAt(i) >= 48 && x.charCodeAt(i) <= 57)
	return true;
	}
	return false;

function weryfikuj() {
	var haslo = document.getElementById("haslo").value;
	var d = haslo.length;
	if (haslo == "") {
	document.getElementById("wynik").innerHTML = '<span style="color:red;"> HASLO JEST PUSTE</span>';
	} else if (d >= 7 && /\d/.test(haslo)) {
	document.getElementById("wynik").innerHTML = '<span style="color:green;"> HASLO JEST DOBRE</span>';
	} else if ((d < 7 && d >=4) && jest_cyfra(haslo)) {
	document.getElementById("wynik").innerHTML = '<span style="color:blue;"> HASLO JEST ŚREDNIE</span>';
	} else { document.getElementById("wynik").innerHTML = '<span style="color:yellow;"> HASLO JEST SŁABE</span>'; }
}
