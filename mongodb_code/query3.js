
var showCursorItems = function(cursor){
	while (cursor.hasNext()) {
   		printjson(cursor.next());
	}
}

var db = db.getSisterDB("iii-2018-05");

db.food.drop();

db.food.insert({_id:1,fruit:['apple','cherry','banana'], arraysize:3});
db.food.insert({_id:2,fruit:['apple','watermelon','orange'],arraysize:3});
db.food.insert({_id:3,fruit:['cherry','banana','apple'],arraysize:3});
db.food.insert({_id:4,fruit:['orange','apple'],arraysize:2});
//db.food.insert({_id:5,fruit:'banana'});



// cursor = db.food.find({fruit:'banana'});
// showCursorItems(cursor);


// print("fruit.2':'orange' -------------------------------------------")
// cursor = db.food.find({'fruit.2':'orange'});
// showCursorItems(cursor);


//print("$all:['apple','cherry'] -------------------------------------------")
//cursor = db.food.find({fruit:['apple','cherry']})
// cursor = db.food.find({
// 	                  	fruit:{
// 	                    	$all:['apple','cherry']
// 	                   	}

//                       }
// );
//print(cursor);
//showCursorItems(cursor);

// print("{fruit:{$size:3}} -------------------------------------------")
//cursor = db.food.find({fruit:{$size:3}});
// showCursorItems(cursor);

//print("{fruit:{$slice:1}} -------------------------------------------")
// cursor = db.food.find({},{fruit:{$slice:2}});
// showCursorItems(cursor);

// print("{$slice:-1}} -------------------------------------------")
// cursor = db.food.find({},{fruit:{$slice:-1}});
// showCursorItems(cursor);


// print("{$slice:[1,2]},_id:0} -------------------------------------------")
// cursor = db.food.find({},{fruit:{$slice:[2,1]},_id:0});
// showCursorItems(cursor);


//[3,4,5,6,7,8].forEach((x) => print(x*2));
//var fun = function(x){print(x*2);}

//[3,4,5,6,7,8].forEach(function(x){print(x*2);});



// print("foreach-------------------------------------------")
cursor = db.food.find({fruit:'banana'});
//print(cursor);
//cursor.forEach(function(data){ print('first furit:['+data.fruit+"] (_id:"+data._id+")");})

cursor.forEach((data) =>  print(`
	first 

	
	furit:[ ${data.fruit} ] 
	(_id:
	${data._id})`))


