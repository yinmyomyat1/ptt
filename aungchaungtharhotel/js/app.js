// Start jQuery Area
$(document).ready(function(){

	// Start Room Section
	$(".roompopup").magnificPopup({
		type: 'image'
	});
	// End Room Section

});

// End jQuery Area


// Start JS Area

// Start Header

// start nav bar
function dropbtn(e){
	// document.getElementById("mydropdown").classList.toggle('show');

	e.target.nextElementSibling.classList.toggle('show');
}

function dropfilter(){
	var getsearch,filter,getdropdiv,getlinks,linkvalue;

	getsearch = document.getElementById('search');
	filter = getsearch.value.toUpperCase();
	// getdropdiv = document.getElementById("mydropdown");
	// getlinks = getdropdiv.querySelectorAll('a')

	getlinks = document.querySelectorAll(".dropdowns a");

	for(var x=0; x < getlinks.length ; x++){
		linkvalue = getlinks[x].textContent || getlinks[x].innerText;

		if(linkvalue.toUpperCase().indexOf(filter) > -1){
			getlinks[x].style.display = "block";
		}else{
			getlinks[x].style.display = "none";
		}
	}
}
// end navbar



// start auto background

function* genfun(){
	var index = 8;

	while(true){
		yield index++;

		if(index > 13){
			index = 8;
		}
	}
}

var getgen = genfun();

var getheader = document.querySelector('header');
getheader.style.backgroundImage = `url(./assets/img/banner/banner${getgen.next().value}.jpg)`;

function autoload(){
	getheader.style.backgroundImage = `url(./assets/img/banner/banner${getgen.next().value}.jpg)`;
}

setInterval(autoload,2500);

// end auto background

// End Header


// Start Testimonials Section

const getcompanyname = document.querySelector('.companyname');
const getrole = document.querySelector('.role');
const gettestimonial = document.querySelector('.testimonial');

const testimonialdatas = [
	{
		name: "Rich Star Restaurant",
		position: "Our Outlet",
		text: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text everLorem Ipsum is simply dummy text of the printing and typesetting industry."
	},
	{
		name: "48 Sky Bar Cafe",
		position: "Our Partner",
		text: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text everLorem Ipsum is simply dummy text of the printing and typesetting industry."
	},
	{
		name: "52 Beach Hotel",
		position: "Our Branch",
		text: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text everLorem Ipsum is simply dummy text of the printing and typesetting industry."
	},
	{
		name: "Cool Land Swimming Pool",
		position: "Our Client",
		text: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text everLorem Ipsum is simply dummy text of the printing and typesetting industry."
	},
	{
		name: "Chaung Thar SPA",
		position: "Our Business",
		text: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text everLorem Ipsum is simply dummy text of the printing and typesetting industry."
	}
];

let idx = 0;

function updatetesetimonial(){

	// getcompanyname.textContent = testimonialdatas[idx].name;
	// getrole.textContent = testimonialdatas[idx].position;
	// gettestimonial.textContent = testimonialdatas[idx].text;

	const {name,position,text} = testimonialdatas[idx];
	
	getcompanyname.textContent = name;
	getrole.textContent = position;
	gettestimonial.textContent = text;

	idx++;

	if(idx > testimonialdatas.length-1){
		idx = 0;
	}

}

updatetesetimonial();
setInterval(updatetesetimonial,10000);

// End Testimonials Section




// Start Properties Section

var getfilters = document.getElementsByClassName('filters');

filterby('all');

function filterby(keyword){


	if(keyword === 'all'){

	}

	for(var x=0; x<getfilters.length; x++){

		removeshowclass(getfilters[x],'show');

		if(getfilters[x].className.indexOf(keyword) > -1){
			addshowclass(getfilters[x],'show');
		}

	}

}

function addshowclass(ele,opt){
	var getfilters = ele.className.split(" ");
	var getopt = opt.split(" ");

	for(var y=0; y<getopt.length; y++){

		if(getfilters.indexOf(getopt[y]) === -1){
			ele.className += " "+getopt[y];
		}

	}
}

function removeshowclass(ele,opt){
	// console.log(ele);

	var getfilters = ele.className.split(' ');
	// console.log(getfilters);

	var getopt = opt.split(' ');
	// console.log(getopt);
	// console.log(getopt.length);

	for(var k=0; k<getfilters.length; k++){

		while(getfilters.indexOf(getopt[k]) > -1){
			getfilters.splice(getfilters.indexOf(getopt[k]),1)
		}

	}

	ele.className = getfilters.join(' ');
}

var getftcontrol = document.getElementById("filtercontrol");
var getlis = getftcontrol.getElementsByClassName('list-inline-item');

for(var i=0; i<getlis.length; i++){

	getlis[i].addEventListener('click',function(){
		var curractives = document.querySelector('.activeitems');
		curractives.className = curractives.className.replace(' activeitems','');
		this.className += ' activeitems';
	});

}

// End Properties Section




// End JS Area


// 1RM