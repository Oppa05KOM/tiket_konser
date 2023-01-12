    <!DOCTYPE html>
    <html lang="en" >
    <head>
    <meta charset="UTF-8">
    <title>TIKET KONSER | Tiket</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets1/tiket/style.css">
    <link href="<?php echo base_url() ?>assets1/img/x.png" rel="icon">

    </head>
    <body>
    <!-- partial:index.partial.html -->
    <link rel="stylesheet"
                href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <div class="ticket">
        <div class="left">
            <div class="image">
                <p class="admit-one">
                    <span>AGENT X</span>
                    <span>AGENT X</span>
                    <span>AGENT X</span>
                </p>
                <div class="ticket-number">
                    <p>
                        <!-- #20030220 -->
                        <?php echo $detail_tiket->nama ?>
                    </p>
                </div>
            </div>
            <div class="ticket-info">
                <p class="date">
                    <span>TUESDAY</span>
                    <span class="june-29">MEI 23TH</span>
                    <span>2023</span>
                </p>
                <div class="show-name">
                    <h1>SOUR Prom</h1>
                    <h2>Olivia Rodrigo</h2>
                </div>
                <div class="time">
                    <p>8:00 PM <span>TO</span> 11:00 PM</p>
                    <p>DOORS <span>@</span> 7:00 PM</p>
                </div>
                <p class="location"><span>PARKIRAN PIPPO MALL</span>
                    <span class="separator"><i class="far fa-smile"></i></span><span>Makassar, Sul-Sel</span>
                </p>
            </div>
        </div>
        <div class="right">
            <p class="admit-one">
                <span>AGENT X</span>
                <span>AGENT X</span>
                <span>AGENT X</span>
            </p>
            <div class="right-info-container">
                <div class="show-name">
                    <h1>SOUR Prom</h1>
                </div>
                <div class="time">
                    <p>8:00 PM <span>TO</span> 11:00 PM</p>
                    <p>DOORS <span>@</span> 7:00 PM</p>
                </div>
                <div class="barcode">
                    <img src="https://external-preview.redd.it/cg8k976AV52mDvDb5jDVJABPrSZ3tpi1aXhPjgcDTbw.png?auto=webp&s=1c205ba303c1fa0370b813ea83b9e1bddb7215eb" alt="QR code">
                </div>
                <p class="ticket-number">
                    #20030220
                </p>
            </div>
        </div>
    </div>
    <!-- partial -->
    <script  src="<?php echo base_url() ?>assets1/tiket/script.js"></script>

    </body>
    </html>
