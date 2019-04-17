
<div class="modal fade {{isset($class) ? $class : ''}}" id="{{$id}}" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">{{isset($titulo) ? $titulo : 'SKW'}}</h4>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<script>
    $('#{{$id}}.modal.fade').on('show.bs.modal', function(e){
        var button = e.relatedTarget;
        var url = $(button).data('url');
        $($(button).data('target') + ' .modal-body').load(url);
    })
</script>
