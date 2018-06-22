db = connect("localhost:27017/iii-2018-05");

var showCursorItems = function(cursor){
	while (cursor.hasNext()) {
   		printjson(cursor.next());
	}
}

db.food2.drop()

db.food2.insert({apple:3,banana:13,peach:120});
db.food2.insert({apple:3,spinach:5,watermelon:8,xx:3})

print("jfdkjfkdjfkdjfkdjfkd")
cursor = db.food2.find({$where:function(){
	for(var current in this){
		for(var other in this){
			print("------->current:"+this[current]+" other:"+this[other]);
			if(current != other && this[current] == this[other]){
				return true;
			}
		}
	}
	return false;
}});
showCursorItems(cursor);

// print("--------------------------------------")
// cursor = db.food2.find( {watermelon : {$exists:true}, $where:'this.watermelon >= 3 && this.apple > 3'} )
// cursor = db.food2.find( 'this.apple > 4' )
// showCursorItems(cursor);

// cursor = db.food2.find({$where:function(){
// 	var count = 0;
// 	for(var current in this){
// 		count++;
// 		if(count >= 5){
// 			return true;
// 		}		
// 	}
// 	return false;
// }});
// showCursorItems(cursor);


// cursor = db.food2.find({$where:function(){
// 	var sum = 0;
// 	for(var current in this){
// 		print("current:"+current)
// 		if(current != '_id'){
// 			sum = sum + this[current];
// 			if(sum > 40){
// 				return true;
// 			}
// 		}	
// 	}
// 	return false;
// }});
// showCursorItems(cursor);