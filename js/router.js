$(document).on('click', '#dashboard', function (e) {
    e.preventDefault();
    console.log("dashboard");

    // Load the dashboard content
    $('.main-container').load('view/dashboard.php');
    $('<link>')
        .appendTo('head')
        .attr({
            type: 'text/css',
            rel: 'stylesheet',
                href: 'view/css/index.css'
        });

});


$(document).on('click', '#library', function (e) {
    e.preventDefault();
    console.log("library");
    $('.main-container').load('view/library.php')
    $('<link>')
        .appendTo('head')
        .attr({
            type: 'text/css',
            rel: 'stylesheet',
            href: 'view/css/library.css'
        });

})

$(document).on('click', '#profile', function (e) {
    e.preventDefault();
    console.log("profile");
    $('.main-container').load('view/profile.php')

})

$(document).on('click', '#logout', function (e) {
    e.preventDefault();
    console.log("logout");
    $('.main-container').load('view/logout.php')

})

$(document).on('click', '#recent', function (e) {
    e.preventDefault();
    console.log("recent");
    $('.main-container').load('view/users.php')
    $('<link>')
        .appendTo('head')
        .attr({
            type: 'text/css',
            rel: 'stylesheet',
            href: 'view/css/users.css'
        });

})
// $(document).ready(function () {
//     $('#dashboard').on('click', function (e) {
//         // e.preventDefault();
//         console.log("food");
//     });
// });
