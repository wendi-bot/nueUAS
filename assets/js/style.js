let count = 0;
$('.btn-success').on('click', function () {
    setTimeout(function () {
        count++;
        $(".badge-info").text(count);
    }, 1000);

});