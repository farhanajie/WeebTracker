$('document').ready(function() {
    $('.button-bookmark').on('click', function() {
        if($(this).children('i').hasClass('bi-heart')) {
            $(this).removeClass('btn-warning');
            $(this).addClass('btn-secondary');
            $(this).children('i').removeClass('bi-heart');
            $(this).children('i').addClass('bi-heart-fill');
            $(this).children('span').html('Bookmarked');
        }
        else {
            $(this).removeClass('btn-secondary');
            $(this).addClass('btn-warning');
            $(this).children('i').removeClass('bi-heart-fill');
            $(this).children('i').addClass('bi-heart');
            $(this).children('span').html('Bookmark');
        }
    });
});