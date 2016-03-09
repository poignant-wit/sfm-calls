$(document).ready(function () {

    $("#orders-table tbody tr").on("click", function () {
        $(this).toggleClass('active');

    });

    $('.action-btn').on("click", function () {

        //console.log($(this).attr('id'));
        //console.log(getSelectedRows());

        var $action_type = $(this).attr('data-type');
        var $action = $(this).html();
        $.ajax({
            type: 'POST',
            url: 'action',
            contentType: 'application/json',
            data: JSON.stringify(getSelectedRows()),
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


});