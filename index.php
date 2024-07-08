<!DOCTYPE html>
<html lang="id">
<meta charset='UTF-8'/>
<meta content='width=device-width, initial-scale=1, user-scalable=1, minimum-scale=1, maximum-scale=5' name='viewport'/>
<meta content='IE=edge' http-equiv='X-UA-Compatible'/>
  
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Shippori+Antique:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
<link href="https://feeldreams.github.io/heihbd/style.css" rel="stylesheet" type="text/css" />
<script src="https://unpkg.com/typeit@8.7.0/dist/index.umd.js"></script>
<script src="https://kit.fontawesome.com/4f3ce16e3e.js" crossorigin="anonymous"></script>
  
<head>
    <style>
/* Styling untuk elemen kadoIn */
#kadoIn {
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 50px 0; /* Jarak vertikal */
  position: relative; /* Posisi relatif untuk efek overlay */
  cursor: pointer; /* Menambahkan cursor pointer untuk tombol */
  border-radius: 25px; /* Sudut melengkung lebih besar */
  overflow: hidden; /* Menyembunyikan bagian yang melampaui border-radius */
  background: linear-gradient(135deg, #ff8a00, #da1d81); /* Gradient background yang menarik */
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5); /* Bayangan besar */
  transition: transform 0.5s ease, box-shadow 0.5s ease, filter 0.5s ease, background 0.5s ease; /* Transisi untuk hover */
  animation: float 3s ease-in-out infinite; /* Animasi float */
}

/* Efek saat hover pada kadoIn */
#kadoIn:hover {
  transform: scale(1.2) rotate(-3deg); /* Zoom dan putar sedikit saat hover */
  box-shadow: 0 25px 50px rgba(0, 0, 0, 0.6); /* Bayangan lebih besar */
  filter: brightness(1.2) contrast(1.2) saturate(1.5); /* Meningkatkan kecerahan, kontras, dan saturasi */
  background: linear-gradient(135deg, #f953c6, #b91d73); /* Gradient background yang berubah saat hover */
}

/* Animasi float */
@keyframes float {
  0%, 100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-10px);
  }
}

/* Styling untuk gambar fotoUlangTahunImg */
#fotoUlangTahunImg {
  width: 100%;
  height: 100%;
  object-fit: cover; /* Menjaga rasio gambar */
  border-radius: 25px; /* Sudut melengkung */
  transition: transform 0.5s ease, filter 0.5s ease; /* Transisi untuk hover */
  filter: brightness(0.9) grayscale(20%); /* Brightness dan grayscale ringan */
}

/* Efek saat hover pada fotoUlangTahunImg */
#kadoIn:hover #fotoUlangTahunImg {
  transform: scale(1.1); /* Zoom gambar saat hover */
  filter: brightness(1) grayscale(0%); /* Grayscale hilang dan kecerahan normal */
}

/* Styling untuk ket */
#ket {
  text-align: center;
  font-family: 'Dancing Script', cursive; /* Font yang bergaya */
  font-size: 36px; /* Ukuran font yang lebih besar */
  color: #ffffff; /* Warna putih untuk kontras */
  background: rgba(255, 255, 255, 0.3); /* Background putih transparan */
  padding: 20px 30px; /* Padding yang lebih besar */
  border-radius: 15px; /* Sudut melengkung */
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5); /* Bayangan */
  margin-top: 30px;
  font-weight: bold; /* Tebal */
  position: absolute;
  bottom: -50px; /* Jarak dari bagian bawah kadoIn */
  left: 50%;
  transform: translateX(-50%); /* Pusatkan secara horizontal */
  background: rgba(255, 255, 255, 0.6); /* Background putih transparan */
  text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.6); /* Bayangan teks lebih kuat */
  animation: bounce 2s infinite ease-in-out; /* Animasi bounce yang lebih dinamis */
}

/* Animasi bounce untuk ket */
@keyframes bounce {
  0%, 20%, 50%, 80%, 100% {
    transform: translateY(0);
  }
  40% {
    transform: translateY(-15px);
  }
  60% {
    transform: translateY(-7px);
  }
}

/* Styling tambahan untuk membuat desain lebih menarik */
@keyframes shimmer {
  0% {
    background-position: -1000px 0;
  }
  100% {
    background-position: 1000px 0;
  }
}

/* Efek shimmer pada kadoIn */
#kadoIn::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 200%;
  height: 100%;
  background: linear-gradient(120deg, rgba(255, 255, 255, 0.5) 25%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.5) 75%);
  animation: shimmer 2s infinite;
  opacity: 0.3;
  pointer-events: none;
}

/* Efek loading pada kadoIn */
#kadoIn:after {
  content: '';
  position: absolute;
  width: 80px;
  height: 80px;
  background: rgba(255, 255, 255, 0.6);
  border-radius: 50%;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.6);
  animation: pulse 1.5s infinite;
}

/* Animasi pulse */
@keyframes pulse {
  0% {
    transform: translate(-50%, -50%) scale(0.7);
    opacity: 0.8;
  }
  50% {
    transform: translate(-50%, -50%) scale(1.1);
    opacity: 0;
  }
  100% {
    transform: translate(-50%, -50%) scale(0.7);
    opacity: 0.8;
  }
}


    </style>
<title>Happy Birthday</title>
<link rel="icon" type="image/x-icon" href="https://malasid.github.io/favicon.png">
<meta name="description" content="HTML Bucin Malas.id">
<!-- 
  Made with love by Rayys!
  
     Blog: https://PalingIT.com
     Instagram: @rayyarrr
     TikTok: @rayy4r
     Email: rayyar0703@gmail.com
     
  Thanks to all <3
-->
</head>
<body>
	
   <!-- Ganti Audio di sini -->
   <audio src="Jamrud - Selamat Ulang Tahun (lyrics).mp3" id="linkmp3" class="sembunyi"></audio>
   s.
   <div id="bodyblur">
     <!-- Wallpaper --><img src="fadila2.jpg" id="wallpaper"/><div id="beneranblur"></div>
   </div>
   
   <div id='Content'>

     <div id="kadoIn">
       <!-- Tombol Surat --> <img src="fadila2.jpg" alt="Foto Ulang Tahun" id="fotoUlangTahunImg"/>
     </div>
     <p id="ket">Klik Gambar !</p>

     <div class="kumpulanstiker">
         <!-- Stiker untuk Konten -->
         <img src="https://feeldreams.github.io/bunga.gif" id="fotostiker"/>
         <img src="https://feeldreams.github.io/pusn.gif" id="fotostiker1"/>
         <img src="https://feeldreams.github.io/pandacoklat.gif" id="fotostiker2"/>
         <img src="https://feeldreams.github.io/cilukba.gif" id="fotostiker3"/>
         <img src="https://feeldreams.github.io/pandakuning.gif" id="fotostiker4"/>
         <img src="https://feeldreams.github.io/emawh.gif" id="fotostiker5"/>
         
         <img src="https://feeldreams.github.io/pandacoklat.gif" id="fotostiker6"/>
     </div>
     
     <p id="halo" class="halo"></p>
     
     <div><blockquote id='bq' data-text='㋡'>
       <p id="kalimat">Aku Ada Sesuatu Nih 🤣❤️</p>

       <p id="pesan1">Klik 4 LOVE di Bawah Ini Ya Sanak quuuuu! 😆❤️</p>
       <div id="kolombaru">
         <li id="lv1">🤍</li>
         <li id="lv2">🤍</li>
         <li id="lv3">🤍</li>
         <li id="lv4">🤍</li>
       </div>

       <p id="pesan2">Tunggu...</p>
       <!-- Pesan -->
       <p id="pesan3">Ciee.. Ada yang Ultah Nih 🤣❤️</p>
       <p id="pesan4">Happy Birthday, Sanak </p>
       <p id="pesan5" class="gaya2">Nambah tua aja ya, hehe</p>
       <p id="pesan6" class="gaya2">Selamat Ulang Tahun! 🎊🥳 Semoga umur panjang biar kita bisa makan bareng terus! Kalau bisa sih tiap hari, biar perutku tambah besar! 😂❤️</p>
        <p id="pesan7" class="gaya2">Semoga selalu sehat dan bahagia terus sanak! <br> kalau ada lebih bahagiahnya jangan lupa bagi2 sama aku yang ganteng ini ya..wkwkwkwk 🍕🎁</p>
       <p id="pesan8" class="gaya2">Canda wkwwk :v</p>
       <p id="pesan9" class="gaya2">Oh iya, semoga di hari spesialmu ini kamu dapat menjadi pribadi yang lebih baik yaa.. selalu sayang sama orang tua ya sanak,,sholat jangan pernah lupa ya sanak🥳❤️</p>
       <p id="pesan10" class="gaya2">Happy Level Up Day Sanak!! 🥳</p>

       <!-- Tombol Lanjut -->
       <p id="opsL">Klik untuk Lanjut</p>
     </blockquote></div>

     <!-- Tombol Kirim Pesan -->
     <div id="Tombol"><a id="By">&#128140; Lanjut</a></div>

     <!-- Pesan Tambahan -->
     <p id="katatambahan" class="sembunyi">Gajadi deh soalnya kamu bau wleee 😜</p>
     
     <!-- Pesan Ditolak -->
     <div id="pesanditolak">
       <img id="stikerditolak" src="https://feeldreams.github.io/weee.gif"/>
       <p id="kataditolak">Yaudah kalo gamau mh 😜</p>
     </div>

   </div>

<script>
  const body = document.querySelector("body");const swalst = Swal.mixin({timer: 2300, allowOutsideClick: false, showConfirmButton: false, timerProgressBar: true, imageHeight: 90,}); audio = new Audio('' + linkmp3.src); ftganti=0;fungsi=0;fungsiAwal=0;deffotostiker=fotostiker.src;function berjatuhan() {const heart = document.createElement("div"); heart.className = "fas fa-snowflake"; heart.style.left = (Math.random() * 90)+"vw"; heart.style.animationDuration = (Math.random()*3)+2+"s"; body.appendChild(heart);} setInterval(function name(params) {var heartArr = document.querySelectorAll(".fa-snowflake"); if (heartArr.length > 100) {heartArr[0].remove()}},100);Content.style = "opacity:1;margin-top:16vh"; const swals = Swal.mixin({allowOutsideClick: false, cancelButtonColor: '#FF0040', imageHeight: 80,}); 
	
  document.getElementById("kadoIn").onclick = function() {if(fungsiAwal==0){audio.play();fungsiAwal=1;kadoIn.style="transition:all .8s ease;transform:scale(10);opacity:0";wallpaper.style="transform: scale(1.5);";ket.style="display:none";setTimeout(initengahan,300);setTimeout(inipesan,500)}}
  
  async function inipesan(){
    var { value: nama } = await swals.fire({
           title: 'Masukin Nama Sanak..pangiilan aja', input: 'text',
       });
       if(nama && nama.length < 11){
         window.nama = nama;
         vketikhalo="Hai, " + nama + " ✨";
         mulainama();
         } else {
           await swals.fire('Ups!', 'Nama tidak boleh kosong atau lebih dari 10 karakter, ya!');inipesan();
    }
  }

  //Variable Pertanyaan Akhir
  var tanya = 'Mau Kado Gak Nih? 😶❤️';
  var opstanya = 'Ayo jawab 😆';
  var tompositif = 'Mau';
  var tomnegatif = 'Engga';
    
    async function menuju(){pesanwhatsapp = "Makasii udah ngucapin " + nama + " ultah ><";await swals.fire('OK!', 'Kirim jawabannya ke WhatsApp aku, ya!', 'success');window.location = "https://api.whatsapp.com/send?phone=&text=" + pesanwhatsapp;}
</script>
<script src="https://malasid.github.io/html/hbd.js"></script>
<!-- Sampai Sini -->
</body>
</html>
