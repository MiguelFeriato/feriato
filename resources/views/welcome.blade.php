<!DOCTYPE html>
<html>
<head>
    <title>Esportes mais praticados </title>
    <style>
        .carousel {
            width: 1500px;
            height: 400px;
            position: relative;
            overflow: hidden;
            
        }
        
        .carousel ul {
            list-style: none;
            position: absolute;
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            
        }
        
        .carousel li {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            transition: opacity 1s ease-in-out;
            text-align: center;
        }
        
        .carousel li.active {
            opacity: 1;
            
        }
        
        .header, .footer {
            background-color: green;
            color: wheat;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2 style="text-align: center;">Esportes populares no Brasil</h2>
        <h3 style="text-align: center;">No Brasil os três esportes mais populares são: </h3>
    </div>
    
    <div class="carousel">
        <ul>
            <li class="active">
                <img src="https://i0.wp.com/www.folhageral.com/wp-content/uploads/2022/08/esporte-futebol.jpg?fit=1200%2C801&ssl=1" alt="Imagem 1">
                <div class="description">futebol </div>
            </li>
            <li>
                <img src="https://classic.exame.com/wp-content/uploads/2021/08/WhatsApp-Image-2021-08-04-at-11.43.17-AM.jpeg?quality=70&strip=info&w=1024" alt="Imagem 2">
                <div class="description">Volei</div>
            </li>
            <li>
                <img src="https://desportolandia.com/sites/default/files/artigos/tenis-de-mesa.jpg" alt="Imagem 3">
                <div class="description">Tenis de mesa  </div>
            </li>
        </ul>
    </div>
    
    <div class="footer">
        <h2 style="text-align: center;">Em primeiro lugar o futebol é, de fato, o esporte mais praticado pelos brasileiros, cerca de 30,4 milhões de pessoas jogam futebol no país.
        Em segundo lugar, dentre os esportes mais praticados no Brasil, temos o vôlei. Esse é outro esporte muito tradicional, não só entre a população, mas profissionalmente, com destaque mundial.
        Em terceiro lugar o tenis de mesa é praticado por algo em torno de 12 milhões de pessoas. Conhecido popularmente como ping-pong, o esporte inglês também já rendeu diversas medalhas para o Brasil em competições internacionais.
        </h2>
    </div>
    
    <script>
        var carouselItems = document.querySelectorAll('.carousel li');
        var currentIndex = 0;
        
        function showSlide(index) {
            carouselItems.forEach(function(item) {
                item.classList.remove('active');
            });
            
            carouselItems[index].classList.add('active');
        }
        
        function nextSlide() {
            currentIndex++;
            
            if (currentIndex >= carouselItems.length) {
                currentIndex = 0;
            }
            
            showSlide(currentIndex);
        }
        
        function prevSlide() {
            currentIndex--;
            
            if (currentIndex < 0) {
                currentIndex = carouselItems.length - 1;
            }
            
            showSlide(currentIndex);
        }
        
        setInterval(nextSlide, 3000); 
    </script>
</body>
</html>