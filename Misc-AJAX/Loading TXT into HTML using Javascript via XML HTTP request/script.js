var request;
if (window.XMLHttpRequest) {
	// create a new XML HTTP request
	request = new XMLHttpRequest();
} else {
	// for old versions of internet explorer
	request = new ActiveXObject("Microsoft.XMLHTTP");
}
	// request the data from a given file
request.open('GET', 'data.txt');
	// execute the function on onreadystatechange stage of the request
request.onreadystatechange = function() {
	// if ready state is at stage 4 (completed) and status of the request was ok 
	if ((request.readyState===4) && (request.status===200)) {
	// log into the the console the request
		console.log(request);
	// document write a new line with request's response text
		document.writeln(request.responseText);
	}
}
// send the XML http request
request.send();
