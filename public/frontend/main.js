$(".changeValue").change(function(e){
    var a = $('#price').val();
    var b = $('#quant').val();
    var total = a * b;
    $("#totalPrice").val(total);
});

$('#addStar').change('.star', function(e) {
    $(this).submit();
    });
