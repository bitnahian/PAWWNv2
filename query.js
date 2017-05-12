$(document).ready(function() {
	$("#search").click(function() {
		var query = $("#query").val();
		
		var queries = query.split(" ");
		var nqueries = queries.length;

		var string = "";
		for(var i = 0; i < nqueries; ++i)
		{
			if(queries[i].length < 4)
				continue;
			string += "specialisation LIKE '%" + queries[i] + "%'";
			if(i < nqueries - 1)
			{
				string += " OR ";
			}
		}

		console.log(string);

		if (query == '') {
			$("#txtHint").innerHTML =  "Please insert something relevant to search...";
		}
		else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","search.php?query="+string,true);
        xmlhttp.send();
    }
	});
});