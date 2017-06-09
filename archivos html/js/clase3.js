$( document ).ready(function() {
    $("#panel1").hide();
    $("#boton").click(function() {
            
        
            var url1 = "https://graph.facebook.com/v2.7/?id="+$("#url").val()+"&access_token=1571433103163973%7CCUl8xGn1JnYCbTPSzzuJ0tETtRg";
            
            $.getJSON(url1, function(data){
                var id = data.og_object.id;
                var url2 = "https://graph.facebook.com/v2.7/"+id+"/comments?access_token=1571433103163973%7CCUl8xGn1JnYCbTPSzzuJ0tETtRg";
                
                $.getJSON(url2, function(data1){     
                                        
                    //Usuario 1
                    $( ".media1" ).append( '<a class="media-left" >'
                                        +'<img class="media-object" src="https://graph.facebook.com/v2.7/'+data1.data[0].from.id+'/picture"' +'alt="Generic placeholder image">'
                                        +'</a>'
                                        +'<div class="media-body">'
                                        +'<h4 class="media-heading">'+data1.data[0].from.name+'</h4>'
                                        +data1.data[0].message
                                    +'</div>'); 
                    
                    $( ".media2" ).append( '<a class="media-left" >'
                                        +'<img class="media-object" src="https://graph.facebook.com/v2.7/'+data1.data[1].from.id+'/picture"' +'alt="Generic placeholder image">'
                                        +'</a>'
                                        +'<div class="media-body">'
                                        +'<h4 class="media-heading">'+data1.data[1].from.name+'</h4>'
                                        +data1.data[1].message
                                    +'</div>'); 
                                    
                    $( ".media3" ).append( '<a class="media-left" >'
                                        +'<img class="media-object" src="https://graph.facebook.com/v2.7/'+data1.data[2].from.id+'/picture"' +'alt="Generic placeholder image">'
                                        +'</a>'
                                        +'<div class="media-body">'
                                        +'<h4 class="media-heading">'+data1.data[2].from.name+'</h4>'
                                        +data1.data[2].message
                                    +'</div>');
                    
                    $( ".media4" ).append( '<a class="media-left" >'
                                        +'<img class="media-object" src="https://graph.facebook.com/v2.7/'+data1.data[3].from.id+'/picture"' +'alt="Generic placeholder image">'
                                        +'</a>'
                                        +'<div class="media-body">'
                                        +'<h4 class="media-heading">'+data1.data[3].from.name+'</h4>'
                                        +data1.data[3].message
                                    +'</div>');
                    
                    $( ".media5" ).append( '<a class="media-left" >'
                                        +'<img class="media-object" src="https://graph.facebook.com/v2.7/'+data1.data[4].from.id+'/picture"' +'alt="Generic placeholder image">'
                                        +'</a>'
                                        +'<div class="media-body">'
                                        +'<h4 class="media-heading">'+data1.data[4].from.name+'</h4>'
                                        +data1.data[4].message
                                    +'</div>');
                    $('#panel1').fadeIn();
                
                });                     
            });
            $('#p2').fadeIn();
        
    });
    
});