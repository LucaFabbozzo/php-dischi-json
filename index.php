<!-- Descrizione
Dobbiamo creare una web-app che permetta di leggere una lista di dischi presente nel nostro server.
Stack
Html, CSS, VueJS (importato tramite CDN https://unpkg.com/vue@3/dist/vue.global.js), axios, PHP
Consigli
Nello svolgere l’esercizio seguite un approccio graduale.
Prima assicuratevi che la vostra pagina index.php (il vostro front-end) riesca a comunicare correttamente con il vostro script PHP (le vostre “API”).
Solo a questo punto sarà utile passare alla lettura della lista da un file JSON.
BONUS
Scegliete uno o più fra queste funzionalità
 - Al click su un disco, recuperare e mostrare i dati del disco selezionato
 - Creare una selezione (sempre tramite API) per genere musicale
 - Aggiungere/rimuovere un disco (per l’immagine utilizzare una URL remota) -->


 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet"> 
  <script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <link rel="stylesheet" href="./css/style.css">
  <title>PHP Dischi JSON</title>
 </head>
 <body>
  
 <div id="app">
   <header>
      <div class="container-h">
        <div class="logo">
          <img src="./img/logo.png" alt="logo">
        </div>
      </div>
   </header>
  <div class="container-h">
    <button @click="addDischi()">Add</button>
    <button @click="removeDischi()">Remove</button>
  </div>
   <main>
      <div class="container">
        <div @click="openCard()" v-for="(album, index) in dischi" :key="index" class="card">
          <img :src="album.poster" alt="">
          <p>{{album.title}}</p>
          <span>{{album.author}}</span>
          <p>{{album.year}}</p>
        </div>
      </div>
   </main>
 </div>

  <script src="./js/main.js"></script>
 </body>
 </html>