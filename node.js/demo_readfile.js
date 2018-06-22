var http = require('http');
var fs = require('fs');
http.createServer(function(request, response) {
    fs.readFile('demofile1.html', function(err, data) {
        response.writeHead(200, {'Content-Type': 'text/html'});
        response.write(data);
        response.end();
    });
    fs.appendFile('mynewfile1.txt', 'Hello content!', function (err) {
        if (err) throw err;
        console.log('Saved!');
      })
}).listen(8888);