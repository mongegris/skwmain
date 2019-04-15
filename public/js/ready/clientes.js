$(document).ready(function(){
    $('table tbody').on( 'click', 'tr', function () {
        $(this).toggleClass('selected');
    } );
    $('table').before( $('<input type="checkbox" id="select_all">'));

    $(':checkbox#select_all').click(function(){
        if($(this).prop('checked'))
        {
            alert('alaal');
            $('table tbody tr').addClass('selected');
        }
        else
        {
            alert('a');
            $('table tbody tr').removeClass('selected');
        }
    })
});
