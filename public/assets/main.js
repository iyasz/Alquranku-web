// const heroId = location.pathname.split('/')[1]

// axios.get('/'+heroId, {
//         params: {
//         ID: 12345
//         }
//     })
//     .then(function (response) {
//         console.log(response);
//     })
//     .catch(function (error) {
//         console.log(error);
//     })
//     .finally(function () {

// });

$(".nav-href").on("click", function(e) {
    e.preventDefault()

    var linkHref = $(this).attr("href");
    $("html, body").animate({
            scrollTop: $(linkHref).offset().top - 130,
        },
        1000
    );
    return false;
})