
var list=[];



function getListPost(){

    var req = new XMLHttpRequest();
    req.onreadystatechange=function(){
              if(req.readyState==4 && req.status==200){
                  list=[];  
                  var data=req.responseText;
                  var jsonResponse = JSON.parse(data);
                  for (var i = 0; i < jsonResponse.length ; i++){
                    list.push(jsonResponse[i]);
                    document.getElementById('listPost').innerHTML+='<li><a  href="#" id="post-'+jsonResponse[i]["id"]+'" onClick="sendParams(this.id)">'+ jsonResponse[i]["titulo"] +'</a ></li>';
                  }
              }
          }
    req.open('GET','http://localhost/rances/api/public/post/all',true);
    req.send();
  }

function sendParams(idPost){
    var id = idPost.split("-")[1];
    window.location.href = "single-post.php?id="+id;
}

function loadDataPost(){
    const valorurl = window.location.search;
    const urlparametros = new URLSearchParams(valorurl);
    var id = urlparametros.get("id");
    var req = new XMLHttpRequest();
    req.onreadystatechange=function(){
        if(req.status==200){
            var data=req.responseText;
            var jsonResponse = JSON.parse(data);
            document.getElementById('titulo').innerHTML=jsonResponse["titulo"];
            document.getElementById('contentPost').innerHTML=jsonResponse["body"];
        }
        else{
            console.log(req.status);
        }
    }
    req.open('GET','http://localhost/rances/api/public/post/id/'+id,true);
    req.send();
}

function loadComments(){
    const valorurl = window.location.search;
    const urlparametros = new URLSearchParams(valorurl);
    var id = urlparametros.get("id");
    var req = new XMLHttpRequest();
    req.onreadystatechange=function(){
        if(req.status==200){
            var data=req.responseText;
            var jsonResponse = JSON.parse(data);
            var comentarios = document.getElementById('comentarios');
            comentarios.innerHTML="";
            comentarios.innerHTML+= '<h5 class="comment-title py-4">' + jsonResponse.length +' Comentarios</h5>';
            for (var i = 0; i < jsonResponse.length ; i++){
                console.log(jsonResponse[i]);
                comentarios.innerHTML+='<div class="comment d-flex mb-4"><div class="flex-grow-1 ms-2 ms-sm-3"><div class="comment-meta d-flex align-items-baseline"><h6 class="me-2">'
                    +jsonResponse[i]["nombre"]+'</h6><span class="text-muted">2d</span></div><div class="comment-body">'
                    +jsonResponse[i]["mensaje"]+'</div></div></div>';
            }
        }
        else{
            console.log(req.status);
        }
    }
    req.open('GET','http://localhost/rances/api/public/comentario/idPost/'+id,true);
    req.send();
}