window.onload = function(){ 
	drag();
	var pos1=0, pos2="30%",pos_ori=document.getElementById("drag").offsetLeft,pos_lim=740;

	function drag(){	
		document.getElementById("drag").onmousedown = dragDown;
	}

	function dragDown(e){
		e = e || window.event;
	    e.preventDefault();
	    pos1 = e.clientX;
	    document.onmouseup = closeDragElement;
	    document.onmousemove = elementDrag;
	}

	function elementDrag(e) {
		$("#slider-text").fadeOut();
	    e = e || window.event;
	    e.preventDefault();
	    if ((document.getElementById("drag").offsetLeft >= pos_ori)&&(document.getElementById("drag").offsetLeft <= pos_lim)){
	    	pos1 = pos2 - e.clientX;
	    	pos2 = e.clientX;
			document.getElementById("drag").style.left = (document.getElementById("drag").offsetLeft - pos1) + "px";
		}
		else{
			$("#drag").offset({left:
				document.getElementById("slider").offsetWidth + pos_ori - document.getElementById("drag").offsetWidth
			});
		}
	  }

	  function closeDragElement() {
	    document.onmouseup = null;
	    document.onmousemove = null;
	    $("#slider-text").fadeIn();
	    $("#drag").animate({
	    	left:pos_ori,
	    }, 'slow')
	    pos1=0; pos2="30%";
	    transition();
	  }

	  function transition(){
	  	$("#prosesi-data").fadeOut();
	  	$("#antrian-prosesi").fadeOut(function(){
	  		$("#prosesi-nama").text("ARDI");
	  		$("#prosesi-fak").text("FMIPA");
	  		$("#prosesi-sek").text("SMAN 1 YOGYAKARTA");
	  		$("#prosesi-no").text("888788788");
	  		$("#antrian-prosesi").text("876543210");
	  	});
  		$("#prosesi-data").fadeIn();
	  	$("#antrian-prosesi").fadeIn();
	  }
};