$(document).ready(function(){
    $('#search').on('keyup',function(){
        var inp = $('#search').val();
        $.ajax({
            url:'server.php',
            type:'post',
            data:{
                input:inp
            },
            success:function(result){
                if(inp=="")
                window.location = 'dashbord.php';
                $('#table').html(result);
            }
    
        })
    })
})