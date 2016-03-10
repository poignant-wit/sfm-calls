$(document).ready(function () {

    $("#orders-table tbody tr").on("click", function () {
        $(this).toggleClass('active');

    });

    $('.action-btn').on("click", function () {

        //console.log($(this).attr('id'));
        //console.log(getSelectedRows());

        var $action_type = $(this).attr('data-type');
        var $action_type_id = $(this).attr('id');
        var $action = $(this).html();
        var data = {
            rows: getSelectedRows(),
            action_type_id: $action_type_id
        };
        $.ajax({
            type: 'POST',
            url: 'action',
            contentType: 'application/json',
            data: JSON.stringify(data),
            success: function (e) {
                changeActionOfSelectedRows($action_type, $action);

            }
        });


    });


    function getSelectedRows() {
        var $result = [];
        $('#orders-table tbody tr.active td#order-id').each(function () {
            $result.push($(this).html());
        });
        return $result;
    }

    function changeActionOfSelectedRows($action_type, $action) {
        $('#orders-table tbody tr.active td#order-action').each(function () {
            $(this).children().remove();
            $(this).append('<span class="label label-' + $action_type + '">' + $action + '</span>');
        });
    }


    $('.order-details').on('click', function(){
        console.log($(this).closest('tr').find('#order-id').html());
        var $id = $(this).closest('tr').find('#order-id').html();
        $(window).attr('location', 'order/' + $id);


    })


});