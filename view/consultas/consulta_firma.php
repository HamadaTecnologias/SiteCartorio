
    
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../../assets/css/main.css" />
        <link rel="shortcut icon" href="../../assets/images/favicon.png" type="image/x-icon">
        <title>Cartório Online</title>
      </head>
      <body class="bg-color-rgi">
        <div class="container-header">
          <div>
            <a href="../../index.html"
              ><img
                class="img-logo"
                src="../../assets/images/logo-cartorio-azul.png"
                alt="Logo Cartório 1º Ofício de Araruama"
            /></a>
          </div>
          <div class="icons-secondary-pages">
            <a href="mailto:contato@1oficioararuama.com.br" target="_blank"
              ><img
                class="email-icon"
                src="../../assets/images/email-icon-paginas-secundarias.png"
                alt="Ícone para envio de e-mail"
            /></a>
            <a
              href="https://api.whatsapp.com/send?l=pt_BR&phone=55022988377378"
              alt="Ícone de Telefone"
              target="_blank"
              ><img
                class="phone-icon"
                src="../../assets/images/phone-icon-paginas-secundarias.png"
                alt=""
            /></a>
          </div>
        </div>

        <!-- Banner -->
        <div class="container-subheader">
          <div class="img-main">
                <h1>Consulta de Firma</h1>
          </div>
        </div>
        <!-- Fim do Banner -->
    
        <div class="container-consultas">
          <div class="pop-box">
            <?php
                session_start();
                if(isset($_GET['firma_ok'])){
                  echo "<h3 style=color:black;>FIRMA ENCONTRADA:</h3>";
                  echo "<h3 style=color:black;>Nome: ".$_SESSION['Nome']." | CPF:" .$_SESSION['Cpf']."</h3>";
            
                }elseif(isset($_GET['firma_error'])){
                  echo "<h3 style=color:black;>FIRMA NÃO ENCONTRADA!</h3>";
                }else{
                    echo '';
                }
            ?>
          </div> 
          <div class="img-consultas">
                <h1 class="titulo-banner-consulta-firma">Consulte Sua Firma:</h1>
                <form class="form-consultas" action="consultar-firma.php" method="post">
                    <input class="input-consultas" placeholder="Digite Seu CPF - Apenas Números" type="text" name="Cpf">
                    <br>
                    <input type="submit" value="Buscar">
                </form>
          </div>
        </div>
    
    
        <!-- Começo do Footer Informativo -->
        <div id="footer-out" class="informative-footer-out-general">
          <div class="informative-footer-out">
            <div class="content-footer-out">
              <div class="first-section-out">
                <h3 class="title-footer-out">Sobre Nós</h3>
                <img
                  class="logo-footer"
                  src="../../assets/images/logo-cartorio-azul.png"
                  alt="Logo Cartório 1º Ofício"
                />
                <h4 style="color: #16a4e0">
                  Clareza e Confiança em Cada Registro
                </h4>
              </div>
    
              <div class="second-section-out">
                <h3 class="title-footer-out">Links Úteis</h3>
                <p><a href="../../../index.html">Sobre o Cartório</a></p>
                <p><a href="../../../index.html#service">Serviços</a></p>
                <p>
                  <a href="../cartorio-online.html" target="_blank"
                    >Cartório Online</a
                  >
                </p>
                <p>
                  <a href="portal-transparencia.html" target="_blank"
                    >Compliance</a
                  >
                </p>
              </div>
    
              <div class="third-section-out">
                <h3 class="title-footer-out">Endereço</h3>
                <p>
                  <i class="fa fa-envelope"></i>
                  <a href="mailto:contato@1oficioararuama.com.br"
                    >contato@1oficio</a
                  >
                  <a href="mailto:contato@1oficioararuama.com.br"
                    >araruama.com.br</a
                  >
                </p>
                <p>
                  <i class="icon solid fa-home"></i>
                  <a
                    href="https://www.google.com/maps/place/Clerk+of+1+Office+of+Justice+Araruama/@-22.8790999,-42.341788,20.5z/data=!4m15!1m8!3m7!1s0x976916fbf530c9:0x923e4618f85e5d03!2sAv.+John+Kennedy+-+Centro,+Araruama+-+RJ,+28970-000!3b1!8m2!3d-22.879095!4d-42.3418327!16s%2Fg%2F11c2khvdsv!3m5!1s0x97693faaaaaaab01:0xa722558a37e942ee!8m2!3d-22.8791799!4d-42.3416458!16s%2Fg%2F11c6cq_sp_?entry=ttu"
                    target="_blank"
                  >
                    Av John Kennedy nº 6, loja 5, Bairro Centro.</a
                  >
                </p>
    
                <p>
                  <i class="icon solid fa-phone"></i>
                  <a href="#">(22)2664-4492</a>
                </p>
              </div>
    
              <div class="fourth-section-out">
                <h3 class="title-footer-out">Contate-nos</h3>
                <form action="#">
                  <div class="form-control">
                    <input type="text" placeholder="Digite seu E-mail" />
                  </div>
                  <div class="form-control">
                    <textarea
                      name=""
                      id=""
                      cols="10"
                      rows="5"
                      placeholder="Escreva-nos uma mensagem..."
                    ></textarea>
                  </div>
                  <button class="button-submit">Enviar</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- Fim do Footer Informativo -->
        <br>
        <br>
        <br>
        <!-- Começo do Footer de Ondinhas -->
        <div class="footer-out-wave">
          <div class="wave" id="wave1"></div>
          <div class="wave" id="wave2"></div>
          <div class="wave" id="wave3"></div>
          <div class="wave" id="wave4"></div>
          <ul class="social_icons">
            <li>
              <a
                href="https://api.whatsapp.com/send?l=pt_BR&phone=55022988377378"
                target="_blank"
                >
                <ion-icon name="logo-whatsapp"></ion-icon
              ></a>
            </li>
            <li>
              <a href="mailto:contato@1oficioararuama.com.br" target="_blank"
                ><ion-icon name="mail-outline"></ion-icon
              ></a>
            </li>
            <li>
              <a
                href="https://www.facebook.com/1oficioararuama"
                target="_blank"
                >
                <ion-icon name="logo-facebook"></ion-icon
              ></a>
            </li>
          </ul>
          <p class="paragraph-footer-out">
            ©Cartório - 1º Ofício de Araruama | All Rights Reserved
          </p>
        </div>
      </div>
        <!-- Fim do Footer de Ondinhas -->
      </body>
    </html>
    