$(".value").change(function(e){
    var a = $("#price").val();
    var b = $("#quantity").val();
    var total = a * b;
    $("#totalPrice").val(total);
})


$('#addStar').change('.star', function(e) {
    $(this).submit();
    });



function quantityValidation(){
    var a=parseInt(document.getElementById('quantity').value);

    if(a < 1){
        document.getElementById('error').innerHTML = "Select atleast one item";
        document.getElementById('button').style.visibility='hidden';
    }

    if(a > 0){
        document.getElementById('error').style.visibility="hidden";
        document.getElementById('button').style.visibility='visible';
    }
}
// $('#stars').on('click',function(){
//     $(this).addClass('active');
// })
