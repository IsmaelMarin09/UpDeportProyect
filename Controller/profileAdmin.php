<?php 

  function profileAdmin(){
      if (isset($_GET['id_user2'])&& ($_GET['id_user2']!=$_SESSION['unique_Id'])) {
          $id=($_GET['id_user2']);
          $varseg="Seguir";
          $classDisplay=null;
          $classDisplayNoGet="none";
          $objetoConsultas= new consultasAdmin;
          $result3=$objetoConsultas-> verificacionSeg($_SESSION['unique_Id'],$id);
    
        
      }else{
          $id=($_SESSION['unique_Id']);
          $varseg="miPerfil";
          $classDisplay="none";
          $classDisplayNoGet=null;
          $result3=null;
      }
      $objetoConsultas= new consultasAdmin;
      $result=$objetoConsultas->selecUser($id,"users");
      $result2=$objetoConsultas->selecUser($id,"tablaprofile");
     


      foreach($result2 as $f2 ){
        foreach($result as $f ){
          echo '
          <section class="content">
                <div class="container-fluid">
                  <div >
                    <!-- /.col -->
                    <div class="">
                      <div class="card">
                        <div class="card-header p-2">
                          <ul class="nav nav-pills">
                            <li class="nav-item ">
                              <a class="nav-link active" href="#timeline" data-toggle="tab"
                                >Perfil</a
                              >
                            </li>
                            <li class="nav-item">
                              <a
                                class="nav-link "
                                href="#activity"
                                data-toggle="tab"
                                >Muro</a
                              >
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#activity" data-toggle="tab"
                                >Mis Publicaciones</a
                              >
                            </li>
                            
                            
                          </ul>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                          <div class="tab-content">
                            <div class="tab-pane" id="activity">
                              <!-- Post -->
                              <div class="post">
                                <div class="user-block">
                                  <img
                                    class="img-circle img-bordered-sm"
                                    src="../Assets/img/user1-128x128.jpg"
                                    alt="user image"
                                  />
                                  <span class="username">
                                    <a href="#">Jonathan Burke Jr.</a>
                                    <a href="#" class="float-right btn-tool"
                                      ><i class="fas fa-times"></i
                                    ></a>
                                  </span>
                                  <span class="description"
                                    >Shared publicly - 7:30 PM today</span
                                  >
                                </div>
                                <!-- /.user-block -->
                                <p>
                                  Lorem ipsum represents a long-held tradition for
                                  designers, typographers and the like. Some people
                                  hate it and argue for its demise, but others ignore
                                  the hate as they create awesome tools to help create
                                  filler text for everyone from bacon lovers to
                                  Charlie Sheen fans.
                                </p>

                                <p>
                                  <a href="#" class="link-black text-sm mr-2"
                                    ><i class="fas fa-share mr-1"></i> Share</a
                                  >
                                  <a href="#" class="link-black text-sm"
                                    ><i class="far fa-thumbs-up mr-1"></i> Like</a
                                  >
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
                              </div>
                              <!-- /.post -->

                              <!-- Post -->
                              <div class="post clearfix">
                                <div class="user-block">
                                  <img
                                    class="img-circle img-bordered-sm"
                                    src="../Assets/img/user7-128x128.jpg"
                                    alt="User Image"
                                  />
                                  <span class="username">
                                    <a href="#">Sarah Ross</a>
                                    <a href="#" class="float-right btn-tool"
                                      ><i class="fas fa-times"></i
                                    ></a>
                                  </span>
                                  <span class="description"
                                    >Sent you a message - 3 days ago</span
                                  >
                                </div>
                                <!-- /.user-block -->
                                <p>
                                  Lorem ipsum represents a long-held tradition for
                                  designers, typographers and the like. Some people
                                  hate it and argue for its demise, but others ignore
                                  the hate as they create awesome tools to help create
                                  filler text for everyone from bacon lovers to
                                  Charlie Sheen fans.
                                </p>

                                <form class="form-horizontal">
                                  <div class="input-group input-group-sm mb-0">
                                    <input
                                      class="form-control form-control-sm"
                                      placeholder="Response"
                                    />
                                    <div class="input-group-append">
                                      <button type="submit" class="btn btn-danger">
                                        Send
                                      </button>
                                    </div>
                                  </div>
                                </form>
                              </div>
                              <!-- /.post -->

                              <!-- Post -->
                              <div class="post">
                                <div class="user-block">
                                  <img
                                    class="img-circle img-bordered-sm"
                                    src="../Assets/img/user6-128x128.jpg"
                                    alt="User Image"
                                  />
                                  <span class="username">
                                    <a href="#">Adam Jones</a>
                                    <a href="#" class="float-right btn-tool"
                                      ><i class="fas fa-times"></i
                                    ></a>
                                  </span>
                                  <span class="description"
                                    >Posted 5 photos - 5 days ago</span
                                  >
                                </div>
                                <!-- /.user-block -->
                                <div class="row mb-3">
                                  <div class="col-sm-6">
                                    <img
                                      class="img-fluid"
                                      src="../Assets/img/photo1.png"
                                      alt="Photo"
                                    />
                                  </div>
                                  <!-- /.col -->
                                  <div class="col-sm-6">
                                    <div class="row">
                                      <div class="col-sm-6">
                                        <img
                                          class="img-fluid mb-3"
                                          src="../Assets/img/photo2.png"
                                          alt="Photo"
                                        />
                                        <img
                                          class="img-fluid"
                                          src="../Assets/img/photo3.jpg"
                                          alt="Photo"
                                        />
                                      </div>
                                      <!-- /.col -->
                                      <div class="col-sm-6">
                                        <img
                                        
                                          class="img-fluid mb-3"
                                          src="../Assets/img/photo4.jpg"
                                          alt="Photo"
                                        />
                                        <img
                                          class="img-fluid"
                                          src="../Assets/img/photo1.png"
                                          alt="Photo"
                                        />
                                      </div>
                                      <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                  </div>
                                  <!-- /.col -->
                                </div>
                                <!-- /.row -->

                                <p>
                                  <a href="#" class="link-black text-sm mr-2"
                                    ><i class="fas fa-share mr-1"></i> Share</a
                                  >
                                  <a href="#" class="link-black text-sm"
                                    ><i class="far fa-thumbs-up mr-1"></i> Like</a
                                  >
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
                              </div>
                              <!-- /.post -->
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane active" id="timeline">
                              <!-- The timeline -->
                              <div class=" timeline-inverse">
                                <!-- INICIO DE PERFIL -->
                                <div class="row ">
                                  <div class="col-md-6">
                                    <!-- Profile Image -->
                                    <div class="card card-primary card-outline">
                                      <div class="card-body box-profile">
                                        <div class="text-center">
                                          <img
                                            class="
                                              profile-user-img
                                              img-fluid img-circle
                                              
                                            "
                                            id="imgProfile"
                                            style="height:230px;width:230px;"
                                            src="../Assets/img/perfil_img/'.$f['img'].'"
                                            alt="User profile picture"
                                          />
                                        </div>

                                        <h3 class="profile-username text-center">
                                        '.$f['nombre'].'
                                        </h3>

                                        <p class="text-muted text-center">
                                        '.$f['rol'].'-'.$f['deporte'].'
                                        </p>

                                        <ul
                                          class="
                                            list-group list-group-unbordered
                                            mb-3
                                          "
                                        >
                                          <li class="list-group-item">';

                                          echo'  <a href="contactsSeguidores.php" style="display:'.$classDisplayNoGet.'">Seguidores</a>';
                                          echo " <a  style='display:".$classDisplay."' href='contactsSeguidores.php?id_user2=".$f2['unique_Id']."'>Seguidores"; 
                                          echo'  <a class="float-right"  id="aSeguidores"> '.$f2['seguidores'].'</a>
                                          </li>
                                          <li class="list-group-item">';
                                        
                                          echo " <a  style='display:".$classDisplay."' href='contactsSeguidos.php?id_user2=".$f2['unique_Id']."'>Seguidos";
                                          echo'  <a href="contactsSeguidos.php" style="display:'.$classDisplayNoGet.'">Seguidos</a>';
                                          
                                          echo '<a class="float-right"  id="aSeguidos"> '.$f2['seguidos'].'</a> 
                                          
                                          </li>
                                          
                                          
                                        </ul>
                                      
                                        <form action="../../Model/consultasBtnSeg.php" method="POST">
                                        <input name="id_Usr1" style="display:none;" value="'.$_SESSION['unique_Id'].'" >
                                        
                                        <input name="id_Usr2" style="display:none;" value="'.$id.'" >

                                        <button  class="btn btn-primary " style="display:'.$classDisplay.'">'.$result3.'</button>
                                        
                                        </form>
                                       
                                        
                                      </div>
                                      <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                  </div>
                                  <div class="card card-primary col-md-6">
                                    <div class="card-header" style="display:block">
                                      <h3 class="card-title">Sobre Mi</h3>
                                      <form action="profileMod.php" method="POST" style="position:relative; right:-60%;display:'.$classDisplayNoGet.';">
                                      <input name="id_Usr1" style="display:none;" value="'.$_SESSION['unique_Id'].'" >
                                      <button  class="btn btn-primary"  ><img src="../Assets/img/perfil_img/lapiz.png" alt="MDN"></button>    
                                      </form>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                      <strong
                                        ><i class="fas fa-book mr-1"></i>MI
                                        DESARROLLO</strong
                                      >

                                      <p class="text-muted">
                                      '.$f2['desarrollo'].'
                                      </p>

                                      <hr />

                                      <strong
                                        ><i class="fas fa-map-marker-alt mr-1"></i>ME LOCALIZO</strong
                                      >

                                      <p class="text-muted"> '.$f['municipio'].'</p>

                                      <hr />

                                      <strong
                                        ><i class="fas fa-pencil-alt mr-1"></i
                                        >RECONOCIMIENTOS</strong
                                      >

                                      <p class="text-muted">
                                        <span class="tag tag-danger"
                                          > '.$f2['reconocimientos'].'</span
                                        >
                                    
                                      </p>

                                      <hr />

                                      <strong
                                        ><i class="far fa-file-alt mr-1"></i
                                        >DESCRIPCION</strong
                                      >

                                      <p class="text-muted">
                                      '.$f2['descripcion'].'
                                      </p>
                                    </div>
                                  </div>
                                </div>
                              </div>

                            
                            </div>

                            <!-- FIN PARTE PERFIL -->
                            <!-- /.tab-pane -->

                            
                            <!-- /.tab-pane -->
                          </div>
                          <!-- /.tab-content -->
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
              </section>
        
                  
          ';

      
     }
  }
 } ;
?>