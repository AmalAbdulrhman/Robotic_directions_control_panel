$('.tab a').on('click', function (e) {
  
    e.preventDefault();
      
      $(this).parent().addClass('active');
      $(this).parent().siblings().removeClass('active');
      
      target = $(this).attr('href');
    
      $('.tab-content > div').not(target).hide();
      
      $(target).fadeIn(600);
      
    });

var slider1 = document.getElementById("slider1"); 
var range1 = document.getElementById("value1");

var slider2 = document.getElementById("slider2"); 
var range2 = document.getElementById("value2");

var slider3 = document.getElementById("slider3"); 
var range3 = document.getElementById("value3");

var slider4 = document.getElementById("slider4"); 
var range4 = document.getElementById("value4");

var slider5 = document.getElementById("slider5"); 
var range5 = document.getElementById("value5");

var slider6 = document.getElementById("slider6"); 
var range6 = document.getElementById("value6");

range1.innerHTML = slider1.value;
range2.innerHTML = slider2.value;
range3.innerHTML = slider3.value;
range4.innerHTML = slider4.value;
range5.innerHTML = slider5.value;
range6.innerHTML = slider6.value;

slider1.addEventListener("input", function() {
    range1.innerHTML = slider1.value;
},false);

slider2.addEventListener("input", function() {
    range2.innerHTML = slider2.value;
},false);

slider3.addEventListener("input", function() {
    range3.innerHTML = slider3.value;
},false);

slider4.addEventListener("input", function() {
    range4.innerHTML = slider4.value;
}, false);
slider5.addEventListener("input", function() {
    range5.innerHTML = slider5.value;
},false);

slider6.addEventListener("input", function() {
    range6.innerHTML = slider6.value;
} , false);

