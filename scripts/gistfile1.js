$(document).ready(function() {
	

	// Creates a custom format in JS to be used further down
	Date.prototype.GetCustomFormat = function() {
		return this.getFullYear()+'/'+getInTwoDigitFormat(this.getMonth()+1)+'/'+getInTwoDigitFormat(this.getDate());
	};
	function getInTwoDigitFormat(val) {
		return val < 10 ? '0' + val : val;
	}
	
	$(function() {
	    $.getJSON('/whats-on/json/', function(data) {
	    	$('.calendar-container').kalendar({
	            events: data,
	            onDayClick: function(e) {
	                window.location.href = 'http://www.example.com/whats-on/day/' + e.data.date.GetCustomFormat();
	            },
	            tracking: false //,
	            //startMonth: 0
	        });
	    }).done(function(data) {
			console.log('success');
		}).fail(function(data) {
			console.log('error');
		}).always(function(data) {
			console.log('complete');
		});     
	});
	
});