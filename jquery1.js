	var x = new Date();
    var hr = x.getHours();

    function marhide() {
        $("#marquee").css("display", "none");        
    }
    var hr = "30";
    if(hr <= 29){
    }else{
        marhide();
    }

    $(function fade() {
	$("#myModal").modal();
    });

    if(1){
		$('#item2').attr("disabled", true);
		$('#item1').attr("disabled", true);
		$('#r2').attr("disabled", true);
		$('#r1').attr("disabled", true);
		//$("#tom2").css("display", "block");
		//$("#tom1").css("display", "block");
    }
    function formSubmit(){
        var tslot = $("#time").val();
        if((tslot == "None" && hr >= 14 && hr <= 18)){
            return false;
        } else if(tslot != "None" && hr >= 14 && hr <= 18){
            return true;
        }
        if((parseInt(document.getElementById("totprice").innerHTML) > 0 && hr <= 22 && hr >= 19)){
            return true;        
        }else{
            return false;
        }
    }

    function updateTotalPrice(){
        var p1 = parseInt($("#p1").text());
        var p2 = parseInt($("#p2").text());
        var i1 = parseInt($("#item11").text());
        var i2 = parseInt($("#item22").text());
        var x = new Date();
        var hr = x.getHours();
        var tot = p1*i1+p2*i2;
        $("#totprice").text(tot);
        if(tot > 0){
            if(hr >= 14 && hr <= 18){
                $("#timeslot1").css("display", "block");
            }else{
                $("#timeslot1").css("display", "none");
            }
            $('#chk').attr("disabled", false);
        }else{
            $("#timeslot1").css("display", "none");
            $('#chk').attr("disabled", true);
        }
    }

    function item1(){
        var x = parseInt($("#item11").text());
        var qty1 = parseInt($("#qty1").val());
        if(x+1 > qty1){
            $("#sold1").css("display", "block");
            return;
        }
        $("#item11").text((x)+1);
        $("#i1").val(x+1);

        var y = parseInt($("#item").text());    
        $("#item").text(y+1);

        updateTotalPrice();
    }

    function item2(){
        var x = parseInt($("#item22").text());
        var qty2 = parseInt($("#qty2").val());
        if(x+1 > qty2){
            $("#sold2").css("display", "block");
            return;
        }
        $("#item22").text((x)+1);
        $("#i2").val(x+1);

        var y = parseInt($("#item").text());    
        $("#item").text(y+1);    
        updateTotalPrice();
    }

	function item3(){
        var x = parseInt($("#item33").text());
        var qty1 = parseInt($("#qty3").val());
        if(x+1 > qty1){
            $("#sold3").css("display", "block");
            return;
        }
        $("#item33").text((x)+1);
        $("#i3").val(x+1);

        var y = parseInt($("#item").text());    
        $("#item").text(y+1);

        updateTotalPrice();
    }
    function rmitem1(){
        $("#sold1").css("display", "none");
        var x = parseInt($("#item11").text());
        if(x > 0){
            $("#item11").text((x)-1);
            $("#i2").val(x-1);

            var y = parseInt($("#item").text());    
            $("#item").text(y-1);    
        }
        updateTotalPrice();
    }
    function rmitem2(){
        $("#sold2").css("display", "none");
        var x = parseInt($("#item22").text());
        if(x > 0){
            $("#item22").text((x)-1);
            $("#i2").val(x-1);

            var y = parseInt($("#item").text());    
            $("#item").text(y-1);    
        }
        updateTotalPrice();
    }

	function rmitem3(){
        $("#sold3").css("display", "none");
        var x = parseInt($("#item33").text());
        if(x > 0){
            $("#item33").text((x)-1);
            $("#i2").val(x-1);

            var y = parseInt($("#item").text());    
            $("#item").text(y-1);    
        }
        updateTotalPrice();
    }