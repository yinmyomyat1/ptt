// Start  jQuery Area
$(document).ready(function(){
	
	// Start Header
	// Start Nav Bar
		$('.navbuttons').click(function(){
			$(this).toggleClass('crossxs');
		})
	// End Nav Bar
	// End Header

	// Start Login box
	$("#open-btn").click(function(){
	document.getElementById("form-popup").style.display = "block";	
	});

	$("#formclose-btn").click(function(){
	document.getElementById("form-popup").style.display = "none";	
	});
	// ENd login box

});
// End  jQuery Area


// Start Javascript Area

// Start Students Counter Section
var getcountervalues = document.querySelectorAll(".countervalues");
// console.log(getcountervalues);

getcountervalues.forEach(function(getcountervalue){

	getcountervalue.textContent=0;

	// console.log(getcountervalues);

	const updatecounter = function(){
		// console.log("i am working");

		const getcttarget = +getcountervalue.getAttribute("data-target");
		// console.log(getcttarget);
		// console.log(typeof getcttarget,getcttarget);

		const getctcontent = +getcountervalue.innerText;
		console.log(typeof getctcontent,getctcontent);

		const incnumber= getcttarget / 100;
		console.log(incnumber);

		if(getctcontent < getcttarget){
			getcountervalue.textContent = getctcontent+incnumber;

			setTimeout(updatecounter,1000);
		}


	}

	updatecounter();

});


// End Students Counter Section

// Start Rating Section
// start google code for chart

  google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Myanmar',     8],
          ['Thailand',      2],
          ['Singapore',  4],
          ['Indonesia', 2],
          ['Sirilinka',    8]
        ]);

        var options = {
          title: 'International Students',
          // is3D:true
          // pieHole: 0.4
          width:400,
          height:400
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }


// end google code for chart

// End Rating Section

// Start Subscribe Section
// ENd Subscribe Section

const getyear = document.getElementById("getyear");
const getfullyear = new Date().getUTCFullYear();
getyear.textContent = getfullyear;

// End Javascript Area
