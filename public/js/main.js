$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#bodyadd').click(function () {
        var body = $('#valbodyinp').val();
        var icon = $('#bodyicon').val().replace('C:\\fakepath\\', '');
        $.ajax({
            url: '/admin/addbody',
            type: 'post',
            data: {body: body, icon: icon},
            success: function () {
                window.location.reload();
            }
        })
    });
    $('.delbodycar').click(function () {
        var id = $(this).attr('data-id');
        $.ajax({
            url: '/admin/delbody',
            type: 'post',
            data: {id: id},
            success: function () {
                window.location.reload();
            }
        })
    })
    // $('#modeladd').click(function () {
    //     var model = $('#valmodelinp').val();
    //     var iconm = $('#modelicon').val();
    //     $.ajax({
    //         url: '/admin/addmodel',
    //         type: 'post',
    //         data: {model: model, iconm: iconm},
    //         success: function () {
    //             window.location.reload();
    //         }
    //     })
    // });
    $('.delmodelcar').click(function () {
        var modelid = $(this).attr('data-id');
        $.ajax({
            url: '/admin/delmodel',
            type: 'post',
            data: {modelid: modelid},
            success: function () {
                window.location.reload();
            }
        })
    })
    $('#stateadd').click(function () {
        var state = $('#valstateinp').val();
        $.ajax({
            url: '/admin/addstate',
            type: 'post',
            data: {state: state},
            success: function () {
                window.location.reload();
            }
        })
    });
    $('.delstatecar').click(function () {
        var stateid = $(this).attr('data-id');
        $.ajax({
            url: '/admin/delstate',
            type: 'post',
            data: {stateid: stateid},
            success: function () {
                window.location.reload();
            }
        })
    })
    $('#parkingadd').click(function () {
        var parking = $('#valparkinginp').val();
        $.ajax({
            url: '/admin/addparking',
            type: 'post',
            data: {parking: parking},
            success: function () {
                window.location.reload();
            }
        })
    });
    $('.delparkingcar').click(function () {
        var parkingid = $(this).attr('data-id');
        $.ajax({
            url: '/admin/delparking',
            type: 'post',
            data: {parkingid: parkingid},
            success: function () {
                window.location.reload();
            }
        })
    })
    $('#auctioncatadd').click(function () {
        var auctioncat = $('#valauctioncatinp').val();
        $.ajax({
            url: '/admin/addauctioncat',
            type: 'post',
            data: {auctioncat: auctioncat},
            success: function () {
                window.location.reload();
            }
        })
    });
    $('.delauctioncatcar').click(function () {
        var auctioncatid = $(this).attr('data-id');
        $.ajax({
            url: '/admin/delauctioncat',
            type: 'post',
            data: {auctioncatid: auctioncatid},
            success: function () {
                window.location.reload();
            }
        })
    })
    $('.verif').click(function () {
        var id = $(this).attr('id');
        $.ajax({
            url: '/admin/completed',
            type: 'post',
            data: {verif: '1',id:id},
            success: function () {
                window.location.reload();
            }
        })
    })
    $('.unverif').click(function () {
        var id = $(this).attr('id');
        $.ajax({
            url: '/admin/completed',
            type: 'post',
            data: {verif: '0',id:id},
            success: function () {
                window.location.reload();
            }
        })
    })
});
