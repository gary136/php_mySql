var http = require('http');

http.createServer(function(request, response) {
    response.write('H');
    response.end();
}).listen(8888);