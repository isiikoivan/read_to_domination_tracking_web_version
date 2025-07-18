$(document).on('click', '#dashboard', function (e) {
    e.preventDefault();
    console.log("dashboard");
    let url = 'view/dashboard.php';
    let style_files = ['fontawesome_6/all.css','view/css/dashboard.css','view/css/sidebar.css','view/css/main.css'];
    navigationToNextPage(url, style_files);

});


$(document).on('click', '#library', function (e) {
    e.preventDefault();
    console.log("library");
    let url = 'view/library.php';
    let style_files = ['fontawesome_6/all.css','view/css/library.css','view/css/sidebar.css','view/css/main.css'];
    navigationToNextPage(url, style_files);


})

$(document).on('click', '#users', function (e) {
    e.preventDefault();
    console.log("users");
    let url = 'view/users.php';
    let style_files = ['fontawesome_6/all.css','view/css/users.css','view/css/sidebar.css','view/css/main.css'];
    navigationToNextPage(url, style_files);

})
$(document).on('click', '#library_create', function (e) {
    e.preventDefault();
    console.log("create library");
    let url = 'view/create_library.php';
    let style_files = ['fontawesome_6/all.css','view/css/create_library.css','view/css/sidebar.css','view/css/main.css'];
    navigationToNextPage(url, style_files);

})

$(document).on('click', '#library_book_link', function (e) {
    e.preventDefault();
    console.log(" to books ");
    let url = 'view/book.php';
    let style_files = ['fontawesome_6/all.css','view/css/book.css','view/css/sidebar.css','view/css/main.css'];
    navigationToNextPage(url, style_files);

})

$(document).on('click', '#create_book', function (e) {
    e.preventDefault();
    console.log(" to books ");
    let url = 'view/create_book.php';
    let style_files = ['fontawesome_6/all.css','view/css/create_book.css','view/css/sidebar.css','view/css/main.css'];
    navigationToNextPage(url, style_files);

})
$(document).on('click', '#create_user', function (e) {
    e.preventDefault();
    console.log(" to create ");
    let url = 'view/register.php';
    let style_files = ['fontawesome_6/all.css','view/css/register.css','view/css/sidebar.css','view/css/main.css'];
    navigationToNextPage(url, style_files);

})
$(document).on('click', '#book_chapter', function (e) {
    e.preventDefault();
    console.log(" to chapter ");
    let url = 'view/chapter.php';
    let style_files = ['fontawesome_6/all.css','view/css/chapter.css','view/css/sidebar.css','view/css/main.css'];
    navigationToNextPage(url, style_files);

})


$(document).on('click', '#logout', function (e) {
    e.preventDefault();
    console.log("log out")

})



function navigationToNextPage(next_page_url, css_files) {
        console.log(`Navigating to ${next_page_url}`);

        // Load the next page into the container
        $('.main-container').load(next_page_url);

        // Remove all previously added dynamic styles (assuming they have a common class)
        $('link.dynamic-style').remove();

        // Add each CSS file passed in the array

        css_files.forEach(function (css_file) {
            $('<link>', {
                rel: 'stylesheet',
                type: 'text/css',
                href: css_file,
                class: 'dynamic-style'
            }).appendTo('head');
        });

}
