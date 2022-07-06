$(document).ready(function(){
    $('#search').on('keyup',function(){
        var inp = $('#search').val();
        var l = inp.length;
        $.ajax({
            url:'server.php',
            type:'post',
            data:{
                input:inp,
                length:l
            },
            success:function(result){
                if(inp=="")
                window.location = 'dashbord.php';
                $('#table').html(result);
            }
    
        })
    })
})