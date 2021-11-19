<?php



function cargarPublicaciones(){

    $objetoConsulta=new consultasAdmin();
    $result=$objetoConsulta->listarPublicaciones();
    $result2=$objetoConsulta->listarUsers();
    if (!isset($result)) {
        echo'<h1>no hay publicaciones</h1>';
    }else {
        foreach ($result as $f) {
            $result2=$objetoConsulta->listarUsers();
           foreach ($result2 as $f2) {
            $result2=$objetoConsulta->listarUsers();
           
        
        echo'
        <div class="user-block">
            <img
            class="img-circle img-bordered-sm"
            src="../Assets/img/user6-128x128.jpg"
            alt="User Image"/>
                    <span class="username">
                        <a href="#">'.$f2['nombre'].'</a>
                    <i class="fas fa-times"></i></a>
                    </span>
                    <span class="description"
                        >'.$f['f_Publicacion'].'</span>
</div>
<p>
  link:'.$f['des_Video'].'
</p>

<p>
  '.$f['descripcion'].'
</p>
<div class="container">  
<div class="row align-items-start">
  
    <div class="col">
                        <img id="fotosPublicaciones"
                        class="img-fluid "
                        src="../Assets/img/img_publicaciones/'.$f['img1'].'"
                        alt="Photo"
                        />
                        </div>
                        <div class="col">
                        <img  id="fotosPublicaciones"
                        class="img-fluid"
                        src="../Assets/img/img_publicaciones/'.$f['img2'].'"
                        alt="Photo"
                        />
                        </div>
                        <div class="col">
                        <img  id="fotosPublicaciones"
                        class="img-fluid"
                        src="../Assets/img/img_publicaciones/'.$f['img3'].'"
                        alt="Photo"
                        />
                        </div>
  </div>

</div>  
<p>
  
  <a href="#" class="link-black text-sm">
  <i class="far fa-thumbs-up mr-1"></i> Like</a>
    <span class="float-right">
        <a href="#" class="link-black text-sm">
        <i class="far fa-comments mr-1"></i> Comments
        (5)
        </a>
    </span>
</p>

<input
  class="form-control form-control-sm"
  type="text"
  placeholder="Type a comment"
/>


';
            }
        }
    }

    

}








?>