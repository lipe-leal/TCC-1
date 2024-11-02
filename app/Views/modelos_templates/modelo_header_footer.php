<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?= $this->renderSection('tiulo') ?></title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <link rel="stylesheet" href="/css/stylo_pagina_produtos.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <link rel="stylesheet" href="/css/stylocompilado.css">
            <script src="/Javascript/script.js" defer></script>
        </head>
        <body>
            <header>
                <img src="../../img/img-pagina-home/logo.png" alt="">
                <div class="menu pt-3">
                    <a href="/">
                        <p>HOME</p>
                    </a>
                    <a href="/sobre_nos">
                        <p>SOBRE NÓS</p>
                    </a>
                    <a href="/Produtos">
                        <p>PRODUTO</p>
                    </a>
                </div>
                <div>
                <a href="/Carrinho">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#ffffff" viewBox="0 0 256 256">
                        <path d="M230.14,58.87A8,8,0,0,0,224,56H62.68L56.6,22.57A8,8,0,0,0,48.73,16H24a8,8,0,0,0,0,16h18L67.56,172.29a24,24,0,0,0,5.33,11.27,28,28,0,1,0,44.4,8.44h45.42A27.75,27.75,0,0,0,160,204a28,28,0,1,0,28-28H91.17a8,8,0,0,1-7.87-6.57L80.13,152h116a24,24,0,0,0,23.61-19.71l12.16-66.86A8,8,0,0,0,230.14,58.87ZM104,204a12,12,0,1,1-12-12A12,12,0,0,1,104,204Zm96,0a12,12,0,1,1-12-12A12,12,0,0,1,200,204Zm4-74.57A8,8,0,0,1,196.1,136H77.22L65.59,72H214.41Z"></path>
                    </svg>
                </a>

                </div>
            </header>
            <main>

                <?php $this->renderSection('conteudo') ?>
                
                <?php $this->renderSection('cattegoria') ?>

            </main>
                <!-- coloque o footer aqui -->
            <footer class=" text-center end pt-5 d-flex ">
                <div class=" ps-5 justify-content-around d-flex w-100">
                    <div class="col-md-3 gap-5 d-flex flex-column align-items-start">
                        <h1>Contact info</h1>
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste nam esse expedita tenetur voluptatem  </p>
                            <div class="d-flex flex-column gap-3">
                                <div class="d-flex gap-3">
                                    <i><svg width="22" height="27" viewBox="0 0 12 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.375 15.9875C0.8125 9.42499 0 8.73749 0 6.29999C0 2.98749 2.65625 0.299988 6 0.299988C9.3125 0.299988 12 2.98749 12 6.29999C12 8.73749 11.1562 9.42499 6.59375 15.9875C6.3125 16.425 5.65625 16.425 5.375 15.9875ZM6 8.79999C7.375 8.79999 8.5 7.70624 8.5 6.29999C8.5 4.92499 7.375 3.79999 6 3.79999C4.59375 3.79999 3.5 4.92499 3.5 6.29999C3.5 7.70624 4.59375 8.79999 6 8.79999Z" fill="#868686"/>
                                        </svg></i>
                                    <p>Rua 15 de Novembro N°600 Centro, Tatuí</p>
                                </div>
                                <div class="d-flex gap-3">
                                    <i><svg width="27" height="27" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.4062 1.08124C16.75 1.17499 17 1.45624 17 1.79999C17 9.83124 10.5 16.3 2.5 16.3C2.125 16.3 1.84375 16.0812 1.75 15.7375L1 12.4875C0.9375 12.1437 1.09375 11.7687 1.4375 11.6125L4.9375 10.1125C5.25 9.98749 5.59375 10.0812 5.8125 10.3312L7.375 12.2375C9.8125 11.0812 11.7812 9.08124 12.9062 6.70624L11 5.14374C10.75 4.92499 10.6562 4.58124 10.7812 4.26874L12.2812 0.768738C12.4375 0.424988 12.8125 0.237488 13.1562 0.331238L16.4062 1.08124Z" fill="#868686"/>
                                        </svg></i>
                                    <p>(15) 3259-6059</p>
                                </div>
                                <div class="d-flex gap-3">
                                    <i>
                                        <svg width="22" height="27" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.5 0.299988C15.3125 0.299988 16 0.987488 16 1.79999V10.8C16 11.6437 15.3125 12.3 14.5 12.3H1.5C0.65625 12.3 0 11.6437 0 10.8V1.79999C0 0.987488 0.65625 0.299988 1.5 0.299988H14.5ZM14.5 1.79999H1.5V3.08124C2.1875 3.67499 3.3125 4.54999 5.6875 6.42499C6.21875 6.83124 7.25 7.83124 8 7.79999C8.71875 7.83124 9.75 6.83124 10.2812 6.42499C12.6562 4.54999 13.7812 3.67499 14.5 3.08124V1.79999ZM1.5 10.8H14.5V5.01874C13.7812 5.58124 12.75 6.39374 11.2188 7.61249C10.5 8.14374 9.3125 9.33124 8 9.29999C6.65625 9.33124 5.4375 8.14374 4.75 7.61249C3.21875 6.39374 2.1875 5.58124 1.5 5.01874V10.8Z" fill="#868686"/>
                                        </svg>
                                        </i>
                                    <p>amlustres6@gmail.com</p>
                                </div>
                                <div class="d-flex gap-3">
                                    <i>
                                        <svg width="22" height="27" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.5 5.29999H4.96875C5.4375 2.51874 6.5 0.549988 7.75 0.549988C8.96875 0.549988 10.0625 2.51874 10.5 5.29999ZM4.75 8.29999C4.75 7.61249 4.78125 6.95624 4.84375 6.29999H10.625C10.6875 6.95624 10.7188 7.61249 10.7188 8.29999C10.7188 9.01874 10.6875 9.67499 10.625 10.3H4.84375C4.78125 9.67499 4.75 9.01874 4.75 8.29999ZM14.875 5.29999H11.5C11.2188 3.54999 10.7188 1.95624 9.9375 0.893738C12.1875 1.54999 14 3.20624 14.875 5.29999ZM5.53125 0.893738C4.75 1.95624 4.25 3.54999 3.96875 5.29999H0.59375C1.46875 3.20624 3.28125 1.54999 5.53125 0.893738ZM15.2188 6.29999C15.375 6.95624 15.4688 7.61249 15.4688 8.29999C15.4688 9.01874 15.375 9.67499 15.2188 10.3H11.625C11.6875 9.64374 11.75 8.98749 11.75 8.29999C11.75 7.64374 11.6875 6.95624 11.625 6.29999H15.2188ZM3.75 8.29999C3.75 8.98749 3.78125 9.64374 3.84375 10.3H0.25C0.09375 9.67499 0 9.01874 0 8.29999C0 7.61249 0.09375 6.95624 0.25 6.29999H3.84375C3.78125 6.95624 3.75 7.64374 3.75 8.29999ZM4.96875 11.3H10.5C10.0625 14.1125 8.96875 16.05 7.75 16.05C6.5 16.05 5.4375 14.1125 4.96875 11.3ZM9.9375 15.7375C10.7188 14.675 11.25 13.0812 11.5 11.3H14.875C14 13.425 12.1875 15.0812 9.9375 15.7375ZM0.59375 11.3H3.96875C4.25 13.0812 4.75 14.675 5.53125 15.7375C3.28125 15.0812 1.46875 13.425 0.59375 11.3Z" fill="#868686"/>
                                        </svg>
                                        </i>
                                    <p>AM Lustres</p>
                                </div>
                                
                            </div>
                    </div>
                    <div class="col-md-3 gap-5 d-flex flex-column align-items-start">
                        
                        <h1>Get In touch</h1>
                        <form style="width: 80%" class="d-flex align-items-start flex-column gap-5" action="">
                            <input class="form-footer" type="text" placeholder="Seu Nome..." >
                            <input class="form-footer" type="text" placeholder="Seu Email... ">
                            <textarea name="" id="" cols="30" rows="4" class="form-menssagem" placeholder="Descrição..."></textarea>
                            <button class="pb-1 form-button">Enviar</button>
                        </form>
                    </div>
                    <div class="col-md-3 gap-5 d-flex flex-column align-items-start">
                        <h1>Newsletter</h1>
                        <p> Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit.
                            Curabitur urna lectus, posuere vitae
                            condimentum eu, posuere sit amet justo.
                            Phasellus a congue lorem.  </p>
                        <div class=" d-flex">
                            <input class="email"type="text" name="" id="" placeholder="Envie seu email">
                            <button class="button-email">Enviar</button>
                        </div>
                    </div>
                </div>
            </footer>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        </body>
    </html>