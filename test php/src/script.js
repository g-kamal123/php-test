$(document).ready(function(){
    // alert('connected');
    $('#btn').on('click',function(){
        // alert('hello');
        var username =$('#user').val();
        var pass =$('#pass').val();
        $.ajax({
            url:'server.php',
            type:'post',
            data:{
                info:'see',
                user: username,
                password:pass
            },
            success:function(result){
                if(result==1)
                window.location = 'dashbord.php';
                if(result==0)
                alert("bad credentials");
            }
    
        })

    })
})