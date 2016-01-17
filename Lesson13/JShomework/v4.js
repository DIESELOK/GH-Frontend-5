var goods = new['Tomato','Milk'];

function purchase (name, quantity, price){

        var product = goods.indexOf(name) > -1;

        if(product) {
            var coast = quantity*price;
            if (coast > 100){
                return 'You need more Money!'
            } else {
                return 'You buy' + count + ' ' + name'!'
            }

        } else {
            throw 'I do not know this kind of goods! Sorry!'
        }
}


var buyNoProduct = new purchase('Potato',2,20);
console.log(buyNoProduct);

var buyNoCash = new purchase('Tomato',5,15);
console.log(buyNoCash);

var buyGood = new purchase('Milk',2,50);
console.log(buyGood);
