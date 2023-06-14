# RANGKAIAN IoT SEDERHANA SMART HOME BERBASIS ANDROID DAN WEBSITE

NAMA ANGGOTA KELOMPOK 
1. Yoga Tri Saputra 2009106106
2. Gilang Yuda Pratama 2009106119
3. Tjeng, Ivan Cahyadi 2009106146

Rangkaian IoT sederhana untuk smart home berbasis Android dan website adalah sistem yang menghubungkan perangkat elektronik di rumah Anda ke jaringan internet, memungkinkan Anda mengontrolnya melalui aplikasi Android di smartphone dan antarmuka web melalui browser.

Pada rangkaian ini, Anda akan menggunakan mikrokontroler, seperti Arduino Uno atau NodeMCU, yang terhubung ke sensor-sensor dan aktuator-aktuator di rumah Anda. Sensor-sensor seperti suhu, dan cahaya akan mengumpulkan data tentang kondisi lingkungan di sekitar rumah Anda, sedangkan aktuator-aktuator seperti relay atau modul transistor akan digunakan untuk mengendalikan perangkat elektronik seperti lampu.

Mikrokontroler akan terhubung ke jaringan Wi-Fi rumah Anda melalui modul Wi-Fi, seperti ESP8266 atau ESP32, sehingga memungkinkan Anda mengontrol perangkat-perangkat tersebut secara nirkabel melalui aplikasi Android pada smartphone Anda atau antarmuka web melalui browser.

Adapun aplikasi Android menggunakan platform pengembangan seperti Kodular, serta membuat antarmuka web dengan HTML, CSS, dan JavaScript. Aplikasi dan antarmuka web ini akan berfungsi sebagai kendali untuk mengirim perintah ke mikrokontroler, seperti menghidupkan atau mematikan perangkat, serta untuk menerima dan menampilkan data yang dikumpulkan oleh sensor-sensor.

Selain itu, Anda juga perlu menyediakan server atau cloud untuk menyimpan data dan memproses perintah dari aplikasi dan antarmuka web. Server atau cloud ini akan berfungsi sebagai penghubung antara mikrokontroler dan aplikasi/antarmuka web. disini kami menggunakan broiler.cloud.shiftr.io sebagai koneksi antar web, android dan wokwi. 

Dengan menggunakan rangkaian ini, Anda dapat mengendalikan perangkat-perangkat di rumah Anda secara praktis dan efisien melalui smartphone Android dan antarmuka web. Misalnya, Anda dapat menghidupkan lampu saat Anda tidak berada di rumah atau memantau suhu ruangan melalui aplikasi Android atau antarmuka web.

Rangkaian IoT sederhana ini merupakan langkah awal untuk membangun sistem smart home yang lebih kompleks dan dapat disesuaikan dengan kebutuhan dan preferensi Anda.

Komponen yang dibutuhkan:

1. Mikrokontroler dan Modul WiFi: ESP32
2. Sensor-sensor: DHT untuk menentukan temperature dan kelembaban ruangan. 
3. Smartphone Android: Gunakan smartphone Android sebagai perangkat untuk mengontrol sistem smart home, Kodular sebagai tools untuk membuat aplikasi android ini.
4. Server atau cloud: shiftr.io

PENJELASAN MENGENAI APLIKASI
<p>
<img src="https://github.com/gil037/UAS_IOT/blob/main/picture/aplikasi.jpg" height="500rm">
<p>
Pada Aplikasi ini kami memonitoring Temperature dan Kelembaban (Humadity) yang kami akses dari wokwi. selain itu juga kami menambahkan fitur controlling lampu, dalam hal ini yang dapat di kontrol adalah lampu bedroom, lampu living room, lampu balcony, dan lampu kitchen. berikut tampilan dari alat berjalan dengan lancar. 
<p>
<img src="https://github.com/gil037/UAS_IOT/blob/main/picture/wokwi.png" height="300rm">
<p>
untuk pembuatan alat nya kami tidak menggunakan alat asli, tetapi kami menggunakan simulasi iot yang free yaitu https://wokwi.com/.
  
untuk menampilkan data data yang diambil dari sensor akan di tampilkan pada website yang telah kami buat sendiri seperti berikut : 
<p>
<img src="https://github.com/gil037/UAS_IOT/blob/main/picture/web_temp.jpg"300rm">
<img src="https://github.com/gil037/UAS_IOT/blob/main/picture/web_humadity.jpg"300rm">
<p>
  
pada website kita bisa memonitoring perkembangan data sensor dan kedepannya dapat diolah menjadi dataset untuk keperluan riset. untuk aliran data sendiri sebelum menuju aplikasi dan website, dari wokwi akan melewati cloud services yang ada yaitu shiftr.io lalu dapat ditampilkan pada aplikasi dan wbsite. berikut tampilan dari aliran dan arus data :
<p>
<img src="https://github.com/gil037/UAS_IOT/blob/main/picture/shiftr.io.jpg"500rm">
<p>
