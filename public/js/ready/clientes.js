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
function eliminarMasivo(e,dt,node,config)
{
    var seleccion = dt.rows('.selected').data();
    for(var i = 0 ; i < seleccion.length; i++  )
    {
        $(seleccion[i].accion).filter('#eliminar').trigger('click');
    }
}
function ListarIDs(e,dt,node,config)
{
    var seleccion = dt.rows('.selected').ids();
    console.log(seleccion.join(','));

}