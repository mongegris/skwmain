$(document).ready(function(){
    $('table tbody').on( 'click', 'tr', function () {
        $(this).toggleClass('selected');
    } );

    /*
    //AGREGAR SELECT ALL. REVISAR LUGAR
    $('table').before( $('<div><input type="checkbox" id="select_all"></div>'));

    $(':checkbox#select_all').click(function(){
        if($(this).prop('checked'))
        {
            $('table tbody tr').addClass('selected');
        }
        else
        {
            $('table tbody tr').removeClass('selected');
        }
    })*/
});
