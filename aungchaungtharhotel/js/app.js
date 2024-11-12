$(document).ready(function(){

  $('.roompopup').magnificPopup({
    type: 'image'
    // other options
  });
  
});



// Start Header
  // start navbar
    
    function dropbtn(e){
    	// console.log('hi');
    	// document.getElementById('mydropdown').classList.toggle('show');

      e.target.nextElementSibling.classList.toggle('show');
    }

    function dropfilter(){
    	var getsearch,filter,getdropdiv,getlinks,linkvalue;

    	getsearch = document.getElementById('search');
    	filter = getsearch.value.toUpperCase();
    	// getdropdiv = document.getElementById('mydropdown');

    	getlinks = document.querySelectorAll('.mydropdowns a');

    	// console.log(getlinks);
    	for(var x = 0; x < getlinks.length ; x++){
    		// console.log(getlinks[x])
    		linkvalue = getlinks[x].textContent;
    		// console.log(linkvalue);

    		if(linkvalue.toUpperCase().indexOf(filter) > -1){
    			getlinks[x].style.display = "";
    		}else{
    			getlinks[x].style.display = "none";
    		}
    	}



    }
  // end navbar

  // start auto background

  function* genfun(){
  	var idx = 8;

  	while(true){
  		yield idx++;

  		if(idx > 13){
  			idx = 8
  		}
  	}
  }

  var getgen = genfun();
  // console.log(getgen.next().value);
  var getheader = document.querySelector('header');
  getheader.style.backgroundImage = `url("./assets/img/banner/banner8.jpg")`;

  function autoload(){
  	getheader.style.backgroundImage = `url("./assets/img/banner/banner${getgen.next().value}.jpg")`;
  }

  setInterval(autoload,2000);
  // end auto background
// End Header

// Start Testimonial Section
const getcompanyname = document.querySelector('.companyname');
const getrole = document.querySelector('.role');
const gettestimonial = document.querySelector('.testimonial');

const testimonialdata = [
{
  name: "Rich Star Restaurant",
  position: "Our Ourlet",
  text: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."
},

{
  name: "48 Sky Bar Cafe",
  position: "Our Partner",
  text: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."
},

{
  name: "52 Beach Hotel",
  position: "Our Branch",
  text: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."
},

{
  name: "Cool Land Swinning Pool",
  position: "Our Client",
  text: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."
},

{
  name: "Chaung Thar Spa",
  position: "Our Businness",
  text: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."
}
];

// console.log(testimonialdata);

let idx = 0;

function updatetestimonial(){

  
  const {name,position,text} = testimonialdata[idx];
  // console.log(name);

  getcompanyname.textContent = name;
  getrole.textContent = position;
  gettestimonial.textContent = text;


  idx++;

  if(idx > testimonialdata.length - 1){
    idx = 0;
  }

}

updatetestimonial();

setInterval(updatetestimonial,10000);
// End Testimonial Section

// Start Property Section
filterby('all');
function filterby(keyword){

  var getfilters = document.getElementsByClassName('filters');
  // console.log(getfilters);


  if(keyword === 'all'){
    
    keyword = '';
     
  }



  for(var x = 0; x < getfilters.length; x++){
    // console.log(getfilters[x])
    // console.log(getfilters[x].className.indexOf(keyword) > -1);
    removeshowclass(getfilters[x],'show');

    if(getfilters[x].className.indexOf(keyword) > -1){
      addshowclass(getfilters[x],'show');
    }

  }

}

function addshowclass(ele,opt){
  // console.log(ele);
  var getfilters = ele.className.split(" ");
  // console.log(getfilters);

  var getopt = opt.split(" ");
  // console.log(getopt);

  for(var y = 0; y < getopt.length ; y++){
    // console.log(getopt[y]);

    if(getfilters.indexOf(getopt[y]) === -1){
      // ele.classList.add(getopt[y]);
      ele.className += " "+getopt[y];
    }
  }


}

function removeshowclass(ele,opt){
  // console.log(ele);
  // console.log(ele.classList.contains('show'));
  var getfilters = ele.className.split(' ');
  var getopt = opt.split(' ');

  for(var k = 0; k < getfilters.length; k++){
    while(getfilters.indexOf(getopt[k]) > -1){
      getfilters.splice(getfilters.indexOf(getopt[k]),1);
    }
  }

  ele.className = getfilters.join(' ');

}

var getftcontrol = document.getElementById('filtercontrol');
var getlis = getftcontrol.getElementsByClassName('list-inline-item');

for(var i=0; i < getlis.length; i++){
  getlis[i].addEventListener('click',function(){
    var curractives = document.querySelector('.activeitems');
  curractives.className = curractives.className.replace(' activeitems',' ');
  this.className += ' activeitems';
});
}
// End Property Section

// Start Contact Section
function tabbox(link,evn,btncolor){

  var gettabcontents = document.getElementsByClassName('tabcontents');
  var getbtntabs = document.getElementsByClassName('btn-tabs');

  // console.log(gettabcontents);
  for(var i=0; i < gettabcontents.length; i++){
    gettabcontents[i].style.display = 'none';

    getbtntabs[i].style.backgroundColor = '';

  }
  
  document.getElementById(link).style.display = 'block';
  evn.style.backgroundColor = btncolor;

}

document.getElementById('autoclick').click();
// End Contact Section

// Start Chat Box Section
const getmychat = document.getElementById('mychat');


function openchat(){
  getmychat.style.display = 'block';
}

function closechatbox(){
  getmychat.style.display = 'none';
}
// End Chat Box Section