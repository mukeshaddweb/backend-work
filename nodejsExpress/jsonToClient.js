const http = require('http');
const requestListener = (req, res) =>{
    console.log("request is Incoming");
    const responseData = {
        message: 'Hello, Everyone',
        articleData:{
            articleName: 'use json in node',
            category:"node js",
            status: 'published'
        },
        endingMessage:"This is json node js tutorial"
    }
    const jsonContent = JSON.stringify(responseData);
    res.end(jsonContent);
};
const server = http.createServer(requestListener);
server.listen(3000, 'localhost', function(){
    console.log('server is Listening at port 3000');
});