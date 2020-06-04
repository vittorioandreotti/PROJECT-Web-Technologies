$(function() {
    var index=-1;
    var images=$('#slideshow-wrapper img');
    setInterval(function() {
		if(index < images.length-1) {
                    index++;
		} else {
                    index=0;
                }
                images.eq(index).show();
                images.eq(index).fadeOut(6000);
	}, 6000);
});