$('document').ready(function() {
    $('#btn-bookmark').click(function() {
        if($(this).children('i').hasClass('bi-heart')) {
            $(this).removeClass('btn-warning');
            $(this).addClass('btn-secondary');
            $(this).children('i').removeClass('bi-heart');
            $(this).children('i').addClass('bi-heart-fill');
            $(this).children('span').html('Difavoritkan');
            addToBookmark($.urlParam('id_event'));
            location.reload();
        }
        else {
            $(this).removeClass('btn-secondary');
            $(this).addClass('btn-warning');
            $(this).children('i').removeClass('bi-heart-fill');
            $(this).children('i').addClass('bi-heart');
            $(this).children('span').html('Favorit');
            deleteFromBookmark($.urlParam('id_event'));
            location.reload();
        }
    });
    
    $.urlParam = function(name){
        var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
        if (results==null) {
            return null;
        }
        return decodeURI(results[1]) || 0;
    }
    
    function addToBookmark(id_event) {
        bkArray = [];
        if(Cookies.get('bookmark')) bkArray = JSON.parse(Cookies.get('bookmark'));
        bkArray.push(id_event);
        Cookies.set('bookmark', JSON.stringify(bkArray));
    }
    
    function deleteFromBookmark(id_event) {
        bkArray = JSON.parse(Cookies.get('bookmark'));
        bkArray = $.grep(bkArray, function(n) {
            return n != id_event;
        });
        Cookies.set('bookmark', JSON.stringify(bkArray));
    }

    // Cookies.remove('bookmark');
});