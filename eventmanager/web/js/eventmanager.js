//alert('javascript working');

$('document').ready(function(){
 //loadAdds();
 $('footer').html(footerAdd); 
 
 $.getJSON("/eventjson",function(data){showEvents(data);});
});

function loadAdds(){
 //$('footer').text('add loaded');
 var url="127.0.0.1:8000/js/adds.json";
 $.getScript( url, function() {alert('add loaded');
                               $('footer').html('<p>add loaded</p>');
                               console.log(footerAdd);                      
                               //$('footer').text('error: add could not be loaded');  
                               });
}

function showEvents(data){
 var eventContent=[];
 data.map(function(x){var content=`<div class="event">
                                   <a href="/viewEvent?name=${x.name}&image=./img/${x.image}&startdate=${x.startdate.date}&enddate=${x.enddate.date}&description=${x.description}&capacity=${x.capacity}&email=${x.email}&phonenumber=${x.phonenumber}&url=${x.url}&type=${x.type}&address=${x.address}&id=${x.id}">  
                                   <p><img src="./img/${x.image}"></p>
                                   <h3>${x.name}</h3>
                                   <p>${x.startdate.date}</p>
                                   <p>${x.address}</p>
                                   </a>  
                                   </div>
                                  `;
                      eventContent.push(content);
                     });
 //alert('voila');
 $('main').html(eventContent.join(''));
}