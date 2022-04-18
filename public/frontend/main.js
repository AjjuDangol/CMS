$(".value").change(function(e){
    var a = $("#price").val();
    var b = $("#quantity").val();
    var total = a * b;
    $("#totalPrice").val(total);
})


$('#addStar').change('.star', function(e) {
    $(this).submit();
    });


// $('#stars').on('click',function(){
//     $(this).addClass('active');
// })
