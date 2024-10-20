<?php
session_start();
$nome_usuario = isset($_SESSION['nome']) ? $_SESSION['nome'] : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu Prato Santista</title>
    <link rel="shortcut icon" href="image/pratito.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>


    <section id="Home">
        <nav>
            <div class="logo">
                <img src="image/pratito.png" alt="Logo Seu Prato Santista">
            </div>
<ul>
                <li><a href="#Home">Home</a></li>
                <li><a href="./sobrenos/sobrenos.html">Sobre nós</a></li>
                <li><a href="#Menu">Pratos</a></li>
                <li><a href="#Gallary">Restaurantes</a></li>
                <?php if (isset($_SESSION['nome'])): ?>
                    <li><a href="#"><?php echo htmlspecialchars($_SESSION['nome']); ?></a></li>
                <?php else: ?>
                    <li><a href="./registro e login/login.html">Entrar</a></li>
                <?php endif; ?>
            </ul>
            <div class="icon">
               
            </div>

        </nav>

        <div class="main">

            <div class="men_text">
                <h1><span>Seu Prato Santista,</span><br>a culinária em suas mãos!</h1>
            </div>

            <div class="container">
                <form action="#" method="get" class="search-bar">
                 <input type="text" placeholder="Digite sua pesquisa..." name="q">
                 <button type="submit"><img src="image/search.png"></button>
                </form>
                   
                </div>

            <div class="main_image">
                <img src="image/logo_main.png">

            </div>

            

        </div>

        <p>
        Seu Prato Santista é uma empresa que destaca a rica culinária da cidade de Santos por meio de sua plataforma online. Desenvolvido pela Creative Cuisine, nosso site oferece uma experiência intuitiva e envolvente para amantes da gastronomia local. Com um foco em conectar pessoas e sabores, nossa missão é promover os melhores pratos e chefs da região, tornando a culinária santista acessível a todos. Venha explorar o sabor de Santos com a gente!
        </p>


    </section>

    <!--Pratos-->

    <div class="menu" id="Menu">
        <h1><span>Pratos</span></h1>

        <div class="menu_box">
            <div class="menu_card">

                <div class="menu_image">
                    <img src="image/courvet.jpg">
                </div>


                <div class="menu_info">
                    <h2>Porção de Courvet</h2>
                    <p>
                        
                    </p>
                    <h3></h3>
                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    
                </div>

            </div> 
            
            <div class="menu_card">

                <div class="menu_image">
                    <img src="image/temakisalmao.jpg">
                </div>

                <div class="menu_info">
                    <h2>Temaki de Salmão</h2>
                    <p>
                       
                    </p>
                    <h3></h3>
                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    
                </div>

            </div> 

            <div class="menu_card">

                <div class="menu_image">
                    <img src="image/spaghettivongole.jpeg">
                </div>

                <div class="menu_info">
                    <h2>Spaghetti ao Vongole</h2>
                    <p>
                    
                    </p>
                    <h3></h3>
                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                </div>

            </div> 

            <div class="menu_card">

                <div class="menu_image">
                    <img src="image/salada.jpeg">
                </div>


                <div class="menu_info">
                    <h2>Salada</h2>
                    <p>
                    
                    </p>
                    <h3></h3>
                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                </div>

            </div> 

            <div class="menu_card">

                <div class="menu_image">
                    <img src="image/crispyrice.jpg">
                </div>

                <div class="menu_info">
                    <h2>Arroz Crocante</h2>
                    <p>
                    
                    </p>
                    <h3></h3>
                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                </div>

            </div> 

            <div class="menu_card">

                <div class="menu_image">
                    <img src="image/Hot_dog.jpg">
                </div>

                <div class="menu_info">
                    <h2>Hot Dog</h2>
                    <p>
                       
                    </p>
                    <h3></h3>
                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                </div>

            </div> 

            <div class="menu_card">

                <div class="menu_image">
                    <img src="image/sashimitaki.jpeg">
                </div>

                <div class="menu_info">
                    <h2>Sashimi Taki</h2>
                    <p>
                        
                    </p>
                    <h3></h3>
                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                </div>

            </div> 

            <div class="menu_card">

                <div class="menu_image">
                    <img src="image/biryani.webp">
                </div>

                <div class="menu_info">
                    <h2>Frango</h2>
                    <p>
                       
                    </p>
                    <h3></h3>
                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                </div>

            </div> 

            <div class="menu_card">

                <div class="menu_image">
                    <img src="image/talharim.png">
                </div>

                <div class="menu_info">
                    <h2>Talharim com camarão</h2>
                    <p>
                       
                    </p>
                    <h3></h3>
                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                </div>

            </div> 

            <div class="menu_card">

                <div class="menu_image">
                    <img src="image/ice_cream.jpg">
                </div>

                <div class="menu_info">
                    <h2>Sobremesas</h2>
                    <p>
                        
                    </p>
                    <h3></h3>
                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                
                </div>

            </div> 

            <div class="menu_card">

                <div class="menu_image">
                    <img src="image/bruschetta.jpeg">
                </div>

                <div class="menu_info">
                    <h2>Bruschetta Tradicional</h2>
                    <p>
                        
                    </p>
                    <h3></h3>
                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                </div>

            </div> 

            <div class="menu_card">

                <div class="menu_image">
                    <img src="image/sandwich.jpg">
                </div>

                <div class="menu_info">
                    <h2>Sanduiches</h2>
                    <p>
                      
                    </p>
                    <h3></h3>
                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                </div>

            </div> 
            
        </div>

    </div>



    <!--Restaurantes-->

    <div class="gallary" id="Gallary">
        <h1><span>Restaurantes</span></h1>

        <div class="gallary_image_box">
            <div class="gallary_image">
                <img src="image/belasantos.jpg">
                <h3>Capriccio</h3>
                <p>
                  
                </p>
                <a href="#" class="gallary_btn">Saiba mais</a>
            </div>

            <div class="gallary_image">
                <img src="image/donaangola.jpg">

                <h3>Dona Angola</h3>
                <p>
                
                </p>
                <a href="#" class="gallary_btn">Saiba mais</a>
            </div>

            <div class="gallary_image">
                <img src="image/heroisburger.jpeg">

                <h3>Herois Burger</h3>
                <p>
                
                </p>   
                    
                <a href="#" class="gallary_btn">Saiba mais</a>
            </div>

            <div class="gallary_image">
                <img src="image/kokimbos.jpg">

                <h3>Kokimbos</h3>
                <p>

                </p>   
                <a href="#" class="gallary_btn">Saiba mais</a>
            </div>

            <div class="gallary_image">
                <img src="image/estivacervejaria.jpg">

                <h3>Estiva e Cervejaria</h3>
                <p>
                   
                </p>
                <a href="#" class="gallary_btn">Saiba mais</a>
            </div>

            <div class="gallary_image">
                <img src="image/bartu.jpg">

                <h3>Bartu</h3>
                <p>
                   
                </p>
                <a href="#" class="gallary_btn">Saiba mais</a>
            </div>

        </div>

    </div>

        </div>

    </div>

    <!--Footer-->

    <footer>
        <div class="footer_main">

            <div class="footer_tag">
                <h2>Contatos</h2>
                <p>seupratosantista@gmail.com</p>
            </div>

            <div class="footer_tag">
                <h2>Redes Sociais</h2>
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
            </div>

        </div>

    </footer>

    <!-- Popup de Logout -->
<div id="logoutPopup" class="popup">
    <div class="popup-content">
        <span class="close" onclick="closePopup()">&times;</span>
        <h2>Você deseja sair?</h2>
        <a href="../registro e login/logout.php" class="btn-logout">Sair</a>
        <button class="btn-logout" onclick="closePopup()">Cancelar</button>
    </div>
</div>

<script>
    // Mostrar o popup de logout
    function showPopup() {
        document.getElementById("logoutPopup").style.display = "block";
    }

    // Fechar o popup de logout
    function closePopup() {
        document.getElementById("logoutPopup").style.display = "none";
    }

    // Adiciona o evento de clique no nome do usuário
    document.addEventListener("DOMContentLoaded", function() {
        const usernameElement = document.querySelector('nav ul li a[href="#"]');
        if (usernameElement) {
            usernameElement.addEventListener("click", function(event) {
                event.preventDefault(); // Impede o link de agir como um link normal
                showPopup(); // Mostra o popup
            });
        }
    });
</script>

</body>
</html>
