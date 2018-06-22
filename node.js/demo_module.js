var http = require("http");
var d = require("./myfirstm");

http.createServer(function(request, response) {
    response.writeHead(200, {"Content-Type": "text/plain"});
    response.write("The date and time are currently: " + d.myDateTime());
    response.end();
}).listen(8888);