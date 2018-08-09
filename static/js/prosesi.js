window.onload = function(){ 
	drag();
	var pos1=0, pos2="30%",pos_ori=document.getElementById("drag").offsetLeft,pos_lim=740,mov=0;

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
		}
		else{
			pos1=0;
		}
	    pos2 = e.clientX;
		document.getElementById("drag").style.left = (document.getElementById("drag").offsetLeft - pos1) + "px";
		mov=(document.getElementById("drag").offsetLeft);
	  }

	  function closeDragElement() {
	  	console.log(mov);
	    document.onmouseup = null;
	    document.onmousemove = null;
	    $("#slider-text").fadeIn();
	    $("#drag").animate({
	    	left:pos_ori,
	    }, 'slow')

	    pos1=0; pos2="30%";
	  }
};