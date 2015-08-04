var request;
if (window.XMLHttpRequest) {
	request = new XMLHttpRequest();
} else {
	request = new ActiveXObject("Microsoft.XMLHTTP");
}
request.open('GET', 'data.xml');
request.onreadystatechange = function() {
	if ((request.readyState===4) && (request.status===200)) {
		// log into the console the text of the text node with is the first child of the second name tag element
		console.log(request.responseXML.getElementsByTagName('name')[1].firstChild.nodeValue);
		
		var items = request.responseXML.getElementsByTagName('name');
		var itemsbio = request.responseXML.getElementsByTagName('bio');
		var output = '<ul>';
		// loop through all the name tags in the xml doc and creade an unordered list with li items
		// each outputting the text node value (the text) of each name tag from the xml document
		for (var i = 0; i < items.length; i++) {
			output += '<li>' + items[i].firstChild.nodeValue + '<p>' + itemsbio[i].firstChild.nodeValue + '</p></li>';
		}
		output += '</ul>';
		// display the output changing the HTML content (innerHTML) of element with id of update.
		document.getElementById('update').innerHTML = output;
	}
}
// send the request
request.send();
