function validateAmount(amount, pid) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name = "csrf_token"]').attr("content")
        }
    });
    $.ajax({
        url: "/products/validate-amount",
        data:{
            'qty': amount,
            'pid': pid
        },
        async: false,
        type: 'POST'
    }).done(function (data) {
        
    });
}
