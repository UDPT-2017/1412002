var fs = require('fs');
var path = "../1412002/albums/quenquen";

var albums = [
{
	name: "",
	picture: [],
	view: 0,
	addName : function(name){
		this.name = name;
	},
	readName : function(){
		console.log(this.name);
	}
}];


var items = [];

fs.readdir(path, function(err, items) {
    for(var i=0;i<items.length;i++){
    albums.push({});
    albums[i].addName(items[i]);
    }
});

for(var i=0; i<3; i++){
	console.log(albums);
}