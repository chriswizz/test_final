var items = [{
	name:"Javascript",
	img: "img/js.jpg",
	price: 450,
	duration:"Part-time",
	date:"15/03/2020",
	description:"Dieser Kurs lehrt, was die grundlegendsten Programmierkonzepte in JavaScript sind und wie man sie benutzt. Sie lernen Datenarten, Funktionen, Schleifen, Kontrollfluss und Objekte kennen.",
	qtty: 0
},{
	name:"Python",
	img: "img/py.jpg",
	price:250,
	date:"",
	description:"Dieser Kurs lehrt, was die grundlegendsten Programmierkonzepte in JavaScript sind und wie man sie benutzt. Sie lernen Datenarten, Funktionen, Schleifen, Kontrollfluss und Objekte kennen.",
	duration:"Part-time",
	qtty:0
}];
// i+=1;
for(var i =0; i<items.length; i++ ){
	document.getElementById("items").innerHTML += `
		  <div class="card col-sm-12 store-item " style="width: 18rem;">
            <img class="card-img-top" src=${items[i].img} alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">${items[i].name}</h5>
                <p class="card-text">${items[i].duration}</p>
                <p class="card-text">&euro;${items[i].price}</p>
                <div class="row">
                    <div class="col-md-6">
                        <select class="md-form mdb-select colorful-select dropdown-primary">
                            <option value="" disabled selected>Choose your section</option>
                            <option value="1">14/01/2020-30/04/2020</option>
                            <option value="2">14/02/2020-30/05/2020</option>
                        </select>
                    </div>
                </div> 
                
                <button type="button" class="btn btn-info mt-2" data-toggle="modal" data-target="#modalQuickView${i}">
                    Details
                </button>
                <button type="button" class="btn btn-danger bbtn mt-2 store-item-icon">
                    Apply now
                </button> 
               
              <div class="modal fade " id="modalQuickView${i}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
                    <div class="modal-dialog modal-lg" role="document">
                       
                      <div class="modal-content">
                         <div class="modal-body">
                                <div class="row">
                                    <div class="col-5">
                                        <img src=${items[i].img} class="img-fluid" alt="">
                                    </div>
                                    <div class="col-7">
                                        <p><strong>${items[i].name} </strong></p>
                                        <h4 class="h4-responsive">
                                            <span>
                                                <strong>&euro;${items[i].price}</strong>
                                            </span>
                                            <span>
                                                <small>
                                                    <s>&euro;500</s>
                                                </small>
                                            </span>
                                        </h4>
                                        <p>${items[i].description}</p>
                                        <label>ALL tags here</label>
                                        <div class="mt-2">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                       
                     </div>
                </div>  
                
           </div>
           </div>
	`;
	//"<p>"+items[i].name+"</p>"
}

var cartt = [];

function addToCartt(obj){
	if(obj.qtty == 0){
		cartt.push(obj);
		obj.qtty++;
		showCartt();
        console.log(obj);
	}else {
		obj.qtty++;
		console.table(cartt);
		showCartt();
	}
}
var date = document.getElementsByClassName("duration");


var btns = document.getElementsByClassName("bbtn");
for(let i = 0; i< btns.length ; i+=1){
	btns[i].addEventListener("click",function(){
		addToCartt(items[i]);
		console.log(i);
	});
}

function showCartt(){
	document.getElementById("cartt").innerHTML ="";
	for(let i = 0; i< cartt.length ; i++){
		document.getElementById("cartt").innerHTML += `
			<div class="card mb-3 cart-item " style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src=${cartt[i].img} class="card-img rounded" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title" id="cart-item-title">${cartt[i].name}</h5>
                                <p class="card-text cart-item-price"  >${cartt[i].price}</p>
                                <span class="item-total">${cartt[i].qtty}</span>
                                <a href="#" id='cart-item-remove' class="cart-item-remove">
                                <i class="fas fa-trash"></i>
                                 </a>
                            </div>
                        </div>
                    </div>
                </div> 
                
                
                <div class="cart-total-container d-flex justify-content-around text-capitalize ">
                    <h5>total</h5>
                    <h5> &euro; <strong id="cart-total" class="font-weight-bold"></strong> </h5>
                </div>
                
                <div class="cart-buttons-container mt-3 d-flex justify-content-between">
                    <a href="#" id="clear-cart" class="btn btn-outline-secondary btn-black text-uppercase">clear cart</a>
                    <a href="#" class="btn btn-outline-secondary text-uppercase btn-pink">checkout</a>
                </div>
		`
	}
}

