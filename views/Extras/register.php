<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>UP DEPORT-REGISTRO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  
    <!-- Google Font: Source Sans Pro -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
    />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="../Assets/plugins/fontawesome-free/css/all.min.css"
    />
    <!-- icheck bootstrap -->
    <link
      rel="stylesheet"
      href="../Assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
      crossorigin="anonymous"
    />
    <!-- Theme style -->
    <link rel="stylesheet" href="../assets/css/adminlte.min.css" />
    <link rel="stylesheet" href="../Assets/css/styleRegistrer.css">
  </head>
  <script>
    const button = document.querySelector('button');
    button.disabled = false;
    function formRegistrer(){
      var seleccion=document.getElementById('select1');
      if (seleccion.selectedIndex==2) {
        document.getElementById("text1").classList.remove('dNone'); 
      }else{
        document.getElementById("text1").classList.add('dNone');
      }
    }
    function formTerminos(){
      const button = document.querySelector('button');
      if (button.disabled==true) {
          button.disabled = false
      }else{
        button.disabled = true
      }
      
    
        
    
    }
</script>
  <body class="hold-transition register-page" style=" height: auto; padding-top: 0; background: linear-gradient(#fff, #3f87a6); background-attachment: fixed;">
    <div class="box-m">
      <div class="register-logo" style="margin-bottom: 15px !importan; margin-top: 25px;">
        <a href="../../index.html"><b>UP</b>DEPORT</a>
      </div>

      <div class="card" style="border: 2px solid #9d7832;">
        <div class="card-body register-card-body">
          <p class="login-box-msg">CREA UNA CUENTA</p>
          <form action="../../Controller/insertarUserE.php" style="margin-bottom: 10px;" method="POST" enctype="multipart/form-data">
            <div class="row">
              <div class="col-sm-6" style="padding-top: 4px;">
              <small id="emailHelp" class="form-text text-muted" style="margin: 0;">Ingrese su nombre completo.</small>
                <div class="input-group mb-3" style="margin-bottom: 0rem !important; ">
                <input style="border-color: #9d7832;" type="text" class="form-control" placeholder="Nombre" name="nombre"/>
                  <div class="input-group-append">
                    <div class="input-group-text" style="border-color: #9d7832;">
                      <span class="fas fa-user"></span>
                    </div>
                  </div>
                </div>
                <small id="emailHelp" class="form-text text-muted" style="margin: 0;">Ingrese su correo.</small>
                <div class="input-group mb-3" style="margin-bottom: 0rem !important;">
                <input
                    type="email"
                    class="form-control"
                    placeholder="Correo"
                    name="email"
                    style="border-color: #9d7832;"
                  />
                  <div class="input-group-append">
                    <div class="input-group-text"  style="border-color: #9d7832;">
                      <span class="fas fa-envelope"></span>
                    </div>
                  </div>
                </div>
                <small id="emailHelp" class="form-text text-muted" style="margin: 0;">Ingrese una contrase??a.</small>
                <div class="input-group mb-3" style="margin-bottom: 0rem !important; border-color: #9d7832;">
                  <input
                    type="password"
                    class="form-control"
                    placeholder="Password"
                    name="clave"
                    style="border-color: #9d7832;"
                    
                  />
                  
                  
                </div>
                <small id="emailHelp" class="form-text text-muted" style="margin: 0;">Seleccione su residencia.</small>
                <div class="input-group mb-3" style="margin-bottom: 0rem !important; border-color: #9d7832;"> 
                              <select style="border-color: #9d7832;"  class="form-control" id="city" required name="municipio">
                                            <option value="">Municipio</option>
                                            <option value="Abejorral">Abejorral</option>
                                            <option value="Abrego">Abrego</option>
                                            <option value="Abriaqu??">Abriaqu??</option>
                                            <option value="Acac??as">Acac??as</option>
                                            <option value="Acand??">Acand??</option>
                                            <option value="Acevedo">Acevedo</option>
                                            <option value="Ach??">Ach??</option>
                                            <option value="Agrado">Agrado</option>
                                            <option value="Agua de Dios">Agua de Dios</option>
                                            <option value="Aguachica">Aguachica</option>
                                            <option value="Aguada">Aguada</option>
                                            <option value="Aguadas">Aguadas</option>
                                            <option value="Aguazul">Aguazul</option>
                                            <option value="Agust??n Codazzi">Agust??n Codazzi</option>
                                            <option value="Aipe">Aipe</option>
                                            <option value="Alb??n">Alb??n</option>
                                            <option value="Alb??n">Alb??n</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Alcal??">Alcal??</option>
                                            <option value="Aldana">Aldana</option>
                                            <option value="Alejandr??a">Alejandr??a</option>
                                            <option value="Algarrobo">Algarrobo</option>
                                            <option value="Algeciras">Algeciras</option>
                                            <option value="Almaguer">Almaguer</option>
                                            <option value="Almeida">Almeida</option>
                                            <option value="Alpujarra">Alpujarra</option>
                                            <option value="Altamira">Altamira</option>
                                            <option value="Alto Baudo">Alto Baudo</option>
                                            <option value="Altos del Rosario">Altos del Rosario</option>
                                            <option value="Alvarado">Alvarado</option>
                                            <option value="Amag??">Amag??</option>
                                            <option value="Amalfi">Amalfi</option>
                                            <option value="Ambalema">Ambalema</option>
                                            <option value="Anapoima">Anapoima</option>
                                            <option value="Ancuy??">Ancuy??</option>
                                            <option value="Andaluc??a">Andaluc??a</option>
                                            <option value="Andes">Andes</option>
                                            <option value="Angel??polis">Angel??polis</option>
                                            <option value="Angostura">Angostura</option>
                                            <option value="Anolaima">Anolaima</option>
                                            <option value="Anor??">Anor??</option>
                                            <option value="Anserma">Anserma</option>
                                            <option value="Ansermanuevo">Ansermanuevo</option>
                                            <option value="Anza">Anza</option>
                                            <option value="Anzo??tegui">Anzo??tegui</option>
                                            <option value="Apartad??">Apartad??</option>
                                            <option value="Ap??a">Ap??a</option>
                                            <option value="Apulo">Apulo</option>
                                            <option value="Aquitania">Aquitania</option>
                                            <option value="Aracataca">Aracataca</option>
                                            <option value="Aranzazu">Aranzazu</option>
                                            <option value="Aratoca">Aratoca</option>
                                            <option value="Arauca">Arauca</option>
                                            <option value="Arauquita">Arauquita</option>
                                            <option value="Arbel??ez">Arbel??ez</option>
                                            <option value="Arboleda">Arboleda</option>
                                            <option value="Arboledas">Arboledas</option>
                                            <option value="Arboletes">Arboletes</option>
                                            <option value="Arcabuco">Arcabuco</option>
                                            <option value="Arenal">Arenal</option>
                                            <option value="Argelia">Argelia</option>
                                            <option value="Argelia">Argelia</option>
                                            <option value="Argelia">Argelia</option>
                                            <option value="Ariguan??">Ariguan??</option>
                                            <option value="Arjona">Arjona</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Armero">Armero</option>
                                            <option value="Arroyohondo">Arroyohondo</option>
                                            <option value="Astrea">Astrea</option>
                                            <option value="Ataco">Ataco</option>
                                            <option value="Atrato">Atrato</option>
                                            <option value="Ayapel">Ayapel</option>
                                            <option value="Bagad??">Bagad??</option>
                                            <option value="Bah??a Solano">Bah??a Solano</option>
                                            <option value="Bajo Baud??">Bajo Baud??</option>
                                            <option value="Balboa">Balboa</option>
                                            <option value="Balboa">Balboa</option>
                                            <option value="Baranoa">Baranoa</option>
                                            <option value="Baraya">Baraya</option>
                                            <option value="Barbacoas">Barbacoas</option>
                                            <option value="Barbosa">Barbosa</option>
                                            <option value="Barbosa">Barbosa</option>
                                            <option value="Barichara">Barichara</option>
                                            <option value="Barranca de Up??a">Barranca de Up??a</option>
                                            <option value="Barrancabermeja">Barrancabermeja</option>
                                            <option value="Barrancas">Barrancas</option>
                                            <option value="Barranco de Loba">Barranco de Loba</option>
                                            <option value="Barranco Minas">Barranco Minas</option>
                                            <option value="Barranquilla">Barranquilla</option>
                                            <option value="Becerril">Becerril</option>
                                            <option value="Belalc??zar">Belalc??zar</option>
                                            <option value="Bel??n">Bel??n</option>
                                            <option value="Bel??n">Bel??n</option>
                                            <option value="Bel??n de Bajir??">Bel??n de Bajir??</option>
                                            <option value="Bel??n de Los Andaquies">Bel??n de Los Andaquies</option>
                                            <option value="Bel??n de Umbr??a">Bel??n de Umbr??a</option>
                                            <option value="Bello">Bello</option>
                                            <option value="Belmira">Belmira</option>
                                            <option value="Beltr??n">Beltr??n</option>
                                            <option value="Berbeo">Berbeo</option>
                                            <option value="Betania">Betania</option>
                                            <option value="Bet??itiva">Bet??itiva</option>
                                            <option value="Betulia">Betulia</option>
                                            <option value="Betulia">Betulia</option>
                                            <option value="Bituima">Bituima</option>
                                            <option value="Boavita">Boavita</option>
                                            <option value="Bochalema">Bochalema</option>
                                            <option value="Bogot??">Bogot??</option>
                                            <option value="Bojac??">Bojac??</option>
                                            <option value="Bojaya">Bojaya</option>
                                            <option value="Bol??var">Bol??var</option>
                                            <option value="Bol??var">Bol??var</option>
                                            <option value="Bol??var">Bol??var</option>
                                            <option value="Bosconia">Bosconia</option>
                                            <option value="Boyac??">Boyac??</option>
                                            <option value="Brice??o">Brice??o</option>
                                            <option value="Brice??o">Brice??o</option>
                                            <option value="Bucaramanga">Bucaramanga</option>
                                            <option value="Bucarasica">Bucarasica</option>
                                            <option value="Buenaventura">Buenaventura</option>
                                            <option value="Buenavista">Buenavista</option>
                                            <option value="Buenavista">Buenavista</option>
                                            <option value="Buenavista">Buenavista</option>
                                            <option value="Buenavista">Buenavista</option>
                                            <option value="Buenos Aires">Buenos Aires</option>
                                            <option value="Buesaco">Buesaco</option>
                                            <option value="Buga">Buga</option>
                                            <option value="Bugalagrande">Bugalagrande</option>
                                            <option value="Buritic??">Buritic??</option>
                                            <option value="Busbanz??">Busbanz??</option>
                                            <option value="Cabrera">Cabrera</option>
                                            <option value="Cabrera">Cabrera</option>
                                            <option value="Cabuyaro">Cabuyaro</option>
                                            <option value="Cacahual">Cacahual</option>
                                            <option value="C??ceres">C??ceres</option>
                                            <option value="Cachipay">Cachipay</option>
                                            <option value="Cachir??">Cachir??</option>
                                            <option value="C??cota">C??cota</option>
                                            <option value="Caicedo">Caicedo</option>
                                            <option value="Caicedonia">Caicedonia</option>
                                            <option value="Caimito">Caimito</option>
                                            <option value="Cajamarca">Cajamarca</option>
                                            <option value="Cajib??o">Cajib??o</option>
                                            <option value="Cajic??">Cajic??</option>
                                            <option value="Calamar">Calamar</option>
                                            <option value="Calamar">Calamar</option>
                                            <option value="Calarca">Calarca</option>
                                            <option value="Caldas">Caldas</option>
                                            <option value="Caldas">Caldas</option>
                                            <option value="Caldono">Caldono</option>
                                            <option value="Cali">Cali</option>
                                            <option value="California">California</option>
                                            <option value="Calima">Calima</option>
                                            <option value="Caloto">Caloto</option>
                                            <option value="Campamento">Campamento</option>
                                            <option value="Campo de la Cruz">Campo de la Cruz</option>
                                            <option value="Campoalegre">Campoalegre</option>
                                            <option value="Campohermoso">Campohermoso</option>
                                            <option value="Canalete">Canalete</option>
                                            <option value="Ca??asgordas">Ca??asgordas</option>
                                            <option value="Candelaria">Candelaria</option>
                                            <option value="Candelaria">Candelaria</option>
                                            <option value="Cantagallo">Cantagallo</option>
                                            <option value="Caparrap??">Caparrap??</option>
                                            <option value="Capitanejo">Capitanejo</option>
                                            <option value="Caqueza">Caqueza</option>
                                            <option value="Caracol??">Caracol??</option>
                                            <option value="Caramanta">Caramanta</option>
                                            <option value="Carcas??">Carcas??</option>
                                            <option value="Carepa">Carepa</option>
                                            <option value="Carmen de Apical??">Carmen de Apical??</option>
                                            <option value="Carmen de Carupa">Carmen de Carupa</option>
                                            <option value="Carmen del Darien">Carmen del Darien</option>
                                            <option value="Carolina">Carolina</option>
                                            <option value="Cartagena">Cartagena</option>
                                            <option value="Cartagena del Chair??">Cartagena del Chair??</option>
                                            <option value="Cartago">Cartago</option>
                                            <option value="Caruru">Caruru</option>
                                            <option value="Casabianca">Casabianca</option>
                                            <option value="Castilla La Nueva">Castilla La Nueva</option>
                                            <option value="Caucasia">Caucasia</option>
                                            <option value="Cepit??">Cepit??</option>
                                            <option value="Ceret??">Ceret??</option>
                                            <option value="Cerinza">Cerinza</option>
                                            <option value="Cerrito">Cerrito</option>
                                            <option value="Cerro San Antonio">Cerro San Antonio</option>
                                            <option value="C??rtegui">C??rtegui</option>
                                            <option value="Chachag????">Chachag????</option>
                                            <option value="Chaguan??">Chaguan??</option>
                                            <option value="Chal??n">Chal??n</option>
                                            <option value="Chameza">Chameza</option>
                                            <option value="Chaparral">Chaparral</option>
                                            <option value="Charal??">Charal??</option>
                                            <option value="Charta">Charta</option>
                                            <option value="Ch??a">Ch??a</option>
                                            <option value="Chibolo">Chibolo</option>
                                            <option value="Chigorod??">Chigorod??</option>
                                            <option value="Chima">Chima</option>
                                            <option value="Chim??">Chim??</option>
                                            <option value="Chimichagua">Chimichagua</option>
                                            <option value="Chin??cota">Chin??cota</option>
                                            <option value="Chinavita">Chinavita</option>
                                            <option value="Chinchin??">Chinchin??</option>
                                            <option value="Chin??">Chin??</option>
                                            <option value="Chipaque">Chipaque</option>
                                            <option value="Chipat??">Chipat??</option>
                                            <option value="Chiquinquir??">Chiquinquir??</option>
                                            <option value="Ch??quiza">Ch??quiza</option>
                                            <option value="Chiriguan??">Chiriguan??</option>
                                            <option value="Chiscas">Chiscas</option>
                                            <option value="Chita">Chita</option>
                                            <option value="Chitag??">Chitag??</option>
                                            <option value="Chitaraque">Chitaraque</option>
                                            <option value="Chivat??">Chivat??</option>
                                            <option value="Chivor">Chivor</option>
                                            <option value="Choach??">Choach??</option>
                                            <option value="Chocont??">Chocont??</option>
                                            <option value="Cicuco">Cicuco</option>
                                            <option value="Ci??naga">Ci??naga</option>
                                            <option value="Ci??naga de Oro">Ci??naga de Oro</option>
                                            <option value="Ci??nega">Ci??nega</option>
                                            <option value="Cimitarra">Cimitarra</option>
                                            <option value="Circasia">Circasia</option>
                                            <option value="Cisneros">Cisneros</option>
                                            <option value="Ciudad Bol??var">Ciudad Bol??var</option>
                                            <option value="Clemencia">Clemencia</option>
                                            <option value="Cocorn??">Cocorn??</option>
                                            <option value="Coello">Coello</option>
                                            <option value="Cogua">Cogua</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Col??n">Col??n</option>
                                            <option value="Col??n">Col??n</option>
                                            <option value="Coloso">Coloso</option>
                                            <option value="C??mbita">C??mbita</option>
                                            <option value="Concepci??n">Concepci??n</option>
                                            <option value="Concepci??n">Concepci??n</option>
                                            <option value="Concordia">Concordia</option>
                                            <option value="Concordia">Concordia</option>
                                            <option value="Condoto">Condoto</option>
                                            <option value="Confines">Confines</option>
                                            <option value="Consaca">Consaca</option>
                                            <option value="Contadero">Contadero</option>
                                            <option value="Contrataci??n">Contrataci??n</option>
                                            <option value="Convenci??n">Convenci??n</option>
                                            <option value="Copacabana">Copacabana</option>
                                            <option value="Coper">Coper</option>
                                            <option value="C??rdoba">C??rdoba</option>
                                            <option value="C??rdoba">C??rdoba</option>
                                            <option value="C??rdoba">C??rdoba</option>
                                            <option value="Corinto">Corinto</option>
                                            <option value="Coromoro">Coromoro</option>
                                            <option value="Corozal">Corozal</option>
                                            <option value="Corrales">Corrales</option>
                                            <option value="Cota">Cota</option>
                                            <option value="Cotorra">Cotorra</option>
                                            <option value="Covarach??a">Covarach??a</option>
                                            <option value="Cove??as">Cove??as</option>
                                            <option value="Coyaima">Coyaima</option>
                                            <option value="Cravo Norte">Cravo Norte</option>
                                            <option value="Cuaspud">Cuaspud</option>
                                            <option value="Cubar??">Cubar??</option>
                                            <option value="Cubarral">Cubarral</option>
                                            <option value="Cucaita">Cucaita</option>
                                            <option value="Cucunub??">Cucunub??</option>
                                            <option value="C??cuta">C??cuta</option>
                                            <option value="Cucutilla">Cucutilla</option>
                                            <option value="Cu??tiva">Cu??tiva</option>
                                            <option value="Cumaral">Cumaral</option>
                                            <option value="Cumaribo">Cumaribo</option>
                                            <option value="Cumbal">Cumbal</option>
                                            <option value="Cumbitara">Cumbitara</option>
                                            <option value="Cunday">Cunday</option>
                                            <option value="Curillo">Curillo</option>
                                            <option value="Curit??">Curit??</option>
                                            <option value="Curuman??">Curuman??</option>
                                            <option value="Dabeiba">Dabeiba</option>
                                            <option value="Dagua">Dagua</option>
                                            <option value="Dibulla">Dibulla</option>
                                            <option value="Distracci??n">Distracci??n</option>
                                            <option value="Dolores">Dolores</option>
                                            <option value="Don Mat??as">Don Mat??as</option>
                                            <option value="Dosquebradas">Dosquebradas</option>
                                            <option value="Duitama">Duitama</option>
                                            <option value="Durania">Durania</option>
                                            <option value="Eb??jico">Eb??jico</option>
                                            <option value="El ??guila">El ??guila</option>
                                            <option value="El Bagre">El Bagre</option>
                                            <option value="El Banco">El Banco</option>
                                            <option value="El Cairo">El Cairo</option>
                                            <option value="El Calvario">El Calvario</option>
                                            <option value="El Cant??n del San Pablo">El Cant??n del San Pablo</option>
                                            <option value="El Carmen">El Carmen</option>
                                            <option value="El Carmen de Atrato">El Carmen de Atrato</option>
                                            <option value="El Carmen de Bol??var">El Carmen de Bol??var</option>
                                            <option value="El Carmen de Chucur??">El Carmen de Chucur??</option>
                                            <option value="El Carmen de Viboral">El Carmen de Viboral</option>
                                            <option value="El Castillo">El Castillo</option>
                                            <option value="El Cerrito">El Cerrito</option>
                                            <option value="El Charco">El Charco</option>
                                            <option value="El Cocuy">El Cocuy</option>
                                            <option value="El Colegio">El Colegio</option>
                                            <option value="El Copey">El Copey</option>
                                            <option value="El Doncello">El Doncello</option>
                                            <option value="El Dorado">El Dorado</option>
                                            <option value="El Dovio">El Dovio</option>
                                            <option value="El encanto">El encanto</option>
                                            <option value="El Espino">El Espino</option>
                                            <option value="El Guacamayo">El Guacamayo</option>
                                            <option value="El Guamo">El Guamo</option>
                                            <option value="El Litoral del San Juan">El Litoral del San Juan</option>
                                            <option value="El Molino">El Molino</option>
                                            <option value="El Paso">El Paso</option>
                                            <option value="El Paujil">El Paujil</option>
                                            <option value="El Pe??ol">El Pe??ol</option>
                                            <option value="El Pe????n">El Pe????n</option>
                                            <option value="El Pe????n">El Pe????n</option>
                                            <option value="El Pe????n">El Pe????n</option>
                                            <option value="El Pi??on">El Pi??on</option>
                                            <option value="El Play??n">El Play??n</option>
                                            <option value="El Ret??n">El Ret??n</option>
                                            <option value="El Retorno">El Retorno</option>
                                            <option value="El Roble">El Roble</option>
                                            <option value="El Rosal">El Rosal</option>
                                            <option value="El Rosario">El Rosario</option>
                                            <option value="El Santuario">El Santuario</option>
                                            <option value="El Tabl??n de G??mez">El Tabl??n de G??mez</option>
                                            <option value="El Tambo">El Tambo</option>
                                            <option value="El Tambo">El Tambo</option>
                                            <option value="El Tarra">El Tarra</option>
                                            <option value="El Zulia">El Zulia</option>
                                            <option value="El??as">El??as</option>
                                            <option value="Encino">Encino</option>
                                            <option value="Enciso">Enciso</option>
                                            <option value="Entrerrios">Entrerrios</option>
                                            <option value="Envigado">Envigado</option>
                                            <option value="Espinal">Espinal</option>
                                            <option value="Facatativ??">Facatativ??</option>
                                            <option value="Falan">Falan</option>
                                            <option value="Filadelfia">Filadelfia</option>
                                            <option value="Filandia">Filandia</option>
                                            <option value="Firavitoba">Firavitoba</option>
                                            <option value="Flandes">Flandes</option>
                                            <option value="Florencia">Florencia</option>
                                            <option value="Florencia">Florencia</option>
                                            <option value="Floresta">Floresta</option>
                                            <option value="Flori??n">Flori??n</option>
                                            <option value="Florida">Florida</option>
                                            <option value="Floridablanca">Floridablanca</option>
                                            <option value="Fomeque">Fomeque</option>
                                            <option value="Fonseca">Fonseca</option>
                                            <option value="Fortul">Fortul</option>
                                            <option value="Fosca">Fosca</option>
                                            <option value="Francisco Pizarro">Francisco Pizarro</option>
                                            <option value="Fredonia">Fredonia</option>
                                            <option value="Fresno">Fresno</option>
                                            <option value="Frontino">Frontino</option>
                                            <option value="Fuente de Oro">Fuente de Oro</option>
                                            <option value="Fundaci??n">Fundaci??n</option>
                                            <option value="Funes">Funes</option>
                                            <option value="Funza">Funza</option>
                                            <option value="F??quene">F??quene</option>
                                            <option value="Fusagasug??">Fusagasug??</option>
                                            <option value="Gachala">Gachala</option>
                                            <option value="Gachancip??">Gachancip??</option>
                                            <option value="Gachantiv??">Gachantiv??</option>
                                            <option value="Gachet??">Gachet??</option>
                                            <option value="Gal??n">Gal??n</option>
                                            <option value="Galapa">Galapa</option>
                                            <option value="Galeras">Galeras</option>
                                            <option value="Gama">Gama</option>
                                            <option value="Gamarra">Gamarra</option>
                                            <option value="Gambita">Gambita</option>
                                            <option value="Gameza">Gameza</option>
                                            <option value="Garagoa">Garagoa</option>
                                            <option value="Garz??n">Garz??n</option>
                                            <option value="G??nova">G??nova</option>
                                            <option value="Gigante">Gigante</option>
                                            <option value="Ginebra">Ginebra</option>
                                            <option value="Giraldo">Giraldo</option>
                                            <option value="Girardot">Girardot</option>
                                            <option value="Girardota">Girardota</option>
                                            <option value="Gir??n">Gir??n</option>
                                            <option value="G??mez Plata">G??mez Plata</option>
                                            <option value="Gonz??lez">Gonz??lez</option>
                                            <option value="Gramalote">Gramalote</option>
                                            <option value="Granada">Granada</option>
                                            <option value="Granada">Granada</option>
                                            <option value="Granada">Granada</option>
                                            <option value="Guaca">Guaca</option>
                                            <option value="Guacamayas">Guacamayas</option>
                                            <option value="Guacar??">Guacar??</option>
                                            <option value="Guachet??">Guachet??</option>
                                            <option value="Guachucal">Guachucal</option>
                                            <option value="Guadalupe">Guadalupe</option>
                                            <option value="Guadalupe">Guadalupe</option>
                                            <option value="Guadalupe">Guadalupe</option>
                                            <option value="Guaduas">Guaduas</option>
                                            <option value="Guaitarilla">Guaitarilla</option>
                                            <option value="Gualmat??n">Gualmat??n</option>
                                            <option value="Guamal">Guamal</option>
                                            <option value="Guamal">Guamal</option>
                                            <option value="Guamo">Guamo</option>
                                            <option value="Guapi">Guapi</option>
                                            <option value="Guapot??">Guapot??</option>
                                            <option value="Guaranda">Guaranda</option>
                                            <option value="Guarne">Guarne</option>
                                            <option value="Guasca">Guasca</option>
                                            <option value="Guatape">Guatape</option>
                                            <option value="Guataqu??">Guataqu??</option>
                                            <option value="Guatavita">Guatavita</option>
                                            <option value="Guateque">Guateque</option>
                                            <option value="Gu??tica">Gu??tica</option>
                                            <option value="Guavat??">Guavat??</option>
                                            <option value="Guayabal de Siquima">Guayabal de Siquima</option>
                                            <option value="Guayabetal">Guayabetal</option>
                                            <option value="Guayat??">Guayat??</option>
                                            <option value="G??epsa">G??epsa</option>
                                            <option value="G??ic??n">G??ic??n</option>
                                            <option value="Guti??rrez">Guti??rrez</option>
                                            <option value="Hacar??">Hacar??</option>
                                            <option value="Hatillo de Loba">Hatillo de Loba</option>
                                            <option value="Hato">Hato</option>
                                            <option value="Hato Corozal">Hato Corozal</option>
                                            <option value="Hatonuevo">Hatonuevo</option>
                                            <option value="Heliconia">Heliconia</option>
                                            <option value="Herr??n">Herr??n</option>
                                            <option value="Herveo">Herveo</option>
                                            <option value="Hispania">Hispania</option>
                                            <option value="Hobo">Hobo</option>
                                            <option value="Honda">Honda</option>
                                            <option value="Ibagu??">Ibagu??</option>
                                            <option value="Icononzo">Icononzo</option>
                                            <option value="Iles">Iles</option>
                                            <option value="Imu??s">Imu??s</option>
                                            <option value="In??rida">In??rida</option>
                                            <option value="Inz??">Inz??</option>
                                            <option value="Ipiales">Ipiales</option>
                                            <option value="Iquira">Iquira</option>
                                            <option value="Isnos">Isnos</option>
                                            <option value="Istmina">Istmina</option>
                                            <option value="Itagui">Itagui</option>
                                            <option value="Ituango">Ituango</option>
                                            <option value="Iza">Iza</option>
                                            <option value="Jambal??">Jambal??</option>
                                            <option value="Jamund??">Jamund??</option>
                                            <option value="Jard??n">Jard??n</option>
                                            <option value="Jenesano">Jenesano</option>
                                            <option value="Jeric??">Jeric??</option>
                                            <option value="Jeric??">Jeric??</option>
                                            <option value="Jerusal??n">Jerusal??n</option>
                                            <option value="Jes??s Mar??a">Jes??s Mar??a</option>
                                            <option value="Jord??n">Jord??n</option>
                                            <option value="Juan de Acosta">Juan de Acosta</option>
                                            <option value="Jun??n">Jun??n</option>
                                            <option value="Jurad??">Jurad??</option>
                                            <option value="La Apartada">La Apartada</option>
                                            <option value="La Argentina">La Argentina</option>
                                            <option value="La Belleza">La Belleza</option>
                                            <option value="La Calera">La Calera</option>
                                            <option value="La Capilla">La Capilla</option>
                                            <option value="La Ceja">La Ceja</option>
                                            <option value="La Celia">La Celia</option>
                                            <option value="La chorrera">La chorrera</option>
                                            <option value="La Cruz">La Cruz</option>
                                            <option value="La Cumbre">La Cumbre</option>
                                            <option value="La Dorada">La Dorada</option>
                                            <option value="La Esperanza">La Esperanza</option>
                                            <option value="La Estrella">La Estrella</option>
                                            <option value="La Florida">La Florida</option>
                                            <option value="La Gloria">La Gloria</option>
                                            <option value="La Guadalupe">La Guadalupe</option>
                                            <option value="La Jagua de Ibirico">La Jagua de Ibirico</option>
                                            <option value="La Jagua del Pilar">La Jagua del Pilar</option>
                                            <option value="La Llanada">La Llanada</option>
                                            <option value="La Macarena">La Macarena</option>
                                            <option value="La Merced">La Merced</option>
                                            <option value="La Mesa">La Mesa</option>
                                            <option value="La Monta??ita">La Monta??ita</option>
                                            <option value="La Palma">La Palma</option>
                                            <option value="La Paz">La Paz</option>
                                            <option value="La Paz">La Paz</option>
                                            <option value="La pedrera">La pedrera</option>
                                            <option value="La Pe??a">La Pe??a</option>
                                            <option value="La Pintada">La Pintada</option>
                                            <option value="La Plata">La Plata</option>
                                            <option value="La Playa">La Playa</option>
                                            <option value="La Primavera">La Primavera</option>
                                            <option value="La Salina">La Salina</option>
                                            <option value="La Sierra">La Sierra</option>
                                            <option value="La Tebaida">La Tebaida</option>
                                            <option value="La Tola">La Tola</option>
                                            <option value="La Uni??n">La Uni??n</option>
                                            <option value="La Uni??n">La Uni??n</option>
                                            <option value="La Uni??n">La Uni??n</option>
                                            <option value="La Uni??n">La Uni??n</option>
                                            <option value="La Uvita">La Uvita</option>
                                            <option value="La Vega">La Vega</option>
                                            <option value="La Vega">La Vega</option>
                                            <option value="La Victoria">La Victoria</option>
                                            <option value="La Victoria">La Victoria</option>
                                            <option value="La victoria">La victoria</option>
                                            <option value="La Virginia">La Virginia</option>
                                            <option value="Labateca">Labateca</option>
                                            <option value="Labranzagrande">Labranzagrande</option>
                                            <option value="Land??zuri">Land??zuri</option>
                                            <option value="Lebr??ja">Lebr??ja</option>
                                            <option value="Legu??zamo">Legu??zamo</option>
                                            <option value="Leiva">Leiva</option>
                                            <option value="Lejan??as">Lejan??as</option>
                                            <option value="Lenguazaque">Lenguazaque</option>
                                            <option value="L??rida">L??rida</option>
                                            <option value="Leticia">Leticia</option>
                                            <option value="L??bano">L??bano</option>
                                            <option value="Liborina">Liborina</option>
                                            <option value="Linares">Linares</option>
                                            <option value="Llor??">Llor??</option>
                                            <option value="L??pez">L??pez</option>
                                            <option value="Lorica">Lorica</option>
                                            <option value="Los Andes">Los Andes</option>
                                            <option value="Los C??rdobas">Los C??rdobas</option>
                                            <option value="Los Palmitos">Los Palmitos</option>
                                            <option value="Los Patios">Los Patios</option>
                                            <option value="Los Santos">Los Santos</option>
                                            <option value="Lourdes">Lourdes</option>
                                            <option value="Luruaco">Luruaco</option>
                                            <option value="Macanal">Macanal</option>
                                            <option value="Macaravita">Macaravita</option>
                                            <option value="Maceo">Maceo</option>
                                            <option value="Macheta">Macheta</option>
                                            <option value="Madrid">Madrid</option>
                                            <option value="Magangu??">Magangu??</option>
                                            <option value="Mag??i">Mag??i</option>
                                            <option value="Mahates">Mahates</option>
                                            <option value="Maicao">Maicao</option>
                                            <option value="Majagual">Majagual</option>
                                            <option value="M??laga">M??laga</option>
                                            <option value="Malambo">Malambo</option>
                                            <option value="Mallama">Mallama</option>
                                            <option value="Manat??">Manat??</option>
                                            <option value="Manaure">Manaure</option>
                                            <option value="Manaure">Manaure</option>
                                            <option value="Man??">Man??</option>
                                            <option value="Manizales">Manizales</option>
                                            <option value="Manta">Manta</option>
                                            <option value="Manzanares">Manzanares</option>
                                            <option value="Mapirip??n">Mapirip??n</option>
                                            <option value="Mapiripana">Mapiripana</option>
                                            <option value="Margarita">Margarita</option>
                                            <option value="Mar??a La Baja">Mar??a La Baja</option>
                                            <option value="Marinilla">Marinilla</option>
                                            <option value="Marip??">Marip??</option>
                                            <option value="Mariquita">Mariquita</option>
                                            <option value="Marmato">Marmato</option>
                                            <option value="Marquetalia">Marquetalia</option>
                                            <option value="Marsella">Marsella</option>
                                            <option value="Marulanda">Marulanda</option>
                                            <option value="Matanza">Matanza</option>
                                            <option value="Medell??n">Medell??n</option>
                                            <option value="Medina">Medina</option>
                                            <option value="Medio Atrato">Medio Atrato</option>
                                            <option value="Medio Baud??">Medio Baud??</option>
                                            <option value="Medio San Juan">Medio San Juan</option>
                                            <option value="Melgar">Melgar</option>
                                            <option value="Mercaderes">Mercaderes</option>
                                            <option value="Mesetas">Mesetas</option>
                                            <option value="Mil??n">Mil??n</option>
                                            <option value="Miraflores">Miraflores</option>
                                            <option value="Miraflores">Miraflores</option>
                                            <option value="Miranda">Miranda</option>
                                            <option value="Miriti Paran??">Miriti Paran??</option>
                                            <option value="Mistrat??">Mistrat??</option>
                                            <option value="Mit??">Mit??</option>
                                            <option value="Mocoa">Mocoa</option>
                                            <option value="Mogotes">Mogotes</option>
                                            <option value="Molagavita">Molagavita</option>
                                            <option value="Momil">Momil</option>
                                            <option value="Momp??s">Momp??s</option>
                                            <option value="Mongua">Mongua</option>
                                            <option value="Mongu??">Mongu??</option>
                                            <option value="Moniquir??">Moniquir??</option>
                                            <option value="Mo??itos">Mo??itos</option>
                                            <option value="Montebello">Montebello</option>
                                            <option value="Montecristo">Montecristo</option>
                                            <option value="Montel??bano">Montel??bano</option>
                                            <option value="Montenegro">Montenegro</option>
                                            <option value="Monter??a">Monter??a</option>
                                            <option value="Monterrey">Monterrey</option>
                                            <option value="Morales">Morales</option>
                                            <option value="Morales">Morales</option>
                                            <option value="Morelia">Morelia</option>
                                            <option value="Morichal">Morichal</option>
                                            <option value="Morroa">Morroa</option>
                                            <option value="Mosquera">Mosquera</option>
                                            <option value="Mosquera">Mosquera</option>
                                            <option value="Motavita">Motavita</option>
                                            <option value="Murillo">Murillo</option>
                                            <option value="Murind??">Murind??</option>
                                            <option value="Mutat??">Mutat??</option>
                                            <option value="Mutiscua">Mutiscua</option>
                                            <option value="Muzo">Muzo</option>
                                            <option value="Nari??o">Nari??o</option>
                                            <option value="Nari??o">Nari??o</option>
                                            <option value="Nari??o">Nari??o</option>
                                            <option value="N??taga">N??taga</option>
                                            <option value="Natagaima">Natagaima</option>
                                            <option value="Nech??">Nech??</option>
                                            <option value="Necocl??">Necocl??</option>
                                            <option value="Neira">Neira</option>
                                            <option value="Neiva">Neiva</option>
                                            <option value="Nemoc??n">Nemoc??n</option>
                                            <option value="Nilo">Nilo</option>
                                            <option value="Nimaima">Nimaima</option>
                                            <option value="Nobsa">Nobsa</option>
                                            <option value="Nocaima">Nocaima</option>
                                            <option value="Norcasia">Norcasia</option>
                                            <option value="N??vita">N??vita</option>
                                            <option value="Nueva Granada">Nueva Granada</option>
                                            <option value="Nuevo Col??n">Nuevo Col??n</option>
                                            <option value="Nunch??a">Nunch??a</option>
                                            <option value="Nuqu??">Nuqu??</option>
                                            <option value="Obando">Obando</option>
                                            <option value="Ocamonte">Ocamonte</option>
                                            <option value="Oca??a">Oca??a</option>
                                            <option value="Oiba">Oiba</option>
                                            <option value="Oicat??">Oicat??</option>
                                            <option value="Olaya">Olaya</option>
                                            <option value="Olaya Herrera">Olaya Herrera</option>
                                            <option value="Onzaga">Onzaga</option>
                                            <option value="Oporapa">Oporapa</option>
                                            <option value="Orito">Orito</option>
                                            <option value="Orocu??">Orocu??</option>
                                            <option value="Ortega">Ortega</option>
                                            <option value="Ospina">Ospina</option>
                                            <option value="Otanche">Otanche</option>
                                            <option value="Ovejas">Ovejas</option>
                                            <option value="Pachavita">Pachavita</option>
                                            <option value="Pacho">Pacho</option>
                                            <option value="Pacoa">Pacoa</option>
                                            <option value="P??cora">P??cora</option>
                                            <option value="Padilla">Padilla</option>
                                            <option value="Paez">Paez</option>
                                            <option value="P??ez">P??ez</option>
                                            <option value="Paicol">Paicol</option>
                                            <option value="Pailitas">Pailitas</option>
                                            <option value="Paime">Paime</option>
                                            <option value="Paipa">Paipa</option>
                                            <option value="Pajarito">Pajarito</option>
                                            <option value="Palermo">Palermo</option>
                                            <option value="Palestina">Palestina</option>
                                            <option value="Palestina">Palestina</option>
                                            <option value="Palmar">Palmar</option>
                                            <option value="Palmar de Varela">Palmar de Varela</option>
                                            <option value="Palmas del Socorro">Palmas del Socorro</option>
                                            <option value="Palmira">Palmira</option>
                                            <option value="Palmito">Palmito</option>
                                            <option value="Palocabildo">Palocabildo</option>
                                            <option value="Pamplona">Pamplona</option>
                                            <option value="Pamplonita">Pamplonita</option>
                                            <option value="Pana Pana">Pana Pana</option>
                                            <option value="Pandi">Pandi</option>
                                            <option value="Panqueba">Panqueba</option>
                                            <option value="Papunaua">Papunaua</option>
                                            <option value="P??ramo">P??ramo</option>
                                            <option value="Paratebueno">Paratebueno</option>
                                            <option value="Pasca">Pasca</option>
                                            <option value="Pasto">Pasto</option>
                                            <option value="Pat??a">Pat??a</option>
                                            <option value="Pauna">Pauna</option>
                                            <option value="Paya">Paya</option>
                                            <option value="Paz de Ariporo">Paz de Ariporo</option>
                                            <option value="Paz de R??o">Paz de R??o</option>
                                            <option value="Pedraza">Pedraza</option>
                                            <option value="Pelaya">Pelaya</option>
                                            <option value="Pe??ol">Pe??ol</option>
                                            <option value="Pensilvania">Pensilvania</option>
                                            <option value="Peque">Peque</option>
                                            <option value="Pereira">Pereira</option>
                                            <option value="Pesca">Pesca</option>
                                            <option value="Piamonte">Piamonte</option>
                                            <option value="Piedecuesta">Piedecuesta</option>
                                            <option value="Piedras">Piedras</option>
                                            <option value="Piendam??">Piendam??</option>
                                            <option value="Pijao">Pijao</option>
                                            <option value="Piji??o del Carmen">Piji??o del Carmen</option>
                                            <option value="Pinchote">Pinchote</option>
                                            <option value="Pinillos">Pinillos</option>
                                            <option value="Pioj??">Pioj??</option>
                                            <option value="Pisba">Pisba</option>
                                            <option value="Pital">Pital</option>
                                            <option value="Pitalito">Pitalito</option>
                                            <option value="Pivijay">Pivijay</option>
                                            <option value="Planadas">Planadas</option>
                                            <option value="Planeta Rica">Planeta Rica</option>
                                            <option value="Plato">Plato</option>
                                            <option value="Policarpa">Policarpa</option>
                                            <option value="Polonuevo">Polonuevo</option>
                                            <option value="Ponedera">Ponedera</option>
                                            <option value="Popay??n">Popay??n</option>
                                            <option value="Pore">Pore</option>
                                            <option value="Potos??">Potos??</option>
                                            <option value="Pradera">Pradera</option>
                                            <option value="Prado">Prado</option>
                                            <option value="Providencia">Providencia</option>
                                            <option value="Providencia">Providencia</option>
                                            <option value="Pueblo Bello">Pueblo Bello</option>
                                            <option value="Pueblo Nuevo">Pueblo Nuevo</option>
                                            <option value="Pueblo Rico">Pueblo Rico</option>
                                            <option value="Pueblorrico">Pueblorrico</option>
                                            <option value="Puebloviejo">Puebloviejo</option>
                                            <option value="Puente Nacional">Puente Nacional</option>
                                            <option value="Puerres">Puerres</option>
                                            <option value="Puerto Alegr??a">Puerto Alegr??a</option>
                                            <option value="Puerto Arica">Puerto Arica</option>
                                            <option value="Puerto As??s">Puerto As??s</option>
                                            <option value="Puerto Berr??o">Puerto Berr??o</option>
                                            <option value="Puerto Boyac??">Puerto Boyac??</option>
                                            <option value="Puerto Caicedo">Puerto Caicedo</option>
                                            <option value="Puerto Carre??o">Puerto Carre??o</option>
                                            <option value="Puerto Colombia">Puerto Colombia</option>
                                            <option value="Puerto Colombia">Puerto Colombia</option>
                                            <option value="Puerto Concordia">Puerto Concordia</option>
                                            <option value="Puerto Escondido">Puerto Escondido</option>
                                            <option value="Puerto Gait??n">Puerto Gait??n</option>
                                            <option value="Puerto Guzm??n">Puerto Guzm??n</option>
                                            <option value="Puerto Libertador">Puerto Libertador</option>
                                            <option value="Puerto Lleras">Puerto Lleras</option>
                                            <option value="Puerto L??pez">Puerto L??pez</option>
                                            <option value="Puerto Nare">Puerto Nare</option>
                                            <option value="Puerto Nari??o">Puerto Nari??o</option>
                                            <option value="Puerto Parra">Puerto Parra</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Puerto Rond??n">Puerto Rond??n</option>
                                            <option value="Puerto Salgar">Puerto Salgar</option>
                                            <option value="Puerto Santander">Puerto Santander</option>
                                            <option value="Puerto Santander">Puerto Santander</option>
                                            <option value="Puerto Tejada">Puerto Tejada</option>
                                            <option value="Puerto Triunfo">Puerto Triunfo</option>
                                            <option value="Puerto Wilches">Puerto Wilches</option>
                                            <option value="Pul??">Pul??</option>
                                            <option value="Pupiales">Pupiales</option>
                                            <option value="Purac??">Purac??</option>
                                            <option value="Purificaci??n">Purificaci??n</option>
                                            <option value="Pur??sima">Pur??sima</option>
                                            <option value="Quebradanegra">Quebradanegra</option>
                                            <option value="Quetame">Quetame</option>
                                            <option value="Quibd??">Quibd??</option>
                                            <option value="Quimbaya">Quimbaya</option>
                                            <option value="Quinch??a">Quinch??a</option>
                                            <option value="Qu??pama">Qu??pama</option>
                                            <option value="Quipile">Quipile</option>
                                            <option value="Ragonvalia">Ragonvalia</option>
                                            <option value="Ramiriqu??">Ramiriqu??</option>
                                            <option value="R??quira">R??quira</option>
                                            <option value="Recetor">Recetor</option>
                                            <option value="Regidor">Regidor</option>
                                            <option value="Remedios">Remedios</option>
                                            <option value="Remolino">Remolino</option>
                                            <option value="Repel??n">Repel??n</option>
                                            <option value="Restrepo">Restrepo</option>
                                            <option value="Restrepo">Restrepo</option>
                                            <option value="Retiro">Retiro</option>
                                            <option value="Ricaurte">Ricaurte</option>
                                            <option value="Ricaurte">Ricaurte</option>
                                            <option value="R??o de Oro">R??o de Oro</option>
                                            <option value="R??o Iro">R??o Iro</option>
                                            <option value="R??o Quito">R??o Quito</option>
                                            <option value="R??o Viejo">R??o Viejo</option>
                                            <option value="Rioblanco">Rioblanco</option>
                                            <option value="Riofr??o">Riofr??o</option>
                                            <option value="Riohacha">Riohacha</option>
                                            <option value="Rionegro">Rionegro</option>
                                            <option value="Rionegro">Rionegro</option>
                                            <option value="Riosucio">Riosucio</option>
                                            <option value="Riosucio">Riosucio</option>
                                            <option value="Risaralda">Risaralda</option>
                                            <option value="Rivera">Rivera</option>
                                            <option value="Roberto Pay??n">Roberto Pay??n</option>
                                            <option value="Roldanillo">Roldanillo</option>
                                            <option value="Roncesvalles">Roncesvalles</option>
                                            <option value="Rond??n">Rond??n</option>
                                            <option value="Rosas">Rosas</option>
                                            <option value="Rovira">Rovira</option>
                                            <option value="Sabana de Torres">Sabana de Torres</option>
                                            <option value="Sabanagrande">Sabanagrande</option>
                                            <option value="Sabanalarga">Sabanalarga</option>
                                            <option value="Sabanalarga">Sabanalarga</option>
                                            <option value="Sabanalarga">Sabanalarga</option>
                                            <option value="Sabanas de San Angel">Sabanas de San Angel</option>
                                            <option value="Sabaneta">Sabaneta</option>
                                            <option value="Saboy??">Saboy??</option>
                                            <option value="S??cama">S??cama</option>
                                            <option value="S??chica">S??chica</option>
                                            <option value="Sahag??n">Sahag??n</option>
                                            <option value="Saladoblanco">Saladoblanco</option>
                                            <option value="Salamina">Salamina</option>
                                            <option value="Salamina">Salamina</option>
                                            <option value="Salazar">Salazar</option>
                                            <option value="Salda??a">Salda??a</option>
                                            <option value="Salento">Salento</option>
                                            <option value="Salgar">Salgar</option>
                                            <option value="Samac??">Samac??</option>
                                            <option value="Saman??">Saman??</option>
                                            <option value="Samaniego">Samaniego</option>
                                            <option value="Sampu??s">Sampu??s</option>
                                            <option value="San Agust??n">San Agust??n</option>
                                            <option value="San Alberto">San Alberto</option>
                                            <option value="San Andr??s">San Andr??s</option>
                                            <option value="San Andr??s">San Andr??s</option>
                                            <option value="San Andr??s">San Andr??s</option>
                                            <option value="San Andr??s Sotavento">San Andr??s Sotavento</option>
                                            <option value="San Antero">San Antero</option>
                                            <option value="San Antonio">San Antonio</option>
                                            <option value="San Antonio del Tequendama">San Antonio del Tequendama</option>
                                            <option value="San Benito">San Benito</option>
                                            <option value="San Benito Abad">San Benito Abad</option>
                                            <option value="San Bernardo">San Bernardo</option>
                                            <option value="San Bernardo">San Bernardo</option>
                                            <option value="San Bernardo del Viento">San Bernardo del Viento</option>
                                            <option value="San Calixto">San Calixto</option>
                                            <option value="San Carlos">San Carlos</option>
                                            <option value="San Carlos">San Carlos</option>
                                            <option value="San Carlos de Guaroa">San Carlos de Guaroa</option>
                                            <option value="San Cayetano">San Cayetano</option>
                                            <option value="San Cayetano">San Cayetano</option>
                                            <option value="San Crist??bal">San Crist??bal</option>
                                            <option value="San Diego">San Diego</option>
                                            <option value="San Eduardo">San Eduardo</option>
                                            <option value="San Estanislao">San Estanislao</option>
                                            <option value="San Felipe">San Felipe</option>
                                            <option value="San Fernando">San Fernando</option>
                                            <option value="San Francisco">San Francisco</option>
                                            <option value="San Francisco">San Francisco</option>
                                            <option value="San Francisco">San Francisco</option>
                                            <option value="San Gil">San Gil</option>
                                            <option value="San Jacinto">San Jacinto</option>
                                            <option value="San Jacinto del Cauca">San Jacinto del Cauca</option>
                                            <option value="San Jer??nimo">San Jer??nimo</option>
                                            <option value="San Joaqu??n">San Joaqu??n</option>
                                            <option value="San Jos??">San Jos??</option>
                                            <option value="San Jos?? de la Monta??a">San Jos?? de la Monta??a</option>
                                            <option value="San Jos?? de Miranda">San Jos?? de Miranda</option>
                                            <option value="San Jos?? de Pare">San Jos?? de Pare</option>
                                            <option value="San Jos?? del Fragua">San Jos?? del Fragua</option>
                                            <option value="San Jos?? del Guaviare">San Jos?? del Guaviare</option>
                                            <option value="San Jos?? del Palmar">San Jos?? del Palmar</option>
                                            <option value="San Juan de Arama">San Juan de Arama</option>
                                            <option value="San Juan de Betulia">San Juan de Betulia</option>
                                            <option value="San Juan de R??o Seco">San Juan de R??o Seco</option>
                                            <option value="San Juan de Urab??">San Juan de Urab??</option>
                                            <option value="San Juan del Cesar">San Juan del Cesar</option>
                                            <option value="San Juan Nepomuceno">San Juan Nepomuceno</option>
                                            <option value="San Juanito">San Juanito</option>
                                            <option value="San Lorenzo">San Lorenzo</option>
                                            <option value="San Luis">San Luis</option>
                                            <option value="San Luis">San Luis</option>
                                            <option value="San Luis de Gaceno">San Luis de Gaceno</option>
                                            <option value="San Luis de Palenque">San Luis de Palenque</option>
                                            <option value="San Marcos">San Marcos</option>
                                            <option value="San Mart??n">San Mart??n</option>
                                            <option value="San Mart??n">San Mart??n</option>
                                            <option value="San Mart??n de Loba">San Mart??n de Loba</option>
                                            <option value="San Mateo">San Mateo</option>
                                            <option value="San Miguel">San Miguel</option>
                                            <option value="San Miguel">San Miguel</option>
                                            <option value="San Miguel de Sema">San Miguel de Sema</option>
                                            <option value="San Onofre">San Onofre</option>
                                            <option value="San Pablo">San Pablo</option>
                                            <option value="San Pablo">San Pablo</option>
                                            <option value="San Pablo de Borbur">San Pablo de Borbur</option>
                                            <option value="San Pedro">San Pedro</option>
                                            <option value="San Pedro">San Pedro</option>
                                            <option value="San Pedro">San Pedro</option>
                                            <option value="San Pedro de Cartago">San Pedro de Cartago</option>
                                            <option value="San Pedro de Uraba">San Pedro de Uraba</option>
                                            <option value="San Pelayo">San Pelayo</option>
                                            <option value="San Rafael">San Rafael</option>
                                            <option value="San Roque">San Roque</option>
                                            <option value="San Sebasti??n">San Sebasti??n</option>
                                            <option value="San Sebasti??n de Buenavista">San Sebasti??n de Buenavista</option>
                                            <option value="San Vicente">San Vicente</option>
                                            <option value="San Vicente de Chucur??">San Vicente de Chucur??</option>
                                            <option value="San Vicente del Cagu??n">San Vicente del Cagu??n</option>
                                            <option value="San Zen??n">San Zen??n</option>
                                            <option value="Sandon??">Sandon??</option>
                                            <option value="Santa Ana">Santa Ana</option>
                                            <option value="Santa B??rbara">Santa B??rbara</option>
                                            <option value="Santa B??rbara">Santa B??rbara</option>
                                            <option value="Santa B??rbara">Santa B??rbara</option>
                                            <option value="Santa B??rbara de Pinto">Santa B??rbara de Pinto</option>
                                            <option value="Santa Catalina">Santa Catalina</option>
                                            <option value="Santa Helena del Op??n">Santa Helena del Op??n</option>
                                            <option value="Santa Isabel">Santa Isabel</option>
                                            <option value="Santa Luc??a">Santa Luc??a</option>
                                            <option value="Santa Mar??a">Santa Mar??a</option>
                                            <option value="Santa Mar??a">Santa Mar??a</option>
                                            <option value="Santa Marta">Santa Marta</option>
                                            <option value="Santa Rosa">Santa Rosa</option>
                                            <option value="Santa Rosa">Santa Rosa</option>
                                            <option value="Santa Rosa de Cabal">Santa Rosa de Cabal</option>
                                            <option value="Santa Rosa de Osos">Santa Rosa de Osos</option>
                                            <option value="Santa Rosa de Viterbo">Santa Rosa de Viterbo</option>
                                            <option value="Santa Rosa del Sur">Santa Rosa del Sur</option>
                                            <option value="Santa Rosal??a">Santa Rosal??a</option>
                                            <option value="Santa Sof??a">Santa Sof??a</option>
                                            <option value="Santacruz">Santacruz</option>
                                            <option value="Santaf?? de Antioquia">Santaf?? de Antioquia</option>
                                            <option value="Santana">Santana</option>
                                            <option value="Santander de Quilichao">Santander de Quilichao</option>
                                            <option value="Santiago">Santiago</option>
                                            <option value="Santiago">Santiago</option>
                                            <option value="Santiago de Tol??">Santiago de Tol??</option>
                                            <option value="Santo Domingo">Santo Domingo</option>
                                            <option value="Santo Tom??s">Santo Tom??s</option>
                                            <option value="Santuario">Santuario</option>
                                            <option value="Sapuyes">Sapuyes</option>
                                            <option value="Saravena">Saravena</option>
                                            <option value="Sardinata">Sardinata</option>
                                            <option value="Sasaima">Sasaima</option>
                                            <option value="Sativanorte">Sativanorte</option>
                                            <option value="Sativasur">Sativasur</option>
                                            <option value="Segovia">Segovia</option>
                                            <option value="Sesquil??">Sesquil??</option>
                                            <option value="Sevilla">Sevilla</option>
                                            <option value="Siachoque">Siachoque</option>
                                            <option value="Sibat??">Sibat??</option>
                                            <option value="Sibundoy">Sibundoy</option>
                                            <option value="Silos">Silos</option>
                                            <option value="Silvania">Silvania</option>
                                            <option value="Silvia">Silvia</option>
                                            <option value="Simacota">Simacota</option>
                                            <option value="Simijaca">Simijaca</option>
                                            <option value="Simit??">Simit??</option>
                                            <option value="Sinc??">Sinc??</option>
                                            <option value="Sincelejo">Sincelejo</option>
                                            <option value="Sip??">Sip??</option>
                                            <option value="Sitionuevo">Sitionuevo</option>
                                            <option value="Soacha">Soacha</option>
                                            <option value="Soat??">Soat??</option>
                                            <option value="Socha">Socha</option>
                                            <option value="Socorro">Socorro</option>
                                            <option value="Socot??">Socot??</option>
                                            <option value="Sogamoso">Sogamoso</option>
                                            <option value="Solano">Solano</option>
                                            <option value="Soledad">Soledad</option>
                                            <option value="Solita">Solita</option>
                                            <option value="Somondoco">Somondoco</option>
                                            <option value="Sonson">Sonson</option>
                                            <option value="Sopetr??n">Sopetr??n</option>
                                            <option value="Soplaviento">Soplaviento</option>
                                            <option value="Sop??">Sop??</option>
                                            <option value="Sora">Sora</option>
                                            <option value="Sorac??">Sorac??</option>
                                            <option value="Sotaquir??">Sotaquir??</option>
                                            <option value="Sotara">Sotara</option>
                                            <option value="Suaita">Suaita</option>
                                            <option value="Suan">Suan</option>
                                            <option value="Su??rez">Su??rez</option>
                                            <option value="Su??rez">Su??rez</option>
                                            <option value="Suaza">Suaza</option>
                                            <option value="Subachoque">Subachoque</option>
                                            <option value="Sucre">Sucre</option>
                                            <option value="Sucre">Sucre</option>
                                            <option value="Sucre">Sucre</option>
                                            <option value="Suesca">Suesca</option>
                                            <option value="Supat??">Supat??</option>
                                            <option value="Sup??a">Sup??a</option>
                                            <option value="Surat??">Surat??</option>
                                            <option value="Susa">Susa</option>
                                            <option value="Susac??n">Susac??n</option>
                                            <option value="Sutamarch??n">Sutamarch??n</option>
                                            <option value="Sutatausa">Sutatausa</option>
                                            <option value="Sutatenza">Sutatenza</option>
                                            <option value="Tabio">Tabio</option>
                                            <option value="Tad??">Tad??</option>
                                            <option value="Talaigua Nuevo">Talaigua Nuevo</option>
                                            <option value="Tamalameque">Tamalameque</option>
                                            <option value="T??mara">T??mara</option>
                                            <option value="Tame">Tame</option>
                                            <option value="T??mesis">T??mesis</option>
                                            <option value="Taminango">Taminango</option>
                                            <option value="Tangua">Tangua</option>
                                            <option value="Taraira">Taraira</option>
                                            <option value="Tarapac??">Tarapac??</option>
                                            <option value="Taraz??">Taraz??</option>
                                            <option value="Tarqui">Tarqui</option>
                                            <option value="Tarso">Tarso</option>
                                            <option value="Tasco">Tasco</option>
                                            <option value="Tauramena">Tauramena</option>
                                            <option value="Tausa">Tausa</option>
                                            <option value="Tello">Tello</option>
                                            <option value="Tena">Tena</option>
                                            <option value="Tenerife">Tenerife</option>
                                            <option value="Tenjo">Tenjo</option>
                                            <option value="Tenza">Tenza</option>
                                            <option value="Teorama">Teorama</option>
                                            <option value="Teruel">Teruel</option>
                                            <option value="Tesalia">Tesalia</option>
                                            <option value="Tibacuy">Tibacuy</option>
                                            <option value="Tiban??">Tiban??</option>
                                            <option value="Tibasosa">Tibasosa</option>
                                            <option value="Tibirita">Tibirita</option>
                                            <option value="Tib??">Tib??</option>
                                            <option value="Tierralta">Tierralta</option>
                                            <option value="Timan??">Timan??</option>
                                            <option value="Timb??o">Timb??o</option>
                                            <option value="Timbiqu??">Timbiqu??</option>
                                            <option value="Tinjac??">Tinjac??</option>
                                            <option value="Tipacoque">Tipacoque</option>
                                            <option value="Tiquisio">Tiquisio</option>
                                            <option value="Titirib??">Titirib??</option>
                                            <option value="Toca">Toca</option>
                                            <option value="Tocaima">Tocaima</option>
                                            <option value="Tocancip??">Tocancip??</option>
                                            <option value="Tog????">Tog????</option>
                                            <option value="Toledo">Toledo</option>
                                            <option value="Toledo">Toledo</option>
                                            <option value="Tol?? Viejo">Tol?? Viejo</option>
                                            <option value="Tona">Tona</option>
                                            <option value="T??paga">T??paga</option>
                                            <option value="Topaip??">Topaip??</option>
                                            <option value="Toribio">Toribio</option>
                                            <option value="Toro">Toro</option>
                                            <option value="Tota">Tota</option>
                                            <option value="Totor??">Totor??</option>
                                            <option value="Trinidad">Trinidad</option>
                                            <option value="Trujillo">Trujillo</option>
                                            <option value="Tubar??">Tubar??</option>
                                            <option value="Tulu??">Tulu??</option>
                                            <option value="Tumaco">Tumaco</option>
                                            <option value="Tunja">Tunja</option>
                                            <option value="Tunungu??">Tunungu??</option>
                                            <option value="T??querres">T??querres</option>
                                            <option value="Turbaco">Turbaco</option>
                                            <option value="Turban??">Turban??</option>
                                            <option value="Turbo">Turbo</option>
                                            <option value="Turmequ??">Turmequ??</option>
                                            <option value="Tuta">Tuta</option>
                                            <option value="Tutaz??">Tutaz??</option>
                                            <option value="Ubal??">Ubal??</option>
                                            <option value="Ubaque">Ubaque</option>
                                            <option value="Ulloa">Ulloa</option>
                                            <option value="Umbita">Umbita</option>
                                            <option value="Une">Une</option>
                                            <option value="Ungu??a">Ungu??a</option>
                                            <option value="Uni??n Panamericana">Uni??n Panamericana</option>
                                            <option value="Uramita">Uramita</option>
                                            <option value="Uribe">Uribe</option>
                                            <option value="Uribia">Uribia</option>
                                            <option value="Urrao">Urrao</option>
                                            <option value="Urumita">Urumita</option>
                                            <option value="Usiacur??">Usiacur??</option>
                                            <option value="??tica">??tica</option>
                                            <option value="Valdivia">Valdivia</option>
                                            <option value="Valencia">Valencia</option>
                                            <option value="Valle de San Jos??">Valle de San Jos??</option>
                                            <option value="Valle de San Juan">Valle de San Juan</option>
                                            <option value="Valle del Guamuez">Valle del Guamuez</option>
                                            <option value="Valledupar">Valledupar</option>
                                            <option value="Valpara??so">Valpara??so</option>
                                            <option value="Valpara??so">Valpara??so</option>
                                            <option value="Vegach??">Vegach??</option>
                                            <option value="V??lez">V??lez</option>
                                            <option value="Venadillo">Venadillo</option>
                                            <option value="Venecia">Venecia</option>
                                            <option value="Venecia">Venecia</option>
                                            <option value="Ventaquemada">Ventaquemada</option>
                                            <option value="Vergara">Vergara</option>
                                            <option value="Versalles">Versalles</option>
                                            <option value="Vetas">Vetas</option>
                                            <option value="Vian??">Vian??</option>
                                            <option value="Victoria">Victoria</option>
                                            <option value="Vig??a del Fuerte">Vig??a del Fuerte</option>
                                            <option value="Vijes">Vijes</option>
                                            <option value="Villa Caro">Villa Caro</option>
                                            <option value="Villa de Leyva">Villa de Leyva</option>
                                            <option value="Villa de San Diego de Ubate">Villa de San Diego de Ubate</option>
                                            <option value="Villa del Rosario">Villa del Rosario</option>
                                            <option value="Villa Rica">Villa Rica</option>
                                            <option value="Villagarz??n">Villagarz??n</option>
                                            <option value="Villag??mez">Villag??mez</option>
                                            <option value="Villahermosa">Villahermosa</option>
                                            <option value="Villamar??a">Villamar??a</option>
                                            <option value="Villanueva">Villanueva</option>
                                            <option value="Villanueva">Villanueva</option>
                                            <option value="Villanueva">Villanueva</option>
                                            <option value="Villanueva">Villanueva</option>
                                            <option value="Villapinz??n">Villapinz??n</option>
                                            <option value="Villarrica">Villarrica</option>
                                            <option value="Villavicencio">Villavicencio</option>
                                            <option value="Villavieja">Villavieja</option>
                                            <option value="Villeta">Villeta</option>
                                            <option value="Viot??">Viot??</option>
                                            <option value="Viracach??">Viracach??</option>
                                            <option value="Vistahermosa">Vistahermosa</option>
                                            <option value="Viterbo">Viterbo</option>
                                            <option value="Yacop??">Yacop??</option>
                                            <option value="Yacuanquer">Yacuanquer</option>
                                            <option value="Yaguar??">Yaguar??</option>
                                            <option value="Yal??">Yal??</option>
                                            <option value="Yarumal">Yarumal</option>
                                            <option value="Yavarat??">Yavarat??</option>
                                            <option value="Yolomb??">Yolomb??</option>
                                            <option value="Yond??">Yond??</option>
                                            <option value="Yopal">Yopal</option>
                                            <option value="Yotoco">Yotoco</option>
                                            <option value="Yumbo">Yumbo</option>
                                            <option value="Zambrano">Zambrano</option>
                                            <option value="Zapatoca">Zapatoca</option>
                                            <option value="Zapay??n">Zapay??n</option>
                                            <option value="Zaragoza">Zaragoza</option>
                                            <option value="Zarzal">Zarzal</option>
                                            <option value="Zetaquira">Zetaquira</option>
                                            <option value="Zipac??n">Zipac??n</option>
                                            <option value="Zipaquir??">Zipaquir??</option>
                                            <option value="Zona Bananera">Zona Bananera</option>
                                        </select>

                </div>
              </div>
              <div class="col-lg-6">
              <small id="emailHelp" class="form-text text-muted">Seleccione fecha de naciemiento.</small>
                <div class="input-group mb-3" style="margin-bottom: 0rem !important;">
                  <input style="border-color: #9d7832;"  type="date" class="form-control" placeholder="fecha de nacimieto" name="fNacimiento" />
                </div>
                <small id="emailHelp" class="form-text text-muted" style="margin: 0;">Seleccione su genero.</small>
                <select
                  class="form-select mb-3"
                  id="op-m"
                  aria-label="Default select example"
                  name="genero"
                  style="margin-bottom: 0rem !important; border-color: #9d7832;"
                >
                  <option selected>Genero</option>
                  <option value="Masculino">Masculino</option>
                  <option value="Femenino">Femenino</option>
                  <option value="Otro">Otro</option>
                </select>
                <small id="emailHelp" class="form-text text-muted" style="margin: 0;">Seleccione su deporte favorito.</small>
                <select
                  class="form-select mb-3"
                  id="op-m"
                  aria-label="Default select example"
                  name="deporte"
                  style="margin-bottom: 0rem !important; border-color: #9d7832;"
                >
                  <option selected>Deporte Favorito</option>
                  <option value="futbol">futbol</option>
                  <option value="basketball">basketball</option>
                  <option value="voleiball">voleiball</option>
                </select>
                <small id="emailHelp" class="form-text text-muted" style="margin: 0;">Seleccione su rol.</small>
                <select
                  class="form-select mb-3"
                 
                  aria-label="Default select example"
                  name="rol"
                  id="select1" onChange="formRegistrer()"
                  style="margin-bottom: 0rem !important; border-color: #9d7832;"
                >
                  <option selected>Rol</option>
                  <option value="Deportista">Deportista</option>
                  <option value="Hunter">Hunter</option>
                  
                </select>
              
            
              </div>
            </div>
          <div>  
            <div id="text1" class="dNone">
                <small style="margin-top:  10px;" id="emailHelp" class="form-text text-muted">Seleccione documento de identidad.</small>
                  <label for="" style="padding:10px 0px 5px 20px!important;"class="centrar">Documento de identidad.</label>
                  <input type="file" name="cc" accept=".pdf">
                <small style="margin-top:  10px;" id="emailHelp" class="form-text text-muted">Seleccione Hoja de vida.</small>
                  <label for="" style="padding:10px 87px 5px 20px!important;" class="centrar">Hoja de vida.</label>
                  <input type="file" name="hv" accept=".pdf">
                <small style="margin-top:  10px;" id="emailHelp" class="form-text text-muted">Seleccione certificaci??n laboral.</small>
                  <label for="" style="padding:10px 30px 5px 20px!important;" class="centrar">Certificaci??n laboral.</label>
                  <input type="file" name="cl" accept=".pdf"> <br>
            </div>
          </div>  
              <div>
                <small id="emailHelp" class="form-text text-muted">Seleccione foto de perfil.</small>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" style="margin-left: 20px; border-left: groove; border-color: #9d7832;" id="inputGroupFileAddon01">Cargar</span>
                      </div>
                      <div class="custom-file" accept=".png, .jpg, .jpeg;">
                        <input type="file" name="imagen" accept=".png, .jpg, .jpeg;"  class="centrar" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                        <label  style="padding:5px!important; margin-right: 30px; border-color: #9d7832;" class="custom-file-label" for="inputGroupFile01">Elegir foto de perfil.</label>
                      </div>
                    </div>
                <small for="" class="centrar">Toda la informaci??n solicitada es netamente para la empresa UpDeport.</small>
              </div>            
                <div class="row" style="margin-top: 10px;">
              <div class="col-6">
                <div class="icheck-primary" style="margin-left: 30px !important; margin-top: -8px !important;">
                  <input
                    type="checkbox"
                    id="agreeTerms"
                    name="terms"
                    value="agree"
                  />
                  <label for="agreeTerms" onclick="formTerminos()">
                    Aceptar los <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">terminos</a>
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-6">
                <button type="submit" id="botonRegistrarse" class="btn btn-primary btn-block" disabled> 
                  Registrarse
                </button>
              </div>
              <!-- /.col -->
            </div>
          </form>

         

          <a href="login.php" class="text-center">Ya tengo una cuenta.</a>
        </div>
        <!-- /.form-box -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.register-box -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Terminos y condiciones</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      ??Te damos la bienvenida a UpDeport!

UpDeport desarrolla tecnolog??as y servicios que permiten a las personas conectarse entre s??, establecer comunidades y hacer crecer sus empresas. Estas Condiciones rigen el uso de UpDeport, Messenger y los productos, las funcionalidades, las aplicaciones, los servicios, las tecnolog??as y el software que ofrecemos (los Productos de UpDeport o Productos), excepto cuando indiquemos expresamente que se aplican otras condiciones distintas de estas. UpDeport, Inc. te proporciona estos Productos.

No te cobramos por el uso de UpDeport ni del resto de los productos y servicios que se incluyen en estas Condiciones. En su lugar, las empresas y organizaciones nos pagan por mostrarte publicidad sobre sus productos o servicios. Al usar nuestros Productos, aceptas que te mostremos anuncios que consideremos relevantes para ti y tus intereses. Usamos tus datos personales a la hora de determinar qu?? anuncios te mostramos.

No vendemos tus datos personales a los anunciantes ni compartimos ning??n tipo de informaci??n con ellos que te identifique directamente (como tu nombre, direcci??n de correo electr??nico u otros datos de contacto), a menos que nos des permiso espec??fico. En su lugar, los anunciantes nos proporcionan informaci??n, como el tipo de audiencia a la que quieren llegar con sus anuncios, y nosotros los mostramos a las personas que puedan estar interesadas en ellos. Asimismo, ofrecemos a los anunciantes informes sobre el rendimiento de su publicidad a fin de que sepan de qu?? manera interact??an las personas con su contenido. Consulta la Secci??n 2 a continuaci??n para obtener m??s informaci??n al respecto.

En nuestra Pol??tica de datos se detalla c??mo recopilamos y usamos tus datos personales para determinar algunos de los anuncios que ves y poder ofrecer el resto de los servicios que se describen a continuaci??n. En la configuraci??n tambi??n puedes revisar cuando quieras las opciones de privacidad de que dispones para determinar el uso que hacemos de tus datos.

1. Los servicios que ofrecemos
Nuestro objetivo es dar a las personas la posibilidad de crear comunidades y hacer del mundo un lugar m??s conectado, y, para ello, ponemos a tu disposici??n los Productos y servicios que se describen a continuaci??n:
Te proporcionamos una experiencia personalizada:
tus experiencias en UpDeport son distintas de las del resto de personas que usan la plataforma. Todos los aspectos est??n personalizados: desde las publicaciones, las historias, los anuncios y otros contenidos que ves en la secci??n de noticias o en nuestra plataforma de v??deo, hasta las p??ginas que sigues y otras funciones que quiz??s usas, como Tendencias, Marketplace y la b??squeda. Usamos los datos que tenemos, por ejemplo, los relativos a las conexiones que entablas, las opciones y los ajustes de configuraci??n que seleccionas, el tipo de contenido que compartes y las acciones que llevas a cabo en nuestros Productos o fuera de ellos para personalizar tu experiencia.
Te conectamos con las personas y las organizaciones que te interesan:
te ayudamos a encontrar personas, grupos, empresas, organizaciones y otras entidades que te interesan, as?? como a conectarte con ellos por medio de los Productos de UpDeport que usas. En funci??n de los datos que tenemos, te ofrecemos sugerencias a ti y a otras personas, tales como grupos a los que unirte, eventos a los que asistir, p??ginas que seguir o a las que enviar mensajes, programas que ver y personas que quiz??s quieras incluir en tu lista de amigos. Las comunidades funcionan mejor cuanto m??s estrechos son los lazos que unen a sus miembros, por eso creemos que nuestros servicios son m??s ??tiles si las personas se conectan con gente, grupos y organizaciones que les interesan.
Ayudarte a expresar tu opini??n y hablar sobre temas que te importan:
En UpDeport puedes expresarte y comunicarte con amigos, familiares y otras personas que te importan de distintas maneras. Por ejemplo, puedes compartir actualizaciones de estado, fotos, v??deos e historias en los diversos Productos de UpDeport que usas, enviar mensajes a un amigo o a varias personas, crear eventos o grupos, o a??adir contenido a tu perfil. Tambi??n hemos desarrollado, y seguimos buscando, nuevas formas de usar la tecnolog??a, como la realidad aumentada y los v??deos de 360??, para crear y compartir contenido m??s expresivo y atractivo en UpDeport.
Te ayudamos a descubrir contenido, productos y servicios que pueden interesarte:
te mostramos anuncios, ofertas y otro contenido patrocinado para que descubras el contenido, los productos y los servicios que ofrecen los numerosos negocios y organizaciones que usan UpDeport y los Productos de UpDeport. En la Secci??n 2 se explica este aspecto con m??s detalle.
Combatimos las conductas perjudiciales, y protegemos y apoyamos a nuestra comunidad:
Las personas solo crear??n comunidades en UpDeport si se sienten seguras. Contamos con equipos especializados en todo el mundo y desarrollamos sistemas t??cnicos avanzados para detectar si nuestros Productos se usan de forma inapropiada, si alguien muestra una conducta perjudicial para los dem??s y si surgen situaciones en las que podamos contribuir para ayudar o proteger a nuestra comunidad. Si tenemos constancia de contenido o conductas de este tipo, aplicaremos las medidas correspondientes, tales como ofrecer ayuda, eliminar el contenido, restringir el acceso a ciertas funcionalidades o eliminarlas, inhabilitar una cuenta o ponernos en contacto con los ??rganos encargados de hacer cumplir la ley. Compartimos datos con otras Empresas de UpDeport si detectamos que una persona usa alguno de nuestros Productos de forma inadecuada o muestra una conducta inapropiada.
Usamos y desarrollamos tecnolog??as avanzadas para ofrecer servicios seguros y funcionales a todo el mundo:
usamos y desarrollamos tecnolog??as avanzadas, tales como inteligencia artificial, sistemas de aprendizaje autom??tico y realidad aumentada, para que la gente pueda usar nuestros Productos de manera segura, independientemente de su capacidad f??sica o la regi??n geogr??fica donde se encuentre. Por ejemplo, este tipo de tecnolog??a indica a las personas con problemas de visi??n qu?? elemento o persona aparece en las fotos o los v??deos que se comparten en UpDeport o Instagram. Tambi??n creamos una red sofisticada y desarrollamos tecnolog??a de comunicaci??n para que las personas en ??reas con acceso limitado a internet puedan conectarse. Asimismo, desarrollamos sistemas automatizados destinados a mejorar nuestra capacidad de detectar y eliminar actividades abusivas o peligrosas que puedan perjudicar a nuestra comunidad y da??ar la integridad de nuestros Productos.
Realizamos estudios para encontrar formas de mejorar nuestros servicios:
Llevamos a cabo tareas de investigaci??n con el prop??sito de desarrollar, probar y mejorar nuestros Productos. Entre estas tareas, se incluye el an??lisis de los datos que tenemos sobre nuestros usuarios y la comprensi??n del uso que hacen de nuestros Productos, por ejemplo, mediante la realizaci??n de encuestas y pruebas, y la soluci??n de problemas con las nuevas funcionalidades. En nuestra Pol??tica de datos se detalla el uso que hacemos de los datos para llevar a cabo estas tareas con el prop??sito de desarrollar y mejorar nuestros servicios.
Proporcionamos experiencias coherentes y fluidas en los Productos de las empresas de UpDeport:
nuestros Productos te ayudan a encontrar personas, grupos, empresas, organizaciones y otras entidades que son importantes para ti, y contribuyen a conectarte con ellos. Dise??amos nuestros sistemas para que tu experiencia sea coherente y fluida en los distintos Productos de las empresas de UpDeport que usas. Por ejemplo, usamos los datos de las personas con las que interact??as en UpDeport para que te resulte m??s f??cil conectarte con ellas en Messenger o Instagram, y ponemos Messenger a tu disposici??n para que te comuniques con las empresas que sigues en UpDeport.
Ofrecemos acceso a nuestros servicios desde cualquier lugar del mundo:
Para operar nuestro servicio internacional, debemos almacenar y distribuir contenido y datos en nuestros centros de datos y sistemas de todo el mundo, incluidas regiones fuera de tu pa??s de residencia. Estas infraestructuras pueden estar dirigidas o gestionadas por UpDeport, Inc., UpDeport Ireland Limited o sus empresas afiliadas.

2. C??mo se financian nuestros servicios
En lugar de pagar por usar UpDeport y el resto de los productos y servicios que ofrecemos, al usar los Productos de UpDeport que se incluyen en estas Condiciones, aceptas que podamos mostrarte anuncios de las empresas y organizaciones que nos pagan por promocionarse dentro y fuera de los Productos de las empresas de UpDeport. Usamos tus datos personales, como la informaci??n sobre tu actividad y tus intereses, para mostrarte aquella publicidad que pueda resultarte m??s relevante.
Nuestro sistema publicitario se ha dise??ado pensando en la protecci??n de la privacidad. Esto quiere decir que podemos mostrarte anuncios relevantes y ??tiles sin revelar tu identidad a los anunciantes. No vendemos tus datos personales. Permitimos que los anunciantes nos proporcionen informaci??n como sus objetivos empresariales y el tipo de audiencia a la que quieren llegar con sus anuncios (por ejemplo, amantes del ciclismo de 18 a 35 a??os). De esta manera, podemos mostrar sus anuncios a las personas que podr??an estar interesadas en ellos.
Asimismo, ofrecemos a los anunciantes informes sobre el rendimiento de su publicidad para que sepan de qu?? manera interact??an las personas con su contenido dentro y fuera de UpDeport. Proporcionamos a los anunciantes datos demogr??ficos generales e informaci??n sobre intereses (por ejemplo, que una mujer de entre 25 y 34 a??os que vive en Madrid y a la que le interesa la ingenier??a de software ha visto su anuncio). Estos datos tienen como fin ayudarlos a conocer mejor su audiencia. No compartimos informaci??n que te identifique directamente (datos como tu nombre o direcci??n de correo electr??nico, que se pueden utilizar para ponerse en contacto contigo o para identificar qui??n eres), a menos que nos des permiso espec??fico para ello. Obt??n m??s informaci??n sobre el funcionamiento de los anuncios de UpDeport aqu??.
Recopilamos y usamos tus datos personales para ofrecerte los servicios descritos anteriormente. Para obtener m??s informaci??n sobre c??mo recopilamos y usamos tus datos, consulta nuestra Pol??tica de datos. Dispones de controles para establecer los tipos de anuncios o anunciantes que ves, as?? como los tipos de informaci??n que usamos para determinar los anuncios que te mostramos. M??s informaci??n.

3. Tus compromisos con UpDeport y nuestra comunidad
Ponemos a tu disposici??n y la de otras personas estos servicios con el objetivo de cumplir nuestro prop??sito. A cambio, debes comprometerte con nosotros a lo siguiente:
1. Qui??n puede usar UpDeport
Queremos que nuestra comunidad sea un entorno seguro en el que las personas se responsabilicen de sus opiniones y sus acciones. Por este motivo, debes:
Usar el mismo nombre que utilizas en tu vida diaria.
Proporcionar informaci??n exacta sobre ti.
Crear solo una cuenta (propia) y usar la biograf??a para fines personales.
No compartir tu contrase??a ni dar acceso a otras personas a tu cuenta de UpDeport, ni transferirles tu cuenta (sin nuestro permiso).
Intentamos que UpDeport est?? disponible para todo el mundo, pero no puedes usar UpDeport en los siguientes casos:
Eres menor de 14 a??os (o menor de la edad m??nima legal en tu pa??s para usar nuestros Productos).
Se te ha condenado por delitos sexuales.
Hemos inhabilitado tu cuenta con anterioridad por haber infringido nuestras Condiciones o Pol??ticas.
La legislaci??n aplicable proh??be que accedas a nuestros productos, servicios o software.
2. Qu?? puedes hacer y qu?? puedes compartir en UpDeport
Queremos que la gente use UpDeport para expresarse y compartir contenido que le resulte relevante, pero no a costa de la seguridad y el bienestar de otras personas ni de la integridad de nuestra comunidad. Por lo tanto, aceptas no participar en las conductas que se describen a continuaci??n ni ayudar (o apoyar a otras personas en estos comportamientos).
No debes usar nuestros Productos para realizar acciones o compartir contenido en los siguientes casos:
Si infringen estas Condiciones, nuestras Normas comunitarias u otras condiciones y pol??ticas que rijan tu uso de UpDeport.
Si son ilegales, enga??osos, discriminatorios o fraudulentos.
Si se infringen los derechos de otras personas, como los relativos a la propiedad intelectual.
No debes subir virus o c??digos maliciosos, ni realizar actividades que puedan inhabilitar, sobrecargar o alterar el correcto funcionamiento de nuestros Productos, ni modificar su aspecto.
No debes acceder a datos de nuestros Productos o recopilarlos con medios automatizados (sin nuestro permiso previo), ni intentar acceder a ellos sin el permiso correspondiente.
Podemos eliminar el contenido que infrinja estas disposiciones o restringir el acceso a ??l.
Si retiramos contenido que has compartido debido al incumplimiento de nuestras Normas comunitarias, te informaremos de esta medida y te explicaremos las opciones de las que dispones para solicitar otra revisi??n, a menos que infrinjas de manera grave o reiterada estas Condiciones o, si al hacerlo, nos exponemos o exponemos a terceras personas a responsabilidades legales; nuestra comunidad de usuarios se ve perjudicada; se compromete o pone en riesgo la integridad o el funcionamiento de nuestros servicios, sistemas o Productos; tambi??n en los casos en los que experimentemos restricciones por motivos t??cnicos, o bien en aquellos en los que no tengamos permiso para hacerlo por motivos legales.
Para contribuir al correcto funcionamiento de la comunidad, te recomendamos que denuncies cualquier contenido o comportamiento que consideres que vulnera tus derechos (incluidos los derechos de propiedad intelectual) o nuestras condiciones y pol??ticas.
Tambi??n podemos eliminar o restringir el acceso a tu contenido, tus servicios o tu informaci??n si determinamos que hacerlo es razonablemente necesario para evitar o mitigar consecuencias legales o jur??dicas adversas para UpDeport.
3. Permisos que nos concedes
Para proporcionar nuestros servicios, necesitamos que nos concedas determinados permisos:
Permiso para usar el contenido que creas y compartes: hay contenido que compartes o subes, como fotos o v??deos, que puede estar protegido por leyes en materia de propiedad intelectual o industrial.
Eres el propietario de los derechos de propiedad intelectual o industrial (como derechos de autor o marcas) del contenido que creas y compartes en UpDeport y en los Productos de las empresas de UpDeport que uses. Ninguna disposici??n de las presentes Condiciones te priva de los derechos que tienes sobre el contenido de tu propiedad. Puedes compartir libremente tu contenido con quien quieras y donde desees.
No obstante, para poder ofrecer nuestros servicios, debes concedernos algunos permisos legales (denominados ???licencias???) a fin de usar dicho contenido. Emplearemos estas licencias ??nicamente para ofrecer y mejorar nuestros Productos y servicios, tal y como se describe en la Secci??n 1 anterior.
En concreto, cuando compartes, publicas o subes contenido que se encuentra protegido por derechos de propiedad intelectual o industrial en nuestros Productos, o en relaci??n con ellos, nos concedes una licencia en todo el mundo, no exclusiva, transferible, sublicenciable y exenta de pagos por derechos de autor para alojar, usar, distribuir, modificar, mantener, reproducir, mostrar o comunicar p??blicamente y traducir tu contenido, as?? como para crear contenido derivado (de conformidad con tu configuraci??n de privacidad y de la aplicaci??n). En otras palabras, si compartes una foto en UpDeport, nos das permiso para almacenarla, copiarla y compartirla con otros (de conformidad con tu configuraci??n), como proveedores de servicios que nos ayudan a proporcionar nuestros servicios u otros productos de UpDeport que usas. Esta licencia dejar?? de tener efecto cuando tu contenido se elimine de nuestros sistemas.
Tu contenido puede eliminarse individualmente, aunque tambi??n tienes la opci??n de eliminar tu cuenta para suprimirlo todo de una sola vez. Obt??n m??s informaci??n sobre c??mo eliminar tu cuenta. Tienes la opci??n de descargar una copia de tus datos cuando quieras antes de eliminar la cuenta.
Cuando elimines tu contenido, el resto de los usuarios dejar??n de verlo, pero seguir?? alojado en nuestros sistemas en los siguientes supuestos:
No se puede eliminar inmediatamente debido a limitaciones t??cnicas (en cuyo caso, tu contenido se eliminar?? en un plazo m??ximo de 90 d??as desde que decides eliminarlo).
Otras personas han usado tu contenido de acuerdo con esta licencia, pero no lo han eliminado (en cuyo caso, esta licencia seguir?? en vigor hasta que el contenido se retire).
La eliminaci??n inmediata del contenido limitar??a nuestra posibilidad de:
Investigar o detectar pr??cticas ilegales o infracciones de nuestras condiciones y pol??ticas (por ejemplo, un uso incorrecto de nuestros Productos o sistemas).
Cumplir con cualquier obligaci??n legal, como la protecci??n de pruebas.
Cumplir con los requerimientos de autoridades judiciales, administrativas o policiales, as?? como de organismos gubernamentales.
En tal caso, el contenido se almacenar?? durante el tiempo necesario para cumplir las finalidades para las que se ha conservado (el plazo de tiempo exacto variar?? en funci??n de los distintos casos).
En los casos mencionados anteriormente, esta licencia seguir?? en vigor hasta que el contenido se elimine por completo.
Permiso para usar tu nombre, tu foto del perfil e informaci??n sobre las acciones que realizas en anuncios y contenido patrocinado: Nos concedes permiso para usar tu nombre, tu foto del perfil e informaci??n sobre las acciones que realizas en UpDeport junto a o en relaci??n con anuncios, ofertas y otro contenido patrocinado que mostramos en nuestros Productos, sin recibir compensaci??n de ning??n tipo. Por ejemplo, podemos mostrar a tus amigos que te interesa un evento promocionado o que te gusta una p??gina creada por una marca que nos paga para mostrar sus anuncios en UpDeport. Este tipo de anuncios solo se muestra a las personas que tienen tu permiso para ver las acciones que realizas en UpDeport. Obt??n m??s informaci??n sobre la configuraci??n y las preferencias de anuncios.
Permiso para actualizar el software que usas o descargas: si descargas o usas nuestro software, nos das permiso para descargar e instalar las actualizaciones correspondientes cuando proceda.
4. Limitaciones de uso de nuestra propiedad intelectual
Nos reservamos todos los derechos del contenido protegido por derechos de propiedad intelectual (de nuestra propiedad) que ponemos a disposici??n en nuestros Productos (como im??genes, dise??os, v??deos o sonido que ofrecemos y que t?? a??ades al contenido que creas o compartes en UpDeport). T?? conservar??s los derechos de propiedad intelectual relativos a tu contenido. Solo puedes usar nuestro contenido con derechos de autor, o nuestras marcas comerciales o similares, seg??n lo establecido en nuestras Normas de uso de marcas, o bien con nuestro consentimiento por escrito. Debes obtener nuestro permiso por escrito (o contar con uno en virtud de una licencia de c??digo abierto) para modificar, descompilar o intentar extraer de alg??n otro modo nuestro c??digo fuente, as?? como crear obras derivadas a partir de ??l.

4. Disposiciones adicionales
1. Actualizaci??n de las Condiciones
Trabajamos continuamente para perfeccionar nuestros servicios y desarrollar nuevas funcionalidades a fin de proporcionaros tanto a ti como a nuestra comunidad mejores Productos. Por este motivo, es posible que debamos actualizar estas Condiciones cada cierto tiempo para reflejar con precisi??n nuestros servicios y pr??cticas. Solo implementaremos cambios si las disposiciones ya no resultan adecuadas o est??n incompletas, y ??nicamente si dichas modificaciones son razonables y tienen debidamente en cuenta tus intereses.
Te enviaremos una notificaci??n (por ejemplo, por correo electr??nico o a trav??s de nuestros Productos) con 30 d??as de antelaci??n como m??nimo antes de modificar las presentes Condiciones, de modo que puedas revisar los cambios antes de que entren en vigor, a menos que la ley nos exija realizar estas modificaciones. Si contin??as usando nuestros Productos una vez que los cambios hayan entrado en vigor, significar?? que aceptas estas modificaciones.
Aunque esperamos que sigas usando nuestros Productos, si no est??s de acuerdo con nuestras Condiciones actualizadas y no quieres seguir formando parte de la comunidad de UpDeport, puedes eliminar tu cuenta en cualquier momento.
2. Suspensi??n o cancelaci??n de la cuenta
Queremos que UpDeport sea un espacio donde las personas se sientan c??modas y seguras para decir lo que piensan y compartir opiniones e ideas.
Si determinamos que has infringido nuestras Condiciones o Pol??ticas, incluyendo especialmente nuestras Normas comunitarias, de manera notoria o grave, o en reiteradas ocasiones, es posible que suspendamos o inhabilitemos definitivamente el acceso a tu cuenta. Tambi??n es posible que lo hagamos si infringes reiteradamente los derechos de propiedad intelectual de otras personas o si nos vemos obligados a ello por motivos legales.
Si procedemos a suspender o inhabilitar tu cuenta, te informaremos al respecto y te explicaremos las opciones de las que dispones para solicitar una revisi??n, a menos que, al hacerlo, nos expongamos a nosotros o a terceras personas a responsabilidades legales; nuestra comunidad de usuarios se vea perjudicada; se comprometa o ponga en riesgo la integridad o el funcionamiento de nuestros servicios, sistemas o Productos; tambi??n en los casos en los que experimentemos restricciones por motivos t??cnicos, o bien en aquellos en los que no tengamos permiso para hacerlo por motivos legales.
Obt??n m??s informaci??n sobre lo que puedes hacer si se ha inhabilitado tu cuenta y c??mo ponerte en contacto con nosotros si consideras que la hemos inhabilitado por error.
Si eliminas tu cuenta o nosotros la inhabilitamos, el acuerdo establecido mediante estas Condiciones dejar?? de aplicarse, pero las siguientes disposiciones continuar??n estando vigentes: 3, 4.2-4.5.
3. Limitaci??n de responsabilidad
Nos esforzamos por proporcionar los mejores Productos posibles y establecer normas claras para todas las personas que los usen. No obstante, nuestros Productos se proporcionan ???tal cual???, por lo que no podemos garantizar que siempre sean seguros, que nunca sufran errores ni que funcionen sin interrupciones, demoras o imperfecciones. En la medida en que la ley lo permita, NOS EXIMIMOS DE TODA RESPONSABILIDAD, YA SEA EXPL??CITA O IMPL??CITA, INCLUIDAS LAS RESPONSABILIDADES IMPL??CITAS DE COMERCIALIZACI??N, ADECUACI??N A UN USO CONCRETO, T??TULO Y NO INFRACCI??N. No tenemos control ni influencia sobre lo que las personas hacen o dicen. Asimismo, no somos responsables de sus comportamientos o acciones, ya sea dentro o fuera de internet, ni del contenido que comparten, incluido aquel que pueda resultar ofensivo, inapropiado, obsceno, ilegal o cuestionable.
No podemos predecir si surgir?? alg??n problema con nuestros Productos. En consecuencia, nuestra responsabilidad se limitar?? lo m??ximo que permita la legislaci??n aplicable, y en ninguna circunstancia asumiremos responsabilidad alguna por la p??rdida de ganancias, ingresos, informaci??n o datos, ni por da??os derivados, especiales, indirectos, ejemplares, punitivos o eventuales que surjan como consecuencia de estas Condiciones o los Productos de UpDeport, o en relaci??n con ellos, incluso en el caso de que se nos haya advertido de la posibilidad de que se produzcan dichos da??os.
4. Disputas
Intentamos establecer reglas claras para reducir y, a ser posible, evitar las disputas entre t?? y nosotros. No obstante, si surge alguna, es ??til saber con antelaci??n d??nde se puede resolver y qu?? leyes se aplican.
Si eres consumidor, las leyes del pa??s donde resides se aplicar??n a cualquier reclamaci??n, causa o conflicto que inicies contra nosotros y que surja como consecuencia de estas Condiciones o los Productos de UpDeport, o en relaci??n con ellos. Asimismo, puedes resolver la reclamaci??n en cualquier tribunal competente del pa??s que tenga jurisdicci??n. En el resto de los casos, aceptas que las reclamaciones se resuelvan de forma exclusiva en el Tribunal Federal del Distrito Norte de California de los Estados Unidos o en un tribunal estatal ubicado en el condado de San Mateo. Asimismo, aceptas someterte a la jurisdicci??n personal de cualquiera de estos tribunales con el prop??sito de litigar cualquier reclamaci??n, y aceptas que estas Condiciones, as?? como cualquier reclamaci??n, se regir??n por las leyes del estado de California (independientemente de las disposiciones relativas a conflictos de derecho).
5. Otros
Estas Condiciones (anteriormente denominadas Declaraci??n de derechos y responsabilidades) constituyen la totalidad del acuerdo entre t?? y UpDeport, Inc. respecto al uso de nuestros Productos y prevalecen sobre cualquier acuerdo anterior.
Algunos de los Productos que ofrecemos tambi??n se rigen por condiciones complementarias. Si usas alguno de esos Productos, se pondr??n a tu disposici??n condiciones complementarias, que pasar??n a formar parte del acuerdo que establecemos contigo. Por ejemplo, si accedes a nuestros Productos o los usas para fines comerciales o empresariales, como para comprar anuncios, vender productos, desarrollar aplicaciones, administrar un grupo o una p??gina para tu empresa o usar nuestros servicios de medici??n, debes aceptar nuestras Condiciones comerciales. Si publicas o compartes contenido que incluya m??sica, debes cumplir con nuestras Normas de contenido musical. En la medida en que las condiciones complementarias entren en conflicto con estas Condiciones, las primeras prevalecer??n en lo que se refiere a dicho conflicto.
Si cualquier parte de estos t??rminos no fuese aplicable, la parte restante seguir?? siendo de plena aplicaci??n y vigencia. La no aplicaci??n de alguna de estas Condiciones por nuestra parte no se considerar?? una renuncia. Cualquier modificaci??n de estas Condiciones o renuncia respecto a ellas deber?? hacerse por escrito y contar con nuestra firma.
No transferir??s ninguno de tus derechos u obligaciones en virtud de estas Condiciones a ning??n tercero sin nuestro consentimiento.
Puedes designar a una persona (denominada ???contacto de legado???) para que administre tu cuenta si esta se convierte en conmemorativa. Solo el contacto de legado o una persona que hayas designado en un testamento v??lido o documento similar en el que expreses claramente tu consentimiento de divulgar el contenido en caso de fallecimiento o incapacidad podr?? solicitar que se divulgue contenido de tu cuenta una vez que esta pase a ser conmemorativa.
Estas Condiciones no confieren derechos de beneficiario a ning??n tercero. Todos nuestros derechos y obligaciones seg??n estas Condiciones son asignables libremente por nosotros en relaci??n con una fusi??n, adquisici??n o venta de activos, o bien en virtud de la ley o de cualquier otro modo.
Te informamos de que cabe la posibilidad de que tengamos que cambiar el nombre de usuario de tu cuenta en determinadas circunstancias (por ejemplo, si otra persona lo reclama y no parece guardar relaci??n con el nombre que usas en tu vida cotidiana). Te informaremos con antelaci??n si es necesario llevar a cabo esta medida y te explicaremos los motivos.
Valoramos siempre tus comentarios y cualquier otra sugerencia sobre nuestros productos y servicios. No obstante, te informamos de que podemos usarlos sin restricci??n ni obligaci??n alguna de ofrecerte una compensaci??n, as?? como tampoco tenemos la obligaci??n de considerarlos confidenciales.
Nos reservamos todos los derechos que no te hayamos concedido de forma expresa.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

    <!-- jQuery -->
    <script src="../Assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../Assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
      integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
      integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/"
      crossorigin="anonymous"
    ></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
