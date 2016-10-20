$(document).ready(function (){

	$('body').on('click', '.dynamic-form-submit', function () {
		var form = $( "#" + $(this).attr('data-form'));
		validate(form, submit);
	});



	$('body').on('click', '.fa-play-circle', function () {
		$('.fa-play-circle').toggleClass('active');
		if($('.fa-play-circle').hasClass('active')){
			document.getElementById('audioElement').play();
		} else {
			document.getElementById('audioElement').pause();
		}
		
	});

});

function submit(form) {

	$.ajax({
		type: 'POST',
        url: ajaxurl,
        data: getFormData(form),
        success: function(response) {
        	console.log(response);
        },
    });

}

function getFormData(form) {

	return form.serialize();

}

function validate(form, callback){

	/* TODO : Validate Form Data */

	callback(form);

}

$(document).ready(function () {

  var audioCtx = new (window.AudioContext || window.webkitAudioContext)();
  var audioElement = document.getElementById('audioElement');
  var audioSrc = audioCtx.createMediaElementSource(audioElement);
  var analyser = audioCtx.createAnalyser();

  // Bind our analyser to the media element source.
  audioSrc.connect(analyser);
  audioSrc.connect(audioCtx.destination);

  //var frequencyData = new Uint8Array(analyser.frequencyBinCount);
  var frequencyData = new Uint8Array(200);

  var svgHeight = '300';
  var svgWidth = '1440';
  var barPadding = '1';

  function createSvg(parent, height, width) {
    return d3.select(parent).append('svg').attr('height', height).attr('width', width);
  }

  var svg = createSvg('body', svgHeight, svgWidth);

  // Create our initial D3 chart.
  svg.selectAll('rect')
     .data(frequencyData)
     .enter()
     .append('rect')
     .attr('x', function (d, i) {
        return i * (svgWidth / frequencyData.length);
     })
     .attr('width', svgWidth / frequencyData.length - barPadding);

  // Continuously loop and update chart with frequency data.
  function renderChart() {
     requestAnimationFrame(renderChart);

     // Copy frequency data to frequencyData array.
     analyser.getByteFrequencyData(frequencyData);

     // Update d3 chart with new data.
     svg.selectAll('rect')
        .data(frequencyData)
        .attr('y', function(d) {
           return svgHeight - d;
        })
        .attr('height', function(d) {
           return d;
        })
        .attr('fill', function(d) {
           return 'rgba(41, 184, 122, ' + d/255 + ')';
        });
  }

  // Run the loop
  renderChart();

});

