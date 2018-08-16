/** xxx_legacy API : SAMPLE로 참고 하기 바랍니다.**/
var express = require('express');
var api_xxx_legacy = express();
var xxx_legacy_port = 7776;
api_xxx_legacy.use(express.static('api_xxx_legacy'));
api_xxx_legacy.get('/', function(req, res){
    api_xxx_legacy.render('index.html');
});
// api_xxx_legacy.listen(xxx_legacy_port);
var server = api_xxx_legacy.listen(xxx_legacy_port, function(){
    console.log("Express server has started on port " + xxx_legacy_port)
});

/**  IF You want to multi port **/
/**  EXAMPLE API **/
// var express_ex = require('express');
// var api_ex = express();
// var ex_port = 7778;
// api_ex.use(express_ex.static('api_xxx_legacy'));
// api_ex.get('/', function(req, res){
//     api_ex.render('index.html');
// });

// var server = api_ex.listen(ex_port, function(){
//     console.log("Express server has started on port " + ex_port)
// });